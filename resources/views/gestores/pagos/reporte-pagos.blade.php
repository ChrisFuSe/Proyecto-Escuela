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
 <!--    Contenedor con todos los inputs del formulario para registrar un nuevo usuario  -->
 <div class="container">
  <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                 así conseguimos dividir en 2 columnas a los inputs del formulario               -->
     <div class="row row-cols-2">
         <div class="col">
             <div class="input-group input-group-lg mb-4">
                 <span class="input-group-text" for="inputGroupSelect01">Seleccionar un mes</span>
                 
                 <select class="form-select" id="inputGroupSelect01">
                   <option selected>Seleccione...</option>
                   <option value="1">Enero</option>
                   <option value="2">Febrero</option>
                   <option value="3">Marzo</option>
                   <option value="4">Abril</option>
                   <option value="5">Mayo</option>
                   <option value="6">Junio</option>
                   <option value="7">Julio</option>
                   <option value="8">Agosto</option>
                   <option value="9">Septiembre</option>
                   <option value="10">Octubre</option>
                   <option value="11">Noviembre</option>
                   <option value="12">Diciembre</option>
                 </select>
               </div>
         </div>
         <div class="col">

         </div>
         
         <div class="col">
             <div class="input-group input-group-lg mb-4">
                 <span class="input-group-text">Pagos totales</span>
                 <input type="text" class="form-control" placeholder="Pagos realizados..." aria-label="Pagos realizados">
             </div>
         </div>


     </div>      
 </div>

 <!--    Contenedor con todos los inputs del formulario para registrar un nuevo usuario  -->
 <div class="container" id="imp1">
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
 <div class="container"> 
      <div class="col" style="margin-top: 1%;">
         <button type="button" class="btn btn-dark" style="padding-inline: 2%;" onclick="javascript:imprim1();">IMPRIMIR</button>
     </div>
  </div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
            let pagos = $('#pagos').DataTable( {
                    "destroy":true,
                    "ajax": '/reporte/pagos',
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
        } );
</script>
<script>
function imprim1(){
    var mywindow = window.open('', 'PRINT', 'height=400,width=600');
    mywindow.document.write('<html><head>');
  	mywindow.document.write('<style>#pagos{width:100%;border-collapse:collapse;margin:16px 0 16px 0;}#pagos th{border:1px solid #ddd;padding:4px;background-color:#d4eefd;text-align:left;font-size:15px;}#pagos td{border:1px solid #ddd;text-align:left;padding:6px;}</style>');
    mywindow.document.write('</head><body >');
    mywindow.document.write(document.getElementById('pagos').innerHTML);
    mywindow.document.write('</body></html>');
    mywindow.document.close(); // necesario para IE >= 10
    mywindow.focus(); // necesario para IE >= 10
    mywindow.print();
    mywindow.close();
    return true;}
</script>
@endsection