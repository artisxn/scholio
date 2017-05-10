<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    public function lectures()
    {
        return $this->belongsToMany(Lecture::class, 'badge_student');
    }

    public function getLecture($badge, $student)
    {
        return $this->lectures()->where('badge_id', $badge->id)->where('student_id', $student->id)->get();
    }
}
