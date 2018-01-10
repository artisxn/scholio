<?php

namespace App\Http\Controllers;

use App\Events\StudentAppliedOnScholarship;
use App\Models\Admission;
use App\Models\Scholarship;
use App\Models\School;
use App\Models\SocialLink;
use App\Models\Student;
use App\Models\Study;
use App\Scholio\Scholio;
use App\Key;

class RoutesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function searchSchoolType()
    {
        $schools = School::search(request()->type)->get();
        $studies = Study::search(request()->type)->get();
        $location = request()->location;
        return view('public.results.algolia-schools', compact('schools'));
    }

    public function token()
    {
        return view('panel.token');
    }

    public function testSchools()
    {
        $school->lengthStudents = $school->lengthStudents();
        $school->lengthTeachers = $school->lengthTeachers();
        $school->lengthStudies = $school->lengthStudies();
        $school->lengthScholarships = $school->lengthScholarships();

        $data = [];

        foreach ($school->study as $study) {
            array_push($data, App\Models\Study::with('section.level')->where('id', $study->id)->get());
        }

        $school->levels = $data;

        return $school->load('image', 'scholarship.financial', 'scholarship.criteria');
    }

    public function publicResults($id)
    {
        return view('public.results.schools');
    }

    public function publicProfile($id)
    {
        $school = School::find($id);
        return view('public.school.profile')->withId($id)->withSchool($school);
    }

    public function redirectDashboard()
    {
        return redirect('/panel/dashboard');
    }

    public function studentProfile()
    {
        return view('panel.pages.student.profile.view');
    }

    public function studentKinship()
    {
        return view('panel.pages.student.kinship.view');
    }

    public function teacherProfile()
    {
        $links = SocialLink::where('user_id', auth()->user()->id)->get();
        return view('panel.pages.teacher.profile.view', compact('links'));
    }

    public function teacherProfileSave(){

        $fname = request()->fname;
        $lname = request()->lname;
        $address = request()->address;
        $city = request()->city;
        $phone = request()->phone;
        $dob = request()->dob;
        $gender = request()->gender;
        $title = request()->title;

        $teacher = auth()->user()->info;
        $teacher->fname = $fname;
        $teacher->lname = $lname;
        $teacher->address = $address;
        // $teacher->city = $city;
        $teacher->phone = $phone;
        $teacher->dob = $dob;
        $teacher->gender = $gender;
        $teacher->title = $title;
        $teacher->save();
        auth()->user()->name = $lname . ' ' . $fname;
        auth()->user()->save();

        if (request()->facebook) {
            $this->saveSocialLinks(request()->facebook, 'facebook');
        } else {
            $this->deleteIfExists('facebook');
        }

        if (request()->twitter) {
            $this->saveSocialLinks(request()->twitter, 'twitter');
        } else {
            $this->deleteIfExists('twitter');
        }

        if (request()->youtube) {
            $this->saveSocialLinks(request()->youtube, 'youtube');
        } else {
            $this->deleteIfExists('youtube');
        }

        if (request()->instagram) {
            $this->saveSocialLinks(request()->instagram, 'instagram');
        } else {
            $this->deleteIfExists('instagram');
        }

        if (request()->skype) {
            $this->saveSocialLinks(request()->skype, 'skype');
        } else {
            $this->deleteIfExists('skype');
        }

        if (request()->google) {
            $this->saveSocialLinks(request()->google, 'google');
        } else {
            $this->deleteIfExists('google');
        }

        if (request()->pinterest) {
            $this->saveSocialLinks(request()->pinterest, 'pinterest');
        } else {
            $this->deleteIfExists('pinterest');
        }

        if (request()->linkedin) {
            $this->saveSocialLinks(request()->linkedin, 'linkedin');
        } else {
            $this->deleteIfExists('linkedin');
        }

        session()->flash('updated_profile', 'Your profile has been updated');
        return back();

    }

    public function saveSocialLinks($link, $name)
    {
        if (!auth()->user()->socialLinks->pluck('name')->contains($name)) {
            $social = new SocialLink;
            $social->user_id = auth()->user()->id;
            $social->name = $name;
            $social->link = $link;
            return $social->save();
        } else {
            $social = auth()->user()->socialLinks;
            $s = $social->where('name', $name)->first();
            $s->link = $link;
            return $s->save();
        }
    }
    public function deleteIfExists($name)
    {
        // dd(auth()->user()->);
        if (auth()->user()->socialLinks->pluck('name')->contains($name)) {
            $s = auth()->user()->socialLinks->where('name', $name)->first();
            $s->delete();
        }
    }

    public function parentProfile()
    {
        return view('panel.pages.parent.profile.view');
    }

    public function devIn($data, $dash = null)
    {
        if(!Key::find(1)->login){
            return abort(404);
        }
        if (auth()->check()) {
            auth()->logout();
        }
        if (is_numeric($data)) {
            auth()->loginUsingId($data);
        } else {
            if ($data == "κολεγειο" || $data == "college" || $data == "act" || $data == "anatolia") {
                auth()->loginUsingId(1);
            }
            if ($data == "iek" || $data == "ιεκ" || $data == "akmi" || $data == "ακμη") {
                auth()->loginUsingId(3);
            }
            if ($data == "fr" || $data == "frontistirio" || $data == "φροντηστηριο") {
                auth()->loginUsingId(7);
            }
            if ($data == "ιδιωτικο" || $data == "idiotiko" || $data == "sxoleio" || $data == "σχολειο") {
                auth()->loginUsingId(11);
            }
            if ($data == "χορος" || $data == "xoros" || $data == "danza" || $data == "dance") {
                auth()->loginUsingId(10);
            }
            if ($data == "metropolitan" || $data == "amc") {
                auth()->loginUsingId(2);
            }
            if ($data == "pavlos" || $data == "παυλος") {
                auth()->loginUsingId(8);
            }
            if ($data == 'st') {
                auth()->loginUsingId(21);
            }

        }
        if ($dash) {
            return redirect('/dashboard');
        }

        return redirect('/dashboard');
    }

    public function mySchools()
    {
        return view('panel.pages.student.schools.mySchools');
    }

    public function studentCv()
    {
        return view('panel.pages.student.cv.studentCv');
    }

    public function studentCvStore()
    {
        $studentCv = Student::where('user_id', auth()->user()->id)->first();

        if (request()->logo != null) {
            $studentCv->avatar = request()->logo;
        }

        $studentCv->fname = request()->firstName;
        $studentCv->lname = request()->lastName;
        $studentCv->gender = request()->gender;
        $studentCv->dob = request()->dob;
        $studentCv->address = request()->student_address;
        $studentCv->city = request()->student_city;
        $studentCv->phone = request()->student_phone;
        $studentCv->save();

        return view('panel.pages.student.cv.studentCv');

    }

    public function devOut()
    {
        auth()->logout();
        return redirect('/');
    }

    public function scholarship(Scholarship $scholarship)
    {
        if ($scholarship->multiple) {
            $multipleSections = [];
            foreach ($scholarship->multipleStudies as $st) {
                array_push($multipleSections, $st->section[0]->id);
            }

            $sectionIcon = $scholarship->multipleStudies[0]->section[0]->icon;

            if (!$this->uniqueArr($multipleSections)) {
                $sectionIcon = '/panel/assets/images/steps/studies.png';
            }

            $scholarship->sectionIcon = $sectionIcon;
        }
        return view('public.school.scholarship')
            ->withScholarship($scholarship->load('school', 'level', 'financial', 'criteria', 'study.section'));
    }

    public function uniqueArr($array)
    {
        return count(array_unique($array)) == 1 ?? false;
    }

    public function scholarshipEdit(Scholarship $scholarship)
    {
        return view('panel.pages.school.scholarships.edit')->withScholarship($scholarship->load('school', 'level', 'financial', 'criteria'));
    }

    public function scholarshipUpdate(Scholarship $scholarship)
    {
        return redirect('/panel/school/scholarships/view');
    }

    public function scholarshipDelete(Scholarship $scholarship)
    {
        $scholarship->delete();
        return redirect('/panel/school/scholarships/view');
    }

    public function admissionSave(Scholarship $scholarship)
    {
        $user = auth()->user();
        $user->info->fname = request()->fname;
        $user->info->lname = request()->lname;
        $user->info->save();
        $admission = new Admission;
        $admission->user_id = $user->id;
        $admission->scholarship_id = $scholarship->id;
        $admission->save();

        $admission->createWithFields(request()->except('_token', 'firstName', 'lastName', 'email'));
        // $user->cv->updateIfNotExist($admission);
        Scholio::dummyScholarshipUpdate($scholarship);

        event(new StudentAppliedOnScholarship(auth()->user(), $scholarship));

        return redirect('/scholarship' . '/' . $scholarship->id);
    }

    public function classShow()
    {
        $student = auth()->user()->info;
        $lectures = $student->lecture;
        return view('panel.pages.classes.student.show', compact('lectures'));
    }

    public function classLecture(Lecture $lecture)
    {
        return view('panel.pages.classes.student.index', compact('lecture'));
    }

    public function teacherClassShow()
    {
        $teacher = auth()->user()->info;
        $lectures = $teacher->lecture;
        return view('panel.pages.classes.show', compact('teacher', 'lectures'));
    }

    public function teacherClassLecture(Lecture $lecture)
    {
        $badges = Badge::all();
        return view('panel.pages.classes.index', compact('lecture', 'badges'));
    }

    public function teacherClassBadge(Lecture $lecture, Student $student)
    {
        $badge = request()->badge;
        $student->badge()->attach($badge, ['lecture_id' => $lecture->id]);
        return back();
    }

    public function reviewShow()
    {
        $reviews = auth()->user()->reviews;
        return view('panel.pages.student.reviews.show', compact('reviews'));
    }

    public function reviewCreate(School $school)
    {
        if (auth()->user()->isConnectedWithSchool($school) && !auth()->user()->reviewedSchool($school)) {
            return view('panel.pages.student.reviews.create', compact('school'));
        }
        return redirect('/panel/users/review/show');
    }

    public function studentDelete()
    {
        Scholio::deleteUser(auth()->user());
        return 'DELETED';
    }
}
