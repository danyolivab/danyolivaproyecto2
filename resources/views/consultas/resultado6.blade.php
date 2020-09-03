@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3 class="text-primary">Resultado de la Búsqueda por Apellido</h3>

                <hr>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Cod. Socio</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Fecha Contrato</th>
                            <th>Monto</th>
                            <th>Saldo</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($dato as $d)
                                <tr>
                                   <td>{{ $d->COD_SOCIO}}</td>
                                    <td>{{$d->NOMBRE}}</td>
                                    <td>{{$d->APELLIDO1}}</td>
                                    <td>{{$d->FCH_CON}}</td>
                                    <td>{{$d->MONTO}}</td>
                                    <td>{{$d->SALDO}}</td>
                                </tr>
                            @endforeach
                    </tbody>
                </table>
                <a href="{{route('consultas.consulta6')}}" class="btn btn-primary">Nueva consulta</a>
                <a href="{{route('consultas.index')}}" class="btn btn-danger">Menu de Consultas</a>
            </div>
        </div>
    </div>
@endsection
