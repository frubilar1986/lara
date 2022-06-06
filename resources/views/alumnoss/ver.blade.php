<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Curso de laravel</title>
</head>

<body>
    <a href="{{ route('alumnoss.index') }}"> Ver listado Alumnos</a>
    <h2>Ver Alumno</h2>
    <label><strong>Nombres y Apellidos:</strong> {{ $alumno->nombre_apellido }}</label><br>
    <label><strong>Edad:</strong> {{ $alumno->edad }}</label><br>
    <label><strong>Teléfono:</strong> {{ $alumno->telefono }}</label><br>
    <label><strong>Dirección:</strong> {{ $alumno->direccion }}</label><br>
    @if ($errors->any())
        <p class="error-message">{{ $errors->first('mensaje') }}</p>
    @endif
    <br>
    <a href="{{ route('alumnos.edit', $alumno->id) }}">Editar</a> <br>
    <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST">
        @csrf
        {{ method_field('DELETE') }}
        <input type="submit" value="Eliminar" onclick="return EliminarRegistro('Eliminar Alumno')">
        <script>
            function EliminarRegistro(value) {
                action = confirm(value) ? true : event.preventDefault()
            }
        </script>
    </form>
</body>

</html>
