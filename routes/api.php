<?php

use App\Models\Financial;
use App\Models\Scholarship;
use App\Models\School;
use App\Models\Study;
use App\User;
use Carbon\Carbon;
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

Route::get('/results/{type}', function ($type) {
    $schools = School::with('image')->with('logo')->where('type_id', $type)->get();

    foreach ($schools as $s) {
        $s->lengthStudents = $s->lengthStudents();
        $s->lengthTeachers = $s->lengthTeachers();
        $s->lengthStudies = $s->lengthStudies();
        $s->lengthScholarships = $s->lengthScholarships();
    }
    return $schools;
})->middleware('api');

Route::get('/profile/{school}', function (School $school) {
    $school->lengthStudents = $school->lengthStudents();
    $school->lengthTeachers = $school->lengthTeachers();
    $school->lengthStudies = $school->lengthStudies();
    $school->lengthScholarships = $school->lengthScholarships();

    $data = [];

    foreach ($school->study as $study) {
        array_push($data, App\Models\Study::with('section.level')->where('id', $study->id)->get());
    }

    foreach ($school->scholarship as $scholarship) {
        $scholarship->level = $scholarship->level;
        $scholarship->section = $scholarship->study->section;
        $scholarship->criteria = $scholarship->criteria->name;
        $scholarship->financial = $scholarship->financial->plan;
        $scholarship->length = $scholarship->usersLength();
    }

    $school->levels = $data;

    return $school->load('image');
})->middleware('api');

Route::post('/scholarship/save', function () {
    $data = [];
    try {
        $study = Study::find(request()->study_id);

        $scholarship = new Scholarship;
        $scholarship->school_id = request()->school_id;
        $scholarship->financial_id = request()->financial_id;
        $scholarship->financial_amount = request()->financial_amount;
        $scholarship->study_id = request()->study_id;
        $scholarship->level_id = $study->section[0]->level->id;
        $scholarship->criteria_id = request()->criteria_id;
        //$scholarship->winner_id = request()->winner_id;
        $scholarship->terms = request()->terms;
        if (request()->exams == 1) {
            $scholarship->exams = true;
        }
        //$scholarship->exams_date = request()->exams_date;
        $scholarship->end_at = Carbon::createFromFormat('d-m-Y', request()->end_at);
        $scholarship->save();
        $data = ['message' => 'SAVED SUCCESSFULLY', 'redirect' => route('scholarship-view')];
    } catch (\Exception $e) {
        $data = ['message' => 'ERROR ' . $e];
    }

    // return redirect()->route('scholarship-view');

    return $data;
})->middleware('auth:api');

Route::get('/scholarship/{scholarship}', function (Scholarship $scholarship) {
    $scholarship->length = $scholarship->usersLength();
    return $scholarship->load('financial', 'criteria');
})->middleware('api');
