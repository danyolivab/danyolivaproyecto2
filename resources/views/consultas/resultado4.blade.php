@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3 class="text-primary">Resultado Monto y Saldo por Tarjeta</h3>

                <hr>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Monto</th>
                            <th>Saldo</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($dato as $d)
                                <tr>
                                    <td>Q. {{$d->MONTO}}</td>
                                    <td>Q. {{$d->SALDO}}</td>
                                </tr>
                            @endforeach
                    </tbody>
                </table>
                <a href="{{route('consultas.consulta4')}}" class="btn btn-primary">Nueva consulta</a>
                <a href="{{route('consultas.index')}}" class="btn btn-danger">Menu de Consultas</a>
            </div>
        </div>
    </div>
@endsection
