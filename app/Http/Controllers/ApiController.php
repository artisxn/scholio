<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Dummy;
use App\Models\Financial;
use App\Models\Scholarship;
use App\Models\School;
use App\Models\SchoolTypes;
use App\Models\Study;
use App\Models\Tag;
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
        return request()->user()->unreadNotifications;
    }

    public function notificationsRead($id)
    {
        foreach (auth()->user()->unreadNotifications as $notification) {
            if ($notification->data['id'] == $id) {
                $notification->markAsRead();
            }
        }
        $user = User::find($id);
        $user->apply()->detach(auth()->user()->info);
        return 'OK';
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
        foreach ($scholarships as $scholar) {
            $scholar->section = $scholar->study->section[0];
        }

        return $scholarships->load('financial', 'level', 'study', 'user', 'criteria');
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
            $s->rating = $s->averageStars();
        }
        return $schools;

    }

    public function schoolProfile(School $school)
    {
        $school->lengthStudents = $school->lengthStudents();
        $school->lengthTeachers = $school->lengthTeachers();
        $school->lengthStudies = $school->lengthStudies();
        $school->lengthScholarships = $school->lengthScholarships();
        $school->activeScholarships = $school->activeScholarships()->count();
        $school->name = $school->name();
        $school->email = $school->email();
        $school->teachers = $school->teachers;
        $school->stars = $school->averageStars();
        $school->avgReviews = $school->averageReviews();
        $school->reviews = $school->reviews->load('user');

        foreach ($school->teachers as $teacher) {
            $teacher->info;
        }

        $data = [];

        foreach ($school->study as $study) {
            array_push($data, Study::with('section.level')->where('id', $study->id)->get());
        }

        $ints = [];

        $schols = $school->scholarship->where('active', 1)->take(4);

        foreach ($schols as $scholarship) {
            $scholarship->level = $scholarship->level;
            $scholarship->criteria = $scholarship->criteria->name;
            $scholarship->financial = $scholarship->financial->plan;
            $scholarship->length = $scholarship->usersLength();
            $scholarship->interests = $scholarship->interestsLength();
            $scholarship->multipleStudies = $scholarship->multipleStudies;
            // if (request()->cookie('lang') == 'en') {
            // $scholarship->criteria = $scholarship->criteriaEN->name;
            // $scholarship->financial = $scholarship->financialEN->plan;
            // }

            if (auth()->check() && auth()->user()->role == 'student') {
                $ints = ['sd'];
                $student = User::find(auth()->user()->id);
                if ($student->interested->contains($scholarship)) {
                    array_push($ints, $scholarship->id);
                }
            }

            if ($scholarship->multiple) {
                $arr = [];
                foreach ($scholarship->multipleStudies as $st) {
                    array_push($arr, $st->section[0]->icon);
                }
                $scholarship->section = $arr;
            } else {
                $scholarship->section = $scholarship->study->section;
            }
            $scholarship->studentInterests = $ints;

        }

        $school->levels = $data;

        return $school->load('image');
    }

    public function schoolAuthProfile(School $school)
    {
        $school->lengthStudents = $school->lengthStudents();
        $school->lengthTeachers = $school->lengthTeachers();
        $school->lengthStudies = $school->lengthStudies();
        $school->lengthScholarships = $school->lengthScholarships();
        $school->activeScholarships = $school->activeScholarships()->count();
        $school->name = $school->name();
        $school->email = $school->email();
        $school->teachers = $school->teachers;
        $school->stars = $school->averageStars();
        $school->avgReviews = $school->averageReviews();
        $school->reviews = $school->reviews->load('user');

        foreach ($school->teachers as $teacher) {
            $teacher->info;
        }

        $data = [];

        foreach ($school->study as $study) {
            array_push($data, Study::with('section.level')->where('id', $study->id)->get());
        }

        $ints = [];

        $schols = $school->scholarship->where('active', 1)->take(4);

        foreach ($schols as $scholarship) {
            $scholarship->level = $scholarship->level;
            $scholarship->criteria = $scholarship->criteria->name;
            $scholarship->financial = $scholarship->financial->plan;
            $scholarship->length = $scholarship->usersLength();
            $scholarship->interests = $scholarship->interestsLength();
            $scholarship->userInterested = auth()->user()->interestedIn($scholarship->id);
            $scholarship->multipleStudies = $scholarship->multipleStudies;
            if ($scholarship->multiple) {
                $arr = [];
                foreach ($scholarship->multipleStudies as $st) {
                    array_push($arr, $st->section[0]->icon);
                }
                $scholarship->section = $arr;
            } else {
                $scholarship->section = $scholarship->study->section;
            }

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

            // Add tags
            foreach (request()->tags as $tag) {
                if (!isset($tag['id'])) {
                    $newTag = new Tag;
                    $newTag->name = $tag['name'];
                    $newTag->slag = $tag['name'];
                    $newTag->save();
                    $scholarship->tag()->attach($newTag);
                } else {
                    $scholarship->tag()->attach(Tag::find($tag['id']));
                }
            }

            $data = ['message' => 'SAVED SUCCESSFULLY', 'redirect' => route('scholarship-view')];
            Scholio::updateDummy($scholarship->school);
            Scholio::dummyScholarshipCreate($scholarship);
        } catch (\Exception $e) {
            $data = ['message' => 'ERROR ' . $e];
        }

        return $data;
    }

    public function getScholarship(Scholarship $scholarship)
    {
        $scholarship->length = $scholarship->usersLength();
        $scholarship->created = Carbon::parse($scholarship->created_at)->format('d/m/Y');
        $scholarship->end = Carbon::parse($scholarship->end_at)->format('d/m/Y');
        $scholarship->exams = Carbon::parse($scholarship->exam_date)->format('d/m/Y');
        if (!$scholarship->exam) {
            $scholarship->exams = '-';
        }
        $scholarship->interested = $scholarship->interestsLength();
        return $scholarship->load('financial', 'criteria');
    }

    public function interestedSave()
    {
        $student = auth()->user();
        $scholarship = Scholarship::find(request()->scholarship);
        $student->interested()->toggle($scholarship);

        if ($student->interested->contains($scholarship)) {
            return 'YES';
        }

        // Scholio::updateDummy($scholarship->school);

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
        return auth()->user()->info->teachers->load('info');
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

    public function getSocialLinks(User $user)
    {
        $links = [];
        foreach ($user->socialLinks->toArray() as $key => $value) {
            if ($key != 'id' && $key != 'user_id' && $value != null) {
                $links[$key] = $value;
            }
        }
        return $links;
    }

    public function scholarshipRequests()
    {
        return auth()->user()->info->admissions();
    }

    public function getSchoolProfileHastags()
    {
        $tags = auth()->user()->info->tag;

        return $tags;
    }

    public function saveSchoolProfileHastags(Tag $tag)
    {
        $message = 'OK';
        try {
            auth()->user()->info->tag()->toggle($tag);
        } catch (\Exception $e) {
            $message = $e;
        }

        return $message;
    }

    public function deleteSchoolProfileHastags(Tag $tag)
    {
        $message = 'OK';
        try {
            auth()->user()->info->tag()->detach($tag);
        } catch (Exception $e) {
            $message = $e;
        }

        return $message;
    }

    public function addSchoolProfileHastag($tag)
    {
        $newTag = new Tag;
        $newTag->name = $tag;
        $newTag->slag = str_replace("_", " ", $tag);
        $newTag->save();

        return $newTag;
    }

    public function swapSchoolCards($from, $to)
    {
        $error = null;

        try {
            $card1 = Card::find($from);
            $card2 = Card::find($to);
            $student = $card1->student_id;

            $card1->role = 'fake';
            $card1->student_id = null;
            $card1->save();

            $card2->role = 'student';
            $card2->student_id = $student;
            $card2->save();
            return 'OK';
        } catch (Exception $e) {
            $error = $e;
        }

        return $error;

    }

    public function getSchoolCards($status, $study, $name)
    {
        $exact = Card::where('name', $name)->where('role', 'fake')->first();
        $card = null;
        $card2 = null;
        if ($exact) {
            $card = Card::where('student_id', $exact->student_id)->where('user_id', auth()->user()->id)->where('role', 'fake')->where('status', 'connected')->where('type', 'sd')->get()->except($exact->id);
            $card2 = Card::where('student_id', $exact->student_id)->where('user_id', auth()->user()->id)->where('role', 'fake')->where('status', 'connected')->where('type', null)->get()->except($exact->id);
        } else {
            $card = Card::where('user_id', auth()->user()->id)->where('role', 'fake')->where('status', 'connected')->where('type', 'sd')->get();
            $card2 = Card::where('user_id', auth()->user()->id)->where('role', 'fake')->where('status', 'connected')->where('type', null)->get();
        }

        $mergedCards = $card->merge($card2);

        $final = collect(['exact' => $exact]);

        return $final->merge($mergedCards);
    }

    public function updateSchoolCard(Card $card, $field, $newValue)
    {
        $card->$field = $newValue;
        $error = null;
        try {
            $card->save();
            return 'OK';
        } catch (Exception $e) {
            $error = $e;
        }

        return $error;
    }

    public function uploadSchoolImage()
    {
        $data = request()->input('img');
        list($type, $data) = explode(';', $data);
        list(, $data) = explode(',', $data);
        $data = base64_decode($data);
        $ext = '.jpg';
        $imageName = time() . $ext;
        $schoolName = auth()->user()->info->type->name . '_' . auth()->user()->id . '_' . auth()->user()->name;
        $path = public_path('upload/school/' . $schoolName . '/');
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        file_put_contents($path . $imageName, $data);
        $imageUrl = url('upload/school/' . $schoolName . '/' . $imageName);

        $image = new Image;
        $image->name = $imageName;
        $image->path = '/upload/school/' . $schoolName . '/';
        $image->full_path = '/upload/school/' . $schoolName . '/' . $imageName;
        $image->extension = $ext;
        $image->alt = auth()->user()->name;
        $image->type = 'Image';
        $image->save();

        auth()->user()->info->image()->attach($image);

        return response(['data' => $imageUrl], 201);
    }

    public function uploadUserAvatar()
    {
        $logo = request()->logo;
        $data = request()->input('img');
        list($type, $data) = explode(';', $data);
        list(, $data) = explode(',', $data);
        $data = base64_decode($data);
        $ext = '.jpg';
// $imageName = time() . $ext;
        $imageName = auth()->user()->role . '_' . auth()->user()->id . '_' . auth()->user()->name . $ext;
        $path = public_path('upload/avatar/');
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        file_put_contents($path . $imageName, $data);
        $imageUrl = url('upload/avatar/' . $imageName);

        if (!$logo) {
            auth()->user()->info->avatar = '/upload/avatar/' . $imageName;
        } else {
            auth()->user()->info->logo = '/upload/avatar/' . $imageName;
        }

        auth()->user()->info->save();

        return response(['data' => $imageUrl], 201);
    }

    public function saveStudentStudy()
    {
        $school = auth()->user()->info;
        $study = Study::find(request()->study);
        $card = Card::find(request()->student);

        if ($card->role == 'student' && $card->student_id) {
            $student = User::find($card->student_id);

            if (request()->std == 1) {
                $school->students->where('id', $card->student_id)->first()->pivot->type = $study->name;
                $school->students->where('id', $card->student_id)->first()->pivot->study_id = $study->id;
                $school->students->where('id', $card->student_id)->first()->pivot->level = $study->section[0]->level->name;
                $school->students->where('id', $card->student_id)->first()->pivot->save();
            }

            if (request()->std == 2) {
                $school->students->where('id', $card->student_id)->first()->pivot->type2 = $study->name;
                $school->students->where('id', $card->student_id)->first()->pivot->study_id2 = $study->id;
                $school->students->where('id', $card->student_id)->first()->pivot->level2 = $study->section[0]->level->name;
                $school->students->where('id', $card->student_id)->first()->pivot->save();
            }

            $student->studyConnection()->save($study, ['school_id' => $school->id]);
        }

        if (request()->std == 1) {
            $card->type = $study->name;
            $card->study_id = $study->id;
            $card->level = $study->section[0]->level->name;
            $card->save();
        }

        if (request()->std == 2) {
            $card->type2 = $study->name;
            $card->study_id2 = $study->id;
            $card->level2 = $study->section[0]->level->name;
            $card->save();
        }

    }

    public function removeStudentStudy()
    {
        $school = auth()->user()->info;
        $study = Study::find(request()->study);
        $card = Card::find(request()->student);
        $student = User::find(request()->student);

        if ($card->role == 'student' && $card->student_id) {
            $school->students->where('id', $card->student_id)->first()->pivot->type2 = null;
            $school->students->where('id', $card->student_id)->first()->pivot->study_id2 = null;
            $school->students->where('id', $card->student_id)->first()->pivot->level2 = null;
            $school->students->where('id', $card->student_id)->first()->pivot->save();
        }

        $card->type2 = null;
        $card->study_id2 = null;
        $card->level2 = null;
        $card->save();
    }

    public function notificationGetSchoolLevelSections()
    {
        $school = auth()->user()->info;
        $studies = [];
        $data = [];
        $sections = [];

        $schoolLevels = $school->levels();

        foreach ($schoolLevels as $level) {
            foreach ($school->section($level) as $section) {
                array_push($sections, ['section' => Section::find($section), 'studies' => $studies]);
            }
            array_push($data, ['level' => Level::find($level), 'sections' => $sections]);
            $sections = [];
        }

        return $data;
    }

    public function notificationGetSchoolLevelStudies()
    {
        $school = auth()->user()->info;
        $studies = [];
        $data = [];
        $sections = [];

        $schoolLevels = $school->levels();

        foreach ($schoolLevels as $level) {
            foreach ($school->section($level) as $section) {
                foreach ($school->studyFromSection($section) as $study) {
                    array_push($studies, ['study' => Study::find($study)]);
                }
            }
            array_push($data, ['level' => Level::find($level), 'studies' => $studies]);
            $studies = [];
        }

        return $data;
    }

    public function notificationGetSchoolLevelStudiesFromSchool($school_id)
    {
        $school = School::find($school_id);
        $studies = [];
        $data = [];
        $sections = [];

        $schoolLevels = $school->levels();

        foreach ($schoolLevels as $level) {
            foreach ($school->section($level) as $section) {
                foreach ($school->studyFromSection($section) as $study) {
                    array_push($studies, ['study' => Study::find($study)]);
                }
            }
            array_push($data, ['level' => Level::find($level), 'studies' => $studies]);
            $studies = [];
        }

        return $data;
    }

    public function notificationGetSchoolLevelSectionsFromSchool($school_id)
    {
        $school = School::find($school_id);
        $studies = [];
        $data = [];
        $sections = [];

        $schoolLevels = $school->levels();

        foreach ($schoolLevels as $level) {
            foreach ($school->section($level) as $section) {
                array_push($sections, ['section' => Section::find($section), 'studies' => $studies]);
            }
            array_push($data, ['level' => Level::find($level), 'sections' => $sections]);
            $sections = [];
        }

        return $data;
    }

}
