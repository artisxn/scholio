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
        'avatar' => 'https://cdn1.iconfinder.com/data/icons/ninja-things-1/1772/ninja-simple-512.png',
        'address' => $faker->prefecture,
    ];
});

$factory->define(App\Models\Teacher::class, function (Faker\Generator $faker) {

    return [
        'user_id' => factory(App\User::class)->create(['role' => 'teacher'])->id,
        'phone' => '6980000000',
        'dob' => Carbon::now()->subYears(40),
        'gender' => 'male',
        'avatar' => 'https://cdn1.iconfinder.com/data/icons/ninja-things-1/1772/ninja-simple-512.png',
    ];
});
