<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Notice;
use Faker\Generator as Faker;

$factory->define(Notice::class, function (Faker $faker) {
    return [
        'title' =>$faker->sentence(rand(1,5)),
        'content' => $faker->realText(400),
        'contributor' => $faker->word(),
        'created_at' => $faker->date('Y-m-d H:i:s', 'now'),
        'updated_at'=> $faker->date('Y-m-d H:i:s', 'now'),
    ];
});
