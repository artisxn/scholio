<?php

use App\Models\Skill;
use App\User;
use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allSkills = [
            'Teaching',
            'Team Management',
            'Product Development',
            'Inspiration',
            'Word Processing',
            'Computer Programming',
            'Heavy Machinery Operation',
            'Spanish Fluency',
            'Advanced Bookkeeping',
            'Schedule Management',
            'Systems Analysis',
            'Automotive Repair',
            'Environmental Cleanup',
            'Mathematics',
            'Problem Solving',
            'Adaptability',
            'Collaboration',
            'Strong Work Ethic',
            'Time Management',
            'Critical Thinking',
            'Self-Confidence',
            'Handling Pressure',
            'Leadership',
            'Creativity',
        ];

        foreach ($allSkills as $s) {
            $skill = new Skill;
            $skill->name = $s;
            $skill->save();
        }
    }
}
