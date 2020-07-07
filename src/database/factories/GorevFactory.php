<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Gorev::class, function (Faker $faker) {
    return [
        'gorevadi' => $faker->sentence(3, true),
        'gorevdetay' => $faker->realText($faker->numberBetween(10, 100))
    ];
});
