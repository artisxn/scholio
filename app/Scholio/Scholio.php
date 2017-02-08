<?php

namespace App\Scholio;

use Illuminate\Support\Facades\Route;

class Scholio
{
    public static function panelRoutes()
    {
        if (app()->environment('local')) {
            include 'development-routes.php';
        }

        Route::get('/dashboard', function () {
            return redirect('/panel/dashboard');
        });

        Route::get('/panel/dashboard', 'AdminPanelController@index');

        Route::get('/panel/notifications', 'AdminPanelController@notifications');

        Route::get('/panel/allusers', 'AdminPanelController@allUsers');

        Route::get('/panel/schools', 'AdminPanelController@schools');

        Route::get('/panel/profile', 'AdminPanelController@profile');

        Route::group(['middleware' => 'auth', 'prefix' => 'panel/users'], function () {
            include 'user-routes.php';
        });

        Route::group(['middleware' => 'auth', 'prefix' => 'panel/school'], function () {
            include 'school-routes.php';
        });

        Route::group(['middleware' => 'admin', 'prefix' => 'panel/admin'], function () {
            include 'admin-routes.php';
        });
    }
}
