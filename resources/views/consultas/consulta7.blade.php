@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3>7. Consulta por Código de Asociado</h3>
                <hr>
                <form action="{{route('consultas.resultado7')}}" method="post" autocomplete="off" novalidate>
                    @csrf

                    <div class="form-group">
                        <label for="nombre">Código Asociado</label>
                        <input
                            type="text"
                            name="codigo"
                            value="{{ old('codigo') }}"
                            placeholder="Ingrese el codigo del asociado a consultar"
                            class="form-control @error('codigo') is-invalid @enderror">
                        @error('codigo')
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
