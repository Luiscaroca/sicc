@extends('adminlte::page')

@section('title', 'Nuevo Artículo')

@section('content_header')
    <h1>Crear Nuevo Artículo</h1>
@stop



@section('content')
    <form action="/articulos" method="POST" enctype="multipart/form-data">
        @csrf
        <div clas="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="anombre" name="anombre" type="text" class="form-control" tabindex="1">
        </div>
        <div clas="form-group">
            <label for="" class="form-label">Inventario</label>
            <select name="inventario_id" id="Inventario_id" class="form-control">
                <option value="" disabled selected>Seleccione un Inventario</option>
                @foreach($inventarios as $inventario)
                    <option value="{{$inventario->id}}">{{$inventario->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div clas="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input id="acantidad" name="acantidad" type="text" class="form-control" tabindex="1">
        </div>
        <div>
            <label for="" class="form-label">Estado</label>
            <select name="aestado" id="aestado" class="form-control">
                <option value="" disabled selected>Seleccione un Estado</option>
                <option value="1">Activo</option>
                <option value="0">No Activo</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input id="aprecio" name="aprecio" type="text" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Imagen Referencial (Máximo 2 MB)</label>
            <input id="aimagen" name="aimagen" type="file" class="form-control" placeholder="imagen" accept="image/*">
        </div>
        <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        var uploadField = document.getElementById("aimagen");

            uploadField.onchange = function() {
            if(this.files[0].size > 2097152){
                alert("El archivo es demasiado pesado!");
                this.value = "";
            };
        }; 
    </script>
@stop
