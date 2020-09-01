<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Produto;
use Faker\Generator as Faker;

$factory->define(Produto::class, function (Faker $faker) {
    return [
        "descricao" => $faker->word,
        "preco" => $faker->randomNumber(4),
        "cor" => $faker->randomElement(['branco', 'cinza', 'preto', 'azul', 'verde', 'rosa']),
        "peso" => $faker->randomDigitNotNull,
        "marca_id" => $faker->randomDigitNotNull
    ];
});
