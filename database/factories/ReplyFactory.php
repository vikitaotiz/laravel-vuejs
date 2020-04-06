<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use App\Reply;
use App\User;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'body' => $faker->sentence(5),
        'question_id' => function(){
            return Question::all()->random();
        },
        'user_id' => function(){
            return User::all()->random();
        },
    ];
});
