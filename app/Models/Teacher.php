<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function email()
    {
        return $this->user->email;
    }

    public function name()
    {
        return $this->user->name;
    }

    public function works()
    {
        return $this->user->works;
    }

    public function certificates()
    {
        return $this->user->certificates;
    }

    public function links()
    {
        return $this->user->links();
    }

    public function school()
    {
        return $this->user->connectedSchool[0];
    }

    public function lecture()
    {
        return $this->hasMany(Lecture::class);
    }

    public function school_students()
    {
        return $this->school()->students;
    }

    public function school_studies()
    {
        return $this->school()->study;
    }
}
