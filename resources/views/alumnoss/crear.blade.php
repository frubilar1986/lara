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

        p {
            color: red;
        }
    </style>
</head>

<body>
    <a href="{{ route('alumnoss.index') }}"> Ver listado Alumnos</a>
    <h2>Nuevo Alumno</h2>
    <form action="{{ route('alumnos.store') }}" method="POST">
        @csrf
        <label>Nombres y Apellidos:</label>
        <input type="text" name="nombre_apellido" placeholder="Nombres y Apellidos"
            value="{{ old('nombre_apellido') }}">
        @error('nombre_apellido')
            <p class="error-message">{{ $message }}</p>
        @enderror
        <label>Edad:</label>
        <input type="text" name="edad" placeholder="Edad" value="{{ old('telefono') }}">
        @error('edad')
            <br>
            <p class="error-message"> {{ $message }}</p>
        @enderror
        <label>Teléfono:</label>
        <input type="text" name="telefono" placeholder="Teléfono" value="{{ old('telefono') }}">
        <label>Dirección:</label>
        <input type="text" name="direccion" placeholder="Dirección" value="{{ old('direccion') }}">
        <input type="submit" value="Guardar">
    </form>
</body>

</html>
