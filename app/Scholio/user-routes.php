<?php

use App\Models\Skill;
use App\Models\University;

Route::group(['middleware' => 'is.student', 'prefix' => 'student'], function () {
    Route::post('/delete', 'RoutesController@studentDelete')->name('students-delete');
    Route::get('/profile', 'RoutesController@studentProfile')->name('students-profile');
    Route::get('/mySchools', 'RoutesController@mySchools')->name('students-my-schools');
    Route::get('/studentCv', 'RoutesController@studentCv')->name('students-cv');
    Route::get('/kinship', 'RoutesController@studentKinship')->name('students-kinship');
    Route::get('/review/show', 'RoutesController@reviewShow')->name('student-review-show');
    Route::get('/review/create/{school}', 'RoutesController@reviewCreate')->name('student-review-create');
    Route::get('/scholarship/request', function () {
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
    Route::get('/cv', function () {
        // return auth()->user()->works;
        $skills = Skill::all()->pluck('name');
        $cert = University::all()->pluck('name');
        // $uni = Un
        return view('panel.pages.teacher.profile.cv', compact('skills', 'cert'));
    })->name('teacher-cv');

    Route::post('/cv/update/about', function () {
        $teacher = auth()->user()->info;
        $about = request()->about;

        $teacher->about = $about;
        $teacher->save();
        return redirect('panel/users/teacher/cv');
    })->name('cv-about-post');

    Route::post('/profile', function () {
    })->name('teachers-profile');

    Route::get('/schools', function () {
        // dd(auth()->user()->connectedSchool()->first()->pivot->status);
        return view('panel.pages.teacher.profile.schools');
    })->name('teachers-schools');
});

Route::get('/parent/profile', 'RoutesController@parentProfile')->name('parents-profile');
