<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sechdule;
use App\User;
use Faker\Generator as Faker;

$factory->define(Sechdule::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'meet_url' => $faker->name,
        'description' => $faker->name,
        'location' => "Meeting Room",
        'user_id' => User::all()->random()->id,
        'date' => $faker->dateTime($max = 'now', $timezone = 'Asia/Yangon'),
        'from_time' => '8:00',
        'to_time' => '8:30'
    ];
});
