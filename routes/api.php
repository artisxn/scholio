<?php

Route::get('/user', 'ApiController@users')->middleware('auth:api');
Route::get('/users/all', 'ApiController@usersAll')->middleware('auth:api');
Route::get('/notifications', 'ApiController@notifications')->middleware('auth:api');
Route::get('/notifications/requests', 'ApiController@notificationsRequest')->middleware('auth:api');
Route::post('/notifications/read', 'ApiController@notificationsRead')->middleware('auth:api');
Route::get('/notifications/all', 'ApiController@notificationsAll')->middleware('auth:api');
Route::get('/schools/all', 'ApiController@schoolsAll')->middleware('auth:api');
Route::get('/school/id/{id}', 'ApiController@schoolId')->middleware('auth:api');
Route::get('/financial/id/{id}', 'ApiController@financialId')->middleware('auth:api');
Route::get('/scholarships/all', 'ApiController@scholarshipsAll')->middleware('auth:api');
Route::get('/scholarship/{school}', 'ApiController@scholarship')->middleware('auth:api');
Route::get('/school/studies', 'ApiController@studiesGET')->middleware('auth:api');
Route::post('/school/studies', 'ApiController@studiesPOST')->middleware('auth:api');
Route::get('/school/getSchoolStudies', 'ApiController@getStudies')->middleware('auth:api');
Route::get('/public/profile', 'ApiController@publicProfile')->middleware('auth:api');
Route::get('/school/{school}', 'ApiController@school')->middleware('api');
Route::get('/results/{type}', 'ApiController@results')->middleware('api');
Route::get('/profile/{school}', 'ApiController@schoolProfile')->middleware('api');
Route::post('/scholarship/save', 'ApiController@scholarshipSave')->middleware('auth:api');
Route::get('/scholarship/{scholarship}', 'ApiController@getScholarship')->middleware('api');
Route::post('/interested/save', 'ApiController@interestedSave')->middleware('auth:api');
Route::get('/interested/check', 'ApiController@interestedCheck')->middleware('auth:api');
Route::get('/school/types/all', 'ApiController@schoolTypes')->middleware('api');
