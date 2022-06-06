@extends('plantilla')
@section('title','porFolio')
@section('contenido')
    <h1>Porfolio</h1>
    <ul>
        {{-- @if ($portafolio) --}}
        {{-- @if ($portafolio) --}}
           
            {{-- utilizando blade --}}
{{-- 
            @foreach ($portafolio as $valor)
                <li>{{ $valor['title'] }}</li>
            @endforeach
        @else    
            <span>No hay proyectos para mostrar</span>
        @endif --}}
        @forelse ($portafolio as $item)
            <li>{{$item['title']}} <small>{{$loop->first? 'es el primero':''}}</small> </li>{{-- <pre>{{var_dump($loop)}}</pre> --}}
        @empty
            <strong>Sin datos en la variable portafolio</strong>
        @endforelse
    </ul>
@endsection
