<?php

Route::get('/student/profile', 'RoutesController@studentProfile')->name('students-profile');
Route::get('/student/mySchools', 'RoutesController@mySchools')->name('students-my-schools');

Route::get('/teacher/profile', 'RoutesController@teacherProfile')->name('teachers-profile');
Route::get('/parent/profile', 'RoutesController@parentProfile')->name('parent-profile');
