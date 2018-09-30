<?php

use App\Scholio\Scholio;
use Illuminate\Database\Seeder;
use Portal\Portal;

class Frontistiria15 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $background = Portal::createImages('/upload/school/univ.png')->id;




     /*=============== 1 Lets Learn ================*/

     $fake = factory(App\Models\School::class)->create([
         'user_id' => factory(App\User::class)->create(['name' => 'Ξένες Γλώσσες Lets Learn', 'email' => 'letslearn28@gmail.com', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'letslearn'])->id,
         'address' => 'Γρηγορίου Αυξεντίου 37, Καματερό',
         'region' => 'Καματερό',
         'city' => 'Αθήνα',
         'phone' => 2102615888,
         'type_id' => 4,
         'website' => 'letslearn-ls.blogspot.com',
         'approved' => 1,
         'ranking' => 50,
         'about' => '
            Το κέντρο ξένων γλωσσών Let\'s Learn λειτουργεί στο Καματερό, συγκεκριμένα στο Γεροβουνό, από τον Σεπτέμβριο του 2011, αρχικά στην οδό Τήνου 28, και αργότερα τον Γενάρη του 2015 όταν και έγινε η μεταστέγαση στην οδό Γρηγορίου Αυξεντίου 37. Στους χώρους μας διδάσκεται η Αγγλική, η Γαλλική και η Γερμανική γλώσσα σε παιδιά αλλά και σε ενήλικες. Η εκμάθηση της ξένης γλώσσας γίνεται με μεθοδικότητα, συνέπεια και ανθρωποκεντρική προσέγγιση με ιδιαίτερη έμφαση στις ανάγκες κάθε μαθητή ξεχωριστά. Αξιοποιώντας κάθε δυνατή μέθοδο αλλά και την δύναμη της σύγχρονης τεχνολογίας, έχουμε στρέψει την προσοχή και την προσήλωσή μας στην δημιουργική εκμάθηση της ξένης γλώσσας θέτοντας στόχους όχι μόνο την απόκτηση του επιθυμητού πτυχίου για τους σπουδαστές και τις σπουδάστριες αλλά και την γνώση σε ό,τι αφορά στον πολιτισμό και τα ήθη της αντίστοιχης με τη γλώσσα ξένης χώρας.
            Παρά το γεγονός πως διανύουμε μια εποχή κρίσης σχεδόν σε κάθε τομέα και γεμάτη προκλήσεις και δυσκολίες, τα ποσοστά επιτυχίας του κέντρου μας είναι υψηλά τόσο σε επίπεδο lower (Β2) αλλά και proficiency (C2). Αυτό συμβαίνει χάρη στην αφοσίωση, την εμπειρία και την αγάπη των εκπαιδευτικών μας για το λειτούργημα του δασκάλου. Έτσι σκοπεύουμε να πράξουμε και τα επόμενα χρόνια προσαρμόζοντας διαρκώς τις μεθόδους μας στις ανάγκες του κοινωνικού συνόλου που στρέφεται σε εμάς.
            ',
         'background' => $background,
     ]);

     new Portal($fake, 7, 'frontistirio');

     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Αγγλικά');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γαλλικά');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γερμανικά');

     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Αγγλικά');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γαλλικά');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γερμανικά');


       Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/Lets-learn-478928312140810/');





     /*=============== 2 Αμουργιανός ================*/

     $fake = factory(App\Models\School::class)->create([
         'user_id' => factory(App\User::class)->create(['name' => 'Κέντρο Ξένων Γλωσσών Αμουργιανός', 'email' => 'info@amourgianos.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'amourgianos'])->id,
         'address' => 'Μιχαλακοπούλου 98, Περιστέρι',
         'region' => 'Περιστέρι',
         'city' => 'Αθήνα',
         'phone' => 2105751820,
         'type_id' => 4,
         'website' => 'amourgianos.edu.gr',
         'approved' => 1,
         'ranking' => 50,
         'about' => '
             Το Κέντρο Ξένων Γλωσσών Αμουργιανός μετρά 38 χρόνια απόλυτης επιτυχίας και ανοδικής πορείας στο χώρο της ξενόγλωσσης εκπαίδευσης. Ιδρυτής του σχολείου υπήρξε ο κος Αμουργιανός Αντώνης, ο οποίος καθιέρωσε πρωτοποριακές μεθόδους διδασκαλίας θέτοντας τις βάσεις για την περαιτέρω ανάπτυξη του σχολείου.
             Δώδεκα χρόνια τώρα ο κος Αμουργιανός Γεράσιμος σφραγίζει την πορεία του κέντρου με την άριστη τεχνογνωσία και κατάρτισή του ανοίγοντας νέους ορίζοντες στην ξενόγλωσση εκπαίδευση. Με πολυετείς σπουδές στην Αγγλική Γλωσσολογία (BA HONS in English Linguistics and Italian, UNIVERSITY OF WALES - SWANSEA) και εξειδίκευση στη διδασκαλία της Αγγλικής γλώσσας (Advanced Diploma - ESP - in teaching English as a foreign / second language TEFL / TESL - The English Language Centre London) έχει εισαγάγει νέες μεθόδους για τις ξεχωριστές ανάγκες του κάθε μαθητή εφαρμόζοντάς τες και με προσωπική διδασκαλία.
             Συνοδοιπόρος στην προσπάθεια αυτή είναι η κα Αμουργιανού Αγγελική, η οποία αποτελεί σημαντικό κομμάτι του συντονισμού και οργάνωσης του Κέντρου Ξένων Γλωσσών "Αμουργιανός".
            ',
         'background' => $background,
     ]);

     new Portal($fake, 7, 'frontistirio');

     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Αγγλικά','http://amourgianos.edu.gr/index.php/english');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γαλλικά','http://amourgianos.edu.gr/index.php/gallika-germanika');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γερμανικά','http://amourgianos.edu.gr/index.php/gallika-germanika');



     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Αγγλικά','http://amourgianos.edu.gr/index.php/english');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γαλλικά','http://amourgianos.edu.gr/index.php/gallika-germanika');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γερμανικά','http://amourgianos.edu.gr/index.php/gallika-germanika');








     /*=============== 3 Ευρωδιάσταση ================*/

     $fake = factory(App\Models\School::class)->create([
         'user_id' => factory(App\User::class)->create(['name' => 'Κέντρα Ξένων Γλωσσών Ευρωδιάσταση', 'email' => 'aig5eu@otenet.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'eurodiastasi'])->id,
         'address' => 'Χαλκοκονδύλη 5, Πλατεία Κάνιγγος',
         'region' => 'Πλατεία Κάνιγγος',
         'city' => 'Αθήνα',
         'phone' => 2103844888,
         'type_id' => 4,
         'website' => 'eurodiastasi.gr',
         'approved' => 1,
         'ranking' => 50,
         'about' => '
            Με 22 χρόνια δημιουργικής παρουσίας στο χώρο της ξενόγλωσσης εκπαίδευσης και 36.000 επιτυχημένους σπουδαστές στο ενεργητικό τους, τα Κέντρα Ξένων Γλωσσών Ευρωδιάσταση αποτελούν αδιαμφισβήτητα μία από τις καλύτερες επιλογές για οποιονδήποτε ενήλικο ενδιαφέρεται να μάθει σωστά και γρήγορα ξένες γλώσσες και να πιστοποιήσει τις γνώσεις του.
            Το προφίλ των Κέντρων Ξένων Γλωσσών Ευρωδιάσταση είναι απόλυτα συγκεκριμένο: απευθύνονται αποκλειστικά και μόνο σε συνειδητοποιημένους ενήλικες, οι οποίοι επιθυμούν να μάθουν γρήγορα, σοβαρά και σε ικανοποιητικό επίπεδο μία ή περισσότερες ξένες γλώσσες και να αποκτήσουν ένα ή περισσότερα πτυχία γλωσσομάθειας. Τα Κέντρα Ξένων Γλωσσών Ευρωδιάσταση ΔΕΝ απευθύνονται σε σπουδαστές οι οποίοι επιθυμούν να μάθουν μία γλώσσα με αργούς ρυθμούς και καθαρά ως "χόμπι". Είναι χαρακτηριστικό ότι το 90% των προγραμμάτων που παρέχουν τα Κέντρα Ξένων Γλωσσών Ευρωδιάσταση οδηγούν στην απόκτηση αναγνωρισμένου πτυχίου γλωσσομάθειας σε 7-14 μήνες. Ο χρόνος προετοιμασίας για την απόκτηση πτυχίου στα Κέντρα Ξένων Γλωσσών Ευρωδιάσταση είναι 2-3 φορές λιγότερος από το "σύνηθες", χωρίς καμία θυσία και συμβιβασμό σε θέματα ποιότητας, χωρίς την παραμικρή αντι-εκπαιδευτική περικοπή ωρών.
            Το υψηλό επίπεδο διοικητικής και ακαδημαϊκής οργάνωσης των σχολών μας, σε συνδυασμό με το μεγάλο αριθμό σπουδαστών που φοιτούν σε αυτές, μας επιτρέπει να παρέχουμε στους σπουδαστές μας μία μοναδική ευκολία: τη δυνατότητα αλλαγής ωραρίου, αναπλήρωσης μαθημάτων και εναλλάξ παρακολούθησης τμημάτων σε οποιοδήποτε χρονικό σημείο του προγράμματος που παρακολουθούν.
            Πολιτική διδάκτρων και παροχών: η ελκυστική πολιτική διδάκτρων και παροχών που ακολουθεί η Ευρωδιάσταση δίνει τη δυνατότητα σε όλους τους σπουδαστές, ανεξαρτήτως οικονομικών δυνατοτήτων, να παρακολουθήσουν τα προγράμματά μας. Η αναγνωρισιμότητα των σχολών μας μεταξύ των ενήλικων σπουδαστών, γεγονός που καθιστά περιττή την προσφυγή τους σε πολυδάπανες διαφημιστικές ενέργειες, μας επιτρέπει να μην επιβαρύνουμε τους σπουδαστές μας με οποιοδήποτε άλλο κόστος πέραν αυτού που αφορά στην παροχή του εκπαιδευτικού μας έργου.
            ',
         'background' => $background,
     ]);

     new Portal($fake, 8, 'frontistirio');



     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Αγγλικά','https://www.eurodiastasi.gr/agglika');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γαλλικά','https://www.eurodiastasi.gr/gallika');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γερμανικά','https://www.eurodiastasi.gr/germanika');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ισπανικά','https://www.eurodiastasi.gr/ispanika');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ιταλικά','https://www.eurodiastasi.gr/italika');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ρωσικά','https://www.eurodiastasi.gr/rosika');

     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'IELTS');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'TOEFL');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'TOEIC');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'GMAT');



       Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/eurodiastasi');




     /*=============== 4 Παγουλάτου - Βλάχου ================*/

     $fake = factory(App\Models\School::class)->create([
         'user_id' => factory(App\User::class)->create(['name' => 'Κέντρα Ξένων Γλωσσών Παγουλάτου - Βλάχου', 'email' => 'pvschools@ath.forthnet.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'vlaxouPagoulatou'])->id,
         'address' => 'Μακ Μίλλαν 13, Άνω Πατήσια',
         'region' => 'Άνω Πατήσια',
         'city' => 'Αθήνα',
         'phone' => 2102280270,
         'type_id' => 4,
         'website' => 'pvlc.gr',
         'approved' => 1,
         'ranking' => 50,
         'about' => '
             Μέθοδοι Διδασκαλίας

             Διαφοροποιημένη Διδασκαλία
             Ο κάθε μαθητής μαθαίνει με διαφορετικό τρόπο (γλωσσική νοημοσύνη, λογικο-μαθηματική νοημοσύνη, διαπροσωπική νοημοσύνη... κ.α.) αλλά και με διαφορετικό ρυθμό. Στο σχολείο μας οι έμπειροι καθηγητές μας, δημιουργούν περιβάλλον μαθητοκεντρικής προσέγγισης, σεβόμενοι τις διαφορετικές ανάγκες των παιδιών και προσαρμόζοντας το μάθημα έτσι, ώστε να καλύπτονται οι περισσότεροι μαθησιακοί τύποι παιδιών.

             Βιωματική Διδασκαλία
             Δίνεται έμφαση στο σημαντικό ρόλο που παίζει η εμπειρία στη διαδικασία της μάθησης, καθώς και στους δεσμούς μεταξύ της σχολικής τάξης και της καθημερινής ζωής των μαθητών. Στόχος μας είναι οι μαθητές μας να εμπλέκονται ενεργητικά στη διαδικασία της μάθησης. Έτσι, βοηθώντας τους να εξερευνήσουν τα συναισθήματά τους, τις απόψεις τους, τους φόβους και προβληματισμούς τους σε σχέση με θέματα της καθημερινής ζωής, γίνονται αυτόνομοι και ανεξάρτητοι.

             Εκπαίδευση με Θεατρικό Παιχνίδι
             Μέσα από το θεατρικό παιχνίδι ο μαθητής μαθαίνει ξένες γλώσσες με ευχάριστο τρόπο και ταυτόχρονα μαθαίνει να εκφράζεται λεκτικά και σωματικά. Επίσης, οι μαθητές αναπτύσσουν διάφορες ικανότητες, όπως κοινωνικότητα, σεβασμό, δημιουργικότητα, αίσθημα ευθύνης, συνεργασία, πρωτοβουλία.
            ',
         'background' => $background,
     ]);

     new Portal($fake, 10, 'frontistirio');

     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Αγγλικά','https://www.pvlc.gr/el/english-courses');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γαλλικά','https://www.pvlc.gr/el/french-courses');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γερμανικά','https://www.pvlc.gr/el/german-courses');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ισπανικά','https://www.pvlc.gr/el/spanish-courses');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ιταλικά','https://www.pvlc.gr/el/italian-courses');

     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Αγγλικά','https://www.pvlc.gr/el/english-courses');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γαλλικά','https://www.pvlc.gr/el/french-courses');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γερμανικά','https://www.pvlc.gr/el/german-courses');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ισπανικά','https://www.pvlc.gr/el/spanish-courses');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ιταλικά','https://www.pvlc.gr/el/italian-courses');

     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'IELTS');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'TOEFL');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'TOEIC');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'ESB');

     Scholio::portalStudy($fake, 'Τμήματα Εφήβων - Ενηλίκων', 'Πληροφορική', 'Πιστοποίηση','https://www.pvlc.gr/el/%CF%80%CE%B9%CF%83%CF%84%CE%BF%CF%80%CE%BF%CE%B9%CE%AE%CF%83%CE%B5%CE%B9%CF%82-%CF%80%CE%BB%CE%B7%CF%81%CE%BF%CF%86%CE%BF%CF%81%CE%B9%CE%BA%CE%AE%CF%82');

     Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/pvschoolanguages');






     /*=============== 5 Polyglosso ================*/

     $fake = factory(App\Models\School::class)->create([
         'user_id' => factory(App\User::class)->create(['name' => 'Κέντρα Ξένων Γλωσσών Polyglosso', 'email' => 'info@polyglosso.com', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'polyglosso'])->id,
         'address' => 'Κρητών 16, Νέος Κόσμος',
         'region' => 'Νέος Κόσμος',
         'city' => 'Αθήνα',
         'phone' => 2109016732,
         'type_id' => 4,
         'website' => 'polyglosso.com',
         'approved' => 1,
         'ranking' => 50,
         'about' => '
             ΚΑΛΩΣ ΗΡΘΑΤΕ!
             To Polyglosso, εδώ και 25 χρόνια, είναι από τα γνωστότερα και σημαντικότερα κέντρα ξένων γλωσσών και πληροφορικής, με μοναδική ποιότητα διδασκαλίας. Έως σήμερα, πάνω από 30.000 μαθητές μας εμπιστεύθηκαν την ξενόγλωσση εκπαίδευσή τους και οι περισσότεροι από αυτούς μας ξαναεπισκέπτονται είτε για να τελειοποιήσουν τις γνώσεις τους σε κάποια γλώσσα, είτε για να ξεκινήσουν κάποια άλλη.
             Το σύνολο των εκπαιδευτικών προγραμμάτων που υποστηρίζεται από τα Κέντρα Ξένων Γλωσσών και Πληροφορικής Polyglosso βελτιώνεται, αλλάζει ή εκσυγχρονίζεται καθώς αλλάζει η καθημερινότητα και οι ανάγκες του σπουδαστή ενώ ταυτόχρονα δημιουργούμε συνεχώς νέα καινοτόμα προγράμματα και υπηρεσίες.
             Η επιτυχία μας, στηρίζεται στην οργάνωση και ποικιλία των εκπαιδευτικών μας προγραμμάτων, στη δυνατότητα να επιλέγουμε τους καλύτερους καθηγητές γλωσσών, να παρέχουμε άριστης ποιότητας διδασκαλία και φροντίδα στον κάθε μαθητή ατομικά αλλά και κυρίως στη δυνατότητά μας να είμαστε ένα μεγάλο εκπαιδευτήριο που όμως διατηρεί την προσωπική και ανθρώπινη επαφή με τους μαθητές και τους γονείς τους.
            ',
         'background' => $background,
     ]);

     new Portal($fake, 9, 'frontistirio');

     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Αγγλικά','https://www.polyglosso.com/english-lessons/');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γαλλικά','https://www.polyglosso.com/french-lessons/');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γερμανικά','https://www.polyglosso.com/german-lessons/');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ισπανικά','https://www.polyglosso.com/spanish-lessons/');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ιταλικά','https://www.polyglosso.com/italian-lessons/');

     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Αγγλικά','https://www.polyglosso.com/english-lessons/');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γαλλικά','https://www.polyglosso.com/french-lessons/');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γερμανικά','https://www.polyglosso.com/german-lessons/');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ισπανικά','https://www.polyglosso.com/spanish-lessons/');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ιταλικά','https://www.polyglosso.com/italian-lessons/');


     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'IELTS','https://www.polyglosso.com/toeic-exam-pack/');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'TOEIC','https://www.polyglosso.com/toeic-exam-pack/');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'ELT','https://www.polyglosso.com/online-english/');

     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Πληροφορική', 'Πληροφορική e-learning','https://www.polyglosso.com/e-training-home-kids/');
     Scholio::portalStudy($fake, 'Τμήματα Εφήβων - Ενηλίκων', 'Πληροφορική', 'Πιστοποίηση','https://www.polyglosso.com/e-training-lab-edition/');

       Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/Polyglosso');




     /*=============== 6 Παπαβαρσάμη ================*/

     $fake = factory(App\Models\School::class)->create([
         'user_id' => factory(App\User::class)->create(['name' => 'Kέντρα Ξένων Γλωσσών Παπαβαρσάμη', 'email' => 'info@papavarsami.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'papavarsami'])->id,
         'address' => 'Ξηρογιάννη 50, Άνω Ιλίσια',
         'region' => 'Άνω Ιλίσια',
         'city' => 'Αθήνα',
         'phone' => 2107773378,
         'type_id' => 4,
         'website' => 'papavarsami.gr',
         'approved' => 1,
         'ranking' => 50,
         'about' => '
            Τα Kέντρα Ξένων Γλωσσών Παπαβαρσάμη βρίσκονται στο χώρο της ξενόγλωσσης εκπαίδευσης από το 1986 με δύο σχολεία στην περιοχή των Άνω Ιλισίων. Πρόκειται για σύγχρονους παιδαγωγικούς χώρους με αρχές την πίστη στις μοναδικές δυνατότητες του ατόμου, την πεποίθηση ότι η γνώση της γλώσσας μπορεί να ευδοκιμήσει μέσα στην ομάδα και στο κλίμα που μόνο η συλλογική μάθηση μπορεί να προσφέρει.
            Γνωρίζουμε ότι η εκμάθηση της γλώσσας αποτελεί μαθησιακή εμπειρία, «γνώση του κόσμου», επικοινωνία, μελέτη πολιτισμού, δεν σταματάει ποτέ, γι\'αυτό και η απόκτηση πτυχίων αποτελεί έναν από τους στόχους μας χωρίς να είναι όμως ούτε ο τελικός ούτε ο μοναδικός.
            Έχουμε καταφέρει να αισθανόμαστε μία μεγάλη οικογένεια που αποτελείται από τους μαθητές μας, τους καθηγητές και από τη διεύθυνση, και έχουμε μάθει να δουλεύουμε συλλογικά έχοντας κοινό όραμα το σχολείο μας να αποτελεί χώρο γνώσης, δημιουργίας και χαράς.
            ',
         'background' => $background,
     ]);

     new Portal($fake, 7, 'frontistirio');

     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Αγγλικά','http://www.papavarsami.gr/el/static/agglika_el.aspx');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γαλλικά','http://www.papavarsami.gr/el/static/gallika_el.aspx');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γερμανικά','http://www.papavarsami.gr/el/static/germanika_el.aspx');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ισπανικά','http://www.papavarsami.gr/el/static/ispanika_el.aspx');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ιταλικά','http://www.papavarsami.gr/el/static/italika_el.aspx');

     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Αγγλικά','http://www.papavarsami.gr/el/static/agglika_el.aspx');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γαλλικά','http://www.papavarsami.gr/el/static/gallika_el.aspx');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γερμανικά','http://www.papavarsami.gr/el/static/germanika_el.aspx');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ισπανικά','http://www.papavarsami.gr/el/static/ispanika_el.aspx');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ιταλικά','http://www.papavarsami.gr/el/static/italika_el.aspx ');

     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'IELTS');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'TOEFL');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'TOEIC');

     Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/papavarsami');




     /*=============== 7 Σίγμα ================*/

     $fake = factory(App\Models\School::class)->create([
         'user_id' => factory(App\User::class)->create(['name' => 'Κέντρα Ξένων Γλωσσών Σίγμα', 'email' => 'info@cybersigma.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'sigmaschool'])->id,
         'address' => 'Αλατσάτων 29, Βύρωνας',
         'region' => 'Βύρωνας',
         'city' => 'Αθήνα',
         'phone' => 2107626587,
         'type_id' => 4,
         'website' => 'cybersigma.gr',
         'approved' => 1,
         'ranking' => 50,
         'about' => '
            Σας καλωσορίζουμε στα Κέντρα Ξένων Γλωσσών ΣΙΓΜΑ
            Επί 30 χρόνια προσφέρουμε την καλύτερη διδακτική εμπειρία σε παιδιά και εφήβους. Η εκπαιδευτική μας προσέγγιση, οι έμπειροι και εξειδικευμένοι καθηγητές μας, ο σύγχρονος εξοπλισμός μας, τα κατάλληλα διαμορφωμένα σχολεία μας και η σύγχρονη παιδαγωγική μεθοδολογία που εφαρμόζουμε θα βοηθήσουν το παιδί σας να έχει γρήγορη πρόοδο με τον πιο αποδοτικό και ευχάριστο τρόπο.
            Μαζί μας τα παιδιά σας θα έχουν την ευκαιρία να εκμεταλλευτούν το ταλέντο τους και να αναπτύξουν τις ικανότητές τους.
            Τα υψηλά ποσοστά επιτυχίας των μαθητών μας σε όλα τα ξενόγλωσσα διπλώματα, με
            ΕΝΑ ΧΡΟΝΟ ΣΠΟΥΔΩΝ ΛΙΓΟΤΕΡΟ, αποτελούν απόδειξη της ποιότητας του διδακτικού μας έργου. Η σταθερή προτίμησή των οικογενειών του Βύρωνα στο σχολείο μας αποτελεί δικαίωση της δέσμευσής μας να προσφέρουμε πάντα το καλύτερο.
            Τα Κέντρα Ξένων Γλωσσών ΣΙΓΜΑ προσφέρουν σε παιδιά και εφήβους:
            Πλήρη προγράμματα, στις κυριότερες ευρωπαϊκές γλώσσες, που είναι σχεδιασμένα:
            Να αναπτύσσουν αρμονικά τις βασικές γλωσσικές δεξιότητες (ομιλία, ανάγνωση, κατανόηση και παραγωγή γραπτού και προφορικού λόγου)
            Να δίνουν ευκαιρίες επικοινωνιακής χρήσης της γλώσσας
            Να εισάγουν στον πολιτισμό και το κοινωνικό πλαίσιο της διδασκόμενης γλώσσας
            Να κοινωνικοποιούν τους μαθητές
            Να ενισχύουν την αυτοπεποίθηση και να βοηθούν στην ανάπτυξη στρατηγικών μάθησης
            Να οδηγούν σε έγκυρες, διεθνείς Πιστοποιήσεις.
            Καλώς ήλθατε λοιπόν στο φιλικό, ασφαλές και παιδαγωγικά δομημένο περιβάλλον των Κέντρων Ξένων Γλωσσών ΣΙΓΜΑ.
            ',
         'background' => $background,
     ]);

     new Portal($fake, 6, 'frontistirio');

     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Αγγλικά','https://cybersigma.gr/english/');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γαλλικά','https://cybersigma.gr/french/');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γερμανικά','https://cybersigma.gr/german/');


     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Αγγλικά','https://cybersigma.gr/english/');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γαλλικά','https://cybersigma.gr/french/');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γερμανικά','https://cybersigma.gr/german/');


       Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/Sigmaschool');






     /*=============== 8 Χατζηδάκη ================*/

     $fake = factory(App\Models\School::class)->create([
         'user_id' => factory(App\User::class)->create(['name' => 'Κέντρα Ξένων Γλωσσών Χατζηδάκη', 'email' => 'info@hatzidaki.com', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'hatzidaki'])->id,
         'address' => 'Θρασυβούλου 30, Χαλανδρι',
         'region' => 'Χαλανδρι',
         'city' => 'Αθήνα',
         'phone' => 2106855200,
         'type_id' => 4,
         'website' => 'hatzidaki.com',
         'approved' => 1,
         'ranking' => 50,
         'about' => '
            Τα ΚΕΝΤΡΑ ΞΕΝΩΝ ΓΛΩΣΣΩΝ ΧΑΤΖΗΔΑΚΗ δραστηριοποιούνται στο χώρο της ξενόγλωσσης εκπαίδευσης από το 1990, όπου με επιτυχία συμβάλλουν στην άριστη εκμάθηση Ευρωπαϊκών και όχι μόνον γλωσσών, όπως:
            Αγγλικά,
            Γαλλικά,
            Γερμανικά,
            Ιταλικά,
            Ισπανικά,
            Τούρκικα
            Υπάρχουν τμήματα για όλα τα επίπεδα, τα διπλώματα, τις ηλικίες και τις χρονικές περιόδους καθώς επίσης και ιδιαίτερα μαθήματα.
            Οι καθηγητές είναι απόλυτα εξειδικευμένοι ανάλογα με την ηλικία των μαθητών που απευθύνονται. Οι αίθουσες διδασκαλίας είναι διαμορφωμένες διαφορετικά για τα παιδιά, για τους εφήβους και για τους ενήλικους. ‘Έτσι η κάθε ομάδα έχοντας την ανάλογη μεταχείριση και το κατάλληλο περιβάλλον εργασίας αποδίδει τα μέγιστα.
            Πέραν των άριστα κατηρτισμένων καθηγητών και των απόλυτα εργονομικών χώρων, παρέχεται τεχνολογία αιχμής, με διαδραστικούς πίνακες (interactive whiteboards) και στερεοφωνικά συστήματα σε κάθε αίθουσα καθώς επίσης και computers/multimedia για την καλύτερη εμπέδωση της διδακτέας ύλης. Τέλος το δυνατό μας όπλο. Το πάθος για δουλειά τόσο της διδακτικής ομάδας των ΚΕΝΤΡΩΝ ΞΕΝΩΝ ΓΛΩΣΣΩΝ ΧΑΤΖΗΔΑΚΗ, όσο και της ιδρύτριας και διευθύντριας σπουδών Εύης Χατζηδάκη
            ',
         'background' => $background,
     ]);

     new Portal($fake, 7, 'frontistirio');

     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Αγγλικά','https://www.hatzidaki.com/portal/index.php?option=com_content&view=article&id=6&Itemid=3&lang=el');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γαλλικά','https://www.hatzidaki.com/portal/index.php?option=com_content&view=article&id=6&Itemid=3&lang=el');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Γερμανικά','https://www.hatzidaki.com/portal/index.php?option=com_content&view=article&id=6&Itemid=3&lang=el');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ισπανικά','https://www.hatzidaki.com/portal/index.php?option=com_content&view=article&id=6&Itemid=3&lang=el');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Ιταλικά','https://www.hatzidaki.com/portal/index.php?option=com_content&view=article&id=6&Itemid=3&lang=el');
     Scholio::portalStudy($fake, 'Παιδικά Τμήματα', 'Ξένες Γλώσσες', 'Τούρκικα','https://www.hatzidaki.com/portal/index.php?option=com_content&view=article&id=6&Itemid=3&lang=el');


     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Αγγλικά','https://www.hatzidaki.com/portal/index.php?option=com_content&view=article&id=6&Itemid=3&lang=el');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γαλλικά','https://www.hatzidaki.com/portal/index.php?option=com_content&view=article&id=6&Itemid=3&lang=el');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Γερμανικά','https://www.hatzidaki.com/portal/index.php?option=com_content&view=article&id=6&Itemid=3&lang=el');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ισπανικά','https://www.hatzidaki.com/portal/index.php?option=com_content&view=article&id=6&Itemid=3&lang=el');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ιταλικά','https://www.hatzidaki.com/portal/index.php?option=com_content&view=article&id=6&Itemid=3&lang=el');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Τούρκικα','https://www.hatzidaki.com/portal/index.php?option=com_content&view=article&id=6&Itemid=3&lang=el');

     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'IELTS');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'TOEFL');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'TOEIC');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Προετοιμασία Πιστοποίησης', 'GRE');





     /*=============== 9 Abanico  ================*/

     $fake = factory(App\Models\School::class)->create([
         'user_id' => factory(App\User::class)->create(['name' => 'Κέντρο Ξένων Γλωσσών Abanico', 'email' => 'info@abanico.gr ', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'abanico'])->id,
         'address' => 'Kολοκοτρώνη 12',
         'region' => 'Κέντρο',
         'city' => 'Αθήνα',
         'phone' => 2103251214,
         'type_id' => 4,
         'website' => 'abanico.gr',
         'approved' => 1,
         'ranking' => 50,
         'about' => '
           Tο Abanico γίνεται δεκαοχτώ χρονών! Ενηλικιώνεται με σκληρή δουλειά άλλα ταυτόχρονα και με μεγάλες ικανοποιήσεις. Ιδού το γιατί:
           Το πρόγραμμα σπουδών του Κέντρου έχει διαμορφωθεί σύμφωνα με το Ευρωπαïκό Πλαίσιο Αναφοράς και τις επίσημες εξετάσεις για τα ισπανικά (DELE), τα πορτογαλικά (PLE) και τα καταλανικά (Certificats A, B, C, D).
           Κατά τη διάρκεια των κανονικών και των εντατικών μαθημάτων ισπανικών, πορτογαλικών και καταλανικών, ο μαθητής του Abanico μπορεί να ξεκινήσει, να βελτιώσει και να τελειοποιήσει τις γνώσεις του στις τέσσερεις γλωσσικές δεξιότητες (ανάγνωση, γραφή, ακουστική κατανόηση και προφορική έκφραση), ενώ παράλληλα προετοιμάζεται (εάν το επιθυμεί) για τις εξετάσεις που αναφέρουμε παραπάνω.
           Το διδακτικό προσωπικό του Αbanico απαρτίζεται από καθηγητές με μεγάλη πείρα στη μεθοδολογία ης γλωσσικής διδασκαλίας. Τα τμήματα είναι ολιγάριθμα, οπότε ο μαθητής διατηρεί αδιάκοπα μια επαφή απευθείας με τον καθηγητή του αλλά και το προσωπικό του Κέντρου εν γένει.
           Τα μαθήματα, σεμινάρια και εργαστήρια με ειδική θεματολογία (λογοτεχνία, κουζίνα, κλπ), το τμήμα μετάφρασης (το διευθύνει ο Νίκος Πρατσίνης) και τα εργαστήρια του, τα οποία παραδίδουν ή/και συντονίζουν αξιόλογοι ισπανιστές και «λουζιτανιστές», επαγγελματίες της μετάφρασης και των ιβηρικών (ισπανικών, πορτογαλικών, καταλανικών, κ.λπ.) και λατινοαμερικανικών σπουδών στην Ελλάδα, απευθύνονται σε μαθητές με επίπεδο γλωσσικών γνώσεων και δεξιοτήτων που αντιστοιχούν στο ανώτερο δίπλωμα και επιθυμούν να εμβαθύνουν στη μελέτη της μιας συγκεκριμένης γλώσσας και πολιτισμού.
           Kατά την παραμονή τους στο Αbanico, οι μαθητές μπορούν να ετοιμάζουν τον καφέ τους, να διαβάζουν εφημερίδες ή περιοδικά στις τρεις γλώσσες, να τσεκάρουν το e-mail τους, το facebook και το tweeter τους, μιας και το Abanico διαθέτει wifi, ή να πάρουν κάποιο βιβλίο ή μία ταινία από τη δανειστική βιβλιοθήκη ή βιντεοθήκη.
           Επιπλέον – και αυτό συνιστά βασική κατευθυντήρια αρχή του Abanico – οι παράλληλες δραστηριότητες με πολιτιστικό ή/και ψυχαγωγικό χαρακτήρα επιτρέπουν στο μαθητή να προσεγγίσει το ευρύ και ποικίλο πολιτισμικό φάσμα των χωρών όπου ομιλείται η ισπανική, η πορτογαλική και η καταλανική. Αυτές δε οι δραστηριότητες είναι, εν γένει, δωρεάν και ανοιχτές στο ευρύ κοινό.
            ',
         'background' => $background,
     ]);

     new Portal($fake, 8, 'frontistirio');


     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Ισπανικά','http://www.abanico.gr/courses-gr/languages-gr/spanish-courses');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Πορτογαλικά','http://www.abanico.gr/courses-gr/languages-gr/portuguese-courses');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Ξένες Γλώσσες', 'Καταλανικά','http://www.abanico.gr/courses-gr/languages-gr/catalan-courses/que-es-el-catala');

     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Τέχνες', 'Θέατρο','http://www.abanico.gr/courses-gr/special-courses/teatro');
     Scholio::portalStudy($fake, 'Τμήματα Ενηλίκων', 'Τέχνες', 'Λογοτεχνία','http://www.abanico.gr/courses-gr/special-courses/literature');

       Scholio::portalSocial($fake, 'facebook', 'https://www.facebook.com/ABANICO.atenas');
       Scholio::portalSocial($fake, 'twitter', 'https://twitter.com/AbanicoAtenas');



    }



}
