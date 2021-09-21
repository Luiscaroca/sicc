@extends('adminlte::page')

@section('title', 'Editar Artículo')

@section('content_header')
    <h1>Modificar Estado</h1>
@stop

@section('content')
    <form action="/articulos/{{$articulo->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div>
            <label for="" class="form-label">Estado</label>
            <select name="aestado" id="aestado" class="form-control">
                <option value="" disabled selected>Seleccione un Estado</option>
                <option value="Activo"{{$inventario->estado == 0 ? 'selected' : ''}}>Activo</option>
                <option value="No Activo"{{$inventario->estado == 1 ? 'selected' : ''}}>No Activo</option>
            </select>
        </div>
        <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop