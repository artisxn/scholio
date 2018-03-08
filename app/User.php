<?php

namespace App;

use App\Models\Admission;
use App\Models\Card;
use App\Models\Cv;
use App\Models\Guardian;
use App\Models\Report;
use App\Models\Review;
use App\Models\Scholarship;
use App\Models\School;
use App\Models\SocialLink;
use App\Models\Student;
use App\Models\Study;
use App\Models\Subscription;
use App\Models\Teacher;
use App\Traits\EndorseSystem;
use App\Traits\InterestedSystem;
use App\Traits\TeacherProfiler;
use App\Traits\UserAdmissions;
use App\Traits\UserConnections;
use App\Traits\UserReviews;
use App\Traits\UserScopes;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, UserScopes, Notifiable;
    use EndorseSystem, InterestedSystem, TeacherProfiler;
    use UserConnections, UserAdmissions, UserReviews;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'type', 'avatar', 'role', 'email_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'created_at', 'updated_at',
    ];

    protected $dates = ['deleted_at'];

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
            return $this->hasOne(Guardian::class);
        }

        if ($this->role == 'school') {
            return $this->hasOne(School::class);
        }
    }

    /**
     * Gets the student model (if the current user is student)
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function student()
    {
        return $this->hasOne(Student::class);
    }

    /**
     * Gets the teacher model (if the current user is teacher)
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }

    /**
     * Gets all the social links of the current user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function socialLinks()
    {
        return $this->hasMany(SocialLink::class, 'user_id');
    }

    /**
     * Gets all the reviews of the current user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    /**
     * Gets the cv of the current user (only if it is student)
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cv()
    {
        return $this->hasOne(Cv::class);
    }

    /**
     * Gets all the admissions of the current user (only if it is student)
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function admissions()
    {
        return $this->hasMany(Admission::class);
    }

    /**
     * Gets all the schools that the current user is connected with
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function apply()
    {
        return $this->belongsToMany(School::class, 'school_requests');
    }

    /**
     * Gets all the studies that the current user is attending
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function studyConnection()
    {
        return $this->belongsToMany(Study::class, 'study_user')->withPivot('school_id', 'study_id');
    }

    /**
     * Gets the subscription model (only if it is school)
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function subscription()
    {
        return $this->hasOne(Subscription::class, 'user_id');
    }

    /**
     * Gets all the reports regarding this user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function report()
    {
        return $this->hasMany(Report::class, 'user_id');
    }

    /**
     * Gets the cards of this user (only if it is school)
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function card()
    {
        return $this->hasMany(Card::class, 'user_id');
    }
}
