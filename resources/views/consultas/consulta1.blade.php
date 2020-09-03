@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3>1. Consulta más comoda para el usuario (Por Tarjeta)</h3>
                <p>Elegí esta consulta como la más comoda porque es un documento que es importante para los usuarios que cargan con ellos, el nombre y apellido está repetido muchas veces y el código de asociado rara vez alguien lo sabria</p>
                <hr>
                <form action="{{route('consultas.resultado1')}}" method="post" autocomplete="off" novalidate>
                    @csrf

                    <div class="form-group">
                        <label for="tarjeta">Número de Tarjeta</label>
                        <input
                            type="text"
                            name="tarjeta"
                            value="{{ old('tarjeta') }}"
                            placeholder="Ingrese el número de tarjeta a consultar"
                            class="form-control @error('tarjeta') is-invalid @enderror">
                        @error('tarjeta')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Consultar</button>
                        <a href={{ route('consultas.index') }} class="btn btn-danger">Regresar</a>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
