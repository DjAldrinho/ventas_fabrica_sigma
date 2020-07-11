@extends('template')

@section('titulo_seccion')
    Sillas
@endsection

@section('contenido')
    @if(session('mensaje'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{session('mensaje')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="row justify-content-center">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Detalles</th>
                <th scope="col">Estado</th>
                <th scope="col">Creado</th>
                <th scope="col">Actualizado</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sillas as $key=>$silla)
                <tr>
                    <td>{{$key}}</td>
                    <td>{{$silla->nombre}}</td>
                    <td>{{$silla->detalles}}</td>
                    <td>{{$silla->estado}}</td>
                    <td>{{$silla->created_at->diffForHumans()}}</td>
                    <td>{{$silla->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="row justify-content-between">
        <div class="col-4">
            <a class="btn btn-success btn-info btn-block"
               href="{{route('home')}}">Principal</a>
        </div>
        <div class="col-4">
            <a class="btn btn-success btn-block"
                href="{{route('registro-silla')}}">Registrar Silla</a>
        </div>
    </div>
@endsection
