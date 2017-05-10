<?php

use App\Models\Badge;
use App\Models\Lecture;
use App\Models\Study;
use App\User;
Route::get('scholarship/{scholarship}', 'RoutesController@scholarship');
Route::get('scholarships/create', 'AdminPanelController@scholarshipCreate')->name('scholarship-create');
Route::get('scholarships/view', 'AdminPanelController@scholarshipView')->name('scholarship-view');
Route::get('scholarships/request', 'AdminPanelController@scholarshipRequest')->name('scholarship-request');
Route::get('dashboard', 'AdminPanelController@dashboard')->name('dashboard');
Route::get('studies', 'AdminPanelController@studies')->name('studies-select');
Route::get('/teachers', 'AdminPanelController@teachers')->name('teachers');
Route::get('/students', 'AdminPanelController@students')->name('students');
Route::get('profile/images', 'AdminPanelController@imageProfile')->name('profile-images');
Route::get('profile', 'AdminPanelController@editProfile')->name('profile-edit');
Route::post('profile/{id}', 'AdminPanelController@updateProfile');
Route::get('requests', 'AdminPanelController@requests')->name('requests');
Route::post('profile/images/upload', 'AdminPanelController@imagesUpload');
Route::delete('profile/images/upload', 'AdminPanelController@imageDelete');

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
