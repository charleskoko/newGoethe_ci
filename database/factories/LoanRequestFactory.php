<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\LoanRequest;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(LoanRequest::class, function (Faker $faker) {
    $statusArray = [LoanRequest::STATUS_CANCEL, LoanRequest::STATUS_COMPLETED,
        LoanRequest::STATUS_INPROGRESS, LoanRequest::STATUS_NEW,
        LoanRequest::STATUS_OUTSTANDING];
    return [
        'start' => $date = $faker->date(),
        'end' => Carbon::parse($date)->addDays($faker->numberBetween(1,10)),
        'status' =>$statusArray[array_rand($statusArray)],
        'email' => $faker->email,
        'numberOfCopies' => $faker->numberBetween(1,5),
        'filmTitle' => $faker->word,
        'firstName' => $faker->firstName,
        'lastName' => $faker->lastName,
        'mobile' => $faker->phoneNumber
    ];
});
