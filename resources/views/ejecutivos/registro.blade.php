@extends('template')

@section('titulo_seccion')
    Sillas
@endsection

@section('contenido')
    <div class="row justify-content-center">

        <form action="{{ route('registro-ejecutivo') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nombre:</strong>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre del ejecutivo" required>
                        @if($errors->has('nombre'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nombre') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Identificacion:</strong>
                        <input type="text" name="identificacion"
                               class="form-control" placeholder="Identificacion del ejecutivo" required>
                        @if($errors->has('identificacion'))
                            <span class="help-block">
                                <strong>{{ $errors->first('identificacion') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-6 text-center">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
                <div class="col-6 text-center">
                    <a class="btn btn-primary"
                       href="{{route('listar-sillas')}}">Regresar</a>
                </div>
            </div>
        </form>
    </div>
@endsection
