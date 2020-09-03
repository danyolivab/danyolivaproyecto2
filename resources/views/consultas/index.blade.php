@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3>Consultas a Carga Masiva</h3>
                <hr>

                <div class="list-group">
                    <a href="{{route('consultas.consulta1')}}" class="list-group-item list-group-item-action link-consulta">
                        1. Consulta por número de tarjeta
                    </a>
                    <a href="{{ route('consultas.consulta2')}}" class="list-group-item list-group-item-action link-consulta">
                        2. Operaciones por rango de fecha (Sin Paginar)
                    </a>

                    <a href="{{ route('consultas.resultado3') }}" class="list-group-item list-group-item-action link-consulta">
                        3. Histórico de solicitudes (Paginado)
                    </a>
                    <a href="{{ route('consultas.consulta4') }}" class="list-group-item list-group-item-action link-consulta">
                        4. Consulta de totales de un Cliente
                    </a>
                    <a href="{{ route('consultas.consulta5') }}" class="list-group-item list-group-item-action link-consulta">
                        5. Consulta Por Nombre del Cliente
                    </a>
                    <a href="{{ route('consultas.consulta6') }}" class="list-group-item list-group-item-action link-consulta">
                        6. Consulta Por Primer Apellido
                        <small>No use el segundo apellido porque tenia un espacio en blanco en el nombre del campo en el archivo y me generaba problemas</small>
                    </a>
                    <a href="{{ route('consultas.consulta7') }}" class="list-group-item list-group-item-action link-consulta">
                        7. Consulta Por Código de Asociado
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection
