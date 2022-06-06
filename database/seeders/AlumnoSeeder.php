<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $alumno = new Alumno();
        // $alumno->nombre_apellido = 'Daniel Miranda';
        // $alumno->edad = 18;
        // $alumno->telefono = '+725357789';
        // $alumno->direccion = 'Los Lirios #5566';
        // $alumno->save();

        // $alumno1 = new Alumno();
        // $alumno1->nombre_apellido = 'Mary Delgado';
        // $alumno1->edad = 21;
        // $alumno1->telefono = '+5673424233';
        // $alumno1->direccion = 'Cartegena #2343';
        // $alumno1->save();

        // $alumno2 = new Alumno();
        // $alumno2->nombre_apellido = 'Brain Cardozo';
        // $alumno2->edad = 23;
        // $alumno2->telefono = '+591355433';
        // $alumno2->direccion = 'Arenas #490';
        // $alumno2->save();
        Alumno::factory(10)->create();
    }
}
