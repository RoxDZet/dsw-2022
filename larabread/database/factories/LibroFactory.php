<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titulo'       => $this->faker->title(),
            'autor'    => $this->faker->name(),
            'paginas'        => $this->faker->randomDigit(),
            'genero'    => $this->faker->text(),
            'f_publicacion' => $this->faker->date(),
        ];
    }
}
