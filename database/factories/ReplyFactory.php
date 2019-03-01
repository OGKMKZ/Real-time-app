<?php

use Faker\Generator as Faker;
use App\Question;

$factory->define(App\Reply::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'user_id' => function () {
            return App\User::all()->random();
        },
        'question_id' => function () {
            return Question::all()->random();
        }
    ];
});
