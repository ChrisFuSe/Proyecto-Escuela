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

@section('fuente')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
  </style> 
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');
  </style> 
@endsection

<script>
 function validar(){
     alert('Se ha eliminado exitosamente');
 }
</script>

@section('imagen-opc')
{{ asset('img/Gestor_Grupos.png') }}
@endsection

@section('operacion','Consultar grupo')

@section('cuerpo')
<h1>Consultar/Eliminar/Editar grupo</h1>
<div class="container"> 
  <div class="card">
    <div class="card-body" style="padding-inline : 4%;">
        <table id="example" class="table table-striped dt-responsive nowrap" style="width:100%">
          <thead>
            <tr>
              <th class="table-primary" scope="col"></th>
              <th class="table-primary" scope="col">Editar</th>
              <th class="table-primary" scope="col">Eliminar</th>
              <th class="table-primary" scope="col">Nombre del grupo</th>
              <th class="table-primary" scope="col">Nivel</th>
              <th class="table-primary" scope="col">Profesor</th>
              <th class="table-primary" scope="col">Días</th>
              <th class="table-primary" scope="col">Hora de inicio</th>
              <th class="table-primary" scope="col">Hora de cierre</th>
              <th class="table-primary" scope="col">Descripción</th>
            </tr>
          </thead>
          <tbody>
            @if(empty($usuarios))
              <p></p>
            @else
              @foreach($grupos as $grupo)
                <tr>
                  <td class="table-info"></td>
                  <td class="table-info">
                  <form action="{{route('llenar.usuario',$usuario->id)}}" method="GET">
                  <button type="submit" class="btn btn-info"><img src="{{ asset('img\pencil-square.svg') }}" alt="Bootstrap"></button>
                  </form>
                  </td>
                  <td class="table-info">
                  <form action="{{route('eliminar.usuario',$usuario->id)}}" method="GET">
                  <button type="submit" class="btn btn-danger" onclick=validar();><img src="{{ asset('img\x-circle.svg') }}" alt="Bootstrap"></button>
                  </form>
                  </td>
                  <td class="table-info">{{$grupo->nombre}}</td>
                  <td class="table-info">{{$grupo->nombres}}</td>
                  <td class="table-info">{{$grupo->ap_paterno}}</td>
                  <td class="table-info">{{$grupo->ap_materno}}</td>
                  <td class="table-info">{{$grupo->email}}</td>
                  <td class="table-info">{{$grupo->tipo}}</td>
                  <td class="table-info">{{$grupo->descripcion}}</td>
                </tr>
              @endforeach
            @endif
          </tbody>
        </table>
    </div>
  </div>
</div>
</form>
@endsection

@section('scripts')
    <script>
  $(document).ready(function() {
            $('#example').DataTable({
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
            });
        } );
</script>
@endsection