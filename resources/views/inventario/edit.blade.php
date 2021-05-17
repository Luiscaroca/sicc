@extends('adminlte::page')

@section('title', 'Editar Inventario')

@section('content_header')
    <h1>Editar Inventario</h1>
@stop

@section('content')
    <form action="/inventarios/{{$inventario->id}}" method="POST">
        @method('PUT')
        @csrf
        <div clas="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" value="{{$inventario->nombre}}">
        </div>
        <div clas="form-group">
            <label for="" class="form-label">Unidad</label>
            <select name="unidad_id" id="unidad_id" class="form-control">
                <option value="" disabled selected>Seleccione una Unidad</option>
                @foreach($unidades as $unidad)
                    <option value="{{$unidad->id}}"{{$unidad->id == $inventario->uni_id ? 'selected' : ''}}>{{$unidad->nombre}}</option>
                @endforeach
            </select>
        </div>
        <a href="/inventarios" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
