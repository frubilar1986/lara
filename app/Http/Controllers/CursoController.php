<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\curso;
use App\Models\profesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\CursoRepository;


class CursoController extends Controller
{

    protected $cursos;

    public function __construct(CursoRepository $cursos)
    {
        $this->cursos = $cursos;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cursos = $this->cursos->obtenerCursos();
        // $cursos = DB::table('cursos')
        //     ->select('cursos.id', 'cursos.nombre', 'cursos.nivel', 'cursos.horas_academicas', 'profesores.nombre_apellido as profesor')
        //     ->leftJoin('profesores', 'profesores.id', '=', 'cursos.profesor_id')
        //     ->get();
        // echo "<pre>";
        // print_r($cursos);
        // echo "<pre>";
        $aux = 0;
        foreach ($cursos as $curso) {
            $cursos[$aux]->alumnos = $this->cursos->obtenerAlumnosQueEstanInscritosEnUnCurso($curso->id);
            // $cursos[$aux]->alumnos = DB::table('alumno_curso')
            //     ->select('alumnos.nombre_apellido as alumno')
            //     ->leftJoin('alumnos', 'alumnos.id', '=', 'alumno_curso.alumno_id')
            //     ->where('alumno_curso.curso_id', '=', $curso->id)
            //     ->get();
            $aux++;
        }
        
        return view('cursos.index', ['cursos' => $cursos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profesores = profesor::all();
        $alumnos = Alumno::all();
        return view('cursos.crear', ['profesores' => $profesores, 'alumnos' => $alumnos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:75',
            'nivel' => 'required|max:35',
            'profesor_id' => 'required',
            'alumno_ids' => 'required|array',
        ]);
        /* transacciones  */
        DB::beginTransaction();
        try {
            $curso = new curso($request->all());
            $curso->save();
            foreach ($request->alumno_ids as $alumno_id ){
                $curso->alumnos()->attach($alumno_id);
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return 'error de insercion de datos controllerC line 87';
        }
        // $curso = new curso($request->all());
        // $curso->save();
        // foreach ($request->alumno_ids as $alumno_id) {
        //     $curso->alumnos()->attach($alumno_id);
        // }
         return redirect()->action([CursoController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $curso = curso::with(['profesor'])->where('cursos.id', '=', $id)->first();
        $curso = $this->cursos->obtenerCurso($id);

        $alumno_curso = $this->cursos->obtenerAlumnosDeUnCurso($id);
        // $alumno_curso = DB::table('alumno_curso')->select('alumnos.nombre_apellido')->join('alumnos', 'alumnos.id', '=', 'alumno_curso.alumno_id')->where('curso_id', '=', $id)->get();
        return view('cursos.ver', ['curso' => $curso, 'alumno_curso' => $alumno_curso]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profesores = profesor::all();
        $alumnos = Alumno::all();
        $curso = curso::findOrFail($id);
        $alumno_curso = DB::table('alumno_curso')->where('curso_id', '=', $id)->get();
        return view('cursos.editar', ['curso' => $curso, 'alumno_curso' => $alumno_curso, 'profesores' => $profesores, 'alumnos' => $alumnos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|max:75',
            'nivel' => 'required|max:30',
            'profesor_id' => 'required',
            'alumno_ids' => 'required|array',
        ]);

        /* Inicio codigo de transacciones */

        DB::beginTransaction();
        try{
            $curso = curso::findOrFail($id);
            $curso->fill($request->all());
            $curso->save();
            $curso->alumnos()->detach();
            foreach ($request->alumno_ids as $alumno_id){
                $curso->alumnos()->attach($alumno_id);
            }
            DB::commit();
        }catch(\Exception $e){
            DB::rollBack();
            return 'nerror en transaccion de datos';
        }
        // $curso = Curso::findOrFail($id);
        // $curso->nombre = $request->nombre;
        // $curso->nivel = $request->nivel;
        // $curso->horas_academicas = $request->horas_academicas;
        // $curso->profesor_id = $request->profesor_id;
        // $curso->save();
        // $curso->alumnos()->detach();
        // foreach ($request->alumno_ids as $alumno_id) {
        //     $curso->alumnos()->attach($alumno_id);
        // }
        return redirect()->action([CursoController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $curso = curso::findOrFail($id);
        $curso->alumnos()->detach();
        $curso->delete();
        return redirect()->action([CursoController::class, 'index']);
    }
}
