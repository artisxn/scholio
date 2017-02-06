<?php

use App\Models\Criteria;
use Illuminate\Database\Seeder;

class CriteriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'Υποτροφία Ταλέντου/Δεξιοτήτων',
            'Υποτροφία Αριστείας',
            'Υποτροφία με Κοινωνικά Κριτήρια',
            '1+1 Φίλοι/Αδέλφια',
            'Υποτροφία Ανοιχτού Τύπου',
        ];

        foreach ($names as $name) {
            $criteria = new Criteria;
            $criteria->name = $name;
            $criteria->save();
        }
    }
}
