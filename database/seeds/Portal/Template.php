<?php

use App\Models\Image;
use App\Models\ScholarshipLimit;
use App\Models\School;
use App\Scholio\Scholio;
use Illuminate\Database\Seeder;
use App\Models\University;
use App\Models\Subscription;
use App\Models\SchoolSetting;

class Template extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $background = $this->createImages('/upload/school/univ.png')->id;

        /*===============      ================*/
        $school = factory(App\Models\School::class)->create([
            'user_id' => factory(App\User::class)->create(['name' => '', 'email' => '', 'password' => bcrypt('123456'), 'role' => 'school', 'username' => ''])->id,
            'address' => '',
            'city' => '',
            'phone' => 1,
            'type_id' => 1,
            'website' => '',
            'approved' => 1,
            'about' => '',
            'background' => $background,
        ]);

        new Portal($school, 1, 'college');

        Scholio::portalStudy($school, '', '', '', '');
    }
}
