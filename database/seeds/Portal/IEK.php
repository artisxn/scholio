<?php

use Illuminate\Database\Seeder;
use Portal\Portal;
use App\Scholio\Scholio;

class IEK extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $background = Portal::createImages('/upload/school/univ.png')->id;

        /*===============  1 AKMH ΘΕΣΣΑΛΟΝΙΚΗ================*/
        $school1 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'ΑΚΜΗ', 'email' => 'infoThess@iek-akmi.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'akmiThess'])->id,
            'address' => 'Τσιμισκή 14',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310260200,
            'type_id' => 2,
            'website' => 'iek-akmi-Thess.edu.gr',
            'about' => '<h4><em>Αγαπητοί νέοι και νέες ,</em></h4>
<p style="text-align: justify;">Στα 40 και πλέον χρόνια της ηγετικής πορείας μας στο χώρο της εκπαίδευσης μένουμε πιστοί στο όραμά μας για μια πρωτοπόρα επαγγελματική εκπαίδευση, βασισμένη στα Διεθνή Πρότυπα.<br />Στο ΙΕΚ ΑΚΜΗ παρέχουμε υψηλής ποιότητας εκπαίδευση που διασφαλίζεται από συνεχείς επενδύσεις σε υψηλού επιπέδου συνεργασίες, οι οποίες λειτουργούν ως συνδετικός κρίκος μεταξύ του εκπαιδευτικού και επαγγελματικού περιβάλλοντος, σε νέες τεχνολογίες και σε κορυφαίες υλικοτεχνικές και κτιριακές υποδομές.<br />Στο ΙΕΚ ΑΚΜΗ πρωτοπορούμε με τη δημιουργία νέων ειδικοτήτων υψηλής απορρόφησης  από την αγορά εργασίας, αλλά και τη διαρκή έρευνα αγοράς για προγράμματα εξειδίκευσης και πιστοποιήσεις υψηλού επιπέδου που θα σας ξεχωρίσουν στον επαγγελματικό στίβο.<br />Στην ιστοσελίδα μας μπορείτε να βρείτε γενικές πληροφορίες για τη φοίτησή σας σε κάθε μία από τις ειδικότητες που παρέχονται, οι οποίες είναι ομαδοποιημένες σε 12 τομείς σπουδών.</p>
<p style="text-align: justify;">Όλοι μας υπηρετούμε το δικαίωμά σας να κάνετε τα όνειρά σας πραγματικότητα και γι’ αυτό είμαστε εδώ, έτοιμοι να σας καλωσορίσουμε στη μεγάλη οικογένειά μας και να σας διδάξουμε τον τρόπο με τον οποίο θα ενταχθείτε κι εσείς στους καταξιωμένους επαγγελματίες του μέλλοντος!</p>
<p><img style="float: right;" src="http://www.iek-akmi.edu.gr/images/rodopoulou-signature.png" alt="rodopoulou signature" /></p>
<p style="text-align: right;"> </p>
<p style="text-align: right;"> </p>
<p style="text-align: right;"> </p>
<p style="text-align: right;"> <strong>Καλλιόπη Ροδοπούλου</strong><br />Διευθύνουσα Σύμβουλος</p>',
            'approved' => 1,
            'background' => $background,
        ]);

        new Portal($school1, 5, 'iek');

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διοίκησης & Οικονομίας', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/dioikisi-epixeiriseon');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Μηχανογραφημένου Λογιστηρίου - Φοροτεχνικού Γραφείου', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/mixanografimeni-logistiki');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Εμπορίας, Διαφήμισης & Προώθησης Προϊόντων (Marketing)', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/marketing');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διοίκησης & Οικονομίας στον τομέα της Ναυτιλίας', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/naytiliaka');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Γραμματέας Ανώτερων και Ανώτατων Στελεχών', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/grammateas-dieythynsis');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Ασφαλείας Προσώπων & Υποδομών(Security)', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/security');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Διοικητικό Στέλεχος Πολιτισμού', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1127-dioikitiko-stelexos-politismou');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Υπηρεσιών Εφοδιαστικής Αλυσίδας', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/logistics');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Στατιστικών Ερευνών και Δημοσκοπήσεων', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/ereyna-agoras-dimoskopiseis');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Διοικητικό Στέλεχος Υγείας', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1128-dioikitiko-stelexos-ygeias');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Διοικητικό Στέλεχος Μεταφορών', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1129-dioikitiko-stelexos-metaforwn');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διαχείρισης Ακίνητης Περιουσίας', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1130-stelexos-diaxeirisis-akinitwn');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Φύλακας Μουσείων & Αρχαιολογικών Χώρων', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1132-fylakas-moyseiwn');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διεθνούς Εμπορίου', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1133-stelexos-diethnous-emporiou');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Τραπεζικά', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1131-trapezika');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Κοστολόγησης', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1157-stelexos-kostologisis');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Φυσικοθεραπείας', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/fysikotherapeia');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Νοσηλευτικής', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/nosileytiki');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Στέλεχος Διατροφής & Διαιτολογίας', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/diaititiki');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Ιατρικών Εργαστηρίων', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/b-mikrobiologoy');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Φαρμακείου - Τεχνικός Φαρμάκων/Καλλυντικών & Παρεμφερών Προϊόντων', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/b-farmakeioy');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Ραδιολόγου - Ακτινολόγου', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/b-aktinologoy');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Ακτινολόγου', 'https://iek-akmi.edu.gr/index.php/tomeis/39-spoudes/epaggelmata-ygeias/171-voithoc-aktinologou');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Μικροβιολόγου', 'https://iek-akmi.edu.gr/index.php/tomeis/39-spoudes/epaggelmata-ygeias/1117-voithos-mikrobiologou');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Στέλεχος Διατροφολογίας & Διαιτολογίας', 'https://iek-akmi.edu.gr/index.php/tomeis/39-spoudes/epaggelmata-ygeias/1118-stelexos-diatrofologias-diaitologias');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Εργοθεραπείας', 'https://iek-akmi.edu.gr/index.php/tomeis/39-spoudes/epaggelmata-ygeias/1119-voithoc-ergotherapias');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Μαιευτικής', 'https://iek-akmi.edu.gr/index.php/tomeis/39-spoudes/epaggelmata-ygeias/1121-voithos-maieftikis');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Τέχνη Σκηνοθεσίας', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/skinothesia');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Χειριστής Ηλεκτρονικής Συνάρμοσης Εικόνας (Monter)', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/montaz');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Εικονοληψία', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/eikonolipsia');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Εφαρμομένες Τέχνες Χορού', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/xoros');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Τέχνη Σεναριογραφίας', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/senariografia');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Βοηθός Σκηνογράφου - Ενδυματολόγου', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/skinografos-endymatologos');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Υποκριτική Τέχνη Θεάτρου - Κινηματογράφου', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/ypokritiki');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Μετάφραση, Διόρθωση & Επιμέλεια κειμένων', 'https://iek-akmi.edu.gr/index.php/tomeis/124-spoudes/optikoakoustika-texnes/1134-epimeleia-keimenwn');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Τέχνη Δημιουργικής Γραφής', 'https://iek-akmi.edu.gr/index.php/tomeis/124-spoudes/optikoakoustika-texnes/1135-texni-dimiourgikis-grafis');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Μηχανοτρονικής', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/mixanikos-aytokiniton');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Ηλεκτρολόγος Εσωτερικών Εγκαταστάσεων', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/ilektrologos');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Εγκαταστάσεων Ψύξης Αερισμού & Κλιματισμού', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/psyktikos');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Εκπαιδευτής Υποψηφίων Οδηγών Αυτοκινήτων & Μοτοσικλετών', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/ekpaideytis-odigon');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Μηχανικός Θερμικών Εγκαταστάσεων & Μηχανικός Τεχνολογίας Πετρελαίου και Φυσικού Αερίου', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/texnikos-aerion-kaysimon');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Αυτοματισμών', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/texnikos-automatismon');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Ιατρικών Οργάνων', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/texnikos-iatrikwn-organwn');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Εγκασταστάσεων Ανανεώσιμων Πηγών Ενέργειας', 'https://iek-akmi.edu.gr/index.php/tomeis/117-spoudes/texnika-epaggelmata/1124-texnikos-ananewsimwn-phgwn-energeias');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Κυβερνήτης Σκαφών Αναψυχής', 'https://iek-akmi.edu.gr/index.php/tomeis/117-spoudes/texnika-epaggelmata/1125-kyvernitis-skafwn-anapsyxis');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Τεχνικός Μαγειρικής Τέχνης- Αρχιμάγειρας (Chef)', 'https://iek-akmi.edu.gr/index.php/tomeis/toyristika-episitistika/sef');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Τεχνικός Αρτοποιός - Ζαχαροπλαστικής', 'https://iek-akmi.edu.gr/index.php/tomeis/toyristika-episitistika/artopoiia-zaxaroplastiki');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Τεχνικός Τουριστικών Mονάδων και Επιχειρήσεων Φιλοξενίας', 'https://iek-akmi.edu.gr/index.php/tomeis/toyristika-episitistika/ksenodoxeiaka');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Στέλεχος Διοίκησης και Οικονομίας στον τομέα του Τουρισμού', 'https://iek-akmi.edu.gr/index.php/tomeis/toyristika-episitistika/ypallilos-toyristikoy-grafeioy');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', 'Τεχνικός Τεχνολογίας Ενδύματος & Υποδήματος - Σχεδιαστής Μόδας', 'https://iek-akmi.edu.gr/index.php/tomeis/moda-omorfia/fashion-designer');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', 'Make Up Artist', 'https://iek-akmi.edu.gr/index.php/tomeis/moda-omorfia/epaggelmatiko-makigiaz');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', 'Τεχνικός Κομμωτικής Τέχνης', 'https://iek-akmi.edu.gr/index.php/tomeis/moda-omorfia/kommotiki');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', 'Τεχνικός Αισθητικής Τέχνης & Μακιγιάζ', 'https://iek-akmi.edu.gr/index.php/tomeis/aisthitiki-spa/aisthitiki');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', 'Τεχνικός Αισθητικός Ποδολογίας Καλλωπισμού Νυχιών & Ονυχοπλαστικής ', 'https://iek-akmi.edu.gr/index.php/tomeis/aisthitiki-spa/aisthitikos-podologias-kallopismoy-nyxion');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', 'Στέλεχος Θαλασσοθεραπείας - Λουτροθεραπείας - Spa', 'https://iek-akmi.edu.gr/index.php/tomeis/aisthitiki-spa/thalassotherapeia-spa');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Παιδαγωγικά', 'Βοηθός Βρεφονηπιοκόμων', 'https://iek-akmi.edu.gr/index.php/tomeis/paidagogika/paidagogika');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ηχοληψία & Μουσική Τεχνολογία', 'Ηχοληψία', 'https://iek-akmi.edu.gr/index.php/tomeis/ixolipsia-moysiki/ixolipsia');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ηχοληψία & Μουσική Τεχνολογία', 'Μουσική Τεχνολογία', 'https://iek-akmi.edu.gr/index.php/tomeis/ixolipsia-moysiki/moysiki-texnologia');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ηχοληψία & Μουσική Τεχνολογία', 'Ραδιοφωνικός Παραγωγός', 'https://iek-akmi.edu.gr/index.php/tomeis/ixolipsia-moysiki/radiofonikos-paragogos');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', 'Τεχνικός Εφαρμογών Πληροφορικής (Πολυμέσα/Web designer-Developer/ Video games)', 'https://iek-akmi.edu.gr/index.php/tomeis/iy-nees-texnologies/video-games');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', 'Tεχνικός Δικτύων & Τηλεπικοινωνιών', 'https://iek-akmi.edu.gr/index.php/tomeis/iy-nees-texnologies/texnikos-diktyon');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', 'Τεχνικός Η/Υ', 'https://iek-akmi.edu.gr/index.php/tomeis/iy-nees-texnologies/texnikos-hy');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', 'Τεχνικός Λογισμικού Η/Υ', 'https://iek-akmi.edu.gr/index.php/tomeis/iy-nees-texnologies/programmatistis');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Τέχνη Σκίτσου - Εικονογραφίας - Γραφικών', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/eikonografos-skitsografos');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Γραφιστική Εντύπου & Ηλεκτρονικών Μέσων', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/grafistas');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Τεχνικός Κινούμενης Εικόνας (3D Animation)', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/3d-animation');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Εσωτερική Αρχιτεκτονική Διακόσμηση & Σχεδιασμός Αντικειμένων', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/diakosmitis');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Τέχνη Φωτογραφίας', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/fotografos');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Ζωγραφική Τέχνη', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/zwgrafiki');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Σχεδιαστής Δομικών Έργων και Γεωπληροφορικής', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/texnikos-domikon-ergon');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Τεχνικός Τεχνολογικών Εφαρμογών & Εγκαταστάσεων', 'https://iek-akmi.edu.gr/index.php/tomeis/109-spoudes/efarmosmenes-texnes/1126-texnikos-texnologikwn-efarmogwn');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', 'Sports Management', 'https://iek-akmi.edu.gr/index.php/tomeis/mme-athlitismos/sports-management');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', 'Δημοσιογραφία, Συντακτών & Ρεπόρτερ', 'https://iek-akmi.edu.gr/index.php/tomeis/mme-athlitismos/dimosiografos');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', 'Αθλητική Δημοσιογραφία', 'https://iek-akmi.edu.gr/index.php/tomeis/mme-athlitismos/athlitikos-dimosiografos');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', 'Προπονητής Αθλημάτων', 'https://iek-akmi.edu.gr/index.php/tomeis/mme-athlitismos/proponitis');
        
        /*===============  2 AKMH ΑΘΗΝΑ================*/
        $school2 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'ΑΚΜΗ', 'email' => 'info@iek-akmi.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'akmi'])->id,
            'address' => 'Κοδριγκτώνος 16',
            'city' => 'Αθήνα',
            'phone' => 2108224074,
            'type_id' => 2,
            'website' => 'iek-akmi.edu.gr',
            'about' => '<h4><em>Αγαπητοί νέοι και νέες ,</em></h4>
<p style="text-align: justify;">Στα 40 και πλέον χρόνια της ηγετικής πορείας μας στο χώρο της εκπαίδευσης μένουμε πιστοί στο όραμά μας για μια πρωτοπόρα επαγγελματική εκπαίδευση, βασισμένη στα Διεθνή Πρότυπα.<br />Στο ΙΕΚ ΑΚΜΗ παρέχουμε υψηλής ποιότητας εκπαίδευση που διασφαλίζεται από συνεχείς επενδύσεις σε υψηλού επιπέδου συνεργασίες, οι οποίες λειτουργούν ως συνδετικός κρίκος μεταξύ του εκπαιδευτικού και επαγγελματικού περιβάλλοντος, σε νέες τεχνολογίες και σε κορυφαίες υλικοτεχνικές και κτιριακές υποδομές.<br />Στο ΙΕΚ ΑΚΜΗ πρωτοπορούμε με τη δημιουργία νέων ειδικοτήτων υψηλής απορρόφησης  από την αγορά εργασίας, αλλά και τη διαρκή έρευνα αγοράς για προγράμματα εξειδίκευσης και πιστοποιήσεις υψηλού επιπέδου που θα σας ξεχωρίσουν στον επαγγελματικό στίβο.<br />Στην ιστοσελίδα μας μπορείτε να βρείτε γενικές πληροφορίες για τη φοίτησή σας σε κάθε μία από τις ειδικότητες που παρέχονται, οι οποίες είναι ομαδοποιημένες σε 12 τομείς σπουδών.</p>
<p style="text-align: justify;">Όλοι μας υπηρετούμε το δικαίωμά σας να κάνετε τα όνειρά σας πραγματικότητα και γι’ αυτό είμαστε εδώ, έτοιμοι να σας καλωσορίσουμε στη μεγάλη οικογένειά μας και να σας διδάξουμε τον τρόπο με τον οποίο θα ενταχθείτε κι εσείς στους καταξιωμένους επαγγελματίες του μέλλοντος!</p>
<p><img style="float: right;" src="http://www.iek-akmi.edu.gr/images/rodopoulou-signature.png" alt="rodopoulou signature" /></p>
<p style="text-align: right;"> </p>
<p style="text-align: right;"> </p>
<p style="text-align: right;"> </p>
<p style="text-align: right;"> <strong>Καλλιόπη Ροδοπούλου</strong><br />Διευθύνουσα Σύμβουλος</p>',
            'approved' => 1,
            'background' => $background,
        ]);

        new Portal($school2, 5, 'iek');

        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διοίκησης & Οικονομίας', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/dioikisi-epixeiriseon');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Μηχανογραφημένου Λογιστηρίου - Φοροτεχνικού Γραφείου', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/mixanografimeni-logistiki');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Εμπορίας, Διαφήμισης & Προώθησης Προϊόντων (Marketing)', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/marketing');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διοίκησης & Οικονομίας στον τομέα της Ναυτιλίας', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/naytiliaka');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Γραμματέας Ανώτερων και Ανώτατων Στελεχών', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/grammateas-dieythynsis');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Ασφαλείας Προσώπων & Υποδομών(Security)', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/security');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Διοικητικό Στέλεχος Πολιτισμού', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1127-dioikitiko-stelexos-politismou');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Υπηρεσιών Εφοδιαστικής Αλυσίδας', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/logistics');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Στατιστικών Ερευνών και Δημοσκοπήσεων', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/ereyna-agoras-dimoskopiseis');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Διοικητικό Στέλεχος Υγείας', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1128-dioikitiko-stelexos-ygeias');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Διοικητικό Στέλεχος Μεταφορών', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1129-dioikitiko-stelexos-metaforwn');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διαχείρισης Ακίνητης Περιουσίας', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1130-stelexos-diaxeirisis-akinitwn');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Φύλακας Μουσείων & Αρχαιολογικών Χώρων', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1132-fylakas-moyseiwn');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διεθνούς Εμπορίου', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1133-stelexos-diethnous-emporiou');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Τραπεζικά', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1131-trapezika');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Κοστολόγησης', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1157-stelexos-kostologisis');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Φυσικοθεραπείας', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/fysikotherapeia');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Νοσηλευτικής', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/nosileytiki');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Στέλεχος Διατροφής & Διαιτολογίας', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/diaititiki');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Ιατρικών Εργαστηρίων', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/b-mikrobiologoy');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Φαρμακείου - Τεχνικός Φαρμάκων/Καλλυντικών & Παρεμφερών Προϊόντων', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/b-farmakeioy');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Ραδιολόγου - Ακτινολόγου', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/b-aktinologoy');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Ακτινολόγου', 'https://iek-akmi.edu.gr/index.php/tomeis/39-spoudes/epaggelmata-ygeias/171-voithoc-aktinologou');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Μικροβιολόγου', 'https://iek-akmi.edu.gr/index.php/tomeis/39-spoudes/epaggelmata-ygeias/1117-voithos-mikrobiologou');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Στέλεχος Διατροφολογίας & Διαιτολογίας', 'https://iek-akmi.edu.gr/index.php/tomeis/39-spoudes/epaggelmata-ygeias/1118-stelexos-diatrofologias-diaitologias');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Εργοθεραπείας', 'https://iek-akmi.edu.gr/index.php/tomeis/39-spoudes/epaggelmata-ygeias/1119-voithoc-ergotherapias');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Μαιευτικής', 'https://iek-akmi.edu.gr/index.php/tomeis/39-spoudes/epaggelmata-ygeias/1121-voithos-maieftikis');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Τέχνη Σκηνοθεσίας', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/skinothesia');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Χειριστής Ηλεκτρονικής Συνάρμοσης Εικόνας (Monter)', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/montaz');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Εικονοληψία', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/eikonolipsia');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Εφαρμομένες Τέχνες Χορού', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/xoros');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Τέχνη Σεναριογραφίας', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/senariografia');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Βοηθός Σκηνογράφου - Ενδυματολόγου', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/skinografos-endymatologos');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Υποκριτική Τέχνη Θεάτρου - Κινηματογράφου', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/ypokritiki');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Μετάφραση, Διόρθωση & Επιμέλεια κειμένων', 'https://iek-akmi.edu.gr/index.php/tomeis/124-spoudes/optikoakoustika-texnes/1134-epimeleia-keimenwn');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Τέχνη Δημιουργικής Γραφής', 'https://iek-akmi.edu.gr/index.php/tomeis/124-spoudes/optikoakoustika-texnes/1135-texni-dimiourgikis-grafis');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Μηχανοτρονικής', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/mixanikos-aytokiniton');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Ηλεκτρολόγος Εσωτερικών Εγκαταστάσεων', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/ilektrologos');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Εγκαταστάσεων Ψύξης Αερισμού & Κλιματισμού', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/psyktikos');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Εκπαιδευτής Υποψηφίων Οδηγών Αυτοκινήτων & Μοτοσικλετών', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/ekpaideytis-odigon');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Μηχανικός Θερμικών Εγκαταστάσεων & Μηχανικός Τεχνολογίας Πετρελαίου και Φυσικού Αερίου', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/texnikos-aerion-kaysimon');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Αυτοματισμών', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/texnikos-automatismon');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Ιατρικών Οργάνων', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/texnikos-iatrikwn-organwn');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Εγκασταστάσεων Ανανεώσιμων Πηγών Ενέργειας', 'https://iek-akmi.edu.gr/index.php/tomeis/117-spoudes/texnika-epaggelmata/1124-texnikos-ananewsimwn-phgwn-energeias');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Κυβερνήτης Σκαφών Αναψυχής', 'https://iek-akmi.edu.gr/index.php/tomeis/117-spoudes/texnika-epaggelmata/1125-kyvernitis-skafwn-anapsyxis');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Τεχνικός Μαγειρικής Τέχνης- Αρχιμάγειρας (Chef)', 'https://iek-akmi.edu.gr/index.php/tomeis/toyristika-episitistika/sef');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Τεχνικός Αρτοποιός - Ζαχαροπλαστικής', 'https://iek-akmi.edu.gr/index.php/tomeis/toyristika-episitistika/artopoiia-zaxaroplastiki');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Τεχνικός Τουριστικών Mονάδων και Επιχειρήσεων Φιλοξενίας', 'https://iek-akmi.edu.gr/index.php/tomeis/toyristika-episitistika/ksenodoxeiaka');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Στέλεχος Διοίκησης και Οικονομίας στον τομέα του Τουρισμού', 'https://iek-akmi.edu.gr/index.php/tomeis/toyristika-episitistika/ypallilos-toyristikoy-grafeioy');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', 'Τεχνικός Τεχνολογίας Ενδύματος & Υποδήματος - Σχεδιαστής Μόδας', 'https://iek-akmi.edu.gr/index.php/tomeis/moda-omorfia/fashion-designer');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', 'Make Up Artist', 'https://iek-akmi.edu.gr/index.php/tomeis/moda-omorfia/epaggelmatiko-makigiaz');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', 'Τεχνικός Κομμωτικής Τέχνης', 'https://iek-akmi.edu.gr/index.php/tomeis/moda-omorfia/kommotiki');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', 'Τεχνικός Αισθητικής Τέχνης & Μακιγιάζ', 'https://iek-akmi.edu.gr/index.php/tomeis/aisthitiki-spa/aisthitiki');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', 'Τεχνικός Αισθητικός Ποδολογίας Καλλωπισμού Νυχιών & Ονυχοπλαστικής ', 'https://iek-akmi.edu.gr/index.php/tomeis/aisthitiki-spa/aisthitikos-podologias-kallopismoy-nyxion');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', 'Στέλεχος Θαλασσοθεραπείας - Λουτροθεραπείας - Spa', 'https://iek-akmi.edu.gr/index.php/tomeis/aisthitiki-spa/thalassotherapeia-spa');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Παιδαγωγικά', 'Βοηθός Βρεφονηπιοκόμων', 'https://iek-akmi.edu.gr/index.php/tomeis/paidagogika/paidagogika');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Ηχοληψία & Μουσική Τεχνολογία', 'Ηχοληψία', 'https://iek-akmi.edu.gr/index.php/tomeis/ixolipsia-moysiki/ixolipsia');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Ηχοληψία & Μουσική Τεχνολογία', 'Μουσική Τεχνολογία', 'https://iek-akmi.edu.gr/index.php/tomeis/ixolipsia-moysiki/moysiki-texnologia');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Ηχοληψία & Μουσική Τεχνολογία', 'Ραδιοφωνικός Παραγωγός', 'https://iek-akmi.edu.gr/index.php/tomeis/ixolipsia-moysiki/radiofonikos-paragogos');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', 'Τεχνικός Εφαρμογών Πληροφορικής (Πολυμέσα/Web designer-Developer/ Video games)', 'https://iek-akmi.edu.gr/index.php/tomeis/iy-nees-texnologies/video-games');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', 'Tεχνικός Δικτύων & Τηλεπικοινωνιών', 'https://iek-akmi.edu.gr/index.php/tomeis/iy-nees-texnologies/texnikos-diktyon');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', 'Τεχνικός Η/Υ', 'https://iek-akmi.edu.gr/index.php/tomeis/iy-nees-texnologies/texnikos-hy');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', 'Τεχνικός Λογισμικού Η/Υ', 'https://iek-akmi.edu.gr/index.php/tomeis/iy-nees-texnologies/programmatistis');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Τέχνη Σκίτσου - Εικονογραφίας - Γραφικών', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/eikonografos-skitsografos');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Γραφιστική Εντύπου & Ηλεκτρονικών Μέσων', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/grafistas');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Τεχνικός Κινούμενης Εικόνας (3D Animation)', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/3d-animation');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Εσωτερική Αρχιτεκτονική Διακόσμηση & Σχεδιασμός Αντικειμένων', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/diakosmitis');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Τέχνη Φωτογραφίας', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/fotografos');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Ζωγραφική Τέχνη', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/zwgrafiki');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Σχεδιαστής Δομικών Έργων και Γεωπληροφορικής', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/texnikos-domikon-ergon');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Τεχνικός Τεχνολογικών Εφαρμογών & Εγκαταστάσεων', 'https://iek-akmi.edu.gr/index.php/tomeis/109-spoudes/efarmosmenes-texnes/1126-texnikos-texnologikwn-efarmogwn');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', 'Sports Management', 'https://iek-akmi.edu.gr/index.php/tomeis/mme-athlitismos/sports-management');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', 'Δημοσιογραφία, Συντακτών & Ρεπόρτερ', 'https://iek-akmi.edu.gr/index.php/tomeis/mme-athlitismos/dimosiografos');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', 'Αθλητική Δημοσιογραφία', 'https://iek-akmi.edu.gr/index.php/tomeis/mme-athlitismos/athlitikos-dimosiografos');
        Scholio::portalStudy($school2, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', 'Προπονητής Αθλημάτων', 'https://iek-akmi.edu.gr/index.php/tomeis/mme-athlitismos/proponitis');

        /*===============  3 AKMH ΗΡΑΚΛΕΙΟ================*/
        $school3 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'ΑΚΜΗ Ηράκλειο', 'email' => 'infoHer@iek-akmi.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'akmiHer'])->id,
            'address' => 'Θεοτοκοπούλου & Κορωναίου',
            'city' => 'Ηράκλειο Κρήτης',
            'phone' => 2810300900,
            'type_id' => 2,
            'website' => 'iek-akmi_her.edu.gr',
            'about' => '<h4><em>Αγαπητοί νέοι και νέες ,</em></h4>
<p style="text-align: justify;">Στα 40 και πλέον χρόνια της ηγετικής πορείας μας στο χώρο της εκπαίδευσης μένουμε πιστοί στο όραμά μας για μια πρωτοπόρα επαγγελματική εκπαίδευση, βασισμένη στα Διεθνή Πρότυπα.<br />Στο ΙΕΚ ΑΚΜΗ παρέχουμε υψηλής ποιότητας εκπαίδευση που διασφαλίζεται από συνεχείς επενδύσεις σε υψηλού επιπέδου συνεργασίες, οι οποίες λειτουργούν ως συνδετικός κρίκος μεταξύ του εκπαιδευτικού και επαγγελματικού περιβάλλοντος, σε νέες τεχνολογίες και σε κορυφαίες υλικοτεχνικές και κτιριακές υποδομές.<br />Στο ΙΕΚ ΑΚΜΗ πρωτοπορούμε με τη δημιουργία νέων ειδικοτήτων υψηλής απορρόφησης  από την αγορά εργασίας, αλλά και τη διαρκή έρευνα αγοράς για προγράμματα εξειδίκευσης και πιστοποιήσεις υψηλού επιπέδου που θα σας ξεχωρίσουν στον επαγγελματικό στίβο.<br />Στην ιστοσελίδα μας μπορείτε να βρείτε γενικές πληροφορίες για τη φοίτησή σας σε κάθε μία από τις ειδικότητες που παρέχονται, οι οποίες είναι ομαδοποιημένες σε 12 τομείς σπουδών.</p>
<p style="text-align: justify;">Όλοι μας υπηρετούμε το δικαίωμά σας να κάνετε τα όνειρά σας πραγματικότητα και γι’ αυτό είμαστε εδώ, έτοιμοι να σας καλωσορίσουμε στη μεγάλη οικογένειά μας και να σας διδάξουμε τον τρόπο με τον οποίο θα ενταχθείτε κι εσείς στους καταξιωμένους επαγγελματίες του μέλλοντος!</p>
<p><img style="float: right;" src="http://www.iek-akmi.edu.gr/images/rodopoulou-signature.png" alt="rodopoulou signature" /></p>
<p style="text-align: right;"> </p>
<p style="text-align: right;"> </p>
<p style="text-align: right;"> </p>
<p style="text-align: right;"> <strong>Καλλιόπη Ροδοπούλου</strong><br />Διευθύνουσα Σύμβουλος</p>',
            'approved' => 1,
            'background' => $background,
        ]);

        new Portal($school3, 5, 'iek');

        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διοίκησης & Οικονομίας', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/dioikisi-epixeiriseon');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Μηχανογραφημένου Λογιστηρίου - Φοροτεχνικού Γραφείου', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/mixanografimeni-logistiki');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Εμπορίας, Διαφήμισης & Προώθησης Προϊόντων (Marketing)', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/marketing');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διοίκησης & Οικονομίας στον τομέα της Ναυτιλίας', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/naytiliaka');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Γραμματέας Ανώτερων και Ανώτατων Στελεχών', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/grammateas-dieythynsis');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Ασφαλείας Προσώπων & Υποδομών(Security)', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/security');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Διοικητικό Στέλεχος Πολιτισμού', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1127-dioikitiko-stelexos-politismou');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Υπηρεσιών Εφοδιαστικής Αλυσίδας', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/logistics');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Στατιστικών Ερευνών και Δημοσκοπήσεων', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/ereyna-agoras-dimoskopiseis');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Διοικητικό Στέλεχος Υγείας', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1128-dioikitiko-stelexos-ygeias');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Διοικητικό Στέλεχος Μεταφορών', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1129-dioikitiko-stelexos-metaforwn');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διαχείρισης Ακίνητης Περιουσίας', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1130-stelexos-diaxeirisis-akinitwn');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Φύλακας Μουσείων & Αρχαιολογικών Χώρων', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1132-fylakas-moyseiwn');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διεθνούς Εμπορίου', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1133-stelexos-diethnous-emporiou');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Τραπεζικά', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1131-trapezika');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Κοστολόγησης', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1157-stelexos-kostologisis');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Φυσικοθεραπείας', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/fysikotherapeia');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Στέλεχος Διατροφής & Διαιτολογίας', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/diaititiki');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Ιατρικών Εργαστηρίων', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/b-mikrobiologoy');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Φαρμακείου - Τεχνικός Φαρμάκων/Καλλυντικών & Παρεμφερών Προϊόντων', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/b-farmakeioy');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Ραδιολόγου - Ακτινολόγου', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/b-aktinologoy');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Ακτινολόγου', 'https://iek-akmi.edu.gr/index.php/tomeis/39-spoudes/epaggelmata-ygeias/171-voithoc-aktinologou');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Μικροβιολόγου', 'https://iek-akmi.edu.gr/index.php/tomeis/39-spoudes/epaggelmata-ygeias/1117-voithos-mikrobiologou');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Στέλεχος Διατροφολογίας & Διαιτολογίας', 'https://iek-akmi.edu.gr/index.php/tomeis/39-spoudes/epaggelmata-ygeias/1118-stelexos-diatrofologias-diaitologias');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Εργοθεραπείας', 'https://iek-akmi.edu.gr/index.php/tomeis/39-spoudes/epaggelmata-ygeias/1119-voithoc-ergotherapias');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Μαιευτικής', 'https://iek-akmi.edu.gr/index.php/tomeis/39-spoudes/epaggelmata-ygeias/1121-voithos-maieftikis');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Νοσηλευτικής', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/nosileytiki');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Τέχνη Σκηνοθεσίας', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/skinothesia');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Χειριστής Ηλεκτρονικής Συνάρμοσης Εικόνας (Monter)', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/montaz');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Εικονοληψία', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/eikonolipsia');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Εφαρμομένες Τέχνες Χορού', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/xoros');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Τέχνη Σεναριογραφίας', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/senariografia');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Βοηθός Σκηνογράφου - Ενδυματολόγου', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/skinografos-endymatologos');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Υποκριτική Τέχνη Θεάτρου - Κινηματογράφου', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/ypokritiki');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Μετάφραση, Διόρθωση & Επιμέλεια κειμένων', 'https://iek-akmi.edu.gr/index.php/tomeis/124-spoudes/optikoakoustika-texnes/1134-epimeleia-keimenwn');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Τέχνη Δημιουργικής Γραφής', 'https://iek-akmi.edu.gr/index.php/tomeis/124-spoudes/optikoakoustika-texnes/1135-texni-dimiourgikis-grafis');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Μηχανοτρονικής', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/mixanikos-aytokiniton');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Ηλεκτρολόγος Εσωτερικών Εγκαταστάσεων', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/ilektrologos');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Εγκαταστάσεων Ψύξης Αερισμού & Κλιματισμού', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/psyktikos');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Εκπαιδευτής Υποψηφίων Οδηγών Αυτοκινήτων & Μοτοσικλετών', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/ekpaideytis-odigon');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Μηχανικός Θερμικών Εγκαταστάσεων & Μηχανικός Τεχνολογίας Πετρελαίου και Φυσικού Αερίου', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/texnikos-aerion-kaysimon');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Αυτοματισμών', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/texnikos-automatismon');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Ιατρικών Οργάνων', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/texnikos-iatrikwn-organwn');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Εγκασταστάσεων Ανανεώσιμων Πηγών Ενέργειας', 'https://iek-akmi.edu.gr/index.php/tomeis/117-spoudes/texnika-epaggelmata/1124-texnikos-ananewsimwn-phgwn-energeias');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Κυβερνήτης Σκαφών Αναψυχής', 'https://iek-akmi.edu.gr/index.php/tomeis/117-spoudes/texnika-epaggelmata/1125-kyvernitis-skafwn-anapsyxis');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Τεχνικός Μαγειρικής Τέχνης- Αρχιμάγειρας (Chef)', 'https://iek-akmi.edu.gr/index.php/tomeis/toyristika-episitistika/sef');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Τεχνικός Αρτοποιός - Ζαχαροπλαστικής', 'https://iek-akmi.edu.gr/index.php/tomeis/toyristika-episitistika/artopoiia-zaxaroplastiki');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Τεχνικός Τουριστικών Mονάδων και Επιχειρήσεων Φιλοξενίας', 'https://iek-akmi.edu.gr/index.php/tomeis/toyristika-episitistika/ksenodoxeiaka');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Στέλεχος Διοίκησης και Οικονομίας στον τομέα του Τουρισμού', 'https://iek-akmi.edu.gr/index.php/tomeis/toyristika-episitistika/ypallilos-toyristikoy-grafeioy');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', 'Τεχνικός Τεχνολογίας Ενδύματος & Υποδήματος - Σχεδιαστής Μόδας', 'https://iek-akmi.edu.gr/index.php/tomeis/moda-omorfia/fashion-designer');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', 'Make Up Artist', 'https://iek-akmi.edu.gr/index.php/tomeis/moda-omorfia/epaggelmatiko-makigiaz');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', 'Τεχνικός Κομμωτικής Τέχνης', 'https://iek-akmi.edu.gr/index.php/tomeis/moda-omorfia/kommotiki');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', 'Τεχνικός Αισθητικής Τέχνης & Μακιγιάζ', 'https://iek-akmi.edu.gr/index.php/tomeis/aisthitiki-spa/aisthitiki');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', 'Τεχνικός Αισθητικός Ποδολογίας Καλλωπισμού Νυχιών & Ονυχοπλαστικής ', 'https://iek-akmi.edu.gr/index.php/tomeis/aisthitiki-spa/aisthitikos-podologias-kallopismoy-nyxion');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', 'Στέλεχος Θαλασσοθεραπείας - Λουτροθεραπείας - Spa', 'https://iek-akmi.edu.gr/index.php/tomeis/aisthitiki-spa/thalassotherapeia-spa');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Παιδαγωγικά', 'Βοηθός Βρεφονηπιοκόμων', 'https://iek-akmi.edu.gr/index.php/tomeis/paidagogika/paidagogika');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Ηχοληψία & Μουσική Τεχνολογία', 'Ηχοληψία', 'https://iek-akmi.edu.gr/index.php/tomeis/ixolipsia-moysiki/ixolipsia');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Ηχοληψία & Μουσική Τεχνολογία', 'Μουσική Τεχνολογία', 'https://iek-akmi.edu.gr/index.php/tomeis/ixolipsia-moysiki/moysiki-texnologia');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Ηχοληψία & Μουσική Τεχνολογία', 'Ραδιοφωνικός Παραγωγός', 'https://iek-akmi.edu.gr/index.php/tomeis/ixolipsia-moysiki/radiofonikos-paragogos');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', 'Τεχνικός Εφαρμογών Πληροφορικής (Πολυμέσα/Web designer-Developer/ Video games)', 'https://iek-akmi.edu.gr/index.php/tomeis/iy-nees-texnologies/video-games');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', 'Tεχνικός Δικτύων & Τηλεπικοινωνιών', 'https://iek-akmi.edu.gr/index.php/tomeis/iy-nees-texnologies/texnikos-diktyon');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', 'Τεχνικός Η/Υ', 'https://iek-akmi.edu.gr/index.php/tomeis/iy-nees-texnologies/texnikos-hy');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', 'Τεχνικός Λογισμικού Η/Υ', 'https://iek-akmi.edu.gr/index.php/tomeis/iy-nees-texnologies/programmatistis');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Τέχνη Σκίτσου - Εικονογραφίας - Γραφικών', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/eikonografos-skitsografos');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Γραφιστική Εντύπου & Ηλεκτρονικών Μέσων', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/grafistas');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Τεχνικός Κινούμενης Εικόνας (3D Animation)', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/3d-animation');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Εσωτερική Αρχιτεκτονική Διακόσμηση & Σχεδιασμός Αντικειμένων', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/diakosmitis');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Τέχνη Φωτογραφίας', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/fotografos');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Ζωγραφική Τέχνη', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/zwgrafiki');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Σχεδιαστής Δομικών Έργων και Γεωπληροφορικής', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/texnikos-domikon-ergon');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Τεχνικός Τεχνολογικών Εφαρμογών & Εγκαταστάσεων', 'https://iek-akmi.edu.gr/index.php/tomeis/109-spoudes/efarmosmenes-texnes/1126-texnikos-texnologikwn-efarmogwn');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', 'Sports Management', 'https://iek-akmi.edu.gr/index.php/tomeis/mme-athlitismos/sports-management');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', 'Δημοσιογραφία, Συντακτών & Ρεπόρτερ', 'https://iek-akmi.edu.gr/index.php/tomeis/mme-athlitismos/dimosiografos');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', 'Αθλητική Δημοσιογραφία', 'https://iek-akmi.edu.gr/index.php/tomeis/mme-athlitismos/athlitikos-dimosiografos');
        Scholio::portalStudy($school3, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', 'Προπονητής Αθλημάτων', 'https://iek-akmi.edu.gr/index.php/tomeis/mme-athlitismos/proponitis');
//

        /*===============  4 AKMH ΠΕΙΡΑΙΑΣ================*/
        $school4 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'ΑΚΜΗ', 'email' => 'infoPeir@iek-akmi.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'akmiPeir'])->id,
            'address' => 'Σωτήρος Διός 1, Πειραιάς',
            'city' => 'Αθήνα',
            'phone' => 2108224074,
            'type_id' => 2,
            'website' => 'iek-akmi-Peir.edu.gr',
            'about' => '<h4><em>Αγαπητοί νέοι και νέες ,</em></h4>
<p style="text-align: justify;">Στα 40 και πλέον χρόνια της ηγετικής πορείας μας στο χώρο της εκπαίδευσης μένουμε πιστοί στο όραμά μας για μια πρωτοπόρα επαγγελματική εκπαίδευση, βασισμένη στα Διεθνή Πρότυπα.<br />Στο ΙΕΚ ΑΚΜΗ παρέχουμε υψηλής ποιότητας εκπαίδευση που διασφαλίζεται από συνεχείς επενδύσεις σε υψηλού επιπέδου συνεργασίες, οι οποίες λειτουργούν ως συνδετικός κρίκος μεταξύ του εκπαιδευτικού και επαγγελματικού περιβάλλοντος, σε νέες τεχνολογίες και σε κορυφαίες υλικοτεχνικές και κτιριακές υποδομές.<br />Στο ΙΕΚ ΑΚΜΗ πρωτοπορούμε με τη δημιουργία νέων ειδικοτήτων υψηλής απορρόφησης  από την αγορά εργασίας, αλλά και τη διαρκή έρευνα αγοράς για προγράμματα εξειδίκευσης και πιστοποιήσεις υψηλού επιπέδου που θα σας ξεχωρίσουν στον επαγγελματικό στίβο.<br />Στην ιστοσελίδα μας μπορείτε να βρείτε γενικές πληροφορίες για τη φοίτησή σας σε κάθε μία από τις ειδικότητες που παρέχονται, οι οποίες είναι ομαδοποιημένες σε 12 τομείς σπουδών.</p>
<p style="text-align: justify;">Όλοι μας υπηρετούμε το δικαίωμά σας να κάνετε τα όνειρά σας πραγματικότητα και γι’ αυτό είμαστε εδώ, έτοιμοι να σας καλωσορίσουμε στη μεγάλη οικογένειά μας και να σας διδάξουμε τον τρόπο με τον οποίο θα ενταχθείτε κι εσείς στους καταξιωμένους επαγγελματίες του μέλλοντος!</p>
<p><img style="float: right;" src="http://www.iek-akmi.edu.gr/images/rodopoulou-signature.png" alt="rodopoulou signature" /></p>
<p style="text-align: right;"> </p>
<p style="text-align: right;"> </p>
<p style="text-align: right;"> </p>
<p style="text-align: right;"> <strong>Καλλιόπη Ροδοπούλου</strong><br />Διευθύνουσα Σύμβουλος</p>',
            'approved' => 1,
            'background' => $background,
        ]);

        new Portal($school4, 5, 'iek');

        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διοίκησης & Οικονομίας', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/dioikisi-epixeiriseon');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Μηχανογραφημένου Λογιστηρίου - Φοροτεχνικού Γραφείου', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/mixanografimeni-logistiki');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Εμπορίας, Διαφήμισης & Προώθησης Προϊόντων (Marketing)', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/marketing');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διοίκησης & Οικονομίας στον τομέα της Ναυτιλίας', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/naytiliaka');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Γραμματέας Ανώτερων και Ανώτατων Στελεχών', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/grammateas-dieythynsis');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Ασφαλείας Προσώπων & Υποδομών(Security)', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/security');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Διοικητικό Στέλεχος Πολιτισμού', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1127-dioikitiko-stelexos-politismou');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Υπηρεσιών Εφοδιαστικής Αλυσίδας', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/logistics');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Στατιστικών Ερευνών και Δημοσκοπήσεων', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/ereyna-agoras-dimoskopiseis');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Διοικητικό Στέλεχος Υγείας', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1128-dioikitiko-stelexos-ygeias');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Διοικητικό Στέλεχος Μεταφορών', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1129-dioikitiko-stelexos-metaforwn');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διαχείρισης Ακίνητης Περιουσίας', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1130-stelexos-diaxeirisis-akinitwn');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Φύλακας Μουσείων & Αρχαιολογικών Χώρων', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1132-fylakas-moyseiwn');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διεθνούς Εμπορίου', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1133-stelexos-diethnous-emporiou');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Τραπεζικά', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1131-trapezika');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Κοστολόγησης', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1157-stelexos-kostologisis');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Φυσικοθεραπείας', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/fysikotherapeia');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Μαιευτικής', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/maieytiki');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Νοσηλευτικής', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/nosileytiki');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Στέλεχος Διατροφής & Διαιτολογίας', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/diaititiki');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Ιατρικών Εργαστηρίων', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/b-mikrobiologoy');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Φαρμακείου - Τεχνικός Φαρμάκων/Καλλυντικών & Παρεμφερών Προϊόντων', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/b-farmakeioy');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Ραδιολόγου - Ακτινολόγου', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/b-aktinologoy');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Εργοθεραπείας', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/ergotherapeia');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Ακτινολόγου', 'https://iek-akmi.edu.gr/index.php/tomeis/39-spoudes/epaggelmata-ygeias/171-voithoc-aktinologou');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Μικροβιολόγου', 'https://iek-akmi.edu.gr/index.php/tomeis/39-spoudes/epaggelmata-ygeias/1117-voithos-mikrobiologou');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Στέλεχος Διατροφολογίας & Διαιτολογίας', 'https://iek-akmi.edu.gr/index.php/tomeis/39-spoudes/epaggelmata-ygeias/1118-stelexos-diatrofologias-diaitologias');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Τέχνη Σκηνοθεσίας', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/skinothesia');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Χειριστής Ηλεκτρονικής Συνάρμοσης Εικόνας (Monter)', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/montaz');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Εικονοληψία', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/eikonolipsia');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Εφαρμομένες Τέχνες Χορού', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/xoros');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Τέχνη Σεναριογραφίας', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/senariografia');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Βοηθός Σκηνογράφου - Ενδυματολόγου', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/skinografos-endymatologos');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Υποκριτική Τέχνη Θεάτρου - Κινηματογράφου', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/ypokritiki');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Μετάφραση, Διόρθωση & Επιμέλεια κειμένων', 'https://iek-akmi.edu.gr/index.php/tomeis/124-spoudes/optikoakoustika-texnes/1134-epimeleia-keimenwn');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Τέχνη Δημιουργικής Γραφής', 'https://iek-akmi.edu.gr/index.php/tomeis/124-spoudes/optikoakoustika-texnes/1135-texni-dimiourgikis-grafis');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Μηχανοτρονικής', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/mixanikos-aytokiniton');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Ηλεκτρολόγος Εσωτερικών Εγκαταστάσεων', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/ilektrologos');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Εγκαταστάσεων Ψύξης Αερισμού & Κλιματισμού', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/psyktikos');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Εκπαιδευτής Υποψηφίων Οδηγών Αυτοκινήτων & Μοτοσικλετών', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/ekpaideytis-odigon');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Μηχανικός Θερμικών Εγκαταστάσεων & Μηχανικός Τεχνολογίας Πετρελαίου και Φυσικού Αερίου', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/texnikos-aerion-kaysimon');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Αυτοματισμών', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/texnikos-automatismon');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Ιατρικών Οργάνων', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/texnikos-iatrikwn-organwn');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Εγκασταστάσεων Ανανεώσιμων Πηγών Ενέργειας', 'https://iek-akmi.edu.gr/index.php/tomeis/117-spoudes/texnika-epaggelmata/1124-texnikos-ananewsimwn-phgwn-energeias');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Κυβερνήτης Σκαφών Αναψυχής', 'https://iek-akmi.edu.gr/index.php/tomeis/117-spoudes/texnika-epaggelmata/1125-kyvernitis-skafwn-anapsyxis');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Τεχνικός Μαγειρικής Τέχνης- Αρχιμάγειρας (Chef)', 'https://iek-akmi.edu.gr/index.php/tomeis/toyristika-episitistika/sef');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Τεχνικός Αρτοποιός - Ζαχαροπλαστικής', 'https://iek-akmi.edu.gr/index.php/tomeis/toyristika-episitistika/artopoiia-zaxaroplastiki');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Τεχνικός Τουριστικών Mονάδων και Επιχειρήσεων Φιλοξενίας', 'https://iek-akmi.edu.gr/index.php/tomeis/toyristika-episitistika/ksenodoxeiaka');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Στέλεχος Διοίκησης και Οικονομίας στον τομέα του Τουρισμού', 'https://iek-akmi.edu.gr/index.php/tomeis/toyristika-episitistika/ypallilos-toyristikoy-grafeioy');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', 'Τεχνικός Τεχνολογίας Ενδύματος & Υποδήματος - Σχεδιαστής Μόδας', 'https://iek-akmi.edu.gr/index.php/tomeis/moda-omorfia/fashion-designer');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', 'Make Up Artist', 'https://iek-akmi.edu.gr/index.php/tomeis/moda-omorfia/epaggelmatiko-makigiaz');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', 'Τεχνικός Κομμωτικής Τέχνης', 'https://iek-akmi.edu.gr/index.php/tomeis/moda-omorfia/kommotiki');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', 'Τεχνικός Αισθητικής Τέχνης & Μακιγιάζ', 'https://iek-akmi.edu.gr/index.php/tomeis/aisthitiki-spa/aisthitiki');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', 'Τεχνικός Αισθητικός Ποδολογίας Καλλωπισμού Νυχιών & Ονυχοπλαστικής ', 'https://iek-akmi.edu.gr/index.php/tomeis/aisthitiki-spa/aisthitikos-podologias-kallopismoy-nyxion');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', 'Στέλεχος Θαλασσοθεραπείας - Λουτροθεραπείας - Spa', 'https://iek-akmi.edu.gr/index.php/tomeis/aisthitiki-spa/thalassotherapeia-spa');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Παιδαγωγικά', 'Βοηθός Βρεφονηπιοκόμων', 'https://iek-akmi.edu.gr/index.php/tomeis/paidagogika/paidagogika');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Ηχοληψία & Μουσική Τεχνολογία', 'Ηχοληψία', 'https://iek-akmi.edu.gr/index.php/tomeis/ixolipsia-moysiki/ixolipsia');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Ηχοληψία & Μουσική Τεχνολογία', 'Μουσική Τεχνολογία', 'https://iek-akmi.edu.gr/index.php/tomeis/ixolipsia-moysiki/moysiki-texnologia');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Ηχοληψία & Μουσική Τεχνολογία', 'Ραδιοφωνικός Παραγωγός', 'https://iek-akmi.edu.gr/index.php/tomeis/ixolipsia-moysiki/radiofonikos-paragogos');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', 'Τεχνικός Εφαρμογών Πληροφορικής (Πολυμέσα/Web designer-Developer/ Video games)', 'https://iek-akmi.edu.gr/index.php/tomeis/iy-nees-texnologies/video-games');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', 'Tεχνικός Δικτύων & Τηλεπικοινωνιών', 'https://iek-akmi.edu.gr/index.php/tomeis/iy-nees-texnologies/texnikos-diktyon');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', 'Τεχνικός Η/Υ', 'https://iek-akmi.edu.gr/index.php/tomeis/iy-nees-texnologies/texnikos-hy');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', 'Τεχνικός Λογισμικού Η/Υ', 'https://iek-akmi.edu.gr/index.php/tomeis/iy-nees-texnologies/programmatistis');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Τέχνη Σκίτσου - Εικονογραφίας - Γραφικών', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/eikonografos-skitsografos');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Γραφιστική Εντύπου & Ηλεκτρονικών Μέσων', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/grafistas');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Τεχνικός Κινούμενης Εικόνας (3D Animation)', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/3d-animation');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Εσωτερική Αρχιτεκτονική Διακόσμηση & Σχεδιασμός Αντικειμένων', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/diakosmitis');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Τέχνη Φωτογραφίας', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/fotografos');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Ζωγραφική Τέχνη', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/zwgrafiki');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Σχεδιαστής Δομικών Έργων και Γεωπληροφορικής', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/texnikos-domikon-ergon');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Τεχνικός Τεχνολογικών Εφαρμογών & Εγκαταστάσεων', 'https://iek-akmi.edu.gr/index.php/tomeis/109-spoudes/efarmosmenes-texnes/1126-texnikos-texnologikwn-efarmogwn');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', 'Sports Management', 'https://iek-akmi.edu.gr/index.php/tomeis/mme-athlitismos/sports-management');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', 'Δημοσιογραφία, Συντακτών & Ρεπόρτερ', 'https://iek-akmi.edu.gr/index.php/tomeis/mme-athlitismos/dimosiografos');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', 'Αθλητική Δημοσιογραφία', 'https://iek-akmi.edu.gr/index.php/tomeis/mme-athlitismos/athlitikos-dimosiografos');
        Scholio::portalStudy($school4, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', 'Προπονητής Αθλημάτων', 'https://iek-akmi.edu.gr/index.php/tomeis/mme-athlitismos/proponitis');

        /*===============  5 AKMH ΛΑΡΙΣΑ ================*/
        $school5 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'ΑΚΜΗ Λάρισα', 'email' => 'infoLar@iek-akmi.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'akmiLAr'])->id,
            'address' => '6ο χλμ Λάρισας - Νίκαιας',
            'city' => 'Λάρισα',
            'phone' => 2410660400,
            'type_id' => 2,
            'website' => 'iek-akmi-Lar.edu.gr',
            'about' => '<h4><em>Αγαπητοί νέοι και νέες ,</em></h4>
<p style="text-align: justify;">Στα 40 και πλέον χρόνια της ηγετικής πορείας μας στο χώρο της εκπαίδευσης μένουμε πιστοί στο όραμά μας για μια πρωτοπόρα επαγγελματική εκπαίδευση, βασισμένη στα Διεθνή Πρότυπα.<br />Στο ΙΕΚ ΑΚΜΗ παρέχουμε υψηλής ποιότητας εκπαίδευση που διασφαλίζεται από συνεχείς επενδύσεις σε υψηλού επιπέδου συνεργασίες, οι οποίες λειτουργούν ως συνδετικός κρίκος μεταξύ του εκπαιδευτικού και επαγγελματικού περιβάλλοντος, σε νέες τεχνολογίες και σε κορυφαίες υλικοτεχνικές και κτιριακές υποδομές.<br />Στο ΙΕΚ ΑΚΜΗ πρωτοπορούμε με τη δημιουργία νέων ειδικοτήτων υψηλής απορρόφησης  από την αγορά εργασίας, αλλά και τη διαρκή έρευνα αγοράς για προγράμματα εξειδίκευσης και πιστοποιήσεις υψηλού επιπέδου που θα σας ξεχωρίσουν στον επαγγελματικό στίβο.<br />Στην ιστοσελίδα μας μπορείτε να βρείτε γενικές πληροφορίες για τη φοίτησή σας σε κάθε μία από τις ειδικότητες που παρέχονται, οι οποίες είναι ομαδοποιημένες σε 12 τομείς σπουδών.</p>
<p style="text-align: justify;">Όλοι μας υπηρετούμε το δικαίωμά σας να κάνετε τα όνειρά σας πραγματικότητα και γι’ αυτό είμαστε εδώ, έτοιμοι να σας καλωσορίσουμε στη μεγάλη οικογένειά μας και να σας διδάξουμε τον τρόπο με τον οποίο θα ενταχθείτε κι εσείς στους καταξιωμένους επαγγελματίες του μέλλοντος!</p>
<p><img style="float: right;" src="http://www.iek-akmi.edu.gr/images/rodopoulou-signature.png" alt="rodopoulou signature" /></p>
<p style="text-align: right;"> </p>
<p style="text-align: right;"> </p>
<p style="text-align: right;"> </p>
<p style="text-align: right;"> <strong>Καλλιόπη Ροδοπούλου</strong><br />Διευθύνουσα Σύμβουλος</p>',
            'approved' => 1,
            'background' => $background,
        ]);

        new Portal($school5, 5, 'iek');

        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διοίκησης & Οικονομίας', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/dioikisi-epixeiriseon');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Μηχανογραφημένου Λογιστηρίου - Φοροτεχνικού Γραφείου', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/mixanografimeni-logistiki');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Εμπορίας, Διαφήμισης & Προώθησης Προϊόντων (Marketing)', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/marketing');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διοίκησης & Οικονομίας στον τομέα της Ναυτιλίας', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/naytiliaka');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Γραμματέας Ανώτερων και Ανώτατων Στελεχών', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/grammateas-dieythynsis');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Ασφαλείας Προσώπων & Υποδομών(Security)', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/security');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Διοικητικό Στέλεχος Πολιτισμού', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1127-dioikitiko-stelexos-politismou');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Υπηρεσιών Εφοδιαστικής Αλυσίδας', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/logistics');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Στατιστικών Ερευνών και Δημοσκοπήσεων', 'https://iek-akmi.edu.gr/index.php/tomeis/oikonomia-dioikisi/ereyna-agoras-dimoskopiseis');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Διοικητικό Στέλεχος Υγείας', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1128-dioikitiko-stelexos-ygeias');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Διοικητικό Στέλεχος Μεταφορών', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1129-dioikitiko-stelexos-metaforwn');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διαχείρισης Ακίνητης Περιουσίας', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1130-stelexos-diaxeirisis-akinitwn');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Φύλακας Μουσείων & Αρχαιολογικών Χώρων', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1132-fylakas-moyseiwn');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διεθνούς Εμπορίου', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1133-stelexos-diethnous-emporiou');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Τραπεζικά', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1131-trapezika');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Κοστολόγησης', 'https://iek-akmi.edu.gr/index.php/tomeis/53-spoudes/oikonomia-dioikisi/1157-stelexos-kostologisis');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Φυσικοθεραπείας', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/fysikotherapeia');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Μαιευτικής', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/maieytiki');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Νοσηλευτικής', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/nosileytiki');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Στέλεχος Διατροφής & Διαιτολογίας', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/diaititiki');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Ιατρικών Εργαστηρίων', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/b-mikrobiologoy');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Φαρμακείου - Τεχνικός Φαρμάκων/Καλλυντικών & Παρεμφερών Προϊόντων', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/b-farmakeioy');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Ραδιολόγου - Ακτινολόγου', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/b-aktinologoy');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Εργοθεραπείας', 'https://iek-akmi.edu.gr/index.php/tomeis/epaggelmata-ygeias/ergotherapeia');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Ακτινολόγου', 'https://iek-akmi.edu.gr/index.php/tomeis/39-spoudes/epaggelmata-ygeias/171-voithoc-aktinologou');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Μικροβιολόγου', 'https://iek-akmi.edu.gr/index.php/tomeis/39-spoudes/epaggelmata-ygeias/1117-voithos-mikrobiologou');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Στέλεχος Διατροφολογίας & Διαιτολογίας', 'https://iek-akmi.edu.gr/index.php/tomeis/39-spoudes/epaggelmata-ygeias/1118-stelexos-diatrofologias-diaitologias');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Τέχνη Σκηνοθεσίας', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/skinothesia');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Χειριστής Ηλεκτρονικής Συνάρμοσης Εικόνας (Monter)', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/montaz');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Εικονοληψία', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/eikonolipsia');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Εφαρμομένες Τέχνες Χορού', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/xoros');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Τέχνη Σεναριογραφίας', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/senariografia');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Βοηθός Σκηνογράφου - Ενδυματολόγου', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/skinografos-endymatologos');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Υποκριτική Τέχνη Θεάτρου - Κινηματογράφου', 'https://iek-akmi.edu.gr/index.php/tomeis/optikoakoystika-texni/ypokritiki');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Μετάφραση, Διόρθωση & Επιμέλεια κειμένων', 'https://iek-akmi.edu.gr/index.php/tomeis/124-spoudes/optikoakoustika-texnes/1134-epimeleia-keimenwn');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Οπτικοακουστικά & Τέχνες', 'Τέχνη Δημιουργικής Γραφής', 'https://iek-akmi.edu.gr/index.php/tomeis/124-spoudes/optikoakoustika-texnes/1135-texni-dimiourgikis-grafis');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Μηχανοτρονικής', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/mixanikos-aytokiniton');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Ηλεκτρολόγος Εσωτερικών Εγκαταστάσεων', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/ilektrologos');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Εγκαταστάσεων Ψύξης Αερισμού & Κλιματισμού', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/psyktikos');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Εκπαιδευτής Υποψηφίων Οδηγών Αυτοκινήτων & Μοτοσικλετών', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/ekpaideytis-odigon');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Μηχανικός Θερμικών Εγκαταστάσεων & Μηχανικός Τεχνολογίας Πετρελαίου και Φυσικού Αερίου', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/texnikos-aerion-kaysimon');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Αυτοματισμών', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/texnikos-automatismon');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Ιατρικών Οργάνων', 'https://iek-akmi.edu.gr/index.php/tomeis/texnika-epaggelmata/texnikos-iatrikwn-organwn');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Εγκασταστάσεων Ανανεώσιμων Πηγών Ενέργειας', 'https://iek-akmi.edu.gr/index.php/tomeis/117-spoudes/texnika-epaggelmata/1124-texnikos-ananewsimwn-phgwn-energeias');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Κυβερνήτης Σκαφών Αναψυχής', 'https://iek-akmi.edu.gr/index.php/tomeis/117-spoudes/texnika-epaggelmata/1125-kyvernitis-skafwn-anapsyxis');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Τεχνικός Μαγειρικής Τέχνης- Αρχιμάγειρας (Chef)', 'https://iek-akmi.edu.gr/index.php/tomeis/toyristika-episitistika/sef');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Τεχνικός Αρτοποιός - Ζαχαροπλαστικής', 'https://iek-akmi.edu.gr/index.php/tomeis/toyristika-episitistika/artopoiia-zaxaroplastiki');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Τεχνικός Τουριστικών Mονάδων και Επιχειρήσεων Φιλοξενίας', 'https://iek-akmi.edu.gr/index.php/tomeis/toyristika-episitistika/ksenodoxeiaka');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Στέλεχος Διοίκησης και Οικονομίας στον τομέα του Τουρισμού', 'https://iek-akmi.edu.gr/index.php/tomeis/toyristika-episitistika/ypallilos-toyristikoy-grafeioy');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', 'Τεχνικός Τεχνολογίας Ενδύματος & Υποδήματος - Σχεδιαστής Μόδας', 'https://iek-akmi.edu.gr/index.php/tomeis/moda-omorfia/fashion-designer');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', 'Make Up Artist', 'https://iek-akmi.edu.gr/index.php/tomeis/moda-omorfia/epaggelmatiko-makigiaz');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', 'Τεχνικός Κομμωτικής Τέχνης', 'https://iek-akmi.edu.gr/index.php/tomeis/moda-omorfia/kommotiki');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', 'Τεχνικός Αισθητικής Τέχνης & Μακιγιάζ', 'https://iek-akmi.edu.gr/index.php/tomeis/aisthitiki-spa/aisthitiki');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', 'Τεχνικός Αισθητικός Ποδολογίας Καλλωπισμού Νυχιών & Ονυχοπλαστικής ', 'https://iek-akmi.edu.gr/index.php/tomeis/aisthitiki-spa/aisthitikos-podologias-kallopismoy-nyxion');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Αισθητική & Spa', 'Στέλεχος Θαλασσοθεραπείας - Λουτροθεραπείας - Spa', 'https://iek-akmi.edu.gr/index.php/tomeis/aisthitiki-spa/thalassotherapeia-spa');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Παιδαγωγικά', 'Βοηθός Βρεφονηπιοκόμων', 'https://iek-akmi.edu.gr/index.php/tomeis/paidagogika/paidagogika');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Ηχοληψία & Μουσική Τεχνολογία', 'Ηχοληψία', 'https://iek-akmi.edu.gr/index.php/tomeis/ixolipsia-moysiki/ixolipsia');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Ηχοληψία & Μουσική Τεχνολογία', 'Μουσική Τεχνολογία', 'https://iek-akmi.edu.gr/index.php/tomeis/ixolipsia-moysiki/moysiki-texnologia');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Ηχοληψία & Μουσική Τεχνολογία', 'Ραδιοφωνικός Παραγωγός', 'https://iek-akmi.edu.gr/index.php/tomeis/ixolipsia-moysiki/radiofonikos-paragogos');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', 'Τεχνικός Εφαρμογών Πληροφορικής (Πολυμέσα/Web designer-Developer/ Video games)', 'https://iek-akmi.edu.gr/index.php/tomeis/iy-nees-texnologies/video-games');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', 'Tεχνικός Δικτύων & Τηλεπικοινωνιών', 'https://iek-akmi.edu.gr/index.php/tomeis/iy-nees-texnologies/texnikos-diktyon');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', 'Τεχνικός Η/Υ', 'https://iek-akmi.edu.gr/index.php/tomeis/iy-nees-texnologies/texnikos-hy');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', 'Τεχνικός Λογισμικού Η/Υ', 'https://iek-akmi.edu.gr/index.php/tomeis/iy-nees-texnologies/programmatistis');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Τέχνη Σκίτσου - Εικονογραφίας - Γραφικών', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/eikonografos-skitsografos');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Γραφιστική Εντύπου & Ηλεκτρονικών Μέσων', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/grafistas');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Τεχνικός Κινούμενης Εικόνας (3D Animation)', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/3d-animation');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Εσωτερική Αρχιτεκτονική Διακόσμηση & Σχεδιασμός Αντικειμένων', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/diakosmitis');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Τέχνη Φωτογραφίας', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/fotografos');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Ζωγραφική Τέχνη', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/zwgrafiki');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Σχεδιαστής Δομικών Έργων και Γεωπληροφορικής', 'https://iek-akmi.edu.gr/index.php/tomeis/efarmosmenes-texnes/texnikos-domikon-ergon');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Τεχνικός Τεχνολογικών Εφαρμογών & Εγκαταστάσεων', 'https://iek-akmi.edu.gr/index.php/tomeis/109-spoudes/efarmosmenes-texnes/1126-texnikos-texnologikwn-efarmogwn');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', 'Sports Management', 'https://iek-akmi.edu.gr/index.php/tomeis/mme-athlitismos/sports-management');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', 'Δημοσιογραφία, Συντακτών & Ρεπόρτερ', 'https://iek-akmi.edu.gr/index.php/tomeis/mme-athlitismos/dimosiografos');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', 'Αθλητική Δημοσιογραφία', 'https://iek-akmi.edu.gr/index.php/tomeis/mme-athlitismos/athlitikos-dimosiografos');
        Scholio::portalStudy($school5, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', 'Προπονητής Αθλημάτων', 'https://iek-akmi.edu.gr/index.php/tomeis/mme-athlitismos/proponitis');

        /*===============  6 ΙΕΚ ΔΕΛΤΑ ΑΘΗΝΑ ================*/
        $school6 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'ΔΕΛΤΑ', 'email' => 'grekpedefsis@delta-iek.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'deltaath'])->id,
            'address' => 'Ιπποκράτους 22',
            'city' => 'Αθήνα',
            'phone' => 2108225983,
            'type_id' => 2,
            'website' => 'delta-iek.gr',
            'about' => 'Στην πλούσια και μακρόχρονη πορεία μας μάθαμε τούτο:
        Ότι το πετυχημένο "επαγγελματικό σχολείο" πρέπει να δημιουργεί ολοκληρωμένους επαγγελματίες. Δεν διδάσκει απλώς μία εξειδίκευση. Οικοδομεί με όλα τα μέσα, όλο το γνωστικό αντικείμενο και πέρα από αυτό. Για αυτόν το λόγο το 60% του εκπαιδευτικού μας προγράμματος είναι πρακτικές εφαρμογές. Για αυτόν το λόγο το 70% του εκπαιδευτικού μας προσωπικού είναι αναγνωρισμένα στελέχη και πάνω απ’ όλα πετυχημένοι επαγγελματίες, με δραστηριότητα στις μεγαλύτερες εταιρείες της Αγοράς. Για αυτόν το λόγο παρέχουμε πρόσθετες δυνατότητες  για επιμόρφωση, δημιουργικότητα, κοινωνικότητα.  Και για τον ίδιο λόγο συνδέσαμε άμεσα τις σχολές μας με την Αγορά Εργασίας. Εταιρείες – ηγέτες στο χώρο τους, μέσα από την προσωπική επαφή, μεταδίδουν στους σπουδαστές όλη την κουλτούρα του επαγγέλματος. Τρέφουν τη φιλοδοξία τους  καθώς και την αισιοδοξία τους για τη σταδιοδρομία. Φροντίζουμε λοιπόν, να δίνουμε ευκαιρίες στους εκπαιδευόμενους να καλλιεργήσουν  τα ταλέντα τους, να αναπτύξουν τα προσωπικά τους χαρακτηριστικά. Σε τελική ανάλυση, δημιουργούμε σύγχρονους πολίτες, κοινωνικά ολοκληρωμένες  προσωπικότητες, όχι απλώς επαγγελματίες. Στην  προσωπική σας επαφή μαζί μας, θα διαπιστώσετε την αμεσότητα που  χαρακτηρίζει τη συνεργασία μας με τη σπουδαστική μας κοινότητα. Θα επιβεβαιώσετε τις ευκαιρίες διείσδυσης που παρέχουμε στον κλάδο επιλογής σας αλλά και στην ευρύτερη κοινωνία.',
            'approved' => 1,
            'background' => $background,
        ]);

        new Portal($school6, 5, 'iek');

        Scholio::portalStudy($school6, 'Επαγγελματικές Σπουδές', '', '', '');

        /*===============  7 ΙΕΚ ΔΕΛΤΑ ΙΩΑΝΝΙΝΑ ================*/
        $school7 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'ΔΕΛΤΑ', 'email' => 'ioannina@delta.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'deltaioa'])->id,
            'address' => 'Κωλέττη & Καπλάνη 5',
            'city' => 'Ιωάννινα',
            'phone' => 2651077472,
            'type_id' => 2,
            'website' => 'delta-iek-Ioan.gr',
            'about' => 'Στην πλούσια και μακρόχρονη πορεία μας μάθαμε τούτο:
        Ότι το πετυχημένο "επαγγελματικό σχολείο" πρέπει να δημιουργεί ολοκληρωμένους επαγγελματίες. Δεν διδάσκει απλώς μία εξειδίκευση. Οικοδομεί με όλα τα μέσα, όλο το γνωστικό αντικείμενο και πέρα από αυτό. Για αυτόν το λόγο το 60% του εκπαιδευτικού μας προγράμματος είναι πρακτικές εφαρμογές. Για αυτόν το λόγο το 70% του εκπαιδευτικού μας προσωπικού είναι αναγνωρισμένα στελέχη και πάνω απ’ όλα πετυχημένοι επαγγελματίες, με δραστηριότητα στις μεγαλύτερες εταιρείες της Αγοράς. Για αυτόν το λόγο παρέχουμε πρόσθετες δυνατότητες  για επιμόρφωση, δημιουργικότητα, κοινωνικότητα.  Και για τον ίδιο λόγο συνδέσαμε άμεσα τις σχολές μας με την Αγορά Εργασίας. Εταιρείες – ηγέτες στο χώρο τους, μέσα από την προσωπική επαφή, μεταδίδουν στους σπουδαστές όλη την κουλτούρα του επαγγέλματος. Τρέφουν τη φιλοδοξία τους  καθώς και την αισιοδοξία τους για τη σταδιοδρομία. Φροντίζουμε λοιπόν, να δίνουμε ευκαιρίες στους εκπαιδευόμενους να καλλιεργήσουν  τα ταλέντα τους, να αναπτύξουν τα προσωπικά τους χαρακτηριστικά. Σε τελική ανάλυση, δημιουργούμε σύγχρονους πολίτες, κοινωνικά ολοκληρωμένες  προσωπικότητες, όχι απλώς επαγγελματίες. Στην  προσωπική σας επαφή μαζί μας, θα διαπιστώσετε την αμεσότητα που  χαρακτηρίζει τη συνεργασία μας με τη σπουδαστική μας κοινότητα. Θα επιβεβαιώσετε τις ευκαιρίες διείσδυσης που παρέχουμε στον κλάδο επιλογής σας αλλά και στην ευρύτερη κοινωνία.',
            'approved' => 1,
            'background' => $background,
        ]);

        new Portal($school7, 5, 'iek');

        Scholio::portalStudy($school7, 'Επαγγελματικές Σπουδές', '', '', '');

        /*===============  8 ΙΕΚ ΔΕΛΤΑ ΘΕΣΣΑΛΟΝΙΚΗ ================*/
        $school8 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'ΔΕΛΤΑ', 'email' => 'deliek@delta.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'deltathess'])->id,
            'address' => 'Ερμού 45',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310226318,
            'type_id' => 2,
            'website' => 'delta-iek-Thess.gr',
            'about' => 'Στην πλούσια και μακρόχρονη πορεία μας μάθαμε τούτο:
        Ότι το πετυχημένο "επαγγελματικό σχολείο" πρέπει να δημιουργεί ολοκληρωμένους επαγγελματίες. Δεν διδάσκει απλώς μία εξειδίκευση. Οικοδομεί με όλα τα μέσα, όλο το γνωστικό αντικείμενο και πέρα από αυτό. Για αυτόν το λόγο το 60% του εκπαιδευτικού μας προγράμματος είναι πρακτικές εφαρμογές. Για αυτόν το λόγο το 70% του εκπαιδευτικού μας προσωπικού είναι αναγνωρισμένα στελέχη και πάνω απ’ όλα πετυχημένοι επαγγελματίες, με δραστηριότητα στις μεγαλύτερες εταιρείες της Αγοράς. Για αυτόν το λόγο παρέχουμε πρόσθετες δυνατότητες  για επιμόρφωση, δημιουργικότητα, κοινωνικότητα.  Και για τον ίδιο λόγο συνδέσαμε άμεσα τις σχολές μας με την Αγορά Εργασίας. Εταιρείες – ηγέτες στο χώρο τους, μέσα από την προσωπική επαφή, μεταδίδουν στους σπουδαστές όλη την κουλτούρα του επαγγέλματος. Τρέφουν τη φιλοδοξία τους  καθώς και την αισιοδοξία τους για τη σταδιοδρομία. Φροντίζουμε λοιπόν, να δίνουμε ευκαιρίες στους εκπαιδευόμενους να καλλιεργήσουν  τα ταλέντα τους, να αναπτύξουν τα προσωπικά τους χαρακτηριστικά. Σε τελική ανάλυση, δημιουργούμε σύγχρονους πολίτες, κοινωνικά ολοκληρωμένες  προσωπικότητες, όχι απλώς επαγγελματίες. Στην  προσωπική σας επαφή μαζί μας, θα διαπιστώσετε την αμεσότητα που  χαρακτηρίζει τη συνεργασία μας με τη σπουδαστική μας κοινότητα. Θα επιβεβαιώσετε τις ευκαιρίες διείσδυσης που παρέχουμε στον κλάδο επιλογής σας αλλά και στην ευρύτερη κοινωνία.',
            'approved' => 1,
            'background' => $background,
        ]);

        new Portal($school8, 5, 'iek');

        Scholio::portalStudy($school8, 'Επαγγελματικές Σπουδές', '', '', '');
    }
}
