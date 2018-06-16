<?php

use Illuminate\Database\Seeder;
use App\Scholio\Scholio;
use Portal\Portal;

class Schools extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $background = Portal::createImages('/upload/school/univ.png')->id;

        /*===============  Φροντιστήριο Επίκεντρο ================*/
        $epik = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Φροντιστήριο Επίκεντρο', 'email' => 'epicedro@otenet.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'epikentro'])->id,
            'address' => 'Ναυάρχου Βότση 46, Σταυρούπολη',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310587440,
            'type_id' => 3,
            'website' => 'epikentro.edu.gr',
            'approved' => 1,
            'about' => '
            Απ΄ το 1999 μέχρι και σήμερα, με κατευθυντήριους άξονες την οργάνωση, την μεθοδικότητα και την αποτελεσματικότητα, τα φροντιστήρια ΕΠΙΚΕΝΤΡΟ παρέχουν στους μαθητές τους άρτια και ολοκληρωμένη φροντιστηριακή υποστήριξη υψηλού επιπέδου.
Κινητήριος Δύναμη των φροντιστηρίων ΕΠΙΚΕΝΤΡΟ είναι, καταξιωμένοι καθηγητές, οι οποίοι χάρη στην επιστημονική τους αρτιότητα , τη μεταδοτικότητα, το χιούμορ, αλλά και την πλούσια εκπαιδευτική τους εμπειρία, συμβάλλουν ουσιαστικά στην πρόοδο των μαθητών και τους προετοιμάζουν για την επίτευξη των στόχων τους.
Κοιτάζοντας κατάματα τις προκλήσεις των καιρών, αναδεικνύουμε στο έπακρο τις ικανότητες των μαθητών μας (και αυριανών επιστημόνων), μεταλαμπαδεύοντάς τους την γνώση, για να κάνουν το όνειρό τους πραγματικότητα.

Διεύθυνση Σπουδών
Γιώργος Δημητριάδης – Αλέξανδρος Βασάρας
            ',
            'background' => $background,
        ]);

        new Portal($epik, 5, 'school');

        Scholio::portalStudy($epik, 'Γυμνάσιο', 'Γυμνάσιο', 'Ά Γυμνασίου');
        Scholio::portalStudy($epik, 'Γυμνάσιο', 'Γυμνάσιο', '΄Β Γυμνασίου');
        Scholio::portalStudy($epik, 'Γυμνάσιο', 'Γυμνάσιο', '΄Γ Γυμνασίου');
        Scholio::portalStudy($epik, 'Α΄ Λυκείου', 'Γενική Παιδεία', 'Α΄ Λυκείου');
        Scholio::portalStudy($epik, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($epik, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($epik, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($epik, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($epik, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Οικονομικών Σπουδών & Πληροφορικής');


        Scholio::portalSocial($epik, 'facebook', 'https://www.facebook.com/Επίκεντρο-Φροντιστήριο-Μέσης-Εκπαίδευσης-1434744540176860/');
//        Scholio::portalSocial($epik, 'instagram', 'https://www.instagram.com/');
//        Scholio::portalSocial($epik, 'youtube', 'https://www.youtube.com/');




        /*=============== Φροντιστήριο Τσακανίκας ================*/

        $tsak = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => 'tsakanikasedu@gmail.com', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'tsakanikas'])->id,
            'address' => 'Νέο Πάρκο Επανομής, 57500',
            'city' => 'Επανομή',
            'phone' => 2392045123,
            'type_id' => 3,
            'website' => 'tsakanikas.edu.gr',
            'approved' => 1,
            'about' => '

            ',
            'background' => $background,
        ]);

        new Portal($tsak, 5, 'school');

        Scholio::portalStudy($tsak, 'Γυμνάσιο', 'Γυμνάσιο', 'Ά Γυμνασίου');
        Scholio::portalStudy($tsak, 'Γυμνάσιο', 'Γυμνάσιο', '΄Β Γυμνασίου');
        Scholio::portalStudy($tsak, 'Γυμνάσιο', 'Γυμνάσιο', '΄Γ Γυμνασίου');
        Scholio::portalStudy($tsak, 'Α΄ Λυκείου', 'Γενική Παιδεία', 'Α΄ Λυκείου');
        Scholio::portalStudy($tsak, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($tsak, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($tsak, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($tsak, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($tsak, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Οικονομικών Σπουδών & Πληροφορικής');


        Scholio::portalSocial($tsak, 'facebook', 'https://www.facebook.com/tsakanikas.edu.gr');
//        Scholio::portalSocial($tsak, 'instagram', 'https://www.instagram.com/');
//        Scholio::portalSocial($tsak, 'youtube', 'https://www.youtube.com/');

        /*=============== To Φροντιστήριο ================*/

        $tofront = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Το Φροντιστήριο', 'email' => 'info@tofrodistirio.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'tofrodistirio'])->id,
            'address' => 'Αγίας Σοφίας και Αγίας Θεοδώρας 15',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310286777,
            'type_id' => 3,
            'website' => 'tofrodistirio.gr ',
            'approved' => 1,
            'about' => '
            Το σχολικό έτος 2011 - 2012 ταράζοντας τα λιμνάζοντα νερά στο χώρο της φροντιστηριακής εκπαίδευσης, μια αποτελεσματική και εξειδικευμένη ομάδα καταξιωμένων εκπαιδευτικών με πολυετή εμπειρία ξεκινήσαμε μια ανεξάρτητη πορεία. Με αίσθημα ευθύνης απευθυνθήκαμε στους μαθητές της θετικής και τεχνολογικής κατεύθυνσης, ιδρύοντας ένα φροντιστήριο μάχιμων καθηγητών.
Φιλοδοξία μας ήταν και είναι ότι με συστηματική εργασία, οργάνωση και παρακολούθηση, προσαρμοστικότητα και καινοτόμες δράσεις μπορούμε να πετύχουμε. Θεωρούμε το φροντιστήριο θεσμό της εκπαίδευσης και όχι εμπορική επιχείρηση. Παράλληλα αντιλαμβανόμενοι την ιδιαιτερότητα της εποχής παρέχουμε υπηρεσίες υψηλού επιπέδου, που είναι όμως προσιτές σε όλους.
Σε συνεργασία με τους μαθητές συμβάλλουμε στην υλοποίηση των στόχων τους, μεγιστοποιώντας την επίδοσή τους στις εξετάσεις για την εισαγωγή στην τριτοβάθμια εκπαίδευση.

            ',
            'background' => $background,
        ]);

        new Portal($tofront, 5, 'school');

        Scholio::portalStudy($tofront, 'Γυμνάσιο', 'Γυμνάσιο', 'Ά Γυμνασίου');
        Scholio::portalStudy($tofront, 'Γυμνάσιο', 'Γυμνάσιο', '΄Β Γυμνασίου');
        Scholio::portalStudy($tofront, 'Γυμνάσιο', 'Γυμνάσιο', '΄Γ Γυμνασίου');
        Scholio::portalStudy($tofront, 'Α΄ Λυκείου', 'Γενική Παιδεία', 'Α΄ Λυκείου');
        Scholio::portalStudy($tofront, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($tofront, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($tofront, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($tofront, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($tofront, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Οικονομικών Σπουδών & Πληροφορικής');


        Scholio::portalSocial($tofront, 'facebook', 'https://www.facebook.com/tofrontistirio.thessaloniki');
//        Scholio::portalSocial($tofront, 'instagram', 'https://www.instagram.com/');
//        Scholio::portalSocial($tofront, 'youtube', 'https://www.youtube.com/');

        /*=============== Φροντιστήριο Βακάλης Κέντρο ================*/

        $vak = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Φροντιστήρια Βακάλης', 'email' => 'kentro@vakalis.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'vakalis'])->id,
            'address' => 'Μητροπόλεως 17',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310221041,
            'type_id' => 3,
            'website' => 'vakalis.edu.gr',
            'approved' => 1,
            'about' => '
Φροντιστήρια Βακάλης: Σε πάμε εκεί που θέλεις
Από το 1967 μέχρι σήμερα, το εκπαιδευτικό μας όραμα διατηρεί μία σταθερή συνέπεια: βοηθάμε νέους ανθρώπους, αυριανούς ενεργούς πολίτες, να πετύχουν τα όνειρά τους.
Παρέχουμε μαθησιακά κίνητρα, δημιουργούμε εκπαιδευτικές προκλήσεις, είμαστε δίπλα σε κάθε απορία, έτοιμοι να αφουγκραστούμε τις ανησυχίες και να ενισχύσουμε τις ικανότητες των μαθητών μας.
Αντιμετωπίζοντας τον κάθε υποψήφιο ως μια διακριτή και ξεχωριστή προσωπικότητα, συμβάλλουμε στο να ανακαλύψει ο ίδιος τις κλίσεις, τα ενδιαφέροντα και τις δυνατότητές του κι εν τέλει, μέσα από τη συνεργασία μας, να καταφέρει να εισαχθεί στη σχολή της επιλογής του.
            ',
            'background' => $background,
        ]);

        new Portal($vak, 5, 'school');

        Scholio::portalStudy($vak, 'Γυμνάσιο', 'Γυμνάσιο', 'Ά Γυμνασίου');
        Scholio::portalStudy($vak, 'Γυμνάσιο', 'Γυμνάσιο', '΄Β Γυμνασίου');
        Scholio::portalStudy($vak, 'Γυμνάσιο', 'Γυμνάσιο', '΄Γ Γυμνασίου');
        Scholio::portalStudy($vak, 'Α΄ Λυκείου', 'Γενική Παιδεία', 'Α΄ Λυκείου');
        Scholio::portalStudy($vak, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($vak, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($vak, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($vak, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($vak, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Οικονομικών Σπουδών & Πληροφορικής');


        Scholio::portalSocial($vak, 'facebook', 'https://www.facebook.com/vakalis.frontistiria/');
        Scholio::portalSocial($vak, 'instagram', 'https://www.instagram.com/vakalis_frontistiria');
        Scholio::portalSocial($vak, 'youtube', 'https://www.youtube.com/channel/UCmPwzv20nkIZYUjRLwmyMxg');


        /*=============== Φροντιστήριο Elix Κέντρο ================*/

        $elix = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Έλιξ Φροντιστήρια Υψηλών Στόχων', 'email' => 'aristotelous@elix.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'elix'])->id,
            'address' => 'Αριστοτέλους 8',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310269849,
            'type_id' => 3,
            'website' => 'elix.edu.gr',
            'approved' => 1,
            'about' => '
Στα έλιξ απαντούμε σε καίριες ερωτήσεις που απασχολούν μαθητές, γονείς και εκπαιδευτικούς. Οι απαντήσεις που δίνουμε δεν είναι γενικές και θεωρητικές, αλλά πηγάζουν από δοκιμασμένες πρακτικές που έχουν αποτέλεσμα σε κάθε μαθητή ξεχωριστά.
Τι κάνουμε στα έλιξ σήμερα;
Προετοιμάζουμε τους μαθητές μας για την επιτυχία τους στις Πανελλαδικές Εξετάσεις, αλλά και για να δώσουν μάχες για επόμενες επιτυχίες. Προσαρμόζουμε τα αναλυτικά Προγράμματα Σπουδών στις ανάγκες των Πανελλαδικών Εξετάσεων του 2019 και του 2020, απαντώντας σε ερωτήματα όπως ποια είναι η ύλη των Πανελλαδικών Εξετάσεων και πότε θα διδαχθεί στους μαθητές. Εκπαιδεύουμε άριστους εκπαιδευτικούς στην εφαρμογή συστημάτων και διαδικασιών.
            ',
            'background' => $background,
        ]);

        new Portal($elix, 5, 'school');

        Scholio::portalStudy($elix, 'Γυμνάσιο', 'Γυμνάσιο', 'Ά Γυμνασίου');
        Scholio::portalStudy($elix, 'Γυμνάσιο', 'Γυμνάσιο', '΄Β Γυμνασίου');
        Scholio::portalStudy($elix, 'Γυμνάσιο', 'Γυμνάσιο', '΄Γ Γυμνασίου');
        Scholio::portalStudy($elix, 'Α΄ Λυκείου', 'Γενική Παιδεία', 'Α΄ Λυκείου');
        Scholio::portalStudy($elix, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($elix, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($elix, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($elix, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($elix, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Οικονομικών Σπουδών & Πληροφορικής');


        Scholio::portalSocial($elix, 'facebook', 'https://www.facebook.com/elix.edu.gr');
//        Scholio::portalSocial($elix, 'instagram', 'https://www.instagram.com/');
        Scholio::portalSocial($elix, 'youtube', 'https://www.youtube.com/channel/UCw25zj59U5jI8CezDjgWdIw');
        Scholio::portalSocial($elix, 'linkedin', 'https://www.linkedin.com/company/%CF%86%CF%81%CE%BF%CE%BD%CF%84%CE%B9%CF%83%CF%84%CE%AE%CF%81%CE%B9%CE%B1-%CE%AD%CE%BB%CE%B9%CE%BE/');

        /*=============== Φροντιστήριο e-εκπαίδευση ================*/

        $ekpd = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Φροντιστήρια e-εκπαίδευση', 'email' => 'info@ekpedefsiedu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'ekpedefsi'])->id,
            'address' => 'Γρηγορίου Λαμπράκη 147, Τούμπα',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310912282,
            'type_id' => 3,
            'website' => 'ekpedefsiedu.gr',
            'approved' => 1,
            'about' => '
            Αγαπητοί γονείς, φίλοι μαθητές
Ιδρύοντας τα Φροντιστήρια Εκπαίδευση προσπαθήσαμε να ανταποκριθούμε επάξια στις απαιτήσεις και τις ανάγκες της σύγχρονης εκπαίδευσης. Η εικοσιπενταετής πείρα μας στο χώρο των φροντιστηρίων, η επιστημονική πληρότητα, η μεθοδικότητα στον τρόπο εργασίας, η μεταδοτικότητα και η παιδαγωγική επάρκεια των συνεργατών μας καθώς επίσης και η ανθρώπινη καθημερινή επαφή των στελεχών μας με γονείς και μαθητές, έχουν δημιουργήσει μια μακροχρόνια παράδοση επιτυχιών και εγγυώνται για τη σωστή επιλογή σας. Τα φροντιστήρια Εκπαίδευση εδρεύουν σε τρεις συνοικίες της Θεσσαλονίκης (Τούμπα, Αμπελόκηποι, Νεάπολη) με στόχο να προσφέρουν υψηλού φροντιστηριακού επιπέδου εκπαίδευση στους μαθητές δίπλα στο σπίτι τους.
Βασικό μας μέλημα είναι η καθοδήγηση, η στήριξη των παιδιών και η ενθάρρυνσή τους ώστε να τερματίσουν με επιτυχία το δύσκολο δρόμο που καταλήγει στις πανελλαδικές εξετάσεις.
Οι επιτυχίες των μαθητών μας καθιστούν την «ΕΚΠΑΙΔΕΥΣΗ» ένα από τα κορυφαία φροντιστήρια της Θεσσαλονίκης. Αυτό επιτυγχάνεται με τη χρήση σύγχρονων διδακτικών μέσων, το υψηλό επίπεδο διδασκαλίας, τη συνέπεια λόγων και έργων και την άρτια οργάνωση των φροντιστηρίων. Επιβράβευσή μας είναι να παρακολουθούμε τους παλιούς μαθητές μας να διαπρέπουν στον τομέα που ο καθένας έχει διαλέξει.
Εκ μέρους όλων των συνεργατών μας, θέλουμε να σας ευχαριστήσουμε για την εμπιστοσύνη που μας δείξατε όλα αυτά τα χρόνια και την παρουσία σας στην κοινή μας πορεία, με ποιότητα στην εκπαίδευση των νέων ανθρώπων, που κρατούν στα χέρια τους το μέλλον του τόπου.

Με εκτίμηση
Η Διεύθυνση των φροντιστηρίων
            ',
            'background' => $background,
        ]);

        new Portal($ekpd, 5, 'school');

        Scholio::portalStudy($ekpd, 'Γυμνάσιο', 'Γυμνάσιο', 'Ά Γυμνασίου');
        Scholio::portalStudy($ekpd, 'Γυμνάσιο', 'Γυμνάσιο', '΄Β Γυμνασίου');
        Scholio::portalStudy($ekpd, 'Γυμνάσιο', 'Γυμνάσιο', '΄Γ Γυμνασίου');
        Scholio::portalStudy($ekpd, 'Α΄ Λυκείου', 'Γενική Παιδεία', 'Α΄ Λυκείου');
        Scholio::portalStudy($ekpd, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($ekpd, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($ekpd, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($ekpd, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($ekpd, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Οικονομικών Σπουδών & Πληροφορικής');


        Scholio::portalSocial($ekpd, 'facebook', 'https://www.facebook.com/frontistiria.ekpedefsi');
        Scholio::portalSocial($ekpd, 'instagram', 'https://www.instagram.com/frontistiria_ekpedefsi/');
        Scholio::portalSocial($ekpd, 'twitter', 'https://twitter.com/ekpaidefsi');

        /*===============  ================*/


        $fake = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310,
            'type_id' => 3,
            'website' => '',
            'approved' => 1,
            'about' => '

            ',
            'background' => $background,
        ]);

        new Portal($fake, 5, 'school');

        Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'Ά Γυμνασίου');
        Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', '΄Β Γυμνασίου');
        Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', '΄Γ Γυμνασίου');
        Scholio::portalStudy($fake, 'Α΄ Λυκείου', 'Γενική Παιδεία', 'Α΄ Λυκείου');
        Scholio::portalStudy($fake, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($fake, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Οικονομικών Σπουδών & Πληροφορικής');


//        Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/');
//        Scholio::portalSocial($fake, 'instagram', 'https://www.instagram.com/');
//        Scholio::portalSocial($fake, 'youtube', 'https://www.youtube.com/');




    }

}
