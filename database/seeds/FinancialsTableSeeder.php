<?php

use App\Models\Financial;
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

        foreach ($types as $type) {
            $financial = new Financial;
            $financial->plan = $type['plan'];
            $financial->icon = $type['icon'];
            $financial->metric = $type['metric'];
            $financial->save();
        }
    }
}
