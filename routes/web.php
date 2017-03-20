<?php

use App\Models\Scholarship;
use App\Models\School;
use App\Scholio\Scholio;
use App\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('dummy/algolia', function () {
    $studyDummy = '';

    foreach (School::all() as $school) {
        $al = new App\AlgoliaSchool;
        $al->name = $school->name();
        $al->username = $school->admin->username ?? 'nousername';
        $al->address = $school->address;
        $al->city = $school->city;
        $al->type = $school->type->name;
        $al->_geoloc = json_encode(array('lat' => $school->lat, 'lng' => $school->lng), JSON_FORCE_OBJECT);

        foreach ($school->study as $study) {
            $studyDummy .= $study->name . ',';

            $section = $study->section[0]->name;
            if (strpos($studyDummy, $section) == false) {
                $studyDummy .= $study->section[0]->name . ',';
            }
            $level = $study->section[0]->level->name;
            if (strpos($studyDummy, $level) == false) {
                $studyDummy .= $study->section[0]->level->name . ',';
            }

        }

        $al->study = $studyDummy;
        $al->save();
    }

    foreach (Scholarship::all() as $scholarship) {
        $alg = new App\AlgoliaScholarship;
        $alg->study = $scholarship->study->name;
        $alg->section = $scholarship->study->section[0]->name;
        $alg->level = $scholarship->level->name;
        $alg->criteria = $scholarship->criteria->name;
        $alg->school = $scholarship->school->name;
    }

});

Route::get('search/scholarship/{q}', function ($q) {
    $scholarships = Scholarship::search($q)->get();
    foreach ($scholarships as $s) {
        echo $s->school->name() . ' - ' . $s->criteria->name . ' - ' . $s->study->name . '<br>';
    }
    // return view('public.results.algolia-schools', compact('schools'));
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
    return view('public.results.scholarships');
});

/* ===== TESTING ROUTE FOR SCHOLARSIPS RESULTS ====== */
Route::get('/public/algolia/', function () {
    return view('public.results.algolia');
});

