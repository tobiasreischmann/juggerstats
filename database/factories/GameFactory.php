<?php

use Faker\Generator as Faker;

$factory->define(App\Game::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'date' => $faker->date,
        'location' => $faker->location,
        'host' => $faker->host,
    ];
});