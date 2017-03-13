<?php

use App\Scholio\Scholio;
use App\User;
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
        $this->call(FakeSeeder::class);
        $this->call(TeacherDetailsTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(SocialLinksTableSeeder::class);

        foreach (User::all() as $user) {
            if ($user->role == 'school' && $user->id <= 11) {
                $address = Scholio::geocode($user->info->address . "," . $user->info->city);
                if ($address == 'Geocode Error') {
                    dd('Geocode Error');
                } else {
                    $lat = $address['lat'];
                    $lng = $address['lng'];
                    $user->info->lat = $lat;
                    $user->info->lng = $lng;
                    $user->info->save();
                }
            }
        }
    }
}
