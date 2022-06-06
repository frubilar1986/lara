{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
   margin: auto;
   padding: 50px;
}
input[type=text], select {
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
    <title>Vista crear de alumnos</title>
</head>
<body> --}}
@extends('inicio')
@section('title', 'nuevo usuario')

@section('contenido')

    {{-- <a href="/alumnos">Ver listado de alumnos</a> --}}
    <a class="btn btn-secondary" href="/alumnos">Ver listado de alumnos</a>
    <form action="/alumnos/crear" method="POST">
        @csrf
        <div class="col-md-3 form-floating mb-3">
            <input type="text" name='name' class="form-control" id="floatingInput" placeholder="Nombre">
            <label for="floatingInput">Nombre </label>
        </div>
        <div class="col-md-3 form-floating mb-3">
            <input type="text" name='apellido' class="form-control" id="floatingPassword" placeholder="Apellido">
            <label for="floatingPassword">Apellido</label>
        </div>
        <div class="col-md-3 form-floating mb-3">
            <input type="nomber" name='edad' class="form-control" id="floatingPassword" placeholder="Apellido">
            <label for="floatingPassword">Edad</label>
        </div>
        <div class=" col-md-3 form-floating mb-3">
            <input type="text" name='direccion' class="form-control" id="floatingPassword" placeholder="Apellido">
            <label for="floatingPassword">Direccion</label>
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Guardar</button>
        </div>
        {{-- <label>Nombre:</label>
        <input type="text" name="name" placeholder=" nombre">
        <label>Apellido:</label>
        <input type="text" name="apellido" placeholder=" Apellido">
        <label>Edad:;</label>
        <input type="text" name="edad" placeholder=" edad">
        <label>Dirección:;</label>
        <input type="text" name="direccion" placeholder=" dirección">
        <input type="submit" value="Guardar"> --}}
    </form>
@endsection
{{-- </body>
</html> --}}
