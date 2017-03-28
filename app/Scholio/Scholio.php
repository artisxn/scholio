<?php

namespace App\Scholio;

use App\Models\AlgoliaScholarship;
use App\Models\AlgoliaSchool;
use App\Models\Dummy;
use App\Models\Image;
use App\Models\Scholarship;
use App\Models\School;
use Carbon\Carbon;
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

    public static function geocode($ad)
    {
        $address = urlencode($ad);

        $url = "http://maps.google.com/maps/api/geocode/json?address={$address}";

        $resp_json = file_get_contents($url);
        $resp = json_decode($resp_json, true);
        // dd($resp['results'][0]['geometry']['location']['lat']);

        if ($resp['status'] == 'OK') {
            $lati = $resp['results'][0]['geometry']['location']['lat'];
            $longi = $resp['results'][0]['geometry']['location']['lng'];
            $formatted_address = $resp['results'][0]['formatted_address'];

            return ['lat' => $lati, 'lng' => $longi];
        } else {
            return ('Geocode Error');
        }
    }

    public static function fakeDummy()
    {
        $schools = School::all();

        Dummy::query()->truncate();
        AlgoliaSchool::truncate();
        AlgoliaScholarship::truncate();

        foreach ($schools as $s) {
            $studyDummy = '';
            $dummy = new AlgoliaSchool;
            $dummy->type_id = $s->type_id;
            $dummy->type = $s->type->name;
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
            $dummy->stars = $s->averageStars();
            $dummy->reviews = $s->countReviews();
            $dummy->username = $s->admin->username ?? 'nousername';

            foreach ($s->study as $study) {
                $studyDummy .= $study->name . ',';
                $section = $study->section[0]->name;
                if (strpos($studyDummy, $section) == false) {
                    $studyDummy .= $study->section[0]->name . ',';
                }
                $level = $study->section[0]->level->name;
                if (strpos($studyDummy, $level) == false) {
                    $studyDummy .= $study->section[0]->level->name . ',';
                }

            }
            $dummy->study = $studyDummy;
            $dummy->save();

            $studyDummy = '';
            $dummy = new Dummy;
            $dummy->type_id = $s->type_id;
            $dummy->type = $s->type->name;
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
            $dummy->stars = $s->averageStars();
            $dummy->reviews = $s->countReviews();
            $dummy->username = $s->admin->username ?? 'nousername';

            foreach ($s->study as $study) {
                $studyDummy .= $study->name . ',';
                $section = $study->section[0]->name;
                if (strpos($studyDummy, $section) == false) {
                    $studyDummy .= $study->section[0]->name . ',';
                }
                $level = $study->section[0]->level->name;
                if (strpos($studyDummy, $level) == false) {
                    $studyDummy .= $study->section[0]->level->name . ',';
                }

            }
            $dummy->study = $studyDummy;
            $dummy->save();
        }

        foreach (Scholarship::all() as $scholarship) {
            $alg = new AlgoliaScholarship;
            $alg->scholarship_id = $scholarship->id;
            $alg->study = $scholarship->study->name;
            $alg->section = $scholarship->study->section[0]->name;
            $alg->level = $scholarship->level->name;
            $alg->criteria = $scholarship->criteria->name;
            $alg->school = $scholarship->school->name();
            $alg->school_id = $scholarship->school->id;
            $alg->school_logo = $scholarship->school->logo;
            $alg->city = $scholarship->school->city;
            $alg->address = $scholarship->school->address;
            $alg->type = $scholarship->school->type->name;
            $alg->financial_plan = $scholarship->financial->plan;
            $alg->financial_amount = (integer) $scholarship->financial_amount;
            $alg->financial_metric = $scholarship->financial->metric;
            $alg->financial_icon = $scholarship->financial->icon;
            $alg->exams = $scholarship->exam ? 'ΝΑΙ' : 'ΟΧΙ';
            $date = Carbon::createFromFormat('Y-m-d', $scholarship->end_at);
            $alg->end_at = $date->day . '/' . $date->month . '/' . $date->year;
            $alg->interested = $scholarship->interestsLength();
            $alg->requested = $scholarship->usersLength();
            $alg->save();
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
        $dummy->stars = $school->averageStars();
        $dummy->reviews = $school->countReviews();
        $img = Image::find($school->background);
        if ($img) {
            $dummy->background = $img->path;
        }
        $dummy->save();
    }
}
