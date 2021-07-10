@extends('templates.pagina-menu-botones')

@section('estilos')
<link rel="stylesheet" href="{{ asset('css\dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('css\responsive.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('css\buttons.dataTables.min.css') }}">
@endsection

@section('header-scripts')
<script src="{{asset('js\jquery-3.5.1.js')}}"></script>
<script src="{{asset('js\jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js\dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('js\dataTables.responsive.min.js')}}"></script>
<script src="{{asset('js\imprimir-reportes\dataTables.buttons.min.js')}}"></script>
<script src="{{asset('js\imprimir-reportes\jszip.min.js')}}"></script>
<script src="{{asset('js\imprimir-reportes\pdfmake.min.js')}}"></script>
<script src="{{asset('js\imprimir-reportes\vfs_fonts.js')}}"></script>
<script src="{{asset('js\imprimir-reportes\buttons.html5.min.js')}}"></script>
<script src="{{asset('js\imprimir-reportes\buttons.print.min.js')}}"></script>
@endsection

@section('imagen-opc')
{{ asset('img/Gestor_Pagos.png') }}
@endsection

@section('operacion','Reporte de Pago')

@section('cuerpo')
<h1>Reporte de atrasos anteriores a un mes</h1>
<!--    Contenedor con todos los inputs del formulario para registrar un nuevo usuario  -->
<div class="container-fluid" id="imp1">
    <div class="card" id="carta_pagos">
        <div class="card-body">
            <table id="adeudos" class="table table-striped dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th class="table-primary" scope="col">Numero de adeudo</th>
                        <th class="table-primary" scope="col">Monto</th>
                        <th class="table-primary" scope="col">Concepto</th>
                        <th class="table-primary" scope="col">Fecha del adeudo</th>
                        <th class="table-primary" scope="col">Numero de control</th>
                        <th class="table-primary" scope="col">Nombre</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        @if(auth()->user()->tipo == '1')
        <div class="col" style="margin-top: 1%;">
            <form action="{{route('enviar.mail')}}" method="GET">
                <button type="submit" class="btn btn-dark" style="padding-inline: 2%;">MANDAR ALERTA</button>
            </form>
        </div>
        @endif
    </div>
</div>

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        traerTabla();

        function traerTabla(){
            let pagos = $('#adeudos').DataTable( {
                    "dom": 'Bfrtip',
                    "buttons": [
                        'excel', 'pdf', 'print'
                    ],
                    "destroy":true,
                    "ajax": '/reporte/adeudos',
                    "columns": [
                        {data: 'id_adeudo'},
                        {data: 'monto_adeudo'},
                        {data: 'concepto'},
                        {data: 'fecha_adeudo'},
                        {data: 'numero_control'},
                        {data: 'nombre'},
                    ],
                    "language": {
                        "lengthMenu": "Desplegando _MENU_ registros por página",
                        "zeroRecords": "No se encontraron registros",
                        "info": "Mostrando página _PAGE_ de _PAGES_",
                        "infoEmpty": "No hay registros disponibles",
                        "infoFiltered": "(filtrados desde los _MAX_ registros totales)",
                        "search": "Buscar...",
                        "paginate": {
                            'next': 'Siguiente',
                            'previous': 'Anterior'
                        }
                    }
                });
        }
    });
</script>
@endsection