<?php

namespace App\Scholio;

use App\Models\AlgoliaDonorScholarship;
use App\Models\AlgoliaScholarship;
use App\Models\AlgoliaSchool;
use App\Models\AlgoliaStudy;
use App\Models\DonatedScholarship;
use App\Models\Dummy;
use App\Models\DummyScholarship;
use App\Models\Image;
use App\Models\Level;
use App\Models\Message;
use App\Models\Scholarship;
use App\Models\School;
use App\Models\SchoolTypes;
use App\Models\Section;
use App\Models\SocialLink;
use App\Models\Study;
use App\Models\Subscription;
use App\User;
use Carbon\Carbon;
use Facades\App\Scholio\ScholioTranslate;
use Illuminate\Support\Facades\Route;
use League\Flysystem\Exception;
use Facades\App\Scholio\ScholioSeed;

class Scholio
{
    public static function deleteUser(User $user)
    {
        if ($user->role == 'student') {
            // Delete all Reviews
            // $user->reviews->each->deleteReview();
            // Delete CV
            // $user->cv->delete();
            // Admissions & Interests ???
            $user->admissions->each->delete();
            $user->interested->each->detatch($user);
            // Delete Links
            // Scholarship - user connection (update algolia dummy)
            $user->scholarship->each->delete();
            // School - user connection (update algolia dummy)
            $user->connectedSchool->each->students()->toggle($user);
            //  info()
            // $user->info->delete();
            // USER
            // $user->delete();
        }

        if ($user->role == 'teacher') {
            // Scholarships
            // info()
            // USER
        }

        if ($user->role == 'school') {
            // Reviews
            // Images (with image-school pivot)
            // Scholarships (with likes and admissions)
            // Settings
        }
    }

    public static function soonRoutes()
    {
        Route::get('coming', function () {
            if (request()->cookie('lang') == 'el') {
                return view('soon.indexGR');
            }

            return view('soon.index');

        });

        Route::post('coming', function () {
            if (request()->sub == 'sub') {
                $subscription = new Message;
                $subscription->email = request()->email;
                $subscription->save();
            } else {
                $subscription = new Message;
                $subscription->name = request()->name;
                $subscription->email = request()->email;
                $subscription->message = request()->message;
                $subscription->save();
            }

            return redirect('/');
        });

        Route::get('full', function () {
            $response = redirect('/');
            return $response->withCookie(cookie('pass', 'iloveschool', 120));
        });

        Route::post('full', function () {
            $response = redirect('/');
            if (request()->password == 'iloveschool') {
                return $response->withCookie(cookie('pass', request()->password, 120));
            }

            return redirect('/comming');
        });

        Route::get('/messages', function () {
            $subscriptions = Subscription::all();
            $emails = $subscriptions->pluck('email');
            return view('soon.messages', compact('subscriptions', 'emails'));
        });
    }
    public static function panelRoutes()
    {
        include 'development-routes.php';

        Route::get('/dashboard', 'RoutesController@redirectDashboard');

        Route::get('/panel/dashboard', 'AdminPanelController@index');

        Route::get('/panel/notifications', 'AdminPanelController@notifications');

        Route::get('/panel/allusers', 'AdminPanelController@allUsers');

        Route::get('/panel/schools', 'AdminPanelController@schools');

        Route::get('/panel/profile', 'AdminPanelController@profile');

        Route::group(['middleware' => 'auth', 'prefix' => 'panel/users'], function () {
            include 'user-routes.php';
        });

        Route::group(['middleware' => ['auth', 'is.school'], 'prefix' => 'panel/school'], function () {
            include 'school-routes.php';
        });

        Route::group(['middleware' => 'is.admin', 'prefix' => 'panel/admin'], function () {
            include 'admin-routes.php';
        });
    }

    public static function geocode($ad)
    {
        $address = urlencode($ad);
        // dd($address);

        $url = "https://maps.google.com/maps/api/geocode/json?address={$address}&key=AIzaSyCQZammyxSxewFkb7Y9lNWroZLRuJlH14A";
        // AIzaSyCQZammyxSxewFkb7Y9lNWroZLRuJlH14A

        $resp_json = file_get_contents($url);
        $resp = json_decode($resp_json, true);
        // dd($resp['results'][0]['geometry']['location']['lat']);

        if ($resp['status'] == 'OK') {
            $lati = $resp['results'][0]['geometry']['location']['lat'];
            $longi = $resp['results'][0]['geometry']['location']['lng'];
            $formatted_address = $resp['results'][0]['formatted_address'];
            return ['lat' => $lati, 'lng' => $longi];
        } else {
            // dd($resp);
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

        foreach ($schools as $in => $s) {
            $studyDummy = '';
            $tagsDummy = '';
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
            $dummy->subscription = $s->admin->subscription->plan_id;
            $dummy->activeScholarships = $s->lengthScholarships() > 0 ? 'υποτροφια, scholarship, υποτροφιες' : '';

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

            foreach ($s->tag as $tag) {
                $tagsDummy .= $tag->name . ',';
            }

            $dummy->study = $studyDummy;
            $dummy->tags = $tagsDummy;
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
            // Na valw tis active
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
            $scholarTagsDummy = '';
            $studyDummy = '';
            $alg = new AlgoliaScholarship;
            $alg->scholarship_id = $scholarship->id;

            if ($scholarship->multiple) {
                foreach ($scholarship->multipleStudies as $study) {
                    $studyDummy .= $study->name;
                }
                $alg->study = $studyDummy;
                $alg->multiple = true;
                $alg->section = '';
            } else {
                $alg->study = $scholarship->study->name;
                $alg->section = $scholarship->study->section[0]->name;
                $alg->multiple = false;
            }
            $alg->level = $scholarship->level->name;
            $alg->criteria = $scholarship->criteria->name;
            $alg->criteria_id = $scholarship->criteria->id;

            $alg->school = $scholarship->school->name();
            $alg->school_id = $scholarship->school->id;
            $alg->school_logo = $scholarship->school->logo;
            $alg->city = $scholarship->school->city;
            $alg->address = $scholarship->school->address;
            $alg->type = $scholarship->school->type->name;
            $alg->type_id = $scholarship->school->type->id;
            $alg->financial_plan = $scholarship->financial->plan;
            $alg->financial_plan_id = $scholarship->financial->id;

            $alg->financial_amount = (integer) $scholarship->financial_amount;
            $alg->financial_metric = $scholarship->financial->metric;
            $alg->financial_icon = $scholarship->financial->icon;
            $alg->exams = $scholarship->exam ? 'y' : 'n';

            $date = Carbon::createFromFormat('Y-m-d', $scholarship->end_at);
            $alg->end_at = $date->day . '/' . $date->month . '/' . $date->year;
            $alg->interested = $scholarship->interestsLength();
            $alg->requested = $scholarship->usersLength();
            if (count($scholarship->tag)) {
                foreach ($scholarship->tag as $tag) {
                    $scholarTagsDummy .= $tag->name . ',';
                }
            }
            $alg->tags = $scholarTagsDummy;
            $alg->save();

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
            // Na valw tis active
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

        foreach (DonatedScholarship::all() as $scholarship) {
            $algD = new AlgoliaDonorScholarship;
            $algD->name = $scholarship->donor->user->name;
            $algD->avatar = $scholarship->donor->avatar;
            $algD->study = $scholarship->study;
            $algD->level = $scholarship->level;
            $algD->institution = $scholarship->institution;
            $algD->financial_amount = $scholarship->financial_amount;
            $algD->terms = $scholarship->terms;
            $algD->save();
        }

        static::algoliaGEO();
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
        $dummy->stars = (int) $s->averageStars();
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

        // $geo1 = [];
        // $geo1[$val] = ['lat' => (double) School::find($s->id)->lat, 'lng' => (double) School::find($s->id)->lng];

        // $dummy->_geoloc = collect($geo1[$value]);
        $dummy->starsInt = (int) School::find($s->id)->averageStars();
        $schools = AlgoliaSchool::all();
        $schools->searchable();
        return 'OK';
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
            $s->starsInt = (int) School::find($s->school_id)->averageStars();
        }

        $schools->searchable();
        $scholarships->searchable();
        $studies->searchable();
        return 'Algolia _geo ready';
    }

    public static function bot()
    {
        Route::group(['prefix' => 'bot'], function () {
            include 'bot-routes.php';
        });
    }

    public static function dummyScholarshipUpdate($scholarship)
    {
        $school = $scholarship->school;

        $dummy = $scholarship->dummy;
        $dummy->school_id = $school->id;
        $dummy->financial_plan = $scholarship->financial->plan;
        $dummy->financial_icon = $scholarship->financial->icon;
        $dummy->financial_amount = $scholarship->financial_amount;
        $dummy->financial_metric = $scholarship->financial->metric;
        $dummy->level_name = $scholarship->level->name;
        $dummy->criteria_name = $scholarship->criteria->name;
        $dummy->criteria_icon = $scholarship->criteria->name;
        $dummy->end_at = $scholarship->end_at;
        $dummy->admissions_length = count($scholarship->admission);

        $dummy->active = $scholarship->active;

        if ($scholarship->study_id == 0) {
            $dummy->study_name = 'Multiple Studies';
            $dummy->section_icon = 'studies';
        } else {
            $dummy->study_name = $scholarship->study->name;
            $dummy->section_icon = $scholarship->study->section[0]->name;
        }

        $dummy->save();
    }

    public static function dummyScholarshipCreate($scholarship)
    {
        $school = $scholarship->school;

        $dummy = new DummyScholarship;
        $dummy->school_id = $school->id;
        $dummy->scholarship_id = $scholarship->id;
        $dummy->financial_plan = $scholarship->financial->plan;
        $dummy->financial_icon = $scholarship->financial->icon;
        $dummy->financial_amount = $scholarship->financial_amount;
        $dummy->financial_metric = $scholarship->financial->metric;
        if ($scholarship->study_id == 0) {
            $dummy->study_name = 'Multiple Studies';
            $dummy->section_icon = 'studies';
        } else {
            $dummy->study_name = $scholarship->study->name;
            $dummy->section_icon = $scholarship->study->section[0]->name;
        }
        $dummy->level_name = $scholarship->level->name;
        $dummy->criteria_name = $scholarship->criteria->name;
        $dummy->criteria_icon = $scholarship->criteria->name;
        $dummy->end_at = $scholarship->end_at;
        $dummy->admissions_length = count($scholarship->admission);

        $dummy->active = $scholarship->active || 1;

        $dummy->save();
    }

    public static function dummyScholarshipDelete($scholarship)
    {
        $dummy = $scholarship->dummy;

        $dummy->delete();
    }

    public static function ProfileActive(School $school)
    {
        $haveAbout = $school->about && $school->about != '';
        $haveCity = $school->city && $school->city != '';
        $haveTel = $school->phone && $school->phone != '';
        $haveLogo = $school->logo && $school->logo != '';
        $have4Images = count($school->image) >= 4;
        $isApproved = $school->approved;
        $isVerified = $school->admin->status = 'verified';

        if ($haveAbout && $haveCity && $haveTel && $haveLogo && $have4Images && $isApproved) {
            return true;
        }

        return false;
    }

    public static function portalStudy($school, $level, $section, $study, $link = null)
    {
        $new = false;

        $l = Level::where('name', $level)->first();
        $newLevel = $l;

        if (count($l) == 0) {
            $newLevel = new Level;
            $newLevel->name = $level;
            $newLevel->school_types_id = $school->type->id;
            $newLevel->save();
        }

        $s = Section::where('name', $section)->where('level_id', $newLevel->id)->first();
        $newSection = $s;

        if (count($s) == 0) {
            $newSection = new Section;
            $newSection->name = $section;
            $newSection->level_id = $newLevel->id;
            $newSection->save();

            $new = true;
        }

        $st = Study::where('name', $study)->first();
        $newStudy = $st;

        if (count($st) == 0) {
            $newStudy = new Study;
            $newStudy->name = $study;
            $newStudy->save();

            $new = true;
        } else {
            if (count($newStudy->section)) {
                $newStudy = new Study;
                $newStudy->name = $study;
                $newStudy->save();

                $new = true;
            }
        }

        // dd($newStudy->section);

        // echo ($newSection);
        // dd($newStudy->id);

        if ($new) {
            $newStudy->section()->attach($newSection);
        }

        $school->study()->attach($newStudy, ['url' => $link]);
    }

    public static function portalSocial($school, $name, $link)
    {
        if (!$school->admin->socialLinks->pluck('name')->contains($name)) {
            $social = new SocialLink;
            $social->user_id = $school->admin->id;
            $social->name = $name;
            $social->link = $link;
            return $social->save();
        } else {
            $social = $school->admin->socialLinks;
            $s = $social->where('name', $name)->first();
            $s->link = $link;
            return $s->save();
        }
    }

    public static function makeWebp($image, $ext, $q = 35)
    {
        $path = '';
        if (\App::environment('local')) {
            $path = '/Users/apostolos/Documents/Work/scholio/public/';
        } else {
            $path = '/var/www/scholio/public/';
        }

        try {
            shell_exec('cwebp -q ' . $q . ' ' . $path . $image . ' -o ' . substr($path . $image, 0, strlen($ext) * -1) . 'webp');
        } catch (Exception $e) {
            echo $e;
        }

    }

    public function createSeoRegion()
    {
        $r = [];
        $c = [];
        $types = [];
        $all = [];

        foreach (SchoolTypes::all() as $type) {

            $cities = School::where('type_id', $type->id)->select('city')->distinct()->get();

            if (count($cities) > 0) {
                foreach ($cities as $city) {
                    $regions = School::where('type_id', $type->id)->where('city', $city['city'])->select('region')->orderBy('region')->distinct()->get();

                    foreach ($regions->pluck('region') as $region) {
                        $url = '/' . ScholioTranslate::translate($type->plural) . '/' . ScholioTranslate::greeklish($city['city'] . '/' . ScholioTranslate::greeklish($region));
                        array_push($r, ['name' => $region, 'url' => $url]);
                    }

                    $url = '/' . ScholioTranslate::translate($type->plural) . '/' . ScholioTranslate::greeklish($city['city']);
                    array_push($c, ['name' => $city['city'], 'url'=> $url, 'region' => $r]);
                    $r = [];

                }

                array_push($types, ['type' => $type->plural, 'city' => $c]);

                $c = [];
            }
        }

        return $types;
    }

    public function createSeoUrls()
    {
        $all = [];

        foreach (SchoolTypes::all() as $type) {

            $cities = School::where('type_id', $type->id)->select('city')->distinct()->get();

            if (count($cities) > 0) {
                foreach ($cities as $city) {
                    $regions = School::where('type_id', $type->id)->where('city', $city['city'])->select('region')->orderBy('region')->distinct()->get();

                    foreach ($regions->pluck('region') as $region) {
                        $url = '/' . ScholioTranslate::translate($type->plural) . '/' . ScholioTranslate::greeklish($city['city'] . '/' . ScholioTranslate::greeklish($region));
                        array_push($all, $url);
                    }

                    $url = '/' . ScholioTranslate::translate($type->plural) . '/' . ScholioTranslate::greeklish($city['city']);
                    array_push($all, $url);
                }
            }
        }

        return $all;
    }

    public function seed(){
        ScholioSeed::seed();
    }

    public function backupDB(){
        \Artisan::call('php artisan backup:run' ['--only-db --disable-notifications --only-to-disk google']);
    }
}
