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
        $types = ['Μείωση Διδάκτρων', 'Ποσό Επιδότησης', 'Χρόνος Δωρεάν Φοίτησης'];

        foreach ($types as $type) {
            $financial = new Financial;
            $financial->plan = $type;
            $financial->save();
        }
    }
}
