@extends('adminlte::page')

@section('title', 'Nuevo Usuario')

@section('content_header')
    <h1>Crear Nuevo Usuario</h1>
@stop

@section('content')
    <form action="/usuarios" method="POST">
        @csrf
        <div clas="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
        </div>
        <div clas="mb-3">
            <label for="" class="form-label">Constraseña</label>
            <input id="password" name="password" type="text" class="form-control" tabindex="1">
        </div>
        <div clas="form-group">
            <label for="" class="form-label">Unidad</label>
            <select name="unidad_id" id="unidad_id" class="form-control">
                <option value="" disabled selected>Seleccione una Unidad</option>
                @foreach($unidades as $unidad)
                    <option value="{{$unidad->id}}">{{$unidad->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div clas="mb-3">
            <label for="" class="form-label">E-mail</label>
            <input id="correo" name="correo" type="email" class="form-control" tabindex="1">
        </div>
        <div>
            <label for="" class="form-label">Rol</label>
            <select name="rol" id="rol" class="form-control">
                <option value="" disabled selected>Seleccione un Rol</option>
                <option value="ROLE_ADMIN">Administrador</option>
                <option value="ROLE_USER">Usuario Normal</option>
            </select>
        </div>

        <a href="/usuarios" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
@stop

@section('js')
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
@stop
