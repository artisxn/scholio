<?php

use Carbon\Carbon;

Route::group(['middleware' => 'is.student', 'prefix' => 'student'], function () {
    Route::post('/delete', 'RoutesController@studentDelete')->name('students-delete');
    Route::get('/profile', 'RoutesController@studentProfile')->name('students-profile');
    Route::get('/mySchools', 'RoutesController@mySchools')->name('students-my-schools');
    Route::get('/studentCv', 'RoutesController@studentCv')->name('students-cv');
    Route::get('/kinship', 'RoutesController@studentKinship')->name('students-kinship');
    Route::get('/review/show', 'RoutesController@reviewShow')->name('student-review-show');
    Route::get('/review/create/{school}', 'RoutesController@reviewCreate')->name('student-review-create');
    Route::get('/scholarship/request', function(){
        $admissions = auth()->user()->admissions->load('scholarship');
        return view('panel.pages.student.scholarships.requests', compact('admissions'));
    })->name('student-scholarship-request');
    // Route::get('/class/show', 'RoutesController@classShow')->name('student-class-show');
    // Route::get('/class/{lecture}', 'RoutesController@classLecture')->name('student-class-lecture');
});

Route::group(['middleware' => 'is.teacher', 'prefix' => 'teacher'], function () {
    Route::get('/profile', 'RoutesController@teacherProfile')->name('teachers-profile');
    Route::get('/class/show', 'RoutesController@teacherClassShow');
    Route::get('/class/{lecture}', 'RoutesController@teacherClassLecture');
    Route::post('/class/{lecture}/badge/{student}', 'RoutesController@teacherClassBadge');
});

Route::get('/parent/profile', 'RoutesController@parentProfile')->name('parents-profile');
