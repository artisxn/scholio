<?php

use App\Models\School;
use App\Scholio\Scholio;
use Illuminate\Database\Seeder;
use Portal\Portal;

class SeedA7 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $background = Portal::createImages('/upload/school/univ.png')->id;

        $delasalle = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Κολέγιο ΔΕΛΑΣΑΛ', 'email' => 'info@delasalle.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'delasalle'])->id,
            'address' => 'Πεύκα',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310673252,
            'type_id' => 6,
            'website' => 'www.delasalle.gr',
            'approved' => 1,
            'about' => '  Το Κολέγιο «ΔΕΛΑΣΑΛ», ένα λασαλιανό σχολείο που ιδρύθηκε το 1888 στη Θεσσαλονίκη, στηρίζεται στην εμπειρία, στον διάλογο, στη συνεργασία και την πίστη σε κοινές αξίες (χριστιανικές και ανθρωπιστικές), οι οποίες προσδίδουν στο «Λασαλιανό Εκπαιδευτικό Σχέδιο» μια ανθρωπιστική και πνευματική δυναμική.

Το «ΔΕΛΑΣΑΛ», σεβόμενο απόλυτα την ελευθερία συνείδησης του ατόμου, δέχεται μαθητές χωρίς θρησκευτικές, δογματικές, πολιτικές, φυλετικές, οικονομικές και κοινωνικές διακρίσεις. Έτσι, εξασφαλίζει την αποδοχή της διαφορετικότητας του άλλου, την αμοιβαία κατανόηση και την εκτίμηση, καθώς και τον σεβασμό της ιδιαιτερότητας του καθενός. Με τον τρόπο αυτόν, συμβάλλει τα μέγιστα στην αγάπη και την ειρήνη ανάμεσα στους ανθρώπους. Ο μαθητής βρίσκεται στο κέντρο του ενδιαφέροντος της εκπαιδευτικής πράξης, η οποία πάνω απ’ όλα είναι έργο αγάπης.

Οι λασαλιανοί εκπαιδευτικοί έχουν συνείδηση ότι επιτελούν λειτούργημα, αφοσιώνονται στη μόρφωση και την αγωγή των νέων, πιστοί στην προτροπή του Ιωάννη-Βαπτιστή Δελασάλ, ιδρυτή των σχολείων τους: «Πρέπει το παράδειγμά σας να ανταποκρίνεται σ’ αυτά που λέτε …».

Σήμερα, στην εποχή της παγκοσμιοποίησης, της ισοπέδωσης και της σύγχυσης αρχών και αξιών, το λασαλιανό σχολείο, επίκαιρο όσο ποτέ, βοηθάει τους μαθητές του όχι μόνο να αποκτήσουν γνώσεις και εφόδια, αλλά και να δώσουν νόημα στη ζωή τους.

',
            'background' => $background,
        ]);

        new Portal($delasalle, 5, 'school');

        Scholio::portalStudy($delasalle, 'Παιδικός Σταθμός', 'Παιδικός Σταθμός', 'Παιδικός Σταθμός', 'http://petit.delasalle.gr/');
        Scholio::portalStudy($delasalle, 'Νηπιαγωγείο', 'Νήπια', 'Νήπια', 'http://petit.delasalle.gr/');
        Scholio::portalStudy($delasalle, 'Νηπιαγωγείο', 'Προνήπια', 'Προνήπια', 'http://petit.delasalle.gr/');

        Scholio::portalStudy($delasalle, 'Δημοτικό', 'Γενική Παιδεία', 'Ά Δημοτικού', 'http://www.elementary.delasalle.gr/');
        Scholio::portalStudy($delasalle, 'Δημοτικό', 'Γενική Παιδεία', '΄Β Δημοτικού', 'http://www.elementary.delasalle.gr/');
        Scholio::portalStudy($delasalle, 'Δημοτικό', 'Γενική Παιδεία', '΄Γ Δημοτικού', 'http://www.elementary.delasalle.gr/');
        Scholio::portalStudy($delasalle, 'Δημοτικό', 'Γενική Παιδεία', '΄Δ Δημοτικού', 'http://www.elementary.delasalle.gr/');
        Scholio::portalStudy($delasalle, 'Δημοτικό', 'Γενική Παιδεία', '΄Έ Δημοτικού', 'http://www.elementary.delasalle.gr/');
        Scholio::portalStudy($delasalle, 'Δημοτικό', 'Γενική Παιδεία', 'ΣΤ Δημοτικού', 'http://www.elementary.delasalle.gr/');
        Scholio::portalStudy($delasalle, 'Γυμνάσιο', 'Γενική Παιδεία', 'Ά Γυμνασίου', 'http://www.gymlyk.delasalle.gr/');
        Scholio::portalStudy($delasalle, 'Γυμνάσιο', 'Γενική Παιδεία', '΄Β Γυμνασίου', 'http://www.gymlyk.delasalle.gr/');
        Scholio::portalStudy($delasalle, 'Γυμνάσιο', 'Γενική Παιδεία', '΄Γ Γυμνασίου', 'http://www.gymlyk.delasalle.gr/');
        Scholio::portalStudy($delasalle, 'Λύκειο', 'Λύκειο', 'Ά Λυκείου', 'http://www.gymlyk.delasalle.gr/');
        Scholio::portalStudy($delasalle, 'Λύκειο', 'Λύκειο', '΄Β Λυκείου', 'http://www.gymlyk.delasalle.gr/');
        Scholio::portalStudy($delasalle, 'Λύκειο', 'Λύκειο', '΄Γ Λυκείου', 'http://www.gymlyk.delasalle.gr/');

        Scholio::portalSocial($delasalle, 'facebook', 'https://www.facebook.com/DeLaSalle.Thes');
        Scholio::portalSocial($delasalle, 'twitter', 'https://twitter.com/DeLaSalle_Thes');
        Scholio::portalSocial($delasalle, 'youtube', 'https://www.youtube.com/user/DeLaSalleCollegeThes');

    }
}
