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
<h1>Reporte de Pagos</h1>
<!--    Contenedor con todos los inputs del formulario para registrar un nuevo usuario  -->
<div class="container-fluid">
    <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                 así conseguimos dividir en 2 columnas a los inputs del formulario               -->
    <div class="row">
        <div class="col-6">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text" for="mes">Seleccionar un mes</span>
                <select class="form-select" id="mes">
                    <option selected disabled>Seleccione...</option>
                    <option value="01">Enero</option>
                    <option value="02">Febrero</option>
                    <option value="03">Marzo</option>
                    <option value="04">Abril</option>
                    <option value="05">Mayo</option>
                    <option value="06">Junio</option>
                    <option value="07">Julio</option>
                    <option value="08">Agosto</option>
                    <option value="09">Septiembre</option>
                    <option value="10">Octubre</option>
                    <option value="11">Noviembre</option>
                    <option value="12">Diciembre</option>
                </select>
            </div>
        </div>
        <div class="col-3">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text" for="anio">Seleccionar un año</span>
                <select class="form-select" id="anio">
                    <option disabled>Seleccione...</option>
                    <?php
                    $anio = date("Y");
                    for(;$anio>=2007;$anio--){
                        ?>
                    <option value="{{$anio}}">{{$anio}}</option>
                    <?php
                    }
                ?>
                </select>
            </div>
        </div>
    </div>
</div>

<!--    Contenedor con todos los inputs del formulario para registrar un nuevo usuario  -->
<div class="container-fluid" id="imp1">
    <div class="card" id="carta_pagos">
        <div class="card-body">
            <table id="pagos" class="table table-striped dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th class="table-primary" scope="col">Numero de referencia</th>
                        <th class="table-primary" scope="col">Monto</th>
                        <th class="table-primary" scope="col">Fecha del Pago</th>
                        <th class="table-primary" scope="col">Descripcion</th>
                        <th class="table-primary" scope="col">Concepto</th>
                        <th class="table-primary" scope="col">Numero de control</th>
                        <th class="table-primary" scope="col">Nombre</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        let pagos = $('#pagos').DataTable({
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
            $('#mes').change(function (){
                traerTabla();
            });
            $('#anio').change(function (){
                traerTabla();
            });

        function traerTabla(){
            let pagos = $('#pagos').DataTable( {
                    "dom": 'Bfrtip',
                    "buttons": [
                        'excel', 'pdf', 'print'
                    ],
                    "destroy":true,
                    "ajax": {
                        "url":"/reporte/pagos",
                        "data": {
                            "mes":$('select#mes').val(),
                            "anio":$('select#anio').val()
                        }
                    },
                    "columns": [
                        {data: 'num_referencia'},
                        {data: 'monto'},
                        {data: 'fecha_pago'},
                        {data: 'descripcion'},
                        {data: 'concepto'},
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
                } );
        }
        } );
</script>
@endsection