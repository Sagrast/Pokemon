<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class PokemonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'descripcion' => $this->faker->text(20),
            'tipo' => $this->faker->randomElement(['Agua','Tierra','Fuego','Viento','Dragon','Capitan Planeta','Psiquicos']),
            'debilidades' => $this->faker->randomElement(['Agua','Tierra','Fuego','Viento','Dragon','Capitan Planeta','Psiquicos'])
        ];
    }
}
