<?php

use App\Scholio\Scholio;
use Illuminate\Database\Seeder;
use Portal\Portal;

class Frontistiria14 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $background = Portal::createImages('/upload/school/univ.png')->id;



     /*=============== 1 Καπάτου ================*/

     $fake = factory(App\Models\School::class)->create([
         'user_id' => factory(App\User::class)->create(['name' => 'Ξένες Γλώσσες Καπάτου', 'email' => 'info@kapatou.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'kapatou'])->id,
         'address' => 'Ομήρου 13',
         'city' => 'Αθήνα',
         'phone' => 2103803355,
         'type_id' => 4,
         'website' => 'kapatou.gr',
         'approved' => 1,
         'about' => '
                    Εκπαιδευτικός Όμιλος Καπάτου από το 1983
                    Ο Όμιλος Καπάτου σήμερα είναι ένας συνεχώς αναπτυσσόμενος εκπαιδευτικός οργανισμός με:
                    σχολεία σε όλη την Ελλάδα
                    60.000 διπλωματούχους στις γλώσσες που διδάσκουμε
                    2.500 μαθητές το χρόνο, οι οποίοι αποτελούν τη ζωντανή διαφήμισή μας
                    δικές του εκδόσεις (Primus), που χρησιμοποιούνται σε Κέντρα Ξένων Γλωσσών και ανώτατα εκπαιδευτικά ιδρύματα της Ελλάδας και του εξωτερικού
                    κέντρο Μετάφρασης και Διερμηνείας που προσφέρει ένα ευρύ φάσμα υπηρεσιών, έχοντας κερδίσει την εμπιστοσύνη μεγάλων εταιρειών.
                    Η διευθύντρια Γιώτα Καπάτου, η οποία ίδρυσε τις Σχολές, συντονίζει από την πρώτη μέρα μέχρι και σήμερα όλα τα προγράμματα σπουδών καθημερινά.
                    Η προσφορά της στη διάδοση της ιταλικής γλώσσας και κουλτούρας στην Ελλάδα αναγνωρίστηκε το 2006 από το ιταλικό κράτος με την απονομή των μεταλλίων και του τιμητικού τίτλου “Cavaliere dell’Ordine della Stella Solidarietà Italiana” (Ιππότης της Ιταλικής Δημοκρατίας).
            ',
         'background' => $background,
     ]);

     new Portal($fake, 8, 'frontistirio');

     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Αγγλικά');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γαλλικά');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γερμανικά');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ισπανικά');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ιταλικά');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Πορτογαλικά');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ρωσικά');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Σουηδικά');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Τούρκικα');



     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Αγγλικά');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γαλλικά');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γερμανικά');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ισπανικά');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ιταλικά');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Πορτογαλικά');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ρωσικά');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Σουηδικά');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Τούρκικα');

     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Online');

     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'TOEIC');


     Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/SXOLES-KAPATOU-128141260561268/');



        /*=============== 2 Παπαδοπούλου Σταματίου ================*/

        $fake = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Ξένες Γλώσσες Παπαδοπούλου Σταματίου', 'email' => 'estamati@hol.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'stamatiou'])->id,
            'address' => 'Έβρου 7, Νίκαια',
            'city' => 'Αθήνα',
            'phone' => 2104972797,
            'type_id' => 4,
            'website' => 'europalso.gr',
            'approved' => 1,
            'about' => '
                ΟΙ ΕΙΔΙΚΟΙ ΣΤΗΝ ΞΕΝΟΓΛΩΣΣΗ ΕΚΠΑΙΔΕΥΣΗ!
                Βραβεία
                ΠΙΣΤΟΠΟΙΗΣΗ ΠΟΙΟΤΗΤΑΣ 1433:2008 TUV AUSTRIA HELLAS
                ΕΠΙΣΗΜΟΣ ΣΥΝΕΡΓΑΤΗΣ HELLENIC AMERICAN UNION-BRITISH COUNCIL
                ifa GOETHE europalso society
            ',
            'background' => $background,
        ]);

        new Portal($fake, 6, 'frontistirio');

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


       Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/PapadopoulouStamatiou');




        /*=============== 3 Babel ================*/

        $fake = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Ξένες Γλώσσες Babel', 'email' => 'babel.lang.centre@gmail.com', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'babel'])->id,
            'address' => 'Ηρακλείτου 41, Άνω Γλυφάδα',
            'city' => 'Αθήνα',
            'phone' => 2109644765,
            'type_id' => 4,
            'website' => 'babel.edu.gr',
            'approved' => 1,
            'about' => '
                The Babel Language Centre® was established in 1998 by professional language instructors with long standing experience in the teaching of language, both in Greece and abroad.
                Since 1998, Babel® has developed an excellent reputation as a school of English for school children, adolescents and adults. The school also offers classes in German, French, Italian and Modern Greek as a foreign language.
                The school is conveniently located in a quiet area of Ano Glyfada, (off Gounari Street, near the Taxation Office). Language courses at Babel® have attracted mainly local learners, but there are many who come to the school from neighbouring areas.
            ',
            'background' => $background,
        ]);

        new Portal($fake, 6, 'frontistirio');

        Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Αγγλικά');
        Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γαλλικά');
        Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γερμανικά');
        Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ιταλικά');

        Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Αγγλικά');
        Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γαλλικά');
        Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γερμανικά');
        Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ιταλικά');
        Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ελληνικά');


       Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/babel.edu');




        /*=============== 4 Χρυσικάκη ================*/

        $fake = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Ξένες Γλώσσες Χρυσικάκη', 'email' => 'info@chrysikaki.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'chrysikaki'])->id,
            'address' => 'Χίου 47Α, Αγ. Παρασκευή',
            'city' => 'Αθήνα',
            'phone' => 2106008899,
            'type_id' => 4,
            'website' => 'chrysikaki.gr',
            'approved' => 1,
            'about' => '
                ΧΡΥΣΙΚΑΚΗ ΚΕΝΤΡΟ ΞΕΝΩΝ ΓΛΩΣΣΩΝ
                Το ΧΡΥΣΙΚΑΚΗ ΚΕΝΤΡΟ ΞΕΝΩΝ ΓΛΩΣΣΩΝ βρίσκεται στην οδό Χίου 47Α, στην Αγ. Παρασκευή. Η ποιότητα, η αξιοπιστία και τα αποτελέσματα έχουν καθιερώσει το ΧΡΥΣΙΚΑΚΗ ΚΕΝΤΡΟ ΞΕΝΩΝ ΓΛΩΣΣΩΝ ως ένα από τα καλύτερα σχολεία ξένων γλωσσών στα βορειοανατολικά προάστια.
                Στόχος
                ΣΤΟΧΟΣ μας είναι να εμπνέουμε τον μαθητή, δίνοντας κίνητρα για μάθηση. Η βιωματική διδασκαλία, τα project και η χρήση των πιο εξελιγμένων μεθόδων διδασκαλίας κάνουν το μάθημα αποτελεσματικό και ευχάριστο
                Συνεργασίες
                Το ΧΡΥΣΙΚΑΚΗ ΚΕΝΤΡΟ ΞΕΝΩΝ ΓΛΩΣΣΩΝ είναι μέλος της Ελληνοαμερικανικής Ένωσης, του Γαλλικού Ινστιτούτου (I.F.A.), του Ιταλικού Ινστιτούτου, του Ινστιτούτου Γκαίτε (Goethe Institut) και του Cervantes της πρεσβείας της Ισπανίας. Είναι μέλος του Europalso. Οι μαθητές του σχολείου συμμετέχουν σε εξετάσεις των παραπάνω επίσημων φορέων και παίρνουν πτυχία που αναγνωρίζονται στην Ελλάδα και το εξωτερικό.
                Επίσης, το ΧΡΥΣΙΚΑΚΗ ΚΕΝΤΡΟ ΞΕΝΩΝ ΓΛΩΣΣΩΝ είναι επίσημος συνεργάτης του Ελληνοαγγλικού Συμβουλίου. Αυτό σημαίνει ότι οι καθηγητές του σχολείου εκπαιδεύονται από συνεργάτες του Πανεπιστημίου Cambridge και συμμετέχουν σε εξειδικευμένα σεμινάρια εξετάσεων.
                Διδακτικό προσωπικό
                Το ΧΡΥΣΙΚΑΚΗ ΚΕΝΤΡΟ ΞΕΝΩΝ ΓΛΩΣΣΩΝ στελεχώνεται από αυστηρά επιλεγμένους καθηγητές υψηλού επιπέδου, πτυχιούχους φιολογίας, οι οποίοι επιμορφώνονται διαρκώς σχετικά με τις εξελίξεις στη διδακτική και την μεθοδολογία των ξένων γλωσσών.
                Μέθοδοι διδασκαλίας
                Το σχολείο μας χρησιμοποιεί τις πιο σύγχρονες μεθόδους διδασκαλίας όπως διαδραστικούς πίνακες, ηλεκτρονικά βιβλία (ebooks) και μεθόδους e-learning, πρωτοπορώντας στον τομέα της εκπαίδευσης.
            ',
            'background' => $background,
        ]);

        new Portal($fake, 6, 'frontistirio');

        Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Αγγλικά');
        Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γαλλικά');
        Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γερμανικά');


        Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Αγγλικά');
        Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γαλλικά');
        Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γερμανικά');
        Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ισπανικά');
        Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ιταλικά');


       Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/chrysikaki.gr/');



        /*=============== 5 Περιάλης ================*/

        $fake = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Ξένες Γλώσσες Περιάλης', 'email' => 'info@perialis.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'perialis'])->id,
            'address' => 'Δεκελείας 85, Νέα Φιλαδέλφεια',
            'city' => 'Αθήνα',
            'phone' => 2102583855,
            'type_id' => 4,
            'website' => 'perialis.gr',
            'approved' => 1,
            'about' => '
                Το Κέντρο Ιταλικής και Ισπανικής γλώσσας Α. Περιάλης είναι εξειδικευμένο στα Ιταλικά και Ισπανικά και λειτουργεί από το 1994 στην Νέα Φιλαδέλφεια.
                Διδάσκουν καθηγητές πτυχιούχοι ιταλικών και ισπανικών πανεπιστημίων με ειδίκευση στη διδασκαλία των Ιταλικών και Ισπανικών ως ξένων γλωσσών και με μεταπτυχιακή ειδίκευση στην εκπαίδευση ενηλίκων.
                Ποιότητα στην εκπαίδευση – 100% επιτυχία
                • Ταχύρυθμα τμήματα αποκλειστικά για ενηλίκους ( 5 – 7 ατόμων )
                • Ειδικά ευέλικτα προγράμματα για φοιτητές και εργαζόμενους
                • Τμήματα προετοιμασίας για Ιταλική & Ισπανική φιλολογία
                • Παιδικά & εφηβικά τμήματα
                • Χαμηλά δίδακτρα
                Κεντρικό σημείο στο σχεδιασμό των προγραμμάτων μας είναι ο σπουδαστής.
                Έναρξη τμημάτων κάθε Οκτώβριο, Φεβρουάριο και Ιούνιο.
            ',
            'background' => $background,
        ]);

        new Portal($fake, 5, 'frontistirio');

        Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ισπανικά');
        Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ιταλικά');




        /*=============== 6  Language Palette ================*/

        $fake = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Ξένες Γλώσσες Language Palette', 'email' => 'languagepalette@gmail.com', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'languagePalette'])->id,
            'address' => 'Ρούμελης 21, Αγ, Παρασκευή',
            'city' => 'Αθήνα',
            'phone' => 2106399801,
            'type_id' => 4,
            'website' => 'lanuage-palette-gr.webnode.gr',
            'approved' => 1,
            'about' => '
                Η σχολή μας υπάρχει από το 1991 υπό τη διεύθυνση Καλπακιώτη, και ήταν γνωστή ως Έρασμος. Από τη χρονιά 2013-2014 παίρνουμε τη σκυτάλη και την πείρα και συνεχίζουμε ως Language Palette. Δίνουμε σημασία στην προφορά έχοντας δίγλωσσους καθηγητές με εξειδικευμένες σπουδές. Δίνουμε μεγάλη σημασία στην ποιότητα και θέλουμε η μάθηση να είναι ευχάριστη.Αγαπάμε τα παιδιά και θέλουμε να τα κερδίζουμε. Γι αυτό εμπλουτίζουμε το μάθημα με παραμύθια και παιχνίδια για τα μικρότερα, με μυθιστoρήματα για τα μεγαλύτερα. Διοργανώνουμε και παραστάσεις και περνάμε καλά, ταυτόχρονα τα ετοιμάζουμε σωστά για τις εξετάσεις τους.
                Έχουμε ολιγομελή τμήματα για μικρούς και μεγάλους. Οι ενήλικες σε μας θα μπορέσουν να θυμηθούν τη γλώσσα που άφησαν πίσω και σύντομα να ετοιμαστούν και για δίπλωμα εάν το επιθυμούν.
                Μην διστάσετε να επικοινωνήσετε μαζί μας για να σας δώσουμε περισσότερες πληροφορίες για τα προγράμματά μας, τις τιμές μας και τις εκπτώσεις μας. Έχουμε πολιτική εκπτώσεων για αδέλφια, για ανέργους και για τους φίλους μας που μας συστήνουν. Θα χαρούμε να μας δώσετε την ευκαιρία να σας παρέχουμε συμβουλές σχετικά με το πρόγραμμα που πρέπει να ακολουθήσετε εσείς ή το παιδί σας.            ',
            'background' => $background,
        ]);

        new Portal($fake, 8, 'frontistirio');

        Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Αγγλικά');
        Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γαλλικά');
        Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γερμανικά');
        Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ιταλικά');

        Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Αγγλικά');
        Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γαλλικά');
        Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γερμανικά');
        Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ιταλικά');


       Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/Language-Palette-277584712671174');




        /*=============== 7 Παπαηλιού ================*/

        $fake = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Κέντρα Ξένων Γλωσσών Παπαηλιού', 'email' => 'karaiskou@papaeliou.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'papaeliou'])->id,
            'address' => 'Καραΐσκου 111, Πειραιάς',
            'city' => 'Αθήνα',
            'phone' => 2104173892,
            'type_id' => 4,
            'website' => 'papaeliou.edu.gr',
            'approved' => 1,
            'about' => '
               Το Κέντρο Ξένων Γλωσσών Παπαηλιού ιδρύθηκαν το 1955 από τον Παναγιώτη Χ. Παπαηλιού. Ο Παναγιώτης Παπαηλιού, ένας εμπνευσμένος φιλόλογος, με μεταπτυχιακά πάνω στην εκπαίδευση στα Πανεπιστήμια της Βοστώνης και του Χάρβαρντ τη δεκαετία του ’30, διετέλεσε Διευθυντής της Ραλλείου Παιδαγωγικής Ακαδημίας (από το 1948 -50). Με την πείρα του, το όραμά του, την αγάπη για τους νέους και την εντιμότητά του έθεσε τις γερές βάσεις πάνω στις οποίες στηρίζεται ο εκπαιδευτικός οργανισμός μας.
               Το 1955 ιδρύεται το πρώτο μας Κέντρο Ξένων Γλωσσών που στεγάζεται στο κτίριο επί των οδών Ηρώων Πολυτεχνείου και Τσαμαδού (το τωρινό κτίριο καταστημάτων Zara).
               Το 1956 μεταφερόμαστε σε ένα νεοκλασικό κτίριο (ιδιοκτησίας Μέρμηγκα) επί της οδού Καραολή και Δημητρίου (απέναντι από το νεοκλασικό κτίριο του παλαιού Ταχυδρομείου). Μετά το 1958 το σχολείο μεταστεγάζεται στο μέγαρο Σπυράκη επί των οδών Β. Γεωργίου και Φίλωνος (πολυκατάστημα H&M). Από το 1963 μέχρι σήμερα το κεντρικό κτίριο ΚΞΓ Παπαηλιού, στεγάζεται στον ιδιόκτητο χώρο του στην πλατεία Δημοτικού Θεάτρου επί της οδού Καραϊσκου 111 (δίπλα στην εκκλησία του Αγ. Κωνσταντίνου). Από το 1967 η διεύθυνση του ΚΞΓ Παπαηλιού περνάει στη δεύτερη γενιά στις κόρες του Παναγιώτη Παπαηλιού, Μαριάννα και Ντιάνα, οι οποίες συνεχίζουν την παράδοση ποιότητας και αξιοπιστίας του ιδρυτή και πατέρα τους. Κατά τη διάρκεια της διοικητικής τους θητείας το σχολείο επεκτείνεται σε δύο ακόμα κτίρια, στον ιδιόκτητο χώρο επί της Ελ. Βενιζέλου το 1981 και στο σχολείο της Νίκαιας (Περιβολάκι) το 1997. Τέλος το 2003 χτίζεται στη Νίκαια το νέο μας κτίριο επί της Λαοδικείας 124.
               Σήμερα στη διοίκηση του σχολείου συμμετέχει και η Τρίτη γενιά, τα παιδιά της Μαριάννας Παπαηλιού, Ινώ και Άρης Παναγιώτου, που έχουν συνεισφέρει στον εκσυγχρονισμό του σχολείου και μαζί με τη Ντιάνα Παπαηλιού οδηγούν το ιστορικό αυτό Κέντρο Ξένων Γλωσσών στη νέα εποχή.
            ',
            'background' => $background,
        ]);

        new Portal($fake, 7, 'frontistirio');

        Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Αγγλικά');
        Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γαλλικά');
        Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γερμανικά');
        Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ισπανικά');
        Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ρωσικά');


        Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Αγγλικά');
        Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γαλλικά');
        Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γερμανικά');
        Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ισπανικά');
        Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ρωσικά');

        Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'IELTS');


       Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/PapaeliouSFL');
       Scholio::portalSocial($fake, 'pinterest', 'https://gr.pinterest.com/papaeliousfl/');
       Scholio::portalSocial($fake, 'youtube', 'https://www.youtube.com/user/PapaeliouSFL');
       Scholio::portalSocial($fake, 'twitter', 'https://twitter.com/papaeliousfl');




    }



}
