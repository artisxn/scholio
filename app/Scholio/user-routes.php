<?php

Route::get('/student/profile', function () {
    return view('panel.pages.student.profile.view');
})->name('students-profile');

Route::get('/teacher/profile', function () {
    return view('panel.pages.teacher.profile.view');
})->name('teachers-profile');

Route::get('/parent/profile', function () {
    return view('panel.pages.parent.profile.view');
})->name('parent-profile');
