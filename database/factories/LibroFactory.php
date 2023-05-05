<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Libro;

class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

        'titulo' => $this->faker->sentence(),
        'autor' => $this->faker -> name(),
        'editorial' => $this->faker->company(),
        'anioPublicacion' => $this->faker->numberBetween(1900, 2022),
        'cantidadDisponible' => $this->faker-> numberBetween(0, 10),

        ];
    }
}
