<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Curso de laravel</title>
</head>
<body>
    <a href="{{ route('profesores.index') }}"> Ver listado Profesores</a>
    <h2>Ver Profesor</h2>
    <br>
    <label><strong>Nombres y Apellidos:</strong> {{ $profesor->nombre_apellido }}</label><br>
    <label><strong>Profesión:</strong> {{ $profesor->profesion }}</label><br>
    <label><strong>Grado Academico:</strong> {{ $profesor->grado_academico }}</label><br>
    <label><strong>Teléfono:</strong> {{ $profesor->telefono }}</label><br>
    @if($errors->any())
    <p class="error-message">{{$errors->first('mensaje')}}</p>
@endif
<br>
<a href="{{ route('profesores.edit', $profesor->id) }}">Editar</a> <br>
<form action="{{ route('profesores.destroy', $profesor->id) }}" method ="POST" >
    @csrf
    {{ method_field('DELETE') }}
    <input type="submit" value="Eliminar" onclick="return EliminarRegistro('Eliminar Profesor')">
</form>
<script>
    function EliminarRegistro(value){
        action = confirm(value) ? true: event.preventDefault()
    }
</script>
</body>
</html>