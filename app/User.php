<?php

namespace App;

use App\Models\Link;
use App\Models\Parent as ParentUser;
use App\Models\Scholarship;
use App\Models\School;
use App\Models\SocialLink;
use App\Models\Student;
use App\Models\Teacher;
use App\Traits\EndorseSystem;
use App\Traits\InterestedSystem;
use App\Traits\TeacherProfiler;
use App\Traits\UserScopes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, UserScopes, Notifiable;
    use EndorseSystem, InterestedSystem, TeacherProfiler;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'type', 'avatar', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'created_at', 'updated_at',
    ];

    /**
     *  Gets the school object which is assosiated with this user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function school()
    {
        return $this->hasOne(School::class);
    }

    /**
     *  Gets the url to post the slack notifications
     *
     * @return String
     */
    public function routeNotificationForSlack()
    {
        return 'https://hooks.slack.com/services/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';
    }

    /**
     *  Gets all the scholarships which created by this user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function scholarship()
    {
        return $this->belongsToMany(Scholarship::class, 'scholarship_user')->withTimestamps();
    }

    /**
     *  Gets the corresponding model depending on the role of the user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function info()
    {
        if ($this->role == 'student') {
            return $this->hasOne(Student::class);
        }

        if ($this->role == 'teacher') {
            return $this->hasOne(Teacher::class);
        }

        if ($this->role == 'parent') {
            return $this->hasOne(ParentUser::class);
        }

        if ($this->role == 'school') {
            return $this->hasOne(School::class);
        }
    }

    /**
     *  Gets the social_link row of the user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function socialLinks()
    {
        return $this->hasOne(SocialLink::class, 'user_id');
    }

    public function links()
    {
        return $this->hasMany(Link::class, 'user_id');
    }

    public function connectedSchool()
    {
        return $this->belongsToMany(School::class, 'school_user');
    }

    public function checkConnection($user)
    {
        foreach ($this->connectedSchool as $connections) {
            if ($connections->admin->id == $user) {
                return true;
            }
        }
        return false;
    }
}
