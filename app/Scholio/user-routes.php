<?php

use App\Models\School;

Route::get('/student/profile', 'RoutesController@studentProfile')->name('students-profile');
Route::get('/student/mySchools', 'RoutesController@mySchools')->name('students-my-schools');

Route::get('/teacher/profile', 'RoutesController@teacherProfile')->name('teachers-profile');
Route::get('/parent/profile', 'RoutesController@parentProfile')->name('parent-profile');

Route::get('/review/show', function () {
    $reviews = auth()->user()->reviews;
    return view('panel.pages.student.reviews.show', compact('reviews'));
});

Route::get('/review/create/{school}', function (School $school) {
    if (auth()->user()->isConnectedWithSchool($school) && !auth()->user()->reviewedSchool($school)) {
        return view('panel.pages.student.reviews.create', compact('school'));
    }
    return redirect('/panel/users/review/show');
})->middleware('auth');
