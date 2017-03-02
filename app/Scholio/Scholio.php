<?php

namespace App\Scholio;

use App\Dummy;
use App\Models\Image;
use App\Models\Scholarship;
use App\Models\School;
use App\User;
use Illuminate\Support\Facades\Route;

class Scholio
{
    public static function panelRoutes()
    {
        if (app()->environment('local')) {
            include 'development-routes.php';
        }

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

    public function interested($studentID, $scholarshipID)
    {
        $student = User::find($studentID);
        $scholarship = Scholarship::find($scholarshipID);
        $student->interested()->toggle($scholarship);
    }

    public function createImages($school, $path, $from, $until)
    {
        for ($i = $from; $i <= $until; $i++) {
            $image = factory(Image::class)->create(['type' => 'Image', 'path' => $path . 'pic' . $i . '.jpg', 'full_path' => $path . 'pic' . $i . '.jpg']);
            $school->image()->toggle($image);
        }
    }

    public function createStudy($school, $id)
    {
        foreach ($id as $key) {
            $school->study()->attach(Study::find($key));
        }
    }

    public function createUsers($school, $type, $id)
    {
        if ($type == 'student') {
            foreach ($id as $key) {
                $school->users()->toggle(User::find($key));
            }
        } else {
            foreach ($id as $key) {
                $school->users()->toggle(User::find($key));
            }
        }
    }

    public function connectUserWithSchool(School $school, User $user)
    {
        $school->users()->toggle($user);
        static::updateDummy($school);
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
        $dummy->save();
    }
}
