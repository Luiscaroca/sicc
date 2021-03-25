@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
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
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
