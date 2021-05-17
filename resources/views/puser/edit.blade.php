@extends('adminlte::page')

@section('title', 'Edotar Usuario para Préstamo')

@section('content_header')
    <h1>Editar Usuario para Préstamo</h1>
@stop

@section('content')
    <form action="/pusers/{{$puser->id}}" method="POST">
        @method('PUT')
        @csrf
        <div clas="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="enombre" name="enombre" type="text" class="form-control" value="{{$puser->nombre}}">
        </div>
        <div clas="mb-3">
            <label for="" class="form-label">Correo</label>
            <input id="ecorreo" name="ecorreo" type="email" class="form-control" value="{{$puser->correo}}">
        </div>
        <div clas="mb-3">
            <label for="" class="form-label">Teléfono</label>
            <input id="etelefono" name="etelefono" type="text" class="form-control" value="{{$puser->telefono}}">
        </div>

        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
        <a href="/pusers" class="btn btn-secondary" tabindex="5">Cancelar</a>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
