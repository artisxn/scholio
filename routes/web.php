<?php

use App\Events\StudentAppliedOnScholarship;
use App\Events\UserAppliedOnSchool;
use App\Models\Admission;
use App\Models\AdmissionField;
use App\Models\AlgoliaScholarship;
use App\Models\AlgoliaSchool;
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

Route::get('tttt/{order}/{asc}/{status}/', function ($order, $asc, $status) {
    return redirect('/tttt/' . $order . '/' . $asc . '/' . $status . '/%20');
});

Route::get('tttt/{order}/{asc}/{status}/{field}', function ($order, $asc, $status, $field = null) {
    $user = auth()->user();
    $school = $user->info;
    $students = $school->$status;

    $orderType = $asc == 'false' ? 'asc' : 'desc';

    $students = $school->$status()->orderBy($order, $orderType)->with('cv', 'student')->get();

    if ($field != '%20') {
        $students = $students->filter(function ($item) use ($field) {
            $replacement = preg_replace("/ά/iu", '${1}α', $item->name);
            $replacement = preg_replace("/έ/iu", '${1}ε', $replacement);
            $replacement = preg_replace("/ή/iu", '${1}η', $replacement);
            $replacement = preg_replace("/ί/iu", '${1}ι', $replacement);
            $replacement = preg_replace("/ό/iu", '${1}ο', $replacement);
            $replacement = preg_replace("/ύ/iu", '${1}υ', $replacement);
            $replacement = preg_replace("/ώ/iu", '${1}ω', $replacement);
            if (preg_match("/" . $field . "/iu", $replacement) || preg_match("/" . $field . "/iu", $item->name) || preg_match("/" . $field . "/i", $item->email) || preg_match("/" . $field . "/i", $item->cv->student_phone)) {
                return $item;
            }
        });
    }

    $items = $students;

    $perPage = 6;

    $page = $page ?? (Paginator::resolveCurrentPage() ?? 1);
    $items = $items instanceof Collection ? $items : Collection::make($items);
    $p = new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, []);
    $custom = collect(['allumniStudents' => $school->allumni()->count(), 'connectedStudents' => $school->connected()->count()]);
    $data = $custom->merge($p);
    return $data;
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
