<?php

use App\Models\School;
use App\Scholio\Scholio;
use Illuminate\Database\Seeder;
use Portal\Portal;

class SeedA4 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $background = Portal::createImages('/upload/school/univ.png')->id;

        // college (υπάρχουν σεμηνάρια, πιστοποιήσεις κλπ)
        $icps = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'iCPS', 'email' => 'reception@icps.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'icps'])->id,
            'address' => 'Φιλικών 56α, Αγ. Αντώνιος – Περιστέρι',
            'city' => 'Αθήνα',
            'phone' => 2106456565,
            'type_id' => 1,
            'website' => 'www.icps.edu.gr',
            'approved' => 1,
            'about' => 'Η ιστορία του Κολλεγίου μας είναι άρηκτα δεμένη με την ανάπτυξη της συμβουλευτικής και της ψυχοθεραπείας στην Ελλάδα. To 1987 διεξήχθη στην Ελλάδα το Διαπολιτισμικό Συμπόσιο Προσωποκεντρικής Προσέγγισης, οι εργασίες του οποίου αποτέλεσαν το θεμέλιο λίθο για την ίδρυση του ICPS και για τη διάδοση της συγκεκριμένης Προσέγγισης στην Ελλάδα.',
            'background' => $background,
        ]);

        Scholio::portalStudy($icps, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'BACHELOR ΨΥΧΟΛΟΓΙΑΣ', 'http://www.icps.edu.gr/css/default/templates/course/article.php?lng=1&cat=1048&doc=1182');
        Scholio::portalStudy($icps, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MSc ΠΑΙΔΟΨΥΧΟΛΟΓΙΑΣ', 'http://www.icps.edu.gr/css/default/templates/course/article.php?lng=1&cat=1053&doc=1183');
        Scholio::portalStudy($icps, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MSc ΕΦΑΡΜΟΣΜΕΝΗΣ ΚΛΙΝΙΚΗΣ ΨΥΧΟΛΟΓΙΑΣ', 'http://www.icps.edu.gr/css/default/templates/course/article.php?lng=1&cat=1053&doc=1186');
        Scholio::portalStudy($icps, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MSc ΠΡΟΣΩΠΟΚΕΝΤΡΙΚΗΣ ΣΥΜΒΟΥΛΕΥΤΙΚΗΣ & ΨΥΧΟΘΕΡΑΠΕΙΑΣ', 'http://www.icps.edu.gr/css/default/templates/course/article.php?lng=1&cat=1053&doc=1185');
        Scholio::portalStudy($icps, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MSc ΨΥΧΟΛΟΓΙΑΣ ΥΓΕΙΑΣ', 'http://www.icps.edu.gr/css/default/templates/course/article.php?lng=1&cat=1053&doc=1184');

        Scholio::portalSocial($icps, 'facebook', 'https://www.facebook.com/pages/ICPS-Institution-for-Counselling-Psychological-Studies/160563514029991');
        Scholio::portalSocial($icps, 'linkedin', 'https://www.linkedin.com/company/1984419?trk=NUS_CMPY_TWIT');
        Scholio::portalSocial($icps, 'twitter', 'https://twitter.com/ICPS_Athens?utm_source=fb&utm_medium=fb&utm_campaign=ICPS_Athens&utm_content=247086104094838784');
        Scholio::portalSocial($icps, 'youtube', 'https://www.youtube.com/user/ICPSCollege');

        new Portal($icps, 5, 'college');

        $idef = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'IdEF', 'email' => 'idef@idef.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'IdEF'])->id,
            'address' => 'Κηφισίας 125-12',
            'city' => 'Αθήνα',
            'phone' => 2106980772,
            'type_id' => 1,
            'website' => 'www.idef.gr',
            'approved' => 1,
            'about' => 'Το Κολλέγιο Institution dEtudes Francophones (IdEF) άρχισε τη λειτουργία του το 1995 συμπράττοντας με το Δημόσιο Γαλλικό Πανεπιστήμιο Paris 13 – Sorbonne Paris Cite, με σκοπό την παροχή των ακαδημαϊκών προγραμμάτων του Paris 13 στην Ελλάδα.

    Οι φοιτητές του IdEF είναι κανονικά εγγεγραμμένοι φοιτητές στο Πανεπιστήμιο Paris 13, έχουν την ίδια φοιτητική ιδιότητα και λαμβάνουν την ίδια εκπαίδευση με τους φοιτητές που σπουδάζουν στο Παρίσι.

    Με την επιτυχή ολοκλήρωση κάθε κύκλου σπουδών (LICENCE, MASTER) το Πανεπιστήμιο Paris 13 απονέμει στους έλληνες πτυχιούχους τα Εθνικά Γαλλικά πτυχία και Master όπως ακριβώς συμβαίνει και με τους γάλλους φοιτητές.

    Τα πτυχία είναι υπογεγραμμένα από τον Πρόεδρο του Πανεπιστημίου Paris 13 και από τον Πρύτανη της Ακαδημίας και αναγνωρίζονται σε όλη την Ευρώπη και τον κόσμο ως πτυχία της Σορβόννης. Στην Ελλάδα η αναγνώριση γίνεται από το ΣΑΕΠ του Υπουργείου Παιδείας και Θρησκευμάτων δυνάμει του ν.4093/2012 (ΦΕΚ 222Α’).

    Το IdEF λειτουργεί ως Κολλέγιο αδειοδοτημένο από το Υπουργείο Παιδείας και Θρησκευμάτων (Y.A. 103548/IA/10-9-2012, ΦΕΚ 2566Β’) και κατά το ιδρυτικό καταστατικό του είναι αστική μη κερδοσκοπική εταιρεία.

    Το Πανεπιστήμιο Paris 13 και το Κολλέγιο IdEF εφαρμόζουν ακριβώς την ίδια πολιτική σε ότι αφορά τους φοιτητές. Για το σκοπό αυτό δίνεται μεγάλη σημασία στην υποδοχή τους, στην προσαρμογή τους, στον προσανατολισμό τους και την επιτυχία τους.

    ΣΥΝΟΠΤΙΚΗ ΠΑΡΟΥΣΙΑΣΗ ΤΟΥ ΠΑΝΕΠΙΣΤΗΜΙΟΥ PARIS 13

    Το Πανεπιστήμιο Paris 13 – Sorbonne Paris Cite είναι ένα από τα σημαντικότερα Δημόσια Γαλλικά Πανεπιστήμια πολλαπλών κατευθύνσεων. Αριθμεί σήμερα περισσότερους από 24.000 φοιτητές σε όλο το φάσμα των ακαδημαϊκών σπουδών. Βρίσκεται στην βόρεια  περιφέρεια του Παρισιού και είναι εγκατεστημένο σε πέντε Πανεπιστημιουπόλεις.

    Το Paris 13 είναι ένα σύγχρονο και γεμάτο δυναμισμό Πανεπιστήμιο, διεθνώς αναγνωρισμένο και ευρέως γνωστό για την ποικιλία των επιστημονικών κατευθύνσεων που παρέχει. Συνδυάζει το υψηλό επίπεδο επιστημονικής κατάρτισης και τις απαιτήσεις μιας ανώτατης εκπαίδευσης με την επαγγελματική εξειδίκευση σε όλους τους επαγγελματικούς τομείς. Αυτό σημαίνει ότι δίνεται μεγάλη σημασία στην εκπαίδευση, που αποσκοπεί στη διαμόρφωση στελεχών και επαγγελματιών υψηλής ποιότητας.
    ',
            'background' => $background,
        ]);

        Scholio::portalStudy($idef, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'Νομική', 'http://http://www.idef.gr/site/index.php/el/departmentsmenu/nomiki/proptyhiakolaw');
        Scholio::portalStudy($idef, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'Νομική', 'http://www.idef.gr/site/index.php/el/departmentsmenu/nomiki');
        Scholio::portalStudy($idef, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Οικονομίας και Διοίκηση', 'http://www.idef.gr/site/index.php/el/departmentsmenu/financeand-administration');
        Scholio::portalStudy($idef, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Οικονομίας και Διοίκηση', 'http://www.idef.gr/site/index.php/el/departmentsmenu/financeand-administration');

        Scholio::portalSocial($idef, 'facebook', 'https://el-gr.facebook.com/%CE%9A%CE%9F%CE%9B%CE%9B%CE%95%CE%93%CE%99%CE%9F-IdEF-%CE%A4%CE%BF-%CE%93%CE%91%CE%9B%CE%9B%CE%99%CE%9A%CE%9F-%CE%9A%CE%9F%CE%9B%CE%9B%CE%95%CE%93%CE%99%CE%9F-%CF%84%CE%B7%CF%82-%CE%95%CE%9B%CE%9B%CE%91%CE%94%CE%91%CE%A3-39814978756/');
        Scholio::portalSocial($idef, 'youtube', 'https://www.youtube.com/user/idef08');

        new Portal($idef, 5, 'college');

        $cnam = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'René Descartes', 'email' => 'info@cnam.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'cnam'])->id,
            'address' => 'Σίνα 31',
            'city' => 'Αθήνα',
            'phone' => 2103644422,
            'type_id' => 1,
            'website' => 'www.cnam.gr',
            'approved' => 1,
            'about' => 'Το Κολλέγιο René Descartes δραστηριοποιείται στην Ελλάδα από το 2000 με στόχο την εξειδίκευση επαγγελματιών, μέσα από υψηλού επιπέδου εκπαιδευτικά προγράμματα και σεμινάρια, στον κλάδο παροχής υπηρεσιών υγείας, μάνατζμεντ, μάρκετινγκ και επικοινωνίας.

    Στεγάζεται στην οδό Σίνα, στο κέντρο της Αθήνας, στο ιστορικό κτίριο του Γαλλικού Ινστιτούτου και εκπροσωπεί αποκλειστικά στην Ελλάδα, το δημόσιο γαλλικό πανεπιστήμιο Cnam - Conservatoire National des Arts et Métiers, ένα από τα μεγαλύτερα και εγκυρότερα εκπαιδευτικά ιδρύματα της Γαλλίας.

    Μέχρι σήμερα, το Κολλέγιο έχει συμβάλλει στην εξειδίκευση πάνω από 700 επαγγελματιών, κερδίζοντας την υποστήριξη και τον σεβασμό της αγοράς. Οι απόφοιτοί του στελεχώνουν από τις πιο υψηλόβαθμες θέσεις, κυρίως στον ιδιωτικό τομέα.

    Τα προγράμματα πραγματοποιούνται στην ελληνική γλώσσα και είναι ειδικά διαμορφωμένα ώστε να απαντούν στα απαιτητικά ωράρια και τις υποχρεώσεις των επαγγελματιών.


    ',
            'background' => $background,
        ]);

        Scholio::portalStudy($cnam, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Διοίκηση Μονάδων Υγείας και Πρόνοιας', 'https://cnam.gr/%CE%BC%CE%B5%CF%84%CE%B1%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CF%8C-%CE%B4%CE%B9%CE%BF%CE%AF%CE%BA%CE%B7%CF%83%CE%B7-%CE%BC%CE%BF%CE%BD%CE%AC%CE%B4%CF%89%CE%BD-%CF%85%CE%B3%CE%B5%CE%AF%CE%B1/');

        Scholio::portalSocial($cnam, 'facebook', 'https://el-gr.facebook.com/KollegioReneDescartes');
        Scholio::portalSocial($cnam, 'linkedin', 'http://www.linkedin.com/company/3341370?trk=prof-0-ovw-curr_pos');

        new Portal($cnam, 5, 'college');

// //college (λειπουν 2 φωτο)
//         $HAEd = factory(App\Models\School::class)->create([
//             'user_id' => factory(App\User::class)->create(['name' => 'Hellenic Association for Education', 'email' => 'info@haed.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'HAEd'])->id,
//             'address' => 'HAEd Building, CGS Campus, Pallini',
//             'city' => 'Αθήνα',
//             'phone' => 2106663956,
//             'type_id' => 6,
//             'website' => 'www.haed.edu.gr',
//             'approved' => 1,
//             'about' => 'Η Ελληνική Εκπαιδευτική Εταιρεία λειτουργεί Κέντρο Έρευνας για τη Μάθηση και την Καινοτομία, το οποίο συμμετέχει σε ευρωπαϊκό και διεθνές επίπεδο σε μεγάλες δράσεις καινοτομίας στα εκπαιδευτικά συστήματα, και ακόμη προσφέρει υψηλής ποιότητας τριτοβάθμια εκπαίδευση, κυρίως στους τομείς των παιδαγωγικών, των κοινωνικών επιστημών και ευρύτερα της ανάπτυξης του ανθρώπινου δυναμικού.

//     Η Ελληνική Εκπαιδευτική Εταιρεία (ΕΕΕ) συνεστήθη με πρωτοβουλία των Εκπαιδευτηρίων Κωστέα-Γείτονα, ενός από τους πλέον έγκυρους εκπαιδευτικούς οργανισμούς στη χώρα, με στόχο να συμβάλλει στην έρευνα και τη βελτίωση της ποιότητας του εκπαιδευτικού έργου, στην Ελλάδα και την Ευρώπη.',
//             'background' => $background,
//         ]);

//         Scholio::portalStudy($HAEd, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MA (Hons) Education', 'http://haed.edu.gr/?page_id=4758');

//         new Portal($HAEd, 5, 'college');
    }
}
