<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cart_item;
use Faker\Generator as Faker;

$factory->define(Cart_item::class, function (Faker $faker) {
    return [
        'user_id' => $faker->unique()->numberBetween(1,10),
        'product_id' => $faker->numberBetween(1,10),
        'quantity' => $faker->randomNumber(2,true),
        'created_at' => $faker->date('Y-m-d H:i:s', 'now'),
        'updated_at'=> $faker->date('Y-m-d H:i:s', 'now'),
    ];
});
