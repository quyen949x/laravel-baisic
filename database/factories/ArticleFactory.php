<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(\App\Article::class, function (Faker $faker) {
    return [
        'title'=>$faker->title,
        'content'=>$faker->text,
        'status'=>rand(0,1)
    ];
});
