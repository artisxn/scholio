<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    protected $fillable = [
        'fname',
        'lname',
        'gender',
        'dob',
        'address',
        'mobile_phone',
        'father_name',
        'mother_name',
        'father_job',
        'mother_job',
        'father_phone',
        'mother_phone',
        'languages',
        'studies'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lecture()
    {
        return $this->belongsToMany(Lecture::class, 'class_students');
    }

    public function badge()
    {
        return $this->belongsToMany(Badge::class, 'badge_student')->withPivot('lecture_id');
    }

}
