<?php

use App\Models\School;
use App\Scholio\Scholio;
use Illuminate\Database\Seeder;
use Portal\Portal;

class Colleges extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $background = Portal::createImages('/upload/school/univ.png')->id;

        /*===============   1 ACT   Thessaloniki ================*/

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
            'background' => $background,
        ]);

        new Portal($school1, 5, 'college');

        Scholio::portalStudy($school1, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BS in Computer Science', 'http://www.act.edu/academics/undergraduate-studies/computing/bs-in-computer-science');
        Scholio::portalStudy($school1, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BS in Business Computing', 'http://www.act.edu/academics/undergraduate-studies/computing/bs-in-business-computing');
        Scholio::portalStudy($school1, 'Προπτυχιακές Σπουδές-Bachelor', 'Humanities and Social Sciences', 'BA in English - Communication & New Media', 'http://www.act.edu/academics/undergraduate-studies/english/ba-in-english-communication-new-media');
        Scholio::portalStudy($school1, 'Προπτυχιακές Σπουδές-Bachelor', 'Humanities and Social Sciences', 'BA in English - Language and Literature', 'http://www.act.edu/academics/undergraduate-studies/english/ba-in-english-language-and-literature');
        Scholio::portalStudy($school1, 'Προπτυχιακές Σπουδές-Bachelor', 'Humanities and Social Sciences', 'BA in International Relations', 'http://www.act.edu/academics/undergraduate-studies/international-relations/ba-in-international-relations');
        Scholio::portalStudy($school1, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BS in Business Administration', 'http://www.act.edu/academics/undergraduate-studies/business-administration/bs-in-business-administration');
        Scholio::portalStudy($school1, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MS in Hospitality and Tourism Management', 'http://www.act.edu/academics/graduate-studies/ms-in-hospitality-and-tourism-management');
        Scholio::portalStudy($school1, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Master of Business Administration (MBA)', 'http://www.act.edu/academics/graduate-studies/mba');

        Scholio::portalSocial($school1, 'facebook', 'http://www.facebook.com/pages/Thessaloniki-Greece/The-American-College-of-Thessaloniki/17022594219');
        Scholio::portalSocial($school1, 'instagram', 'https://www.instagram.com/act_greece/');
        Scholio::portalSocial($school1, 'twitter', 'http://twitter.com/ACTGreece');
        Scholio::portalSocial($school1, 'youtube', 'http://www.youtube.com/AnatoliaACT');
        Scholio::portalSocial($school1, 'linkedin', 'http://www.linkedin.com/company/the-american-college-of-thessaloniki?trk=fc_badge');
        Scholio::portalSocial($school1, 'skype', 'skype:actadmissions?call');

        /*===============  2 AMC  Thessaloniki ================*/

//         $school2 = factory(App\Models\School::class)->create([
        //             'user_id' => factory(App\User::class)->create(['name' => 'Μητροπολιτικό Κολλέγιο Θεσσαλονίκης', 'email' => 'info@metropolitan.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'amcThess'])->id,
        //             'address' => 'Ελ. Βενιζέλου 14 & Τσιμισκή',
        //             'city' => 'Θεσσαλονίκη',
        //             'phone' => 2310241010,
        //             'type_id' => 1,
        //             'website' => 'mitropolitiko.edu.gr',
        //             'approved' => 1,
        //             'about' => '<p style="text-align: justify;">Το Μητροπολιτικό Κολλέγιο, από το 1982 μέχρι σήμερα έχει αποστολή και όραμα την πνευματική και μορφωτική ανέλιξη των φοιτητών του. Υπηρετεί με συνέπεια την Τριτοβάθμια Εκπαίδευση, έχοντας εδραιωθεί στη συνείδηση γονέων και φοιτητών ως <strong>η κορυφαία επιλογή ποιοτικών σπουδών Πανεπιστημιακού επιπέδου στην Ελλάδα</strong>, με παραρτήματα στην Αθήνα, τον Πειραιά και τη Θεσσαλονίκη. Η καλλιέργεια της κριτικής σκέψης, η ακαδημαϊκή πρόοδος και η ανάπτυξη του ερευνητικού πνεύματος του κάθε φοιτητή αποτελούν προτεραιότητα για το Κολλέγιό μας και αυτή η εταιρική μας κουλτούρα είναι που μας κάνει<strong> να ξεχωρίζουμε.</strong></p>
        // <p style="text-align: justify;"> Με την εμπειρία <strong>34 χρόνων</strong> <strong>πορείας στην ελληνική εκπαίδευση</strong>, το Μητροπολιτικό Κολλέγιο παρέχει, σε συνεργασία με διακεκριμένα δημόσια Πανεπιστημιακά Ιδρύματα του εξωτερικού, μια σειρά από πιστοποιημένα προγράμματα σπουδών που καλύπτουν σύγχρονα επιστημονικά πεδία και ανταποκρίνονται στις σημερινές απαιτήσεις της ελληνικής και διεθνούς αγοράς εργασίας. Η διάρθρωση του Μητροπολιτικού Κολλεγίου, το Ακαδημαϊκό Συμβούλιο, η τεχνογνωσία και η εμπειρία του ακαδημαϊκού δυναμικού, οι υποδομές και οι κτιριακές εγκαταστάσεις, η βιβλιοθήκη χιλιάδων τίτλων και η τεχνολογική υποστήριξη της εκπαιδευτικής διαδικασίας, αποτελούν τις δικλείδες ασφαλείας για την υψηλή ποιότητα των σπουδών που προσφέρουμε.</p>
        // <p style="text-align: justify;"></p>',
        //
        //             'background' => $background,
        //         ]);

        $school2 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Μητροπολιτικό Κολλέγιο Αθήνας', 'email' => 'info@metropolitan.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'amcAth'])->id,
            'address' => 'Πατησίων 125',
            'city' => 'Αθήνα',
            'phone' => 2106199891,
            'type_id' => 1,
            'website' => 'mitropolitiko.edu.gr',
            'approved' => 1,
            'about' => '<p style="text-align: justify;">Το Μητροπολιτικό Κολλέγιο, από το 1982 μέχρι σήμερα έχει αποστολή και όραμα την πνευματική και μορφωτική ανέλιξη των φοιτητών του. Υπηρετεί με συνέπεια την Τριτοβάθμια Εκπαίδευση, έχοντας εδραιωθεί στη συνείδηση γονέων και φοιτητών ως <strong>η κορυφαία επιλογή ποιοτικών σπουδών Πανεπιστημιακού επιπέδου στην Ελλάδα</strong>, με παραρτήματα στην Αθήνα, τον Πειραιά και τη Θεσσαλονίκη. Η καλλιέργεια της κριτικής σκέψης, η ακαδημαϊκή πρόοδος και η ανάπτυξη του ερευνητικού πνεύματος του κάθε φοιτητή αποτελούν προτεραιότητα για το Κολλέγιό μας και αυτή η εταιρική μας κουλτούρα είναι που μας κάνει<strong> να ξεχωρίζουμε.</strong></p>
<p style="text-align: justify;"> Με την εμπειρία <strong>34 χρόνων</strong> <strong>πορείας στην ελληνική εκπαίδευση</strong>, το Μητροπολιτικό Κολλέγιο παρέχει, σε συνεργασία με διακεκριμένα δημόσια Πανεπιστημιακά Ιδρύματα του εξωτερικού, μια σειρά από πιστοποιημένα προγράμματα σπουδών που καλύπτουν σύγχρονα επιστημονικά πεδία και ανταποκρίνονται στις σημερινές απαιτήσεις της ελληνικής και διεθνούς αγοράς εργασίας. Η διάρθρωση του Μητροπολιτικού Κολλεγίου, το Ακαδημαϊκό Συμβούλιο, η τεχνογνωσία και η εμπειρία του ακαδημαϊκού δυναμικού, οι υποδομές και οι κτιριακές εγκαταστάσεις, η βιβλιοθήκη χιλιάδων τίτλων και η τεχνολογική υποστήριξη της εκπαιδευτικής διαδικασίας, αποτελούν τις δικλείδες ασφαλείας για την υψηλή ποιότητα των σπουδών που προσφέρουμε.</p>
<p style="text-align: justify;"></p>',
            'background' => $background,
        ]);

        new Portal($school2, 5, 'college');

        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BA (Hons) Business Management (Διοίκηση Επιχειρήσεων)', 'http://mitropolitiko.edu.gr/index.php?option=com_tz_portfolio&view=article&id=155&Itemid=447');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc (Hons) Economics for Business (Οικονομικά)', 'http://mitropolitiko.edu.gr/index.php?option=com_tz_portfolio&view=article&id=156&Itemid=448');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BA (Hons) Marketing (Μάρκετινγκ)', 'http://mitropolitiko.edu.gr/index.php?option=com_tz_portfolio&view=article&id=157&Itemid=449');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Ναυτιλιακά - Nautical Education', 'BSc (Hons) Maritime Business (Ναυτιλιακές Σπουδές)', 'http://www.mitropolitiko.edu.gr/index.php?option=com_content&view=article&id=1558&Itemid=1188&lang=el');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Ναυτιλιακά - Nautical Education', 'BSc (Hons) Shipping and Port Management(Διοίκηση Λιμένων και Ναυτιλιακών Επιχειρήσεων)', 'http://www.mitropolitiko.edu.gr/index.php?option=com_content&view=article&id=1557&Itemid=1187');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Ναυτιλιακά - Nautical Education', 'BSc (Hons) Marine Operations Management (Εκπαίδευση Πλοιάρχων Εμπορικού Ναυτικού)', 'https://mitropolitiko.edu.gr/el/proptyxiaka-programmata-bachelors/sxolh-naftiliakwn-spoudwn/2017-08-24-09-07-19/bsc-hons-marine-operations-management');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Ναυτιλιακά - Nautical Education', 'BSc (Hons) Marine Engineering and Management (Εκπαίδευση Μηχανικών Εμπορικού Ναυτικού)', 'https://mitropolitiko.edu.gr/el/proptyxiaka-programmata-bachelors/sxolh-naftiliakwn-spoudwn/2017-08-24-09-07-19/beng-hons-marine-engineering-management');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc (Hons) Computing (Πληροφορική)', 'http://www.mitropolitiko.edu.gr/index.php?option=com_tz_portfolio&view=article&id=159&Itemid=452');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc (Hons) Computer Networks (Πληροφορική και Δίκτυα Η/Υ)', 'http://www.mitropolitiko.edu.gr/index.php?option=com_tz_portfolio&view=article&id=160&Itemid=454');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Τουρισμός - Tourism', 'BA (Hons) International Hospitality and Tourism Management (Τουρισμός και Ξενοδοχειακές Επιχειρήσεις)', 'http://mitropolitiko.edu.gr/index.php?option=com_tz_portfolio&view=article&id=158&Itemid=450');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Τουρισμός - Tourism', 'BA Culinary Arts and Food Service Development (Επισιτιστικές Τέχνες και Ανάπτυξη Υπηρεσιών Εστίασης)', 'http://www.mitropolitiko.edu.gr/el/proptyxiaka-programmata-bachelors/sxoli-touristikwn/ba-culinary-arts-and-food-service-development');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Τουρισμός - Tourism', 'BA Culinary Arts, Baking and Patisserie  (Αρτοποιία / Ζαχαροπλαστική)', 'http://www.mitropolitiko.edu.gr/el/proptyxiaka-programmata-bachelors/sxoli-touristikwn/ba-culinary-arts-baking-patisserie');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Επιστήμες Υγείας - Health Sciences', 'BSc (Hons) Nursing (Νοσηλευτική)', 'http://www.mitropolitiko.edu.gr/el/proptyxiaka-programmata-bachelors/mitropolitiko-kollegio-sxoli-ygeias/bsc-nursing-sxoli-ptixio-nosileftikis');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Επιστήμες Υγείας - Health Sciences', 'BSc (Hons) Logopeadics (Λογοθεραπεία)', 'http://www.mitropolitiko.edu.gr/index.php?option=com_tz_portfolio&view=article&id=187&Itemid=461');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Επιστήμες Υγείας - Health Sciences', 'BSc (Hons) Physiotherapy (Φυσικοθεραπεία)', 'http://www.mitropolitiko.edu.gr/index.php?option=com_tz_portfolio&view=article&id=163&Itemid=462');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Επιστήμες Υγείας - Health Sciences', 'BSc (Hons) Biomedical Sciences (Βιοϊατρικές Επιστήμες)', 'http://www.mitropolitiko.edu.gr/index.php?option=com_tz_portfolio&view=article&id=164&Itemid=463');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Επιστήμες Υγείας - Health Sciences', 'BSc (Hons) Dietetics (Διαιτολογία)', 'http://www.mitropolitiko.edu.gr/index.php?option=com_tz_portfolio&view=article&id=165&Itemid=464');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Επιστήμες Υγείας - Health Sciences', 'BSc (Hons) Occupational Therapy (Εργοθεραπεία)', 'http://www.mitropolitiko.edu.gr/index.php?option=com_tz_portfolio&view=article&id=166&Itemid=465');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Επιστήμες Υγείας - Health Sciences', 'BSc (Hons) Sports Coaching and Physical Education (Προπονητική και Φυσική Αγωγή)', 'http://www.mitropolitiko.edu.gr/index.php?option=com_content&view=article&id=785&Itemid=893');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Επιστήμες Υγείας - Health Sciences', 'BSc (Hons) Podiatry (Ποδιατρική)', 'https://mitropolitiko.edu.gr/index.php?option=com_content&view=article&id=2264&Itemid=1791');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'BSc (Hons) Psychology (Ψυχολογία)', 'BA (Hons) Early Childhood Studies (Προσχολική Ηλικία)', 'http://www.mitropolitiko.edu.gr/index.php?option=com_tz_portfolio&view=article&id=168&Itemid=458');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'BA (Hons) Special Education (Ειδική Αγωγή)', 'http://www.mitropolitiko.edu.gr/index.php?option=com_tz_portfolio&view=article&id=169&Itemid=459');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Πολυτεχνικές Σπουδές - Engineering', 'BA (Hons) Architecture (RIBA part 1) (Αρχιτεκτονική)', 'http://www.mitropolitiko.edu.gr/index.php?option=com_tz_portfolio&view=article&id=170&Itemid=467');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Πολυτεχνικές Σπουδές - Engineering', 'BEng (Hons) Civil Engineering & Construction (Πολιτικών Μηχανικών)', 'http://www.mitropolitiko.edu.gr/index.php?option=com_tz_portfolio&view=article&id=171&Itemid=468');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Πολυτεχνικές Σπουδές - Engineering', 'BEng (Hons) / MEng Mechanical Engineering and Manufacturing  (Μηχανολόγων Μηχανικών)', 'http://www.mitropolitiko.edu.gr/el/proptyxiaka-programmata-bachelors/polytexnikes-sxoles/beng-meng-mechanical-engineering-manufacturing');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Πολυτεχνικές Σπουδές - Engineering', 'BEng (Hons) Electrical and Electronic Systems (Ηλεκτρολόγων - Ηλεκτρονικών Μηχανικών)', 'http://www.mitropolitiko.edu.gr/index.php?option=com_tz_portfolio&view=article&id=172&Itemid=469');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Πολιτισμός & Επικοινωνία', 'BA in Media Production - Journalism (Δημοσιογραφία)', 'http://www.mitropolitiko.edu.gr/index.php?option=com_tz_portfolio&view=article&id=173&Itemid=471');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Πολιτισμός & Επικοινωνία', 'BA in Media Production - Film Directing (Σκηνοθεσία Κινηματογράφου)', 'http://www.mitropolitiko.edu.gr/index.php?option=com_tz_portfolio&view=article&id=174&Itemid=472');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Πολιτισμός & Επικοινωνία', 'BA (Hons) Music Technology and Production (Μουσική Τεχνολογία και Παραγωγή)', 'http://www.mitropolitiko.edu.gr/index.php?option=com_tz_portfolio&view=article&id=175&Itemid=473');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'University of London Bachelor of Laws (LLB) (Νομική)', 'http://www.mitropolitiko.edu.gr/index.php?option=com_content&view=article&id=469&Itemid=858');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'University of London BSc (Hons) Economics (Οικονομικά)', 'http://www.mitropolitiko.edu.gr/index.php?option=com_content&view=article&id=468&Itemid=859');
        Scholio::portalStudy($school2, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'University of London BSc (Hons) Politics and International Relations (Πολιτικές Επιστήμες και Διεθνείς Σχέσεις)', 'http://www.mitropolitiko.edu.gr/index.php?option=com_content&view=article&id=470&Itemid=856');

        Scholio::portalStudy($school2, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA International Business (Μεταπτυχιακό στη Διοίκηση Επιχειρήσεων)', 'http://mitropolitiko.edu.gr/index.php?option=com_tz_portfolio&view=article&id=176&Itemid=501');
        Scholio::portalStudy($school2, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA (Διοίκηση Επιχειρήσεων) ', 'http://mitropolitiko.edu.gr/index.php?option=com_content&view=article&id=1439&Itemid=1153&lang=el');
        Scholio::portalStudy($school2, 'Μεταπτυχιακές Σπουδές-Master', 'Ναυτιλιακά - Nautical Education', 'MSc International Maritime Business (Μεταπτυχιακό Πρόγραμμα στη Διεθνή Ναυτιλιακή Διοίκηση)', 'https://mitropolitiko.edu.gr/index.php?option=com_content&view=article&id=2241&Itemid=1324');
        Scholio::portalStudy($school2, 'Μεταπτυχιακές Σπουδές-Master', 'Ναυτιλιακά - Nautical Education', 'MSc International Shipping and Logistics (Μεταπτυχιακό Πρόγραμμα στη Διεθνή Ναυτιλία και την Εφοδιαστική Αλυσίδα)', 'https://mitropolitiko.edu.gr/index.php?option=com_content&view=article&id=2242&Itemid=1326&lang=el');
        Scholio::portalStudy($school2, 'Μεταπτυχιακές Σπουδές-Master', 'Τουρισμός - Tourism', 'MBA in Hospitality (Διοίκηση Ξενοδοχειακών Επιχειρήσεων)', 'https://mitropolitiko.edu.gr/index.php?option=com_content&view=article&id=312&Itemid=604');
        Scholio::portalStudy($school2, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'MSc Software Engineering (Μεταπτυχιακό στη Μηχανική Λογισμικού)', 'http://mitropolitiko.edu.gr/index.php?option=com_tz_portfolio&view=article&id=177&Itemid=502');
        Scholio::portalStudy($school2, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'MSc Information Technology (Μεταπτυχιακό στην Τεχνολογία Πληροφοριών)', 'http://mitropolitiko.edu.gr/index.php?option=com_tz_portfolio&view=article&id=178&Itemid=503');
        Scholio::portalStudy($school2, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'MSc Information Security and Computer Forensics (Μεταπτυχιακό στην Ασφάλεια Πληροφοριών και την Ηλεκτρονική Εγκληματολογία)', 'http://mitropolitiko.edu.gr/index.php?option=com_tz_portfolio&view=article&id=179&Itemid=504');
        Scholio::portalStudy($school2, 'Μεταπτυχιακές Σπουδές-Master', 'Επιστήμες Υγείας - Health Sciences', 'MSc Physiotherapy (Μεταπτυχιακό στη Φυσικοθεραπεία)', 'http://mitropolitiko.edu.gr/index.php?option=com_tz_portfolio&view=article&id=180&Itemid=505');
        Scholio::portalStudy($school2, 'Μεταπτυχιακές Σπουδές-Master', 'Επιστήμες Υγείας - Health Sciences', 'MSc Advanced Dietetic Practice (Μεταπτυχιακό Πρόγραμμα στην Προηγμένη Διαιτολογική Πρακτική)', 'http://mitropolitiko.edu.gr/index.php?option=com_content&view=article&id=766&Itemid=891');
        Scholio::portalStudy($school2, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MA Special Educational Needs (SEN) (Μεταπτυχιακό στην Ειδική Αγωγή)', 'http://mitropolitiko.edu.gr/index.php?option=com_tz_portfolio&view=article&id=181&Itemid=506');
        Scholio::portalStudy($school2, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'ΜSc Clinical & Community Psychology (Μεταπτυχιακό στην Κλινική Κοινοτική Ψυχολογία)', 'http://mitropolitiko.edu.gr/index.php?option=com_tz_portfolio&view=article&id=182&Itemid=507');
        Scholio::portalStudy($school2, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MSc Business Psychology (Μεταπτυχιακό στην Ψυχολογία της Εργασίας)', 'http://mitropolitiko.edu.gr/index.php?option=com_tz_portfolio&view=article&id=183&Itemid=508');
        Scholio::portalStudy($school2, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MSc Psychology (Μεταπτυχιακό στην Ψυχολογία)', 'http://mitropolitiko.edu.gr/index.php?option=com_tz_portfolio&view=article&id=184&Itemid=509');
        Scholio::portalStudy($school2, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MA Counselling and Psychotherapy (Μεταπτυχιακό στη Συμβουλευτική και τη Ψυχοθεραπεία)', 'http://mitropolitiko.edu.gr/index.php?option=com_tz_portfolio&view=article&id=185&Itemid=510');
        Scholio::portalStudy($school2, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MSc Applied Positive Psychology and Coaching Psychology [Εφαρμοσμένη Θετική Ψυχολογία και Ψυχολογία Coaching]', 'http://www.mitropolitiko.edu.gr/index.php?option=com_content&view=article&id=1745&Itemid=1205');
        Scholio::portalStudy($school2, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MA Child Psycology for Education (Μεταπτυχιακό στην Ψυχολογία Παιδιών εφαρμοσμένη σε Εκπαιδευτικά Πλαίσια)', 'http://www.mitropolitiko.edu.gr/el/metaptyxiaka-masters/sxoli-antrwpistikwn-epistimwn/metaptixiako-psixologias-ma-child-psychology-for-education');
        Scholio::portalStudy($school2, 'Μεταπτυχιακές Σπουδές-Master', 'Πολυτεχνικές Σπουδές - Engineering', 'MArch Arhitecture and Urbanism (Μεταπτυχιακό στην Αρχιτεκτονική και τον Αστικό Σχεδιασμό)', 'http://mitropolitiko.edu.gr/index.php?option=com_content&view=article&id=1330&Itemid=1048');
        Scholio::portalStudy($school2, 'Μεταπτυχιακές Σπουδές-Master', 'Πολυτεχνικές Σπουδές - Engineering', 'MSc Civil Engineering and the Built Environment (Μεταπτυχιακό Πολιτικών Μηχανικών)', 'http://mitropolitiko.edu.gr/index.php?option=com_content&view=article&id=1329&Itemid=1047');
        Scholio::portalStudy($school2, 'Μεταπτυχιακές Σπουδές-Master', 'Πολυτεχνικές Σπουδές - Engineering', 'MSc Electronic Systems Engineering (Μεταπτυχιακό Ηλεκτρονικών Μηχανικών)', 'http://www.mitropolitiko.edu.gr/index.php?option=com_content&view=article&id=1521&Itemid=1181');
        Scholio::portalStudy($school2, 'Μεταπτυχιακές Σπουδές-Master', 'Πολυτεχνικές Σπουδές - Engineering', 'MSc Electrical Engineering and Computer Systems [Μεταπτυχιακό Ηλεκτρολόγων Μηχανικών και Συστημάτων Η/Υ]', 'http://www.mitropolitiko.edu.gr/index.php?option=com_content&view=article&id=1744&Itemid=1207');

        Scholio::portalSocial($school2, 'facebook', 'https://www.facebook.com/MitropolitikoKollegio/');
        Scholio::portalSocial($school2, 'instagram', 'https://www.instagram.com/mitropolitiko_kollegio/');
        Scholio::portalSocial($school2, 'twitter', 'https://twitter.com/mitropolitiko');
        Scholio::portalSocial($school2, 'youtube', 'https://www.youtube.com/c/Mitropolitiko-kollegio');
        Scholio::portalSocial($school2, 'linkedin', 'https://www.linkedin.com/company/mitropolitiko-kollegio');
        Scholio::portalSocial($school2, 'google', 'https://plus.google.com/+Mitropolitiko-kollegio/posts');

        /*===============   3 NYC   Athens ================*/
        $school3 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'New York College Athens', 'email' => 'nycath@nyc.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'nycath'])->id,
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
            'background' => $background,
        ]);

        new Portal($school3, 5, 'college');

        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BA (Hons) Business Studies (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/ba-hons-business-studies-university-greenwich');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BA (Hons) in Business Studies (Finance) (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/ba-hons-business-studies-finance-university-greenwich');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BA (Hons) in Business Studies (Human Resource Management) (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/ba-hons-business-studies-human-resource-management-university');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BA (Hons) in Business Studies (International Business) (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/ba-hons-business-studies-international-business-university');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BA (Hons) in Business Studies (Logistics) (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/ba-hons-business-studies-logistics-university-greenwich');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BA (Hons) in Business Studies (Marketing) (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/ba-hons-business-studies-marketing-university-greenwich');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Bachelor in Management (Universite Toulouse 1 Capitole)', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bachelor-management-universite-toulouse-1-capitole');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BS Concentration Business Communications (SUNY-ESC)', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bs-concentration-business-communications-suny-esc');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BS Concentration in Business Administration (SUNY-ESC)', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bs-concentration-business-administration-suny-esc');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BS Concentration in Finance (SUNY-ESC)', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bs-concentration-finance-suny-esc');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BS Concentration in International Business (SUNY-ESC)', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bs-concentration-international-business-suny-esc');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BS Concentration in Management (SUNY-ESC)', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bs-concentration-management-suny-esc');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BS Concentration in Marketing (SUNY-ESC)', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bs-concentration-marketing-suny-esc');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BA (Hons) in Business with Shipping (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/shipping/ba-hons-business-shipping-university-greenwich');

        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc in Accounting (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bsc-accounting-national-american-university-distance-learning');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc in Applied Management (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bsc-applied-management-national-american-university-distance');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc in Business Administration (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bsc-business-administration-national-american-university');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc in Business Administration emphasis in Accounting (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bsc-business-administration-emphasis-accounting-national');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc in Business Administration emphasis in Entrepreneurship (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bsc-business-administration-emphasis-entrepreneurship-national');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc in Business Administration emphasis in Financial Management (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bsc-business-administration-emphasis-financial-management');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc in Business Administration emphasis in Human Resource Management (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bsc-business-administration-emphasis-human-resource-management');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc in Business Administration emphasis in Information Systems (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bsc-business-administration-emphasis-information-systems');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc in Business Administration emphasis in International Business (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bsc-business-administration-emphasis-international-business');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc in Business Administration emphasis in Management (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bsc-business-administration-emphasis-management-national');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc in Business Administration emphasis in Marketing (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bsc-business-administration-emphasis-marketing-national-american');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc in Business Administration emphasis in Supply Chain Management (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bsc-business-administration-emphasis-supply-chain-management');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc in Business Administration emphasis in Tourism and Hospitality Management (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bsc-business-administration-emphasis-tourism-and-hospitality');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc in Organizational Leadership (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bsc-organizational-leadership-national-american-university');

        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Τουρισμός - Tourism', 'BA (Hons) in Business Studies with Tourism (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/tourism/ba-hons-business-studies-tourism-university-greenwich');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Τουρισμός - Tourism', 'BSc (Hons) International Hospitality Management (University of Bolton)', 'http://www.nyc.gr/study-at-nyc/undergraduate/tourism/bsc-hons-international-hospitality-management-university-bolton');

        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'BA (Hons) in English Language and English Language Teaching (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/humanities-and-social-sciences/ba-hons-english-language-and-english');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'BA (Hons) in Film Studies (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/humanities-and-social-sciences/ba-hons-film-studies-university-greenwich');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'BA Concentration Communication: Mass Media Production (SUNY-ESC)', 'http://www.nyc.gr/study-at-nyc/undergraduate/humanities-and-social-sciences/ba-concentration-communication-mass-media');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'BA Concentration in Communications (SUNY-ESC)', 'http://www.nyc.gr/study-at-nyc/undergraduate/humanities-and-social-sciences/ba-concentration-communications-suny-esc');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'BA Concentration in International Relations (SUNY-ESC)', 'http://www.nyc.gr/study-at-nyc/undergraduate/humanities-and-social-sciences/ba-concentration-international-relations');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'Extended BA (Hons) International Studies (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/humanities-and-social-sciences/extended-ba-hons-international-studies');

        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Ναυτιλιακά - Nautical Education', 'Bachelor in Marine Engineering (Marine Engineer Officer)', 'http://www.nyc.gr/study-at-nyc/undergraduate/nautical-education/bachelor-marine-engineering-marine-engineer-officer');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Ναυτιλιακά - Nautical Education', 'Bachelor in Navigation (Deck Officer)', 'http://www.nyc.gr/study-at-nyc/undergraduate/nautical-education/bachelor-navigation-deck-officer');

        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Επιστήμες Υγείας - Health Sciences', 'BS Concentration in Psychology (SUNY-ESC)', 'http://www.nyc.gr/study-at-nyc/undergraduate/health-sciences/bs-concentration-psychology-suny-esc');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Επιστήμες Υγείας - Health Sciences', 'BSc (Hons) in Biomedical Sciences (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/health-sciences/bsc-hons-biomedical-sciences-university-greenwich');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Επιστήμες Υγείας - Health Sciences', 'BSc (Hons) in Human Nutrition (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/health-sciences/bsc-hons-human-nutrition-university-greenwich');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Επιστήμες Υγείας - Health Sciences', 'BSc (Hons) in Psychology (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/health-sciences/bsc-hons-psychology-university-greenwich');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Επιστήμες Υγείας - Health Sciences', 'Extended BSc Hons Science Pathway (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/health-sciences/extended-bsc-hons-science-pathway-university-greenwich');

        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BS. in Computer Science (State University of New York -Empire State College)', 'http://www.nyc.gr/study-at-nyc/undergraduate/engineering-and-informatics/bs-computer-science-state-university-new-york');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BS. in Information Systems (SUNY-ESC)', 'http://www.nyc.gr/study-at-nyc/undergraduate/engineering-and-informatics/bs-information-systems-suny-esc');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc (Hons) in Computer Games Programming (University of Bolton)', 'http://www.nyc.gr/study-at-nyc/undergraduate/engineering-and-informatics/bsc-computer-games-programming');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc (Hons) in Computer Networking (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/engineering-and-informatics/bsc-hons-computer-networking-university');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc (Hons) in Computing (University of Bolton)', 'http://www.nyc.gr/study-at-nyc/undergraduate/engineering-and-informatics/bsc-hons-computing-university-bolton');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc (Hons) in Internet Engineering and Web Management (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/engineering-and-informatics/bsc-hons-internet-engineering-and-web');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc in Applied Information Technology (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/engineering-and-informatics/bsc-applied-information-technology-national');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc in Information Technology emphasis in Computer Security and Forensics (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/engineering-and-informatics/bsc-information-technology-emphasis-computer');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc in Information Technology emphasis in Internet Systems Development (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/engineering-and-informatics/bsc-information-technology-emphasis-internet');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc in Information Technology emphasis in Management Information Systems (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/engineering-and-informatics/bsc-information-technology-emphasis');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc in Information Technology emphasis in Network Management/Microsoft (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/engineering-and-informatics/bsc-information-technology-emphasis-network');
        Scholio::portalStudy($school3, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'Extended BEng (Hons) Computer Systems and Software Engineering (Greenwich University)', 'http://www.nyc.gr/study-at-nyc/undergraduate/engineering-and-informatics/extended-beng-hons-computer-systems-and');

        Scholio::portalStudy($school3, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Executive MBA (University of Bolton)', 'http://www.nyc.gr/study-at-nyc/postgraduate/business/executive-mba-university-bolton');
        Scholio::portalStudy($school3, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'The University of Greenwich MBA (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/postgraduate/business/university-greenwich-mba-university-greenwich');

        Scholio::portalStudy($school3, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MA. Second Language Learning and Teaching (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/postgraduate/humanities-and-social-sciences/ma-second-language-learning-and-teaching');
        Scholio::portalStudy($school3, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MPhil - Education Specialisms (University of Bolton)', 'http://www.nyc.gr/study-at-nyc/postgraduate/humanities-and-social-sciences/mphil-education-specialisms-university');
        Scholio::portalStudy($school3, 'Μεταπτυχιακές Σπουδές-Master', 'Τουρισμός - Tourism', 'Master 2 Management- Pathway Management of International Tourism (Universite Toulouse 1 Capitole)', 'http://www.nyc.gr/study-at-nyc/postgraduate/tourism/master-2-management-pathway-management-international-tourism');
        Scholio::portalStudy($school3, 'Μεταπτυχιακές Σπουδές-Master', 'Επιστήμες Υγείας - Health Sciences', 'MPhil - Psychology Specialisms (University of Bolton)', 'http://www.nyc.gr/study-at-nyc/postgraduate/health-sciences/mphil-psychology-specialisms-university-bolton');
        Scholio::portalStudy($school3, 'Μεταπτυχιακές Σπουδές-Master', 'Επιστήμες Υγείας - Health Sciences', 'MSc Cognitive Behavioural Psychotherapies', 'http://www.nyc.gr/study-at-nyc/postgraduate/health-sciences/msc-cognitive-behavioural-therapy-university-bolton');
        Scholio::portalStudy($school3, 'Μεταπτυχιακές Σπουδές-Master', 'Επιστήμες Υγείας - Health Sciences', 'MSc in Psychology (University of Bolton)', 'http://www.nyc.gr/study-at-nyc/postgraduate/health-sciences/msc-psychology-university-bolton');
        Scholio::portalStudy($school3, 'Μεταπτυχιακές Σπουδές-Master', 'Ναυτιλιακά - Nautical Education', 'MSc Global Shipping Management', 'http://www.nyc.gr/study-at-nyc/postgraduate/shipping/msc-global-shipping-management');
        Scholio::portalStudy($school3, 'Μεταπτυχιακές Σπουδές-Master', 'Ναυτιλιακά - Nautical Education', 'MSc in Marine Engineering Management (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/postgraduate/shipping/msc-marine-engineering-management-university-greenwich');
        Scholio::portalStudy($school3, 'Μεταπτυχιακές Σπουδές-Master', 'Πολυτεχνικές Σπουδές - Engineering', 'MSc. in Civil Engineering (University of Bolton)', 'http://www.nyc.gr/study-at-nyc/postgraduate/engineering-and-informatics/msc-civil-engineering-university-bolton');

        Scholio::portalSocial($school3, 'facebook', 'http://www.facebook.com/nyc.gr');
        // Scholio::portalSocial($school, 'instagram', 'https://instagram.com/');
        Scholio::portalSocial($school3, 'twitter', 'http://www.twitter.com/nyc_gr');
        Scholio::portalSocial($school3, 'youtube', 'http://www.youtube.com/user/nycath');
        Scholio::portalSocial($school3, 'linkedin', 'https://www.linkedin.com/company/new-york-college');

        /*===============   4  HAEC  Athens  ================*/
        $school4 = factory(App\Models\School::class)->create([
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
            'background' => $background,
        ]);

        new Portal($school4, 5, 'college');

        Scholio::portalStudy($school4, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Bachelor of Science in Business Administration - Διοίκηση Επιχειρήσεων - Εξειδίκευση στην Επιχειρηματικότητα', 'http://www.haec.gr/el/dioikhsh-epixeiriseon');
        Scholio::portalStudy($school4, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Bachelor of Science in Business Administration - Διοίκηση Επιχειρήσεων - Εξειδίκευση στη Διαχείριση Έργων', 'http://www.haec.gr/el/dioikhsh-epixeiriseon');
        Scholio::portalStudy($school4, 'Προπτυχιακές Σπουδές-Bachelor', 'Πολυτεχνικές Σπουδές - Engineering', 'Bachelor of Science in Engineering - Προπτυχιακό Πρόγραμμα στη Μηχανική', 'http://www.haec.gr/el/michaniki');
        Scholio::portalStudy($school4, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'Bachelor of Science in Information Technology - Προπτυχιακό Πρόγραμμα στην Πληροφορική - Εξειδίκευση στα Δίκτυα (networking)', 'http://www.haec.gr/el/pliroforiki');
        Scholio::portalStudy($school4, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'Bachelor of Science in Information Technology - Προπτυχιακό Πρόγραμμα στην Πληροφορική - Εξειδίκευση στις Τεχνολογίες Πληροφορικής', 'http://www.haec.gr/el/pliroforiki');
        Scholio::portalStudy($school4, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'Bachelor of Science in Information Technology - Προπτυχιακό Πρόγραμμα στην Πληροφορική - Εξειδίκευση στη Διαχείριση Έργου', 'http://www.haec.gr/el/pliroforiki');
        Scholio::portalStudy($school4, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'Bachelor of Science in Information Technology - Προπτυχιακό Πρόγραμμα στην Πληροφορική - Εξειδίκευση στην Επιχειρηματικότητα', 'http://www.haec.gr/el/pliroforiki');
        Scholio::portalStudy($school4, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'Bachelor of Arts in English Language & Literature - Προπτυχιακό Πρόγραμμα στην Αγγλική Γλώσσα και Φιλολογία - Εξειδίκευση στην Αειφόρο Ανάπτυξη', 'http://www.haec.gr/el/proptyxiako-aggliki-filologia');
        Scholio::portalStudy($school4, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'Bachelor of Arts in English Language & Literature - Προπτυχιακό Πρόγραμμα στην Αγγλική Γλώσσα και Φιλολογία - Εξειδίκευση στις Μεταφραστικές Σπουδές ', 'http://www.haec.gr/el/proptyxiako-aggliki-filologia');
        Scholio::portalStudy($school4, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'Bachelor of Arts in English Language & Literature - Προπτυχιακό Πρόγραμμα στην Αγγλική Γλώσσα και Φιλολογία - Εξειδίκευση στο Θέατρο', 'http://www.haec.gr/el/proptyxiako-aggliki-filologia');
        Scholio::portalStudy($school4, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'Bachelor of Arts in English Language & Literature - Προπτυχιακό Πρόγραμμα στην Αγγλική Γλώσσα και Φιλολογία - Εξειδίκευση στη Ψυχολογία', 'http://www.haec.gr/el/proptyxiako-aggliki-filologia');
        Scholio::portalStudy($school4, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'Bachelor of Science in Psychology - Προπτυχιακό Πρόγραμμα στην Ψυχολογία', 'http://www.haec.gr/el/spoudes-psychologia');
        Scholio::portalStudy($school4, 'Προπτυχιακές Σπουδές-Bachelor', 'Fine and Performing Arts', 'Bachelor of Music - Προπτυχιακό Πρόγραμμα στη Μουσική - Εξειδίκευση στις Μουσικές Παραστάσεις', 'http://www.haec.gr/el/spoudes-mousiki');
        Scholio::portalStudy($school4, 'Προπτυχιακές Σπουδές-Bachelor', 'Fine and Performing Arts', 'Bachelor of Music - Προπτυχιακό Πρόγραμμα στη Μουσική - Εξειδίκευση στη Μουσική Θεωρία', 'http://www.haec.gr/el/spoudes-mousiki');
        Scholio::portalStudy($school4, 'Προπτυχιακές Σπουδές-Bachelor', 'Fine and Performing Arts', 'Bachelor of Music - Προπτυχιακό Πρόγραμμα στη Μουσική - Εξειδίκευση στην Ιστορία της Μουσικής', 'http://www.haec.gr/el/spoudes-mousiki');

        Scholio::portalStudy($school4, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'M.A. in Applied Linguistics - Μεταπτυχιακό Πρόγραμμα στην Εφαρμοσμένη Γλωσσολογία', 'http://www.haec.gr/el/metaptyxiako-glossologia');
        Scholio::portalStudy($school4, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'Master of Arts in Conference Interpreting - Μεταπτυχιακό Πρόγραμμα στη Διερμηνεία Συνεδρίων', 'http://www.haec.gr/el/dierminia-synedrion');
        Scholio::portalStudy($school4, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'Master of Science in Psychology - Kλινική Ψυχολογία', 'http://www.haec.gr/el/metaptyxiako-psychologia/mspsy-clinical-psychology-gr');
        Scholio::portalStudy($school4, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'Master of Science in Psychology - Συμβουλευτική Κλινικής Ψυχικής Υγείας', 'http://www.haec.gr/el/metaptyxiako-psychologia/mspsy-mental-health-gr');
        Scholio::portalStudy($school4, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'Master of Arts in Translation - Μεταπτυχιακό Πρόγραμμα στη Μετάφραση', 'http://www.haec.gr/el/metaptyxiako-metafrasi');

        Scholio::portalStudy($school4, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Master of Business Administration - Μεταπτυχιακό Πρόγραμμα στη Διοίκηση Επιχειρήσεων', 'http://www.haec.gr/el/metaptyxiako-dioikisi-epixeiriseon-mba');
        Scholio::portalStudy($school4, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'Master of Science in Information Technology - Business Computing and Big Data Analytics', 'http://www.haec.gr/el/metaptyxiako-pliroforiki/business-bigdata');
        Scholio::portalStudy($school4, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'Master of Science in Information Technology - Εφαρμογές και Ανάπτυξη Λογισμικού', 'http://www.haec.gr/el/metaptyxiako-pliroforiki/anaptyxi-logismikou');
        Scholio::portalStudy($school4, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'Master of Science in Information Technology - Δίκτυα Υπολογιστών και Ασφάλεια Δικτύων', 'http://www.haec.gr/el/metaptyxiako-pliroforiki/diktya-asfalia');

        Scholio::portalSocial($school4, 'facebook', 'https://www.facebook.com/HellenicAmericanCollege');
        Scholio::portalSocial($school4, 'instagram', 'https://www.instagram.com/haecgr/');
        Scholio::portalSocial($school4, 'twitter', 'https://twitter.com/HAEC2');
        Scholio::portalSocial($school4, 'youtube', 'https://www.youtube.com/channel/UCWkwRR0yyA741rq8APoaPEg');
        Scholio::portalSocial($school4, 'linkedin', 'http://www.linkedin.com/company/hellenic-american-college');

        /*===============   5 Deree ACG  Athens ================*/
        $school5 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Deere - The American College of Greece', 'email' => 'admissions@acg.edu', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'acg'])->id,
            'address' => 'Γραβιάς 6, Αγία Παρασκευή',
            'city' => 'Αθήνα',
            'phone' => 2106009800,
            'type_id' => 1,
            'website' => 'acg.edu',
            'approved' => 1,
            'about' => 'Founded in Smyrna, Asia Minor, in 1875, by missionaries from Boston, Massachusetts, The American College of Greece is the oldest and largest US accredited college or university in Europe.
        For over 140 years, ACG has been offering transformative education and cultivating a fertile intellectual and cultural collaboration between Greece and the United States.
        ACG is an independent, not for profit, nonsectarian, co-educational academic institution. To add distinctive and sustainable value to our students as well as Greece, American education, Hellenic heritage, and the global community through transformative teaching, scholarship, and service. The Admissions Office offers one on one consultations with candidates and their families, conducts tours of the ACG Campus, and organizes information sessions throughout the year. Several times a year, we offer Discover Deree Days, designed to familiarize candidates and their families with the full range of the College’s programs and services.',
            'background' => $background,
        ]);

        new Portal($school5, 5, 'college');

        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Accounting with Finance', 'http://www.acg.edu/undergraduate/undergraduate-programs/school-of-business/business-majors/accounting-with-finance/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Finance', 'http://www.acg.edu/undergraduate/undergraduate-programs/school-of-business/business-majors/finance/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'International Business', 'http://www.acg.edu/undergraduate/undergraduate-programs/school-of-business/business-majors/international-business/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Sports Management', 'http://www.acg.edu/undergraduate/undergraduate-programs/school-of-business/business-majors/sports-management/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Management - Operations Management', 'http://www.acg.edu/undergraduate/undergraduate-programs/school-of-business/business-majors/management/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Management - Human Resources Management', 'http://www.acg.edu/undergraduate/undergraduate-programs/school-of-business/business-majors/management/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Entrepreneurship Management', 'http://www.acg.edu/undergraduate/undergraduate-programs/school-of-business/business-majors/entrepreneurship-management/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Shipping Management', 'http://www.acg.edu/undergraduate/undergraduate-programs/school-of-business/business-majors/shipping-management/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Logistics and Supply Chain Management', 'http://www.acg.edu/undergraduate/undergraduate-programs/school-of-business/business-majors/logistics-and-supply-chain-management/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Marketing - Marketing Management', 'http://www.acg.edu/undergraduate/undergraduate-programs/school-of-business/business-majors/marketing/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Marketing - Marketing Communications', 'http://www.acg.edu/undergraduate/undergraduate-programs/school-of-business/business-majors/marketing/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Management Information Systems', 'http://www.acg.edu/undergraduate/undergraduate-programs/school-of-business/business-majors/management-information-systems/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Τουρισμός - Tourism', 'International Tourism and Hospitality Management', 'http://www.acg.edu/undergraduate/undergraduate-programs/school-of-business/business-majors/international-tourism-and-hospitality-management/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Liberal Arts & Sciences', 'Communication', 'http://www.acg.edu/undergraduate/undergraduate-programs/school-of-liberal-arts-sciences/liberal-arts-sciences-majors/communication/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Liberal Arts & Sciences', 'Economics', 'http://www.acg.edu/undergraduate/undergraduate-programs/school-of-liberal-arts-sciences/liberal-arts-sciences-majors/economics/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Liberal Arts & Sciences', 'English and American Literature', 'http://www.acg.edu/undergraduate/undergraduate-programs/school-of-liberal-arts-sciences/liberal-arts-sciences-majors/english/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Liberal Arts & Sciences', 'English Literature with Linguistics', 'http://www.acg.edu/undergraduate/undergraduate-programs/school-of-liberal-arts-sciences/liberal-arts-sciences-majors/english/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Liberal Arts & Sciences', 'Environmental Studies', 'http://www.acg.edu/undergraduate/undergraduate-programs/school-of-liberal-arts-sciences/liberal-arts-sciences-majors/environmental-studies/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Liberal Arts & Sciences', 'History', 'http://www.acg.edu/undergraduate/undergraduate-programs/school-of-liberal-arts-sciences/liberal-arts-sciences-majors/history/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Liberal Arts & Sciences', 'Philosophy', 'http://www.acg.edu/undergraduate/undergraduate-programs/school-of-liberal-arts-sciences/liberal-arts-sciences-majors/philosophy/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Liberal Arts & Sciences', 'Sociology', 'http://www.acg.edu/undergraduate/undergraduate-programs/school-of-liberal-arts-sciences/liberal-arts-sciences-majors/sociology/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Liberal Arts & Sciences', 'Psychology', 'http://www.acg.edu/undergraduate/undergraduate-programs/school-of-liberal-arts-sciences/liberal-arts-sciences-majors/psychology/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'Information Technology - Digital Media Technologies', 'http://www.acg.edu/undergraduate/undergraduate-programs/school-of-liberal-arts-sciences/liberal-arts-sciences-majors/information-technology/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'Information Technology - Network Technologies', 'http://www.acg.edu/undergraduate/undergraduate-programs/school-of-liberal-arts-sciences/liberal-arts-sciences-majors/information-technology/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'Information Technology - Software Development', 'http://www.acg.edu/undergraduate/undergraduate-programs/school-of-liberal-arts-sciences/liberal-arts-sciences-majors/information-technology/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Fine and Performing Arts', 'Music', 'http://www.acg.edu/undergraduate/undergraduate-programs/frances-rich-school-of-fine-performing-arts/fine-performing-arts-majors/music-music-performance/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Fine and Performing Arts', 'Music Performance', 'http://www.acg.edu/undergraduate/undergraduate-programs/frances-rich-school-of-fine-performing-arts/fine-performing-arts-majors/music-music-performance/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Fine and Performing Arts', 'Theatre Arts', 'http://www.acg.edu/undergraduate/undergraduate-programs/frances-rich-school-of-fine-performing-arts/fine-performing-arts-majors/theater-arts/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Fine and Performing Arts', 'Art History', 'http://www.acg.edu/undergraduate/undergraduate-programs/frances-rich-school-of-fine-performing-arts/fine-performing-arts-majors/art-history/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Fine and Performing Arts', 'Graphic Design', 'http://www.acg.edu/undergraduate/undergraduate-programs/frances-rich-school-of-fine-performing-arts/fine-performing-arts-majors/graphic-design/');
        Scholio::portalStudy($school5, 'Προπτυχιακές Σπουδές-Bachelor', 'Fine and Performing Arts', 'Visual Arts', 'http://www.acg.edu/undergraduate/undergraduate-programs/frances-rich-school-of-fine-performing-arts/fine-performing-arts-majors/visual-arts/');
        Scholio::portalStudy($school5, 'Μεταπτυχιακές Σπουδές-Master', 'Liberal Arts & Sciences', 'MS in Counseling Psychology and Psychotherapy', 'http://www.acg.edu/graduate/school-of-graduate-professional-education/masters-degree-programs/master-in-counseling-psychology-psychotherapy/');
        Scholio::portalStudy($school5, 'Μεταπτυχιακές Σπουδές-Master', 'Liberal Arts & Sciences', 'MA in Applied Educational Psychology', 'http://www.acg.edu/graduate/school-of-graduate-professional-education/masters-degree-programs/master-in-applied-educational-psychology/');
        Scholio::portalStudy($school5, 'Μεταπτυχιακές Σπουδές-Master', 'Liberal Arts & Sciences', 'MA in Strategic Communication and Public Relations', 'http://www.acg.edu/graduate/school-of-graduate-professional-education/masters-degree-programs/master-in-strategic-communication-public-relations/');
        Scholio::portalStudy($school5, 'Μεταπτυχιακές Σπουδές-Master', 'Liberal Arts & Sciences', 'MA in Digital Communication and Social Media', 'http://www.acg.edu/graduate/school-of-graduate-professional-education/masters-degree-programs/master-in-digital-communication-social-media/');
        Scholio::portalStudy($school5, 'Μεταπτυχιακές Σπουδές-Master', 'Liberal Arts & Sciences', 'MA in Teaching English to Speakers of Other Languages (TESOL)', 'http://www.acg.edu/graduate/school-of-graduate-professional-education/masters-degree-programs/master-in-teaching-english-to-speakers-of-other-languages/');
        Scholio::portalStudy($school5, 'Μεταπτυχιακές Σπουδές-Master', 'Liberal Arts & Sciences', 'MS in Data Science', 'http://www.acg.edu/graduate/school-of-graduate-professional-education/masters-degree-programs/master-of-science-ms-in-data-science/');

        Scholio::portalSocial($school5, 'facebook', 'https://www.facebook.com/pages/Deree-The-American-College-of-Greece/181122835244320');
        Scholio::portalSocial($school5, 'instagram', 'https://www.instagram.com/deree_acg/');
        Scholio::portalSocial($school5, 'twitter', 'https://twitter.com/DEREE_ACG');
        Scholio::portalSocial($school5, 'youtube', 'https://www.youtube.com/user/DereeCollegeTube');
        Scholio::portalSocial($school5, 'linkedin', 'https://www.linkedin.com/edu/school?id=21051&trk=edu-cp-title');

        /*===============   6 AEGEAN   Athens ================*/
        $school6 = factory(App\Models\School::class)->create([
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
            'background' => $background,
        ]);

        new Portal($school6, 5, 'college');

        Scholio::portalStudy($school6, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc (Hons) Business Administration - Διοίκηση Επιχειρήσεων', 'https://aegeancollege.gr/programma/dioikisi-epixeiriseon/');
        Scholio::portalStudy($school6, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc (Hons) Computing and Information Systems - Πληροφορική', 'https://aegeancollege.gr/programma/pliroforiki-computing/');
        Scholio::portalStudy($school6, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'BSc (Hons) Clinical Speech and Language Pathology - Λογοθεραπεία', 'https://aegeancollege.gr/programma/logotherapeia/');
        Scholio::portalStudy($school6, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'BSc (Hons) Pre Primary Education with Special Needs - Ειδική Αγωγή', 'https://aegeancollege.gr/programma/eidiki-agogi/');
        Scholio::portalStudy($school6, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'BSc (Hons) Pre Primary Education - Προσχολική εκπαίδευση', 'https://aegeancollege.gr/programma/paidagogika/');
        Scholio::portalStudy($school6, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'BSc (Hons) Psychology Science - Ψυχολογία', 'https://aegeancollege.gr/programma/psyxologia/');
        Scholio::portalStudy($school6, 'Προπτυχιακές Σπουδές-Bachelor', 'Επιστήμες Υγείας - Health Sciences', 'BSc (Hons) Occupational Therapy (Applied Science) - Εργοθεραπεία', 'https://aegeancollege.gr/programma/spoudes-ergotherapeia/');
        Scholio::portalStudy($school6, 'Προπτυχιακές Σπουδές-Bachelor', 'Επιστήμες Υγείας - Health Sciences', 'BSc (Hons) Physiotherapy (Applied) - Φυσικοθεραπεία', 'https://aegeancollege.gr/programma/fysikotherapeia/');
        Scholio::portalStudy($school6, 'Προπτυχιακές Σπουδές-Bachelor', 'Επιστήμες Υγείας - Health Sciences', 'BSc (Hons) Midwifery (Applied)/ BSc (Hons) - Μαιευτική', 'https://aegeancollege.gr/programma/spoudes-maieutiki/');
        Scholio::portalStudy($school6, 'Προπτυχιακές Σπουδές-Bachelor', 'Επιστήμες Υγείας - Health Sciences', 'BSc (Hons) Dietetics - Διαιτολογία', 'https://aegeancollege.gr/programma/spoudes-diatrofologia/');
        Scholio::portalStudy($school6, 'Προπτυχιακές Σπουδές-Bachelor', 'Τουρισμός - Tourism', 'Bsc (Hons) Hotel Facilities Management - Διοίκηση Ξενοδοχειακών Μονάδων', 'https://aegeancollege.gr/programma/touristika-spoudes/');
        Scholio::portalStudy($school6, 'Προπτυχιακές Σπουδές-Bachelor', 'Ναυτιλιακά - Nautical Education', 'BSc (Hons) in Shipping Management - Ναυτιλιακά', 'https://aegeancollege.gr/programma/nautiliaka/');
        Scholio::portalStudy($school6, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA Leadership & Management Development - Ηγεσία και Ανάπτυξη Διοίκησης', 'https://aegeancollege.gr/programma/mba-dioikisi/');
        Scholio::portalStudy($school6, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA Marketing', 'https://aegeancollege.gr/programma/mba-marketing/');
        Scholio::portalStudy($school6, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA Accounting and Finance - Χρηματοοικονομικά', 'https://aegeancollege.gr/programma/mba-xrimatooikonomika/');
        Scholio::portalStudy($school6, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA Human Resources Management - Διοίκηση Ανθρώπινου Δυναμικού', 'https://aegeancollege.gr/programma/mba-hr/');
        Scholio::portalStudy($school6, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA Ηealth Management - Διαχείριση Μονάδων Υγείας', 'https://aegeancollege.gr/programma/mba-ygeia/');
        Scholio::portalStudy($school6, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA Ecological Systems Management - Διαχείριση Οικολογικών Συστημάτων', 'https://aegeancollege.gr/programma/mba-oikologika-systimata/');
        Scholio::portalStudy($school6, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MSc Cognitive Behavioural Therapy with Counselling Skills - Γνωσιακή-Συμπεριφορική Ψυχοθεραπεία με Δεξιότητες Συμβουλευτικής', 'https://aegeancollege.gr/programma/metaptyxiako-symvouleutiki-cbt/');
        Scholio::portalStudy($school6, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MSc Early Childhood Education with Special Needs - Ειδική Αγωγή', 'https://aegeancollege.gr/programma/metaptyxiako-eidiki-agogi/');
        Scholio::portalStudy($school6, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MSc Early Childhood Education - Προσχολική Αγωγή', 'https://aegeancollege.gr/programma/metaptyxiako-prosxoliki-agogi/');
        Scholio::portalStudy($school6, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MSc School Psychology - Σχολική Ψυχολογία', 'https://aegeancollege.gr/programma/metaptyxiako-sxoliki-psyxologia/');
        Scholio::portalStudy($school6, 'Μεταπτυχιακές Σπουδές-Master', 'Ναυτιλιακά - Nautical Education', 'ΜSc in Shipping Management - Διοίκηση Ναυτιλιακών Επιχειρήσεων', 'https://aegeancollege.gr/programma/nautiliaka-metaptyxiako/');

        Scholio::portalSocial($school6, 'facebook', 'https://www.facebook.com/AegeanOmirosCollege/');
        Scholio::portalSocial($school6, 'instagram', 'https://www.instagram.com/aegeancollege/');
        Scholio::portalSocial($school6, 'twitter', 'https://twitter.com/aegeancollege?lang=el');
        Scholio::portalSocial($school6, 'youtube', 'https://www.youtube.com/user/AegeanCollege');

        /*===============   7 DEI  Thessaloniki ================*/
        $school7 = factory(App\Models\School::class)->create([
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
            'background' => $background,
        ]);

        new Portal($school7, 5, 'college');

        Scholio::portalStudy($school7, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'LLB Bachelor of Laws (University of Northampton) - Νομική', 'https://www.dei.edu.gr/el/proptuxiaka-programmata/tmima-nomikis/nomiki-uon');
        Scholio::portalStudy($school7, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'LLB Bachelor of Laws (University of London) - Νομική', 'https://www.dei.edu.gr/el/proptuxiaka-programmata/tmima-nomikis/nomiki-uol');
        Scholio::portalStudy($school7, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'BSc Psychology (University of Northampton)', 'https://www.dei.edu.gr/el/proptuxiaka-programmata/tmima-psyxologia/psyxologia');
        Scholio::portalStudy($school7, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc Accounting and Finance (University of London)', 'https://www.dei.edu.gr/el/proptuxiaka-programmata/tmhma-oikonomikwn-k-epixeirhmatikhs-kainotomias/logistiki-kai-xrimatooikonomika-bsc-accounting-and-finance');
        Scholio::portalStudy($school7, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc Banking and Finance (University of London)', 'https://www.dei.edu.gr/el/proptuxiaka-programmata/tmhma-oikonomikwn-k-epixeirhmatikhs-kainotomias/trapeziki-kai-xrimatooikonomika-bsc-banking-and-finance');
        Scholio::portalStudy($school7, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc Business and Management (University of London)', 'https://www.dei.edu.gr/el/proptuxiaka-programmata/tmhma-oikonomikwn-k-epixeirhmatikhs-kainotomias/dioikisi-kai-diaxeirisi-epixeiriseon-bsc-business-and-management');
        Scholio::portalStudy($school7, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BA Business Studies (University of Northampton)', 'https://www.dei.edu.gr/el/proptuxiaka-programmata/tmhma-oikonomikwn-k-epixeirhmatikhs-kainotomias/dioikis-epixeiriseon-business-studies');
        Scholio::portalStudy($school7, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc Development & Economics (University of London)', 'https://www.dei.edu.gr/el/proptuxiaka-programmata/tmhma-oikonomikwn-k-epixeirhmatikhs-kainotomias/anaptiksi-kai-xrimatooikonomika-bsc-development-economics');
        Scholio::portalStudy($school7, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc Economics (University of London)', 'https://www.dei.edu.gr/el/proptuxiaka-programmata/tmhma-oikonomikwn-k-epixeirhmatikhs-kainotomias/oikonomika-bsc-economics');
        Scholio::portalStudy($school7, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc Economics and Finance (University of London)', 'https://www.dei.edu.gr/el/proptuxiaka-programmata/tmhma-oikonomikwn-k-epixeirhmatikhs-kainotomias/oikonomika-kai-xrimatooikonomika-bsc-economics-finance');
        Scholio::portalStudy($school7, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc Economics and Management (University of London)', 'https://www.dei.edu.gr/el/proptuxiaka-programmata/tmhma-oikonomikwn-k-epixeirhmatikhs-kainotomias/oikonomika-kai-dioikitiki-bsc-economics-and-management');
        Scholio::portalStudy($school7, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc Economics and Politics (University of London)', 'https://www.dei.edu.gr/el/proptuxiaka-programmata/tmhma-oikonomikwn-k-epixeirhmatikhs-kainotomias/oikonomika-kai-politiki-bsc-economics-and-politics');
        Scholio::portalStudy($school7, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc International Development (University of London)', 'https://www.dei.edu.gr/el/proptuxiaka-programmata/tmhma-oikonomikwn-k-epixeirhmatikhs-kainotomias/diethneis-anaptyksi-bsc-international-development');
        Scholio::portalStudy($school7, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc International Relations (University of London)', 'https://www.dei.edu.gr/el/proptuxiaka-programmata/tmhma-oikonomikwn-k-epixeirhmatikhs-kainotomias/diethneis-sxeseis-bsc-international-relations');
        Scholio::portalStudy($school7, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc Politics & International Relations (University of London)', 'https://www.dei.edu.gr/el/proptuxiaka-programmata/tmhma-oikonomikwn-k-epixeirhmatikhs-kainotomias/politika-kai-dietnheis-sxeseis-bsc-politics-international-relations');
        Scholio::portalStudy($school7, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc Computing (University of Northampton) - Πληροφορική', 'https://www.dei.edu.gr/el/proptuxiaka-programmata/tmima-pliroforikis/pliroforiki-computing');
        Scholio::portalStudy($school7, 'Προπτυχιακές Σπουδές-Bachelor', 'Τουρισμός - Tourism', 'BA International Tourism Management (University of Northampton)', 'https://www.dei.edu.gr/el/proptuxiaka-programmata/tmhma-diethnoys-touristikoy-manatzment/tourism');
        Scholio::portalStudy($school7, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'BA English (University of Northampton)', 'https://www.dei.edu.gr/el/proptuxiaka-programmata/tmima-agglikis-filologias/ba-english-uon');
        Scholio::portalStudy($school7, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'BA English (University of London)', 'https://www.dei.edu.gr/el/proptuxiaka-programmata/tmima-agglikis-filologias/ba-english-uol');

        Scholio::portalStudy($school7, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA Executive - Διοίκηση Επιχειρήσεων για στελέχη', 'https://www.dei.edu.gr/el/metaptuxiaka-programmata/tmhma-koinwnikhs-epixeirhmatikothtas-kainotomias/mba-executive');
        Scholio::portalStudy($school7, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA Master in Business Administration - Διοίκηση Επιχειρήσεων', 'https://www.dei.edu.gr/el/metaptuxiaka-programmata/tmhma-koinwnikhs-epixeirhmatikothtas-kainotomias/mba');
        Scholio::portalStudy($school7, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MA Social Innovation - Κοινωνική Καινοτομία', 'https://www.dei.edu.gr/el/metaptuxiaka-programmata/tmhma-koinwnikhs-epixeirhmatikothtas-kainotomias/social-innovation');
        Scholio::portalStudy($school7, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'Master of Laws in International Commercial Law (LLM) - Διεθνές Εμπορικό Δίκαιο', 'https://www.dei.edu.gr/el/metaptuxiaka-programmata/tmima-nomikis-llm/llm');

        Scholio::portalSocial($school7, 'facebook', 'https://www.facebook.com/CollegeDEI/');
        Scholio::portalSocial($school7, 'instagram', 'https://www.instagram.com/dei.college/');
        // Scholio::portalSocial($school, 'twitter', '');
        Scholio::portalSocial($school7, 'youtube', 'https://www.youtube.com/channel/UCqyIp8u6TTBvpvQ0XHdnyuA');
        Scholio::portalSocial($school7, 'linkedin', 'https://www.linkedin.com/company/dei-college-in-thessaloniki');

        // /*===============   8 ATT  Athens ================*/
        // $school8 = factory(App\Models\School::class)->create([
        //     'user_id' => factory(App\User::class)->create(['name' => 'Αττικό Κολλέγιο', 'email' => 'info@atticocollege.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'att'])->id,
        //     'address' => 'Πατησίων & Στουρνάρη 26',
        //     'city' => 'Αθήνα',
        //     'phone' => 2108836002,
        //     'type_id' => 1,
        //     'website' => 'atticocollege.gr',
        //     'approved' => 1,
        //     'about' => 'Με την εμπειρία και την παράδοση 37 ετών, το Αττικό Κολέγιο, σε ένα εξαιρετικό νεοκλασικό κτίριο στο κέντρο της
        // Αθήνας, λειτουργεί με σύγχρονες εκπαιδευτικές καινοτομίες, βασισμένες στα Ευρωπαϊκά πρότυπα εκπαίδευσης των ιδρυμάτων με τα οποία συνεργαζόμαστε επί σειρά ετών.Η επιτυχία του Αττικού Κολεγίου χαρακτηρίζεται από τρεις περιόδους σταθμούς στην ανάπτυξη του: Πρώτον, τη δημιουργία του Κολεγίου Δημοσιογραφικών σπουδών το 1989, όπου εξαιρετικά δημοσιογραφικά στελέχη όπως, ο Λυκούργος Κομίνης, ο Γιώργος Παπαδάκης, η Λιάνα Κανέλη, η Μένυα Παπαδοπούλου κ.α. καθώς και οι πανεπιστημιακοί κ.κ. Λοβέρδος, Πασσάς, Τσάτσος, Κατσέλη κ.α, αποτέλεσαν ένα συνδυασμό δημοσιογραφικής και ακαδημαϊκής υπεροχής και στελέχωσαν με τεράστια επιτυχία την ιδιωτική τηλεόραση και μεγάλο μέρος των ΜΜΕ γενικότερα, γεγονός που μας καθιστά πολύ υπερήφανους. Δεύτερον, την επιλογή του Κολεγίου μας για συνεργασία, από το Βρετανικό κρατικό κολέγιο του Cambridge, το 2003, σε προγράμματα σπουδών για την απόκτηση διπλώματος Αγγλίας HND και τη δυνατότητα συνέχισης για την απόκτηση πτυχίου BSc.Τέλος, τη συνεργασία με κορυφαία ευρωπαϊκά πανεπιστήμια, καθιερώνοντας το Αττικό Κολέγιο πρωτοπόρο στην ανάπτυξη προγραμμάτων υγείας και ανθρωπιστικών σπουδών.',
        //     'background' => $background,
        // ]);

        // new Portal($school8, 5, 'college');

        /*===============   9 IST Athens ================*/
        $school9 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Independent Studies of Science and Technology', 'email' => 'info@ist.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'ist'])->id,
            'address' => 'Πειραιώς 72, Μοσχάτο',
            'city' => 'Αθήνα',
            'phone' => 2108836002,
            'type_id' => 1,
            'website' => 'ist.edu.gr',
            'approved' => 1,
            'about' => 'Το IST ιδρύθηκε το 1989 και σήμερα, είναι ένα πολυδύναμο και πολυεπίπεδο εκπαιδευτικό ίδρυμα με άδεια από το Υπουργείο Παιδείας. Ανήκει στον εκπαιδευτικό οργανισμό Γ. Καστρινάκη & Δρακ. Φουντουκάκου, ο οποίος δραστηριοποιείται από το 1967 με μεγάλη επιτυχία στον χώρο της εκπαίδευσης μέσω της ΣΒΙΕ, της πρώτης Σχολής στα Επαγγέλματα Υγείας. Σήμερα, το IST διαθέτει ακαδημαϊκή δομή και οργάνωση εφάμιλλες με εκείνες των φημισμένων Πανεπιστημίων του εξωτερικού, διατηρώντας στενές σχέσεις και συνεργασία με επιχειρήσεις και οργανισμούς για καλύτερη εκπαίδευση και αποκατάσταση των φοιτητών του, ενώ στεγάζεται σε κτίριο διεθνών προδιαγραφών, συνολικής επιφάνειας 9.500 τ.μ., ειδικά κατασκευασμένο για τη λειτουργία ενός εκπαιδευτικού ιδρύματος πανεπιστημιακού επιπέδου.',
            'background' => $background,
        ]);

        new Portal($school9, 5, 'college');

        Scholio::portalStudy($school9, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Bachelor in International Business', 'http://www.ist.edu.gr/bachelors/business-and-economics/ba-in-international-business/');
        Scholio::portalStudy($school9, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BΑ (Honours) Accounting and Finance', 'http://www.ist.edu.gr/bachelors/business-and-economics/ba-honours-accounting-and-finance/');
        Scholio::portalStudy($school9, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BA (Honours) Tourism, Hospitality and Leisure Management', 'http://www.ist.edu.gr/bachelors/business-and-economics/ba-honours-tourism-hospitality-and-leisure-management/');
        Scholio::portalStudy($school9, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc(Hons) Computer Applications Development', 'http://www.ist.edu.gr/bachelors/computer-science-&-information-technology/bsc-hons-computer-applications-development/');
        Scholio::portalStudy($school9, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc (Honours) Business Information Technology', 'http://www.ist.edu.gr/bachelors/computer-science-&-information-technology/bsc-honours-business-information-technology/');
        Scholio::portalStudy($school9, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc (Honours) Computing', 'http://www.ist.edu.gr/bachelors/computer-science-&-information-technology/bsc-honours-computing/');
        Scholio::portalStudy($school9, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc (Honours) Web Development', 'http://www.ist.edu.gr/bachelors/computer-science-&-information-technology/bsc-honours-web-development/');
        Scholio::portalStudy($school9, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA (Masters in Business Administration)', 'http://www.ist.edu.gr/masters/business-&-economics/mba-masters-in-business-administration/');
        Scholio::portalStudy($school9, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MIBA (Master of International Business Administration)', 'http://www.ist.edu.gr/masters/business-&-economics/miba/');
        Scholio::portalStudy($school9, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MSc International Accounting with Finance', 'http://www.ist.edu.gr/masters/business-&-economics/msc-international-accounting-with-finance/');
        Scholio::portalStudy($school9, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MSc International Tourism and Hospitality Management', 'http://www.ist.edu.gr/masters/business-&-economics/msc-international-tourism-and-hospitality-management/');
        Scholio::portalStudy($school9, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'MSc Web and Mobile Computing', 'http://www.ist.edu.gr/masters/computer-science-&-information-technology/msc-web-and-mobile-computing/');
        Scholio::portalStudy($school9, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'MSc Internet and Database Systems', 'http://www.ist.edu.gr/masters/computer-science-&-information-technology/msc-internet-and-database-systems/');
        Scholio::portalStudy($school9, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'MSc Computer Systems Security', 'http://www.ist.edu.gr/masters/computer-science-&-information-technology/msc-computer-systems-security/');
        Scholio::portalStudy($school9, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'MSc Computing and Information Systems', 'http://www.ist.edu.gr/masters/computer-science-&-information-technology/msc-computing-and-information-systems/');

        Scholio::portalSocial($school9, 'facebook', 'https://el-gr.facebook.com/college.IST');
        Scholio::portalSocial($school9, 'instagram', 'https://www.instagram.com/ist_college/');
        Scholio::portalSocial($school9, 'twitter', 'https://twitter.com/ISTCollege');
        Scholio::portalSocial($school9, 'youtube', 'http://www.youtube.com/channel/UCXVh7keT6PgSCP8JE1fp7Gw');
        Scholio::portalSocial($school9, 'linkedin', 'https://www.linkedin.com/company/ist-college');

        /*===============   10 CITY COLLEGE   Thesssaloniki ================*/
        $school10 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'City College', 'email' => 'acadreg@city.academic.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'citycol'])->id,
            'address' => 'Προξένου Κορομηλά 24',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310224186,
            'type_id' => 1,
            'website' => 'citycollege.sheffield.eu',
            'approved' => 1,
            'about' => 'Το CITY College είναι το Διεθνές Τμήμα του University of Sheffield και εδρεύει στη Θεσσαλονίκη. Το Πανεπιστήμιο του Sheffield είναι ένα από τα παλαιότερα, μεγαλύτερα και καλύτερα κρατικά Πανεπιστήμια της Αγγλίας. Στις παγκόσμιες κατατάξεις βρίσκεται συνεχώς ανάμεσα στα 100 καλύτερα πανεπιστήμια του κόσμου, ενώ στο δυναμικό του συγκαταλέγονται 6 νομπελίστες. Ανήκει στο 1% των καλύτερων Πανεπιστημίων του κόσμου και κατατάσσεται: 29º στην Ευρώπη και 84º στον κόσμο [QS World University Rankings 2016].Το CITY College ιδρύθηκε το 1989 στη Θεσσαλονίκη και έχει καθιερωθεί κατά την εικοσαπενταετή πορεία του ως ένα από τα καλύτερα εκπαιδευτικά ιδρύματα της νοτιοανατολικής Ευρώπης. Δεν είναι απλά ένα συνεργαζόμενο κολέγιο με ξένο πανεπιστήμιο, αλλά ένα πλήρες και αναπόσπαστο κομμάτι του University of Sheffield που λειτουργεί εκτός Βρετανίας με τους ίδιους όρους και κανονισμούς, υπόκειται στους ίδιους ελέγχους αξιολόγησης και προσφέρει τα ίδια προνόμια και τις ίδιες παροχές σπουδών στους φοιτητές του.',
            'background' => $background,
        ]);

        new Portal($school10, 5, 'college');

        Scholio::portalStudy($school10, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Business Studies - (Finance and Accounting) - BA (Hons) - Λογιστική και Χρηματοοικονομικά', 'http://citycollege.sheffield.eu/frontend/articles.php?cid=40&t=BA-(Hons)-in-Business-Studies-Finance-and-Accounting');
        Scholio::portalStudy($school10, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Business Studies (Management) - BA (Hons) - Διοίκηση Επιχειρήσεων', 'http://citycollege.sheffield.eu/frontend/articles.php?cid=58&t=BA-(Hons)-in-Business-Studies-(Management)');
        Scholio::portalStudy($school10, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Business Studies (Marketing) - BA (Hons) - Mάρκετινγκ', 'http://citycollege.sheffield.eu/frontend/articles.php?cid=59&t=BA-(Hons)-in-Business-Studies-(Marketing)');
        Scholio::portalStudy($school10, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Business Studies (Hotel and Hospitality) - BA (Hons) - Διοίκηση Ξενοδοχειακών Μονάδων και Επιχειρήσεων Φιλοξενίας', 'http://citycollege.sheffield.eu/frontend/articles.php?cid=392&t=BA-(Hons)-in-Business-Studies-Hotel-and-Hospitality');

        Scholio::portalStudy($school10, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'Computer Science - BSc (Hons) - Πληροφορική', 'http://citycollege.sheffield.eu/frontend/articles.php?cid=60&t=BSc-%28Hons%29-in-Computer-Science');
        Scholio::portalStudy($school10, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'Computer Science (Business Informatics) - BSc (Hons) - Πληροφορική', 'http://citycollege.sheffield.eu/frontend/articles.php?cid=62&t=BSc-%28Hons%29-in-Computer-Science-%28Business-Informatics%29');
        Scholio::portalStudy($school10, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'Computer Science (Internet Computing) - BSc (Hons) - Πληροφορική', 'http://citycollege.sheffield.eu/frontend/articles.php?cid=61&t=BSc-%28Hons%29-in-Computer-Science-%28Internet-Computing%29');

        Scholio::portalStudy($school10, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'Psychology - BSc (Hons) - Ψυχολογία', 'http://citycollege.sheffield.eu/frontend/articles.php?cid=64&t=BSc-%28Hons%29-in-Psychology');
        Scholio::portalStudy($school10, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'English Language and Linguistics - BA (Hons) 3 years - Αγγλική Γλώσσα και Γλωσσολογία', 'http://citycollege.sheffield.eu/frontend/articles.php?cid=322&t=English-Language-and-Linguistics-BA-(Hons)');
        Scholio::portalStudy($school10, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'English Language and Linguistics - BA (Hons) 4 years - Αγγλική Γλώσσα και Γλωσσολογία', 'http://citycollege.sheffield.eu/frontend/articles.php?cid=333&t=English-Language-and-Linguistics-BA-(Hons)');

        Scholio::portalStudy($school10, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Banking & Finance - MSc', 'Banking & Finance - MSc', 'http://citycollege.sheffield.eu/frontend/articles.php?cid=47&t=MSc-in-Banking-&-Finance');
        Scholio::portalStudy($school10, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Digital Marketing and Social Media - MA', '', '');
        Scholio::portalStudy($school10, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Executive MBA', 'http://citycollege.sheffield.eu/frontend/articles.php?cid=94&t=Executive-MBA&chlang=GR_EL');
        Scholio::portalStudy($school10, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Hotel and Tourism Management - MSc', 'http://citycollege.sheffield.eu/frontend/articles.php?cid=51&t=MSc-in-Hotel-and-Tourism-Management');
        Scholio::portalStudy($school10, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Management - MSc', 'http://citycollege.sheffield.eu/frontend/articles.php?cid=48&t=MSc-in-Management');
        Scholio::portalStudy($school10, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Management (Human Resource Management) - MSc', 'http://citycollege.sheffield.eu/frontend/articles.php?cid=49&t=MSc-in-Management-%28Human-Resource-Management%29');
        Scholio::portalStudy($school10, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Management (Logistics and Supply Chain Management) - MSc', 'http://citycollege.sheffield.eu/frontend/articles.php?cid=50&t=MSc-in-Management-Logistics-and-Supply-Chain-Management');
        Scholio::portalStudy($school10, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Marketing, Advertising & Public Relations - MA', 'http://citycollege.sheffield.eu/frontend/articles.php?cid=45&t=MA-in-Marketing-Advertising-&-Public-Relations');
        Scholio::portalStudy($school10, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'Clinical Neuropsychology - MA', 'http://citycollege.sheffield.eu/frontend/articles.php?cid=346&t=MA-in-Clinical-Neuropsychology');
        Scholio::portalStudy($school10, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'Cognitive Neuropsychology - MSc', 'http://citycollege.sheffield.eu/frontend/articles.php?cid=347&t=MSc-in-Cognitive-Neuropsychology');
        Scholio::portalStudy($school10, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'Counselling Psychology - MSc', 'http://citycollege.sheffield.eu/frontend/articles.php?cid=56&t=MSc-in-Counselling-Psychology');
        Scholio::portalStudy($school10, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'Counselling Psychology with a Practicum - MA', 'http://citycollege.sheffield.eu/frontend/articles.php?cid=57&t=MA-in-Counselling-Psychology-with-a-Practicum');
        Scholio::portalStudy($school10, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'Advanced Software Engineering (Data Networks) - MSc', 'http://citycollege.sheffield.eu/frontend/articles.php?cid=365&t=MSc-in-Advanced-Software-Engineering-(Data-Networks)');
        Scholio::portalStudy($school10, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'Advanced Software Engineering (Web and Mobile Applications) - MSc', 'http://citycollege.sheffield.eu/frontend/articles.php?cid=366&t=MSc-in-Advanced-Software-Engineering-Web-and-Mobile-Applications');
        Scholio::portalStudy($school10, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'Advanced Software Engineering (Information Security) - MSc', 'http://citycollege.sheffield.eu/frontend/articles.php?cid=367&t=MSc-in-Advanced-Software-Engineering-(Information-Security)');
        Scholio::portalStudy($school10, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'Applied Linguistics with TESOL - MA', 'http://citycollege.sheffield.eu/frontend/articles.php?cid=324&t=Applied-Linguistics-with-TESOL-MA');
        Scholio::portalStudy($school10, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'Translation and Interpreting - MA', 'http://citycollege.sheffield.eu/frontend/articles.php?cid=393&t=MA-in-Translation-and-Interpreting');

        Scholio::portalSocial($school10, 'facebook', 'http://www.facebook.com/pages/Thessaloniki-Greece/CITY-College-International-Faculty-of-the-University-of-Sheffield/152437312613');
        Scholio::portalSocial($school10, 'instagram', 'https://instagram.com/citycollege_sheffield/');
        // Scholio::portalSocial($school, 'twitter', '');
        Scholio::portalSocial($school10, 'youtube', 'http://www.youtube.com/user/citycollegethess');
        Scholio::portalSocial($school10, 'linkedin', 'https://www.linkedin.com/company/shefuni-city-college');

        /*===============   11 ΒΑΚΑΛΟ   Athens ================*/
        $school11 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Βακαλο Art & Design College', 'email' => 'info@vakalo.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'vakalo'])->id,
            'address' => 'Λ. Κατσώνη 26',
            'city' => 'Αθήνα',
            'phone' => 2106442514,
            'type_id' => 1,
            'website' => 'vakalo.gr',
            'approved' => 1,
            'about' => 'Το 1958, μια παρέα διακεκριμένων καλλιτεχνών και διανοούμενων αποφάσισαν να δημιουργήσουν ένα εργαστήριο καλών και εφαρμοσμένων τεχνών που θα γεφύρωνε την καλλιτεχνική ευαισθησία και το στοχασμό του πολιτισμού, με τα αντικείμενα, τις εικόνες και τους χώρους της καθημερινότητας. Το όραμα αυτής της πρώτης εμπνευσμένης ομάδας ενστερνίστηκαν, διαφύλαξαν και εμπλούτισαν μια σειρά δημιουργικών ανθρώπων που συνεργάστηκαν μαζί της και συνεχίζουν να γράφουν μέχρι σήμερα την ιστορία της Σχολής Βακαλό. Το Κολλέγιο Βακαλό είναι η πρώτη σχολή εφαρμοσμένων τεχνών στην Ελλάδα. Ιδρύθηκε το 1958 από τον ζωγράφο και σκηνογράφο Γιώργο Βακαλό, την ποιήτρια και ιστορικό της τέχνης Ελένη Βακαλό, τον ζωγράφο, τ. πρύτανη της ΑΣΚΤ, Παναγιώτη Τέτση, και τον εκδότη της καλλιτεχνικής επιθεώρησης Ζυγός Φραντζή Φραντζισκάκη. Η απόφαση για την ίδρυση της Σχολής προήλθε από τη συνειδητοποίηση αφενός του κρίσιμου ρόλου που διαδραματίζει το Design στην κοινωνία, αφετέρου της πλήρους απουσίας σχετικής εκπαίδευσης στη χώρα μας.',
            'background' => $background,
        ]);
        new Portal($school11, 5, 'college');

        Scholio::portalStudy($school11, 'Προπτυχιακές Σπουδές-Bachelor', 'Arts & Design', 'Graphic Design', 'https://vakalo.gr/course-category/ba-graphic-design/');
        Scholio::portalStudy($school11, 'Προπτυχιακές Σπουδές-Bachelor', 'Arts & Design', 'Interior Design', 'https://vakalo.gr/course-category/ba-interior-design/');
        Scholio::portalStudy($school11, 'Προπτυχιακές Σπουδές-Bachelor', 'Arts & Design', 'Digital Design', 'https://vakalo.gr/course-category/ba-digital-design/');
        Scholio::portalStudy($school11, 'Μεταπτυχιακές Σπουδές-Master', 'Arts & Design', 'Visual Communication', 'https://vakalo.gr/course-category/ma-visual-communication/');
        Scholio::portalStudy($school11, 'Μεταπτυχιακές Σπουδές-Master', 'Arts & Design', 'Architectural Design', 'https://vakalo.gr/course-category/ma-architectural-design/');

        Scholio::portalSocial($school11, 'facebook', 'https://www.facebook.com/VakaloCollege');
        Scholio::portalSocial($school11, 'instagram', 'https://www.instagram.com/vakalocollege/');
        // Scholio::portalSocial($school, 'twitter', '');
        Scholio::portalSocial($school11, 'youtube', 'https://www.youtube.com/channel/UCCcWQHUe3-DaIrpAFbbrYFw/');
        // Scholio::portalSocial($school, 'linkedin', '');

        /*===============   12 MEDITERRANEAN COLLEGE ATHENS  ================*/
        $school12 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Mediterranean College Athens', 'email' => 'info@medcollege.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'medAth'])->id,
            'address' => 'Πατησίων 107 & Πελλήνης 8',
            'city' => 'Αθήνα',
            'phone' => 2108899600,
            'type_id' => 1,
            'website' => 'medcollege.edu.gr',
            'approved' => 1,
            'about' => 'Στον εικοστό πρώτο αιώνα, το Mediterranean College (MC), σε συνεργασία με ισχυρά πανεπιστήμια του εξωτερικού, αναδύεται ως ένα ιδιωτικό ίδρυμα ανώτατης εκπαίδευσης με ηγετικό ρόλο στους κλάδους σπουδών της Οικονομίας, της Διοίκησης, της Πληροφορικής, των Ανθρωπιστικών Επιστημών,του Τουρισμού, των Επαγγελμάτων Υγείας,  των Μηχανικών προσφέροντας προγράμματα υψηλής ποιότητας σε ένα περιβάλλον γαλούχησης όπου η ποιότητα υπαγορεύεται πάντα από τις ανάγκες των φοιτητών. Για να πραγματοποιήσει το όραμά του για ακαδημαϊκή διάκριση, επιτυχία των φοιτητών του, εκπαιδευτική και τεχνολογική καινοτομία, καθώς και για κοινωνική προσφορά, το Κολλέγιο προσελκύει και εξασφαλίζει αφοσιωμένους επαγγελματίες και εκπαιδευτικό προσωπικό με εξαιρετικές ικανότητες, αναγνωρισμένο για την εξειδίκευσή του στον τομέα της διδασκαλίας, της καθοδήγησης φοιτητών, της κατάρτισης, της έρευνας και της παροχής υπηρεσιών. Δομημένο σε αυτές τις σταθερές βάσεις και αρχές, το MC, αποσκοπεί στην υλοποίηση του οράματός του, να γίνει ένα μοναδικό διεθνές κέντρο μάθησης στον ελλαδικό χώρο.',
            'background' => $background,
        ]);
        new Portal($school12, 5, 'college');

        Scholio::portalStudy($school12, 'Προπτυχιακές Σπουδές-Bachelor', 'Επιστήμες Υγείας - Health Sciences', 'BSc (Hons) Physiotherapy - Φυσικοθεραπεία', 'https://www.medcollege.edu.gr/courses/bsc-hons-physiotherapy/');
        Scholio::portalStudy($school12, 'Προπτυχιακές Σπουδές-Bachelor', 'Επιστήμες Υγείας - Health Sciences', 'BSc (Hons) Speech and Language Therapy - Λογοθεραπεία', 'https://www.medcollege.edu.gr/courses/bsc-hons-speech-language-therapy/');
        Scholio::portalStudy($school12, 'Προπτυχιακές Σπουδές-Bachelor', 'Τουρισμός - Tourism', 'BA (Hons) International Hospitality Management', 'https://www.medcollege.edu.gr/courses/ba-hons-hospitality-management/');
        Scholio::portalStudy($school12, 'Προπτυχιακές Σπουδές-Bachelor', 'Τουρισμός - Tourism', 'BA (Hons) Professional Culinary Arts', 'https://www.medcollege.edu.gr/courses/ba-professional-culinary-arts/');
        Scholio::portalStudy($school12, 'Προπτυχιακές Σπουδές-Bachelor', 'Πολυτεχνικές Σπουδές - Engineering', 'MEng / BEng (Hons) Mechanical Engineering & Design - Μηχανολόγος Μηχανικός', 'https://www.medcollege.edu.gr/courses/bsc-hons-mechanical-engineering/');
        Scholio::portalStudy($school12, 'Προπτυχιακές Σπουδές-Bachelor', 'Πολυτεχνικές Σπουδές - Engineering', 'MEng / BEng (Hons) Civil Engineering & Construction - Πολιτικός Μηχανικός', 'https://www.medcollege.edu.gr/courses/bsc-hons-civil-engineering-and-construction/');
        Scholio::portalStudy($school12, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc (Hons) Computer Science', 'https://www.medcollege.edu.gr/courses/bsc-hons-computer-science/');
        Scholio::portalStudy($school12, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc (Hons) Computer Games Programming', 'https://www.medcollege.edu.gr/courses/bsc-hons-computer-games-programming/');
        Scholio::portalStudy($school12, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc (Hons) Computer Networks & Security', '');
        Scholio::portalStudy($school12, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BA (Hons) Business Management (Marketing)', '');
        Scholio::portalStudy($school12, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BA (Hons) Business Management (Finance)', 'https://www.medcollege.edu.gr/courses/ba-hons-business-finance/');
        Scholio::portalStudy($school12, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'BA (Hons) Early Childhood Studies', 'https://www.medcollege.edu.gr/courses/ba-hons-early-childhood-studies/');
        Scholio::portalStudy($school12, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'BSc (Hons) Applied Psychology - Ψυχολογία', 'https://www.medcollege.edu.gr/courses/bsc-hons-applied-psychology/');
        Scholio::portalStudy($school12, 'Προπτυχιακές Σπουδές-Bachelor', 'Ναυτιλιακά - Nautical Education', 'BA (Hons) Business Management (Shipping)', 'https://www.medcollege.edu.gr/courses/ba-hons-business-management-shipping/');

        Scholio::portalStudy($school12, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'MSc Big Data Analytics', 'https://www.medcollege.edu.gr/courses/msc-big-data-analytics/');
        Scholio::portalStudy($school12, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'MSc Advanced Computer Networks', 'https://www.medcollege.edu.gr/courses/msc-advanced-computer-networks/');
        Scholio::portalStudy($school12, 'Μεταπτυχιακές Σπουδές-Master', 'Ναυτιλιακά - Nautical Education', 'MBA Global Shipping', 'https://www.medcollege.edu.gr/courses/mba-global-shipping/');
        Scholio::portalStudy($school12, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MSc Counselling and Psychology in Educational Settings - Σχολική Ψυχολογία & Συμβουλευτική', 'https://www.medcollege.edu.gr/courses/msc-counselling-psychology-educational-settings/');
        Scholio::portalStudy($school12, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MSc Applied Psychology: Clinical Psychology and Counselling - Κλινική Ψυχολογία & Συμβουλευτική', 'https://www.medcollege.edu.gr/courses/msc-applied-psychology-clinical-psychology-counselling/');
        Scholio::portalStudy($school12, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MSc Applied Psychology: Health Psychology and Counselling - Ψυχολογία Υγείας & Συμβουλευτική', 'https://www.medcollege.edu.gr/courses/msc-applied-psychology-health-psychology-counselling/');
        Scholio::portalStudy($school12, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MSc Integrative Counselling & Psychotherapy - Συνθετική Ψυχοθεραπεία', 'https://www.medcollege.edu.gr/courses/msc-integrative-counselling-psychotherapy/');
        Scholio::portalStudy($school12, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MSc Cognitive Behavioural Psychotherapy (Adult)', 'https://www.medcollege.edu.gr/courses/msc-cognitive-behavioural-psychotherapy-adult/');
        Scholio::portalStudy($school12, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MA Inclusion and Special Educational Needs and Disability (ISEND) - Ειδική Αγωγή & Ένταξη', 'https://www.medcollege.edu.gr/courses/ma-education-special-educational-needs-disabilities/');
        Scholio::portalStudy($school12, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MA Education (Leadership & Management)', 'https://www.medcollege.edu.gr/courses/ma-education-leadership-management/');
        Scholio::portalStudy($school12, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA Global', 'https://www.medcollege.edu.gr/courses/mba-master-of-business-administration/');
        Scholio::portalStudy($school12, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA Global Finance', 'https://www.medcollege.edu.gr/courses/mba-global-finance/');
        Scholio::portalStudy($school12, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'ΜSc Marketing Management', 'https://www.medcollege.edu.gr/courses/%ce%bcsc-marketing-management/');
        Scholio::portalStudy($school12, 'Μεταπτυχιακές Σπουδές-Master', 'Πολυτεχνικές Σπουδές - Engineering', 'MSc Mechanical Engineering and Design', 'https://www.medcollege.edu.gr/courses/msc-mechanical-engineering-design/');
        Scholio::portalStudy($school12, 'Μεταπτυχιακές Σπουδές-Master', 'Πολυτεχνικές Σπουδές - Engineering', 'MSc Civil Engineering and Construction', 'https://www.medcollege.edu.gr/courses/msc-civil-engineering-construction/');
        Scholio::portalStudy($school12, 'Μεταπτυχιακές Σπουδές-Master', 'Τουρισμός - Tourism', 'MSc International Hospitality Management', 'https://www.medcollege.edu.gr/courses/msc-international-hospitality-management/');

        Scholio::portalSocial($school12, 'facebook', 'https://www.facebook.com/mediterraneancollege');
        Scholio::portalSocial($school12, 'instagram', 'https://www.instagram.com/mediterranean_college/');
        Scholio::portalSocial($school12, 'twitter', 'https://twitter.com/medcollege1');
        Scholio::portalSocial($school12, 'youtube', 'https://www.youtube.com/user/mediterraneancollege/featured');
        // Scholio::portalSocial($school12, 'linkedin', '');
        Scholio::portalSocial($school12, 'google', 'https://plus.google.com/+MedcollegeEduGreece');

        /*===============   13 iCBS THESSALONIKI ================*/
        $school13 = factory(App\Models\School::class)->create([
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
            'background' => $background,
        ]);
        new Portal($school13, 5, 'college');

        Scholio::portalStudy($school13, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Business Administration - Διοίκηση Επιχειρήσεων', 'http://icbs.gr/default.aspx?catid=1053');
        Scholio::portalStudy($school13, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Marketing', 'http://icbs.gr/marketing.aspx');
        Scholio::portalStudy($school13, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Marketing, Communications and Public Relations - Μάρκετινγκ, Επικοινωνία και Δημόσιες Σχέσεις', 'http://icbs.gr/marketing-communications-and-public-relations.aspx');
        Scholio::portalStudy($school13, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Accounting and Finance - Λογιστική και Χρηματοοικονομική', 'http://icbs.gr/accounting-and-finance.aspx');
        Scholio::portalStudy($school13, 'Προπτυχιακές Σπουδές-Bachelor', 'Τουρισμός - Tourism', 'Tourism Management - Τουριστικό Μάνατζμεντ', 'http://icbs.gr/tourism-and-hospitality-management.aspx');
        Scholio::portalStudy($school13, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA Executive', 'http://icbs.gr/mba-executive.aspx');
        Scholio::portalStudy($school13, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisation in Marketing', 'http://icbs.gr/mba-in-marketing-management.aspx');
        Scholio::portalStudy($school13, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisation in Banking and Finance - Τραπεζικά και Χρηματοοικονομικά', 'http://icbs.gr/mba-in-banking-and-finance.aspx');
        Scholio::portalStudy($school13, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisation in Operations Management - Μάνατζμεντ Λειτουργιών', 'http://icbs.gr/mba-in-operations-management-and-systems.aspx');
        Scholio::portalStudy($school13, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisation in Strategic Management - Στρατηγικό Μάνατζμεντ', 'http://icbs.gr/mba-in-strategic-management.aspx');
        Scholio::portalStudy($school13, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisation in Human Resources Management - Μάνατζμεντ Ανθρωπίνων Πόρων', 'http://icbs.gr/mba-in-human-resources-management.aspx');
        Scholio::portalStudy($school13, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisation in Logistics Management - Μάνατζμεντ Logistics', 'http://icbs.gr/mba-in-logistics-management.aspx');
        Scholio::portalStudy($school13, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MA in Management -  Μάνατζμεντ', 'http://icbs.gr/ma-in-business-management.aspx');
        Scholio::portalStudy($school13, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MSc in Accounting and Finance - Χρηματοοικονομικά και τη Λογιστική', 'http://icbs.gr/msc-in-accounting-and-finance.aspx');
        Scholio::portalStudy($school13, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'PG Diploma in Management Studies', 'http://icbs.gr/diploma-in-management-studies-dms.aspx');
        Scholio::portalStudy($school13, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisations in Health Care Management - Μάνατζμεντ Μονάδων Υγείας', 'http://icbs.gr/mba-in-health-care-management.aspx');
        Scholio::portalStudy($school13, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisation in Law Operations Management - Μάνατζμεντ Νομικών Λειτουργιών', 'http://icbs.gr/mba-in-law-operations-management.aspx');
        Scholio::portalStudy($school13, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisation in Management in the Public Sector - Μάνατζμεντ στο Δημόσιο Τομέα', 'http://icbs.gr/mba-publicsector.aspx');
        Scholio::portalStudy($school13, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisation in Tourism and Hospitality - Μάνατζμεντ Τουριστικών Επιχειρήσεων', 'http://icbs.gr/default.aspx?catid=1037');

        Scholio::portalSocial($school13, 'facebook', 'http://www.facebook.com/icbs.business.college');
        // Scholio::portalSocial($school, 'instagram', '');
        // Scholio::portalSocial($school, 'twitter', '');
        // Scholio::portalSocial($school, 'youtube', '');
        // Scholio::portalSocial($school, 'linkedin', '');
        // Scholio::portalSocial($school, 'google', '');
        // Scholio::portalSocial($school, 'skype', '');

        /*===============   14 iCBS ATHENS ================*/
        $school14 = factory(App\Models\School::class)->create([
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
            'background' => $background,
        ]);
        new Portal($school14, 5, 'college');

        Scholio::portalStudy($school14, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Business Administration - Διοίκηση Επιχειρήσεων', 'http://icbs.gr/default.aspx?catid=1053');
        Scholio::portalStudy($school14, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Marketing', 'http://icbs.gr/marketing.aspx');
        Scholio::portalStudy($school14, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Marketing, Communications and Public Relations - Μάρκετινγκ, Επικοινωνία και Δημόσιες Σχέσεις', 'http://icbs.gr/marketing-communications-and-public-relations.aspx');
        Scholio::portalStudy($school14, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Accounting and Finance - Λογιστική και Χρηματοοικονομική', 'http://icbs.gr/accounting-and-finance.aspx');
        Scholio::portalStudy($school14, 'Προπτυχιακές Σπουδές-Bachelor', 'Τουρισμός - Tourism', 'Tourism Management - Τουριστικό Μάνατζμεντ', 'http://icbs.gr/tourism-and-hospitality-management.aspx');
        Scholio::portalStudy($school14, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA Executive', 'http://icbs.gr/mba-executive.aspx');
        Scholio::portalStudy($school14, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisation in Marketing', 'http://icbs.gr/mba-in-marketing-management.aspx');
        Scholio::portalStudy($school14, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisation in Banking and Finance - Τραπεζικά και Χρηματοοικονομικά', 'http://icbs.gr/mba-in-banking-and-finance.aspx');
        Scholio::portalStudy($school14, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisation in Operations Management - Μάνατζμεντ Λειτουργιών', 'http://icbs.gr/mba-in-operations-management-and-systems.aspx');
        Scholio::portalStudy($school14, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisation in Strategic Management - Στρατηγικό Μάνατζμεντ', 'http://icbs.gr/mba-in-strategic-management.aspx');
        Scholio::portalStudy($school14, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisation in Human Resources Management - Μάνατζμεντ Ανθρωπίνων Πόρων', 'http://icbs.gr/mba-in-human-resources-management.aspx');
        Scholio::portalStudy($school14, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisation in Logistics Management - Μάνατζμεντ Logistics', 'http://icbs.gr/mba-in-logistics-management.aspx');
        Scholio::portalStudy($school14, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MA in Management -  Μάνατζμεντ', 'http://icbs.gr/ma-in-business-management.aspx');
        Scholio::portalStudy($school14, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MSc in Accounting and Finance - Χρηματοοικονομικά και τη Λογιστική', 'http://icbs.gr/msc-in-accounting-and-finance.aspx');
        Scholio::portalStudy($school14, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'PG Diploma in Management Studies', 'http://icbs.gr/diploma-in-management-studies-dms.aspx');
        Scholio::portalStudy($school14, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisations in Health Care Management - Μάνατζμεντ Μονάδων Υγείας', 'http://icbs.gr/mba-in-health-care-management.aspx');
        Scholio::portalStudy($school14, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisation in Law Operations Management - Μάνατζμεντ Νομικών Λειτουργιών', 'http://icbs.gr/mba-in-law-operations-management.aspx');
        Scholio::portalStudy($school14, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisation in Management in the Public Sector - Μάνατζμεντ στο Δημόσιο Τομέα', 'http://icbs.gr/mba-publicsector.aspx');
        Scholio::portalStudy($school14, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisation in Tourism and Hospitality - Μάνατζμεντ Τουριστικών Επιχειρήσεων', 'http://icbs.gr/default.aspx?catid=1037');

        Scholio::portalSocial($school14, 'facebook', 'http://www.facebook.com/icbs.business.college');
        // Scholio::portalSocial($school, 'instagram', '');
        // Scholio::portalSocial($school, 'twitter', '');
        // Scholio::portalSocial($school, 'youtube', '');
        // Scholio::portalSocial($school, 'linkedin', '');
        // Scholio::portalSocial($school, 'google', '');
        // Scholio::portalSocial($school, 'skype', '');

        /*===============   15 iCBS LARISSA ================*/
        $school15 = factory(App\Models\School::class)->create([
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
            'background' => $background,
        ]);
        new Portal($school15, 5, 'college');

        Scholio::portalStudy($school15, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Business Administration - Διοίκηση Επιχειρήσεων', 'http://icbs.gr/default.aspx?catid=1053');
        Scholio::portalStudy($school15, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Marketing', 'http://icbs.gr/marketing.aspx');
        Scholio::portalStudy($school15, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Marketing, Communications and Public Relations - Μάρκετινγκ, Επικοινωνία και Δημόσιες Σχέσεις', 'http://icbs.gr/marketing-communications-and-public-relations.aspx');
        Scholio::portalStudy($school15, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Accounting and Finance - Λογιστική και Χρηματοοικονομική', 'http://icbs.gr/accounting-and-finance.aspx');
        Scholio::portalStudy($school15, 'Προπτυχιακές Σπουδές-Bachelor', 'Τουρισμός - Tourism', 'Tourism Management - Τουριστικό Μάνατζμεντ', 'http://icbs.gr/tourism-and-hospitality-management.aspx');
        Scholio::portalStudy($school15, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA Executive', 'http://icbs.gr/mba-executive.aspx');
        Scholio::portalStudy($school15, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisation in Marketing', 'http://icbs.gr/mba-in-marketing-management.aspx');
        Scholio::portalStudy($school15, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisation in Banking and Finance - Τραπεζικά και Χρηματοοικονομικά', 'http://icbs.gr/mba-in-banking-and-finance.aspx');
        Scholio::portalStudy($school15, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisation in Operations Management - Μάνατζμεντ Λειτουργιών', 'http://icbs.gr/mba-in-operations-management-and-systems.aspx');
        Scholio::portalStudy($school15, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisation in Strategic Management - Στρατηγικό Μάνατζμεντ', 'http://icbs.gr/mba-in-strategic-management.aspx');
        Scholio::portalStudy($school15, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisation in Human Resources Management - Μάνατζμεντ Ανθρωπίνων Πόρων', 'http://icbs.gr/mba-in-human-resources-management.aspx');
        Scholio::portalStudy($school15, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisation in Logistics Management - Μάνατζμεντ Logistics', 'http://icbs.gr/mba-in-logistics-management.aspx');
        Scholio::portalStudy($school15, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MA in Management -  Μάνατζμεντ', 'http://icbs.gr/ma-in-business-management.aspx');
        Scholio::portalStudy($school15, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MSc in Accounting and Finance - Χρηματοοικονομικά και τη Λογιστική', 'http://icbs.gr/msc-in-accounting-and-finance.aspx');
        Scholio::portalStudy($school15, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'PG Diploma in Management Studies', 'http://icbs.gr/diploma-in-management-studies-dms.aspx');
        Scholio::portalStudy($school15, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisations in Health Care Management - Μάνατζμεντ Μονάδων Υγείας', 'http://icbs.gr/mba-in-health-care-management.aspx');
        Scholio::portalStudy($school15, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisation in Law Operations Management - Μάνατζμεντ Νομικών Λειτουργιών', 'http://icbs.gr/mba-in-law-operations-management.aspx');
        Scholio::portalStudy($school15, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisation in Management in the Public Sector - Μάνατζμεντ στο Δημόσιο Τομέα', 'http://icbs.gr/mba-publicsector.aspx');
        Scholio::portalStudy($school15, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA with specialisation in Tourism and Hospitality - Μάνατζμεντ Τουριστικών Επιχειρήσεων', 'http://icbs.gr/default.aspx?catid=1037');

        Scholio::portalSocial($school15, 'facebook', 'http://www.facebook.com/icbs.business.college');
        // Scholio::portalSocial($school, 'instagram', '');
        // Scholio::portalSocial($school, 'twitter', '');
        // Scholio::portalSocial($school, 'youtube', '');
        // Scholio::portalSocial($school, 'linkedin', '');
        // Scholio::portalSocial($school, 'google', '');
        // Scholio::portalSocial($school, 'skype', '');

        /*===============   16 AKTO ATHENS ================*/
        $school16 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'AKTO', 'email' => 'information@aktocollege.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'aktoath'])->id,
            'address' => 'Ευελπίδων 11Α',
            'city' => 'Αθήνα',
            'phone' => 2105230130,
            'type_id' => 1,
            'website' => 'akto.gr',
            'approved' => 1,
            'about' => 'O ΑΚΤΟ είναι ο μεγαλύτερος εκπαιδευτικός όμιλος Τέχνης, Design & Media στην Ελλάδα. Οι Εφαρμοσμένες Τέχνες διδάσκονται στον ΑΚΤΟ με ένα σφαιρικό, διακλαδικό πνεύμα που συνδυάζει μοναδικά την επιστημονική Θεωρία με τη καλλιτεχνική Πράξη.
            Αποστολή μας είναι να δώσουμε ώθηση στους νέους, να τους βοηθήσουμε να αναδείξουν τα ταλέντα και τις δεξιότητες τους και να ανακαλύψουν τη δική τους δημιουργική φωνή. Με την επικύρωση του κρατικού Βρετανικού Πανεπιστημίου Middlesex,
            ο ΑΚΤΟ προσφέρει μεταπτυχιακά και προπτυχιακά προγράμματα σπουδών σε επίπεδο Bachelor of Arts Honours Degree και Master of Arts in Design. Παράλληλα λειτουργούν και διετή προγράμματα επαγγελματικής κατάρτισης – ΙΕΚ,
            προσφέροντας μεγαλύτερη ευελιξία στην διάρκεια παρακολούθησης και τα δίδακτρα, με το κύρος και την αξιοπιστία, του πιο εξειδικευμένου εκπαιδευτικού οργανισμού στις περιοχές του art & design.
            Σύμφωνα με έρευνα που δημοσίευσε το DOMUS Magazine, ο ΑΚΤΟ κατατάσσεται στα 100 καλύτερα εκπαιδευτικά ιδρύματα Αρχιτεκτονικής & Design της Ευρώπης, για το έτος 2013. To εμβληματικό ιταλικό περιοδικό, που εδώ και σχεδόν έναν αιώνα όρισε τάσεις, προανήγγειλε κινήματα και συνέδεσε με αξεπέραστο τρόπο το design με την αρχιτεκτονική,
            επέλεξε τις καλύτερες σχολές στον Τομέα και τις συμπεριέλαβε στην Ειδική Έκδοση με τίτλο “Europe’s Top 100 School of Architecture & Design 2013
            ',
            'background' => $background,
        ]);
        new Portal($school16, 5, 'college');

        Scholio::portalStudy($school16, 'Προπτυχιακές Σπουδές-Bachelor', 'Arts & Design', 'BA in Graphic Design', 'https://akto.gr/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CF%80%CF%81%CE%BF%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1/ba-in-graphic-design');
        Scholio::portalStudy($school16, 'Προπτυχιακές Σπουδές-Bachelor', 'Arts & Design', 'BA in Interior Architecture', 'https://akto.gr/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CF%80%CF%81%CE%BF%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1/ba-in-interior-architecture');
        Scholio::portalStudy($school16, 'Προπτυχιακές Σπουδές-Bachelor', 'Arts & Design', 'BA in Product & Design Innovation', 'https://akto.gr/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CF%80%CF%81%CE%BF%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1/ba-in-product-design');
        Scholio::portalStudy($school16, 'Προπτυχιακές Σπουδές-Bachelor', 'Arts & Design', 'BA in Photography', 'https://akto.gr/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CF%80%CF%81%CE%BF%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1/ba-in-photography');
        Scholio::portalStudy($school16, 'Προπτυχιακές Σπουδές-Bachelor', 'Arts & Design', 'BA in Fashion Design', 'https://akto.gr/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CF%80%CF%81%CE%BF%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1/ba-in-fashion-design');
        Scholio::portalStudy($school16, 'Προπτυχιακές Σπουδές-Bachelor', 'Arts & Design', 'BA in Fine Art & New Media', 'https://akto.gr/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CF%80%CF%81%CE%BF%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1/ba-in-fine-arts-technology');
        Scholio::portalStudy($school16, 'Προπτυχιακές Σπουδές-Bachelor', 'Arts & Design', 'BA in Animation & Interactive Media', 'https://akto.gr/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CF%80%CF%81%CE%BF%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1/ba-in-3d-animation-interactive-media');
        Scholio::portalStudy($school16, 'Προπτυχιακές Σπουδές-Bachelor', 'Arts & Design', 'BA in Sketch-Comics-Cartoon', 'https://akto.gr/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CF%80%CF%81%CE%BF%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1/ba-in-sketch-comics-cartoon');
        Scholio::portalStudy($school16, 'Μεταπτυχιακές Σπουδές-Master', 'Arts & Design', 'Master of Arts in Design', 'https://akto.gr/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CE%BC%CE%B5%CF%84%CE%B1%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1/master-of-arts-in-design');
        Scholio::portalStudy($school16, 'Μεταπτυχιακές Σπουδές-Master', 'Arts & Design', 'Master of Arts in Digital Design & Interactive Applications', 'https://akto.gr/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CE%BC%CE%B5%CF%84%CE%B1%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1/digital-design-interactive-applications');

        Scholio::portalSocial($school16, 'facebook', 'https://www.facebook.com/AKTOcollege');
        Scholio::portalSocial($school16, 'instagram', 'https://instagram.com/aktocollege');
        Scholio::portalSocial($school16, 'twitter', 'https://twitter.com/AKTOcollege');
        Scholio::portalSocial($school16, 'youtube', 'http://www.youtube.com/user/aktocollege');
        // Scholio::portalSocial($school16, 'linkedin', '');
        Scholio::portalSocial($school16, 'google', 'https://www.google.com/+AktoGreece');

        /*===============   17 AKTO THESSALONIKI ================*/
        $school17 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'AKTO', 'email' => 'informationThess@aktocollege.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'aktothess'])->id,
            'address' => '26ης Οκτωβρίου 38-40',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310221231,
            'type_id' => 1,
            'website' => 'aktoThess.gr',
            'approved' => 1,
            'about' => 'O ΑΚΤΟ είναι ο μεγαλύτερος εκπαιδευτικός όμιλος Τέχνης, Design & Media στην Ελλάδα. Οι Εφαρμοσμένες Τέχνες διδάσκονται στον ΑΚΤΟ με ένα σφαιρικό, διακλαδικό πνεύμα που συνδυάζει μοναδικά την επιστημονική Θεωρία με τη καλλιτεχνική Πράξη.
            Αποστολή μας είναι να δώσουμε ώθηση στους νέους, να τους βοηθήσουμε να αναδείξουν τα ταλέντα και τις δεξιότητες τους και να ανακαλύψουν τη δική τους δημιουργική φωνή. Με την επικύρωση του κρατικού Βρετανικού Πανεπιστημίου Middlesex,
            ο ΑΚΤΟ προσφέρει μεταπτυχιακά και προπτυχιακά προγράμματα σπουδών σε επίπεδο Bachelor of Arts Honours Degree και Master of Arts in Design. Παράλληλα λειτουργούν και διετή προγράμματα επαγγελματικής κατάρτισης – ΙΕΚ, προσφέροντας μεγαλύτερη ευελιξία στην διάρκεια παρακολούθησης
            και τα δίδακτρα, με το κύρος και την αξιοπιστία, του πιο εξειδικευμένου εκπαιδευτικού οργανισμού στις περιοχές του art & design.
            Σύμφωνα με έρευνα που δημοσίευσε το DOMUS Magazine, ο ΑΚΤΟ κατατάσσεται στα 100 καλύτερα εκπαιδευτικά ιδρύματα Αρχιτεκτονικής & Design της Ευρώπης, για το έτος 2013. To εμβληματικό ιταλικό περιοδικό, που εδώ και σχεδόν έναν αιώνα όρισε τάσεις, προανήγγειλε κινήματα και συνέδεσε με αξεπέραστο τρόπο το design με την αρχιτεκτονική,
            επέλεξε τις καλύτερες σχολές στον Τομέα και τις συμπεριέλαβε στην Ειδική Έκδοση με τίτλο “Europe’s Top 100 School of Architecture & Design 2013
            ',
            'background' => $background,
        ]);

        new Portal($school17, 5, 'college');

        Scholio::portalStudy($school17, 'Προπτυχιακές Σπουδές-Bachelor', 'Arts & Design', 'BA in Graphic Design', 'https://akto.gr/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CF%80%CF%81%CE%BF%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1/ba-in-graphic-design');
        Scholio::portalStudy($school17, 'Προπτυχιακές Σπουδές-Bachelor', 'Arts & Design', 'BA in Interior Architecture', 'https://akto.gr/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CF%80%CF%81%CE%BF%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1/ba-in-interior-architecture');
        Scholio::portalStudy($school17, 'Προπτυχιακές Σπουδές-Bachelor', 'Arts & Design', 'BA in Product & Design Innovation', 'https://akto.gr/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CF%80%CF%81%CE%BF%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1/ba-in-product-design');
        Scholio::portalStudy($school17, 'Προπτυχιακές Σπουδές-Bachelor', 'Arts & Design', 'BA in Photography', 'https://akto.gr/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CF%80%CF%81%CE%BF%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1/ba-in-photography');
        Scholio::portalStudy($school17, 'Προπτυχιακές Σπουδές-Bachelor', 'Arts & Design', 'BA in Fashion Design', 'https://akto.gr/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CF%80%CF%81%CE%BF%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1/ba-in-fashion-design');
        Scholio::portalStudy($school17, 'Προπτυχιακές Σπουδές-Bachelor', 'Arts & Design', 'BA in Fine Art & New Media', 'https://akto.gr/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CF%80%CF%81%CE%BF%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1/ba-in-fine-arts-technology');
        Scholio::portalStudy($school17, 'Προπτυχιακές Σπουδές-Bachelor', 'Arts & Design', 'BA in Animation & Interactive Media', 'https://akto.gr/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CF%80%CF%81%CE%BF%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1/ba-in-3d-animation-interactive-media');
        Scholio::portalStudy($school17, 'Προπτυχιακές Σπουδές-Bachelor', 'Arts & Design', 'BA in Sketch-Comics-Cartoon', 'https://akto.gr/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CF%80%CF%81%CE%BF%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1/ba-in-sketch-comics-cartoon');
        Scholio::portalStudy($school17, 'Μεταπτυχιακές Σπουδές-Master', 'Arts & Design', 'Master of Arts in Design', 'https://akto.gr/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CE%BC%CE%B5%CF%84%CE%B1%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1/master-of-arts-in-design');
        Scholio::portalStudy($school17, 'Μεταπτυχιακές Σπουδές-Master', 'Arts & Design', 'Master of Arts in Digital Design & Interactive Applications', 'https://akto.gr/%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1-%CF%83%CF%80%CE%BF%CF%85%CE%B4%CF%8E%CE%BD/%CE%BC%CE%B5%CF%84%CE%B1%CF%80%CF%84%CF%85%CF%87%CE%B9%CE%B1%CE%BA%CE%AC-%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%AC%CE%BC%CE%BC%CE%B1%CF%84%CE%B1/digital-design-interactive-applications');

        Scholio::portalSocial($school17, 'facebook', 'https://www.facebook.com/AKTOcollege');
        Scholio::portalSocial($school17, 'instagram', 'https://instagram.com/aktocollege');
        Scholio::portalSocial($school17, 'twitter', 'https://twitter.com/AKTOcollege');
        Scholio::portalSocial($school17, 'youtube', 'http://www.youtube.com/user/aktocollege');
        // Scholio::portalSocial($school17, 'linkedin', '');
        Scholio::portalSocial($school17, 'google', 'https://www.google.com/+AktoGreece');

        /*===============   18 ATH/TECH  Athens ================*/
        $school18 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'ATH/TECH Athens Tech College', 'email' => 'info@athtech.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'athtech'])->id,
            'address' => 'Τατοΐου 2, Κηφισιά',
            'city' => 'Αθήνα',
            'phone' => 2108088008,
            'type_id' => 1,
            'website' => 'athtech.gr',
            'approved' => 1,
            'about' => 'Το Athens Tech είναι το πρώτο τεχνολογικό εκπαιδευτικό ίδρυμα στην Ελλάδα που συνδυάζει την τεχνολογία, την έρευνα και την επιχειρηματικότητα, με τις ανάγκες της πραγματικής οικονομίας. Χάρη στην συνδυασμένη εμπειρία 45+ ετών των τριών πρωτοπόρων δημιουργών του (BCA College, Intracom Holdings και 24media Group), είναι σε θέση να προσφέρει μια σειρά από εξειδικευμένα εκπαιδευτικά προγράμματα Bachelor και Masters, πιστοποιημένα από το πανεπιστήμιο του Sheffield, ενός εκ των 10 καλύτερων Βρετανικών Πανεπιστημίων. Επιπλέον, το ΑΤΗ/TECH προσφέρει στους φοιτητές του, τόσο την δυνατότητα 9 θέσεων πρακτικής άσκησης στην 24media (Ηuffington Post , Contra gr, Oneman, Ladylike, Νews 247), την Intrasoft International και το BCA College, όσο και την δυνατότητα ερευνητικής εργασίας στο πρότυπο ερευνητικό κέντρο AIT. Σπούδασε την τεχνολογία του αύριο, σήμερα, επιλέγοντας μία σειρά από καινοτόμα εκπαιδευτικά προγράμματα στην επιστήμη των υπολογιστών που προσφέρει το Athens Tech College.',
            'background' => $background,
        ]);

        new Portal($school18, 5, 'college');

        Scholio::portalStudy($school18, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc (Hons) in Computer Science', 'http://www.athtech.gr/courses/bachelors/computer-science/');
        Scholio::portalStudy($school18, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc (Hons) in Computer Science - Business Informatics', 'http://www.athtech.gr/courses/bachelors/business-informatics/');
        Scholio::portalStudy($school18, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc (Hons) in Computer Science - Internet Computing', 'http://www.athtech.gr/courses/bachelors/internet-computing/');
        Scholio::portalStudy($school18, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'MSc in Management of Business, Innovation & Technology (MBIT)', 'http://www.athtech.gr/courses/masters/management-of-business-innovation-technology/');
        Scholio::portalStudy($school18, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'MSc in Advanced Software Engineering - Web & Mobile Applications', 'http://www.athtech.gr/courses/masters/advanced-software-engineering/web-mobile-applications/');
        Scholio::portalStudy($school18, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'MSc in Advanced Software Engineering - Data Analytics', 'http://www.athtech.gr/courses/masters/advanced-software-engineering/data-analytics/');
        Scholio::portalStudy($school18, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'MSc in Advanced Software Engineering - Data Networks', 'http://www.athtech.gr/courses/masters/advanced-software-engineering/data-networks/');
        Scholio::portalStudy($school18, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'MSc in Advanced Software Engineering - Information Security', 'http://www.athtech.gr/courses/masters/advanced-software-engineering/information-security/');
        Scholio::portalStudy($school18, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'MSc in Computing', 'http://www.athtech.gr/courses/masters/msc-in-computing/');

        Scholio::portalSocial($school18, 'facebook', 'https://www.facebook.com/athtech.gr/');
        // Scholio::portalSocial($school, 'instagram', '');
        Scholio::portalSocial($school18, 'twitter', 'https://twitter.com/AthensTechGR');
        Scholio::portalSocial($school18, 'youtube', 'https://www.youtube.com/channel/UC6u_wm-7R2EhYvvsg60hdlg');
        Scholio::portalSocial($school18, 'linkedin', 'https://www.linkedin.com/company/athens-tech-college');

        /*===============  19 MBS College of Crete ================*/
        $school19 = factory(App\Models\School::class)->create([
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
            'background' => $background,
        ]);
        new Portal($school19, 5, 'college');

        Scholio::portalStudy($school19, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BA (Hons) Business', 'https://www.collegeofcrete.gr/business');
        Scholio::portalStudy($school19, 'Προπτυχιακές Σπουδές-Bachelor', 'Τουρισμός - Tourism', 'BA (Hons) Hospitality, Tourism & Event Management', 'https://www.collegeofcrete.gr/hospitality');
        Scholio::portalStudy($school19, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'BSc (Hons) Psychology', 'https://www.collegeofcrete.gr/psychology');
        Scholio::portalStudy($school19, 'Προπτυχιακές Σπουδές-Bachelor', 'Επιστήμες Υγείας - Health Sciences', 'BSc in Pharmacy', 'https://www.collegeofcrete.gr/pharmacy');
        Scholio::portalStudy($school19, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA - Master in Business Administration', 'https://www.collegeofcrete.gr/mba');

        Scholio::portalSocial($school19, 'facebook', 'http://www.facebook.com/mbscollegeofcrete');
        Scholio::portalSocial($school19, 'instagram', 'https://www.instagram.com/mbscollegeofcrete/');
        Scholio::portalSocial($school19, 'twitter', 'https://twitter.com/collegeofcrete');
        Scholio::portalSocial($school19, 'youtube', 'http://www.youtube.com/user/MBSCOLLEGEourvideos');
        Scholio::portalSocial($school19, 'linkedin', 'https://www.linkedin.com/company/998619?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A998619%2Cidx%3A3-1-6%2CtarId%3A1468506172471%2Ctas%3Ambs%20col');

        /*===============  20 Perrotis College Thessaloniki ================*/
        $school20 = factory(App\Models\School::class)->create([
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
            'background' => $background,
        ]);
        new Portal($school20, 5, 'college');

        Scholio::portalStudy($school20, 'Προπτυχιακές Σπουδές-Bachelor', 'Agriculture - Environment - Life Sciences', 'BSc Agro-Environmental Systems Management - Διαχείριση Aγρο-Περιβαλλοντικών Συστημάτων', 'http://www.perrotiscollege.edu.gr/agro-environmental-systems-management/');
        // Scholio::portalStudy($school20,'Προπτυχιακές Σπουδές-Bachelor','Agriculture - Environment - Life Sciences','','');

        /*===============   21 NYC   Thessaloniki ================*/
        $school21 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'New York College Thessaloniki', 'email' => 'nycth@nyc.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'nycthess'])->id,
            'address' => 'Εγνατίας 138',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310889879,
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
            'background' => $background,
        ]);
        new Portal($school21, 5, 'college');

        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BA (Hons) Business Studies (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/ba-hons-business-studies-university-greenwich');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BA (Hons) in Business Studies (Finance) (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/ba-hons-business-studies-finance-university-greenwich');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BA (Hons) in Business Studies (Human Resource Management) (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/ba-hons-business-studies-human-resource-management-university');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BA (Hons) in Business Studies (International Business) (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/ba-hons-business-studies-international-business-university');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BA (Hons) in Business Studies (Logistics) (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/ba-hons-business-studies-logistics-university-greenwich');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BA (Hons) in Business Studies (Marketing) (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/ba-hons-business-studies-marketing-university-greenwich');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Bachelor in Management (Universite Toulouse 1 Capitole)', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bachelor-management-universite-toulouse-1-capitole');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BS Concentration Business Communications (SUNY-ESC)', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bs-concentration-business-communications-suny-esc');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BS Concentration in Business Administration (SUNY-ESC)', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bs-concentration-business-administration-suny-esc');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BS Concentration in Finance (SUNY-ESC)', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bs-concentration-finance-suny-esc');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BS Concentration in International Business (SUNY-ESC)', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bs-concentration-international-business-suny-esc');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BS Concentration in Management (SUNY-ESC)', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bs-concentration-management-suny-esc');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BS Concentration in Marketing (SUNY-ESC)', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bs-concentration-marketing-suny-esc');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BA (Hons) in Business with Shipping (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/shipping/ba-hons-business-shipping-university-greenwich');

        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc in Accounting (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bsc-accounting-national-american-university-distance-learning');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc in Applied Management (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bsc-applied-management-national-american-university-distance');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc in Business Administration (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bsc-business-administration-national-american-university');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc in Business Administration emphasis in Accounting (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bsc-business-administration-emphasis-accounting-national');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc in Business Administration emphasis in Entrepreneurship (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bsc-business-administration-emphasis-entrepreneurship-national');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc in Business Administration emphasis in Financial Management (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bsc-business-administration-emphasis-financial-management');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc in Business Administration emphasis in Human Resource Management (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bsc-business-administration-emphasis-human-resource-management');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc in Business Administration emphasis in Information Systems (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bsc-business-administration-emphasis-information-systems');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc in Business Administration emphasis in International Business (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bsc-business-administration-emphasis-international-business');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc in Business Administration emphasis in Management (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bsc-business-administration-emphasis-management-national');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc in Business Administration emphasis in Marketing (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bsc-business-administration-emphasis-marketing-national-american');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc in Business Administration emphasis in Supply Chain Management (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bsc-business-administration-emphasis-supply-chain-management');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc in Business Administration emphasis in Tourism and Hospitality Management (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bsc-business-administration-emphasis-tourism-and-hospitality');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc in Organizational Leadership (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/business/bsc-organizational-leadership-national-american-university');

        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Τουρισμός - Tourism', 'BA (Hons) in Business Studies with Tourism (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/tourism/ba-hons-business-studies-tourism-university-greenwich');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Τουρισμός - Tourism', 'BSc (Hons) International Hospitality Management (University of Bolton)', 'http://www.nyc.gr/study-at-nyc/undergraduate/tourism/bsc-hons-international-hospitality-management-university-bolton');

        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'BA (Hons) in English Language and English Language Teaching (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/humanities-and-social-sciences/ba-hons-english-language-and-english');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'BA (Hons) in Film Studies (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/humanities-and-social-sciences/ba-hons-film-studies-university-greenwich');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'BA Concentration Communication: Mass Media Production (SUNY-ESC)', 'http://www.nyc.gr/study-at-nyc/undergraduate/humanities-and-social-sciences/ba-concentration-communication-mass-media');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'BA Concentration in Communications (SUNY-ESC)', 'http://www.nyc.gr/study-at-nyc/undergraduate/humanities-and-social-sciences/ba-concentration-communications-suny-esc');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'BA Concentration in International Relations (SUNY-ESC)', 'http://www.nyc.gr/study-at-nyc/undergraduate/humanities-and-social-sciences/ba-concentration-international-relations');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'Extended BA (Hons) International Studies (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/humanities-and-social-sciences/extended-ba-hons-international-studies');

        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Ναυτιλιακά - Nautical Education', 'Bachelor in Marine Engineering (Marine Engineer Officer)', 'http://www.nyc.gr/study-at-nyc/undergraduate/nautical-education/bachelor-marine-engineering-marine-engineer-officer');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Ναυτιλιακά - Nautical Education', 'Bachelor in Navigation (Deck Officer)', 'http://www.nyc.gr/study-at-nyc/undergraduate/nautical-education/bachelor-navigation-deck-officer');

        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Επιστήμες Υγείας - Health Sciences', 'BS Concentration in Psychology (SUNY-ESC)', 'http://www.nyc.gr/study-at-nyc/undergraduate/health-sciences/bs-concentration-psychology-suny-esc');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Επιστήμες Υγείας - Health Sciences', 'BSc (Hons) in Biomedical Sciences (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/health-sciences/bsc-hons-biomedical-sciences-university-greenwich');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Επιστήμες Υγείας - Health Sciences', 'BSc (Hons) in Human Nutrition (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/health-sciences/bsc-hons-human-nutrition-university-greenwich');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Επιστήμες Υγείας - Health Sciences', 'BSc (Hons) in Psychology (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/health-sciences/bsc-hons-psychology-university-greenwich');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Επιστήμες Υγείας - Health Sciences', 'Extended BSc Hons Science Pathway (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/health-sciences/extended-bsc-hons-science-pathway-university-greenwich');

        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BS. in Computer Science (State University of New York -Empire State College)', 'http://www.nyc.gr/study-at-nyc/undergraduate/engineering-and-informatics/bs-computer-science-state-university-new-york');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BS. in Information Systems (SUNY-ESC)', 'http://www.nyc.gr/study-at-nyc/undergraduate/engineering-and-informatics/bs-information-systems-suny-esc');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc (Hons) in Computer Games Programming (University of Bolton)', 'http://www.nyc.gr/study-at-nyc/undergraduate/engineering-and-informatics/bsc-computer-games-programming');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc (Hons) in Computer Networking (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/engineering-and-informatics/bsc-hons-computer-networking-university');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc (Hons) in Computing (University of Bolton)', 'http://www.nyc.gr/study-at-nyc/undergraduate/engineering-and-informatics/bsc-hons-computing-university-bolton');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc (Hons) in Internet Engineering and Web Management (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/undergraduate/engineering-and-informatics/bsc-hons-internet-engineering-and-web');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc in Applied Information Technology (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/engineering-and-informatics/bsc-applied-information-technology-national');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc in Information Technology emphasis in Computer Security and Forensics (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/engineering-and-informatics/bsc-information-technology-emphasis-computer');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc in Information Technology emphasis in Internet Systems Development (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/engineering-and-informatics/bsc-information-technology-emphasis-internet');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc in Information Technology emphasis in Management Information Systems (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/engineering-and-informatics/bsc-information-technology-emphasis');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc in Information Technology emphasis in Network Management/Microsoft (National American University) | DISTANCE LEARNING', 'http://www.nyc.gr/study-at-nyc/undergraduate/engineering-and-informatics/bsc-information-technology-emphasis-network');
        Scholio::portalStudy($school21, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'Extended BEng (Hons) Computer Systems and Software Engineering (Greenwich University)', 'http://www.nyc.gr/study-at-nyc/undergraduate/engineering-and-informatics/extended-beng-hons-computer-systems-and');

        Scholio::portalStudy($school21, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Executive MBA (University of Bolton)', 'http://www.nyc.gr/study-at-nyc/postgraduate/business/executive-mba-university-bolton');
        Scholio::portalStudy($school21, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'The University of Greenwich MBA (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/postgraduate/business/university-greenwich-mba-university-greenwich');

        Scholio::portalStudy($school21, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MA. Second Language Learning and Teaching (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/postgraduate/humanities-and-social-sciences/ma-second-language-learning-and-teaching');
        Scholio::portalStudy($school21, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MPhil - Education Specialisms (University of Bolton)', 'http://www.nyc.gr/study-at-nyc/postgraduate/humanities-and-social-sciences/mphil-education-specialisms-university');
        Scholio::portalStudy($school21, 'Μεταπτυχιακές Σπουδές-Master', 'Τουρισμός - Tourism', 'Master 2 Management- Pathway Management of International Tourism (Universite Toulouse 1 Capitole)', 'http://www.nyc.gr/study-at-nyc/postgraduate/tourism/master-2-management-pathway-management-international-tourism');
        Scholio::portalStudy($school21, 'Μεταπτυχιακές Σπουδές-Master', 'Επιστήμες Υγείας - Health Sciences', 'MPhil - Psychology Specialisms (University of Bolton)', 'http://www.nyc.gr/study-at-nyc/postgraduate/health-sciences/mphil-psychology-specialisms-university-bolton');
        Scholio::portalStudy($school21, 'Μεταπτυχιακές Σπουδές-Master', 'Επιστήμες Υγείας - Health Sciences', 'MSc Cognitive Behavioural Psychotherapies', 'http://www.nyc.gr/study-at-nyc/postgraduate/health-sciences/msc-cognitive-behavioural-therapy-university-bolton');
        Scholio::portalStudy($school21, 'Μεταπτυχιακές Σπουδές-Master', 'Επιστήμες Υγείας - Health Sciences', 'MSc in Psychology (University of Bolton)', 'http://www.nyc.gr/study-at-nyc/postgraduate/health-sciences/msc-psychology-university-bolton');
        Scholio::portalStudy($school21, 'Μεταπτυχιακές Σπουδές-Master', 'Ναυτιλιακά - Nautical Education', 'MSc Global Shipping Management', 'http://www.nyc.gr/study-at-nyc/postgraduate/shipping/msc-global-shipping-management');
        Scholio::portalStudy($school21, 'Μεταπτυχιακές Σπουδές-Master', 'Ναυτιλιακά - Nautical Education', 'MSc in Marine Engineering Management (University of Greenwich)', 'http://www.nyc.gr/study-at-nyc/postgraduate/shipping/msc-marine-engineering-management-university-greenwich');
        Scholio::portalStudy($school21, 'Μεταπτυχιακές Σπουδές-Master', 'Πολυτεχνικές Σπουδές - Engineering', 'MSc. in Civil Engineering (University of Bolton)', 'http://www.nyc.gr/study-at-nyc/postgraduate/engineering-and-informatics/msc-civil-engineering-university-bolton');

        Scholio::portalSocial($school21, 'facebook', 'http://www.facebook.com/nyc.gr');
        // Scholio::portalSocial($school, 'instagram', 'https://instagram.com/');
        Scholio::portalSocial($school21, 'twitter', 'http://www.twitter.com/nyc_gr');
        Scholio::portalSocial($school21, 'youtube', 'http://www.youtube.com/user/nycath');
        Scholio::portalSocial($school21, 'linkedin', 'https://www.linkedin.com/company/new-york-college');

        /*===============   22 MEDITERRANEAN COLLEGE Thessaloniki  ================*/
        $school22 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Mediterranean College Thessaloniki', 'email' => 'medcollege@medcollege.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'medThess'])->id,
            'address' => 'Εγνατία 2-4, Κτίριο «ΒΙΕΝΝΗ»',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310287779,
            'type_id' => 1,
            'website' => 'medcollege.edu.gr',
            'approved' => 1,
            'about' => 'Στον εικοστό πρώτο αιώνα, το Mediterranean College (MC), σε συνεργασία με ισχυρά πανεπιστήμια του εξωτερικού, αναδύεται ως ένα ιδιωτικό ίδρυμα ανώτατης εκπαίδευσης με ηγετικό ρόλο στους κλάδους σπουδών της Οικονομίας, της Διοίκησης, της Πληροφορικής, των Ανθρωπιστικών Επιστημών,του Τουρισμού, των Επαγγελμάτων Υγείας,  των Μηχανικών προσφέροντας προγράμματα υψηλής ποιότητας σε ένα περιβάλλον γαλούχησης όπου η ποιότητα υπαγορεύεται πάντα από τις ανάγκες των φοιτητών. Για να πραγματοποιήσει το όραμά του για ακαδημαϊκή διάκριση, επιτυχία των φοιτητών του, εκπαιδευτική και τεχνολογική καινοτομία, καθώς και για κοινωνική προσφορά, το Κολλέγιο προσελκύει και εξασφαλίζει αφοσιωμένους επαγγελματίες και εκπαιδευτικό προσωπικό με εξαιρετικές ικανότητες, αναγνωρισμένο για την εξειδίκευσή του στον τομέα της διδασκαλίας, της καθοδήγησης φοιτητών, της κατάρτισης, της έρευνας και της παροχής υπηρεσιών. Δομημένο σε αυτές τις σταθερές βάσεις και αρχές, το MC, αποσκοπεί στην υλοποίηση του οράματός του, να γίνει ένα μοναδικό διεθνές κέντρο μάθησης στον ελλαδικό χώρο.',
            'background' => $background,
        ]);
        new Portal($school22, 5, 'college');

        Scholio::portalStudy($school22, 'Προπτυχιακές Σπουδές-Bachelor', 'Επιστήμες Υγείας - Health Sciences', 'BSc (Hons) Physiotherapy - Φυσικοθεραπεία', 'https://www.medcollege.edu.gr/courses/bsc-hons-physiotherapy/');
        Scholio::portalStudy($school22, 'Προπτυχιακές Σπουδές-Bachelor', 'Επιστήμες Υγείας - Health Sciences', 'BSc (Hons) Speech and Language Therapy - Λογοθεραπεία', 'https://www.medcollege.edu.gr/courses/bsc-hons-speech-language-therapy/');
        Scholio::portalStudy($school22, 'Προπτυχιακές Σπουδές-Bachelor', 'Τουρισμός - Tourism', 'BA (Hons) International Hospitality Management', 'https://www.medcollege.edu.gr/courses/ba-hons-hospitality-management/');
        Scholio::portalStudy($school22, 'Προπτυχιακές Σπουδές-Bachelor', 'Τουρισμός - Tourism', 'BA (Hons) Professional Culinary Arts', 'https://www.medcollege.edu.gr/courses/ba-professional-culinary-arts/');
        Scholio::portalStudy($school22, 'Προπτυχιακές Σπουδές-Bachelor', 'Πολυτεχνικές Σπουδές - Engineering', 'MEng / BEng (Hons) Mechanical Engineering & Design - Μηχανολόγος Μηχανικός', 'https://www.medcollege.edu.gr/courses/bsc-hons-mechanical-engineering/');
        Scholio::portalStudy($school22, 'Προπτυχιακές Σπουδές-Bachelor', 'Πολυτεχνικές Σπουδές - Engineering', 'MEng / BEng (Hons) Civil Engineering & Construction - Πολιτικός Μηχανικός', 'https://www.medcollege.edu.gr/courses/bsc-hons-civil-engineering-and-construction/');
        Scholio::portalStudy($school22, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc (Hons) Computer Science', 'https://www.medcollege.edu.gr/courses/bsc-hons-computer-science/');
        Scholio::portalStudy($school22, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc (Hons) Computer Games Programming', 'https://www.medcollege.edu.gr/courses/bsc-hons-computer-games-programming/');
        Scholio::portalStudy($school22, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc (Hons) Computer Networks & Security', '');
        Scholio::portalStudy($school22, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BA (Hons) Business Management (Marketing)', '');
        Scholio::portalStudy($school22, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BA (Hons) Business Management (Finance)', 'https://www.medcollege.edu.gr/courses/ba-hons-business-finance/');
        Scholio::portalStudy($school22, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'BA (Hons) Early Childhood Studies', 'https://www.medcollege.edu.gr/courses/ba-hons-early-childhood-studies/');
        Scholio::portalStudy($school22, 'Προπτυχιακές Σπουδές-Bachelor', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'BSc (Hons) Applied Psychology - Ψυχολογία', 'https://www.medcollege.edu.gr/courses/bsc-hons-applied-psychology/');
        Scholio::portalStudy($school22, 'Προπτυχιακές Σπουδές-Bachelor', 'Ναυτιλιακά - Nautical Education', 'BA (Hons) Business Management (Shipping)', 'https://www.medcollege.edu.gr/courses/ba-hons-business-management-shipping/');

        Scholio::portalStudy($school22, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'MSc Big Data Analytics', 'https://www.medcollege.edu.gr/courses/msc-big-data-analytics/');
        Scholio::portalStudy($school22, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'MSc Advanced Computer Networks', 'https://www.medcollege.edu.gr/courses/msc-advanced-computer-networks/');
        Scholio::portalStudy($school22, 'Μεταπτυχιακές Σπουδές-Master', 'Ναυτιλιακά - Nautical Education', 'MBA Global Shipping', 'https://www.medcollege.edu.gr/courses/mba-global-shipping/');
        Scholio::portalStudy($school22, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MSc Counselling and Psychology in Educational Settings - Σχολική Ψυχολογία & Συμβουλευτική', 'https://www.medcollege.edu.gr/courses/msc-counselling-psychology-educational-settings/');
        Scholio::portalStudy($school22, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MSc Applied Psychology: Clinical Psychology and Counselling - Κλινική Ψυχολογία & Συμβουλευτική', 'https://www.medcollege.edu.gr/courses/msc-applied-psychology-clinical-psychology-counselling/');
        Scholio::portalStudy($school22, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MSc Applied Psychology: Health Psychology and Counselling - Ψυχολογία Υγείας & Συμβουλευτική', 'https://www.medcollege.edu.gr/courses/msc-applied-psychology-health-psychology-counselling/');
        Scholio::portalStudy($school22, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MSc Integrative Counselling & Psychotherapy - Συνθετική Ψυχοθεραπεία', 'https://www.medcollege.edu.gr/courses/msc-integrative-counselling-psychotherapy/');
        Scholio::portalStudy($school22, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MSc Cognitive Behavioural Psychotherapy (Adult)', 'https://www.medcollege.edu.gr/courses/msc-cognitive-behavioural-psychotherapy-adult/');
        Scholio::portalStudy($school22, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MA Inclusion and Special Educational Needs and Disability (ISEND) - Ειδική Αγωγή & Ένταξη', 'https://www.medcollege.edu.gr/courses/ma-education-special-educational-needs-disabilities/');
        Scholio::portalStudy($school22, 'Μεταπτυχιακές Σπουδές-Master', 'Ανθρωπιστικές Επιστήμες - Humanities and Social Sciences', 'MA Education (Leadership & Management)', 'https://www.medcollege.edu.gr/courses/ma-education-leadership-management/');
        Scholio::portalStudy($school22, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA Global', 'https://www.medcollege.edu.gr/courses/mba-master-of-business-administration/');
        Scholio::portalStudy($school22, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA Global Finance', 'https://www.medcollege.edu.gr/courses/mba-global-finance/');
        Scholio::portalStudy($school22, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'ΜSc Marketing Management', 'https://www.medcollege.edu.gr/courses/%ce%bcsc-marketing-management/');
        Scholio::portalStudy($school22, 'Μεταπτυχιακές Σπουδές-Master', 'Πολυτεχνικές Σπουδές - Engineering', 'MSc Mechanical Engineering and Design', 'https://www.medcollege.edu.gr/courses/msc-mechanical-engineering-design/');
        Scholio::portalStudy($school22, 'Μεταπτυχιακές Σπουδές-Master', 'Πολυτεχνικές Σπουδές - Engineering', 'MSc Civil Engineering and Construction', 'https://www.medcollege.edu.gr/courses/msc-civil-engineering-construction/');
        Scholio::portalStudy($school22, 'Μεταπτυχιακές Σπουδές-Master', 'Τουρισμός - Tourism', 'MSc International Hospitality Management', 'https://www.medcollege.edu.gr/courses/msc-international-hospitality-management/');

        Scholio::portalSocial($school22, 'facebook', 'https://www.facebook.com/mediterraneancollege');
        Scholio::portalSocial($school22, 'instagram', 'https://www.instagram.com/mediterranean_college/');
        Scholio::portalSocial($school22, 'twitter', 'https://twitter.com/medcollege1');
        Scholio::portalSocial($school22, 'youtube', 'https://www.youtube.com/user/mediterraneancollege/featured');
        // Scholio::portalSocial($school22, 'linkedin', '');
        Scholio::portalSocial($school22, 'google', 'https://plus.google.com/+MedcollegeEduGreece');

        /*===============   23 AAS THESSALONIKI ================*/
        $school23 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'AAS College ', 'email' => 'info@aas.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'aas'])->id,
            'address' => 'Θεσσαλονίκης 108, Γαλήνη Ωραιοκάστρου',
            'city' => 'θεσσαλονίκη',
            'phone' => 2310220807,
            'type_id' => 1,
            'website' => 'www.aas.gr',
            'approved' => 1,
            'about' => 'Χάρη στη συνεργασία franchise(δικαιόχρησης) του AAS College με το Πανεπιστήμιο του Central Lancashire (UCLan), οι σπουδαστές του ακολουθούν  το πρόγραμμα μαθημάτων του UCLan, έχουν την ίδια φοιτητική ταυτότητα και απολαμβάνουν τα ίδια προνόμια με τους φοιτητές του αγγλικού πανεπιστημίου.
             Ενώ ταυτόχρονα, μπορούν να χρησιμοποιήσουν τις πανεπιστημιακές σημειώσεις, και εκτός από την πλούσια βιβλιοθήκη του AAS με περισσότερους από 4.000 τίτλους βιβλίων,
             μέσω της ιστοσελίδας του UCLan έχουν πρόσβαση σε παγκόσμιες ηλεκτρονικές βιβλιοθήκες, με τις οποίες είναι συμβεβλημένο το πανεπιστήμιο.',
            'background' => $background,
        ]);
        new Portal($school23, 5, 'college');

        Scholio::portalStudy($school23, 'Προπτυχιακές Σπουδές-Bachelor', 'Arts & Design', 'BA(Hons) Animation', 'http://www.aas.gr/el/bahons-animation/');
        Scholio::portalStudy($school23, 'Προπτυχιακές Σπουδές-Bachelor', 'Arts & Design', 'BA(Hons) Games Design', 'http://www.aas.gr/el/bahons-games-design-3/');
        Scholio::portalStudy($school23, 'Προπτυχιακές Σπουδές-Bachelor', 'Arts & Design', 'BA(Hons) Fashion Design', 'http://www.aas.gr/el/bahons-fashion-design-3/');
        Scholio::portalStudy($school23, 'Προπτυχιακές Σπουδές-Bachelor', 'Arts & Design', 'BA(Hons) Fashion Promotion', 'http://www.aas.gr/el/bahons-fashion-promotion-3/');
        Scholio::portalStudy($school23, 'Προπτυχιακές Σπουδές-Bachelor', 'Arts & Design', 'BA(Hons) Graphic Design', 'http://www.aas.gr/el/bahons-graphic-design-3/');
        Scholio::portalStudy($school23, 'Προπτυχιακές Σπουδές-Bachelor', 'Arts & Design', 'BA(Hons) Interior Design', 'http://www.aas.gr/el/bahons-interior-design-3/');
        Scholio::portalStudy($school23, 'Προπτυχιακές Σπουδές-Bachelor', 'Arts & Design', 'BA(Hons) Product Design', 'http://www.aas.gr/el/bahons-interior-design-3/');
        Scholio::portalStudy($school23, 'Μεταπτυχιακές Σπουδές-Master', 'Arts & Design', 'MA DESIGN Specialising in Advertising', 'http://www.aas.gr/el/ma-design-specialising-in-advertising/');
        Scholio::portalStudy($school23, 'Μεταπτυχιακές Σπουδές-Master', 'Arts & Design', 'MA DESIGN Specialising in Animation', 'http://www.aas.gr/el/ma-design-specialising-in-animation/');
        Scholio::portalStudy($school23, 'Μεταπτυχιακές Σπουδές-Master', 'Arts & Design', 'MA DESIGN Specialising in Digital Graphics', 'http://www.aas.gr/el/ma-design-specialising-in-digital-graphi/');
        Scholio::portalStudy($school23, 'Μεταπτυχιακές Σπουδές-Master', 'Arts & Design', 'MA DESIGN specialising in Fashion Promotion', 'http://www.aas.gr/el/ma-design-specialising-fashion-promotion-2/');
        Scholio::portalStudy($school23, 'Μεταπτυχιακές Σπουδές-Master', 'Arts & Design', 'MA DESIGN Specialising in Fashion Design', 'http://www.aas.gr/el/ma-design-specialising-in-fashion-design-2/');
        Scholio::portalStudy($school23, 'Μεταπτυχιακές Σπουδές-Master', 'Arts & Design', 'MA DESIGN Specialising in Games Design', 'http://www.aas.gr/el/ma-design-specialising-in-games-design/');
        Scholio::portalStudy($school23, 'Μεταπτυχιακές Σπουδές-Master', 'Arts & Design', 'MA DESIGN Specialising in Product Design', 'http://www.aas.gr/el/ma-design-specializing-in-product-design/');
        Scholio::portalStudy($school23, 'Μεταπτυχιακές Σπουδές-Master', 'Arts & Design', 'MA DESIGN Specialising in Photography', 'http://www.aas.gr/el/ma-design-specializing-in-photography/');
        Scholio::portalStudy($school23, 'Μεταπτυχιακές Σπουδές-Master', 'Arts & Design', 'MA GRAPHIC DESIGN', 'http://www.aas.gr/el/ma-graphic-design/');
        Scholio::portalStudy($school23, 'Μεταπτυχιακές Σπουδές-Master', 'Arts & Design', 'MA INTERIOR DESIGN', 'http://www.aas.gr/el/ma-interior-design/');

        Scholio::portalSocial($school23, 'facebook', 'https://www.facebook.com/AAS.College/');
        // Scholio::portalSocial($school23, 'instagram', '');
        Scholio::portalSocial($school23, 'twitter', 'https://twitter.com/aas_college');
        Scholio::portalSocial($school23, 'youtube', 'https://youtube.com/aascollege');
        // Scholio::portalSocial($school23, 'linkedin', '');
        Scholio::portalSocial($school23, 'google', 'https://plus.google.com/106801520123648808536/posts');

        /*===============   24 IHU THESSALONIKI ================*/
        $school24 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'AAS College ', 'email' => 'infoseba@ihu.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'ihu'])->id,
            'address' => '14th km Thessaloniki, Nea Moudania',
            'city' => 'θεσσαλονίκη',
            'phone' => 2310807520,
            'type_id' => 1,
            'website' => 'www.ihu.edu.gr',
            'approved' => 1,
            'lat' => '40.537330',
            'lng' => '23.008409',
            'about' => 'This is the tenth year of the International Hellenic University’s existence. During this period, the IHU has created nineteen postgraduate programmes, fresh, dynamic and forward-looking.
             The programmes are taught in an academic environment where the knowledge is researched, the knowledge is taught, the knowledge is disseminated within and outside Greece.
             Our central target from the first instant has been academic excellence. How to achieve this was and is the major task and challenge as it involves the human element.
             How to recruit those with the greatest potential; to motivate them; to inspire them. Not only the academics but the administrators and professionals, who should work with dedication and harmony towards excellence, each in his or her own capacity.
             I believe we have achieved a lot in this respect.',
            'background' => $background,
        ]);
        new Portal($school24, 5, 'college');

        Scholio::portalSocial($school24, 'facebook', 'http://www.facebook.com/pages/International-Hellenic-University%CE%94%CE%B9%CE%B5%CE%B8%CE%BD%CE%AD%CF%82-%CE%A0%CE%B1%CE%BD%CE%B5%CF%80%CE%B9%CF%83%CF%84%CE%AE%CE%BC%CE%B9%CE%BF-%CF%84%CE%B7%CF%82-%CE%95%CE%BB%CE%BB%CE%AC%CE%B4%CE%BF%CF%82/348423608514448');
        Scholio::portalSocial($school24, 'instagram', 'http://instagram.com/ihu_scitech');
        Scholio::portalSocial($school24, 'twitter', 'http://twitter.com/IHU_SciTech');
        Scholio::portalSocial($school24, 'youtube', 'http://www.youtube.com/IHUweb');
        Scholio::portalSocial($school24, 'linkedin', 'http://www.linkedin.com/company/international-hellenic-university?trk=top_nav_home');

        /*===============   25 BCA Athens ================*/
        $school25 = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Business College of Athens', 'email' => 'info@bca.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'bca'])->id,
            'address' => 'Δημητρέσσα 4',
            'city' => 'Αθήνα',
            'phone' => 2107253783,
            'type_id' => 1,
            'website' => 'http://www.bca.edu.gr/',
            'approved' => 1,
            'about' => 'Το BCA, το οποίο ιδρύθηκε το 1971, ήταν το πρώτο κολλέγιο στην Ελλάδα το οποίο κάλυψε το εκπαιδευτικό κενό που υπήρχε εκείνα τα χρόνια σε αναπτυσσόμενους τομείς με μεγάλη ζήτηση όπως οικονομία και διοίκηση, τουριστικές σπουδές και μηχανογράφηση. Ταυτόχρονα, το BCA ήταν το πρώτο εκπαιδευτικό ίδρυμα με παραρτήματα σε Ελβετία και Ιταλία, ο πρώτος εκπαιδευτικός οργανισμός που εισήγαγε σπουδές άρρηκτα συνδεδεμένες με την αγορά εργασίας με καθηγητές –  επαγγελματίες του χώρου.
            Κινητήριος δύναμη και όραμα από την ίδρυση του BCA έως και σήμερα είναι να προσφέρουμε και να διδάσκουμε την ποιότητα σε όλες τις διαστάσεις της. Το σύγχρονο επαγγελματικό και οικονομικό περιβάλλον μιας παγκοσμιοποιημένης αγοράς επιτάσσουν την εμμονή στην ποιότητα, την άμεση προσαρμογή στις ραγδαία μεταβαλλόμενες συνθήκες και ευκαιρίες καθώς και την ανάγκη ύπαρξης στρατηγικής μακροπρόθεσμου ορίζοντα.
            Προσφέρουμε σύγχρονα προγράμματα και διδακτική εμπειρία που ανταποκρίνονται στην αγορά εργασίας, διαθέτουμε κτιριακές υποδομές υψηλής αισθητικής και τεχνολογίας και παρέχουμε εκπαίδευση από καταξιωμένους επαγγελματίες ακαδημαϊκούς και διδάκτορες των διαφόρων ειδικοτήτων. Στόχος μας, σε βάθος χρόνου, είναι η εδραίωσή μας ως κορυφαίο ίδρυμα προπτυχιακών και μεταπτυχιακών σπουδών στην ταχύτατα αναπτυσσόμενη περιοχή των Βαλκανίων και της Νοτιοανατολικής Ευρώπης, ως ίδρυμα που θα παρέχει σπουδές άρρηκτα συνδεδεμένες με την αγορά εργασίας.
            Το BCA στεγάζεται σε δύο καλαίσθητα κτίρια στην Αθήνα και τη Γλυφάδα.
            Τα κτίρια είναι ειδικά μελετημένα και εξοπλισμένα ώστε να ικανοποιούν απόλυτα και τις πιο αυστηρές εκπαιδευτικές απαιτήσεις. Διαθέτουν βιβλιοθήκη, σύγχρονα εργαστήρια πληροφορικής καθώς και κάθε είδους οπτικοακουστικά μέσα, σύμφωνα με τις νέες αντιλήψεις εκπαίδευσης. Οι άνετοι χώροι, ο εργονομικός εξοπλισμός, το σύστημα κλιματισμού και κάθε άλλο απαραίτητο μέσο, δημιουργούν ένα ιδανικό εκπαιδευτικό περιβάλλον.
            Κάθε κτίριο διαθέτει πλήρη ακαδημαϊκή και διοικητική υποστήριξη, απόλυτη αυτονομία, αλλά παράλληλα και διασύνδεση μέσω δικτύου με τα άλλα κτίρια.
            Η συνολική επιφάνεια των εκπαιδευτικών εγκαταστάσεων του BCA είναι 6.000 τ.μ.',
            'background' => $background,
        ]);

        new Portal($school25, 5, 'college');

        Scholio::portalStudy($school25, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc (Hons) Accounting and Finance', 'http://www.bca.edu.gr/course/1168/bsc-hons-accounting-and-finance');
        Scholio::portalStudy($school25, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc (Hons) Business Management', 'http://www.bca.edu.gr/course/961/bsc-hons-business-management');
        Scholio::portalStudy($school25, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc (Hons) Business Management [Entrepreneurship and Innovation]', 'http://www.bca.edu.gr/course/1164/bsc-hons-business-management-entrepreneurship-and-innovation');
        Scholio::portalStudy($school25, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc (Hons) Business Management [Marketing]', 'http://www.bca.edu.gr/course/2017/bsc-hons-business-management-marketing');
        Scholio::portalStudy($school25, 'Προπτυχιακές Σπουδές-Bachelor', 'Ναυτιλιακά - Nautical Education', 'BSc (Hons) Shipping', 'http://www.bca.edu.gr/course/1165/bsc-hons-shipping');
        Scholio::portalStudy($school25, 'Προπτυχιακές Σπουδές-Bachelor', 'Ναυτιλιακά - Nautical Education', 'BSc (Hons) Maritime Business', 'http://www.bca.edu.gr/course/1872/bsc-hons-maritime-business');
        Scholio::portalStudy($school25, 'Προπτυχιακές Σπουδές-Bachelor', 'Τουρισμός - Tourism', 'BA (Hons) Hospitality and Tourism Management', 'http://www.bca.edu.gr/course/1167/ba-hons-hospitality-and-tourism-management');
        Scholio::portalStudy($school25, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc Computer Science', 'http://www.athtech.gr/studies/bachelors/bsc-computer-science/');
        Scholio::portalStudy($school25, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc Computer Science (Business Informatics)', 'http://www.athtech.gr/courses/bachelors/business-informatics/');
        Scholio::portalStudy($school25, 'Προπτυχιακές Σπουδές-Bachelor', 'Πληροφορική - Informatics & Technology', 'BSc Computer Science (Internet Computing)', 'http://www.athtech.gr/courses/bachelors/internet-computing/');
        Scholio::portalStudy($school25, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Master in Business Administration (MBA)', 'http://www.bca.edu.gr/course/1171/mba');
        Scholio::portalStudy($school25, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA for Executives', 'http://www.bca.edu.gr/course/1864/mba-executives');
        Scholio::portalStudy($school25, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MSc Accounting and Finance', 'http://www.bca.edu.gr/course/1172/msc-accounting-and-finance');
        Scholio::portalStudy($school25, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MSc Digital Marketing', 'http://www.bca.edu.gr/course/1174/msc-digital-marketing');
        Scholio::portalStudy($school25, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MSc Business Psychology', 'http://www.bca.edu.gr/course/1378/msc-business-psychology');
        Scholio::portalStudy($school25, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MSc Consumer Psychology', 'http://www.bca.edu.gr/course/1170/msc-consumer-psychology');
        Scholio::portalStudy($school25, 'Μεταπτυχιακές Σπουδές-Master', 'Ναυτιλιακά - Nautical Education', 'MSc Shipping Business', 'http://www.bca.edu.gr/course/1183/msc-shipping-business');
        Scholio::portalStudy($school25, 'Μεταπτυχιακές Σπουδές-Master', 'Ναυτιλιακά - Nautical Education', 'LLM Maritime Law', 'http://www.bca.edu.gr/course/2407/llm-maritime-law');
        Scholio::portalStudy($school25, 'Μεταπτυχιακές Σπουδές-Master', 'Ναυτιλιακά - Nautical Education', 'MSc Shipping - e-Learning', 'http://shipping.education/');
        Scholio::portalStudy($school25, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'MSc in Management of Business, Innovation and Technology (MBIT)', 'http://www.athtech.gr/studies/masters/management-of-business-innovation-and-technology/');
        Scholio::portalStudy($school25, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'MSc in Advanced Software Engineering – Security', 'http://www.athtech.gr/courses/masters/advanced-software-engineering/information-security/');
        Scholio::portalStudy($school25, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'MSc in Advanced Software Engineering – Telecommunications', 'http://www.athtech.gr/studies/masters/telecommunications/');
        Scholio::portalStudy($school25, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'MSc in Advanced Software Engineering – Web and Mobile Applications', 'http://www.athtech.gr/courses/masters/advanced-software-engineering/web-mobile-applications/');
        Scholio::portalStudy($school25, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'MSc in Advanced Software Engineering – Data Analytics', 'http://www.athtech.gr/studies/masters/data-analytics/');

        Scholio::portalSocial($school25, 'facebook', 'https://www.facebook.com/bca.business.college?ref=hl');
        Scholio::portalSocial($school25, 'instagram', 'http://instagram.com/bcacollege#');
        Scholio::portalSocial($school25, 'twitter', 'https://twitter.com/BCA_COLLEGE');
        Scholio::portalSocial($school25, 'youtube', 'https://www.youtube.com/user/BCACOLLEGEOFFICIAL');
    }

    /*===============   26      ================*/

}
