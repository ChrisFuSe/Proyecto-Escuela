@extends('templates.pagina-menu-botones')

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css\dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css\responsive.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
@endsection

@section('header-scripts')
    <script src="{{asset('js\jquery-3.5.1.js')}}"></script>
    <script src="{{asset('js\jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js\dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('js\dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('js\responsive.bootstrap5.min.js')}}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
@endsection

@section('imagen-opc')
{{ asset('img/Gestor_Grupos.png') }}
@endsection

@section('operacion','Creaciones grupo')

@section('cuerpo')
<form action="{{route('crear_horario.grupo')}}" method="POST" accept-charset="UTF-8">
    @csrf
    <h1>Registrar horario</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Días:</span>
                    <select class="selectpicker" multiple data-live-search="true" name="dias[]" id="horario" required>
                            <option value="Lunes">Lunes</option>
                            <option value="Martes">Martes</option>
                            <option value="Miercoles">Miercoles</option>
                            <option value="Jueves">Jueves</option>
                            <option value="Viernes">Viernes</option>
                            <option value="Sabado">Sabado</option>
                            <option value="Domingo">Domingo</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row row-cols-2">    
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Hora de inicio:</span>
                    <input type="time" class="form-control" aria-label="Horario Inicio" name="horai" required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Hora de cierre:</span>
                    <input type="time" class="form-control" aria-label="Horario Cierre" name="horaf" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                    <div class="btn-real" style="display: inline;">
                        <button type="submit" class="btn btn-dark" style="padding-inline: 2%;">GUARDAR</button>
                     </div>
            </div>
        </div>
    </div>
</form>
<p></p>
<h1>Consultar/Eliminar horarios</h1>
<p></p>
@if(empty($horarios))
<p></p>
@else
<div class="container-fluid">
  <div class="card">
    <div class="card-body" style="padding-inline : 4%;">
        <table id="example" class="table table-striped dt-responsive nowrap" style="width:100%">
          <thead>
            <tr>
              <th class="table-primary" scope="col">Eliminar</th>
              <th class="table-primary" scope="col">ID Horario</th>
              <th class="table-primary" scope="col">Horarios</th>
              <th class="table-primary" scope="col">Dias</th>
            </tr>
          </thead>
          <tbody>
              @foreach($horarios as $horario)
                <tr>
                  <td class="table-info">
                  <form action="{{route('eliminar_horario.grupo',$horario->id_horario)}}" method="GET">
                  <button type="submit" class="btn btn-danger"><img src="{{ asset('img\x-circle.svg') }}" alt="Bootstrap"></button>
                  </form>
                  </td>
                  <td class="table-info">{{$horario->id_horario}}</td>
                  <td class="table-info">{{$horario->horarios}}</td>
                  <td class="table-info">{{$horario->dia}}</td>
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