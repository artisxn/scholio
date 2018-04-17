<?php
use App\Models\AlgoliaScholarship;
use App\Models\AlgoliaSchool;
use App\Models\Request;
use Illuminate\Support\Facades\Route;
use App\Models\School;

// Route::get('/test', function () {
//     $test = [
//         "messages" => [
//             [
//                 "attachment" => [
//                     "type" => "template",
//                     "payload" => [
//                         "template_type" => "generic",
//                         "elements" => [
//                             [
//                                 "title" => "Classic White T-Shirt",
//                                 "image_url" => "http://petersapparel.parseapp.com/img/item100-thumb.png",
//                                 "subtitle" => "Soft white cotton t-shirt is back in style",
//                                 "buttons" => [
//                                     [
//                                         "type" => "web_url",
//                                         "url" => "https://petersapparel.parseapp.com/view_item?item_id=100",
//                                         "title" => "View Item",
//                                     ],
//                                     [
//                                         "type" => "web_url",
//                                         "url" => "https://petersapparel.parseapp.com/buy_item?item_id=100",
//                                         "title" => "Buy Item",
//                                     ],
//                                 ],
//                             ],
//                         ],
//                     ],
//                 ],
//             ],
//         ],
//     ];

//     return $test;
// });
Route::get('/app/school/{school}', function(School $school){
    return [$school->load('admin', 'type', 'image')];
    // return School::with('admin', 'type')->take($num)->get();
});

Route::get('/app/schools/{num}', function($num){
    return School::with('admin', 'type')->take($num)->get();
});

Route::get('/app/allSchools', function($num){
    return School::with('admin', 'type')->get();
});

Route::get('/app/{find}', function ($find) {
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
                [
                    "type" => "web_url",
                    "url" => 'https://schol.io/public/scholarships?q=' . $result->name,
                    "title" => "Υποτροφίες",
                ],
            ),
        );
        if ($index <= 9) {
            array_push($elements, $array);
        }
    }
    return $elements;
});


Route::get('/school/search', function () {
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
            "subtitle" => $result->lengthScholarships . " Υποτροφίες",
            "buttons" => array(
                [
                    "type" => "web_url",
                    "url" => "https://schol.io/public/profile/" . $result->id,
                    "title" => "Προβολή",
                ],
                [
                    "type" => "web_url",
                    "url" => 'https://schol.io/public/scholarships?q=' . $result->name,
                    "title" => "Υποτροφίες",
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
});

Route::get('/scholarship/search', function () {
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
});

Route::get('/scholarship/custom', function () {
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
});

Route::get('/school/custom', function () {
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
            "subtitle" => $result->lengthScholarships . " Υποτροφίες",
            "buttons" => array(
                [
                    "type" => "web_url",
                    "url" => "https://schol.io/public/profile/" . $result->id,
                    "title" => "Προβολή",
                ],
                [
                    "type" => "web_url",
                    "url" => 'https://schol.io/public/scholarships?q=' . $result->name,
                    "title" => "Υποτροφίες",
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
});

Route::get('/chat', function () {
    $n = [
        "type" => "show_block",
        "block_name" => "AuthChat",
        "title" => "AuthChat",
    ];

    if (request()->name == 'Kostis') {
        return [
            "redirect_to_blocks" => ["AuthChat"],
        ];
    }

    $l = [
        "messages" => [
            ["text" => "OXI!"],
        ],
    ];
    return $l;
});
