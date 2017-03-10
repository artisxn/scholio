<?php

namespace App\Scholio;

use App\Models\Dummy;
use App\Models\Image;
use App\Models\School;
use Illuminate\Support\Facades\Route;

class Scholio
{
    public static function panelRoutes()
    {
        include 'development-routes.php';
        // if (app()->environment('local')) {
        //     include 'development-routes.php';
        // }

        Route::get('/dashboard', 'RoutesController@redirectDashboard');

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
            return 'GEOCODE ERROR';
        }
    }

    public static function fakeDummy()
    {
        $schools = School::all();

        Dummy::query()->truncate();

        foreach ($schools as $s) {
            $dummy = new Dummy;
            $dummy->type_id = $s->type_id;
            $dummy->school_id = $s->id;
            $dummy->name = $s->name();
            $dummy->email = $s->email();
            $dummy->phone = $s->phone;
            $dummy->city = $s->city;
            $dummy->address = $s->address;
            $dummy->logo = $s->logo;
            $dummy->image = $s->profileImage();
            $dummy->website = $s->website;
            $dummy->lengthStudents = $s->lengthStudents();
            $dummy->lengthTeachers = $s->lengthTeachers();
            $dummy->lengthStudies = $s->lengthStudies();
            $dummy->lengthScholarships = $s->lengthScholarships();
            $dummy->lat = $s->lat;
            $dummy->lng = $s->lng;
            $dummy->save();
        }
        return 'OK';
    }

    public static function updateDummy(School $school)
    {
        $dummy = $school->dummy;
        $dummy->name = $school->name();
        $dummy->email = $school->email();
        $dummy->phone = $school->phone;
        $dummy->city = $school->city;
        $dummy->address = $school->address;
        $dummy->logo = $school->logo;
        $dummy->image = $school->profileImage();
        $dummy->website = $school->website;
        $dummy->lengthStudents = $school->lengthStudents();
        $dummy->lengthTeachers = $school->lengthTeachers();
        $dummy->lengthStudies = $school->lengthStudies();
        $dummy->lengthScholarships = $school->lengthScholarships();
        $dummy->lat = $school->lat;
        $dummy->lng = $school->lng;
        $img = Image::find($school->background);
        $dummy->background = $img->path;
        $dummy->save();
    }
}
