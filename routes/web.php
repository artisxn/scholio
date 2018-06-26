<?php

use App\Models\School;
use App\Models\SchoolLinks;
use App\Models\Study;
use App\Models\StudyLinks;
use App\Scholio\Scholio;
use Illuminate\Support\Facades\Route;

// Scholio::soonRoutes();
Scholio::panelRoutes();
Scholio::bot();
Auth::routes();

Route::domain('demo.scholio.test')->group(function () {
    Route::get('/', 'RoutesController@index');
});

Route::get('/studylink/redirect/{school}/{study}/', function (School $school, Study $study) {

    if ($school->study->contains($study)) {
        $link = $school->study->find($study)->pivot->url;
        $ifnew = StudyLinks::where('study_id', $study->id)->where('school_id', $school->id)->first();
        if ($ifnew) {
            $ifnew->count = $ifnew->count + 1;
            $ifnew->save();
        } else {
            $newLink = new StudyLinks;
            $newLink->school_id = $school->id;
            $newLink->study_id = $study->id;
            $newLink->count = $newLink->count + 1;
            $newLink->save();
        }

        return redirect($link);
    }

    abort(404);

});

Route::get('/schoolink/redirect/{school}/', function (School $school) {
    if (!$school) {
        abort(404);
    }

    $ifnew = SchoolLinks::where('school_id', $school->id)->first();
    if ($ifnew) {
        $ifnew->count = $ifnew->count + 1;
        $ifnew->save();
    } else {
        $newLink = new SchoolLinks;
        $newLink->school_id = $school->id;
        $newLink->count = $newLink->count + 1;
        $newLink->save();
    }

    return redirect('http://' . $school->website);

});

Route::get('@{username}', 'RoutesController@username');
Route::get('/public/profile/{id}', 'RoutesController@publicProfile')->name('profile/school');

// Public
Route::get('/', 'RoutesController@index');
Route::get('/public/scholarships/', 'RoutesController@publicscholarships');
Route::get('/public/schools/', 'RoutesController@schools');
Route::get('/public/schools/map', 'RoutesController@schoolsMap');

// Passwords
Route::post('/password/change', 'RoutesController@changePassword')->middleware('auth');
Route::get('/password/change', 'RoutesController@changePasswordView')->middleware('auth');

// Register
Route::get('/register/role/', 'RoutesController@registerRole');

// Admins
Route::post('/school/approve/{school}', 'RoutesController@adminApproveSchool')->middleware('is.admin');
Route::post('/school/disapprove/{school}', 'RoutesController@adminDisapproveSchool')->middleware('is.admin');
Route::post('/school/deleteAlgolia/{school}', 'RoutesController@adminDeleteAlgoliaSchool')->middleware('is.admin');
Route::post('/report/delete/{report}', 'RoutesController@adminDeleteReport')->middleware('is.admin');
Route::post('/report/delete/all/{user}', 'RoutesController@adminDeleteAllReports')->middleware('is.admin');
Route::post('/admin/subscription', 'RoutesController@adminSubscriptionMake')->middleware(['auth', 'is.admin']);

// Other
Route::get('/card/{card}/delete', 'RoutesController@cardDelete');
Route::get('/terms', 'RoutesController@terms');
Route::get('/verifyemail/{token}', 'VerifyController@verify');
Route::get('/lang/{locale}', 'RoutesController@lang');
Route::get('dashboard/profile', 'RoutesController@dashboardProfile')->middleware('auth');
Route::get('/scholarship/{scholarship}', 'RoutesController@scholarship');
Route::get('/scholarship/{scholarship}/edit', 'RoutesController@scholarshipEdit');
// Route::post('/scholarship/{scholarship}/update', 'RoutesController@scholarshipUpdate');
Route::get('/scholarship/{scholarship}/delete', 'RoutesController@scholarshipDelete');
Route::get('/public/profile/teacher/{teacher}', 'TeachersController@index');
Route::get('connection/{id}/confirm', 'RoutesController@confirmConnectionSchoolUser'); // ?? Security...
Route::get('/register/school', 'SchoolRegistrationController@showSchoolRegistrationForm');
Route::get('/token/register', 'RoutesController@token');
Route::get('auth/{provider}/', 'SocialAuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'SocialAuthController@handleProviderCallback');
Route::get('/public/results/', 'RoutesController@publicResultsAll');
Route::get('/public/results/{id}', 'RoutesController@publicResults');
Route::get('connected/students', 'ApiController@connectedStudents');
Route::get('connected/teachers', 'ApiController@connectedTeachers');
Route::get('/connection/school/{school}', 'ApiController@connectionSchool')->middleware('auth');
Route::get('/test/results/{type}', 'ApiController@testResults');
Route::get('/test/{school}', 'RoutesController@testSchools');
Route::get('/public/scholarship/admission/{scholarship}', 'RoutesController@publicScholarshipAdmission');
Route::get('/student/{user}', 'RoutesController@student')->middleware('is.school:see.student');
Route::get('/userRole/save', 'RoutesController@userRole');

// Route::post('/register/school', 'SchoolRegistrationController@register');
Route::post('search/school/type', 'RoutesController@searchSchoolType');
Route::post('/report/add/{user}/{id}', 'RoutesController@report');
Route::post('scholarship/{scholarship}/end', 'RoutesController@endScholarship'); // Security...
Route::post('scholarship/{scholarship}/update', 'RoutesController@updateScholarship'); // Security...
Route::delete('scholarship/{scholarship}/delete', 'RoutesController@deleteScholarship'); // Security | Delete from Algolia
Route::post('/admission/{admission}/notes/save', 'RoutesController@deleteScholarship'); // Security...
Route::post('/admission/{scholarship}/save', 'RoutesController@admissionSave'); // Security...
