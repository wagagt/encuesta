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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Institucion::class, function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->company,
        'sitio_web' => $faker->unique()->safeEmail,
        'direccion' => $faker->address,
        'telefonos' => $faker->phoneNumber,
        'pregunta_final' => $faker->text,
        'estado_avance' =>  $faker->numberBetween($min = 0, $max = 10)
    ];
});