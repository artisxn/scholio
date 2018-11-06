<?php

namespace App\Jobs;

use App\Models\AlgoliaScholarship;
use App\Models\AlgoliaSchool;
use App\Models\Scholarship;
use App\Models\School;
use App\Scholio\Scholio;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class Algolia implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $model;
    public $isProfile;

    public $school, $scholarship;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if ($this->model instanceof School) {
            $this->prepeareSchool();
        }

        if ($this->model instanceof Scholarship) {
            $this->prepeareScholarship();
        }
    }

    public function prepeareSchool()
    {
        $this->isProfile = true;
        $this->school = $this->model;
        $this->detect($this->school);
    }

    public function prepeareScholarship()
    {
        $this->isProfile = false;
        $this->scholarship = $this->model;
        $this->detect($this->scholarship->school);
    }

    public function detect($school)
    {
        if (Scholio::ProfileActive($school)) {
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

    public function insert()
    {
        if ($this->isProfile) {
            $this->insertSchool();
        } else {
            $this->insertScholarship();
        }

    }

    public function update()
    {
        if ($this->isProfile) {
            $this->updateSchool();
        } else {
            $this->updateScholarship();
        }
    }

    public function delete()
    {
        if ($this->isProfile) {
            $this->deleteSchool();
        } else {
            $this->deleteScholarship();
        }
    }

    public function exists()
    {
        if ($this->isProfile) {
            return $this->schoolExists();
        } else {
            return $this->scholarshipExists();
        }
    }

    public function insertSchool()
    {
        $studyDummy = '';
        $tagsDummy = '';
        $dummy = new AlgoliaSchool;
        $dummy->type_id = $this->school->type_id;
        $dummy->type = $this->school->type->name;
        $dummy->school_id = $this->school->id;
        $dummy->name = $this->school->name();
        $dummy->email = $this->school->email();
        $dummy->phone = $this->school->phone;
        $dummy->city = $this->school->city;
        $dummy->address = $this->school->address;
        $dummy->region = $this->school->region;
        $dummy->logo = $this->school->logo;
        $dummy->logo2 = substr($this->school->logo, 0, -4);
        $dummy->image = $this->school->profileImage();
        $dummy->image2 = substr($this->school->profileImage(), 0, -4);
        $dummy->website = $this->school->website;
        $dummy->lengthStudents = $this->school->lengthStudents();
        $dummy->lengthTeachers = $this->school->lengthTeachers();
        $dummy->lengthStudies = $this->school->lengthStudies();
        $dummy->lengthScholarships = $this->school->lengthScholarships();
        $dummy->stars = $this->school->averageStars();
        $dummy->reviews = $this->school->countReviews();
        $dummy->username = $this->school->admin->username ?? 'nousername';
        $dummy->subscription = $this->school->admin->subscription->plan_id;
        $dummy->scholioranking = $this->school->ranking;
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

        $this->geoloc($dummy);
        $this->hierarchicalMenu($dummy);
    }

    public function hierarchicalMenu($algolia){
        $algolia->{'categories.lvl0'} = $algolia->city;
        $algolia->{'categories.lvl1'} = $algolia->city . " > " . $algolia->region;
        $algolia->searchable();
    }

    public function geoloc($algolia)
    {
        $algolia->_geoloc = collect(['lat' => (double) $this->school->lat, 'lng' => (double) $this->school->lng]);
        $algolia->searchable();
    }

    public function updateSchool()
    {
        $studyDummy = '';
        $tagsDummy = '';
        $dummy = AlgoliaSchool::where('school_id', $this->school->id)->first();
        $dummy->name = $this->school->name();
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

        $this->geoloc($dummy);
    }

    public function deleteSchool()
    {
        $dummy = AlgoliaSchool::where('school_id', $this->school->id)->first();
        $dummy->delete();
    }

    public function schoolExists()
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
        $dummy->title = $scholarship->title;
        $dummy->scholioranking = 50;

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

    public function scholarshipExists()
    {
        if (AlgoliaScholarship::where('scholarship_id', $this->scholarship->id)->first()) {
            return true;
        }

        return false;
    }
}
