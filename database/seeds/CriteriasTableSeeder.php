<?php

use App\Models\Criteria;
use App\Models\CriteriaEN;
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
            'Υποτροφία Ταλέντου-Δεξιοτήτων',
            'Υποτροφία Αριστείας',
            'Υποτροφία με Κοινωνικά Κριτήρια',
            'Υποτροφία για Φίλους-Αδέλφια',
            'Υποτροφία Ανοιχτού Τύπου',
        ];

        $namesENG = [
            'Scholarship for talents',
            'Scholarship for excellent students',
            'Scholarship for Social Criterias',
            'Scholarship for Friends-Brothers and Sisters',
            'Open Scholarships',
        ];

        foreach ($names as $name) {
            $criteria = new Criteria;
            $criteria->name = $name;
            $criteria->save();
        }

        foreach ($namesENG as $n) {
            $criteria = new CriteriaEn;
            $criteria->name = $n;
            $criteria->save();
        }
    }
}
