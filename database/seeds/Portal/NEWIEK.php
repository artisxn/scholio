<?php
$school1 = factory(App\Models\School::class)->create([
            'city' => 'Θεσσαλονίκη'
            'user_id' => factory(App\User::class)->create(['name' => 'Ι.ΙΕΚΑΛΦΑ', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', ' Στέλεχος Εμπορίας, Διαφήμισης και Προώθησης Προϊόντων (Marketing)', 'https://www.iekalfa.gr/tomeis-spoydwn/oikonomika/eidikos-emporias-diafhmishs-prowthhshs-proiontwn/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Μηχανογραφημένου Λογιστηρίου – Φοροτεχνικού Γραφείου
        ', 'https://www.iekalfa.gr/tomeis-spoydwn/oikonomika/eidikos-mhchanografhmenoy-logisthrioy/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Στατιστικών Ερευνών και Δημοσκοπήσεων', 'https://www.iekalfa.gr/tomeis-spoydwn/oikonomika/stelechos-statistikhs-dhmoskophshs/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Κοστολόγησης', 'https://www.iekalfa.gr/tomeis-spoydwn/oikonomika/stelechos-kostologhshs-sth-biomhchania-biotechnia/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Οργάνωσης και Διοίκησης Επιχειρήσεων', 'https://www.iekalfa.gr/tomeis-spoydwn/oikonomika/dioikhtiko-stelechos-epicheirhsewn/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διαχείρισης Ακίνητης Περιουσίας', 'https://www.iekalfa.gr/tomeis-spoydwn/oikonomika/kthmatomesiths/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Γραμματέας Ανωτέρων και Ανώτατων Στελεχών', 'https://www.iekalfa.gr/tomeis-spoydwn/oikonomika/grammateas-dieythynshs/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Χρηματοοικονομικών και Ασφαλιστικών Εργασιών', 'https://www.iekalfa.gr/tomeis-spoydwn/oikonomika/stelechos-chrhmatisthriakwn-ergasiwn/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ναυτιλιακά', 'Στέλεχος Διοίκησης και Οικονομίας στον Τομέα της Ναυτιλίας', 'https://www.iekalfa.gr/tomeis-spoydwn/naytiliaka/eidikos-naytiliakhs-kateythynshs/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ασφάλεια προσώπων & υποδομών', 'Στέλεχος Ασφάλειας Προσώπων και Υποδομών', 'https://www.iekalfa.gr/tomeis-spoydwn/security/stelechos-yphresiwn-asfaleias-iek/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ασφάλεια προσώπων & υποδομών', 'Ειδικός Δασικής Προστασίας', 'https://www.iekalfa.gr/tomeis-spoydwn/security/%CE%B5%CE%B9%CE%B4%CE%B9%CE%BA%CF%8C%CF%82-%CE%B4%CE%B1%CF%83%CE%B9%CE%BA%CE%AE%CF%82-%CF%80%CF%81%CE%BF%CF%83%CF%84%CE%B1%CF%83%CE%AF%CE%B1%CF%82/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ασφάλεια προσώπων & υποδομών', 'Φύλακας Μουσείων & Αρχαιολογικών χώρων', 'https://www.iekalfa.gr/tomeis-spoydwn/security/%CF%86%CF%8D%CE%BB%CE%B1%CE%BA%CE%B1%CF%82-%CE%BC%CE%BF%CF%85%CF%83%CE%B5%CE%AF%CF%89%CE%BD-%CE%B1%CF%81%CF%87%CE%B1%CE%B9%CE%BF%CE%BB%CE%BF%CE%B3%CE%B9%CE%BA%CF%8E%CE%BD-%CF%87%CF%8E%CF%81%CF%89/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επισιτισμός', 'Τεχνικός Μαγειρικής Τέχνης (Chef) – IEK ΑΛΦΑ', 'https://www.iekalfa.gr/tomeis-spoydwn/episitismos/technikos-mageirikhs-technhs/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επισιτισμός', 'Τεχνικός Γαλακτοκομίας- Τυροκόμος', 'https://www.iekalfa.gr/tomeis-spoydwn/episitismos/%CF%84%CE%B5%CF%87%CE%BD%CE%B9%CE%BA%CF%8C%CF%82-%CE%B3%CE%B1%CE%BB%CE%B1%CE%BA%CF%84%CE%BF%CE%BA%CE%BF%CE%BC%CE%AF%CE%B1%CF%82-%CF%84%CF%85%CF%81%CE%BF%CE%BA%CF%8C%CE%BC%CE%BF%CF%82/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επισιτισμός', 'Τεχνικός Αρτοποιός – Ζαχαροπλάστης', 'https://www.iekalfa.gr/tomeis-spoydwn/episitismos/artopoios-zacharoplasths/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουρισμός', 'Θρησκευτικού Τουρισμού & Προσκυνηματικών Περιηγήσεων', 'https://www.iekalfa.gr/tomeis-spoydwn/tourismos/%CE%B8%CF%81%CE%B7%CF%83%CE%BA%CE%B5%CF%85%CF%84%CE%B9%CE%BA%CE%BF%CF%8D-%CF%84%CE%BF%CF%85%CF%81%CE%B9%CF%83%CE%BC%CE%BF%CF%8D-%CF%80%CF%81%CE%BF%CF%83%CE%BA%CF%85%CE%BD%CE%B7%CE%BC%CE%B1%CF%84/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουρισμός', 'Στέλεχος Διοίκησης και Οικονομίας στον Τομέα του Τουρισμού', 'https://www.iekalfa.gr/tomeis-spoydwn/tourismos/ypallhlos-toyristikoy-grafeioy/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουρισμός', 'Τεχνικός Τουριστικών Μονάδων και Επιχειρήσεων Φιλοξενίας', 'https://www.iekalfa.gr/tomeis-spoydwn/tourismos/ypeythynos-ypodochhs-kai-filoxenias/');




        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => 'Θεσσαλονίκη',
            'user_id' => factory(App\User::class)->create(['name' => 'ΑΝΑΒΑΘΜΙΣΗ ΚΒΔΜ', 'email' => 'info@anavathmisi.net.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => ' ΒΑΚΧΟΥ 19-23 ΘΕΣΣΑΛΟΝΙΚΗ',
            'phone' => 2310500191
            'type_id' => 6,
            'website' => 'anavathmisi.net.gr',
            'approved' => 1,
            'about' => 'Η ΑΝΑΒΑΘΜΙΣΗ είναι Πιστοποιημένο Κέντρο Δια Βίου Μάθησης Επιπέδου 2 από τον  Εθνικό Οργανισμό Πιστοποίησης Προσόντων & Επαγγελματικού Προσανατολισμού (Ε.Ο.Π.Π.Ε.Π. – πρώην ΕΚΕΠΙΣ), με αριθμό αδειοδότησης 2000084.
            Τα στελέχη του διαθέτουν πολύχρονη εμπειρία στον σχεδιασμό, την υλοποίηση και τη διαχείριση προγραμμάτων Επαγγελματικής Κατάρτισης Ενηλίκων, Συμβουλευτικής, Ευρωπαϊκών - Κοινοτικών Προγραμμάτων και Μελετών, καθώς και στην υποστήριξη – κοινωνική ενσωμάτωση Ατόμων με Αναπηρία.Διαθέτει σύγχρονες κτιριακές υποδομές με αίθουσες διδασκαλίας και εργαστήρια Πληροφορικής και Ζωγραφικής - Καλλιτεχνικών Δραστηριοτήτων στο Κέντρο της Θεσσαλονίκης, όπου καταρτίζονται σε σύγχρονες ειδικότητες άνεργοι, εργαζόμενοι, αυτοαπασχολούμενοι επιχειρηματίες, Άτομα με Αναπηρία και στελέχη υποστήριξης ΑμεΑ.
            Επίσης δραστηριοποιείται στην Οργάνωση Εκδηλώσεων Τέχνης και Πολιτισμού και υλοποιεί δράσης Κοινωνικής Ευαισθητοποίησης που αφορούν την οικογένεια και την Αναπηρία.
            Η πολύχρονη εμπειρία των στελεχών της εγγυάται την τοποθέτηση των κατάλληλων ανθρώπων στις επιχειρήσεις, ώστε να καλυφθούν οι πραγματικές ανάγκες τις αγοράς με σωστά καταρτισμένο ανθρώπινο δυναμικό.',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => 'Θεσσαλονίκη',
            'user_id' => factory(App\User::class)->create(['name' => 'ΙΕΚ ΠΑΣΤΕΡ', 'email' => 'info@paster.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => 'Τσιμισκή 45',
            'phone' => 2310 281 282
            'type_id' => 6,
            'website' => 'http://paster.gr/iek-sxoli-thessaloniki-paster',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

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
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');



        $school1 = factory(App\Models\School::class)->create([
            'city' => 'Θεσσαλονίκη',
            'user_id' => factory(App\User::class)->create(['name' => 'De Stijl Varosi', 'email' => ' info@spoudes-varosi.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => 'Τσιμισκή 126',
            'phone' => 2310273211
            'type_id' => 6,
            'website' => 'http://spoudes-varosi.gr/',
            'approved' => 1,
            'about' => 'Καλως όρισες στον υπέροχο κόσμο της ομορφιάς και στην ξεχωριστή ποιότητα εκπαίδευσης που σου παρέχουν τα De Stijl Varosi.
            Στόχος μας είναι να προετοιμάσουμε σωστά και ολοκληρωμένα τους μελλοντικούς επαγγελματίες για μια συναρπαστική καριέρα, τηρώντας τα υψηλά κριτήρια της ποιοτικής εκπαίδευσης.
            Τα κλειδιά της εκπαιδευτικής φιλοσοφίας μας είναι η πρωτοπορία, ικανότητα αξιοποίησης του ταλέντου, αυτοπεποίθηση, δημιουργικότητα και συνεχή αναβάθμιση των σπουδών ομορφιάς.
            Με αυτή τη φιλοσοφία πορευόμαστε από το 1992 στην υπηρεσία της ομορφιάς.Είμαστε πεποισμένοι οτι η σχολή μας σου προσφέρει την εκπαίδευση που χρειάζεται ώστε να επιτύχεις στους επαγγελματικούς σου στόχους.',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', 'ΤΜΗΜΑ ΑΝΔΡΙΚΩΝ ΚΟΥΡΕΜΑΤΩΝ', 'http://www.spoudes-varosi.gr/%CE%BD%CE%B5%CE%BF-%CF%84%CE%BC%CE%B7%CE%BC%CE%B1-%CE%B1%CE%BD%CE%B4%CF%81%CE%B9%CE%BA%CF%89%CE%BD-%CE%BA%CE%BF%CF%85%CF%81%CE%B5%CE%BC%CE%B1%CF%84%CF%89%CE%BD/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', 'Τμήματα κομμωτικής', 'http://www.spoudes-varosi.gr/kommwtiki/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', 'Αισθητική', 'http://www.spoudes-varosi.gr/aisthitiki/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', 'Αισθητική Άκρων', 'http://www.spoudes-varosi.gr/%CE%B1%CE%B9%CF%83%CE%B8%CE%B7%CF%84%CE%B9%CE%BA%CE%AE-%CE%AC%CE%BA%CF%81%CF%89%CE%BD/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', 'Μασάζ', 'http://www.spoudes-varosi.gr/massage/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', 'Βασικό', 'http://www.spoudes-varosi.gr/%CE%B2%CE%B1%CF%83%CE%B9%CE%BA%CF%8C/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', 'Professional 2μηνο', 'http://www.spoudes-varosi.gr/professional-2%CE%BC%CE%B7%CE%BD%CE%BF/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', 'Professional 6μηνο ΚΔΒΜ-1', 'http://www.spoudes-varosi.gr/professional-6%CE%BC%CE%B7%CE%BD%CE%BF-%CE%BA%CE%B4%CE%B2%CE%BC-1/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', 'Nail Art Basic', 'http://www.spoudes-varosi.gr/nail-art-basic/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', 'Nail Art Professional Level I', 'http://www.spoudes-varosi.gr/nail-art-professional-level-i/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', 'Nail Art Professional Level II', 'http://www.spoudes-varosi.gr/nail-art-professional-level-ii/');

        Scholio::portalSocial($school1, 'facebook', 'https://www.facebook.com/destijlvarosi.spoudastiri');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', 'https://twitter.com/intent/tweet?text=http%3A%2F%2Fwww.spoudes-varosi.gr%2F&source=webclient'
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => 'Ι.Ι.Ε.Κ E.S.P.', 'email' => 'info@esp.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => 'Ναυμαχίας Έλλης 3-5, Θεσσαλονίκη',
            'phone' => 2310541148
            'type_id' => 6,
            'website' => 'www.esp.gr',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Φωτογραφίας
        ', 'Τέχνη φωτογραφίας', 'http://esp.gr/%CF%83%CF%80%CE%BF%CF%85%CE%B4%CE%AD%CF%82/%CE%B9%CE%B5%CE%BA-%CF%86%CF%89%CF%84%CE%BF%CE%B3%CF%81%CE%B1%CF%86%CE%AF%CE%B1%CF%82/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ΙΕΚ Γραφιστικής', 'Γραφιστική Εντύπου και Ηλεκτρονικών Μέσων', 'http://esp.gr/%CF%83%CF%80%CE%BF%CF%85%CE%B4%CE%AD%CF%82/%CE%B9%CE%B5%CE%BA-%CE%B3%CF%81%CE%B1%CF%86%CE%B9%CF%83%CF%84%CE%B9%CE%BA%CE%AE%CF%82/');


        Scholio::portalSocial($school1, 'facebook', 'https://www.facebook.com/IekEsp');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', 'https://twitter.com/IEKESP'
        Scholio::portalSocial($school1, 'youtube', 'https://www.youtube.com/user/IEKESP');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');
        Scholio::portalSocial($school1, 'vimeo', 'https://vimeo.com/user39557129');


        $school1 = factory(App\Models\School::class)->create([
            'city' => 'Θεσσαλονίκη',
            'user_id' => factory(App\User::class)->create(['name' => 'Infotech', 'email' => 'studies@infotech.edu.gr ', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => 'Συγγρού 10',
            'phone' => 2310501970 
            'type_id' => 6,
            'website' => 'http://www.infotech.edu.gr ',
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
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Σεμινάρια McNeel
        ', 'Rhino 6', 'http://www.infotech.edu.gr/course/rhino-5/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Σεμινάρια McNeel', 'Grasshopper', 'http://www.infotech.edu.gr/course/grasshopper/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Γενικά Σεμινάρια', 'Aρχιτεκτονικός φωτισμός', 'http://www.infotech.edu.gr/course/architectural-lighting/
    
        Scholio::portalSocial($school1, 'facebook', 'https://www.facebook.com/infotech.CAD');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', 'https://twitter.com/cad_infotech');
        Scholio::portalSocial($school1, 'youtube', 'https://www.youtube.com/channel/UCx-ZUncRW149HejCYicdkaQ');
        Scholio::portalSocial($school1, 'linkedin', 'https://www.linkedin.com/company/infotech-atc/');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');
        

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => 'Θεσσαλονίκη',
            'user_id' => factory(App\User::class)->create(['name' => 'IIEK NEW YORK', 'email' => 'inythess@ieknewyork.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => 'ΕΓΝΑΤΙΑΣ 138 & Π.Π. ΓΕΡΜΑΝΟΥ (ΠΕΡΙΟΧΗ ΚΑΜΑΡΑ)', 
            'phone' => 2310889879
            'type_id' => 6,
            'website' => 'https://ieknewyork.gr/',
            'approved' => 1,
            'about' => 'To IIEK NEW YORK, αξιοποιώντας την εμπειρία και τεχνογνωσία του Ομίλου New York College, προσφέρει υψηλής ποιότητας εξειδικευμένη εκπαίδευση με συνέπεια και ευθύνη δίνοντας στους σπουδαστές πρωτοποριακές εκπαιδευτικές ευκαιρίες σε ένα πλήθος επαγγελματικών ειδικεύσεων.
			Επέλεξε ανάμεσα από 11 τομείς σπουδών και 44 σύγχρονες ειδικότητες και κάνε τις σπουδές της ζωής σου σε Αθήνα και Θεσσαλονίκη! ',
			'background' => $background,
        ])

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', ' Στέλεχος Υπηρεσιών Εφοδιαστικής Αλυσίδας', 'https://ieknewyork.gr/logistics/';
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Μηχανογραφημένου Λογιστηρίου – Φοροτεχνικού Γραφείου', 'https://ieknewyork.gr/logistika/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Εμπορίας, Διαφήμισης και Προώθησης Προιόντων (marketing)', 'https://ieknewyork.gr/marketing/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διοίκησης και Οικονομίας στον τομέα των Μεταφορών', 'https://ieknewyork.gr/metafores/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διοίκησης και Οικονομίας στον τομέα του Τουρισμού', 'https://ieknewyork.gr/tourism2/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διοίκησης και Οικονομίας στον Τομέα του Πολιτισμού', 'https://ieknewyork.gr/politismos/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διοίκησης και Οικονομίας στον τομέα του Αθλητισμού', 'https://ieknewyork.gr/athlitismos/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διοίκησης και Οικονομίας στον τομέα της Ναυτιλίας', 'https://ieknewyork.gr/naftiliaka/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διοίκησης και Οικονομίας', 'https://ieknewyork.gr/businessadmin/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Γραμματέας Διεύθυνσης', 'https://ieknewyork.gr/grammateasdioikisis/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Τουρισμού και Επισιτισμού', 'Τεχνικός Μαγειρικής Tέχνης – Αρχιμάγειρας (Chef)', 'https://ieknewyork.gr/chef/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Τουρισμού και Επισιτισμού', 'Τεχνικός Τουριστικών Μονάδων & Επιχειρήσεων Φιλοξενίας', 'https://ieknewyork.gr/tourismos/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Τουρισμού και Επισιτισμού', 'Τεχνικός Αρτοποιός – Ζαχαροπλαστικής', 'https://ieknewyork.gr/zaxaroplastis/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Πληροφορικής', 'Τεχνικός Λογισμικού Η/Υ', 'https://ieknewyork.gr/computing/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Πληροφορικής', 'Τεχνικός Η/Υ', 'https://ieknewyork.gr/informatics/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Πληροφορικής', 'Τεχνικός Εφαρμογών Πληροφορικής (Πολυμέσα/ Web Design – Development /Video Games)', 'https://ieknewyork.gr/gaming/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Πληροφορικής', 'Τεχνικός Δικτύων και Τηλεπικοινωνιών', 'https://ieknewyork.gr/computerscience/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Υγείας', 'Τεχνικός Φαρμάκων και Καλλυντικών', 'https://ieknewyork.gr/pharmacy/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Υγείας', 'Στέλεχος Ασφάλειας Προσώπων και Υποδομών', 'https://ieknewyork.gr/security/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Υγείας', 'Προπονητής Αθλημάτων', 'https://ieknewyork.gr/athletics/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Υγείας', 'Βοηθός Ραδιολογίας – Ακτινολογίας', 'https://ieknewyork.gr/radiology/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Υγείας', 'Βοηθός Νοσηλευτικής Χειρουργείου', 'https://ieknewyork.gr/surgeon/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Υγείας', 'Βοηθός Νοσηλευτικής Τραυματολογίας', 'https://ieknewyork.gr/traumatologia/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Υγείας', 'Βοηθός Νοσηλευτικής Μαιευτικής', 'https://ieknewyork.gr/maieutiki/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Υγείας', 'Βοηθός Εργοθεραπείας', 'https://ieknewyork.gr/ergotherapeia/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Υγείας', 'Βοηθός Φαρμακείου', 'https://ieknewyork.gr/farmakeio/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Υγείας', 'Βοηθός Φυσικοθεραπείας', 'https://ieknewyork.gr/voithos-fisikotherapeias/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Υγείας', 'Στέλεχος Διατροφής και Διαιτολογίας', 'https://ieknewyork.gr/diaitologos/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Παιδαγωγικών Επαγγελμάτων', 'Βοηθός Βρεφονηπιοκόμων ', 'https://ieknewyork.gr/vrefonipiokomos/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Επικοινωνίας και ΜΜΕ', 'Τηλεοπτικός Παραγωγός', 'https://ieknewyork.gr/tvproducer/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Επικοινωνίας και ΜΜΕ', 'Ραδιοφωνικός Παραγωγός', 'https://ieknewyork.gr/radioproducer/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Επικοινωνίας και ΜΜΕ', 'Δημοσιογραφίας, Συντακτών και Ρεπόρτερ', 'https://ieknewyork.gr/reporter/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Επικοινωνίας και ΜΜΕ', 'Αθλητική Δημοσιογραφία', 'https://ieknewyork.gr/sportsjournalism/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Καλλιτεχνικών Σπουδών και Εφαρμοσμένων Τεχνών ', 'Τέχνη Φωτογραφίας', 'https://ieknewyork.gr/photography/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Καλλιτεχνικών Σπουδών και Εφαρμοσμένων Τεχνών', 'Μουσική και Τραγούδι', 'https://ieknewyork.gr/music/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Καλλιτεχνικών Σπουδών και Εφαρμοσμένων Τεχνών', 'Εφαρμοσμένες Τέχνες Χορού', 'https://ieknewyork.gr/dance/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Καλλιτεχνικών Σπουδών και Εφαρμοσμένων Τεχνών', 'Χειριστής ηλεκτρονικής συνάρμοσης εικόνας (monter)', 'https://ieknewyork.gr/monter/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Καλλιτεχνικών Σπουδών και Εφαρμοσμένων Τεχνών', 'Υποκριτική Τέχνη Θεάτρου Κινηματογράφου', 'https://ieknewyork.gr/acting/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Καλλιτεχνικών Σπουδών και Εφαρμοσμένων Τεχνών', 'Τεχνικός κινούμενης εικόνας- Ηλεκτρονικής Σχεδίασης Γραφήματος(Animation)', 'https://ieknewyork.gr/animation/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Καλλιτεχνικών Σπουδών και Εφαρμοσμένων Τεχνών', 'Τέχνη Σκηνοθεσίας', 'https://ieknewyork.gr/directing/');
		Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Καλλιτεχνικών Σπουδών και Εφαρμοσμένων Τεχνών', 'Τέχνη Σεναριογραφίας', 'https://ieknewyork.gr/senario/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Καλλιτεχνικών Σπουδών και Εφαρμοσμένων Τεχνών', 'Μουσική Τεχνολογία', 'https://ieknewyork.gr/musictechnology/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Καλλιτεχνικών Σπουδών και Εφαρμοσμένων Τεχνών', 'Ηχοληψία', 'https://ieknewyork.gr/sound/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Καλλιτεχνικών Σπουδών και Εφαρμοσμένων Τεχνών', 'Εσωτερική Αρχιτεκτονική Διακόσμηση & Σχεδιασμός Αντικειμένων', 'https://ieknewyork.gr/diakosmisi/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Καλλιτεχνικών Σπουδών και Εφαρμοσμένων Τεχνών', 'Εικονοληψία', 'https://ieknewyork.gr/eikonolipsia/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Καλλιτεχνικών Σπουδών και Εφαρμοσμένων Τεχνών', 'Γραφιστική Εντύπου και Ηλεκτρονικών Μέσων', 'https://ieknewyork.gr/grafistiki/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Τεχνολογίας Τροφίμου και Ποτών', 'Στέλεχος Τεχνολογίας και Ελέγχου Τροφίμων και Ποτών', 'https://ieknewyork.gr/foodtechnology/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Μόδας και Ομορφιάς', 'Τεχνικός Αισθητικός Ποδολογίας – Καλλωπισμού Νυχιών και Ονυχοπλαστικής', 'https://ieknewyork.gr/nails/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Μόδας και Ομορφιάς', 'Τεχνικός Κομμωτικής Τέχνης', 'https://ieknewyork.gr/coiffure/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Μόδας και Ομορφιάς', 'Στέλεχος Θαλασσοθεραπείας – Λουτροθεραπείας – Spa', 'https://ieknewyork.gr/spa/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Μόδας και Ομορφιάς', 'Τεχνικός Αισθητικής Τέχνης και Μακιγιάζ', 'https://ieknewyork.gr/makeup/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Μόδας και Ομορφιάς', 'Τεχνικός Τεχνολογίας Ενδύματος & Υποδήματος – Σχεδιαστής Μόδας', 'https://ieknewyork.gr/fashion/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Αεροπορικών Σπουδών', 'Στέλεχος Υπηρεσιών Αερομεταφοράς', 'https://ieknewyork.gr/aerometafores/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τομέας Αεροπορικών Σπουδών', 'Επιμελητής Πτήσεων', 'https://ieknewyork.gr/epimelitisptisewn/');
        



        Scholio::portalSocial($school1, 'facebook', 'https://www.facebook.com/iiekny/');
        Scholio::portalSocial($school1, 'instagram', 'https://www.instagram.com/ieknewyork/');
        Scholio::portalSocial($school1, 'twitter', 'https://twitter.com/IEK_NY'
        Scholio::portalSocial($school1, 'pinterest', 'https://gr.pinterest.com/ieknewyorkads/');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

		
		
		
		
		
        $school1 = factory(App\Models\School::class)->create([
            'city' => 'Αθήνα',
            'user_id' => factory(App\User::class)->create(['name' => 'IIEK NEW YORK', 'email' => 'admissions@ieknewyork.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => 'Λεωφ. Βασιλίσσης Αμαλίας 38',
            'phone' =>  2111039800
            'type_id' => 6,
            'website' => 'https://ieknewyork.gr/',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

       




	   $school1 = factory(App\Models\School::class)->create([
            'city' => 'Θεσσαλονίκη',
            'user_id' => factory(App\User::class)->create(['name' => 'Gianneri Academy', 'email' => 'gianneri.ac@icloud.com', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => 'Μητροπόλεως 34',
            'phone' =>  2310237249
            'type_id' => 6,
            'website' => 'http://gianneris.gr/',
            'approved' => 1,
            'about' => 'Εξασφάλισε το μέλλον σου στην σχολή Gianneri Academy και γίνε επαγγελματίας κομμωτής.',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ι.ΙΕΚ Κομμωτικής', 'ΙΕΚ Κομμωτικής Gianneri Academy', 'http://gianneris.gr/%CE%B9%CE%B5%CE%BA-%CE%BA%CE%BF%CE%BC%CE%BC%CF%89%CF%84%CE%B9%CE%BA%CE%AE%CF%82-%CE%B8%CE%B5%CF%83%CF%83%CE%B1%CE%BB%CE%BF%CE%BD%CE%B9%CE%BA%CE%B7-gianneri/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Κ.Δ.Β.Μ. Κομμωτικής', 'Σχολή κομμωτικής Γιαννέρη – Βασική εκπαίδευση', 'http://gianneris.gr/%CF%83%CF%87%CE%BF%CE%BB%CE%AE-%CE%BA%CE%BF%CE%BC%CE%BC%CF%89%CF%84%CE%B9%CE%BA%CE%AE%CF%82-%CE%B3%CE%B9%CE%B1%CE%BD%CE%BD%CE%AD%CF%81%CE%B7-%CE%B2%CE%B1%CF%83%CE%B9%CE%BA%CE%AE-%CE%B5%CE%BA%CF%80/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Αισθητική', 'Επαγγελματικό μακιγιάζ', 'http://gianneris.gr/%CE%B5%CF%80%CE%B1%CE%B3%CE%B3%CE%B5%CE%BB%CE%BC%CE%B1%CF%84%CE%B9%CE%BA%CF%8C-%CE%BC%CE%B1%CE%BA%CE%B9%CE%B3%CE%B9%CE%AC%CE%B6-%CF%83%CF%84%CE%B7%CE%BD-%CE%B8%CE%B5%CF%83%CF%83%CE%B1%CE%BB%CE%BF/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Σχολή Κουρέα', 'Σχολή μπάρμπερ-Κουρέας Ανδρικές Κομμώσεις', 'http://gianneris.gr/%CF%83%CF%87%CE%BF%CE%BB%CE%AE-%CE%BC%CF%80%CE%AC%CF%81%CE%BC%CF%80%CE%B5%CF%81-%CE%B1%CE%BD%CE%B4%CF%81%CE%B9%CE%BA%CE%AD%CF%82-%CE%BA%CE%BF%CE%BC%CE%BC%CF%8E%CF%83%CE%B5%CE%B9%CF%82/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Ονυχοπλαστική ταχύρυθμο τμήμα', 'Ονυχοπλαστική & Αισθητική Άκρων', 'http://gianneris.gr/%CF%83%CF%87%CE%BF%CE%BB%CE%AE-%CE%BF%CE%BD%CF%85%CF%87%CE%BF%CF%80%CE%BB%CE%B1%CF%83%CF%84%CE%B9%CE%BA%CE%AE%CF%82-%CE%B3%CE%B9%CE%B1%CE%BD%CE%BD%CE%AD%CF%81%CE%B7-%CE%B2%CE%B1%CF%83%CE%B9/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'ονυχοπλαστική βασικό τμήμα ', 'Ονυχοπλαστική & Αισθητική Άκρων', 'http://gianneris.gr/%CE%BF%CE%BD%CF%85%CF%87%CE%BF%CF%80%CE%BB%CE%B1%CF%83%CF%84%CE%B9%CE%BA%CE%AE-%CE%BC%CE%B1%CE%BD%CE%B9%CE%BA%CE%B9%CE%BF%CF%8D%CF%81-%CF%80%CE%B5%CE%BD%CF%84%CE%B9%CE%BA%CE%B9%CE%BF%CF%8D%CF%81/');
       
        Scholio::portalSocial($school1, 'facebook', 'https://www.facebook.com/gianneriacademy/');
        Scholio::portalSocial($school1, 'instagram', 'https://www.instagram.com/gianneriacademy/');
        Scholio::portalSocial($school1, 'twitter', 'https://twitter.com/gianneriacademy'
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        
		
		
		
		$school1 = factory(App\Models\School::class)->create([
            'city' => 'Θεσσαλονίκη',
            'user_id' => factory(App\User::class)->create(['name' => 'ΚΕΚ Eurotraining', 'email' => 'thessaloniki@eurotraining.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => 'Χ. Πίψου 9',
            'phone' => 2310508410
            'type_id' => 6,
            'website' => 'https://www.eurotraining.gr/',
            'approved' => 1,
            'about' => 'Η εταιρεία EUROTraining ιδρύθηκε το 2000 και πιστοποιήθηκε τον Ιούλιο του 2001 ως Κέντρο Επαγγελματικής Κατάρτισης Εθνικής Εμβέλειας. 
			Δραστηριοποιείται στο χώρο της δια βίου επαγγελματικής κατάρτισης με σκοπό να παρέχει ένα ολοκληρωμένο πακέτο πολυδιάστατων υπηρεσιών επαγγελματικής κατάρτισης, προώθησης στην απασχόληση και ανάπτυξης της επιχειρηματικότητας σε ιδιωτικές επιχειρήσεις και οργανισμούς του ευρύτερου δημοσίου τομέα καθώς και σε ένα ευρύ φάσμα πληθυσμιακών ομάδων ικανοποιώντας εξειδικευμένες ανάγκες στο χώρο της δια βίου εκπαίδευσης και κατάρτισης.',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μόδα και Ομορφιά', 'Τεχνικός Αισθητικής Τέχνης και Μακιγιάζ', 'https://www.eurotraining.gr/iek-aisthitiki/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μόδα και Ομορφιά', 'Τεχνικός Κομμωτικής Τέχνης', 'https://www.eurotraining.gr/iek-kommwtiki/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μόδα και Ομορφιά', 'Τεχνικός Τεχνολογίας Ενδύματος & Υποδήματος – Σχεδιαστής Μόδας', 'https://www.eurotraining.gr/iek-fashion-designer/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Μόδα και Ομορφιά', 'Τεχνικός Αισθητικός Ποδολογίας – Καλλωπισμού Νυχιών & Ονυχοπλαστικής', 'https://www.eurotraining.gr/iek-aisthitiki-podologias/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επισιτιστικά', 'Τεχνικός Μαγειρικής Τέχνης – Αρχιμάγειρας/Chef', 'https://www.eurotraining.gr/chef/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επισιτιστικά', 'Τεχνικός Αρτοποιός – Ζαχαροπλαστικής', 'https://www.eurotraining.gr/zaharoplastis/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουριστικά', 'Τεχνικός Τουριστικών Μονάδων & Επιχειρήσεων Φιλοξενίας (Υπηρεσία Υποδοχής – Υπηρεσία Ορόφων – Εμπορευματογνωσία)', 'https://www.eurotraining.gr/texnikos_touristikwn_monadwn/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουριστικά', 'Στέλεχος Διοίκησης & Οικονομίας στον Τομέα Τουρισμού', 'https://www.eurotraining.gr/touristikos-praktoras/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τουριστικά', 'Τουριστικός Συνοδός', 'https://www.eurotraining.gr/touristikos_synodos/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Διοίκηση και Οικονομία', 'Γραμματέας Ανώτερων Στελεχών', 'https://www.eurotraining.gr/grammateas/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Διοίκηση και Οικονομία', 'Στέλεχος Διοίκησης και Οικονομίας', 'https://www.eurotraining.gr/dioikitiko_stelexos/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Διοίκηση και Οικονομία', 'Ναυτιλιακά', 'https://www.eurotraining.gr/dioikitiko-stelexos-nautiliakwn/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Διοίκηση και Οικονομία', 'Marketing', 'https://www.eurotraining.gr/marketing/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Διοίκηση και Οικονομία', 'Στέλεχος Μηχανογραφημένου Λογιστηρίου-Φοροτεχνικού Γραφείου', 'https://www.eurotraining.gr/forotexnikos/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Διοίκηση και Οικονομία', 'Στέλεχος Στατιστικών Ερευνών και Δημοσκοπήσεων', 'https://www.eurotraining.gr/statistiki_dimoskopisi/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Διοίκηση και Οικονομία', 'Στέλεχος Υπηρεσιών Εφοδιαστικής Αλυσίδας', 'https://www.eurotraining.gr/logistics/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Διοίκηση και Οικονομία', 'Στέλεχος Διεθνούς Εμπορίου', 'https://www.eurotraining.gr/diethnes-emporio/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Διοίκηση και Οικονομία', 'Στέλεχος Κοστολόγησης', 'https://www.eurotraining.gr/kostologisi/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Πληροφορική', 'Προγραμματιστής (Web Developer / Video Games)', 'https://www.eurotraining.gr/web-developer-video-games/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Πληροφορική', 'Τεχνικός Δικτύων και Τηλεπικοινωνιών', 'https://www.eurotraining.gr/texnikos-diktywn/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Πληροφορική', 'Τεχνικός Υπολογιστών', 'https://www.eurotraining.gr/texnikos-hy/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Γραφιστική Εντύπου και Ηλεκτρονικών Μέσων', 'https://www.eurotraining.gr/graphic-designer/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Τεχνικός Κινούμενης Εικόνας – Ηλεκτρονικής Σχεδίασης Γραφήματος', 'https://www.eurotraining.gr/3d-animation/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Εφαρμοσμένες Τέχνες', 'Εσωτερική Αρχιτεκτονική Διακόσμηση & Σχεδιασμός Αντικειμένων', 'https://www.eurotraining.gr/interior-design/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επικοινωνία & ΜΜΕ', 'Δημοσιογράφος', 'https://www.eurotraining.gr/dimosiografia/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επικοινωνία & ΜΜΕ', 'Αθλητικός Δημοσιογράφος', 'https://www.eurotraining.gr/athlitiki-dimosiografia/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επικοινωνία & ΜΜΕ', 'Συντονιστής Παραγωγής', 'https://www.eurotraining.gr/syntonistis-paragwgis/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Παιδαγωγικά', 'Βοηθός Βρεφονηπιοκόμων', 'https://www.eurotraining.gr/paidagwgos/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Φυσικοθεραπείας', 'https://www.eurotraining.gr/voithos_fisikotherapeias/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Εργοθεραπείας', 'https://www.eurotraining.gr/voithos_ergotherapeias/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Νοσηλευτικής Γενικής Νοσηλείας', 'https://www.eurotraining.gr/nosileutiki/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Φαρμακείου', 'https://www.eurotraining.gr/farmakopoios/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Εκπαιδευτής Υποψηφίων Οδηγών Αυτοκινήτων & Μοτοσικλετών', 'https://www.eurotraining.gr/ekpaideutis-upopsifiwn-odigwn/');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Επιμελητής Πτήσεων', 'https://www.eurotraining.gr/epimelitis-ptisewn/');
        
		Scholio::portalSocial($school1, 'facebook', 'https://www.facebook.com/KekEuroTraining');
        Scholio::portalSocial($school1, 'instagram', 'https://www.instagram.com/kekeurotraining/');
        Scholio::portalSocial($school1, 'twitter', 'https://twitter.com/KEKEUROTraining'
        Scholio::portalSocial($school1, 'youtube', 'https://www.youtube.com/channel/UCmH2SE3s5XRIt6dHNwoyZ6A');
        Scholio::portalSocial($school1, 'linkedin', 'https://www.linkedin.com/company/eurotraining-s-a-');
        Scholio::portalSocial($school1, 'skype', '');

        
		
		
		$school1 = factory(App\Models\School::class)->create([
            'city' => 'Αθήνα',
            'user_id' => factory(App\User::class)->create(['name' => 'ΚΕΚ EUROTraining', 'email' => 'kekathens@eurotraining.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => 'Βερανζέρου 1',
            'phone' => 2103306086
            'type_id' => 6,
            'website' => 'https://www.eurotraining.gr',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => 'Βόλος',
            'user_id' => factory(App\User::class)->create(['name' => 'ΚΕΚ EUROTraining', 'email' => 'volos@eurotraining.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => 'Στρ. Καλλέργη 26, Νεάπολη',
            'phone' => 2421091390
            'type_id' => 6,
            'website' => 'https://www.eurotraining.gr/',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');
        

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');
        Scholio::portalSocial($school1, 'skype', '');

        $school1 = factory(App\Models\School::class)->create([
            'city' => '',
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'phone' => 
            'type_id' => 6,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');
        Scholio::portalStudy($school1, 'Επαγγελματικές Σπουδές', '', '', '');

        Scholio::portalSocial($school1, 'facebook', '');
        Scholio::portalSocial($school1, 'instagram', '');
        Scholio::portalSocial($school1, 'twitter', ''
        Scholio::portalSocial($school1, 'youtube', '');
        Scholio::portalSocial($school1, 'linkedin', '');


?>