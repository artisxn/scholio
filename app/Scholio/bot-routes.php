<?php
use App\Models\AlgoliaScholarship;
use App\Models\AlgoliaSchool;
use App\Models\Request;
use Illuminate\Support\Facades\Route;
use App\Models\School;

Route::get('/app/school/{school}', 'BotController@appSchool');

Route::get('/app/schools/{num}', 'BotController@appSchoolNum');

Route::get('/app/allSchools', 'BotController@appAllSchools');

Route::get('/app/{find}', 'BotController@appFind');


Route::get('/school/search', 'BotController@schoolSearch');

Route::get('/scholarship/search', 'BotController@scholarshipSearch');

Route::get('/scholarship/custom', 'BotController@scholarshipCustom');

Route::get('/school/custom', 'BotController@schoolCustom');

// Route::get('/chat', function () {
//     $n = [
//         "type" => "show_block",
//         "block_name" => "AuthChat",
//         "title" => "AuthChat",
//     ];

//     if (request()->name == 'Kostis') {
//         return [
//             "redirect_to_blocks" => ["AuthChat"],
//         ];
//     }

//     $l = [
//         "messages" => [
//             ["text" => "OXI!"],
//         ],
//     ];
//     return $l;
// });
