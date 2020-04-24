<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Data;
use Faker\Generator as Faker;

$factory->define(Data::class, function (Faker $faker) {
    return [
        'id' => $faker->unique()->slug,
        'key' => $faker->slug,
        'value' =>
            '{"name": "Hassan Azimi", "job": "developer", "description": "The Laravel Framework."}',
    ];
});
