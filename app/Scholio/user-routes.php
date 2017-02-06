<?php

Route::get('/student/profile', function () {
    return view('panel.pages.student.profile.view');
})->name('students-profile');

Route::get('/teacher/profile', function () {
    return view('panel.pages.teacher.profile.view');
})->name('teachers-profile');
