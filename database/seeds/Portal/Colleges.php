<?php

use Illuminate\Database\Seeder;

class Colleges extends Seeder
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
            'logo' => '/upload/avatar/school_1_act-logo.png',
            'background' => $back1,
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
            'background' => $back2,
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
            'background' => $back6,
        ]);

        /*===============   12 HAEC   ================*/
        $school12 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Hellenic American College', 'email' => 'info@haec.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'haec'])->id,
            'address' => 'Μασσαλίας 22',
            'city' => 'Αθήνα',
            'phone' => 2103680950,
            'type_id' => 1,
            'website' => 'haec.gr',
            'approved' => 1,
            'about' => 'Στο Hellenic American College πιστεύουμε ότι υπάρχουν αρκετοί λόγοι για να σπουδάσει κανείς στο Κολλέγιό μας. Υπάρχουν, ωστόσο, κάποιοι λόγοι που επισημαίνουν οι σπουδαστές και οι καθηγητές μας και για τους οποίους είμαστε ιδιαιτέρως υπερήφανοι:

        Σπουδάζετε σε ένα πραγματικά υποστηρικτικό περιβάλλον που έχει επίκεντρο το σπουδαστή και στο οποίο έχετε άμεση και εκτενή επικοινωνία με τους καθηγητές σας.
        Με την ολοκλήρωση των σπουδών σας στο Hellenic American College λαμβάνετε Πτυχίο Αμερικανικού Πανεπιστημίου και αποκτάτε τις κατάλληλες επαγγελματικές δεξιότητες και πιστοποιήσεις.
        Από την αρχή των σπουδών σας μέχρι και την αποφοίτησή σας, συνεργάζεστε με τον Σύμβουλο Σταδιοδρομίας του Hellenic American College, ο οποίος θα σας βοηθήσει να δημιουργήσετε ένα ισχυρό σύνολο δεξιοτήτων και εμπειριών για τη μετέπειτα επαγγελματική σας σταδιοδρομία.
        Θα αποκτήσετε εξαιρετικές επικοινωνιακές δεξιότητες στο γραπτό και προφορικό λόγο στα Αγγλικά.
        Οι καθηγητές μας διαθέτουν διεθνές ακαδημαϊκό προφίλ, ενεργή δράση στην έρευνα και αποδίδουν ιδιαίτερη έμφαση στην ποιότητα της διδασκαλίας.',
            'logo' => 'fake/haec-logo.png',
            'background' => $back12,
        ]);

        /*===============   13 ACG   ================*/
        $school13 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'The American College of Greece', 'email' => 'admissions@acg.edu', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'acg'])->id,
            'address' => 'Γραβιάς 6, Αγία Παρασκευή',
            'city' => 'Αθήνα',
            'phone' => 2106009800,
            'type_id' => 1,
            'website' => 'acg.edu',
            'approved' => 1,
            'about' => 'Founded in Smyrna, Asia Minor, in 1875, by missionaries from Boston, Massachusetts, The American College of Greece is the oldest and largest US accredited college or university in Europe.
        For over 140 years, ACG has been offering transformative education and cultivating a fertile intellectual and cultural collaboration between Greece and the United States.
        ACG is an independent, not for profit, nonsectarian, co-educational academic institution. To add distinctive and sustainable value to our students as well as Greece, American education, Hellenic heritage, and the global community through transformative teaching, scholarship, and service. The Admissions Office offers one on one consultations with candidates and their families, conducts tours of the ACG Campus, and organizes information sessions throughout the year. Several times a year, we offer Discover Deree Days, designed to familiarize candidates and their families with the full range of the College’s programs and services.',
            'logo' => 'fake/acg-logo.png',
            'background' => $back13,
        ]);

        /*===============   14 AEGEAN   ================*/
        $school14 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Aegean College', 'email' => 'info@aegeancollege.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'aegean'])->id,
            'address' => 'Βερανζέρου 3',
            'city' => 'Αθήνα',
            'phone' => 2103211228,
            'type_id' => 1,
            'website' => 'aegeancollege.gr',
            'approved' => 1,
            'about' => 'Το Aegean Omiros College διαθέτει υψηλό επίπεδο σε ανθρώπινο δυναμικό, υλικοτεχνική υποδομή καθώς και πολύχρονη εμπειρία σε τριτοβάθμια εκπαίδευση, ώστε να εξασφαλίζει την μέγιστη ποιότητα σπουδών για τους φοιτητές του. Το Aegean College και οι άνθρωποί του εφαρμόζουν στην πράξη την διαχρονική αξία της ανθρωπιστικής παιδείας ταυτόχρονα με τις νέες θεωρίες  της τεχνολογικής εκπαίδευσης. Με βάση αυτήν τη θεμελιώδη αρχή οι στόχοι του Κολεγίου είναι:
        Η διασφάλιση της ποιότητας στο σύνολο των λειτουργιών του Κολεγίου.
        Η οργάνωση και η ανανέωση τόσο της εκπαιδευτικής διαδικασίας όσο και των ακαδημαϊκών προγραμμάτων με κριτήριο τις απαιτήσεις της σύγχρονης ελληνικής αλλά και της ευρωπαϊκής εκπαιδευτικής πραγματικότητας.
        Η δημιουργία και η εφαρμογή ενός στρατηγικού πλάνου ανάπτυξης που προβλέπει τις αλλαγές και τα νέα δεδομένα στην ελληνική και ευρωπαϊκή κοινωνία.
        Η ανάπτυξη και η κινητοποίηση των δημιουργικών δυνατοτήτων και δεξιοτήτων των σπουδαστών επεκτείνοντας την εκπαίδευσή τους και την προσωπική τους καλλιέργεια.
        Η εφαρμογή μιας ενιαίας πολιτικής με στόχο την συστηματική επιμόρφωση των ανθρώπινων πόρων του Κολεγίου.
        Η διαρκής ανανέωση του υλικοτεχνικού εξοπλισμού του Κολεγίου και η εφαρμογή καινοτόμων λύσεων που διασφαλίζουν το υψηλότερο δυνατό εκπαιδευτικό αποτέλεσμα.
        Η οργάνωση προγραμμάτων διά βίου μάθησης με στόχο την επιμόρφωση ενηλίκων και επαγγελματιών με την εφαρμογή των πλέον εξελιγμένων μεθόδων και μέσων στην εκπαιδευτική διαδικασία, όπως το σύγχρονο και ασύγχρονο e-learning.',
            'logo' => 'fake/aegean-logo.png',
            'background' => $back14,
        ]);

        /*===============   15 DEI   ================*/
        $school15 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Dei College', 'email' => 'info@dei.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'dei'])->id,
            'address' => 'Εθνικής Αμύνης 9 & Τσιμισκή 131',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310251888,
            'type_id' => 1,
            'website' => 'dei.edu.gr',
            'approved' => 1,
            'about' => 'Το DEI College είναι ένα Κέντρο Μεταλυκειακής Εκπαίδευσης που ιδρύθηκε το 2009 και έλαβε άδεια λειτουργίας από το Υπουργείο Δια Βίου Μάθησης και Θρησκευμάτων τον Ιούλιο του 2010. Λειτουργούσε όμως ως Εργαστήριο Ελευθέρων Σπουδών από το 1990. Είναι επίσης μέλος ενός μεγαλύτερου εκπαιδευτικού οργανισμού που ιδρύθηκε το 1967.
        Σκοπός του DEI είναι να παρέχει ποιοτική εκπαίδευση σε ανθρώπους με ποικίλη εκπαιδευτική εμπειρία, σε ένα ευχάριστο περιβάλλον οργανωμένο με σχολαστικότητα και με αυστηρά επιλεγμένο εκπαιδευτικό προσωπικό.
        Μέσα από την εμπειρία χρόνων και τη στενή επαφή με φημισμένα Βρετανικά πανεπιστήμια, το DEI μπορεί πλέον να διδάσκει προγράμματα που αξιολογούνται και θεωρούνται ως εφάμιλλα εκείνων που διδάσκονται στη Βρετανία.
        Οι απόφοιτοί του έχουν στελεχώσει μεγάλες Ελληνικές και διεθνείς επιχειρήσεις.',
            'logo' => 'fake/dei-logo.png',
            'background' => $back15,
        ]);

        /*===============   16 ATT   ================*/
        $school16 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Αττικό Κολλέγιο', 'email' => 'info@atticocollege.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'att'])->id,
            'address' => 'Πατησίων & Στουρνάρη 26',
            'city' => 'Αθήνα',
            'phone' => 2108836002,
            'type_id' => 1,
            'website' => 'atticocollege.gr',
            'approved' => 1,
            'about' => 'Με την εμπειρία και την παράδοση 37 ετών, το Αττικό Κολέγιο, σε ένα εξαιρετικό νεοκλασικό κτίριο στο κέντρο της
        Αθήνας, λειτουργεί με σύγχρονες εκπαιδευτικές καινοτομίες, βασισμένες στα Ευρωπαϊκά πρότυπα εκπαίδευσης των ιδρυμάτων με τα οποία συνεργαζόμαστε επί σειρά ετών.Η επιτυχία του Αττικού Κολεγίου χαρακτηρίζεται από τρεις περιόδους σταθμούς στην ανάπτυξη του: Πρώτον, τη δημιουργία του Κολεγίου Δημοσιογραφικών σπουδών το 1989, όπου εξαιρετικά δημοσιογραφικά στελέχη όπως, ο Λυκούργος Κομίνης, ο Γιώργος Παπαδάκης, η Λιάνα Κανέλη, η Μένυα Παπαδοπούλου κ.α. καθώς και οι πανεπιστημιακοί κ.κ. Λοβέρδος, Πασσάς, Τσάτσος, Κατσέλη κ.α, αποτέλεσαν ένα συνδυασμό δημοσιογραφικής και ακαδημαϊκής υπεροχής και στελέχωσαν με τεράστια επιτυχία την ιδιωτική τηλεόραση και μεγάλο μέρος των ΜΜΕ γενικότερα, γεγονός που μας καθιστά πολύ υπερήφανους. Δεύτερον, την επιλογή του Κολεγίου μας για συνεργασία, από το Βρετανικό κρατικό κολέγιο του Cambridge, το 2003, σε προγράμματα σπουδών για την απόκτηση διπλώματος Αγγλίας HND και τη δυνατότητα συνέχισης για την απόκτηση πτυχίου BSc.Τέλος, τη συνεργασία με κορυφαία ευρωπαϊκά πανεπιστήμια, καθιερώνοντας το Αττικό Κολέγιο πρωτοπόρο στην ανάπτυξη προγραμμάτων υγείας και ανθρωπιστικών σπουδών.',
            'logo' => 'fake/att-logo.png',
            'background' => $back16,
        ]);

        /*===============   17 IST   ================*/
        $school17 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Independent Studies of Science and Technology', 'email' => 'info@ist.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'ist'])->id,
            'address' => 'Πειραιώς 72, Μοσχάτο',
            'city' => 'Αθήνα',
            'phone' => 2108836002,
            'type_id' => 1,
            'website' => 'ist.edu.gr',
            'approved' => 1,
            'about' => 'Το IST ιδρύθηκε το 1989 και σήμερα, είναι ένα πολυδύναμο και πολυεπίπεδο εκπαιδευτικό ίδρυμα με άδεια από το Υπουργείο Παιδείας. Ανήκει στον εκπαιδευτικό οργανισμό Γ. Καστρινάκη & Δρακ. Φουντουκάκου, ο οποίος δραστηριοποιείται από το 1967 με μεγάλη επιτυχία στον χώρο της εκπαίδευσης μέσω της ΣΒΙΕ, της πρώτης Σχολής στα Επαγγέλματα Υγείας. Σήμερα, το IST διαθέτει ακαδημαϊκή δομή και οργάνωση εφάμιλλες με εκείνες των φημισμένων Πανεπιστημίων του εξωτερικού, διατηρώντας στενές σχέσεις και συνεργασία με επιχειρήσεις και οργανισμούς για καλύτερη εκπαίδευση και αποκατάσταση των φοιτητών του, ενώ στεγάζεται σε κτίριο διεθνών προδιαγραφών, συνολικής επιφάνειας 9.500 τ.μ., ειδικά κατασκευασμένο για τη λειτουργία ενός εκπαιδευτικού ιδρύματος πανεπιστημιακού επιπέδου.',
            'logo' => 'fake/ist-logo.png',
            'background' => $back17,
        ]);

        /*===============   18 CITY COLLEGE   ================*/
        $school18 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'City College', 'email' => 'acadreg@city.academic.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'citycol'])->id,
            'address' => 'Προξένου Κορομηλά 24',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310224186,
            'type_id' => 1,
            'website' => 'citycollege.sheffield.eu',
            'approved' => 1,
            'about' => 'Το CITY College είναι το Διεθνές Τμήμα του University of Sheffield και εδρεύει στη Θεσσαλονίκη. Το Πανεπιστήμιο του Sheffield είναι ένα από τα παλαιότερα, μεγαλύτερα και καλύτερα κρατικά Πανεπιστήμια της Αγγλίας. Στις παγκόσμιες κατατάξεις βρίσκεται συνεχώς ανάμεσα στα 100 καλύτερα πανεπιστήμια του κόσμου, ενώ στο δυναμικό του συγκαταλέγονται 6 νομπελίστες. Ανήκει στο 1% των καλύτερων Πανεπιστημίων του κόσμου και κατατάσσεται: 29º στην Ευρώπη και 84º στον κόσμο [QS World University Rankings 2016].Το CITY College ιδρύθηκε το 1989 στη Θεσσαλονίκη και έχει καθιερωθεί κατά την εικοσαπενταετή πορεία του ως ένα από τα καλύτερα εκπαιδευτικά ιδρύματα της νοτιοανατολικής Ευρώπης. Δεν είναι απλά ένα συνεργαζόμενο κολέγιο με ξένο πανεπιστήμιο, αλλά ένα πλήρες και αναπόσπαστο κομμάτι του University of Sheffield που λειτουργεί εκτός Βρετανίας με τους ίδιους όρους και κανονισμούς, υπόκειται στους ίδιους ελέγχους αξιολόγησης και προσφέρει τα ίδια προνόμια και τις ίδιες παροχές σπουδών στους φοιτητές του.',
            'logo' => 'fake/citycol-logo.png',
            'background' => $back18,
        ]);

        /*===============   19 ΒΑΚΑΛΟ   ================*/
        $school19 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Βακαλο Art & Design College', 'email' => 'info@vakalo.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'vakalo'])->id,
            'address' => 'Λ. Κατσώνη 26',
            'city' => 'Αθήνα',
            'phone' => 2106442514,
            'type_id' => 1,
            'website' => 'vakalo.gr',
            'approved' => 1,
            'about' => 'Το 1958, μια παρέα διακεκριμένων καλλιτεχνών και διανοούμενων αποφάσισαν να δημιουργήσουν ένα εργαστήριο καλών και εφαρμοσμένων τεχνών που θα γεφύρωνε την καλλιτεχνική ευαισθησία και το στοχασμό του πολιτισμού, με τα αντικείμενα, τις εικόνες και τους χώρους της καθημερινότητας. Το όραμα αυτής της πρώτης εμπνευσμένης ομάδας ενστερνίστηκαν, διαφύλαξαν και εμπλούτισαν μια σειρά δημιουργικών ανθρώπων που συνεργάστηκαν μαζί της και συνεχίζουν να γράφουν μέχρι σήμερα την ιστορία της Σχολής Βακαλό. Το Κολλέγιο Βακαλό είναι η πρώτη σχολή εφαρμοσμένων τεχνών στην Ελλάδα. Ιδρύθηκε το 1958 από τον ζωγράφο και σκηνογράφο Γιώργο Βακαλό, την ποιήτρια και ιστορικό της τέχνης Ελένη Βακαλό, τον ζωγράφο, τ. πρύτανη της ΑΣΚΤ, Παναγιώτη Τέτση, και τον εκδότη της καλλιτεχνικής επιθεώρησης Ζυγός Φραντζή Φραντζισκάκη. Η απόφαση για την ίδρυση της Σχολής προήλθε από τη συνειδητοποίηση αφενός του κρίσιμου ρόλου που διαδραματίζει το Design στην κοινωνία, αφετέρου της πλήρους απουσίας σχετικής εκπαίδευσης στη χώρα μας.',
            'logo' => 'fake/vakalo-logo.png',
            'background' => $back19,
        ]);

        /*===============   20 MEDITERRANEAN COLLEGE ATHENS  ================*/
        $school20 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Mediterranean College Athens', 'email' => 'info@medcollege.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'med'])->id,
            'address' => 'Πατησίων 107 & Πελλήνης 8',
            'city' => 'Αθήνα',
            'phone' => 2108899600,
            'type_id' => 1,
            'website' => 'medcollege.edu.gr',
            'approved' => 1,
            'about' => 'Στον εικοστό πρώτο αιώνα, το Mediterranean College (MC), σε συνεργασία με ισχυρά πανεπιστήμια του εξωτερικού, αναδύεται ως ένα ιδιωτικό ίδρυμα ανώτατης εκπαίδευσης με ηγετικό ρόλο στους κλάδους σπουδών της Οικονομίας, της Διοίκησης, της Πληροφορικής, των Ανθρωπιστικών Επιστημών,του Τουρισμού, των Επαγγελμάτων Υγείας,  των Μηχανικών προσφέροντας προγράμματα υψηλής ποιότητας σε ένα περιβάλλον γαλούχησης όπου η ποιότητα υπαγορεύεται πάντα από τις ανάγκες των φοιτητών. Για να πραγματοποιήσει το όραμά του για ακαδημαϊκή διάκριση, επιτυχία των φοιτητών του, εκπαιδευτική και τεχνολογική καινοτομία, καθώς και για κοινωνική προσφορά, το Κολλέγιο προσελκύει και εξασφαλίζει αφοσιωμένους επαγγελματίες και εκπαιδευτικό προσωπικό με εξαιρετικές ικανότητες, αναγνωρισμένο για την εξειδίκευσή του στον τομέα της διδασκαλίας, της καθοδήγησης φοιτητών, της κατάρτισης, της έρευνας και της παροχής υπηρεσιών. Δομημένο σε αυτές τις σταθερές βάσεις και αρχές, το MC, αποσκοπεί στην υλοποίηση του οράματός του, να γίνει ένα μοναδικό διεθνές κέντρο μάθησης στον ελλαδικό χώρο.',
            'logo' => 'fake/med-logo.png',
            'background' => $back20,
        ]);
        //

        /*===============   21 iCBS THESSALONIKI ================*/
        $school21 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'iCBS Thessaloniki Business College ', 'email' => 'icbs@icbs.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'icbsthess'])->id,
            'address' => 'Θεσσαλονίκης 108, Γαλήνη Ωραιοκάστρου',
            'city' => 'θεσσαλονίκη',
            'phone' => 2310698598,
            'type_id' => 1,
            'website' => 'icbsThess.gr',
            'approved' => 1,
            'about' => 'Το ICBS Thessaloniki Business College, ιδρύθηκε το 1977 από μια ομάδα επιστημόνων με σκοπό να καλύψει την ανάγκη για επιχειρησιακή εκπαίδευση (Βusiness Studies). Η επέκταση των δράσεων και σε άλλες πόλεις ακολούθησε. Από την πρώτη στιγμή η φιλοσοφία του βασίστηκε στο πλαίσιο:

                       ΕΚΠΑΙΔΕΥΣΗ
                       κατά τα πλέον αποτελεσματικά ευρωπαϊκά και διεθνή πρότυπα

                       ΠΡΟΓΡΑΜΜΑΤΑ ΣΠΟΥΔΩΝ
                       προσαρμοσμένα στις ανάγκες της αγοράς αλλά και τις μελλοντικές εξελίξεις στο παγκοσμιοποιημένο περιβάλλον.

                       ΔΙΔΑΣΚΟΝΤΕΣ
                       που συνδυάζουν την ακαδημαϊκή υποδομή με την πρακτική εμπειρία.

                       ΑΝΘΡΩΠΟΚΕΝΤΡΙΚΗ ΠΡΟΣΕΓΓΙΣΗ
                       ώστε να αναπτύσσεται αμεσότητα, σχέσεις σε γόνιμο εκπαιδευτικό κλίμα ώστε να διευκολύνεται η μάθηση.

                       ΕΜΦΑΣΗ ΣΤΗΝ ΕΠΙΧΕΙΡΗΜΑΤΙΚΟΤΗΤΑ
                       ώστε καινοτόμες και νέες ιδέες να δημιουργούνται και κυρίως να εξελίσσονται σε αποτελεσματική επιχειρηματική δράση.',
            'logo' => 'fake/icbs-logo.png',
            'background' => $back21,
        ]);

        /*===============   22 iCBS ATHENS ================*/
        $school22 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'iCBS Athens International College ', 'email' => 'icbs-abs@icbs.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'icbsath'])->id,
            'address' => 'Λ. Ιωνίας 200 & Ιακωβατων, Κ. Πατήσια,',
            'city' => 'Αθήνα',
            'phone' => 2102114671,
            'type_id' => 1,
            'website' => 'icbs.gr',
            'approved' => 1,
            'about' => 'Το ICBS Thessaloniki Business College, ιδρύθηκε το 1977 από μια ομάδα επιστημόνων με σκοπό να καλύψει την ανάγκη για επιχειρησιακή εκπαίδευση (Βusiness Studies). Η επέκταση των δράσεων και σε άλλες πόλεις ακολούθησε. Από την πρώτη στιγμή η φιλοσοφία του βασίστηκε στο πλαίσιο:

                       ΕΚΠΑΙΔΕΥΣΗ
                       κατά τα πλέον αποτελεσματικά ευρωπαϊκά και διεθνή πρότυπα

                       ΠΡΟΓΡΑΜΜΑΤΑ ΣΠΟΥΔΩΝ
                       προσαρμοσμένα στις ανάγκες της αγοράς αλλά και τις μελλοντικές εξελίξεις στο παγκοσμιοποιημένο περιβάλλον.

                       ΔΙΔΑΣΚΟΝΤΕΣ
                       που συνδυάζουν την ακαδημαϊκή υποδομή με την πρακτική εμπειρία.

                       ΑΝΘΡΩΠΟΚΕΝΤΡΙΚΗ ΠΡΟΣΕΓΓΙΣΗ
                       ώστε να αναπτύσσεται αμεσότητα, σχέσεις σε γόνιμο εκπαιδευτικό κλίμα ώστε να διευκολύνεται η μάθηση.

                       ΕΜΦΑΣΗ ΣΤΗΝ ΕΠΙΧΕΙΡΗΜΑΤΙΚΟΤΗΤΑ
                       ώστε καινοτόμες και νέες ιδέες να δημιουργούνται και κυρίως να εξελίσσονται σε αποτελεσματική επιχειρηματική δράση.',
            'logo' => 'fake/icbs-logo.png',
            'background' => $back22,
        ]);

        /*===============   23 iCBS LARISSA ================*/
        $school23 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'iCBS Larissa Business College ', 'email' => 'icbs-lbs@icbs.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'icbslar'])->id,
            'address' => 'Ηπείρου 96-98',
            'city' => 'Λάρισα',
            'phone' => 2410671177,
            'type_id' => 1,
            'website' => 'icbsLA.gr',
            'approved' => 1,
            'about' => 'Το ICBS Thessaloniki Business College, ιδρύθηκε το 1977 από μια ομάδα επιστημόνων με σκοπό να καλύψει την ανάγκη για επιχειρησιακή εκπαίδευση (Βusiness Studies). Η επέκταση των δράσεων και σε άλλες πόλεις ακολούθησε. Από την πρώτη στιγμή η φιλοσοφία του βασίστηκε στο πλαίσιο:

                       ΕΚΠΑΙΔΕΥΣΗ
                       κατά τα πλέον αποτελεσματικά ευρωπαϊκά και διεθνή πρότυπα

                       ΠΡΟΓΡΑΜΜΑΤΑ ΣΠΟΥΔΩΝ
                       προσαρμοσμένα στις ανάγκες της αγοράς αλλά και τις μελλοντικές εξελίξεις στο παγκοσμιοποιημένο περιβάλλον.

                       ΔΙΔΑΣΚΟΝΤΕΣ
                       που συνδυάζουν την ακαδημαϊκή υποδομή με την πρακτική εμπειρία.

                       ΑΝΘΡΩΠΟΚΕΝΤΡΙΚΗ ΠΡΟΣΕΓΓΙΣΗ
                       ώστε να αναπτύσσεται αμεσότητα, σχέσεις σε γόνιμο εκπαιδευτικό κλίμα ώστε να διευκολύνεται η μάθηση.

                       ΕΜΦΑΣΗ ΣΤΗΝ ΕΠΙΧΕΙΡΗΜΑΤΙΚΟΤΗΤΑ
                       ώστε καινοτόμες και νέες ιδέες να δημιουργούνται και κυρίως να εξελίσσονται σε αποτελεσματική επιχειρηματική δράση.',
            'logo' => 'fake/icbs-logo.png',
            'background' => $back23,
        ]);
        //

        /*===============   25 AKTO ATHENS ================*/
        $school24 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'AKTO', 'email' => 'information@aktocollege.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'aktoath'])->id,
            'address' => 'Ευελπίδων 11Α',
            'city' => 'Αθήνα',
            'phone' => 2410671177,
            'type_id' => 1,
            'website' => 'akto.gr',
            'approved' => 1,
            'about' => 'O ΑΚΤΟ είναι ο μεγαλύτερος εκπαιδευτικός όμιλος Τέχνης, Design & Media στην Ελλάδα. Οι Εφαρμοσμένες Τέχνες διδάσκονται στον ΑΚΤΟ με ένα σφαιρικό, διακλαδικό πνεύμα που συνδυάζει μοναδικά την επιστημονική Θεωρία με τη καλλιτεχνική Πράξη. Αποστολή μας είναι να δώσουμε ώθηση στους νέους, να τους βοηθήσουμε να αναδείξουν τα ταλέντα και τις δεξιότητες τους και να ανακαλύψουν τη δική τους δημιουργική φωνή. Με την επικύρωση του κρατικού Βρετανικού Πανεπιστημίου Middlesex, ο ΑΚΤΟ προσφέρει μεταπτυχιακά και προπτυχιακά προγράμματα σπουδών σε επίπεδο Bachelor of Arts Honours Degree και Master of Arts in Design. Παράλληλα λειτουργούν και διετή προγράμματα επαγγελματικής κατάρτισης – ΙΕΚ, προσφέροντας μεγαλύτερη ευελιξία στην διάρκεια παρακολούθησης και τα δίδακτρα, με το κύρος και την αξιοπιστία, του πιο εξειδικευμένου εκπαιδευτικού οργανισμού στις περιοχές του art & design.',
            'logo' => 'fake/akto-logo.png',
            'background' => $back24,
        ]);

        /*===============   26 AKTO THESSALONIKI ================*/
        $school25 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'AKTO', 'email' => 'informationThess@aktocollege.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'aktothess'])->id,
            'address' => '26ης Οκτωβρίου 38-40 & Ανδρέου Γεωργίου',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2410671177,
            'type_id' => 1,
            'website' => 'aktoThess.gr',
            'approved' => 1,
            'about' => 'O ΑΚΤΟ είναι ο μεγαλύτερος εκπαιδευτικός όμιλος Τέχνης, Design & Media στην Ελλάδα. Οι Εφαρμοσμένες Τέχνες διδάσκονται στον ΑΚΤΟ με ένα σφαιρικό, διακλαδικό πνεύμα που συνδυάζει μοναδικά την επιστημονική Θεωρία με τη καλλιτεχνική Πράξη. Αποστολή μας είναι να δώσουμε ώθηση στους νέους, να τους βοηθήσουμε να αναδείξουν τα ταλέντα και τις δεξιότητες τους και να ανακαλύψουν τη δική τους δημιουργική φωνή. Με την επικύρωση του κρατικού Βρετανικού Πανεπιστημίου Middlesex, ο ΑΚΤΟ προσφέρει μεταπτυχιακά και προπτυχιακά προγράμματα σπουδών σε επίπεδο Bachelor of Arts Honours Degree και Master of Arts in Design. Παράλληλα λειτουργούν και διετή προγράμματα επαγγελματικής κατάρτισης – ΙΕΚ, προσφέροντας μεγαλύτερη ευελιξία στην διάρκεια παρακολούθησης και τα δίδακτρα, με το κύρος και την αξιοπιστία, του πιο εξειδικευμένου εκπαιδευτικού οργανισμού στις περιοχές του art & design.',
            'logo' => 'fake/akto-logo.png',
            'background' => $back25,
        ]);

        /*===============   27 ATH/TECH ================*/
        $school26 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'ATH/TECH Athens Tech College', 'email' => 'info@athtech.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'athtech'])->id,
            'address' => 'Τατοΐου 2 & Όθωνος 77',
            'city' => 'Αθήνα',
            'phone' => 2108088008,
            'type_id' => 1,
            'website' => 'athtech.gr',
            'approved' => 1,
            'about' => 'Το Athens Tech είναι το πρώτο τεχνολογικό εκπαιδευτικό ίδρυμα στην Ελλάδα που συνδυάζει την τεχνολογία, την έρευνα και την επιχειρηματικότητα, με τις ανάγκες της πραγματικής οικονομίας. Χάρη στην συνδυασμένη εμπειρία 45+ ετών των τριών πρωτοπόρων δημιουργών του (BCA College, Intracom Holdings και 24media Group), είναι σε θέση να προσφέρει μια σειρά από εξειδικευμένα εκπαιδευτικά προγράμματα Bachelor και Masters, πιστοποιημένα από το πανεπιστήμιο του Sheffield, ενός εκ των 10 καλύτερων Βρετανικών Πανεπιστημίων. Επιπλέον, το ΑΤΗ/TECH προσφέρει στους φοιτητές του, τόσο την δυνατότητα 9 θέσεων πρακτικής άσκησης στην 24media (Ηuffington Post , Contra gr, Oneman, Ladylike, Νews 247), την Intrasoft International και το BCA College, όσο και την δυνατότητα ερευνητικής εργασίας στο πρότυπο ερευνητικό κέντρο AIT. Σπούδασε την τεχνολογία του αύριο, σήμερα, επιλέγοντας μία σειρά από καινοτόμα εκπαιδευτικά προγράμματα στην επιστήμη των υπολογιστών που προσφέρει το Athens Tech College.',
            'logo' => 'fake/athtech-logo.png',
            'background' => $back26,
        ]);

         /*===============  34 MBS College of Crete ================*/
         $school2 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'MBS College of Crete', 'email' => 'admin@mbs.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'mbs'])->id,
            'address' => 'Ολυμπιονικών 84 & Αντήνορος, Θέρισος',
            'city' => 'Ηράκλειο Κρήτης',
            'phone' => 2810342700,
            'type_id' => 1,
            'website' => 'www.collegeofcrete.gr',
            'approved' => 1,
            'about' => '<p>Εμείς στο MBS College of Crete, μέλος του ομίλου Μ. ΦΟΥΚΑΡΑΚΗ, σας μιλάμε για μια εμπειρία στην ποιοτική και εξειδικευμένη γνώση από το 1979 που δημιουργήσαμε και το πρώτο μας εκπαιδευτήριο.</p>
​                        <p>Σήμερα, μετά από 39 χρόνια μπορούμε και σας μιλάμε για δομές και συνεργασίες κύρους, με διεθνή αποδοχή, για παροχή σύγχρονης Πανεπιστημιακής εκπαίδευσης.
                           Οι διεθνείς αγορές απαιτούν από τους σημερινούς πτυχιούχους ιδιαίτερες γνώσεις και δεξιότητες προκειμένου να εξασφαλίσουν επιτυχημένη καριέρα στο δύσκολο και ανταγωνιστικό εργασιακό περιβάλλον.</p>
                        <p>Το MBS College of Crete είναι Αναγνωρισμένο από το Υπουργείο Παιδείας, προσφέροντας αναγνωρισμένα προπτυχιακά και μεταπτυχιακά προγράμματα ισότιμα των Ελληνικών Δημοσίων Πανεπιστημίων.</p>
                        <p>​Οι διεθνείς συνεργασίες του MBS College of Crete ξεκίνησαν από το 1979, με διακεκριμένα κρατικά Ευρωπαϊκά Πανεπιστήμια, σε συνδυασμό με το άρτια καταρτισμένο ακαδημαϊκό προσωπικό, παρέχουν υψηλής ποιότητας Ανώτατη Εκπαίδευση.
                           Η εκπαίδευση των φοιτητών του MBS College of Crete, πραγματώνεται σε υπερσύγχρονες και άρτια εξοπλισμένες εγκαταστάσεις και εξειδικευμένα εργαστήρια.</p>
                        <p>Η ιδιαίτερη έμφαση στην επιστημονική έρευνα που δίνουν τα συνεργαζόμενα Ευρωπαϊκά Πανεπιστήμια, αποτελεί το κλειδί της επιτυχίας των προγραμμάτων σπουδών τους.
                           Το σύγχρονο εκπαιδευτικό περιβάλλον του MBS College of Crete δημιουργεί τις άριστες προϋποθέσεις υλοποίησης αυτών των προγραμμάτων, σε ένα εκπαιδευτικό περιβάλλον υψηλών προδιαγραφών.</p>',
            'logo' => '/upload/avatar/school_34_mbs-logo.png',
            'background' => $back34,
        ]);

        /*===============  35 Perrotis College================*/
        $school2 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Perrotis College', 'email' => 'info@afs.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'perrotis'])->id,
            'address' => 'Μαρίνου Αντύπα 54, Θέρμη',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310492800,
            'type_id' => 1,
            'website' => 'www.perrotiscollege.edu.gr',
            'approved' => 1,
            'about' => '<p>Αποστολή του ιδρύματος είναι να εκπαιδεύσει νέους και ενήλικες, ώστε να καταρτισθούν επαγγελματικά στις τελευταίες εξελίξεις στον τομέα της γεωργίας, του περιβάλλοντος και των επιστημών ζωής.</p>
            <p>Η Αμερικανική Γεωργική Σχολή Θεσσαλονίκης είναι ένας ανεξάρτητος, μη κερδοσκοπικός εκπαιδευτικός οργανισμός, που ιδρύθηκε το 1904 στη Θεσσαλονίκη για να εξυπηρετήσει τις ανάγκες του πληθυσμού της Ελλάδος και των Βαλκανίων.</p>
            <p>Ως το τριτοβάθμιο τμήμα της το Perrotis College of Agriculture, Environment and Life Sciences προετοιμάζει τους σπουδαστές του να αναλάβουν ηγετικές θέσεις στη διοίκηση επιχειρήσεων αγροδιατροφικού τομέα, την τεχνολογία τροφίμων, τη γεωργία ακριβείας και τη διατήρηση φυσικών πόρων.</p>
            <p>Το Perrotis College ιδρύθηκε το 1995 μέσω μια δωρεάς της κας Αλίκης Περρωτή στη μνήμη του συζύγου της Δημήτρη Περρωτή. </p>',
             'logo' => '/upload/avatar/school_35_perrotis-logo.png',
            'background' => $back35,
        ]);
    }
}
