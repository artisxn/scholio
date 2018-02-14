<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class VerifyController extends Controller
{
    public function verify($token)
    {
        $user = User::where('email_token', $token)->first();
        $user->status = 'verified';
        $user->email_token = '';
        $user->save();

        return view('auth.verified', compact('user'));

        // auth()->login($user);
    }
}
