<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Home::class, function (Faker $faker) {
    return [
        'title' => 'Clean Blog',
        'sub_title' => 'A Blog Theme by Start Bootstrap',
        'image' => ''
    ];
});
