<?php

namespace App\Http\Controllers;

use App\Models\curso;
use App\Models\profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //obtendremos todos los registros de nuestra tabla profesores con el método all() en la variable $profesores. Seguidamente, retornaremos esta variable a nuestra vista profesores .
        $profesores = profesor::all();
        return view('profesores.index', ['profesores' => $profesores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profesores.crear');
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
            'nombre_apellido' => 'required|max:75',
            'profesion' => 'required|max:35',
        ]);
        $profesor = new profesor($request->all());
        $profesor->save();
        return redirect()->action([ProfesorController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profesor = profesor::findOrFail($id);
        return view('profesores.ver', ['profesor' => $profesor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profesor = profesor::findOrFail($id);
        return view('profesores.editar', ['profesor' => $profesor]);
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
            'nombre_apellido' => 'required|max:75',
            'profesion' => 'required|max:35',
        ]);
        $profesor = profesor::findOrFail($id);
        // $profesor->fill($request->all());
        $profesor->nombre_apellido = $request->nombre_apellido;
        $profesor->profesion = $request->profesion;
        $profesor->grado_academico = $request->grado_academico;
        $profesor->telefono = $request->telefono;
        $profesor->save();
        return redirect()->action([ProfesorController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (curso::where('profesor_id', '=', $id)->first() != null) {
            return redirect()->back()->withErrors(['mensaje' => 'El profesor no puede ser eliminado.']);
        } else {
            $profesor = profesor::findOrFail($id);
            $profesor->delete();
            return redirect()->action([ProfesorController::class, 'index']);
        }
    }
}
