<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Account::class, function (Faker $faker) {
    static $bank_image;

    return [
        'title'           => $faker->company,
        'agency'          => $faker->randomNumber(3),
        'account_number'  => $faker->randomNumber(5),
        'balance'         => $faker->randomNumber(4),
        'balance_initial' => $faker->randomNumber(4),
        'bank_id'         => $faker->numberBetween(1, 170),
        'bank_image'      => $bank_image ?: $bank_image = 'none.jpg',
    ];
});
