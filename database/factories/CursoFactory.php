<?php

namespace Database\Factories;

use App\Models\profesor;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombre' => $this->faker->word(),
            'nivel' => $this->faker->randomElement(['Basico', 'Intermedio', 'Avanzado']),
            'horas_academicas' => $this->faker->randomElement(['10 Horas', '40 Horas', '80 Horas']),
            'profesor_id' => profesor::all()->random()->id
        ];
    }
}
