<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProfesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->firstName() . ' ' . $this->faker->lastName();
        return [
            'nombre_apellido' => $name,
            'slug' => Str::slug($name,'-'),
            'profesion' => $this->faker->randomElement(['Ing. Sistema', 'Ing Electronico', 'Adm Empresas', 'Ing Comercial']),
            'grado_academico' => $this->faker->word(),
            'telefono' => $this->faker->phoneNumber()
            //
        ];
    }
}
