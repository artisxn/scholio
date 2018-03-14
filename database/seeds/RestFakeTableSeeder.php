<?php

use App\Models\School;
use App\Models\SchoolSetting;
use App\Models\Subscription;
use App\Models\University;
use App\Scholio\Scholio;
use Illuminate\Database\Seeder;
use App\Models\Card;
use App\Models\Student;
use App\User;
use App\Models\Skill;
use App\Models\ScholarshipLimit;
use App\Models\Cv;

class RestFakeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scholarship_limits')->truncate();

        foreach (School::all() as $school) {
            $scholarshipLimit = new ScholarshipLimit;
            $scholarshipLimit->school_id = $school->id;
            $scholarshipLimit->cr1 = 10;
            $scholarshipLimit->cr2 = 6;
            $scholarshipLimit->cr3 = 2;
            $scholarshipLimit->cr4 = 2;
            $scholarshipLimit->cr5 = 1;
            $scholarshipLimit->save();

            $this->createCards($school);
            $this->addFakeCards($school);
            $university = new University;
            $university->name = $school->admin->name;
            $university->save();

            $subscription = new Subscription;
            $subscription->user_id = $school->admin->id;
            if ($school->id < 7) {
                $subscription->plan_id = 2;
            }
            $subscription->save();

            $settings = new SchoolSetting;
            $settings->school_id = $school->id;
            if ($school->id < 7) {
                $settings->reviews = true;
                $settings->teachers = true;
                $settings->statistics = true;
            }
            $settings->save();

            $address = Scholio::geocode($school->address . ', ' . $school->city);
            if ($address == 'GEOCODE ERROR') {
                dd($address);
            } else {
                try {
                    $lat = $address['lat'];
                    $lng = $address['lng'];
                    $school->lat = $lat;
                    $school->lng = $lng;
                    $school->save();
                } catch (Exception $e) {
                }
            }
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
    }

    public function addSkill($teacher, $skills)
    {
        $user = 12;
        foreach ($skills as $skill) {
            User::find($teacher)->addFakeSkill(Skill::find($skill), User::find($user));
            $user++;
        }
    }

    public function addFakeCards($school)
    {
        for ($i = 1; $i <= (16 - (int) $school->id); $i++) {
            $card = factory(App\Models\Card::class)->create(['user_id' => $school->id]);
            $this->createNonConnectedStudents($card);
        }
    }

    public function createNonConnectedStudents($card)
    {
        $user = new User;
        $user->name = $card->name;
        $user->email = $card->email;
        $user->password = bcrypt('123456');
        $user->role = 'student';
        $user->save();

        $student = new Student;
        $student->user_id = $user->id;
        $student->fname = $card->fname;
        $student->lname = $card->lname;
        $student->gender = $card->gender;
        $student->save();

        $cv = new Cv;
        $cv->user_id = $user->id;
        $cv->save();
    }

    public function createCards($school)
    {
        foreach ($school->students as $student) {
            $card = new Card;
            $card->user_id = $school->admin->id;
            $card->student_id = $student->id;
            $card->name = $student->name;
            $card->email = $student->email;
            $card->fname = $student->info->fname;
            $card->lname = $student->info->lname;
            $card->status = $student->pivot->status;
            $card->student_country = $student->cv->student_country;
            $card->student_dob = $student->cv->dob;
            $card->student_city = $student->cv->student_city;
            $card->student_address = $student->cv->student_address;
            $card->student_phone = $student->cv->student_phone;
            $card->email = $student->email;
            $card->father_fullname = $student->cv->father_fullname;
            $card->mother_fullname = $student->cv->mother_fullname;
            $card->father_phone = $student->cv->father_phone;
            $card->mother_phone = $student->cv->mother_phone;
            $card->avatar = $student->info->avatar;
            $card->save();
        }
    }
}
