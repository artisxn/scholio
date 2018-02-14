<?php

use App\Models\AdmissionCategory;
use App\Models\AdmissionField;
use Illuminate\Database\Seeder;

class AdmissionCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Στοιχεία Υποψηφίου', 'icon' => ''],
            ['name' => 'Στοιχεία Επικοινωνίας Μητέρας', 'icon' => ''],
            ['name' => 'Στοιχεία Επικοινωνίας Πατέρα', 'icon' => ''],
            ['name' => 'Στοιχεία Επικοινωνίας Κηδεμόνος', 'icon' => ''],
            ['name' => 'Οικονομικά Στοιχεία Μητέρας', 'icon' => ''],
            ['name' => 'Οικονομικά Στοιχεία Πατέρα', 'icon' => ''],
            ['name' => 'Οικονομικά Στοιχεία Κηδεμόνος', 'icon' => ''],
            ['name' => 'Έπιπλέον Στοιχεία Μαθητή', 'icon' => ''],
        ];

        foreach ($categories as $category) {
            $admissionCategory = new AdmissionCategory;
            $admissionCategory->name = $category['name'];
            $admissionCategory->icon = $category['icon'];
            $admissionCategory->save();
        }

        $fields = [
            // Στοιχεία Υποψηφίου
            ['id' => '1', 'name' => 'Διεύθυνση', 'icon' => 'fa fa-street-view', 'type' => '', 'slug' => 'student_address'],
            ['id' => '1', 'name' => 'Πόλη', 'icon' => 'fa fa-map-marker', 'type' => '', 'slug' => 'student_city'],
            ['id' => '1', 'name' => 'Τηλέφωνο', 'icon' => 'fa fa-phone', 'type' => '', 'slug' => 'student_phone'],
            ['id' => '1', 'name' => 'Αριθμός Δελτίου Ταυτότητας', 'icon' => 'fa fa-id-card-o', 'type' => '', 'slug' => 'student_id_number'],
            ['id' => '1', 'name' => 'Ταχυδρομικός Κώδικας', 'icon' => 'fa fa-envelope-o', 'type' => '', 'slug' => 'student_tk'],
            ['id' => '1', 'name' => 'Εθνικότητα', 'icon' => 'fa fa-flag', 'type' => '', 'slug' => 'student_nationality'],
            ['id' => '1', 'name' => 'Θρήσκευμα', 'icon' => 'fa fa-globe', 'type' => '', 'slug' => 'student_religion'],
            ['id' => '1', 'name' => 'Ημερομηνία Γέννησης', 'icon' => 'fa fa-calendar', 'type' => '', 'slug' => 'student_dob'],
            ['id' => '1', 'name' => 'Τόπος Γέννησης', 'icon' => 'fa fa-map-marker', 'type' => '', 'slug' => 'student_pob'],
            ['id' => '1', 'name' => 'Μέλος Πολύτεκνης Οικογένειας', 'icon' => 'fa fa-users', 'type' => '', 'slug' => 'student_polyteknos'],
            ['id' => '1', 'name' => 'Μέλη της οικογένειας που φοιτούν στο εκπ. ίδρυμα', 'icon' => 'fa fa-users', 'type' => '', 'slug' => 'student_relatives'],
            ['id' => '1', 'name' => 'Προηγούμενο Σχολείο', 'icon' => 'fa fa-building', 'type' => '', 'slug' => 'student_previous'],
            ['id' => '1', 'name' => 'Βαθμός Αποφοίτησης απο το προηγούμενο σχολείο', 'icon' => 'fa fa-building', 'type' => '', 'slug' => 'student_grades'],

            // Στοιχεία Επικοινωνίας-Οικονομικα Γοννέων-Κηδεμόνων
            ['id' => '2', 'name' => 'Ονοματεπώνυμο Μητέρας', 'icon' => 'fa fa-user-o', 'type' => '', 'slug' => 'mother_fullname'],
            ['id' => '2', 'name' => 'Τηλέφωνο Μητέρας', 'icon' => 'fa fa-phone', 'type' => '', 'slug' => 'mother_phone'],
            ['id' => '2', 'name' => 'e-mail Μητέρας', 'icon' => 'fa fa-envelope', 'type' => '', 'slug' => 'mother_email'],
            ['id' => '2', 'name' => 'Διεύθυνση, Πόλη Μητέρας', 'icon' => 'fa fa-street-view', 'type' => '', 'slug' => 'mother_address'],
            ['id' => '2', 'name' => 'Ταχυδρομικός Κώδικας Μητέρας', 'icon' => 'fa fa-envelope-o', 'type' => '', 'slug' => 'mother_tk'],
            ['id' => '5', 'name' => 'Επάγγελμα/Θέση Εργασίας Μητέρας', 'icon' => 'fa fa-briefcase', 'type' => '', 'slug' => 'mother_job'],
            ['id' => '5', 'name' => 'Εργοδότης/Εταιρεία Μητέρας', 'icon' => 'fa fa-building', 'type' => '', 'slug' => 'mother_company'],
            ['id' => '5', 'name' => 'Αριθμ. Φορολ. Μητρώου Μητέρας', 'icon' => 'fa fa-file-text-o', 'type' => '', 'slug' => 'mother_afm'],
            ['id' => '5', 'name' => 'Εισόδημα Μητέρας προηγούμενου Έτους', 'icon' => 'fa fa-money', 'type' => '', 'slug' => 'mother_income'],
            ['id' => '5', 'name' => 'Αριθμός Δελτίου Ταυτότητας Μητέρας', 'icon' => 'fa fa-id-card-o', 'type' => '', 'slug' => 'mother_id_number'],
            ['id' => '3', 'name' => 'Ονοματεπώνυμο Πατέρα', 'icon' => 'fa fa-user-o', 'type' => '', 'slug' => 'father_fullname'],
            ['id' => '3', 'name' => 'Τηλέφωνο Πατέρα', 'icon' => 'fa fa-phone', 'type' => '', 'slug' => 'father_phone'],
            ['id' => '3', 'name' => 'e-mail Πατέρα', 'icon' => 'fa fa-envelope', 'type' => '', 'slug' => 'father_email'],
            ['id' => '3', 'name' => 'Διεύθυνση, Πόλη Πατέρα', 'icon' => 'fa fa-street-view', 'type' => '', 'slug' => 'father_address'],
            ['id' => '3', 'name' => 'Ταχυδρομικός Κώδικας Πατέρα', 'icon' => 'fa fa-envelope-o', 'type' => '', 'slug' => 'father_tk'],
            ['id' => '6', 'name' => 'Επάγγελμα/Θέση Εργασίας Πατέρα', 'icon' => 'fa fa-briefcase', 'type' => '', 'slug' => 'father_job'],
            ['id' => '6', 'name' => 'Εργοδότης/Εταιρεία Πατέρα', 'icon' => 'fa fa-building', 'type' => '', 'slug' => 'father_company'],
            ['id' => '6', 'name' => 'Αριθμ. Φορολ. Μητρώου Πατέρα', 'icon' => 'fa fa-file-text-o', 'type' => '', 'slug' => 'father_afm'],
            ['id' => '6', 'name' => 'Εισόδημα Πατέρα προηγούμενου Έτους', 'icon' => 'fa fa-money', 'type' => '', 'slug' => 'father_income'],
            ['id' => '6', 'name' => 'Αριθμός Δελτίου Ταυτότητας Πατέρα', 'icon' => 'fa fa-id-card-o', 'type' => '', 'slug' => 'father_id_number'],
            ['id' => '4', 'name' => 'Ονοματεπώνυμο Κηδεμόνος', 'icon' => 'fa fa-user-o', 'type' => '', 'slug' => 'guardian_fullname'],
            ['id' => '4', 'name' => 'Τηλέφωνο Κηδεμόνος', 'icon' => 'fa fa-phone', 'type' => '', 'slug' => 'guardian_phone'],
            ['id' => '4', 'name' => 'e-mail Κηδεμόνος', 'icon' => 'fa fa-envelope', 'type' => '', 'slug' => 'guardian_email'],
            ['id' => '4', 'name' => 'Διεύθυνση, Πόλη Κηδεμόνος', 'icon' => 'fa fa-street-view', 'type' => '', 'slug' => 'guardian_address'],
            ['id' => '4', 'name' => 'Ταχυδρομικός Κώδικας Κηδεμόνος', 'icon' => 'fa fa-envelope-o', 'type' => '', 'slug' => 'guardian_tk'],
            ['id' => '7', 'name' => 'Επάγγελμα/Θέση Εργασίας Κηδεμόνος', 'icon' => 'fa fa-briefcase', 'type' => '', 'slug' => 'guardian_job'],
            ['id' => '7', 'name' => 'Εργοδότης/Εταιρεία Κηδεμόνος', 'icon' => 'fa fa-building', 'type' => '', 'slug' => 'guardian_company'],
            ['id' => '7', 'name' => 'Αριθμ. Φορολ. Μητρώου Κηδεμόνος', 'icon' => 'fa fa-file-text-o', 'type' => '', 'slug' => 'guardian_afm'],
            ['id' => '7', 'name' => 'Εισόδημα Κηδεμόνος προηγούμενου Έτους', 'icon' => 'fa fa-money', 'type' => '', 'slug' => 'guardian_income'],
            ['id' => '7', 'name' => 'Αριθμός Δελτίου Ταυτότητας Κηδεμόνος', 'icon' => 'fa fa-id-card-o', 'type' => '', 'slug' => 'guardian_id_number'],

            ['id' => '8', 'name' => 'Ικανότητες - Δεξιότητες', 'icon' => 'fa fa-wrench', 'type' => '', 'slug' => 'skills'],
            ['id' => '8', 'name' => 'Ξένες Γλώσσες', 'icon' => 'fa fa-flag', 'type' => '', 'slug' => 'languages'],
            ['id' => '8', 'name' => 'Σημεία Υπεροχής', 'icon' => 'fa fa-id-badge', 'type' => '', 'slug' => 'strongpoints'],
            ['id' => '8', 'name' => 'Προηγούμενες Σπουδές', 'icon' => 'fa fa-graduation-cap', 'type' => '', 'slug' => 'previous_school'],
            ['id' => '8', 'name' => 'Έπαινοι - Διακρίσεις', 'icon' => 'fa fa-trophy', 'type' => '', 'slug' => 'awards'],
            ['id' => '8', 'name' => 'Ενδιαφέροντα - Ασχολίες', 'icon' => 'fa fa-paint-brush', 'type' => '', 'slug' => 'other_interests'],
            ['id' => '8', 'name' => 'Πιστοποιήσεις - Σεμινάρια', 'icon' => 'fa fa-certificate', 'type' => '', 'slug' => 'certifications'],
            ['id' => '8', 'name' => 'Σημειώσεις', 'icon' => 'fa fa-pencil', 'type' => '', 'slug' => 'notes'],
            ['id' => '8', 'name' => 'Σημειώσεις Εκ. Ιδρύματος', 'icon' => 'fa fa-pencil', 'type' => '', 'slug' => 'school_notes'],
        ];

        foreach ($fields as $field) {
            $admissionFiled = new AdmissionField;
            $admissionFiled->category_id = $field['id'];
            $admissionFiled->name = $field['name'];
            $admissionFiled->icon = $field['icon'];
            $admissionFiled->type = $field['type'];
            $admissionFiled->slug = $field['slug'];
            $admissionFiled->save();
        }
    }
}
