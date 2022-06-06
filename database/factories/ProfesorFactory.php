<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_apellido' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'profesion' => $this->faker->randomElement(['Ing. Sistema', 'Ing Electronico', 'Adm Empresas', 'Ing Comercial']),
            'grado_academico' => $this->faker->word(),
            'telefono' => $this->faker->phoneNumber()
            //
        ];
    }
}
