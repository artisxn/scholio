<?php

namespace App;

use App\Models\Certificate;
use App\Models\Parent as ParentUser;
use App\Models\Scholarship;
use App\Models\School;
use App\Models\Skill;
use App\Models\SocialLink;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Work;
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

    public function interested()
    {
        return $this->belongsToMany(Scholarship::class, 'interested')->withTimestamps();
    }

    public function interestedIn($id)
    {
        foreach ($this->interested as $scholarship) {
            if ($scholarship->id == $id) {
                return true;
            }
        }

        return false;
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

        if ($this->role == 'school') {
            return $this->hasOne(School::class, 'user_id');
        }
    }

    public function socialLinks()
    {
        return $this->hasOne(SocialLink::class, 'user_id');
    }

    public function works()
    {
        return $this->hasMany(Work::class);
    }

    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'skill_user')->withPivot('user_from_id')->withTimestamps();
    }

    public function checkSkill($endorsement)
    {
        foreach ($this->skills as $skill) {
            if ($skill->id == $endorsement->id && $skill->pivot->user_from_id == auth()->user()->id) {
                return true;
            }
        }

        return false;
    }

    public function endorse($skill)
    {
        $this->skills()->save($skill, ['user_from_id' => auth()->user()->id]);
    }

    public function toggleEndorsement($skill)
    {
        if ($this->checkSkill($skill)) {
            $this->skills()->wherePivot('user_from_id', auth()->user()->id)->detach($skill);
            return ('ON');
        } else {
            $this->endorse($skill);
            return ('OFF');
        }
    }

    public function countSkill($skill)
    {
        return $user->skills()->where('skill_id', $skill->id)->count();
    }

    public function getUniqueSkills()
    {
        $array = [];
        foreach ($this->skills as $skill) {
            if (!in_array($skill->id, $array)) {

                array_push($array, $skill->id);
            }
        }

        $unique = [];
        foreach ($array as $skillID) {
            $skill = Skill::find($skillID);
            array_push($unique, $skill);
        }
        $collection = collect($unique);
        return $collection;
    }
}
