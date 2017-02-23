<?php
//ONLY FOR DEVELOPMENT

Route::get('/out', 'RoutesController@devOut');
Route::get('in/{data}', 'RoutesController@devIn');
