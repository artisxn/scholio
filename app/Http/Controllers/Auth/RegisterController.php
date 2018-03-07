<?php

namespace App\Http\Controllers\Auth;

use App\Events\UserRegistered;
use App\Http\Controllers\Controller;
use App\Models\Cv;
use App\Models\Guardian;
use App\Models\School;
use App\Models\Student;
use App\Models\Teacher;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
     */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'terms' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration and call UserRegistered event.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = new User;

        if (session()->get('registration') == 'user') {
            $user->role = $data['role'];
        }
        if (session()->get('registration') == 'school') {
            $user->role = 'school';
            $redirectTo = '/panel/school/profile';
        }
        $user->name = $data['name'] . ' ' . $data['lastName'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->save();

        if ($user->role == 'school') {
            
            School::createSchoolAndDummy($user->id, request()->type);
        } else {
            if ($data['role'] == 'student') {
                $this->newInfo(new Student, $user, $data, new Cv);
            } else if ($data['role'] == 'parent') {
                $this->newInfo(new Guardian, $user, $data);
            } else {
                $this->newInfo(new Teacher, $user, $data);
            }
        }

        return $user;
    }

    public function newInfo($info, $user, $data, $cv = null)
    {
        $info->user_id = $user->id;
        $info->fname = $data['name'];
        $info->lname = $data['lastName'];
        $info->avatar = url('/images/student.png');
        $info->save();

        if ($cv) {
            $cv->user_id = $user->id;
            $cv->save();
        }
    }
}
