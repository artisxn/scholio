<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;

class RoutesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function searchSchoolType()
    {
        $type = request()->type;
        $location = request()->location;

        session()->put('location', $location);

        return redirect('/public/results/' . $type);
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
        return view('public.school.profile')->withId($id);
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
        return view('panel.pages.teacher.profile.view');
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
}
