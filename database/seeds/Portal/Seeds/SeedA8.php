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


        // ΑΡΝΟΣ ΟΝΛΙΝΕ ----
        // $arnos = factory(App\Models\School::class)->create([
        //     'user_id' => factory(App\User::class)->create(['name' => 'ΑΡΝΟΣ', 'email' => 'customer-care@arnos.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'arnos'])->id,
        //     'address' => 'Σολωμού 29',
        //     'city' => 'Αθήνα',
        //     'phone' => 2103822157,
        //     'type_id' => 3,
        //     'website' => 'www.arnos.gr',
        //     'approved' => 1,
        //     'about' => 'Ζούμε σε μια εποχή όπου οι Γνώσεις και η Τεχνολογία εξελίσσονται ταχύτατα και δυναμικά, καθιστώντας αυτό που ήταν σύγχρονο χθες, να είναι απαξιωμένο σήμερα. Για τον λόγο αυτό, η χρήση ψηφιακών και διαδικτυακών τεχνολογιών στην εκπαίδευση και τη μαθησιακή κατάρτιση αποτελεί επιτακτική ανάγκη.

        //     Το Κέντρο Online Εκπαίδευσης ΑΡΝΟΣ από την ίδρυσή του είναι πάντα ένα βήμα μπροστά ενσωματώνοντας όλες τις καινοτόμες τεχνολογίες στην εκπαιδευτική διαδικασία. Πλέον είναι σε θέση να προτείνει έναν εναλλακτικό και πρωτοποριακό τρόπο εκπαίδευσης, που προσφέρει τη δυνατότητα πρόσβασης στο εκπαιδευτικό υλικό, μέσω διαδικτύου 24 ώρες την ημέρα, 7 μέρες την εβδομάδα!
            
        //     Οι εξειδικευμένες γνώσεις και η πολυετής μας εμπειρία, οι οποίες αποτυπώνονται και στην εμπιστοσύνη που μας έχουν δείξει οι χιλιάδες μαθητές και φοιτητές μας, μπορούν και εξασφαλίζουν ποιοτικές υπηρεσίες που διαρκώς εξελίσσονται και βελτιώνονται.
            
        //     Η συμμετοχή του Κέντρου Online Εκπαίδευσης ΑΡΝΟΣ σε διεθνής εκπαιδευτικές εκθέσεις (EDUCA, BETT κ.ά.) συμβάλει στο να ανοίγουμε τους ορίζοντές μας και να προσφέρουμε καινοτόμες λύσεις με σκοπό την παροχή πρωτοπόρων και ποιοτικών εκπαιδευτικών υπηρεσιών στη χώρα μας αλλά και πέρα από αυτή.
            
        //     Σήμερα, με τα εφόδια που έχουμε αποκτήσει από την 30χρονη πορεία μας στο χώρο της εκπαίδευσης και από την δική σας ουσιαστική αποδοχή και στήριξη, όλη η ομάδα του Κέντρου Online Εκπαίδευσης ΑΡΝΟΣ δουλεύουμε ακατάπαυστα για να κάνουμε πραγματικότητα το όραμά μας για μια εκπαίδευση χωρίς όρια!',
        //     'background' => $background,
        // ]);

        // new Portal($arnos, 5, 'frontistirio');

        // Scholio::portalStudy($arnos, 'Γυμνάσιο', 'Γυμνάσιο', 'Α΄ Γυμνασίου');
        // Scholio::portalStudy($arnos, 'Γυμνάσιο', 'Γυμνάσιο', 'B΄ Γυμνασίου');
        // Scholio::portalStudy($arnos, 'Γυμνάσιο', 'Γυμνάσιο', 'Γ΄ Γυμνασίου');
        // Scholio::portalStudy($arnos, 'Α΄ Λυκείου', 'Γενική Παιδεία', 'Α΄ Λυκείου');
        // Scholio::portalStudy($arnos, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        // Scholio::portalStudy($arnos, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        // Scholio::portalStudy($arnos, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        // Scholio::portalStudy($arnos, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        // Scholio::portalStudy($arnos, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Οικονομικών Σπουδών & Πληροφορικής');

        // Scholio::portalSocial($arnos, 'facebook', 'https://www.facebook.com/arnos.gr');
        // Scholio::portalSocial($arnos, 'google', 'https://plus.google.com/106710962713844327386');
        // Scholio::portalSocial($arnos, 'twitter', 'https://twitter.com/ask_Arnos');
        // Scholio::portalSocial($arnos, 'youtube', 'https://www.youtube.com/user/arnostv');
        // Scholio::portalSocial($arnos, 'linkedin', 'https://www.linkedin.com/company/9499841');


        // $irakleitos = factory(App\Models\School::class)->create([
        //     'user_id' => factory(App\User::class)->create(['name' => 'ΗΡΑΚΛΕΙΤΟΣ', 'email' => 'mail@irakleitos.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'irakleitos'])->id,
        //     'address' => 'Κωλέττη 19-21',
        //     'city' => 'Αθήνα',
        //     'phone' => 2103824614,
        //     'type_id' => 3,
        //     'website' => 'www.irakleitos.gr',
        //     'approved' => 1,
        //     'about' => 'Φροντιστήριο: Αυτόνομος εκπαιδευτικός οργανισμός

        //     Το Φροντιστήριο άρχισε ως οργανισμός παροχής υποστηρικτικής εκπαίδευσης στους μαθητές.
            
        //     Δεν έμεινε όμως εκεί. Αρκετά φροντιστήρια -μεταξύ των οποίων και ο ΗΡΑΚΛΕΙΤΟΣ- εξελίχθηκαν σε αυτόνομους εκπαιδευτικούς οργανισμούς.
            
        //     Κατάφεραν να δημιουργήσουν τη δική τους εκπαιδευτική πρόταση και να προσελκύσουν καθηγητές που διακρίνονται για τις υψηλές τους φιλοδοξίες, τη θέληση για ανανέωση, και την ανάγκη να υιοθετήσουν τα νέα εκπαιδευτικά πρότυπα της εποχής μας.
            
        //     Καθηγητές ανήσυχοι και υπεύθυνοι, που αναζητούν το καινούργιο και προσπαθούν να προσφέρουν στους μαθητές τους την ουσιαστική γνώση.
            
        //     Ο κοινωνικός ρόλος του Φροντιστηρίου
            
        //     Εκτός από την αυτονομία που κατέκτησε, το Φροντιστήριο έπαιξε και εξακολουθεί να παίζει σημαντικό κοινωνικό ρόλο: Χρόνια τώρα, βοηθάει τους μαθητές των μη προνομιούχων κοινωνικών στρωμάτων να πετύχουν στις Σχολές της Ανώτατης και Ανώτερης Εκπαίδευσης, και έτσι να αναδειχτούν κοινωνικά και οικονομικά. 
            
        //     Δεν θα επεκταθώ περισσότερο στον κοινωνικό και μορφωτικό ρόλο του Φροντιστηρίου.
            
        //     Θέλω μόνο να πω ότι αυτοί είναι δύο από τους λόγους που εδραίωσαν το Φροντιστήριο -και ειδικότερα τον ΗΡΑΚΛΕΙΤΟ- στη συνείδηση των μαθητών και των γονέων τους.
            
        //     Δύο απλοί λόγοι που κάνουν τους γονείς και τους μαθητές να μας εμπιστεύονται και να περιμένουν από μας να δίνουμε τον καλύτερο εαυτό μας.
            
        //     Δεν θα τους διαψεύσουμε ποτέ! ',
        //     'background' => $background,
        // ]);

        // new Portal($irakleitos, 5, 'frontistirio');

        // Scholio::portalStudy($irakleitos, 'Γυμνάσιο', 'Γυμνάσιο', 'Α΄ Γυμνασίου');
        // Scholio::portalStudy($irakleitos, 'Γυμνάσιο', 'Γυμνάσιο', 'B΄ Γυμνασίου');
        // Scholio::portalStudy($irakleitos, 'Γυμνάσιο', 'Γυμνάσιο', 'Γ΄ Γυμνασίου');
        // Scholio::portalStudy($irakleitos, 'Α΄ Λυκείου', 'Γενική Παιδεία', 'Α΄ Λυκείου');
        // Scholio::portalStudy($irakleitos, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        // Scholio::portalStudy($irakleitos, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        // Scholio::portalStudy($irakleitos, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        // Scholio::portalStudy($irakleitos, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        // Scholio::portalStudy($irakleitos, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Οικονομικών Σπουδών & Πληροφορικής');

        // 
        // $proodos = factory(App\Models\School::class)->create([
        //     'user_id' => factory(App\User::class)->create(['name' => 'Πρόοδος', 'email' => 'fr_proodos@yahoo.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'proodos'])->id,
        //     'address' => 'Εσπερίδων 104, Καλλιθέα',
        //     'city' => 'Αθήνα',
        //     'phone' => 2109514517,
        //     'type_id' => 3,
        //     'website' => 'www.proodos.gr',
        //     'approved' => 1,
        //     'about' => '',
        //     'background' => $background,
        // ]);

        // new Portal($proodos, 5, 'frontistirio');

        // Scholio::portalStudy($proodos, 'Γυμνάσιο', 'Γυμνάσιο', 'Α΄ Γυμνασίου');
        // Scholio::portalStudy($proodos, 'Γυμνάσιο', 'Γυμνάσιο', 'B΄ Γυμνασίου');
        // Scholio::portalStudy($proodos, 'Γυμνάσιο', 'Γυμνάσιο', 'Γ΄ Γυμνασίου');
        // Scholio::portalStudy($proodos, 'Α΄ Λυκείου', 'Γενική Παιδεία', 'Α΄ Λυκείου');
        // Scholio::portalStudy($proodos, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        // Scholio::portalStudy($proodos, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        // Scholio::portalStudy($proodos, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        // Scholio::portalStudy($proodos, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        // Scholio::portalStudy($proodos, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Οικονομικών Σπουδών & Πληροφορικής');

        // Scholio::portalSocial($proodos, 'facebook', 'https://www.facebook.com/pg/fr.proodos');
    }
}
