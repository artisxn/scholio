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
        'email' => $faker->unique()->email,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'username' => $faker->unique()->userName,
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
        'lat' => $faker->latitude($min = 34, $max = 41),
        'lng' => $faker->longitude($min = 20, $max = 26),
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
        'user_id' => factory(App\User::class)->create(['role' => 'student'])->id,
        'phone' => '6980000000',
        'dob' => Carbon::now()->subYears(20),
        'gender' => 'male',
        // 'avatar' => 'https://cdn1.iconfinder.com/data/icons/ninja-things-1/1772/ninja-simple-512.png',
        'avatar' => $faker->imageUrl(128, 128, 'people'),
        'address' => $faker->prefecture,
    ];
});

$factory->define(App\Models\Teacher::class, function (Faker\Generator $faker) {

    return [
        'user_id' => factory(App\User::class)->create(['role' => 'teacher'])->id,
        'phone' => '6980000000',
        'dob' => Carbon::now()->subYears(40),
        'gender' => 'male',
        'avatar' => $faker->imageUrl(128, 128, 'people'),
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
        'father_name' => $faker->name,
        'father_email' => $faker->email,
        'father_phone' => $faker->phoneNumber,
        'father_city' => $faker->city,
        'father_post_code' => $faker->postcode,
        'father_job' => $faker->jobTitle,
        'father_company' => $faker->company,
        'father_vat' => $faker->numberBetween($min = 10000, $max = 90000),
        'father_income' => $faker->numberBetween($min = 500, $max = 5000),
        'father_id_number' => 'AT310313',
        'mother_name' => $faker->name,
        'mother_email' => $faker->email,
        'mother_phone' => $faker->phoneNumber,
        'mother_city' => $faker->city,
        'mother_post_code' => $faker->postcode,
        'mother_job' => $faker->jobTitle,
        'mother_company' => $faker->company,
        'mother_vat' => $faker->numberBetween($min = 10000, $max = 90000),
        'mother_income' => $faker->numberBetween($min = 500, $max = 5000),
        'mother_id_number' => 'AT310313',
        'id_number' => 'X3456789',
        'post_code' => $faker->postcode,
        'religion' => 'Budha',
        'nationality' => $faker->country,
        'place_of_birth' => $faker->city,
        'student_relatives' => $faker->sentence,
        'school_grades' => $faker->sentence,
        'previous_school' => $faker->word,
        'polyteknos' => 'YES',
        'studies' => $faker->paragraph,
        'about' => $faker->paragraphs($nb = 3, $asText = true),
        'skils' => $faker->paragraph,
        'languages' => $faker->sentence,
        'certifications' => $faker->sentence,
        'awards' => $faker->sentence,
        'other_interests' => $faker->sentence,
    ];
});
