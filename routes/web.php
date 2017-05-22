<?php

use App\Events\StudentAppliedOnScholarship;
use App\Models\Admission;
use App\Models\Scholarship;
use App\Models\School;
use App\Scholio\Scholio;
use App\User;

Scholio::soonRoutes();

Route::get('test', function () {
    return view('test');
});

Route::get('/lang/{locale}', function ($locale) {
    return back()->withCookie(cookie()->forever('lang', $locale));
});

Route::get('a/{scholarship}', function (Scholarship $scholarship) {
    event(new StudentAppliedOnScholarship(auth()->user(), $scholarship));
});

Route::post('/admission/{scholarship}/save', 'RoutesController@admissionSave');

Route::get('/public/schools/', function () {
    return view('public.results.schools-test');
});

Route::get('/settings', function () {
    $categories = App\Models\AdmissionCategory::all();
    $fields = App\Models\AdmissionField::all();
    return view('panel.pages.school.settings.index', compact('fields', 'categories'));
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

/* ===== TESTING ROUTE FOR SCHOLARSHIPS RESULTS ====== */
Route::get('/public/algolia/', function () {
    return view('public.results.algolia');
});

Route::post('/panel/student/cv', 'RoutesController@studentCvStore');

/* ===== TESTING ROUTE FOR SCHOLARSHIP ADMISSION ====== */
Route::get('/public/scholarship/admission/{user}/{scholarship}', function (User $user, Scholarship $scholarship) {
    // dd($user);
    return view('public.school.admission', compact('user', 'scholarship'));
});

/* ===== TESTING ROUTE FOR  ADMISSION  Student Profile ====== */
Route::get('/admission/{user}/{scholarship}', function (User $user, Scholarship $scholarship) {
    $admission = Admission::where('user_id', $user->id)->where('scholarship_id', $scholarship->id)->first();
    return view('public.school.student-profile', compact('admission', 'user', 'scholarship'));
});
