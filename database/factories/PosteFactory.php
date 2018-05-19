<?php

use Faker\Generator as Faker;

$factory->define(App\Poste::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'content' => $faker->text,
    ];
});
