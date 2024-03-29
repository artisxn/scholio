<?php

use App\Models\Admission;
use App\Models\Badge;
use App\Models\Card;
use App\Models\Lecture;
use App\Models\Study;
use App\User;
use Carbon\Carbon;
use App\Models\SchoolInterest;

Route::get('scholarship/{scholarship}', 'RoutesController@scholarship');
Route::get('scholarships/create', 'AdminPanelController@scholarshipCreate')->name('scholarship-create');
Route::get('scholarships/view', 'AdminPanelController@scholarshipView')->name('scholarship-view');
Route::get('scholarships/request', 'AdminPanelController@scholarshipRequest')->name('scholarship-request');
Route::get('dashboard', 'AdminPanelController@dashboard')->name('dashboard');
Route::get('studies', 'AdminPanelController@studies')->name('studies-select');
Route::get('/teachers', 'AdminPanelController@teachers')->name('teachers')->middleware('is.vip');
Route::get('/students', 'AdminPanelController@students')->name('students')->middleware('is.vip');
Route::get('profile/images', 'AdminPanelController@imageProfile')->name('profile-images');
Route::get('profile', 'AdminPanelController@editProfile')->name('profile-edit');
Route::post('profile/{id}', 'AdminPanelController@updateProfile');
Route::get('requests', 'AdminPanelController@requests')->name('requests')->middleware('is.vip');
Route::post('profile/images/upload', 'AdminPanelController@imagesUpload');
Route::delete('profile/images/upload', 'AdminPanelController@imageDelete');

Route::get('/interests', function(){
    $school = auth()->user()->info;
    $interests = SchoolInterest::where('school_id', $school->id)->get();

    return view('panel.pages.school.interests', compact('interests'));
});

Route::post('/card/create', function () {

    $card = new Card;
    $card->user_id = auth()->user()->id;
    $card->fname = request()->fname;
    $card->lname = request()->lname;
    $card->name = request()->fname . ' ' . request()->lname;

    $card->student_city = request()->student_city;
    $card->student_address = request()->student_address;
    $card->student_phone = request()->student_phone;
    $card->email = request()->email;
    $card->father_fullname = request()->father_name;
    $card->mother_fullname = request()->mother_name;
    $card->father_phone = request()->father_phone;
    $card->mother_phone = request()->mother_phone;
    $card->status = request()->status;
    $card->dob = Carbon::createFromFormat('d-m-Y', request()->dob); 
    $card->role = 'fake';
    $card->save();

})->name('create-card');

Route::get('/admission/{admission}', function (Admission $admission) {
    if($admission->scholarship->school->admin != auth()->user()){
        abort('403');
    }
    $categories = $admission->categories();
    foreach (auth()->user()->unreadNotifications as $notification) {
        if ($notification->type == 'App\Notifications\StudentAppliedOnScholarship') {
            if ($notification->data['user']['id'] == $admission->user_id && $notification->data['scholarship'] == $admission->scholarship_id) {
                $notification->markAsRead();
            }
        }

    }
    return view('panel.pages.school.scholarships.admission', compact('admission', 'categories'));
});

Route::get('/settings/public', function () {
    $categories = App\Models\AdmissionCategory::all();
    $fields = App\Models\AdmissionField::all();
    return view('panel.pages.school.settings.public', compact('fields', 'categories'));
})->middleware('is.vip');

Route::get('/settings/scholarships', function () {
    $categories = App\Models\AdmissionCategory::all();
    $fields = App\Models\AdmissionField::all();
    return view('panel.pages.school.settings.scholarship', compact('fields', 'categories'));
});

Route::group(['middleware' => 'is.school', 'prefix' => 'class'], function () {
    Route::get('/create', function () {
        $school = auth()->user()->info;
        $students = $school->students()->get();
        $studies = $school->study;
        $teachers = $school->teachers()->get();

        return view('panel.pages.classes.create', compact('teachers', 'students', 'studies'));
    });

    Route::post('/create', function () {
        $lecture = new Lecture;
        $lecture->title = request()->title;
        $lecture->school_id = auth()->user()->info->id;
        $lecture->teacher_id = request()->teacher;
        $lecture->start_date = request()->start_date;
        $lecture->end_date = request()->end_date;
        $lecture->hpw = request()->hpw;
        $lecture->save();

        $students = '';
        foreach (request()->students as $student) {
            $st = User::find($student)->info;
            $lecture->student()->attach($st);
            $students .= User::find($student)->name . ', ';
        }

        $studies = '';
        foreach (request()->studies as $study) {
            $st = Study::find($study);
            $lecture->study()->attach($st);
            $studies .= $st->name . ', ';
        }
        $lecture->studies = $studies;
        $lecture->save();
        return redirect('/panel/school/class/' . $lecture->id);
    });

    Route::get('/{lecture}', function (Lecture $lecture) {
        $badges = Badge::all();
        return view('panel.pages.classes.school.index', compact('lecture', 'badges'));
    });
});

Route::get('/reviews/view', function () {
    return view('panel.pages.school.reviews.view');
})->middleware('is.vip');
