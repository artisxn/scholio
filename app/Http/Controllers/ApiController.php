<?php

namespace App\Http\Controllers;

use App\Dummy;
use App\Models\Financial;
use App\Models\Scholarship;
use App\Models\School;
use App\Models\SchoolTypes;
use App\Models\Study;
use App\Scholio\Scholio;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function users()
    {
        return request()->user();
    }

    public function usersAll()
    {
        $data = array(
            'users' => User::all(),
        );
        return $data;
    }

    public function notifications()
    {
        $data = array(
            'unread' => request()->user()->unreadNotifications,
        );
        return $data;
    }

    public function notificationsRequest()
    {
        $school = auht()->user()->info;

        $filtered = auth()->user()->notifications->filter(function ($value, $key) use ($school) {
            return $value->data['school_id'] == $school->id;
        });

        $data = array(
            'notifications' => $filtered,
        );

        return $data;
    }

    public function notificationsRead()
    {
        auth()->user()->unreadNotifications->markAsRead();
    }

    public function notificationsAll()
    {
        $school = auht()->user()->info;
        $notifications = DB::select('select * from notifications');
        $data = array(
            'notifications' => $notifications,
        );
        return $data;
    }

    public function schoolsAll()
    {
        $schools = School::all();
        $data = array(
            'schools' => $schools,
        );
        return $data;
    }

    public function schoolId(School $school)
    {
        return $school;
    }

    public function financialId(Financial $financial)
    {
        return $financial;
    }

    public function scholarshipsAll()
    {
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
    }

    public function scholarship(School $school)
    {
        $scholarships = $school->scholarship;

        return $scholarships->load('financial', 'level', 'study', 'user');
    }

    public function studiesGET()
    {
        $school = auth()->user()->info;
        $levels = [];

        foreach ($school->type->level as $level) {
            array_push($levels, $level);

            foreach ($level->section as $section) {
                foreach ($section->study as $study) {
                }
            }
        }

        $data = array(
            'levels' => $levels,
        );
        return $data;
    }

    public function studiesPOST()
    {
        $school = auth()->user()->info;
        $school->study()->detach();

        foreach (request()->checkedStudies as $studyID) {
            $study = Study::find($studyID);

            $study->school()->attach($school);
        }
        return 'OK';
    }

    public function getStudies()
    {
        $school = auth()->user()->info;
        $data = [];

        foreach ($school->study as $study) {
            array_push($data, Study::with('section.level')->where('id', $study->id)->get());
        }

        return $data;
    }

    public function publicProfile()
    {
        return auth()->user()->info->name;
    }

    public function school(School $school)
    {
        return $school->load('image');
    }

    public function results($type)
    {
        $schools = School::with('image')->with('logo')->where('type_id', $type)->get();

        foreach ($schools as $s) {
            $s->lengthStudents = $s->lengthStudents();
            $s->lengthTeachers = $s->lengthTeachers();
            $s->lengthStudies = $s->lengthStudies();
            $s->lengthScholarships = $s->lengthScholarships();
        }
        return $schools;
    }

    public function schoolProfile(School $school)
    {
        $school->lengthStudents = $school->lengthStudents();
        $school->lengthTeachers = $school->lengthTeachers();
        $school->lengthStudies = $school->lengthStudies();
        $school->lengthScholarships = $school->lengthScholarships();
        $school->name = $school->name();
        $school->email = $school->email();

        $data = [];

        foreach ($school->study as $study) {
            array_push($data, Study::with('section.level')->where('id', $study->id)->get());
        }

        $ints = [];

        foreach ($school->scholarship as $scholarship) {
            $scholarship->level = $scholarship->level;
            $scholarship->section = $scholarship->study->section;
            $scholarship->criteria = $scholarship->criteria->name;
            $scholarship->financial = $scholarship->financial->plan;
            $scholarship->length = $scholarship->usersLength();
            $scholarship->interests = $scholarship->interestsLength();

            if (auth()->check()) {
                $ints = ['sd'];
                $student = User::find(auth()->user()->id);
                if ($student->interested->contains($scholarship)) {
                    array_push($ints, $scholarship->id);
                }
            }
            $scholarship->studentInterests = $ints;
        }

        $school->levels = $data;

        return $school->load('image');
    }

    public function scholarshipSave()
    {
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
            Scholio::updateDummy($scholarship->school);
            $data = ['message' => 'SAVED SUCCESSFULLY', 'redirect' => route('scholarship-view')];
        } catch (\Exception $e) {
            $data = ['message' => 'ERROR ' . $e];
        }

        return $data;
    }

    public function getScholarship(Scholarship $scholarship)
    {
        $scholarship->length = $scholarship->usersLength();
        return $scholarship->load('financial', 'criteria');
    }

    public function interestedSave()
    {
        $student = User::find(auth()->user()->id);
        $scholarship = Scholarship::find(request()->scholarship);
        $student->interested()->toggle($scholarship);

        if ($student->interested->contains($scholarship)) {
            return 'YES';
        }

        Scholio::updateDummy($scholarship->school);

        return 'NO';
    }

    public function interestedCheck()
    {
        if (auth()->user()->interested->contains(request()->scholarship)) {
            return 'YES';
        }

        return 'NO';
    }

    public function schoolTypes()
    {
        return SchoolTypes::all();
    }

    public function connectedTeachers()
    {
        $school = auth()->user()->info;
        $users = $school->users;
        $teachers = [];
        foreach ($users as $user) {
            if ($user->role == "teacher") {
                array_push($teachers, $user);
            }

        }

        $data = array(
            'teachers' => $teachers,
        );

        return $data;
    }

    public function connectedStudents()
    {
        $school = auth()->user()->info;
        $users = $school->users;
        $students = [];
        foreach ($users as $user) {
            if ($user->role == "student") {
                array_push($students, $user);
            }

        }

        $data = array(
            'students' => $students,
        );

        return $data;
    }

    public function scholarshipFind(Scholarship $scholarship)
    {
        $scholarship->length = $scholarship->usersLength();
        return $scholarship->load('financial', 'criteria');
    }

    public function connectionSchool(School $school)
    {
        $school->users()->attach(auth()->user());
        Scholio::updateDummy($school);
        return 'OK';
    }

    public function testResults($type)
    {
        if ($type == 'all') {
            $schools = Cache::get('dummy.all', function () {
                return Dummy::all();
            });
        } else {
            $schools = Cache::get('dummy.type', function () use ($type) {
                return Dummy::where('type_id', $type)->get();
            });
        }

        return $schools;
    }
}
