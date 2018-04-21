<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Contact::class, function (Faker $faker) {
    return [
        'title' => 'Contact Me',
        'sub_title' => 'Have questions? I have answers.',
        'image' => '',
        'content' => 'Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!

Name'
    ];
});
