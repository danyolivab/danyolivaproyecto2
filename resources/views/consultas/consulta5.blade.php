@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3>5. Consulta por nombre del Cliente</h3>
                <hr>
                <form action="{{route('consultas.resultado5')}}" method="post" autocomplete="off" novalidate>
                    @csrf

                    <div class="form-group">
                        <label for="nombre">Nombre Cliente</label>
                        <input
                            type="text"
                            name="nombre"
                            value="{{ old('nombre') }}"
                            placeholder="Ingrese el nombre del cliente a consultar"
                            class="form-control @error('nombre') is-invalid @enderror">
                        @error('nombre')
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
