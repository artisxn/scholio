<?php
use App\Models\AlgoliaSchool;
use App\Models\Request;

Route::get('/test', function () {
    $test = [
        "messages" => [
            [
                "attachment" => [
                    "type" => "template",
                    "payload" => [
                        "template_type" => "generic",
                        "elements" => [
                            [
                                "title" => "Classic White T-Shirt",
                                "image_url" => "http://petersapparel.parseapp.com/img/item100-thumb.png",
                                "subtitle" => "Soft white cotton t-shirt is back in style",
                                "buttons" => [
                                    [
                                        "type" => "web_url",
                                        "url" => "https://petersapparel.parseapp.com/view_item?item_id=100",
                                        "title" => "View Item",
                                    ],
                                    [
                                        "type" => "web_url",
                                        "url" => "https://petersapparel.parseapp.com/buy_item?item_id=100",
                                        "title" => "Buy Item",
                                    ],
                                ],
                            ],
                            [
                                "title" => "Classic Grey T-Shirt",
                                "image_url" => "http://petersapparel.parseapp.com/img/item101-thumb.png",
                                "subtitle" => "Soft gray cotton t-shirt is back in style",
                                "buttons" => [
                                    [
                                        "type" => "web_url",
                                        "url" => "https://petersapparel.parseapp.com/view_item?item_id=101",
                                        "title" => "View Item",
                                    ],
                                    [
                                        "type" => "web_url",
                                        "url" => "https://petersapparel.parseapp.com/buy_item?item_id=101",
                                        "title" => "Buy Item",
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ];

    return $test;
});

Route::get('/school/search', function () {
    $results = AlgoliaSchool::search(request()->search)->get();

    $elements = [];

    foreach ($results as $result) {
        $array = array(
            "title" => $result->name,
            "image_url" => $result->image,
            "subtitle" => "Soft white cotton t-shirt is back in style",
            "buttons" => array(
                [
                    "type" => "web_url",
                    "url" => "https://petersapparel.parseapp.com/view_item?item_id=100",
                    "title" => "Προβολή Εκ. Ιδρύματος",
                ],
                [
                    "type" => "web_url",
                    "url" => "https://petersapparel.parseapp.com/view_item?item_id=100",
                    "title" => "Προβολή Εκ. Ιδρύματος",
                ],
            ),
        );
        array_push($elements, $array);
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
