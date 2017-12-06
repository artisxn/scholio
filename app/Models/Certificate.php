<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cvteacherstudy;
use App\Models\University;

class Certificate extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
    * @return 
    */
    public function study()
    {
        return $this->belongsTo(Cvteacherstudy::class);
    }

    /**
    * @return 
    */
    public function university()
    {
        return $this->belongsTo(University::class);
    }
}
