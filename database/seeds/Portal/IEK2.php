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
            'region' => 'Κέντρο',
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
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Χημικές Εφαρμογές', 'Τεχνικός Χημικών Εργαστηρίων και Ποιοτικού Ελέγχου Υλικών', 'http://www.ieklidia.gr/lab/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Χημικές Εφαρμογές', 'Τεχνικός Φαρμάκων – Καλλυντικών και παρεμφερών προϊόντων', 'http://www.ieklidia.gr/medical/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μηχανολογία', 'Τεχνικός Εγκαταστάσεων Ψύξης Αερισμού και Κλιματισμού', 'http://www.ieklidia.gr/installer/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μηχανολογία', 'Τεχνικός Μηχανοτρονικής', 'http://www.ieklidia.gr/mixanotroniki/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μηχανολογία', 'Τεχνικός Μηχανικός Θερμικών Εγκαταστάσεων και Μηχανικός Τεχνολογίας Πετρελαίου και Φυσικού Αερίου', 'http://www.ieklidia.gr/fisikoaerio/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ηλεκτρολογία & Αυτοματισμοί', 'Τεχνικός Εσωτερικών Ηλεκτρικών Εγκαταστάσεων', 'http://www.ieklidia.gr/technicalall/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ηλεκτρολογία & Αυτοματισμοί', 'Τεχνικός Αυτοματισμών', 'http://www.ieklidia.gr/technical-auto/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ηλεκτρολογία & Αυτοματισμοί', 'Τεχνικός Ιατρικών Οργάνων', 'http://www.ieklidia.gr/technical-med/');

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Διατροφής & Διαιτολογίας', 'Στέλεχος Διατροφής και Διαιτολογίας', 'http://www.ieklidia.gr/diet/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Διατροφής & Διαιτολογίας', 'Υπεύθυνος Μονάδας Συστηματοποιημένου Επισιτισμού (Catering)', 'http://www.ieklidia.gr/catering/');

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνολογίας Τροφίμων και Ποτών', 'Στέλεχος Τεχνολογίας και Ελέγχου Τροφίμων και Ποτών', 'http://www.ieklidia.gr/food_te/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνολογίας Τροφίμων και Ποτών', 'Τεχνικός Γαλακτοκομίας – Τυροκόμος', 'http://www.ieklidia.gr/tirokomoi/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνολογίας Τροφίμων και Ποτών', 'Τεχνικός Αμπελουργίας-Οινολογίας', 'http://www.ieklidia.gr/oinologoi/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνολογίας Τροφίμων και Ποτών', 'Στέλεχος επιχειρήσεων τυποποίησης, μεταποίησης και εμπορίας αγροτικών προϊόντων', 'http://www.ieklidia.gr/agrologistics/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνολογίας Τροφίμων και Ποτών', 'Τεχνικός Ποτοποιίας-Αποσταγματοποιίας', 'http://www.ieklidia.gr/potopoias/');

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Φυσικοθεραπευτή', 'http://www.ieklidia.gr/physiotherapy/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Φαρμακείου', 'http://www.ieklidia.gr/pharmacy/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Μαιευτικής', 'http://www.ieklidia.gr/%CE%B2%CE%BF%CE%B7%CE%B8%CE%BF%CE%B9-%CE%BC%CE%B1%CE%B9%CE%B5%CF%85%CF%84%CE%B9%CE%BA%CE%B7%CF%83/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθος Εργοθεραπείας', 'http://www.ieklidia.gr/%CE%B2%CE%BF%CE%B7%CE%B8%CE%BFi-%CE%B5%CF%81%CE%B3%CE%BF%CE%B8%CE%B5%CF%81%CE%B1%CF%80%CE%B5%CE%B9%CE%B1%CF%83/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Ιατρικών Εργαστηρίων', 'http://www.ieklidia.gr/%CE%B2%CE%BF%CE%B7%CE%B8%CE%BF%CE%B9-%CE%B9%CE%B1%CF%84%CF%81%CE%B9%CE%BA%CF%89%CE%BD-%CE%B5%CF%81%CE%B3%CE%B1%CF%83%CF%84%CE%B7%CF%81%CE%B9%CF%89%CE%BD/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Βρεφονηπιοκομίας', 'http://www.ieklidia.gr/%CE%B2%CE%BF%CE%B7%CE%B8%CE%BF%CE%B9-%CE%B2%CF%81%CE%B5%CF%86%CE%BF%CE%BD%CE%B7%CF%80%CE%B9%CE%BF%CE%BA%CE%BF%CE%BC%CF%89%CE%BD/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Νοσηλευτής Γενικής Νοσηλείας', 'http://www.ieklidia.gr/%CE%B2%CE%BF%CE%B7%CE%B8%CE%BF%CE%B9-%CE%BD%CE%BF%CF%83%CE%B7%CE%BB%CE%B5%CF%85%CF%84%CE%B9%CE%BA%CE%B7%CF%83/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Νοσηλευτικής Χειρουργείου', 'http://www.ieklidia.gr/%CE%B2%CE%BF%CE%B7%CE%B8%CE%BF%CE%B9-%CE%BD%CE%BF%CF%83%CE%B7%CE%BB%CE%B5%CF%85%CF%84%CE%B9%CE%BA%CE%B7%CF%83-2/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Οδοντικής Τεχνολογίας', 'http://www.ieklidia.gr/dential/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Διασώστης – Πλήρωμα Ασθενοφόρου', 'http://www.ieklidia.gr/%CE%B4%CE%B9%CE%B1%CF%83%CF%89%CF%83%CF%84%CE%B5%CF%83/');

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διοίκησης και Οικονομίας', 'http://www.ieklidia.gr/admin/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διοίκησης και Οικονομίας στον Τομέα της Ναυτιλίας', 'http://www.ieklidia.gr/nautical/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διοίκησης και Οικονομίας στον Τομέα του Τουρισμού', 'http://www.ieklidia.gr/touristadmin/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διοίκησης και Οικονομίας στον τομέα της Υγείας', 'http://www.ieklidia.gr/medical-health/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Χρηματοοικονομικών και Ασφαλιστικών Εργασιών', 'http://www.ieklidia.gr/financial/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Μηχανογραφημένου Λογιστηρίου-Φοροτεχνικού Γραφείου', 'http://www.ieklidia.gr/%CF%86%CE%BF%CF%81%CE%BF%CF%84%CE%B5%CF%87%CE%BD%CE%B9%CE%BA%CE%BF%CE%B9/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Υηρεσιών Εφοδιαστικής Αλυσίδας (Logistics)', 'http://www.ieklidia.gr/logistics/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Εμπορίας Διαφήμισης και Προώθησης Προϊόντων (Marketing)', 'http://www.ieklidia.gr/marketing/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Κοστολόγησης', 'http://www.ieklidia.gr/cost/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Γραμματέας Ανώτερων και Ανώτατων Στελεχών', 'http://www.ieklidia.gr/secretary/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διεθνούς Εμπορίου', 'http://www.ieklidia.gr/trade/');

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Γεωπονία', 'Στέλεχος Διοίκησης και Οικονομίας στον Τομέα της Αγροτικής Οικονομίας', 'http://www.ieklidia.gr/agro-management/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Γεωπονία', 'Τεχνικός Βιολογικής/Οργανικής Γεωργίας', 'http://www.ieklidia.gr/bio/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Γεωπονία', 'Τεχνικός Θερμοκηπίων και Καλλιεργειών υπό Κάλυψη', 'http://www.ieklidia.gr/thermokipio/');

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', 'Δημοσιογραφίας, Συντακτών και Ρεπόρτερ', 'http://www.ieklidia.gr/reporter/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', 'Αθλητική Δημοσιογραφία', 'http://www.ieklidia.gr/athlreporter/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', 'Ραδιοφωνικός Παραγωγός', 'http://www.ieklidia.gr/%CF%81%CE%B1%CE%B4%CE%B9%CE%BF%CF%86%CF%89%CE%BD%CE%B9%CE%BA%CE%BF%CE%B9-%CF%80%CE%B1%CF%81%CE%B1%CE%B3%CF%89%CE%B3%CE%BF%CE%B9-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CE%B1%CF%83%CE%B5-%CF%83%CF%84%CE%BF/');

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Τέχνη Φωτογραφίας', 'http://www.ieklidia.gr/%CF%86%CF%89%CF%84%CE%BF%CE%B3%CF%81%CE%B1%CF%86%CE%BF%CE%B9/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Εσωτερική αρχιτεκτονική, διακόσμηση και Σχεδιασμός Αντικειμένων', 'http://www.ieklidia.gr/%CE%B4%CE%B9%CE%B1%CE%BA%CE%BF%CF%83%CE%BC%CE%B7%CF%84%CE%B5%CF%83/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Μουσικοί Τεχνολόγοι', 'http://www.ieklidia.gr/%CE%BC%CE%BF%CF%85%CF%83%CE%B9%CE%BA%CE%BF%CE%B9-%CF%84%CE%B5%CF%87%CE%BD%CE%BF%CE%BB%CE%BF%CE%B3%CE%BF%CE%B9/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Ηχολήπτες', 'http://www.ieklidia.gr/%CE%B7%CF%87%CE%BF%CE%BB%CE%B7%CF%80%CF%84%CE%B5%CF%83/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Τεχνικός Συντήρησης Έργων Τέχνης & Αρχαιοτήτων', 'http://www.ieklidia.gr/%CF%83%CF%85%CE%BD%CF%84%CE%B7%CF%81%CE%B7%CF%84%CE%B5%CF%83-%CE%B5%CF%81%CE%B3%CF%89%CE%BD-%CF%84%CE%B5%CF%87%CE%BD%CE%B7%CF%83/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Τεχνικός Κινούμενης Εικόνας Ηλεκτρονικής Σχεδίασης Γραφήματος', 'http://www.ieklidia.gr/3d-animation/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Λογοτεχνική Μετάφραση, Διόρθωση και Επιμέλεια Κειμένων', 'http://www.ieklidia.gr/%CE%BB%CE%BF%CE%B3%CE%BF%CF%84%CE%B5%CF%87%CE%BD%CE%B9%CE%BA%CE%B7/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Γραφίστες', '');

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', 'Τεχνικός Αισθητικής τέχνης & Μακιγιάζ', 'http://www.ieklidia.gr/makeup/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', 'Τεχνικός Αισθητικός Ποδολογίας – Καλλωπισμού Νυχιών και Ονυχοπλαστικής', 'http://www.ieklidia.gr/nailart/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', 'Τεχνικός Κομμωτικής τέχνης', 'http://www.ieklidia.gr/hairstyles/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', 'Στέλεχος Θαλασσοθεραπέιας /Λουτροθεραπείας – SPA', 'http://www.ieklidia.gr/spa/');

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επιμέρους Επαγγέλματα', 'Φύλακας Μουσείων και Αρχαιολογικών Χώρων', 'http://www.ieklidia.gr/%CF%86%CF%85%CE%BB%CE%B1%CE%BA%CE%B1%CF%83-%CE%BC%CE%BF%CF%85%CF%83%CE%B5%CE%B9%CF%89%CE%BD/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επιμέρους Επαγγέλματα', 'Εκπαιδευτής Υποψηφίων Οδηγών Αυτοκινήτων και Μοτοσικλετών', 'http://www.ieklidia.gr/%CE%B4%CE%B1%CF%83%CE%BA%CE%B1%CE%BB%CE%BF%CE%B9-%CE%BF%CE%B4%CE%B7%CE%B3%CE%B7%CF%83%CE%B7%CF%83/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επιμέρους Επαγγέλματα', 'Στέλεχος Ασφαλείας Προσώπων και Υποδομών', 'http://www.ieklidia.gr/security/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επιμέρους Επαγγέλματα', 'Προπονητής Αθλημάτων', 'http://www.ieklidia.gr/trainer/');

        Scholio::portalSocial($school1, 'facebook', 'https://www.facebook.com/pg/ieklidia/photos/?ref=page_internal');

        /*===============  ΣΒΙΕ ================*/
        $school1 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'ΙΕΚ ΣΒΙΕ', 'email' => 'info@sbie.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'sbie'])->id,
            'address' => 'Πλ. Κάνιγγος 15-17',
            'city' => 'Αθήνα',
            'region' => 'Κέντρο',
            'phone' => 2103247625,
            'type_id' => 2,
            'website' => 'sbie.edu.gr',
            'about' => 'Μισό αιώνα πριν… όλα γίνονταν εμπειρικά…
            Οι γιατροί δεν είχαν ομάδες εξειδικευμένων ανθρώπων να τους υποστηρίξουν στο δύσκολο έργο τους και οι ασθενείς δεν είχαν την ανάλογη βοήθεια και φροντίδα που χρειάζονταν.

            Η ίδρυση της ΣΒΙΕ έκανε πραγματικότητα το όραμα του επαγγελματία Υγείας. Ενός στελέχους με όλες τις απαραίτητες γνώσεις και δεξιότητες, για να πλαισιώσει γιατρούς και επιστήμονες με τον καλύτερο τρόπο και να καταθέσει στον άνθρωπο-ασθενή τη γεμάτη σεβασμό φροντίδα του. Αυτό ήταν το όραμα, αυτό συνεχίζει να είναι και η επιτυχία μας!

            Η συνεισφορά της ΣΒΙΕ στην ποιοτική αναβάθμιση των υπηρεσιών ιατρικής περίθαλψης υπήρξε θεαματική. Για πρώτη φορά, οι απαιτούμενες ημέρες νοσηλείας ελαττώθηκαν σημαντικά!

            Η καθιέρωση νέων ειδικοτήτων δημιούργησε νέες θέσεις εργασίας και μισό αιώνα μετά, σε περίοδο κρίσης τα επαγγέλματα αυτά έχουν τεράστια ζήτηση!

            Ήδη, έχουν ανακοινωθεί 4.500 νέες θέσεις εργασίας από το Υπουργείο Υγείας και ακολουθούν πολύ περισσότερες. Σύμφωνα με πρόσφατες μελέτες της Κομισιόν, από τα 8 κορυφαία επαγγέλματα του μέλλοντος, τα 4 είναι επαγγέλματα υγείας!',
            'approved' => 1,
            'background' => $background,
        ]);

        new Portal($school1, 5, 'iek');

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Υγεία', 'Διαιτητική – Διατροφολογία', 'https://www.sbie.edu.gr/ti-na-spoudaseis/sxoles-ygeias/sxoli-diaitologias-diatrofologias/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Υγεία', 'Μικροβιολογία', 'https://www.sbie.edu.gr/ti-na-spoudaseis/sxoles-ygeias/voithos-mikroviologou/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Υγεία', 'Βοηθός Φαρμακείου', 'https://www.sbie.edu.gr/ti-na-spoudaseis/sxoles-ygeias/voithos-farmakeiou/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Υγεία', 'Νοσηλευτική Χειρουργείου', 'https://www.sbie.edu.gr/ti-na-spoudaseis/sxoles-ygeias/voithos-nosileuti-xeirourgeiou/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Υγεία', 'Μαιευτική', 'https://www.sbie.edu.gr/ti-na-spoudaseis/sxoles-ygeias/voithos-maias/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Υγεία', 'Νοσηλευτική ΜΕΘ', 'https://www.sbie.edu.gr/ti-na-spoudaseis/sxoles-ygeias/voithos-nosileuti-meth/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Υγεία', 'Ακτινολογία – Ραδιολογία', 'https://www.sbie.edu.gr/ti-na-spoudaseis/sxoles-ygeias/voithos-aktinologou/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Υγεία', 'Οδοντοτεχνική', 'https://www.sbie.edu.gr/ti-na-spoudaseis/sxoles-ygeias/voithos-odontotexniti/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Υγεία', 'Οπτική – Οπτομετρία', 'https://www.sbie.edu.gr/ti-na-spoudaseis/sxoles-ygeias/voithos-optikis-optometrias/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Υγεία', 'Εργοθεραπεία', 'https://www.sbie.edu.gr/ti-na-spoudaseis/sxoles-ygeias/voithos-ergotherapeias/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Υγεία', 'Φυσικοθεραπεία', 'https://www.sbie.edu.gr/ti-na-spoudaseis/sxoles-ygeias/voithos-fysikotherapeuti/');

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μαγειρική – Ζαχαροπλαστική', 'Μαγειρική (chef)', 'https://www.sbie.edu.gr/ti-na-spoudaseis/sxoles-mageirikis-zaxaroplastikis/texnikos-mageirikis-texnis-chef/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μαγειρική – Ζαχαροπλαστική', 'Αρτοποιία – Ζαχαροπλαστική', 'https://www.sbie.edu.gr/ti-na-spoudaseis/sxoles-mageirikis-zaxaroplastikis/artopoiia-zaxaroplastiki/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουριστικά Επαγγέλματα', 'Ξενοδοχειακά – Τουριστικά', 'https://www.sbie.edu.gr/ti-na-spoudaseis/sxoles-touristikon-epaggelmaton/ksenodoxeiaka-touristika/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Αισθητική', 'Αισθητική & Μακιγιάζ', 'https://www.sbie.edu.gr/ti-na-spoudaseis/sxoles-aisthitikis/aisthitikos-epaggelmatiko-makigiaz/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Αισθητική', 'Αισθητική Νυχιών & Ποδολογία', 'https://www.sbie.edu.gr/ti-na-spoudaseis/sxoles-aisthitikis/aisthitiki-nixion-podologia/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Παιδαγωγικά', 'Παιδαγωγικά', 'https://www.sbie.edu.gr/ti-na-spoudaseis/sxoles-seminaria-paidagogikon/voithos-vrefonipiokomou/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Διοίκηση Επιχειρήσεων', 'https://www.sbie.edu.gr/ti-na-spoudaseis/sxoles-dioikisis-oikonomias/stelexos-dioikisis-oikonomias/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Αθλητισμός', 'Προπονητική', 'https://www.sbie.edu.gr/ti-na-spoudaseis/athlitika-seminaria/diploma-proponiti/');

        Scholio::portalSocial($school1, 'facebook', 'https://www.facebook.com/ieksvie');
        Scholio::portalSocial($school1, 'instagram', 'https://www.instagram.com/ieksvie/');
        Scholio::portalSocial($school1, 'youtube', 'https://www.youtube.com/channel/UCSUb23fe4ouiM6VBdhaPX9Q');

        /*===============  PASTER  ================*/
        $school1 = factory(App\Models\School::class)->create([
            'city' => 'Θεσσαλονίκη',
            'user_id' => factory(App\User::class)->create(['name' => 'ΙΕΚ ΠΑΣΤΕΡ', 'email' => 'info@paster.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'paster'])->id,
            'address' => 'Τσιμισκή 45',
            'region' => 'Κέντρο',
            'phone' => 2310281282,
            'type_id' => 2,
            'website' => 'paster.gr/iek-sxoli-thessaloniki-paster',
            'approved' => 1,
            'about' => 'Γίνε σήμερα επαγγελματίας!

            Φιλοσοφία μας στο Ιδιωτικό Ινστιτούτο Επαγγελματικής Κατάρτισης ΙΕΚ ΠΑΣΤΕΡ Θεσσαλονικη είναι η ολοκληρωμένη εκπαίδευση, ώστε ο κάθε σπουδαστής να έχει ολοκληρωμένη βιωματική γνώση για το αντικείμενο της εργασίας του. Στόχος μας είναι ο κάθε απόφοιτος να αποτελεί υπόδειγμα επαγγελματία στον τομέα του και να διαθέτει ανταγωνιστικά προσόντα στην αγορά εργασίας.

            Η μεγάλη μας παράδοση στην ιδιωτική εκπαίδευση από το 1967 μας ωθεί να επενδύουμε σταθερά σε αξίες που έχουν συμβάλει στη δημιουργία επαγγελματιών με ήθος, παιδεία και όραμα. Αυτές οι αξίες αποτελούν τον πυρήνα των εργασιών μας και σήμερα. Η επιτυχία των ΙΙΕΚ ΠΑΣΤΕΡ βασίζεται στις πιο σύγχρονες και ολοκληρωμένες μεθόδους πρακτικής διδασκαλίας με το πλέον καταρτισμένο και εξειδικευμένο εκπαιδευτικό προσωπικό στους πιο σύγχρονους εργαστηριακούς χώρους με μηχανήματα της τελευταίας λέξης της τεχνολογίας.

            Ακρογωνιαίος λίθος της επιτυχίας μας είναι η μέριμνα για τον κάθε σπουδαστή πριν αλλά και μετά την ολοκλήρωση των σπουδών του, με προγράμματα δια βίου εκπαίδευσης και επαγγελματικής κατάρτισης ώστε οι απόφοιτοι ΠΑΣΤΕΡ να παραμένουν εξειδικευμένοι και αναντικατάστατοι στο χώρο της εργασίας τους. Γι’ αυτό άλλωστε, οι απόφοιτοι ΠΑΣΤΕΡ ρυθμίζουν σταθερά τις εξελίξεις στα επαγγελματικά θέματα της χώρας.

            Σήμερα γίνε και εσύ επαγγελματίας!',
            'background' => $background,
        ]);

        new Portal($school1, 11, 'iek');

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Υγειας', 'Βοηθός Φαρμακείου', 'http://paster.gr/voithos-farmakeiou-iek-thessaloniki');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Υγειας', 'Βοηθός Φυσικοθεραπείας', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-ygeias-paster-thessaloniki/item/voithos-fysikotherapeias');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Υγειας', 'Βοηθός Ραδιολογίας και Ακτινολογίας', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-ygeias-paster-thessaloniki/item/voithos-radiologias-aktinologias');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Υγειας', 'Βοηθός Ιατρικών Εργαστηρίων', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-ygeias-paster-thessaloniki/item/voithos-iatrikon-ergastirion');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Υγειας', 'Βοηθός Οδοντικής Τεχνολογίας', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-ygeias-paster-thessaloniki/item/voithos-odontikis-technologias');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Υγειας', 'Βοηθός Νοσηλευτικής Χειρουργείου', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-ygeias-paster-thessaloniki/item/nosileutikis-heirourgiou-surgery-nursing-nurse');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Υγειας', 'Βοηθός Νοσηλευτικής Γενικής Νοσηλείας', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-ygeias-paster-thessaloniki/item/nosileutikis-genikis-nosileias');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Υγειας', 'Βοηθός Νοσηλευτικής Τραυματολογίας', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-ygeias-paster-thessaloniki/item/nosileutikis-traumatologias');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Υγειας', 'Βοηθός Νοσηλευτικής Ατόμων με Ειδικές Παθήσεις', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-ygeias-paster-thessaloniki/item/nosileutiki-atomwn-me-eidikes-pathiseis');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Υγειας', 'Βοηθός Νοσηλευτικής Ογκολογικών Παθήσεων', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-ygeias-paster-thessaloniki/item/nosileutikis-ogkologikon-pathiseon');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Υγειας', 'Βοηθός Νοσηλευτικής Μαιευτικής', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-ygeias-paster-thessaloniki/item/voithos-nosileutikis-maieutikis');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Υγειας', 'Βοηθός Εργοθεραπείας', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-ygeias-paster-thessaloniki/item/voithos-ergotherapeias');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Υγειας', 'Βοηθός Οπτικής και Οπτικομετρίας', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-ygeias-paster-thessaloniki/item/voithos-optikis-kai-optikometrias');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Υγειας', 'Τεχνικός Φαρμάκων, Καλλυντικών και Παρεμφερών Προϊόντων', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-ygeias-paster-thessaloniki/item/technikos-farmakon-kallyntikon-kai-paremferon-proionton');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Υγειας', 'Διασώστης - Πλήρωμα Ασθενοφόρου', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-ygeias-paster-thessaloniki/item/diasostis-pliroma-asthenoforou');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Υγειας', 'Στέλεχος Διατροφής και Διαιτολογίας', 'http://paster.gr/iek-aisthitikis-ygeias-koinonikes-yphresies/item/stelechos-diatrofis-kai-diaitologias');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Υγειας', 'Τεχνικός Χημικών εργαστηρίων και ποιοτικού ελέγχου υλικών', 'http://paster.gr/iek-aisthitikis-ygeias-koinonikes-yphresies/item/texnikos-ximikwn-ergastiriwn-poiotikou-elegxou-ulikwn');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Μόδας και Ομορφιάς', 'Τεχνικός Αισθητικής Τέχνης και Μακιγιάζ', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-omorfia-paster-iek-thessaloniki/item/technikos-aisthitikis-technis-kai-makigiaz');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Μόδας και Ομορφιάς', 'Τεχνικός Αισθητικός Πoδολογίας - Καλλωπισμοί Νυχιών και Ονυχοπλαστικής', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-omorfia-paster-iek-thessaloniki/item/technikos-aisthitikos-podologias-kalopismou-nychion-kai-onychoplastikis');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Μόδας και Ομορφιάς', 'Τεχνικός Κομμωτικής Τέχνης', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-omorfia-paster-iek-thessaloniki/item/technikos-kommotikis-technis');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Μόδας και Ομορφιάς', 'Στέλεχος Θαλλασοθεραπείας – Λουτροθεραπείας – SPA', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-omorfia-paster-iek-thessaloniki/item/stelexos-thalasotherapeias-loutrotherapeias-spa');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Μόδας και Ομορφιάς', 'Τεχνικός τεχνολογίας ενδύματος και υποδήματος - Σχεδιαστής μόδας', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-omorfia-paster-iek-thessaloniki/item/texnikos-texnologias-endumatwn-upodimatos-sxediastis-modas');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Παιδαγωγικών', 'Βοηθός Βρεφονηπιοκόμων', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-paidagogikon-paster-sxoli/item/voithos-vrefonipiokomwn');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Τουρισμού και Εστίασης', 'Τεχνικός Μαγειρικής Τέχνης - Αρχιμάγειρας (Chef)', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-tourismou-estiasis-paster/item/technikos-megeirikis-technis-archimageiras-chef');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Τουρισμού και Εστίασης', 'Τεχνικός Αρτοποϊίας – Ζαχαροπλαστικής (Bakery – Pastry Chef)', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-tourismou-estiasis-paster/item/technikos-artopoiias-zacharoplastikis-bakery-pastry-chef');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Τουρισμού και Εστίασης', 'Τεχνικός Τουριστικών Μονάδων και Επιχειρήσεων Φιλοξενίας', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-tourismou-estiasis-paster/item/texnikos-touristikwn-monadwn-epixeirisewn-filoksenias');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Τουρισμού και Εστίασης', 'Στέλεχος Διοίκησης και Οικονομίας στον Τομέα του Τουρισμού (Στέλεχος Τουριστικού Πρακτορείου)', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-tourismou-estiasis-paster/item/stelexos-dioikhshs-oikonomias-ston-tomea-tourismou');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Τουρισμού και Εστίασης', 'Στέλεχος Διοίκησης και Οικονομίας στον Τομέα της Ναυτιλίας', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-tourismou-estiasis-paster/item/stelexos-dioikhshs-oikonomias-ston-tomea-nautilias');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Τουρισμού και Εστίασης', 'Στέλεχος Υπηρεσιών Αερομεταφοράς', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-tourismou-estiasis-paster/item/stelechos-ypiresion-aerometaforas');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Τουρισμού και Εστίασης', 'Επιμελητής Πτήσεων', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-tourismou-estiasis-paster/item/epimelitis-ptiseon');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Τουρισμού και Εστίασης', 'Στέλεχος Τεχνολογίας και Ελέγχου Τροφίμων και Ποτών', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-tourismou-estiasis-paster/item/stelexos-texnologias-kai-elegxou-trofimwn-potwn');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Πληροφορικής και Νέων Τεχνολογιών', 'Τεχνικός Δικτύων και Τηλεπικοινωνιών', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-pliroforiki-nees-technologies-paster-sxoli/item/technikos-diktyon-kai-tilepikoinonion');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Πληροφορικής και Νέων Τεχνολογιών', 'Τεχνικός Η/Υ', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-pliroforiki-nees-technologies-paster-sxoli/item/technikos-hy');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Πληροφορικής και Νέων Τεχνολογιών', 'Τεχνικός Λογισμικού Η/Υ', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-pliroforiki-nees-technologies-paster-sxoli/item/technikos-logismikou-hy');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Πληροφορικής και Νέων Τεχνολογιών', 'Τεχνικός Εφαρμογών Πληροφορικής (Πολυμέσα - Web Designer - Developer / Video Games)', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-pliroforiki-nees-technologies-paster-sxoli/item/technikos-efarmogon-pliroforikis');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Εφαρμοσμένων Τεχνών (ART & DESIGN)', 'Γραφιστική Εντύπου και Ηλεκτρονικών Μέσων', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-efarmosmenes-texnes-art-design-sxoli/item/grafistas-entypon-kai-ilektronikon-meson');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Εφαρμοσμένων Τεχνών (ART & DESIGN)', 'Συντηρητής Έργων Τέχνης και Αρχαιοτήτων', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-efarmosmenes-texnes-art-design-sxoli/item/syntiritis-ergon-technis-kai-arhaiotition');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Εφαρμοσμένων Τεχνών (ART & DESIGN)', 'Εσωτερική Αρχιτεκτονική Διακόσμηση και Σχεδιασμός Αντικειμένων', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-efarmosmenes-texnes-art-design-sxoli/item/esoteriki-architektoniki-diakosmisi-kai-sxediasmos-antikeimenon');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Εφαρμοσμένων Τεχνών (ART & DESIGN)', 'Τέχνη Φωτογραφίας', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-efarmosmenes-texnes-art-design-sxoli/item/texni-fotografias');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Εφαρμοσμένων Τεχνών (ART & DESIGN)', 'Τέχνη σκίτσου - Εικονογραφίας - Γραφικών', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-efarmosmenes-texnes-art-design-sxoli/item/techni-skitsou-eikonografias-grafikon');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Εφαρμοσμένων Τεχνών (ART & DESIGN)', 'Τεχνικός Κινούμενης Εικόνας Ηλεκτρονικής Σχεδίασης Γραφήματος', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-efarmosmenes-texnes-art-design-sxoli/item/technikos-kinoumenis-eikonos-ilektronikis-shediasis-grafimatos');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Εφαρμοσμένων Τεχνών (ART & DESIGN)', 'Ζωγραφική Τέχνη', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-efarmosmenes-texnes-art-design-sxoli/item/zwgrafiki-texni');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Εφαρμοσμένων Τεχνών (ART & DESIGN)', 'Τεχνικός Τεχνολογικών Εφαρμογών και Εγκαταστάσεων σε Έργα Τοπίου και Περιβάλλοντος', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-efarmosmenes-texnes-art-design-sxoli/item/texnikos-texnologikwn-efarmogwn-egkatastasewn-se-erga-topiou-k-perivalontos');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Εφαρμοσμένων Τεχνών (ART & DESIGN)', 'Σχεδιαστής Δομικών Έργων και Γεωπληροφορικής', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-efarmosmenes-texnes-art-design-sxoli/item/sxediastis-domikwn-ergwn-kai-gewpliroforikhs');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Οπτικοακουστικών Σπουδών', 'Μουσική με Τεχνολογία', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-paster-optikoakoustika/item/mousiki-me-technologia');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Οπτικοακουστικών Σπουδών', 'Ηχοληψία', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-paster-optikoakoustika/item/icholipsia');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Οπτικοακουστικών Σπουδών', 'Τέχνη Τοιχογραφίας', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-paster-optikoakoustika/item/texni-toixografias');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Οπτικοακουστικών Σπουδών', 'Τέχνη Δημιουργικής Γραφής', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-paster-optikoakoustika/item/texni-dimiourgikis-grafis');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Οπτικοακουστικών Σπουδών', 'Τέχνη Σκηνοθεσίας', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-paster-optikoakoustika/item/texni-skinothesias');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Οπτικοακουστικών Σπουδών', 'Χειριστής Ηλεκτρονικής Συνάρμοσης Εικόνας (monter)', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-paster-optikoakoustika/item/xeiristis-ilektronikis-sunarmosis-eikonas-monter');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Οπτικοακουστικών Σπουδών', 'Τέχνη Σεναριογραφίας', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-paster-optikoakoustika/item/techni-senariografias');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Οπτικοακουστικών Σπουδών', 'Υποκριτική τέχνη Θεάτρου - Κινηματογράφου', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-paster-optikoakoustika/item/ypokritiki-techni-theatrou-kinimatografou');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Οπτικοακουστικών Σπουδών', 'Εφαρμοσμένες τέχνες χορού', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-paster-optikoakoustika/item/efarmosmenes-texnes-xorou');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Μέσων Μαζικής Ενημέρωσης (Μ.Μ.Ε) και Αθλητισμού', 'Δημοσιογραφίας, Συντακτών και Ρεπόρτερ', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-meson-mazikis-enimerosis-athlitismou-paster-sxoli/item/dhmosiografias-suntaktwn-reporter');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Μέσων Μαζικής Ενημέρωσης (Μ.Μ.Ε) και Αθλητισμού', 'Αθλητική Δημοσιογραφία', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-meson-mazikis-enimerosis-athlitismou-paster-sxoli/item/athlitiki-dimosiografia');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Μέσων Μαζικής Ενημέρωσης (Μ.Μ.Ε) και Αθλητισμού', 'Προπονητής Αθλημάτων', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-meson-mazikis-enimerosis-athlitismou-paster-sxoli/item/proponitis-athlimatwn');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Οικονομίας και Διοίκησης', 'Στέλεχος Διοίκησης και Οικονομίας', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-oikonomias-dioikisis-thessaloniki/item/stelechos-dioikisis-kai-oikonomias');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Οικονομίας και Διοίκησης', 'Στέλεχος Μηχανογραφημένου Λογιστηρίου - Φοροτεχνικού Γραφείου', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-oikonomias-dioikisis-thessaloniki/item/stelechos-michanografimenou-logistiriou-forotechnikou-grafeiou');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Οικονομίας και Διοίκησης', 'Στέλεχος Εμπορίας - Διαφήμισης και Προώθησης Προϊόντων (Marketing)', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-oikonomias-dioikisis-thessaloniki/item/stelechos-emporias-diafimisis-kai-proothisis-proionton-marketing');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Οικονομίας και Διοίκησης', 'Στέλεχος Υπηρεσιών Εφοδιαστικής Αλυσίδας (Logistics)', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-oikonomias-dioikisis-thessaloniki/item/stelechos-ypiresion-efodiastikis-alysidas-logistics');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Οικονομίας και Διοίκησης', 'Στέλεχος Διοίκησης και Οικονομίας στον Τομέα του Πολιτισμού', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-oikonomias-dioikisis-thessaloniki/item/stelexos-dioikhshs-oikonomias-ston-tomea-politismou');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Οικονομίας και Διοίκησης', 'Στέλεχος Διοίκησης και Οικονομίας στον Τομέα της Υγείας', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-oikonomias-dioikisis-thessaloniki/item/stelexos-dioikhshs-oikonomias-ston-tomea-ugeias');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Οικονομίας και Διοίκησης', 'Στέλεχος Διοίκησης και Οικονομίας στον Τομέα του Αθλητισμού', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-oikonomias-dioikisis-thessaloniki/item/stelexos-dioikhshs-oikonomias-ston-tomea-athlitismou');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Οικονομίας και Διοίκησης', 'Στέλεχος Χρηματοοικονομικών και Ασφαλιστικών Εργασιών', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-oikonomias-dioikisis-thessaloniki/item/stelechos-chrimatooikonomikon-kai-asfalistikos-ergasion');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Οικονομίας και Διοίκησης', 'Στέλεχος Κοστολόγησης', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-oikonomias-dioikisis-thessaloniki/item/stelechos-kostologisis');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Οικονομίας και Διοίκησης', 'Στέλεχος Διαχείρισης Ακίνητης Περιουσίας (Real estate)', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-oikonomias-dioikisis-thessaloniki/item/stelechos-diacheirisis-akinitis-periousias');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Οικονομίας και Διοίκησης', 'Στέλεχος Στατιστικών Έρευνών και Δημοσκοπήσεων', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-oikonomias-dioikisis-thessaloniki/item/stelechos-statistikon-erevnon-kai-dimiskopiseon');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Οικονομίας και Διοίκησης', 'Στέλεχος Διοίκησης και Οικονομίας στον Τομέα των Μεταφορών', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-oikonomias-dioikisis-thessaloniki/item/stelexos-dioikhshs-oikonomias-ston-tomea-metaforwn');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Οικονομίας και Διοίκησης', 'Στέλεχος Ασφαλείας προσώπων και υποδομών (Security)', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-oikonomias-dioikisis-thessaloniki/item/security');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Οικονομίας και Διοίκησης', 'Γραμματέας Ανώτερων και Ανώτατων Στελεχών', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-oikonomias-dioikisis-thessaloniki/item/grammateas-anoteron-kai-anotaton-stelechon');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Οικονομίας και Διοίκησης', 'Στέλεχος Διοίκησης και Οικονομίας στον Τομέα της Αγροτικής Οικονομίας', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-oikonomias-dioikisis-thessaloniki/item/stelexos-dioikhshs-oikonomias-ston-tomea-agrotikis-oikonomias');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Οικονομίας και Διοίκησης', 'Τεχνικός Αγροτουρισμού', 'http://paster.gr/iek-xrimatopistotikes-dioikitikes-ypiresies/item/texnikos-agrotourismou');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Μηχανολογίας - Ηλεκτρολογίας - Ηλεκτρονικής και Αυτοματισμού', 'Τεχνικός Μηχανοτρονικής', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-mixanologos-ilektrologia-ilektronikon-thessaloniki/item/texnikos-mixanotronikis');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Μηχανολογίας - Ηλεκτρολογίας - Ηλεκτρονικής και Αυτοματισμού', 'Τεχνικός Μηχανικός Θερμικών Εγκαταστάσεων και Μηχανικός Τεχνολογίας Πετρελαίων και Φυσικού Αερίου', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-mixanologos-ilektrologia-ilektronikon-thessaloniki/item/texnikos-mixanikos-thermikwn-egkatastasewn-mixanikos-texnologias-petrelaiwn-kai-fusikou-aeriou');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Μηχανολογίας - Ηλεκτρολογίας - Ηλεκτρονικής και Αυτοματισμού', 'Τεχνικός Εγκαταστάσεων Ανανεώσιμων Πηγών Ενέργειας', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-mixanologos-ilektrologia-ilektronikon-thessaloniki/item/texnikos-egkatastasewn-ananewsimwn-pigwn-energeias');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Μηχανολογίας - Ηλεκτρολογίας - Ηλεκτρονικής και Αυτοματισμού', 'Τεχνικός Εγκαταστάσεων Ψύξης Αερισμού και Κλιματισμού', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-mixanologos-ilektrologia-ilektronikon-thessaloniki/item/texnikos-egkatastasewn-psiksis-aerismou-klimatismou');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Μηχανολογίας - Ηλεκτρολογίας - Ηλεκτρονικής και Αυτοματισμού', 'Τεχνικός Ιατρικών Οργάνων', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-mixanologos-ilektrologia-ilektronikon-thessaloniki/item/texnikos-iatrikwn-organwn');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Μηχανολογίας - Ηλεκτρολογίας - Ηλεκτρονικής και Αυτοματισμού', 'Τεχνικός Αυτοματισμών', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-mixanologos-ilektrologia-ilektronikon-thessaloniki/item/texnikos-automatismwn');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Μηχανολογίας - Ηλεκτρολογίας - Ηλεκτρονικής και Αυτοματισμού', 'Τεχνικός Εσωτερικών Ηλεκτρικών Εγκαταστάσεων', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-mixanologos-ilektrologia-ilektronikon-thessaloniki/item/technikos-esoterikos-ilektrikon-egkatastaseon');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Εκπαίδευσης', 'Εκπαιδευτής Υποψηφίων Οδηγών Αυτοκινήτων και Μοτοσυκλετών', 'http://paster.gr/iek-eidikotites-ekpaideysi-sxoli-paster/iek-ekpaideusi-sxoli-paster/item/ekpaideutis-ypopsifion-odigon-autokiniton-kai-motosykleton');

        Scholio::portalSocial($school1, 'facebook', 'https://www.facebook.com/PasterStudies');
        Scholio::portalSocial($school1, 'instagram', 'https://www.instagram.com/paster_studies/');
        Scholio::portalSocial($school1, 'twitter', 'https://twitter.com/iekpaster');

        /*===============  INTERGRAPHICS  ================*/
        $school1 = factory(App\Models\School::class)->create([
            'city' => 'Αθήνα',
            'user_id' => factory(App\User::class)->create(['name' => 'ΙΕΚ INTERGRAPHICS', 'email' => 'info@intergraphics.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'intergraphics'])->id,
            'address' => 'Ακαδημίας 98-100',
            'region' => 'Κέντρο',
            'phone' => 2103838808,
            'type_id' => 6,
            'website' => 'intergraphics.gr',
            'approved' => 1,
            'about' => 'O Εκπαιδευτικός Όμιλος INTERGRAPHICS ιδρύθηκε το 1990 και - πρώτος στην Ελλάδα - ξεκίνησε να διδάσκει τις νέες Ψηφιακές Τεχνολογίες και την αξιοποίησή τους στις Εφαρμοσμένες Τέχνες και την Πληροφορική και είναι η πιο Εξειδικευμένη Σχολή στους τομείς αυτούς.

            Παρακολουθώντας τις ανάγκες της αγοράς εργασίας, ο Όμιλος διευρύνει συνεχώς τις προσφερόμενες ειδικότητες προς τους σπουδαστές του και επικεντρώνεται σε επαγγέλματα αιχμής, με τη μεγαλύτερη ζήτηση από την αγορά εργασίας, εξασφαλίζοντας άμεση επαγγελματική αποκατάσταση στους αποφοίτους του.

            Όπως αναφέρει και ο Γενικός Διευθυντής κ. Γιώργος Παπουτσάκης στόχος μας είναι να προσφέρουμε εκπαίδευση εναρμονισμένη στις ανάγκες και τις απαιτήσεις της αγοράς εργασίας. Όταν ο απόφοιτός μας βρεθεί στο χώρο εργασίας, το περιβάλλον να του είναι τόσο οικείο, ούτως ώστε από την πρώτη ημέρα, οι ενέργειές του πάνω στην παραγωγή να ταυτίζονται με εκείνες ενός πεπειραμένου και απόλυτα καταρτισμένου επαγγελματία. Γι’ αυτό, το επίπεδο των σπουδών μας είναι ιδιαίτερα εξειδικευμένο και στοχευμένο.

            Το πολύ υψηλό επίπεδο εκπαίδευσης και κατάρτισης που εξασφαλίζει ο Όμιλος, σε συνδυασμό με τις άρτιες εγκαταστάσεις, τα υπερσύγχρονα εργαστήρια, τους καταξιωμένους καθηγητές και τις συνεργασίες που έχει συνάψει με γνωστές εταιρίες, τον έχουν κατατάξει ως ένα από τα Κορυφαία Εκπαιδευτήρια στο χώρο της Ανώτερης Εκπαίδευσης στην Ελλάδα.

            Η Διά Βίου Δωρεάν Επιμόρφωση, στις εξελίξεις της τεχνολογίας & στα νέα δεδομένα της αγοράς εργασίας, αποτελεί μια πολύ σημαντική και μοναδική παροχή που μόνο ο Όμιλος INTERGRAPHICS προσφέρει στους αποφοίτους του.',
            'background' => $background,
        ]);

        new Portal($school1, 5, 'iek');

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Art & Design', 'ΓΡΑΦΙΣΤΙΚΗ', 'https://intergraphics.gr/index.php/el/art-design/grafistiki.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Art & Design', '3D Animation', 'https://intergraphics.gr/index.php/el/art-design/3d-animation.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Art & Design', 'ΙΕΚ ΔΙΑΚΟΣΜΗΣΗΣ - Διακόσμηση εσωτερικών χώρων', 'https://intergraphics.gr/index.php/el/art-design/diakosmisi.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Art & Design', 'Εικονογράφος - Σκιτσογράφος', 'https://intergraphics.gr/index.php/el/art-design/eikonografos.htm');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Art & Design', 'Εκτυπωτής λιθογραφείου - τυπογράφος', 'https://intergraphics.gr/index.php/el/art-design/ektupotis-lithografeiou.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Art & Design', 'Βιβλιοδέτης', 'https://intergraphics.gr/index.php/el/art-design/bibliodetis.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Art & Design', 'IEK Φωτογραφίας & Video', 'https://intergraphics.gr/index.php/el/art-design/iek-fotografias-video.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', 'Σχεδιαστής μόδας – Ενδυματολόγος', 'https://intergraphics.gr/index.php/el/moda-omorfia/sxediastis-modas-endimatologos.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', 'Αισθητικός σύμβουλος εμφάνισης - Στυλίστας', 'https://intergraphics.gr/index.php/el/moda-omorfia/stylistas.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', 'ΙΕΚ Κομμωτικής - Hair Styling', 'https://intergraphics.gr/index.php/el/moda-omorfia/kommotis-hair-styling.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', 'ΙΕΚ ΑΙΣΘΗΤΙΚΗΣ - Ειδικός εφαρμογών αισθητικής', 'https://intergraphics.gr/index.php/el/moda-omorfia/iek-aisthitikis.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', 'Ειδικός περιποίησης νυχιών & ονυχοπλαστικής', 'https://intergraphics.gr/index.php/el/moda-omorfia/eidikos-peripoihshs-nuxiwn-onyxoplastikis.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', 'Ειδικός ποδολογίας & καλλωπισμού άκρων', 'https://intergraphics.gr/index.php/el/moda-omorfia/eidikos-podologias-kallopismou-akrwn.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', 'Ιεροράπτης', 'https://intergraphics.gr/index.php/el/moda-omorfia/ieroraptis.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Πληροφορική & Νέες Τεχνολογίες', 'Web Design-Ειδικός τεχνολογίας Internet', 'https://intergraphics.gr/index.php/el/pliroforiki-nees-texnologies/web-design-eidikos-texnologias-internet.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Πληροφορική & Νέες Τεχνολογίες', 'Τεχνικός συστημάτων Η/Υ', 'https://intergraphics.gr/index.php/el/pliroforiki-nees-texnologies/texnikos-sistimatwn-hy.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Πληροφορική & Νέες Τεχνολογίες', 'Ειδικός εφαρμογών πληροφορικής', 'https://intergraphics.gr/index.php/el/pliroforiki-nees-texnologies/eidikos-efarmogwn-pliroforikis.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Πληροφορική & Νέες Τεχνολογίες', 'Προγραμματιστής Video Games', 'https://intergraphics.gr/index.php/el/pliroforiki-nees-texnologies/programmatistis-video.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Διοικητικό & Οικονομικό Στέλεχος επιχειρήσεων', 'https://intergraphics.gr/index.php/el/oikonomia-dioikisi/dioikitiko-oikonomiko-stelexos.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Ειδικός μηχανογραφημένου λογιστηρίου', 'https://intergraphics.gr/index.php/el/oikonomia-dioikisi/mixanografimeno-logistirio.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ειδικός Φοροτεχνικού Γραφείου', 'https://intergraphics.gr/index.php/el/oikonomia-dioikisi/forotexnis.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Ειδικός ασφαλιστικών εργασιών', 'https://intergraphics.gr/index.php/el/oikonomia-dioikisi/2009-07-29-16-45-35.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Κτηματομεσίτης - Διαχειριστής Ακίνητης Περιουσίας', 'https://intergraphics.gr/index.php/el/oikonomia-dioikisi/2009-07-29-17-03-05.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Υπηρεσιών Εφοδιαστικής Αλυσίδας - LOGISTICS', 'https://intergraphics.gr/index.php/el/oikonomia-dioikisi/----logistics.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Γραμματέας Διεύθυνσης', 'https://intergraphics.gr/index.php/el/oikonomia-dioikisi/gramateas-dieuthinsis.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Τραπεζικών Εργασιών', 'https://intergraphics.gr/index.php/el/oikonomia-dioikisi/trapezikwn-ergasiwn.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Εκδοτικών Επιχειρήσεων', 'https://intergraphics.gr/index.php/el/oikonomia-dioikisi/stelexos-ekdotikwn-epixeirisewn.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Marketing - Πωλήσεις - Επικοινωνία', 'Διαφήμιση', 'https://intergraphics.gr/index.php/el/marketing-pwliseis-epikoinwnia/diafimisi.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Marketing - Πωλήσεις - Επικοινωνία', 'Ειδικός Πωλήσεων', 'https://intergraphics.gr/index.php/el/marketing-pwliseis-epikoinwnia/eidikos-polisewn.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Marketing - Πωλήσεις - Επικοινωνία', 'Marketing – ανάπτυξη & προώθηση προϊόντων', 'https://intergraphics.gr/index.php/el/marketing-pwliseis-epikoinwnia/marketing-prowthisi-proiontwn.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ναυτιλία - Τουρισμός', 'Στέλεχος Ναυτιλιακών Επιχειρήσεων', 'https://intergraphics.gr/index.php/el/nautilia-tourismos/stelexos-nautiliakwn-epixeirisewn.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ναυτιλία - Τουρισμός', 'Υπεύθυνος υποδοχής και φιλοξενίας', 'https://intergraphics.gr/index.php/el/nautilia-tourismos/ypeuthinos-upodoxis-filoksenias.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ναυτιλία - Τουρισμός', 'Στέλεχος τουριστικού γραφείου', 'https://intergraphics.gr/index.php/el/nautilia-tourismos/ypallilos-touristikou-grafeiou.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Δομικών Έργων', 'Σχεδιαστής μέσω συστημάτων Η/Υ', 'https://intergraphics.gr/index.php/el/domikwn-ergwn/sxediastis-mesw-hy.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Δομικών Έργων', 'Τεχνικός Δομικών Έργων', 'https://intergraphics.gr/index.php/el/domikwn-ergwn/texnikos-domikwn-ergwn.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Art & Design', 'Σπουδές Φωτογραφίας & Video Art', 'https://intergraphics.gr/index.php/el/fotografia-video-art.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Πληροφορική & Νέες Τεχνολογίες', 'Computer Graphics - DTP', 'https://intergraphics.gr/index.php/el/computer-graphics-dtp2.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Art & Design', 'ΣΠΟΥΔΕΣ WEB DESIGN & DEVELOPMENT', 'https://intergraphics.gr/index.php/el/web-design-a-development.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Πληροφορική & Νέες Τεχνολογίες', 'Development Programming', 'https://intergraphics.gr/index.php/el/development-programming.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Πληροφορική & Νέες Τεχνολογίες', '3D Animation - Multimedia', 'https://intergraphics.gr/index.php/el/3danimation-multimedia.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Πληροφορική & Νέες Τεχνολογίες', 'Maya 3D', 'https://intergraphics.gr/index.php/el/maya3d.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Πληροφορική & Νέες Τεχνολογίες', 'Advanced 3D Animation', 'https://intergraphics.gr/index.php/el/advanced-3d-animation.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Art & Design', 'Post Production', 'https://intergraphics.gr/index.php/el/post-production.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Art & Design', 'New Technologies in Cinema & T.V.', 'https://intergraphics.gr/index.php/el/new-technologies-cinema-tv.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Πληροφορική & Νέες Τεχνολογίες', 'Games Development', 'https://intergraphics.gr/index.php/el/games-development.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Art & Design', 'Σπουδές Σκίτσου & Εικονογράφησης (Comics-Cartoon, Story Board, Παιδικό Βιβλίο, Πολιτική Γελοιογραφία, Editorial)', 'https://intergraphics.gr/index.php/el/skitso-eikonografisi-comics-cartoon-editorial.html');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Art & Design', 'Διακόσμηση - Αρχιτεκτονική', 'https://intergraphics.gr/index.php/el/diakosmisi-arxitektoniki.html');

        Scholio::portalSocial($school1, 'facebook', 'https://www.facebook.com/IEK.INTERGRAPHICS');
        Scholio::portalSocial($school1, 'twitter', 'https://twitter.com/_INTERGRAPHICS');
        Scholio::portalSocial($school1, 'youtube', 'https://www.youtube.com/user/INTERGRAPHICS1');

        $school1 = factory(App\Models\School::class)->create([
            'city' => 'Θεσσαλονίκη',
            'user_id' => factory(App\User::class)->create(['name' => 'Infotech ΚΔΒΜ', 'email' => 'studies@infotech.edu.gr ', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'infotech'])->id,
            'address' => 'Συγγρού 10',
            'region' => 'Κέντρο',
            'phone' => 2310501970,
            'type_id' => 2,
            'website' => 'infotech.edu.gr',
            'approved' => 1,
            'about' => 'Η infotech ιδρύθηκε το 1997 στη Θεσσαλονίκη και είναι από τότε το μοναδικό εξουσιοδοτημένο εκπαιδευτικό κέντρο της Autodesk στη Βόρεια Ελλάδα.

            Aπό το 2010 είναι πιστοποιημένο εξεταστικό κέντρο της Adobe στη Βόρειο Ελλάδα.
            
            Παρέχει ολοκληρωμένη εκπαίδευση στις τελευταίες εκδόσεις των προγραμμάτων της Autodesk και της Adobe καθώς και ειδικά σεμινάρια σε επιχειρήσεις και οργανισμούς με δραστηριότητες στους κλάδους μελετών, κατασκευών και βιομηχανίας.
            
            Η εκπαίδευση γίνεται αποκλειστικά από εκπαιδευτές εξουσιοδοτημένους από την Autodesk και την Adobe. Όλοι οι εκπαιδευτές είναι απόφοιτοι ανωτάτων εκπαιδευτικών ιδρυμάτων με εξειδίκευση στην πληροφορική και μακρόχρονη εμπειρία στον εκπαιδευτικό και επαγγελματικό τομέα.
            
            Η σχολή διαθέτει 3 αίθουσες που πληρούν τις σύγχρονες προδιαγραφές εκπαίδευσης.
            
            Οι εκπαιδευόμενοι κάθονται ανά δύο. Ανάμεσά τους υπάρχει ένα monitor 23’ που είναι συνδεδεμένο με τον υπολογιστή του εισηγητή. Σημειώνουμε ότι όλοι “βλέπουν” τον εισηγητή
            
            Με το ενδιάμεσο monitor οι εκπαιδευόμενοι, παράλληλα με την παράδοση παρακολουθούν βήμα – βήμα στo κεντρικό monitor τον τρόπο εργασίας του εκπαιδευτή και μπορούν να εξασκούνται στον υπολογιστή τους.
            
            Έτσι είναι δυνατή η σωστή οπτικοακουστική παρακολούθηση, ώστε να γίνεται πλήρης εκμετάλλευση του χρόνου εκπαίδευσης.
            
            Κατά τη διάρκεια των ασκήσεων ο εισηγητής έχει τη δυνατότητα να παρακολουθεί ταυτόχρονα όλους τους εκπαιδευόμενους και να έχει άμεση πρόσβαση σ’ αυτούς.',
            'background' => $background,
        ]);

        new Portal($school1, 5, 'iek');

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Autodesk', 'AutoCAD Civil 3D', 'http://www.infotech.edu.gr/course/autocad-civil-3d/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Autodesk', 'AutoCAD Map 3D', 'http://www.infotech.edu.gr/course/autocad-map-3d/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Autodesk', 'Autodesk Inventor iLogic', 'http://www.infotech.edu.gr/course/autodesk-inventor-ilogic/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Autodesk', 'Autodesk Inventor Sheet Metal', 'http://www.infotech.edu.gr/course/autodesk-inventor-sheet-metal/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Autodesk', 'Autodesk Inventor Advanced', 'http://www.infotech.edu.gr/course/autodesk-inventor-advanced/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Autodesk', 'Autodesk Inventor', 'http://www.infotech.edu.gr/course/autodesk-inventor/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Autodesk', 'AutoCAD 2D Advanced', 'http://www.infotech.edu.gr/course/autocad-2d-advanced/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Autodesk', 'AutoCAD 3D Modeling', 'http://www.infotech.edu.gr/course/autocad-3d-modeling/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Autodesk', 'AutoCAD 2D', 'http://www.infotech.edu.gr/course/autocad-2d/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Autodesk', '3ds Max Advanced', 'http://www.infotech.edu.gr/course/3ds-max-advanced/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Autodesk', 'Autodesk 3ds Max', 'http://www.infotech.edu.gr/course/autodesk-3ds-max/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Autodesk', 'Revit Structure', 'http://www.infotech.edu.gr/course/revit-structure/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Autodesk', 'Revit Architecture Advanced', 'http://www.infotech.edu.gr/course/revit-architecture-advanced/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Autodesk', 'Autodesk Revit Architecture' ,'http://www.infotech.edu.gr/course/autodesk-revit-architecture/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Autodesk', 'Revit MEP', 'http://www.infotech.edu.gr/course/autodesk-revit-mep/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Chaosgroup', 'V-Ray for 3ds Max', 'http://www.infotech.edu.gr/course/v-ray-for-3ds-max/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Adobe', 'Adobe InDesign', 'http://www.infotech.edu.gr/course/adobe-indesign/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Adobe', 'Adobe Illustrator', 'http://www.infotech.edu.gr/course/adobe-illustrator/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Adobe', 'Adobe Photoshop', 'http://www.infotech.edu.gr/course/adobe-photoshop/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Σεμινάρια McNeel', 'Rhino 6', 'http://www.infotech.edu.gr/course/rhino-5/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Σεμινάρια McNeel', 'Grasshopper', 'http://www.infotech.edu.gr/course/grasshopper/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Γενικά Σεμινάρια', 'Aρχιτεκτονικός φωτισμός', 'http://www.infotech.edu.gr/course/architectural-lighting/');
    
        Scholio::portalSocial($school1, 'facebook', 'https://www.facebook.com/infotech.CAD');
        Scholio::portalSocial($school1, 'twitter', 'https://twitter.com/cad_infotech');
        Scholio::portalSocial($school1, 'youtube', 'https://www.youtube.com/channel/UCx-ZUncRW149HejCYicdkaQ');
        Scholio::portalSocial($school1, 'linkedin', 'https://www.linkedin.com/company/infotech-atc/');

        /*===============  Λυδια ================*/
        // $school1 = factory(App\Models\School::class)->create([
        //     'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
        //     'address' => '',
        //     'city' => '',
        //     'phone' => 0,
        //     'type_id' => 2,
        //     'website' => '',
        //     'about' => '',
        //     'approved' => 1,
        //     'background' => $background,
        // ]);

        // new Portal($school1, 5, 'iek');

        // Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', '', '');
        // Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', '', '');
        // Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', '', '');
        // Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', '', '');
        // Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', '', '');
        // Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', '', '');
        // Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', '', '');
        // Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Παιδαγωγικά', '', '');
        // Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ηχοληψία & Μουσική Τεχνολογία', '', '');
        // Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', '', '');
        // Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', '', '');
        // Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', '', '');

        // Scholio::portalSocial($school1, 'facebook', '');
        // Scholio::portalSocial($school1, 'instagram', '');
        // Scholio::portalSocial($school1, 'twitter', '');
        // Scholio::portalSocial($school1, 'youtube', '');
        // Scholio::portalSocial($school1, 'google', '');
        // Scholio::portalSocial($school1, 'blogger', '');

    }
}
