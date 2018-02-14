<?php

namespace App\Scholio;

class Algolia {

    public static function newSchool($school){
        $studyDummy = '';
        $tagsDummy = '';
        $dummy = new AlgoliaSchool;
        $dummy->type_id = $school->type_id;
        $dummy->type = $school->type->name;
        $dummy->school_id = $school->id;
        $dummy->name = $school->name();
        $dummy->email = $school->email();
        $dummy->phone = $school->phone;
        $dummy->city = $school->city;
        $dummy->address = $school->address;
        $dummy->logo = $school->logo;
        $dummy->image = $school->profileImage();
        $dummy->website = $school->website;
        $dummy->lengthStudents = $school->lengthStudents();
        $dummy->lengthTeachers = $school->lengthTeachers();
        $dummy->lengthStudies = $school->lengthStudies();
        $dummy->lengthScholarships = $school->lengthScholarships();
        $dummy->stars = $school->averageStars();
        $dummy->reviews = $school->countReviews();
        $dummy->username = $school->admin->username ?? 'nousername';
        $dummy->subscription = $school->admin->subscription->plan_id;
        $dummy->activeScholarships = $school->lengthScholarships() > 0 ? 'υποτροφια, scholarship, υποτροφιες' : '';

        foreach ($school->study as $study) {
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

        foreach ($school->tag as $tag) {
            $tagsDummy .= $tag->name . ',';
        }

        $dummy->study = $studyDummy;
        $dummy->tags = $tagsDummy;
        $dummy->save();
    }

}