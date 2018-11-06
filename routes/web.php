<?php

use App\Models\AlgoliaSchool;
use App\Models\DummyLevelsData;
use App\Models\Json;
use App\Models\Level;
use App\Models\School;
use App\Models\SchoolLinks;
use App\Models\SchoolSetting;
use App\Models\SchoolTypes;
use App\Models\Section;
use App\Models\Study;
use App\Models\StudyLinks;
use App\Scholio\Scholio;
use Facades\App\Scholio\ScholioTranslate;
use Illuminate\Support\Facades\Route;
// auth()->loginUsingId(70);
// Scholio::soonRoutes();
Scholio::panelRoutes();
// Scholio::bot();
Auth::routes();

Route::view('gdpr', 'gdpr');

// Route::view('/public/schools/colleges', 'public/results/seo/seo');

Route::get('/test', function () {
    Facades\App\Scholio\Scholio::dummyLevelsDataNots();
});

Route::get('/database/backup', function () {
    // try {
    //     Facades\App\Scholio\Scholio::backupDB();
    // } catch (\Exception $e) {
    //     dd($e->getMessage());
    // }

    session()->flash('backup_db', 'Database Backup Done!');
    return back();
});

Route::get('/sitemap/schools', function () {
    $json = Json::where('name', 'seoRegion')->get()->first()->data;
    $schools = json_decode($json, true);

    return view('public.sitemap-schools', compact('schools'));
});

Route::get('/catalog/{type}/{city}/{region}', function ($type, $city, $region) {
    $originalType = ScholioTranslate::original($type);
    $originalCity = ScholioTranslate::original($city);
    $originalRegion = ScholioTranslate::original($region);

    $search = $originalType . ' ' . $originalCity . ' ' . $originalRegion;

    $schooltype = SchoolTypes::where('plural', $originalType)->get()->first();
    $cities = School::where('type_id', $schooltype->id)->where('city', $originalCity)->select('city', 'region')->orderBy('region')->distinct()->get();

    $regions = [];

    foreach ($cities as $c) {
        $url = '/' . $type . '/' . $city . '/' . ScholioTranslate::greeklish($c['region']);
        array_push($regions, ['name' => $c['region'], 'url' => $url]);
    }

    $schools = School::where('city', $originalCity)->where('type_id', $schooltype->id)->where('region', $originalRegion)->get();
    $settings = SchoolSetting::all()->pluck('statistics');
    $reviews = SchoolSetting::all()->pluck('reviews');

    $title = $originalType . ' ' . $originalCity . ' ' . $originalRegion;
    $description = 'Ποιά είναι τα καλύτερα και δημοφιλέστερα ' . $schooltype->plural . ' στην πόλη ' . $originalCity;

    return view('public.results.seo.seo')->withSettings($settings)->withReviews($reviews)->withSchools($schools)->withTitle($title)->withRegions($regions)->withDescription($description);
});

Route::get('/catalog/{type}/{city}/', function ($type, $city) {
    $originalType = ScholioTranslate::original($type);
    $originalCity = ScholioTranslate::original($city);

    $search = $originalType . ' ' . $originalCity;

    $schooltype = SchoolTypes::where('plural', $originalType)->get()->first();
    $cities = School::where('type_id', $schooltype->id)->where('city', $originalCity)->select('city', 'region')->orderBy('region')->distinct()->get();

    $regions = [];

    foreach ($cities as $c) {
        $url = '/' . $type . '/' . $city . '/' . ScholioTranslate::greeklish($c['region']);
        array_push($regions, ['name' => $c['region'], 'url' => $url]);
    }

    $schools = School::where('city', $originalCity)->where('type_id', $schooltype->id)->get();
    $settings = SchoolSetting::all()->pluck('statistics');
    $reviews = SchoolSetting::all()->pluck('reviews');

    $title = $originalType . ' ' . $originalCity;
    $description = 'Ποιά είναι τα καλύτερα και δημοφιλέστερα ' . $schooltype->plural . ' στην πόλη ' . $originalCity;
    return view('public.results.seo.seo')->withSettings($settings)->withReviews($reviews)->withSchools($schools)->withTitle($title)->withRegions($regions)->withDescription($description);
});

Route::get('zxc', function () {
    $row = 1;
    if (($handle = fopen("csv/iii.csv", "r")) !== false) {
        while (($data = fgetcsv($handle, 1000, ",")) !== false) {
            if ($row > 1) {
                $type_id = $data[0];
            }
            $row++;
        }
        fclose($handle);
    }
});

Route::get('/dummytest/{from}/{to}', function ($from, $to) {
    ini_set('max_execution_time', 500);
    foreach (School::all() as $school) {
        if ($school->id >= $from && $school->id <= $to) {

            $studies = [];
            $data = [];
            $sections = [];

            $schoolLevels = $school->levels();
            $levelsCounter = 0;

            foreach ($schoolLevels as $level) {
                $levelsCounter++;
                foreach ($school->section($level) as $section) {
                    foreach ($school->studyFromSection($section) as $study) {
                        array_push($studies, ['study' => Study::find($study)->load('user'), 'link' => $school->study()->where('study_id', $study)->first()->pivot->url]);
                    }

                    array_push($sections, ['section' => Section::find($section), 'studies' => $studies]);
                    $studies = [];
                }
                array_push($data, ['level' => Level::find($level), 'sections' => $sections]);
                $sections = [];
            }
            // dd();

            $dump = new DummyLevelsData;
            $dump->school_id = $school->id;
            $dump->data = json_encode($data);
            $dump->save();
        }
    }
});

Route::get('aaqq', function () {
    ini_set('max_execution_time', 500);
    foreach (AlgoliaSchool::all() as $alg) {
        $school = School::find($alg->school_id);
        $alg->region = $school->region;
        $alg->{'categories.lvl0'} = $alg->city;
        $alg->{'categories.lvl1'} = $alg->city . " > " . $alg->region;

        $alg->_geoloc = collect(['lat' => (double) $school->lat, 'lng' => (double) $school->lng]);
        $alg->searchable();
    }
});

Route::get('/saveStudyLink', function () {

    $message = 'OK';
    try {
        $link = request('link');
        $study = request('study');
        $school = auth()->user()->info;

        $studyLink = $school->study()->where('study_id', $study)->first();
        $studyLink->pivot->url = $link;
        $studyLink->pivot->save();

    } catch (\Exception $e) {
        $message = $e;
    }

    return back();
});

Route::get('/form', function () {return view('form');});
Route::get('/form2', function () {return view('form2');});

Route::get('siteGen', function () {

    foreach (Facades\App\Scholio\Scholio::createSeoUrls() as $ll) {
        echo htmlspecialchars('
        <url>
        <loc>https://schol.io/catalog' . $ll . '</loc>


        <lastmod>2018-05-15T02:05:59+00:00</lastmod>

        <changefreq>daily</changefreq>

        <priority>0.8</priority>
    </url>');

        echo '<br>';
    }

    foreach (School::all() as $school) {
        echo htmlspecialchars('
        <url>
        <loc>https://schol.io/@' . $school->admin->username . '</loc>


        <lastmod>2018-05-15T02:05:59+00:00</lastmod>

        <changefreq>daily</changefreq>

        <priority>0.8</priority>
    </url>');

        echo '<br>';
    }

    return '------';
});

Route::get('/studylink/redirect/{school}/{study}/', function (School $school, Study $study) {

    if ($school->study->contains($study)) {
        $link = $school->study->find($study)->pivot->url;
        $ifnew = StudyLinks::where('study_id', $study->id)->where('school_id', $school->id)->first();
        if ($ifnew) {
            $ifnew->count = $ifnew->count + 1;
            $ifnew->save();
        } else {
            $newLink = new StudyLinks;
            $newLink->school_id = $school->id;
            $newLink->study_id = $study->id;
            $newLink->count = $newLink->count + 1;
            $newLink->save();
        }

        return redirect($link);
    }

    abort(404);

});

Route::get('/search/kollegio/athina', function () {
    return redirect('https://schol.io/public/schools?q=%CE%9A%CE%BF%CE%BB%CE%BB%CE%B5%CE%B3%CE%B9%CE%B1%20%CE%91%CE%B8%CE%B7%CE%BD%CE%B1');
});

Route::get('/schoolink/redirect/{school}/', function (School $school) {
    if (!$school) {
        abort(404);
    }

    $ifnew = SchoolLinks::where('school_id', $school->id)->first();
    if ($ifnew) {
        $ifnew->count = $ifnew->count + 1;
        $ifnew->save();
    } else {
        $newLink = new SchoolLinks;
        $newLink->school_id = $school->id;
        $newLink->count = $newLink->count + 1;
        $newLink->save();
    }

    return redirect('http://' . $school->website);

});

Route::get('eeww', function () {
    return Facades\App\Scholio\Scholio::createSeoRegion();
});

Route::get('@{username}', 'RoutesController@username');
Route::get('/public/profile/{id}', 'RoutesController@publicProfile')->name('profile/school');

// Public
Route::get('/', 'RoutesController@index');
Route::get('/public/scholarships/', 'RoutesController@publicscholarships');
Route::get('/public/schools/', 'RoutesController@schools');
Route::get('/public/schools/map', 'RoutesController@schoolsMap');

// Passwords
Route::post('/password/change', 'RoutesController@changePassword')->middleware('auth');
Route::get('/password/change', 'RoutesController@changePasswordView')->middleware('auth');

// Register
Route::get('/register/role/', 'RoutesController@registerRole');

// Admins
Route::post('/school/approve/{school}', 'RoutesController@adminApproveSchool')->middleware('is.admin');
Route::post('/school/disapprove/{school}', 'RoutesController@adminDisapproveSchool')->middleware('is.admin');
Route::post('/school/deleteAlgolia/{school}', 'RoutesController@adminDeleteAlgoliaSchool')->middleware('is.admin');
Route::post('/report/delete/{report}', 'RoutesController@adminDeleteReport')->middleware('is.admin');
Route::post('/report/delete/all/{user}', 'RoutesController@adminDeleteAllReports')->middleware('is.admin');
Route::post('/admin/subscription', 'RoutesController@adminSubscriptionMake')->middleware(['auth', 'is.admin']);
Route::post('/school/ranking/{school}', 'RoutesController@adminRankingSchool')->middleware('is.admin');
Route::post('/panel/admin/seed', 'RoutesController@adminSeeding')->middleware(['auth', 'is.admin']);

// Other
Route::get('/card/{card}/delete', 'RoutesController@cardDelete');
Route::get('/terms', 'RoutesController@terms');
Route::get('/verifyemail/{token}', 'VerifyController@verify');
Route::get('/lang/{locale}', 'RoutesController@lang');
Route::get('dashboard/profile', 'RoutesController@dashboardProfile')->middleware('auth');
Route::get('/scholarship/{scholarship}', 'RoutesController@scholarship');
Route::get('/scholarship/{scholarship}/edit', 'RoutesController@scholarshipEdit');
// Route::post('/scholarship/{scholarship}/update', 'RoutesController@scholarshipUpdate');
Route::get('/scholarship/{scholarship}/delete', 'RoutesController@scholarshipDelete');
Route::get('/public/profile/teacher/{teacher}', 'TeachersController@index');
Route::get('connection/{id}/confirm', 'RoutesController@confirmConnectionSchoolUser'); // ?? Security...
Route::get('/register/school', 'SchoolRegistrationController@showSchoolRegistrationForm');
Route::get('/token/register', 'RoutesController@token');
Route::get('auth/{provider}/', 'SocialAuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'SocialAuthController@handleProviderCallback');
Route::get('/public/results/', 'RoutesController@publicResultsAll');
Route::get('/public/results/{id}', 'RoutesController@publicResults');
Route::get('connected/students', 'ApiController@connectedStudents');
Route::get('connected/teachers', 'ApiController@connectedTeachers');
Route::get('/connection/school/{school}', 'ApiController@connectionSchool')->middleware('auth');
Route::get('/test/results/{type}', 'ApiController@testResults');
Route::get('/test/{school}', 'RoutesController@testSchools');
Route::get('/public/scholarship/admission/{scholarship}', 'RoutesController@publicScholarshipAdmission');
Route::get('/student/{user}', 'RoutesController@student')->middleware('is.school:see.student');
Route::get('/userRole/save', 'RoutesController@userRole');

// Route::post('/register/school', 'SchoolRegistrationController@register');
Route::post('search/school/type', 'RoutesController@searchSchoolType');
Route::post('/report/add/{user}/{id}', 'RoutesController@report');
Route::post('scholarship/{scholarship}/end', 'RoutesController@endScholarship'); // Security...
Route::post('scholarship/{scholarship}/update', 'RoutesController@updateScholarship'); // Security...
Route::delete('scholarship/{scholarship}/delete', 'RoutesController@deleteScholarship'); // Security | Delete from Algolia
Route::post('/admission/{admission}/notes/save', 'RoutesController@deleteScholarship'); // Security...
Route::post('/admission/{scholarship}/save', 'RoutesController@admissionSave'); // Security...
