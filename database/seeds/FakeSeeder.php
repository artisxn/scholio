<?php

use App\Models\Scholarship;
use App\Models\Study;
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
        /*===============   1 ACT   ================*/
        $school1 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'American College of Thessaloniki', 'email' => 'webmaster@act.edu', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'act'])->id,
            'address' => 'Σεβενίδη, 17, Πυλαία',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310398398,
            'type_id' => 1,
            'website' => 'act.edu',
            'approved' => 1,
            'about' => '<p style="text-align: justify;">ACT (American College of Thessaloniki) is the tertiary division of Anatolia College, an institution with a long and prestigious history that dates back to 1886.</p>
<p style="text-align: justify;">ACT is <strong>accredited in the United States by NEASC</strong> (New England Association of Schools and Colleges) through its Commission on Institutions of Higher Education. In addition to ACT having full NEASC accreditation, <strong>the undergraduate programs delivered at ACT are also validated by Open University, UK</strong>. ACT has also been granted a license by the Greek government to operate as a private post-secondary educational institution (“College”).</p>
<ul style="text-align: justify;">
<li>ACT\'s comprehensive undergraduate curriculum offers <strong>Bachelor degrees in Business</strong> (with 4 concentrations), <strong>Computer Science, Business Computing, International Relations, English</strong> (with 2 concentrations) and combined bachelor degrees in<strong>Tourism and Hospitality</strong> in collaboration with renowned educational institutions in Switzerland and the U.S.</li>
</ul>
<ul style="text-align: justify;">
<li>Moreover, the college offers a <strong>Master of Science (MS) in Hospitality and Tourism Management</strong> and a <strong>Master in Business Administration (MBA)</strong> with concentrations in <em>Banking &amp; Finance, Entrepreneurship, Management</em>, and <em>Marketing in the Digital Era</em>.</li>
</ul>
<ul>
<li style="text-align: justify;">ACT also offers an <strong>extensive need and merit-based financial aid program</strong></li>
</ul>
<div class="WordSection1">
<p align="center"><strong> </strong></p>
<h3 align="center"><strong>Mission</strong><strong> </strong></h3>
<p>The American College of Thessaloniki (ACT ) provides to a diverse student body, a high quality, tertiary level multidisciplinary, student-centered educational experience in an innovative learning environment. Drawing on the principles of the American liberal Arts educational philosophy we foster depth and breadth of knowledge, grounded on theory, scholarly research, and intellectual freedom. Our faculty members are passionate about teaching, value close relationships with our students and strive to instill in them the desire to pursuit academic and professional excellence and personal enrichment.</p>
<h3 align="center"><strong>Vision</strong></h3>
<p><strong>W</strong><strong>e aspire:</strong></p>
<p>to be the institution of choice for students seeking the highest levels of personal, intellectual, and professional attainment. We want to be known as the institution that contributes to society and produces well-rounded, principled, and open-minded citizens of the world.</p>
</div>',
            'logo' => 'fake/act-logo.png',
            'background' => 1,
        ]);

        /*===============  2 AMC ================*/
        $school2 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Μητροπολιτικό Κολλέγιο Θεσσαλονίκης', 'email' => 'info@metropolitan.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'amc'])->id,
            'address' => 'Ελ. Βενιζέλου 14 & Τσιμισκή',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310241010,
            'type_id' => 1,
            'website' => 'mitropolitiko.edu.gr',
            'approved' => 1,
            'about' => '<p style="text-align: justify;">Το Μητροπολιτικό Κολλέγιο, από το 1982 μέχρι σήμερα έχει αποστολή και όραμα την πνευματική και μορφωτική ανέλιξη των φοιτητών του. Υπηρετεί με συνέπεια την Τριτοβάθμια Εκπαίδευση, έχοντας εδραιωθεί στη συνείδηση γονέων και φοιτητών ως <strong>η κορυφαία επιλογή ποιοτικών σπουδών Πανεπιστημιακού επιπέδου στην Ελλάδα</strong>, με παραρτήματα στην Αθήνα, τον Πειραιά και τη Θεσσαλονίκη. Η καλλιέργεια της κριτικής σκέψης, η ακαδημαϊκή πρόοδος και η ανάπτυξη του ερευνητικού πνεύματος του κάθε φοιτητή αποτελούν προτεραιότητα για το Κολλέγιό μας και αυτή η εταιρική μας κουλτούρα είναι που μας κάνει<strong> να ξεχωρίζουμε.</strong></p>
<p style="text-align: justify;"> Με την εμπειρία <strong>34 χρόνων</strong> <strong>πορείας στην ελληνική εκπαίδευση</strong>, το Μητροπολιτικό Κολλέγιο παρέχει, σε συνεργασία με διακεκριμένα δημόσια Πανεπιστημιακά Ιδρύματα του εξωτερικού, μια σειρά από πιστοποιημένα προγράμματα σπουδών που καλύπτουν σύγχρονα επιστημονικά πεδία και ανταποκρίνονται στις σημερινές απαιτήσεις της ελληνικής και διεθνούς αγοράς εργασίας. Η διάρθρωση του Μητροπολιτικού Κολλεγίου, το Ακαδημαϊκό Συμβούλιο, η τεχνογνωσία και η εμπειρία του ακαδημαϊκού δυναμικού, οι υποδομές και οι κτιριακές εγκαταστάσεις, η βιβλιοθήκη χιλιάδων τίτλων και η τεχνολογική υποστήριξη της εκπαιδευτικής διαδικασίας, αποτελούν τις δικλείδες ασφαλείας για την υψηλή ποιότητα των σπουδών που προσφέρουμε.</p>
<p style="text-align: justify;"></p>',
            'logo' => 'fake/amc-logo.png',
            'background' => 7,
        ]);

        /*===============  3 AKMH ================*/
        $school3 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'ΑΚΜΗ', 'email' => 'info@iek-akmi.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'akmi'])->id,
            'address' => 'Τσιμισκή 14',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310260200,
            'type_id' => 2,
            'website' => 'iek-akmi.edu.gr',
            'about' => '<h4><em>Αγαπητοί νέοι και νέες ,</em></h4>
<p style="text-align: justify;">Στα 40 και πλέον χρόνια της ηγετικής πορείας μας στο χώρο της εκπαίδευσης μένουμε πιστοί στο όραμά μας για μια πρωτοπόρα επαγγελματική εκπαίδευση, βασισμένη στα Διεθνή Πρότυπα.<br />Στο ΙΕΚ ΑΚΜΗ παρέχουμε υψηλής ποιότητας εκπαίδευση που διασφαλίζεται από συνεχείς επενδύσεις σε υψηλού επιπέδου συνεργασίες, οι οποίες λειτουργούν ως συνδετικός κρίκος μεταξύ του εκπαιδευτικού και επαγγελματικού περιβάλλοντος, σε νέες τεχνολογίες και σε κορυφαίες υλικοτεχνικές και κτιριακές υποδομές.<br />Στο ΙΕΚ ΑΚΜΗ πρωτοπορούμε με τη δημιουργία νέων ειδικοτήτων υψηλής απορρόφησης  από την αγορά εργασίας, αλλά και τη διαρκή έρευνα αγοράς για προγράμματα εξειδίκευσης και πιστοποιήσεις υψηλού επιπέδου που θα σας ξεχωρίσουν στον επαγγελματικό στίβο.<br />Στην ιστοσελίδα μας μπορείτε να βρείτε γενικές πληροφορίες για τη φοίτησή σας σε κάθε μία από τις ειδικότητες που παρέχονται, οι οποίες είναι ομαδοποιημένες σε 12 τομείς σπουδών.</p>
<p style="text-align: justify;">Όλοι μας υπηρετούμε το δικαίωμά σας να κάνετε τα όνειρά σας πραγματικότητα και γι’ αυτό είμαστε εδώ, έτοιμοι να σας καλωσορίσουμε στη μεγάλη οικογένειά μας και να σας διδάξουμε τον τρόπο με τον οποίο θα ενταχθείτε κι εσείς στους καταξιωμένους επαγγελματίες του μέλλοντος!</p>
<p><img style="float: right;" src="http://www.iek-akmi.edu.gr/images/rodopoulou-signature.png" alt="rodopoulou signature" /></p>
<p style="text-align: right;"> </p>
<p style="text-align: right;"> </p>
<p style="text-align: right;"> </p>
<p style="text-align: right;"> <strong>Καλλιόπη Ροδοπούλου</strong><br />Διευθύνουσα Σύμβουλος</p>',
            'approved' => 1,
            'logo' => 'fake/akmi-logo.png',
            'background' => 14,
        ]);

        /*===============  4 Εκπαιδευτήρια Βασιλειάδη ================*/
        $school4 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Εκπαιδευτήρια Βασιλειάδη', 'email' => 'info@vassiliadis.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'vasileiadi'])->id,
            'address' => '12o χλμ Θεσ/νίκης-Μουδανιών, Θέρμη',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310475958,
            'type_id' => 6,
            'website' => 'vassiliadis.edu.gr',
            'approved' => 1,
            'about' => '<p><strong>Στα Εκπαιδευτήρια Βασιλειάδη</strong></p>
<ul>
<li><strong>Επικοινωνούμε</strong>: Επιδιώκουμε την ουσιαστική επικοινωνία μεταξύ διεύθυνσης, διδακτικού προσωπικού, γονέων και μαθητών. Η συνεργασία και η αλληλοκατανόηση αποκτούν ουσιαστικό περιεχόμενο στην τάξη, έξω απ’ αυτήν, αλλά και με τακτικές προγραμματισμένες συναντήσεις.</li>
<li><strong>Διδάσκουμε</strong>: Ένα άριστο επιτελείο καθηγητών αποτελεί το διδακτικό μας προσωπικό. Άνθρωποι που για χρόνια και με συνέπεια υπηρετούν την εκπαίδευση, διαθέτουν φροντιστηριακή πείρα, αλλά και την απαιτούμενη παιδαγωγική κατάρτιση, για να υποστηρίξουν κάθε ανάγκη του μαθητή.</li>
<li><strong>Υποστηρίζουμε</strong>: Παρέχουμε στους μαθητές μας το βοηθητικό υλικό που απαιτείται για την καλύτερη προσέγγιση της διδακτέας ύλης: Σημειώσεις ανά μάθημα σε έντυπη και ηλεκτρονική μορφή, προηγμένη χρήση διαδραστικών πινάκων (smartboard), ηλεκτρονική εκπαιδευτική πλατφόρμα (moodle) και πρόσβαση στη δανειστική βιβλιοθήκη του σχολείου. Το σχολείο μας έχει προχωρήσει σε ενίσχυση του προγράμματος με πρόσθετες ώρες διδασκαλίας των πανελλαδικώς εξεταζόμενων μαθημάτων για τις τάξεις του Λυκείου, εξασφαλίζοντας περισσότερο χρόνο προετοιμασίας για τους μαθητές και απαλλάσσοντας τους γονείς από επιπρόσθετες οικονομικές δαπάνες.  </li>
<li><strong>Καινοτομούμε</strong>: Πρωτοστατήσαμε στην εισαγωγή της νέας τεχνολογίας στην εκπαιδευτική διαδικασία, εξοπλίζοντας όλες τις αίθουσες και τα εργαστήρια με διαδραστικούς πίνακες(smartboard). Συνεχίζουμε να πρωτοπορούμε αξιοποιώντας τις δυνατότητές τους στην ενεργοποίηση της προσοχής και της αφομοιωτικής ικανότητας των μαθητών μας. Η συνεχής επιμόρφωση όλων των εκπαιδευτικών μας στη χρήση Η/Υ και αντίστοιχων εκπαιδευτικών προγραμμάτων εγγυάται την ουσιαστική συμβολή των νέων εποπτικών μέσων στην αποτελεσματικότητα της διδασκαλίας.</li>
<li><strong>Ενθαρρύνουμε</strong>: Αφουγκραζόμαστε και κινητοποιούμε τη δημιουργικότητα των παιδιών από το επίπεδο της τάξης έως την εξειδικευμένη ενασχόληση στους ομίλους ενδιαφερόντων (clubs). Συμμετέχουμε ενεργά στους θεσμοθετημένους διαγωνισμούς με γνωστικό αλλά και πολιτιστικό-αθλητικό περιεχόμενο. Ενθαρρύνουμε τη συμμετοχή των μαθητών μας σε προγράμματα με κοινωνικό, οικολογικό και καλλιτεχνικό προσανατολισμό.</li>
<li><strong>Εμπνέουμε</strong>: Στοχεύουμε σε ένα σχολείο ανοιχτό στην κοινωνία. Επιδιώκουμε να διατηρούμε συνεχή επαφή με τα συμβαίνοντα στην κοινωνική πραγματικότητα σε τοπικό, εθνικό και διεθνές περιβάλλον.</li>
</ul>',
            'logo' => 'fake/vasileiadi-logo.png',
            'background' => 23,
        ]);

        /*===============  5 Εκπαιδευτήρια Φρυγανιώτη ================*/
        $school5 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Εκπαιδευτήρια Φρυγανιώτη', 'email' => 'info@fryganiotis.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'fryganioti'])->id,
            'address' => 'Περιοχή Νοσ. Παπαγεωργίου, Πολίχνη',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310692940,
            'type_id' => 6,
            'website' => 'fryganiotis.gr',
            'approved' => 1,
            'about' => '<h2>Φιλοσοφία</h2>
<p>Είναι δύσκολο για μας να περιγράψουμε μέσα σε λίγες γραμμές, την πολυσύνθετη προσπάθειά μας, για να καλλιεργήσουμε πνευματικά, μορφωτικά και ηθικά τα παιδιά μας. Οι στόχοι μας υπαγορεύονται από την <strong>αγάπη,</strong> τον <strong>ανθρώπινο χαρακτήρα</strong> και την <strong>επιστημονική πληρότητα</strong>.</p>
<div>
<p><br />Η <strong>ελεύθερη σκέψη</strong>, η <strong>κριτική ικανότητα</strong>, το <strong>δημιουργικό πνεύμα</strong>, ο <strong>σεβασμός για το περιβάλλον και τον άνθρωπο</strong> αποτελούν κατευθυντήριες έννοιες της σχολικής καθημερινότητας στα Εκπαιδευτήριά μας. Προσφέρουμε στους μαθητές μας υψηλής ποιότητας παιδεία, προσαρμοσμένη στις ανάγκες του κάθε παιδιού.<br /><br />Επιδιώκουμε με κάθε τρόπο να αναγνωρίσουμε και <strong>να αναδείξουμε τις ιδιαίτερες ικανότητες του κάθε μαθητή</strong>. Για μας το παιδί δεν είναι θεατής, αλλά ενεργός συμμέτοχος στην εκπαιδευτική διαδικασία. Προετοιμάζουμε σκεπτόμενους πολίτες που με τις γνώσεις και το ήθος τους θα είναι έτοιμοι να αντιμετωπίζουν τις προκλήσεις των καιρών.</p>
<p>Το <strong>φιλικό και ζεστό περιβάλλον</strong> των Εκπαιδευτηρίων μας, αποτελεί πάντα σημαντικό παράγοντα στην υλοποίηση των στόχων μας. Με <strong>ιδιαίτερη στοργή</strong> και <strong>ενδιαφέρον</strong> σκύβουμε στις ανησυχίες και τις αναζητήσεις των νέων ανθρώπων, οπλίζοντάς τους με δύναμη και αισιοδοξία για τη ζωή.<br /><br />Πιστεύουμε ότι κάθε μορφωτικό αγαθό μπορεί να βλαστήσει μόνο μέσα από <strong>σχέσεις υγιείς και ευτυχισμένες,</strong> <strong>σχέσεις εμπιστοσύνης</strong> που μόνο στο <strong>οικογενειακό περιβάλλον που προσφέρουμε</strong> μπορούν να καλλιεργηθούν και με την προσωπική μας φροντίδα να καρποφορήσουν.</p>
</div>',
            'logo' => 'fake/fryganioti-logo.png',
            'background' => 29,
        ]);

        /*===============   6 NYC   ================*/
        $school6 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'New York College', 'email' => 'nycth@nyc.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'nyc'])->id,
            'address' => 'Αμαλίας 38, Σύνταγμα',
            'city' => 'Αθήνα',
            'phone' => 2103225961,
            'type_id' => 1,
            'website' => 'nyc.gr',
            'approved' => 1,
            'about' => '<p><strong>Dear Students, Guests and Friends,</strong></p>
<p> <span style="text-align: justify;">I am pleased to welcome you to the NYC Educational Group (NYC), one of the largest and most rapidly developing multinational educational organization in South-East Europe.</span></p>
<p style="text-align: justify;">Founded in 1989 in Athens, in collaboration with the State University of New York Empire State College, NYC established four educational institutions, offering undergraduate and postgraduate programs in partnership with American and European universities.</p>
<p style="text-align: justify;">Over the years we have taken justifiable pride in having expanded our presence both within Greece, to Thessaloniki and abroad, to Prague and Tirana, while at the same time, establishing stable partnerships with reputable universities in offering cutting-edge programs of study.</p>
<p style="text-align: justify;">Our institutions offer educational opportunities with a global perspective, while hosting students and faculty from as many as 70 nations, who enjoy high quality instruction and opportunities of communication, academic exchange and an international experience. At NYC, we consider diversity an advantage, since it opens for us new horizons to knowledge, enriches our cultural contacts, and most importantly, allows our students to interact in a multicultural milieu, so indispensable for the citizen of the global tomorrow.</p>
<p style="text-align: justify;">Furthermore, NYC has proven that it can provide businesses and organizations with qualified professionals who pursue remarkable careers, within and beyond their own country. In particular, studying for one of our degrees can enhance your career prospects and open doors to fresh opportunities in the fast-changing world of business, commerce and industry.</p>
<p style="text-align: justify;">We are proud of our commitment to education, to prepare students to become scholars and thinkers of a new century in which technology will continue to transform the way we advance the boundaries of knowledge. Our aim is to provide our students with prestigious degrees and more importantly, with the values and ethics necessary to excel in society in general.</p>
<p style="text-align: justify;">I look forward to welcoming you to one of the institutions of the NYC Educational Group and let me assure you that you will enjoy top quality studies in one of the best educational environments you can find.</p>
<p style="text-align: right;"><br /><strong>Dr. Elias Foutsis</strong><br />President</p>',
            'logo' => 'fake/newyork-logo.png',
            'background' => 37,
        ]);

        /*===============  7 Φροντιστήρια Μ.Ε.Υποδομή ================*/
        $school7 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Φροντιστήρια Υποδομή', 'email' => 'info@ypodomi.com', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'ypodomi'])->id,
            'address' => 'Κουγιουμτζίδη 7',
            'city' => 'Γιαννιτσά',
            'phone' => 2382027799,
            'type_id' => 3,
            'website' => 'ypodomi.com',
            'approved' => 1,
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
            'logo' => 'fake/ypodomi-logo.png',
            'background' => 42,
        ]);

        /*===============  8 Εκπαιδευτήρια Απόστολος Παύλος  ================*/
        $school8 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Εκπαιδευτήρια Απόστολος Παύλος', 'email' => 'gymnasio@eap.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'eap'])->id,
            'address' => 'Κένεντι 119, Πυλαία',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310329540,
            'type_id' => 7,
            'website' => 'eap.edu.gr',
            'approved' => 1,
            'about' => '<p>Τα Εκπαιδευτήρια «Ο Απόστολος Παύλος» ιδρύθηκαν <strong>το 1976</strong> από τον μακαριστό Μητροπολίτη Θεσσαλονίκης <strong>πατέρα Λεωνίδα Παρασκευόπουλο </strong>, ο οποίος οραματίστηκε για την αγαπημένη του Θεσσαλονίκη ένα σχολείο που θα κάλυπτε όλες τις βαθμίδες και θα παρείχε στους μαθητές του άριστη μόρφωση αλλά και χριστιανική αγωγή ψυχής.<br />Η επιθυμία του αειμνήστου πατρός βρήκε ένθερμους υποστηρικτές οι οποίοι με ζήλο και αυταπάρνηση υλοποίησαν το όραμα. Ο ιεραποστολικός σύλλογος της Θεσσαλονίκης<strong> "Απόστολος Παύλος" </strong>ανέλαβε την ευθύνη αυτού του έργου, την οποία έχει ως σήμερα. Πρώτα λειτούργησε ένα τμήμα του Νηπιαγωγείου με την ονομασία «Κυκλάμινα». Σιγά-σιγά ολοκληρώθηκαν οι τάξεις του Δημοτικού, του Γυμνασίου και του Λυκείου.</p>
<p><strong>Παιδικός Σταθμός, </strong>δύο<strong> Νηπιαγωγεία, </strong>δύο <strong>Δημοτικά Σχολεία, </strong>δύο<strong> Γυμνάσια </strong>και το <strong>Λύκειο </strong>λειτουργούν σήμερα και έχουν φιλοξενήσει εκατοντάδες μαθητές παρέχοντας εξαιρετικού επιπέδου μόρφωση και αγωγή. Το Σχολείο αγαπήθηκε από τους Θεσσαλονίκεις, οι οποίοι με εμπιστοσύνη «ακούμπησαν» σ’ αυτό τα παιδιά τους.</p>
<p>Με ταχύτατο ρυθμό αναπτύχθηκαν οι κτιριακές εγκαταστάσεις σ\' έναν χώρο μοναδικής θέσης και ομορφιάς στους πρόποδες του Πανοράματος που έχει το προνόμιο να είναι κατάφυτος. Το 1980 εγκαινιάστηκε το κτίριο του Δημοτικού Σχολείου από το ιδρυτή των Εκπαιδευτηρίων μας π. Λεωνίδα ο οποίος συγκινημένος έβλεπε να υλοποιείται το όραμά του, το 1983 ολοκληρώθηκε και εγκαινιάστηκε το κτίριο που στεγάζει το Γυμνάσιο, το 1992 το κτίριο του Λυκείου, το 2003 εγκαινιάστηκε νέο κτίριο νηπιαγωγείων και το 2006 νέο δεύτερο κτίριο Δημοτικού σχολείου. Αίθουσες τελετών, γυμναστήρια, γήπεδα και πολύ άνετοι προαύλιοι χώροι συμπληρώνουν τις εγκαταστάσεις.</p>',
            'logo' => 'fake/eap-logo.png',
            'background' => 48,
        ]);

        /*===============  9 Ευρωγνώση Τσιμισκή ================*/
        $school9 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Ευρωγνώση Τσιμισκή', 'email' => 'tsimiski@eurognosi.info', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'evrognosi'])->id,
            'address' => 'Τσιμισκή 102 & Παύλου Μελά',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310262255,
            'type_id' => 4,
            'website' => 'eurognosi.com',
            'approved' => 1,
            'about' => 'Εκπαιδευτικός Oργανισμός Ευρωπαϊκών Γλωσσών και Πληροφορικής στην Νοτιοανατολική Ευρώπη. Επί σειρά ετών η ΕΥΡΩΓΝΩΣΗ αποτελεί την πρώτη επιλογή εκπαιδευτικού οργανισμού ξένων γλωσσών και πληροφορικής για όλους τους Έλληνες.</p>
<p>Τα <strong>Κέντρα ξένων γλωσσών ΕΥΡΩΓΝΩΣΗ</strong> ιδρύθηκαν το 1989 με σκοπό να παρέχουν σπουδές Ευρωπαϊκών Γλωσσών υψηλής ποιότητας για όλες τις ηλικίες των σπουδαστών της. Σήμερα είναι η 1η Δύναμη στις Ξένες Γλώσσες και την Πληροφορική και ο μεγαλύτερος φορέας ιδιωτικής εκπαίδευσης στην Ελλάδα, την Κύπρο και τη Ρουμανία, με 350 κέντρα Ξένων Γλωσσών και Πληροφορικής σε λειτουργία και περισσότερους από 60.000 σπουδαστές σε μέση ετήσια βάση, αξιοποιώντας έτσι με τον καλύτερο τρόπο τις στρατηγικές συμφωνίες που έχει συνάψει με κορυφαίους εκπαιδευτικούς οργανισμούς παγκοσμίως.</p>
<p>Η ΕΥΡΩΓΝΩΣΗ είναι αδιαμφισβήτητα ο LEADER στον χώρο των εκπαιδευτικών επιχειρήσεων. Παρέχει άριστες εκπαιδευτικές υπηρεσίες με προγράμματα που καλύπτουν το φάσμα των ηλικιών από παιδιά 4 ετών μέχρι ενήλικες και εξειδικευμένα <strong>επιχειρησιακά προγράμματα</strong>, χρησιμοποιώντας τις πιο σύγχρονες μεθόδους διδασκαλίας σε συνδυασμό με καινοτόμες τεχνολογίες. Ειδικότερα, παρέχει <strong>παιδικά προγράμματα, προγράμματα φοιτητών, προγράμματα ενηλίκων</strong> καθώς και ειδικά <strong>εντατικά μαθήματα</strong> για πτυχία ξένων γλωσσών. Για τον λόγο αυτό το όνομά μας είναι από τα πιο αναγνωρίσιμα brands στον ελλαδικό χώρο και όχι μόνο, συνώνυμο της ποιοτικής και αποτελεσματικής εκμάθησης ξένων γλωσσών και πληροφορικής.</p>
<p>Οι χιλιάδες των αποφοίτων και των ενεργών, ευχαριστημένων, σπουδαστών μας κρατούν το όραμα ζωντανό και αποτελούν την κινητήρια δύναμη για την συνεχή εξέλιξη της ΕΥΡΩΓΝΩΣΗ και για νέες κατακτήσεις στον χώρο της ξενόγλωσσης εκπαίδευσης. Ελάτε σε ένα από τα κέντρα ΕΥΡΩΓΝΩΣΗ και απολαύστε μια πραγματικά μοναδική μαθησιακή εμπειρία με την μέθοδο Learn® που μόνο η ΕΥΡΩΓΝΩΣΗ μπορεί να σας παρέχει!<br /><br /></p>
<h2>Όμιλος με Όραμα</h2>
<p><br />Ακαδημαϊκή υπεροχή στους μαθητές μας μέσα από καινοτομία, συστηματικότητα, κερδοφόρο δίκτυο και δυνατό brand.</p>
<p>Το όραμά μας είναι η ΕΥΡΩΓΝΩΣΗ να γίνει ο <strong>παγκόσμιος ηγέτης στο χώρο της ξενόγλωσσης εκπαίδευσης</strong>, υποστηρίζοντας σήμερα ένα σύνολο 350 εταιριών που παντρεύουν το κοινωνικό έργο της εκπαίδευσης και την απόλυτη επιχειρηματικότητα με άξονα την ποιότητα και τις ξεκάθαρες οργανωτικές δομές.</p>',
            'logo' => 'fake/eurognosi-logo.png',
            'background' => 56,
        ]);

        /*===============  10 Danza Fuerte ================*/
        $school10 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Danza Fuerte', 'email' => 'danzafuerte@gmail.com', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'danza'])->id,
            'address' => 'Αριστοτέλους 23, Κέντρο',
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
            'logo' => 'fake/danzafuerte-logo.png',
            'background' => 62,
        ]);

        /*===============  11 Αδαμάντιος Σχολή ================*/
        $school11 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Αδαμάντιος Σχολή', 'email' => 'info@adamantios.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'adamantios'])->id,
            'address' => 'Λεωφ. Γεωργικής Σχολής 44, Πυλαία',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310472474,
            'type_id' => 8,
            'website' => 'adamantios.gr',
            'approved' => 1,
            'about' => '<p class="homePadRight">Η Αδαμάντιος Σχολή μέσα σ\' ένα ασφαλές περιβάλλον φροντίζει τους μαθητές της με αγάπη. Τους παρέχει πολύπλευρη εκπαίδευση και διαμορφώνει την προσωπικότητά τους.</p>
<p class="homePadRight">Tο προσωπικό μας είναι άριστα καταρτισμένο. Η εκπαιδευτική διαδικασία υποστηρίζεται με σύνολο εξειδικευμένων δασκάλων που καλλιεργούν και αναπτύσσουν τις δεξιότητες και τα χαρίσματα των μαθητών.</p>
<p class="homePadRight">Διδάσκονται τρεις ξένες γλώσσες, Αγγλικά, Γαλλικά και Γερμανικά, μέσα στις ώρες λειτουργίας του σχολικού προγράμματος. Στους νεοεγγραφόμενους μαθητές παραδίδονται μαθήματα ξένων γλωσσών για την ομαλή ένταξή τους στην τάξη. Επίσης, λαμβάνεται ιδιαίτερη μέριμνα για Δημιουργική Απασχόληση-Φύλαξη των παιδιών σε ώρες πέραν του ωρολογίου προγράμματος.</p>
<p class="homePadRight">Η συνεργασία Γονέων- Σχολείου αποτελεί βασικό παράγοντα της εκπαιδευτικής μας διαδικασίας. Η επίδοση και η διαγωγή των μαθητών μας αποτελεί καθημερινό μας μέλημα.</p>',
            'logo' => 'fake/adamantios-logo.png',
            'background' => 68,
        ]);

//        for ($i = 0; $i < 9; $i++) {
        //            factory(App\Models\School::class)->create(['user_id' => factory(App\User::class)->create(['role' => 'school'])->id]);
        //        }

        factory(App\Models\Student::class, 30)->create();
        factory(App\Models\Teacher::class, 20)->create();

        /*===============   1 ACT   ================*/
        $this->createImages($school1, 'fake/act-', 1, 6);
        $this->createStudy($school1, [206, 207, 208, 209, 210, 253, 252, 279, 306, 308, 309, 312, 324]);
        $this->createUsers($school1, 'students', [21, 22, 23, 24, 25, 26, 27, 28, 29]);
        $this->createUsers($school1, 'teachers', [51, 52, 53, 54]);
        $this->createScholarship($school1->id, 1, 20, 207, 1, 1, 1, 1);
        $this->createScholarship($school1->id, 2, 800, 310, 3, 2, 2, 2);
        $this->createScholarship($school1->id, 1, 50, 210, 1, 3, 2, 1);
        $this->createScholarship($school1->id, 2, 500, 209, 1, 4, 2, 1);

        /*===============  2 AMC ================*/
        $this->createImages($school2, 'fake/amc-', 1, 7);
        $this->createStudy($school2, [202, 204, 205, 240, 241, 244, 245, 246, 249, 250, 255, 256, 257, 258, 259, 260, 261,
            266, 267, 268, 269, 270, 281, 282, 283, 284, 285, 286, 287, 327, 328, 329, 330, 331, 332, 345, 346, 349, 350, 351, 352]);
        $this->createUsers($school2, 'students', [21, 40, 41, 42, 43, 44, 45, 46]);
        $this->createUsers($school2, 'teachers', [61, 62, 64, 65, 66]);
        $this->createScholarship($school2->id, 2, 500, 240, 1, 1, 1, 5);
        $this->createScholarship($school2->id, 1, 30, 350, 3, 2, 1, 5);

        /*===============  3 AKMH ================*/
        $this->createImages($school3, 'fake/akmi-', 1, 9);
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
        $this->createScholarship($school3->id, 2, 1000, 33, 3, 1, 1, 3);
        $this->createScholarship($school3->id, 1, 90, 34, 2, 4, 1, 4);
        $this->createScholarship($school3->id, 2, 400, 86, 2, 5, 1, 0);
        $this->createScholarship($school3->id, 1, 50, 108, 2, 1, 1, 5);

        /*===============  4 Εκπαιδευτήρια Βασιλειάδη ================*/
        $this->createStudy($school4, [423, 424, 425]);
        $this->createImages($school4, 'fake/vasileiadi-', 1, 6);
        $this->createUsers($school4, 'students', [31, 42, 43, 44, 34, 35]);
        $this->createUsers($school4, 'teachers', [52, 63, 64, 65]);
        $this->createScholarship($school4->id, 2, 400, 423, 4, 1, 1, 1);
        $this->createScholarship($school4->id, 1, 30, 424, 5, 2, 1, 0);
        $this->createScholarship($school4->id, 2, 300, 425, 6, 1, 1, 3);

        /*===============  5 Εκπαιδευτήρια Φρυγανιώτη ================*/
        $this->createStudy($school5, [423, 424, 425]);
        $this->createImages($school5, 'fake/fryganioti-', 1, 8);
        $this->createUsers($school5, 'students', [31, 32, 23, 24, 34, 35]);
        $this->createUsers($school5, 'teachers', [52, 53, 64, 65]);
        $this->createScholarship($school5->id, 2, 500, 423, 4, 1, 1, 0);
        $this->createScholarship($school5->id, 1, 30, 424, 5, 2, 1, 0);
        $this->createScholarship($school5->id, 2, 200, 425, 6, 1, 1, 0);

        /*===============   6 NYC   ================*/
        $this->createImages($school6, 'fake/newyork-', 1, 5);
        $this->createStudy($school6, [211, 212, 213, 214, 215, 216, 217, 218, 219, 220, 227, 234, 235, 237, 242, 243, 247, 248, 250, 252, 258, 262, 265, 270, 271, 272, 273, 274, 295, 296, 297,
            313, 317, 318, 319, 320, 321, 325, 329, 322, 332, 333, 334, 346, 347, 352]);
        $this->createUsers($school6, 'students', [21, 22, 23, 24, 25]);
        $this->createUsers($school6, 'teachers', [51, 52, 53, 70]);
        $this->createScholarship($school6->id, 1, 30, 234, 1, 1, 1, 1);
        $this->createScholarship($school6->id, 2, 900, 270, 1, 2, 2, 2);
        $this->createScholarship($school6->id, 1, 40, 296, 1, 4, 2, 0);
        $this->createScholarship($school6->id, 2, 400, 352, 3, 3, 2, 1);

        /*===============  7 Φροντιστήρια Μ.Ε.Υποδομή ================*/
        $this->createStudy($school7, [353, 354, 355, 356, 357, 358, 359, 426, 427, 428, 429]);
        $this->createImages($school7, 'fake/ypodomi-', 1, 6);
        $this->createUsers($school7, 'students', [31, 32, 33, 34, 44, 45, 46, 47, 48]);
        $this->createUsers($school7, 'teachers', [52, 53, 54, 55, 56]);
        $this->createScholarship($school7->id, 2, 400, 353, 5, 1, 1, 1);
        $this->createScholarship($school7->id, 1, 30, 356, 6, 2, 1, 0);
        $this->createScholarship($school7->id, 2, 300, 358, 6, 4, 3, 3);

        /*===============  8 Εκπαιδευτήρια Απόστολος Παύλος  ================*/
        $this->createStudy($school8, [430, 431, 432]);
        $this->createImages($school8, 'fake/eap-', 1, 8);
        $this->createUsers($school8, 'students', [21, 22, 23, 24, 44, 50]);
        $this->createUsers($school8, 'teachers', [52, 53, 54, 55]);
        $this->createScholarship($school8->id, 2, 400, 430, 13, 1, 1, 1);
        $this->createScholarship($school8->id, 1, 30, 431, 14, 2, 1, 0);
        $this->createScholarship($school8->id, 2, 300, 432, 15, 1, 1, 3);

        /*===============  9 Ευρωγνώση Τσιμισκή ================*/
        $this->createStudy($school9, [360, 361, 362, 363, 371, 372, 373, 382, 384, 387, 388, 390]);
        $this->createImages($school9, 'fake/eurognosi-', 1, 6);
        $this->createUsers($school9, 'students', [31, 32, 33, 34, 43, 45]);
        $this->createUsers($school9, 'teachers', [52, 53, 54, 55]);
        $this->createScholarship($school9->id, 2, 400, 360, 22, 1, 1, 1);
        $this->createScholarship($school9->id, 1, 30, 372, 23, 2, 1, 0);
        $this->createScholarship($school9->id, 2, 300, 373, 23, 1, 1, 3);
        $this->createScholarship($school9->id, 3, 2, 390, 24, 1, 1, 3);

        /*===============  10 Danza Fuerte ================*/
        $this->createStudy($school10, [393, 395, 396, 397, 402, 403, 409, 410, 413, 414, 415, 422]);
        $this->createImages($school10, 'fake/danzafuerte-', 1, 6);
        $this->createUsers($school10, 'students', [41, 42, 43, 44, 45, 46, 47]);
        $this->createUsers($school10, 'teachers', [52, 53, 64, 65, 66, 68]);
        $this->createScholarship($school10->id, 2, 100, 393, 25, 1, 1, 1);
        $this->createScholarship($school10->id, 1, 10, 397, 25, 2, 1, 0);
        $this->createScholarship($school10->id, 2, 200, 410, 26, 1, 1, 3);
        $this->createScholarship($school10->id, 3, 1, 422, 27, 1, 1, 3);

        /*===============  11 Αδαμάντιος Σχολή ================*/
        $this->createStudy($school11, [433, 434, 435, 436, 437, 438]);
        $this->createImages($school11, 'fake/adamantios-', 1, 6);
        $this->createUsers($school11, 'students', [31, 32, 33, 44, 46, 50]);
        $this->createUsers($school11, 'teachers', [52, 53, 54, 59, 60, 61]);
        $this->createScholarship($school11->id, 2, 100, 433, 16, 2, 1, 1);
        $this->createScholarship($school11->id, 1, 10, 434, 16, 2, 1, 0);
        $this->createScholarship($school11->id, 2, 200, 437, 20, 1, 1, 3);
        $s = $this->createScholarship($school11->id, 1, 30, 438, 21, 2, 1);

        $this->createTerms($school11->id, 'dafjvjhadfjdf', true);
        $this->createTerms($school11->id, '<strong>KEIMENO</strong>', false, 38);
        $this->createTerms($school11->id, '<strong>TEST</strong>', false, $s->id);

        // Interested
        $this->interested(21, 1);
        $this->interested(22, 1);
        $this->interested(23, 1);
        $this->interested(21, 2);
        $this->interested(22, 2);
        $this->interested(30, 2);
        $this->interested(24, 2);
        $this->interested(22, 3);
        $this->interested(31, 10);
        $this->interested(40, 10);
        $this->interested(37, 11);

        // Αιτούντες μαθητες αν υποτροφία (user, scholarship)
        $this->userAppliedOnScholarship(21, 1);
        $this->userAppliedOnScholarship(22, 1);
        $this->userAppliedOnScholarship(29, 3);
        $this->userAppliedOnScholarship(30, 4);
        $this->userAppliedOnScholarship(31, 4);
        $this->userAppliedOnScholarship(34, 4);

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

    public function createScholarship($id, $financial_id, $financial_amount, $study_id, $level_id, $criteria_id, $winner_id)
    {
        $scholarship = new Scholarship;
        $scholarship->school_id = $id;
        $scholarship->financial_id = $financial_id;
        $scholarship->financial_amount = $financial_amount;
        $scholarship->study_id = $study_id;
        $scholarship->level_id = $level_id;
        $scholarship->criteria_id = $criteria_id;
        $scholarship->winner_id = $winner_id;
        $scholarship->exam = true;
        $scholarship->exam_date = Carbon::now();
        // $scholarship->terms = $terms;
        $scholarship->end_at = Carbon::now()->addWeeks(3);
        $scholarship->save();
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
        $user = User::find($userID);
        $scholarship = Scholarship::find($scholarshipID);

        $user->scholarship()->toggle($scholarship);
    }

}
