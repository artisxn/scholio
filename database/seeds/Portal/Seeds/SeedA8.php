<?php

use App\Models\School;
use App\Scholio\Scholio;
use Illuminate\Database\Seeder;
use Portal\Portal;

class SeedA8 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $background = Portal::createImages('/upload/school/univ.png')->id;

        // ΝΕΑ ΠΑΙΔΕΙΑ
        $neapaideia = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Νέα Παιδεία', 'email' => 'info@nea-paideia.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'neapaideia'])->id,
            'address' => 'Γρ. Λαμπράκη 409 & Σπαρτάκου 1, Αμφιάλη',
            'city' => 'Αθήνα',
            'phone' => 2104008671,
            'type_id' => 3,
            'website' => 'nea-paideia.gr',
            'approved' => 1,
            'about' => 'Τα φροντιστήριά μας διαθέτουν 10 αίθουσες διδασκαλίας συνολικής έκτασης 330 τ.μ σε 2 ορόφους. Στον 2ο όροφο υπάρχουν οι αίθουσες Λυκείου ,Γυμνασίου, Γραμματείας και καθηγητών.Στον 1ο όροφο οι αίθουσες δημοτικού. Φροντίζουμε ώστε οι αίθουσες διδασκαλίας να είναι έτσι διαμορφωμένες ώστε να δημιουργείται ευχάριστο περιβάλλον που βοηθά το έργο τόσο των μαθητών όσο και των εκπαιδευτικών.',
            'background' => $background,
        ]);

        new Portal($neapaideia, 5, 'frontistirio');

        Scholio::portalStudy($neapaideia, 'Γυμνάσιο', 'Γυμνάσιο', 'Α΄ Γυμνασίου');
        Scholio::portalStudy($neapaideia, 'Γυμνάσιο', 'Γυμνάσιο', 'B΄ Γυμνασίου');
        Scholio::portalStudy($neapaideia, 'Γυμνάσιο', 'Γυμνάσιο', 'Γ΄ Γυμνασίου');
        Scholio::portalStudy($neapaideia, 'Α΄ Λυκείου', 'Γενική Παιδεία', 'Α΄ Λυκείου');
        Scholio::portalStudy($neapaideia, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($neapaideia, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($neapaideia, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($neapaideia, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($neapaideia, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Οικονομικών Σπουδών & Πληροφορικής');

        Scholio::portalSocial($neapaideia, 'facebook', 'https://www.facebook.com/frontistirioneapaideia/');
        Scholio::portalSocial($neapaideia, 'instagram', 'https://www.instagram.com/nea_paideia/?hl=el');
        Scholio::portalSocial($neapaideia, 'youtube', 'https://www.youtube.com/channel/UCf941Sj2XTAkBouScPPLnRQ');
        Scholio::portalSocial($neapaideia, 'google', 'https://plus.google.com/115290071406119852990');
        Scholio::portalSocial($neapaideia, 'linkedin', 'https://www.linkedin.com/in/nea-paideia-30116a96/');
            

        // ΕΚΠΑΙΔΕΥΤΙΚΗ ΦΡΟΝΤΙΔΑ ** (epitixies)
        $ekpaideutikifontida = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Εκπαιδευτική Φροντίδα', 'email' => 'info@frontida.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'ekpaideutikifontida'])->id,
            'address' => 'Στρατ. Πετρίτη 1, Πλατεία Δροσιάς',
            'city' => 'Αθήνα',
            'phone' => 2106228163,
            'type_id' => 3,
            'website' => 'www.frontida.edu.gr',
            'approved' => 1,
            'about' => 'Το φροντιστήριο «ΕΚΠΑΙΔΕΥΤΙΚΗ ΦΡΟΝΤΙΔΑ» είναι ένας σύγχρονος, νόμιμος, ποιοτικός και πιστοποιημένος (από ανεξάρτητο ελεγκτικό φορέα) εκπαιδευτικός οργανισμός.
            Η διοίκηση του φροντιστηρίου:
            Αναλαμβάνει απόλυτα την κοινωνική ευθύνη της εκπαιδευτικής αποστολής της.

            Αποδέχεται πλήρως τις αντίστοιχες υποχρεώσεις που απορρέουν από αυτήν.

            Δεσμεύεται να παρέχει υψηλής ποιότητας εκπαιδευτικές υπηρεσίες σε μαθητές μέσης εκπαίδευσης, με σκοπό τη συνεχή βελτίωση της γνωστικής – συναισθηματικής υποδομής τους και τελικό στόχο την επιτυχία τους στις εξετάσεις εισαγωγής στην τριτοβάθμια εκπαίδευση.


            Το φροντιστήριο αναπτύσσει εκπαιδευτικά συστήματα και μεθοδολογίες, ώστε να ανταποκρίνεται με επιτυχία στις διαρκώς μεταβαλλόμενες απαιτήσεις του Υπουργείου Παιδείας. Προκειμένου να εξασφαλισθεί η διαρκής βελτίωση και η αποτελεσματικότητα της λειτουργίας του φροντιστηρίου για την επίτευξη των σκοπών του, το φροντιστήριο θέτει στόχους και παρακολουθεί τις δραστηριότητες που λαμβάνουν χώρα σε αυτό. Σε αυτό το πλαίσιο, η διοίκηση του φροντιστηρίου δεσμεύεται για:
            Παροχή εκπαιδευτικών υπηρεσιών υψηλής ποιότητας.

            Ανάπτυξη και διατήρηση άριστης υποδομής και υψηλού επιπέδου καθηγητών.

            Μέγιστη ικανοποίηση των μαθητών και των γονέων, από την παροχή αποτελεσματικής εκπαιδευτικής βοήθειας.

            Επιτυχία στις προαγωγικές και εισαγωγικές εξετάσεις.

            Την πιστή τήρηση όλων των νομοθετικών - κανονιστικών απαιτήσεων.


            Όλα τα πιο πάνω, εντάσσονται συνειδητά και ολοκληρωμένα, σε μια απολύτως εκπαιδευτική, ανθρωποκεντρική και ευαίσθητη, θεώρηση, η οποία θέτει στο επίκεντρο των προσπαθειών μας τις εκπαιδευτικές ανάγκες – επιθυμίες – φιλοδοξίες του μαθητή μας.
            ',
            'background' => $background,
        ]);

        new Portal($ekpaideutikifontida, 5, 'frontistirio');

        Scholio::portalStudy($ekpaideutikifontida, 'Γυμνάσιο', 'Γυμνάσιο', 'Α΄ Γυμνασίου');
        Scholio::portalStudy($ekpaideutikifontida, 'Γυμνάσιο', 'Γυμνάσιο', 'B΄ Γυμνασίου');
        Scholio::portalStudy($ekpaideutikifontida, 'Γυμνάσιο', 'Γυμνάσιο', 'Γ΄ Γυμνασίου');
        Scholio::portalStudy($ekpaideutikifontida, 'Α΄ Λυκείου', 'Γενική Παιδεία', 'Α΄ Λυκείου');
        Scholio::portalStudy($ekpaideutikifontida, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($ekpaideutikifontida, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($ekpaideutikifontida, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($ekpaideutikifontida, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($ekpaideutikifontida, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Οικονομικών Σπουδών & Πληροφορικής');

        Scholio::portalSocial($ekpaideutikifontida, 'facebook', 'https://www.facebook.com/pg/to.kalitero.frontistirio/');

        // ΜΑΘΗΤΙΚΟ ΣΠΟΥΔΑΣΤΗΡΙ *** (kathigites, epitixies)
        $mathitikospoudastiri = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Μαθητικό Σπουδαστήρι', 'email' => 'spouda@otenet.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'mathitikospoudastiri'])->id,
            'address' => 'Ξενοφώντος 13, Κορυδαλλός',
            'city' => 'Αθήνα',
            'phone' => 2104966170,
            'type_id' => 3,
            'website' => 'www.mathitiko-spoudastiri.gr',
            'approved' => 1,
            'about' => 'Πεποίθηση μας είναι ότι το ΜΑΘΗΤΙΚΟ ΣΠΟΥΔΑΣΤΗΡΙ, μπορεί να μετατραπεί σε εφαλτήριο του μαθητή προς τις Ανώτατες Σχολές.

            Ακόμα, πιστεύουμε στον κοινωνικό ρόλο του Φροντιστηρίου. Έτσι επί 32 χρόνια βοηθάμε τους μαθητές των περιοχών μας, να πετύχουν στις Πανεπιστημιακές Σχολές, προάγοντας ταυτόχρονα ως αρχές μας, την ηθική και την ευθύνη ενός μελλοντικού επιστήμονα.
            
            Στα χρόνια λειτουργίας μας, 4000 περίπου μαθητές μας πέτυχαν στις Πανελλαδικές εξετάσεις δημιουργώντας παράδοση που οριοθετεί το περιβάλλον, μέσα στο οποίο κάθε καινούργιος Σπουδαστής μας προσπαθεί – με εμάς αρωγούς του- για την επιτυχία του.',
            'background' => $background,
        ]);

        new Portal($mathitikospoudastiri, 5, 'frontistirio');

        Scholio::portalStudy($mathitikospoudastiri, 'Γυμνάσιο', 'Γυμνάσιο', 'Α΄ Γυμνασίου');
        Scholio::portalStudy($mathitikospoudastiri, 'Γυμνάσιο', 'Γυμνάσιο', 'B΄ Γυμνασίου');
        Scholio::portalStudy($mathitikospoudastiri, 'Γυμνάσιο', 'Γυμνάσιο', 'Γ΄ Γυμνασίου');
        Scholio::portalStudy($mathitikospoudastiri, 'Α΄ Λυκείου', 'Γενική Παιδεία', 'Α΄ Λυκείου');
        Scholio::portalStudy($mathitikospoudastiri, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($mathitikospoudastiri, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($mathitikospoudastiri, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($mathitikospoudastiri, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($mathitikospoudastiri, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Οικονομικών Σπουδών & Πληροφορικής');

        Scholio::portalSocial($mathitikospoudastiri, 'facebook', 'https://www.facebook.com/pages/Mathitiko-Spoudastiri/206997222694643');


        // ΠΡΟΟΔΟΣ
        $proodos = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Πρόοδος', 'email' => 'fr_proodos@yahoo.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'proodos'])->id,
            'address' => 'Εσπερίδων 104, Καλλιθέα',
            'city' => 'Αθήνα',
            'phone' => 2109514517,
            'type_id' => 3,
            'website' => 'www.proodos.gr',
            'approved' => 1,
            'about' => 'Για να έχουμε καλές σχολικές επιδόσεις χρειάζεται σκληρή δουλεία και μεθοδικότητα. Στα φροντιστήρια μας προετοιμάζουμε τους αυριανούς αριστούχους με πρόγραμμα και συνέπεια

            1. Προσδιορίζουμε τους στόχους του κάθε μαθητή ξεχωριστά.
            2. Βοηθάμε τον κάθε μαθητή, να οργανώσει τον χρόνο του. Καταρτίζουμε μαζί του το εβδομαδιαίο του πρόγραμμα , ώστε να μπορεί να είναι συνεπής σε όλες τις υποχρεώσεις του (σχολείο, φροντιστήριο, ξένες γλώσσες, αθλητικές δραστηριότητες κτλ) 
            3. Ακολουθούμε ένα συστηματικό και οργανωμένο πρόγραμμα από τις μικρότερες τάξεις, ώστε να προσαρμοστεί ο μαθητής συντομότερα στις ολοένα αυξανόμενες απαιτήσεις του εκπαιδευτικού μας συστήματος. 
            4. Οργανώνουμε ολιγομελή και ομοιογενή τμήματα 
            5. Παρέχουμε επιπλέον εκπαιδευτικό υλικό (σημειώσεις και σχολικά βοηθήματα) σε όλους τους μαθητές 
            6. Σε όσους μαθητές χρειάζεται, γίνονται επιπλέον διδακτικές ώρες (δωρεάν) για την κάλυψη κενών από προηγούμενες τάξεις και και την βελτίωση της επίδοσης του 
            7. Γίνεται συνεχώς έλεγχος της γνώσης 
                (i) με δυο κύκλους τρίωρων διαγωνισμάτων των φροντιστηρίων μας, από τον Οκτώβριο έως τον Μάρτιο και
                (ii) με έναν κύκλο διαγωνισμάτων προσομοίωσης ΟΕΦΕ , από 27 Μαρτίου έως 29 Απρίλιου 
            8. Οργανώνουμε τακτικές ενημερώσεις των γονέων για την πρόοδο των μαθητών. 
            9. Παρέχουμε συμβουλές σε γονείς και μαθητές, ώστε να αντιμετωπίσουν τα προβλήματα που προκύπτουν στην δύσκολη περίοδο πριν τις εξετάσεις , καθώς και για το πώς θα πρέπει να διαχειριστούν τις σχολικές τους επιδόσεις.',
            'background' => $background,
        ]);

        new Portal($proodos, 5, 'frontistirio');

        Scholio::portalStudy($proodos, 'Γυμνάσιο', 'Γυμνάσιο', 'Α΄ Γυμνασίου');
        Scholio::portalStudy($proodos, 'Γυμνάσιο', 'Γυμνάσιο', 'B΄ Γυμνασίου');
        Scholio::portalStudy($proodos, 'Γυμνάσιο', 'Γυμνάσιο', 'Γ΄ Γυμνασίου');
        Scholio::portalStudy($proodos, 'Α΄ Λυκείου', 'Γενική Παιδεία', 'Α΄ Λυκείου');
        Scholio::portalStudy($proodos, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($proodos, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($proodos, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($proodos, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($proodos, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Οικονομικών Σπουδών & Πληροφορικής');

        Scholio::portalSocial($proodos, 'facebook', 'https://www.facebook.com/pg/fr.proodos');


        // Εν Δυνάμει *** (epitixies) odigos - school management  ---- OXI EMAIL ----
        $endynamei = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Πρόοδος', 'email' => 'info@en-dynamei.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'endynamei'])->id,
            'address' => 'Ούλωφ Πάλμε & Επάφου & Χρυσίππου 1',
            'city' => 'Αθήνα',
            'phone' => 2107488030,
            'type_id' => 3,
            'website' => 'www.en-dynamei.gr',
            'approved' => 1,
            'about' => 'Η υψηλή ποιότητα του διδακτικού μας έργου είναι κάτι που μπορεί κανείς να επαληθεύσει όχι μόνο από τις επιτυχίες μας, όχι μόνο από τη γνώμη γονιών και μαθητών που βρέθηκαν κοντά μας, αλλά και από τις επιστημονικές εκδόσεις μας που βρίσκονται στις προθήκες των βιβλιοπωλείων.',
            'background' => $background,
        ]);

        new Portal($endynamei, 5, 'frontistirio');

        Scholio::portalStudy($endynamei, 'Γυμνάσιο', 'Γυμνάσιο', 'Α΄ Γυμνασίου');
        Scholio::portalStudy($endynamei, 'Γυμνάσιο', 'Γυμνάσιο', 'B΄ Γυμνασίου');
        Scholio::portalStudy($endynamei, 'Γυμνάσιο', 'Γυμνάσιο', 'Γ΄ Γυμνασίου');
        Scholio::portalStudy($endynamei, 'Α΄ Λυκείου', 'Γενική Παιδεία', 'Α΄ Λυκείου');
        Scholio::portalStudy($endynamei, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($endynamei, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($endynamei, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($endynamei, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($endynamei, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Οικονομικών Σπουδών & Πληροφορικής');
    }
}
