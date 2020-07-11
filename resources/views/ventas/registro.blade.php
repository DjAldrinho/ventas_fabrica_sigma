@extends('template')

@section('titulo_seccion')
    Sillas
@endsection

@section('contenido')
    <div class="row justify-content-center">

        <form action="{{ route('registro-silla') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nombre:</strong>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre del item" required>
                        @if($errors->has('nombre'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nombre') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Detalles:</strong>
                        <textarea class="form-control" style="height:150px"  required
                                  name="detalles" placeholder="Detalles"></textarea>
                        @if($errors->has('detalles'))
                            <span class="help-block">
                                <strong>{{ $errors->first('detalles') }}</strong>
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
