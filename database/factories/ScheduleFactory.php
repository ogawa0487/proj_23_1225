<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Schedule;
use Faker\Generator as Faker;

$factory->define(Schedule::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1,10),
        'room_id' => $faker->numberBetween(1,10),
        'start_at' => $faker->dateTimeBetween('-1years','+1years'),
        'end_at' => $faker->dateTimeBetween('-1years','+1years'),
        'title' => $faker->sentence(rand(1,5)),
        'content' => $faker->realText(200),
        'created_at' => $faker->date('Y-m-d H:i:s', 'now'),
        'updated_at'=> $faker->date('Y-m-d H:i:s', 'now'),
    ];
});
