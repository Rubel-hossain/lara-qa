<?php

use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        'title'  => rtrim($faker->sentence(5,10),'.'),
        'slug'   => $faker->slug(3,5),
        'body'   => rtrim($faker->paragraph(5,8),'.'),
        'views'  => $faker->randomDigit(10),
        'votes'  => $faker->numberBetween(-10,10),
        'answers'=> $faker->randomDigit(10)
    ];
});

