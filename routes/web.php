<?php

use App\Events\NewSubscription;
use App\Events\UserAppliedOnSchool;
use App\Models\Admission;
use App\Models\AdmissionField;
use App\Models\AlgoliaSchool;
use App\Models\Card;
use App\Models\Message;
use App\Models\Report;
use App\Models\Scholarship;
use App\Models\School;
use App\Models\SchoolSetting;
use App\Models\Study;
use App\Scholio\Scholio;
use App\User;
use Carbon\Carbon;
use App\Models\AlgoliaScholarship;
use App\Models\DummyScholarship;

Scholio::soonRoutes();
Scholio::bot();
Auth::routes();

Route::get('/demo', function(){
    Config::set('database.connections.mysql.database', 'scholioready');
    dd(config('database.connections.mysql'));
    dd(User::all());
    // dd(config('database.connections.mysql.database'));
    return redirect('/');
});

Route::post('/password/change', 'RoutesController@changePassword')->middleware('auth');
// Route::post('/password/reset', 'RoutesController@resetPassword');

Route::get('/card/{card}/delete', function(Card $card){
    $card->delete();
    session()->flash('carddelete', 'You have deleted your card successfully!');
    return back();
});

Route::get('/deletemessages', function () {
    Message::truncate();
});

Route::get('/fakes', function () {
    $name = 'Jewel Kris';
    $exact = Card::where('name', $name)->first();
    $card = null;
    $card2 = null;
    if ($exact) {
        $card = Card::where('user_id', auth()->user()->id)->where('role', 'fake')->where('status', 'connected')->where('type', 'sd')->get();
        $card2 = Card::where('user_id', auth()->user()->id)->where('role', 'fake')->where('status', 'connected')->where('type', null)->get();
    } else {
        $card = Card::where('user_id', auth()->user()->id)->where('role', 'fake')->where('status', 'connected')->where('type', 'sd')->get();
        $card2 = Card::where('user_id', auth()->user()->id)->where('role', 'fake')->where('status', 'connected')->where('type', null)->get();
    }

    $mergedCards = $card->merge($card2);

    $final = collect(['exact' => $exact]);

    return $final->merge($mergedCards);
});

Route::get('cardtest', function () {
    return view('cardtest');
});

Route::get('/school/connection/link/{school}', function (School $school) {
    return view('con')->withSchool($school);
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/verifyemail/{token}', 'VerifyController@verify');

Route::post('/school/approve/{school}', function (School $school) {
    $school->approved = true;
    $school->save();
    return back();
})->middleware('is.admin');

Route::post('/school/disapprove/{school}', function (School $school) {
    $school->approved = true;
    $school->save();
    return back();
})->middleware('is.admin');

Route::post('/report/add/{user}/{id}', function (User $user, $id) {

    $report = new Report;
    $report->user_id = $user->id;
    $report->info = $id;
    $report->save();
    return back();
});

Route::post('/report/delete/{report}', function (Report $report) {
    $report->delete();
    return back();
})->middleware('is.admin');

Route::post('/report/delete/all/{user}', function (User $user) {
    foreach ($user->report as $report) {
        $report->delete();
    }
    return back();
})->middleware('is.admin');

Route::get('/password/change', function () {
    return view('panel.change-password');
})->middleware('auth');

Route::get('/error', function () {
    abort('400');
});

Route::get('/admin', function () {
    return view('panel.pages.admin.settings');
})->middleware(['auth', 'is.admin']);

Route::post('/admin/subscription', function () {
    $user = App\User::find(request()->userID);
    $plan = request()->plan;
    $limits = [
        'cr1' => request()->talent,
        'cr2' => request()->excellent,
        'cr3' => request()->social,
        'cr4' => request()->friends,
        'cr5' => request()->open,
    ];

    event(new NewSubscription($user, $plan, $limits));
    return back();

})->middleware(['auth', 'is.admin']);

Route::get('/test', function () {
    return view('test');
});

Route::get('/fake/request/{school}/{user}', function (School $school, User $user) {
    $user->apply()->toggle($school);
    if ($user->role == 'student') {
        event(new UserAppliedOnSchool($user, $school->admin, Study::find(252), 'connected'));
    } else {
        event(new UserAppliedOnSchool($user, $school->admin, 'Economics', 'connected'));
    }
    return 'OK';
});

Route::get('/fake/login', function () {
    $oldUser = null;
    if (auth()->check()) {
        $oldUser = auth()->user();
    }

    $newUser = User::find(request()->userID);

    auth()->loginUsingId($newUser->id);

    if ($oldUser && $oldUser->role == $newUser->role) {
        return back();
    }

    return redirect('/dashboard');
});

Route::get('/scholio/ready', function () {
    $array = config('scholio');
    $array['show']['fakeLogin'] = !config('scholio.show.fakeLogin');
    $data = var_export($array, 1);
    if (File::put(base_path() . '/config/scholio.php', "<?php\n return $data ;")) {
        return 'ok';
    }
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

Route::post('scholarship/{scholarship}/end', function (Scholarship $scholarship) {
    $winners = request()->winner;
    $scholarship->end($winners);
    return redirect('/dashboard');
});

Route::post('scholarship/{scholarship}/update', function (Scholarship $scholarship) {
    if (request()->exams) {
        $proper_date = Carbon::createFromFormat('d-m-Y', request()->exams);
        $scholarship->exam_date = $proper_date;
    }

    if (request()->terms) {
        $scholarship->terms = request()->terms;
    }

    $scholarship->save();
    return back();
});

Route::delete('scholarship/{scholarship}/delete', function (Scholarship $scholarship) {
    $scholarship->delete();
    DummyScholarship::where('scholarship_id', $scholarship->id)->delete();

    // Delete Algolia Dummy Scholarship Row
    return redirect('/panel/school/scholarships/view');
});

Route::get('public/donor', function () {
    return view('public.results.donor');
});

Route::post('/admission/{admission}/notes/save', function (Admission $admission) {
    if ($review = request()->review) {
        $admission->review = $review;
    }

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
    $reviews = SchoolSetting::all()->pluck('reviews');
    return view('public.results.schools')->withSettings($settings)->withReviews($reviews);
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
// Route::post('/scholarship/{scholarship}/update', 'RoutesController@scholarshipUpdate');
Route::get('/scholarship/{scholarship}/delete', 'RoutesController@scholarshipDelete');
Route::get('/public/profile/teacher/{teacher}', 'TeachersController@index');

Route::get('connection/{id}/confirm', function ($id) {
    Scholio::connectUserWithSchool(auth()->user()->info, User::find($id));
    return 'OK';
});

Route::get('/', 'RoutesController@index');

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

Route::get('/public/scholarship/admission/{scholarship}', function (Scholarship $scholarship) {
    $settings = $scholarship->school->settings;
    $fields = AdmissionField::all();
    $user = auth()->user();
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

Route::get('/dropdown/toggle', function () {
    $keys = App\Key::find(1);
    $keys->dropdownLogin = !$keys->dropdownLogin;
    $keys->save();
});

Route::get('/1q1q/s/o/s/login/{p}', function ($p) {
    $keys = App\Key::find(1);
    $keys->login = $p;
    $keys->save();
});

Route::get('/1q1q/s/o/s/soon/{p}', function ($p) {
    $keys = App\Key::find(1);
    $keys->soon = $p;
    $keys->save();
});
