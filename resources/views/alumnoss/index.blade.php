@extends('layout')
@section('title', $alumnos[0]->nombre_apellido)
@section('contenido')
    <h2>Listado de Alumnos</h2>
    <table>
        <tr>
            <th>Nombre y Apellido</th>
            <th>Edad</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Accion</th>
        </tr>
        @foreach ($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->nombre_apellido }}</td>
                <td>{{ $alumno->edad }}</td>
                <td>{{ $alumno->telefono }}</td>
                <td>{{ $alumno->direccion }}</td>
                <td>
                    <a href="{{ route('alumnos.edit', $alumno->id) }}">Editar</a>
                    <a href="{{ route('alumnos.show', $alumno->id) }}">Ver</a>
                </td>
            </tr>
        @endforeach

        
        <br>
        <p>direccion : {{$alumnos[0]->direccion}}</p>
        
    @endsection
