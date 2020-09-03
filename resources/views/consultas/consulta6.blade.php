@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3>6. Consulta por Primer Apellido</h3>
                <hr>
                <form action="{{route('consultas.resultado6')}}" method="post" autocomplete="off" novalidate>
                    @csrf

                    <div class="form-group">
                        <label for="nombre">Apellido Cliente</label>
                        <input
                            type="text"
                            name="apellido"
                            value="{{ old('apellido') }}"
                            placeholder="Ingrese el apellido del cliente a consultar"
                            class="form-control @error('apellido') is-invalid @enderror">
                        @error('apellido')
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
