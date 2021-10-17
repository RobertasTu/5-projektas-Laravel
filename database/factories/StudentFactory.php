<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Support\Str;
use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName(), //sugeneruoja varda ir pavarde
        'surname' => $faker->lastName(),
        'group_id' => rand(1, 10),
        // 'group_id' => $faker->randomDigit(), nuo 0 iki 9
        // 'image_url' => $faker->url(),
        'image_url' => $faker->imageUrl(300, 300, 'animals', true),

    ];
});
