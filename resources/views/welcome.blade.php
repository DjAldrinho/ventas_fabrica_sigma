@extends('template')


@section('titulo_seccion')
    Pagina principal
@endsection

@section('contenido')

    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Requerimiento</th>
                <th scope="col">Respuesta</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    Cantidad total de sillas vendidas.
                </td>
                <td>
                    {{$total_ventas[0]->cuenta}}
                </td>
            </tr>
            <tr>
                <td> Cantidad de sillas vendidas por ejecutivo comercial ordenadas de forma descendente de acuerdo a la fecha de la venta.</td>
                <td>
                    <ul>
                        @foreach($total_ventas_ejecutivo as $t)
                            <li>{{$t->nombre}} - {{$t->cuenta}}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Monto total vendido por cada ejecutivo comercial.</td>
                <td>
                    <ul>
                        @foreach($total_suma_ejecutivo as $t)
                            <li>{{$t->nombre}} - ${{$t->suma}}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action active">
            Menu
        </a>
        <a href="{{route('listar-sillas')}}" class="list-group-item list-group-item-action">Sillas</a>
        <a href="{{route('listar-ejecutivos')}}" class="list-group-item list-group-item-action">Ejecutivos</a>
        <a href="{{route('listar-ventas')}}" class="list-group-item list-group-item-action">Ventas</a>
    </div>
@endsection
