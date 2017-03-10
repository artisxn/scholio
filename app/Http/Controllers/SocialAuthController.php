<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{

    public function __construct(Socialite $socialite)
    {
        $this->socialite = $socialite;
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider = null)
    {
        if (!config('services.' . $provider)) {
            abort(404);
        }

        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback($provider = null)
    {
        $user_provider = Socialite::driver($provider)->user();
        $token = $user_provider->token;

        $user = User::where('email', $user_provider->getEmail())->first();

        if (isset($user)) {
            auth()->loginUsingId($user->id);
            return redirect('/dashboard');
        }

        $user = new User;
        $user->name = $user_provider->name;
        $user->email = $user_provider->email;
        // $user->avatar = $user_provider->avatar;
        $user->password = bcrypt(str_random(10));
        // $user->gender = $user_provider->user['gender'];
        // $user->facebook_id = $user_provider->id;
        // $user->facebook_link = $user_provider->profileUrl;
        $user->save();

        Auth::login($user);
        return redirect('/dashboard');
    }
}
