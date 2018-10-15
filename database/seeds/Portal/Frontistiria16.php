<?php

use App\Scholio\Scholio;
use Illuminate\Database\Seeder;
use Portal\Portal;

class Frontistiria16 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $background = Portal::createImages('/upload/school/univ.png')->id;




     /*=============== 1 Best English Studies ================*/

     $fake = factory(App\Models\School::class)->create([
         'user_id' => factory(App\User::class)->create(['name' => 'Κέντρο Αγγλικής Γλώσσας Best English Studies', 'email' => 'info@bestenglish.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'bestenglish'])->id,
         'address' => 'Λεωφ. Δημοκρατίας 73, Μελίσσια',
         'region' => 'Μελίσσια',
         'city' => 'Αθήνα',
         'phone' => 2108100084,
         'type_id' => 4,
         'website' => 'bestenglish.gr',
         'approved' => 1,
         'about' => '
             Εξειδικευμένο Κέντρο Αγγλικής Γλώσσας
             Στο Best English Studies ο σκοπός μας είναι ένας. Η παροχή  εκπαιδευτικών υπηρεσιών πολύ υψηλού επιπέδου με στόχο την άριστη εκμάθηση της Αγγλικής Γλώσσας από όλους όσοι θέλουν να γίνουν γνώστες αυτής, είτε για εκπαιδευτικούς λόγους είτε για καθαρά επαγγελματικούς λόγους.
             Στο πλαίσιο αυτό έχουμε επιλέξει το αρτιότερο εκπαιδευτικό προσωπικό (native  speakers) με πολυετή εμπειρία, τις πιο σύγχρονες μεθόδους διδασκαλίας -  αναγνωρισμένες και πιστοποιημένες από έγκριτους διεθνής εκπαιδευτικούς οργανισμούς και τεχνολογικές πλατφόρμες υποστήριξης των εκπαιδευτικών προγραμμάτων μας.
             Η μεθοδολογία του κέντρου μας σε συνδυασμό με την συνεχή συνεργασία του Διευθυντή Σπουδών Δρ. Αντώνη Ι. Μούτσου με μαθητές, εκπαιδευτικούς και γονείς και η προσήλωση του στην υψηλή ποιότητα της διδασκαλίας, μας δίνει το προνόμιο να είμαστε υπερήφανοι για το τεράστιο ποσοστό επιτυχίας του Βest English Studies στις εξετάσεις όλων των πτυχίων.
             Στο Best English Studies έχουμε τη χαρά και το προνόμιο να φιλοξενούμε στις αίθουσές μας, μικρούς μαθητές που τώρα κάνουν τα πρώτα τους βήματα και θα γνωρίσουν την Αγγλική Γλώσσα μέσα από το παιχνίδι, εφήβους που θα προτετοιμαστούν δυναμικά για να κατακτήσουν τα πρώτα τους πτυχία, φοιτητές που θα ενισχύσουν τις γνώσεις τους για τις περαιτέρω σπουδές τους σε ξένα πανεπιστήμια, ενήλικες επαγγελματίες που χρειάζονται άμεση γρήγορη και αποτελεσματική γνώση εξιδεικευμένης ορολογίας, ανθρώπους που απλά θέλουν να μάθουν αγγλικά για τη χαρά της επικοινωνίας.
             Σε όποια κατηγορία και αν ανήκετε το Best English Studies είναι εδώ για να σας βοηθήσει με τον πιο αποτελεσματικό τρόπο να πραγματοποιήσετε το στόχο σας.
            ',
         'background' => $background,
     ]);

     new Portal($fake, 5, 'frontistirio',10);

     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Αγγλικά','https://www.bestenglish.gr/paidika-programmata');

     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Αγγλικά','https://www.bestenglish.gr/programmata-enilikon');


     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'IELTS','https://www.bestenglish.gr/ptyxia');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'TOEFL','https://www.bestenglish.gr/ptyxia');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'TOEIC','https://www.bestenglish.gr/ptyxia');

     Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/bestenglishgr');
     Scholio::portalSocial($fake, 'linkedin', 'https://www.linkedin.com/company/best-english-studies/');
     Scholio::portalSocial($fake, 'youtube', 'https://www.youtube.com/channel/UCKY7KrnZbOGckBdixYe3iBw');





     /*=============== 2 Αντωνιάδου ================*/

     $fake = factory(App\Models\School::class)->create([
         'user_id' => factory(App\User::class)->create(['name' => 'Ξένες Γλώσσες Αντωνιάδου Πειραιάς', 'email' => 'frontistirio.antoniadou@gmail.com', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'antoniadou'])->id,
         'address' => 'Καλλέργη 140, Πειραιάς',
         'region' => 'Πειραιάς',
         'city' => 'Αθήνα',
         'phone' => 2104635967,
         'type_id' => 4,
         'website' => 'facebook.com/FrontistiriaAntoniadou',
         'approved' => 1,
         'about' => '
              Το Φροντιστήριο Αντωνιάδου βρίσκεται στον Πειραιά και παρέχει προγράμματα Ξένων Γλωσσών και Πληροφορικής
            ',
         'background' => $background,
     ]);

     new Portal($fake, 6, 'frontistirio',10);

     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Αγγλικά');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γαλλικά');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γερμανικά');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ιταλικά');

     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Αγγλικά');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γαλλικά');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γερμανικά');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ιταλικά');


       Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/FrontistiriaAntoniadou');



     /*=============== 3 ΜΑΛΛΙΟΥ – GILMAN ================*/

     $fake = factory(App\Models\School::class)->create([
         'user_id' => factory(App\User::class)->create(['name' => 'ΦΡΟΝΤΙΣΤΗΡΙΑ ΞΕΝΩΝ ΓΛΩΣΣΩΝ ΜΑΛΛΙΟΥ – GILMAN', 'email' => 'info@malliou-gilman.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'malliou'])->id,
         'address' => 'Λεωφόρος Δεκελείας 108, Νέα Φιλαδέλφεια',
         'region' => 'Νέα Φιλαδέλφεια',
         'city' => 'Αθήνα',
         'phone' => 2130442232,
         'type_id' => 4,
         'website' => 'malliou-gilman.gr',
         'approved' => 1,
         'about' => '
           Το Φροντιστήριο Ξένων Γλωσσών ΜΑΛΛΙΟΥ – GILMAN στη Νέα Φιλαδέλφεια πρωτοστατεί για παραπάνω από 45 χρόνια στο χώρο της ξενόγλωσσης εκπαίδευσης. Από το 1970 βρισκόμαστε αδιάκοπα στο πλευρό των μαθητών, αρχικά, ως Κέντρο Ξένων Γλωσσών «ΟΜΗΡΟΣ» και τώρα με νέο όνομα, νέες υπηρεσίες αλλά με την ίδια διεύθυνση και την ίδια στάση ευθύνης συνεχίζουμε να προσφέρουμε στην εκμάθηση ξένων γλωσσών στη Νέα Φιλαδέλφεια και όχι μόνο. Οι μαθητές μας επιτυγχάνουν στις εξετάσεις τους έχοντας αποκτήσει ουσιαστικές γνώσεις της ξένης γλώσσας που διδάσκονται. Οι έμπειροι και άρτια εκπαιδευμένοι καθηγητές του φροντιστηρίου ξένων γλωσσών ΜΑΛΛΙΟΥ – GILMAN, στη Νέα Φιλαδέλφεια, αναλαμβάνoυν τη διδασκαλία Αγγλικών, Γαλλικών και Γερμανικών σε μικρά τμήματα για μαθητές, φοιτητές και ενήλικες.
           Αντιλαμβανόμενοι τις οικονομικές δυσκολίες της εποχής, το φροντιστήριό μας επέλεξε να μειώσει το κόστος των διδάκτρων και να προσφέρει δωρεάν τη Junior τάξη σε όλους τους μικρούς νέους μαθητές, σαν μια πρώτη γνωριμία μαζί μας. Κάθε γονιός μπορεί, έτσι, να είναι σίγουρος για την επιλογή του, αφού θα έχει την ευκαιρία να εκτιμήσει το αποτέλεσμα του πρώτου χρόνου διδασκαλίας, χωρίς κόστος. Ακόμη, το φροντιστήριο ξένων γλωσσών πραγματοποιεί έκπτωση σε κάθε μαθητή που παρακολουθεί παραπάνω από μια γλώσσα, αλλά και σε ομάδες (γκρουπ) φοιτητών και ενηλίκων μαθητών. Τέλος, υπάρχει και η δυνατότητα ταχύρρυθμης εκμάθησης γλώσσας και προετοιμασίας για Lower & Proficiency, μέσω της παρακολούθησης ιδιαιτέρων μαθημάτων.
            ',
         'background' => $background,
     ]);

     new Portal($fake, 7, 'frontistirio', 20);

     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Αγγλικά','http://malliou-gilman.gr/kykloi-spoudwn');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γαλλικά','http://malliou-gilman.gr/kykloi-spoudwn');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γερμανικά','http://malliou-gilman.gr/kykloi-spoudwn');

     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Αγγλικά','http://www.malliou-gilman.gr/tmimata-enilikon');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γαλλικά','http://www.malliou-gilman.gr/tmimata-enilikon');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γερμανικά','http://www.malliou-gilman.gr/tmimata-enilikon');

     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'IELTS');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'TOEFL');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'TOEIC');



     /*=============== 4 English In Action ================*/

     $fake = factory(App\Models\School::class)->create([
         'user_id' => factory(App\User::class)->create(['name' => 'Ξένες Γλώσσες English In Action', 'email' => 'neoiraklio@englishinaction.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'englishInAction'])->id,
         'address' => 'Ηρακλειδών 62, Νέο Ηράκλειο',
         'region' => 'Νέο Ηράκλειο',
         'city' => 'Αθήνα',
         'phone' => 2102790190,
         'type_id' => 4,
         'website' => 'englishinaction.gr',
         'approved' => 1,
         'about' => '
               Who we are
               Who we are Ωρα για δράση!!!
               Ξένες γλώσσες κ πληροφορική για όλους!!! Οικονομικά-εγγυημένα-με γνώμονα τις ανάγκες σας!!! Think smart….save money…. follow us!!!!
               Στα κέντρα ξένων γλωσσών ENGLISH IN ACTION μικροί και μεγάλοι μαθαίνουν ξένες γλώσσες και πληροφορική σωστά, ευχάριστα κάνοντας την ξένη γλώσσα εύχρηστη σαν την μητρική!!!

               Βασικός μας στόχος είναι, ο σπουδαστής να πάρει το πτυχίο που τον ενδιαφέρει, αλλά κυρίως να αγαπήσει και να μπορέσει να χρησιμοποιήσει την ξένη γλώσσα με την ίδια ευκολία που χρησιμοποιεί και τη μητρική του.
               Ολιγομελή Κλειστά Τμήματαέως 8 ατόμων για παιδιά- εφήβους, για καλύτερα αποτελέσματα
               μοντέρνοι χώροι, ευχάριστο περιβάλλον με όλα τα σύγχρονα οπτικοακουστικά μέσα!!!
               χρονοδιάγραμμα σπουδών στους σπουδαστές για σωστό προγραμματισμό, χωρίς επιπλεόν ταξεις και χρεώσεις
               Τέστ κατάταξης για μαθητές που έρχονται από άλλα φροντιστήρια για να μη δημιουργούνται κενά
               Συνεχής έλεγχος καθηγητών για τη σωστή απόδοσή τους στη τάξη
               Πρακτική εξάσκηση στο εργαστήριο πληροφορικής μία ώρα την εβδομάδα για εμπέδωση της ύλης και σύντομη ομιλία της γλώσσας.
               Εξειδικευμένα προγράμματα για ενήλικες και φοιτητές.
               Στήριξη μαθητών με μαθησιακές δυσκολίες
               δωρεάν Ενισχυτική διδασκαλία  με επαναλήψειςγια κάλυψη των κενών
               Πλήρη διαγωνίσματα σε περιβάλλον εξετάσεων για προετοιμασία στην πίεση χρόνου
               συνεχής ενημέρωση των γονέων για τη σωστή παρακολούθηση των παιδιών

               στα κέντρα μας προτεραιότητα μας είναι ικανοποίηση των αναγκών σας για αυτό το λόγο οι υπεύθυνοι κάθε κέντρου είναι ανά πάσα στιγμή δίπλα σας για οποιαδήποτε πληροφορία ή για οποιοδήποτε πρόβλημα αφορά εσάς ή το παιδί σας!!!
            ',
         'background' => $background,
     ]);

     new Portal($fake, 8, 'frontistirio',45);

     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Αγγλικά','http://englishinaction.gr/?page_id=36');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γαλλικά','http://englishinaction.gr/?page_id=40');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γερμανικά','http://englishinaction.gr/?page_id=38');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ισπανικά','http://englishinaction.gr/?page_id=44');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ιταλικά','http://englishinaction.gr/?page_id=42');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ρωσικά','http://englishinaction.gr/?page_id=46');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Τούρκικα','http://englishinaction.gr/?page_id=48');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ιαπωνικά','http://englishinaction.gr/?page_id=284');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Κινέζικα','http://englishinaction.gr/?page_id=284');


     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Αγγλικά','http://englishinaction.gr/?page_id=36');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γαλλικά','http://englishinaction.gr/?page_id=40');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γερμανικά','http://englishinaction.gr/?page_id=38');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ισπανικά','http://englishinaction.gr/?page_id=44');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ιταλικά','http://englishinaction.gr/?page_id=42');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ρωσικά','http://englishinaction.gr/?page_id=46');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Τούρκικα','http://englishinaction.gr/?page_id=48');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ιαπωνικά','http://englishinaction.gr/?page_id=284');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Κινέζικα','http://englishinaction.gr/?page_id=284');

     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'IELTS');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'TOEFL');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'TOEIC');

       Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/English-In-Action-536949536364164');
       Scholio::portalSocial($fake, 'youtube', 'https://www.youtube.com/channel/UCoVahRANIDov_rJUppHMmWA');



     /*=============== 5 ΕΥΡΩΠΑΙΔΕΙΑ Χαλάνδρι ================*/

     $fake = factory(App\Models\School::class)->create([
         'user_id' => factory(App\User::class)->create(['name' => 'Ξένες Γλώσσες ΕΥΡΩΠΑΙΔΕΙΑ Χαλάνδρι', 'email' => 'evropedia@yahoo.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'evropedia'])->id,
         'address' => 'Ολύμπου 25, Χαλάνδρι',
         'region' => 'Χαλάνδρι',
         'city' => 'Αθήνα',
         'phone' => 2106801719,
         'type_id' => 4,
         'website' => 'evropedia.gr',
         'approved' => 1,
         'about' => '
            Το διδακτικό προσωπικό του φροντιστηρίου μας, που αποτελείται απο καθηγήτριες πτυχιούχους Ελληνικών & Ξένων Πανεπιστημίων με μεγάλη διδακτική πείρα, άριστη παιδαγωγική κατάρτηση και συμπεριφορά, σας εγγυάται για την επιτυχία των παιδιών σας.
            Η ΕΥΡΩΠΑΙΔΕΙΑ εφαρμόζει το επιτυχημένο σύστημα TUTORING  και  γι αυτό όλες οι καθηγήτριές μας δεν διδάσκουν μόνο,  αλλά  είναι   και  ΕΚΠΑΙΔΕΥΤΙΚΟΙ  ΣΥΜΒΟΥΛΟΙ   των  μαθητών  και φροντίζουν να είναι  πάντα δίπλα στα παιδιά  να τα συμβουλεύουν και  να επιλύουν κάθε πρόβλημά  τους.
            Για το σκοπό αυτό  ΟΛΟΙ  εμείς  στην   ΕΥΡΩΠΑΙΔΕΙΑ  στο Χαλάνδρι παρακολουθούμε αρκετά σεμινάρια εντός και εκτός του κέντρου Ξένων Γλωσσών και  ενημερωνόμαστε  για όλες τις τελευταίες εξελίξεις σχετικά με τη γλώσσα, την εκπαίδευση και την παιδοψυχολογία.
            ',
         'background' => $background,
     ]);

     new Portal($fake, 5, 'frontistirio',10);

     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Αγγλικά','https://www.evropedia.gr/index.php?instance=course&cat_id=1');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γαλλικά','https://www.evropedia.gr/index.php?instance=course&cat_id=2');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γερμανικά','https://www.evropedia.gr/index.php?instance=course&cat_id=3');


     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Αγγλικά','https://www.evropedia.gr/index.php?instance=course&cat_id=1');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γαλλικά','https://www.evropedia.gr/index.php?instance=course&cat_id=2');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γερμανικά','https://www.evropedia.gr/index.php?instance=course&cat_id=3');


     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'IELTS');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'TOEFL');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'TOEIC');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'GMAT');




     /*=============== 6 i-Εκπαίδευση ================*/

     $fake = factory(App\Models\School::class)->create([
         'user_id' => factory(App\User::class)->create(['name' => 'Κέντρο Εκπαίδευσης i-Εκπαίδευση', 'email' => 'info@iekpaideysi.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'iEkpaideysi'])->id,
         'address' => 'Τερψιχόρης 3, Βάρη',
         'region' => 'Βάρη',
         'city' => 'Αθήνα',
         'phone' => 2103007503,
         'type_id' => 4,
         'website' => 'iekpaideysi.gr',
         'approved' => 1,
         'about' => '
            Το i-Εκπαίδευση είναι το πρώτο πλήρες διαδικτυακό ελληνικό φροντιστήριο και λειτουργεί από το 2013, προσφέροντας φροντιστηριακά και ιδιαίτερα μαθήματα σε παιδιά Γυμνασίου-Λυκείου καθώς και ξένες γλώσσες. Εξειδικεύεται σε μαθήματα «σύγχρονης» και «ασύγχρονης» εκπαίδευσης, δηλαδή έχει την δυνατότητα να προσφέρει και ζωντανό διαδικτυακό μάθημα και μαθήματα σε μορφή βίντεο.
            Από την άνοιξη του 2017 το i-Εκπαίδευση εξελίχθηκε σε πλατφόρμα διαδικτυακής εκπαίδευσης όπου μπορεί πλέον να φιλοξενήσει webinars καθώς και μαθήματα τρίτων καθηγητών.
            Υπηρεσίες του i-Εκπαίδευση:
            -Ζωντανά διαδικτυακά μαθήματα Γυμνασίου-Λυκείου ιδιαίτερα ή σε γκρουπ
            -Ζωντανά διαδικτυακά μαθήματα Ξένων Γλωσσών (Αγγλικά, Γαλλικά, Γερμανικά, Ιταλικά, Ισπανικά, Τουρκικά, Ιαπωνικά
            -Μαθήματα "ασύγχρονης" εκπαίδευσης με μορφή βίντεο και ψηφιακών σημειώσεων για ξένες γλώσσες, προγράμματα υπολογιστών και βιντεο-webinars
            -Online μαθήματα ECDL ζωντανά και βιτεοσκοπημένα
            -Υπηρεσίες φιλοξενίας και προώθησης διαδικτυακών σεμιναρίων (webinar)
            -Υπηρεσίες φιλοξενίας διαδικτυακών μαθηματων σε καθηγητές οποιασδήποτε ειδικότητας
            ',
         'background' => $background,
     ]);

     new Portal($fake, 5, 'frontistirio',30);

     Scholio::portalStudy($fake, 'Γυμνάσιο', 'Γυμνάσιο', 'Διαδικτυακά Μαθήματα');
     Scholio::portalStudy($fake, 'Λύκειο', 'Λύκειο', 'Διαδικτυακά Μαθήματα');

     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γαλλικά','https://iekpaideysi.gr/mathimata-gallikon/');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ισπανικά','https://iekpaideysi.gr/mathimata-ispanikon/');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ιταλικά','https://iekpaideysi.gr/mathimata-italikon/');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ρωσικά','https://iekpaideysi.gr/mathimata-rosikon/');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Τούρκικα','https://iekpaideysi.gr/mathimata-tourkikon/');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ιαπωνικά','https://iekpaideysi.gr/mathimata-iaponikon/');

     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γαλλικά','https://iekpaideysi.gr/mathimata-gallikon/');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ισπανικά','https://iekpaideysi.gr/mathimata-ispanikon/');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ιταλικά','https://iekpaideysi.gr/mathimata-italikon/');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ρωσικά','https://iekpaideysi.gr/mathimata-rosikon/');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Τούρκικα','https://iekpaideysi.gr/mathimata-tourkikon/');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ιαπωνικά','https://iekpaideysi.gr/mathimata-iaponikon/');

     Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/DiadiktyakaMathimata');
     Scholio::portalSocial($fake, 'twitter', 'https://twitter.com/i_ekpaideysi');
     Scholio::portalSocial($fake, 'google-plus', 'https://plus.google.com/104542946936016101912');


     /*=============== 7 Cosmodialogos ================*/

     $fake = factory(App\Models\School::class)->create([
         'user_id' => factory(App\User::class)->create(['name' => 'Ξένες Γλώσσες Cosmodialogos', 'email' => 'info@cosmodialogos.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'cosmodialogos'])->id,
         'address' => 'Εθνικής Αμύνης 14 Α',
         'region' => 'Κέντρο',
         'city' => 'Θεσσαλονίκη',
         'phone' => 2310250176,
         'type_id' => 4,
         'website' => 'cosmodialogos.gr',
         'approved' => 1,
         'about' => '
            ΝΕΕΣ ΜΕΙΩΜΕΝΕΣ ΤΙΜΕΣ, σε όλα τα προγράμματα σπουδών!
            ΔΩΡΕΑΝ μαθήματα ενισχυτικής διδασκαλίας!
            Καθημερινή πρακτική εξάσκηση γλώσσας στο computer lab μέσω σύγχρονων εκπαιδευτικών προγραμμάτων για την ανάπτυξη και τη βελτίωση δεξιοτήτων στους τομείς: LISTENING, GRAMMAR, READING, VOCABULARY, SPEAKING (διάλογος με τον υπολογιστή)
            Language weeks (για όλες τις γλώσσες με την συμμετοχή native speakers)
            Δανειστική βιβλιοθήκη στη διάθεση των σπουδαστών!
            Επιπλέον παροχές σε όλα τα τμήματα, σε όλα τα επίπεδα, σε όλα τα πτυχία:
            1. Test προσομοίωσης.
            2. Ενισχυτική διδασκαλία Σαββάτου.
            3. Δυνατότητα μελέτης των αγγλικών σας στον χώρο μας με την βοήθεια των καθηγητών μας.
            4. Βοήθεια από καθηγητές μας σε οποιαδήποτε πανεπιστημιακή εργασία, σύνταξη βιογραφικού, ορολογία, μετάφραση, επαγγελματικό λεξιλόγιο κ.ά..
            Επίσης: 60’ minimum One-on-One δωρεάν ιδιαίτερα μαθήματα αντιμετώπισης κάθε προσωπικής δυσκολίας, απορίας στην εκμάθηση της γλώσσας καθ΄όλη τη διάρκεια των σπουδών σας στη σχολή μας.
            ',
         'background' => $background,
     ]);

     new Portal($fake, 8, 'frontistirio',40);

     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Αγγλικά','https://cosmodialogos.gr/%CE%B1%CF%81%CF%87%CE%B9%CE%BA%CE%AE/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CE%BC%CE%B1%CE%B8%CE%AE%CE%BC%CE%B1%CF%84%CE%B1-%CE%B1%CE%B3%CE%B3%CE%BB%CE%B9%CE%BA%CF%8E%CE%BD/');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γαλλικά','https://cosmodialogos.gr/%CE%B1%CF%81%CF%87%CE%B9%CE%BA%CE%AE/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CE%BC%CE%B1%CE%B8%CE%AE%CE%BC%CE%B1%CF%84%CE%B1-%CE%B3%CE%B1%CE%BB%CE%BB%CE%B9%CE%BA%CF%8E%CE%BD/');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γερμανικά','https://cosmodialogos.gr/%CE%B1%CF%81%CF%87%CE%B9%CE%BA%CE%AE/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CE%BC%CE%B1%CE%B8%CE%AE%CE%BC%CE%B1%CF%84%CE%B1-%CE%B3%CE%B5%CF%81%CE%BC%CE%B1%CE%BD%CE%B9%CE%BA%CF%8E%CE%BD/');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ισπανικά','https://cosmodialogos.gr/%CE%B1%CF%81%CF%87%CE%B9%CE%BA%CE%AE/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CE%BC%CE%B1%CE%B8%CE%AE%CE%BC%CE%B1%CF%84%CE%B1-%CE%B9%CF%83%CF%80%CE%B1%CE%BD%CE%B9%CE%BA%CF%8E%CE%BD/');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ιταλικά','https://cosmodialogos.gr/%CE%B1%CF%81%CF%87%CE%B9%CE%BA%CE%AE/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CE%BC%CE%B1%CE%B8%CE%AE%CE%BC%CE%B1%CF%84%CE%B1-%CE%B9%CF%84%CE%B1%CE%BB%CE%B9%CE%BA%CF%8E%CE%BD/');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ρωσικά','https://cosmodialogos.gr/%CE%B1%CF%81%CF%87%CE%B9%CE%BA%CE%AE/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CE%BC%CE%B1%CE%B8%CE%AE%CE%BC%CE%B1%CF%84%CE%B1-%CF%81%CF%89%CF%83%CE%B9%CE%BA%CF%8E%CE%BD/');
     
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Αγγλικά','https://cosmodialogos.gr/%CE%B1%CF%81%CF%87%CE%B9%CE%BA%CE%AE/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CE%BC%CE%B1%CE%B8%CE%AE%CE%BC%CE%B1%CF%84%CE%B1-%CE%B1%CE%B3%CE%B3%CE%BB%CE%B9%CE%BA%CF%8E%CE%BD/%CE%B1%CE%B3%CE%B3%CE%BB%CE%B9%CE%BA%CE%AC-%CE%B3%CE%B9%CE%B1-%CE%B5%CE%BD%CE%AE%CE%BB%CE%B9%CE%BA%CE%B5%CF%82/');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γαλλικά','https://cosmodialogos.gr/%CE%B1%CF%81%CF%87%CE%B9%CE%BA%CE%AE/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CE%BC%CE%B1%CE%B8%CE%AE%CE%BC%CE%B1%CF%84%CE%B1-%CE%B3%CE%B1%CE%BB%CE%BB%CE%B9%CE%BA%CF%8E%CE%BD/');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γερμανικά','https://cosmodialogos.gr/%CE%B1%CF%81%CF%87%CE%B9%CE%BA%CE%AE/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CE%BC%CE%B1%CE%B8%CE%AE%CE%BC%CE%B1%CF%84%CE%B1-%CE%B3%CE%B5%CF%81%CE%BC%CE%B1%CE%BD%CE%B9%CE%BA%CF%8E%CE%BD/');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ισπανικά','https://cosmodialogos.gr/%CE%B1%CF%81%CF%87%CE%B9%CE%BA%CE%AE/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CE%BC%CE%B1%CE%B8%CE%AE%CE%BC%CE%B1%CF%84%CE%B1-%CE%B9%CF%83%CF%80%CE%B1%CE%BD%CE%B9%CE%BA%CF%8E%CE%BD/ ');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ιταλικά','https://cosmodialogos.gr/%CE%B1%CF%81%CF%87%CE%B9%CE%BA%CE%AE/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CE%BC%CE%B1%CE%B8%CE%AE%CE%BC%CE%B1%CF%84%CE%B1-%CE%B9%CF%84%CE%B1%CE%BB%CE%B9%CE%BA%CF%8E%CE%BD/');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ρωσικά','https://cosmodialogos.gr/%CE%B1%CF%81%CF%87%CE%B9%CE%BA%CE%AE/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CE%BC%CE%B1%CE%B8%CE%AE%CE%BC%CE%B1%CF%84%CE%B1-%CF%81%CF%89%CF%83%CE%B9%CE%BA%CF%8E%CE%BD/');

     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'IELTS','https://cosmodialogos.gr/%CE%B1%CF%81%CF%87%CE%B9%CE%BA%CE%AE/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CE%BC%CE%B1%CE%B8%CE%AE%CE%BC%CE%B1%CF%84%CE%B1-%CE%B1%CE%B3%CE%B3%CE%BB%CE%B9%CE%BA%CF%8E%CE%BD/ielts-toefl/');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'TOEFL','https://cosmodialogos.gr/%CE%B1%CF%81%CF%87%CE%B9%CE%BA%CE%AE/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CE%BC%CE%B1%CE%B8%CE%AE%CE%BC%CE%B1%CF%84%CE%B1-%CE%B1%CE%B3%CE%B3%CE%BB%CE%B9%CE%BA%CF%8E%CE%BD/ielts-toefl/');

     Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/CosmoDialogos');
     Scholio::portalSocial($fake, 'google-plus', 'https://plus.google.com/102879651903990446848');



     /*=============== 8  Όμηρος Γαλάτσι ================*/

     $fake = factory(App\Models\School::class)->create([
         'user_id' => factory(App\User::class)->create(['name' => 'Κέντρα Ξένων Γλωσσών Όμηρος Γαλάτσι', 'email' => 'hello@omiros-kotsi.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'omirosGalatsi'])->id,
         'address' => 'Απειράνθου 8, Γαλάτσι',
         'region' => 'Γαλάτσι',
         'city' => 'Αθήνα',
         'phone' => 2102923703,
         'type_id' => 4,
         'website' => 'omiros-kotsi.gr',
         'approved' => 1,
         'about' => '
            Η φιλοσοφία μας
            Πορευόμαστε με την πεποίθηση ότι η εκπαίδευση είναι μία  σοβαρή υπόθεση, η οποία δεν καλουπώνεται όπως ένα προϊόν στο ράφι του σουπερμάρκετ προς πώληση.
            Ως εκπαιδευτικοί πιστεύουμε ότι η διδασκαλία  είναι μία συνεχής προσπάθεια στην οποία συμπάσχουμε, συμπορευόμαστε, εξελισσόμαστε και μαθαίνουμε μέσα από αυτήν.
            Σημαντικό για μας όχι μόνο το ΤΙ μαθαίνουμε αλλά και το ΠΩΣ. Μας ενδιαφέρει πολύ η διαδικασία και η δυναμική που υπάρχει μεταξύ μαθητών και καθηγητή που κάθε φορά είναι μοναδική.
            Οι μαθητές μας πότε σαν πρωταγωνιστές, πότε σαν αφηγητές, μικροί συγγραφείς ή παρουσιαστές, εμπεδώνουν βιωματικά τη ξένη γλώσσα, έξω από το δομημένο μαθησιακό πλαίσιο. Τα ειδικά μαθήματα με ξενόγλωσσο καθηγητή (native speaker) στο βασικό κύκλο σπουδών, ενισχύουν αυτή τη διαδικασία.
            Αποτέλεσμα είναι να πετυχαίνουμε ένα πολύ υψηλό επίπεδο σπουδών σε όλες τις βαθμίδες γεγονός που φαίνεται όχι μόνον από τις επιτυχίες των μαθητών μας αλλά κυρίως από το γεγονός ότι μπορούν να χειριστούν άνετα και ουσιαστικά την ξένη γλώσσα έξω από το μαθησιακό περιβάλλον.  Αυτός άλλωστε είναι και ο πρωταρχικός μας στόχος.
            ',
         'background' => $background,
     ]);

     new Portal($fake, 7, 'frontistirio',20);

     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Αγγλικά','http://www.omiros-kotsi.gr/%CE%B3%CE%BB%CF%8E%CF%83%CF%83%CE%B5%CF%82/%CE%B1%CE%B3%CE%B3%CE%BB%CE%B9%CE%BA%CE%AC/');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γαλλικά','http://www.omiros-kotsi.gr/%CE%B3%CE%BB%CF%8E%CF%83%CF%83%CE%B5%CF%82/%CE%B3%CE%B1%CE%BB%CE%BB%CE%B9%CE%BA%CE%AC-%CE%B3%CE%B5%CF%81%CE%BC%CE%B1%CE%BD%CE%B9%CE%BA%CE%AC/');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γερμανικά','http://www.omiros-kotsi.gr/%CE%B3%CE%BB%CF%8E%CF%83%CF%83%CE%B5%CF%82/%CE%B3%CE%B1%CE%BB%CE%BB%CE%B9%CE%BA%CE%AC-%CE%B3%CE%B5%CF%81%CE%BC%CE%B1%CE%BD%CE%B9%CE%BA%CE%AC/');

     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Αγγλικά','http://www.omiros-kotsi.gr/%CE%B3%CE%BB%CF%8E%CF%83%CF%83%CE%B5%CF%82/%CE%B1%CE%B3%CE%B3%CE%BB%CE%B9%CE%BA%CE%AC/');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γαλλικά','http://www.omiros-kotsi.gr/%CE%B3%CE%BB%CF%8E%CF%83%CF%83%CE%B5%CF%82/%CE%B1%CE%B3%CE%B3%CE%BB%CE%B9%CE%BA%CE%AC/');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γερμανικά','http://www.omiros-kotsi.gr/%CE%B3%CE%BB%CF%8E%CF%83%CF%83%CE%B5%CF%82/%CE%B1%CE%B3%CE%B3%CE%BB%CE%B9%CE%BA%CE%AC/');







     /*=============== 9  Όμηρος Νέα Σμύρνη ================*/

     $fake = factory(App\Models\School::class)->create([
         'user_id' => factory(App\User::class)->create(['name' => 'Κέντρα Ξένων Γλωσσών Όμηρος Νέα Σμύρνη', 'email' => 'omiros_neasmirni@yahoo.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'omirosNeaSmirni'])->id,
         'address' => 'Κων/νου Παλαιολόγου 14, Νέα Σμύρνη',
         'region' => 'Νέα Σμύρνη',
         'city' => 'Αθήνα',
         'phone' => 2109340570,
         'type_id' => 4,
         'website' => 'omirosneasmirni.gr',
         'approved' => 1,
         'about' => '
              Ο εκπαιδευτικός Οργανισμός ΟΜΗΡΟΣ ιδρύθηκε το 1946 με την επωνυμία ΕλληνοΑμερικανικό Επιμορφωτικό Ινστιτούτο, ενώ το 1968 μετονομάστηκε σε ΟΜΗΡΟ.
              Σήμερα, 60 χρόνια μετά περισσότεροι από 1.500.000 απόφοιτοι αποδεικνύουν την επιτυχημένη πορεία των Κέντρων Ξένων Γλωσσών ΟΜΗΡΟΣ στον τομέα της εκπαίδευσης.
              Στη Νέα Σμύρνη ο ΟΜΗΡΟΣ λειτούργησε υπό την διεύθυνση των Αφών Τάκη και Νίκο Γ. Τσακίρη από το 1968 - 2004 με μεγάλη επιτυχία.
              Από αρχές Νοεμβρίου 2014 ξαναλειτούργησε ο ΟΜΗΡΟΣ υπό τη διεύθυνση της Ευαγγελής Ι. Μανάκου, απόφοιτο του Εθνικού Καποδιστριακού Πανεπιστημίου Αθηνών, Τμήμα Γερμανικής Φιλολογίας.
            ',
         'background' => $background,
     ]);

     new Portal($fake, 11, 'frontistirio',30);

     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Αγγλικά','http://omirosneasmirni.gr/________1.html');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γαλλικά','http://omirosneasmirni.gr/________2.html');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γερμανικά','http://omirosneasmirni.gr/_________.html');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ισπανικά','http://omirosneasmirni.gr/________.html');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ιταλικά','http://omirosneasmirni.gr/________3.html');


     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Αγγλικά','http://omirosneasmirni.gr/________1.html');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γαλλικά','http://omirosneasmirni.gr/________2.html');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γερμανικά','http://omirosneasmirni.gr/_________.html');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ισπανικά', 'http://omirosneasmirni.gr/________.html');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ιταλικά','http://omirosneasmirni.gr/________3.html');

       Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/Κέντρα-Ξένων-Γλωσσών-Όμηρος-Νέα-Σμύρνη-551300261671786/');






     /*=============== 10  Helen's school ================*/

     $fake = factory(App\Models\School::class)->create([
         'user_id' => factory(App\User::class)->create(['name' => 'Ξένες Γλώσσες Helen\'s school, Άνω Λιόσια', 'email' => 'evangeliaplavoukou@yahoo.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'helens'])->id,
         'address' => 'Λεωφόρος Φυλής 195, Άνω Λιόσια',
         'region' => 'Άνω Λιόσια',
         'city' => 'Αθήνα',
         'phone' => 2102471287,
         'type_id' => 4,
         'website' => 'helens-school.gr',
         'approved' => 1,
         'about' => '
            Μια καινούργια γλώσσα είναι μια καινούργια ζωή. Η περσική αυτή παροιμία τονίζει τη σημασία μια ξένης γλώσσας ταυτίζοντάς την με την ίδια τη ζωή.
            Η πρώτη επαφή, κατά την διάρκεια εκμάθησης,  με μια ξένη γλώσσα είναι μια πρωτόγνωρη εμπειρία όχι μόνο για ένα παιδί του οποίου οι εμπειρίες είναι περιορισμένες αλλά και για έναν ενήλικα που ενίοτε αισθάνεται παραιτημένος από νέες γνώσεις πέραν των σχολικών, ακαδημαϊκών και επαγγελματικών, που έχει ήδη αποκτήσει .
            Βλέποντας όμως εμείς οι μεγάλοι τον ενθουσιασμό στα μάτια των παιδιών  μας όταν μαθαίνουν νέα πράγματα και ιδιαίτερα όταν συντάσσουν τις πρώτες τους προτάσεις στα αγγλικά ή σε οποιαδήποτε άλλη γλώσσα, διαισθανόμαστε αμέσως τους νέους ορίζοντες που τους ανοίγονται και τη νέα ζωή που τους δίνεται.
            Για το ταξίδι αυτό στη νέα τους ζωή είμαστε εδώ παρόντες  δίνοντάς τους όχι μόνο γνώσεις και εμπειρίες μάθησης αλλά και τη δύναμη να κυριαρχήσουν στο μέλλον που τους ανήκει,  ενισχύοντας τα ταλέντα και την προσωπικότητα τους.
            Στο σημείο  αυτό ο ρόλος των γονέων είναι σημαντικός, καθώς με τη βοήθειά τους, έχουμε μια αρτιότερη εικόνα της ψυχοσύνθεσης του παιδιού πράγμα το οποίο μας δίνει τη δυνατότητα να μυήσουμε το παιδί και τον έφηβο στον χώρο της ξένης γλώσσας γρηγορότερα και με μεγαλύτερη άνεση.
            Πέραν της ακαδημαϊκής και διδακτικής εμπειρίας, το κέντρο ξένων γλωσσών  μας έχει εμπλουτιστεί με σύγχρονο εκπαιδευτικό υλικό (διαδραστικοί πίνακες, διαδικτυακές πλατφόρμες, οπτικοακουστικά μέσα) το οποίο  όχι μόνο κάνει το μάθημα πιο ευχάριστο αλλά και εξοικειώνει τον μαθητή με τις νέες τεχνολογίες.
            Όσον αφορά τη πιστοποίηση των γνώσεων, συνεργαζόμαστε με όλους τους αναγνωρισμένους από τον ΑΣΕΠ φορείς πιστοποίησης γλωσσομάθειας  και είμαστε πάντα στη διάθεσή σας να σας δώσουμε πληροφορίες για το ποια εξέταση είναι καταλληλότερη για τον εκάστοτε σπουδαστή.( μαθητή ή επαγγελματία)
            Το ΚΞΓ Helen\'s School δεν στοχεύει μόνο στην απόκτηση ενός πτυχίου αλλά στην κατάκτηση της σύγχρονης γνώσης. Η σύγχρονη γνώση η οποία συχνά προηγείται του σύγχρονου τρόπου ζωής  είναι το εφόδιο που προσφέρουμε στα παιδιά μας, στους σπουδαστές μας ώστε παρά την οικονομική και πολιτιστική κρίση να μπορέσουν να συναγωνιστούν τους μαθητές όχι  μόνο της χώρας μας αλλά και του εξωτερικού!
            ',
         'background' => $background,
     ]);

     new Portal($fake, 5, 'frontistirio',20);

     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Αγγλικά');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γαλλικά');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γερμανικά');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ισπανικά');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ιταλικά');

     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Αγγλικά');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γαλλικά');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γερμανικά');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ισπανικά');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ιταλικά');


       Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/helensschool1');




     /*=============== 11  ΛΑΚΙΟΣ ================*/

     $fake = factory(App\Models\School::class)->create([
         'user_id' => factory(App\User::class)->create(['name' => 'Κέντρο ΞΕΝΩΝ Γλωσσών ΛΑΚΙΟΣ, Καματερό', 'email' => 'lakios.school@gmail.com', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'lakios'])->id,
         'address' => 'Αγίου Νικολάου 19, Καματερό',
         'region' => 'Καματερό',
         'city' => 'Αθήνα',
         'phone' => 2102312990,
         'type_id' => 4,
         'website' => 'facebook.com/Lakiospage',
         'approved' => 1,
         'about' => '
             Διδασκαλία ξένων γλωσσών και άρτια προετοιμασία για όλα τα έγκυρα πτυχία των Αγγλικών!
             Τα αγγλικά χωρίς αμφιβολία αποτελούν μία από τις πιο σημαντικές γλώσσες του κόσμου. Είναι πολύ σημαντικό, πλέον, να γνωρίζεις, να μιλάς, να κατανοείς και να γράφεις στα Αγγλικά!
            ',
         'background' => $background,
     ]);

     new Portal($fake, 5, 'frontistirio',20);

     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Αγγλικά');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γαλλικά');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γερμανικά');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ισπανικά');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ιταλικά');

     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Αγγλικά');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γαλλικά');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γερμανικά');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ισπανικά');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ιταλικά');

     Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/Lakiospage');





     /*=============== 12 Κοκκινέας Αινείας, Αμπελόκηποι  ================*/

     $fake = factory(App\Models\School::class)->create([
         'user_id' => factory(App\User::class)->create(['name' => 'Ξένες Γλώσσες Κοκκινέας Αινείας, Αμπελόκηποι', 'email' => 'info@kokkineas.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'kokkineas'])->id,
         'address' => 'Κονιάρη 39, Αμπελόκηποι',
         'region' => 'Αμπελόκηποι',
         'city' => 'Αθήνα',
         'phone' => 2106039765,
         'type_id' => 4,
         'website' => 'kokkineas.gr',
         'approved' => 1,
         'about' => '
            Η ομάδα μας...
            ... απαρτίζεται από καθηγητές Διπλωματούχους Ελληνικών και ξένων Πανεπιστημίων με μεταπτυχιακούς τίτλους σπουδών και πολυετή εμπειρία διδασκαλίας στην Δημόσια και Ιδιωτική Δευτεροβάθμια και Τριτοβάθμια Εκπαίδευση.
            Η πλήρης κατάρτιση στη διδασκαλία της Αγγλικής, Γαλλικής και Ελληνικής Γλώσσας, το κέφι και η όρεξη για δουλειά είναι δεδομένα και αδιαπραγμάτευτα.
            Στόχος Φροντιστηρίου
            Στόχος αποτελεί το καλύτερο δυνατό αποτέλεσμα με το μικρότερο δυνατό κόστος. Σας εγγυόμαστε για την επιτυχία σας σε όλα τα πτυχία.
            Τα Αγγλικά, τα Γαλλικά και τα Ελληνικά για ξένους παύουν να είναι ακατανόητοι θόρυβοι και μορφοποιούνται σε γλώσσες κατανοητές, εργαλεία για επικοινωνία, σπουδές και εύρεση εργασίας.
            Ευχάριστοι καινοτόμοι τρόποι εκμάθησης με διαδραστικό υλικό και ξεχωριστή ευαισθησία για κάθε μαθητή, πάντα σε επικοινωνία και συνεργασία με τους γονείς εάν πρόκειται για παιδιά ή με τον ίδιο τον σπουδαστή έαν πρόκειται για ενήλικες.
            Σε κάθε περίπτωση η μεγιστοποίηση της απόδοσης είναι προτεραιότητα.
            ',
         'background' => $background,
     ]);

     new Portal($fake, 5, 'frontistirio',20);

     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Αγγλικά');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γαλλικά');

     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Αγγλικά');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γαλλικά');

     Scholio::portalSocial($fake, 'twitter', 'https://twitter.com/Frontistirio_gr');




     /*=============== 13  NPS Παπανικολάου ================*/

     $fake = factory(App\Models\School::class)->create([
         'user_id' => factory(App\User::class)->create(['name' => 'Ξένες Γλώσσες NPS Παπανικολάου, Πεντέλη', 'email' => 'info@npspapanicolaou.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'npsPapanicolaou'])->id,
         'address' => 'Πλατεία Ηρώων Πολυτεχνείου 43, Νέα Πεντέλη',
         'region' => 'Νέα Πεντέλη',
         'city' => 'Αθήνα',
         'phone' => 2108032776,
         'type_id' => 4,
         'website' => 'npspapanicolaou.gr',
         'approved' => 1,
         'about' => '
            Το σχολείο ξένων γλωσσών NPS PAPANICOLAOU στην Πεντέλη αποτελεί μια διαφορετική πρόταση σπουδών στις ξένες γλώσσες.
            Με πολυετή γνώση και εμπειρία, με ενδιαφέρον και φιλική διάθεση, αντιμετωπίζουμε κάθε ανησυχία και προβληματισμό σας, προσφέροντας άριστη γνώση κι εξειδίκευση, μαζί με μοντέρνες παιδαγωγικές ιδέες, σ\' ένα υψηλό επίπεδο σπουδών.
            Τα ολοκληρωμένα και εξελιγμένα προγράμματα, αλλά κυρίως το σταθερό ανθρώπινο δυναμικό του σχολείου μας στην Πεντέλη, που όπως θα διαπιστώσετε κι εσείς, δίνει τον καλύτερο εαυτό του σε κάθε τμήμα σπουδών, οδηγούν τους μαθητές μας στην απόκτηση των αναγνωρισμένων διπλωμάτων με εντυπωσιακή επιτυχία που αγγίζει το 100% και στις 4 ξένες γλώσσες που διδάσκονται!
            Με εκτίμηση,
            Νικολέτα Παπανικολάου

            ΣΕ ΤΙ ΔΙΑΦΕΡΟΥΜΕ
            Όπως η εκμάθηση μιας ξένης γλώσσας είναι πάντα μια επένδυση για το μέλλον του κάθε μαθητή, έτσι και η φοίτηση στο Σχολείο Ξένων Γλωσσών NPS Παπανικολάου είναι μια επένδυση για την επιτυχία του σ’ αυτό.
            Η εντυπωσιακή επιτυχία των σπουδαστών μας αγγίζει κάθε χρονιά το 100% στην απόκτηση των αναγνωρισμένων πτυχίων και των τεσσάρων γλωσσών που διδάσκονται εδώ!
            Αυτή η «ειδοποιός διαφορά» που μας ξεχωρίζει από άλλα φροντιστήρια, δεν θα μπορούσε βέβαια να είναι κάτι τυχαίο:
            • Η «σταθερή» αξία του σταθερού -εδώ και πολλά χρόνια- εκπαιδευτικού μας προσωπικού, άριστα καταρτισμένου και με πείρα δεκαετιών, αποτελεί εγγύηση για τα θετικά μας αποτελέσματα. Οι άνθρωποί μας έχουν να καυχηθούν όχι μόνο για γνώσεις κι επαγγελματισμό, αλλά και για τις μοναδικές σχέσεις που ξέρουν να δημιουργούν με τους μαθητές τους.
            • Η διαρκής ενημέρωση όλων εμάς πάνω στην εξέλιξη των εκπαιδευτικών συστημάτων μάς επιτρέπει να υιοθετούμε ό,τι πιο καινούριο κάθε φορά στον τομέα των ξένων γλωσσών, είτε πρόκειται για πρωτοποριακή μέθοδο, είτε για καινοτόμο εκπαιδευτικό υλικό, φροντίζοντας πάντα να προσαρμόζουμε την προσέγγισή μας στις επιταγές της εποχής για εξασφαλισμένα επιτυχή αποτελέσματα.
            • Τέσσερις τουλάχιστον συναντήσεις το χρόνο με τους γονείς των μαθητών μας, προκαθορισμένες απ’ την αρχή της διδακτικής χρονιάς, εξασφαλίζουν την πλήρη επικοινωνία με σας που μας εμπιστεύεστε τα παιδιά σας, ώστε να έχετε τακτική και σαφή εικόνα της πορείας τους, καθώς και την ευκαιρία να απαντηθούν οποιαδήποτε ερωτήματα ή απορίες σας για την πρόοδό τους.
            ',
         'background' => $background,
     ]);

     new Portal($fake, 7, 'frontistirio',40);

     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Αγγλικά');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γαλλικά');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γερμανικά');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ισπανικά');


     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Αγγλικά');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γαλλικά');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γερμανικά');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ισπανικά');


     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'IELTS');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'TOEFL');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'TOEIC');


       Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/Npspapanicolaou');






    }



}
