<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        'title' => $faker -> words(1, true),
        'subtitle'=> $faker -> words(1, true),
        'relase_date'=> $faker -> date()
    ];
});
