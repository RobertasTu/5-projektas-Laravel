<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Support\Str;
use App\AttendanceGroup;
use Faker\Generator as Faker;

$factory->define(AttendanceGroup::class, function (Faker $faker) {
    return [
        'name' => Str::random(10),
        'description' => $faker->sentence(4),
        'difficulty' => Str::random(8),
        'school_id' => rand(1,10),
    ];
});
