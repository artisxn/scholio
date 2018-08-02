<?php

use App\Models\CV;
use App\Models\Student;
use Illuminate\Database\Seeder;

class AddmissionSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$students = Student::all();

		foreach ($students as $student) {
			factory(App\Models\Cv::class)
				->create(['user_id' => $student->user->id]);
		}

	}

	public function stop() {
        User $user;
	}
}
