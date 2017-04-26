<?php
Route::get('scholarship/{scholarship}', 'RoutesController@scholarship');
Route::get('scholarships/create', 'AdminPanelController@scholarshipCreate')->name('scholarship-create');
Route::get('scholarships/view', 'AdminPanelController@scholarshipView')->name('scholarship-view');
Route::get('scholarships/request', 'AdminPanelController@scholarshipRequest')->name('scholarship-request');
Route::get('dashboard', 'AdminPanelController@dashboard')->name('dashboard');
Route::get('studies', 'AdminPanelController@studies')->name('studies-select');
Route::get('/teachers', 'AdminPanelController@teachers')->name('teachers');
Route::get('/students', 'AdminPanelController@students')->name('students');
Route::get('profile/images', 'AdminPanelController@imageProfile')->name('profile-images');
Route::get('profile', 'AdminPanelController@editProfile')->name('profile-edit');
Route::post('profile/{id}', 'AdminPanelController@updateProfile');
Route::get('requests', 'AdminPanelController@requests')->name('requests');
Route::post('profile/images/upload', 'AdminPanelController@imagesUpload');
Route::delete('profile/images/upload', 'AdminPanelController@imageDelete');
