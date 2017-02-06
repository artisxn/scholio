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
            'name' => 'American College of Thessaloniki',
            'user_id' => factory(App\User::class)->create(['name' => 'Apostolos', 'email' => 'apostolos@scholio.dev', 'password' => bcrypt('123456'), 'role' => 'school'])->id,
            'address' => 'Σεβενίδη, 17, Πυλαία',
            'city' => 'Θεσσαλονίκη',
            'email' => 'webmaster@act.edu',
            'phone' => 2310398398,
            'type_id' => 1,
            'website' => 'act.edu',
            'approved' => 1,
            'logo_id' => factory(App\Models\Image::class)->create([
                'type' => 'Logo',
                'path' => 'fake/act-logo.png',
                'full_path' => 'fake/act-logo.png',
                'name' => 'fake/act-logo.png',
                'extension' => 'png',
            ])->id,
        ]);
        $image1 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/act-pic1.jpg', 'full_path' => 'fake/act-pic1.jpg']);
        $image2 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/act-pic2.jpg', 'full_path' => 'fake/act-pic2.jpg']);
        $image3 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/act-pic3.jpg', 'full_path' => 'fake/act-pic3.jpg']);
        $image4 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/act-pic4.jpg', 'full_path' => 'fake/act-pic4.jpg']);
        $image5 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/act-pic5.jpg', 'full_path' => 'fake/act-pic5.jpg']);
        $image6 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/act-pic6.jpg', 'full_path' => 'fake/act-pic6.jpg']);
        $school->image()->toggle($image1);
        $school->image()->toggle($image2);
        $school->image()->toggle($image3);
        $school->image()->toggle($image4);
        $school->image()->toggle($image5);
        $school->image()->toggle($image6);

        $this->createStudy($school, [206, 207, 208, 209, 210, 253, 252, 279, 306, 308, 309, 312, 324]);
        $this->createUsers($school, 'students', [1, 2]);
        $this->createUsers($school, 'teachers', [11, 12]);
        $this->createScholarship(1, 1, 20, 207, 1, 1, 1, 1);
        $this->createScholarship(1, 2, 800, 310, 3, 2, 2, 2);
        $this->createScholarship(1, 1, 50, 210, 1, 3, 2, 1);
        $this->createScholarship(1, 2, 500, 209, 1, 3, 2, 1);

        /*===============  2 AMC ================*/
        $school = factory(App\Models\School::class)->create([
            'name' => 'Μητροπολιτικό Κολλέγιο Θεσσαλονίκης',
            'user_id' => factory(App\User::class)->create(['name' => 'kostis', 'email' => 'kostis@scholio.dev', 'password' => bcrypt('123456'), 'role' => 'school'])->id,
            'address' => 'Ελ. Βενιζέλου 14 & Τσιμισκή',
            'city' => 'Θεσσαλονίκη',
            'email' => 'info@metropolitan.edu.gr',
            'phone' => 2310241010,
            'type_id' => 1,
            'website' => 'mitropolitiko.edu.gr',
            'approved' => 1,
            'logo_id' => factory(App\Models\Image::class)->create([
                'type' => 'Logo',
                'path' => 'fake/amc-logo.png',
                'full_path' => 'fake/amc-logo.png',
                'name' => 'fake/amc-logo.png',
                'extension' => 'png',
            ])->id,
        ]);
        $image1 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/amc-pic1.jpg', 'full_path' => 'fake/amc-pic1.jpg']);
        $image2 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/amc-pic2.jpg', 'full_path' => 'fake/amc-pic2.jpg']);
        $image3 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/amc-pic3.jpg', 'full_path' => 'fake/amc-pic3.jpg']);
        $image4 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/amc-pic4.jpg', 'full_path' => 'fake/amc-pic4.jpg']);
        $image5 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/amc-pic5.jpg', 'full_path' => 'fake/amc-pic5.jpg']);
        $image6 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/amc-pic6.jpg', 'full_path' => 'fake/amc-pic6.jpg']);
        $image7 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/amc-pic7.jpg', 'full_path' => 'fake/amc-pic7.jpg']);
        $school->image()->toggle($image1);
        $school->image()->toggle($image2);
        $school->image()->toggle($image3);
        $school->image()->toggle($image4);
        $school->image()->toggle($image5);
        $school->image()->toggle($image6);
        $school->image()->toggle($image7);

        $this->createStudy($school, [202, 204, 205, 240, 241, 244, 245, 246, 249, 250, 255, 256, 257, 258, 259, 260, 261,
            266, 267, 268, 269, 270, 281, 282, 283, 284, 285, 286, 287, 327, 328, 329, 330, 331, 332, 345, 346, 349, 350, 351, 352]);
        $this->createUsers($school, 'students', [4, 5]);
        $this->createUsers($school, 'teachers', [11, 12]);
        $this->createScholarship(2, 2, 500, 240, 1, 1, 1, 5);
        $this->createScholarship(2, 1, 30, 350, 3, 2, 1, 5);

        /*===============  3 AKMH ================*/
        $school = factory(App\Models\School::class)->create([
            'name' => 'ΑΚΜΗ',
            'user_id' => factory(App\User::class)->create(['name' => 'Christos', 'email' => 'christos@scholio.dev', 'password' => bcrypt('123456'), 'role' => 'school'])->id,
            'address' => 'Τσιμισκή 14',
            'city' => 'Θεσσαλονίκη',
            'email' => 'info@iek-akmi.edu.gr',
            'phone' => 2310260200,
            'type_id' => 2,
            'website' => 'iek-akmi.edu.gr',
            'approved' => 1,
            'logo_id' => factory(App\Models\Image::class)->create([
                'type' => 'Logo',
                'path' => 'fake/akmi-logo.png',
                'full_path' => 'fake/akmi-logo.png',
                'name' => 'fake/akmi-logo.png',
                'extension' => 'png',
            ])->id,
        ]);

        $this->createStudy($school, [1, 4, 6, 8, 11, 13, 15, 17, 18, 19, 20, 22, 24, 25, 28, 29,
            33, 34, 41, 44, 46, 47, 38, 50, 51, 52, 54, 55, 56, 57, 58, 59,
            65, 67, 69, 71, 73, 77, 78, 79,
            81, 86, 89, 90, 91, 94, 96, 97, 98,
            106, 108, 110, 113, 124, 125, 127, 130, 132, 134, 136, 140, 141, 142,
            146, 147, 149, 151, 155, 157, 159, 161, 163, 165, 167, 169, 174, 175, 177, 178, 179, 180]);

        $image1 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/akmi-pic1.jpg', 'full_path' => 'fake/akmi-pic1.jpg']);
        $image2 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/akmi-pic2.jpg', 'full_path' => 'fake/akmi-pic2.jpg']);
        $image3 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/akmi-pic3.jpg', 'full_path' => 'fake/akmi-pic3.jpg']);
        $image4 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/akmi-pic4.jpg', 'full_path' => 'fake/akmi-pic4.jpg']);
        $image5 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/akmi-pic5.jpg', 'full_path' => 'fake/akmi-pic5.jpg']);
        $image6 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/akmi-pic6.jpg', 'full_path' => 'fake/akmi-pic6.jpg']);
        $image7 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/akmi-pic7.jpg', 'full_path' => 'fake/akmi-pic7.jpg']);
        $image8 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/akmi-pic8.jpg', 'full_path' => 'fake/akmi-pic8.jpg']);
        $image9 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/akmi-pic9.jpg', 'full_path' => 'fake/akmi-pic9.jpg']);
        $school->image()->toggle($image1);
        $school->image()->toggle($image2);
        $school->image()->toggle($image3);
        $school->image()->toggle($image4);
        $school->image()->toggle($image5);
        $school->image()->toggle($image6);
        $school->image()->toggle($image7);
        $school->image()->toggle($image8);
        $school->image()->toggle($image9);
        $this->createUsers($school, 'students', [1]);
        $this->createUsers($school, 'teachers', [12, 13, 14, 15]);
        $this->createScholarship(3, 2, 600, 4, 2, 1, 1, 1);
        $this->createScholarship(3, 1, 40, 8, 2, 2, 1, 2);
        $this->createScholarship(3, 2, 1000, 33, 3, 1, 1, 3);
        $this->createScholarship(3, 1, 90, 34, 2, 4, 1, 4);
        $this->createScholarship(3, 2, 400, 86, 2, 5, 1, 0);
        $this->createScholarship(3, 1, 50, 108, 2, 1, 1, 5);

        /*===============  4 Εκπαιδευτήρια Βασιλειάδη ================*/
        $school = factory(App\Models\School::class)->create([
            'name' => 'Εκπαιδευτήρια Βασιλειάδη',
            'user_id' => factory(App\User::class)->create(['name' => 'Petros', 'email' => 'petros@scholio.dev', 'password' => bcrypt('123456'), 'role' => 'school'])->id,
            'address' => '12o χλμ Θεσ/νίκης-Μουδανιών, Θέρμη',
            'city' => 'Θεσσαλονίκη',
            'email' => 'info@vassiliadis.edu.gr',
            'phone' => 2310475958,
            'type_id' => 6,
            'website' => 'vassiliadis.edu.gr',
            'approved' => 1,
            'logo_id' => factory(App\Models\Image::class)->create([
                'type' => 'Logo',
                'path' => 'fake/vasileiadi-logo.png',
                'full_path' => 'fake/vasileiadi-logo.png',
                'name' => 'fake/vasileiadi-logo.png',
                'extension' => 'png',
            ])->id,
        ]);

        $this->createStudy($school, [423, 424, 425]);

        $image1 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/vasileiadi-pic1.jpg', 'full_path' => 'fake/vasileiadi-pic1.jpg']);
        $image2 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/vasileiadi-pic2.jpg', 'full_path' => 'fake/vasileiadi-pic2.jpg']);
        $image3 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/vasileiadi-pic3.jpg', 'full_path' => 'fake/vasileiadi-pic3.jpg']);
        $image4 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/vasileiadi-pic4.jpg', 'full_path' => 'fake/vasileiadi-pic4.jpg']);
        $image5 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/vasileiadi-pic5.jpg', 'full_path' => 'fake/vasileiadi-pic5.jpg']);
        $image6 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/vasileiadi-pic6.jpg', 'full_path' => 'fake/vasileiadi-pic6.jpg']);
        $school->image()->toggle($image1);
        $school->image()->toggle($image2);
        $school->image()->toggle($image3);
        $school->image()->toggle($image4);
        $school->image()->toggle($image5);
        $school->image()->toggle($image6);
        $this->createUsers($school, 'students', [1, 2, 3, 4, 4, 5]);
        $this->createUsers($school, 'teachers', [12, 13, 14, 15]);
        $this->createScholarship(4, 2, 400, 423, 4, 1, 1, 1);
        $this->createScholarship(4, 1, 30, 424, 5, 2, 1, 0);
        $this->createScholarship(4, 2, 300, 425, 6, 1, 1, 3);

        /*===============  5 Εκπαιδευτήρια Φρυγανιώτη ================*/
        $school = factory(App\Models\School::class)->create([
            'name' => 'Εκπαιδευτήρια Φρυγανιώτη',
            'user_id' => factory(App\User::class)->create(['name' => 'Giannis', 'email' => 'giannis@scholio.dev', 'password' => bcrypt('123456'), 'role' => 'school'])->id,
            'address' => 'Περιοχή Νοσ. Παπαγεωργίου, Πολίχνη',
            'city' => 'Θεσσαλονίκη',
            'email' => 'info@fryganiotis.gr',
            'phone' => 2310692940,
            'type_id' => 6,
            'website' => 'fryganiotis.gr',
            'approved' => 1,
            'logo_id' => factory(App\Models\Image::class)->create([
                'type' => 'Logo',
                'path' => 'fake/fryganioti-logo.png',
                'full_path' => 'fake/fryganioti-logo.png',
                'name' => 'fake/fryganioti-logo.png',
                'extension' => 'png',
            ])->id,
        ]);

        $this->createStudy($school, [423, 424, 425]);

        $image1 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/fryganioti-pic1.jpg', 'full_path' => 'fake/fryganioti-pic1.jpg']);
        $image2 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/fryganioti-pic2.jpg', 'full_path' => 'fake/fryganioti-pic2.jpg']);
        $image3 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/fryganioti-pic3.jpg', 'full_path' => 'fake/fryganioti-pic3.jpg']);
        $image4 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/fryganioti-pic4.jpg', 'full_path' => 'fake/fryganioti-pic4.jpg']);
        $image5 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/fryganioti-pic5.jpg', 'full_path' => 'fake/fryganioti-pic5.jpg']);
        $image6 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/fryganioti-pic6.jpg', 'full_path' => 'fake/fryganioti-pic6.jpg']);
        $image7 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/fryganioti-pic7.jpg', 'full_path' => 'fake/fryganioti-pic7.jpg']);
        $image8 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/fryganioti-pic8.jpg', 'full_path' => 'fake/fryganioti-pic8.jpg']);
        $school->image()->toggle($image1);
        $school->image()->toggle($image2);
        $school->image()->toggle($image3);
        $school->image()->toggle($image4);
        $school->image()->toggle($image5);
        $school->image()->toggle($image6);
        $school->image()->toggle($image7);
        $school->image()->toggle($image8);
        $this->createUsers($school, 'students', [1, 2, 3, 4, 4, 5]);
        $this->createUsers($school, 'teachers', [12, 13, 14, 15]);
        $this->createScholarship(5, 2, 500, 423, 4, 1, 1, 0);
        $this->createScholarship(5, 1, 30, 424, 5, 2, 1, 0);
        $this->createScholarship(5, 2, 200, 425, 6, 1, 1, 0);

        /*===============   6 NYC   ================*/
        $school = factory(App\Models\School::class)->create([
            'name' => 'New York College',
            'user_id' => factory(App\User::class)->create(['name' => 'Pakis', 'email' => 'pakis@scholio.dev', 'password' => bcrypt('123456'), 'role' => 'school'])->id,
            'address' => '38 Amalias Avenue, Syntagma',
            'city' => 'Αθήνα',
            'email' => 'nycth@nyc.gr',
            'phone' => 2103225961,
            'type_id' => 1,
            'website' => 'nyc.gr',
            'approved' => 1,
            'logo_id' => factory(App\Models\Image::class)->create([
                'type' => 'Logo',
                'path' => 'fake/newyork-logo.png',
                'full_path' => 'fake/newyork-logo.png',
                'name' => 'fake/newyork-logo.png',
                'extension' => 'png',
            ])->id,
        ]);
        $image1 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/newyork-pic1.jpg', 'full_path' => 'fake/newyork-pic1.jpg']);
        $image2 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/newyork-pic2.jpg', 'full_path' => 'fake/newyork-pic2.jpg']);
        $image3 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/newyork-pic3.jpg', 'full_path' => 'fake/newyork-pic3.jpg']);
        $image4 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/newyork-pic4.jpg', 'full_path' => 'fake/newyork-pic4.jpg']);
        $image5 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/newyork-pic5.jpg', 'full_path' => 'fake/newyork-pic5.jpg']);
        $school->image()->toggle($image1);
        $school->image()->toggle($image2);
        $school->image()->toggle($image3);
        $school->image()->toggle($image4);
        $school->image()->toggle($image5);

        $this->createStudy($school, [211, 212, 213, 214, 215, 216, 217, 218, 219, 220, 227, 234, 235, 237, 242, 243, 247, 248, 250, 252, 258, 262, 265, 270, 271, 272, 273, 274, 295, 296, 297,
            313, 317, 318, 319, 320, 321, 325, 329, 322, 332, 333, 334, 346, 347, 352]);
        $this->createUsers($school, 'students', [1, 2, 3, 4, 5]);
        $this->createUsers($school, 'teachers', [11, 12, 13]);
        $this->createScholarship(6, 1, 30, 234, 1, 1, 1, 1);
        $this->createScholarship(6, 2, 900, 270, 1, 2, 2, 2);
        $this->createScholarship(6, 1, 40, 296, 1, 4, 2, 0);
        $this->createScholarship(6, 2, 400, 352, 3, 5, 2, 1);

        /*===============  7 Φροντιστήρια Μ.Ε.Υποδομή ================*/
        $school = factory(App\Models\School::class)->create([
            'name' => 'Φροντιστήρια Υποδομή',
            'user_id' => factory(App\User::class)->create(['name' => 'Sakis', 'email' => 'sakis@scholio.dev', 'password' => bcrypt('123456'), 'role' => 'school'])->id,
            'address' => 'Κουγιουμτζίδη 7',
            'city' => 'Γιαννιτσά, Πέλλας',
            'email' => 'info@ypodomi.com',
            'phone' => 2382027799,
            'type_id' => 3,
            'website' => 'ypodomi.com',
            'approved' => 1,
            'logo_id' => factory(App\Models\Image::class)->create([
                'type' => 'Logo',
                'path' => 'fake/ypodomi-logo.png',
                'full_path' => 'fake/ypodomi-logo.png',
                'name' => 'fake/ypodomi-logo.png',
                'extension' => 'png',
            ])->id,
        ]);

        $this->createStudy($school, [353, 354, 355, 356, 357, 358, 359, 426, 427, 428, 429]);

        $image1 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/ypodomi-pic1.jpg', 'full_path' => 'fake/ypodomi-pic1.jpg']);
        $image2 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/ypodomi-pic2.jpg', 'full_path' => 'fake/ypodomi-pic2.jpg']);
        $image3 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/ypodomi-pic3.jpg', 'full_path' => 'fake/ypodomi-pic3.jpg']);
        $image4 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/ypodomi-pic4.jpg', 'full_path' => 'fake/ypodomi-pic4.jpg']);
        $image5 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/ypodomi-pic5.jpg', 'full_path' => 'fake/ypodomi-pic5.jpg']);
        $image6 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/ypodomi-pic6.jpg', 'full_path' => 'fake/ypodomi-pic6.jpg']);
        $school->image()->toggle($image1);
        $school->image()->toggle($image2);
        $school->image()->toggle($image3);
        $school->image()->toggle($image4);
        $school->image()->toggle($image5);
        $school->image()->toggle($image6);
        $this->createUsers($school, 'students', [1, 2, 3, 4, 4, 5]);
        $this->createUsers($school, 'teachers', [12, 13, 14, 15]);
        $this->createScholarship(7, 2, 400, 353, 5, 1, 1, 1);
        $this->createScholarship(7, 1, 30, 356, 6, 2, 1, 0);
        $this->createScholarship(7, 2, 300, 358, 6, 1, 1, 3);

        /*===============  8 Εκπαιδευτήρια Απόστολος Παύλος  ================*/
        $school = factory(App\Models\School::class)->create([
            'name' => 'Εκπαιδευτήρια Απόστολος Παύλος',
            'user_id' => factory(App\User::class)->create(['name' => 'Takis', 'email' => 'takis@scholio.dev', 'password' => bcrypt('123456'), 'role' => 'school'])->id,
            'address' => 'Κένεντι 119, Πυλαία',
            'city' => 'Θεσσαλονίκη',
            'email' => 'gymnasio@eap.edu.gr',
            'phone' => 2310329540,
            'type_id' => 7,
            'website' => 'eap.edu.gr',
            'approved' => 1,
            'logo_id' => factory(App\Models\Image::class)->create([
                'type' => 'Logo',
                'path' => 'fake/eap-logo.png',
                'full_path' => 'fake/eap-logo.png',
                'name' => 'fake/eap-logo.png',
                'extension' => 'png',
            ])->id,
        ]);

        $this->createStudy($school, [430, 431, 432]);

        $image1 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/eap-pic1.jpg', 'full_path' => 'fake/eap-pic1.jpg']);
        $image2 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/eap-pic2.jpg', 'full_path' => 'fake/eap-pic2.jpg']);
        $image3 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/eap-pic3.jpg', 'full_path' => 'fake/eap-pic3.jpg']);
        $image4 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/eap-pic4.jpg', 'full_path' => 'fake/eap-pic4.jpg']);
        $image5 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/eap-pic5.jpg', 'full_path' => 'fake/eap-pic5.jpg']);
        $image6 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/eap-pic6.jpg', 'full_path' => 'fake/eap-pic6.jpg']);
        $image7 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/eap-pic7.jpg', 'full_path' => 'fake/eap-pic7.jpg']);
        $image8 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/eap-pic8.jpg', 'full_path' => 'fake/eap-pic8.jpg']);
        $school->image()->toggle($image1);
        $school->image()->toggle($image2);
        $school->image()->toggle($image3);
        $school->image()->toggle($image4);
        $school->image()->toggle($image5);
        $school->image()->toggle($image6);
        $school->image()->toggle($image7);
        $school->image()->toggle($image8);
        $this->createUsers($school, 'students', [1, 2, 3, 4, 4, 5]);
        $this->createUsers($school, 'teachers', [12, 13, 14, 15]);
        $this->createScholarship(8, 2, 400, 430, 13, 1, 1, 1);
        $this->createScholarship(8, 1, 30, 431, 14, 2, 1, 0);
        $this->createScholarship(8, 2, 300, 432, 15, 1, 1, 3);

        /*===============  9 Ευρωγνώση Τσιμισκή ================*/
        $school = factory(App\Models\School::class)->create([
            'name' => 'Ευρωγνώση Τσιμισκή',
            'user_id' => factory(App\User::class)->create(['name' => 'Makis', 'email' => 'makis@scholio.dev', 'password' => bcrypt('123456'), 'role' => 'school'])->id,
            'address' => 'Τσιμισκή 102 & Παύλου Μελά',
            'city' => 'Θεσσαλονίκη',
            'email' => 'tsimiski@eurognosi.info',
            'phone' => 2310262255,
            'type_id' => 4,
            'website' => 'eurognosi.com',
            'approved' => 1,
            'logo_id' => factory(App\Models\Image::class)->create([
                'type' => 'Logo',
                'path' => 'fake/eurognosi-logo.png',
                'full_path' => 'fake/eurognosi-logo.png',
                'name' => 'fake/eurognosi-logo.png',
                'extension' => 'png',
            ])->id,
        ]);

        $this->createStudy($school, [360, 361, 362, 363, 371, 372, 373, 382, 384, 387, 388, 390]);

        $image1 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/eurognosi-pic1.jpg', 'full_path' => 'fake/eurognosi-pic1.jpg']);
        $image2 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/eurognosi-pic2.jpg', 'full_path' => 'fake/eurognosi-pic2.jpg']);
        $image3 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/eurognosi-pic3.jpg', 'full_path' => 'fake/eurognosi-pic3.jpg']);
        $image4 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/eurognosi-pic4.jpg', 'full_path' => 'fake/eurognosi-pic4.jpg']);
        $image5 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/eurognosi-pic5.jpg', 'full_path' => 'fake/eurognosi-pic5.jpg']);
        $image6 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/eurognosi-pic6.jpg', 'full_path' => 'fake/eurognosi-pic6.jpg']);
        $school->image()->toggle($image1);
        $school->image()->toggle($image2);
        $school->image()->toggle($image3);
        $school->image()->toggle($image4);
        $school->image()->toggle($image5);
        $school->image()->toggle($image6);
        $this->createUsers($school, 'students', [1, 2, 3, 4, 4, 5]);
        $this->createUsers($school, 'teachers', [12, 13, 14, 15]);
        $this->createScholarship(9, 2, 400, 360, 22, 1, 1, 1);
        $this->createScholarship(9, 1, 30, 372, 23, 2, 1, 0);
        $this->createScholarship(9, 2, 300, 373, 23, 1, 1, 3);
        $this->createScholarship(9, 3, 2, 390, 24, 1, 1, 3);

        /*===============  10 Danza Fuerte ================*/
        $school = factory(App\Models\School::class)->create([
            'name' => 'Danza Fuerte',
            'user_id' => factory(App\User::class)->create(['name' => 'Lakis', 'email' => 'lakis@scholio.dev', 'password' => bcrypt('123456'), 'role' => 'school'])->id,
            'address' => 'Αριστοτέλους 23, Κέντρο',
            'city' => 'Θεσσαλονίκη',
            'email' => 'danzafuerte@gmail.com',
            'phone' => 2310262255,
            'type_id' => 10,
            'website' => 'danzafuerte.gr',
            'approved' => 1,
            'logo_id' => factory(App\Models\Image::class)->create([
                'type' => 'Logo',
                'path' => 'fake/danzafuerte-logo.png',
                'full_path' => 'fake/danzafuerte-logo.png',
                'name' => 'fake/danzafuerte-logo.png',
                'extension' => 'png',
            ])->id,
        ]);

        $this->createStudy($school, [393, 395, 396, 397, 402, 403, 409, 410, 413, 414, 415, 422]);

        $image1 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/danzafuerte-pic1.jpg', 'full_path' => 'fake/danzafuerte-pic1.jpg']);
        $image2 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/danzafuerte-pic2.jpg', 'full_path' => 'fake/danzafuerte-pic2.jpg']);
        $image3 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/danzafuerte-pic3.jpg', 'full_path' => 'fake/danzafuerte-pic3.jpg']);
        $image4 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/danzafuerte-pic4.jpg', 'full_path' => 'fake/danzafuerte-pic4.jpg']);
        $image5 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/danzafuerte-pic5.jpg', 'full_path' => 'fake/danzafuerte-pic5.jpg']);
        $image6 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/danzafuerte-pic6.jpg', 'full_path' => 'fake/danzafuerte-pic6.jpg']);
        $school->image()->toggle($image1);
        $school->image()->toggle($image2);
        $school->image()->toggle($image3);
        $school->image()->toggle($image4);
        $school->image()->toggle($image5);
        $school->image()->toggle($image6);
        $this->createUsers($school, 'students', [1, 2, 3, 4, 4, 5]);
        $this->createUsers($school, 'teachers', [12, 13, 14, 15]);
        $this->createScholarship(10, 2, 100, 393, 25, 1, 1, 1);
        $this->createScholarship(10, 1, 10, 397, 25, 2, 1, 0);
        $this->createScholarship(10, 2, 200, 410, 26, 1, 1, 3);
        $this->createScholarship(10, 3, 1, 422, 27, 1, 1, 3);

        /*===============  11 Αδαμάντιος Σχολή ================*/
        $school = factory(App\Models\School::class)->create([
            'name' => 'Αδαμάντιος Σχολή ',
            'user_id' => factory(App\User::class)->create(['name' => 'Nakis', 'email' => 'nakis@scholio.dev', 'password' => bcrypt('123456'), 'role' => 'school'])->id,
            'address' => 'Λεωφ. Γεωργικής Σχολής 44, Πυλαία',
            'city' => 'Θεσσαλονίκη',
            'email' => 'info@adamantios.gr',
            'phone' => 2310472474,
            'type_id' => 8,
            'website' => 'adamantios.gr',
            'approved' => 1,
            'logo_id' => factory(App\Models\Image::class)->create([
                'type' => 'Logo',
                'path' => 'fake/adamantios-logo.png',
                'full_path' => 'fake/adamantios-logo.png',
                'name' => 'fake/adamantios-logo.png',
                'extension' => 'png',
            ])->id,
        ]);

        $this->createStudy($school, [433, 434, 435, 436, 437, 438]);

        $image1 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/adamantios-pic1.jpg', 'full_path' => 'fake/adamantios-pic1.jpg']);
        $image2 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/adamantios-pic2.jpg', 'full_path' => 'fake/adamantios-pic2.jpg']);
        $image3 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/adamantios-pic3.jpg', 'full_path' => 'fake/adamantios-pic3.jpg']);
        $image4 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/adamantios-pic4.jpg', 'full_path' => 'fake/adamantios-pic4.jpg']);
        $image5 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/adamantios-pic5.jpg', 'full_path' => 'fake/adamantios-pic5.jpg']);
        $image6 = factory(App\Models\Image::class)->create(['type' => 'Image', 'path' => 'fake/adamantios-pic6.jpg', 'full_path' => 'fake/adamantios-pic6.jpg']);
        $school->image()->toggle($image1);
        $school->image()->toggle($image2);
        $school->image()->toggle($image3);
        $school->image()->toggle($image4);
        $school->image()->toggle($image5);
        $school->image()->toggle($image6);
        $this->createUsers($school, 'students', [1, 2, 3, 4, 4, 5]);
        $this->createUsers($school, 'teachers', [12, 13, 14, 15]);
        $this->createScholarship(11, 2, 100, 433, 16, 2, 1, 1);
        $this->createScholarship(11, 1, 10, 434, 16, 2, 1, 0);
        $this->createScholarship(11, 2, 200, 437, 20, 1, 1, 3);
        $this->createScholarship(11, 1, 30, 438, 21, 2, 1, 2);

        factory(App\User::class, 15)->create(['role' => 'student']);

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
