<?php

use App\Models\School;
use App\Models\SchoolSetting;
use App\Scholio\Scholio;
use Illuminate\Database\Seeder;
use App\Key;
use App\Models\Subscription;
use App\User;
use App\Models\ScholarshipLimit;
use App\Models\University;

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
        $this->call(FakeSeeder::class);
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
            $university = new University;
            $university->name = $school->admin->name;
            $university->save();

            $subscription = new Subscription;
            $subscription->user_id = $school->admin->id;
            // if($school->id == 1){
            //     $subscription->plan_id = 2;
            // }
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

        // Only for development
        DB::table('scholarship_limits')->truncate();
        foreach (School::all() as $school) {
            $scholarshipLimit = new ScholarshipLimit;
            $scholarshipLimit->school_id = $school->id;
            $scholarshipLimit->save();
        }

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
}
