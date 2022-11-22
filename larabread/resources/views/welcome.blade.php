@extends('layout.screen')

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
        <a href="{{ route('alumnos.index') }}" class="btn btn-primary">Alumnos</a>
        <a href="{{ route('recetas.index') }}" class="btn btn-secondary">Recetas</a>
        <a href="{{ route('libros.index') }}" class="btn btn-primary">Libros</a>
    </div>

@endsection