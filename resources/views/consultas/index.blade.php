@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3>Consultas a Carga Masiva</h3>
                <hr>

                <div class="list-group">
                    <a href="{{route('consultas.consulta1')}}" class="list-group-item list-group-item-action link-consulta">
                        1. Consulta más comoda para el usuario
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
                </div>

            </div>
        </div>
    </div>
@endsection
