@extends('adminlte::page')

@section('title', 'Nuevo Prestamo')

@section('content_header')
    <h1>Crear Nuevo Préstamo</h1>
@stop

@section('content')
    <form action="/prestamos" method="POST" enctype="multipart/form-data">
        @csrf
        <div clas="mb-3">
            <label for="" class="form-label">Usuario</label>
            <input id="apuser" name="apuser" type="text" class="form-control" tabindex="1">
        </div>
        <div clas="mb-3">
            <label for="" class="form-label">Fecha</label>
            <input id="afecha" name="afecha" type="text" class="form-control" tabindex="1">
        </div>
        <div clas="form-group">
            <label for="" class="form-label">Comentario</label>
            <input id="acomentario" name="acomentario" type="text" class="form-control" tabindex="1">
        </div>
        <a href="/prestamos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop