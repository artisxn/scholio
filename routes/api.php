<?php

use App\Events\UserAppliedOnSchool;
use App\Models\CategoryReview as Category;
use App\Models\Review;
use App\Models\Scholarship;
use App\Models\School;
use App\Models\Skill;
use App\Models\Tag;
use App\Models\Temp;
use App\Notifications\SchoolAcceptedUser;
use App\Scholio\Scholio;
use App\User;
use Illuminate\Http\Request;

Scholio::bot();

Route::get('/scholarship/getFullAdmissions', function () {
    $arr = [];
    $school = auth()->user()->info;
    foreach ($school->admissions() as $admission) {
        array_push($arr, [
            'user' => $admission->user,
            'student' => $admission->user->info,
            'scholarship' => $admission->scholarship->study->name,
            'id' => $admission->id,
        ]);
    }
    return $arr;
})->middleware('auth:api');

Route::post('/request/school', function () {
    if (auth()->user()->role != 'school') {
        event(new UserAppliedOnSchool(auth()->user(), User::find(request()->school)));
        return 'OK';
    }

    return 'Error';
})->middleware('auth:api');

Route::post('/connection/{id}/confirm', function ($id) {
    $user = User::find($id);
    auth()->user()->info->users()->toggle($user);
    $user->notify(new SchoolAcceptedUser($user, auth()->user()));
    return 'Accepted';
})->middleware('auth:api');

Route::post('/connection/{id}/deny', function ($id) {
    // Figure out what else to do here
    return 'Denied';
})->middleware('auth:api');

Route::get('/user', 'ApiController@users')->middleware('auth:api');
Route::get('/users/all', 'ApiController@usersAll')->middleware('auth:api');
Route::get('/notifications', 'ApiController@notifications')->middleware('auth:api');
Route::get('/notifications/requests', 'ApiController@notificationsRequest')->middleware('auth:api');
Route::post('/notifications/read/{id}', 'ApiController@notificationsRead')->middleware('auth:api');
Route::get('/notifications/all', 'ApiController@notificationsAll')->middleware('auth:api');
Route::get('/schools/all', 'ApiController@schoolsAll')->middleware('auth:api');
Route::get('/school/id/{id}', 'ApiController@schoolId')->middleware('auth:api');
Route::get('/financial/id/{id}', 'ApiController@financialId')->middleware('auth:api');
Route::get('/scholarships/all', 'ApiController@scholarshipsAll')->middleware('auth:api');
Route::get('/scholarship/{school}', 'ApiController@scholarship')->middleware('auth:api');
Route::get('/scholarship/requests', 'ApiController@scholarshipRequests')->middleware('auth:api');
Route::get('/school/studies', 'ApiController@studiesGET')->middleware('auth:api');
Route::post('/school/studies', 'ApiController@studiesPOST')->middleware('auth:api');
Route::get('/school/getSchoolStudies', 'ApiController@getStudies')->middleware('auth:api');
Route::get('/public/profile', 'ApiController@publicProfile')->middleware('auth:api');
Route::get('/school/{school}', 'ApiController@school')->middleware('api');
Route::get('/results/{type}', 'ApiController@results')->middleware('api');
Route::get('/profile/{school}', 'ApiController@schoolProfile')->middleware('api');
Route::get('/profile/auth/{school}', 'ApiController@schoolAuthProfile')->middleware('auth:api');
Route::post('/scholarship/save', 'ApiController@scholarshipSave')->middleware('auth:api');
Route::get('/scholarship/get/{scholarship}', 'ApiController@getScholarship')->middleware('api');
Route::post('/interested/save', 'ApiController@interestedSave')->middleware('auth:api');
Route::get('/interested/check', 'ApiController@interestedCheck')->middleware('auth:api');
Route::get('/school/types/all', 'ApiController@schoolTypes')->middleware('api');
Route::get('/socialLinks/get/{user}', 'ApiController@getSocialLinks')->middleware('api');
Route::post('/skills/set', function () {
    $user = User::find(request()->user);
    $skill = Skill::find(request()->skill);

    $end = $user->toggleEndorsement($skill);
    return $end;
})->middleware('auth:api');

Route::get('/skill/check', function () {
    $user = User::find(request()->user);
    $skill = Skill::find(request()->skill);

    $end = $user->checkSkill($skill);
    return $end;
})->middleware('auth:api');

Route::get('/student/mySchools', function () {
    $schools = auth()->user()->connectedSchool;
    return $schools->load('admin');

})->middleware('auth:api');

Route::get('/scholarship/{id}', function (Scholarship $id) {
    $scholarship->criteriaName = $scholarship->criteria->name;
    return $scholarship->load('school', 'level', 'financial', 'criteria');
})->middleware('api');

Route::get('/connected/students/{order}/{status}', function ($order, $status) {
    $user = auth()->user();
    $school = $user->info;
    $students = $school->students;

    $students = $school->$status()->orderBy('name')->paginate(6);

    foreach ($students as $t) {
        $t->cv;
        $t->info;
        $t->allumniStudents = $school->allumni()->count();
        $t->connectedStudents = $school->connected()->count();
    }

    return $students;
})->middleware('auth:api');

Route::post('/registration/social', function () {

    $temp = Temp::firstOrNew(array('name' => 'social-role'));
    $temp->value = request()->role;
    $temp->save();

    // $temp = new Temp;
    // $temp->name = 'social-role';
    // $temp->value = request()->role;
    // $temp->save();
    return 'Stored!';
})->middleware('api');

Route::get('/terms/last', function () {
    $school = auth()->user();
    $scholarship = Scholarship::where('school_id', $school->id)->get();
    if ($scholarship->last()->terms != null) {
        return $scholarship->last()->terms;
    }
    return 'NO';
})->middleware('auth:api');

Route::post('/image/background/save', function () {
    $school = auth()->user()->info;
    $school->background = request()->image;
    $school->save();
    Scholio::updateDummy($school);
    return 'OK';
})->middleware('auth:api');

Route::post('/school/settings', function () {
    $school = auth()->user()->info;
    $settings = $school->settings;
    $settings->{request()->name} = request()->section;
    $settings->save();
    return 'OK';
})->middleware('auth:api');

Route::get('/algolia/results', function () {
    return session()->pull('schools', 'oxi');
})->middleware('api');

Route::get('/user/reviews/', function () {
    return auth()->user()->reviews;
})->middleware('auth:api');

Route::get('/categories/{school}', function (School $school) {
    return $school->categories();
})->middleware('auth:api');

Route::post('/review/{school}/save', function (School $school) {
    $total = 0;
    $count = 0;
    try {
        $newReview = new Review;
        $newReview->user_id = auth()->user()->id;
        $newReview->school_id = $school->id;
        $newReview->text = request()->text;
        $newReview->save();
        foreach (request()->review as $review) {
            $r = new Category;
            $r->review_id = $newReview->id;
            $r->category_id = $review['category'];
            $r->stars = $review['stars'];
            $total += $review['stars'];
            $r->save();
            $count++;
        }
        $newReview->average = $total / $count;
        $newReview->save();

    } catch (\Exception $e) {
        return $total / $count;
    }

    Scholio::updateDummy($school);
    return 'OK';
})->middleware('auth:api');

Route::get('/review/{school}', function (School $school) {
    return $school->averageReviews();
})->middleware('auth:api');

Route::post('/setRoleType', function () {
    $id = request()->role;
    if ($id == 1) {
        session()->put('tttt', 'student');
    }

    if ($id == 2) {
        session()->put('tttt', 'parent');
    }

    if ($id == 3) {
        session()->put('tttt', 'teacher');
    }

    return session()->get('tttt');
});

Route::get('status/{user}/{id}', function ($user, $id) {
    if ($user == 'teacher') {
        $teacher = Teacher::find($id);
        return $teacher->status;
    }

    if ($user == 'parent') {
        $parent = Guardian::find($id);
        return $parent->status;
    }

    if ($user == 'student') {
        $student = Student::find($id);
        return $student->status;
    }
});

Route::get('/searchTag', function () {
    $search = request('tags');
    return Tag::where('name', 'LIKE', "$search%")->take(3)->pluck('slag');
});

Route::post('/school/changeStudentStatus/{id}/{status}', function ($id, $status) {
    $school = auth()->user()->info;
    $line = $school->students->where('id', $id)->first();
    $line->pivot->status = $status;
    $line->pivot->save();
    return 'ok';
})->middleware('auth:api');

Route::get('/hashtag/all', function () {
    $tags = Tag::all();
    return $tags;
})->middleware('auth:api');

Route::post('/hashtag/{tag}/add', function ($tag) {
})->middleware('auth:api');
