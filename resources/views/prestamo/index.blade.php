@extends('adminlte::page')

@section('title', 'Préstamos Activos')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Préstamos Activos</h1>
        <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#crearModal">
            <i class="fas fa-user fa-sm text-white-50"></i>
            Crear Nuevo Préstamo
        </button>
    </div>
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
                    <th>Comentario</th>
                    <th>&nbsp</th>
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
    <!-- Modal Crear-->
    <div class="modal fade" id="crearModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Préstamo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/prestamos" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            @if($message= Session::get('ErrorInsert'))
                                <div class="col-12 alert alert-danger alert-dismissable fade show" role="alert">
                                    <h5>Errores:</h5>
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Usuario</label>
                            <select name="puser_id" id="puser_id" class="form-control">
                                <option value="" disabled selected>Seleccione al Usuario</option>
                                @foreach($pusers as $puser)
                                    <option value="{{$puser->id}}">{{$puser->nombre}}</option>
                                @endforeach
                            </select>
                            <label for="" class="form-label">Comentario</label>
                            <textarea name="comentario" id="comentario" cols="40" rows="5" class="form-control" placeholder="Comentario" value="{{old('comentario')}}"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="Submit" class="btn btn-primary">Crear Préstamo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Eliminar-->
    <div class="modal fade" id="eliminarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Préstamo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>¿Realmente desea eliminar el Préstamo?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-danger btnModalEliminar">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Editar-->
    <div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Préstamo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/prestamos/edit" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            @if($message= Session::get('ErrorInsert'))
                                <div class="col-12 alert alert-danger alert-dismissable fade show" role="alert">
                                    <h5>Errores:</h5>
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                        <input type="hidden" name="id" id="idEdit">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Usuario</label>
                            <select name="puser_id" id="puser_idedit" class="form-control">
                                <option value="" disabled selected>Seleccione al Usuario</option>
                                @foreach($pusers as $puser)
                                    <option value="{{$puser->id}}">{{$puser->nombre}}</option>
                                @endforeach
                            </select>
                            <label for="" class="form-label">Comentario</label>
                            <textarea name="comentario" id="comentarioedit" cols="40" rows="5" class="form-control" placeholder="Comentario" value="{{old('comentario')}}"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="Submit" class="btn btn-primary">Editar Préstamo</button>
                    </div>
                </form>
            </div>
        </div>
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
