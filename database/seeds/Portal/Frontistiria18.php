<?php

use App\Scholio\Scholio;
use Illuminate\Database\Seeder;
use Portal\Portal;

class Frontistiria18 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $background = Portal::createImages('/upload/school/univ.png')->id;




     /*=============== 1 Θεώρημα, Μενεμένη ================*/

     $fake = factory(App\Models\School::class)->create([
         'user_id' => factory(App\User::class)->create(['name' => 'Φροντιστήρια Θεώρημα, Μενεμένη', 'email' => 'info@theorima.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'theorimaMenemeni'])->id,
         'address' => 'Αγίας Παρασκευής 32, Μενεμένη',
         'region' => 'Μενεμένη',
         'city' => 'Θεσσαλονίκη',
         'phone' => 2311212666,
         'type_id' => 3,
         'website' => 'theorima.edu.gr',
         'approved' => 1,
         'about' => '
            Yστερα από 6 χρόνια παρουσίας και επιτυχίας στο χώρο της εκπαίδευσης, με το φροντιστήριο στη Μενεμένη και με το νέο φροντιστήριο στον Εύοσμο, κάνουμε ένα άλμα και στην διαδικτυακή μάθηση… Οι τάχιστοι ρυθμοί της τεχνολογίας και η άριστη σχέση των παιδιών με ο,τιδήποτε την αφορά, μας ωθεί να συμφιλιωθούμε με τα νέα δεδομένα και να πρωτοπορήσουμε.
            Τα φροντιστήριά μας ανοίγουν τις πύλες τους και στην διαδικτυακή μάθηση. Το ηλεκτρονικό φροντιστήριο «ΘΕΩΡΗΜΑ» δεν υστερεί σε τίποτα από τη φροντιστηριακή αίθουσα, πόσο μάλλον από τις επιτυχίες ενός κανονικού φροντιστηρίου.
            Ο κάθε μαθητής μπορεί να συμμετέχει στα ηλεκτρονικά μαθήματα, απλά παρακολουθώντας τα από τον υπολογιστή του σπιτιού του, κερδίζοντας πολύτιμο χρόνο από το διάβασμά του. Η ποιότητα των μαθημάτων και η ειδική πλατφόρμα online διδασκαλίας είναι ασυναγώνιστες και φέρνουν το φροντιστήριο… σπίτι σου!!!
                    Το φροντιστήριο μας ξεπερνά τα στερεοτυπικά πλαίσια της παραδοσιακής διδασκαλίας με τον καθηγητή να βρίσκεται στο επίκεντρο της μαθησιακής διαδικασίας κι εστιάζει στον άνθρωπο – μαθητή.
                    Ακολουθούμε μια διαδικασία που «χτίζει» και «χτίζεται» πάνω σε κάθε προσωπικότητα ξεχωριστά. Αποδεχόμαστε όλα τα παιδιά, ανεξαρτήτως ιδιαιτεροτήτων, τα προσεγγίζουμε και μέσα από αυτή τη γνωριμία μαθαίνουμε τα ενδιαφέροντά τους. Έτσι, πέρα από το ευχάριστο περιβάλλον που δημιουργείται, προσαρμόζουμε τους εκπαιδευτικούς μας στόχους στα ενδιαφέροντα και στις απαιτήσεις του κάθε μαθητή ξεχωριστά.
            ',
         'background' => $background,
     ]);

     new Portal($fake, 5, 'frontistirio', 20);

     Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'Α΄ Γυμνασίου','https://theorima.edu.gr/%CF%80%CF%81%CF%8C%CE%B3%CF%81%CE%B1%CE%BC%CE%BC%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CE%B3%CF%85%CE%BC%CE%BD%CE%AC%CF%83%CE%B9%CE%BF/');
     Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'B΄ Γυμνασίου','https://theorima.edu.gr/%CF%80%CF%81%CF%8C%CE%B3%CF%81%CE%B1%CE%BC%CE%BC%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CE%B3%CF%85%CE%BC%CE%BD%CE%AC%CF%83%CE%B9%CE%BF/');
     Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'Γ΄ Γυμνασίου','https://theorima.edu.gr/%CF%80%CF%81%CF%8C%CE%B3%CF%81%CE%B1%CE%BC%CE%BC%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CE%B3%CF%85%CE%BC%CE%BD%CE%AC%CF%83%CE%B9%CE%BF/');
     Scholio::portalStudy($fake, 'Α΄ Λυκείου', 'Γενική Παιδεία', 'Α΄ Λυκείου','https://theorima.edu.gr/%CF%80%CF%81%CF%8C%CE%B3%CF%81%CE%B1%CE%BC%CE%BC%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CE%B1-%CE%BB%CF%85%CE%BA%CE%B5%CE%AF%CE%BF%CF%85/');
     Scholio::portalStudy($fake, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών','https://theorima.edu.gr/%CF%80%CF%81%CF%8C%CE%B3%CF%81%CE%B1%CE%BC%CE%BC%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CE%B2-%CE%BB%CF%85%CE%BA%CE%B5%CE%AF%CE%BF%CF%85/');
     Scholio::portalStudy($fake, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών','https://theorima.edu.gr/%CF%80%CF%81%CF%8C%CE%B3%CF%81%CE%B1%CE%BC%CE%BC%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CE%B2-%CE%BB%CF%85%CE%BA%CE%B5%CE%AF%CE%BF%CF%85/');
     Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών','https://theorima.edu.gr/%CF%80%CF%81%CF%8C%CE%B3%CF%81%CE%B1%CE%BC%CE%BC%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CE%B3-%CE%BB%CF%85%CE%BA%CE%B5%CE%AF%CE%BF%CF%85/');
     Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών','https://theorima.edu.gr/%CF%80%CF%81%CF%8C%CE%B3%CF%81%CE%B1%CE%BC%CE%BC%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CE%B3-%CE%BB%CF%85%CE%BA%CE%B5%CE%AF%CE%BF%CF%85/');
     Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Οικονομικών Σπουδών & Πληροφορικής','https://theorima.edu.gr/%CF%80%CF%81%CF%8C%CE%B3%CF%81%CE%B1%CE%BC%CE%BC%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CE%B3-%CE%BB%CF%85%CE%BA%CE%B5%CE%AF%CE%BF%CF%85/');

     Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/theorimafrontistiria/');



        /*=============== 2 Φροντιστήρια Κρόνος ================*/

        $fake = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Φροντιστήρια Κρόνος', 'email' => 'info@frontistiriakronos.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'kronos'])->id,
            'address' => 'Εγνατίας 45, Θεσσαλονίκη',
            'region' => 'Κέντρο',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310521241,
            'type_id' => 3,
            'website' => 'frontistiriakronos.gr',
            'approved' => 1,
            'about' => '
                Αγαπητοί Μαθητές, Η μακρόχρονη ιστορία-λειτουργία των φροντιστηρίων “Κρόνος” μας έχει δώσει την απαιτούμενη εμπειρία και μας καθιέρωσε στην πρώτη θέση της προπαρασκευαστικής εκπαίδευσης. Με τη βοήθεια 30 έμπειρων και εκλεκτών συνεργατών, οι οποίοι με σύγχρονες μεθόδους διδασκαλίας και αφοσίωση στο εκπαιδευτικό τους λειτούργημα εξασφαλίζουν ένα υψηλό επίπεδο γνώσεων. Αποκτήστε τη γνώση μέσα σ\' ένα υπεύθυνο και φιλικό περιβάλλον. Με τις βασικές αυτές προϋποθέσεις η επιτυχία είναι εξασφαλισμένη και σίγουρη Κατακτήστε λοιπόν τους στόχους σας, νιώθοντας σιγουριά για το μέλλον με τη συμπαράσταση ενός υπεύθυνου και σοβαρού φροντιστηριακού οργανισμού που αναλύει τα νέα δεδομένα και ανταποκρίνεται με συνέπεια στις ανάγκες του κάθε υποψηφίου. Φιλικά Η Διεύθυνση
            ',
            'background' => $background,
        ]);

        new Portal($fake, 5, 'frontistirio', 20);

        Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'Α΄ Γυμνασίου');
        Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'B΄ Γυμνασίου');
        Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'Γ΄ Γυμνασίου');
        Scholio::portalStudy($fake, 'Α΄ Λυκείου', 'Γενική Παιδεία', 'Α΄ Λυκείου');
        Scholio::portalStudy($fake, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($fake, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Οικονομικών Σπουδών & Πληροφορικής');

//     Scholio::portalSocial($fake, 'facebook', '');




     /*=============== 3 Κύκλος, Τούμπα ================*/

     $fake = factory(App\Models\School::class)->create([
         'user_id' => factory(App\User::class)->create(['name' => 'Φροντιστήρια Κύκλος, Τούμπα', 'email' => 'kyklos.lessons@gmail.com', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'kyklos'])->id,
         'address' => 'Απόλλωνος 9, Τούμπα',
         'region' => 'Κάτω Τούμπα',
         'city' => 'Θεσσαλονίκη',
         'phone' => 2314000059,
         'type_id' => 3,
         'website' => 'https://www.facebook.com/frontisthrio.Kyklos/',
         'approved' => 1,
         'about' => '
            Μπες στον κύκλο
            βρες τη σωστή χημεία 
            εξερεύνησε τη γνώση
            δημιούργησε ως το άπειρο
            γράψε τη δική σου ιστορία
            2314000059,6974926005
            kyklos.lessons@gmail.com
            ',
         'background' => $background,
     ]);

     new Portal($fake, 5, 'frontistirio', 20);

     Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'Α΄ Γυμνασίου');
     Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'B΄ Γυμνασίου');
     Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'Γ΄ Γυμνασίου');
     Scholio::portalStudy($fake, 'Α΄ Λυκείου', 'Γενική Παιδεία', 'Α΄ Λυκείου');
     Scholio::portalStudy($fake, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
     Scholio::portalStudy($fake, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
     Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
     Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
     Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Οικονομικών Σπουδών & Πληροφορικής');

    Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/frontisthrio.Kyklos/');



        /*=============== 4 Κύτταρο, Ανάληψη ================*/

        $fake = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Φροντιστήριο Κύτταρο, Ανάληψη', 'email' => 'info@kyttaro-edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'kyttaro-analipsi'])->id,
            'address' => 'Βασ. Όλγας 132, Ανάληψη',
            'region' => 'Ανάληψη',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310,
            'type_id' => 3,
            'website' => 'kyttaro-edu.gr',
            'approved' => 1,
            'about' => '
                Eδώ και 30 χρόνια βάζουμε σε προτεραιότητα τους μαθητές μας. Τους δίνουμε την κατάλληλη ώθηση και τους παρακολουθούμε να ωριμάζουν και να επιτυγχάνουν. Γίνετε και εσείς μέρος των Φροντιστηρίων μας και δείτε στον εαυτό σας τις ατελείωτες δυνατότητες που βλέπουμε και εμείς.
                Αγαπάμε τη μάθηση, αγαπάμε τους μαθητές μας, αγαπάμε αυτό που κάνουμε.
            ',
            'background' => $background,
        ]);

        new Portal($fake, 5, 'frontistirio', 50);

        Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'Α΄ Γυμνασίου');
        Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'B΄ Γυμνασίου');
        Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'Γ΄ Γυμνασίου');
        Scholio::portalStudy($fake, 'Α΄ Λυκείου', 'Γενική Παιδεία', 'Α΄ Λυκείου');
        Scholio::portalStudy($fake, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($fake, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Οικονομικών Σπουδών & Πληροφορικής');

     Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/kyttarofrontistirio/');




        /*=============== 5 Μαυρομιχάλη, Πλαγιάρι ================*/

        $fake = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Φροντιστήρια Μαυρομιχάλη, Πλαγιάρι', 'email' => 'frontistiria.mauromixali@gmail.com', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'mavromihalis-plagiari'])->id,
            'address' => 'Μιαούλη 49, Πλαγιάρι',
            'region' => 'Πλαγιάρι',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2392063220,
            'type_id' => 3,
            'website' => 'mavromihalis.gr',
            'approved' => 1,
            'about' => '

            ',
            'background' => $background,
        ]);

        new Portal($fake, 5, 'frontistirio', 18);

        Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'Α΄ Γυμνασίου');
        Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'B΄ Γυμνασίου');
        Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'Γ΄ Γυμνασίου');
        Scholio::portalStudy($fake, 'Α΄ Λυκείου', 'Γενική Παιδεία', 'Α΄ Λυκείου');
        Scholio::portalStudy($fake, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($fake, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Οικονομικών Σπουδών & Πληροφορικής');

     Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/frontistiria.mavromixali');




        /*=============== 6 ================*/

        $fake = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'region' => '',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310,
            'type_id' => 3,
            'website' => '',
            'approved' => 1,
            'about' => '

            ',
            'background' => $background,
        ]);

        new Portal($fake, 5, 'frontistirio', 50);

        Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'Α΄ Γυμνασίου');
        Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'B΄ Γυμνασίου');
        Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'Γ΄ Γυμνασίου');
        Scholio::portalStudy($fake, 'Α΄ Λυκείου', 'Γενική Παιδεία', 'Α΄ Λυκείου');
        Scholio::portalStudy($fake, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($fake, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Οικονομικών Σπουδών & Πληροφορικής');

//     Scholio::portalSocial($fake, 'facebook', '');


        /*=============== 7 ================*/

        $fake = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'region' => '',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310,
            'type_id' => 3,
            'website' => '',
            'approved' => 1,
            'about' => '

            ',
            'background' => $background,
        ]);

        new Portal($fake, 5, 'frontistirio', 50);

        Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'Α΄ Γυμνασίου');
        Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'B΄ Γυμνασίου');
        Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'Γ΄ Γυμνασίου');
        Scholio::portalStudy($fake, 'Α΄ Λυκείου', 'Γενική Παιδεία', 'Α΄ Λυκείου');
        Scholio::portalStudy($fake, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($fake, 'B΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Θετικών Σπουδών');
        Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Ανθρωπιστικών Σπουδών');
        Scholio::portalStudy($fake, 'Γ΄ Λυκείου', 'Ομάδα Προσανατολισμού', 'Οικονομικών Σπουδών & Πληροφορικής');

//     Scholio::portalSocial($fake, 'facebook', '');





        /*=============== xx  ================*/

//     $fake = factory(App\Models\School::class)->create([
//         'user_id' => factory(App\User::class)->create(['name' => 'Ξένες Γλώσσες', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
//         'address' => '',
//         'region' => '',
//         'city' => 'Αθήνα',
//         'phone' => 210,
//         'type_id' => 4,
//         'website' => '',
//         'approved' => 1,
//         'about' => '
//
//            ',
//         'background' => $background,
//     ]);
//
//     new Portal($fake, 5, 'frontistirio',50);
//
//     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Αγγλικά');
//     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γαλλικά');
//     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γερμανικά');
//     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ισπανικά');
//     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ιταλικά');
//     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ρωσικά');
//     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Τούρκικα');
//
//
//     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Αγγλικά');
//     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γαλλικά');
//     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γερμανικά');
//     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ισπανικά');
//     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ιταλικά');
//     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ρωσικά');
//     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Τούρκικα');
//
//     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'IELTS');
//     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'TOEFL');
//     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'TOEIC');
//     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'GMAT');
//
//
//     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Εκπαιδευτική Ρομποτική', 'Προγραμματισμός με ρομπότ');
//     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Εκπαιδευτική Ρομποτική', 'LEGO Education');
//
//     Scholio::portalStudy($fake, 'Τμήματα Εφήβων - Ενηλίκων', 'Πληροφορική', 'Πιστοποίηση');

//       Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/');
//       Scholio::portalSocial($fake, 'instagram', 'https://www.instagram.com/');
//       Scholio::portalSocial($fake, 'youtube', 'https://www.youtube.com/');


    }



}
