<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome'=>fake()->firstname(),
            'snome'=>fake()->lastName(),
            'email'=>fake()->safeEmail(),
            'cpf'=>fake()->randomNumber(9, true),
            'genero'=>fake()->randomElement([0, 1, 2]),
            'telefone'=>fake()->randomNumber(9, true)
        ];
    }
}
