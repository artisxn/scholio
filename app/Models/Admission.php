<?php

namespace App\Models;

use App\Models\Scholarship;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    public function scholarship()
    {
        return $this->belongsTo(Scholarship::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
