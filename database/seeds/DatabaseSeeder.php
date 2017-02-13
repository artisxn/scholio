<?php

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

    }
}
