<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Curso de laravel</title>
    <style>
        body {
            margin: auto;
            padding: 50px;
        }

        input[type=text],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

    </style>
</head>

<body>
    <a href="{{ route('alumnoss.index') }}"> Ver listado Alumnos</a>
    <h2>Editar Alumno</h2>
    <form action="{{ route('alumnos.update', $alumno->id) }}" method="POST">
        @csrf
        {{ method_field('PUT') }}
        <label>Nombres y Apellidos:</label>
        {{-- <input type="text" name="nombre_apellido" placeholder="Nombres y Apellidos" value="{{ $alumno->nombre_apellido }}"> --}}
        <input type="text" name="nombre_apellido" placeholder="Nombres y Apellidos"
            value="{{ old('nombre_apellido', $alumno->nombre_apellido) }}">
        @error('nombre_apellido')
            <p class="error-message">{{ $message }}</p>
        @enderror
        <label>Edad:</label>
        {{-- <input type="text" name="edad" placeholder="Edad" value="{{ $alumno->edad }}"> --}}
        <input type="text" name="edad" placeholder="Edad" value="{{ old('edad', $alumno->edad) }}">
        @error('edad')
            <p class="error-message">{{ $message }}</p>
        @enderror
        <label>Teléfono:</label>
        <input type="text" name="telefono" placeholder="Teléfono" value="{{ old('telefono', $alumno->telefono) }}">

        <label>Dirección:</label>
        <input type="text" name="direccion" placeholder="Dirección"
            value="{{ old('direccion', $alumno->direccion) }}">
        {{-- <input type="text" name="telefono" placeholder="Teléfono" value="{{ $alumno->telefono }}"> --}}
        {{-- <input type="text" name="direccion" placeholder="Dirección" value="{{ $alumno->direccion }}"> --}}
        <input type="submit" value="Guardar">
    </form>
</body>

</html>
