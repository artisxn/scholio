<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = ['type', 'user_id', 'school_id', 'scholarship_id'];

    public static function createAndNotify(User $school, User $user, Scholarship $scholarship)
    {
        self::create(['type' => 'scholarship', 'user_id' => $user->id, 'school_id' => $scholarship->id]);
        // $school->admin->notify();
    }
}
