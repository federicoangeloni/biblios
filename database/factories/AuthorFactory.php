<?php

$factory->define(Biblios\Author::class, function (Faker\Generator $faker) 
{
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName
    ];
});