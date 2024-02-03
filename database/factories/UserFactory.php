<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Department;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->email,
        'password' => $faker->password,
        'department_id' => $faker->numberBetween(1,10),
        'bio' => $faker->realText(200),
        'created_at' => $faker->date('Y-m-d H:i:s', 'now'),
        'updated_at'=> $faker->date('Y-m-d H:i:s', 'now'),
    ];
});
