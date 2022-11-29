@extends('layouts.app1')

@section("contenido")
    <style>
        .boton {
            margin: 10px;
            padding: 10px;
            border-radius: 10px;
            border: 2px solid blue;
            background-color: lightblue;
            text-align: center;
            {{--  font-size: 20px;  --}}
        }
    </style>
    <div class="boton"> {{-- botones que te llevan a las diferentes vistas --}}
        <a href="{{ route('vuelos.index') }}" class="btn btn-primary">Vuelos</a>
        <a href="{{ route('pilotos.index') }}" class="btn btn-primary">Pilotos</a>
    </div>

@endsection