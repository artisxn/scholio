<?php

use App\Models\Skill;
use App\Scholio\Scholio;

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

Route::get('qqq', function () {
    $user = App\User::find(46);

    $skill = App\Models\Skill::find(1);
    $user_from_id = auth()->user()->id;

    $end = $user->toggleEndorsement($user_from_id, $skill);
    return $end;
});

Route::get('ttt', function () {
    $user = App\User::find(45);
    $tskill = App\Models\Skill::find(2);

    return $user->skills()->where('skill_id', $tskill->id)->count();
});

Route::get('aaa', function () {
    $user = App\User::find(45);
    return $user->getUniqueSkills()->pluck('name');
});

Route::get('/public/profile/teacher/{teacher}', 'TeachersController@index');

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

Route::get('auth/{provider}', 'SocialAuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'SocialAuthController@handleProviderCallback');

//===== New Testing PUBLIC pages ======
Route::get('/public/profile/{id}', 'RoutesController@publicProfile');
Route::get('/public/results/{id}', 'RoutesController@publicResults');
Route::get('connected/students', 'ApiController@connectedStudents');
Route::get('connected/teachers', 'ApiController@connectedTeachers');
Route::get('/scholarship/{scholarship}', 'ApiController@scholarshipFind');
Route::get('/connection/school/{school}', 'ApiController@connectionSchool')->middleware('auth');
Route::get('/test/results/{type}', 'ApiController@testResults');
Route::post('search/school/type', 'RoutesController@searchSchoolType');
Route::get('/test/{school}', 'RoutesController@testSchools');
