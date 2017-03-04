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

        // Argument 1: Teacher , Argument 2: Skill
        // Teachers : 42 - 61
        // Students : 12 - 41
        //
        $this->addSkill(45, [1, 2, 4]);

        for ($i = 42; $i <= 61; $i++) {
            if ($i % 2 == 0) {
                $this->addSkill($i, [1, 5, 6, 9, 11, 5, 6, 5, 9]);
            } else if ($i % 3 == 0) {
                $this->addSkill($i, [3, 7, 12, 12, 12, 7]);
            } else {
                $this->addSkill($i, [1, 2, 4, 6, 8, 10, 8, 4, 2, 2, 2]);
            }
        }

        // $this->addSkill(61, 24, 41);
        // $this->addSkill(User::find(61), Skill::find(24), User::find(41));
    }

    public function addSkill($teacher, $skills)
    {
        $user = 12;
        foreach ($skills as $skill) {
            User::find($teacher)->addFakeSkill(Skill::find($skill), User::find($user));
            $user++;
        }

    }
}
