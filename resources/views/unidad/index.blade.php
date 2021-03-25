@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de Unidades</h1>
@stop

@section('content')

    <a href="unidades/create" class="btn btn-primary">Crear</a>

    <table class="table table-dark table-stripped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($unidades as $unidad)
                <tr>
                    <td>{{$unidad->id}}</td>
                    <td>{{$unidad->nombre}}</td>
                    <td>
                        <form action="{{ route ('unidades.destroy',$unidad->id) }}" method="POST">
                            <a href="/unidades/{{$unidad->id}}/edit" class="btn btn-info">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
