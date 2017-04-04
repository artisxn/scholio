<?php

namespace App\Scholio;

use App\Models\AlgoliaScholarship;
use App\Models\AlgoliaSchool;
use App\Models\AlgoliaStudy;
use App\Models\Dummy;
use App\Models\Image;
use App\Models\Scholarship;
use App\Models\School;
use App\Models\Study;
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
        AlgoliaStudy::truncate();

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

        foreach (Study::all() as $study) {
            $s = new AlgoliaStudy;
            $s->name = $study->name;
            $s->type = $study->type()->name;

            $schools = '';
            $cities = '';
            foreach ($study->school as $school) {
                $schools .= $school->name() . ',';
                $cities .= $school->city . ',';
            }
            $s->school = $schools;
            $s->city = $cities;

            $s->level = $study->level()->name;
            $s->section = $study->section[0]->name;
            $s->save();
        }

        // static::algoliaGEO();
        return 'OK';
    }

    public static function updateDummy(School $s)
    {
        $studyDummy = '.';
        $dummy = AlgoliaSchool::find($s->id);
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

    public static function createSchoolDummy(School $school)
    {
        $dummy = new AlgoliaSchool;
        $dummy->type_id = $school->type_id;
        $dummy->type = $school->type->name;
        $dummy->school_id = $school->id;
        $dummy->name = $school->name();
        $dummy->email = $school->email();

        $dummy->save();
    }

    public static function algoliaGEO()
    {
        $schools = AlgoliaSchool::all();
        $scholarships = AlgoliaScholarship::all();
        $scholarshipss = Scholarship::all();
        $schoolss = School::all();
        $studies = AlgoliaStudy::all();

        $geo = [];
        $geo1 = [];

        foreach ($scholarshipss as $val => $ss) {
            $geo[$val] = ['lat' => (double) $ss->school->lat, 'lng' => (double) $ss->school->lng];
        }

        foreach ($scholarships as $value => $s) {
            $s->_geoloc = collect($geo[$value]);
        }

        foreach ($schoolss as $val => $ss) {
            $geo1[$val] = ['lat' => (double) $ss->lat, 'lng' => (double) $ss->lng];
        }

        foreach ($schools as $value => $s) {
            $s->_geoloc = collect($geo1[$value]);
        }

        $schools->searchable();
        $scholarships->searchable();
        $studies->searchable();
        return 'Algolia _geo ready';
    }
}
