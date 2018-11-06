<?php

use App\Models\School;
use App\Scholio\Scholio;
use Illuminate\Database\Seeder;
use Portal\Portal;

class StudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s = School::where('username', 'act')->get()->first();
        Scholio::portalStudy($s, 'Level', 'Section', 'Study', 'URL');
        Scholio::portalStudy($s, 'Level', 'Section', 'Study', 'URL');
        Scholio::portalStudy($s, 'Level', 'Section', 'Study', 'URL');

        $s = School::where('username', 'deltaThess')->get()->first();
        Scholio::portalStudy($s, 'Level', 'Section', 'Study', 'URL');
        Scholio::portalStudy($s, 'Level', 'Section', 'Study', 'URL');
        Scholio::portalStudy($s, 'Level', 'Section', 'Study', 'URL');

    }
}