@extends('layouts.app1')

@section("contenido")
    <h1>Pilotos</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                
            </div>
        </div>
        <table id="tabla" class="table table-striped table-bordered">
            {{--Piloto
            id: autonumé    rico
            nombre: varchar(100)
            apellidos: varchar(100)
            f_nacimiento: date
            email: varchar(50)
            dni: varchar(10)
            telefono: varchar(20)--}}
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Fecha de nacimiento</th>
                    <th>DNI</th>
                    <th>Teléfono</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pilotos as $piloto)
                <tr data-id='{{$piloto->id}}'>
                    <td>{{$piloto->id}}</td>
                    <td>{{$piloto->nombre}}</td>
                    <td>{{$piloto->apellidos}}</td>
                    <td>{{$piloto->email}}</td>
                    <td>{{$piloto->f_nacimiento}}</td>
                    <td>{{$piloto->dni}}</td>
                    <td>{{$piloto->telefono}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection