@extends('adminlte::page')

@section('title', 'Editar Articulo')

@section('content_header')
    <h1>Editar Articulo</h1>
@stop



@section('content')
    <form action="/articulos" method="POST" enctype="multipart/form-data">
        @csrf
        <div clas="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="anombre" name="anombre" type="text" class="form-control" value="{{$articulo->nombre}}">
        </div>
        <div clas="form-group">
            <label for="" class="form-label">Inventario</label>
            <select name="inventario_id" id="Inventario_id" class="form-control">
                <option value="" disabled selected>Seleccione un Inventario</option>
                @foreach($inventarios as $inventario)
                    <option value="{{$inventario->id}}"{{$inventario->id == $articulo->inventario_id ? 'selected':''}}>{{$inventario->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div clas="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input id="acantidad" name="acantidad" type="text" class="form-control" value="{{$articulo->cantidad}}">
        </div>
        <div>
            <label for="" class="form-label">Estado</label>
            <select name="aestado" id="aestado" class="form-control">
                <option value="" disabled selected>Seleccione un Estado</option>
                <option value="1"{{$inventario->estado == 1 ? 'selected' : ''}}>Activo</option>
                <option value="0"{{$inventario->estado == 0 ? 'selected' : ''}}>No Activo</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input id="aprecio" name="aprecio" type="text" class="form-control" value="{{$articulo->precio}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Imagen Referencial</label>
            <input id="aimagen" name="aimagen" type="file" class="form-control" placeholder="imagen">
        </div>
        <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
