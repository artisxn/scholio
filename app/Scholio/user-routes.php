<?php

Route::get('/student/profile', function () {
    return view('panel.pages.student.profile.view');
});

Route::get('/teacher/profile', function () {
    return view('panel.pages.teacher.profile.view');
});
