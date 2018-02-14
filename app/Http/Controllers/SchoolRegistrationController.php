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
use App\Jobs\SendVerificationEmail;

class SchoolRegistrationController extends Controller
{

    protected $user;

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

        $this->createUser()->createSchoolOfType(request()->type)->createSchoolPrefs();

        dispatch(new SendVerificationEmail($this->user));

        
        auth()->login($this->user);

        // Αν δεν πάει κάτι καλά με το School registration
        // πρέπει να σβήσω και τον χρήστη από την βάση

        return redirect('/dashboard');
    }

    public function createSchoolPrefs(){
        $this->createSubscription();
        $this->createScholarshipLimits();
        $this->createSchoolSettings();
        $this->createUniversity();
    }

    public function createUser(){
        $user = new User;
        $user->name = request()->name;
        $user->email = request()->email;
        $user->role = 'school';
        $user->password = bcrypt(request()->password);
        $user->email_token = base64_encode(request()->email);
        $user->save();

        $this->user = $user;

        return $this;
    }

    public function createSchoolOfType($type){
        $school = new School;
        $school->user_id = $this->user->id;
        $school->type_id = $type;
        $school->logo = '/upload/school/univ.png';
        $school->save();

        return $this;
    }

    public function createSubscription(){
        $sub = new Subscription;
        $sub->user_id = $this->user->id;
        $sub->plan_id = 1;
        $sub->save();
    }

    public function createScholarshipLimits(){
        $limit = new ScholarshipLimit;
        $limit->school_id = $this->user->info->id;
        $limit->cr1 = 5;
        $limit->cr2 = 3;
        $limit->cr3 = 3;
        $limit->cr4 = 3;
        $limit->cr5 = 3;
        $limit->save();
    }

    public function createSchoolSettings(){
        $settings = new SchoolSetting;
        $settings->school_id = $this->user->info->id;
        $settings->save();
    }

    public function createUniversity(){
        $university = new University;
        $university->name = $this->user->name;
        $university->save();
    }

    public function verify($token)
    {
        $user = User::where('email_token', $token)->first();
        $user->verified = 1;
        if ($user->save()) {
            return view('emailconfirm', ['user' => $user]);
        }
    }
}
