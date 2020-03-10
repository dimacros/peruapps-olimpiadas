<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comisario;
use Faker\Generator as Faker;

$factory->define(Comisario::class, function (Faker $faker) {
    return [
        'full_name' => "{$faker->firstName} {$faker->lastName}",
    ];
});
