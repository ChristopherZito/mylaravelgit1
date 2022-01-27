<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'name'=> $faker -> word(),
        'purpose'=> $faker -> text(100),
        'start'=> $faker -> date(),
        'end'=> $faker -> date(),
    ];
});
