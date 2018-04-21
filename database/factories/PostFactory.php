<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker $faker) {
    return [
        'title' => 'Man must explore, and this is exploration at its greatest',
        'sub_title' => 'Problems look mighty small from 150 miles up',
        'image' => 'post-bg.jpg',
        'content' => "Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman's earth, if free men make it, will be truly round: a globe in practice, not in theory.",
        'created_by' => 'Ankit Chauhan'
    ];
});
