<?php

use App\Scholio\Scholio;
use Illuminate\Database\Seeder;
use Portal\Portal;

class IEK2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $background = Portal::createImages('/upload/school/univ.png')->id;

        /*===============  Λυδια ================*/
        $school1 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Ι.Ε.Κ ΛΥΔΙΑ', 'email' => 'info@ieklidia.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'ieklidia'])->id,
            'address' => 'Ειρήνης 37 κ Θεσσαλονίκης Γωνία',
            'city' => 'Κατερίνη',
            'region'=> 'Κέντρο',
            'phone' => 2351303876,
            'type_id' => 2,
            'website' => 'ieklidia.gr',
            'about' => 'Το ΙΕΚ Λυδία είναι το πρώτο πιστοποιημένο ιδιωτικό ΙΕΚ που συστάθηκε στον νομό Πιερίας. Αποστολή μας είναι να παρέχουμε ολοκληρωμένες υπηρεσίες και ουσιαστική κατάρτιση στους σπουδαστές μας, με συνέπεια και επαγγελματισμό, προκειμένου να αποκτήσουν ολοκληρωμένη βιωματική γνώση. Βασικός μας στόχος είναι να αναβαθμίσουμε την ιδιωτική εκπαίδευση, με την δημιουργία νέων ειδικοτήτων υψηλής απορρόφησης και με πλήρη αξιοπιστία για την κατοχύρωση των απαραίτητων δεξιοτήτων στις νέες γενιές και την άμεση επαγγελματική τους αποκατάσταση, υποστηρίζοντας όλε επαγγελματικές φιλοδοξίες των σπουδαστών μας. Επιλέγουμε καταρτισμένους και καταξιωμένους συνεργάτες, για την άριστη λειτουργία του οργανισ παρέχοντας εκπαίδευση υψηλής ποιότητας. Η πρακτική άσκηση και η συνεργασία με επιτυχημένους επαγγελματίες διαφόρων κλάδων δημιουρY ουσιαστικές γέφυρες με την αγορά εργασίας. Το ΙΕΚ ΛΥΔΙΑ λειτουργεί σύμφωνα με τις διατάξεις του Υπουργείου Παιδείας και με άδεια ίδρυσης το αρμόδιου φορέα Εθνικού Οργανισμού Πιστοποίησης Προσόντων & Επαγγελματικού Προσανατολισμού. Η επιτυχής ολοκλήρωση των σπουδών στο ΙΕΚ ΛΥΔΙΑ οδηγεί στην απόκτηση Βεβαίωσης Επαγγελμαι Κατάρτισης (Β.Ε.Κ.), που επικυρώνεται από το Υπουργείο Παιδείας, μέσω του Εθνικού Οργανισμού Πιστοποίησης Προσόντων & Επαγγελματικού Προσανατολισμού (Ε.Ο.Π.Π.Ε.Π.) Οι απόφοιτοι αποκτούν Κρατικό Δίπλωμα Επαγγελματικής Κατάρτισης μετά από εξετάσεις πιστοποίη του Ε.Ο.Π.Π.Ε.Π.-- ',
            'approved' => 1,
            'background' => $background,
        ]);

        new Portal($school1, 5, 'iek');

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Τεχνικός Τουριστικών  Μονάδων & Επιχειρήσεων Φιλοξενίας', 'http://www.ieklidia.gr/texnikos-touristikon-monadon/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Τεχνικός Αρτοποιίας – Ζαχαροπλαστικής', 'http://www.ieklidia.gr/texnikos-artopoios-zaxaroplastikis/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Τεχνικός Μαγειρικής Τέχνης – Αρχιμάγειρας (CHEF)', 'http://www.ieklidia.gr/chef/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Τουριστικοί Συνοδοί', 'http://www.ieklidia.gr/tourist-2/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Θρησκευτικού Τουρισμού και Πποσκυνηματικών Περιηγήσεων', 'http://www.ieklidia.gr/religion-tourist/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Συνοδοί Βουνού', 'http://www.ieklidia.gr/sinodos-vounou/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', 'Τεχνικός Η/Υ', 'http://www.ieklidia.gr/it/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', 'Τεχνικός Λογισμικού Η/Υ', 'http://www.ieklidia.gr/it-software/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', 'Τεχνικός Εφαρμογών Πληροφορικής (Πολυμέσα/Web Designer-Developer/Video games)', 'http://www.ieklidia.gr/it-web/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', 'Τεχνικός Δικτύων και Τηλεπικοινωνιών', 'http://www.ieklidia.gr/it-support/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', 'Σχεδιαστής Μόδας', 'http://www.ieklidia.gr/fashionn/');
        
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', '', '');
        
        
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Παιδαγωγικά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ηχοληψία & Μουσική Τεχνολογία', '', '');
        
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', '', '');

        Scholio::portalSocial($school1, 'facebook', 'https://www.facebook.com/pg/ieklidia/photos/?ref=page_internal');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', '');
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'google', '');
        Scholio::portalSocial($school1, 'blogger', '');

        /*===============  Λυδια ================*/
        $school1 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'city' => '',
            'phone' => 0,
            'type_id' => 2,
            'website' => '',
            'about' => '',
            'approved' => 1,
            'background' => $background,
        ]);

        new Portal($school1, 5, 'iek');

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Παιδαγωγικά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ηχοληψία & Μουσική Τεχνολογία', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', '');
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'google', '');
        Scholio::portalSocial($school1, 'blogger', '');

        /*===============  Λυδια ================*/
        $school1 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'city' => '',
            'phone' => 0,
            'type_id' => 2,
            'website' => '',
            'about' => '',
            'approved' => 1,
            'background' => $background,
        ]);

        new Portal($school1, 5, 'iek');

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Παιδαγωγικά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ηχοληψία & Μουσική Τεχνολογία', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', '');
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'google', '');
        Scholio::portalSocial($school1, 'blogger', '');

        /*===============  Λυδια ================*/
        $school1 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'city' => '',
            'phone' => 0,
            'type_id' => 2,
            'website' => '',
            'about' => '',
            'approved' => 1,
            'background' => $background,
        ]);

        new Portal($school1, 5, 'iek');

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Παιδαγωγικά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ηχοληψία & Μουσική Τεχνολογία', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', '');
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'google', '');
        Scholio::portalSocial($school1, 'blogger', '');

        /*===============  Λυδια ================*/
        $school1 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'city' => '',
            'phone' => 0,
            'type_id' => 2,
            'website' => '',
            'about' => '',
            'approved' => 1,
            'background' => $background,
        ]);

        new Portal($school1, 5, 'iek');

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Παιδαγωγικά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ηχοληψία & Μουσική Τεχνολογία', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', '');
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'google', '');
        Scholio::portalSocial($school1, 'blogger', '');

        /*===============  Λυδια ================*/
        $school1 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'city' => '',
            'phone' => 0,
            'type_id' => 2,
            'website' => '',
            'about' => '',
            'approved' => 1,
            'background' => $background,
        ]);

        new Portal($school1, 5, 'iek');

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Παιδαγωγικά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ηχοληψία & Μουσική Τεχνολογία', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', '');
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'google', '');
        Scholio::portalSocial($school1, 'blogger', '');

        /*===============  Λυδια ================*/
        $school1 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'city' => '',
            'phone' => 0,
            'type_id' => 2,
            'website' => '',
            'about' => '',
            'approved' => 1,
            'background' => $background,
        ]);

        new Portal($school1, 5, 'iek');

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Παιδαγωγικά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ηχοληψία & Μουσική Τεχνολογία', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', '');
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'google', '');
        Scholio::portalSocial($school1, 'blogger', '');

        /*===============  Λυδια ================*/
        $school1 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'city' => '',
            'phone' => 0,
            'type_id' => 2,
            'website' => '',
            'about' => '',
            'approved' => 1,
            'background' => $background,
        ]);

        new Portal($school1, 5, 'iek');

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Παιδαγωγικά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ηχοληψία & Μουσική Τεχνολογία', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', '');
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'google', '');
        Scholio::portalSocial($school1, 'blogger', '');

        /*===============  Λυδια ================*/
        $school1 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'city' => '',
            'phone' => 0,
            'type_id' => 2,
            'website' => '',
            'about' => '',
            'approved' => 1,
            'background' => $background,
        ]);

        new Portal($school1, 5, 'iek');

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Παιδαγωγικά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ηχοληψία & Μουσική Τεχνολογία', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', '');
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'google', '');
        Scholio::portalSocial($school1, 'blogger', '');

        /*===============  Λυδια ================*/
        $school1 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'city' => '',
            'phone' => 0,
            'type_id' => 2,
            'website' => '',
            'about' => '',
            'approved' => 1,
            'background' => $background,
        ]);

        new Portal($school1, 5, 'iek');

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Παιδαγωγικά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ηχοληψία & Μουσική Τεχνολογία', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', '');
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'google', '');
        Scholio::portalSocial($school1, 'blogger', '');

        /*===============  Λυδια ================*/
        $school1 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'city' => '',
            'phone' => 0,
            'type_id' => 2,
            'website' => '',
            'about' => '',
            'approved' => 1,
            'background' => $background,
        ]);

        new Portal($school1, 5, 'iek');

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Παιδαγωγικά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ηχοληψία & Μουσική Τεχνολογία', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', '');
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'google', '');
        Scholio::portalSocial($school1, 'blogger', '');

        /*===============  Λυδια ================*/
        $school1 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'city' => '',
            'phone' => 0,
            'type_id' => 2,
            'website' => '',
            'about' => '',
            'approved' => 1,
            'background' => $background,
        ]);

        new Portal($school1, 5, 'iek');

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Παιδαγωγικά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ηχοληψία & Μουσική Τεχνολογία', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', '');
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'google', '');
        Scholio::portalSocial($school1, 'blogger', '');

        /*===============  Λυδια ================*/
        $school1 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'city' => '',
            'phone' => 0,
            'type_id' => 2,
            'website' => '',
            'about' => '',
            'approved' => 1,
            'background' => $background,
        ]);

        new Portal($school1, 5, 'iek');

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Παιδαγωγικά', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ηχοληψία & Μουσική Τεχνολογία', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', '');
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'google', '');
        Scholio::portalSocial($school1, 'blogger', '');

    }
}
