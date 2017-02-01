<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Scholarship;
use App\Models\SchoolTypes;
use App\Models\Study;
use App\User;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{

    /**
     * @var array
     */
    protected $fillable = [
        'logo_id',
        'type_id',
        'name',
        'website',
        'city',
        'address',
        'phone',
        'user_id',
    ];

    /**
     *  Gets the type of the School
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(SchoolTypes::class, 'type_id');
    }

    /**
     *  Attaches the Image of the School to the pivot table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function image()
    {
        return $this->belongsToMany(Image::class, 'image_school')->withTimestamps();
    }

    /**
     *  Gets the logo of the school (which is an instance of Image model)
     *
     * @return  \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function logo()
    {
        return $this->belongsTo(Image::class, 'logo_id');
    }

    /**
     *  Gets all the scholarships of the school
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function scholarship()
    {
        return $this->hasMany(Scholarship::class);
    }

    public function lengthScholarships()
    {
        return $this->scholarship()->count();
    }

    /**
     *  Gets the user admin of the school
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     *  Gets all the users connected to the school
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'school_user');
    }

    /**
     *  Gets all the teachers connected to the school
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function teachers()
    {
        return $this->users()->where('role', 'teacher');
    }

    public function lengthTeachers()
    {
        return $this->teachers()->count();
    }

    /**
     *  Gets all the students connected to the school
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function students()
    {
        return $this->users()->where('role', 'student');
    }

    public function lengthStudents()
    {
        return $this->students()->count();
    }

    /**
     *  Gets all the studies of the school
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function study()
    {
        return $this->belongsToMany(Study::class, 'school_study');
    }

    public function lengthStudies()
    {
        return $this->study()->count();
    }

}
