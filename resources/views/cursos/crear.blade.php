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
            font-size: 29px;
        }

    </style>
</head>

<body>
    <a href="{{ route('cursos.index') }}"> Ver listado Cursos</a>
    <h2>Nuevo Curso</h2>
    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        <label>Nombre Curso:</label>
        <input type="text" name="nombre" placeholder="Nombre Curso" value="{{ old('nombre') }}">
        @error('nombre')
            <p class="error-message">{{ $message }}</p>
        @enderror
        <label>Nivel:</label>
        <input type="text" name="nivel" placeholder="Nivel" value="{{ old('nivel') }}">
        @error('nivel')
            <p class="error-message">{{ $message }}</p>
        @enderror
        <label>Horas Academicas:</label>
        <input type="text" name="horas_academicas" placeholder="Horas Academicas">
        <label>Profesor:</label>
        <select id="profesor_id" name="profesor_id" >
            @error('profesor_id')
                <p class="error-message">{{ $message }}</p>
            @enderror
            @foreach ($profesores as $profesor)
                @if (old('profesor_id') == $profesor->id)
                    <option value="{{ $profesor->id }}" selected> {{ $profesor->nombre_apellido }}</option>
                @else
                    <option value="{{ $profesor->id }}"> {{ $profesor->nombre_apellido }}</option>
                @endif
            @endforeach
        </select>
        <select id="alumno_ids" name="alumno_ids[]" multiple>
            @foreach ($alumnos as $alumno)
                @if (old('alumno_ids') == $alumno->id)
                    <option value="{{ $alumno->id }}" selected> {{ $alumno->nombre_apellido }}</option>
                @else
                    <option value="{{ $alumno->id }}"> {{ $alumno->nombre_apellido }}</option>
                @endif
            @endforeach
        </select>
        <input type="submit" value="Guardar">
    </form>
</body>

</html>
