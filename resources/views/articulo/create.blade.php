@extends('adminlte::page')

@section('title', 'Nuevo Artículo')

@section('content_header')
    <h1>Crear Nuevo Artículo</h1>
    <h5>Todos los campos deben ser rellenados</h5>
@stop

@section('content')
    <form action="/articulos" method="POST" enctype="multipart/form-data">
        @csrf
        <div clas="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="anombre" name="anombre" type="text" class="form-control" tabindex="1">
        </div>
        <div clas="mb-3">
            <label for="" class="form-label">Número de serie</label>
            <input id="aserie" name="aserie" type="text" class="form-control" tabindex="1">
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
        <div clas="mb-3">
            <label for="" class="form-label">Número de orden de compra</label>
            <input id="aorden" name="aorden" type="text" class="form-control" tabindex="1">
        </div>
        <div>
            <label for="" class="form-label">Tipo de documento</label>
            <select onchange="displayDivDemo('Ocultar', this)" name="atipodocumento" id="atipodocumento" class="form-control">
                <option value="" disabled selected>Seleccione un Tipo de documento</option>
                <option value="Boleta">Boleta</option>
                <option value="Factura">Factura</option>
            </select>
        </div>
        
        <style>
            #Ocultar {
                display: none;
            }
        </style>

        <div clas="mb-3">
            <label for="" class="form-label">Número de documento</label>
            <input id="adocumento" name="adocumento" type="text" class="form-control" tabindex="1">
        </div>
        <div id="Ocultar" clas="mb-3">
            <label for="" class="form-label">Nombre de proveedor</label>
            <input id="aproveedor" name="aproveedor" type="text" class="form-control" tabindex="1" value="---">
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

    <script>
        function displayDivDemo(id, elementValue) {
            document.getElementById(id).style.display = elementValue.value == 'Factura' ? 'block' : 'none';
        }
    </script>
@stop
