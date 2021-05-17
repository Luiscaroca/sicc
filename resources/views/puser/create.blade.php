@extends('adminlte::page')

@section('title', 'Nuevo Usuario para Préstamo')

@section('content_header')
    <h1>Crear Nuevo Usuario para Préstamo</h1>
@stop

@section('content')
    <form action="/pusers" method="POST">
        @csrf
        <div clas="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="pnombre" name="pnombre" type="text" class="form-control" tabindex="1">
        </div>
        <div clas="mb-3">
            <label for="" class="form-label">Correo</label>
            <input id="pcorreo" name="pcorreo" type="email" class="form-control" tabindex="1">
        </div>
        <div clas="mb-3">
            <label for="" class="form-label">Teléfono</label>
            <input id="ptele" name="ptele" type="text" class="form-control" tabindex="1">
        </div>

        <a href="/pusers" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
