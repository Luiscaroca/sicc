@extends('adminlte::page')

@section('title', 'Editar Unidad')

@section('content_header')
    <h1>Editar Unidad</h1>
@stop

@section('content')
    <form action="/unidades/{{$unidad->id}}" method="POST">
        @method('PUT')
        @csrf
        <div clas="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" value="{{$unidad->nombre}}">
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
