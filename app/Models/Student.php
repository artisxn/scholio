<?php

namespace App\Models;

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
        'studies',
        'father_name',
        'mother_name',
    ];

}
