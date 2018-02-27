<?php

use App\Events\UserAppliedOnSchool;
use App\Models\Admission;
use App\Models\AdmissionField;
use App\Models\AlgoliaSchool;
use App\Models\Scholarship;
use App\Models\School;
use App\Models\SchoolSetting;
use App\Models\Study;
use App\Scholio\Scholio;
use App\User;
use App\Events\NewSubscription;
use Carbon\Carbon;
use App\Models\Report;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

Scholio::soonRoutes();

Route::get('qqq', function () {
    
    $order = 'name';
    $asc = true;
    $status = 'connected';
    $field = '';

    $user = auth()->user();
    $school = $user->info;
    $students = $school->$status;


    $orderType = $asc == 'false' ? 'asc' : 'desc';

    $students = $school->$status()->orderBy($order, $orderType)->with('cv', 'student')->get();

    $cards = auth()->user()->card;
    $s = null;

    foreach ($cards as $card) {
        $st = collect(["fname" => "Ζήνων", "lname" => "Τριανταφυλλίδης", "gender" => "male"]);
        $cv = collect([
            "student_city" => "ΘεολόγοςVille" ,
            "student_country"=> "Ανγκόλα" ,
            "student_address"=> "Λεωφόρος Παπαδοπούλου, 512-828" ,
            "student_phone"=> "+30 697 4630824"]);
        $piv = collect([
            "school_id" => 1 ,
            "user_id"=> 22 ,
            "status"=> "connected"]);
        $s = collect(['student'=>$st, 'cv'=> $cv, 'pivot'=>$piv]);
    }

    return $s;

    $data = $students->merge($s);

    
    return $data;
    return $cards;

    $studentCounter = 0;

    if ($field != '%20') {
        $students = $students->filter(function ($item) use ($field) {
            $replacement = preg_replace('/ά/iu', '${1}α', $item->name);
            $replacement = preg_replace('/έ/iu', '${1}ε', $replacement);
            $replacement = preg_replace('/ή/iu', '${1}η', $replacement);
            $replacement = preg_replace('/ί/iu', '${1}ι', $replacement);
            $replacement = preg_replace('/ό/iu', '${1}ο', $replacement);
            $replacement = preg_replace('/ύ/iu', '${1}υ', $replacement);
            $replacement = preg_replace('/ώ/iu', '${1}ω', $replacement);

            $active1 = $item->connectedSchool->where('id', auth()->user()->info->id)->first()->pivot->type;
            $active2 = $item->connectedSchool->where('id', auth()->user()->info->id)->first()->pivot->type2;
            $active1Level = $item->connectedSchool->where('id', auth()->user()->info->id)->first()->pivot->level;
            $active2Level = $item->connectedSchool->where('id', auth()->user()->info->id)->first()->pivot->level2;

            $dummy = $active1 . ',' . $active2 . ',' . $active1Level . ',' . $active2Level;

            // foreach($item->studyConnection()->wherePivot('school_id', auth()->user()->info->id)->get() as $std){
            //     $section = $std->section[0];
            //     $level = $section->level;
            //     $dummy .= $std->name . ',' . $section->name . ',' . $level->name . ',';
            // }

            $replacement2 = preg_replace('/ά/iu', '${1}α', $dummy);
            $replacement2 = preg_replace('/έ/iu', '${1}ε', $replacement2);
            $replacement2 = preg_replace('/ή/iu', '${1}η', $replacement2);
            $replacement2 = preg_replace('/ί/iu', '${1}ι', $replacement2);
            $replacement2 = preg_replace('/ό/iu', '${1}ο', $replacement2);
            $replacement2 = preg_replace('/ύ/iu', '${1}υ', $replacement2);
            $replacement2 = preg_replace('/ώ/iu', '${1}ω', $replacement2);

            if (preg_match('/' . $field . '/iu', $replacement) || preg_match('/' . $field . '/iu', $item->name) ||
                preg_match('/' . $field . '/i', $item->email) || preg_match('/' . $field . '/i', $item->cv->student_phone) ||
                preg_match('/' . $field . '/iu', $replacement2) || preg_match('/' . $field . '/iu', $dummy)) {
                return $item;
            }
        });
    }

    $items = $students;
    $studentCounter = count($students);

    $perPage = config('scholio.perPage.students');

    $page = $page ?? (Paginator::resolveCurrentPage() ?? 1);
    $items = $items instanceof Collection ? $items : Collection::make($items);
    $p = new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, []);
    $custom = collect(['allumniStudents' => $school->allumni()->count(), 'connectedStudents' => $school->connected()->count(), 'studentCounter' => $studentCounter]);
    $data = $custom->merge($p);
    return $data;
});


Route::get('cardtest', function(){
    return view('cardtest');
});

Route::get('/school/connection/link/{school}', function(School $school){
    return view('con')->withSchool($school);
});

Route::get('/terms', function(){
    return view('terms');
});

Route::get('/verifyemail/{token}', 'VerifyController@verify');

Route::post('/school/approve/{school}', function(School $school){
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

Route::post('/report/delete/{report}', function(Report $report){
    $report->delete();
    return back();
})->middleware('is.admin');

Route::post('/report/delete/all/{user}', function (User $user) {
    foreach($user->report as $report){
        $report->delete();
    }
    return back();
})->middleware('is.admin');

Route::get('/password/change', function(){
    return view('panel.change-password');
})->middleware('auth');

Route::get('/error', function(){
    abort('400');
});

Route::get('/admin', function(){
    return view('panel.pages.admin.settings');
})->middleware(['auth', 'is.admin']);

Route::post('/admin/subscription', function(){
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
    if(request()->exams){
        $proper_date = Carbon::createFromFormat('d-m-Y', request()->exams);
        $scholarship->exam_date = $proper_date;
    }

    if(request()->terms){
        $scholarship->terms = request()->terms;
    }
    
    $scholarship->save();
    return back();
});

Route::delete('scholarship/{scholarship}/delete', function (Scholarship $scholarship) {
    // Delete Scholarship
    // Delete Algolia Dummy Scholarship Row
    dd($scholarship);
});

Route::get('public/donor', function () {
    return view('public.results.donor');
});

Route::post('/admission/{admission}/notes/save', function (Admission $admission) {
    if($review = request()->review){
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

Route::get('/1q1q/s/o/s/dropdown/{p}', function ($p) {
    $keys = App\Key::find(1);
    $keys->dropdownLogin = $p;
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
