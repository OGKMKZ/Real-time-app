<?php

use Faker\Generator as Faker;
use App\User;
use App\Category;

$factory->define(App\Question::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        'title' => $title,
        'slug' => str_slug($title),
        'body' => $faker->text,
        'user_id' => function () {
            return User::all()->random();
        },
        'category_id' => function () {
            return Category::all()->random();
        }

    ];
});
