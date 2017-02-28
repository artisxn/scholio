<?php

use App\Models\Scholarship;
use App\Models\Study;
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

Route::get('qqq/{q}', function ($q) {
    $computer = App\Models\Study::search($q)->get();
    $schol = App\Models\Scholarship::search($q)->get();
    $school = App\Models\School::search($q)->get();

    echo '<h1>School</h1> ';
    foreach ($school as $s) {
        echo $s->name() . '<br />';
    }

    echo '<h1>Scholarships</h1> ';
    foreach ($schol as $s) {
        $scholarship = Scholarship::find($s->id);
        echo 'ΙΔ: ' . $scholarship->id . '. Σχολείο: ' . $scholarship->school->name() . '<br />';
    }

    echo '<h1>Studies</h1> ';

    foreach ($computer as $s) {
        $study = Study::find($s->id);
        echo 'Μαθημα: ' . $study->name . ' - ';
        foreach ($study->school as $school) {
            echo ' Σχολειο: ' . $school->name();
        }
        echo '<br />';
    }
    return 'ok';
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
