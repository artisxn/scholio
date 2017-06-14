<?php

use App\Models\School;
use App\Models\SchoolSetting;
use App\Scholio\Scholio;
use Illuminate\Database\Seeder;

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
        // $this->call(AddmissionSeeder::class);
        $this->call(AdmissionCategoryTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(FakeSeeder::class);
        $this->call(TeacherDetailsTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(SocialLinksTableSeeder::class);

        foreach (School::all() as $school) {
            $settings = new SchoolSetting;
            $settings->school_id = $school->id;
            $settings->save();

            $address = Scholio::geocode($school->address . ", " . $school->city);
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
    }
}
