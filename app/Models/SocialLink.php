<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App\Models\School;

class SocialLink extends Model
{
    public function school()
    {
        return $this->belongsTo(School::class);
    }
}
