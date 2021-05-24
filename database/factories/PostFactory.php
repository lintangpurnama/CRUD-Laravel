<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;

use Psy\Util\Str;
use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'slug' => Str::slug($faker->sentence()),
        'body' => $faker->paragraph(10),
    ];
});
