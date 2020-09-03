@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3>4. Consulta montos y saldos de un cliente por número de tarjeta</h3>
                <hr>
                <form action="{{route('consultas.resultado4')}}" method="post" autocomplete="off" novalidate>
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
