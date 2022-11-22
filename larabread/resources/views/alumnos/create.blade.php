@extends('layout.screen')

@section("contenido")
    <h1>Crear un Alumno</h1>

    <form action="{{route('alumnos.store')}}" method="POST">
        @csrf

        <div class="form-group">
            <label for="id">Id</label>
            <input type="number" name="id" id="id" class="form-control">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellido</label>
            <input type="text" name="apellidos" id="apellidos" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="f_nacimiento">Fecha de nacimiento</label>
            <input type="date" name="f_nacimiento" id="f_nacimiento" class="form-control">
        </div>
        <div class="form-group">
            <label for="c_postal">Código postal</label>
            <input type="text" name="c_postal" id="c_postal" class="form-control">
        </div>

        <input type="submit" value="Crear alumno" class="btn btn-success">
        <input type="reset" value="Limpiar formulario" class="btn btn-warning">

</form>

@endsection