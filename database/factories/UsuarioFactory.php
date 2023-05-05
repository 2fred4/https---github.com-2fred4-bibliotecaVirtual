<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;

class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'correoElectronico' => $this->faker->email(),
            'telefono' => $this->faker->phoneNumber(),
            'direccion' => $this->faker-> address(),
        ];
    }
}
