<?php

namespace Database\Factories;

use App\Models\Aluno;
use Illuminate\Database\Eloquent\Factories\Factory;


class AlunoFactory extends Factory
{

    public function definition(): array
    {
        return [
            'nome' => fake()->name(), //fake: cria um registro falso, dados falsos
            'telefone' => fake()->phoneNumber(),
            'cpf' => fake()->numerify(string: '###.###.###-##'),
        ];
    }
}
