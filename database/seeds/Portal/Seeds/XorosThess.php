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
            'user_id' => factory(App\User::class)->create(['name' => 'Σχολή Χορού Αγγελική Σβήγκα', 'email' => 'info@svigka.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'svigka'])->id,
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
            'user_id' => factory(App\User::class)->create(['name' => 'Χοροχώρος', 'email' => 'peggy25679@gmail.com', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'xoroxoros'])->id,
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

        /*===============   svigka   ================*/
        $s = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Σχολή Μπαλέτου Εύα Φεβγίδου', 'email' => 'evafevgidou@gmail.com', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
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

        Scholio::portalStudy($s, '', '', '', '');

 
        Scholio::portalSocial($s, 'facebook', 'https://www.facebook.com/FevgidouEva/?ref=br_rs');
        Scholio::portalSocial($s, 'youtube', 'https://www.youtube.com/user/EvaFevgidou');

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
        
    }
}
