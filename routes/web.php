<?php

use App\Models\Scholarship;
use App\Models\School;
use App\Models\Study;
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

Route::get('/test/{school}', function (School $school) {

    $school->lengthStudents = $school->lengthStudents();
    $school->lengthTeachers = $school->lengthTeachers();
    $school->lengthStudies = $school->lengthStudies();
    $school->lengthScholarships = $school->lengthScholarships();

    $data = [];

    foreach ($school->study as $study) {
        array_push($data, App\Models\Study::with('section.level')->where('id', $study->id)->get());
    }

    $school->levels = $data;

    return $school->load('image', 'scholarship.financial', 'scholarship.criteria');
});

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/register/school', 'SchoolRegistrationController@showSchoolRegistrationForm');
Route::post('/register/school', 'SchoolRegistrationController@register');

Scholio::panelRoutes();

Route::get('/token/register', function () {
    return view('panel.token');
});

/*
|--------------------------------------------------------------------------
| Social Login Routes
|--------------------------------------------------------------------------
 */

Route::get('auth/{provider}', 'SocialAuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'SocialAuthController@handleProviderCallback');

/*|--------------------------------------------------------------------------
| Test Routes (FOR DEVELOPMENT PURPOSES ONLY)
|--------------------------------------------------------------------------
 */

Route::get('test/register/user', function () {
    event(new App\Events\UserRegistered(App\User::first()));
});

//===== New Testing PUBLIC pages ======
Route::get('/public/profile/{id}', function ($id) {
    return view('public.school.profile')->withId($id);
});

Route::get('/public/results', function () {
    return view('public.results.schools');
});

Route::get('connected/students', function () {
    $school = School::where('user_id', auth()->user()->id)->first();
    $users = $school->users;
    $students = [];
    foreach ($users as $user) {
        if ($user->role == "student") {
            array_push($students, $user);
        }

    }

    $data = array(
        'students' => $students,
    );

    return $data;
});

Route::get('connected/teachers', function () {
    $school = School::where('user_id', auth()->user()->id)->first();
    $users = $school->users;
    $teachers = [];
    foreach ($users as $user) {
        if ($user->role == "teacher") {
            array_push($teachers, $user);
        }

    }

    $data = array(
        'teachers' => $teachers,
    );

    return $data;
});

Route::get('/scholarship/{scholarship}', function (Scholarship $scholarship) {
    $scholarship->length = $scholarship->usersLength();
    return $scholarship->load('financial', 'criteria');
});

Route::get('/connection/school/{school}', function (School $school) {
    $school->users()->attach(auth()->user());
    return 'OK';
})->middleware('auth');

Route::get('/test/results/{type}', function ($type) {
    $schools = School::with('image')->where('type_id', $type)->get();

    foreach ($schools as $s) {
        $s->lengthStudents = $s->lengthStudents();
        $s->lengthTeachers = $s->lengthTeachers();
        $s->lengthStudies = $s->lengthStudies();
        $s->lengthScholarships = $s->lengthScholarships();
    }
    return $schools;
});
