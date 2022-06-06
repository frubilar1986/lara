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
    <a href="{{ route('cursos.index') }}"> Ver listado Cursos</a>
    <h2>Editar Curso</h2>
    <form action="{{ route('cursos.update', $curso->id) }}" method="POST">
        @csrf
        {{ method_field('PUT') }}
        <label>Nombre Curso:</label>
        {{-- <input type="text" name="nombre" placeholder="Nombre Curso" value="{{ $curso->nombre }}"> --}}
        <input type="text" name="nombre" placeholder="Nombre Curso" value="{{ old('nombre', $curso->nombre) }}">
        @error('nombre')
            <p class="error-message">{{ $message }}</p>
        @enderror
        <label>Nivel:</label>
        {{-- <input type="text" name="nivel" placeholder="Nivel" value="{{ $curso->nivel }}"> --}}
        <input type="text" name="nivel" placeholder="Nivel" value="{{ old('nivel', $curso->nivel) }}">
        @error('nivel')
            <p class="error-message">{{ $message }}</p>
        @enderror
        <label>Horas Academicas:</label>
        {{-- <input type="text" name="horas_academicas" placeholder="Horas Academicas" --}}
        <input type="text" name="horas_academicas" placeholder="Horas Academicas" value="{{ old('horas_academicas', $curso->horas_academicas) }}">
        <select id="profesor_id" name="profesor_id">
            @foreach ($profesores as $profesor)
                <option value="{{ $profesor->id }}"
                    {{ old('profesor_id', $curso->profesor_id) == $profesor->id ? 'selected' : '' }}>
                    {{ $profesor->nombre_apellido }}</option>
            @endforeach
        </select>
        @error('profesor_id')
            <p class="error-message">{{ $message }}</p>
        @enderror
        <select id="alumno_ids" name="alumno_ids[]" multiple>
            @foreach ($alumnos as $alumno)
                @php $valor = 0; @endphp
                @foreach ($alumno_curso as $alumno_curso_valor)
                    @if ($alumno->id == $alumno_curso_valor->alumno_id)
                        @php $valor = 1; @endphp
                    @endif
                @endforeach
                @if ($valor == 1)
                    <option value="{{ $alumno->id }}" selected> {{ $alumno->nombre_apellido }}</option>
                @else
                    <option value="{{ $alumno->id }}"> {{ $alumno->nombre_apellido }}</option>
                @endif
            @endforeach
        </select>
        @error('alumno_ids')
            <p class="error-message">{{ $message }}</p>
        @enderror
        <input type="submit" value="Guardar">
    </form>
</body>

</html>
