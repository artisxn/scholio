<?php

use Illuminate\Database\Seeder;

class BasicTables extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SchoolTypesTableSeeder::class);         // School Types         (Profile)
        $this->call(FinancialsTableSeeder::class);          // Financial Plans      (Scholarship)
        $this->call(CriteriasTableSeeder::class);           // Criterias            (Scholarship)
        $this->call(AdmissionCategoryTableSeeder::class);   // Admission Categories (Scholarship)
        $this->call(ReviewsTableSeeder::class);             // Reviews              (Profile)
        $this->call(TagTableSeeder::class);                 // HashTags             (Scholarship, Profile)
        $this->call(SkillsTableSeeder::class);              // Teacher Skills       (Profile)
        $this->call(SubscriptionPlansSeederTable::class);   // Subscription Plans   (Profile)
    }
}
