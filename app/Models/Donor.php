<?php

namespace App\Models;

use App\Models\DonatedScholarship;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scholarship()
    {
        return $this->hasMany(DonatedScholarship::class);
    }
}
