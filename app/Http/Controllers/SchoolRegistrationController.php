<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\School;
use App\Models\SchoolTypes;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\University;
use App\Models\Subscription;
use App\Models\ScholarshipLimit;
use App\Models\SchoolSetting;

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
        $user->name = request()->name;
        $user->email = request()->email;
        $user->role = 'school';
        $user->password = bcrypt(request()->password);
        $user->save();

        $school = new School;
        $school->user_id = $user->id;
        $school->type_id = request()->type;
        $school->logo = '/upload/school/univ.png';
        $school->save();

        // create subscription
        $sub = new Subscription;
        $sub->user_id = $user->id; 
        $sub->plan_id = 1;
        $sub->save();

        // Scholarship Limits
        $limit = new ScholarshipLimit;
        $limit->school_id = $school->id;
        $limit->cr1 = 5;
        $limit->cr2 = 3;
        $limit->cr3 = 3;
        $limit->cr4 = 3;
        $limit->cr5 = 3;
        $limit->save();

        // Seting 
        $settings = new SchoolSetting;
        $settings->school_id = $school->id;
        $settings->save();


        // Send confirmation email

        // Create University
        $university = new University;
        $university->name = request()->name;
        $university->save();

        auth()->login($user);

        // Αν δεν πάει κάτι καλά με το School registration
        // πρέπει να σβήσω και τον χρήστη από την βάση

        return redirect('/dashboard');
    }
}
