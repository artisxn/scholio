<?php

use App\Models\Section;
use App\Models\SectionEN;
use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['id' => 1, 'name' => 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business'], /** κολλέγια  Bachelors 1-10 */
            ['id' => 1, 'name' => 'Ναυτιλιακά - Nautical Education'],
            ['id' => 1, 'name' => 'Τουρισμός - Tourism'],
            ['id' => 1, 'name' => 'Πληροφορική - Informatics & Technology'],
            ['id' => 1, 'name' => 'Επιστήμες Υγείας - Health Sciences'],
            ['id' => 1, 'name' => 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences'],
            ['id' => 1, 'name' => 'Πολυτεχνικές Σπουδές - Engineering'],
            ['id' => 1, 'name' => 'Πολιτισμός & Επικοινωνία'],
            ['id' => 1, 'name' => 'Liberal Arts & Sciences'],
            ['id' => 1, 'name' => 'Fine and Performing Arts'],
            ['id' => 1, 'name' => 'Arts & Design'],
            ['id' => 1, 'name' => 'Agriculture - Environment - Life Sciences'],
            ['id' => 1, 'name' => 'Science & Technology'],



            ['id' => 3, 'name' => 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business'], /** κολλέγια  Master 11-20 */
            ['id' => 3, 'name' => 'Ναυτιλιακά - Nautical Education'],
            ['id' => 3, 'name' => 'Τουρισμός - Tourism'],
            ['id' => 3, 'name' => 'Πληροφορική - Informatics & Technology'],
            ['id' => 3, 'name' => 'Επιστήμες Υγείας - Health Sciences'],
            ['id' => 3, 'name' => 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences'],
            ['id' => 3, 'name' => 'Πολυτεχνικές Σπουδές - Engineering'],
            ['id' => 3, 'name' => 'Πολιτισμός & Επικοινωνία'],
            ['id' => 3, 'name' => 'Liberal Arts & Sciences'],
            ['id' => 3, 'name' => 'Arts & Design'],
            ['id' => 3, 'name' => 'Agriculture - Environment - Life Sciences'],
            ['id' => 3, 'name' => 'Science & Technology'],



            ['id' => 2, 'name' => 'Οικονομία & Διοίκηση'], /** IEK Επαγγελματικές Σπουδές 21-34 */
            ['id' => 2, 'name' => 'Επαγγέλματα Υγείας'],
            ['id' => 2, 'name' => 'Οπτικοακουστικά & Τέχνες'],
            ['id' => 2, 'name' => 'Τεχνικά Επαγγέλματα'],
            ['id' => 2, 'name' => 'Τουριστικά-Επισιτιστικά'],
            ['id' => 2, 'name' => 'Μόδα & Ομορφιά'],
            ['id' => 2, 'name' => 'Αισθητική & Spa'],
            ['id' => 2, 'name' => 'Παιδαγωγικά'],
            ['id' => 2, 'name' => 'Ηχοληψία & Μουσική Τεχνολογία'],
            ['id' => 2, 'name' => 'ΗΥ & Νέες Τεχνολογίες'],
            ['id' => 2, 'name' => 'Εφαρμοσμένες Τέχνες'],
            ['id' => 2, 'name' => 'ΜΜΕ & Αθλητισμός'],
            ['id' => 2, 'name' => 'Αγροτική Κατάρτιση - Γεωργικές Σπουδές - Γεωπονία'],
            ['id' => 2, 'name' => 'Φροντίδα Ζώων'],
            ['id' => 2, 'name' => 'Μηχανολογία'],
            ['id' => 2, 'name' => 'Ηλεκτρονικά'],
            ['id' => 2, 'name' => 'Επικοινωνία & ΜΜΕ'],
            ['id' => 2, 'name' => 'Ηλεκτρολογία & Αυτοματισμοί'],


            ['id' => 4, 'name' => 'Γενική Παιδεία'],
            ['id' => 5, 'name' => 'Ομάδα Προσανατολισμού'], /** Φροντιστήρια Μέσης Εκπαίδευσης 35-38 */
            ['id' => 6, 'name' => 'Ομάδα Προσανατολισμού'],

            ['id' => 22, 'name' => 'Ξένες Γλώσσες'], /** Φροντιστήρια Ξένων Γλωσσών Πληροφορικής 39-44 */
            ['id' => 23, 'name' => 'Ξένες Γλώσσες'],
            ['id' => 24, 'name' => 'Ξένες Γλώσσες'],
            ['id' => 22, 'name' => 'Πληροφορική-Ρομποτική'],
            ['id' => 23, 'name' => 'Πληροφορική-Ρομποτική'],
            ['id' => 24, 'name' => 'Πληροφορική-Ρομποτική'],

            ['id' => 25, 'name' => 'Μαθήματα Χορού'], /** Σχολές Χορού  45-47 */
            ['id' => 26, 'name' => 'Μαθήματα Χορού'],
            ['id' => 27, 'name' => 'Μαθήματα Χορού'],

            ['id' => 28, 'name' => 'Κλασσική Μουσική'], /** Ωδεία  48-53 */
            ['id' => 28, 'name' => 'Σύγχρονη-Μοντέρνα Μουσική'],
            ['id' => 28, 'name' => 'Παραδοσιακή-Βυζαντινή Μουσική'],
            ['id' => 28, 'name' => 'Musical'],
            ['id' => 28, 'name' => 'Φωνητική'],

            ['id' => 29, 'name' => 'Κλασσική Μουσική'],
            ['id' => 29, 'name' => 'Σύγχρονη-Μοντέρνα Μουσική'],
            ['id' => 29, 'name' => 'Παραδοσιακή-Βυζαντινή Μουσική'],
            ['id' => 29, 'name' => 'Musical'],
            ['id' => 29, 'name' => 'Φωνητική'],

            ['id' => 30, 'name' => 'Κλασσική Μουσική'],
            ['id' => 30, 'name' => 'Σύγχρονη-Μοντέρνα Μουσική'],
            ['id' => 30, 'name' => 'Παραδοσιακή-Βυζαντινή Μουσική'],
            ['id' => 30, 'name' => 'Musical'],
            ['id' => 30, 'name' => 'Φωνητική'],

            ['id' => 7, 'name' => 'Γενική Παιδεία'], /** Φροντιστήρια Μέσης Εκπαίδευσης 35-38 */
            ['id' => 8, 'name' => 'Ομάδα Προσανατολισμού'],
            ['id' => 9, 'name' => 'Ομάδα Προσανατολισμού'],

            ['id' => 10, 'name' => 'Γενική Παιδεία'], /** Ιδιωτικά Γυμνάσια Λύκεια */
            ['id' => 11, 'name' => 'Γενική Παιδεία'],
            ['id' => 12, 'name' => 'Γενική Παιδεία'],
            ['id' => 13, 'name' => 'Γενική Παιδεία'],
            ['id' => 14, 'name' => 'Γενική Παιδεία'],
            ['id' => 15, 'name' => 'Γενική Παιδεία'],
            ['id' => 16, 'name' => 'Γενική Παιδεία'],
            ['id' => 17, 'name' => 'Γενική Παιδεία'],
            ['id' => 18, 'name' => 'Γενική Παιδεία'],
            ['id' => 19, 'name' => 'Γενική Παιδεία'],
            ['id' => 20, 'name' => 'Γενική Παιδεία'],
            ['id' => 21, 'name' => 'Γενική Παιδεία'],

        ];

        foreach ($categories as $category) {
            $section = new Section;
            $section->level_id = $category['id'];
            $section->name = $category['name'];
            $section->icon = '/panel/assets/images/steps/' . $category['name'] . '.png';
            $section->save();
        }
    }
}
