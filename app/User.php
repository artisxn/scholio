<?php

namespace App;

use App\Models\Parent as ParentUser;
use App\Models\Scholarship;
use App\Models\School;
use App\Models\Student;
use App\Models\Teacher;
use App\Traits\UserScopes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, UserScopes, Notifiable;

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
        'password', 'remember_token',
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
        // Change it to pass only for admins
        if ($this->id == 1) {
            return 'https://hooks.slack.com/services/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';
        }
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

    public function info()
    {
        if ($this->role == 'student') {
            return $this->hasOne(Student::class, 'user_id');
        }

        if ($this->role == 'teacher') {
            return $this->hasOne(Teacher::class, 'user_id');
        }

        if ($this->role == 'parent') {
            return $this->hasOne(ParentUser::class, 'user_id');
        }
    }
}
