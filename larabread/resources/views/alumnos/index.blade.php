@extends('layout.screen')

@section("contenido")
    <h1>Alumnos</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{route('alumnos.create')}}" class="btn btn-primary mb-3">Insertar Alumno</a>
            </div>
        </div>
        <table id="tabla" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Fecha de nacimiento</th>
                    <th>Código Postal</th>
                    <th>Borrar</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $alumno)
                <tr data-id='{{$alumno->id}}'>
                    <td>{{$alumno->id}}</td>
                    <td>{{$alumno->nombre}}</td>
                    <td>{{$alumno->apellidos}}</td>
                    <td>{{$alumno->email}}</td>
                    <td>{{$alumno->f_nacimiento->format('d/m/Y')}}</td>
                    <td>{{$alumno->c_postal}}</td>
                    <td><button class="btn btn-danger btn_borrar">Borrar</button></td>
                    <td><a href="{{url('/alumnos')}}/{{$alumno->id}}/edit" class="btn btn-warning btn_editar">Editar</a></td>
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
                            url: "{{url('/alumnos')}}/"+id,
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