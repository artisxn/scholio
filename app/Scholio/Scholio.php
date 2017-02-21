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

    public static function geocode($address)
    {
        $address = urlencode($address);

        $url = "http://maps.google.com/maps/api/geocode/json?address={$address}";

        $resp_json = file_get_contents($url);
        $resp = json_decode($resp_json, true);

        if ($resp['status'] == 'OK') {
            $lati = $resp['results'][0]['geometry']['location']['lat'];
            $longi = $resp['results'][0]['geometry']['location']['lng'];
            $formatted_address = $resp['results'][0]['formatted_address'];

            return ['lat' => $lati, 'lng' => $longi];
        } else {
            dd('NO');
        }
    }
}
