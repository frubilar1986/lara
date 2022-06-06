<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\profesor;

class profesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $profesor1 = new profesor();
        // $profesor1->nombre_apellido = 'Daniel Coria';
        // $profesor1->profesion = 'Administracion Empresas';
        // $profesor1->grado_academico = 'Licenciatura';
        // $profesor1->save();

        // $profesor2 = new profesor();
        // $profesor2->nombre_apellido = 'Pedro Poveda';
        // $profesor2->profesion = 'Ingeniero de Electronico';
        // $profesor2->grado_academico = 'Masterado';
        // $profesor2->save();
        
        // $profesor3 = new profesor();
        // $profesor3->nombre_apellido = 'Ortega ariel';
        // $profesor3->profesion = 'Master en boxchupi';
        // $profesor3->grado_academico = 'Masterado';
        // $profesor3->save();
        Profesor::factory(10)->create();
        
    }
}
