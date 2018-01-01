<?php

use Faker\Generator as Faker;
use App\Edificio;
use App\Consorcista;
use App\Liquidacion;
use App\Pago;

$factory->define(Edificio::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'direccion' => $faker->streetName,
        'tipo_unidad' => $faker->word   
     ];
});


$factory->define(Consorcista::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'porcentaje_ocupacion' => $faker->randomFloat,
        'edificio_id' => Edificio::all()->random()->id
     ];

});

$factory->define(Liquidacion::class, function (Faker $faker) {
    return [
        'monto_total' => $faker->numberBetween(500,2500),
        'cantidad_items' => $faker->randomDigitNotNull,
    
     ];

});

$factory->define(Pago::class, function (Faker $faker) {
    return [
        'fecha_pago' => $faker->date,
        'consorcista_id' => Consorcista::all()->random()->id,
        'liquidacion_id' => Liquidacion::all()->random()->id
     ];

 


});