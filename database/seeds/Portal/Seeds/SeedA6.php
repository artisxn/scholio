<?php

use App\Models\School;
use App\Scholio\Scholio;
use Illuminate\Database\Seeder;
use Portal\Portal;

class SeedA6 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $background = Portal::createImages('/upload/school/univ.png')->id;

        /*===============   RobotSetGo   ================*/
        $iekalfa = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'ΙΕΚ ΑΛΦΑ Θεσσαλονίκη', 'email' => 'info@iekalfa.gr', 'password' => bcrypt('iekalfathess'), 'role' => 'school', 'username' => 'iekalfa'])->id,
            'address' => 'Βαλαωρίτου 9',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310552406,
            'type_id' => 2,
            'website' => 'www.iekalfa.gr',
            'approved' => 1,
            'about' => '<p><strong><u>Το Όραμά μας</u></strong></p>
            <p> </p>
            <p><strong>Διανύοντας μια καταξιωμένη πορεία</strong> στα ελληνικά εκπαιδευτικά δρώμενα, συμβάλλουμε ουσιαστικά στην αναβάθμιση και τον εκσυγχρονισμό της ιδιωτικής εκπαίδευσης, αποτελώντας παράλληλα Σύμβολο Επαγγελματικής Επιτυχίας.</p>
            <p><strong>Παρακολουθώντας συνεχώς τις παγκόσμιες εξελίξεις</strong> στην Εκπαίδευση και αφουγκραζόμενοι τα μηνύματα των καιρών, πρωτοστατούμε, εκφράζοντας πρωτοποριακές ιδέες, συνάπτοντας προνομιακές, διεθνείς συνεργασίες και υλοποιώντας με επιτυχία, καινοτόμα εκπαιδευτικά εγχειρήματα.</p>
            <p> </p>
            <p><strong><u>Η Φιλοσοφία μας</u></strong></p>
            <p> </p>
            <p><strong>ΠΡΩΤΑΓΩΝΙΣΤΟΥΜΕ</strong> στον εκπαιδευτικό «χάρτη» της χώρας μας, πρωτοπορώντας στην παροχή σπουδών υψηλής ποιότητας για τους χιλιάδες σπουδαστές μας που είναι μέλη της μεγαλύτερης εκπαιδευτικής οικογένειας στην Ελλάδα.</p>
            <p> </p>
            <p><strong>ΚΑΙΝΟΤΟΜΟΥΜΕ </strong>ως προς τις εκπαιδευτικές, αλλά και τις κοινωνικές πρωτοβουλίες μας.</p>
            <p><strong><br />ΕΚΣΥΓΧΡΟΝΙΖΟΜΑΣΤΕ, </strong>αναπτύσσουμε νέες δραστηριότητες, δημιουργούμε πρωτοπόρα προγράμματα, συνάπτουμε στρατηγικές συνεργασίες κύρους και θέτουμε γερές βάσεις για την επαγγελματική κατάρτιση, έχοντας βαθιά συναίσθηση του χρέους μας απέναντι στη νέα γενιά.</p>
            <p><strong>ΕΠΕΝΔΥΟΥΜΕ</strong> στον Αθλητισμό, έχοντας αφιερώσει μεγάλο μέρος των εκπαιδευτικών μας πρωτοβουλιών στην ανάδειξη και ενίσχυση του δίπολου «Αθλητισμός &amp; Εκπαίδευση».</p>
            <p><strong>ΔΗΜΙΟΥΡΓΗΣΑΜΕ</strong><strong> </strong>ένα περιβάλλον εκπαίδευσης, εφάμιλλο των μεγαλύτερων ευρωπαϊκών εκπαιδευτικών ιδρυμάτων και εξασφαλίσαμε συνέχιση σπουδών για περαιτέρω εξειδίκευση.</p>
            <p><strong>ΚΑΤΑΓΡΑΦΟΥΜΕ </strong>διαχρονικά τις ανάγκες της αγοράς και παρέχουμε σπουδές για επαγγέλματα με υψηλή ζήτηση.</p>',
            'background' => $background,
        ]);

        new Portal($iekalfa, 5, 'iek');

        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Εμπορίας, Διαφήμισης και Προώθησης Προϊόντων (Marketing)', 'https://www.iekalfa.gr/tomeis-spoydwn/oikonomika/eidikos-emporias-diafhmishs-prowthhshs-proiontwn/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Οργάνωσης και Διοίκησης Επιχειρήσεων', 'https://www.iekalfa.gr/tomeis-spoydwn/oikonomika/dioikhtiko-stelechos-epicheirhsewn/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Μηχανογραφημένου Λογιστηρίου – Φοροτεχνικού Γραφείου', 'https://www.iekalfa.gr/tomeis-spoydwn/oikonomika/eidikos-mhchanografhmenoy-logisthrioy/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διαχείρισης Ακίνητης Περιουσίας', 'https://www.iekalfa.gr/tomeis-spoydwn/oikonomika/kthmatomesiths/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Στατιστικών Ερευνών και Δημοσκοπήσεων', 'https://www.iekalfa.gr/tomeis-spoydwn/oikonomika/stelechos-statistikhs-dhmoskophshs/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Γραμματέας Ανωτέρων και Ανώτατων Στελεχών', 'https://www.iekalfa.gr/tomeis-spoydwn/oikonomika/grammateas-dieythynshs/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Κοστολόγησης', 'https://www.iekalfa.gr/tomeis-spoydwn/oikonomika/stelechos-kostologhshs-sth-biomhchania-biotechnia/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Χρηματοοικονομικών και Ασφαλιστικών Εργασιών', 'https://www.iekalfa.gr/tomeis-spoydwn/oikonomika/stelechos-chrhmatisthriakwn-ergasiwn/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διοίκησης και Οικονομίας στον Τομέα του Πολιτισμού', 'https://www.iekalfa.gr/tomeis-spoydwn/politismos-athlitismos/stelexos-politismou/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', 'Τεχνικός Λογισμικού Η/Υ', 'https://www.iekalfa.gr/tomeis-spoydwn/plhroforikh/technikos-efarmogwn-plhroforikh/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', 'Τεχνικός Δικτύων και Τηλεπικοινωνιών', 'https://www.iekalfa.gr/tomeis-spoydwn/plhroforikh/technikos-diktywn-ypologistwn/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', 'Τεχνικός Η/Υ', 'https://www.iekalfa.gr/tomeis-spoydwn/plhroforikh/technikos-h-y-kai-hlektronikwn-mhchanwn-grafeioy/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'ΗΥ & Νέες Τεχνολογίες', 'Τεχνικός Εφαρμογών Πληροφορικής', 'https://www.iekalfa.gr/tomeis-spoydwn/plhroforikh/multimedia/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Τεχνικός Μαγειρικής Τέχνης (Chef)', 'https://www.iekalfa.gr/tomeis-spoydwn/episitismos/technikos-mageirikhs-technhs/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Τεχνικός Αρτοποιός – Ζαχαροπλάστης', 'https://www.iekalfa.gr/tomeis-spoydwn/episitismos/artopoios-zacharoplasths/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Τεχνικός Γαλακτοκομίας- Τυροκόμος', 'https://www.iekalfa.gr/tomeis-spoydwn/episitismos/%CF%84%CE%B5%CF%87%CE%BD%CE%B9%CE%BA%CF%8C%CF%82-%CE%B3%CE%B1%CE%BB%CE%B1%CE%BA%CF%84%CE%BF%CE%BA%CE%BF%CE%BC%CE%AF%CE%B1%CF%82-%CF%84%CF%85%CF%81%CE%BF%CE%BA%CF%8C%CE%BC%CE%BF%CF%82/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', 'Τεχνικός Τεχνολογίας Ενδύματος και Υποδήματος – Σχεδιαστής Μόδας', 'https://www.iekalfa.gr/tomeis-spoydwn/omorfia/aisthhtikos-symboylos-emfanishs-stylist/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', 'Κομμωτική', 'https://www.iekalfa.gr/tomeis-spoydwn/omorfia/technikos-peripoihshs-komhs/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', 'Τεχνικός Αισθητικής Tέχνης και Μακιγιάζ', 'https://www.iekalfa.gr/tomeis-spoydwn/omorfia/eidikos-efarmogwn-aisthhtikhs/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', 'Τεχνικός Αισθητικός Ποδολογίας – Καλλωπισμού Νυχιών και Ονυχοπλαστικής', 'https://www.iekalfa.gr/tomeis-spoydwn/omorfia/aisthhtikos-podologias-kai-kallwpismoy-nychiwn/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Μόδα & Ομορφιά', 'Στέλεχος Θαλασσοθεραπείας / Λουτροθεραπείας – Spa', 'https://www.iekalfa.gr/tomeis-spoydwn/omorfia/aisthhtikos-arwmatotherapeias/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Στέλεχος Διοίκησης και Οικονομίας στον Τομέα της Υγείας', 'https://www.iekalfa.gr/tomeis-spoydwn/ygeia/stelexos-ygeias/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Φυσικοθεραπευτή', 'https://www.iekalfa.gr/tomeis-spoydwn/ygeia/bohthos-fysikotherapeyth/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Εργοθεραπείας', 'https://www.iekalfa.gr/tomeis-spoydwn/ygeia/voithos-ergotherapeias/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Νοσηλευτικής Γενικής Νοσηλείας', 'https://www.iekalfa.gr/tomeis-spoydwn/ygeia/voithos-genikhs-noshleias/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Νοσηλευτικής Τραυματολογίας', 'https://www.iekalfa.gr/tomeis-spoydwn/ygeia/noshleytikh-traymatiologias/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Νοσηλευτικής Χειρουργείου', 'https://www.iekalfa.gr/tomeis-spoydwn/ygeia/noshleytikh-cheiroyrgeioy/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Νοσηλευτικής Ογκολογικών Παθήσεων', 'https://www.iekalfa.gr/tomeis-spoydwn/ygeia/ygeianoshleytikh-ogkologikwn-pathhsewn/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Νοσηλευτικής Μονάδων Εντατικής Θεραπείας', 'https://www.iekalfa.gr/tomeis-spoydwn/ygeia/noshleytikh-monadwn-entatikhs-therapeias/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Σπουδές/Πληρώμα Ασθενοφόρου/ΕΚΑΒ', 'https://www.iekalfa.gr/tomeis-spoydwn/ygeia/%CE%B4%CE%B9%CE%B1%CF%83%CF%8E%CF%83%CF%84%CE%B7%CF%82-%CF%80%CE%BB%CE%AE%CF%81%CF%89%CE%BC%CE%B1-%CE%B1%CF%83%CE%B8%CE%B5%CE%BD%CE%BF%CF%86%CF%8C%CF%81%CE%BF%CF%85/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Νοσηλευτικής Ατόμων με Ειδικές Παθήσεις', 'https://www.iekalfa.gr/tomeis-spoydwn/ygeia/noshleytikh-atomwn-me-eidikes-pathhseis/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Νοσηλευτικής Μαιευτικής', 'https://www.iekalfa.gr/tomeis-spoydwn/ygeia/voithos-nosileytikis-maieytikis/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Ιατρικών Εργαστηρίων', 'https://www.iekalfa.gr/tomeis-spoydwn/ygeia/%CE%B2%CE%BF%CE%B7%CE%B8%CF%8C%CF%82-%CE%B9%CE%B1%CF%84%CF%81%CE%B9%CE%BA%CF%8E%CE%BD-%CE%B5%CF%81%CE%B3%CE%B1%CF%83%CF%84%CE%B7%CF%81%CE%AF%CF%89%CE%BD/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Ραδιολογίας & Ακτινολογίας', 'https://www.iekalfa.gr/tomeis-spoydwn/ygeia/%CE%B2%CE%BF%CE%B7%CE%B8%CF%8C%CF%82-%CF%81%CE%B1%CE%B4%CE%B9%CE%BF%CE%BB%CE%BF%CE%B3%CE%AF%CE%B1%CF%82-%CE%B1%CE%BA%CF%84%CE%B9%CE%BD%CE%BF%CE%BB%CE%BF%CE%B3%CE%AF%CE%B1%CF%82/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Οδοντικής Τεχνολογίας', 'https://www.iekalfa.gr/tomeis-spoydwn/ygeia/%CE%B2%CE%BF%CE%B7%CE%B8%CF%8C%CF%82-%CE%BF%CE%B4%CE%BF%CE%BD%CF%84%CE%B9%CE%BA%CE%AE%CF%82-%CF%84%CE%B5%CF%87%CE%BD%CE%BF%CE%BB%CE%BF%CE%B3%CE%AF%CE%B1%CF%82/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Βοηθός Οπτικής & Οπτικομετρίας', 'https://www.iekalfa.gr/tomeis-spoydwn/ygeia/%CE%B2%CE%BF%CE%B7%CE%B8%CF%8C%CF%82-%CE%BF%CF%80%CF%84%CE%B9%CE%BA%CE%AE%CF%82-%CE%BF%CF%80%CF%84%CE%B9%CE%BA%CE%BF%CE%BC%CE%B5%CF%84%CF%81%CE%AF%CE%B1%CF%82/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Επαγγέλματα Υγείας', 'Προπονητής Αθλημάτων', 'https://www.iekalfa.gr/tomeis-spoydwn/politismos-athlitismos/proponitis-athlimatwn/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'ΜΜΕ & Αθλητισμός', 'Στέλεχος Διοίκησης και Οικονομίας στον Τομέα του Αθλητισμού', 'https://www.iekalfa.gr/tomeis-spoydwn/politismos-athlitismos/stelexos-athlitismou/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Εκπαιδευτής Υποψηφίων Οδηγών Αυτοκινήτων & Μοτοσυκλετών', 'https://www.iekalfa.gr/tomeis-spoydwn/mhchanologia/ekpaideyths-ypopshfiwn-odhgwn-aytokinhtwn-motosykletwn/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Στέλεχος Διοίκησης και Οικονομίας στον Τομέα των Μεταφορών', 'https://www.iekalfa.gr/tomeis-spoydwn/mhchanologia/%CF%83%CF%84%CE%AD%CE%BB%CE%B5%CF%87%CE%BF%CF%82-%CE%B4%CE%B9%CE%BF%CE%AF%CE%BA%CE%B7%CF%83%CE%B7%CF%82-%CE%BA%CE%B1%CE%B9-%CE%BF%CE%B9%CE%BA%CE%BF%CE%BD%CE%BF%CE%BC%CE%AF%CE%B1%CF%82-%CF%83%CF%84/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Εγκαταστάσεων Ανανεώσιμων Πηγών Ενέργειας', 'https://www.iekalfa.gr/tomeis-spoydwn/mhchanologia/texnikos-ananewsimwn-phgwn-energeias/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Τεχνικά Επαγγέλματα', 'Τεχνικός Μηχανοτρονικής', 'https://www.iekalfa.gr/tomeis-spoydwn/mhchanologia/technikos-mhxanotronikis/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Στέλεχος Διοίκησης και Οικονομίας στον Τομέα του Τουρισμού', 'https://www.iekalfa.gr/tomeis-spoydwn/tourismos/ypallhlos-toyristikoy-grafeioy/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Τεχνικός Τουριστικών Μονάδων και Επιχειρήσεων Φιλοξενίας', 'https://www.iekalfa.gr/tomeis-spoydwn/tourismos/ypeythynos-ypodochhs-kai-filoxenias/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Τουριστικά-Επισιτιστικά', 'Θρησκευτικού Τουρισμού & Προσκυνηματικών Περιηγήσεων', 'https://www.iekalfa.gr/tomeis-spoydwn/tourismos/%CE%B8%CF%81%CE%B7%CF%83%CE%BA%CE%B5%CF%85%CF%84%CE%B9%CE%BA%CE%BF%CF%8D-%CF%84%CE%BF%CF%85%CF%81%CE%B9%CF%83%CE%BC%CE%BF%CF%8D-%CF%80%CF%81%CE%BF%CF%83%CE%BA%CF%85%CE%BD%CE%B7%CE%BC%CE%B1%CF%84/');
        Scholio::portalStudy($iekalfa, 'Επαγγελματικές Σπουδές', 'Οικονομία & Διοίκηση', 'Στέλεχος Διοίκησης και Οικονομίας στον Τομέα της Ναυτιλίας', 'https://www.iekalfa.gr/tomeis-spoydwn/naytiliaka/eidikos-naytiliakhs-kateythynshs/');

        
        Scholio::portalSocial($iekalfa, 'facebook', 'https://www.facebook.com/iekalfagr/?ref=br_rs');
        Scholio::portalSocial($iekalfa, 'instagram', 'https://www.instagram.com/iekalfathessaloniki/?hl=en');
        // Scholio::portalSocial($iekalfa, 'google', 'https://plus.google.com/110353112033208285923');
        // Scholio::portalSocial($iekalfa, 'youtube', 'https://www.youtube.com/channel/UCxSRrd4JBJCL7hzwWcaPpAQ');
        
    }
}
