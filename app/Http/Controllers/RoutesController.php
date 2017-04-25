<?php

namespace App\Http\Controllers;

use App\Events\StudentAppliedOnScholarship;
use App\Models\Admission;
use App\Models\Scholarship;
use App\Models\School;
use App\Models\SocialLink;
use App\Models\Student;
use App\Models\Study;

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
        $school = School::find(1);
        // dd($school->settings);
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

        if (request()->avatar != null) {
            $studentCv->avatar = request()->avatar;
        }
        $studentCv->fname = request()->fname;
        $studentCv->lname = request()->lname;
        $studentCv->gender = request()->gender;
        $studentCv->dob = request()->dob;
        $studentCv->address = request()->address;
        $studentCv->phone = request()->phone;
        $studentCv->father_name = request()->father_name;
        $studentCv->mother_name = request()->mother_name;
        $studentCv->father_job = request()->father_job;
        $studentCv->mother_job = request()->mother_job;
        $studentCv->father_phone = request()->father_phone;
        $studentCv->mother_phone = request()->mother_phone;
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
        $admission->father_name = request()->father_name;
        $admission->father_email = request()->father_email;
        $admission->father_phone = request()->father_phone;
        $admission->father_city = request()->father_city;
        $admission->father_post_code = request()->father_post_code;
        $admission->father_job = request()->father_job;
        $admission->father_company = request()->father_company;
        $admission->father_vat = request()->father_vat;
        $admission->father_income = request()->father_income;
        $admission->father_id_number = request()->father_id_number;
        $admission->mother_name = request()->mother_name;
        $admission->mother_email = request()->mother_email;
        $admission->mother_phone = request()->mother_phone;
        $admission->mother_city = request()->mother_city;
        $admission->mother_post_code = request()->mother_post_code;
        $admission->mother_job = request()->mother_job;
        $admission->mother_company = request()->mother_company;
        $admission->mother_vat = request()->mother_vat;
        $admission->mother_income = request()->mother_income;
        $admission->mother_id_number = request()->mother_id_number;
        $admission->guardian_name = request()->guardian_name;
        $admission->guardian_email = request()->guardian_email;
        $admission->guardian_phone = request()->guardian_phone;
        $admission->guardian_city = request()->guardian_city;
        $admission->guardian_post_code = request()->guardian_post_code;
        $admission->guardian_job = request()->guardian_job;
        $admission->guardian_company = request()->guardian_company;
        $admission->guardian_vat = request()->guardian_vat;
        $admission->guardian_income = request()->guardian_income;
        $admission->guardian_id_number = request()->guardian_id_number;
        $admission->id_number = request()->id_number;
        $admission->post_code = request()->post_code;
        $admission->religion = request()->religion;
        $admission->nationality = request()->nationality;
        $admission->place_of_birth = request()->place_of_birth;
        $admission->student_relatives = request()->student_relatives;
        $admission->school_grades = request()->school_grades;
        $admission->previous_school = request()->previous_school;
        $admission->polyteknos = request()->polyteknos;
        $admission->skills = request()->skills;
        $admission->languages = request()->languages;
        $admission->certifications = request()->certifications;
        $admission->awards = request()->awards;
        $admission->other_interests = request()->other_interests;
        $admission->notes = request()->notes;

        $admission->save();

        $user->cv->updateIfNotExist($admission);

        event(new StudentAppliedOnScholarship(auth()->user(), $scholarship));

        return redirect('/scholarship' . '/' . $scholarship->id);
    }
}
