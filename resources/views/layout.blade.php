<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Curso de laravel</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <ul>
        <li><a href="{{ route('profesores.index') }}">Profesores</a></li>
        <li><a href="{{ route('alumnos.index') }}">Alumnos</a></li>
        <li><a href="{{ route('cursos.index') }}">Cursos</a></li>
    </ul>
    <br>
    @yield('contenido')
</body>
</html>