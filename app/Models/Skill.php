<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function user()
    {
        return $this->belongsToMany(User::class, 'skill_user');
    }
}
