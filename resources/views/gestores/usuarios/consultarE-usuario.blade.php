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
"{{ asset('img/Gestor_Usuarios.png') }}"
@endsection

@section('operacion', 'consultar-eliminar')

  
@section('cuerpo')
<h1>Consultar/Eliminar/Editar usuario</h1>
<div class="container-fluid"> 
  <div class="card">
    <div class="card-body" style="padding-inline : 4%;">
        <table id="example" class="table table-striped dt-responsive nowrap" style="width:100%">
          <thead>
            <tr>
              <th class="table-primary" scope="col"></th>
              <th class="table-primary" scope="col">Editar</th>
              <th class="table-primary" scope="col">Eliminar</th>
              <th class="table-primary" scope="col">Nombre de usuario</th>
              <th class="table-primary" scope="col">Nombres</th>
              <th class="table-primary" scope="col">Apellido Pat</th>
              <th class="table-primary" scope="col">Apellido Mat</th>
              <th class="table-primary" scope="col">Correo electrónico</th>
              <th class="table-primary" scope="col">Tipo de usuario</th>
            </tr>
          </thead>
          <tbody>
            @if(empty($usuarios))
              <p></p>
            @else
              @foreach($usuarios as $usuario)
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
                  <td class="table-info">{{$usuario->username}}</td>
                  <td class="table-info">{{$usuario->nombres}}</td>
                  <td class="table-info">{{$usuario->ap_paterno}}</td>
                  <td class="table-info">{{$usuario->ap_materno}}</td>
                  <td class="table-info">{{$usuario->email}}</td>
                  <td class="table-info">{{$usuario->tipo}}</td>
                </tr>
              @endforeach
            @endif
          </tbody>
        </table>
    </div>
  </div>
</div>
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