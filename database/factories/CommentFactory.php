<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use App\Post;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'user_id'          => $faker->numberBetween(1, 250),
        'body'             => $faker->sentence(),
        // 'commentable_id'   => $faker->numberBetween(1, 1000),
        // 'commentable_type' => Post::class,
        'commentable_id'   => $faker->numberBetween(1, 2500),
        'commentable_type' => Comment::class,
    ];
});
