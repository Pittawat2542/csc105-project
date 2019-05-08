<?php
use App\Photo;
use App\User;
use Faker\Generator as Faker;


$factory->define(Photo::class, function (Faker $faker) {
    return [
        'path'=>$faker->image($dir = '/uploads/images'),
        'user_id'=>$factory->create(User::class)->id,
        'offer_id'=>3
        ];
});
