<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Curso de laravel</title>
</head>

<body>
    <a href="{{ route('cursos.index') }}"> Ver listado Cursos</a>
    <h2>Ver Curso</h2>
    <label>Nombre Curso: {{ $curso->nombre }}</label><br>
    <label>Nivel: {{ $curso->nivel }}</label><br>
    <label>Horas Academicas: {{ $curso->horas_academicas }}</label><br>
    <label>Profesor: {{ $curso->profesor->nombre_apellido }}</label><br>
    <label>Alumnos:</label>
    <ul>
        @foreach ($alumno_curso as $alumno)
            <li>{{ $alumno->nombre_apellido }}</li>
        @endforeach
    </ul>
    @if ($errors->any())
        <p class="error-message">{{ $errors->first('mensaje') }}</p>
    @endif
    <br>
    <a href="{{ route('cursos.edit', $curso->id) }}">Editar</a> <br>
    <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST">
        @csrf
        {{ method_field('DELETE') }}
        <input type="submit" value="Eliminar" onclick="return EliminarRegistro('Eliminar Curso')">
        <script>
            function EliminarRegistro(value) {
                action = confirm(value) ? true : event.preventDefault()
            }
        </script>
    </form>
</body>

</html>
