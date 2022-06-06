{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edtar un alumno</title>
</head>
<body> --}}
@extends('inicio')
@section('title', 'editar datos')
@section('contenido')
<a class="btn btn-secondary" href="/alumnos">Ver listado de alumnos</a>
    <h2>Vista para editar un alumno</h2>

    <form action="/alumnos/editar/{{ $alumno->id }}" method="POST">
        @csrf
        {{ method_field('PUT') }}
        <div class="row  g-3">
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Nombre</label>
                <input type="text" name="name" class="form-control" id="validationCustom01" value="{{ $alumno->name }}" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Apellido</label>
                <input type="text" name="apellido" class="form-control" id="validationCustom02" value="{{ $alumno->apellido }}" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Edad</label>
                <input type="text" name="edad" class="form-control" id="validationCustom02" value="{{ $alumno->edad }}" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Direccion</label>
                <input type="text" name="direccion" class="form-control" id="validationCustom02" value="{{ $alumno->direccion }}"
                    required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            {{-- <label>Nombre:</label><br>
            <input type="text" name="name" placeholder="Su nombre" value="{{ $alumno->name}}"><br>
            <label>Apellido:</label><br>
            <input type="text" name="apellido" placeholder="Su Apellido" value="{{ $alumno->apellido}}"><br>
            <label>Edad:</label><br>
            <input type="text" name="edad" placeholder="Su edad" value="{{ $alumno->edad}}"><br>
            <label>Dirección:</label><br>
            <input type="text" name="direccion" placeholder="Su dirección" value="{{ $alumno->direccion}}"><br> --}}
            <input class="btn btn-primary" type="submit" value="Guardar">
    </form>
@endsection

{{-- </body>
</html> --}}
