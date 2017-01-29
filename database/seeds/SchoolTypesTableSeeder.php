<?php

use App\Models\SchoolTypes;
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
            'Κολλέγιο',
            'ΙΕΚ - Επαγγελματική Σχολή - ΚΔΒΜ',
            'Φροντιστήριο Μέσης Εκπαίδευσης',
            'Φροντιστήριο Ξένων Γλωσσών / Πληροφορικής',
            'Φροντιστήριο Φοιτητικό',
            'Ιδιωτικό Λύκειο',
            'Ιδιωτικό Γυμνάσιο',
            'Ιδιωτικό Δημοτικό',
            'Παιδικός Σταθμός - Νηπιαγωγίο',
            'Σχολή Χορού',
            'Ωδείο',
            'Κέντρο Δημιουργικής Απασχόλησης',
        ];

        foreach ($types as $type) {
            $schoolType = new SchoolTypes;
            $schoolType->name = $type;
            $schoolType->save();
        }
    }
}
