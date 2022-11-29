@extends('layouts.app1')

@section("contenido")
    <h1>Vuelos</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{route('vuelos.create')}}" class="btn btn-primary mb-3">Insertar Vuelo</a>
                <a target='_blank' href="{{route('vuelos.listado_pdf')}}" class="btn btn-warning mb-3">Listado pdf</a>
            </div>
        </div>
        {{--/Vuelo
    //id: autonumérico
    //codigo: varchar(10)
    //origen: varchar(50)
    //destino: varchar(50)
    //fecha: date
    //hora: time
    //piloto_id: clave extranjera--}}
        <table id="tabla" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Código</th>
                    <th>Origen</th>
                    <th>Destino</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Piloto</th>
                    <th>Borrar</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vuelos as $vuelo)
                <tr data-id='{{$vuelo->id}}'>
                    <td>{{$vuelo->id}}</td>
                    <td>{{$vuelo->codigo}}</td>
                    <td>{{$vuelo->origen}}</td>
                    <td>{{$vuelo->destino}}</td>
                    <td>{{$vuelo->fecha}}</td>
                    <td>{{$vuelo->hora}}</td>
                    <td>{{$vuelo->piloto->nombre}}</td>
                    <td><button class="btn btn-danger btn_borrar">Borrar</button></td>
                    <td><a href="{{url('/vuelos')}}/{{$vuelo->id}}/edit" class="btn btn-warning btn_editar">Editar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function(){
            $('#tabla').DataTable({
            });
            $("#tabla").on("click",".btn_borrar",function(e){
                e.preventDefault();
            
                //confirmar con sweetalert
                Swal.fire({
                    title: '¿Estas seguro?',
                    text: "No podras revertir esta accion",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, borrar!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        //redireccionar a la url
                        //borrar con ajax
                        const tr=$(this).closest("tr"); //tr más cercano al botón, o sea el tr que contiene al botón
                        const id=tr.data("id"); //obtener el id del tr
                        $.ajax({
                            url: "{{url('/vuelos')}}/"+id,
                            method: "DELETE",
                            data: {
                                "_token": "{{ csrf_token() }}"
                            },
                            success: function(){
                                tr.fadeOut();
                            }
                        })
                    }
                })    
            });
        });
        
    </script>
@endsection