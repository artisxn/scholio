<?php

use App\Models\Image;
use App\Models\School;
use Illuminate\Support\Facades\File;

Route::get('scholarships/create', 'AdminPanelController@scholarshipCreate');

Route::get('scholarships/view', 'AdminPanelController@scholarshipView');

Route::get('dashboard', 'AdminPanelController@dashboard');

Route::get('studies', 'AdminPanelController@studies');

Route::get('/teachers', 'AdminPanelController@teachers');

Route::get('/students', 'AdminPanelController@students');

Route::get('profile/images', 'AdminPanelController@imageProfile');

Route::get('profile', 'AdminPanelController@editProfile');
Route::post('profile/{id}', 'AdminPanelController@updateProfile');

Route::get('requests', 'AdminPanelController@requests');

Route::post('profile/images/upload', function () {
    $school = School::where('user_id', auth()->user()->id)->first();

    foreach (request()->file('images') as $image) {
        $savedImg = $image->store('school-' . $school->id);

        $i = new Image;
        $i->path = $savedImg;
        $i->full_path = $savedImg;
        $i->name = $savedImg;
        $i->alt = $school->name . '-images';
        $i->extension = $image->getClientOriginalExtension();

        $i->save();

        $school->image()->toggle($i);
    }

    return back();
});

Route::delete('profile/images/upload', function () {
    $school = School::where('user_id', Auth::user()->id)->first();

    $id = request()->image;

    $image = Image::find($id);

    $school->image()->toggle($image);

    File::delete(public_path() . '/images/schools/school-5/aed1d580efb2407cd1efa85cb749ea94.png');

    return back();
});
