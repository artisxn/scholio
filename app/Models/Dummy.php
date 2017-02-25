<?php

namespace App\Models;

use App\Models\School;
use Illuminate\Database\Eloquent\Model;

class Dummy extends Model
{
    public function school()
    {
        return $this->belongsTo(School::class);
    }
}
