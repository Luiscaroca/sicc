@extends('adminlte::page')

@section('title', 'Nuevo Inventario')

@section('content_header')
    <h1>Crear Nuevo Inventario</h1>
@stop

@section('content')
    <form action="/inventarios" method="POST">
        @csrf
        <div clas="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
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
        <a href="/unidades" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
