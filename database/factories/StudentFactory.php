<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Support\Str;
use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'surname' => Str::random(15),
        'group_id' => rand(1, 10),
        'image_url' => $faker->url(),
    ];
});
