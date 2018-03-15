<?php

namespace App\Scholio;

use App\Models\AlgoliaSchool;
use App\Models\Scholarship;
use App\Models\School;
use Carbon\Carbon;
use App\Models\AlgoliaScholarship;

class Algolia
{

    public $model;
    public $isProfile;

    public $school, $scholarship;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function handle()
    {
        $this->prepeareSchool();
        $this->detect();
    }

    public function handleScholarships()
    {
        $this->prepeareScholarship();
        $this->detect();
    }

    public function detect()
    {
        if (Scholio::ProfileActive($this->school)) {
            if ($this->exists()) {
                $this->update();
            } else {
                $this->insert();
            }
        } else {
            if ($this->exists()) {
                $this->delete();
            }
        }
    }

    public function prepeareSchool()
    {
        $this->isProfile = true;
        $this->school = School::find($this->model);
    }

    public function prepeareScholarship()
    {
        $this->isProfile = false;
        $this->scholarship = Scholarship::find($this->model);
    }

    public function insert()
    {
        if ($isProfile) {
            $this->insertSchool();
        } else {
            $this->insertScholarship();
        }

    }

    public function update()
    {
        if ($isProfile) {
            $this->updateSchool();
        } else {
            $this->updateScholarship();
        }
    }

    public function delete()
    {
        if ($isProfile) {
            $this->deleteSchool();
        } else {
            $this->deleteScholarship();
        }
    }

    public function exists()
    {
        if ($isProfile) {
            $this->existSchool();
        } else {
            $this->existScholarship();
        }
    }

    public function insertSchool()
    {
        $studyDummy = '';
        $tagsDummy = '';
        $dummy = new AlgoliaSchool();
        $dummy->type_id = $this->school->type_id;
        $dummy->type = $this->school->type->name;
        $dummy->school_id = $this->school->id;
        $dummy->name = $this->school->name();
        $dummy->email = $this->school->email();
        $dummy->phone = $this->school->phone;
        $dummy->city = $this->school->city;
        $dummy->address = $this->school->address;
        $dummy->logo = $this->school->logo;
        $dummy->image = $this->school->profileImage();
        $dummy->website = $this->school->website;
        $dummy->lengthStudents = $this->school->lengthStudents();
        $dummy->lengthTeachers = $this->school->lengthTeachers();
        $dummy->lengthStudies = $this->school->lengthStudies();
        $dummy->lengthScholarships = $this->school->lengthScholarships();
        $dummy->stars = $this->school->averageStars();
        $dummy->reviews = $this->school->countReviews();
        $dummy->username = $this->school->admin->username ?? 'nousername';
        $dummy->subscription = $this->school->admin->subscription->plan_id;
        $dummy->activeScholarships = $this->school->lengthScholarships() > 0 ? 'υποτροφια, scholarship, υποτροφιες' : '';

        foreach ($this->school->study as $study) {
            $studyDummy .= $study->name . ',';
            $section = $study->section[0]->name;
            if (strpos($studyDummy, $section) == false) {
                $studyDummy .= $study->section[0]->name . ',';
            }
            $level = $study->section[0]->level->name;
            if (strpos($studyDummy, $level) == false) {
                $studyDummy .= $study->section[0]->level->name . ',';
            }

        }

        foreach ($this->school->tag as $tag) {
            $tagsDummy .= $tag->name . ',';
        }

        $dummy->study = $studyDummy;
        $dummy->tags = $tagsDummy;
        $dummy->save();

    }

    public function updateSchool()
    {
        $studyDummy = '';
        $tagsDummy = '';
        $dummy = AlgoliaSchool::where('school_id', $this->school->id)->first();
        $dummy->phone = $this->school->phone;
        $dummy->city = $this->school->city;
        $dummy->address = $this->school->address;
        $dummy->logo = $this->school->logo;
        $dummy->image = $this->school->profileImage();
        $dummy->website = $this->school->website;
        $dummy->lengthStudents = $this->school->lengthStudents();
        $dummy->lengthTeachers = $this->school->lengthTeachers();
        $dummy->lengthStudies = $this->school->lengthStudies();
        $dummy->lengthScholarships = $this->school->lengthScholarships();
        $dummy->stars = $this->school->averageStars();
        $dummy->reviews = $this->school->countReviews();
        $dummy->username = $this->school->admin->username ?? 'nousername';
        $dummy->subscription = $this->school->admin->subscription->plan_id;
        $dummy->activeScholarships = $this->school->lengthScholarships() > 0 ? 'υποτροφια, scholarship, υποτροφιες' : '';

        foreach ($this->school->study as $study) {
            $studyDummy .= $study->name . ',';
            $section = $study->section[0]->name;
            if (strpos($studyDummy, $section) == false) {
                $studyDummy .= $study->section[0]->name . ',';
            }
            $level = $study->section[0]->level->name;
            if (strpos($studyDummy, $level) == false) {
                $studyDummy .= $study->section[0]->level->name . ',';
            }

        }

        foreach ($this->school->tag as $tag) {
            $tagsDummy .= $tag->name . ',';
        }

        $dummy->study = $studyDummy;
        $dummy->tags = $tagsDummy;
        $dummy->save();

    }

    public function deleteSchool()
    {
        $dummy = AlgoliaSchool::where('school_id', $this->school->id)->first();
        $dummy->delete();
    }

    public function existSchool()
    {
        if (AlgoliaSchool::where('school_id', $this->school->id)->first()) {
            return true;
        }

        return false;
    }

    public function insertScholarship()
    {
        $scholarship = $this->scholarship;

        $scholarTagsDummy = '';
        $studyDummy = '';
        $dummy = new AlgoliaScholarship;
        $dummy->scholarship_id = $scholarship->id;

        if ($scholarship->multiple) {
            foreach ($scholarship->multipleStudies as $study) {
                $studyDummy .= $study->name;
            }
            $dummy->study = $studyDummy;
            $dummy->multiple = true;
            $dummy->section = '';
        } else {
            $dummy->study = $scholarship->study->name;
            $dummy->section = $scholarship->study->section[0]->name;
            $dummy->multiple = false;
        }
        $dummy->level = $scholarship->level->name;
        $dummy->criteria = $scholarship->criteria->name;
        $dummy->criteria_id = $scholarship->criteria->id;

        $dummy->school = $scholarship->school->name();
        $dummy->school_id = $scholarship->school->id;
        $dummy->school_logo = $scholarship->school->logo;
        $dummy->city = $scholarship->school->city;
        $dummy->address = $scholarship->school->address;
        $dummy->type = $scholarship->school->type->name;
        $dummy->type_id = $scholarship->school->type->id;
        $dummy->financial_plan = $scholarship->financial->plan;
        $dummy->financial_plan_id = $scholarship->financial->id;

        $dummy->financial_amount = (integer) $scholarship->financial_amount;
        $dummy->financial_metric = $scholarship->financial->metric;
        $dummy->financial_icon = $scholarship->financial->icon;
        $dummy->exams = $scholarship->exam ? 'y' : 'n';

        $date = Carbon::createFromFormat('Y-m-d', $scholarship->end_at);
        $dummy->end_at = $date->day . '/' . $date->month . '/' . $date->year;
        $dummy->interested = $scholarship->interestsLength();
        $dummy->requested = $scholarship->usersLength();
        if (count($scholarship->tag)) {
            foreach ($scholarship->tag as $tag) {
                $scholarTagsDummy .= $tag->name . ',';
            }
        }
        $dummy->tags = $scholarTagsDummy;
        $dummy->save();
    }

    public function updateScholarship($scholarship = null)
    {
        if (!$scholarship) {
            $scholarship = $this->scholarship;
        }

        $dummy = AlgoliaScholarship::where('scholarship_id', $this->scholarship->id)->first();

        $dummy->school = $scholarship->school->name();
        $dummy->school_id = $scholarship->school->id;
        $dummy->school_logo = $scholarship->school->logo;
        $dummy->city = $scholarship->school->city;
        $dummy->address = $scholarship->school->address;

        $dummy->exams = $scholarship->exam ? 'y' : 'n';

        $dummy->interested = $scholarship->interestsLength();
        $dummy->requested = $scholarship->usersLength();

        $dummy->save();
    }

    public function deleteScholarship()
    {
        $dummy = AlgoliaScholarship::where('scholarship_id', $this->scholarship->id)->first();
        $dummy->delete();
    }

    public function existScholarship()
    {
        if (AlgoliaScholarship::where('scholarship_id', $this->scholarship->id)->first()) {
            return true;
        }

        return false;
    }

}
