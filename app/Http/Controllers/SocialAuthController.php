<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Company;
use App\Models\Cv;
use App\Models\Cvteacherstudy;
use App\Models\Guardian;
use App\Models\TeacherJob as Job;
use App\Models\Link;
use App\Models\Skill;
use App\Models\SocialLink;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\University;
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
                'gender' => $user_provider->user['gender'] ?? '',
                'about' => $user_provider->user['aboutMe'] ?? '',
                'url' => $user_provider->user['url'] ?? '',
                'skills' => $user_provider->user['skills'] ?? '',
                'media' => $user_provider->user['urls'] ?? '',
                'occupation' => $user_provider->user['occupation'] ?? '',
                'fname' => $user_provider->user['name']['givenName'] ?? '',
                'lname' => $user_provider->user['name']['familyName'] ?? '',
                'tagline' => $user_provider->user['tagline'] ?? '',
                'organizations' => $user_provider->user['organizations'] ?? '',
                'cover' => $user_provider->user['cover']['coverPhoto']['url'] ?? '',
                'social' => 'google',
            ];
        } else if ($provider == 'facebook') {
            $profileBuilder = [
                'gender' => $user_provider->user['gender'] ?? '',
                'url' => $user_provider->user['link'] ?? '',
                'social' => 'facebook',
            ];
        }

        $this->createInfo($user, $role, $user_provider->avatar, $provider, $profileBuilder);

        Auth::login($user);
        return redirect('/dashboard');
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
                if (isset($profileBuilder['about']) && $profileBuilder['about'] != '') {
                    $info->about = $profileBuilder['about'];
                }
                $info->save();
            }
            if ($role == 'parent') {
                $info = new Guardian;
                $info->user_id = $user->id;
                $info->gender = $profileBuilder['gender'];
                $info->avatar = $avatar;
                $info->save();
            }

            if ($provider == 'google') {
                $user->info->fname = $profileBuilder['fname'];
                $user->info->lname = $profileBuilder['lname'];
                $user->info->about = $profileBuilder['about'];
                $user->info->save();
                if ($role == 'teacher') {
                    $user->info->cover = $profileBuilder['cover'];
                    $user->info->save();
                    if (isset($profileBuilder['skills'])) {
                        $this->addTeacherSkills($profileBuilder['skills'], $user);
                    }

                    foreach ($profileBuilder['organizations'] as $org) {
                        if ($org['type'] == 'work') {
                            $company = Company::where('name', $org['name'])->first();
                            if (!$company || !isset($company)) {
                                $company = new Company;
                                $company->name = $org['name'];
                                $company->save();
                            }

                            $job = Job::where('name', $org['title'])->first();
                            if (!$job || !isset($job)) {
                                $job = new Job;
                                $job->name = $org['title'];
                                $job->save();
                            }

                            $work = new Work;
                            $work->user_id = $user->id;
                            $work->company_id = $company->id;
                            $work->job_id = $job->id;
                            if (in_array('startDate', $org) && isset($org['startDate'])) {
                                $work->from = '1/' . $org['startDate'];
                            }
                            if (in_array('endDate', $org) && isset($org['endDate'])) {
                                $work->until = '1/' . $org['endDate'];
                            }
                            $work->save();
                        }

                        if ($org['type'] == 'school') {
                            $study = Cvteacherstudy::where('name', $org['title'])->first();

                            if (!$study || !isset($study)) {
                                $study = new Cvteacherstudy;
                                $study->name = $org['title'];
                                $study->save();
                            }

                            $uni = University::where('name', $org['name'])->first();
                            if (!$uni || !isset($uni)) {
                                $uni = new University;
                                $uni->name = $org['name'];
                                $uni->save();
                            }

                            $cert = new Certificate;
                            $cert->user_id = $user->id;
                            if (in_array('startDate', $org) && isset($org['startDate'])) {
                                $cert->from = '1/' . $org['startDate'];
                            }
                            if (in_array('endDate', $org) && isset($org['endDate'])) {
                                $cert->until = '1/' . $org['endDate'];
                            }

                            $cert->university_id = $uni->id;
                            $cert->study_id = $study->id;
                            $cert->save();
                        }
                    }
                }
            }
            $this->addBuildProfile($user, $profileBuilder);
        }
    }

    public function addTeacherSkills($skills, $user)
    {
        if (is_array($skills)) {
            foreach ($skills as $skill) {
                $sk = new Skill;
                $sk->name = $skill;
                $sk->save();

                $user->addFakeSkill($sk, $user);
            }

        } else {
            $sk = new Skill;
            $sk->name = $skills;
            $sk->save();

            $user->addFakeSkill($sk, $user);

        }

    }

    public function addSocialLinks($user, $provider, $link)
    {

        $links = new SocialLink;
        $links->user_id = $user->id;
        $links->name = $provider;
        $links->link = $link;
        $links->save();
        return $links;
    }

    public function addBuildProfile($user, $profileBuilder)
    {
        if ($profileBuilder['social'] == 'facebook') {
            $link = new SocialLink;
            $link->user_id = $user->id;
            $link->name = 'facebook';
            $link->link = $profileBuilder['url'];
            $link->save();

        } else if ($profileBuilder['social'] == 'google') {
            $link = new SocialLink;
            $link->user_id = $user->id;
            $link->name = 'google';
            $link->link = $profileBuilder['url'];
            $link->save();

            foreach ($profileBuilder['media'] as $media) {
                if ($media['type'] == 'otherProfile') {
                    $links = new SocialLink;
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
}
