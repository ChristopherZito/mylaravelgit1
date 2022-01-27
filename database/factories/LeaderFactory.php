<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Leader;
use Faker\Generator as Faker;

$factory->define(Leader::class, function (Faker $faker) {
    return [
        'nome'=> $faker -> firstName(),
        'cognome'=> $faker -> lastName(),
        'fc'=> $faker -> word(),
    ];
});
