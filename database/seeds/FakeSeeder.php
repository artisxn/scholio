
<?php
use App\Models\Admission;
use App\Models\CategoryReview;
use App\Models\Review;
use App\Models\Scholarship;
use App\Models\School;
use App\Models\Student;
use App\Models\Study;
use App\Models\Tag;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class FakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*===============   1 SOUTH   ================*/
        $school1 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'South College of Thessaloniki', 'email' => 'webminfo@south.edu', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'south'])->id,
            'address' => 'Τζων Κεννεντυ 52, 17, Πυλαία',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310456789,
            'type_id' => 1,
            'website' => 'lsbu.ac.uk ',
            'approved' => 2,
            'about' => '<div class="lead">
<h4 class="last-child"><strong>SBU has focused on providing professional opportunity for all who can benefit for 125 years</strong></h4>
</div>
<div>
<p> South Bank University (SBU) is celebrating 125 years this year. Established as the Borough Polytechnic Institute in 1892, the original aim of LSBU was \'to promote the industrial skill, general knowledge, health and well-being of young men and women\', which remains remarkably similar today. Our continuous focus on vocational education and professional opportunity allows us to produce graduates who can meet the challenges of today\'s workplace.</p>
<p> </p>
<div >
<h4><strong>Our mission is to be recognised as an enterprising civic university that addresses real world challenges</strong></h4>
</div>
<p> South Bank University\'s (SBU) Corporate Strategy 2015–2020 (PDF File 749 KB) sets out how LSBU will achieve its vision of becoming London\'s top modern university by 2020.</p>
<p>The strategy builds on the strengths of LSBU by focusing on its ability to enhance student success and deliver real world impact through academic activity and links to business and the professions.</p>
</div>',
            'logo' => '/images/schools/fake/act-logo.png',
            'background' => 1,
        ]);
        /*===============  2 polytec ================*/
        $school2 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Πολυτεχνικό Κολλέγιο Θεσσαλονίκης', 'email' => 'info@education.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'polytec'])->id,
            'address' => 'Τσιμισκή 124',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310789456,
            'type_id' => 1,
            'website' => 'www.polyu.edu.hk',
            'approved' => 2,
            'about' => '<div>
<h4 style="text-align: justify;"><strong>Innovative education model</strong></h4>
<p  style="text-align: justify;">PolyU is the only university in Hong Kong that incorporates Work-Integrated Education and Service-Learning as mandatory components within the undergraduate curriculum, encouraging students to apply their knowledge in practice to address societal needs and improve the lives of the needy. Hence, graduates are sought after by employers.<br />
<br />The University has close links with institutions, professional and business sectors at home and abroad. This gives PolyU students countless learning opportunities both inside and outside the classroom. Through student exchange and internship programmes, leadership training, Service-Learning programme as well as other co-curricular activities, students are nurtured to be future leaders with a global outlook.<br />
<br /><br /><strong>A research and entrepreneurship powerhouse</strong></p>
<p  style="text-align: justify;">PolyU’s culture of blazing new trails drives the University to challenge boundaries and uncover knowledge that benefits mankind. It has a reputation for delivering high-impact research projects and successful student startups. Entrepreneurship is highly encouraged by the University, with various funding schemes in place to provide seed funding to budding entrepreneurs. You can find out more about entrepreneurship development here. </p>
</div>',
            'logo' => '/images/schools/fake/amc-logo.png',
            'background' => 7,
        ]);
        /*===============  3 Full Studies Thessaloniki ================*/
        $school3 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'IEK Full Studies Θεσσαλονίκη', 'email' => 'info@iek.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'full'])->id,
            'address' => 'Tsimiski 74',
            'city' => 'Thessaloniki',
            'phone' => 2310262333,
            'type_id' => 2,
            'website' => 'www.dtu.dk',
            'about' => '<h4><em>Αγαπητοί νέοι και νέες ,</em></h4>
<p style="text-align: justify;">Στα 20 και πλέον χρόνια της πορείας μας στο χώρο της εκπαίδευσης μένουμε πιστοί στο όραμά μας για μια πρωτοπόρα επαγγελματική εκπαίδευση, βασισμένη στα Διεθνή Πρότυπα.<br />Στο ΙΕΚ Full Studies παρέχουμε υψηλής ποιότητας εκπαίδευση που διασφαλίζεται από συνεχείς επενδύσεις σε υψηλού επιπέδου συνεργασίες, οι οποίες λειτουργούν ως συνδετικός κρίκος μεταξύ του εκπαιδευτικού και επαγγελματικού περιβάλλοντος, σε νέες τεχνολογίες και σε κορυφαίες υλικοτεχνικές και κτιριακές υποδομές.<br />Στο ΙΕΚ Full Studies πρωτοπορούμε με τη δημιουργία νέων ειδικοτήτων υψηλής απορρόφησης  από την αγορά εργασίας, αλλά και τη διαρκή έρευνα αγοράς για προγράμματα εξειδίκευσης και πιστοποιήσεις υψηλού επιπέδου που θα σας ξεχωρίσουν στον επαγγελματικό στίβο.
<br />Στην ιστοσελίδα μας μπορείτε να βρείτε γενικές πληροφορίες για τη φοίτησή σας σε κάθε μία από τις ειδικότητες που παρέχονται, οι οποίες είναι ομαδοποιημένες σε 10 τομείς σπουδών.</p>
<p style="text-align: justify;">Όλοι μας υπηρετούμε το δικαίωμά σας να κάνετε τα όνειρά σας πραγματικότητα και γι’ αυτό είμαστε εδώ, έτοιμοι να σας καλωσορίσουμε στη μεγάλη οικογένειά μας και να σας διδάξουμε τον τρόπο με τον οποίο θα ενταχθείτε κι εσείς στους καταξιωμένους επαγγελματίες του μέλλοντος!</p>',

            'approved' => 2,
            'logo' => '/images/schools/fake/akmi-logo.png',
            'background' => 14,
        ]);
        /*===============  4 Δημήτρια Εκπαιδευτήρια  ================*/
        $school4 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Δημήτρια Εκπαιδευτήρια ', 'email' => 'info@loudovikos.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'loudovikos'])->id,
            'address' => '3o χλμ Θεσ/νίκης-Μουδανιών, Θέρμη',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310445577,
            'type_id' => 6,
            'website' => 'www1.sanandres.esc.edu.ar',
            'approved' => 2,
            'about' => '<p><strong>Στα Δημήτρια Εκπαιδευτήρια </strong></p>
<ul>
<li><strong>Διδάσκουμε</strong>: Ένα άριστο επιτελείο καθηγητών αποτελεί το διδακτικό μας προσωπικό. Άνθρωποι που για χρόνια και με συνέπεια υπηρετούν την εκπαίδευση, διαθέτουν φροντιστηριακή πείρα, αλλά και την απαιτούμενη παιδαγωγική κατάρτιση, για να υποστηρίξουν κάθε ανάγκη του μαθητή.</li>
<li><strong>Υποστηρίζουμε</strong>: Παρέχουμε στους μαθητές μας το βοηθητικό υλικό που απαιτείται για την καλύτερη προσέγγιση της διδακτέας ύλης: Σημειώσεις ανά μάθημα σε έντυπη και ηλεκτρονική μορφή, προηγμένη χρήση διαδραστικών πινάκων (smartboard), ηλεκτρονική εκπαιδευτική πλατφόρμα (moodle) και πρόσβαση στη δανειστική βιβλιοθήκη του σχολείου. Το σχολείο μας έχει προχωρήσει σε ενίσχυση του προγράμματος με πρόσθετες ώρες διδασκαλίας των πανελλαδικώς εξεταζόμενων μαθημάτων για τις τάξεις του Λυκείου, εξασφαλίζοντας περισσότερο χρόνο προετοιμασίας για τους μαθητές και απαλλάσσοντας τους γονείς από επιπρόσθετες οικονομικές δαπάνες.  </li>
<li><strong>Καινοτομούμε</strong>: Πρωτοστατήσαμε στην εισαγωγή της νέας τεχνολογίας στην εκπαιδευτική διαδικασία, εξοπλίζοντας όλες τις αίθουσες και τα εργαστήρια με διαδραστικούς πίνακες(smartboard). Συνεχίζουμε να πρωτοπορούμε αξιοποιώντας τις δυνατότητές τους στην ενεργοποίηση της προσοχής και της αφομοιωτικής ικανότητας των μαθητών μας. Η συνεχής επιμόρφωση όλων των εκπαιδευτικών μας στη χρήση Η/Υ και αντίστοιχων εκπαιδευτικών προγραμμάτων εγγυάται την ουσιαστική συμβολή των νέων εποπτικών μέσων στην αποτελεσματικότητα της διδασκαλίας.</li>
<li><strong>Εμπνέουμε</strong>: Στοχεύουμε σε ένα σχολείο ανοιχτό στην κοινωνία. Επιδιώκουμε να διατηρούμε συνεχή επαφή με τα συμβαίνοντα στην κοινωνική πραγματικότητα σε τοπικό, εθνικό και διεθνές περιβάλλον.</li>
</ul>',
            'logo' => '/images/schools/fake/vasileiadi-logo.png',
            'background' => 20,
        ]);
        /*===============  5 Εκπαιδευτήρια Δημόκριτος ================*/
        $school5 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Εκπαιδευτήρια Δημόκριτος', 'email' => 'info@dimokritos.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'dimokritos'])->id,
            'address' => 'Επταπυργίου 48, Συκιές',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310889900,
            'type_id' => 6,
            'website' => 'www.kaznu.kz',
            'approved' => 2,
            'about' => '<h2>Φιλοσοφία</h2>
<div>
<p><br />Η <strong>ελεύθερη σκέψη</strong>, η <strong>κριτική ικανότητα</strong>, το <strong>δημιουργικό πνεύμα</strong>, ο <strong>σεβασμός για το περιβάλλον και τον άνθρωπο</strong> αποτελούν κατευθυντήριες έννοιες της σχολικής καθημερινότητας στα Εκπαιδευτήριά μας. Προσφέρουμε στους μαθητές μας υψηλής ποιότητας παιδεία, προσαρμοσμένη στις ανάγκες του κάθε παιδιού.<br /><br />Επιδιώκουμε με κάθε τρόπο να αναγνωρίσουμε και <strong>να αναδείξουμε τις ιδιαίτερες ικανότητες του κάθε μαθητή</strong>. Για μας το παιδί δεν είναι θεατής, αλλά ενεργός συμμέτοχος στην εκπαιδευτική διαδικασία. Προετοιμάζουμε σκεπτόμενους πολίτες που με τις γνώσεις και το ήθος τους θα είναι έτοιμοι να αντιμετωπίζουν τις προκλήσεις των καιρών.</p>
<p>Το <strong>φιλικό και ζεστό περιβάλλον</strong> των Εκπαιδευτηρίων μας, αποτελεί πάντα σημαντικό παράγοντα στην υλοποίηση των στόχων μας. Με <strong>ιδιαίτερη στοργή</strong> και <strong>ενδιαφέρον</strong> σκύβουμε στις ανησυχίες και τις αναζητήσεις των νέων ανθρώπων, οπλίζοντάς τους με δύναμη και αισιοδοξία για τη ζωή.<br /><br />Πιστεύουμε ότι κάθε μορφωτικό αγαθό μπορεί να βλαστήσει μόνο μέσα από <strong>σχέσεις υγιείς και ευτυχισμένες,</strong> <strong>σχέσεις εμπιστοσύνης</strong> που μόνο στο <strong>οικογενειακό περιβάλλον που προσφέρουμε</strong> μπορούν να καλλιεργηθούν και με την προσωπική μας φροντίδα να καρποφορήσουν.</p>
</div>',
            'logo' => '/images/schools/fake/fryganioti-logo.png',
            'background' => 29,
        ]);
        /*===============   6 Sanford  ================*/
        $school6 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Sanford College', 'email' => 'info@Sanford.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'Sanford'])->id,
            'address' => ' Λεωφ. Κηφισίας 38',
            'city' => 'Αθήνα',
            'phone' => 2103344551,
            'type_id' => 1,
            'website' => 'www.stanford.edu',
            'approved' => 2,
            'about' => '<div class="lead">
<p>The university was founded in 1885 by Leland and Jane Stanford in memory of their only child, Leland Stanford Jr., who had died of typhoid fever at age 15 the previous year. Stanford was a former Governor of California and U.S. Senator; he made his fortune as a railroad tycoon. The school admitted its first students on October 1, 1891, as a coeducational and non-denominational institution.</p>
<p>Stanford University struggled financially after Leland Stanford\'s death in 1893 and again after much of the campus was damaged by the 1906 San Francisco earthquake. Following World War II, Provost Frederick Terman supported faculty and graduates\' entrepreneurialism to build self-sufficient local industry in what would later be known as Silicon Valley. The university is also one of the top fundraising institutions in the country, becoming the first school to raise more than a billion dollars in a year.</p>
</div>',
            'logo' => '/images/schools/fake/newyork-logo.png',
            'background' => 37,
        ]);
        /*===============  7 Φροντιστήρια Επιτυχία ================*/
        $school7 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Φροντιστήρια Επιτυχία', 'email' => 'info@epityxia.com', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'epityxia'])->id,
            'address' => 'Ελ. Βενιζέλου, 83',
            'city' => 'Γιαννιτσά',
            'phone' => 2382027272,
            'type_id' => 3,
            'website' => 'www.uca.edu.ar',
            'approved' => 2,
            'about' => 'Αγαπητέ μαθητή/τρια, γνωρίζουμε πολύ καλά ότι δεν υπάρχει τίποτε καλύτερο και υψηλότερο για ένα νέο άνθρωπο, απόφοιτο Λυκείου, από το να επιτύχει την είσοδό του στο Πανεπιστήμιο. Όταν μάλιστα η είσοδος αυτή ανταποκρίνεται και στην πρώτη σχολή την οποία επέλεξε, τότε είναι σίγουρο πως η επαγγελματική του σταδιοδρομία είναι εξασφαλισμένη και επιτυχημένη.</p>
<p>Η επιτυχία σου δεν είναι θέμα <strong>τύχης, επιφάνειας και εντύπωσης</strong>, αλλά <strong>μόχθου, βάθους και ουσίας</strong>. Η υλοποίηση των υψηλών στόχων προϋποθέτει όχι μόνο ατομική θέληση, άλλα και υπεύθυνη προετοιμασία, τόσο σε γνωστικό όσο και σε ψυχολογικό επίπεδο.</p>
<p>Το πρόγραμμα μαθημάτων του φροντιστηρίου στηρίζεται στις παρακάτω αρχές:</p>
<p style="text-align: center;"><strong>Διαρκής ανανέωση και βελτίωση</strong><br /><strong>Κλειστά ομοιογενή τμήματα και γκρουπ</strong><br /><strong>Επιλογή άριστα καταρτισμένων καθηγητών</strong><br /><strong>Υψηλό επίπεδο διδασκαλίας</strong><br /><strong>Καλλιεργούμε και αναπτύσσουμε μεθόδους</strong><br /><strong>Επαναληπτικά Διαγωνίσματα </strong><br /><strong>Πρόσθετες ώρες και διαγωνίσματα</strong><br /><strong>Συνεργασία με τους γονείς</strong><br /><strong>Σύσκεψη Καθηγητών</strong><br /><strong>Οργάνωση και λειτουργικότητα</strong></p>
<p><br /><strong>Διαρκής ανανέωση και βελτίωση</strong></p>
<p>Η ανοδική πορεία μας είναι σταθερή και η εξέλιξη συνεχής. Κανένα άλλο Φροντιστήριο δεν έχει να παρουσιάσει τόσες επιτυχίες, τον πρώτο χρόνο λειτουργίας του. Η επιτυχία στις ανώτατες σχολές εξασφαλίζεται:</p>
<p><strong>Με ανελλιπή παρακολούθηση των μαθημάτων μας</strong><br /><strong>Με σκληρή, επίπονη και επίμονη προσωπική μελέτη</strong><br /><strong>Με υποχρεωτική συμμετοχή στα διαγωνίσματα</strong></p>
<p><strong>Κλειστά ομοιογενή τμήματα και γκρουπ</strong></p>
<p>Οι μαθητές χωρίζονται με βάση το πραγματικό τους επίπεδο και όχι με κριτήριο το λύκειο στο οποίο φοιτούν. Το πρόγραμμα του κάθε τμήματος θα είναι ανάλογα διαμορφωμένο και οι μαθητές που θα φοιτούν σ’ αυτά τα τμήματα θα έχουν την δυνατότητα να δουλέψουν σωστά, ώστε και στο σχολείο να μην έχουν καμία δυσκολία, αλλά και το σπουδαιότερο, με άνεση θα μπορούν να στοχεύουν το άριστα στις εξετάσεις της Α’ ,  Β’ Λυκείου, όπως και στις Πανελλαδικές Εξετάσεις της Γ΄ Λυκείου.</p>
<p><strong>Επιλογή άριστα καταρτισμένων καθηγητών</strong></p>
<p>Η επιλογή των καθηγητών γίνεται με αυστηρά κριτήρια, τα οποία στηρίζονται στις εξής αρχές:<br />Την άρτια επιστημονική τους κατάρτιση<br />Την πολυετή τους πείρα<br />Την εργατικότητά τους<br />Το ήθος τους<br />Το ανθρωπιστικό και παιδαγωγικό τους υπόβαθρο<br />Το ενδιαφέρον τους για κάθε μαθητή χωριστά<br />Το σεβασμό για το γονιό</p>',
            'logo' => '/images/schools/fake/ypodomi-logo.png',
            'background' => 42,
        ]);
        /*===============  8 Εκπαιδευτήρια Μακεδονίας ================*/
        $school8 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Εκπαιδευτήρια Μακεδονίας', 'email' => 'gymnasio@makedonia.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'makedonia'])->id,
            'address' => 'Τζων Κέννεντυ 19, Πυλαία',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310329540,
            'type_id' => 7,
            'website' => 'www.icn-artem.com',
            'approved' => 2,
            'about' => '<p>Τα Εκπαιδευτήρια «Μακεδονίας» ιδρύθηκαν <strong>το 1981</strong> από τον επιστήμονα και ερευνητή <strong> Ιωάννη Καποδίστρια </strong>, ο οποίος οραματίστηκε για την αγαπημένη του Θεσσαλονίκη ένα σχολείο που θα κάλυπτε όλες τις βαθμίδες και θα παρείχε στους μαθητές του άριστη μόρφωση αλλά και χριστιανική αγωγή ψυχής.<br />Η επιθυμία του αειμνήστου πατρός βρήκε ένθερμους υποστηρικτές οι οποίοι με ζήλο και αυταπάρνηση υλοποίησαν το όραμα. Ο επιστημονικός σύλλογος της Θεσσαλονίκης<strong> "Μακεδονία" </strong>ανέλαβε την ευθύνη αυτού του έργου, την οποία έχει ως σήμερα. Πρώτα λειτούργησε ένα τμήμα του Νηπιαγωγείου με την ονομασία «Κυκλάμινα». Σιγά-σιγά ολοκληρώθηκαν οι τάξεις του Δημοτικού, του Γυμνασίου και του Λυκείου.</p>
<p><strong>Παιδικός Σταθμός, </strong>δύο<strong> Νηπιαγωγεία, </strong>δύο <strong>Δημοτικά Σχολεία, </strong>δύο<strong> Γυμνάσια </strong>και το <strong>Λύκειο </strong>λειτουργούν σήμερα και έχουν φιλοξενήσει εκατοντάδες μαθητές παρέχοντας εξαιρετικού επιπέδου μόρφωση και αγωγή. Το Σχολείο αγαπήθηκε από τους Θεσσαλονίκεις, οι οποίοι με εμπιστοσύνη «ακούμπησαν» σ’ αυτό τα παιδιά τους.</p>
<p>Με ταχύτατο ρυθμό αναπτύχθηκαν οι κτιριακές εγκαταστάσεις σ\' έναν χώρο μοναδικής θέσης και ομορφιάς στους πρόποδες του Πανοράματος που έχει το προνόμιο να είναι κατάφυτος. Το 1984 εγκαινιάστηκε το κτίριο του Δημοτικού Σχολείου από το ιδρυτή των Εκπαιδευτηρίων μας π. Λεωνίδα ο οποίος συγκινημένος έβλεπε να υλοποιείται το όραμά του, το 1983 ολοκληρώθηκε και εγκαινιάστηκε το κτίριο που στεγάζει το Γυμνάσιο, το 1992 το κτίριο του Λυκείου, το 2003 εγκαινιάστηκε νέο κτίριο νηπιαγωγείων και το 2006 νέο δεύτερο κτίριο Δημοτικού σχολείου. Αίθουσες τελετών, γυμναστήρια, γήπεδα και πολύ άνετοι προαύλιοι χώροι συμπληρώνουν τις εγκαταστάσεις.</p>',
            'logo' => '/images/schools/fake/eap-logo.png',
            'background' => 44,
        ]);
        /*===============  9 Ξένες Γλώσσες  EuroLearn ================*/
        $school9 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Ξένες Γλώσσες  EuroLearn', 'email' => 'tsimiski@EuroLearn.info', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'EuroLearn'])->id,
            'address' => 'Τσιμισκή 22',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310343434,
            'type_id' => 4,
            'website' => 'EuroLearn.com',
            'approved' => 2,
            'about' => 'Εκπαιδευτικός Oργανισμός Ευρωπαϊκών Γλωσσών και Πληροφορικής στην Νοτιοανατολική Ευρώπη. Επί σειρά ετών η EuroLearn αποτελεί την πρώτη επιλογή εκπαιδευτικού οργανισμού ξένων γλωσσών και πληροφορικής για όλους τους Έλληνες.</p>
<p>Τα <strong>Κέντρα ξένων γλωσσών EuroLearn</strong> ιδρύθηκαν το 1989 με σκοπό να παρέχουν σπουδές Ευρωπαϊκών Γλωσσών υψηλής ποιότητας για όλες τις ηλικίες των σπουδαστών της. Σήμερα είναι η 1η Δύναμη στις Ξένες Γλώσσες και την Πληροφορική και ο μεγαλύτερος φορέας ιδιωτικής εκπαίδευσης στην Ελλάδα, την Κύπρο και τη Ρουμανία, με 350 κέντρα Ξένων Γλωσσών και Πληροφορικής σε λειτουργία και περισσότερους από 60.000 σπουδαστές σε μέση ετήσια βάση, αξιοποιώντας έτσι με τον καλύτερο τρόπο τις στρατηγικές συμφωνίες που έχει συνάψει με κορυφαίους εκπαιδευτικούς οργανισμούς παγκοσμίως.</p>
<p>Η EuroLearn είναι αδιαμφισβήτητα ο LEADER στον χώρο των εκπαιδευτικών επιχειρήσεων. Παρέχει άριστες εκπαιδευτικές υπηρεσίες με προγράμματα που καλύπτουν το φάσμα των ηλικιών από παιδιά 4 ετών μέχρι ενήλικες και εξειδικευμένα <strong>επιχειρησιακά προγράμματα</strong>, χρησιμοποιώντας τις πιο σύγχρονες μεθόδους διδασκαλίας σε συνδυασμό με καινοτόμες τεχνολογίες. Ειδικότερα, παρέχει <strong>παιδικά προγράμματα, προγράμματα φοιτητών, προγράμματα ενηλίκων</strong> καθώς και ειδικά <strong>εντατικά μαθήματα</strong> για πτυχία ξένων γλωσσών. Για τον λόγο αυτό το όνομά μας είναι από τα πιο αναγνωρίσιμα brands στον ελλαδικό χώρο και όχι μόνο, συνώνυμο της ποιοτικής και αποτελεσματικής εκμάθησης ξένων γλωσσών και πληροφορικής.</p>
<p>Οι χιλιάδες των αποφοίτων και των ενεργών, ευχαριστημένων, σπουδαστών μας κρατούν το όραμα ζωντανό και αποτελούν την κινητήρια δύναμη για την συνεχή εξέλιξη της ΕΥΡΩΓΝΩΣΗ και για νέες κατακτήσεις στον χώρο της ξενόγλωσσης εκπαίδευσης. Ελάτε σε ένα από τα κέντρα EuroLearn και απολαύστε μια πραγματικά μοναδική μαθησιακή εμπειρία με την μέθοδο Learn® που μόνο η EuroLearn μπορεί να σας παρέχει!<br /><br /></p>
<h2>Όμιλος με Όραμα</h2>
<p><br />Ακαδημαϊκή υπεροχή στους μαθητές μας μέσα από καινοτομία, συστηματικότητα, κερδοφόρο δίκτυο και δυνατό brand.</p>
<p>Το όραμά μας είναι η EuroLearn να γίνει ο <strong>παγκόσμιος ηγέτης στο χώρο της ξενόγλωσσης εκπαίδευσης</strong>, υποστηρίζοντας σήμερα ένα σύνολο 350 εταιριών που παντρεύουν το κοινωνικό έργο της εκπαίδευσης και την απόλυτη επιχειρηματικότητα με άξονα την ποιότητα και τις ξεκάθαρες οργανωτικές δομές.</p>',
            'logo' => '/images/schools/fake/eurognosi-logo.png',
            'background' => 51,
        ]);
        /*===============  10 iDance ================*/
        $school10 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'iDance ', 'email' => 'danzafuerte@gmail.com', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'iDance '])->id,
            'address' => 'Αριστοτέλους 39, Κέντρο',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310202020,
            'type_id' => 10,
            'website' => 'idance.com',
            'approved' => 2,
            'about' => '<div>Μέσα στα 17 χρόνια λειτουργίας εχουμε αποκτήσει την εμπειρια να καλύπτουμε τις αναγκες του κάθε μαθητη ξεχωριστά. Μια σχολή με προσωπικότητα και ενδιαφέρον. Μια μεγάλη οικογένεια χορού. Όλο το προσωπικό αλλά και ο Διευθυντής της σχολής είναι πάντα κοντά  στους μαθητές.</div>
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
<p>     Η Σχολή Χορού iDance με τη<strong> 20 έτη</strong> εμπειρία τους, μετατρέπει την τέχνη του χορού σε ένα είδος προσιτό σε όλες τις ηλικίες, για όλα τα γούστα και σε πολύ προσιτές τιμές ώστε να έχουν πρόσβαση όλοι όσοι θέλουν να εκφράσουν συναισθήματα και συνδυάσουν αρμονικά έκφραση και κίνηση.</p>
<p>Μαθαίνει τους ανθρώπους ν\' αποκτήσουν εμπειρίες με το σώμα τους, να κινηθούν, να χορέψουν. Στηρίζει τους εραστές της τέχνης και έκφρασης του χορού.</p>
<p>     Οι Σχολές Χορού iDance βρίσκονται κοντά σας εδώ και 20 χρόνια στην καρδιά της Θεσσαλονίκης  Αριστοτέλους 39 (παράρτημα) διδάσκοντας Λατινοαμερικάνικους (Rumba, Mambo,Cha Cha Cha, Swing, Jive, Paso Doble), Eυρωπαϊκούς (Tango, Waltz,Fox Trot, Vienna Waltz, Quick Step), Eλληνικούς και Mοντέρνους χορούς (Hip Hop, Street Dance, Free Style, R&amp;B). Επίσης υπάρχει η δυνατότητα να ασχοληθεί κανείς με Αθλητικό χορό - Οriental - Τango Αrgentine αλλά και με Kουβανέζικους ( Salsa, Bachata, Merenque, Rueda,Afro ). Ειναι πρωτοπόρος στα επαγγελματικά προγράμματα και δίνει τη δυνατότητα απόκτησης πτυχίων χορού καθώς στη σχολή διδάσκουν πλήθος καταξιωμένων και έμπειρων καθηγητών.</p>
<p>     Μέσα στα 20 χρόνια λειτουργίας έχει αποκτήσει πρωταθλήματα και κύπελλα Ελλάδος, τις μεγαλύτερες διακρίσεις σε διαγωνισμούς εντός και εκτός Ελλάδας. Τον Ιούνιο του 2014 επιτυγχάνει τη μεγαλύτερη διάκριση σε παγκόσμιο επίπεδο διοργανώνοντας τη μεγαλύτερη Salsa Rueda στον κόσμο κερδίζοντας μία θέση στο Βιβλίο των Record Guinness!!! </p>
</div>
</div>
</div>',
            'logo' => '/images/schools/fake/danzafuerte-logo.png',
            'background' => 56,
        ]);
        /*===============  11 Πυθαγόρειος Σχολή  ================*/
        $school11 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Πυθαγόρειος Σχολή', 'email' => 'info@epikourios.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'epikourios'])->id,
            'address' => 'Λεωφ. Γεωργικής Σχολής 4, Πυλαία',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310412412,
            'type_id' => 8,
            'website' => 'www.education.com',
            'approved' => 2,
            'about' => '<p class="homePadRight">Η Πυθαγόρειος Σχολή μέσα σ\' ένα ασφαλές περιβάλλον φροντίζει τους μαθητές της με αγάπη. Τους παρέχει πολύπλευρη εκπαίδευση και διαμορφώνει την προσωπικότητά τους.</p>
<p class="homePadRight">Tο προσωπικό μας είναι άριστα καταρτισμένο. Η εκπαιδευτική διαδικασία υποστηρίζεται με σύνολο εξειδικευμένων δασκάλων που καλλιεργούν και αναπτύσσουν τις δεξιότητες και τα χαρίσματα των μαθητών.</p>
<p class="homePadRight">Διδάσκονται τρεις ξένες γλώσσες, Αγγλικά, Γαλλικά και Γερμανικά, μέσα στις ώρες λειτουργίας του σχολικού προγράμματος. Στους νεοεγγραφόμενους μαθητές παραδίδονται μαθήματα ξένων γλωσσών για την ομαλή ένταξή τους στην τάξη. Επίσης, λαμβάνεται ιδιαίτερη μέριμνα για Δημιουργική Απασχόληση-Φύλαξη των παιδιών σε ώρες πέραν του ωρολογίου προγράμματος.</p>
<p class="homePadRight">Η συνεργασία Γονέων- Σχολείου αποτελεί βασικό παράγοντα της εκπαιδευτικής μας διαδικασίας. Η επίδοση και η διαγωγή των μαθητών μας αποτελεί καθημερινό μας μέλημα.</p>',
            'logo' => '/images/schools/fake/adamantios-logo.png',
            'background' => 65,
        ]);

        /*===============   12 AIT   ================*/
        $school12 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Athens Institute of Technology', 'email' => 'info@ait.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'AIT'])->id,
            'address' => 'Αχιλλέως 45',
            'city' => 'Αθήνα',
            'phone' => 2104747474,
            'type_id' => 1,
            'website' => 'mit.com',
            'approved' => 2,
            'about' => 'Στο Athens Institute of Technology πιστεύουμε ότι υπάρχουν αρκετοί λόγοι για να σπουδάσει κανείς στο Κολλέγιό μας. Υπάρχουν, ωστόσο, κάποιοι λόγοι που επισημαίνουν οι σπουδαστές και οι καθηγητές μας και για τους οποίους είμαστε ιδιαιτέρως υπερήφανοι:

Σπουδάζετε σε ένα πραγματικά υποστηρικτικό περιβάλλον που έχει επίκεντρο το σπουδαστή και στο οποίο έχετε άμεση και εκτενή επικοινωνία με τους καθηγητές σας.
Με την ολοκλήρωση των σπουδών σας στο Athens Institute of Technology λαμβάνετε Πτυχίο Αμερικανικού Πανεπιστημίου και αποκτάτε τις κατάλληλες επαγγελματικές δεξιότητες και πιστοποιήσεις.
Από την αρχή των σπουδών σας μέχρι και την αποφοίτησή σας, συνεργάζεστε με τον Σύμβουλο Σταδιοδρομίας του Athens Institute of Technology, ο οποίος θα σας βοηθήσει να δημιουργήσετε ένα ισχυρό σύνολο δεξιοτήτων και εμπειριών για τη μετέπειτα επαγγελματική σας σταδιοδρομία.
Θα αποκτήσετε εξαιρετικές επικοινωνιακές δεξιότητες στο γραπτό και προφορικό λόγο στα Αγγλικά.
Οι καθηγητές μας διαθέτουν διεθνές ακαδημαϊκό προφίλ, ενεργή δράση στην έρευνα και αποδίδουν ιδιαίτερη έμφαση στην ποιότητα της διδασκαλίας.',
            'logo' => '/images/schools/fake/haec-logo.png',
            'background' => 74,
        ]);
        /*===============   13 European   ================*/
        $school13 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'The European College of Greece', 'email' => 'info@European.edu', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'European'])->id,
            'address' => 'Βασ. Κωνσταντίνου 84, Βάρη',
            'city' => 'Αθήνα',
            'phone' => 2104006000,
            'type_id' => 1,
            'website' => 'europe.edu',
            'approved' => 2,
            'about' => 'Founded in Smyrna, Asia Minor, in 1875, by missionaries from Boston, Massachusetts, The European College of Greece is the oldest and largest US accredited college or university in Europe.
For over 140 years, ECG has been offering transformative education and cultivating a fertile intellectual and cultural collaboration between Greece and the United States.
ECG is an independent, not for profit, nonsectarian, co-educational academic institution. To add distinctive and sustainable value to our students as well as Greece, American education, Hellenic heritage, and the global community through transformative teaching, scholarship, and service. The Admissions Office offers one on one consultations with candidates and their families, conducts tours of the ACG Campus, and organizes information sessions throughout the year. Several times a year, we offer Discover Deree Days, designed to familiarize candidates and their families with the full range of the College’s programs and services.',
            'logo' => '/images/schools/fake/acg-logo.png',
            'background' => 80,
        ]);
        /*===============   14 Newtonian   ================*/
        $school14 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Newtonian College', 'email' => 'info@Newtonian.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'aegean'])->id,
            'address' => 'Μίκρας Ασίας 43',
            'city' => 'Πειραιάς',
            'phone' => 2103030303,
            'type_id' => 1,
            'website' => 'Newtonian.com',
            'approved' => 2,
            'about' => 'Το Newtonian College διαθέτει υψηλό επίπεδο σε ανθρώπινο δυναμικό, υλικοτεχνική υποδομή καθώς και πολύχρονη εμπειρία σε τριτοβάθμια εκπαίδευση, ώστε να εξασφαλίζει την μέγιστη ποιότητα σπουδών για τους φοιτητές του. Το Newtonian College και οι άνθρωποί του εφαρμόζουν στην πράξη την διαχρονική αξία της ανθρωπιστικής παιδείας ταυτόχρονα με τις νέες θεωρίες  της τεχνολογικής εκπαίδευσης. Με βάση αυτήν τη θεμελιώδη αρχή οι στόχοι του Κολεγίου είναι:
Η διασφάλιση της ποιότητας στο σύνολο των λειτουργιών του Κολεγίου.
Η οργάνωση και η ανανέωση τόσο της εκπαιδευτικής διαδικασίας όσο και των ακαδημαϊκών προγραμμάτων με κριτήριο τις απαιτήσεις της σύγχρονης ελληνικής αλλά και της ευρωπαϊκής εκπαιδευτικής πραγματικότητας.
Η δημιουργία και η εφαρμογή ενός στρατηγικού πλάνου ανάπτυξης που προβλέπει τις αλλαγές και τα νέα δεδομένα στην ελληνική και ευρωπαϊκή κοινωνία.
Η ανάπτυξη και η κινητοποίηση των δημιουργικών δυνατοτήτων και δεξιοτήτων των σπουδαστών επεκτείνοντας την εκπαίδευσή τους και την προσωπική τους καλλιέργεια.
Η εφαρμογή μιας ενιαίας πολιτικής με στόχο την συστηματική επιμόρφωση των ανθρώπινων πόρων του Κολεγίου.
Η διαρκής ανανέωση του υλικοτεχνικού εξοπλισμού του Κολεγίου και η εφαρμογή καινοτόμων λύσεων που διασφαλίζουν το υψηλότερο δυνατό εκπαιδευτικό αποτέλεσμα.
Η οργάνωση προγραμμάτων διά βίου μάθησης με στόχο την επιμόρφωση ενηλίκων και επαγγελματιών με την εφαρμογή των πλέον εξελιγμένων μεθόδων και μέσων στην εκπαιδευτική διαδικασία, όπως το σύγχρονο και ασύγχρονο e-learning.',
            'logo' => '/images/schools/fake/aegean-logo.png',
            'background' => 83,
        ]);
        /*===============   15 Thessaloniki Business College   ================*/
        $school15 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Thessaloniki Business College', 'email' => 'info@dei.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'dei'])->id,
            'address' => 'Εθνικής Αμύνης 48',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310252525,
            'type_id' => 1,
            'website' => 'business.com',
            'approved' => 2,
            'about' => 'Το Thessaloniki Business College είναι ένα Κέντρο Μεταλυκειακής Εκπαίδευσης που ιδρύθηκε το 2009 και έλαβε άδεια λειτουργίας από το Υπουργείο Δια Βίου Μάθησης και Θρησκευμάτων τον Ιούλιο του 2010. Λειτουργούσε όμως ως Εργαστήριο Ελευθέρων Σπουδών από το 1990. Είναι επίσης μέλος ενός μεγαλύτερου εκπαιδευτικού οργανισμού που ιδρύθηκε το 1967.
Σκοπός του Thessaloniki Business College είναι να παρέχει ποιοτική εκπαίδευση σε ανθρώπους με ποικίλη εκπαιδευτική εμπειρία, σε ένα ευχάριστο περιβάλλον οργανωμένο με σχολαστικότητα και με αυστηρά επιλεγμένο εκπαιδευτικό προσωπικό.
Μέσα από την εμπειρία χρόνων και τη στενή επαφή με φημισμένα Βρετανικά πανεπιστήμια, το DEI μπορεί πλέον να διδάσκει προγράμματα που αξιολογούνται και θεωρούνται ως εφάμιλλα εκείνων που διδάσκονται στη Βρετανία.
Οι απόφοιτοί του έχουν στελεχώσει μεγάλες Ελληνικές και διεθνείς επιχειρήσεις.',
            'logo' => '/images/schools/fake/dei-logo.png',
            'background' => 93,
        ]);

        /*===============   16 Centric COLLEGE   ================*/
        $school18 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Impeccable Centric College', 'email' => 'info@Centric.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'Centric'])->id,
            'address' => 'Αριστοτέλους 24',
            'city' => 'Λάρισα',
            'phone' => 24105554444,
            'type_id' => 1,
            'website' => 'Centric.edu.com',
            'approved' => 2,
            'about' => 'Το Impeccable Centric College είναι το Διεθνές Τμήμα του University of Centric και εδρεύει στη Λάρισα. Το Πανεπιστήμιο του Centric είναι ένα από τα παλαιότερα, μεγαλύτερα και καλύτερα κρατικά Πανεπιστήμια της Αγγλίας. Στις παγκόσμιες κατατάξεις βρίσκεται συνεχώς ανάμεσα στα 100 καλύτερα πανεπιστήμια του κόσμου, ενώ στο δυναμικό του συγκαταλέγονται 6 νομπελίστες. Ανήκει στο 1% των καλύτερων Πανεπιστημίων του κόσμου και κατατάσσεται: 29º στην Ευρώπη και 84º στον κόσμο [QS World University Rankings 2016].Το CITY College ιδρύθηκε το 1989 στη Θεσσαλονίκη και έχει καθιερωθεί κατά την εικοσαπενταετή πορεία του ως ένα από τα καλύτερα εκπαιδευτικά ιδρύματα της νοτιοανατολικής Ευρώπης. Δεν είναι απλά ένα συνεργαζόμενο κολέγιο με ξένο πανεπιστήμιο, αλλά ένα πλήρες και αναπόσπαστο κομμάτι του University of Sheffield που λειτουργεί εκτός Βρετανίας με τους ίδιους όρους και κανονισμούς, υπόκειται στους ίδιους ελέγχους αξιολόγησης και προσφέρει τα ίδια προνόμια και τις ίδιες παροχές σπουδών στους φοιτητές του.',
            'logo' => '/images/schools/fake/citycol-logo.png',
            'background' => 97,
        ]);



        factory(App\Models\Student::class, 30)->create();
        factory(App\Models\Teacher::class, 20)->create();



        /*===============  17 ΙΕΚ BeeWin ΙΩΑΝΝΙΝΑ ================*/
        $school21 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => ' IEK BeeWin Ιωάννινα', 'email' => 'ioannina@BeeWin.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'BeeWin'])->id,
            'address' => 'Λεωφ. Δωδώνης 35',
            'city' => 'Ιωάννινα',
            'phone' => 2651074444,
            'type_id' => 2,
            'website' => 'education.com',
            'about' => 'Στην πλούσια και μακρόχρονη πορεία μας μάθαμε τούτο:
         Ότι το πετυχημένο "επαγγελματικό σχολείο" πρέπει να δημιουργεί ολοκληρωμένους επαγγελματίες. Δεν διδάσκει απλώς μία εξειδίκευση. Οικοδομεί με όλα τα μέσα, όλο το γνωστικό αντικείμενο και πέρα από αυτό. Για αυτόν το λόγο το 60% του εκπαιδευτικού μας προγράμματος είναι πρακτικές εφαρμογές. Για αυτόν το λόγο το 70% του εκπαιδευτικού μας προσωπικού είναι αναγνωρισμένα στελέχη και πάνω απ’ όλα πετυχημένοι επαγγελματίες, με δραστηριότητα στις μεγαλύτερες εταιρείες της Αγοράς. Για αυτόν το λόγο παρέχουμε πρόσθετες δυνατότητες  για επιμόρφωση, δημιουργικότητα, κοινωνικότητα.  Και για τον ίδιο λόγο συνδέσαμε άμεσα τις σχολές μας με την Αγορά Εργασίας. Εταιρείες – ηγέτες στο χώρο τους, μέσα από την προσωπική επαφή, μεταδίδουν στους σπουδαστές όλη την κουλτούρα του επαγγέλματος. Τρέφουν τη φιλοδοξία τους  καθώς και την αισιοδοξία τους για τη σταδιοδρομία. Φροντίζουμε λοιπόν, να δίνουμε ευκαιρίες στους εκπαιδευόμενους να καλλιεργήσουν  τα ταλέντα τους, να αναπτύξουν τα προσωπικά τους χαρακτηριστικά. Σε τελική ανάλυση, δημιουργούμε σύγχρονους πολίτες, κοινωνικά ολοκληρωμένες  προσωπικότητες, όχι απλώς επαγγελματίες. Στην  προσωπική σας επαφή μαζί μας, θα διαπιστώσετε την αμεσότητα που  χαρακτηρίζει τη συνεργασία μας με τη σπουδαστική μας κοινότητα. Θα επιβεβαιώσετε τις ευκαιρίες διείσδυσης που παρέχουμε στον κλάδο επιλογής σας αλλά και στην ευρύτερη κοινωνία.',
            'approved' => 2,
            'logo' => '/images/schools/fake/delta-logo.png',
            'background' => 103,
        ]);

        /*===============  18 IEK Full Studies ΗΡΑΚΛΕΙΟ================*/
        $school22 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'IEK Full Studies Ηράκλειο', 'email' => 'infoH@full.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'fullSt'])->id,
            'address' => 'Αριστοτέλους, 20',
            'city' => 'Ηράκλειο Κρήτης',
            'phone' => 28103203203,
            'type_id' => 2,
            'website' => 'educate.gr',
            'about' => '<h4><em>Αγαπητοί νέοι και νέες ,</em></h4>
<p style="text-align: justify;">Στα 40 και πλέον χρόνια της ηγετικής πορείας μας στο χώρο της εκπαίδευσης μένουμε πιστοί στο όραμά μας για μια πρωτοπόρα επαγγελματική εκπαίδευση, βασισμένη στα Διεθνή Πρότυπα.<br />Στο IEK Full Studies παρέχουμε υψηλής ποιότητας εκπαίδευση που διασφαλίζεται από συνεχείς επενδύσεις σε υψηλού επιπέδου συνεργασίες, οι οποίες λειτουργούν ως συνδετικός κρίκος μεταξύ του εκπαιδευτικού και επαγγελματικού περιβάλλοντος, σε νέες τεχνολογίες και σε κορυφαίες υλικοτεχνικές και κτιριακές υποδομές.<br />Στο ΙΕΚ Full Studies πρωτοπορούμε με τη δημιουργία νέων ειδικοτήτων υψηλής απορρόφησης  από την αγορά εργασίας, αλλά και τη διαρκή έρευνα αγοράς για προγράμματα εξειδίκευσης και πιστοποιήσεις υψηλού επιπέδου που θα σας ξεχωρίσουν στον επαγγελματικό στίβο.<br />Στην ιστοσελίδα μας μπορείτε να βρείτε γενικές πληροφορίες για τη φοίτησή σας σε κάθε μία από τις ειδικότητες που παρέχονται, οι οποίες είναι ομαδοποιημένες σε 12 τομείς σπουδών.</p>
<p style="text-align: justify;">Όλοι μας υπηρετούμε το δικαίωμά σας να κάνετε τα όνειρά σας πραγματικότητα και γι’ αυτό είμαστε εδώ, έτοιμοι να σας καλωσορίσουμε στη μεγάλη οικογένειά μας και να σας διδάξουμε τον τρόπο με τον οποίο θα ενταχθείτε κι εσείς στους καταξιωμένους επαγγελματίες του μέλλοντος!</p>
',
            'approved' => 2,
            'logo' => '/images/schools/fake/akmi-logo.png',
            'background' => 108,
        ]);



        foreach (School::all() as $school) {
            $scholarshipLimit = new App\Models\ScholarshipLimit;
            $scholarshipLimit->school_id = $school->id;
            $scholarshipLimit->save();
        }
//

//        for ($i = 0; $i < 9; $i++) {
        //            factory(App\Models\School::class)->create(['user_id' => factory(App\User::class)->create(['role' => 'school'])->id]);
        //        }

        /*===============   1 south   ================*/
        $this->createImages($school1, '/images/schools/fake/act-', 1, 5);
        $this->createStudy($school1, [206, 207, 208, 209, 210, 253, 252, 279, 306, 308, 309, 312, 324]);
        $this->createUsers($school1, 'students', [21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38]);
        $this->createUsers($school1, 'teachers', [51, 52, 53, 54, 55, 56, 57, 58]);
        $this->createScholarship($school1->id, 1, 20, 207, 1, 1, 1, 1);
        $this->createScholarship($school1->id, 2, 800, 310, 1, 2, 2, 2);
        $this->createScholarship($school1->id, 1, 50, 210, 1, 3, 2, 1);
        $this->createScholarship($school1->id, 2, 500, 209, 1, 4, 2, 1);
        $this->createScholarship($school1->id, 2, 800, 310, 3, 5, 2, 2);
        $this->createScholarship($school1->id, 2, 900, 279, 1, 1, 2, 2);
        $this->createScholarship($school1->id, 1, 30, 209, 1, 2, 2, 1);
        $this->createScholarship($school1->id, 1, 100, 324, 3, 3, 2, 2);
        $this->createScholarship($school1->id, 2, 950, 309, 3, 4, 2, 2);
        // MultiScholarship
        $this->createScholarship($school1->id, 2, 800, [209, 207, 210], 1, 2, 2, 2, true);
        /*===============  2 polytec ================*/
        $this->createImages($school2, '/images/schools/fake/amc-', 1, 7);
        $this->createStudy($school2, [202, 203, 204, 205, 240, 241, 244, 245, 246, 249, 250, 255, 256, 257, 258, 259, 260, 261,
            266, 267, 268, 269, 270, 281, 282, 283, 284, 285, 286, 287, 327, 328, 329, 330, 331, 332, 345, 346, 349, 350, 351, 352]);
        $this->createUsers($school2, 'students', [21, 22, 23, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49]);
        $this->createUsers($school2, 'teachers', [58, 59, 61, 62, 64, 65, 66, 67]);
        $this->createScholarship($school2->id, 2, 500, 240, 1, 1, 1, 5);
        $this->createScholarship($school2->id, 1, 30, 350, 3, 2, 1, 4);
        $this->createScholarship($school2->id, 2, 600, 202, 1, 3, 1, 8);
        $this->createScholarship($school2->id, 1, 40, 328, 3, 2, 1, 5);
        $this->createScholarship($school2->id, 2, 1000, 257, 1, 1, 1, 5);
        $this->createScholarship($school2->id, 1, 50, 331, 1, 3, 1, 5);
        $this->createScholarship($school2->id, 1, 80, 327, 3, 4, 1, 5);
        $this->createScholarship($school2->id, 2, 800, 250, 1, 4, 1, 5);
        /*===============  3 Full Studies ================*/
        $this->createImages($school3, '/images/schools/fake/akmi-', 1, 7);
        $this->createUsers($school3, 'students', [31, 32, 33, 34, 35, 36, 37, 38]);
        $this->createUsers($school3, 'teachers', [55, 56, 57, 58]);
        $this->createStudy($school3, [1, 4, 6, 8, 11, 13, 15, 17, 18, 19, 20, 22, 24, 25, 28, 29,
            33, 34, 41, 44, 46, 47, 38, 50, 51, 52, 54, 55, 56, 57, 58, 59,
            65, 67, 69, 71, 73, 77, 78, 79,
            81, 86, 89, 90, 91, 94, 96, 97, 98,
            106, 108, 110, 113, 124, 125, 127, 130, 132, 134, 136, 140, 141, 142,
            146, 147, 149, 151, 155, 157, 159, 161, 163, 165, 167, 169, 174, 175, 177, 178, 179, 180]);
        $this->createScholarship($school3->id, 2, 600, 4, 2, 1, 1, 1);
        $this->createScholarship($school3->id, 1, 40, 8, 2, 2, 1, 2);
        $this->createScholarship($school3->id, 2, 1000, 33, 2, 3, 1, 3);
        $this->createScholarship($school3->id, 1, 90, 34, 2, 4, 1, 4);
        $this->createScholarship($school3->id, 2, 400, 86, 2, 5, 1, 0);
        $this->createScholarship($school3->id, 1, 50, 108, 2, 1, 1, 5);
        $this->createScholarship($school3->id, 2, 700, 109, 2, 1, 1, 5);
        // MultiScholarship
        $this->createScholarship($school3->id, 2, 800, [108, 86, 34, 33], 3, 2, 2, 2, true);
        /*===============  4 Δημήτρια Εκπαιδευτήρια ================*/
        $this->createStudy($school4, [423, 424, 425]);
        $this->createImages($school4, '/images/schools/fake/vasileiadi-', 1, 5);
        $this->createUsers($school4, 'students', [31, 42, 43, 44, 34, 35]);
        $this->createUsers($school4, 'teachers', [52, 63, 64, 65]);
        $this->createScholarship($school4->id, 2, 400, 423, 4, 1, 1, 1);
        $this->createScholarship($school4->id, 1, 30, 424, 5, 2, 1, 0);
        $this->createScholarship($school4->id, 2, 300, 425, 6, 3, 1, 3);
        $this->createScholarship($school4->id, 1, 60, 423, 6, 2, 1, 3);
        $this->createScholarship($school4->id, 1, 20, 423, 4, 2, 1, 3);
        /*===============  5 Εκπαιδευτήρια Δημοκριτος ================*/
        $this->createStudy($school5, [423, 424, 425]);
        $this->createImages($school5, '/images/schools/fake/fryganioti-', 1, 8);
        $this->createUsers($school5, 'students', [31, 32, 23, 24, 34, 35]);
        $this->createUsers($school5, 'teachers', [52, 53, 64, 65]);
        $this->createScholarship($school5->id, 2, 850, 423, 4, 1, 1, 0);
        $this->createScholarship($school5->id, 1, 30, 424, 5, 2, 1, 0);
        $this->createScholarship($school5->id, 2, 200, 425, 6, 3, 1, 0);
        $this->createScholarship($school5->id, 1, 40, 425, 6, 3, 1, 0);
        /*===============   6 Sanford   ================*/
        $this->createImages($school6, '/images/schools/fake/newyork-', 1, 5);
        $this->createStudy($school6, [211, 212, 213, 214, 215, 216, 217, 218, 219, 220, 227, 234, 235, 237, 242, 243, 247, 248, 250, 252, 258, 262, 265, 270, 271, 272, 273, 274, 295, 296, 297,
            313, 317, 318, 319, 320, 321, 325, 329, 322, 332, 333, 334, 346, 347, 352]);
        $this->createUsers($school6, 'students', [21, 22, 23, 24, 25]);
        $this->createUsers($school6, 'teachers', [51, 52, 53, 70]);
        $this->createScholarship($school6->id, 1, 30, 234, 1, 1, 1, 1);
        $this->createScholarship($school6->id, 2, 900, 270, 1, 2, 2, 2);
        $this->createScholarship($school6->id, 1, 40, 296, 1, 4, 2, 0);
        $this->createScholarship($school6->id, 2, 400, 352, 3, 3, 2, 1);
        /*===============  7 Φροντιστήρια Μ.Ε.Επιτυχία ================*/
        $this->createStudy($school7, [353, 354, 355, 356, 357, 358, 359, 426, 427, 428, 429]);
        $this->createImages($school7, '/images/schools/fake/ypodomi-', 1, 6);
        $this->createUsers($school7, 'students', [31, 32, 33, 34, 44, 45, 46, 47, 48, 49, 50, 51]);
        $this->createUsers($school7, 'teachers', [52, 53, 54, 55, 56]);
        $this->createScholarship($school7->id, 2, 400, 353, 5, 1, 1, 1);
        $this->createScholarship($school7->id, 1, 30, 356, 6, 2, 1, 0);
        $this->createScholarship($school7->id, 2, 300, 358, 6, 4, 3, 3);
        $this->createScholarship($school7->id, 1, 50, 426, 6, 4, 3, 3);
        /*===============  8 Εκπαιδευτηρια Μακεδονίας ================*/
        $this->createStudy($school8, [430, 431, 432]);
        $this->createImages($school8, '/images/schools/fake/eap-', 1, 7);
        $this->createUsers($school8, 'students', [21, 22, 23, 24, 38, 39, 40, 41, 42, 44, 50]);
        $this->createUsers($school8, 'teachers', [52, 53, 54, 55, 56]);
        $this->createScholarship($school8->id, 2, 400, 430, 13, 1, 1, 1);
        $this->createScholarship($school8->id, 1, 30, 431, 14, 2, 1, 0);
        $this->createScholarship($school8->id, 2, 300, 432, 15, 1, 1, 3);
        /*===============  9 Ξένες Γλώσσες  EuroLearn ================*/
        $this->createStudy($school9, [360, 361, 362, 363, 371, 372, 373, 382, 384, 387, 388, 390]);
        $this->createImages($school9, '/images/schools/fake/eurognosi-', 1, 5);
        $this->createUsers($school9, 'students', [31, 32, 33, 34, 43, 45]);
        $this->createUsers($school9, 'teachers', [52, 53, 54, 55]);
        $this->createScholarship($school9->id, 2, 400, 360, 22, 1, 1, 1);
        $this->createScholarship($school9->id, 1, 30, 372, 23, 2, 1, 0);
        $this->createScholarship($school9->id, 2, 300, 373, 23, 1, 1, 3);
        $s = $this->createScholarship($school9->id, 3, 2, 390, 24, 1, 1, 3);
        /*===============  10 iDance ================*/
        $this->createStudy($school10, [393, 395, 396, 397, 402, 403, 409, 410, 413, 414, 415, 422]);
        $this->createImages($school10, '/images/schools/fake/danzafuerte-', 1, 8);
        $this->createUsers($school10, 'students', [41, 42, 43, 44, 45, 46, 47]);
        $this->createUsers($school10, 'teachers', [52, 53, 64, 65, 66, 68]);
        $this->createScholarship($school10->id, 2, 100, 393, 25, 1, 1, 1);
        $this->createScholarship($school10->id, 1, 10, 397, 25, 2, 1, 0);
        $this->createScholarship($school10->id, 2, 200, 410, 26, 1, 1, 3);
        $this->createScholarship($school10->id, 3, 1, 422, 27, 1, 1, 3);
        /*===============  11 Πυθαγόρειος Σχολή ================*/
        $this->createStudy($school11, [433, 434, 435, 436, 437, 438]);
        $this->createImages($school11, '/images/schools/fake/adamantios-', 1, 7);
        $this->createUsers($school11, 'students', [31, 32, 33, 44, 46, 50]);
        $this->createUsers($school11, 'teachers', [52, 53, 54, 59, 60, 61]);
        $this->createScholarship($school11->id, 2, 100, 433, 16, 2, 1, 1);
        $this->createScholarship($school11->id, 1, 10, 434, 17, 2, 1, 0);
        $this->createScholarship($school11->id, 2, 200, 437, 20, 1, 1, 3);
        $this->createScholarship($school11->id, 1, 30, 438, 21, 2, 1);

        /*===============   12 AIT ================*/
        $this->createImages($school12, '/images/schools/fake/haec-', 1, 9);
        $this->createStudy($school12, [216, 217, 208, 220, 211, 270, 274, 277, 281, 282, 283, 295, 296, 297, 309, 327, 339, 343]);
        $this->createUsers($school12, 'students', [21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 35]);
        $this->createUsers($school12, 'teachers', [51, 52, 53, 54, 55, 56]);
        $this->createScholarship($school12->id, 1, 20, 217, 1, 1, 1, 1);
        $this->createScholarship($school12->id, 2, 650, 309, 3, 2, 2, 2);
        $this->createScholarship($school12->id, 1, 45, 270, 1, 3, 2, 1);
        $this->createScholarship($school12->id, 2, 700, 277, 1, 4, 2, 1);
        $this->createScholarship($school12->id, 2, 900, 281, 1, 2, 2, 2);
        $this->createScholarship($school12->id, 2, 1000, 327, 3, 2, 2, 2);
        /*===============   13 European  ================*/
        $this->createImages($school13, '/images/schools/fake/acg-', 1, 6);
        $this->createStudy($school13, [210, 211, 212, 216, 217, 208, 230, 209, 254, 256, 260, 306, 308, 309, 312, 324]);
        $this->createUsers($school13, 'students', [22, 24, 26, 27, 28, 29, 31, 36, 37, 40, 41, 43, 44]);
        $this->createUsers($school13, 'teachers', [51, 52, 53, 54, 55, 57, 58]);
        $this->createScholarship($school13->id, 1, 30, 217, 1, 1, 1, 1);
        $this->createScholarship($school13->id, 2, 800, 308, 3, 2, 2, 2);
        $this->createScholarship($school13->id, 1, 40, 211, 1, 3, 2, 1);
        $this->createScholarship($school13->id, 2, 500, 254, 1, 4, 2, 1);
        $this->createScholarship($school13->id, 2, 400, 312, 1, 2, 2, 2);
        $this->createScholarship($school13->id, 2, 900, 310, 3, 2, 2, 2);
        $this->createScholarship($school13->id, 1, 50, 324, 3, 2, 2, 2);
        $this->createScholarship($school13->id, 2, 200, 256, 1, 4, 2, 1);
        /*===============   14 Newtonian ================*/
        $this->createImages($school14, '/images/schools/fake/aegean-', 1, 5);
        $this->createStudy($school14, [210, 220, 249, 250, 263, 266, 265, 267, 256, 257, 306, 308, 309, 312, 322, 327]);
        $this->createUsers($school14, 'students', [21, 22, 23, 24, 25, 26, 27, 28, 29, 38, 39]);
        $this->createUsers($school14, 'teachers', [51, 52, 53, 54, 58, 59]);
        $this->createScholarship($school14->id, 1, 20, 220, 1, 1, 1, 1);
        $this->createScholarship($school14->id, 2, 800, 310, 3, 2, 2, 2);
        $this->createScholarship($school14->id, 1, 60, 249, 1, 3, 2, 1);
        $this->createScholarship($school14->id, 2, 500, 250, 1, 4, 2, 1);
        $this->createScholarship($school14->id, 2, 750, 306, 1, 2, 2, 2);
        $this->createScholarship($school14->id, 2, 950, 327, 3, 2, 2, 2);
        $this->createScholarship($school14->id, 1, 50, 266, 1, 3, 2, 1);

        /*===============   15 Thessaloniki Business College  ================*/
        $this->createImages($school15, '/images/schools/fake/dei-', 1, 6);
        $this->createStudy($school15, [265, 268, 269, 216, 217, 208, 209, 211, 254, 256, 279, 306, 308, 309, 312, 324]);
        $this->createUsers($school15, 'students', [21, 22, 23, 24, 25, 26, 27]);
        $this->createUsers($school15, 'teachers', [51, 52, 53, 54]);
        $this->createScholarship($school15->id, 1, 20, 265, 1, 1, 1, 1);
        $this->createScholarship($school15->id, 2, 800, 312, 3, 2, 2, 2);
        $this->createScholarship($school15->id, 1, 70, 226, 1, 3, 2, 1);
        $this->createScholarship($school15->id, 2, 500, 269, 1, 4, 2, 1);
        $this->createScholarship($school15->id, 2, 1000, 308, 1, 2, 2, 2);
        $this->createScholarship($school15->id, 2, 800, 310, 3, 2, 2, 2);

        /*===============   16 Centric COLLEGE  COLLEGE   ================*/
        $this->createImages($school18, '/images/schools/fake/citycol-', 1, 6);
        $this->createStudy($school18, [265, 268, 269, 216, 217, 208, 209, 211, 254, 256, 279, 306, 308, 309, 312, 324]);
        $this->createUsers($school18, 'students', [21, 22, 23, 24, 25, 26, 27, 28]);
        $this->createUsers($school18, 'teachers', [51, 52, 53, 54, 55]);
        $this->createScholarship($school18->id, 1, 40, 265, 1, 1, 1, 1);
        $this->createScholarship($school18->id, 2, 800, 312, 3, 2, 2, 2);
        $this->createScholarship($school18->id, 1, 30, 226, 1, 3, 2, 1);
        $this->createScholarship($school18->id, 1, 100, 269, 1, 4, 2, 1);
        $this->createScholarship($school18->id, 2, 300, 308, 1, 2, 2, 2);
        $this->createScholarship($school18->id, 2, 800, 324, 3, 2, 2, 2);
        $this->createScholarship($school18->id, 2, 800, 310, 3, 2, 2, 2);
        $this->createScholarship($school18->id, 1, 30, 224, 1, 3, 2, 1);
        $this->createScholarship($school18->id, 1, 100, 276, 1, 4, 2, 1);
        $this->createScholarship($school18->id, 2, 300, 300, 1, 2, 2, 2);
        $this->createScholarship($school18->id, 2, 800, 305, 3, 2, 2, 2);


        /*=============== 17 IEK BeeWin ΙΩΑΝΝΙΝΑ ================*/
        $this->createImages($school21, '/images/schools/fake/deltaioa-', 1, 5);
        $this->createUsers($school21, 'students', [30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40]);
        $this->createUsers($school21, 'teachers', [51, 55, 56, 57, 58, 59]);
        $this->createStudy($school21, [1, 2, 4, 6, 8, 11, 13, 15, 17, 18, 19, 20, 22, 24, 25, 28, 29,
            33, 34, 41, 44, 46, 47, 38, 50, 51, 52, 54, 55, 56, 57, 58, 59,
            65, 67, 69, 71, 73, 77, 78, 79,
            81, 86, 89, 90, 91, 94, 96, 97, 98,
            106, 108, 110, 113, 124, 125, 127, 130, 132, 134, 136, 140, 141, 142,
            146, 147, 149, 151, 155, 157, 159, 161, 163, 165, 167, 169, 174, 175, 177, 178, 179, 180]);
        $this->createScholarship($school21->id, 2, 300, 2, 2, 1, 1, 1);
        $this->createScholarship($school21->id, 1, 40, 19, 2, 2, 1, 2);
        $this->createScholarship($school21->id, 2, 1000, 22, 2, 1, 1, 3);
        $this->createScholarship($school21->id, 1, 90, 38, 2, 4, 1, 4);
        $this->createScholarship($school21->id, 2, 400, 97, 2, 5, 1, 0);
        $this->createScholarship($school21->id, 1, 50, 130, 2, 1, 1, 5);
        $this->createScholarship($school21->id, 2, 600, 147, 2, 5, 1, 0);
        $this->createScholarship($school21->id, 1, 20, 180, 2, 1, 1, 5);

        /*=============== 18 Full Studies Ηρακλειο ================*/
        $this->createImages($school22, '/images/schools/fake/akmicrete-', 1, 9);
        $this->createUsers($school22, 'students', [31, 32, 33, 34, 35, 36, 37, 38, 39, 40]);
        $this->createUsers($school22, 'teachers', [55, 56, 57, 58, 59]);
        $this->createStudy($school22, [1, 4, 6, 8, 11, 13, 15, 17, 18, 19, 20, 22, 24, 25, 28, 29,
            33, 34, 41, 44, 46, 47, 38, 50, 51, 52, 54, 55, 56, 57, 58, 59,
            65, 67, 69, 71, 73, 77, 78, 79,
            81, 86, 89, 90, 91, 94, 96, 97, 98,
            106, 108, 110, 113, 124, 125, 127, 130, 132, 134, 136, 140, 141, 142,
            146, 147, 149, 151, 155, 157, 159, 161, 163, 165, 167, 169, 174, 175, 177, 178, 179, 180]);
        $this->createScholarship($school22->id, 2, 700, 17, 2, 1, 1, 1);
        $this->createScholarship($school22->id, 1, 40, 18, 2, 2, 1, 2);
        $this->createScholarship($school22->id, 2, 1000, 25, 2, 1, 1, 3);
        $this->createScholarship($school22->id, 1, 90, 46, 2, 4, 1, 4);
        $this->createScholarship($school22->id, 2, 400, 94, 2, 5, 1, 0);
        $this->createScholarship($school22->id, 2, 600, 96, 2, 5, 1, 0);
        $this->createScholarship($school22->id, 1, 60, 175, 2, 1, 1, 5);



        $this->createTerms($school1->id, '<ul>
<li>Οι υποψήφιοι που επιθυμούν να συμμετάσχουν στις εξετάσεις για προπτυχιακές σπουδές θα πρέπει να είναι <strong> έως 24 ετών </strong>.</li>
<li>Οι υποψήφιοι θα πρέπει να κατέχουν απολυτήριο του ενιαίου Λυκείου.</li>
<li>Οι υποψήφιοι θα πρέπει να είναι κάτοχοι πτυχίου Αγγλικών σε επίπεδο Β2 της τελευταίας διετίας.</li>
<li>Δεν έχουν δικαίωμα συμμετοχής στις υποτροφίες προπτυχιακών προγραμμάτων όσοι φοιτητές είναι ήδη εγγεγραμμένοι στο ACT.</li>
</ul>', true);
        $this->createTerms($school2->id, 'Κείμενο όρων συμμετοχής στην υποτροφία College. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ligula augue, f
        acilisis ut blandit sed, lobortis dignissim quam. Cras eros orci, mattis a tincidunt a, mollis in ex. Nam leo quam, molestie vel nisl et, sodales accumsan risus.
        Vestibulum eu ultricies nisi, eget facilisis ligula. Curabitur sit amet lacinia justo, non feugiat eros.', true);
        $this->createTerms($school3->id, 'Κείμενο όρων συμμετοχής στην υποτροφία IEK. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
        Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin viverra odio eget justo volutpat, ac scelerisque lacus malesuada. Morbi efficitur urna quis sapien
        viverra consectetur.', true);
        $this->createTerms($school11->id, 'Κείμενο όρων συμμετοχής στην υποτροφία', true);
        $this->createTerms($school11->id, '<strong>Όροι Υποτροφίας, Lorem Ipsum</strong>', false, 38);
        $this->createTerms($school11->id, '<strong>Όροι Υποτροφίας, Lorem Ipsum</strong>', false, $s->id);

        // Interested
        $this->interested(21, 1);
        $this->interested(22, 1);
        $this->interested(23, 1);
        $this->interested(24, 1);
        $this->interested(25, 1);
        $this->interested(21, 2);
        $this->interested(22, 2);
        $this->interested(30, 2);
        $this->interested(24, 2);
        $this->interested(22, 3);
        $this->interested(22, 4);
        $this->interested(32, 4);
        $this->interested(21, 5);
        $this->interested(23, 5);
        $this->interested(22, 5);
        $this->interested(21, 6);
        $this->interested(31, 10);
        $this->interested(40, 10);
        $this->interested(36, 10);
        $this->interested(42, 10);
        $this->interested(30, 10);
        $this->interested(49, 10);
        $this->interested(32, 10);
        $this->interested(43, 10);
        $this->interested(37, 11);
        $this->interested(38, 11);
        $this->interested(39, 11);
        $this->interested(40, 11);
        $this->interested(41, 11);
        $this->interested(21, 21);
        $this->interested(22, 21);
        $this->interested(23, 21);
        $this->interested(24, 21);
        $this->interested(25, 31);
        $this->interested(21, 32);
        $this->interested(22, 32);
        $this->interested(30, 42);
        $this->interested(24, 26);
        $this->interested(22, 36);
        $this->interested(22, 46);
        $this->interested(32, 46);
        $this->interested(21, 55);
        $this->interested(23, 55);
        $this->interested(22, 52);
        $this->interested(21, 60);
        $this->interested(31, 70);
        $this->interested(40, 70);
        $this->interested(37, 70);
        $this->interested(22, 22);
        $this->interested(30, 22);
        $this->interested(24, 26);
        $this->interested(22, 26);
        $this->interested(22, 26);
        $this->interested(32, 36);
        $this->interested(21, 35);
        $this->interested(23, 35);
        $this->interested(22, 32);
        $this->interested(21, 30);
        $this->interested(31, 40);
        $this->interested(40, 40);
        $this->interested(37, 40);
        $this->interested(32, 90);
        $this->interested(21, 90);
        $this->interested(23, 90);
        $this->interested(22, 90);
        $this->interested(21, 90);
        $this->interested(31, 90);
        $this->interested(40, 90);
        $this->interested(37, 90);
        $this->interested(32, 91);
        $this->interested(21, 91);
        $this->interested(23, 91);
        $this->interested(22, 91);
        $this->interested(21, 92);
        $this->interested(31, 92);
        $this->interested(40, 92);
        $this->interested(37, 92);

        // Αιτούντες μαθητες αν υποτροφία (user, scholarship)
        $this->userAppliedOnScholarship(21, 1);
        $this->userAppliedOnScholarship(22, 1);
        $this->userAppliedOnScholarship(23, 1);
        $this->userAppliedOnScholarship(24, 1);
        $this->userAppliedOnScholarship(25, 1);
        $this->userAppliedOnScholarship(26, 1);
        $this->userAppliedOnScholarship(27, 1);
        $this->userAppliedOnScholarship(27, 2);
        $this->userAppliedOnScholarship(29, 3);
        $this->userAppliedOnScholarship(30, 4);
        $this->userAppliedOnScholarship(31, 4);
        $this->userAppliedOnScholarship(34, 4);
        $this->userAppliedOnScholarship(35, 4);
        $this->userAppliedOnScholarship(21, 5);
        $this->userAppliedOnScholarship(22, 5);
        $this->userAppliedOnScholarship(23, 5);
        $this->userAppliedOnScholarship(22, 10);
        $this->userAppliedOnScholarship(23, 10);
        $this->userAppliedOnScholarship(24, 10);
        $this->userAppliedOnScholarship(25, 10);
        $this->userAppliedOnScholarship(26, 10);
        $this->userAppliedOnScholarship(27, 10);
        $this->userAppliedOnScholarship(28, 10);
        $this->userAppliedOnScholarship(29, 10);
        $this->userAppliedOnScholarship(30, 10);
        $this->userAppliedOnScholarship(32, 11);
        $this->userAppliedOnScholarship(33, 11);
        $this->userAppliedOnScholarship(34, 11);
        $this->userAppliedOnScholarship(35, 11);
        $this->userAppliedOnScholarship(36, 11);
        $this->userAppliedOnScholarship(23, 12);
        $this->userAppliedOnScholarship(24, 12);
        $this->userAppliedOnScholarship(25, 12);
        $this->userAppliedOnScholarship(26, 12);
        $this->userAppliedOnScholarship(27, 12);
        $this->userAppliedOnScholarship(24, 13);
        $this->userAppliedOnScholarship(25, 13);
        $this->userAppliedOnScholarship(26, 13);
        $this->userAppliedOnScholarship(27, 13);
        $this->userAppliedOnScholarship(24, 14);
        $this->userAppliedOnScholarship(25, 14);
        $this->userAppliedOnScholarship(26, 14);
        $this->userAppliedOnScholarship(22, 15);
        $this->userAppliedOnScholarship(23, 15);
        $this->userAppliedOnScholarship(22, 17);
        $this->userAppliedOnScholarship(23, 17);
        $this->userAppliedOnScholarship(24, 21);
        $this->userAppliedOnScholarship(25, 21);
        $this->userAppliedOnScholarship(26, 21);
        $this->userAppliedOnScholarship(29, 31);
        $this->userAppliedOnScholarship(30, 41);
        $this->userAppliedOnScholarship(31, 41);
        $this->userAppliedOnScholarship(34, 41);
        $this->userAppliedOnScholarship(29, 30);
        $this->userAppliedOnScholarship(30, 40);
        $this->userAppliedOnScholarship(31, 40);
        $this->userAppliedOnScholarship(34, 24);
        $this->userAppliedOnScholarship(21, 25);
        $this->userAppliedOnScholarship(22, 25);
        $this->userAppliedOnScholarship(23, 18);
        $this->userAppliedOnScholarship(24, 28);
        $this->userAppliedOnScholarship(25, 28);
        $this->userAppliedOnScholarship(26, 28);
        $this->userAppliedOnScholarship(24, 32);
        $this->userAppliedOnScholarship(28, 34);
        $this->userAppliedOnScholarship(29, 34);
        $this->userAppliedOnScholarship(30, 44);
        $this->userAppliedOnScholarship(31, 44);
        $this->userAppliedOnScholarship(34, 44);
        $this->userAppliedOnScholarship(31, 49);
        $this->userAppliedOnScholarship(34, 49);

        $this->userAppliedOnScholarship(21, 90);
        $this->userAppliedOnScholarship(22, 90);
        $this->userAppliedOnScholarship(23, 90);
        $this->userAppliedOnScholarship(24, 90);
        $this->userAppliedOnScholarship(25, 90);
        $this->userAppliedOnScholarship(26, 90);
        $this->userAppliedOnScholarship(27, 90);
        $this->userAppliedOnScholarship(32, 90);
        $this->userAppliedOnScholarship(33, 90);
        $this->userAppliedOnScholarship(34, 90);
        $this->userAppliedOnScholarship(35, 90);
        $this->userAppliedOnScholarship(36, 90);

        $this->userAppliedOnScholarship(21, 91);
        $this->userAppliedOnScholarship(22, 91);
        $this->userAppliedOnScholarship(23, 91);
        $this->userAppliedOnScholarship(24, 91);
        $this->userAppliedOnScholarship(25, 91);
        $this->userAppliedOnScholarship(26, 91);
        $this->userAppliedOnScholarship(27, 91);

        $this->userAppliedOnScholarship(21, 92);
        $this->userAppliedOnScholarship(22, 92);
        $this->userAppliedOnScholarship(23, 92);
        $this->userAppliedOnScholarship(24, 92);
        $this->userAppliedOnScholarship(25, 92);
        $this->userAppliedOnScholarship(26, 92);
        $this->userAppliedOnScholarship(27, 92);
        $this->userAppliedOnScholarship(29, 92);

        // Tags (school, tag)
        $this->attachTagToSchool(1, 1);
        $this->attachTagToSchool(1, 2);
        $this->attachTagToSchool(1, 5);
        $this->attachTagToSchool(2, 2);
        $this->attachTagToSchool(2, 4);
        $this->attachTagToSchool(3, 6);
        $this->attachTagToScholarship(1, 1);
        $this->attachTagToScholarship(1, 3);
        $this->attachTagToScholarship(1, 4);
        $this->attachTagToScholarship(2, 2);
        $this->attachTagToScholarship(2, 5);
        $this->attachTagToScholarship(3, 6);

        factory(App\Models\Job::class, 10)->create();
        factory(App\Models\Company::class, 10)->create();
        factory(App\Models\University::class, 10)->create();
        factory(App\Models\Cvteacherstudy::class, 10)->create();

        // ---------------------------------------------------------------- //
        // ----- ΕΠΑΓΓΕΛΜΑΤΙΚΗ ΕΜΠΕΙΡΙΑ -------------------------------//
        factory(App\Models\Work::class, 2)->create(['user_id' => 42]);
        factory(App\Models\Work::class, 3)->create(['user_id' => 43]);
        factory(App\Models\Work::class, 4)->create(['user_id' => 44]);
        factory(App\Models\Work::class, 3)->create(['user_id' => 45]);
        factory(App\Models\Work::class, 5)->create(['user_id' => 46]);
        factory(App\Models\Work::class, 4)->create(['user_id' => 47]);
        factory(App\Models\Work::class, 3)->create(['user_id' => 48]);
        factory(App\Models\Work::class, 2)->create(['user_id' => 49]);
        factory(App\Models\Work::class, 3)->create(['user_id' => 50]);
        factory(App\Models\Work::class, 2)->create(['user_id' => 51]);
        factory(App\Models\Work::class, 3)->create(['user_id' => 52]);
        factory(App\Models\Work::class, 4)->create(['user_id' => 53]);
        factory(App\Models\Work::class, 3)->create(['user_id' => 54]);
        factory(App\Models\Work::class, 2)->create(['user_id' => 55]);
        factory(App\Models\Work::class, 2)->create(['user_id' => 56]);
        factory(App\Models\Work::class, 3)->create(['user_id' => 57]);
        factory(App\Models\Work::class, 2)->create(['user_id' => 58]);
        factory(App\Models\Work::class, 4)->create(['user_id' => 59]);
        factory(App\Models\Work::class, 3)->create(['user_id' => 60]);
        factory(App\Models\Work::class, 2)->create(['user_id' => 61]);
        // ---------------------------------------------------------------- //
        // ----- ΣΠΟΥΔΕΣ -------------------------------//
        factory(App\Models\Certificate::class, 2)->create(['user_id' => 42]);
        factory(App\Models\Certificate::class, 3)->create(['user_id' => 43]);
        factory(App\Models\Certificate::class, 4)->create(['user_id' => 44]);
        factory(App\Models\Certificate::class, 3)->create(['user_id' => 45]);
        factory(App\Models\Certificate::class, 5)->create(['user_id' => 46]);
        factory(App\Models\Certificate::class, 4)->create(['user_id' => 47]);
        factory(App\Models\Certificate::class, 3)->create(['user_id' => 48]);
        factory(App\Models\Certificate::class, 2)->create(['user_id' => 49]);
        factory(App\Models\Certificate::class, 3)->create(['user_id' => 50]);
        factory(App\Models\Certificate::class, 2)->create(['user_id' => 51]);
        factory(App\Models\Certificate::class, 3)->create(['user_id' => 52]);
        factory(App\Models\Certificate::class, 4)->create(['user_id' => 53]);
        factory(App\Models\Certificate::class, 3)->create(['user_id' => 54]);
        factory(App\Models\Certificate::class, 2)->create(['user_id' => 55]);
        factory(App\Models\Certificate::class, 2)->create(['user_id' => 56]);
        factory(App\Models\Certificate::class, 3)->create(['user_id' => 57]);
        factory(App\Models\Certificate::class, 2)->create(['user_id' => 58]);
        factory(App\Models\Certificate::class, 4)->create(['user_id' => 59]);
        factory(App\Models\Certificate::class, 3)->create(['user_id' => 60]);
        factory(App\Models\Certificate::class, 2)->create(['user_id' => 61]);

        // ----------     ΑΞΙΟΛΟΓΗΣΕΙΣ  (Reviews)---------------------//
        $faker = Faker\Factory::create();

        foreach (School::all() as $indexSchool => $school) {

            foreach ($school->students as $indexStudent => $student) {
                if ($indexStudent % 2 == 1) {
                    $r = new Review;
                    $r->user_id = $student->id;
                    $r->school_id = $school->id;
                    $r->text = $faker->sentences($nb = 6, $asText = true);
                    $r->save();

                    $countStars = 0;
                    $countCategories = 0;

                    foreach ($school->categories() as $indexCategory => $category) {
                        $catReview = new CategoryReview;
                        $catReview->review_id = $r->id;
                        $catReview->category_id = $category->id;
                        if ($school->id == 2) {
                            $catReview->stars = rand((int) 4, (int) 5);
                        } else {
                            $catReview->stars = rand((int) 3, (int) 5);
                        }
                        $catReview->save();

                        $countStars += $catReview->stars;
                        $countCategories++;
                    }
                    $r->average = $countCategories ? ($countStars / $countCategories) : 0;
                    $r->save();
                }
            }
        }
    }

    public function interested($studentID, $scholarshipID)
    {
        $student = App\User::find($studentID);
        $scholarship = App\Models\Scholarship::find($scholarshipID);
        $student->interested()->toggle($scholarship);
    }
    public function createImages($school, $path, $from, $until)
    {
        for ($i = $from; $i <= $until; $i++) {
            $image = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => $path . 'pic' . $i . '.jpg', 'full_path' => $path . 'pic' . $i . '.jpg', 'name' => $path . 'pic' . $i . '.jpg']);
            $school->image()->toggle($image);
        }
    }
    public function createStudy($school, $id)
    {
        foreach ($id as $key) {
            $school->study()->attach(Study::find($key));
        }
    }
    public function createUsers($school, $type, $id)
    {
        if ($type == 'student') {
            foreach ($id as $key) {
                $school->students()->toggle(User::find($key));
            }
        } else {
            foreach ($id as $key) {
                $school->teachers()->toggle(User::find($key));
            }
        }
    }
    public function createScholarship($id, $financial_id, $financial_amount, $study_id, $level_id, $criteria_id, $winners, $rand = false, $multiple = false)
    {
        $scholarship = new Scholarship;
        $scholarship->school_id = $id;
        $scholarship->financial_id = $financial_id;
        $scholarship->financial_amount = $financial_amount;
        if ($multiple) {
            $scholarship->study_id = 0;
            $scholarship->multiple = true;
        } else {
            $scholarship->study_id = $study_id;
        }
        $scholarship->level_id = $level_id;
        $scholarship->criteria_id = $criteria_id;
        // $scholarship->winners = $winners;
        $scholarship->exam = true;
        $scholarship->exam_date = Carbon::now();
        // $scholarship->terms = $terms;
        $scholarship->end_at = Carbon::now()->addWeeks(3);
        $scholarship->save();

        if ($multiple) {
            foreach ($study_id as $id) {
                $study = Study::find($id);
                $scholarship->multipleStudies()->toggle($study);
            }
        }
        return $scholarship;
    }
    public function createTerms($schoolID, $terms, $all, $scholarshipID = null)
    {
        $scholarships = Scholarship::where('school_id', $schoolID)->get();
        if ($all) {
            foreach ($scholarships as $scholarship) {
                $scholarship->terms = $terms;
                $scholarship->save();
            }
        } else {
            $scholarship = Scholarship::find($scholarshipID);
            $scholarship->terms = $terms;
            $scholarship->save();
        }
    }

    public function userAppliedOnScholarship($userID, $scholarshipID)
    {
        $students = Student::all();

        $admission = new Admission;
        $admission->user_id = $userID;
        $admission->scholarship_id = $scholarshipID;
        $admission->save();

        $cv = User::find($userID)->cv;
        $admission->createWithFields($cv);

        // event(new StudentAppliedOnScholarship(auth()->user(), $scholarship));
        $user = User::find($userID);
        $scholarship = Scholarship::find($scholarshipID);
        $user->scholarship()->toggle($scholarship);
    }

    public function attachTagToSchool($s, $t)
    {
        $school = School::find($s);
        $tag = Tag::find($t);
        $school->tag()->attach($tag);
    }

    public function attachTagToScholarship($s, $t)
    {
        $scholarship = Scholarship::find($s);
        $tag = Tag::find($t);
        $scholarship->tag()->attach($tag);
    }
}
