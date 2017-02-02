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

Route::get('/', function () {
    return view('index');
});

Route::get('/ppp', function () {
    $scholarship = Scholarship::find(1);

    dd($scholarship->study());

});

Auth::routes();

Route::get('/register/school', 'SchoolRegistrationController@showSchoolRegistrationForm');
Route::post('/register/school', 'SchoolRegistrationController@register');

Route::get('/register/user/school', 'SchoolRegistrationController@showSchoolUserRegistrationForm');
Route::post('/register/user/school', 'SchoolRegistrationController@registerUserSchool');

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

Route::get('ttt', function () {
    $school = School::where('user_id', Auth::user()->id)->first();

    $filtered = auth()->user()->notifications->filter(function ($value, $key) use ($school) {
        return $value->data['school_id'] == $school->id;
    });

    dd($filtered);
});

Route::get('change/{role}', function ($role) {
    auth()->user()->role = $role;
    auth()->user()->save();
    return 'OK';
});

Route::get('/www', function () {
    $school = School::where('user_id', 21)->first();
    $levels = [];

    foreach ($school->type->level as $level) {
        array_push($levels, $level);

        foreach ($level->section as $section) {
            foreach ($section->study as $study) {
                $study->status = true;
            }
        }
    }

    $data = array(
        'levels' => $levels,
    );
    return $data;
});

Route::get('/panel/studies', function () {
    return view('panel.pages.profile.studies');
});

Route::get('qaz', function () {
    $school = School::where('user_id', auth()->user()->id)->first();

    $data = [];

    foreach ($school->study as $study) {
        array_push($data, Study::with('section.level')->where('id', $study->id)->get());
    }

    return $data;
});

//===== New Testing PUBLIC pages ======
Route::get('/public/profile/{id}', function ($id) {
    return view('public.school.profile')->withId($id);
});

Route::get('/public/results', function () {
    return view('public.results.schools');
});

Route::get('app/public/profile', function () {
    $school = School::where('user_id', auth()->user()->id)->first();

    return $school->name;
});

Route::post('/qwe', function () {
    $school = School::where('user_id', auth()->user()->id)->first();

    $school->study()->detach();

    foreach (request()->checkedStudies as $studyID) {
        $study = App\Models\Study::find($studyID);

        if (!$study->school->contains($school)) {
            $study->school()->attach($school);
        }
    }

    return 'OK';
});

Route::post('/post/scholarship/test', function () {
    $scholarship = new Scholarship;
    $scholarship->school_id = request()->school_id;
    $scholarship->financial_id = request()->financial_id;
    $scholarship->financial_amount = request()->financial_amount;
    $scholarship->study_id = request()->study_id;
    $scholarship->criteria_id = request()->criteria_id;
    $scholarship->end_at = request()->end_at;

    $scholarship->save();

    return 'OK';
});

Route::get('/results/{type}', function ($type) {
    $schools = School::with('image')->with('logo')->where('type_id', $type)->get();

    foreach ($schools as $s) {
        $s->lengthStudents = $s->lengthStudents();
        $s->lengthTeachers = $s->lengthTeachers();
        $s->lengthStudies = $s->lengthStudies();
        $s->lengthScholarships = $s->lengthScholarships();
    }
    return $schools;
});

Route::get('/profile/{school}', function (School $school) {

    $school->lengthStudents = $school->lengthStudents();
    $school->lengthTeachers = $school->lengthTeachers();
    $school->lengthStudies = $school->lengthStudies();
    $school->lengthScholarships = $school->lengthScholarships();

    $data = [];

    foreach ($school->study as $study) {
        array_push($data, App\Models\Study::with('section.level')->where('id', $study->id)->get());
    }

    $school->levels = $data;

    return $school->load('image', 'logo');
});
