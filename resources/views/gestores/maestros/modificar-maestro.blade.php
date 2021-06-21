@extends('templates.pagina-menu-botones')

@section('estilos')
<link rel="stylesheet" href="{{ asset('css\dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('css\responsive.bootstrap5.min.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
@endsection

@section('header-scripts')
<script src="{{asset('js\jquery-3.5.1.js')}}"></script>
<script src="{{asset('js\jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js\dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('js\dataTables.responsive.min.js')}}"></script>
<script src="{{asset('js\responsive.bootstrap5.min.js')}}"></script>
@endsection

@section('imagen-opc')
"{{ asset('img/Gestor_Maestros.png') }}"
@endsection

<script>
function validar(){
    alert("Datos eliminados de manera correcta");
}
</script>

@section('operacion', 'Modificar Maestro')

@section('cuerpo')
@if(empty($profesor))
<p></p>
@else
<div class="container-fluid">
  <div class="card">
    <div class="card-body" style="padding-inline : 4%;">
      <table id="example" class="table table-striped dt-responsive nowrap" style="width:100%">
        <thead>
          <tr>
            <th class="table-primary" scope="col"></th>
            <th class="table-primary" scope="col">Editar</th>
            <th class="table-primary" scope="col">Eliminar</th>
            <th class="table-primary" scope="col">ID</th>
            <th class="table-primary" scope="col">RFC</th>
            <th class="table-primary" scope="col">Nombres</th>
            <th class="table-primary" scope="col">Apellido P</th>
            <th class="table-primary" scope="col">Apellido M</th>
            <th class="table-primary" scope="col">Estado</th>
            <th class="table-primary" scope="col">ciudad</th>
            <th class="table-primary" scope="col">calle</th>
            <th class="table-primary" scope="col">numero</th>
            <th class="table-primary" scope="col">colonia</th>
            <th class="table-primary" scope="col">codigo postal</th>
            <th class="table-primary" scope="col">correo</th>
            <th class="table-primary" scope="col">telefono</th>
          </tr>
        </thead>
        <tbody>
          @foreach($profesor as $profesores)
          <tr>
            <td></td>
            <td>
              <form action="{{route('llenar.profesor',$profesores->id_profesor)}}" method="GET">
                <button type="submit" class="btn btn-info"><img src="{{ asset('img\pencil-square.svg') }}"
                    alt="Bootstrap"></button>
              </form>
            </td>
            <td>
              <form action="{{route('eliminar.profesor',$profesores->id_profesor)}}" method="GET">
                <button type="submit" class="btn btn-danger" onclick=validar();><img src="{{ asset('img\x-circle.svg') }}"
                    alt="Bootstrap"></button>
              </form>
            </td>
            <td>{{$profesores->id_profesor}}</td>
            <td>{{$profesores->rfc}}</td>
            <td>{{$profesores->nombres}}</td>
            <td>{{$profesores->ap_paterno}}</td>
            <td>{{$profesores->ap_materno}}</td>
            <td>{{$profesores->estado}}</td>
            <td>{{$profesores->ciudad}}</td>
            <td>{{$profesores->calle}}</td>
            <td>{{$profesores->numero}}</td>
            <td>{{$profesores->colonia}}</td>
            <td>{{$profesores->codigo_postal}}</td>
            <td>{{$profesores->correo}}</td>
            <td>{{$profesores->telefono}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endif
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