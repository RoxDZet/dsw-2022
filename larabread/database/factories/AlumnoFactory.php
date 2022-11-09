<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'       => $this->faker->name(),
            'apellidos'    => $this->faker->lastname(),
            'email'        => $this->faker->email(),
            'f_nacimiento' => $this->faker->date(),
            'c_postal'     => $this->faker->postcode()
        ];
    }
}
