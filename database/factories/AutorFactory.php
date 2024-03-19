<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Autor>
 */
class AutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome'=> fake() -> name(),
            'apelido'=> fake() -> name(),
            'cidade' => fake() -> city(),
            'bairro' => fake() -> citySuffix(),
            'cep' => fake() -> postcode(),
            'email' => fake() -> email(),
            'telefone' => fake() -> tollFreePhoneNumber()            
        ];
    }
}
