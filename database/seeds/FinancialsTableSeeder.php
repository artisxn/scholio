<?php

use App\Models\Financial;
use App\Models\FinancialEN;
use Illuminate\Database\Seeder;

class FinancialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['plan' => 'Μείωση Διδάκτρων', 'icon' => 'Μείωση Διδάκτρων.png', 'metric' => '%'],
            ['plan' => 'Ποσό Επιδότησης', 'icon' => 'Ποσό Επιδότησης.png', 'metric' => '€'],
            ['plan' => 'Χρόνος Δωρεάν Φοίτησης', 'icon' => 'Χρόνος Δωρεάν Φοίτησης.png', 'metric' => 'Μηνες'],
        ];

        $typesEN = [
            ['plan' => 'Tuition Fee Reduction', 'icon' => 'Μείωση Διδάκτρων.png', 'metric' => '%'],
            ['plan' => 'Amount of Subsidy', 'icon' => 'Ποσό Επιδότησης.png', 'metric' => '€'],
            ['plan' => 'Free School Attendance Time', 'icon' => 'Χρόνος Δωρεάν Φοίτησης.png', 'metric' => 'Months'],
        ];

        foreach ($types as $type) {
            $financial = new Financial;
            $financial->plan = $type['plan'];
            $financial->icon = $type['icon'];
            $financial->metric = $type['metric'];
            $financial->save();
        }

        foreach ($typesEN as $t) {
            $financial = new FinancialEN;
            $financial->plan = $t['plan'];
            $financial->icon = $t['icon'];
            $financial->metric = $t['metric'];
            $financial->save();
        }
    }
}
