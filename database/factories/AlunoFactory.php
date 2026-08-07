<?php

namespace Database\Factories;

use App\Models\Aluno;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Aluno>
 */
class AlunoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->name(), //fake: cria um registro falso, dados falsos
            'telefone' => fake()->phoneNumber(),
            'cpf' => fake()->numerify(string: '###.###.###-##'),
        ];
    }
}
