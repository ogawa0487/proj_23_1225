<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'sender_id' => $faker->numberBetween(1,10),
        'receiver_id' => $faker->numberBetween(1,10),
        'title' => $faker->sentence(rand(1,5)),
        'message' => $faker->realText(400),
        'created_at' => $faker->date('Y-m-d H:i:s', 'now'),
        'updated_at'=> $faker->date('Y-m-d H:i:s', 'now'),
    ];
});
