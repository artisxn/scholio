<?php

use App\Models\SchoolTypes;
use App\Models\SchoolTypesEN;
use Illuminate\Database\Seeder;

class SchoolTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['id' => 1, 'name' => 'Κολλέγιο'],
            ['id' => 2, 'name' => 'ΙΕΚ - Επαγγελματική Σχολή - ΚΔΒΜ'],
            ['id' => 3, 'name' => 'Φροντιστήριο Μέσης Εκπαίδευσης'],
            ['id' => 4, 'name' => 'Φροντιστήριο Ξένων Γλωσσών / Πληροφορικής'],
            ['id' => 5, 'name' => 'Φροντιστήριο Φοιτητικό'],
            ['id' => 6, 'name' => 'Ιδιωτικό Λύκειο'],
            ['id' => 7, 'name' => 'Ιδιωτικό Γυμνάσιο'],
            ['id' => 8, 'name' => 'Ιδιωτικό Δημοτικό'],
            ['id' => 9, 'name' => 'Παιδικός Σταθμός - Νηπιαγωγίο'],
            ['id' => 10, 'name' => 'Σχολή Χορού'],
            ['id' => 11, 'name' => 'Ωδείο'],
            ['id' => 12, 'name' => 'Κέντρο Δημιουργικής Απασχόλησης'],
        ];

        $typesEN = [
            ['id' => 1, 'name' => 'College'],
            ['id' => 2, 'name' => 'IEK'],
            ['id' => 3, 'name' => 'Tutor School for High School'],
            ['id' => 4, 'name' => 'Tutor School for Foreign Languages and Computer studies'],
            ['id' => 5, 'name' => 'Tutor School for university students'],
            ['id' => 6, 'name' => 'Private Lyceum'],
            ['id' => 7, 'name' => 'Private HighSchool'],
            ['id' => 8, 'name' => 'Private Primary School'],
            ['id' => 9, 'name' => 'Kindergarten'],
            ['id' => 10, 'name' => 'Dance School'],
            ['id' => 11, 'name' => 'Music School'],
            ['id' => 12, 'name' => 'Other school type (KDA)'],
        ];

        foreach ($types as $type) {
            $schoolType = new SchoolTypes;
            $schoolType->id = $type['id'];
            $schoolType->name = $type['name'];
            $schoolType->save();
        }

        foreach ($typesEN as $t) {
            $schoolType = new SchoolTypesEN;
            $schoolType->id = $t['id'];
            $schoolType->name = $t['name'];
            $schoolType->save();
        }
    }
}
