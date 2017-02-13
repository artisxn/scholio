<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\School;
use App\Models\SchoolTypes;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class SchoolRegistrationController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('showSchoolUserRegistrationForm', 'registerUserSchool');
    }

    /**
     *  @return view
     */
    public function showSchoolRegistrationForm()
    {
        $schoolTypes = SchoolTypes::all();
        return view('auth.register-school', compact('schoolTypes'));
    }

    /**
     *  @return view
     */
    public function showSchoolUserRegistrationForm()
    {
        return view('auth.register-user-school');
    }

    /**
     *  @return response
     */
    public function registerUserSchool()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
        ]);

        session()->put('school.user.name', request()->name, 10);
        session()->put('school.user.email', request()->email, 10);
        session()->put('school.user.password', request()->password, 10);

        return redirect('/register/school');
    }

    /**
     *  @return response
     */
    public function register()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
        ]);

        $user = new User;
        $user->name = $userName;
        $user->email = $userEmail;
        $user->role = 'school';
        $user->password = bcrypt($userPassword);
        $user->save();

        $school = new School;
        $school->name = request()->name;
        $school->email = request()->email;
        $school->user_id = $user->id;
        $school->address = request()->address;
        $school->phone = request()->phone;
        $school->website = request()->website;
        $school->address = request()->address;
        $school->city = request()->city;
        $school->type_id = request()->type;

        $avatar = request()->file('avatar')->store('logo');
        $image = new Image;
        $image->path = $avatar;
        $image->full_path = $avatar;
        $image->name = $avatar;
        $image->alt = $school->name . '-logo';
        $image->type = 'Logo';
        $image->extension = 'png';

        $image->save();

        $school->logo_id = $image->id;

        $school->save();

        auth()->login($user);

        // Αν δεν πάει κάτι καλά με το School registration
        // πρέπει να σβήσω και τον χρήστη από την βάση

        return redirect('/dashboard');
    }
}
