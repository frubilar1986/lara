{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de alumnos</title>
    <style>
        body {
            margin: auto;
            padding: 50px;
        }

        table,
        td,
        th {
            border: 1px solid black;
            
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th {
            height: 70px;
            text-align: center
        }

        td {
            height: 30px;
        }

        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }

    </style>
</head>

<body> --}}
@extends('inicio')
@section('title', 'listar')

@section('contenido')

    <h1 class="text-center">Listado de todos los alumnos</h1>
    <table class="table table-hover">

        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Direccion</th>
            <th>Accion</th>
        </tr>

        {{-- codigo blade --}}
        {{-- var $alumnos  viene del controlador AlumnoController --}}
        @forelse ($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->name }}</td>
                <td>{{ $alumno->apellido }}</td>
                <td>{{ $alumno->edad }}</td>
                <td>{{ $alumno->direccion }}</td>
                <td>
                    <a class="btn btn-primary" href="/alumnos/ver/{{ $alumno->id }}"><i class="fa-solid fa-eye"></i></a> -
                    <a class="btn btn-warning" href="/alumnos/editar/{{ $alumno->id }}"><i
                            class="fa-solid fa-pen-to-square"></i></a> -
                    <a class="btn btn-danger" href="/alumnos/eliminar/{{ $alumno->id }}"
                        onclick="return eliminarAlumno('Esta seguro de eliminar el alumno?')"><i
                            class="fa-solid fa-trash-can"></i></a>

                </td>
            </tr>
         @empty 
            <strong class="h4 text-danger" >Sin alumnos en la base de datos</strong>   
        @endforelse
    </table>
    <br>
    <a class="btn btn-primary mb-3" href="/alumnos/crear">Crear nuevo alumno</a>
    <script>
        function eliminarAlumno(value) {
            action = confirm(value) ? true : event.preventDefault()
        }
    </script>
@endsection
{{-- </body>

</html> --}}
