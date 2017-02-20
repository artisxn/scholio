<?php

use App\Models\Image;
use App\Models\School;
use Illuminate\Support\Facades\File;

Route::get('scholarships/create', 'AdminPanelController@scholarshipCreate')->name('scholarship-create');

Route::get('scholarships/view', 'AdminPanelController@scholarshipView')->name('scholarship-view');

Route::get('dashboard', 'AdminPanelController@dashboard')->name('dashboard');

Route::get('studies', 'AdminPanelController@studies')->name('studies-select');

Route::get('/teachers', 'AdminPanelController@teachers')->name('teachers');

Route::get('/students', 'AdminPanelController@students')->name('students');

Route::get('profile/images', 'AdminPanelController@imageProfile')->name('profile-images');

Route::get('profile', 'AdminPanelController@editProfile')->name('profile-edit');

Route::post('profile/{id}', 'AdminPanelController@updateProfile');

Route::get('requests', 'AdminPanelController@requests')->name('requests');

Route::post('profile/images/upload', function () {
    $school = School::where('user_id', auth()->user()->id)->first();

    foreach (request()->file('images') as $image) {
        $savedImg = $image->store('school-' . $school->id);

        $i = new Image;
        $i->path = $savedImg;
        $i->full_path = $savedImg;
        $i->name = $savedImg;
        $i->alt = $school->name() . '-images';
        $i->extension = $image->getClientOriginalExtension();

        $i->save();

        $school->image()->toggle($i);
    }

    return back();
});

Route::delete('profile/images/upload', function () {
    $school = School::where('user_id', auth()->user()->id)->first();

    $id = request()->image;

    $image = Image::find($id);

    $school->image()->toggle($image);

//    File::delete(public_path() . '/images/schools/school-5/aed1d580efb2407cd1efa85cb749ea94.png');

    unlink(public_path() . '/images/schools/' . $image->name);

    return back();
});
