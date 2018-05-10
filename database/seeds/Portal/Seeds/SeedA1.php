<?php

use App\Models\School;
use App\Scholio\Scholio;
use Illuminate\Database\Seeder;
use Portal\Portal;

class SeedA1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $background = Portal::createImages('/upload/school/univ.png')->id;

        /*===============   RobotSetGo   ================*/
        $robotsetgo = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Robot Set Go', 'email' => 'info@robotsetgo.gr', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => 'robotsetgo'])->id,
            'address' => 'Μ.Αλεξάνδρου 68',
            'city' => 'Τρίλοφος Θεσσαλονίκης',
            'phone' => 2392400370,
            'type_id' => 12,
            'website' => 'www.robotsetgo.gr',
            'approved' => 1,
            'about' => '<div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner ">
            <div class="wpb_wrapper">
            <div class="wpb_text_column wpb_content_element ">
            <div class="wpb_wrapper">
            <p>Η <strong>Robot set go</strong> είναι μια αναπτυσσόμενη αστική μη κερδοσκοπική εταιρία που ιδρύθηκε το 2016 και στοχεύει  στην  εκμάθηση υψηλής τεχνολογίας σε όλες τις ηλικιακές ομάδες. Σε αυτήν την προσπάθεια υπάρχουν συνεργασίες με τα Πανεπιστημιακά Ιδρύματα   καθώς επίσης με ιδιωτικά ιδρύματα  &amp; άλλες αστικές μη κερδοσκοπικές εταιρίες .</p>
            <p>Οι κλάδοι τις υψηλής τεχνολογίας με τους οποίους ασχολείται είναι :</p>
            <p> </p>
            <ul>
            <li><strong>Ρομποτική</strong></li>
            </ul>
            <ul>
            <li><strong>Προγραμματισμός</strong></li>
            </ul>
            <ul>
            <li><strong>3D</strong></li>
            </ul>
            <p> </p>
            <p>            Τα μαθήματα ρομποτικής γίνονται με την μέθοδο του σεναρίου έτσι ώστε τα παιδιά μέσα από τους ρόλους που παίρνουν κάθε φορά μπορούν και αντιμετωπίζουν τις προκλήσεις του σεναρίου. Μέσα από αυτή την μέθοδο τα παιδιά παίζοντας μαθαίνουν την λογική του προγραμματισμού και της ρομποτικής κατασκευής έτσι ώστε να γίνεται πιο εύκολη η κατανόηση μιας δύσκολης επιστήμης. Η εκπαιδευτική πλατφόρμα που χρησιμοποιούμε είναι για παιδιά από 5 ετών μέχρι 14 ετών της Lego BeeBoot  – WeDo2 – EV3 .</p>
            <p>             Για ηλικίες από 14 ετών και πάνω έχουμε τον έξυπνο κόσμο του αυτοματισμού και των κυκλωμάτων χρησιμοποιώντας τις πιο γνωστές πλακέτες (Arduino και RaspberryPi). Μέσω της πλατφόρμας των Arduino, RaspberryPi και άλλων μικρο-επεξεργαστών, ο ενδιαφερόμενος έρχεται σε επαφή με προγραμματισμό υλικού χαμηλότερου επιπέδου (όπως μοτέρ ακριβείας ή αισθητήρες τρισδιάστατης κίνησης και επιτάχυνσης), ο οποίος τους δίνει τη δυνατότητα υλοποίησης πρωτότυπων κατασκευών που ξεφεύγουν από την τυποποιημένη ρομποτική.</p>
            <p>Η εισαγωγή  στους ηλεκτρονικούς υπολογιστές ξεκινάει από τον απλό χειρισμό τους μέχρι και τον προγραμματισμό ιστοσελίδων και προγραμμάτων. Η σειρά μαθημάτων απευθύνεται από πολύ αρχάριους μέχρι και πολύ προχωρημένους και σε όλες τις ηλικιακές ομάδες. Στόχος των μαθημάτων είναι ο σωστός χειρισμός των ηλεκτρονικών υπολογιστών καθώς και η εισαγωγή στον κόσμο του προγραμματισμού.</p>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner ">
            <div class="wpb_wrapper">
            <div class="wpb_text_column wpb_content_element ">
            <div class="wpb_wrapper">
            <p>Σκοπός των μαθημάτων μας είναι να προσφέρουμε στον ενδιαφερόμενο τις βασικές έννοιες και αρχές του προγραμματισμού κινητών τηλεφώνων και να μάθουν όλες τις νέες τεχνικές για τον καλύτερο και πιο σωστό προγραμματισμό τους.</p>
            <p>Στην συνέχεια έχουμε την τρισδιάστατη απεικόνιση αντικειμένων και χώρων μέσω σχεδιασμού από ειδικά προγράμματα που δίνει την δυνατότητα στα παιδιά και σε άτομα όλων των ηλικιών να αντιληφθούν μεγάλες έννοιες της καθημερινότητας με έναν ευχάριστο και διασκεδαστικό τρόπο, αλλά παράλληλα παραγωγικό και οργανωτικό.</p>
            <p>Η εταιρία ασχολείται με τον σχεδιασμό   βιωματικού διαδραστικού παιχνιδιού που έχει στόχο να προσφέρει μια  εμπειρία μάθησης και παιχνιδιού, να προκαλέσει τη δημιουργική σκέψη των παικτών καθώς και τις δεξιότητες επίλυσης προβλημάτων. Σκοπός του παιχνιδιού είναι η σχεδίαση διαδραστικού θέματος ρομποτικής   το οποίο θα απευθύνεται  σε όλες τις ηλικιακές ομάδες και θα τους γνωρίσει μια πτυχή της ρομποτικής τεχνολογίας μέσω του παιχνιδιού.</p>
            <p><strong>Τα μαθήματα γίνονται από έμπειρο προσωπικό που είναι πιστοποιημένα από την Lego με τίτλους CERTIFICATION LEGO MINDSTORMS EDUCATION EV3 και CERTIFICATION LEGO WEDO 2.0. Επίσης  όλο το προσωπικό  είναι πτυχιούχοι πανεπιστημίων με μεταπτυχιακές σπουδές και εξειδίκευση στον τομέα διδασκαλίας τους</strong>.</p>
            <p>Τέλος ασχολείται και με το κομμάτι της έρευνας, του σχεδιασμού καινοτόμων εφαρμογών και παρουσίαση όλων αυτών σε σχολεία. Αυτό  γίνεται με επίσκεψη στον χώρο μας, που είναι ιδιαίτερα προσεγμένος και τροποποιημένος για τις ανάγκες διδασκαλίας υψηλής τεχνολογίας, ως εκπαιδευτική εκδρομή. Οι εγκαταστάσεις της <strong>Robot set go</strong> βρίσκονται στον Τρίλοφο  Θεσσαλονίκης έχει δύο μεγάλες αίθουσες διδασκαλίας χώρο αναμονής και αμφιθέατρο χωρητικότητας 60 ατόμων.</p>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>',
            'background' => $background,
        ]);

        new Portal($robotsetgo, 5, 'kdap');

        Scholio::portalStudy($robotsetgo, 'Τμήμα Προσχολικής Ηλικίας', 'Εκπαιδευτική Ρομποτική', 'Ρομποτική με Bee-Bot®', 'http://www.robotsetgo.gr/product/%CF%80%CF%81%CE%BF%CF%83%CF%87%CE%BF%CE%BB%CE%B9%CE%BA%CE%AE-%CE%B7%CE%BB%CE%B9%CE%BA%CE%AF%CE%B1/');
        Scholio::portalStudy($robotsetgo, 'Τμήμα Ηλικιών 6-10', 'Εκπαιδευτική Ρομποτική', 'Ρομποτική με Lego® WeDo 2.0', 'http://www.robotsetgo.gr/product/%CE%B5%CE%BA%CF%80%CE%B1%CE%B9%CE%B4%CE%B5%CF%85%CF%84%CE%B9%CE%BA%CE%AE-%CF%81%CE%BF%CE%BC%CF%80%CE%BF%CF%84%CE%B9%CE%BA%CE%AE-%CE%BC%CE%B5-wedo/');
        Scholio::portalStudy($robotsetgo, 'Τμήμα Ηλικιών 10-16', 'Εκπαιδευτική Ρομποτική', 'Ρομποτική με Lego® Mindstorms EV3', 'http://www.robotsetgo.gr/product/ekpaideutiki-rompotiki-me-ev3/');
        Scholio::portalStudy($robotsetgo, 'Τμήμα Προχωρημένων', 'Η/Υ - Ρομποτική', 'Δεξιότητες ρομποτικής και αυτοματισμού', 'http://www.robotsetgo.gr/product/%CE%B4%CE%B5%CE%BE%CE%B9%CF%8C%CF%84%CE%B7%CF%84%CE%B5%CF%82-%CF%81%CE%BF%CE%BC%CF%80%CE%BF%CF%84%CE%B9%CE%BA%CE%AE%CF%82-%CE%BA%CE%B1%CE%B9-%CE%B1%CF%85%CF%84%CE%BF%CE%BC%CE%B1%CF%84%CE%B9%CF%83/');
        Scholio::portalStudy($robotsetgo, 'Τμήμα Προχωρημένων', 'Η/Υ - Ρομποτική', 'Τρισδιάστατη 3D σχεδίαση', 'http://www.robotsetgo.gr/product/%CF%84%CF%81%CE%B9%CF%83%CE%B4%CE%B9%CE%AC%CF%83%CF%84%CE%B1%CF%84%CE%B7-3d-%CF%83%CF%87%CE%B5%CE%B4%CE%AF%CE%B1%CF%83%CE%B7/');
        Scholio::portalStudy($robotsetgo, 'Τμήμα Προχωρημένων', 'Η/Υ - Ρομποτική', 'Μαθήματα Χειρισμού και Προγραμματισμού Ηλεκτρονικών Υπολογιστών', 'http://www.robotsetgo.gr/product/%CE%BC%CE%B1%CE%B8%CE%AE%CE%BC%CE%B1%CF%84%CE%B1-%CF%87%CE%B5%CE%B9%CF%81%CE%B9%CF%83%CE%BC%CE%BF%CF%8D-%CE%BA%CE%B1%CE%B9-%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%B1%CE%BC%CE%BC%CE%B1%CF%84%CE%B9%CF%83/');
        Scholio::portalStudy($robotsetgo, 'Τμήμα Προχωρημένων', 'Η/Υ - Ρομποτική', 'Μαθήματα προγραμματισμού κινητών τηλεφώνων Android', 'http://www.robotsetgo.gr/product/%CE%BC%CE%B1%CE%B8%CE%AE%CE%BC%CE%B1%CF%84%CE%B1-%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%B1%CE%BC%CE%BC%CE%B1%CF%84%CE%B9%CF%83%CE%BC%CE%BF%CF%8D-%CE%BA%CE%B9%CE%BD%CE%B7%CF%84%CF%8E%CE%BD-%CF%84%CE%B7/');

        Scholio::portalSocial($robotsetgo, 'facebook', 'https://www.facebook.com/robotsetgo/?fref=ts');
        Scholio::portalSocial($robotsetgo, 'instagram', 'https://www.instagram.com/robot_set_go/');
        Scholio::portalSocial($robotsetgo, 'google', 'https://plus.google.com/110353112033208285923');
        Scholio::portalSocial($robotsetgo, 'youtube', 'https://www.youtube.com/channel/UCxSRrd4JBJCL7hzwWcaPpAQ');
        
    }
}
