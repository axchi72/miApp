<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Frontend\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'titulo' => $faker->sentence,
        'extracto' => $faker->text,
        'contenido' => $faker->text,
        'foto' => $faker->imageUrl(1024,1024),
        'usuario_id' => rand(1,2),
        'created_at' => $faker->date(),
        'updated_at' => $faker->date(),

    ];
});
