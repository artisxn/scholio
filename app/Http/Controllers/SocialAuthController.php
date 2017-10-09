<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Cv;
use App\Models\Guardian;
use App\Models\Link;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Work;
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

        // if (env('APP_SCHOLIO') == 'local') {
        //     config(['services.' . $provider . '.redirect' => 'http://scholio.dev/auth/' . $provider . '/callback']);
        // }

        // dd(config('services.facebook'));

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

        $role = session('userrole');

        $user = new User;
        $user->name = $user_provider->name;
        $user->email = $user_provider->email;
        $user->role = $role;
        $user->password = bcrypt(str_random(10));
        $user->save();

        $profileBuilder = [];

        if ($provider == 'google') {
            $profileBuilder = [
                'gender' => $user_provider->user['gender'],
                'about' => $user_provider->user['aboutMe'],
                'url' => $user_provider->user['url'],
                'skills' => $user_provider->user['skills'],
                'media' => $user_provider->user['urls'],
                'occupation' => $user_provider->user['occupation'],
                'fname' => $user_provider->user['name']['givenName'],
                'lname' => $user_provider->user['name']['familyName'],
                'tagline' => $user_provider->user['tagline'],
                'organizations' => $user_provider->user['organizations'],
                'cover' => $user_provider->user['cover']['coverPhoto']['url'],
            ];
        } else if ($provider == 'facebook') {
            $profileBuilder = [
                'gender' => $user_provider->user['gender'],
                'url' => $user_provider->user['link'],
            ];
        }

        $this->createInfo($user, $role, $user_provider->avatar, $provider, $profileBuilder);

        Auth::login($user);
        return redirect('/new/user');
    }

    public function createInfo($user, $role, $avatar, $provider, $profileBuilder)
    {
        if ($profileBuilder) {
            if ($role == 'student') {
                $info = new Student;
                $info->user_id = $user->id;
                $info->avatar = $avatar;
                $info->gender = $profileBuilder['gender'];
                $info->save();

                $cv = new Cv;
                $cv->user_id = $user->id;
                $cv->save();
            }
            if ($role == 'teacher') {
                $info = new Teacher;
                $info->user_id = $user->id;
                $info->avatar = $avatar;
                $info->gender = $profileBuilder['gender'];
                $info->save();
            }
            if ($role == 'parent') {
                $info = new Guardian;
                $info->user_id = $user->id;
                $info->gender = $profileBuilder['gender'];
                $info->avatar = $avatar;
                $info->save();
            }

            // $links = $this->addSocialLinks($user, $provider, $profileBuilder['url']);

            if ($provider == 'google') {
                $user->info->fname = $profileBuilder['fname'];
                $user->info->lname = $profileBuilder['lname'];
                // $user->info->about = $profileBuilder['about'];
                $user->info->save();
                if ($role == 'teacher') {
                    $user->info->cover = $profileBuilder['cover'];
                    $user->info->save();
                    foreach ($profileBuilder['organizations'] as $org) {
                        if ($org['type'] == 'work') {
                            $work = new Work;
                            $work->user_id = $user->id;
                            $work->company = $org['name'];
                            $work->name = $org['title'];
                            $work->save();
                        }

                        if ($org['type'] == 'school') {
                            $cert = new Certificate;
                            $cert->user_id = $user->id;
                            $cert->university = $org['name'];
                            $cert->name = $org['title'];
                            $cert->save();
                        }
                    }
                }
                $this->addBuildProfile($user, $profileBuilder);
            }
        }
    }

    public function addSocialLinks($user, $provider, $link)
    {
        // $links = new SocialLink;
        // $links->user_id = $user->id;
        // $links->{$provider} = $link;
        // $links->save();

        $links = new Link;
        $links->user_id = $user->id;
        $links->name = $provider;
        $links->link = $link;
        $links->save();
        return $links;
    }

    public function addBuildProfile($user, $profileBuilder)
    {
        foreach ($profileBuilder['media'] as $media) {
            if ($media['type'] == 'otherProfile') {
                $links = new Link;
                if (strpos($media['value'], 'twitter') !== false) {
                    $links->user_id = $user->id;
                    $links->name = 'twitter';
                    $links->link = $media['value'];
                }
                if (strpos($media['value'], 'google') !== false) {
                    $links->user_id = $user->id;
                    $links->name = 'google';
                    $links->link = $media['value'];
                }
                if (strpos($media['value'], 'facebook') !== false) {
                    $links->user_id = $user->id;
                    $links->name = 'facebook';
                    $links->link = $media['value'];
                }
                if (strpos($media['value'], 'github') !== false) {
                    $links->user_id = $user->id;
                    $links->name = 'github';
                    $links->link = $media['value'];
                }
                if (strpos($media['value'], 'flickr') !== false) {
                    $links->user_id = $user->id;
                    $links->name = 'flickr';
                    $links->link = $media['value'];
                }
                if (strpos($media['value'], 'linkedin') !== false) {
                    $links->user_id = $user->id;
                    $links->name = 'linkedin';
                    $links->link = $media['value'];
                }
                if (strpos($media['value'], 'youtube') !== false) {
                    $links->user_id = $user->id;
                    $links->name = 'youtube';
                    $links->link = $media['value'];
                }
                if (strpos($media['value'], 'instagram') !== false) {
                    $links->user_id = $user->id;
                    $links->name = 'instagram';
                    $links->link = $media['value'];
                }
                if (strpos($media['value'], 'snapchat') !== false) {
                    $links->user_id = $user->id;
                    $links->name = 'snapchat';
                    $links->link = $media['value'];
                }
                if (strpos($media['value'], 'skype') !== false) {
                    $links->user_id = $user->id;
                    $links->name = 'skype';
                    $links->link = $media['value'];
                }
                if (strpos($media['value'], 'bitbucket') !== false) {
                    $links->user_id = $user->id;
                    $links->name = 'bitbucket';
                    $links->link = $media['value'];
                }
                if (strpos($media['value'], 'dribbble') !== false) {
                    $links->user_id = $user->id;
                    $links->name = 'dribbble';
                    $links->link = $media['value'];
                }
                if (strpos($media['value'], 'pinterest') !== false) {
                    $links->user_id = $user->id;
                    $links->name = 'pinterest';
                    $links->link = $media['value'];
                }
                if (strpos($media['value'], 'tumblr') !== false) {
                    $links->user_id = $user->id;
                    $links->name = 'tumblr';
                    $links->link = $media['value'];
                }
                $links->save();
            }
        }
    }
}
