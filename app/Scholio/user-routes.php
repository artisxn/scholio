<?php

Route::get('/student/profile', 'RoutesController@studentProfile')->name('students-profile');
Route::get('/teacher/profile', 'RoutesController@teacherProfile')->name('teachers-profile');
Route::get('/parent/profile', 'RoutesController@parentProfile')->name('parent-profile');
