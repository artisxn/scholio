<?php

use App\Models\School;
use App\Scholio\Scholio;
use Illuminate\Database\Seeder;
use Portal\Portal;

class SeedA3 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $background = Portal::createImages('/upload/school/univ.png')->id;

        /*===============  Καλαμαρί ================*/
        $kalam = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Καλαμαρί', 'email' => 'info@kalamari.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'kalamari'])->id,
            'address' => 'Λεωφ. Γεωργικής Σχολής 44, Πυλαία',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310472115,
            'type_id' => 13,
            'website' => 'www.kalamari.gr',
            'approved' => 1,
            'about' => '<div>
                    <p>Το σχολείο δεν είναι ένας περιχαρακωμένος χώρος, όπου οι νέοι ανατρέφονται με τη μορφή πειραματόζωων. Πρέπει να αποτελεί συνέχεια της ζωής και της περιρρέουσας κοινωνίας και να βρίσκεται σε μια διαρκή σχέση αλληλοεπικοινωνίας μαζί τους.</p>
                    <p>Το σχολείο πρέπει να είναι ενταγμένο μέσα στο δικό τους πλαίσιο και να τις υπηρετεί διαμορφώνοντας ανθρώπους οι οποίοι μπορούν να υποδεικνύουν αλλαγές και υπερβάσεις των κατεστημένων, όταν οι συνθήκες και οι ανάγκες το απαιτούν. Όλα αυτά βέβαια σε συνδυασμό με μια ανατροφή στην οποία κυριαρχεί η ελευθερία και πλεονάζει η αγάπη για το μαθητή.</p>
                    <p>Ένα τέτοιο σχολικό και εκπαιδευτικό περιβάλλον είναι ιδανικό για να ξυπνήσουν οι δυνάμεις και οι δυνατότητες του μαθητή, ώστε να μπορέσει να δομήσει μέσα από τη σύγκριση, την έκφραση διαφορετικών γνωμών και προσεγγίσεων των θεμάτων, την ορθή σκέψη. Διαφορετικά παραμένουμε στην απόλυτη και αδιαμφισβήτητη αλήθεια του "από καθέδρας λόγου", που αντιμετωπίζει τους μαθητές σφαιρικά ανίδεους και καλείται να τους πλάσει όπως ο γλύπτης το άψυχο υλικό της τέχνης του.</p>
                    <p>Η σύγχρονη μόρφωση δεν μπορεί σε καμιά περίπτωση να αφίσταται της σύγχρονης πραγματικότητας. Μπορεί βέβαια να ανακαλεί την παράδοση καθώς και στοιχεία του παρελθόντος, αλλά το κέντρο βάρους πέφτει πάντοτε στην υπάρχουσα ζωντανή κοινωνία. Η παιδαγωγική θεωρία επιδιώκουμε να πηγάζει αβίαστα από την πράξη, τη ζωή και την ατομική παρατήρηση. Είναι αυτή που ετοιμάζει τα παιδιά για την ατομική ενέργεια και την πρωτοβουλία, μορφώνει καλύτερα τον εαυτό τους και ανυψώνει το σύνολο!</p>
                    <p>Τρία είναι λοιπόν τα στοιχεία προς τα οποία συγκλίνουν οι στόχοι των εκπαιδευτικών βαθμίδων της Σχολής μας:</p>
                    <ul>
                    <li>ελληνοχριστιανικό πνεύμα</li>
                    <li>ευρωπαϊκή διάσταση</li>
                    <li>σχολείο για το αύριο<br />πιο απλά...</li>
                    </ul>
                    <p><strong>Παράδοση και πρόοδος στην Εκπαίδευση</strong></p>
                    <p>Με γνώμονα αυτές τις γενικές αρχές οι επιμέρους στόχοι στις τρεις βαθμίδες της εκπαίδευσης συνοψίζονται στα εξής:</p>
                    <p><strong>Γυμνάσιο:</strong></p>
                    <p>Ολοκλήρωση της αρχής για υποχρεωτική εκπαίδευση, αλλά, κυρίως, προετοιμασία των μαθητών για το Λύκειο. Στο επίπεδο αυτό υποστηρίζεται κατάλληλα η ωριμάζουσα αφηρημένη σκέψη των παιδιών με τέτοια μεθοδικότητα, ώστε η γνώση να προκύπτει από την εξοικείωση του μαθητή στην εύρεση τρόπων μάθησης μέσω της κατευθυνόμενης αυτενέργειας.</p>
                    <p>Το Γυμνάσιο οφείλει να παραλάβει παιδιά και να παραδώσει ώριμους εφήβους. Έτσι προσπαθούμε να γνωρίσουμε τον κάθε έφηβο με ποικίλες μεθόδους (συζήτηση, διακριτική παρακολούθηση κλπ) και να διαμορφώνουμε πλήρη εικόνα για κάθε μαθητή, ώστε να παρέχουμε στους κηδεμόνες τεκμηριωμένη εικόνα των παιδιών τους.</p>
                    <p><strong>Λύκειο:</strong></p>
                    <p>Για τα παιδιά το Λύκειο είναι η δεύτερη βαθμίδα της δευτεροβάθμιας εκπαίδευσης και συμπίπτει για πολλά από αυτά με την κορύφωση και τη λήξη της εφηβείας.</p>
                    <p><strong>Χαρακτηριστικά του Λυκείου:</strong></p>
                    <p>Εκτιμούμε ότι τα κύρια χαρακτηριστικά της βαθμίδας αυτής σήμερα είναι:</p>
                    <ul>
                    <li>Η ποιοτική και ποσοτική διαφοροποίηση των γνωστικών αντικειμένων σε σχέση με την προηγούμενη βαθμίδα</li>
                    <li>Η έναρξη εντονότερων προβληματισμών</li>
                    <li>Η προσπάθεια προσανατολισμού και αποσαφήνιση των επιλογών ώστε να διευκολυνθεί η μεταλυκειακή πορεία.</li>
                    <li>Το εξαιρετικά φορτισμένο κλίμα που διαμορφώνεται από την πίεση της εξεταστικής διαδικασίας.</li>
                    <li>Η διαπίστωση της δυσκολίας να συνυπάρξουν στο 24ωρο των παιδιών, η προετοιμασία, η μελέτη, η "εξωσχολική βοήθεια", η ξεκούραση, η ψυχαγωγία, η ενημέρωση...</li>
                    </ul>
                    </div>
                    <div class="sp-social-share clearfix"> </div>',
            'background' => $background,
        ]);

        new Portal($kalam, 5, 'school');

        Scholio::portalStudy($kalam, 'Ιδιωτικό Σχολείο', 'Γυμνάσιο', 'Ά Γυμνασίου');
        Scholio::portalStudy($kalam, 'Ιδιωτικό Σχολείο', 'Γυμνάσιο', '΄Β Γυμνασίου');
        Scholio::portalStudy($kalam, 'Ιδιωτικό Σχολείο', 'Γυμνάσιο', '΄Γ Γυμνασίου');
        Scholio::portalStudy($kalam, 'Ιδιωτικό Σχολείο', 'Λύκειο', 'Ά Λυκείου');
        Scholio::portalStudy($kalam, 'Ιδιωτικό Σχολείο', 'Λύκειο', '΄Β Λυκείου');
        Scholio::portalStudy($kalam, 'Ιδιωτικό Σχολείο', 'Λύκειο', '΄Γ Λυκείου');

        Scholio::portalSocial($kalam, 'facebook', 'https://www.facebook.com/pages/%CE%95%CE%BB%CE%BB%CE%B7%CE%BD%CE%BF%CE%B3%CE%B1%CE%BB%CE%BB%CE%B9%CE%BA%CE%AE-%CE%A3%CF%87%CE%BF%CE%BB%CE%AE-%CE%9A%CE%B1%CE%BB%CE%B1%CE%BC%CE%B1%CF%81%CE%AF/153128398062687');
        Scholio::portalSocial($kalam, 'youtube', 'https://www.youtube.com/channel/UC-hZdASj0OHVn8NJsivcLwQ');
        Scholio::portalSocial($kalam, 'google', 'https://www.google.gr/webhp?source=search_app&gws_rd=cr,ssl#bav=on.2,or.r_qf.&ei=7z8SUp_iNsexhAfGjoCgDA&fp=3025ea08a36d24bb&psj=1&q=%CE%95%CE%BB%CE%BB%CE%B7%CE%BD%CE%BF%CE%B3%CE%B1%CE%BB%CE%BB%CE%B9%CE%BA%CE%AE+%CE%A3%CF%87%CE%BF%CE%BB%CE%AE+%CE%9A%CE%B1%CE%BB%CE%B1%CE%BC%CE%B1%CF%81%CE%AF&sa=X&spell=1&ved=0CCcQBSgA');

        // $doukas = factory(App\Models\School::class)->create([
        //     'user_id' => factory(App\User::class)->create(['name' => 'Εκπαιδευτήρια Δούκα', 'email' => 'info@doukas.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'doukas'])->id,
        //     'address' => 'Μεσογείων 151, Μαρούσι',
        //     'city' => 'Αθήνα',
        //     'phone' => 2106186000,
        //     'type_id' => 13,
        //     'website' => 'http://www.doukas.gr/',
        //     'approved' => 1,
        //     'about' => '> Εκπαιδεύουμε παγκόσμιους πολίτες με Ελληνική ταυτότητα & ικανότητες 21ου αιώνα
        //     Πιστεύουμε στην ισορροπία ανάμεσα στην Παράδοση και την Πρόοδο. Σκοπός μας είναι να βελτιώνουμε διαρκώς την ποιότητα των υπηρεσιών μας και να ξεπερνάμε τις ανάγκες και τις προσδοκίες των μαθητών μας, των γονέων τους καθώς και της ευρύτερης κοινωνίας.
        //     Στόχος μας είναι να εκπαιδεύουμε Παγκόσμιους Πολίτες με Ελληνική Ταυτότητα, εφοδιάζοντάς τους με Ικανότητες του 21ου αιώνα, δείχνοντας ταυτόχρονα σεβασμό στη μοναδικότητα του κάθε παιδιού.',
        //     'background' => $background,
        // ]);

        // new Portal($doukas, 5, 'school');

        // Scholio::portalStudy($doukas, 'Δημοτικό', 'Γενική Παιδεία', 'Ά Δημοτικού');
        // Scholio::portalStudy($doukas, 'Δημοτικό', 'Γενική Παιδεία', '΄Β Δημοτικού');
        // Scholio::portalStudy($doukas, 'Δημοτικό', 'Γενική Παιδεία', '΄Γ Δημοτικού');
        // Scholio::portalStudy($doukas, 'Δημοτικό', 'Γενική Παιδεία', '΄Δ Δημοτικού');
        // Scholio::portalStudy($doukas, 'Δημοτικό', 'Γενική Παιδεία', '΄Έ Δημοτικού');
        // Scholio::portalStudy($doukas, 'Δημοτικό', 'Γενική Παιδεία', 'ΣΤ Δημοτικού');

        // Scholio::portalStudy($doukas, 'Γυμνάσιο', 'Γενική Παιδεία', 'Ά Γυμνασίου');
        // Scholio::portalStudy($doukas, 'Γυμνάσιο', 'Γενική Παιδεία', '΄Β Γυμνασίου');
        // Scholio::portalStudy($doukas, 'Γυμνάσιο', 'Γενική Παιδεία', '΄Γ Γυμνασίου');
        // Scholio::portalStudy($doukas, 'Λύκειο', 'Γενική Παιδεία', 'Ά Λυκείου');
        // Scholio::portalStudy($doukas, 'Λύκειο', 'Γενική Παιδεία', '΄Β Λυκείου');
        // Scholio::portalStudy($doukas, 'Λύκειο', 'Γενική Παιδεία', '΄Γ Λυκείου');

        // Scholio::portalSocial($doukas, 'facebook', 'https://www.facebook.com/DoukaSchool');
        // Scholio::portalSocial($doukas, 'instagram', 'https://instagram.com/doukas_school/');
        // Scholio::portalSocial($doukas, 'twitter', 'https://twitter.com/Doukas_School');

        // $protypa = factory(App\Models\School::class)->create([
        //     'user_id' => factory(App\User::class)->create(['name' => 'Πρότυπα Εκπαιδευτήρια Θεσσαλονίκης', 'email' => 'info@protypa.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'protypa'])->id,
        //     'address' => 'Ελαιώνες Πυλαίας Τ.Κ. 555 36',
        //     'city' => 'Θεσσαλονίκη',
        //     'phone' => 2310300002,
        //     'type_id' => 13,
        //     'website' => 'https://www.protypa.gr/frontend/index.php',
        //     'approved' => 1,
        //     'about' => 'Τα Πρότυπα Εκπαιδευτήρια Θεσσαλονίκης με μια δημιουργική πορεία 40 ετών είναι μια πλήρης μονάδα. Ειδικεύεται στην πρωτοβάθμια εκπαίδευση στην οποία και επικεντρώνεται γνωρίζοντας τη δομική σημασία στη μετέπειτα πορεία των μαθητών. Ως αναγνώριση και επιβεβαίωση του υψηλού επιπέδου σπουδών μας, επισημαίνουμε ότι οι απόφοιτοι των Εκπαιδευτηρίων μας κατέχουν τις πρώτες θέσεις στις εισαγωγικές εξετάσεις κολεγίων, καθώς και τις υψηλότερες βαθμολογίες στα ιδιωτικά και δημόσια Γυμνάσια και Λύκεια της πόλης μας.',
        //     'background' => $background,
        // ]);

        // new Portal($protypa, 5, 'school');

        // Scholio::portalStudy($protypa, 'Νηπιαγωγείο', 'Νήπια', 'Νήπια');
        // Scholio::portalStudy($protypa, 'Νηπιαγωγείο', 'Προνήπια', 'Προνήπια');

        // Scholio::portalStudy($protypa, 'Δημοτικό', 'Γενική Παιδεία', 'Ά Δημοτικού');
        // Scholio::portalStudy($protypa, 'Δημοτικό', 'Γενική Παιδεία', '΄Β Δημοτικού');
        // Scholio::portalStudy($protypa, 'Δημοτικό', 'Γενική Παιδεία', '΄Γ Δημοτικού');
        // Scholio::portalStudy($protypa, 'Δημοτικό', 'Γενική Παιδεία', '΄Δ Δημοτικού');
        // Scholio::portalStudy($protypa, 'Δημοτικό', 'Γενική Παιδεία', '΄Έ Δημοτικού');
        // Scholio::portalStudy($protypa, 'Δημοτικό', 'Γενική Παιδεία', 'ΣΤ Δημοτικού');

        // Scholio::portalStudy($protypa, 'Γυμνάσιο', 'Γενική Παιδεία', 'Ά Γυμνασίου');
        // Scholio::portalStudy($protypa, 'Γυμνάσιο', 'Γενική Παιδεία', '΄Β Γυμνασίου');
        // Scholio::portalStudy($protypa, 'Γυμνάσιο', 'Γενική Παιδεία', '΄Γ Γυμνασίου');
        // Scholio::portalStudy($protypa, 'Λύκειο', 'Γενική Παιδεία', 'Ά Λυκείου');
        // Scholio::portalStudy($protypa, 'Λύκειο', 'Γενική Παιδεία', '΄Β Λυκείου');
        // Scholio::portalStudy($protypa, 'Λύκειο', 'Γενική Παιδεία', '΄Γ Λυκείου');

        // Scholio::portalSocial($protypa, 'facebook', 'http://www.facebook.com/pages/Thessaloniki-Greece/Protypa-Ekpaideuteria-Thessalonikes/170518156295078');
        // Scholio::portalSocial($protypa, 'google', 'https://plus.google.com/117536093537987040966/');
        // Scholio::portalSocial($protypa, 'twitter', 'https://twitter.com/protypa_gr');
        // Scholio::portalSocial($protypa, 'youtube', 'http://www.youtube.com/user/protypa');

        // $mandoulides = factory(App\Models\School::class)->create([
        //     'user_id' => factory(App\User::class)->create(['name' => 'Εκπαιδευτήρια Μαντουλίδη', 'email' => 'primary@mandoulides.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'mandoulides'])->id,
        //     'address' => '6ο χλμ. Χαριλάου - Θέρμης',
        //     'city' => 'Θέρμη,Θεσσαλονίκη',
        //     'phone' => 2310473813,
        //     'type_id' => 13,
        //     'website' => 'https://mandoulides.edu.gr/',
        //     'approved' => 1,
        //     'about' => 'Τα Εκπαιδευτήρια αποτελούν σήμερα μια σύγχρονη και δυναμική κοινότητα παιδείας, πολιτισμού και αθλητισμού, αναγνωρισμένη σε όλη την Ελλάδα.

        //     Τα Εκπαιδευτήρια περιλαμβάνουν:
        //     Παιδικό Σταθμό, Νηπιαγωγείο, Δημοτικό, Γυμνάσιο, Λύκειο, κέντρο συμβουλευτικής και τμήματα προετοιμασίας για σπουδές στο εξωτερικό.',
        //     'background' => $background,
        // ]);

        // new Portal($mandoulides, 5, 'school');
        // Scholio::portalStudy($mandoulides, 'Παιδικός Σταθμός', 'Παιδικός Σταθμός', 'Παιδικός Σταθμός');
        // Scholio::portalStudy($mandoulides, 'Νηπιαγωγείο', 'Νήπια', 'Νήπια');
        // Scholio::portalStudy($mandoulides, 'Νηπιαγωγείο', 'Προνήπια', 'Προνήπια');

        // Scholio::portalStudy($mandoulides, 'Δημοτικό', 'Γενική Παιδεία', 'Ά Δημοτικού');
        // Scholio::portalStudy($mandoulides, 'Δημοτικό', 'Γενική Παιδεία', '΄Β Δημοτικού');
        // Scholio::portalStudy($mandoulides, 'Δημοτικό', 'Γενική Παιδεία', '΄Γ Δημοτικού');
        // Scholio::portalStudy($mandoulides, 'Δημοτικό', 'Γενική Παιδεία', '΄Δ Δημοτικού');
        // Scholio::portalStudy($mandoulides, 'Δημοτικό', 'Γενική Παιδεία', '΄Έ Δημοτικού');
        // Scholio::portalStudy($mandoulides, 'Δημοτικό', 'Γενική Παιδεία', 'ΣΤ Δημοτικού');

        // Scholio::portalStudy($mandoulides, 'Γυμνάσιο', 'Γενική Παιδεία', 'Ά Γυμνασίου');
        // Scholio::portalStudy($mandoulides, 'Γυμνάσιο', 'Γενική Παιδεία', '΄Β Γυμνασίου');
        // Scholio::portalStudy($mandoulides, 'Γυμνάσιο', 'Γενική Παιδεία', '΄Γ Γυμνασίου');
        // Scholio::portalStudy($mandoulides, 'Λύκειο', 'Γενική Παιδεία', 'Ά Λυκείου');
        // Scholio::portalStudy($mandoulides, 'Λύκειο', 'Γενική Παιδεία', '΄Β Λυκείου');
        // Scholio::portalStudy($mandoulides, 'Λύκειο', 'Γενική Παιδεία', '΄Γ Λυκείου');

        // Scholio::portalSocial($mandoulides, 'facebook', 'https://www.facebook.com/mandoulides');
        // Scholio::portalSocial($mandoulides, 'instagram', 'https://www.instagram.com/mandoulides_schools/');
        // Scholio::portalSocial($mandoulides, 'twitter', 'https://twitter.com/Mandoulides');
        // Scholio::portalSocial($mandoulides, 'youtube', 'http://www.youtube.com/user/mandoulidesschools');
        // Scholio::portalSocial($mandoulides, 'linkedin', 'https://www.linkedin.com/company/mandoulides');

        // $anatolia = factory(App\Models\School::class)->create([
        //     'user_id' => factory(App\User::class)->create(['name' => 'Ανατόλια ', 'email' => 'acagyreg@anatolia.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'anatolia'])->id,
        //     'address' => 'Τζων Κέννεντυ 50, Πυλαία',
        //     'city' => 'Θεσσαλονίκη',
        //     'phone' => 2310398357,
        //     'type_id' => 13,
        //     'website' => 'http://www.anatolia.edu.gr',
        //     'approved' => 1,
        //     'about' => 'Στόχος μας είναι να εμφυσήσουμε στους μαθητές μας τη φιλοδοξία και να τους δώσουμε όλα τα απαραίτητα εφόδια να γίνουν πολίτες του κόσμου, υπεύθυνοι και με αρχές, αλλά και κριτικά σκεπτόμενα άτομα με ανοιχτό πνεύμα που αναζητούν με ενεργό τρόπο τη γνώση σε όλη τη διάρκεια της ζωής τους.
        //      Όραμά μας είναι να εδραιώσουμε το Ανατόλια ως την πρώτη επιλογή για κάθε ικανό μαθητή και μαθήτρια ανεξαρτήτως οικονομικής δυνατότητας, ως ένα σχολείο-πρότυπο στον τομέα της διαρκούς ανάπτυξης και εφαρμογής νέων εκπαιδευτικών πρακτικών, που προσφέρει πολύτιμα εφόδια και αποτελεί καθοριστικό παράγοντα για τη μελλοντική τους επιτυχία στην ακαδημαϊκή, επαγγελματική και προσωπική τους ζωή. ',
        //     'background' => $background,
        // ]);

        // new Portal($anatolia, 5, 'school');

        // Scholio::portalStudy($anatolia, 'Δημοτικό', 'Γενική Παιδεία', 'Ά Δημοτικού');
        // Scholio::portalStudy($anatolia, 'Δημοτικό', 'Γενική Παιδεία', '΄Β Δημοτικού');
        // Scholio::portalStudy($anatolia, 'Δημοτικό', 'Γενική Παιδεία', '΄Γ Δημοτικού');
        // Scholio::portalStudy($anatolia, 'Δημοτικό', 'Γενική Παιδεία', '΄Δ Δημοτικού');
        // Scholio::portalStudy($anatolia, 'Δημοτικό', 'Γενική Παιδεία', '΄Έ Δημοτικού');
        // Scholio::portalStudy($anatolia, 'Δημοτικό', 'Γενική Παιδεία', 'ΣΤ Δημοτικού');

        // Scholio::portalStudy($anatolia, 'Γυμνάσιο', 'Γενική Παιδεία', 'Ά Γυμνασίου');
        // Scholio::portalStudy($anatolia, 'Γυμνάσιο', 'Γενική Παιδεία', '΄Β Γυμνασίου');
        // Scholio::portalStudy($anatolia, 'Γυμνάσιο', 'Γενική Παιδεία', '΄Γ Γυμνασίου');
        // Scholio::portalStudy($anatolia, 'Λύκειο', 'Γενική Παιδεία', 'Ά Λυκείου');
        // Scholio::portalStudy($anatolia, 'Λύκειο', 'Γενική Παιδεία', '΄Β Λυκείου');
        // Scholio::portalStudy($anatolia, 'Λύκειο', 'Γενική Παιδεία', '΄Γ Λυκείου');

        // Scholio::portalSocial($anatolia, 'facebook', 'http://www.facebook.com/search/?q=anatolia#/pages/Thessaloniki-Greece/Anatolia-College/300380195330?ref=ss');
        // Scholio::portalSocial($anatolia, 'twitter', 'https://twitter.com/Anatolia1886');
        // Scholio::portalSocial($anatolia, 'youtube', 'http://www.youtube.com/anatoliacollege');

        // $helcol = factory(App\Models\School::class)->create([
        //     'user_id' => factory(App\User::class)->create(['name' => 'Ελληνικό Κολλέγιο Θεσσαλονίκης', 'email' => 'hel-col@otenet.gr
        //     ', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'helcol'])->id,
        //     'address' => 'Δροσιά Θέρμης, Θέρμη',
        //     'city' => 'Θεσσαλονίκη',
        //     'phone' => 2310473112,
        //     'type_id' => 13,
        //     'website' => 'http://www.hellenic-college.gr/index.php',
        //     'approved' => 1,
        //     'about' => 'Σήμερα, το Ελληνικό Κολλέγιο Θεσσαλονίκης, με τη γόνιμη πείρα των 56 ετών από την ίδρυσή του, έχει επιδείξει ένα σύγχρονο και πρωτοποριακό παιδαγωγικό έργο. Το προσεκτικά επιλεγμένο και άριστα καταρτισμένο διδακτικό προσωπικό μας, χρησιμοποιώντας τα σύγχρονα εποπτικά μέσα και τις σύγχρονες μεθόδους παιδαγωγικής διδασκαλίας, σέβεται τα οράματα και την προσωπικότητα του κάθε μαθητή, παρέχοντάς του έτσι, όχι στείρες γνώσεις, αλλά ουσιαστική παιδεία. Έτσι, στο Ελληνικό Κολλέγιο Θεσσαλονίκης, κάθε μαθητής έχει τη δυνατότητα να αξιοποιήσει τις ικανότητές του, να αυτενεργήσει, να εμβαθύνει και να εμπεδώσει τη γνώση, πειθαρχώντας συνειδητά στους κανόνες του σχολείου.
        //     Το εκπαιδευτικό πρόγραμμα που εφαρμόζουμε στοχεύει στην πνευματική εγρήγορση, την καλλιέργεια και την ολόπλευρη ανάπτυξη της προσωπικότητας του μαθητή, προκειμένου να αναδειχτεί νικητής στο στίβο της ζωής.
        //     Ο πρωταρχικό στόχος του Ελληνικού Κολλεγίου Θεσσαλονίκης είναι η παροχή υψηλού επιπέδου εκπαίδευσης, που εξασφαλίζει ουσιαστική παιδεία και επιτυχημένη μεταλυκειακή σταδιοδρομία.',
        //     'background' => $background,
        // ]);

        // new Portal($helcol, 5, 'school');
        // Scholio::portalStudy($helcol, 'Παιδικός Σταθμός', 'Παιδικός Σταθμός', 'Παιδικός Σταθμός');
        // Scholio::portalStudy($helcol, 'Νηπιαγωγείο', 'Νήπια', 'Νήπια');
        // Scholio::portalStudy($helcol, 'Νηπιαγωγείο', 'Προνήπια', 'Προνήπια');

        // Scholio::portalStudy($helcol, 'Δημοτικό', 'Γενική Παιδεία', 'Ά Δημοτικού');
        // Scholio::portalStudy($helcol, 'Δημοτικό', 'Γενική Παιδεία', '΄Β Δημοτικού');
        // Scholio::portalStudy($helcol, 'Δημοτικό', 'Γενική Παιδεία', '΄Γ Δημοτικού');
        // Scholio::portalStudy($helcol, 'Δημοτικό', 'Γενική Παιδεία', '΄Δ Δημοτικού');
        // Scholio::portalStudy($helcol, 'Δημοτικό', 'Γενική Παιδεία', '΄Έ Δημοτικού');
        // Scholio::portalStudy($helcol, 'Δημοτικό', 'Γενική Παιδεία', 'ΣΤ Δημοτικού');

        // Scholio::portalStudy($helcol, 'Γυμνάσιο', 'Γενική Παιδεία', 'Ά Γυμνασίου');
        // Scholio::portalStudy($helcol, 'Γυμνάσιο', 'Γενική Παιδεία', '΄Β Γυμνασίου');
        // Scholio::portalStudy($helcol, 'Γυμνάσιο', 'Γενική Παιδεία', '΄Γ Γυμνασίου');
        // Scholio::portalStudy($helcol, 'Λύκειο', 'Γενική Παιδεία', 'Ά Λυκείου');
        // Scholio::portalStudy($helcol, 'Λύκειο', 'Γενική Παιδεία', '΄Β Λυκείου');
        // Scholio::portalStudy($helcol, 'Λύκειο', 'Γενική Παιδεία', '΄Γ Λυκείου');

        // Scholio::portalSocial($helcol, 'facebook', 'https://www.facebook.com/HellenicCollegeOfThessaloniki');
        // Scholio::portalSocial($helcol, 'pinterest', 'http://www.hellenic-college.gr/organization.php');
        // Scholio::portalSocial($helcol, 'youtube', 'http://www.youtube.com/user/HellenicCollegeThess');

        // $dst = factory(App\Models\School::class)->create([
        //     'user_id' => factory(App\User::class)->create(['name' => 'Deutsche Schule Thessaloniki - Γερμανική Σχολή Θεσσαλονίκης', 'email' => 'info@dst.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'dst'])->id,
        //     'address' => '9ο χλμ Θεσσαλονίκης – Θέρμης',
        //     'city' => 'Θέρμη, Θεσσαλονίκη',
        //     'phone' => 2310475900,
        //     'type_id' => 13,
        //     'website' => 'http://www.dst.gr/?lang=el',
        //     'approved' => 1,
        //     'about' => 'Η Γερμανική Σχολή Θεσσαλονίκης, έχει ως γερμανικό σχολείο εξωτερικού
        //     παράδοση άνω των 120 ετών – τα μαθήματα άρχισαν στις 13 Φεβρουαρίου 1888.
        //     Έκτοτε, η Γερμανική Σχολή Θεσσαλονίκης αποτελεί αναπόσπαστο κομμάτι της
        //     «Απόδημης Πολιτικής Πολιτισμού και Μόρφωσης» της Γερμανίας, στις
        //     διαφορετικές της μορφές: Γερμανική Αυτοκρατορία του Κάιζερ (έως το 1918),
        //     Δημοκρατία της Βαϊμάρης (1918-1933), φασιστική Δικτατορία (1933-1945) και
        //     τέλος Ομοσπονδιακή Δημοκρατία της Γερμανίας (από το 1949), οι οποίες
        //     επηρέασαν κάθε μια με το δικό της τρόπο το μάθημα και την εκπαίδευση στη
        //     Γερμανική Σχολή Θεσσαλονίκης, καθώς και τη διαμόρφωση του τρόπου με τον
        //     οποίο αντιλαμβάνεται η ελληνική κοινωνία τη σχολή ως ιδιωτικό εκπαιδευτικό
        //     ίδρυμα. Σήμερα, η ΓΣΘ, κατέχει μια εξαιρετική φήμη: έχει εδραιωθεί ως ένα από τα
        //     καλύτερα ιδιωτικά σχολεία της περιφέρειας και της Ελλάδας γενικότερα. Οι
        //     απόφοιτοί της, μετά τις σπουδές τους και την επαγγελματική τους κατάρτιση,
        //     καταλαμβάνουν συχνά σημαντικές θέσεις στο κράτος, την οικονομία και την
        //     κοινωνία της χώρας. Πολλοί εξ αυτών σπούδασαν στη Γερμανία, ενδυναμώνοντας
        //     σημαντικά τους δεσμούς μεταξύ των δύο χωρών.',
        //     'background' => $background,
        // ]);

        // new Portal($dst, 5, 'school');

        // Scholio::portalStudy($dst, 'Νηπιαγωγείο', 'Νήπια', 'Νήπια');
        // Scholio::portalStudy($dst, 'Νηπιαγωγείο', 'Προνήπια', 'Προνήπια');

        // Scholio::portalStudy($dst, 'Δημοτικό', 'Γενική Παιδεία', 'Ά Δημοτικού');
        // Scholio::portalStudy($dst, 'Δημοτικό', 'Γενική Παιδεία', '΄Β Δημοτικού');
        // Scholio::portalStudy($dst, 'Δημοτικό', 'Γενική Παιδεία', '΄Γ Δημοτικού');
        // Scholio::portalStudy($dst, 'Δημοτικό', 'Γενική Παιδεία', '΄Δ Δημοτικού');
        // Scholio::portalStudy($dst, 'Δημοτικό', 'Γενική Παιδεία', '΄Έ Δημοτικού');
        // Scholio::portalStudy($dst, 'Δημοτικό', 'Γενική Παιδεία', 'ΣΤ Δημοτικού');

        // Scholio::portalStudy($dst, 'Γυμνάσιο', 'Γενική Παιδεία', 'Ά Γυμνασίου');
        // Scholio::portalStudy($dst, 'Γυμνάσιο', 'Γενική Παιδεία', '΄Β Γυμνασίου');
        // Scholio::portalStudy($dst, 'Γυμνάσιο', 'Γενική Παιδεία', '΄Γ Γυμνασίου');
        // Scholio::portalStudy($dst, 'Λύκειο', 'Γενική Παιδεία', 'Ά Λυκείου');
        // Scholio::portalStudy($dst, 'Λύκειο', 'Γενική Παιδεία', '΄Β Λυκείου');
        // Scholio::portalStudy($dst, 'Λύκειο', 'Γενική Παιδεία', '΄Γ Λυκείου');

        // Scholio::portalSocial($dst, 'facebook', 'https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.dst.gr%2Fdie-schule%2Fdie-geschichte-der-dst%2F%3Flang%3Del');
        // Scholio::portalSocial($dst, 'google', 'https://plus.google.com/share?url=http%3A%2F%2Fwww.dst.gr%2Fdie-schule%2Fdie-geschichte-der-dst%2F%3Flang%3Del');
        // Scholio::portalSocial($dst, 'twitter', 'https://twitter.com/share?text=%CE%97%20%CE%B9%CF%83%CF%84%CE%BF%CF%81%CE%AF%CE%B1%20%CE%BC%CE%B1%CF%82&url=http%3A%2F%2Fwww.dst.gr%2Fdie-schule%2Fdie-geschichte-der-dst%2F%3Flang%3Del');




        // $ziridis = factory(App\Models\School::class)->create([
        //     'user_id' => factory(App\User::class)->create(['name' => 'Νέα Γενιά Ζηρίδη', 'email' => 'info@ziridis.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'ziridi'])->id,
        //     'address' => 'ΧΡΙΣΤΟΥΠΟΛΗ, ΣΠΑΤΑ, ΤΚ: 19004',
        //     'city' => 'Αθήνα',
        //     'phone' => 2106685600,
        //     'type_id' => 13,
        //     'website' => 'http://www.ziridis.gr',
        //     'approved' => 1,
        //     'about' => 'Αναζητήστε σχολεία με ιστορία, με παράδοση, με αρχές, με αξίες, με οικογενειακή ιστορία. Ανθρώπινα σχολεία. Ελληνικά σχολεία.

        //     Αναζητήστε μία θετική, παιδαγωγική ατμόσφαιρα. Ανθρώπους που νοιάζονται. Ανθρώπους που έχουν τυπικά και ουσιαστικά προσόντα.

        //     Αναζητήστε μεταπτυχιακά, διδακτορικά, ψάξτε για ανθρώπους που έχουν φλόγα στην καρδιά και ενθουσιασμό και αφοσίωση στο έργο τους, που αγαπούν αυτό που κάνουν.

        //     Αναζητήστε ένα ασφαλές, οικογενειακό, στοργικό κλίμα. Ένα περιβάλλον, που από μόνο του δημιουργεί ερεθίσματα, γιατί στα πρώτα χρόνια είναι που διαμορφώνεται η αντίληψη του ποιοτικού.

        //     Είναι οι άνθρωποι που γνωρίζουν τα ταλέντα τους, τα χαρίσματά τους και τη μοναδικότητά τους.

        //     Είναι οι άνθρωποι που έχουν ωριμάσει φυσικά, κοινωνικά, συναισθηματικά, διανοητικά και πνευματικά μέσα σ’ ένα θετικό περιβάλλον.

        //     Είναι οι άνθρωποι που είναι εξοπλισμένοι με όλες τις δεξιότητες και τα εφόδια που χρειάζεται η ζωή.

        //     «Γι’ αυτό, μην μου λες σε ποιο Πανεπιστήμιο πήγες, πες μου σε ποιο σχολείο ήσουνα.»',
        //     'background' => $background,
        // ]);

        // new Portal($ziridis, 5, 'school');

        // Scholio::portalStudy($ziridis, 'Νηπιαγωγείο', 'Νήπια', 'Νήπια');
        // Scholio::portalStudy($ziridis, 'Νηπιαγωγείο', 'Προνήπια', 'Προνήπια');

        // Scholio::portalStudy($ziridis, 'Δημοτικό', 'Γενική Παιδεία', 'Ά Δημοτικού');
        // Scholio::portalStudy($ziridis, 'Δημοτικό', 'Γενική Παιδεία', '΄Β Δημοτικού');
        // Scholio::portalStudy($ziridis, 'Δημοτικό', 'Γενική Παιδεία', '΄Γ Δημοτικού');
        // Scholio::portalStudy($ziridis, 'Δημοτικό', 'Γενική Παιδεία', '΄Δ Δημοτικού');
        // Scholio::portalStudy($ziridis, 'Δημοτικό', 'Γενική Παιδεία', '΄Έ Δημοτικού');
        // Scholio::portalStudy($ziridis, 'Δημοτικό', 'Γενική Παιδεία', 'ΣΤ Δημοτικού');

        // Scholio::portalStudy($ziridis, 'Γυμνάσιο', 'Γενική Παιδεία', 'Ά Γυμνασίου');
        // Scholio::portalStudy($ziridis, 'Γυμνάσιο', 'Γενική Παιδεία', '΄Β Γυμνασίου');
        // Scholio::portalStudy($ziridis, 'Γυμνάσιο', 'Γενική Παιδεία', '΄Γ Γυμνασίου');
        // Scholio::portalStudy($ziridis, 'Λύκειο', 'Γενική Παιδεία', 'Ά Λυκείου');
        // Scholio::portalStudy($ziridis, 'Λύκειο', 'Γενική Παιδεία', '΄Β Λυκείου');
        // Scholio::portalStudy($ziridis, 'Λύκειο', 'Γενική Παιδεία', '΄Γ Λυκείου');

        // Scholio::portalSocial($ziridis, 'facebook', 'https://www.facebook.com/ziridis/');
        // Scholio::portalSocial($ziridis, 'instagram', 'https://www.instagram.com/ziridis/');
        // Scholio::portalSocial($ziridis, 'twitter', 'https://twitter.com/neageniaziridis');
        // Scholio::portalSocial($ziridis, 'youtube', 'https://www.youtube.com/user/ziridistv');



        // $haef = factory(App\Models\School::class)->create([
        //     'user_id' => factory(App\User::class)->create(['name' => 'Ελληνοαμερικανικόν Εκπαιδευτικόν Ίδρυμα, Κολλέγιο Αθηνών - Κολλέγιο Ψυχικού ', 'email' => 'info@haef.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'haef'])->id,
        //     'address' => 'Στεφάνου Δέλτα 15, Ψυχικό',
        //     'city' => 'Αθήνα',
        //     'phone' => 2106798100,
        //     'type_id' => 13,
        //     'website' => 'https://www.haef.gr/',
        //     'approved' => 1,
        //     'about' => '"Αποστολή του ΕΕΙ είναι να προσφέρει παιδεία ανωτάτου επιπέδου -με διεθνή κριτήρια- και να καλλιεργεί στους μαθητές του εκείνες τις ικανότητες της ψυχής, του σώματος και του πνεύματος που είναι αναγκαίες για κάθε υπεύθυνο πολίτη".',
        //     'background' => $background,
        // ]);

        // new Portal($haef, 5, 'school');

        // Scholio::portalStudy($haef, 'Δημοτικό', 'Γενική Παιδεία', 'Ά Δημοτικού');
        // Scholio::portalStudy($haef, 'Δημοτικό', 'Γενική Παιδεία', '΄Β Δημοτικού');
        // Scholio::portalStudy($haef, 'Δημοτικό', 'Γενική Παιδεία', '΄Γ Δημοτικού');
        // Scholio::portalStudy($haef, 'Δημοτικό', 'Γενική Παιδεία', '΄Δ Δημοτικού');
        // Scholio::portalStudy($haef, 'Δημοτικό', 'Γενική Παιδεία', '΄Έ Δημοτικού');
        // Scholio::portalStudy($haef, 'Δημοτικό', 'Γενική Παιδεία', 'ΣΤ Δημοτικού');

        // Scholio::portalStudy($haef, 'Γυμνάσιο', 'Γενική Παιδεία', 'Ά Γυμνασίου');
        // Scholio::portalStudy($haef, 'Γυμνάσιο', 'Γενική Παιδεία', '΄Β Γυμνασίου');
        // Scholio::portalStudy($haef, 'Γυμνάσιο', 'Γενική Παιδεία', '΄Γ Γυμνασίου');
        // Scholio::portalStudy($haef, 'Λύκειο', 'Γενική Παιδεία', 'Ά Λυκείου');
        // Scholio::portalStudy($haef, 'Λύκειο', 'Γενική Παιδεία', '΄Β Λυκείου');
        // Scholio::portalStudy($haef, 'Λύκειο', 'Γενική Παιδεία', '΄Γ Λυκείου');

        // Scholio::portalSocial($haef, 'facebook', 'https://www.haef.gr/-/media/Images/HAEF/Icons/fb.ashx?h=16&la=el&w=16');
        // Scholio::portalSocial($haef, 'twitter', 'https://www.haef.gr/-/media/Images/HAEF/Icons/tw.ashx?h=16&la=el&w=16');
    }
}
