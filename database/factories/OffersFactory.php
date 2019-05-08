<?php

use Faker\Generator as Faker;

$factory->define(App\offers::class, function (Faker $faker) {
    return [
        'title'=>$faker->title,
        'name'=>$faker->firstName
    ];
});
