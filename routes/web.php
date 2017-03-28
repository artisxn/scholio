<?php

use App\CategoryReview;
use App\Models\AlgoliaScholarship;
use App\Models\AlgoliaSchool;
use App\Models\Scholarship;
use App\Models\School;
use App\Scholio\Scholio;
use App\User;

// Route::post('/search/scholarships', function () {
//     $text = request()->text;
//     session()->put('search', $text);
//     return redirect('/public/scholarships');
// });

Route::get('/algolia/upload', function () {
    $schools = AlgoliaSchool::all();
    $scholarships = AlgoliaScholarship::all();
    $scholarshipss = Scholarship::all();

    $geo = [];

    foreach ($scholarshipss as $val => $ss) {
        $geo[$val] = ['lat' => (double) $ss->school->lat, 'lng' => (double) $ss->school->lng];
    }

    foreach ($scholarships as $value => $s) {
        $s->_geoloc = collect($geo[$value]);
    }

    // return $scholarships;

    $schools->searchable();
    $scholarships->searchable();
    return 'OK';
});

// Route::get('dummy/algolia', function () {

//     return 'OK';
// });

Route::get('aaa', function () {
    $review = new App\Models\Review;
    $review->user_id = 13;
    $review->school_id = 1;
    $review->text = 'RRR123';
    $review->save();

    $c = new CategoryReview;
    $c->review_id = 2;
    $c->category_id = 3;
    $c->stars = 5;
    $c->save();
});

Route::get('search/school/{q}', function ($q) {
    $schools = School::search($q)->get();
    return view('public.results.algolia-schools', compact('schools'));
});

Route::get('/settings', function () {
    if (auth()->user()->role == 'teacher') {

    }
    return view('panel.pages.school.settings.index');
})->middleware('auth');

Route::get('dashboard/profile', function () {
    if (auth()->user()->role == 'student') {
        return redirect(route('students-profile'));
    }

    if (auth()->user()->role == 'teacher') {
        return redirect(route('teachers-profile'));
    }

    if (auth()->user()->role == 'parent') {
        return redirect(route('parent-profile'));
    }
})->middleware('auth');

Route::get('@{username}', function ($username) {
    $user = User::where('username', $username)->first();
    $url = '';
    if ($user->role == 'teacher') {
        $url = '/public/profile/teacher';
    }
    if ($user->role == 'school') {
        $url = '/public/profile';
    }
    return redirect($url . '/' . $user->info->id);
});

Route::get('/scholarship/{scholarship}', 'RoutesController@scholarship');
Route::get('/scholarship/{scholarship}/edit', 'RoutesController@scholarshipEdit');
Route::post('/scholarship/{scholarship}/update', 'RoutesController@scholarshipUpdate');
Route::get('/scholarship/{scholarship}/delete', 'RoutesController@scholarshipDelete');

Route::get('algolia', function () {
    $schools = School::all();
    $schools->load('study.section.level', 'type', 'scholarship.study.section.level', 'scholarship.criteria', 'admin');
    $schools->searchable();
    $scholarships = Scholarship::all();
    $scholarships->load('study.section.level', 'school.admin', 'school.type', 'criteria');
    $scholarships->searchable();
    return 'OK';
});

Route::get('qqq/{q}', function ($q) {
    // $computer = App\Models\Study::search($q)->get();
    // $schol = App\Models\Scholarship::search($q)->get();
    $school = App\Models\School::search($q)->get();

    echo '<h1>School</h1> ';
    foreach ($school as $s) {
        echo $s->name() . '<br />';
    }
    return 'ok';
});
Route::get('/public/profile/teacher/{teacher}', 'TeachersController@index');

Route::get('connection/{id}/confirm', function ($id) {
    Scholio::connectUserWithSchool(auth()->user()->info, User::find($id));
    return 'OK';
});

Route::get('/', 'RoutesController@index');

Auth::routes();

Route::get('/register/school', 'SchoolRegistrationController@showSchoolRegistrationForm');
Route::post('/register/school', 'SchoolRegistrationController@register');

Scholio::panelRoutes();

Route::get('/token/register', 'RoutesController@token');

/*
|--------------------------------------------------------------------------
| Social Login Routes
|--------------------------------------------------------------------------
 */

Route::get('auth/{provider}/', 'SocialAuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'SocialAuthController@handleProviderCallback');

//===== New Testing PUBLIC pages ======
Route::get('/public/profile/{id}', 'RoutesController@publicProfile')->name('profile/school');
Route::get('/public/results/', function () {
    return redirect('public/results/all');
});
Route::get('/public/results/{id}', 'RoutesController@publicResults');
Route::get('connected/students', 'ApiController@connectedStudents');
Route::get('connected/teachers', 'ApiController@connectedTeachers');

Route::get('/connection/school/{school}', 'ApiController@connectionSchool')->middleware('auth');
Route::get('/test/results/{type}', 'ApiController@testResults');
Route::post('search/school/type', 'RoutesController@searchSchoolType');
Route::get('/test/{school}', 'RoutesController@testSchools');

/* ===== TESTING ROUTE FOR SCHOLARSIPS RESULTS ====== */
Route::get('/public/scholarships/', function () {
    return view('public.results.scholarships-test');
});

Route::get('/public/scholarships/d', function () {
    return view('public.results.scholarships');
});

/* ===== TESTING ROUTE FOR SCHOLARSIPS RESULTS ====== */
Route::get('/public/algolia/', function () {
    return view('public.results.algolia');
});
