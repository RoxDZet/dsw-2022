<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Receta>
 */
class RecetaFactory extends Factory
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
            'descripcion'    => $this->faker->text(),
            'precio'        => $this->faker->randomDigit(),
            'calorias'        => $this->faker->randomDigit(),
            'f_alta' => $this->faker->date(),
            
        ];
    }
}
