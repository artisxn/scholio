<?php

use App\Models\Skill;
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
            'Coding',
            'Teaching',
            'Team Management',
            'Product Development',
            'Inspiration',
        ];

        foreach ($allSkills as $s) {
            $skill = new Skill;
            $skill->name = $s;
            $skill->save();
        }
    }
}
