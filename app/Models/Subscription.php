<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    public function plan(){
        return $this->belongsTo(SubscriptionPlan::class, 'plan_id');
    }
        
}
