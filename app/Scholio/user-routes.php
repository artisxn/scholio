<?php

use App\Models\Lecture;
use App\Models\School;
use App\Models\Study;
use App\User;

Route::get('/student/profile', 'RoutesController@studentProfile')->name('students-profile');
Route::get('/student/mySchools', 'RoutesController@mySchools')->name('students-my-schools');
Route::get('/student/studentCv', 'RoutesController@studentCv')->name('students-cv');

Route::get('/teacher/profile', 'RoutesController@teacherProfile')->name('teachers-profile');
Route::get('/parent/profile', 'RoutesController@parentProfile')->name('parents-profile');

Route::get('/review/show', function () {
    $reviews = auth()->user()->reviews;
    return view('panel.pages.student.reviews.show', compact('reviews'));
});

Route::get('/review/create/{school}', function (School $school) {
    if (auth()->user()->isConnectedWithSchool($school) && !auth()->user()->reviewedSchool($school)) {
        return view('panel.pages.student.reviews.create', compact('school'));
    }
    return redirect('/panel/users/review/show');
})->middleware('auth');

Route::get('/teacher/class/show', function () {
    $teacher = auth()->user()->info;
    $lectures = $teacher->lecture;
    return view('panel.pages.classes.show', compact('teacher', 'lectures'));
});

Route::get('/teacher/class/{lecture}', function (Lecture $lecture) {
    return view('panel.pages.classes.index', compact('lecture'));
});

Route::get('/teacher/class/create', function () {
    $teacher = auth()->user()->info;
    $students = $teacher->school_students();
    $studies = $teacher->school_studies();
    return view('panel.pages.classes.create', compact('teacher', 'students', 'studies'));
});

Route::post('/teacher/class/create', function () {
    $lecture = new Lecture;
    $lecture->title = request()->title;
    $lecture->teacher_id = auth()->user()->info->id;
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
    return 'ok';
});
