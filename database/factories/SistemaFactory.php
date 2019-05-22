<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Sistema;
use Faker\Generator as Faker;

$factory->define(Sistema::class, function (Faker $faker) {
    return [
        'descricao' => $faker->text(100),
        'sigla' => $faker->text(5),
        'emailAtendimento' => $faker->unique()->safeEmail,
        'url' => $faker->unique()->url,
    ];
});
