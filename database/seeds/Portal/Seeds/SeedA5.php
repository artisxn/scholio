<?php

use App\Models\School;
use App\Scholio\Scholio;
use Illuminate\Database\Seeder;
use Portal\Portal;

class SeedA5 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $background = Portal::createImages('/upload/school/univ.png')->id;

//college (insitute)
        $Sae = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Sae Institute', 'email' => 'athens@sae.edu', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'iCon'])->id,
            'address' => 'Δημητρακοπούλου 49Α & Νότη Μπότσαρη 17',
            'city' => 'Αθήνα',
            'phone' => 2109248534,
            'type_id' => 6,
            'website' => 'www.sae.edu/grc/el',
            'approved' => 1,
            'about' => 'Το SAE Creative Media College είναι μέλος του ομίλου SAE Institute, του μεγαλύτερου εκπαιδευτικού φορέα στον τομέα των Creative Media παγκοσμίως, που συνοδεύεται από 40 επιτυχημένα χρόνια εμπειρίας κι εξειδίκευσης.

    Το SAE Creative Media College προσφέρει σύγχρονα προγράμματα σπουδών επιπέδου Bachelor που χαρακτηρίζονται από υψηλή ποιότητα και διεθνή αναγνώριση σε συνεργασία με το Middlesex University του Λονδίνου. Εδώ, θα εκπαιδευτείς από κορυφαίους επαγγελματίες της βιομηχανίας των Creative Media που θα δώσουν έμφαση στη μοναδικότητά σου, θα αποκτήσεις πρόσβαση στις state-of-the-art εγκαταστάσεις, στον επαγγελματικό εξοπλισμό και τα studios της SAE, ακόμα και για τα προσωπικά σου projects.

    Κατά τη διάρκεια των σπουδών σου στο SAE Creative Media College θα συνδυάσεις τη θεωρία και την εφαρμογή αυτής σε πραγματικές συνθήκες, ενώ ταυτόχρονα θα εξελίξεις τη δημιουργικότητά και τις ικανότητές σου σε ένα άρτιο επαγγελματικό επίπεδο. Με την επιτυχημένη ολοκλήρωση των σπουδών σου θα έχεις εξοπλιστεί με ένα portfolio που θα αποδεικνύει τις δεξιότητές σου και σου προσφέρει σημαντικό προβάδισμα για να κάνεις ένα δυναμικό ξεκίνημα στην καριέρα σου.',
            'background' => $background,
        ]);

        Scholio::portalStudy($Sae, 'Προπτυχιακές Σπουδές-Bachelor', '', 'BACHELOR IN AUDIO PRODUCTION (BA/BSC)', 'http://www.sae.edu/grc/el/babsc-hons-audio-production');
        Scholio::portalStudy($Sae, 'Προπτυχιακές Σπουδές-Bachelor', '', 'BACHELOR IN DIGITAL FILM PRODUCTION (BA/BSC)', 'http://www.sae.edu/grc/el/babsc-hons-digital-film-production');
        Scholio::portalStudy($Sae, 'Προπτυχιακές Σπουδές-Bachelor', '', 'BACHELOR IN GAME ART ANIMATION (BA/BSC)', 'http://www.sae.edu/grc/el/babsc-hons-game-art-animation');
        Scholio::portalStudy($Sae, 'Προπτυχιακές Σπουδές-Bachelor', '', 'BACHELOR IN GAMES PROGRAMMING (BSC)', 'http://www.sae.edu/grc/el/bsc-hons-games-programming');
        Scholio::portalStudy($Sae, 'Προπτυχιακές Σπουδές-Bachelor', '', 'BACHELOR IN WEB DEVELOPMENT (BA/BSC)', 'http://www.sae.edu/grc/el/web-development');

        Scholio::portalSocial($Sae, 'facebook', 'https://www.facebook.com/SAEATHENS/');
        Scholio::portalSocial($Sae, 'instagram', 'https://www.instagram.com/sae_athens/');
        Scholio::portalSocial($Sae, 'vimeo', 'https://vimeo.com/saeathens');
        Scholio::portalSocial($Sae, 'twitter', 'https://twitter.com/saeathens');
        Scholio::portalSocial($Sae, 'youtube', 'https://www.youtube.com/user/SAEathens');
        Scholio::portalSocial($Sae, 'soundcloud', 'https://soundcloud.com/saeathens');

//college (εχει και σεμηναρια)
        $iCon = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'iCon International Training', 'email' => 'info@icon.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'iCon'])->id,
            'address' => 'Κοραή 2, Μοσχάτο',
            'city' => 'Αθήνα',
            'phone' => 2103217661,
            'type_id' => 6,
            'website' => 'www.icon.gr',
            'approved' => 1,
            'about' => ' Πλήρης ευελιξία και προσαρμοστικότητα

    Αποκτήστε τον τίτλο που θα βοηθήσει την καριέρα σας χωρίς οι σπουδές να γίνουν εμπόδιο στην επαγγελματική και προσωπική σας ζωή
    Επιλέξτε να σπουδάσετε από οπουδήποτε και αν βρίσκεστε (στο σπίτι, στην εργασία, στις διακοπές) και μετακινηθείτε οπουδήποτε θέλετε (άλλη πόλη ή άλλη χώρα) χωρίς να διακόπτεται η πρόοδός σας
    Μπορείτε να σπουδάσετε με την μέθοδο της ευέλικτης εμπλουτισμένης μάθησης (Blended learning), δηλαδή με συνεχή υποστήριξη και μαθήματα ή εξ αποστάσεως (distance learning) ή εναλλακτικά στην πανεπιστημιούπολη στο Εδιμβούργο ή στο Ντουμπάι ή στη Μαλαισία
    Αρχίστε τις σπουδές σας οποιαδήποτε στιγμή επιθυμείτε και προχωρήστε με το δικό σας ρυθμό
    Επιλέξτε ανάμεσα σε πολλά μαθήματα εκείνα που προτιμάτε όποτε εξυπηρετεί εσάς
    Παρακολουθήστε διαλέξεις, μαθήματα και workshops αν και όταν θέλετε, χρησιμοποιώντας on-line διδασκαλία και βίντεο από τις παρουσιάσεις/ διαλέξεις και χρησιμοποιήστε από τα πολλά βοηθήματα μάθησης που σας παρέχονται
    Μπορείτε για ένα μέρος των σπουδών σας να επισκεφθείτε και το Campus του πανεπιστημίου για να γνωρίσετε το Πανεπιστήμιο από μέσα
    Επιλέξτε ανάμεσα σε 4 εξεταστικές περιόδους τον χρόνο, για να συμμετέχετε όταν αισθάνεστε έτοιμοι για την εξέταση
    Πάρτε το πτυχίο που επιθυμείτε γρηγορότερα ή αργότερα από 1 έως 7 χρόνια
    Υψηλότατη ποιότητα του Πανεπιστημίου Heriot Watt

    To HWU είναι ένα από τα παλαιότερα (1821), και ταυτόχρονα από τα πιο σύγχρονα Πανεπιστήμια
    Από τα καλύτερα Βρετανικά Πανεπιστήμια με κορυφαία κρατική πιστοποίηση (Royal Charter)
    Εξελέγη Σκωτσέζικο Πανεπιστήμιο της Χρονιάς 2011-2012 και 2012-2013
    Αξιολογήθηκε ως 4ο στο Ηνωμένο Βασίλειο στον τομέα των κατασκευών (Guardian, 2015)
    και 4ο στο Ηνωμένο Βασίλειο στον τομέα Business, Management & Marketing (Guardian, 2015) μεταξύ 113 Πανεπιστημίων
    Επαγγελματική αξία του ΜΒΑ του Edinburgh Business School (EBS)

    Η ύλη και το περιεχόμενο των μαθημάτων εκσυγχρονίζεται κάθε 3 χρόνια
    Προσφέρει σπουδές εφαρμοσμένες και προσανατολισμένες στην αγορά για μια επιτυχημένη καριέρα
    Οι κάτοχοι του MBA είναι περιζήτητοι επαγγελματίες σε πολλές χώρες
    200 από τις καλύτερες πολυεθνικές επιχειρήσεις απασχολούν EBS MBAs (Fortune 500)
    Διεθνής απήχηση

    Προσφέρει τη δυνατότητα σπουδών σε 5 σύγχρονες πανεπιστημιουπόλεις σε όλο τον κόσμο
    Τα βιβλία του MBA και οι εξετάσεις προσφέρονται στα Αγγλικά, Αραβικά, Κινέζικα, Ισπανικά και Ρώσικα
    Για τις εξετάσεις μπορείτε να επιλέξτε μεταξύ 350 εξεταστικών κέντρων σε όλο τον κόσμο (3 στην Ελλάδα)
    Το πιο δημοφιλές στον κόσμο (Financial Times, 2013), με περίπου 12.000 φοιτητές και 18.600 αποφοίτους σε 166 χώρες
    Οικονομικά προσιτές σπουδές και ευέλικτη αποπληρωμή των διδάκτρων

    Δεν χρειάζεται να ταξιδέψετε και να ζήσετε στο Ηνωμένο Βασίλειο για σπουδές
    Τα δίδακτρα του MBA είναι μέχρι και κατά 64% χαμηλότερα από ότι στο Εδιμβούργο
    Πληρώνετε τα δίδακτρά σας ανάλογα με την πρόοδο των σπουδών σας',
            'background' => $background,
        ]);

        Scholio::portalStudy($iCon, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Bachelor in International Business and Management Studies', 'https://www.icon.gr/el/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-study-in-greece/%CF%80%CF%81%CE%BF%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-bachelor-e%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-greece/10-bachelor-in-international-business-and-management-studies');
        Scholio::portalStudy($iCon, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA στην Ελλάδα Master of Business Administration', 'https://www.icon.gr/el/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-study-in-greece/%CE%BC%CE%B5%CF%84%CE%B1%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-master-mba-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-greece/15-master-of-business-administration-mba-greece');
        Scholio::portalStudy($iCon, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA in Finance στην Ελλάδα', 'https://www.icon.gr/el/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-study-in-greece/%CE%BC%CE%B5%CF%84%CE%B1%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-master-mba-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-greece/16-mba-in-finance-greece');
        Scholio::portalStudy($iCon, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA in Marketing στην Ελλάδα', 'https://www.icon.gr/el/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-study-in-greece/%CE%BC%CE%B5%CF%84%CE%B1%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-master-mba-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-greece/17-mba-in-marketing-greece');
        Scholio::portalStudy($iCon, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA in Human Resource Management στην Ελλάδα', 'https://www.icon.gr/el/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-study-in-greece/%CE%BC%CE%B5%CF%84%CE%B1%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-master-mba-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-greece/18-mba-in-human-resource-management-greece');
        Scholio::portalStudy($iCon, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA in Strategic Planning στην Ελλάδα', 'https://www.icon.gr/el/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-study-in-greece/%CE%BC%CE%B5%CF%84%CE%B1%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-master-mba-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-greece/19-mba-in-strategic-planning-mba-greece');
        Scholio::portalStudy($iCon, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA με επιλογή μαθημάτων Oil & Gas Management στην Ελλάδα', 'https://www.icon.gr/el/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-study-in-greece/%CE%BC%CE%B5%CF%84%CE%B1%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-master-mba-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-greece/252-mba-in-oil-and-gas-mba-greece');
        Scholio::portalStudy($iCon, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MSc in Financial Management στην Ελλάδα', 'https://www.icon.gr/el/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-study-in-greece/%CE%BC%CE%B5%CF%84%CE%B1%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-master-mba-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-greece/20-msc-in-finance-master-greece');
        Scholio::portalStudy($iCon, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MSc in Human Resource Management', 'https://www.icon.gr/el/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-study-in-greece/%CE%BC%CE%B5%CF%84%CE%B1%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-master-mba-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-greece/21-msc-in-human-resource-management-hrm');
        Scholio::portalStudy($iCon, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MSc in Marketing στην Ελλάδα', 'https://www.icon.gr/el/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-study-in-greece/%CE%BC%CE%B5%CF%84%CE%B1%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-master-mba-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-greece/22-msc-in-marketing-master-greece');
        Scholio::portalStudy($iCon, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Master of Science (MSc) in Strategic Planning στην Ελλάδα', 'https://www.icon.gr/el/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-study-in-greece/%CE%BC%CE%B5%CF%84%CE%B1%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-master-mba-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-greece/23-msc-in-strategic-planning-master-greece');
        Scholio::portalStudy($iCon, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Master of Science (MSc) in Real Estate Investment & Finance στην Ελλάδα', 'https://www.icon.gr/el/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-study-in-greece/%CE%BC%CE%B5%CF%84%CE%B1%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-master-mba-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-greece/24-msc-in-real-estate-investment-finance-master-greece');
        Scholio::portalStudy($iCon, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MSc in Real Estate Management & Development στην Ελλάδα', 'https://www.icon.gr/el/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-study-in-greece/%CE%BC%CE%B5%CF%84%CE%B1%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-master-mba-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-greece/25-msc-in-real-estate-management-development-master-greece');
        Scholio::portalStudy($iCon, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MSc in Construction Project Management στην Ελλάδα', 'https://www.icon.gr/el/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-study-in-greece/%CE%BC%CE%B5%CF%84%CE%B1%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-master-mba-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-greece/26-msc-in-construction-project-management');
        Scholio::portalStudy($iCon, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MSc in Quantity Surveying στην Ελλάδα', 'https://www.icon.gr/el/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-study-in-greece/%CE%BC%CE%B5%CF%84%CE%B1%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-master-mba-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-greece/27-msc-in-quantity-surveying-greece');
        Scholio::portalStudy($iCon, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MSc in Facilities Management στην Ελλάδα', 'https://www.icon.gr/el/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-study-in-greece/%CE%BC%CE%B5%CF%84%CE%B1%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-master-mba-%CE%B5%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1-greece/28-msc-in-facilities-management-greece');

        Scholio::portalSocial($Sae, 'facebook', 'http://www.facebook.com/iCon.International.College');
        Scholio::portalSocial($Sae, 'linkedin', 'http://www.linkedin.com/company/icon-international-training');
        Scholio::portalSocial($Sae, 'googleplus', 'https://plus.google.com/105962403456362234508/posts');
        Scholio::portalSocial($Sae, 'twitter', 'http://www.twitter.com/iConTrainingGr');
        Scholio::portalSocial($Sae, 'youtube', 'http://www.youtube.com/user/TheiConcollege');

//school
        $Raptou = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Mary Raptou School', 'email' => 'info@sxoleioraptou.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'Raptou'])->id,
            'address' => 'Καρδίτσης 21',
            'city' => 'Λάρισα',
            'phone' => 2410624403,
            'type_id' => 6,
            'website' => 'www.sxoleioraptou.gr',
            'approved' => 1,
            'about' => '  Από τον Παιδικό Σταθμό έως το Λύκειο, στο πλευρό των οικογενειών της Λάρισας από το 1957.
    ',
            'background' => $background,
        ]);

        Scholio::portalStudy($Raptou, 'Νηπιαγωγείο', '', '', '');
        Scholio::portalStudy($Raptou, 'Γυμνάσιο', '', '', '');
        Scholio::portalStudy($Raptou, 'Λύκειο', '', '', '');

        Scholio::portalSocial($Raptou, 'facebook', 'https://www.facebook.com/pg/sxoleioraptou/community/?ref=page_internal');

//school
        $elek = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Ελληνικά Εκαπαιδευτήρια Δράκου', 'email' => 'elek@elek.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'elek'])->id,
            'address' => 'Περιφερειακή Οδός Λάρισας-Τρκάλων',
            'city' => 'Λάρισα',
            'phone' => 2410661387,
            'type_id' => 6,
            'website' => 'www.elek-edu.gr',
            'approved' => 1,
            'about' => '  ΤΑ ΕΛΛΗΝΙΚΑ ΕΚΠΑΙΔΕΥΤΗΡΙΑ ιδρύθηκαν το 1996 και αποτελούν μια σύγχρονη και άριστα οργανωμένη εκπαιδευτική μονάδα που ξεχωρίζει για το υψηλό επίπεδο εκπαίδευσης που προσφέρει στον χώρο της Α΄θμιας και προσχολικής αγωγής στην πόλη της Λάρισας.

    Η συνέπεια και η σταθερότητα στις αρχές  που χαρακτηρίζουν την πολυετή πορεία του Σχολείου, η ζεστή προσωπική σχέση με τον κάθε μαθητή και η ανάδειξη του συνόλου των δυνατοτήτων ενός παιδιού μέσα από πολύπλευρες παιδαγωγικές δραστηριότητες αποδίδουν το στίγμα της φιλοσοφίας των Ελληνικών Εκπαιδευτηρίων.',
            'background' => $background,
        ]);

        Scholio::portalStudy($elek, 'Παιδικός Σταθμός', '', '', '');
        Scholio::portalStudy($elek, 'Νηπιαγωγείο', '', '', '');
        Scholio::portalStudy($elek, 'Δημοτικό', '', '', '');

        Scholio::portalSocial($elek, 'facebook', 'https://www.facebook.com/profile.php?id=100006935953490');
        Scholio::portalSocial($elek, 'instagram', 'https://instagram.com/www.ellek-edu.gr');

//school
        $delasalle = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Κολέγιο ΔΕΛΑΣΑΛ', 'email' => 'info@delasalle.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'delasalle'])->id,
            'address' => 'Πεύκα',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310673252,
            'type_id' => 6,
            'website' => 'www.delasalle.gr',
            'approved' => 1,
            'about' => '  Το Κολέγιο «ΔΕΛΑΣΑΛ», ένα λασαλιανό σχολείο που ιδρύθηκε το 1888 στη Θεσσαλονίκη, στηρίζεται στην εμπειρία, στον διάλογο, στη συνεργασία και την πίστη σε κοινές αξίες (χριστιανικές και ανθρωπιστικές), οι οποίες προσδίδουν στο «Λασαλιανό Εκπαιδευτικό Σχέδιο» μια ανθρωπιστική και πνευματική δυναμική.

    Το «ΔΕΛΑΣΑΛ», σεβόμενο απόλυτα την ελευθερία συνείδησης του ατόμου, δέχεται μαθητές χωρίς θρησκευτικές, δογματικές, πολιτικές, φυλετικές, οικονομικές και κοινωνικές διακρίσεις. Έτσι, εξασφαλίζει την αποδοχή της διαφορετικότητας του άλλου, την αμοιβαία κατανόηση και την εκτίμηση, καθώς και τον σεβασμό της ιδιαιτερότητας του καθενός. Με τον τρόπο αυτόν, συμβάλλει τα μέγιστα στην αγάπη και την ειρήνη ανάμεσα στους ανθρώπους. Ο μαθητής βρίσκεται στο κέντρο του ενδιαφέροντος της εκπαιδευτικής πράξης, η οποία πάνω απ’ όλα είναι έργο αγάπης.

    Οι λασαλιανοί εκπαιδευτικοί έχουν συνείδηση ότι επιτελούν λειτούργημα, αφοσιώνονται στη μόρφωση και την αγωγή των νέων, πιστοί στην προτροπή του Ιωάννη-Βαπτιστή Δελασάλ, ιδρυτή των σχολείων τους: «Πρέπει το παράδειγμά σας να ανταποκρίνεται σ’ αυτά που λέτε …».

    Σήμερα, στην εποχή της παγκοσμιοποίησης, της ισοπέδωσης και της σύγχυσης αρχών και αξιών, το λασαλιανό σχολείο, επίκαιρο όσο ποτέ, βοηθάει τους μαθητές του όχι μόνο να αποκτήσουν γνώσεις και εφόδια, αλλά και να δώσουν νόημα στη ζωή τους.

     ',
            'background' => $background,
        ]);

        Scholio::portalStudy($delasalle, 'Παιδικός Σταθμός - Νηπιαγωγείο', '', '', 'http://petit.delasalle.gr/');
        Scholio::portalStudy($delasalle, 'Δημοτικό', '', '', 'http://www.elementary.delasalle.gr/');
        Scholio::portalStudy($delasalle, 'Γυμνάσιο - Λύκειο', '', '', 'http://www.gymlyk.delasalle.gr/');

        Scholio::portalSocial($delasalle, 'facebook', 'https://www.facebook.com/DeLaSalle.Thes');
        Scholio::portalSocial($delasalle, 'twitter', 'https://twitter.com/DeLaSalle_Thes');
        Scholio::portalSocial($delasalle, 'youtube', 'https://www.youtube.com/user/DeLaSalleCollegeThes');

//school
        $andreadis = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Εκπαιδευτήρια Ανδρεάδη', 'email' => 'info@andreadis-school.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'andreadis'])->id,
            'address' => 'Ωραιόκαστρο',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310699900,
            'type_id' => 6,
            'website' => 'www.andreadis-school.gr',
            'approved' => 1,
            'about' => '  Τα Εκπαιδευτήρια Ανδρεάδη προσφέρουν εκπαιδευτικές υπηρεσίες σε παιδιά Παιδικού Σταθμού, Νηπιαγωγείου και Δημοτικού.

    Τα εκπαιδευτικά μας προγράμματα διακρίνονται για τον πολυδιάστατο χαρακτήρα τους όπου συνδυάζουν την ελληνική παιδεία με την ευρωπαϊκή διάσταση και την παγκόσμια προοπτική, μέσα από ένα ενισχυμένο πρόγραμμα που καλύπτει εκτός από το Αναλυτικό Πρόγραμμα του Υπουργείου Παιδείας, επιπλέον εκπαιδευτικές ώρες καθώς και μια μεγάλη ποικιλία ειδικών και καινοτόμων προγραμμάτων.

    Σε μια εποχή ραγδαίων εξελίξεων σε κοινωνικοπολιτικό, οικονομικό και τεχνολογικό επίπεδο, προσδιορίζουμε τους βασικούς μας τους στόχους σε δύο κεντρικούς άξονες:

    στην εκπαίδευση των μαθητών με στόχο την απόκτηση γνώσεων, και με κύρια έμφαση στη Γλώσσα, στα Μαθηματικά και στα Αγγλικά
    στην εξοικείωσή τους με τους τρόπους αξιοποίησης των γνώσεων αυτών, μέσα από διαφορετικές προσεγγίσεις και διερευνητική «ματιά»
    Η πραγμάτωση των δύο αυτών αξόνων εφοδιάζει τους μαθητές όχι μόνο με γνώσεις αλλά και με «ανοιχτούς ορίζοντες σκέψης» για να κινητοποιεί όλους τους μηχανισμούς ανάπτυξης των δεξιοτήτων, τόσο διανοητικών όσο και ψυχοσωματικών.

    Η μάθηση στα Εκπαιδευτήριά μας συνδέει την γνώση με τα βιώματα των παιδιών, τα ενδιαφέροντά τους, τις ανάγκες τους αλλά και με ποικίλες διαφορετικές καταστάσεις της πραγματικής ζωής. Η μάθηση δεν είναι στατική. Με μια σειρά από καινοτομίες και παρεμβάσεις οι εκπαιδευτικοί ενθαρρύνουν την ανάπτυξη της δημιουργικότητας, της φαντασίας, της έκφρασης, της κριτικής σκέψης και της συλλογικής προσπάθειας κάθε μαθητή ώστε να εξελιχθεί σε μία ολοκληρωμένη προσωπικότητα συνεχίζοντας τη μαθητεία του με επιτυχία στο Γυμνάσιο και μετέπειτα στην επαγγελματική του ζωή ως ενήλικας.

    Γνώσεις – Ανοιχτοί ορίζοντες σκέψης – Ολοκληρωμένη προσωπικότητα – Επιτυχημένη εξέλιξη: αυτό είναι το τετράπτυχο της εκπαιδευτικής φιλοσοφίας των Εκπαιδευτηρίων μας που το χτίζουμε από τα πρώτα βήματα της σχολικής ζωής των μαθητών μας.

     ',
            'background' => $background,
        ]);

        Scholio::portalStudy($andreadis, 'Παιδικός Σταθμός - Νηπιαγωγείο', '', '', 'https://www.andreadis-school.gr/paidikos-stathmos-nipiagwgeio');
        Scholio::portalStudy($andreadis, 'Δημοτικό', '', '', 'https://www.andreadis-school.gr/dimotiko');
        Scholio::portalStudy($andreadis, 'English Academy', '', '', 'https://www.andreadis-school.gr/english-academy');

        Scholio::portalSocial($andreadis, 'facebook', 'https://www.facebook.com/andreadis.school');
        Scholio::portalSocial($andreadis, 'youtube', 'https://www.youtube.com/channel/UC_V1NKwpVZHWuQ3JJGVLpkQ');

//school
        $elpida = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Εκπαιδευτήρια Ελπίδα', 'email' => 'elpidaek@otenet.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'elpida'])->id,
            'address' => 'Γεωργίου Γεννηματά',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310678747,
            'type_id' => 6,
            'website' => 'www.ekpelpida.gr',
            'approved' => 1,
            'about' => '  Τα Εκπαιδευτήρια «ΕΛΠΙΔΑ» βρίσκονται λίγα χιλιόμετρα έξω από την πόλη της Θεσσαλονίκης, στην περιοχή του Φιλύρου, με άριστη αρχιτεκτονική δομή, λειτουργικά κτίρια εναρμονισμένα με το πανέμορφο φυσικό περιβάλλον και με καταπληκτική θέα στο Θερμαϊκό. Ιδρύθηκαν το 2009 και λειτουργούν με την ευθύνη της Ορθόδοξης Αδελφότητας «Χριστιανική Ελπίς». Εμπνευστής και καθοδηγητής του έργου υπήρξε ο μακαριστός καθηγητής της Θεολογικής Σχολής του Α.Π.Θ. Στέργιος Σάκκος.

    Σήμερα λειτουργούν ΠΑΙΔΙΚΟΣ ΣΤΑΘΜΟΣ, ΝΗΠΙΑΓΩΓΕΙΟ, ΔΗΜΟΤΙΚΟ, με επιλεγμένο έμπειρο εκπαιδευτικό και βοηθητικό προσωπικό.

    Η μετακίνηση των παιδιών γίνεται ιδιωτικά από τους γονείς ή με τα σχολικά λεωφορεία των Εκπαιδευτηρίων.



     ',
            'background' => $background,
        ]);

        Scholio::portalStudy($elpida, 'Παιδικός Σταθμός', '', '', 'https://ekpelpida.gr/%CF%80%CE%B1%CE%B9%CE%B4%CE%B9%CE%BA%CF%8C%CF%82-%CF%83%CF%84%CE%B1%CE%B8%CE%BC%CF%8C%CF%82/');
        Scholio::portalStudy($elpida, 'Νηπιαγωγείο', '', '', 'https://ekpelpida.gr/%CE%BD%CE%B7%CF%80%CE%B9%CE%B1%CE%B3%CF%89%CE%B3%CE%B5%CE%AF%CE%BF/');
        Scholio::portalStudy($elpida, 'Δημοτικό', '', '', 'https://ekpelpida.gr/%CE%B4%CE%B7%CE%BC%CE%BF%CF%84%CE%B9%CE%BA%CF%8C-%CF%83%CF%87%CE%BF%CE%BB%CE%B5%CE%AF%CE%BF/');

        Scholio::portalSocial($andreadis, 'youtube', 'https://www.youtube.com/channel/UCkaWXN3ImskaxjnYrL92Nag');

//school
        $efth = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Γαλλικό Σχολείο Θεσσαλονίκης', 'email' => 'info@ift.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'efth'])->id,
            'address' => 'Λεωφόρος Στρατού 2Α ',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310821231,
            'type_id' => 6,
            'website' => 'www.efth.gr',
            'approved' => 1,
            'about' => ' Το Γαλλικό Σχολείο Θεσσαλονίκης παρέχει από το Νηπιαγωγείο έως το Λύκειο εκπαίδευση, εγκεκριμένη από τη Γαλλία και αναγνωρισμένη από τις ελληνικές αρχές.

    Το  σχολικό έτος 2016/2017, το σχολείο έχει 120 μαθητές, 2 - 17 ετών.

    Στο Γαλλικό Σχολείο Θεσσαλονίκης φοιτούν μαθητές όλων των εθνικοτήτων λόγω του κοσμοπολιτικού χαρακτήρα της πόλης μας και οι μαθητές προέρχονται, κατά ισχυρή πλειοψηφία, από ελληνικές και μεικτές ελληνογαλλικές οικογένειες.

    Τα κύρια πλεονεκτήματα που εκτιμούν και αναφέρουν μαθητές και γονείς είναι :
    • η ποιότητα του διδακτικού προσωπικού εκπαιδευμένου στις γαλλικές παιδαγωγικές μεθόδους
    • το άνοιγμα προς τον κόσμο μέσω της διδασκαλίας των γλωσσών και της ποικιλομορφίας της προέλευσης των μαθητών
    • ο πλούτος και η αναγνωρισμένη αποτελεσματικότητα του γαλλικού εκπαιδευτικού συστήματος, κυρίως για το Νηπιαγωγείο
    • το οικογενειακό περιβάλλον που διαμορφώνουν οι εγκαταστάσεις του σχολείου
    • τα ολιγομελή τμήματα που δίνουν τη δυνατότητα εξατομικευμένης παρακολούθησης του κάθε μαθητή
    • η συστέγαση με το Γαλλικό Ινστιτούτο, που προσφέρει στους μαθητές πλήθος πολιτιστικών δραστηριοτήτων.

    Tο Γαλλικό Σχολείο Θεσσαλονίκης είναι το μόνο γαλλικό ίδρυμα στη Θεσσαλονίκη και στη Βόρεια Ελλάδα. Παρέχει κοσμική εκπαίδευση και σέβεται την αρχή της Γαλλικής « Λαϊκής »  Αποστολής «δύο πολιτισμοί, τρεις γλώσσες»: η νεοελληνική γλώσσα  διδάσκεται από τα Προνήπια,  η αγγλική διδάσκεται από τα Νήπια.

    Πολλοί από τους Έλληνες μαθητές μας, κατά την έναρξη της φοίτησής τους, δεν μιλούν γαλλικά. Όμως, η διδασκαλία και οι εκπαιδευτικές μας μέθοδοι τους καθιστούν ικανούς,  μετά από μερικά χρόνια διδασκαλίας, να χειρίζονται άριστα τη γαλλική γλώσσα, δηλαδή να γίνουν ουσιαστικά δίγλωσσοι ( και με την αγγλική γλώσσα, τρίγλωσσοι ). Εάν μεταπηδήσουν στο ελληνικό σύστημα, είναι ήδη εφοδιασμένοι με σημαντικές δεξιότητες, γνώση πολλών γλωσσών και εμπειρία πολλών πολιτισμών.

    Από την ίδρυσή του, το 1906, το Γαλλικό Σχολείο της Θεσσαλονίκης, γνωστό ως « Λυσέ », είναι θεσμός στην πόλη. Συνόδευσε την πολυτάραχη ιστορία της, για πάνω από έναν αιώνα. Έκλεισε και καταστράφηκε κατά τη διάρκεια των δύο παγκοσμίων πολέμων, επανοικοδομήθηκε το 1946 και καταστράφηκε εκ νέου από πυρκαγιά το 1968.

    Το σημερινό κτήριο, στο οποίο στεγάζεται και το Γαλλικό Ινστιτούτο, χτίστηκε το 1971.



     ',
            'background' => $background,
        ]);

        Scholio::portalStudy($efth, 'Νηπιαγωγείο', '', '', 'http://www.efth.gr/el/ekpaideysi/nipia');
        Scholio::portalStudy($efth, 'Δημοτικό', '', '', 'http://www.efth.gr/el/ekpaideysi/dimotiko');
        Scholio::portalStudy($efth, 'Γυμνάσιο - Λύκειο', '', '', 'http://www.efth.gr/el/ekpaideysi/cned');

        Scholio::portalSocial($efth, 'googleplus', 'https://plus.google.com/u/0/117185202389407230897');
        Scholio::portalSocial($efth, 'facebook', 'https://www.facebook.com/institutfrancaisthessalonique/');
        Scholio::portalSocial($efth, 'twitter', 'https://twitter.com/ifthessalonique');
        Scholio::portalSocial($efth, 'youtube', 'https://www.youtube.com/user/IFTofficiel');

//school
        $montessorianiagogi = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Μοντεσσοριανή Αγωγή', 'email' => 'info@montessorianiagogi.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'montessorianiagogi'])->id,
            'address' => 'ΠΟΥΡΝΑΡΙ ΠΥΛΑΙΑΣ ',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310320190,
            'type_id' => 6,
            'website' => 'www.montessorianiagogi.gr',
            'approved' => 1,
            'about' => '


Το σχολείο μας, “Μοντεσσοριανή Aγωγή”, ιδρύθηκε το 1982. Η “Μοντεσσοριανή Aγωγή” είναι το μοναδικό Μοντεσσοριανό σχολείο στην πόλη μας που καλύπτει όλη τη νηπιακή και παιδική ηλικία: Παιδικός Σταθμός, Νηπιαγωγείο – Δημοτικό και βασίζει την δουλειά του εξολοκλήρου στις αρχές της Μοντεσσοριανής φιλοσοφίας.

Σύμφωνα με τη σύγχρονη παιδαγωγική η θεμελίωση της προσωπικότητας του παιδιού, ψυχολογική, πνευματική, κοινωνική ολοκληρώνεται στα πέντε πρώτα χρόνια της ζωής του. Αυτή η προσωπικότητα θεμελιώνεται σύμφωνα με τη μέθοδο Μοντεσσόρι, με την ελεύθερη δράση του παιδιού μέσα σ’ ένα επιστημονικά οργανωμένο περιβάλλον που έχει πλούσιο υλικό απασχόλησης. Υλικό που ανταποκρίνεται στα σταδιακά προβλήματα της πολυποίκιλης ανάπτυξης. Το περιβάλλον αυτό δεν είναι μόνο υλικό με την έννοια πως έχει ορισμένες ασχολίες και ορισμένο παιδαγωγικό υλικό.

Είναι συγχρόνως και κυρίως ένα πνευματικό περιβάλλον, ένα κατάλληλο ψυχολογικό κλίμα όπου οι σχέσεις ενηλίκων και παιδιών και των παιδιών μεταξύ τους στηρίζονται στην αξιοπρέπεια, στο σεβασμό. Η έλλειψη του κατάλληλου ψυχικού περιβάλλοντος στο πολύ μικρό παιδί δημιουργεί τεράστιους κινδύνους για την ψυχική και την πνευματική του συγκρότηση.

Η ζωή του παιδιού είναι η κίνηση, η δράση. Ας του οργανώσουμε λοιπόν ένα περιβάλλον υλικό και πνευματικό που ανταποκρίνεται στις δικές του ανάγκες είτε βρίσκεται στη νηπιακή ηλικία είτε στην παιδική, και ας το αφήσουμε ελεύθερο να δράσει, να δημιουργήσει, χωρίς τη συνεχή επέμβαση του ενήλικα.

Ας γίνουν οι αίθουσες των παιδιών από την πιο μικρή ηλικία ως την πιο μεγάλη χώροι εργασίας και χαράς, κυψέλες δημιουργίας και όχι χώροι διαλέξεων των δασκάλων. Το σχολείο μας είναι περήφανο για ότι τα παιδιά του είναι ελεύθερα και χαρούμενα μέσα σ’ ένα περιβάλλον γεμάτο αγάπη και φροντίδα, γι’ αυτά χτίζουν με την προσωπική τους εργασία το μέλλον τους.




     ',
            'background' => $background,
        ]);

        Scholio::portalStudy($montessorianiagogi, 'Παιδικός Σταθμός', '', '', 'http://www.montessorianiagogi.gr/paidikos.html');
        Scholio::portalStudy($montessorianiagogi, 'Νηπιαγωγείο', '', '', 'http://www.montessorianiagogi.gr/nhpia.html');
        Scholio::portalStudy($montessorianiagogi, 'Δημοτικό', '', '', 'http://www.montessorianiagogi.gr/dhmotiko.htmld');

//school
        $pinewood = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Pinewood American International School', 'email' => 'info@pinewood.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'pinewood'])->id,
            'address' => '14th km Thessalonikis - N.Moudanion, P.O.',
            'city' => 'Thermi, Thessaloniki, Greece',
            'phone' => 2310301221,
            'type_id' => 6,
            'website' => 'www.pinewood.gr',
            'approved' => 1,
            'about' => ' Img 6021
    Pinewood Profile
    Share:
    Curious Thinkers, Creative Thinkers, Caring Thinkers
    See our Core Values


    Mission Statement
    Pinewood aims to offer students a progressive, personalized American international education centered on academic excellence in each student’s journey towards self-actualization. This is achieved in a stimulating, multicultural learning environment that emphasizes service, respect for ethical values and awareness of local culture.

    Vision Statement
    The Pinewood American International School strives to be a growing center of excellence in the region by educating students through best practices for reaching their full potential as adaptable global citizens. Revised October 2009
    ',
            'background' => $background,
        ]);

        Scholio::portalStudy($pinewood, '', '', '', '');
        Scholio::portalStudy($pinewood, '', '', '', '');
        Scholio::portalStudy($pinewood, '', '', '', '');
        Scholio::portalStudy($pinewood, '', '', '', '');
        Scholio::portalStudy($pinewood, '', '', '', '');
        Scholio::portalStudy($pinewood, '', '', '', '');
        Scholio::portalStudy($pinewood, '', '', '', '');
        Scholio::portalStudy($pinewood, '', '', '', '');
        Scholio::portalStudy($pinewood, '', '', '', '');

        Scholio::portalSocial($pinewood, 'instagram', 'https://www.instagram.com/pinewoodthessaloniki/');
        Scholio::portalSocial($pinewood, 'facebook', 'https://www.facebook.com/pinewoodthessaloniki');
        Scholio::portalSocial($pinewood, 'twitter', 'https://twitter.com/pinewoodschools');
        Scholio::portalSocial($pinewood, 'linkedin', 'https://www.linkedin.com/company/pinewood-american-international-school-of-thessaloniki/');

    }
}
