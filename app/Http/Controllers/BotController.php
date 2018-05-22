<?php

namespace App\Http\Controllers;

use App\Models\AlgoliaScholarship;
use App\Models\AlgoliaSchool;
use App\Models\Request;
use App\Models\School;

class BotController extends Controller
{
    public function appSchool(School $school)
    {
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
        return [$school->load('admin', 'type', 'image'), $data];
    }

    public function appSchoolNum($num)
    {
        return School::with('admin', 'type')->take($num)->get();
    }

    public function appAllSchools()
    {
        return School::with('admin', 'type')->get();
    }

    public function appFind($find)
    {
        $results = AlgoliaSchool::search($find)->get();

        return $results;

        if ($results->isEmpty()) {
            return [
                "redirect_to_blocks" => ["NotFound"],
            ];
        }

        $elements = [];

        foreach ($results as $index => $result) {
            $array = array(
                "title" => $result->name,
                "image_url" => 'https://schol.io' . $result->image,
                "subtitle" => $result->lengthScholarships(),
                "studies" => $result->lengthStudies(),
                "buttons" => array(
                    [
                        "type" => "web_url",
                        "url" => "https://schol.io/public/profile/" . $result->id,
                        "title" => "Προβολή",
                    ],
                    // [
                    //     "type" => "web_url",
                    //     "url" => 'https://schol.io/public/scholarships?q=' . $result->name,
                    //     "title" => "Υποτροφίες",
                    // ],
                ),
            );
            if ($index <= 9) {
                array_push($elements, $array);
            }
        }
        return $elements;
    }

    public function schoolSearch()
    {
        $results = AlgoliaSchool::search(request()->search)->get();

        if ($results->isEmpty()) {
            return [
                "redirect_to_blocks" => ["NotFound"],
            ];
        }

        $elements = [];

        foreach ($results as $index => $result) {
            $array = array(
                "title" => $result->name,
                "image_url" => 'https://schol.io' . $result->image,
                // "subtitle" => $result->lengthScholarships . " Υποτροφίες",
                "subtitle" => $result->city,
                "buttons" => array(
                    [
                        "type" => "web_url",
                        "url" => "https://schol.io/public/profile/" . $result->id,
                        "title" => "Προβολή",
                    ],
                    // [
                    //     "type" => "web_url",
                    //     "url" => 'https://schol.io/public/scholarships?q=' . $result->name,
                    //     "title" => "Υποτροφίες",
                    // ],
                ),
            );
            if ($index <= 9) {
                array_push($elements, $array);
            }
        }

        $json = [
            "messages" => [
                [
                    "attachment" => [
                        "type" => "template",
                        "payload" => [
                            "template_type" => "generic",
                            "elements" => $elements,
                        ],
                    ],
                ],
            ],
        ];
        return $json;
    }

    public function scholarshipSearch()
    {
        $results = AlgoliaScholarship::search(request()->search)->get();

        if ($results->isEmpty()) {
            return [
                "redirect_to_blocks" => ["NotFound"],
            ];
        }

        $elements = [];

        foreach ($results as $index => $result) {
            $array = array(
                "title" => $result->study,
                "image_url" => 'https://schol.io/' . $result->school_logo,
                // "image_url" => 'https://schol.io/panel/assets/images/steps' . $result->section . '.png',
                "subtitle" => $result->criteria,
                "buttons" => array(
                    [
                        "type" => "web_url",
                        "url" => "https://schol.io/scholarship/" . $result->scholarship_id,
                        "title" => "Προβολή",
                    ],
                    [
                        "type" => "web_url",
                        "url" => 'https://schol.io/public/profile/' . $result->school_id,
                        "title" => $result->school,
                    ],
                ),
            );
            if ($index <= 9) {
                array_push($elements, $array);
            }
        }

        $json = [
            "messages" => [
                [
                    "attachment" => [
                        "type" => "template",
                        "payload" => [
                            "template_type" => "generic",
                            "elements" => $elements,
                        ],
                    ],
                ],
            ],
        ];
        return $json;
    }

    public function scholarshipCustom()
    {
        $results = AlgoliaScholarship::search(request()->search)->get();

        if ($results->isEmpty()) {
            return [
                "redirect_to_blocks" => ["NotFound"],
            ];
        }

        $elements = [];

        foreach ($results as $index => $result) {
            $array = array(
                "title" => $result->study,
                "image_url" => 'https://schol.io/' . $result->school_logo,
                // "image_url" => 'https://schol.io/panel/assets/images/steps' . $result->section . '.png',
                "subtitle" => $result->criteria,
                "buttons" => array(
                    [
                        "type" => "web_url",
                        "url" => "https://schol.io/scholarship/" . $result->scholarship_id,
                        "title" => "Προβολή",
                    ],
                    [
                        "type" => "web_url",
                        "url" => 'https://schol.io/public/profile/' . $result->school_id,
                        "title" => $result->school,
                    ],
                ),
            );
            if ($index <= 9) {
                array_push($elements, $array);
            }
        }

        $json = [
            "messages" => [
                [
                    "attachment" => [
                        "type" => "template",
                        "payload" => [
                            "template_type" => "generic",
                            "elements" => $elements,
                        ],
                    ],
                ],
            ],
        ];
        return $json;
    }

    public function schoolCustom()
    {
        $results = AlgoliaSchool::search(request()->search)->get();

        if ($results->isEmpty()) {
            return [
                "redirect_to_blocks" => ["NotFound"],
            ];
        }

        $elements = [];

        foreach ($results as $index => $result) {
            $array = array(
                "title" => $result->name,
                "image_url" => 'https://schol.io' . $result->image,
                // "subtitle" => $result->lengthScholarships . " Υποτροφίες",
                "subtitle" => $result->city,
                "buttons" => array(
                    [
                        "type" => "web_url",
                        "url" => "https://schol.io/public/profile/" . $result->id,
                        "title" => "Προβολή",
                    ],
                    // [
                    //     "type" => "web_url",
                    //     "url" => 'https://schol.io/public/scholarships?q=' . $result->name,
                    //     "title" => "Υποτροφίες",
                    // ],
                ),
            );
            if ($index <= 9) {
                array_push($elements, $array);
            }
        }

        $json = [
            "messages" => [
                [
                    "attachment" => [
                        "type" => "template",
                        "payload" => [
                            "template_type" => "generic",
                            "elements" => $elements,
                        ],
                    ],
                ],
            ],
        ];
        return $json;
    }

    
}
