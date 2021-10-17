<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Support\Str;
use App\AttendanceGroup;
use Faker\Generator as Faker;

$factory->define(AttendanceGroup::class, function (Faker $faker) {

    $difficulty = array('easy', 'medium', 'hard');

    return [
        // 'name' => Str::random(10),
        'name' => $faker->company(),
        // 'description' => $faker->sentence(4),
        'description' => $faker->paragraph(7),
        // 'difficulty' => Str::random(8),
        'difficulty' =>$difficulty[rand(0,2)],
        'school_id' => rand(1,10),
        // 'logo' => Str::random(10),
    ];
});
