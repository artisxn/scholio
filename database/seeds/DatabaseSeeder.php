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
        // $this->call(UsersTableSeeder::class);
        $this->call(SchoolTypesTableSeeder::class);
        // $this->call(SchoolsTableSeeder::class);
        $this->call(LevelsTableSeeder::class);
        $this->call(FinancialsTableSeeder::class);
        // $this->call(ScholarshipsTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
        $this->call(StudiesTableSeeder::class);
        $this->call(CriteriasTableSeeder::class);
        $this->call(FakeSeeder::class);
        $this->call(TeacherDetailsTableSeeder::class);
        $this->call(SkillsTableSeeder::class);

        foreach (User::all() as $user) {
            if ($user->role == 'school' && $user->id <= 11) {
                $address = Scholio::geocode($user->info->address . "," . $user->info->city);
                if ($address = 'GEOCODE ERROR') {
                    return 'GEOCODE ERROR';
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
