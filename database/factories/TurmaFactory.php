<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Turma>
 */
class TurmaFactory extends Factory
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
            'codigo' => fake()->numerify('TURMA: ###-##'),
            'curso_id' => (Curso:: All()->random())->id,
            'data-inicio'=> fake()->date(),
            'data-fim'=> fake()->date(),
        ];
    }
}
