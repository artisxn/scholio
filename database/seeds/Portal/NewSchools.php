<?php

use App\Models\Image;
use App\Models\ScholarshipLimit;
use App\Models\School;
use App\Scholio\Scholio;
use Illuminate\Database\Seeder;
use App\Models\University;
use App\Models\Subscription;
use App\Models\SchoolSetting;

class Colleges extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $background = $this->createImages('/upload/school/univ.png')->id;

        $logo1 = '/upload/avatar/college_1.png';

        /*===============   1 ACT   ================*/
        $school1 = factory(App\Models\School::class)->create([
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
            'logo' => $logo1,
            'background' => $background,
        ]);

        Scholio::portalStudy($school1, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc (Hons) Accounting and Finance', 'http://www.bca.edu.gr/course/1168/bsc-hons-accounting-and-finance');
        Scholio::portalStudy($school1, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc (Hons) Business Management', 'http://www.bca.edu.gr/course/961/bsc-hons-business-management');
        Scholio::portalStudy($school1, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc (Hons) Business Management [Entrepreneurship and Innovation]', 'http://www.bca.edu.gr/course/1164/bsc-hons-business-management-entrepreneurship-and-innovation');
        Scholio::portalStudy($school1, 'Προπτυχιακές Σπουδές-Bachelor', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'BSc (Hons) Business Management [Marketing]', 'http://www.bca.edu.gr/course/2017/bsc-hons-business-management-marketing');
        Scholio::portalStudy($school1, 'Προπτυχιακές Σπουδές-Bachelor', 'Ναυτιλιακά - Nautical Education', 'BSc (Hons) Shipping', 'http://www.bca.edu.gr/course/1165/bsc-hons-shipping');
        Scholio::portalStudy($school1, 'Προπτυχιακές Σπουδές-Bachelor', 'Ναυτιλιακά - Nautical Education', 'BSc (Hons) Maritime Business', 'http://www.bca.edu.gr/course/1872/bsc-hons-maritime-business');
        Scholio::portalStudy($school1, 'Προπτυχιακές Σπουδές-Bachelor', 'Τουρισμός - Tourism', 'BA (Hons) Hospitality and Tourism Management', 'http://www.bca.edu.gr/course/1167/ba-hons-hospitality-and-tourism-management');
        Scholio::portalStudy($school1, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'BSc Computer Science', 'http://www.athtech.gr/studies/bachelors/bsc-computer-science/');
        Scholio::portalStudy($school1, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'BSc Computer Science (Business Informatics)', 'http://www.athtech.gr/courses/bachelors/business-informatics/');
        Scholio::portalStudy($school1, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'BSc Computer Science (Internet Computing)', 'http://www.athtech.gr/courses/bachelors/internet-computing/');
        Scholio::portalStudy($school1, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'Master in Business Administration (MBA)', 'http://www.bca.edu.gr/course/1171/mba');
        Scholio::portalStudy($school1, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MBA for Executives', 'http://www.bca.edu.gr/course/1864/mba-executives');
        Scholio::portalStudy($school1, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MSc Accounting and Finance', 'http://www.bca.edu.gr/course/1172/msc-accounting-and-finance');
        Scholio::portalStudy($school1, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MSc Digital Marketing', 'http://www.bca.edu.gr/course/1174/msc-digital-marketing');
        Scholio::portalStudy($school1, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - BusinessΔιοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MSc Business Psychology', 'http://www.bca.edu.gr/course/1378/msc-business-psychology');
        Scholio::portalStudy($school1, 'Μεταπτυχιακές Σπουδές-Master', 'Διοίκηση Επιχειρήσεων & Οικονομικά - Business', 'MSc Consumer Psychology', 'http://www.bca.edu.gr/course/1170/msc-consumer-psychology');
        Scholio::portalStudy($school1, 'Μεταπτυχιακές Σπουδές-Master', 'Ναυτιλιακά - Nautical Education', 'MSc Shipping Business', 'http://www.bca.edu.gr/course/1183/msc-shipping-business');
        Scholio::portalStudy($school1, 'Μεταπτυχιακές Σπουδές-Master', 'Ναυτιλιακά - Nautical Education', 'LLM Maritime Law', 'http://www.bca.edu.gr/course/2407/llm-maritime-law');
        Scholio::portalStudy($school1, 'Μεταπτυχιακές Σπουδές-Master', 'Ναυτιλιακά - Nautical Education', 'MSc Shipping - e-Learning', 'http://shipping.education/');
        Scholio::portalStudy($school1, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'MSc in Management of Business, Innovation and Technology (MBIT)', 'http://www.athtech.gr/studies/masters/management-of-business-innovation-and-technology/');
        Scholio::portalStudy($school1, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'MSc in Advanced Software Engineering – Security', 'http://www.athtech.gr/courses/masters/advanced-software-engineering/information-security/');
        Scholio::portalStudy($school1, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'MSc in Advanced Software Engineering – Telecommunications', 'http://www.athtech.gr/studies/masters/telecommunications/');
        Scholio::portalStudy($school1, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'MSc in Advanced Software Engineering – Web and Mobile Applications', 'http://www.athtech.gr/courses/masters/advanced-software-engineering/web-mobile-applications/');
        Scholio::portalStudy($school1, 'Μεταπτυχιακές Σπουδές-Master', 'Πληροφορική - Informatics & Technology', 'MSc in Advanced Software Engineering – Data Analytics', 'http://www.athtech.gr/studies/masters/data-analytics/');

        

        $school1->background = $this->createImages('/upload/school/' . $school1->id . '/1.jpg')->id;
        $school1->save();

        $this->makeSettings($school1);

        $this->insertImages($school1, '/upload/school/1/', 5);
    }

    public function makeSettings($school)
    {
        $scholarshipLimit = new ScholarshipLimit;
        $scholarshipLimit->school_id = $school->id;
        $scholarshipLimit->cr1 = 10;
        $scholarshipLimit->cr2 = 6;
        $scholarshipLimit->cr3 = 2;
        $scholarshipLimit->cr4 = 2;
        $scholarshipLimit->cr5 = 1;
        $scholarshipLimit->save();

        $university = new University;
        $university->name = $school->admin->name;
        $university->save();

        $subscription = new Subscription;
        $subscription->user_id = $school->admin->id;
        $subscription->save();

        $settings = new SchoolSetting;
        $settings->school_id = $school->id;
        $settings->save();

        $address = Scholio::geocode($school->address . ', ' . $school->city);
        if ($address == 'GEOCODE ERROR') {
            dd($address);
        } else {
            try {
                $lat = $address['lat'];
                $lng = $address['lng'];
                $school->lat = $lat;
                $school->lng = $lng;
                $school->save();
            } catch (Exception $e) {
            }
        }
    }

    public function insertImages($school, $path, $until)
    {
        for ($i = 2; $i <= $until; $i++) {
            $image = $this->createImages($path . $i . '.jpg');
            $school->image()->toggle($image);
        }
    }

    public function createImages($path)
    {
        $image = new Image;
        $image->full_path = $path;
        $image->path = $path;
        $image->name = $path;
        $image->extension = 'jpg';
        $image->alt = 'School Image';
        $image->save();

        return $image;
    }
}
