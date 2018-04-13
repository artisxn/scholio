<?php

use App\Key;
use App\Models\Card;
use App\Models\Cv;
use App\Models\School;
use App\Models\SchoolSetting;
use App\Models\Student;
use App\Models\Subscription;
use App\Models\University;
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
        $this->call(BasicTables::class);
        $this->call(StudyTables::class);
        

        if (App::environment('local')) {
            // $this->call(FakeTables::class);
            $this->call(FakeSeederCopy::class);
        }

        $this->call(AdminTables::class);
    }
}
