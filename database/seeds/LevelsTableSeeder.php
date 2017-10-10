<?php

use App\Models\Level;
use App\Models\LevelEN;
use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Αλλαγή: Τμήμα Αρχαρίων, Μέσω και Προχωρημένων σε Α1, Α2, Β1, Β2 κτλ
        $levels = [
            ['id' => 1, 'type_id' => 1, 'name' => 'Προπτυχιακές Σπουδές-Bachelor'],
            ['id' => 2, 'type_id' => 2, 'name' => 'Επαγγελματικές Σπουδές'],
            ['id' => 3, 'type_id' => 1, 'name' => 'Μεταπτυχιακές Σπουδές-Master'],
            ['id' => 4, 'type_id' => 3, 'name' => 'Α Λυκείου'],
            ['id' => 5, 'type_id' => 3, 'name' => 'Β Λυκείου'],
            ['id' => 6, 'type_id' => 3, 'name' => 'Γ Λυκείου'],
            ['id' => 7, 'type_id' => 6, 'name' => 'Α Λυκείου'],
            ['id' => 8, 'type_id' => 6, 'name' => 'Β Λυκείου'],
            ['id' => 9, 'type_id' => 6, 'name' => 'Γ Λυκείου'],
            ['id' => 10, 'type_id' => 3, 'name' => 'Α Γυμνασίου'],
            ['id' => 11, 'type_id' => 3, 'name' => 'Β Γυμνασίου'],
            ['id' => 12, 'type_id' => 3, 'name' => 'Γ Γυμνασίου'],
            ['id' => 13, 'type_id' => 7, 'name' => 'Α Γυμνασίου'],
            ['id' => 14, 'type_id' => 7, 'name' => 'Β Γυμνασίου'],
            ['id' => 15, 'type_id' => 7, 'name' => 'Γ Γυμνασίου'],
            ['id' => 16, 'type_id' => 8, 'name' => 'Α Δημοτικού'],
            ['id' => 17, 'type_id' => 8, 'name' => 'Β Δημοτικού'],
            ['id' => 18, 'type_id' => 8, 'name' => 'Γ Δημοτικού'],
            ['id' => 19, 'type_id' => 8, 'name' => 'Δ Δημοτικού'],
            ['id' => 20, 'type_id' => 8, 'name' => 'Ε Δημοτικού'],
            ['id' => 21, 'type_id' => 8, 'name' => 'ΣΤ Δημοτικού'],
            ['id' => 22, 'type_id' => 4, 'name' => 'Τμήμα Αρχαρίων Α1-Α2'],
            ['id' => 23, 'type_id' => 4, 'name' => 'Τμήμα Μέσων Β1-Β2'],
            ['id' => 24, 'type_id' => 4, 'name' => 'Τμήμα Προχωρημένων C1-C2'],
            ['id' => 25, 'type_id' => 10, 'name' => 'Τμήμα Παιδικό-Εφηβικό'],
            ['id' => 26, 'type_id' => 10, 'name' => 'Τμήμα Ενηλίκων'],
            ['id' => 27, 'type_id' => 10, 'name' => 'Τμήμα Ειδικό - Αγωνιστικό'],
            ['id' => 28, 'type_id' => 11, 'name' => 'Τμήμα Αρχαρίων-Κατωτέρα'],
            ['id' => 29, 'type_id' => 11, 'name' => 'Τμήμα Μέσων-Μέση'],
            ['id' => 30, 'type_id' => 11, 'name' => 'Τμήμα Προχωρημένων-Ανωτέρα'],
            ['id' => 31, 'type_id' => 9, 'name' => 'Νήπια'],
            ['id' => 32, 'type_id' => 5, 'name' => 'Προπτυχιακές Σπουδές-Bachelor'],
        ];

        $levelsEN = [
            ['id' => 1, 'type_id' => 1, 'name' => 'Προπτυχιακές Σπουδές-Bachelor'],
            ['id' => 2, 'type_id' => 2, 'name' => 'Επαγγελματικές Σπουδές'],
            ['id' => 3, 'type_id' => 1, 'name' => 'Μεταπτυχιακές Σπουδές-Master'],
            ['id' => 4, 'type_id' => 3, 'name' => 'Α Λυκείου'],
            ['id' => 5, 'type_id' => 3, 'name' => 'Β Λυκείου'],
            ['id' => 6, 'type_id' => 3, 'name' => 'Γ Λυκείου'],
            ['id' => 7, 'type_id' => 6, 'name' => 'Α Λυκείου'],
            ['id' => 8, 'type_id' => 6, 'name' => 'Β Λυκείου'],
            ['id' => 9, 'type_id' => 6, 'name' => 'Γ Λυκείου'],
            ['id' => 10, 'type_id' => 3, 'name' => 'Α Γυμνασίου'],
            ['id' => 11, 'type_id' => 3, 'name' => 'Β Γυμνασίου'],
            ['id' => 12, 'type_id' => 3, 'name' => 'Γ Γυμνασίου'],
            ['id' => 13, 'type_id' => 7, 'name' => 'Α Γυμνασίου'],
            ['id' => 14, 'type_id' => 7, 'name' => 'Β Γυμνασίου'],
            ['id' => 15, 'type_id' => 7, 'name' => 'Γ Γυμνασίου'],
            ['id' => 16, 'type_id' => 8, 'name' => 'Α Δημοτικού'],
            ['id' => 17, 'type_id' => 8, 'name' => 'Β Δημοτικού'],
            ['id' => 18, 'type_id' => 8, 'name' => 'Γ Δημοτικού'],
            ['id' => 19, 'type_id' => 8, 'name' => 'Δ Δημοτικού'],
            ['id' => 20, 'type_id' => 8, 'name' => 'Ε Δημοτικού'],
            ['id' => 21, 'type_id' => 8, 'name' => 'ΣΤ Δημοτικού'],
            ['id' => 22, 'type_id' => 4, 'name' => 'Τμήμα Αρχαρίων Α1-Α2'],
            ['id' => 23, 'type_id' => 4, 'name' => 'Τμήμα Μέσων Β1-Β2'],
            ['id' => 24, 'type_id' => 4, 'name' => 'Τμήμα Προχωρημένων C1-C2'],
            ['id' => 25, 'type_id' => 10, 'name' => 'Τμήμα Παιδικό-Εφηβικό'],
            ['id' => 26, 'type_id' => 10, 'name' => 'Τμήμα Ενηλίκων'],
            ['id' => 27, 'type_id' => 10, 'name' => 'Τμήμα Ειδικό - Αγωνιστικό'],
            ['id' => 28, 'type_id' => 11, 'name' => 'Τμήμα Αρχαρίων-Κατωτέρα'],
            ['id' => 29, 'type_id' => 11, 'name' => 'Τμήμα Μέσων-Μέση'],
            ['id' => 30, 'type_id' => 11, 'name' => 'Τμήμα Προχωρημένων-Ανωτέρα'],
            ['id' => 31, 'type_id' => 9, 'name' => 'Νήπια'],
            ['id' => 32, 'type_id' => 5, 'name' => 'Προπτυχιακές Σπουδές-Bachelor'],
        ];

        foreach ($levels as $level) {
            $studylevel = new Level;
            $studylevel->id = $level['id'];
            $studylevel->school_types_id = $level['type_id'];
            $studylevel->name = $level['name'];
            $studylevel->save();
        }

        foreach ($levelsEN as $level) {
            $s = new LevelEn;
            $s->id = $level['id'];
            $s->school_types_id = $level['type_id'];
            $s->name = $level['name'];
            $s->save();
        }

    }
}
