<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pasaje>
 */
class PasajeFactory extends Factory
{
    /**
     * Define the model's default state.
     *Pasaje
*id: autonumérico
*nombre: varchar(100)
*apellidos: varchar(100)
*vuelo_id: clave extranjera
*precio: valor entre 5 y 500
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'    => $this->faker->name(),
            'apellidos' => $this->faker->lastname(),
            'vuelo_id'  => \App\Models\Vuelo::all()->random()->id,
            'precio'    => $this->faker->numberBetween(5, 500)
        ];
    }
}
