@extends('template')

@section('titulo_seccion')
    Ventas
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
                <th scope="col">Codigo</th>

                <th scope="col">Ejecutivo</th>
                <th scope="col">Creado</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ventas as $key=>$venta)
                <tr>
                    <td>{{$key}}</td>
                    <td>{{$venta->codigo}}</td>

                    <td>{{$venta->ejecutivo->nombre}}</td>
                    <td>{{$venta->created_at->diffForHumans()}}</td>
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
                href="{{route('registro-venta')}}">Registrar Venta</a>
        </div>
    </div>
@endsection
