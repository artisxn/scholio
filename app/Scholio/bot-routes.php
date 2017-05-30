<?php
use App\Models\AlgoliaSchool;
use App\Models\Request;

Route::get('/school/search', function () {
    $result = AlgoliaSchool::search(request()->search)->get();
    return $result;
});
