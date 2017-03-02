<?php

use App\Events\UserAppliedOnSchool;
use App\Events\UserRegistered;
use App\User;
//ONLY FOR DEVELOPMENT
//
//
Route::get('register/{user}', function (User $user) {
    event(new UserRegistered($user));
});

Route::get('connect/school/{user}', function (User $user) {
    event(new UserAppliedOnSchool(auth()->user(), $user));
});

Route::get('/out', 'RoutesController@devOut');
Route::get('in/{data}', 'RoutesController@devIn');
