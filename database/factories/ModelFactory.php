<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Pessoa::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->name,
        'documento' => str_random(8),
        'endereco' => $faker->address,
        'email' => $faker->email,
    ];
});

$factory->define(App\PessoaFisica::class, function (Faker\Generator $faker) {
    return [
        'rg' => str_random(8),
        'estado_civil' => rand(1,100)
    ];
});

$factory->define(App\PessoaJuridica::class, function (Faker\Generator $faker) {
    return [
        'razao_social' => str_random(8),
        'insc_estadual' => str_random(8)
    ];
});
