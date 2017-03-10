<?php

Route::get('/out', 'RoutesController@devOut');
Route::get('in/{data}/{dash?}', 'RoutesController@devIn');
