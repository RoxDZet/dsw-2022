<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

{{--*Vuelo
*id: autonumérico
*codigo: varchar(10)
*origen: varchar(50)
*destino: varchar(50)
*fecha: date
*hora: time
*piloto_id: clave extranjera--}}
<h1>Listado de vuelos</h1>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Código</th>
            <th scope="col">Origen</th>
            <th scope="col">Destino</th>
            <th scope="col">Fecha</th>
            <th scope="col">Hora</th>
            <th scope="col">Piloto</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($vuelos as $vuelo)
            <tr>
                <th scope="row">{{$vuelo->id}}</th>
                <td>{{$vuelo->codigo}}</td>
                <td>{{$vuelo->origen}}</td>
                <td>{{$vuelo->destino}}</td>
                <td>{{$vuelo->fecha}}</td>
                <td>{{$vuelo->hora}}</td>
                <td>{{$vuelo->piloto->nombre}}</td>
            </tr>
        @endforeach
    </tbody>
</table>