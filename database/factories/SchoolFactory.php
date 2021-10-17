<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Support\Str;
use App\School;
use Faker\Generator as Faker;

$factory->define(School::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        // 'name' => $faker->company(),
        'description' => $faker->sentence(4),
        'place' => $faker->address(),
        // 'place' => $faker->country(),
        'phone' => $faker->e164PhoneNumber(),
        // 'phone' => $faker->PhoneNumber(), 827-545-244541
        'logo' => Str::random(10),


    ];
});
