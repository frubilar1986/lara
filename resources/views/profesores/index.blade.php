{{-- <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Curso de laravel</title>

</head>

<body>
    <ul>
        <li><a href="{{ route('profesores.index') }}">Profesores</a></li>
        <li><a href="{{ route('alumnos.index') }}">Alumnos</a></li>
        <li><a href="{{ route('cursos.index') }}">Cursos</a></li>
    </ul>
    <br/> --}}
@extends('layout')
@section('contenido')
    <h2>Listado de Profesores</h2>
    <a href="/alumnos">Ver alumnos</a>
    <a href="{{ route('profesores.create') }}"> Nuevo Profesor</a>
    <br>
    <table>
        <tr>
            <th>Nombre y Apellido</th>
            <th>Profesión</th>
            <th>Grado Academico</th>
            <th>Teléfono</th>
            <th>accion</th>
        </tr>
        @foreach ($profesores as $profesor)
            <tr>
                <td>{{ $profesor->nombre_apellido }}</td>
                <td>{{ $profesor->profesion }}</td>
                <td>{{ $profesor->grado_academico }}</td>
                <td>{{ $profesor->telefono }}</td>
                <td>
                    <a href="{{ route('profesores.edit', $profesor->id) }}">Editar -</a>
                    <a href="{{ route('profesores.show', $profesor->id) }}"> Ver</a>
                </td>

            </tr>
        @endforeach
    </table>
@endsection
{{-- </body>

</html> --}}
