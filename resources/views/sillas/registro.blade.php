@extends('template')

@section('titulo_seccion')
    Sillas
@endsection

@section('contenido')
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
                <td>{{$aula->created_at->diffForHumans()}}</td>
                <td>{{$aula->updated_at->diffForHumans()}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row justify-content-center">
        <div class="col-3">
            <a class="btn btn-success btn-block"
                href="{{route('registro-silla')}}">Registrar Silla</a>
        </div>
    </div>
@endsection
