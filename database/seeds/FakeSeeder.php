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
        $school = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'American College of Thessaloniki', 'email' => 'webmaster@act.edu', 'password' => bcrypt('123456'), 'role' => 'school'])->id,
            'address' => 'Σεβενίδη, 17, Πυλαία',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310398398,
            'type_id' => 1,
            'website' => 'act.edu',
            'approved' => 1,
            'logo' => 'fake/act-logo.png',
        ]);

        $this->createImages($school, 'fake/act-', 1, 6);
        $this->createStudy($school, [206, 207, 208, 209, 210, 253, 252, 279, 306, 308, 309, 312, 324]);
        $this->createUsers($school, 'students', [21, 22]);
        $this->createUsers($school, 'teachers', [11, 12]);
        $this->createScholarship(1, 1, 20, 207, 1, 1, 1, 1);
        $this->createScholarship(1, 2, 800, 310, 3, 2, 2, 2);
        $this->createScholarship(1, 1, 50, 210, 1, 3, 2, 1);
        $this->createScholarship(1, 2, 500, 209, 1, 4, 2, 1);

        /*===============  2 AMC ================*/
        $school = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Μητροπολιτικό Κολλέγιο Θεσσαλονίκης', 'email' => 'info@metropolitan.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school'])->id,
            'address' => 'Ελ. Βενιζέλου 14 & Τσιμισκή',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310241010,
            'type_id' => 1,
            'website' => 'mitropolitiko.edu.gr',
            'approved' => 1,
            'logo' => 'fake/amc-logo.png',
        ]);

        $this->createImages($school, 'fake/amc-', 1, 7);
        $this->createStudy($school, [202, 204, 205, 240, 241, 244, 245, 246, 249, 250, 255, 256, 257, 258, 259, 260, 261,
            266, 267, 268, 269, 270, 281, 282, 283, 284, 285, 286, 287, 327, 328, 329, 330, 331, 332, 345, 346, 349, 350, 351, 352]);
        $this->createUsers($school, 'students', [4, 5]);
        $this->createUsers($school, 'teachers', [11, 12]);
        $this->createScholarship(2, 2, 500, 240, 1, 1, 1, 5);
        $this->createScholarship(2, 1, 30, 350, 3, 2, 1, 5);

        /*===============  3 AKMH ================*/
        $school = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'ΑΚΜΗ', 'email' => 'info@iek-akmi.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school'])->id,
            'address' => 'Τσιμισκή 14',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310260200,
            'type_id' => 2,
            'website' => 'iek-akmi.edu.gr',
            'approved' => 1,
            'logo' => 'fake/akmi-logo.png',
        ]);

        $this->createStudy($school, [1, 4, 6, 8, 11, 13, 15, 17, 18, 19, 20, 22, 24, 25, 28, 29,
            33, 34, 41, 44, 46, 47, 38, 50, 51, 52, 54, 55, 56, 57, 58, 59,
            65, 67, 69, 71, 73, 77, 78, 79,
            81, 86, 89, 90, 91, 94, 96, 97, 98,
            106, 108, 110, 113, 124, 125, 127, 130, 132, 134, 136, 140, 141, 142,
            146, 147, 149, 151, 155, 157, 159, 161, 163, 165, 167, 169, 174, 175, 177, 178, 179, 180]);

        $this->createImages($school, 'fake/akmi-', 1, 9);
        $this->createUsers($school, 'students', [1, 2, 3]);
        $this->createUsers($school, 'teachers', [12, 13, 14, 15]);
        $this->createScholarship(3, 2, 600, 4, 2, 1, 1, 1);
        $this->createScholarship(3, 1, 40, 8, 2, 2, 1, 2);
        $this->createScholarship(3, 2, 1000, 33, 3, 1, 1, 3);
        $this->createScholarship(3, 1, 90, 34, 2, 4, 1, 4);
        $this->createScholarship(3, 2, 400, 86, 2, 5, 1, 0);
        $this->createScholarship(3, 1, 50, 108, 2, 1, 1, 5);

        /*===============  4 Εκπαιδευτήρια Βασιλειάδη ================*/
        $school = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Εκπαιδευτήρια Βασιλειάδη', 'email' => 'info@vassiliadis.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school'])->id,
            'address' => '12o χλμ Θεσ/νίκης-Μουδανιών, Θέρμη',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310475958,
            'type_id' => 6,
            'website' => 'vassiliadis.edu.gr',
            'approved' => 1,
            'logo' => 'fake/vasileiadi-logo.png',
        ]);

        $this->createStudy($school, [423, 424, 425]);
        $this->createImages($school, 'fake/vasileiadi-', 1, 6);
        $this->createUsers($school, 'students', [1, 2, 3, 4, 4, 5]);
        $this->createUsers($school, 'teachers', [12, 13, 14, 15]);
        $this->createScholarship(4, 2, 400, 423, 4, 1, 1, 1);
        $this->createScholarship(4, 1, 30, 424, 5, 2, 1, 0);
        $this->createScholarship(4, 2, 300, 425, 6, 1, 1, 3);

        /*===============  5 Εκπαιδευτήρια Φρυγανιώτη ================*/
        $school = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Εκπαιδευτήρια Φρυγανιώτη', 'email' => 'info@fryganiotis.gr', 'password' => bcrypt('123456'), 'role' => 'school'])->id,
            'address' => 'Περιοχή Νοσ. Παπαγεωργίου, Πολίχνη',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310692940,
            'type_id' => 6,
            'website' => 'fryganiotis.gr',
            'approved' => 1,
            'logo' => 'fake/fryganioti-logo.png',
        ]);

        $this->createStudy($school, [423, 424, 425]);
        $this->createImages($school, 'fake/fryganioti-', 1, 8);
        $this->createUsers($school, 'students', [1, 2, 3, 4, 4, 5]);
        $this->createUsers($school, 'teachers', [12, 13, 14, 15]);
        $this->createScholarship(5, 2, 500, 423, 4, 1, 1, 0);
        $this->createScholarship(5, 1, 30, 424, 5, 2, 1, 0);
        $this->createScholarship(5, 2, 200, 425, 6, 1, 1, 0);

        /*===============   6 NYC   ================*/
        $school = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'New York College', 'email' => 'nycth@nyc.gr', 'password' => bcrypt('123456'), 'role' => 'school'])->id,
            'address' => '38 Amalias Avenue, Syntagma',
            'city' => 'Αθήνα',
            'phone' => 2103225961,
            'type_id' => 1,
            'website' => 'nyc.gr',
            'approved' => 1,
            'logo' => 'fake/newyork-logo.png',
        ]);

        $this->createImages($school, 'fake/newyork-', 1, 5);
        $this->createStudy($school, [211, 212, 213, 214, 215, 216, 217, 218, 219, 220, 227, 234, 235, 237, 242, 243, 247, 248, 250, 252, 258, 262, 265, 270, 271, 272, 273, 274, 295, 296, 297,
            313, 317, 318, 319, 320, 321, 325, 329, 322, 332, 333, 334, 346, 347, 352]);
        $this->createUsers($school, 'students', [1, 2, 3, 4, 5]);
        $this->createUsers($school, 'teachers', [11, 12, 13]);
        $this->createScholarship(6, 1, 30, 234, 1, 1, 1, 1);
        $this->createScholarship(6, 2, 900, 270, 1, 2, 2, 2);
        $this->createScholarship(6, 1, 40, 296, 1, 4, 2, 0);
        $this->createScholarship(6, 2, 400, 352, 3, 3, 2, 1);

        /*===============  7 Φροντιστήρια Μ.Ε.Υποδομή ================*/
        $school = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Φροντιστήρια Υποδομή', 'email' => 'info@ypodomi.com', 'password' => bcrypt('123456'), 'role' => 'school'])->id,
            'address' => 'Κουγιουμτζίδη 7',
            'city' => 'Γιαννιτσά, Πέλλας',
            'phone' => 2382027799,
            'type_id' => 3,
            'website' => 'ypodomi.com',
            'approved' => 1,
            'logo' => 'fake/ypodomi-logo.png',
        ]);

        $this->createStudy($school, [353, 354, 355, 356, 357, 358, 359, 426, 427, 428, 429]);
        $this->createImages($school, 'fake/ypodomi-', 1, 6);
        $this->createUsers($school, 'students', [1, 2, 3, 4, 4, 5]);
        $this->createUsers($school, 'teachers', [12, 13, 14, 15]);
        $this->createScholarship(7, 2, 400, 353, 5, 1, 1, 1);
        $this->createScholarship(7, 1, 30, 356, 6, 2, 1, 0);
        $this->createScholarship(7, 2, 300, 358, 6, 4, 3, 3);

        /*===============  8 Εκπαιδευτήρια Απόστολος Παύλος  ================*/
        $school = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Εκπαιδευτήρια Απόστολος Παύλος', 'email' => 'gymnasio@eap.edu.gr', 'password' => bcrypt('123456'), 'role' => 'school'])->id,
            'address' => 'Κένεντι 119, Πυλαία',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310329540,
            'type_id' => 7,
            'website' => 'eap.edu.gr',
            'approved' => 1,
            'logo' => 'fake/eap-logo.png',
        ]);

        $this->createStudy($school, [430, 431, 432]);
        $this->createImages($school, 'fake/eap-', 1, 8);
        $this->createUsers($school, 'students', [1, 2, 3, 4, 4, 5]);
        $this->createUsers($school, 'teachers', [12, 13, 14, 15]);
        $this->createScholarship(8, 2, 400, 430, 13, 1, 1, 1);
        $this->createScholarship(8, 1, 30, 431, 14, 2, 1, 0);
        $this->createScholarship(8, 2, 300, 432, 15, 1, 1, 3);

        /*===============  9 Ευρωγνώση Τσιμισκή ================*/
        $school = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Ευρωγνώση Τσιμισκή', 'email' => 'tsimiski@eurognosi.info', 'password' => bcrypt('123456'), 'role' => 'school'])->id,
            'address' => 'Τσιμισκή 102 & Παύλου Μελά',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310262255,
            'type_id' => 4,
            'website' => 'eurognosi.com',
            'approved' => 1,
            'logo' => 'fake/eurognosi-logo.png',
        ]);

        $this->createStudy($school, [360, 361, 362, 363, 371, 372, 373, 382, 384, 387, 388, 390]);
        $this->createImages($school, 'fake/eurognosi-', 1, 6);
        $this->createUsers($school, 'students', [1, 2, 3, 4, 4, 5]);
        $this->createUsers($school, 'teachers', [12, 13, 14, 15]);
        $this->createScholarship(9, 2, 400, 360, 22, 1, 1, 1);
        $this->createScholarship(9, 1, 30, 372, 23, 2, 1, 0);
        $this->createScholarship(9, 2, 300, 373, 23, 1, 1, 3);
        $this->createScholarship(9, 3, 2, 390, 24, 1, 1, 3);

        /*===============  10 Danza Fuerte ================*/
        $school = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Danza Fuerte', 'email' => 'danzafuerte@gmail.com', 'password' => bcrypt('123456'), 'role' => 'school'])->id,
            'address' => 'Αριστοτέλους 23, Κέντρο',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310262255,
            'type_id' => 10,
            'website' => 'danzafuerte.gr',
            'approved' => 1,
            'logo' => 'fake/danzafuerte-logo.png',
        ]);

        $this->createStudy($school, [393, 395, 396, 397, 402, 403, 409, 410, 413, 414, 415, 422]);
        $this->createImages($school, 'fake/danzafuerte-', 1, 6);
        $this->createUsers($school, 'students', [1, 2, 3, 4, 4, 5]);
        $this->createUsers($school, 'teachers', [12, 13, 14, 15]);
        $this->createScholarship(10, 2, 100, 393, 25, 1, 1, 1);
        $this->createScholarship(10, 1, 10, 397, 25, 2, 1, 0);
        $this->createScholarship(10, 2, 200, 410, 26, 1, 1, 3);
        $this->createScholarship(10, 3, 1, 422, 27, 1, 1, 3);

        /*===============  11 Αδαμάντιος Σχολή ================*/
        $school = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => 'Αδαμάντιος Σχολή', 'email' => 'info@adamantios.gr', 'password' => bcrypt('123456'), 'role' => 'school'])->id,
            'address' => 'Λεωφ. Γεωργικής Σχολής 44, Πυλαία',
            'city' => 'Θεσσαλονίκη',
            'phone' => 2310472474,
            'type_id' => 8,
            'website' => 'adamantios.gr',
            'approved' => 1,
            'logo' => 'fake/adamantios-logo.png',
        ]);

        $this->createStudy($school, [433, 434, 435, 436, 437, 438]);
        $this->createImages($school, 'fake/adamantios-', 1, 6);
        $this->createUsers($school, 'students', [1, 2, 3, 4, 4, 5]);
        $this->createUsers($school, 'teachers', [12, 13, 14, 15]);
        $this->createScholarship(11, 2, 100, 433, 16, 2, 1, 1);
        $this->createScholarship(11, 1, 10, 434, 16, 2, 1, 0);
        $this->createScholarship(11, 2, 200, 437, 20, 1, 1, 3);
        $this->createScholarship(11, 1, 30, 438, 21, 2, 1, 2);

        for ($i = 0; $i < 9; $i++) {
            factory(App\Models\School::class)->create(['user_id' => factory(App\User::class)->create(['role' => 'school'])->id]);
        }

        factory(App\Models\Student::class, 30)->create();
        factory(App\Models\Teacher::class, 20)->create();
    }

    public function createImages($school, $path, $from, $until)
    {
        for ($i = $from; $i <= $until; $i++) {
            $image = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => $path . 'pic' . $i . '.jpg', 'full_path' => $path . 'pic' . $i . '.jpg']);
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
        $scholarship->end_at = Carbon::now();
        $scholarship->save();
    }

}
