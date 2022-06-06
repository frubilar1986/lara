{{-- <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Curso de laravel</title>
        <style>
            body {
                margin: auto;
                padding: 50px;
            }
            table {
                border-collapse:collapse;
                width: 100%;
            }
            table, td, th {
                border: 1px solid black;
            }
        </style>
    </head>
    <body> --}}
@extends('inicio')
@section('contenido')
<div class="text-center">

    <a class="btn btn-secondary" href="/profesores">Ver profesores</a> 
    <a class="btn btn-primary" href="{{ route('cursos.create') }}"> Nuevo Curso</a>
</div>
    <br>
    <h2>Listado de Cursos</h2>
    <div class="container">

        <table class="table table-hover">
            <tr>
                <th>Curso</th>
                <th>Nivel</th>
                <th>Horas Academicas</th>
                <th>Profesor Asignado</th>
                <th>Estudientes Inscritos</th>
                <th>Accion</th>
            </tr>
            {{-- <pre>{{print_r($cursos)}}</pre> --}}
            @foreach ($cursos as $curso)
                <tr>
                    <td>{{ $curso->nombre }}</td>
                    <td>{{ $curso->nivel }}</td>
                    <td>{{ $curso->horas_academicas }}</td>
                    <td>{{ $curso->profesor }}</td>
                    <td class="text-danger">
                    {{-- <pre>{{print_r($curso)}}</pre> --}}
                        @foreach ($curso->alumnos as $alumno)
                            {{ $alumno->alumno }} <br>
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ route('cursos.edit', $curso->id) }}">Editar -</a>
                        <a href="{{ route('cursos.show', $curso->id) }}">Ver</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
{{-- </body>
</html> --}}
