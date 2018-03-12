<?php

use App\Key;
use App\Models\Card;
use App\Models\School;
use App\Models\SchoolSetting;
use App\Models\Subscription;
use App\Models\University;
use App\Scholio\Scholio;
use App\User;
use Illuminate\Database\Seeder;
use App\Models\Cv;
use App\Models\Student;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SchoolTypesTableSeeder::class);
        $this->call(LevelsTableSeeder::class);
        $this->call(FinancialsTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
        $this->call(StudiesTableSeeder::class);
        $this->call(CriteriasTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(AdmissionCategoryTableSeeder::class);
        $this->call(TagTableSeeder::class);
        // $this->call(FakeSeeder::class);
        $this->call(DonorSeeder::class);
        $this->call(TeacherDetailsTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(SocialLinksTableSeeder::class);
        $this->call(DummyScholarshipsTableSeeder::class);
        $this->call(SubscriptionPlansSeederTable::class);

        $keys = new Key;
        $keys->login = 1;
        $keys->dropdownLogin = 1;
        $keys->soon = 1;
        $keys->save();

        foreach (School::all() as $school) {
            $this->createCards($school);
            $this->addFakeCards($school);
            $university = new University;
            $university->name = $school->admin->name;
            $university->save();

            $subscription = new Subscription;
            $subscription->user_id = $school->admin->id;
            if ($school->id < 7) {
                $subscription->plan_id = 2;
            }
            $subscription->save();

            $settings = new SchoolSetting;
            $settings->school_id = $school->id;
            if ($school->id < 7) {
                $settings->reviews = true;
                $settings->teachers = true;
                $settings->statistics = true;
            }
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

        // Only for development
        // DB::table('scholarship_limits')->truncate();
        // foreach (School::all() as $school) {
        //     $scholarshipLimit = new ScholarshipLimit;
        //     $scholarshipLimit->school_id = $school->id;
        //     $scholarshipLimit->save();
        // }

        // Create Admin Users
        $user1 = new User;
        $user1->name = 'Apostolos Siokas';
        $user1->email = 'apostolos@schol.io';
        $user1->password = 'Scholio13apostolos';
        $user1->role = 'admin';
        $user1->status = 'admin';
        $user1->username = 'siokas';
        $user1->save();

        $user1 = new User;
        $user1->name = 'Kostis Freiderikos';
        $user1->email = 'kostis@schol.io';
        $user1->password = 'Scholio13kostis';
        $user1->role = 'admin';
        $user1->status = 'admin';
        $user1->username = 'kfrei';
        $user1->save();
    }

    public function addFakeCards($school)
    {
        for ($i = 1; $i <= (16 - (int) $school->id); $i++) {
            $card = factory(App\Models\Card::class)->create(['user_id' => $school->id]);
            $this->createNonConnectedStudents($card);
        }
    }

    public function createNonConnectedStudents($card){
        $user = new User;
        $user->name = $card->name;
        $user->email = $card->email;
        $user->password = bcrypt('123456');
        $user->role = 'student';
        $user->save();

        $student = new Student();
        $student->user_id = $user->id;
        $student->fname = $card->fname;
        $student->lname = $card->lname;
        $student->gender = $card->gender;
        $student->save();

        $cv = new Cv;
        $cv->user_id = $user->id;
        $cv->save();
    }

    public function createCards($school)
    {
        foreach ($school->students as $student) {
            $card = new Card;
            $card->user_id = $school->admin->id;
            $card->student_id = $student->id;
            $card->name = $student->name;
            $card->email = $student->email;
            $card->fname = $student->info->fname;
            $card->lname = $student->info->lname;
            $card->status = $student->pivot->status;
            $card->student_country = $student->cv->student_country;
            $card->student_dob = $student->cv->dob;
            $card->student_city = $student->cv->student_city;
            $card->student_address = $student->cv->student_address;
            $card->student_phone = $student->cv->student_phone;
            $card->email = $student->email;
            $card->father_fullname = $student->cv->father_fullname;
            $card->mother_fullname = $student->cv->mother_fullname;
            $card->father_phone = $student->cv->father_phone;
            $card->mother_phone = $student->cv->mother_phone;
            $card->avatar = $student->info->avatar;
            $card->save();
        }
    }
}
