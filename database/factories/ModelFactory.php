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

$factory->define(App\Cliente::class, function ($faker) {
    return [
        'evento' => $faker->company,
        'nombre' => $faker->name,
        'apellido' => $faker->lastName,
        'mail' => $faker->email,
        'telefono'=> $faker->phoneNumber,
        'celular' => $faker->phoneNumber,
        'ciudad' => $faker->phoneNumber,
        'info'=> $faker->randomElement(['si','si','no']),
        'comentarios'=> $faker->sentence(6),
        'fecha_ingreso' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
