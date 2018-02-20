<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Report extends Model
{
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
