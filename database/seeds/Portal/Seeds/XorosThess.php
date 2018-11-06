<?php

use App\Models\School;
use App\Scholio\Scholio;
use Illuminate\Database\Seeder;
use Portal\Portal;

class XorosThess extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $background = Portal::createImages('/upload/school/univ.png')->id;

        /*===============   svigka   ================*/
        $s = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create([
                'name' => 'Σχολή Χορού Αγγελική Σβήγκα',
                'email' => 'info@svigka.gr',
                'password' => bcrypt('123456'), 'role' => 'school',
                'username' => 'svigka'])->id,
            'address' => 'Δορυλαίου 57 & Αμφιπόλεως',
            'city' => 'Θεσσαλονίκη',
            'region' => 'Τούμπα',
            'phone' => 2310936355,
            'type_id' => 10,
            'website' => 'svigka.gr',
            'approved' => 1,
            'about' => 'Το 1983 ξεκινούν τα πρώτα βήματα της Σχολής. Αρχίζουν να συγκεντρώνονται οι πρώτοι μαθητές που λαχταρούν να μάθουν την τέχνη του χορού, την ευγενή αυτή έκφραση της κίνησης και των συναισθημάτων.

            Κατά τη διάρκεια αυτής της διαδρομής,εδώ και σχεδόν τρείς δεκαετίες, πέρασαν πολλοί μαθητές από τη σχολή. Παιδιά που αγάπησαν το χορό,παιδιά που ασχολήθηκαν επαγγελματικά με το χορό και απέκτησαν μέσα από τη Σχολή γερές βάσεις για να ολοκληρώσουν τις σπουδές τους και να ξεκινήσουν το δικό τους "ταξίδι". Παιδιά που μεγάλωσαν και  έγιναν γονείς και που μας εμπιστεύτηκαν με τη σειρά τους τα δικά τους παιδιά.

            Το κάθε παιδί είναι μια μοναδική προσωπικότητα, ένας υπερευαίσθητος δέκτης που καταγράφει κάθε ερέθισμα υπό το πρίσμα της σκέψης και των συναισθημάτων του. Αυτός είναι και ο λόγος που η διδασκαλία του χορού καθώς και ο τρόπος επικοινωνίας με το παιδί απαιτεί ευαισθησία και υπευθυνότητα.Θέλουμε τα παιδιά μας να είναι χαρούμενα και ευτυχισμένα!

            Στόχος μας είναι να είμαστε πάντα κοντά στα παιδιά και τις ανάγκες τους δίνοντας μεγάλη προσοχή στη σωματική τους ασφάλεια ,να τα καθοδηγούμε στον όμορφο κόσμο του χορού με σοβαρότητα και σεβασμό στην προσωπικότητά τους και να προσφέρουμε τις υπηρεσίες μας στον χώρο του πολιτισμού.

            Δάσκαλοι με αναγνωρισμένο δίπλωμα από το Υπουργείο Πολιτισμού,με γνώση και εμπειρία διδάσκουν σκύβοντας με αγάπη και προσοχή πάνω από κάθε παιδί ξεχωριστά.

            Η Σχολή Χορού Χορού της Αγγελικής Σβήγκα είναι αναγνωρισμένη από το Υπουργείο Πολιτισμού σύμφωνα με το νόμο 1158/81 και Π.Δ. 457/83, είναι μέλος του Σωματείου Ιδιωτικών Σχολών Χορού Ελλάδος.(Σ.Ι.Σ.Χ.Ε.) και μέλος του CID -  UNESCO (Διεθνές Συμβούλιο Χορού).

            Ευχαριστούμε όλους τους γονείς που στηρίζουν όλα αυτά τα χρόνια το έργο μας,που  δείχνουν την εκτίμηση στην ποιότητα της δουλειάς μας,  και κυρίως που μας εμπιστεύονται τα παιδιά τους.

            <br> “Άνοιξα μια μεγάλη, μια πολύ μεγάλη αγκαλιά και έβαλα μέσα ότι πολυτιμότερο. Τα παιδιά και την αγάπη που αξίζει σε κάθε ένα από αυτά. Αυτή την αγάπη κατά κύριο λόγο προσπαθούμε να μεταδώσουμε. Ο χορός είναι το μέσον. Το πιο σημαντικό είναι αυτό που μένει στην ψυχή τους.”

            Αγγελική Σβήγκα',
            'background' => $background,
        ]);

        new Portal($s, 6, 'xoros');

        Scholio::portalStudy($s, 'Νηπίων - Παιδικά', 'Τμήματα Χορού', 'Κλασσικό Μπαλέτο (Σύστημα Vaganova)', '');
        Scholio::portalStudy($s, 'Νηπίων - Παιδικά', 'Τμήματα Χορού', 'Σύγχρονος Χορός(Release-Limon-Graham)', '');
        Scholio::portalStudy($s, 'Νηπίων - Παιδικά', 'Τμήματα Χορού', 'Ρυθμική Μουσικοκινητική Αγωγή Νηπίων - Orff & Dalcrose.', '');
        Scholio::portalStudy($s, 'Νηπίων - Παιδικά', 'Τμήματα Χορού', 'Κάρακτερ - Φολκλορικοί χοροί', '');

        Scholio::portalStudy($s, 'Εφηβικά - Ενηλίκων', 'Τμήματα Χορού', 'Κλασσικό Μπαλέτο (Σύστημα Vaganova)', '');
        Scholio::portalStudy($s, 'Εφηβικά - Ενηλίκων', 'Τμήματα Χορού', 'Σύγχρονος Χορός(Release-Limon-Graham)', '');
        Scholio::portalStudy($s, 'Εφηβικά - Ενηλίκων', 'Τμήματα Χορού', 'Ρυθμική Μουσικοκινητική Αγωγή Νηπίων - Orff & Dalcrose.', '');
        Scholio::portalStudy($s, 'Εφηβικά - Ενηλίκων', 'Τμήματα Χορού', 'Κάρακτερ - Φολκλορικοί χοροί', '');

        Scholio::portalStudy($s, 'Αρχαρίων - Προχωρημένων', 'Τμήματα Χορού', 'Κλασσικό Μπαλέτο (Σύστημα Vaganova)', '');
        Scholio::portalStudy($s, 'Αρχαρίων - Προχωρημένων', 'Τμήματα Χορού', 'Σύγχρονος Χορός(Release-Limon-Graham)', '');
        Scholio::portalStudy($s, 'Αρχαρίων - Προχωρημένων', 'Τμήματα Χορού', 'Ρυθμική Μουσικοκινητική Αγωγή Νηπίων - Orff & Dalcrose.', '');
        Scholio::portalStudy($s, 'Αρχαρίων - Προχωρημένων', 'Τμήματα Χορού', 'Κάρακτερ - Φολκλορικοί χοροί', '');

        Scholio::portalSocial($s, 'facebook', 'https://www.facebook.com/svigka');
        Scholio::portalSocial($s, 'youtube', 'https://www.youtube.com/svigka');

        /*===============   xoroxoros   ================*/
        $s = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Σχολή Χορού Χοροχώρος', 'email' => 'peggy25679@gmail.com', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'xoroxoros'])->id,
            'address' => 'Βελισσαρίου 8',
            'city' => 'Θεσσαλονίκη',
            'region' => 'Φάληρο',
            'phone' => 2310843957,
            'type_id' => 10,
            'website' => 'facebook.com/Χοροχώρος-695391473890754/',
            'approved' => 1,
            'about' => 'Διδάσκονται κλασικό(σύστημα Vaganova), μουσικοκινητική αγωγή, σύγχρονο,hip hop, yoga, musical. Τμήματα παιδικά, ενηλίκων προχωρημένων και αρχαρίων.',
            'background' => $background,
        ]);

        new Portal($s, 5, 'xoros');

        Scholio::portalStudy($s, 'Παιδικά - Ενηλίκων', 'Τμήματα Χορού', 'Κλασικό(σύστημα Vaganova)', '');
        Scholio::portalStudy($s, 'Παιδικά - Ενηλίκων', 'Τμήματα Χορού', 'Μουσικοκινητική αγωγή', '');
        Scholio::portalStudy($s, 'Παιδικά - Ενηλίκων', 'Τμήματα Χορού', 'Σύγχρονο', '');
        Scholio::portalStudy($s, 'Παιδικά - Ενηλίκων', 'Τμήματα Χορού', 'Hip Hop', '');
        Scholio::portalStudy($s, 'Παιδικά - Ενηλίκων', 'Τμήματα Χορού', 'Yoga', '');
        Scholio::portalStudy($s, 'Παιδικά - Ενηλίκων', 'Τμήματα Χορού', 'Musical', '');

        Scholio::portalStudy($s, 'Αρχαρίων - Προχωρημένων', 'Τμήματα Χορού', 'Κλασικό(σύστημα Vaganova)', '');
        Scholio::portalStudy($s, 'Αρχαρίων - Προχωρημένων', 'Τμήματα Χορού', 'Μουσικοκινητική αγωγή', '');
        Scholio::portalStudy($s, 'Αρχαρίων - Προχωρημένων', 'Τμήματα Χορού', 'Σύγχρονο', '');
        Scholio::portalStudy($s, 'Αρχαρίων - Προχωρημένων', 'Τμήματα Χορού', 'Hip Hop', '');
        Scholio::portalStudy($s, 'Αρχαρίων - Προχωρημένων', 'Τμήματα Χορού', 'Yoga', '');
        Scholio::portalStudy($s, 'Αρχαρίων - Προχωρημένων', 'Τμήματα Χορού', 'Musical', '');

        Scholio::portalSocial($s, 'facebook', 'https://www.facebook.com/pg/%CE%A7%CE%BF%CF%81%CE%BF%CF%87%CF%8E%CF%81%CE%BF%CF%82-695391473890754/about/?ref=page_internal');

        /*===============   evafevgidou   ================*/
        $s = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Σχολή Μπαλέτου Εύα Φεβγίδου', 'email' => 'evafevgidou@gmail.com', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'evafevgidou'])->id,
            'address' => 'Ιουστινιανού 2, Καλαμαριά',
            'city' => 'Θεσσαλονίκη',
            'region' => 'Καλαμαριά',
            'phone' => 2310936355,
            'type_id' => 10,
            'website' => 'evafevgidou.gr',
            'approved' => 1,
            'about' => 'Η Εύα Φεβγίδου ξεκίνησε να χορεύει σε ηλικία 6 χρονών. Παρακολούθησε μαθήματα μπαλέτου στη Χ.Ε.Ν. Χαριλάου και αργότερα σε ηλικία 12 χρονών μαθήματα Jazz στο ‘Ρυθμό’ Θεσσαλονίκης. Μετά από μία σύντομη παρακολούθηση στην επαγγελματική σχολή της ‘Αμαλίας Στρυνοπούλου’ έφυγε στο εξωτερικό όπου σπούδασε Πολιτικές Επιστήμες και Σύγχρονη Ιστορία στο Πανεπιστήμιο του Salford, Greater Manchester της Μ.Βρετανίας.
            Παράλληλα, παρακολούθησε μαθήματα ( Κλακέτας, Jazz και Μπαλέτου ) στην M.T.S. σχολή χορού του Manchester, όπου και απέκτησε το δίπλωμα της Professional Performer ( Επαγγελματίας Χορεύτρια ) Intermediate Level, με το οποίο απέκτησε επαγγελματική επάρκεια.
            Το 1998 με την απόκτηση του Πανεπιστημιακού της τίτλου, απέκτησε και το δίπλωμα της Royal Society of Arts ( Βασιλικής Κοινωνίας Τεχνών ) ‘Exercise to Music’ Fitness Instructor.
            Συγχρόνως εργάστηκε ως Γυμνάστρια και Σύμβουλος Διατροφής στην πολυτελή αλυσίδα γυμναστηρίων ‘Bannatyne’s Health Club’. ο 1999 κέρδισε υποτροφία χορού από το κολλέγιο του ‘Preston’ στην Αγγλία όπου φοίτησε πλήρως για ένα χρόνο. Το 2000 εργάστηκε στην αλυσίδα κρουαζιερόπλοιων ‘ Costa’ ως βασική τους χορεύτρια στο ‘Costa Riviera’ κρουαζιερόπλοιο. Μετά την ολοκλήρωση του συμβολαίου της ξεκίνησε μεταπτυχιακές σπουδές στο ανοιχτό πανεπιστήμιο της Αγγλίας στα ‘Media’ με έδρα της το Λονδίνο. Εκεί, εργάσθηκε ως χορεύτρια στο ‘Ministry of Sound’ καθώς και με διεθνής DJ’s.
            Στο Λονδίνο, παρακολούθησε σεμινάρια χορού καθώς και masterclasses στα διάσημα Danceworks και Pinaple Studios.
            Μέχρι το 2002 απασχολήθηκε ως βασική αντιπρόσωπος πωλήσεων του New London Theatre ( το θρυλικό θέατρο όπου πρωτοανέβηκε η παράσταση ‘ Cats’ ) στο West End του Λονδίνου και ως υπεύθυνη των παραστάσεων ‘The Lady Salsa Show’. Τη χορευτική της καριέρα συνέχισε με συμβόλαια στην Ευρώπη ( Κοπεγχάγη , νήσος Τζέρσεϊ ).
            Με την επιστροφή της στην Ελλάδα το 2002 ασχολήθηκε για ένα χρόνο ως χορεύτρια σε τοπικά μπαλέτα με γνωστούς Έλληνες καλλιτέχνες και δίδαξε σε σχολή χορού όπου χορογράφησε μέρος της παράστασης που ανέβηκε στο Μέγαρο Μουσικής Θεσσαλονίκης. Το 2016 κατέκτησε το τελευταίο πτυχίο για Διδασκαλία και προετοιμασία Δασκάλων στον Μοντέρνο-Σύγχρονο χορό και μπαλέτο
            • Η Ακαδημαϊκή χρονιά 2017-2018 ήταν πολύ πετυχημένη για την σχολή καθώς μαθήτριες της σχολής μας είχαν αρκετές επιτυχίες στον Χορό. Αναλυτικά μαθήτρια μας πέρασε σε Πανεπιστήμιο της Νέας Υόρκης και του Τέξας για να συνεχίσει τις σπουδές της πάνω στο Μιούζικαλ και το Θέατρο. Μαθήτρια μας επιλέχτηκε στον ετήσιο Διαγωνισμό του Πιστοποιημένου Οργανισμού μας I.D.T.A. , ως μια από τις καλύτερες στον κόσμο, για την κατάκτηση μιας υποτροφίας. Αποκορύφωμα της χρονιάς , η πολύ πετυχημένη παράσταση που ανέβηκε στο Βασιλικό Θέατρο με τίτλο ΠΛΑΝΗΤΗΣ ΓΗ < η Χρυσήλια και το Ρομπότ>, βασισμένο στο ομότιτλο παραμύθι του κ. Σταύρου Δίτσιου και σε σκηνοθεσία του ίδιου του δημιουργού
            • Imperial Society of Teachers in Dance
            Από το 2018 έγινε δεκτή στην Διεθνή Ακαδημία του I.S.T.D. του Λονδίνου για την κατάκτηση των πτυχίων Licentiate και Fellowship στο μπαλέτο.Το διάστημα 2005-2009 δίδαξε ως εξωτερική συνεργάτης στα μεταμεσημβρινά τμήματα χορού των εκπαιδευτηρίων Μαντουλίδη. Από το 2009 έως το 2011 μετά από σπουδές στο Λονδίνο, απέκτησε το πτυχίο του Licentiate in Ballet. Εξακολουθεί επιδεικνύοντας ζήλο για τις σπουδές της, με τελευταίο της εγχείρημα τον τίτλο του ‘Fellow ‘.Το 2016 έναρξη ερασιτεχνικής σχολής χορού Εύα Φεβγίδου σε νέες πολυτελείς εγκαταστάσεις με δυο μεγάλες αίθουσες.',
            'background' => $background,
        ]);

        new Portal($s, 5, 'xoros');

        Scholio::portalStudy($s, 'Τμήματα Χορού 1', 'Μπαλέτο', 'ΜΟΥΣΙΚΟΚΙΝΗΤΙΚΗ ΑΓΩΓΗ ΓΙΑ ΑΓΟΡΙΑ & ΚΟΡΙΤΣΙΑ - Baby Ballet (2-3 ετών)', 'https://www.evafevgidou.gr/baby-ballet1-%CE%AD%CF%89%CF%82-3-%CE%B5%CF%84%CF%8E%CE%BD/');
        Scholio::portalStudy($s, 'Τμήματα Χορού 1', 'Μπαλέτο', 'PRE-BALLET (3-5 ετών)', 'https://www.evafevgidou.gr/baby-ballet/');
        Scholio::portalStudy($s, 'Τμήματα Χορού 1', 'Μπαλέτο', 'Κλασσικό Μπαλέτο (6-18 ετών)', 'https://www.evafevgidou.gr/%CE%BA%CE%BB%CE%B1%CF%83%CF%83%CE%B9%CE%BA%CE%B7-%CF%80%CE%B1%CE%B9%CE%B4%CE%B5%CE%B9%CE%B1-6-12-%CE%B5%CF%84%CF%89%CE%BD/');
        Scholio::portalStudy($s, 'Τμήματα Χορού 1', 'Μπαλέτο', 'Σύγχρονος Χορός', 'https://www.evafevgidou.gr/%CF%83%CF%8D%CE%B3%CF%87%CF%81%CE%BF%CE%BD%CE%BF%CF%82-%CF%87%CE%BF%CF%81%CF%8C%CF%82/');
        Scholio::portalStudy($s, 'Τμήματα Χορού 1', 'Άλλοι Χωροί', 'Θεατρικός Χορός Musical', 'https://www.evafevgidou.gr/%CE%B8%CE%B5%CE%B1%CF%84%CF%81%CE%B9%CE%BA%CE%BF%CF%83-%CF%87%CE%BF%CF%81%CE%BF%CF%83-musical/');
        Scholio::portalStudy($s, 'Τμήματα Χορού 1', 'Άλλοι Χωροί', 'Κλακέτες', 'https://www.evafevgidou.gr/%CE%BA%CE%BB%CE%B1%CE%BA%CE%B5%CF%84%CE%B5%CF%83/');
        Scholio::portalStudy($s, 'Τμήματα Χορού 1', 'Άλλοι Χωροί', 'Μοντέρνο Jazz', 'https://www.evafevgidou.gr/%CE%BC%CE%BF%CE%BD%CF%84%CE%B5%CF%81%CE%BD%CE%BF-jazz/');
        Scholio::portalStudy($s, 'Τμήματα Χορού 1', 'Άλλοι Χωροί', 'Hatha yoga', 'https://www.evafevgidou.gr/%CE%B3%CE%B9%CF%8C%CE%B3%CE%BA%CE%B1/');

        Scholio::portalStudy($s, 'Τμήματα Χορού 2', 'Μπαλέτο', 'Μπαλέτο Ενηλίκων', 'https://www.evafevgidou.gr/%CE%BC%CF%80%CE%B1%CE%BB%CE%AD%CF%84%CE%BF-%CE%B5%CE%BD%CE%B7%CE%BB%CE%AF%CE%BA%CF%89%CE%BD/');
        Scholio::portalStudy($s, 'Τμήματα Χορού 2', 'Άλλοι Χωροί', 'Ρυθμική', 'https://www.evafevgidou.gr/%CF%81%CF%85%CE%B8%CE%BC%CE%B9%CE%BA%CE%AE/');
        Scholio::portalStudy($s, 'Τμήματα Χορού 2', 'Ζωγραφική', 'Εργαστήρι Ζωγραφικής', 'https://www.evafevgidou.gr/671-2/');
        Scholio::portalStudy($s, 'Τμήματα Χορού 2', 'Άλλοι Χωροί', 'Προετοιμασία δασκάλων', 'https://www.evafevgidou.gr/%CF%80%CF%81%CE%BF%CE%B5%CF%84%CE%BF%CE%B9%CE%BC%CE%B1%CF%83%CE%AF%CE%B1-%CE%B4%CE%B1%CF%83%CE%BA%CE%AC%CE%BB%CF%89%CE%BD/');
        Scholio::portalStudy($s, 'Τμήματα Χορού 2', 'Άλλοι Χωροί', 'ΑΤΟΜΙΚΕΣ ΣΥΝΕΔΡΙΕΣ', 'https://www.evafevgidou.gr/%CE%B1%CF%84%CE%BF%CE%BC%CE%B9%CE%BA%CE%B5%CF%83-%CF%83%CF%85%CE%BD%CE%B5%CE%B4%CF%81%CE%B9%CE%B5%CF%83/');
        Scholio::portalStudy($s, 'Τμήματα Χορού 2', 'Άλλοι Χωροί', 'ΧΟΡΟΣ ΜΕΣΩ ΙΝΤΕΡΝΕΤ', 'https://www.evafevgidou.gr/%CF%87%CE%BF%CF%81%CE%BF%CF%83-%CE%BC%CE%B5%CF%83%CF%89-%CE%B9%CE%BD%CF%84%CE%B5%CF%81%CE%BD%CE%B5%CF%84/');

        Scholio::portalSocial($s, 'facebook', 'https://www.facebook.com/FevgidouEva/?ref=br_rs');
        Scholio::portalSocial($s, 'youtube', 'https://www.youtube.com/user/EvaFevgidou');

        /*===============   Vida Loca   ================*/
        $s = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Σχολή Χορού Vida Loca Dance Studio', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'vidaloca'])->id,
            'address' => '25ης Μαρτίου 91 & Εθνικής Αντιστάσεως, Εύοσμος',
            'city' => 'Θεσσαλονίκη',
            'region' => 'Εύοσμος',
            'phone' =>  2310660035,
            'type_id' => 10,
            'website' => 'http://vidaloca.gr',
            'approved' => 1,
            'about' => 'Η Σχολή Χορού Vida Loca ιδρύθηκε το 2005 και δραστηριοποιείται στη Θεσσαλονίκη έκτοτε στη διδασκαλία του χορού. Η διεύθυνση και το προσωπικό της απαρτίζεται από πτυχιούχους καθηγητές χορού και λοιπών σχολών ανωτέρας εκπαίδευσης με πολυετή εμπειρία στο χορό.

            Αντικείμενο της η διδασκαλία χορού τόσο σε ερασιτεχνικό όσο και σε επαγγελματικό επίπεδο σε όλα τα είδη κοινωνικού χορού.

            Η Σχολή δραστηριοποιείται και στον αθλητικό χορό με συμμετοχή των μαθητών & χορευτών της σε χοροαθλητικές διοργανώσεις και διαγωνισμούς χορού, Πανελλήνιους και μη, από τους οποίους έχει αποσπάσει στο ενεργητικό της πλήθος χρυσών μεταλλίων και λοιπών διακρίσεων!

            Η Σχολή Χορού Vida Loca είναι πλήρες Μέλος της Ελληνικής Ομοσπονδίας Χορού I.D.O. HELLAS και του Διεθνούς Οργανισμού Χορού I.D.O. (www.ido-dance.com – έτος ιδρύσεως 1981) από το 2015 μετέχοντας επίσημα στους διαγωνισμούς χορού του Πρωταθλήματος και Κυπέλλου Ελλάδος κι εκπροσωπώντας την Ελλάδα στο εξωτερικό.

            Η Σχολή έχει ως σκοπό να μεταδώσει την ομορφιά του χορού τόσο σε νεαρούς μαθητές/τριες από την ηλικία των 3 ετών αλλά και σε ενήλικες μαθητές, ερασιτέχνες και μη, σε όλα τα είδη χορού.

            Στόχος μας είναι να δημιουργούμε όχι μόνο καλούς χορευτές και αθλητές χορού αλλά να συμβάλλουμε κι εμείς με τον τρόπο μας στην κοινωνική τους ανάπτυξη μέσα από τη διδαχή του χορού.

            Ελάτε κι εσείς στην οικογένεια της Vida Loca όπως τόσοι άλλοι το έχουν πράξει ήδη…!',
            'background' => $background,
        ]);

        new Portal($s, 5, 'xoros');

        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'ΤΜΗΜΑΤΑ ΧΟΡΟΥ ΠΡΟΣΧΟΛΙΚΗΣ ΗΛΙΚΙΑΣ', 'ΜΟΥΣΙΚΟΚΙΝΗΤΙΚΗΣ & ΡΥΘΜΙΚΗΣ ΑΓΩΓΗΣ (3-4 ΕΤΩΝ & 4-5 ΕΤΩΝ)', 'http://vidaloca.gr/?page_id=933');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'ΤΜΗΜΑΤΑ ΧΟΡΟΥ ΝΗΠΙΑΓΩΓΕΙΟΥ – Α’ ΤΑΞΗΣ ΔΗΜΟΤΙΚΟΥ (5-7 ΕΤΩΝ)', 'ΚΛΑΣΣΙΚΟΣ ΧΟΡΟΣ', 'http://vidaloca.gr/?page_id=933');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'ΤΜΗΜΑΤΑ ΧΟΡΟΥ ΝΗΠΙΑΓΩΓΕΙΟΥ – Α’ ΤΑΞΗΣ ΔΗΜΟΤΙΚΟΥ (5-7 ΕΤΩΝ)', 'ΜΟΝΤΕΡΝΟΣ ΧΟΡΟΣ', 'http://vidaloca.gr/?page_id=933');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'ΤΜΗΜΑΤΑ ΧΟΡΟΥ ΝΗΠΙΑΓΩΓΕΙΟΥ – Α’ ΤΑΞΗΣ ΔΗΜΟΤΙΚΟΥ (5-7 ΕΤΩΝ)', 'HIP HOP/COMMERCIAL', 'http://vidaloca.gr/?page_id=933');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'ΤΜΗΜΑΤΑ ΧΟΡΟΥ ΝΗΠΙΑΓΩΓΕΙΟΥ – Α’ ΤΑΞΗΣ ΔΗΜΟΤΙΚΟΥ (5-7 ΕΤΩΝ)', 'LATIN BASIC', 'http://vidaloca.gr/?page_id=933');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'ΤΜΗΜΑΤΑ ΧΟΡΟΥ ΔΗΜΟΤΙΚΟΥ (7-12 ΕΤΩΝ)', 'ΚΛΑΣΣΙΚΟΣ ΧΟΡΟΣ', 'http://vidaloca.gr/?page_id=933');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'ΤΜΗΜΑΤΑ ΧΟΡΟΥ ΔΗΜΟΤΙΚΟΥ (7-12 ΕΤΩΝ)', 'ΜΟΝΤΕΡΝΟΣ', 'http://vidaloca.gr/?page_id=933');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'ΤΜΗΜΑΤΑ ΧΟΡΟΥ ΔΗΜΟΤΙΚΟΥ (7-12 ΕΤΩΝ)', 'ΣΥΓΧΡΟΝΟΣ', 'http://vidaloca.gr/?page_id=933');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'ΤΜΗΜΑΤΑ ΧΟΡΟΥ ΔΗΜΟΤΙΚΟΥ (7-12 ΕΤΩΝ)', 'LATIN', 'http://vidaloca.gr/?page_id=933');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'ΤΜΗΜΑΤΑ ΧΟΡΟΥ ΔΗΜΟΤΙΚΟΥ (7-12 ΕΤΩΝ)', 'HIP HOP/COMMERCIAL', 'http://vidaloca.gr/?page_id=933');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'ΤΜΗΜΑΤΑ ΧΟΡΟΥ ΔΗΜΟΤΙΚΟΥ (7-12 ΕΤΩΝ)', 'ORIENTAL', 'http://vidaloca.gr/?page_id=933');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'ΤΜΗΜΑΤΑ ΧΟΡΟΥ ΔΗΜΟΤΙΚΟΥ (7-12 ΕΤΩΝ)', 'BALLROOM', 'http://vidaloca.gr/?page_id=933');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'ΤΜΗΜΑΤΑ ΧΟΡΟΥ ΔΗΜΟΤΙΚΟΥ (7-12 ΕΤΩΝ)', 'BREAK DANCE', 'http://vidaloca.gr/?page_id=933');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'ΤΜΗΜΑΤΑ ΧΟΡΟΥ ΔΗΜΟΤΙΚΟΥ (7-12 ΕΤΩΝ)', 'ΑΓΩΝΙΣΤΙΚΑ ΤΜΗΜΑΤΑ “ALL LADIES FREE STYLE”', 'http://vidaloca.gr/?page_id=933');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'ΤΜΗΜΑΤΑ ΧΟΡΟΥ ΓΥΜΝΑΣΙΟΥ – ΛΥΚΕΙΟΥ (13-17 ΕΤΩΝ)', 'ΚΛΑΣΣΙΚΟΣ ΧΟΡΟΣ', 'http://vidaloca.gr/?page_id=933');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'ΤΜΗΜΑΤΑ ΧΟΡΟΥ ΓΥΜΝΑΣΙΟΥ – ΛΥΚΕΙΟΥ (13-17 ΕΤΩΝ)', 'ΜΟΝΤΕΡΝΟΣ', 'http://vidaloca.gr/?page_id=933');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'ΤΜΗΜΑΤΑ ΧΟΡΟΥ ΓΥΜΝΑΣΙΟΥ – ΛΥΚΕΙΟΥ (13-17 ΕΤΩΝ)', 'ΣΥΓΧΡΟΝΟΣ', 'http://vidaloca.gr/?page_id=933');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'ΤΜΗΜΑΤΑ ΧΟΡΟΥ ΓΥΜΝΑΣΙΟΥ – ΛΥΚΕΙΟΥ (13-17 ΕΤΩΝ)', 'LATIN', 'http://vidaloca.gr/?page_id=933');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'ΤΜΗΜΑΤΑ ΧΟΡΟΥ ΓΥΜΝΑΣΙΟΥ – ΛΥΚΕΙΟΥ (13-17 ΕΤΩΝ)', 'HIP HOP/COMMERCIAL', 'http://vidaloca.gr/?page_id=933');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'ΤΜΗΜΑΤΑ ΧΟΡΟΥ ΓΥΜΝΑΣΙΟΥ – ΛΥΚΕΙΟΥ (13-17 ΕΤΩΝ)', 'ORIENTAL', 'http://vidaloca.gr/?page_id=933');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'ΤΜΗΜΑΤΑ ΧΟΡΟΥ ΓΥΜΝΑΣΙΟΥ – ΛΥΚΕΙΟΥ (13-17 ΕΤΩΝ)', 'BALLROOM', 'http://vidaloca.gr/?page_id=933');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'ΤΜΗΜΑΤΑ ΧΟΡΟΥ ΓΥΜΝΑΣΙΟΥ – ΛΥΚΕΙΟΥ (13-17 ΕΤΩΝ)', 'BREAK DANCE', 'http://vidaloca.gr/?page_id=933');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'ΤΜΗΜΑΤΑ ΧΟΡΟΥ ΓΥΜΝΑΣΙΟΥ – ΛΥΚΕΙΟΥ (13-17 ΕΤΩΝ)', 'ΑΓΩΝΙΣΤΙΚΑ ΤΜΗΜΑΤΑ “ALL LADIES FREE STYLE”', 'http://vidaloca.gr/?page_id=933');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'ΤΜΗΜΑΤΑ ΧΟΡΟΥ ΓΥΜΝΑΣΙΟΥ – ΛΥΚΕΙΟΥ (13-17 ΕΤΩΝ)', 'ΠΡΟΕΤΟΙΜΑΣΙΑ ΕΠΑΓΓΕΛΜΑΤΙΚΩΝ ΤΜΗΜΑΤΩΝ', 'http://vidaloca.gr/?page_id=933');

        Scholio::portalStudy($s, 'ΕΡΑΣΙΤΕΧΝΙΚΑ ΤΜΗΜΑΤΑ ΕΝΗΛΙΚΩΝ', 'Διάφοροι Χωροί', 'LATIN – AMERICAN STYLE ( RUMBA,CHA CHA CHA,SAMBA,SWING,ROCK’N’ROLL,MAMBO) & INTERNATIONAL STYLE (RUMBA,CHA CHA CHA,SAMBA,PASO DOBLE,JIVE)', 'http://vidaloca.gr/?page_id=937');
        Scholio::portalStudy($s, 'ΕΡΑΣΙΤΕΧΝΙΚΑ ΤΜΗΜΑΤΑ ΕΝΗΛΙΚΩΝ', 'Διάφοροι Χωροί', 'BALLROOM – AMERICAN & INTERNATIONAL STYLE (SLOW WALTZ-TANGO-FOX TROT –QUICKSTEP-VIENNESE WALTZ)', 'http://vidaloca.gr/?page_id=937');
        Scholio::portalStudy($s, 'ΕΡΑΣΙΤΕΧΝΙΚΑ ΤΜΗΜΑΤΑ ΕΝΗΛΙΚΩΝ', 'Διάφοροι Χωροί', 'SALSA CUBANA – SALSA RUEDA – MERENGUE – BACHATA', 'http://vidaloca.gr/?page_id=937');
        Scholio::portalStudy($s, 'ΕΡΑΣΙΤΕΧΝΙΚΑ ΤΜΗΜΑΤΑ ΕΝΗΛΙΚΩΝ', 'Διάφοροι Χωροί', 'ORIENTAL – BELLY DANCE – TRIBAL FUSION BELLY DANCE', 'http://vidaloca.gr/?page_id=937');
        Scholio::portalStudy($s, 'ΕΡΑΣΙΤΕΧΝΙΚΑ ΤΜΗΜΑΤΑ ΕΝΗΛΙΚΩΝ', 'Διάφοροι Χωροί', 'ARGENTINE TANGO', 'http://vidaloca.gr/?page_id=937');
        Scholio::portalStudy($s, 'ΕΡΑΣΙΤΕΧΝΙΚΑ ΤΜΗΜΑΤΑ ΕΝΗΛΙΚΩΝ', 'Διάφοροι Χωροί', 'ΛΑΪΚΟΙ & ΠΑΡΑΔΟΣΙΑΚΟΙ ΧΟΡΟΙ (ΖΕΪΜΠΕΚΙΚΟΣ , ΧΑΣΑΠΙΚΟΣ , ΣΥΡΤΑΚΙ , ΧΑΣΑΠΟΣΕΡΒΙΚΟΣ , ΚΑΡΣΙΛΑΜΑΣ ,ΣΥΡΤΟΣ ΚΑΛΑΜΑΤΙΑΝΟΣ , ΧΟΡΟΙ ΠΟΝΤΟΥ , ΘΡΑΚΗΣ , ΗΠΕΙΡΟΥ , ΚΡΗΤΗΣ ,ΝΗΣΙΩΝ ΑΙΓΑΙΟΥ-ΙΟΝΙΟΥ ΚΛΠ)', 'http://vidaloca.gr/?page_id=937');
        Scholio::portalStudy($s, 'ΕΡΑΣΙΤΕΧΝΙΚΑ ΤΜΗΜΑΤΑ ΕΝΗΛΙΚΩΝ', 'Διάφοροι Χωροί', 'STREET DANCES (HIP HOP – COMMERCIAL – FREE STYLE – STREET JAZZ – DANCEHALL – POPPING – BREAK DANCE)', 'http://vidaloca.gr/?page_id=937');
        Scholio::portalStudy($s, 'ΕΡΑΣΙΤΕΧΝΙΚΑ ΤΜΗΜΑΤΑ ΕΝΗΛΙΚΩΝ', 'Διάφοροι Χωροί', 'ΣΥΓΧΡΟΝΟΣ ΧΟΡΟΣ – CONTEMPORARY DANCE', 'http://vidaloca.gr/?page_id=937');
        Scholio::portalStudy($s, 'ΕΡΑΣΙΤΕΧΝΙΚΑ ΤΜΗΜΑΤΑ ΕΝΗΛΙΚΩΝ', 'Διάφοροι Χωροί', 'BARRE A TERRE – YOGILATES', 'http://vidaloca.gr/?page_id=937');

        Scholio::portalStudy($s, 'ΜΕΛΛΟΝΥΜΦΩΝ', 'Τμήματα Χορού', 'ΕΞΕΤΑΣΕΙΣ – ΠΙΣΤΟΠΟΙΗΣΗ', 'http://vidaloca.gr/?page_id=939');
        Scholio::portalStudy($s, 'ΜΕΛΛΟΝΥΜΦΩΝ', 'Τμήματα Χορού', 'ΕΡΑΣΙΤΕΧΝΙΚΑ ΔΙΠΛΩΜΑΤΑ LATIN , BALLROOM , JAZZ , HIP HOP , ORIENTAL , ARGENTINE TANGO , ΛΑΪΚΟΙ ΧΟΡΟΙ (AMERICAN BRONZE SYLLABUS WDDSC , INTERNATIONAL STYLE IDTA , ISTD, VAGANOVA)', 'http://vidaloca.gr/?page_id=939');
        Scholio::portalStudy($s, 'ΜΕΛΛΟΝΥΜΦΩΝ', 'Τμήματα Χορού', 'ΕΠΑΓΓΕΛΜΑΤΙΚΑ ΔΙΠΛΩΜΑΤΑ LATIN , BALLROOM , JAZZ , HIP HOP , ORIENTAL , ARGENTINE TANGO , ΛΑΪΚΟΙ ΧΟΡΟΙ (AMERICAN BRONZE SYLLABUS WDDSC , INTERNATIONAL STYLE IDTA , ISTD)', 'http://vidaloca.gr/?page_id=939');
        Scholio::portalStudy($s, 'ΑΓΩΝΙΣΤΙΚΟΣ ΧΟΡΟΣ', 'JUVENILE (6-11 ΕΤΩΝ) – JUNIOR (11-15 ΕΤΩΝ) – YOUTH(15-18 ΕΤΩΝ) – ADULTS(18+)', 'GROUPS : SHOWDANCE, LATIN, ORIENTAL , HIP HOP , MODERN , CONTEMPORARY, BALLET', 'http://vidaloca.gr/?page_id=915');
        Scholio::portalStudy($s, 'ΑΓΩΝΙΣΤΙΚΟΣ ΧΟΡΟΣ', 'JUVENILE (6-11 ΕΤΩΝ) – JUNIOR (11-15 ΕΤΩΝ) – YOUTH(15-18 ΕΤΩΝ) – ADULTS(18+)', 'SOLO : LATIN ,SOLO ORIENTAL , HIP HOP, ΣΥΓΧΡΟΝΟΣ', 'http://vidaloca.gr/?page_id=915');
        Scholio::portalStudy($s, 'ΑΓΩΝΙΣΤΙΚΟΣ ΧΟΡΟΣ', 'JUVENILE (6-11 ΕΤΩΝ) – JUNIOR (11-15 ΕΤΩΝ) – YOUTH(15-18 ΕΤΩΝ) – ADULTS(18+)', 'COUPLES : ONE DANCE/THREE DANCE/FIVE DANCE LATIN-BALLROOM-SALSA-BACHATA-ARGENTINE TANGO', 'http://vidaloca.gr/?page_id=915');
        Scholio::portalStudy($s, 'ΑΓΩΝΙΣΤΙΚΟΣ ΧΟΡΟΣ', 'JUVENILE (6-11 ΕΤΩΝ) – JUNIOR (11-15 ΕΤΩΝ) – YOUTH(15-18 ΕΤΩΝ) – ADULTS(18+)', 'LATIN-BALLROOM-SALSA RUEDA-ARGENTINE TANGO FORMATION TEAM', 'http://vidaloca.gr/?page_id=915');

        Scholio::portalSocial($s, 'facebook', 'https://www.facebook.com/vidaloca.dancestudios/?pnref=lhc');

        /*===============   goldensteps   ================*/
        $s = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Σχολή Χορού Golden Steps Dance Studio', 'email' => 'info@goldensteps.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'goldensteps'])->id,
            'address' => 'Νικολάου Κασσίμη 1, Νεάπολη',
            'city' => 'Θεσσαλονίκη',
            'region' => 'Νεάπολη',
            'phone' => 2310501141,
            'type_id' => 10,
            'website' => 'goldensteps.gr',
            'approved' => 1,
            'about' => 'Σε έναν όμορφο, φιλικό, ειδικά διαμορφωμένο χώρο, με τους έμπειρους και άρτια εκπαιδευμένους δασκάλους μας, σας περιμένουμε για να γνωρίσετε τον μαγικό κόσμο του χορού!
            Στην σχολή χορού Golden Steps Dance Studio μπορείτε να συνδυάσετε τα σωματικά και ψυχικά οφέλη του χορού και να εκφραστείτε μέσα από το στυλ που σας ταιριάζει! Στη σχολή μας υπάρχουν τμήματα για όλες τις ηλικίες και διδάσκονται όλα τα σύγχρονα είδη χορού!
            Επίσης, τα επαγγελματικά τμήματα προετοιμάζουν τους μελλοντικούς επαγγελματίες χορευτές, για τις εξετάσεις απόκτησης διπλώματος!',
            'background' => $background,
        ]);

        new Portal($s, 5, 'xoros');

        Scholio::portalStudy($s, 'Νηπίων (3 - 3,5 Ετών)', 'Τμήματα Χορού', 'Μουσικοκινητική αγωγή', 'https://goldensteps.gr/%CF%84%CE%BC%CE%AE%CE%BC%CE%B1%CF%84%CE%B1/%CE%BC%CE%BF%CF%85%CF%83%CE%B9%CE%BA%CE%BF%CE%BA%CE%B9%CE%BD%CE%B7%CF%84%CE%B9%CE%BA%CE%AE-%CE%B1%CE%B3%CF%89%CE%B3%CE%AE/');
        Scholio::portalStudy($s, 'Νηπίων (3 - 3,5 Ετών)', 'Τμήματα Χορού', 'Μοντέρνος χορός', '');

        Scholio::portalStudy($s, 'Παιδικά (5 - 7 Ετών, 7 - 9 Και 9 - 11 Ετών)', 'Τμήματα Χορού', 'Latin', 'https://goldensteps.gr/%CF%84%CE%BC%CE%AE%CE%BC%CE%B1%CF%84%CE%B1/latin/');
        Scholio::portalStudy($s, 'Παιδικά (5 - 7 Ετών, 7 - 9 Και 9 - 11 Ετών)', 'Τμήματα Χορού', 'Hip Hop', 'https://goldensteps.gr/%CF%84%CE%BC%CE%AE%CE%BC%CE%B1%CF%84%CE%B1/hip-hop/');
        Scholio::portalStudy($s, 'Παιδικά (5 - 7 Ετών, 7 - 9 Και 9 - 11 Ετών)', 'Τμήματα Χορού', 'Μοντέρνο', '');
        Scholio::portalStudy($s, 'Παιδικά (5 - 7 Ετών, 7 - 9 Και 9 - 11 Ετών)', 'Τμήματα Χορού', 'Σύγχρονο', 'https://goldensteps.gr/%CF%84%CE%BC%CE%AE%CE%BC%CE%B1%CF%84%CE%B1/%CF%83%CF%8D%CE%B3%CF%87%CF%81%CE%BF%CE%BD%CE%BF%CF%82/');
        Scholio::portalStudy($s, 'Παιδικά (5 - 7 Ετών, 7 - 9 Και 9 - 11 Ετών)', 'Τμήματα Χορού', 'Oriental', 'https://goldensteps.gr/%CF%84%CE%BC%CE%AE%CE%BC%CE%B1%CF%84%CE%B1/oriental/');
        Scholio::portalStudy($s, 'Παιδικά (5 - 7 Ετών, 7 - 9 Και 9 - 11 Ετών)', 'Τμήματα Χορού', 'Ελληνικοί Χοροί', 'https://goldensteps.gr/%CF%84%CE%BC%CE%AE%CE%BC%CE%B1%CF%84%CE%B1/%CE%B5%CE%BB%CE%BB%CE%B7%CE%BD%CE%B9%CE%BA%CE%BF%CE%AF-%CF%80%CE%B1%CF%81%CE%B1%CE%B4%CE%BF%CF%83%CE%B9%CE%B1%CE%BA%CE%BF%CE%AF/');

        Scholio::portalStudy($s, 'Εφηβικά (11 - 13 Ετών, 13 - 16 Και 16 - 18 Ετών)', 'Τμήματα Χορού', 'Latin', 'https://goldensteps.gr/%CF%84%CE%BC%CE%AE%CE%BC%CE%B1%CF%84%CE%B1/latin/');
        Scholio::portalStudy($s, 'Εφηβικά (11 - 13 Ετών, 13 - 16 Και 16 - 18 Ετών)', 'Τμήματα Χορού', 'Hip Hop', 'https://goldensteps.gr/%CF%84%CE%BC%CE%AE%CE%BC%CE%B1%CF%84%CE%B1/hip-hop/');
        Scholio::portalStudy($s, 'Εφηβικά (11 - 13 Ετών, 13 - 16 Και 16 - 18 Ετών)', 'Τμήματα Χορού', 'Μοντέρνο', '');
        Scholio::portalStudy($s, 'Εφηβικά (11 - 13 Ετών, 13 - 16 Και 16 - 18 Ετών)', 'Τμήματα Χορού', 'Σύγχρονο', 'https://goldensteps.gr/%CF%84%CE%BC%CE%AE%CE%BC%CE%B1%CF%84%CE%B1/%CF%83%CF%8D%CE%B3%CF%87%CF%81%CE%BF%CE%BD%CE%BF%CF%82/');
        Scholio::portalStudy($s, 'Εφηβικά (11 - 13 Ετών, 13 - 16 Και 16 - 18 Ετών)', 'Τμήματα Χορού', 'Oriental', 'https://goldensteps.gr/%CF%84%CE%BC%CE%AE%CE%BC%CE%B1%CF%84%CE%B1/oriental/');
        Scholio::portalStudy($s, 'Εφηβικά (11 - 13 Ετών, 13 - 16 Και 16 - 18 Ετών)', 'Τμήματα Χορού', 'Ελληνικοί Χοροί', 'https://goldensteps.gr/%CF%84%CE%BC%CE%AE%CE%BC%CE%B1%CF%84%CE%B1/%CE%B5%CE%BB%CE%BB%CE%B7%CE%BD%CE%B9%CE%BA%CE%BF%CE%AF-%CF%80%CE%B1%CF%81%CE%B1%CE%B4%CE%BF%CF%83%CE%B9%CE%B1%CE%BA%CE%BF%CE%AF/');

        Scholio::portalStudy($s, 'Ενηλίκων (18+)', 'Τμήματα Χορού', 'Latin', 'https://goldensteps.gr/%CF%84%CE%BC%CE%AE%CE%BC%CE%B1%CF%84%CE%B1/latin/');
        Scholio::portalStudy($s, 'Ενηλίκων (18+)', 'Τμήματα Χορού', 'Hip Hop', 'https://goldensteps.gr/%CF%84%CE%BC%CE%AE%CE%BC%CE%B1%CF%84%CE%B1/hip-hop/');
        Scholio::portalStudy($s, 'Ενηλίκων (18+)', 'Τμήματα Χορού', 'Μοντέρνο', '');
        Scholio::portalStudy($s, 'Ενηλίκων (18+)', 'Τμήματα Χορού', 'Σύγχρονο', 'https://goldensteps.gr/%CF%84%CE%BC%CE%AE%CE%BC%CE%B1%CF%84%CE%B1/%CF%83%CF%8D%CE%B3%CF%87%CF%81%CE%BF%CE%BD%CE%BF%CF%82/');
        Scholio::portalStudy($s, 'Ενηλίκων (18+)', 'Τμήματα Χορού', 'Oriental', 'https://goldensteps.gr/%CF%84%CE%BC%CE%AE%CE%BC%CE%B1%CF%84%CE%B1/oriental/');
        Scholio::portalStudy($s, 'Ενηλίκων (18+)', 'Τμήματα Χορού', 'Ελληνικοί Χοροί', 'https://goldensteps.gr/%CF%84%CE%BC%CE%AE%CE%BC%CE%B1%CF%84%CE%B1/%CE%B5%CE%BB%CE%BB%CE%B7%CE%BD%CE%B9%CE%BA%CE%BF%CE%AF-%CF%80%CE%B1%CF%81%CE%B1%CE%B4%CE%BF%CF%83%CE%B9%CE%B1%CE%BA%CE%BF%CE%AF/');
        Scholio::portalStudy($s, 'Ενηλίκων (18+)', 'Τμήματα Χορού', 'Modern – Jazz', 'https://goldensteps.gr/%CF%84%CE%BC%CE%AE%CE%BC%CE%B1%CF%84%CE%B1/modern-jazz/');
        Scholio::portalStudy($s, 'Ενηλίκων (18+)', 'Τμήματα Χορού', 'Zumba', 'https://goldensteps.gr/%CF%84%CE%BC%CE%AE%CE%BC%CE%B1%CF%84%CE%B1/zumba/');
        Scholio::portalStudy($s, 'Ενηλίκων (18+)', 'Τμήματα Χορού', 'Αγωνιστικά', 'https://goldensteps.gr/%CF%84%CE%BC%CE%AE%CE%BC%CE%B1%CF%84%CE%B1/%CE%B1%CE%B3%CF%89%CE%BD%CE%B9%CF%83%CF%84%CE%B9%CE%BA%CE%AC/');
        Scholio::portalStudy($s, 'Ενηλίκων (18+)', 'Τμήματα Χορού', 'Μελλονύμφων', 'https://goldensteps.gr/%CF%84%CE%BC%CE%AE%CE%BC%CE%B1%CF%84%CE%B1/%CE%BC%CE%B5%CE%BB%CE%BB%CE%BF%CE%BD%CF%8D%CE%BC%CF%86%CF%89%CE%BD/');
        Scholio::portalStudy($s, 'Ενηλίκων (18+)', 'Τμήματα Χορού', 'Επαγγελματικά', 'https://goldensteps.gr/%CF%84%CE%BC%CE%AE%CE%BC%CE%B1%CF%84%CE%B1/%CE%B5%CF%80%CE%B1%CE%B3%CE%B3%CE%B5%CE%BB%CE%BC%CE%B1%CF%84%CE%B9%CE%BA%CE%AC/');

        Scholio::portalSocial($s, 'facebook', 'https://www.facebook.com/sxolixorougoldensteps');
        Scholio::portalSocial($s, 'instagram', 'https://www.instagram.com/goldensteps_dancestudio/');

        /*===============   DancecoolStudio   ================*/
        $s = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Σχολή Χορού Dancecool Studio', 'email' => 'dancecoolstudio@gmail.com', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'DancecoolStudio'])->id,
            'address' => 'Δημοκρίτου 2, Καπετάν Χάψα με Πανοράματος',
            'city' => 'Θεσσαλονίκη',
            'region' => 'Θέρμη',
            'phone' => 2310238869,
            'type_id' => 10,
            'website' => 'dancecoolstudio.gr',
            'approved' => 1,
            'about' => 'Η σχολή χορού Dancecool Studio δημιουργήθηκε το 2009 και στεγάζεται επί της οδού Δημοκρίτου 2, Καπετάν Χάψα και Πανοράματος στη Θέρμη.
            Στη σχολή διδάσκονται κυρίως όλα τα είδη του hip-hop αλλά και breakdance, latin και ευρωπαϊκοί χοροί, Dancehall, σύγχρονο κ.ά. Eπίσης, υπάρχουν αγωνιστικά αλλά και επαγγελματικά τμήματα καθώς η σχολή είναι μέλος του IDTA (International Dance Teacher Association). Κάθε χρόνο, οι μαθητές έχουν την επιλογή να εξεταστούν από χορευτές/εξετάστες που έρχονται από την Αγγλία για τον σκοπό αυτό και να αποκτήσουν πτυχία και βραβεία σε όλα τα είδη χορού καθώς και επαγγελματικά διπλώματα μετά από ειδική εκπαίδευση που τους παρέχουν οι εξειδικευμένοι και βραβευμένοι δάσκαλοι της σχολής μας.
            Τα μαθήματα πραγματοποιούνται στην ειδικά διαμορφωμένη και κλιματιζόμενη αίθουσα διδασκαλίας 160 τ.μ. Διαθέτουμε χώρο υποδοχής, χώρο αποδυτηρίων και ειδικό χώρο αναμονής.
            Το εκπαιδευτικό προσωπικό της σχολής αποτελείται από εξειδικευμένους πτυχιούχους καθηγητές με πολύχρονη διδακτική και χορευτική εμπειρία.
            Βασικός στόχος μας είναι η απόκτηση γνώσεων και σωστής τεχνικής σε όλα τα είδη χορού σε συνδυασμό με τη διασκέδαση.
            Το πρόγραμμα είναι ειδικά διαμορφωμένο για όλες τις ηλικίες και προσφέρεται σε όλους όσους ενδιαφέρονται να ασχοληθούν και να γνωρισουν την τέχνη του χορού είτε ερασιτεχνικά είτε επαγγελματικά. Οι μαθητές μας αποκτούν ολοκληρωμένες γνώσεις και σωστή τεχνική.
            Η σχολή μας συνεργάζεται με το διεθνή οργανισμό I.D.T.A. (International Dance Teacher\'s Association) και διατηρεί μακροχρόνια συνεργασία με τον οργανισμό.
            Οι μαθητές της σχολής έχουν τη δυνατότητα να αποκτήσουν αναγνωρισμένα διπλώματα από εξεταστές του εξωτερικού σε μαθητικό και επαγγελματικό επίπεδο.',
            'background' => $background,
        ]);

        new Portal($s, 5, 'xoros', 55);

        Scholio::portalStudy($s, 'Προπαιδικά', 'Τμήματα Χορού', 'Μουσικοκινητική αγωγή', '');

        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'Τμήματα Χορού', 'HIP-HOP', '');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'Τμήματα Χορού', 'BRΕAKDANCE', '');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'Τμήματα Χορού', 'LATIN', '');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'Τμήματα Χορού', 'ΜΟΝΤΕΡΝΟΣ ΧΟΡΟΣ', '');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'Τμήματα Χορού', 'ΕΥΡΩΠΑΪΚΟΙ', '');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'Τμήματα Χορού', 'ΕΛΛΗΝΙΚΟΙ', '');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'Τμήματα Χορού', 'ORIENTAL', '');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'Τμήματα Χορού', 'DANCE FITNESS', '');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'Τμήματα Χορού', 'DANCEHALL', '');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'Τμήματα Χορού', 'IΔΙΑΙΤΕΡΑ ΜΑΘΗΜΑΤΑ ΠΡΟΕΤΟΙΜΑΣΙΑΣ ΔΑΣΚΑΛΩΝ ΧΟΡΟΥ ΜΕ ΤΟ ΑΓΓΛΙΚΟ ΣΥΣΤΗΜΑ ΙDTA', '');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'Τμήματα Χορού', 'ΘΕΑΤΡΟΛΟΓΙΑ ΓΙΑ ΧΟΡΕΥΤΕΣ', '');
        Scholio::portalStudy($s, 'Παιδικά - Εφηβικά', 'Τμήματα Χορού', 'ΠΡΟΕΤΟΙΜΑΣΙΑ ΓΑΜΟΥ', '');

        Scholio::portalStudy($s, 'Ενηλίκων', 'Τμήματα Χορού', 'HIP-HOP', '');
        Scholio::portalStudy($s, 'Ενηλίκων', 'Τμήματα Χορού', 'BRΕAKDANCE', '');
        Scholio::portalStudy($s, 'Ενηλίκων', 'Τμήματα Χορού', 'LATIN', '');
        Scholio::portalStudy($s, 'Ενηλίκων', 'Τμήματα Χορού', 'ΜΟΝΤΕΡΝΟΣ ΧΟΡΟΣ', '');
        Scholio::portalStudy($s, 'Ενηλίκων', 'Τμήματα Χορού', 'ΕΥΡΩΠΑΪΚΟΙ', '');
        Scholio::portalStudy($s, 'Ενηλίκων', 'Τμήματα Χορού', 'ΕΛΛΗΝΙΚΟΙ', '');
        Scholio::portalStudy($s, 'Ενηλίκων', 'Τμήματα Χορού', 'ORIENTAL', '');
        Scholio::portalStudy($s, 'Ενηλίκων', 'Τμήματα Χορού', 'DANCE FITNESS', '');
        Scholio::portalStudy($s, 'Ενηλίκων', 'Τμήματα Χορού', 'DANCEHALL', '');
        Scholio::portalStudy($s, 'Ενηλίκων', 'Τμήματα Χορού', 'IΔΙΑΙΤΕΡΑ ΜΑΘΗΜΑΤΑ ΠΡΟΕΤΟΙΜΑΣΙΑΣ ΔΑΣΚΑΛΩΝ ΧΟΡΟΥ ΜΕ ΤΟ ΑΓΓΛΙΚΟ ΣΥΣΤΗΜΑ ΙDTA', '');
        Scholio::portalStudy($s, 'Ενηλίκων', 'Τμήματα Χορού', 'ΘΕΑΤΡΟΛΟΓΙΑ ΓΙΑ ΧΟΡΕΥΤΕΣ', '');
        Scholio::portalStudy($s, 'Ενηλίκων', 'Τμήματα Χορού', 'ΠΡΟΕΤΟΙΜΑΣΙΑ ΓΑΜΟΥ', '');

        Scholio::portalStudy($s, 'Αγωνιστικά - Επαγγελματικά', 'Τμήματα Χορού', 'HIP-HOP', '');
        Scholio::portalStudy($s, 'Αγωνιστικά - Επαγγελματικά', 'Τμήματα Χορού', 'BRΕAKDANCE', '');
        Scholio::portalStudy($s, 'Αγωνιστικά - Επαγγελματικά', 'Τμήματα Χορού', 'LATIN', '');
        Scholio::portalStudy($s, 'Αγωνιστικά - Επαγγελματικά', 'Τμήματα Χορού', 'ΜΟΝΤΕΡΝΟΣ ΧΟΡΟΣ', '');
        Scholio::portalStudy($s, 'Αγωνιστικά - Επαγγελματικά', 'Τμήματα Χορού', 'ΕΥΡΩΠΑΪΚΟΙ', '');
        Scholio::portalStudy($s, 'Αγωνιστικά - Επαγγελματικά', 'Τμήματα Χορού', 'ΕΛΛΗΝΙΚΟΙ', '');
        Scholio::portalStudy($s, 'Αγωνιστικά - Επαγγελματικά', 'Τμήματα Χορού', 'ORIENTAL', '');
        Scholio::portalStudy($s, 'Αγωνιστικά - Επαγγελματικά', 'Τμήματα Χορού', 'DANCE FITNESS', '');
        Scholio::portalStudy($s, 'Αγωνιστικά - Επαγγελματικά', 'Τμήματα Χορού', 'DANCEHALL', '');
        Scholio::portalStudy($s, 'Αγωνιστικά - Επαγγελματικά', 'Τμήματα Χορού', 'IΔΙΑΙΤΕΡΑ ΜΑΘΗΜΑΤΑ ΠΡΟΕΤΟΙΜΑΣΙΑΣ ΔΑΣΚΑΛΩΝ ΧΟΡΟΥ ΜΕ ΤΟ ΑΓΓΛΙΚΟ ΣΥΣΤΗΜΑ ΙDTA', '');
        Scholio::portalStudy($s, 'Αγωνιστικά - Επαγγελματικά', 'Τμήματα Χορού', 'ΘΕΑΤΡΟΛΟΓΙΑ ΓΙΑ ΧΟΡΕΥΤΕΣ', '');
        Scholio::portalStudy($s, 'Αγωνιστικά - Επαγγελματικά', 'Τμήματα Χορού', 'ΠΡΟΕΤΟΙΜΑΣΙΑ ΓΑΜΟΥ', '');

        Scholio::portalSocial($s, 'facebook', 'https://www.facebook.com/DancecoolStudio');
        Scholio::portalSocial($s, 'instagram', 'https://instagram.com/dancecoolstudio');
        Scholio::portalSocial($s, 'youtube', 'https://www.youtube.com/user/Dancecoolstudio');

        /*===============   dancesoul   ================*/
        $s = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Σχολή Χορού Dance Soul', 'email' => 'info@dancesoul.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'dancesoul'])->id,
            'address' => 'Ι. Πασαλίδη 70, Καλαμαριά',
            'city' => 'Θεσσαλονίκη',
            'region' => 'Καλαμαριά',
            'phone' => 2310455095,
            'type_id' => 10,
            'website' => 'dancesoul.gr',
            'approved' => 1,
            'about' => 'H σχολή χορού και κέντρο διά βίου μάθησης Dance Soul είναι αναγνωρισμένη από το Υπουργείο Παιδείας. Πρόκειται για μια από τις καταξιωμένες σχολές χορού στην πόλη της Θεσσαλονίκης, και είναι μέλος του International Dance Council της UNESCO.

            Τα 4 χρονια λειτουργιας της ήταν αρκετά, για να δημιουργηθεί η πιο δεμένη καλλιτεχνική παρέα. Ο κάθε ένας από ‘μας, από τον μικρότερο έως τον μεγαλύτερο, κάθε μέρα μαθαίνει κάτι καινούριο - βήματα, τεχνική, ρυθμό... αλληλοσεβασμό, συνεργασία. Γιατί χορός είναι όλα αυτά, κι ακόμη περισσότερα.

            Η σχολή μας, ένας φιλόξενος χώρος στο πιο κεντρικό και πολυσύχναστο σημείο της Καλαμαριάς, προσφέρει εξειδίκευση σε πάνω από 20 διαφορετικά είδη χορού, από πεπειραμένους και ταλαντούχους δασκάλους. Η διαδικασία εκμάθησης χορού προσφέρει στους νέους μας χορευτές μια χαρούμενη και διασκεδαστική εμπειρία, είτε το ενδιαφέρον τους επικεντρώνεται στο να ασχοληθούν με το χορό σαν χόμπι, είτε στο ν’ ασχοληθούν επαγγελματικά με το αντικείμενο. Ταυτόχρονα, όμως, όπως θα έπρεπε να είναι κάθε μάθημα χορού, ενώ οι μαθητές μας γνωρίζουν πως παίρνουν σωστές βάσεις, χαλαρώνουν, ξεχνούν το άγχος τους και διασκεδάζουν.

            Η Dance soul είναι εδώ για να σας προσφέρει διασκέδαση και χαρά μέσα από την διαδικασία της εκμάθησης χορού, είτε σας ενδιαφέρει να ασχοληθείτε σαν χόμπι, είτε θέλετε να γίνετε επαγγελματίες χορευτές, δάσκαλοι χορού, να προετοιμαστείτε για auditions ή ακόμη και για το γάμο σας, να πάρετε σωστές βάσεις, να χαλαρώσετε, να ξεχάσετε το άγχος σας και να περάσετε όμορφα.

            Ένας από τους πολλούς λόγους που συμβαίνει αυτό, είναι ότι εκτός από το πολύ φιλικό ανθρώπινο δυναμικό, που καθιερώνει το ζεστό κλίμα της «οικογένειας» της σχολής, είναι και η εσωτερική διαμόρφωση της εγκατάστασης.

            Ο χώρος της Σχολής αποτελείτε  απο 2 αίθουσες διδασκαλίας με ξύλινο πάτωμα ειδικών προδιαγραφών / χώροι αποδυτηρίων / χώρος αναμονής!!!

            Η θέση της σχολής, στο σημείο τομής της οδού Πασσαλίδη και του Πεζόδρομου της Καλαμαριάς, προσφέρει στους χορευτές μας εύκολη και ασφαλή μετακίνηση. Οι γραμμές 6 και 7 περνούν συχνότατα από τη στάση λεωφορείου που βρίσκεται σχεδόν μπροστά στην είσοδο της σχολής, ενώ η στάση ΤΑΞΙ και το 24ωρο πάρκινγκ βρίσκονται σε πολύ μικρή απόσταση.

            Ελάτε, λοιπόν, να χορέψτε κι εσείς μαζί μας στη Dance Soul, ο χορός σας περιμένει εδώ, για να τον κατακτήσετε.',
            'background' => $background,
        ]);

        new Portal($s, 5, 'xoros');

        Scholio::portalStudy($s, 'ΠΑΙΔΙΚΑ - ΕΦΗΒΙΚΑ ΤΜΗΜΑΤΑ', 'Τμήματα Χορού', 'ΜΟΥΣΙΚΟΚΙΝΗΤΙΚΗ (3-5,5 ετών)', 'https://www.dancesoul.gr/xoroi/paidika-tmimata-xorou');
        Scholio::portalStudy($s, 'ΠΑΙΔΙΚΑ - ΕΦΗΒΙΚΑ ΤΜΗΜΑΤΑ', 'Τμήματα Χορού', 'ΜΠΑΛΕΤΟ  (6 ετών και άνω)', 'https://www.dancesoul.gr/xoroi/paidika-tmimata-xorou');
        Scholio::portalStudy($s, 'ΠΑΙΔΙΚΑ - ΕΦΗΒΙΚΑ ΤΜΗΜΑΤΑ', 'Τμήματα Χορού', 'ΧΟΡΟΘΕΑΤΡΟ  (4 ετών και άνω)', 'https://www.dancesoul.gr/xoroi/paidika-tmimata-xorou');
        Scholio::portalStudy($s, 'ΠΑΙΔΙΚΑ - ΕΦΗΒΙΚΑ ΤΜΗΜΑΤΑ', 'Τμήματα Χορού', 'ΣΥΓΧΡΟΝΟΣ ΧΟΡΟΣ -ΜΟΝΤΕΡΝΟ (10 ετών και άνω)', 'https://www.dancesoul.gr/xoroi/paidika-tmimata-xorou');
        Scholio::portalStudy($s, 'ΠΑΙΔΙΚΑ - ΕΦΗΒΙΚΑ ΤΜΗΜΑΤΑ', 'Τμήματα Χορού', 'LATIN - ΕΥΡΩΠΑΪΚΟΙ (7 ετών και άνω)', 'https://www.dancesoul.gr/xoroi/paidika-tmimata-xorou');
        Scholio::portalStudy($s, 'ΠΑΙΔΙΚΑ - ΕΦΗΒΙΚΑ ΤΜΗΜΑΤΑ', 'Τμήματα Χορού', 'HIP-HOP -COMMERCIAL-NEW STYLE  (7 ετών και άνω)', 'https://www.dancesoul.gr/xoroi/paidika-tmimata-xorou');
        Scholio::portalStudy($s, 'ΠΑΙΔΙΚΑ - ΕΦΗΒΙΚΑ ΤΜΗΜΑΤΑ', 'Τμήματα Χορού', 'ZUMBA (7 ετών και άνω)', 'https://www.dancesoul.gr/xoroi/paidika-tmimata-xorou');
        Scholio::portalStudy($s, 'ΠΑΙΔΙΚΑ - ΕΦΗΒΙΚΑ ΤΜΗΜΑΤΑ', 'Τμήματα Χορού', 'FLAMENCO', 'https://www.dancesoul.gr/xoroi/paidika-tmimata-xorou');
        Scholio::portalStudy($s, 'ΠΑΙΔΙΚΑ - ΕΦΗΒΙΚΑ ΤΜΗΜΑΤΑ', 'Τμήματα Χορού', 'POLE ACROBAT', 'https://www.dancesoul.gr/xoroi/paidika-tmimata-xorou');
        Scholio::portalStudy($s, 'ΕΙΔΙΚΑ ΤΜΗΜΑΤΑ', 'Τμήματα Χορού', 'Προγράμματα για γαμήλιες και άλλες εκδηλώσεις', 'https://www.dancesoul.gr/component/k2/programmata-gia-gamilies-kai-alles-ekdiloseis');
        Scholio::portalStudy($s, 'ΕΙΔΙΚΑ ΤΜΗΜΑΤΑ', 'Τμήματα Χορού', 'Pole dance -Pole fitness-Pole Acrobat', 'https://www.dancesoul.gr/component/k2/pole-dancing-pole-fitness-kai-pole-acrobat');

        Scholio::portalSocial($s, 'facebook', 'https://www.facebook.com/DANCEkalamaria');

        /*===============   dancemania   ================*/
        $s = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Σχολή Χορού DANCEmania', 'email' => 'info@dancemania.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'dancemania'])->id,
            'address' => '28ης Οκτωβρίου 98, Αμπελόκηποι',
            'city' => 'Θεσσαλονίκη',
            'region' => 'Αμπελόκηποι',
            'phone' => 2310741730,
            'type_id' => 10,
            'website' => 'dancemania.gr',
            'approved' => 1,
            'about' => 'Η σχολή χορού DANCEmania ξεκίνησε τη δραστηριότητά της το Μάρτιο του 2000 με μοναδικό στόχο να αποτελέσει ένα ξεχωριστό κι ευχάριστο περιβάλλον δημιουργικής έκφρασης ανθρώπων που μοιράζονται την ίδια "μανία για χορό".

            ​

             Εμπνεύστρια της ιδέας αλλά και υλοποιός δύναμη υπήρξε η Κελεκίδου Ελισάβετ η οποία κατέστησε τη μανία για χορό ζωντανή.

            ​

             Φιλοδοξία μας λοιπόν είναι να σας παρασύρουμε στο μαγικό κόσμο του χορού καθοδηγούμενοι πάντοτε από το έμπειρο προσωπικό της σχολής μας, κρατώντας την αγάπη και το πάθος για χορό ζωντανά.

            ​

            ΝΙΩΣΤΕ ΤΗ ΜΑΓΕΙΑ ΤΟΥ ΧΟΡΟΥ…

                                                       ΝΙΩΣΤΕ ΤΗ DANCEmania!',
            'background' => $background,
        ]);

        new Portal($s, 5, 'xoros', 90);

        Scholio::portalStudy($s, 'LATIN', 'Τμήματα Χορού', 'Cha-Cha', 'https://www.dancemania.gr/latin');
        Scholio::portalStudy($s, 'LATIN', 'Τμήματα Χορού', 'Rumba', 'https://www.dancemania.gr/latin');
        Scholio::portalStudy($s, 'LATIN', 'Τμήματα Χορού', 'Mambo', 'https://www.dancemania.gr/latin');
        Scholio::portalStudy($s, 'LATIN', 'Τμήματα Χορού', 'Samba', 'https://www.dancemania.gr/latin');
        Scholio::portalStudy($s, 'LATIN', 'Τμήματα Χορού', 'Jive', 'https://www.dancemania.gr/latin');
        Scholio::portalStudy($s, 'LATIN', 'Τμήματα Χορού', 'Paso Doble', 'https://www.dancemania.gr/latin');

        Scholio::portalStudy($s, 'Standard', 'Τμήματα Χορού', 'Slow Waltz', 'https://www.dancemania.gr/standard');
        Scholio::portalStudy($s, 'Standard', 'Τμήματα Χορού', 'Viennese Waltz', 'https://www.dancemania.gr/standard');
        Scholio::portalStudy($s, 'Standard', 'Τμήματα Χορού', 'Fox-Trot', 'https://www.dancemania.gr/standard');
        Scholio::portalStudy($s, 'Standard', 'Τμήματα Χορού', 'Quick Step', 'https://www.dancemania.gr/standard');
        Scholio::portalStudy($s, 'Standard', 'Τμήματα Χορού', 'Tango', 'https://www.dancemania.gr/standard');

        Scholio::portalStudy($s, 'Cuban Dances', 'Τμήματα Χορού', 'Salsa', 'https://www.dancemania.gr/cuban');
        Scholio::portalStudy($s, 'Cuban Dances', 'Τμήματα Χορού', 'Merengue', 'https://www.dancemania.gr/cuban');

        Scholio::portalStudy($s, 'Bachata', 'Τμήματα Χορού', 'Bachata', 'https://www.dancemania.gr/bachata-dance');

        Scholio::portalStudy($s, 'Tango', 'Τμήματα Χορού', 'Tango Argentina', 'https://www.dancemania.gr/tango');

        Scholio::portalStudy($s, 'Λαϊκοί - Παραδοσιακοί Χοροί', 'Τμήματα Χορού', 'Τσιφτετέλι', 'https://www.dancemania.gr/laikoi');
        Scholio::portalStudy($s, 'Λαϊκοί - Παραδοσιακοί Χοροί', 'Τμήματα Χορού', 'Χασάπικο', 'https://www.dancemania.gr/laikoi');
        Scholio::portalStudy($s, 'Λαϊκοί - Παραδοσιακοί Χοροί', 'Τμήματα Χορού', 'Συρτάκι', 'https://www.dancemania.gr/laikoi');
        Scholio::portalStudy($s, 'Λαϊκοί - Παραδοσιακοί Χοροί', 'Τμήματα Χορού', 'Ζεϊμπέκικο', 'https://www.dancemania.gr/laikoi');
        Scholio::portalStudy($s, 'Λαϊκοί - Παραδοσιακοί Χοροί', 'Τμήματα Χορού', 'Χασαποσέρβικο', 'https://www.dancemania.gr/laikoi');
        Scholio::portalStudy($s, 'Λαϊκοί - Παραδοσιακοί Χοροί', 'Τμήματα Χορού', 'Τσάμικο', 'https://www.dancemania.gr/laikoi');
        Scholio::portalStudy($s, 'Λαϊκοί - Παραδοσιακοί Χοροί', 'Τμήματα Χορού', 'Συρτό', 'https://www.dancemania.gr/laikoi');
        Scholio::portalStudy($s, 'Λαϊκοί - Παραδοσιακοί Χοροί', 'Τμήματα Χορού', 'Καλαματιανός', 'https://www.dancemania.gr/laikoi');
        Scholio::portalStudy($s, 'Λαϊκοί - Παραδοσιακοί Χοροί', 'Τμήματα Χορού', 'Ικαριώτικος', 'https://www.dancemania.gr/laikoi');
        Scholio::portalStudy($s, 'Λαϊκοί - Παραδοσιακοί Χοροί', 'Τμήματα Χορού', 'Μπάλος', 'https://www.dancemania.gr/laikoi');
        Scholio::portalStudy($s, 'Λαϊκοί - Παραδοσιακοί Χοροί', 'Τμήματα Χορού', 'Συρτός στα 3', 'https://www.dancemania.gr/laikoi');
        Scholio::portalStudy($s, 'Λαϊκοί - Παραδοσιακοί Χοροί', 'Τμήματα Χορού', 'Ζωναράδικος', 'https://www.dancemania.gr/laikoi');
        Scholio::portalStudy($s, 'Λαϊκοί - Παραδοσιακοί Χοροί', 'Τμήματα Χορού', 'Καραγκούνα', 'https://www.dancemania.gr/laikoi');
        Scholio::portalStudy($s, 'Λαϊκοί - Παραδοσιακοί Χοροί', 'Τμήματα Χορού', 'Μπαϊντούσκα', 'https://www.dancemania.gr/laikoi');

        Scholio::portalStudy($s, 'Αλλοι Χωροί', 'Τμήματα Χορού', 'Hip-Hop', 'https://www.dancemania.gr/hip-hop');
        Scholio::portalStudy($s, 'Αλλοι Χωροί', 'Τμήματα Χορού', 'Contemporary', 'https://www.dancemania.gr/contemporary');
        Scholio::portalStudy($s, 'Αλλοι Χωροί', 'Τμήματα Χορού', 'Zumba - Fitness', 'https://www.dancemania.gr/fitness-dance');
        Scholio::portalStudy($s, 'Αλλοι Χωροί', 'Τμήματα Χορού', 'Dancehall', 'https://www.dancemania.gr/dancehall');
        Scholio::portalStudy($s, 'Αλλοι Χωροί', 'Τμήματα Χορού', 'Oriental', 'https://www.dancemania.gr/oriental');
        Scholio::portalStudy($s, 'Αλλοι Χωροί', 'Τμήματα Χορού', 'Swing - Lindy Hop', 'https://www.dancemania.gr/swing-lindyhop');
        Scholio::portalStudy($s, 'Αλλοι Χωροί', 'Τμήματα Χορού', 'Reggaeton', 'https://www.dancemania.gr/reggaeton-dance');

        Scholio::portalSocial($s, 'facebook', 'https://www.facebook.com/dancemania.gr/');
        Scholio::portalSocial($s, 'youtube', 'https://www.youtube.com/channel/UCUAQpwvNgxSlRM3p4jdqFlA');
        Scholio::portalSocial($s, 'twitter', 'https://twitter.com/Dancemania11?lang=el');
        Scholio::portalSocial($s, 'instagram', 'https://www.instagram.com/dancemaniastudio/');

        /*===============  10 Danza Fuerte ================*/
        $s = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Σχολή Χορού Danza Fuerte', 'email' => 'danzafuerte@gmail.com', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'danzafuerte'])->id,
            'address' => 'Αριστοτέλους 23, Κέντρο',
            'region' => 'Κέντρο',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310262255,
            'type_id' => 10,
            'website' => 'danzafuerte.gr',
            'approved' => 1,
            'about' => '<div>Μέσα στα 20 χρόνια λειτουργίας εχουμε αποκτήσει την εμπειρια να καλύπτουμε τις αναγκες του κάθε μαθητη ξεχωριστά. Μια σχολή με προσωπικότητα και ενδιαφέρον. Μια μεγάλη οικογένεια χορού. Όλο το προσωπικό αλλά και ο Διευθυντής της σχολής είναι πάντα κοντά  στους μαθητές.</div>
                <div> </div>
                <div>
                <h3 class="bold-style">ΠΡΑΓΜΑΤΟΠΟΙΟΥΜΕ</h3>
                <div>Πάνω από 30 άτομα προσωπικού βρίσκονται καθημερνά στην υπηρεσία των μαθητών για να καλύψουν ακόμα και τις πιο υψηλές σας απαιτήσεις. Όλοι τους επαγγελματίες και καταρτησμένοι αλλά πάνω από όλα άνθρωποι με προσωπικότητα και ενδιαφέρον.</div>
                <div> </div>
                <div>
                <h3 class="bold-style">ΔΗΜΙΟΥΡΓΟΥΜΕ</h3>
                <div>Η σχολή χορού είναι ένας ζωντανός οργανισμός. Δεν μένει στάσιμη. Εξελίσσεται με βάση τις απαιτήσεις των μαθητών. Νέα είδη χορών προστίθενται συνεχώς,νέα προγράμματα χορού προσαρμοσμένα στις ανάγκες των μαθητών, party αλλά και εκδηλώσεις παγκόσμιου βεληνεκούς όπως το Record Guinness.</div>
                <div> </div>
                <div>
                <h3 class="bold-style">Η ΣΧΟΛΗ</h3>
                <p>     Η Σχολή Χορού Danza Fuerte με τη<strong> 20 έτη</strong> εμπειρία τους, μετατρέπει την τέχνη του χορού σε ένα είδος προσιτό σε όλες τις ηλικίες, για όλα τα γούστα και σε πολύ προσιτές τιμές ώστε να έχουν πρόσβαση όλοι όσοι θέλουν να εκφράσουν συναισθήματα και συνδυάσουν αρμονικά έκφραση και κίνηση.</p>
                <p>Μαθαίνει τους ανθρώπους ν\' αποκτήσουν εμπειρίες με το σώμα τους, να κινηθούν, να χορέψουν. Στηρίζει τους εραστές της τέχνης και έκφρασης του χορού.</p>
                <p>     Οι Σχολές Χορού Danza Fuerte βρίσκονται κοντά σας εδώ και 20 χρόνια στην καρδιά της Θεσσαλονίκης  Αριστοτέλους 23 -1<sup>ος</sup> (κεντρικό κατάστημα) και Βασιλέως Ηρακλείου 30 – 2<sup>ος</sup> (παράρτημα) διδάσκοντας Λατινοαμερικάνικους (Rumba, Mambo,Cha Cha Cha, Swing, Jive, Paso Doble), Eυρωπαϊκούς (Tango, Waltz,Fox Trot, Vienna Waltz, Quick Step), Eλληνικούς και Mοντέρνους χορούς (Hip Hop, Street Dance, Free Style, R&amp;B). Επίσης υπάρχει η δυνατότητα να ασχοληθεί κανείς με Αθλητικό χορό - Οriental - Τango Αrgentine αλλά και με Kουβανέζικους ( Salsa, Bachata, Merenque, Rueda,Afro ). Ειναι πρωτοπόρος στα επαγγελματικά προγράμματα και δίνει τη δυνατότητα απόκτησης πτυχίων χορού καθώς στη σχολή διδάσκουν πλήθος καταξιωμένων και έμπειρων καθηγητών.</p>
                <p>     Μέσα στα 20 χρόνια λειτουργίας έχει αποκτήσει πρωταθλήματα και κύπελλα Ελλάδος, τις μεγαλύτερες διακρίσεις σε διαγωνισμούς εντός και εκτός Ελλάδας. Τον Ιούνιο του 2014 επιτυγχάνει τη μεγαλύτερη διάκριση σε παγκόσμιο επίπεδο διοργανώνοντας τη μεγαλύτερη Salsa Rueda στον κόσμο κερδίζοντας μία θέση στο Βιβλίο των Record Guinness!!! </p>
                </div>
                </div>
                </div>',
            'background' => $background,
        ]);

        new Portal($s, 6, 'xoros');

        Scholio::portalStudy($s, 'LATIN BALLROOM', 'Τμήματα Χορού', 'CHA CHA CHA', 'http://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/latin-ballroom-2/');
        Scholio::portalStudy($s, 'LATIN BALLROOM', 'Τμήματα Χορού', 'Rumba', 'http://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/latin-ballroom-2/');
        Scholio::portalStudy($s, 'LATIN BALLROOM', 'Τμήματα Χορού', 'PASO DOBLE', 'http://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/latin-ballroom-2/');
        Scholio::portalStudy($s, 'LATIN BALLROOM', 'Τμήματα Χορού', 'JIVE', 'http://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/latin-ballroom-2/');
        Scholio::portalStudy($s, 'LATIN BALLROOM', 'Τμήματα Χορού', 'SAMBA', 'http://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/latin-ballroom-2/');
        Scholio::portalStudy($s, 'LATIN BALLROOM', 'Τμήματα Χορού', 'MAMBO', 'http://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/latin-ballroom-2/');
        Scholio::portalStudy($s, 'LATIN BALLROOM', 'Τμήματα Χορού', 'DISCO', 'http://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/latin-ballroom-2/');
        Scholio::portalStudy($s, 'LATIN BALLROOM', 'Τμήματα Χορού', 'SWING', 'http://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/latin-ballroom-2/');

        Scholio::portalStudy($s, 'SMOOTH BALLROOM', 'Τμήματα Χορού', 'TANGO', 'https://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/smooth-ballroom-2/');
        Scholio::portalStudy($s, 'SMOOTH BALLROOM', 'Τμήματα Χορού', 'WALTZ', 'https://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/smooth-ballroom-2/');
        Scholio::portalStudy($s, 'SMOOTH BALLROOM', 'Τμήματα Χορού', 'FOX TROT', 'https://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/smooth-ballroom-2/');
        Scholio::portalStudy($s, 'SMOOTH BALLROOM', 'Τμήματα Χορού', 'QUICK STEP', 'https://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/smooth-ballroom-2/');
        Scholio::portalStudy($s, 'SMOOTH BALLROOM', 'Τμήματα Χορού', 'VIENNESE WALTZ', 'https://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/smooth-ballroom-2/');
        Scholio::portalStudy($s, 'SMOOTH BALLROOM', 'Τμήματα Χορού', 'SWING', 'https://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/smooth-ballroom-2/');

        Scholio::portalStudy($s, 'SALSA', 'Τμήματα Χορού', 'SALSA CUBAN', 'https://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/salsa/');
        Scholio::portalStudy($s, 'SALSA', 'Τμήματα Χορού', 'SALSA LOS ANGELES', 'https://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/salsa/');
        Scholio::portalStudy($s, 'SALSA', 'Τμήματα Χορού', 'SALSA NEW YORK', 'https://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/salsa/');
        Scholio::portalStudy($s, 'SALSA', 'Τμήματα Χορού', 'RUEDA DE CASINO', 'https://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/salsa/');

        Scholio::portalStudy($s, 'STREET DANCE', 'Τμήματα Χορού', 'HIP HOP', 'https://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/street-dance-2/');
        Scholio::portalStudy($s, 'STREET DANCE', 'Τμήματα Χορού', 'WAACKING', 'https://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/street-dance-2/');
        Scholio::portalStudy($s, 'STREET DANCE', 'Τμήματα Χορού', 'VOGUE', 'https://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/street-dance-2/');
        Scholio::portalStudy($s, 'STREET DANCE', 'Τμήματα Χορού', 'KRUMP', 'https://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/street-dance-2/');
        Scholio::portalStudy($s, 'STREET DANCE', 'Τμήματα Χορού', 'HOUSE', 'https://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/street-dance-2/');
        Scholio::portalStudy($s, 'STREET DANCE', 'Τμήματα Χορού', 'LOCKING', 'https://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/street-dance-2/');
        Scholio::portalStudy($s, 'STREET DANCE', 'Τμήματα Χορού', 'NEW STYLE', 'https://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/street-dance-2/');
        Scholio::portalStudy($s, 'STREET DANCE', 'Τμήματα Χορού', 'POPPING', 'https://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/street-dance-2/');

        Scholio::portalStudy($s, 'Άλλοι Χοροί', 'Τμήματα Χορού', 'TANGO ARGENTINO', 'https://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/tango-argentino-2/');
        Scholio::portalStudy($s, 'Άλλοι Χοροί', 'Τμήματα Χορού', 'ORIENTAL', 'https://danzafuerte.gr/oriental/');
        Scholio::portalStudy($s, 'Άλλοι Χοροί', 'Τμήματα Χορού', 'CONTEMPORARY – JAZZ', 'http://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/contemporary-jazz/');
        Scholio::portalStudy($s, 'Άλλοι Χοροί', 'Τμήματα Χορού', 'REGGAETON', 'https://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/reggaeton/');
        Scholio::portalStudy($s, 'Άλλοι Χοροί', 'Τμήματα Χορού', 'DANCEHALL', 'https://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/dancehall/');
        Scholio::portalStudy($s, 'Άλλοι Χοροί', 'Τμήματα Χορού', 'POLE DANCING', 'https://danzafuerte.gr/pole-dancing/');

        Scholio::portalStudy($s, 'FITNESS', 'Τμήματα Χορού', 'ZUMBA', 'http://danzafuerte.gr/%ce%bf%ce%b9-%cf%87%ce%bf%cf%81%ce%bf%ce%af/fitness-2/');
        Scholio::portalStudy($s, 'FITNESS', 'Τμήματα Χορού', 'PILOXING', 'http://danzafuerte.gr/%ce%bf%ce%b9-%cf%87%ce%bf%cf%81%ce%bf%ce%af/fitness-2/');
        Scholio::portalStudy($s, 'FITNESS', 'Τμήματα Χορού', 'TRX', 'http://danzafuerte.gr/%ce%bf%ce%b9-%cf%87%ce%bf%cf%81%ce%bf%ce%af/fitness-2/');
        Scholio::portalStudy($s, 'FITNESS', 'Τμήματα Χορού', 'YOGA', 'http://danzafuerte.gr/%ce%bf%ce%b9-%cf%87%ce%bf%cf%81%ce%bf%ce%af/fitness-2/');
        Scholio::portalStudy($s, 'FITNESS', 'Τμήματα Χορού', 'PILATES', 'http://danzafuerte.gr/%ce%bf%ce%b9-%cf%87%ce%bf%cf%81%ce%bf%ce%af/fitness-2/');

        Scholio::portalStudy($s, 'SENSUAL DANCE', 'Τμήματα Χορού', 'KIZOMBA', 'https://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/sensual-dance-2/');
        Scholio::portalStudy($s, 'SENSUAL DANCE', 'Τμήματα Χορού', 'BACHATA', 'https://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/sensual-dance-2/');
        Scholio::portalStudy($s, 'SENSUAL DANCE', 'Τμήματα Χορού', 'MERENGUE', 'https://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/sensual-dance-2/');

        Scholio::portalStudy($s, 'ΕΛΛΗΝΙΚΟΙ ΧΟΡΟΙ', 'Τμήματα Χορού', 'ΖΕΙΜΠΕΚΙΚΟ', 'https://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/%CE%B5%CE%BB%CE%BB%CE%B7%CE%BD%CE%B9%CE%BA%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%B9/');
        Scholio::portalStudy($s, 'ΕΛΛΗΝΙΚΟΙ ΧΟΡΟΙ', 'Τμήματα Χορού', 'ΧΑΣΑΠΙΚΟ', 'https://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/%CE%B5%CE%BB%CE%BB%CE%B7%CE%BD%CE%B9%CE%BA%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%B9/');
        Scholio::portalStudy($s, 'ΕΛΛΗΝΙΚΟΙ ΧΟΡΟΙ', 'Τμήματα Χορού', 'ΣΥΡΤΑΚΙ', 'https://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/%CE%B5%CE%BB%CE%BB%CE%B7%CE%BD%CE%B9%CE%BA%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%B9/');
        Scholio::portalStudy($s, 'ΕΛΛΗΝΙΚΟΙ ΧΟΡΟΙ', 'Τμήματα Χορού', 'ΠΑΡΑΔΟΣΙΑΚΑ', 'https://danzafuerte.gr/%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%AF/%CE%B5%CE%BB%CE%BB%CE%B7%CE%BD%CE%B9%CE%BA%CE%BF%CE%B9-%CF%87%CE%BF%CF%81%CE%BF%CE%B9/');

        /*===============   stepup   ================*/
        $s = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Σχολή Χορού Step Up Dance Studio', 'email' => 'stepupdance100@gmail.com', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'stepup'])->id,
            'address' => 'Στρατηγού Μπραντούνα 5',
            'city' => 'Θεσσαλονίκη',
            'region' => 'Κέντρο',
            'phone' => 2314023591,
            'type_id' => 10,
            'website' => 'stepupdancegr.com',
            'approved' => 1,
            'about' => 'Το ζητούμενο για εμάς δεν είναι μόνο να παρέχουμε μαθήματα χορού, αλλά να παρέχουμε μία ξεχωριστή εμπειρία που βοηθάει το μαθητή να εξελιχθεί ως άνθρωπος, πνευματικά και σωματικά και έπειτα και ως χορευτής. Οι συνεργάτες μας είναι δάσκαλοι χορού εκπαιδευμένοι και πιστοποιημένοι στο είδος τους, που χρησιμοποιούν διαφορετικές διδακτικές μεθόδους  και εξατομικεύουν ανάλογα με τις ανάγκες του κάθε μαθητή.

            Στο step up dance studio είμαστε παθιασμένοι με το χορό, τη μουσική και τους ανθρώπους. Είστε έτοιμοι να χορέψετε?

            Επικοινωνήστε μαζί μας και μάθετε περισσότερα για εμάς.

            ​',
            'background' => $background,
        ]);

        new Portal($s, 5, 'xoros');

        Scholio::portalStudy($s, 'Διάφοροι Χοροί', 'Τμήματα Χορού', 'Pole Dance', '');
        Scholio::portalStudy($s, 'Διάφοροι Χοροί', 'Τμήματα Χορού', 'Flexibility', '');
        Scholio::portalStudy($s, 'Διάφοροι Χοροί', 'Τμήματα Χορού', 'Introductory Dance', '');
        Scholio::portalStudy($s, 'Διάφοροι Χοροί', 'Τμήματα Χορού', 'Men pole strength', '');
        Scholio::portalStudy($s, 'Διάφοροι Χοροί', 'Τμήματα Χορού', 'Exotic Choreo', '');
        Scholio::portalStudy($s, 'Διάφοροι Χοροί', 'Τμήματα Χορού', 'Aerial Flow', '');
        Scholio::portalStudy($s, 'Διάφοροι Χοροί', 'Τμήματα Χορού', 'Aerial Hoop (Ring)', '');
        Scholio::portalStudy($s, 'Διάφοροι Χοροί', 'Τμήματα Χορού', 'Salsa', '');
        Scholio::portalStudy($s, 'Διάφοροι Χοροί', 'Τμήματα Χορού', 'Bachata', '');
        Scholio::portalStudy($s, 'Διάφοροι Χοροί', 'Τμήματα Χορού', 'Kizomba', '');
        Scholio::portalStudy($s, 'Διάφοροι Χοροί', 'Τμήματα Χορού', 'Reggaeton', '');
        Scholio::portalStudy($s, 'Διάφοροι Χοροί', 'Τμήματα Χορού', 'Salsa Bachata Kids', '');

        Scholio::portalSocial($s, 'facebook', 'https://www.facebook.com/stepupdancegr/');
        Scholio::portalSocial($s, 'instagram', 'https://www.instagram.com/stepupdancegr/?hl=el');

        /*===============   vistadance   ================*/
        $s = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Σχολή Χορού Vista Dance Sport Club', 'email' => 'info@vistadance.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'vistadance'])->id,
            'address' => 'Παπαναστασίου 158',
            'city' => 'Θεσσαλονίκη',
            'region' => 'Χαριλάου',
            'phone' => 2310320321,
            'type_id' => 10,
            'website' => 'vistadance.gr',
            'approved' => 1,
            'about' => 'Με μεγάλο πάθος και αφοσίωση στο χορό, λειτουργούμε από το 2004 στη Νεάπολη και από το 2014 στη Χαριλάου και μεταδίδουμε τη γνώση και την εμπειρία μας στους μαθητές μας!

            Καλύπτουμε όλες τις ανάγκες των μαθητών μας μέσω από την εκμάθηση - από ψυχαγωγία και απλά βήματα χορού μέχρι και επαγγελματικού επιπέδου χορεύτες που συμμετέχουν σε φεστιβάλ και διαγωνισμούς στην Ελλάδα και το εξωτερικό.

            Οι δάσκαλοί μας είναι υψηλού επιπέδου εκπαιδευμένοι ειδικά και πρωταθλητές Ελλάδος με μεγάλες διακρίσεις και στο εξωτερικό.

            ',
            'background' => $background,
        ]);

        new Portal($s, 5, 'xoros');

        Scholio::portalStudy($s, 'Διάφοροι Χοροί', 'Τμήματα Χορού', 'Latin', '');
        Scholio::portalStudy($s, 'Διάφοροι Χοροί', 'Τμήματα Χορού', 'Ευρωπαϊκοί', '');
        Scholio::portalStudy($s, 'Διάφοροι Χοροί', 'Τμήματα Χορού', 'Zumba', '');
        Scholio::portalStudy($s, 'Διάφοροι Χοροί', 'Τμήματα Χορού', 'Hip Hop', '');
        Scholio::portalStudy($s, 'Διάφοροι Χοροί', 'Τμήματα Χορού', 'Oriental', '');
        Scholio::portalStudy($s, 'Διάφοροι Χοροί', 'Τμήματα Χορού', 'Salsa', '');
        Scholio::portalStudy($s, 'Διάφοροι Χοροί', 'Τμήματα Χορού', 'Bachata', '');
        Scholio::portalStudy($s, 'Διάφοροι Χοροί', 'Τμήματα Χορού', 'Kizomba', '');
        Scholio::portalStudy($s, 'Διάφοροι Χοροί', 'Τμήματα Χορού', 'Ελληνικοί', '');
        Scholio::portalStudy($s, 'Διάφοροι Χοροί', 'Τμήματα Χορού', 'Μοντέρνος', '');
        Scholio::portalStudy($s, 'Διάφοροι Χοροί', 'Τμήματα Χορού', 'Γαμήλιος χορός', '');

        Scholio::portalSocial($s, 'facebook', 'https://www.facebook.com/vistadance.xarilaou/');

        /*===============   kafantari   ================*/
        $s = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Σχολές Χορού Καφαντάρη (Φάληρο)', 'email' => 'sxolixoroukafantari@yahoo.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'kafantari'])->id,
            'address' => 'Εδμόντου Ροστάν 16-18, Φάληρο',
            'city' => 'Θεσσαλονίκη',
            'region' => 'Φάληρο',
            'phone' => 2310831366,
            'public_email' => 'sxolixoroukafantari@yahoo.gr',
            'type_id' => 10,
            'website' => 'sxolesxoroukafantari.gr',
            'approved' => 1,
            'about' => 'Η Σχολή Χορού Καφαντάρη ιδρύθηκε στις αρχές της δεκαετίας του 1960 και απέκτησε τον Κρατικό τίτλο ΑΝΑΓΝΩΡΙΣΜΕΝΗΣ ΣΧΟΛΗΣ ΧΟΡΟΥ. Το 1988, η σχολή μας, απέκτησε από το Υπουργείο Πολιτισμού τον τίτλο της ΑΝΩΤΕΡΗΣ ΕΠΑΓΓΕΛΜΑΤΙΚΗΣ ΣΧΟΛΗΣ ΧΟΡΟΥ, αναγνωρίζοντας έτσι την προσφορά μας στην παιδεία του χορού.  Είναι ο υψηλότερος τίτλος του Υπουργείου και τον κατέχουν 14 Σχολές Χορού σε όλη την Ελλάδα, έχοντας το δικαίωμα (και μόνο αυτές) να χορηγούν Κρατικά Πτυχία στους τελειόφοιτους σπουδαστές τους.

            Η λειτουργία και η οργάνωση της Σχολής μας είναι δομημένη με βάση τις οδηγίες του Υπουργείου Πολιτισμού και είναι η ακόλουθη:
            ΤΜΗΜΑΤΑ ΝΗΠΙΩΝ (ΠΡΟΣΧΟΛΙΚΗΣ ΗΛΙΚΙΑΣ) 3 – 5,5 ΕΤΩΝ: Μουσικοκινητική αγωγή, αυτοσχεδιασμός – μίμηση, ομαλή ένταξη στο χορευτικό σύνολο – χορευτικό παιχνίδι.
            ΤΜΗΜΑΤΑ 5,5 ΕΩΣ 7 ΕΤΩΝ: Ρυθμικό σύστημα ένταξης των παιδιών στα μουσικά μοτίβα. Ειδικό πρόγραμμα ενδυνάμωσης του μυοσκελετικού συστήματος των παιδιών, το οποίο προετοιμάζει το σώμα, ώστε να δεχτεί την πίεση της τεχνικής του Μπαλέτου.
            ΤΜΗΜΑΤΑ 7 ΕΩΣ 10 ΕΤΩΝ: Αρχές της τεχνικής του Κλασικού Μπαλέτου – Μπάρα Α΄ και Β΄ επιπέδου.
            10 ΕΤΩΝ ΚΑΙ ΑΝΩ (ΣΥΜΦΩΝΑ ΜΕ ΤΟ ΕΠΙΠΕΔΟ ΚΑΙ ΤΗ ΔΥΝΑΤΟΤΗΤΑ ΤΟΥ ΚΑΘΕ ΠΑΙΔΙΟΥ): Εισαγωγή στις POINT. Εξέλιξη της τεχνικής του Μπαλέτου με τμήματα προφυτωρίων, φυτωρίων, προετοιμασίας για εισαγωγή στο ανώτερο επίπεδο της χορευτικής επαγγελματικής εκπαίδευσης.

            Απαγορεύεται μέχρι την ηλικία των 10 ετών η ενασχόληση τους με κάθε άλλου είδους χορού καθώς και η εισαγωγή τους στις POINT, επειδή:

            Είναι επικίνδυνο για τη σωματική διάπλαση των παιδιών.
            Πρέπει να πάρουν τις βάσεις της παιδείας του χορού και να εξελιχθούν σωστά σε οποιοδήποτε είδος χορού επιλέξουν.

            Από την ηλικία των 10 ετών η σχολή χορού παρέχει την δυνατότητα να μπορούν πλέον τα παιδιά να επιλέξουν και άλλα είδη χορού ( Τζαζ, Σύγχρονο, Flamenco, Hip – Hop, κ.α.).

            Απαγορεύεται ρητά σε Αναγνωρισμένες Ερασιτεχνικές Σχολές Χορού η παροχή κάθε είδους πτυχίου ή διπλωμάτων, γιατί δεν κατέχουν το νόμιμο δικαίωμα. Δεν έχουν καμία απολύτως νόμιμη ισχύ και λειτουργούν παραπλανητικά σε βάρος των μαθητών και των γονέων.

            Την οργάνωση και ευθύνη των προγραμμάτων της επαγγελματικής σχολής καθώς και των τμημάτων προετοιμασίας αυτής, φέρει η Καλλιτεχνική Διευθύντρια, κυρία Ανδρομάχη Καφαντάρη. Των ερασιτεχνικών τμημάτων της σχολής ο κύριος Κωνσταντίνος Καφαντάρης. Στην συνεχή μας προσπάθεια για αναβάθμιση των προγραμμάτων διδασκαλίας επιλέγονται διακεκριμένοι καθηγητές χορού, άριστα καταρτισμένοι ο καθένας στην ειδικότητα του. Διοργανώνουμε, τακτικά σεμινάρια με αναγνωρισμένης αξίας Έλληνες και ξένους καθηγητές χορού, καθώς και συχνές παραστάσεις σε θέατρα της Θεσσαλονίκης. Λειτουργούμε μέσα στη σχολή, ένα πρότυπο θεατρικό χώρο για παρουσιάσεις χορευτικών εργασιών των σπουδαστών μας.

            Η φιλοσοφία της σχολής μας, η οποία εκφράζεται από όλο το εκπαιδευτικό δυναμικό αυτής, συνοψίζεται στο τρίπτυχο Ήθος – Επαγγελματισμός – Συναίσθημα. Αυτό το δρόμο βαδίζουμε και με αυτό το πνεύμα δημιουργούμε τους αυριανούς χορευτές και καθηγητές χορού.

            Γιατί εσείς είστε που αύριο θα πάρετε την σκυτάλη για να υπηρετήσετε την πιο βαθιά και εσωτερική παρόρμηση του ανθρώπου, να εκφράσει τα συναισθήματα του… να υπηρετήσετε την τέχνη του χορού.

            Ανδρομάχη Καφαντάρη & Κώστας Καφαντάρης',
            'background' => $background,
        ]);

        new Portal($s, 5, 'xoros');

        Scholio::portalStudy($s, '', '', '', '');

        Scholio::portalSocial($s, 'facebook', '');
        Scholio::portalSocial($s, 'youtube', '');

        /*===============   svigka   ================*/
        $s = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'city' => '',
            'region' => '',
            'phone' => 2310936355,
            'type_id' => 10,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        new Portal($s, 5, 'xoros');

        Scholio::portalStudy($s, '', '', '', '');

        Scholio::portalSocial($s, 'facebook', '');
        Scholio::portalSocial($s, 'youtube', '');

        // /*===============   svigka   ================*/
        // $s = factory(App\Models\School::class)->create([
        //     'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
        //     'address' => '',
        //     'city' => '',
        //     'region' => '',
        //     'phone' => 2310936355,
        //     'type_id' => 10,
        //     'website' => '',
        //     'approved' => 1,
        //     'about' => '',
        //     'background' => $background,
        // ]);

        // new Portal($s, 5, 'xoros');

        // Scholio::portalStudy($s, '', '', '', '');

        // Scholio::portalSocial($s, 'facebook', '');
        // Scholio::portalSocial($s, 'youtube', '');

        // /*===============   svigka   ================*/
        // $s = factory(App\Models\School::class)->create([
        //     'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
        //     'address' => '',
        //     'city' => '',
        //     'region' => '',
        //     'phone' => 2310936355,
        //     'type_id' => 10,
        //     'website' => '',
        //     'approved' => 1,
        //     'about' => '',
        //     'background' => $background,
        // ]);

        // new Portal($s, 5, 'xoros');

        // Scholio::portalStudy($s, '', '', '', '');

        // Scholio::portalSocial($s, 'facebook', '');
        // Scholio::portalSocial($s, 'youtube', '');

        // /*===============   svigka   ================*/
        // $s = factory(App\Models\School::class)->create([
        //     'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
        //     'address' => '',
        //     'city' => '',
        //     'region' => '',
        //     'phone' => 2310936355,
        //     'type_id' => 10,
        //     'website' => '',
        //     'approved' => 1,
        //     'about' => '',
        //     'background' => $background,
        // ]);

        // new Portal($s, 5, 'xoros');

        // Scholio::portalStudy($s, '', '', '', '');

        // Scholio::portalSocial($s, 'facebook', '');
        // Scholio::portalSocial($s, 'youtube', '');

        // /*===============   svigka   ================*/
        // $s = factory(App\Models\School::class)->create([
        //     'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
        //     'address' => '',
        //     'city' => '',
        //     'region' => '',
        //     'phone' => 2310936355,
        //     'type_id' => 10,
        //     'website' => '',
        //     'approved' => 1,
        //     'about' => '',
        //     'background' => $background,
        // ]);

        // new Portal($s, 5, 'xoros');

        // Scholio::portalStudy($s, '', '', '', '');

        // Scholio::portalSocial($s, 'facebook', '');
        // Scholio::portalSocial($s, 'youtube', '');

        // /*===============   svigka   ================*/
        // $s = factory(App\Models\School::class)->create([
        //     'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
        //     'address' => '',
        //     'city' => '',
        //     'region' => '',
        //     'phone' => 2310936355,
        //     'type_id' => 10,
        //     'website' => '',
        //     'approved' => 1,
        //     'about' => '',
        //     'background' => $background,
        // ]);

        // new Portal($s, 5, 'xoros');

        // Scholio::portalStudy($s, '', '', '', '');

        // Scholio::portalSocial($s, 'facebook', '');
        // Scholio::portalSocial($s, 'youtube', '');

        // /*===============   svigka   ================*/
        // $s = factory(App\Models\School::class)->create([
        //     'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
        //     'address' => '',
        //     'city' => '',
        //     'region' => '',
        //     'phone' => 2310936355,
        //     'type_id' => 10,
        //     'website' => '',
        //     'approved' => 1,
        //     'about' => '',
        //     'background' => $background,
        // ]);

        // new Portal($s, 5, 'xoros');

        // Scholio::portalStudy($s, '', '', '', '');

        // Scholio::portalSocial($s, 'facebook', '');
        // Scholio::portalSocial($s, 'youtube', '');

        // /*===============   svigka   ================*/
        // $s = factory(App\Models\School::class)->create([
        //     'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
        //     'address' => '',
        //     'city' => '',
        //     'region' => '',
        //     'phone' => 2310936355,
        //     'type_id' => 10,
        //     'website' => '',
        //     'approved' => 1,
        //     'about' => '',
        //     'background' => $background,
        // ]);

        // new Portal($s, 5, 'xoros');

        // Scholio::portalStudy($s, '', '', '', '');

        // Scholio::portalSocial($s, 'facebook', '');
        // Scholio::portalSocial($s, 'youtube', '');

        // /*===============   svigka   ================*/
        // $s = factory(App\Models\School::class)->create([
        //     'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
        //     'address' => '',
        //     'city' => '',
        //     'region' => '',
        //     'phone' => 2310936355,
        //     'type_id' => 10,
        //     'website' => '',
        //     'approved' => 1,
        //     'about' => '',
        //     'background' => $background,
        // ]);

        // new Portal($s, 5, 'xoros');

        // Scholio::portalStudy($s, '', '', '', '');

        // Scholio::portalSocial($s, 'facebook', '');
        // Scholio::portalSocial($s, 'youtube', '');

    }
}
