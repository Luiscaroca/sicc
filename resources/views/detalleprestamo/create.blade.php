@extends('adminlte::page')

@section('title', 'Nuevo Prestamo')

@section('content_header')
    <h1>Nuevo Prestamo</h1>
@stop

@section('content')
    <form action="/detalleprestamo" method="POST">
        @csrf
        <div clas="form-group">
            <label for="" class="form-label">Articulo</label>
            <select name="articulo" id="articulo" class="form-control">
                <option value="" disabled selected>Seleccione un articulo</option>
                @foreach($articulos as $articulo)
                    <option value="{{$articulo->id}}">{{$articulo->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div clas="form-group">
            <label for="" class="form-label">Prestamo</label>
            <select name="prestamo_id" id="prestamo_id" class="form-control">
                <option value="" disabled selected>Corrobore ID Prestamo</option>
                @foreach($prestamos as $prestamo)
                    <option value="{{$prestamo->id}}"></option>
                @endforeach
            </select>
        </div>
        <div class="col-form-label">
            <label for="" class="form-label">Cantidad</label>
            <input id="cantidad" name="cantidad" type="number" class="form-control" placeholder="99999">
        </div>
        <div class="col-form-label">
            <label for="" class="form-label">Comentario</label>
            <input id="comentario" name="comentario" type="text" class="form-control" placeholder="Comentario articulo">
        </div>


        <a href="/usuarios" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

@stop

@section('js')

@stop
