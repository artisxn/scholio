<?php

use App\Events\StudentAppliedOnScholarship;
use App\Events\UserAppliedOnSchool;
use App\Models\Admission;
use App\Models\AdmissionField;
use App\Models\AlgoliaScholarship;
use App\Models\AlgoliaSchool;
use App\Models\DummyScholarship;
use App\Models\Scholarship;
use App\Models\School;
use App\Models\SchoolSetting;
use App\Models\Tag;
use App\Scholio\Scholio;
use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

Scholio::soonRoutes();

Route::get('pptest/{order}/{asc}/{active}', function ($order, $asc, $active) {
    $school = auth()->user()->info;
    $sort = 'desc';
    if ($asc == 'true') {
        $sort = 'asc';
    }

    $scholarships = DummyScholarship::where('school_id', $school->id)->where('active', $active)->orderBy($order, $sort)->get();
    return $scholarships;
});

Route::get('/ppps', function () {
    $school = App\Models\School::find(1);

    foreach ($school->scholarship as $scholarship) {
        $dummy = new DummyScholarship;
        $dummy->school_id = $school->id;
        $dummy->financial_plan = $scholarship->financial->plan;
        $dummy->financial_icon = $scholarship->financial->icon;
        $dummy->financial_amount = $scholarship->financial_amount;
        $dummy->financial_metric = $scholarship->financial->metric;
        $dummy->study_name = $scholarship->study->name;
        $dummy->level_name = $scholarship->level->name;
        $dummy->criteria_name = $scholarship->criteria->name;
        $dummy->criteria_icon = $scholarship->criteria->icon;
        $dummy->end_at = $scholarship->end_at;
        $dummy->admissions_length = count($scholarship->admission);

        $dummy->save();
        echo 'Scholarship ' . $scholarship->id . ' done.<br>';
    }

    return 'OK';
});

Route::get('/srv/{role}/{status}', function ($role, $status) {
    $school = auth()->user()->info;
    $reviews = $school->reviews()->with('user', 'category.category')->get();

    $totalAllumni = 0;
    $totalConnected = 0;
    $connectedParents = 0;
    $allumniParents = 0;

    foreach ($reviews as $review) {
        $user = $review->user;
        $connected = $school->connected;
        $allumni = $school->allumni;
        $conParent = $school->connectedParents;
        $alParent = $school->allumniParents;

        if ($connected->contains($user)) {
            $totalConnected++;
        } else if ($allumni->contains($user)) {
            $totalAllumni++;
        }
        if ($conParent->contains($user)) {
            $connectedParents++;
        } else if ($alParent->contains($user)) {
            $allumniParents++;
        }
    }

    if ($status != 'all' || $role !== 'all') {
        if ($role == 'student') {
            $connected = $school->$status;
        } else {
            if ($status == 'connected') {
                $connected = $school->connectedParents;
            } else {
                $connected = $school->allumniParents;
            }
        }

        $reviews = $reviews->filter(function ($item) use ($connected, $role, $status) {
            $bool = $status == 'all' ? true : $connected->contains($item->user);
            if ($item->user->role == $role && $bool) {
                return $item;
            }
        });
    }

    $perPage = config('scholio.perPage.reviews');
    $items = $reviews;
    $page = $page ?? (Paginator::resolveCurrentPage() ?? 1);

    $paginatedData = [];
    foreach ($items->forPage($page, $perPage) as $key => $value) {
        $paginatedData[] = $value;
    }

    $items = $items instanceof Collection ? $items : Collection::make($items);
    $result = new LengthAwarePaginator($paginatedData, $items->count(), $perPage, $page, []);
    $custom = collect(['connectedStudents' => $totalConnected, 'allumniStudents' => $totalAllumni, 'connectedParents' => $connectedParents, 'allumniParents' => $allumniParents, 'ratingStars' => $ratingStars]);
    $data = $custom->merge($result);
    return $data;
});

Route::get('/sx/{order}/{asc}/{field}', function ($order, $asc, $field) {
    $school = auth()->user()->info;
    $orderType = $asc == 'false' ? 'asc' : 'desc';
    $scholarships = $school->scholarship()->orderBy($order, $orderType)->get();

    $active = 0;
    foreach ($scholarships as $scholar) {
        $scholar->section = $scholar->study->section[0];
        if ($scholar->active == 1) {
            $active++;
        }
    }

    $deactive = $scholarships->count() - $active;

    if ($field != '%20') {
        $scholarships = $scholarships->filter(function ($item) use ($field) {
            $replacement = preg_replace("/ά/iu", '${1}α', $item->name);
            $replacement = preg_replace("/έ/iu", '${1}ε', $replacement);
            $replacement = preg_replace("/ή/iu", '${1}η', $replacement);
            $replacement = preg_replace("/ί/iu", '${1}ι', $replacement);
            $replacement = preg_replace("/ό/iu", '${1}ο', $replacement);
            $replacement = preg_replace("/ύ/iu", '${1}υ', $replacement);
            $replacement = preg_replace("/ώ/iu", '${1}ω', $replacement);
            if (preg_match("/" . $field . "/iu", $replacement) || preg_match("/" . $field . "/iu", $item->section->name) || preg_match("/" . $field . "/i", $item->study->name) || preg_match("/" . $field . "/i", $item->financial->plan) || preg_match("/" . $field . "/i", $item->level->name) || preg_match("/" . $field . "/i", $item->criteria->name)) {
                return $item;
            }
        });
    }

    $perPage = 2;
    $items = $scholarships->load('financial', 'level', 'study', 'user', 'criteria');

    $page = $page ?? (Paginator::resolveCurrentPage() ?? 1);
    $items = $items instanceof Collection ? $items : Collection::make($items);

    $paginatedData = [];
    foreach ($items->forPage($page, $perPage) as $key => $value) {
        $paginatedData[] = $value;
    }

    $result = new LengthAwarePaginator($paginatedData, $items->count(), $perPage, $page, []);
    $custom = collect(['active' => $active, 'deactive' => $deactive]);
    $data = $custom->merge($result);
    return $data;
});

Route::get('/sc', function () {
    $school = auth()->user()->info;
    $t['categories'] = $school->reviews()->with('user', 'category.category')->get();
    $t['stars'] = $school->averageStars();
    $t['avgReviews'] = $school->averageReviews();
    return $t;
});

Route::get('test/student', function () {
    for ($i = 1; $i <= 8; $i++) {
        $school = App\Models\School::find($i);
        $st = factory(App\Models\Student::class, ($i * 2) * 100)->create();

        foreach ($st as $s) {
            factory(App\Models\Cv::class)
                ->create(['user_id' => $s->user->id]);
            $school->students()->toggle($s->user);
        }
    }

});

Route::get('/new/user/', function () {
    if (auth()->user()->role == 'student') {
        return redirect('panel/users/student/studentCv');
    }

    return redirect('/dashboard');
});

Route::get('test/user/{user}/school/{school}', function (User $user, School $school) {
    event(new UserAppliedOnSchool($user, User::find($school->id)));
    return 'ok';
});

Route::get('test/user/{user}/scholarship/{scholarship}', function (User $user, Scholarship $scholarship) {
    event(new StudentAppliedOnScholarship($user, $scholarship));
    return 'ok';
});

Route::post('scholarship/{scholarship}/end', function (Scholarship $scholarship) {
    $winners = request()->winner;
    $scholarship->end($winners);
    return redirect('/dashboard');
});

Route::get('public/donor', function () {
    return view('public.results.donor');
});

Route::get('ppp', function () {
    $schols = Scholarship::all();
    foreach ($schols as $sch) {
        $o = '';
        foreach ($sch->tag as $r) {
            $o .= $r->name . ',';
        }

        $a = AlgoliaScholarship::where('scholarship_id', $sch->id)->get();
        $kkk = $a->first();
        $kkk->tags = $o;
        $kkk->save();
    }
    return '$a';
});

Route::post('/admission/{admission}/notes/save', function (Admission $admission) {
    $admission->notes = request()->notes;
    $admission->save();
    return back();
});

Route::get('algotest/{query}', function ($query) {
    $result = AlgoliaSchool::search($query)->get();
    return $result;
});

Route::get('public/schools/map', function () {
    $search = request()->search;
    session(['inputSearch' => $search]);
    return view('public.results.map');
});

Route::get('/lang/{locale}', function ($locale) {
    return back()->withCookie(cookie()->forever('lang', $locale));
});

Route::post('/admission/{scholarship}/save', 'RoutesController@admissionSave');

Route::get('/public/schools/', function () {
    $settings = SchoolSetting::all()->pluck('statistics');
    // dd($settings);
    return view('public.results.schools')->withSettings($settings);
});

Route::get('dashboard/profile', function () {
    if (auth()->user()->role == 'student') {
        return redirect(route('students-profile'));
    }
    if (auth()->user()->role == 'teacher') {
        return redirect(route('teachers-profile'));
    }

    if (auth()->user()->role == 'parent') {
        return redirect(route('parent-profile'));
    }
})->middleware('auth');

Route::get('@{username}', function ($username) {
    $user = User::where('username', $username)->first();
    if (!$user) {
        abort(452);
    }
    $url = '';
    if ($user->role == 'teacher') {
        $url = '/public/profile/teacher';
    }
    if ($user->role == 'school') {
        $url = '/public/profile';
    }
    return redirect($url . '/' . $user->info->id);
});

Route::get('/scholarship/{scholarship}', 'RoutesController@scholarship');
Route::get('/scholarship/{scholarship}/edit', 'RoutesController@scholarshipEdit');
Route::post('/scholarship/{scholarship}/update', 'RoutesController@scholarshipUpdate');
Route::get('/scholarship/{scholarship}/delete', 'RoutesController@scholarshipDelete');

Route::get('algolia', function () {
    $schools = School::all();
    $schools->load('study.section.level', 'type', 'scholarship.study.section.level', 'scholarship.criteria', 'admin');
    $schools->searchable();
    $scholarships = Scholarship::all();
    $scholarships->load('study.section.level', 'school.admin', 'school.type', 'criteria');
    $scholarships->searchable();
    return 'OK';
});
Route::get('/public/profile/teacher/{teacher}', 'TeachersController@index');

Route::get('connection/{id}/confirm', function ($id) {
    Scholio::connectUserWithSchool(auth()->user()->info, User::find($id));
    return 'OK';
});

Route::get('/', 'RoutesController@index');

Auth::routes();

Route::get('/register/school', 'SchoolRegistrationController@showSchoolRegistrationForm');
Route::post('/register/school', 'SchoolRegistrationController@register');

Scholio::panelRoutes();

Route::get('/token/register', 'RoutesController@token');

Route::get('auth/{provider}/', 'SocialAuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'SocialAuthController@handleProviderCallback');

Route::get('/public/profile/{id}', 'RoutesController@publicProfile')->name('profile/school');
Route::get('/public/results/', function () {
    return redirect('public/results/all');
});
Route::get('/public/results/{id}', 'RoutesController@publicResults');
Route::get('connected/students', 'ApiController@connectedStudents');
Route::get('connected/teachers', 'ApiController@connectedTeachers');

Route::get('/connection/school/{school}', 'ApiController@connectionSchool')->middleware('auth');
Route::get('/test/results/{type}', 'ApiController@testResults');
Route::post('search/school/type', 'RoutesController@searchSchoolType');
Route::get('/test/{school}', 'RoutesController@testSchools');

/* ===== TESTING ROUTE FOR SCHOLARSIPS RESULTS ====== */
Route::get('/public/scholarships/', function () {
    return view('public.results.scholarships');
});

Route::get('/public/scholarships/d', function () {
    return view('public.results.scholarships');
});

/* ===== TESTING ROUTE FOR SCHOLARSHIPS RESULTS ====== */
Route::get('/public/algolia/', function () {
    return view('public.results.algolia');
});

Route::get('/public/algolia/', function () {
    return view('public.results.algolia');
});

/* ===== TESTING ROUTE FOR REGISTER SELECT ROLE ====== */
Route::get('/register/role/', function () {
    return view('auth.register-role');
});

Route::post('/panel/student/cv', 'RoutesController@studentCvStore');

Route::get('/public/scholarship/admission/{user}/{scholarship}', function (User $user, Scholarship $scholarship) {

    $settings = $scholarship->school->settings;
    // dd($scholarship->school);
    $fields = AdmissionField::all();
    return view('public.school.admission', compact('user', 'scholarship', 'settings', 'fields'));
});

Route::get('/student/{user}', function (User $user) {
    // $admission = Admission::where('user_id', $user->id)->where('scholarship_id', $scholarship->id)->first();
    return view('public.school.student-profile', compact('user'));
})->middleware('is.school:see.student');

Route::get('/userRole/save', function () {
    $role = request()->role;
    session(['registration' => 'user']);
    session(['userrole' => $role]);
    return redirect('/register');
});
