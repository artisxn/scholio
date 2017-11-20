<?php

use App\Models\DummyScholarship;
use App\Models\School;
use Illuminate\Database\Seeder;

class DummyScholarshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (School::all() as $school) {
            foreach ($school->scholarship as $scholarship) {
                $dummy = new DummyScholarship;
                $dummy->scholarship_id = $scholarship->id;
                $dummy->school_id = $school->id;
                $dummy->financial_plan = $scholarship->financial->plan;
                $dummy->financial_icon = $scholarship->financial->icon;
                $dummy->financial_amount = $scholarship->financial_amount;
                $dummy->financial_metric = $scholarship->financial->metric;
                $dummy->study_name = $scholarship->study->name ?? 'studies';
                $dummy->level_name = $scholarship->level->name;
                $dummy->criteria_name = $scholarship->criteria->name;
                $dummy->criteria_icon = $scholarship->criteria->name;
                $dummy->end_at = $scholarship->end_at;
                $dummy->admissions_length = count($scholarship->admission);
                $dummy->section_icon = $scholarship->study->section[0]->name ?? 'studies';
                $dummy->active = $scholarship->active;

                $dummy->save();
            }
        }
    }
}
