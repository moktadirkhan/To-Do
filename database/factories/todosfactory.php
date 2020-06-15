<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Model;

$factory->define(\App\todos::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2),
        'description' => $faker->paragraph(4),
        'completed'=> false
    ];
});
