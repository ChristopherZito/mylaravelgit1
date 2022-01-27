<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'nome'=> $faker -> firstName(),
        'cognome'=> $faker -> lastName(),
        'fc'=> $faker -> word(),
    ];
});
