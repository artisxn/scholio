<?php

use App\Models\Badge;
use App\Models\Lecture;
use App\Models\School;
use App\Models\Student;
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

Route::get('/student/class/show', function () {
    $student = auth()->user()->info;
    $lectures = $student->lecture;
    return view('panel.pages.classes.student.show', compact('lectures'));
});

Route::get('/student/class/{lecture}', function (Lecture $lecture) {
    return view('panel.pages.classes.student.index', compact('lecture'));
});

Route::get('/teacher/class/{lecture}', function (Lecture $lecture) {
    $badges = Badge::all();
    return view('panel.pages.classes.index', compact('lecture', 'badges'));
});

Route::post('/teacher/class/{lecture}/badge/{student}', function (Lecture $lecture, Student $student) {
    $badge = request()->badge;
    $student->badge()->attach($badge, ['lecture_id' => $lecture->id]);
    return back();
});
