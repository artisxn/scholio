<?php

use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
 */

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {

    // $faker = Faker\Factory::create('el_GR');
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->email . '-' . str_random(10),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'username' => $faker->unique()->userName . '-' . str_random(10),
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Image::class, function (Faker\Generator $faker) {

    return [
        'full_path' => $faker->imageUrl,
        'path' => $faker->imageUrl,
        'name' => $faker->imageUrl,
        'extension' => $faker->fileExtension,
        'alt' => $faker->word,
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\School::class, function (Faker\Generator $faker) {

    $faker = Faker\Factory::create('el_GR');

    $name = $faker->lastName;
    $email = $faker->unique()->email;

    return [
        // 'user_id' => factory(App\User::class)->create(['role' => 'school'])->id,
        'type_id' => $faker->numberBetween($min = 1, $max = 3),
        'address' => $faker->address,
        'city' => $faker->prefecture,
        'phone' => $faker->numberBetween($min = 1, $max = 100),
        'website' => $faker->domainName . '.' . $faker->unique()->randomFloat($nbMaxDecimals = 10, $min = 1, $max = 10000000),
        // 'lat' => $faker->latitude($min = 34, $max = 41),
        // 'lng' => $faker->longitude($min = 20, $max = 26),
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Scholarship::class, function (Faker\Generator $faker) {

    $faker = Faker\Factory::create('el_GR');

    $date = Carbon::now()->addDays(30); // In 30 days from now

    return [
        'school_id' => $faker->numberBetween($min = 1, $max = 5),
        'financial_id' => $faker->numberBetween($min = 1, $max = 3),
        'financial_amount' => $faker->randomDigitNotNull,
        'criteria_id' => $faker->numberBetween($min = 1, $max = 5),
        'study_id' => $faker->numberBetween($min = 1, $max = 5),
        'level_id' => $faker->numberBetween($min = 1, $max = 3),
        'end_at' => $date,
        'winner_id' => $faker->numberBetween($min = 1, $max = 10),
    ];
});

$factory->define(App\Models\Student::class, function (Faker\Generator $faker) {

    $faker = Faker\Factory::create('el_GR');

    return [
        'fname' => $faker->firstName,
        'lname' => $faker->lastName,
        'user_id' => factory(App\User::class)->create(['role' => 'student'])->id,
        // 'phone' => '6980000000',
        // 'dob' => Carbon::now()->subYears(20),
        'gender' => 'male',
        // 'avatar' => 'https://cdn1.iconfinder.com/data/icons/ninja-things-1/1772/ninja-simple-512.png',
        // 'avatar' => $faker->imageUrl(128, 128, 'people'),
        'avatar' => '/new/img/user.png',
        // 'address' => $faker->streetAddress,
        // 'city' => $faker->prefecture,
    ];
});

$factory->define(App\Models\Teacher::class, function (Faker\Generator $faker) {

    return [
        'user_id' => factory(App\User::class)->create(['role' => 'teacher'])->id,
        'phone' => '6980000000',
        'dob' => Carbon::now()->subYears(40),
        'gender' => 'male',
        'avatar' => '/new/img/user.png',
    ];
});

$factory->define(App\Models\Work::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->jobTitle,
        'company' => $faker->company,
        'from' => Carbon::now()->subYears(5),
        'until' => Carbon::now(),
    ];
});

$factory->define(App\Models\Certificate::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->jobTitle,
        'university' => $faker->state,
        'from' => Carbon::now()->subYears(5),
        'until' => Carbon::now(),
    ];
});

$factory->define(App\Models\Cv::class, function (Faker\Generator $faker) {
    return [
        'student_address' => $faker->city,
        'student_phone' => $faker->phoneNumber,
        'student_dob' => Carbon::now()->subYears(20),
        'student_relatives' => $faker->numberBetween($min = 0, $max = 2),
        'previous_school' => 15,
        'father_fullname' => $faker->name,
        'father_phone' => $faker->phoneNumber,
        'father_email' => $faker->email,
        'father_address' => $faker->city,
        'father_tk' => $faker->postcode,
        'father_job' => $faker->jobTitle,
        'father_company' => $faker->company,
        'father_afm' => $faker->numberBetween($min = 10000, $max = 90000),
        'father_income' => $faker->numberBetween($min = 500, $max = 5000),
        'father_id_number' => 'AT310313',
        'mother_fullname' => $faker->name,
        'mother_phone' => $faker->phoneNumber,
        'mother_email' => $faker->email,
        'mother_address' => $faker->city,
        'mother_tk' => $faker->postcode,
        'mother_job' => $faker->jobTitle,
        'mother_company' => $faker->company,
        'mother_afm' => $faker->numberBetween($min = 10000, $max = 90000),
        'mother_income' => $faker->numberBetween($min = 500, $max = 5000),
        'mother_id_number' => 'AT310313',
        'guardian_fullname' => $faker->name,
        'guardian_phone' => $faker->phoneNumber,
        'guardian_email' => $faker->email,
        'guardian_address' => $faker->city,
        'guardian_tk' => $faker->postcode,
        'guardian_job' => $faker->jobTitle,
        'guardian_company' => $faker->company,
        'guardian_afm' => $faker->numberBetween($min = 10000, $max = 90000),
        'guardian_income' => $faker->numberBetween($min = 500, $max = 5000),
        'guardian_id_number' => 'AT310313',
        'student_id_number' => 'X3456789',
        'student_tk' => $faker->postcode,
        'student_religion' => 'Budha',
        'student_nationality' => $faker->country,
        'student_pob' => $faker->city,
        'student_grades' => $faker->sentence,
        'student_previous' => '1. ΜΒΑ in Business Administration / Πανεπιστημιο Μακεδονίας / 2016&#13;&#10;2. Οικονομικά / Αριστοτέλειο Πανεπιστημιο θεσσαλονίκης / 2014&#13;&#10;3. 7ο Λύκειο Θεσσαλονικης / 2009',
        'student_polyteknos' => 'YES',
        'skills' => $faker->paragraph,
        'languages' => $faker->sentence,
        'certifications' => $faker->sentence,
        'awards' => $faker->sentence,
        'other_interests' => $faker->sentence,
        'strongpoints' => '1. Είμαι Επίμονος&#13;&#10; 2. Εργάζομαι με μέθοδο & πρόγραμμα &#13;&#10; 3. Μου αρέσει συνεχώς να βελτιώνομαι και να αποκτώ νέες δεξιότητες',
        'notes' => $faker->sentence,
    ];
});
