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

@section('operacion', 'Consultar pago')

@section('cuerpo')

<div class="card" style="margin-top: 1%">
    <div class="card-body">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="consulta" value="1" checked>
            <label class="form-check-label">
                Consultar Pagos
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="consulta" value="2">
            <label class="form-check-label">
                Consultar Adeudos
            </label>
        </div>
    </div>
</div>

<div class="card" id="carta_pagos">
    <div class="card-body">
        <table id="pagos" class="table table-striped dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Numero de referencia</th>
                    <th>Monto</th>
                    <th>Fecha del Pago</th>
                    <th>Descripcion</th>
                    <th>Concepto</th>
                    <th>Numero de control</th>
                    <th>Nombre</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<div class="card" id="carta_adeudos">
    <div class="card-body">
        <table id="adeudos" class="table table-striped dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Numero de adeudo</th>
                    <th>Monto</th>
                    <th>Concepto</th>
                    <th>Pagado</th>
                    <th>Fecha del adeudo</th>
                    <th>Numero de control</th>
                    <th>Nombre</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
            let pagos = $('#pagos').DataTable( {
                    "destroy":true,
                    "ajax": '/consultar/pagos',
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
                        "zeroRecords": "Nada encontrado - perdón",
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
            $('#carta_adeudos').hide();
            let adeudos = $('#adeudos').DataTable( {
                    "destroy":true,
                    "ajax": '/consultar/adeudos',
                    "columns": [
                        {data: 'id_adeudo'},
                        {data: 'monto_adeudo'},
                        {data: 'concepto'},
                        {data: 'pagado'},
                        {data: 'fecha_adeudo'},
                        {data: 'numero_control'},
                        {data: 'nombre'},
                    ],
                    "language": {
                        "lengthMenu": "Desplegando _MENU_ registros por página",
                        "zeroRecords": "Nada encontrado - perdón",
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
            let radios = $('input[name="consulta"]');
            radios.change(function(){
                var checked = radios.filter(':checked');
                if(checked.val() == '1'){
                    $('#carta_adeudos').hide();
                    $('#carta_pagos').show();
                }else if(checked.val() == '2'){
                    $('#carta_pagos').hide();
                    $('#carta_adeudos').show();
                }
            });
        } );
</script>
@endsection