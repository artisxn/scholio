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

        /*===============   ACT   ================*/
        $school = factory(App\Models\School::class)->create([
            'name' => 'American College of Thessaloniki',
            'user_id' => factory(App\User::class)->create(['name' => 'apostolos', 'email' => 'apostolos@scholio.dev', 'password' => bcrypt('123456'), 'role' => 'school'])->id,
            'address' => 'Σεβενίδη, 17, Πυλαία',
            'city' => 'Θεσσαλονίκη',
            'email' => 'webmaster@act.edu',
            'phone' => 2310398398,
            'type_id' => 1,
            'website' => 'www.act.edu',
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

        $this->createStudy($school, [206,207,208,209,210, 253,252, 279, 306,308,309,312,324]);
        $this->createUsers($school, 'students', [1, 2]);
        $this->createUsers($school, 'teachers', [11, 12]);
        $this->createScholarship(1,1,20,207,1,1,1,1);
        $this->createScholarship(1,2,800,310,3,2,2,2);
        $this->createScholarship(1,1,50,210,1,3,2,1);
        $this->createScholarship(1,2,500,209,1,3,2,1);

        /*===============  AMC ================*/
        $school = factory(App\Models\School::class)->create([
            'name' => 'Μητροπολιτικό Κολλέγιο Θεσσαλονίκης',
            'user_id' => factory(App\User::class)->create(['name' => 'kostis', 'email' => 'kostis@scholio.dev', 'password' => bcrypt('123456'), 'role' => 'school'])->id,
            'address' => 'Ελ. Βενιζέλου 14 & Τσιμισκή',
            'city' => 'Θεσσαλονίκη',
            'email' => 'info@metropolitan.edu.gr',
            'phone' => 2310241010,
            'type_id' => 1,
            'website' => 'www.mitropolitiko.edu.gr',
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


        $this->createStudy($school, [202,204,205,240,241,244,245,246,249,250,255,256,257,258,259,260,261,
        266,267,268,269,270, 281,282,283,284,285,286,287,  327,328,329, 330,331,332, 345,346, 349,350,351,352]);
        $this->createUsers($school, 'students', [4,5]);
        $this->createUsers($school, 'teachers', [11, 12]);
        $this->createScholarship(2,2,500,240,1,1,1,5);
        $this->createScholarship(2,1,30,350,3,2 ,1,5);



        /*===============  AKMH ================*/
        $school = factory(App\Models\School::class)->create([
            'name' => 'ΑΚΜΗ',
            'user_id' => factory(App\User::class)->create(['name' => 'Christos', 'email' => 'christos@scholio.dev', 'password' => bcrypt('123456'), 'role' => 'school'])->id,
            'address' => 'Τσιμισκή 14',
            'city' => 'Θεσσαλονίκη',
            'email' => 'info@iek-akmi.edu.gr',
            'phone' => 2310260200,
            'type_id' => 2,
            'website' => 'www.iek-akmi.edu.gr',
            'approved' => 1,
            'logo_id' => factory(App\Models\Image::class)->create([
                'type' => 'Logo',
                'path' => 'fake/akmi-logo.png',
                'full_path' => 'fake/akmi-logo.png',
                'name' => 'fake/akmi-logo.png',
                'extension' => 'png',
            ])->id,
        ]);

        $this->createStudy($school, [1,4,6,8,11,13,15,17,18,19,20,22,24,25,28,29,
        33,34,41,44,46,47,38,50,51,52,54,55,56,57,58,59,
        65,67,69,71,73,77,78,79,
        81,86,89,90,91,94,96,97,98,
        106,108,110,113, 124,125,127, 130,132,134, 136, 140,141,142,
        146,147,149,151,  155,157,159,161, 163,165,167,169, 174,175,177,178,179,180 ]);


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
        $this->createUsers($school, 'students', [1,2,3,4,4,5]);
        $this->createUsers($school, 'teachers', [12,13,14,15]);
        $this->createScholarship(3,2,600,4,2,1,1,1);
        $this->createScholarship(3,1,40,8,2,2,1,2);
        $this->createScholarship(3,2,1000,33,3,1,1,3);
        $this->createScholarship(3,1,90,34,2,4 ,1,4);
        $this->createScholarship(3,2,400,86,2,5,1,5);
        $this->createScholarship(3,1,50,108,2,1 ,1,5);



        /*===============  Εκπαιδευτήρια Βασιλειάδη ================*/
        $school = factory(App\Models\School::class)->create([
            'name' => 'Εκπαιδευτήρια Βασιλειάδη',
            'user_id' => factory(App\User::class)->create(['name' => 'Petros', 'email' => 'petros@scholio.dev', 'password' => bcrypt('123456'), 'role' => 'school'])->id,
            'address' => '12o χλμ Θεσ/νίκης-Μουδανιών, Θέρμη',
            'city' => 'Θεσσαλονίκη',
            'email' => 'info@vassiliadis.edu.gr',
            'phone' => 2310475958,
            'type_id' => 6,
            'website' => 'www.vassiliadis.edu.gr',
            'approved' => 1,
            'logo_id' => factory(App\Models\Image::class)->create([
                'type' => 'Logo',
                'path' => 'fake/vasileiadi-logo.png',
                'full_path' => 'fake/vasileiadi-logo.png',
                'name' => 'fake/vasileiadi-logo.png',
                'extension' => 'png',
            ])->id,
        ]);

        $this->createStudy($school, [423,424,425]);


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
        $this->createUsers($school, 'students', [1,2,3,4,4,5]);
        $this->createUsers($school, 'teachers', [12,13,14,15]);
        $this->createScholarship(4,2,400,423,4,1,1,1);
        $this->createScholarship(4,1,30,424,5,2,1,2);
        $this->createScholarship(4,2,300,425,6,1,1,3);


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

    public function createScholarship($id,$fid,$fam,$sid,$lid,$crid,$wid)
    {
        $scholarship = new Scholarship;
        $scholarship->school_id = $id;
        $scholarship->financial_id = $fid;
        $scholarship->financial_amount = $fam;
        $scholarship->study_id = $sid;
        $scholarship->level_id = $lid;
        $scholarship->criteria_id = $crid;
        $scholarship->winner_id = $wid;
        $scholarship->end_at = Carbon::now();
        $scholarship->save();
    }


}
