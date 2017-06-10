<?php
use App\Models\AlgoliaSchool;
use App\Models\Request;

Route::get('/school/search', function () {
    $results = AlgoliaSchool::search(request()->search)->get();
    $elements = [];
    foreach ($results as $result) {
        $el = [
            'title' => $result->name,
            'image_url' => $result->image,
            'subtitle' => 'Εκ. Ίδρυμα',
            'buttons' => [
                [
                    'type' => 'web_url',
                    'url' => 'http://scholio.dev/public/profile/' . $result->id,
                    'title' => 'Προβολή Εκ. Ιδρύματος',
                ],
            ],
        ];
        array_push($elements, $el);
    }

    $bot = [
        'messages' => [
            'attachment' => [
                'type' => 'template',
                'payload' => [
                    'template_type' => 'generic',
                    'elements' => $elements,
                ],
            ],
        ],
    ];
    return $bot;
});
