<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Phonebook::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'galc' => $faker->randomLetter . $faker->randomLetter . $faker->randomLetter,
        'port' => $faker->numberBetween(1, 500),
        'address' => $faker->address,
        'velocity' => $faker->numberBetween(1, 500),
        'status' => rand(0, 1),
        'user_id' => \App\User::select('id')->first(),
    ];
});
