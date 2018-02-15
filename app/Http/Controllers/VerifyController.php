<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Scholio\Algolia;

class VerifyController extends Controller
{
    public function verify($token)
    {
        $user = User::where('email_token', $token)->first();
        if($user){
            $user->status = 'verified';
        // $user->email_token = '';
            $user->save();

            Algolia::newSchool($user->info);

            session()->flash('verify', 'Your email have been verified');

            auth()->login($user);

            return redirect('/panel/dashboard');
        }

        abort('404');
    }
}
