<?php

use App\Events\UserAppliedOnSchool;
use App\Models\Scholarship;
use App\Models\School;
use App\Models\Skill;
use App\Models\Temp;
use App\Notifications\SchoolAcceptedUser;
use App\Scholio\Scholio;
use App\User;
use Illuminate\Http\Request;

Route::post('/request/school', function () {
    if (auth()->user()->role != 'school') {
        event(new UserAppliedOnSchool(auth()->user(), User::find(request()->school)));
        return 'OK';
    }

    return 'Error';
})->middleware('auth:api');

Route::post('/connection/{id}/confirm', function ($id) {
    $user = User::find($id);
    auth()->user()->info->users()->toggle($user);
    $user->notify(new SchoolAcceptedUser($user, auth()->user()));
    return 'Accepted';
})->middleware('auth:api');

Route::post('/connection/{id}/deny', function ($id) {
    // Figure out what else to do here
    return 'Denied';
})->middleware('auth:api');

Route::get('/user', 'ApiController@users')->middleware('auth:api');
Route::get('/users/all', 'ApiController@usersAll')->middleware('auth:api');
Route::get('/notifications', 'ApiController@notifications')->middleware('auth:api');
Route::get('/notifications/requests', 'ApiController@notificationsRequest')->middleware('auth:api');
Route::post('/notifications/read/{id}', 'ApiController@notificationsRead')->middleware('auth:api');
Route::get('/notifications/all', 'ApiController@notificationsAll')->middleware('auth:api');
Route::get('/schools/all', 'ApiController@schoolsAll')->middleware('auth:api');
Route::get('/school/id/{id}', 'ApiController@schoolId')->middleware('auth:api');
Route::get('/financial/id/{id}', 'ApiController@financialId')->middleware('auth:api');
Route::get('/scholarships/all', 'ApiController@scholarshipsAll')->middleware('auth:api');
Route::get('/scholarship/{school}', 'ApiController@scholarship')->middleware('auth:api');
Route::get('/school/studies', 'ApiController@studiesGET')->middleware('auth:api');
Route::post('/school/studies', 'ApiController@studiesPOST')->middleware('auth:api');
Route::get('/school/getSchoolStudies', 'ApiController@getStudies')->middleware('auth:api');
Route::get('/public/profile', 'ApiController@publicProfile')->middleware('auth:api');
Route::get('/school/{school}', 'ApiController@school')->middleware('api');
Route::get('/results/{type}', 'ApiController@results')->middleware('api');
Route::get('/profile/{school}', 'ApiController@schoolProfile')->middleware('api');
Route::get('/profile/auth/{school}', 'ApiController@schoolAuthProfile')->middleware('auth:api');
Route::post('/scholarship/save', 'ApiController@scholarshipSave')->middleware('auth:api');
Route::get('/scholarship/get/{scholarship}', 'ApiController@getScholarship')->middleware('api');
Route::post('/interested/save', 'ApiController@interestedSave')->middleware('auth:api');
Route::get('/interested/check', 'ApiController@interestedCheck')->middleware('auth:api');
Route::get('/school/types/all', 'ApiController@schoolTypes')->middleware('api');
Route::get('/socialLinks/get/{user}', 'ApiController@getSocialLinks')->middleware('api');
Route::post('/skills/set', function () {
    $user = User::find(request()->user);
    $skill = Skill::find(request()->skill);

    $end = $user->toggleEndorsement($skill);
    return $end;
})->middleware('auth:api');

Route::get('/skill/check', function () {
    $user = User::find(request()->user);
    $skill = Skill::find(request()->skill);

    $end = $user->checkSkill($skill);
    return $end;
})->middleware('auth:api');

Route::get('/student/mySchools', function () {
    $schools = auth()->user()->connectedSchool;
    return $schools->load('admin');

})->middleware('auth:api');

Route::get('/scholarship/{id}', function (Scholarship $id) {
    return $scholarship->load('school', 'level', 'financial', 'criteria');
})->middleware('api');

Route::get('/connected/students', function () {
    $school = auth()->user()->info;
    return $school->students->load('info');
})->middleware('auth:api');

Route::post('/registration/social', function () {

    $temp = Temp::firstOrNew(array('name' => 'social-role'));
    $temp->value = request()->role;
    $temp->save();

    // $temp = new Temp;
    // $temp->name = 'social-role';
    // $temp->value = request()->role;
    // $temp->save();
    return 'Stored!';
})->middleware('api');

Route::get('/terms/last', function () {
    $school = auth()->user();
    $scholarship = Scholarship::where('school_id', $school->id)->get();
    if ($scholarship->last()->terms != null) {
        return $scholarship->last()->terms;
    }
    return 'NO';
})->middleware('auth:api');

Route::post('/image/background/save', function () {
    $school = auth()->user()->info;
    $school->background = request()->image;
    $school->save();
    Scholio::updateDummy($school);
    return 'OK';
})->middleware('auth:api');

Route::post('/school/settings', function () {
    $school = auth()->user()->info;
    $settings = $school->settings;
    $settings->{request()->name} = request()->section;
    $settings->save();
    return 'OK';
})->middleware('auth:api');
