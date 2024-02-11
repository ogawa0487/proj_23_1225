<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1,10),
        'product_id' => $faker->numberBetween(1,10),
        'quantity' => $faker->numberBetween(1,20),
        'price' => $faker->randomNumber(5,true),
        'created_at' => $faker->date('Y-m-d H:i:s', 'now'),
        'updated_at'=> $faker->date('Y-m-d H:i:s', 'now'),
    ];
});
