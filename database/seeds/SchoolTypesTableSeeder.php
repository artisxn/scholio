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
            ['id' => 13, 'name' => 'Ιδιωτικό Σχολείο'],
        ];

        foreach ($types as $type) {
            $schoolType = new SchoolTypes;
            $schoolType->id = $type['id'];
            $schoolType->name = $type['name'];
            $schoolType->save();
        }
    }
}
