<?php

namespace App\Scholio;

use App\Models\AlgoliaSchool;
use App\Models\School;


class Algolia {

    public $school;

    public function __construct(School $school){
        $this->school = $school;
    }

    public function handle(){
        if (Scholio::ProfileActive($this->school)) {
            if ($this->exists()) {
                $this->update();
            } else {
                $this->insert();
            }
        }else{
            if($this->exists()){
                $this->delete();
            }
        }
    }

    public function insert(){
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

    public function update(){
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

    public function delete(){
        $dummy = AlgoliaSchool::where('school_id', $this->school->id)->first();
        $dummy->delete();
    }

    public function exists(){
        if(AlgoliaSchool::where('school_id', $this->school->id)->first()){
            return true;
        }

        return false;
    }
}