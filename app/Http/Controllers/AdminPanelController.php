<?php

namespace App\Http\Controllers;

use App\Jobs\Algolia;
use App\Models\Image;
use App\Models\School;
use App\Models\SchoolTypes;
use App\Models\SocialLink;
use App\Scholio\Scholio;
use GuzzleHttp\Psr7\Request;

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
        if (auth()->user()->role == 'school') {
            $school = auth()->user()->info;

            $students = $school->students;
            $teachers = $school->teachers;
            $parents = $school->parents;
            $scholarships = $school->scholarship;
            $admissions = $school->admissions();
            $studies = $school->study;
            $images = $school->image;
            $reviews = $school->countReviews();

            $pageviews = \Counter::show('school-profile', $school->id);

            $data = [
                'students' => $students,
                'teachers' => $teachers,
                'parents' => $parents,
                'scholarships' => $scholarships,
                'pageviews' => $pageviews,
                'admissions' => $admissions,
                'studies' => $studies,
                'images' => $images,
                'reviews' => $reviews,
            ];
            return view('panel.pages.school.dashboard.main')->withData($data);
        }

        if (auth()->user()->role == 'student') {
            return view('panel.pages.student.dashboard');
        }
        if (auth()->user()->role == 'teacher') {
            return view('panel.pages.teacher.dashboard');
        }
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

    /**
     *  @return view
     */
    public function teachers()
    {
        return view('panel.pages.teachers');
    }

    /**
     *  @return view
     */
    public function students()
    {
        return view('panel.pages.students');
    }

    /**
     *  @return view
     */
    public function dashboard()
    {
        return view('panel.pages.school.dashboard');
    }

    /**
     *  @return view
     */
    public function scholarshipCreate()
    {
        return view('panel.pages.school.scholarships.create');
    }

    /**
     *  @return view
     */
    public function scholarshipView()
    {
        return view('panel.pages.school.scholarships.view');
    }

    /**
     *  @return view
     */
    public function studies()
    {
        return view('panel.pages.school.profile.studies');
    }

    /**
     *  @return view
     */
    public function imageProfile()
    {
        $school = School::where('user_id', auth()->user()->id)->first();

        $images = $school->image;

        return view('panel.pages.school.profile.images', compact('images'));
    }

    /**
     * Show the form for editing the profile
     *
     * @return view
     */
    public function editProfile()
    {
        $school = auth()->user()->info;

        $logo = $school->logo;

        $schoolTypes = SchoolTypes::all();

        $links = SocialLink::where('user_id', auth()->user()->id)->get();

        return view('panel.pages.school.profile.form', compact('schoolTypes', 'logo', 'school', 'links'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateProfile()
    {
        $school = auth()->user()->info;

        if ($file = request()->file('logo')) {
            $image_name = $file->store('logo');
            $school->logo = $image_name;
        }

        auth()->user()->name = request()->name;
        auth()->user()->save();

        $school->website = request()->website;
        $school->city = request()->city;
        $school->address = request()->address;
        $school->phone = request()->phone;
        $school->about = request()->about;
        $school->public_email = request()->public_email;

        $school->save();

        if (request()->facebook) {
            $this->saveSocialLinks(request()->facebook, 'facebook');
        } else {
            $this->deleteIfExists('facebook');
        }

        if (request()->twitter) {
            $this->saveSocialLinks(request()->twitter, 'twitter');
        } else {
            $this->deleteIfExists('twitter');
        }

        if (request()->youtube) {
            $this->saveSocialLinks(request()->youtube, 'youtube');
        } else {
            $this->deleteIfExists('youtube');
        }

        if (request()->instagram) {
            $this->saveSocialLinks(request()->instagram, 'instagram');
        } else {
            $this->deleteIfExists('instagram');
        }

        if (request()->skype) {
            $this->saveSocialLinks(request()->skype, 'skype');
        } else {
            $this->deleteIfExists('skype');
        }

        if (request()->google) {
            $this->saveSocialLinks(request()->google, 'google');
        } else {
            $this->deleteIfExists('google');
        }

        if (request()->pinterest) {
            $this->saveSocialLinks(request()->pinterest, 'pinterest');
        } else {
            $this->deleteIfExists('pinterest');
        }

        if (request()->linkedin) {
            $this->saveSocialLinks(request()->linkedin, 'linkedin');
        } else {
            $this->deleteIfExists('linkedin');
        }

        $address = Scholio::geocode($school->address . ', ' . $school->city);

        if (is_array($address) && strtoupper(var_dump($address)) != 'GEOCODE ERROR') {
            try {
                $lat = $address['lat'];
                $lng = $address['lng'];
                $school->lat = $lat;
                $school->lng = $lng;
                $school->save();
            } catch (Exception $e) {
            }
        }
        if (!\App::environment('local')) {
            dispatch(new Algolia($school));
        }

        session()->flash('updated_profile', trans('school_profile.update_profile'));

        return back();
    }

    /**
     * @return
     */
    public function saveSocialLinks($link, $name)
    {
        if (!auth()->user()->socialLinks->pluck('name')->contains($name)) {
            $social = new SocialLink;
            $social->user_id = auth()->user()->id;
            $social->name = $name;
            $social->link = $link;
            return $social->save();
        } else {
            $social = auth()->user()->socialLinks;
            $s = $social->where('name', $name)->first();
            $s->link = $link;
            return $s->save();
        }
    }

    /**
     * @return
     */
    public function deleteIfExists($name)
    {
        // dd(auth()->user()->);
        if (auth()->user()->socialLinks->pluck('name')->contains($name)) {
            $s = auth()->user()->socialLinks->where('name', $name)->first();
            $s->delete();
        }
    }

    /**
     *  @return view
     */
    public function requests()
    {
        return view('panel.pages.school.resource.requests');
    }

    public function imagesUpload()
    {
        $school = auth()->user()->info;

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

        if (!\App::environment('local')) {
            dispatch(new Algolia($school));
        }

        return back();
    }

    public function imageDelete()
    {
        $school = auth()->user()->info;

        $id = request()->image;

        $image = Image::find($id);

        $school->image()->toggle($image);

        unlink(public_path() . '/upload/school/' . $school->type->name . '_' . auth()->user()->id . '_' . auth()->user()->name . '/' . $image->name);

        if (!\App::environment('local')) {
            dispatch(new Algolia($school));
        }

        return back();
    }

    public function scholarshipRequest()
    {
        return view('panel.pages.school.scholarships.request');
    }
}
