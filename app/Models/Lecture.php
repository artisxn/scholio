<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    public function student()
    {
        return $this->belongsToMany(Student::class, 'class_students')->withTimestamps();
    }

    public function study()
    {
        return $this->belongsToMany(Study::class, 'class_studies');
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function school()
    {
        return $this->belongsTo(User::class, 'school_id');
    }
}
