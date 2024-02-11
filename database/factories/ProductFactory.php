<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word(),
        'description' => $faker->realText(200),
        'price' => $faker->randomNumber(4,true),
        'stock' => $faker->randomNumber(3,true),
        'created_at' => $faker->date('Y-m-d H:i:s', 'now'),
        'updated_at'=> $faker->date('Y-m-d H:i:s', 'now'),
    ];
});
