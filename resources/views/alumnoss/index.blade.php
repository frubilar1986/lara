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
            border-collapse: collapse;
            width: 100%;
        }

        table,
        td,
        th {
            border: 1px solid black;
        }

    </style>
</head>

<body> --}}
    @extends('layout')
    @section('contenido')
        
    @endsection
    {{-- <a href="{{ route('alumnos.create') }}"> Nuevo Alumno</a>
    <a href="{{ route('profesores.index') }}"> Ver listado Profesores</a>
    <a href="{{ route('cursos.index') }}"> Ver listado cursos</a>
    <br> --}}
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
    {{-- </table>
</body>

</html> --}}
