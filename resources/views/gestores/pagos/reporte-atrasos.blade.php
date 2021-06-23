@extends('templates.pagina-menu-botones')

@section('estilos')
<link rel="stylesheet" href="{{ asset('css\dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('css\responsive.bootstrap5.min.css') }}">
@endsection

@section('header-scripts')
<script src="{{asset('js\jquery-3.5.1.js')}}"></script>
<script src="{{asset('js\jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js\dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('js\dataTables.responsive.min.js')}}"></script>
<script src="{{asset('js\responsive.bootstrap5.min.js')}}"></script>
@endsection

@section('imagen-opc')
{{ asset('img/Gestor_Pagos.png') }}
@endsection

@section('operacion','Reporte de Pago')

@section('cuerpo')
<h1>Reporte de Atrasos</h1>
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
    <div class="col" style="margin-top: 1%;">
        <button type="button" class="btn btn-dark" style="padding-inline: 2%;" onclick="javascript:imprim1();">IMPRIMIR</button>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        traerTabla();

        function traerTabla(){
            let pagos = $('#adeudos').DataTable( {
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
<script>
function imprim1(){
    var mywindow = window.open('', 'PRINT', 'height=400,width=600');
    mywindow.document.write('<html><head>');
  	mywindow.document.write('<style>#pagos{width:100%;border-collapse:collapse;margin:16px 0 16px 0;}#pagos th{border:1px solid #ddd;padding:4px;background-color:#d4eefd;text-align:left;font-size:15px;}#pagos td{border:1px solid #ddd;text-align:left;padding:6px;}</style>');
    mywindow.document.write('</head><body >');
    mywindow.document.write(document.getElementById('imp1').innerHTML);
    mywindow.document.write('</body></html>');
    mywindow.document.close(); // necesario para IE >= 10
    mywindow.focus(); // necesario para IE >= 10
    mywindow.print();
    mywindow.close();
    return true;}
</script>
@endsection