<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\User;
use App\Models\Card;
use App\Models\Study;
use App\Models\School;

class CreateStudentCard implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user, $status, $type, $school;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(School $school, User $user, $status = null, $type = null)
    {
        $this->user = $user;
        $this->status = $status;
        $this->type = $type;
        $this->school = $school;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $student = $this->user->info;
        $cv = $this->user->cv;
        $study = Study::find($this->type);

        $card = new Card;
        $card->user_id = $this->school->admin->id;
        $card->student_id = $this->user->id;

        $card->name = $student->fname . ' ' . $student->lname;
        $card->fname = $student->fname;
        $card->lname = $student->lname;
        $card->email = $this->user->email;
        $card->username = $this->user->username;
        $card->role = 'student';
        $card->avatar = $student->avatar;
        $card->status = $this->status;
        // $card->school_number= '';
        $card->gender = $student->gender;

        
        $card->type = $study->name;
        $card->study = $study->name;
        $card->study_id = $study->id;
        $card->level = $study->section[0]->level->name;

        $card->student_country = $cv->student_country;
        $card->student_dob = $cv->student_dob;
        $card->student_city = $cv->student_city;
        $card->student_address = $cv->student_address;
        $card->student_phone = $cv->student_phone;
        $card->father_fullname = $cv->father_fullname;
        $card->father_phone = $cv->father_phone;
        $card->mother_fullname = $cv->mother_fullname;
        $card->mother_phone = $cv->mother_phone;
        $card->guardian_fullname = $cv->guardian_fullname;
        $card->guardian_phone = $cv->guardian_phone;

        $card->save();

    }
}
