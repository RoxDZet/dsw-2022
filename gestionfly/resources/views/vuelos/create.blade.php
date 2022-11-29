@extends('layouts.app1')

@section("contenido")
    <h1>Crear un Vuelo</h1>

    <form action="{{route('vuelos.store')}}" method="POST">
        @csrf
     {{--*Vuelo
     *id: autonumérico
     *codigo: varchar(10)
     *origen: varchar(50)
     *destino: varchar(50)
     *fecha: date
     *hora: time
     *piloto_id: clave extranjera--}}
        
        <div class="form-group">
            <label for="id">Id</label>
            <input type="number" name="id" id="id" class="form-control">
        </div>
        <div class="form-group">
            <label for="codigo">Código</label>
            <input type="text" name="codigo" id="codigo" class="form-control" placeholder="Código del vuelo" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="origen">Origen</label>
            <input type="text" name="origen" id="origen" class="form-control" placeholder="Origen del vuelo" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="destino">Destino</label>
            <input type="text" name="destino" id="destino" class="form-control" placeholder="Destino del vuelo" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" id="fecha" class="form-control" placeholder="Fecha del vuelo" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="hora">Hora</label>
            <input type="time" name="hora" id="hora" class="form-control" placeholder="Hora del vuelo" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="piloto_id">Piloto</label>
            <select class="form-control" name="piloto_id" id="piloto_id">
                @foreach ($pilotos as $piloto)
                    <option value="{{$piloto->id}}">{{$piloto->nombre}}</option>
                @endforeach
            </select>
        </div>

        <input type="submit" value="Crear vuelo" class="btn btn-success">
        <input type="reset" value="Limpiar formulario" class="btn btn-warning">

</form>

@endsection