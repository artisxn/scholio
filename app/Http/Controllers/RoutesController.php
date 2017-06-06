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

        // session()->put('location', $location);
        // session()->put('schools', $schools);
        // session()->put('studies', $studies);

        // dd($studies);

        return view('public.results.algolia-schools', compact('schools'));

        // echo '<h1>Schools</h1>';
        // foreach ($schools as $school) {
        //     echo $school->name() . '<br />';
        // }

        // echo '<h1>Studies</h1>';
        // foreach ($studies as $study) {
        //     echo $study->name . '<br />';
        // }

        // dd('ok');

        // $type = request()->type;
        // $location = request()->location;

        // session()->put('location', $location);

        // return redirect('/public/results/' . $type);
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
        $links = SocialLink::all();
        return view('panel.pages.teacher.profile.view', compact('links'));
    }

    public function parentProfile()
    {
        return view('panel.pages.parent.profile.view');
    }

    public function devIn($data, $dash = null)
    {
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

        return back();
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
        //
        //        $studentCv = $request->all();

//        dd($request->all());

//        Student::where('user_id', Auth::user()->id)->update($studentCv);

        $studentCv = Student::where('user_id', auth()->user()->id)->first();


        if (request()->logo != null) {
            $studentCv->avatar = request()->logo;
        }


        //TODO add email, gender in student table
        $studentCv->fname = request()->firstName;
        $studentCv->lname = request()->lastName;
        $studentCv->gender = request()->gender;
        $studentCv->dob = request()->dob;
        $studentCv->address = request()->student_address;
        $studentCv->city = request()->student_city;
        $studentCv->phone = request()->student_phone;
        // $studentCv->updated_at = NOW();

        //TODO CHECK THESE FIELDS AND OTHERS WHICH ARE MISSED

        // $studentCv->father_name = request()->father_name;
        // $studentCv->mother_name = request()->mother_name;
        // $studentCv->father_job = request()->father_job;
        // $studentCv->mother_job = request()->mother_job;
        // $studentCv->father_phone = request()->father_phone;
        // $studentCv->mother_phone = request()->mother_phone;
        $studentCv->languages = request()->languages;
        $studentCv->studies = request()->studies;
        $studentCv->achievements = request()->achievements;
        $studentCv->skills = request()->skills;
        $studentCv->about = request()->about;

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
        return view('public.school.scholarship')->withScholarship($scholarship->load('school', 'level', 'financial', 'criteria', 'study.section'));
    }

    public function scholarshipEdit(Scholarship $scholarship)
    {
        return view('panel.pages.school.scholarships.edit')->withScholarship($scholarship->load('school', 'level', 'financial', 'criteria'));
    }

    public function scholarshipUpdate(Scholarship $scholarship)
    {
        return redirect('/panel/school/scholarships/view');
        // return view('panel.pages.school.scholarships.edit')->withScholarship($scholarship->load('school', 'level', 'financial', 'criteria'));
    }

    public function scholarshipDelete(Scholarship $scholarship)
    {
        $scholarship->delete();
        return redirect('/panel/school/scholarships/view');
    }

    public function admissionSave(Scholarship $scholarship)
    {
        $user = auth()->user();
        $admission = new Admission;
        $admission->user_id = $user->id;
        $admission->scholarship_id = $scholarship->id;
        $admission->save();

        $admission->createWithFields(request()->except('_token', 'firstName', 'lastName', 'email'));
        // $user->cv->updateIfNotExist($admission);

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
