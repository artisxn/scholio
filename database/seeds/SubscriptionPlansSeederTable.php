<?php

use Illuminate\Database\Seeder;
use App\Models\SubscriptionPlan;

class SubscriptionPlansSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            'FREE',
            'GOLD'
        ];

        foreach ($plans as $plan) {
            $subplan = new SubscriptionPlan;
            $subplan->name = $plan;
            $subplan->save();
        }
       
    }
}
