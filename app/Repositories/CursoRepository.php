<?php

namespace App\Repositories;


//use App\Repositories\CursoRepository;
use App\Models\curso;
use Illuminate\Support\Facades\DB;


class CursoRepository
{

    public function obtenerCursos()
    {
        return DB::table('cursos')
            ->select('cursos.id', 'cursos.nombre', 'cursos.nivel', 'cursos.horas_academicas', 'profesores.nombre_apellido as profesor')
            ->leftJoin('profesores', 'profesores.id', '=', 'cursos.profesor_id')
            ->get();
    }

    public function obtenerAlumnosQueEstanInscritosEnUnCurso($cursos_id)
    {
        return DB::table('alumno_curso')
            ->select('alumnos.nombre_apellido as alumno')
            ->leftJoin('alumnos', 'alumnos.id', '=', 'alumno_curso.alumno_id')
            ->where('alumno_curso.curso_id', '=', $cursos_id)
            ->get();
    }

    public function obtenerCurso($curso_id)
    {
        return curso::with(['profesor'])->where('cursos.id', '=', $curso_id)->first();
    }
    public function obtenerAlumnosDeUnCurso($id)
    {
        # code...
       return  DB::table('alumno_curso')->select('alumnos.nombre_apellido')->join('alumnos', 'alumnos.id', '=', 'alumno_curso.alumno_id')->where('curso_id', '=', $id)->get();
       
    }
}
