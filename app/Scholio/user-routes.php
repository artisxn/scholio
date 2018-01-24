<?php

use App\Models\Skill;
use App\Models\University;
use App\Models\Job;
use App\Models\Company;
use App\Models\Work;
use Carbon\Carbon;
use App\Models\Certificate;
use App\Models\Cvteacherstudy;

Route::group(['middleware' => 'is.student', 'prefix' => 'student'], function () {
    Route::post('/delete', 'RoutesController@studentDelete')->name('students-delete');
    Route::get('/profile', 'RoutesController@studentProfile')->name('students-profile');
    Route::get('/mySchools', 'RoutesController@mySchools')->name('students-my-schools');
    Route::get('/studentCv', 'RoutesController@studentCv')->name('students-cv');
    Route::get('/kinship', 'RoutesController@studentKinship')->name('students-kinship');
    Route::get('/review/show', 'RoutesController@reviewShow')->name('student-review-show');
    Route::get('/review/create/{school}', 'RoutesController@reviewCreate')->name('student-review-create');
    Route::get('/scholarship/request', function () {
        $admissions = auth()->user()->admissions->load('scholarship');
        return view('panel.pages.student.scholarships.requests', compact('admissions'));
    })->name('student-scholarship-request');
    // Route::get('/class/show', 'RoutesController@classShow')->name('student-class-show');
    // Route::get('/class/{lecture}', 'RoutesController@classLecture')->name('student-class-lecture');
});

Route::group(['middleware' => 'is.teacher', 'prefix' => 'teacher'], function () {
    Route::get('/profile', 'RoutesController@teacherProfile')->name('teachers-profile');
    Route::get('/class/show', 'RoutesController@teacherClassShow');
    Route::get('/class/{lecture}', 'RoutesController@teacherClassLecture');
    Route::post('/class/{lecture}/badge/{student}', 'RoutesController@teacherClassBadge');
    Route::get('/cv', function () {
        $skills = Skill::all()->pluck('name');
        $cert = University::all()->pluck('name');
        return view('panel.pages.teacher.profile.cv', compact('skills', 'cert'));
    })->name('teacher-cv');

    Route::post('/cv/update/about', function () {
        $teacher = auth()->user()->info;
        $about = request()->about;

        $teacher->about = $about;
        $teacher->save();
        return redirect('panel/users/teacher/cv');
    })->name('teacher-cv-about-post');

    Route::post('/cv/update/skills', function () {
        $skill = request()->skill;

        $skill_model = Skill::where('name', $skill)->first();

        if(!$skill_model){
            $newSkill = new Skill;
            $newSkill->name = $skill;
            $newSkill->save();
            $skill_model = $newSkill;
        }

        auth()->user()->addFakeSkill($skill_model, auth()->user());

        return redirect('panel/users/teacher/cv');
    })->name('teacher-cv-skills');

    Route::post('/cv/update/experience', function(){
        $job = request()->job;
        $company = request()->company;
        $from = request()->start;
        $until = request()->end;

        $job_model = Job::where('name', $job)->first();
        $company_model = Company::where('name', $company)->first();

        if(!$job_model){
            $newJob = new Job;
            $newJob->name = $job;
            $newJob->save();
            $job_model = $newJob;
        }

        if(!$company_model){
            $newCo = new Company;
            $newCo->name = $company;
            $newCo->save();
            $company_model = $newCo;
        }

        $work = new Work;
        $work->user_id = auth()->user()->id;
        $work->job_id = $job_model->id;
        $work->company_id = $company_model->id;
        $work->from = $from;
        $work->until = $until;
        $work->save();

        return redirect('panel/users/teacher/cv');

    })->name('teacher-cv-experience-post');

    Route::post('/cv/update/experience/edit', function () {
        $work = Work::find(request()->workID);

        if(request()->del == 'yes'){
            $work->delete();
            return redirect('panel/users/teacher/cv');
        }

        $job = request()->job;
        $company = request()->company;
        $from = request()->start;
        $until = request()->end;
        

        $job_model = Job::where('name', $job)->first();
        $company_model = Company::where('name', $company)->first();

        if (!$job_model) {
            $newJob = new Job;
            $newJob->name = $job;
            $newJob->save();
            $job_model = $newJob;
        }

        if (!$company_model) {
            $newCo = new Company;
            $newCo->name = $company;
            $newCo->save();
            $company_model = $newCo;
        }

        
        $work->user_id = auth()->user()->id;
        $work->job_id = $job_model->id;
        $work->company_id = $company_model->id;
        $work->from = $from;
        $work->until = $until;
        $work->save();

        return redirect('panel/users/teacher/cv');

    })->name('teacher-cv-experience-edit');

    Route::post('/cv/update/certificate', function () {
        $degree = request()->degree;
        $university = request()->university;
        $from = request()->start;
        $until = request()->end;

        $degree_model = Cvteacherstudy::where('name', $degree)->first();
        $university_model = University::where('name', $university)->first();

        if (!$degree_model) {
            $newDegree = new Cvteacherstudy;
            $newDegree->name = $degree;
            $newDegree->save();
            $degree_model = $newDegree;
        }

        if (!$university_model) {
            $newuniversity = new University;
            $newuniversity->name = $university;
            $newuniversity->save();
            $university_model = $newuniversity;
        }

        $certificate = new Certificate;
        $certificate->user_id = auth()->user()->id;
        $certificate->study_id = $degree_model->id;
        $certificate->university_id = $university_model->id;
        $certificate->from = $from;
        $certificate->until = $until;
        $certificate->save();

        return redirect('panel/users/teacher/cv');

    })->name('teacher-cv-certificate-post');

    Route::post('/cv/update/certificate/edit', function () {
        $certificate = Certificate::find(request()->certID);

        if (request()->del == 'yes') {
            $certificate->delete();
            return redirect('panel/users/teacher/cv');
        }

        $degree = request()->degree;
        $university = request()->university;
        $from = request()->start;
        $until = request()->end;

        $degree_model = Cvteacherstudy::where('name', $degree)->first();
        $university_model = University::where('name', $university)->first();

        if (!$degree_model) {
            $newDegree = new Cvteacherstudy;
            $newDegree->name = $degree;
            $newDegree->save();
            $degree_model = $newDegree;
        }

        if (!$university_model) {
            $newuniversity = new University;
            $newuniversity->name = $university;
            $newuniversity->save();
            $university_model = $newuniversity;
        }

        
        $certificate->user_id = auth()->user()->id;
        $certificate->study_id = $degree_model->id;
        $certificate->university_id = $university_model->id;
        $certificate->from = $from;
        $certificate->until = $until;
        $certificate->save();

        return redirect('panel/users/teacher/cv');

    })->name('teacher-cv-certificate-edit');

    Route::post('/profile', 'RoutesController@teacherProfileSave')->name('teachers-profile');

    Route::get('/schools', function () {
        // dd(auth()->user()->connectedSchool()->first()->pivot->status);
        return view('panel.pages.teacher.profile.schools');
    })->name('teachers-schools');
});

Route::get('/parent/profile', 'RoutesController@parentProfile')->name('parents-profile');
