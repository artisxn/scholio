<?php

namespace App\Models;

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
}
