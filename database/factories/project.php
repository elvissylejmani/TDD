<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\project;
use Faker\Generator as Faker;

$factory->define(project::class, function (Faker $faker) {
    return [
        'title' => $faker->text,
        'description' =>  $faker->text,
        'owner_id' => function () {
            return factory('App\User')->create()->id;
        }
    ];
});
