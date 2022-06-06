<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                clifford: '#da373d',
              }
            }
          }
        }
      </script> --}}
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
    @yield('pagination')
</body>
</html>