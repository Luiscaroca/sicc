@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <form action="/usuarios/{{$usuario->id}}" method="POST">
        @method('PUT')
        @csrf
        <div clas="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" value="{{$usuario->name}}">
        </div>
        <div clas="form-group">
            <label class="form-label">Unidad</label>
            <select class ='form-control' name="unidad_id">
                <option value="">Seleccione Unidad</option>
                @foreach($unidades as $unidad)
                    <option value="{{$unidad->id}}"{{$unidad->id == $usuario->unidad_id ? 'selected' : ''}}>{{$unidad->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div clas="mb-3">
            <label for="" class="form-label">E-mail</label>
            <input id="correo" name="correo" type="email" class="form-control" value="{{$usuario->email}}">
        </div>
        <div>
            <label for="" class="form-label">Rol</label>
            <select name="rol" id="rol" class="form-control">
                <option value="">Seleccione Rol</option>
                <option value="ROLE_ADMIN">Administrador</option>
                <option value="ROLE_USER">Usuario Normal</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
        <a href="/usuarios" class="btn btn-secondary" tabindex="5">Cancelar</a>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
