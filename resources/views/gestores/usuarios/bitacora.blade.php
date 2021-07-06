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
"{{ asset('img/Gestor_Usuarios.png') }}"
@endsection

@section('operacion', 'Bitácora')

@section('cuerpo')
<div class="card" id="carta_bitacora">
  <div class="card-body">
    <table id="bitacora" class="table table-striped dt-responsive nowrap" style="width:100%">
      <thead>
        <tr>
          <th class="table-primary" scope="col">ID</th>
          <th class="table-primary" scope="col">Usuario</th>
          <th class="table-primary" scope="col">Gestor</th>
          <th class="table-primary" scope="col">Accion ejecutada</th>
          <th class="table-primary" scope="col">Fecha y Hora</th>
        </tr>
      </thead>
    </table>
  </div>
</div>
@endsection

@section('scripts')
<script>
  $(document).ready(function() {
      let bitacora = $('#bitacora').DataTable({
        "destroy":true,
                    "ajax": '/bitacora',
                    "columns": [
                        {data: 'id_movimiento'},
                        {data: 'usuario'},
                        {data: 'movimiento'},
                        {data: 'descripcion'},
                        {data: 'fechayhora'},
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
    });
</script>
@endsection