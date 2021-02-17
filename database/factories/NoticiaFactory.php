<?php

use Faker\Generator as Faker;

$factory->define(App\Noticia::class, function (Faker $faker) {
    return [
        'titulo' => $faker->text(45),
        'texto' => $faker->paragraph,
        'autor' => $faker->text(45),
    ];
});
