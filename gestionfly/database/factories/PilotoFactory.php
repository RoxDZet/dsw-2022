<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Piloto>
 */
class PilotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *Piloto
    *id: autonumérico
    *nombre: varchar(100)
    *apellidos: varchar(100)
    *f_nacimiento: date
    *email: varchar(50)
    *dni: valor único, 8 dígitos y una letra
    *telefono: varchar(20)
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'       => $this->faker->name(),
            'apellidos'    => $this->faker->lastname(),
            'f_nacimiento' => $this->faker->date(),
            'email'        => $this->faker->email(),
            'dni'          => $this->faker->unique()->bothify('#########?'),
            'telefono'     => $this->faker->phoneNumber()
        ];
    }
}
