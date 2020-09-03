@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3>1. Consulta por rango de fecha</h3>
                <hr>
                <form action="{{route('consultas.resultado2')}}" method="post" autocomplete="off" novalidate>
                    @csrf

                    <div class="form-group">
                        <label for="tarjeta">Fecha Inicial</label>
                        <input
                            type="date"
                            name="date1"
                            value="{{ old('date1') }}"
                            class="form-control @error('date1') is-invalid @enderror">
                        @error('date1')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="tarjeta">Fecha Inicial</label>
                        <input
                            type="date"
                            name="date2"
                            value="{{ old('date2') }}"
                            class="form-control @error('date2') is-invalid @enderror">
                        @error('date2')
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
