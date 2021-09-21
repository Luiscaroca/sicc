@extends('adminlte::page')

@section('title', 'Préstamos Activos')

@section('content_header')
    <h1>Préstamos Activos</h1>
@stop

@section('content')
    <a href="prestamo/create" class="btn btn-primary mb-3">Crear</a></br>
    <div class="row">
        @if($message= Session::get('Listo'))
            <div class="col-12 alert alert-success alert-dismissible fade show" role="alert">
                <h5>Informe:</h5>
                <span>{{$message}}</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <table class="table col-12">
            <thead>
                <tr>
                    <th>ID Préstamo</th>
                    <th>Usuario</th>
                    <th>Fecha de entrega</th>
                    <th>Comentario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($prestamos as $prestamo)
                    <tr>
                        <td>{{$prestamo->id}}</td>
                        <td>{{$prestamo->nombre}}{{ $prestamo->puser->nombre }}</td>
                        <td>{{$prestamo->comentario}}</td>
                        <td>
                            <button class="btn btn-round btnEliminar" data-id="{{$prestamo->id}}" data-toggle="modal" data-target="#eliminarModal"><i class="fa fa-trash"></i> </button>
                            <button class="btn btn-round btnEditar"
                                    data-id="{{$prestamo->id}}"
                                    data-nombre="{{$prestamo->puser_id}}"
                                    data-comentario="{{$prestamo->comentario}}"
                                    data-toggle="modal" data-target="#editarModal">
                                <i class="fa fa-edit"></i> </button>
                            <a class="btn btn-round" href="detalleprestamos/create"><i class="far fa-plus-square"></i></a>

                            <a class="btn btn-round" href="detalleprestamos"><i class="fas fa-clipboard-list"></i></a>
                            <form action="{{url('prestamos',['id'=>$prestamo->id])}}" method="post" id="formEli_{{$prestamo->id}}">
                                @csrf
                                <input type="hidden" name="id" value="{{$prestamo->id}}">
                                <input type="hidden" name="_method" value="delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script>
        var idEliminar=0;
        $(document).ready(function(){
            @if($message = Session::get('ErrorInsert'))
                $("#crearModal").modal('show');
            @endif
            $(".btnEliminar").click(function (){
                idEliminar = $(this).data('id');
            });
            $(".btnModalEliminar").click(function (){
                $("#formEli_"+idEliminar).submit();
            });
            $(".btnEditar").click(function (){
                $("#idEdit").val($(this).data('id'));
                $("#puser_idedit").val($(this).data('puser_id'));
                $("#comentarioedit").val($(this).data('comentario'));
            });
        });
    </script>
@stop
