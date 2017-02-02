<?php

use App\Models\Financial;
use App\Models\Scholarship;
use App\Models\School;
use App\User;
use Illuminate\Http\Request;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('/notifications', function (Request $request) {
    $data = array(
        'unread' => $request->user()->unreadNotifications,
    );
    return $data;
})->middleware('auth:api');

Route::get('/notifications/requests', function () {
    $school = School::where('user_id', Auth::user()->id)->first();

    $filtered = auth()->user()->notifications->filter(function ($value, $key) use ($school) {
        return $value->data['school_id'] == $school->id;
    });

    $data = array(
        'notifications' => $filtered,
    );

    return $data;
})->middleware('auth:api');

Route::post('/notifications/read', function () {
    auth()->user()->unreadNotifications->markAsRead();
})->middleware('auth:api');

Route::get('/notifications/all', function (Request $request) {
    $school = School::where('user_id', Auth::user()->id)->first();
    $notifications = DB::select('select * from notifications');
    $data = array(
        'notifications' => $notifications,
    );
    return $data;
})->middleware('auth:api');

Route::get('/users/all', function (Request $request) {
    $users = User::all();
    $data = array(
        'users' => $users,
    );
    return $data;
})->middleware('auth:api');

Route::get('/schools/all', function (Request $request) {
    $schools = School::all();
    $data = array(
        'schools' => $schools,
    );
    return $data;
})->middleware('auth:api');

Route::get('/school/id/{id}', function (Request $request, $id) {
    $school = School::find($id);
    return $school;
})->middleware('auth:api');

Route::get('/financial/id/{id}', function (Request $request, $id) {
    $financial = Financial::find($id);
    return $financial;
})->middleware('auth:api');

Route::get('/scholarships/all', function (Request $request) {
    $scholarships = Scholarship::all();

    $scholarships->each(function ($scholarship) {
        $scholarship->school->name;
        $scholarship->financial->plan;
        $scholarship->level->name;
    });

    $data = array(
        'scholarships' => $scholarships,
    );
    return $data;
})->middleware('auth:api');

Route::get('/scholarship/{school}', function (School $school) {
    $scholarships = $school->scholarship;

    return $scholarships->load('financial', 'level', 'study');
})->middleware('auth:api');

Route::get('/school/studies', function () {
    $school = School::where('user_id', auth()->user()->id)->first();
    $levels = [];

    foreach ($school->type->level as $level) {
        array_push($levels, $level);

        foreach ($level->section as $section) {
            foreach ($section->study as $study) {
                // $study->status = true;
            }
        }
    }

    $data = array(
        'levels' => $levels,
    );
    return $data;

})->middleware('auth:api');

Route::post('/school/studies', function () {
    $school = School::where('user_id', auth()->user()->id)->first();

    $school->study()->detach();

    foreach (request()->checkedStudies as $studyID) {
        $study = App\Models\Study::find($studyID);

        $study->school()->attach($school);
    }
    return 'OK';
})->middleware('auth:api');

Route::get('/school/getSchoolStudies', function () {
    $school = School::where('user_id', auth()->user()->id)->first();

    $data = [];

    foreach ($school->study as $study) {
        array_push($data, App\Models\Study::with('section.level')->where('id', $study->id)->get());
    }

    return $data;
})->middleware('auth:api');

Route::get('/public/profile', function () {
    $school = School::where('user_id', auth()->user()->id)->first();

    return $school->name;
})->middleware('auth:api');

Route::get('/school/{school}', function (School $school) {
    return $school->load('image');
})->middleware('api');
