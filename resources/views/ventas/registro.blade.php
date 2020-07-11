@extends('template')

@section('titulo_seccion')
    Sillas
@endsection

@section('contenido')
    <div class="row justify-content-center">

        <form action="{{ route('registro-venta') }}" method="POST">
            @csrf
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Codigo:</strong>
                        <input type="text" name="codigo" class="form-control" placeholder="Codigo" required>
                        @if($errors->has('codigo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('codigo') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Ejecutivo:</strong>
                        <select name="ejecutivo" id="ejecutivo" required class="form-control">
                            <options value="">Seleccione una opcion</options>
                            @foreach($ejecutivos as $ejecutivo)
                                <option value="{{$ejecutivo->id}}">{{$ejecutivo->nombre}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('ejecutivo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ejecutivo') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>



                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Silla:</strong>
                        <select name="silla[]" id="silla" required  class="form-control" multiple>
                            <options value="">Seleccione una opcion</options>
                            @foreach($sillas as $silla)
                                <option value="{{$silla->id}}">{{$silla->nombre}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('silla'))
                            <span class="help-block">
                                <strong>{{ $errors->first('silla') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-6 text-center">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
                <div class="col-6 text-center">
                    <a class="btn btn-primary"
                       href="{{route('listar-ventas')}}">Regresar</a>
                </div>
            </div>
        </form>
    </div>
@endsection
