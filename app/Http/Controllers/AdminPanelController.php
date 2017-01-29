<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSchoolRequest;
use App\Models\Image;
use App\Models\School;
use App\Models\SchoolTypes;
use App\User;

class AdminPanelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     *  @return view
     */
    public function index()
    {
        $users = User::all();
        $schools = School::all();
        $scholarships = ['1', '2', '3'];
        $pageviews = 1234;

        $data = array(
            'users' => $users,
            'schools' => $schools,
            'scholarships' => $scholarships,
            'pageviews' => $pageviews,
        );

        return view('panel.index')->withData($data);
    }

    /**
     *  @return view
     */
    public function notifications()
    {
        return view('panel.pages.users.notifications');
    }

    /**
     *  @return view
     */
    public function allUsers()
    {
        return view('panel.pages.users.allusers');
    }

    /**
     *  @return view
     */
    public function schools()
    {
        return view('panel.pages.schools');
    }

    /**
     *  @return view
     */
    public function profile()
    {
        return view('panel.pages.profile.main');
    }

    public function teachers()
    {
        return view('panel.pages.teachers');
    }

    public function students()
    {
        return view('panel.pages.students');
    }

    public function dashboard()
    {
        return view('panel.pages.school.dashboard');
    }

    public function scholarshipCreate()
    {
        return view('panel.pages.school.scholarships.create');
    }

    public function scholarshipView()
    {
        return view('panel.pages.school.scholarships.view');
    }

    public function studies()
    {
        return view('panel.pages.school.profile.studies');
    }

    public function imageProfile()
    {
        $school = School::where('user_id', auth()->user()->id)->first();

        $images = $school->image;

        return view('panel.pages.school.profile.images', compact('images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editProfile()
    {
        $school = School::where('user_id', auth()->user()->id)->first();

        $logo = Image::where('id', $school->logo_id)->first();

        $schoolTypes = SchoolTypes::all();

        return view('panel.pages.profile.form', compact('schoolTypes', 'logo', 'school'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(CreateSchoolRequest $request, $id)
    {
        $input = $request->except('email', 'user_name', 'logo');

        $school = School::findOrFail($id);

        if ($file = $request->file('logo')) {
            $image_name = $file->store('logo');

            $image = Image::whereId($school->logo_id)->first();

            $image->update([
                'path' => $image_name,
                'full_path' => $image_name,
                'name' => $image_name,
            ]);
        }

        auth()->user()->update(['name' => $request->user_name]);

        $school->update($input);

        session()->flash('updated_profile', 'Your profile has been updated');

        return back();
    }

    public function requests()
    {
        return view('panel.pages.school.resource.requests');
    }

}
