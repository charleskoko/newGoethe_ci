<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Movie::class, function (Faker $faker) {
    $availableArray = [true, false];
    return [
        'title' => $faker->word,
        'description' => $faker->text,
        'is_available' =>$availableArray[array_rand($availableArray)],
        'numberOfCopies' => $numberOfCopies = $faker->numberBetween(1,5),
        'numberOfCopiesAvailable' => $faker->numberBetween(1,$numberOfCopies),
        'director' => $faker->name
    ];
});
