<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vuelo>
 */
class VueloFactory extends Factory
{
    /**
     * Define the model's default state.
     *Vuelo
    *id: autonumérico
    *codigo: varchar(10)
    *origen: varchar(50)
    *destino: varchar(50)
    *fecha: date
    *hora: time
    *piloto_id: clave extranjera
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'codigo'    => $this->faker->postcode(),
            'origen'    => $this->faker->city(),
            'destino'   => $this->faker->city(),
            'fecha'     => $this->faker->date(),
            'hora'      => $this->faker->time(),
            'piloto_id' => \App\Models\Piloto::all()->random()->id,
        ];
           }
}
