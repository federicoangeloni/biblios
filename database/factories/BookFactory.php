<?php

$factory->define(Biblios\Book::class, function (Faker\Generator $faker) 
{
    return [
        'title' => $faker->sentence(rand(1,5))
    ];
});
