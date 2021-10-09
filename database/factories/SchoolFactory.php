<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\School;
use Faker\Generator as Faker;

$factory->define(School::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence(4),
        'place' => $faker->address(),
        'phone' => $faker->e164PhoneNumber(),


    ];
});
