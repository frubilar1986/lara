@extends('layout')
@section('title', 'contanosalgo')
@section('contenido')
    <h1>Dejenos un mensaje</h1>

    <div>
        <form action="{{ route('email.store') }}" method="POST" > 
            @csrf
            
                <label for="">Nombre</label>
                <input type="text" name="name" autocomplete="off">
          
            
                <label for="">Correo</label>
                <input type="text" name="correo" >
       
           
                <label for="">Detalle</label><br>
                <textarea name="detalle" id="" cols="30" rows="10"></textarea>
            
            <input type="submit" value="Enviar">
        </form>
    </div>

@endsection
