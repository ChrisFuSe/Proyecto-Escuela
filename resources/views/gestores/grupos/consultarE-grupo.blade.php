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

@section('imagen-opc')
{{ asset('img/Gestor_Grupos.png') }}
@endsection

@section('operacion','Consultar grupo')

@section('cuerpo')
<h1>Consultar grupos</h1>
<div class="container-fluid"> 
  <div class="card">
    <div class="card-body" style="padding-inline : 4%;">
        <table id="example" class="table table-striped dt-responsive nowrap" style="width:100%">
          <thead>
            <tr>
              <th class="table-primary" scope="col"></th>
              <th class="table-primary" scope="col">Lista</th>
              <th class="table-primary" scope="col">Nombre del grupo</th>
              <th class="table-primary" scope="col">Nivel</th>
              <th class="table-primary" scope="col">Profesor</th>
              <th class="table-primary" scope="col">Horario</th>
              <th class="table-primary" scope="col">Descripción</th>
            </tr>
          </thead>
          <tbody>
            @if(empty($grupos))
              <p></p>
            @else
              @foreach($grupos as $grupo)
                <tr>
                  <td class="table-info"></td>
                  <td class="table-info">
                  <form action="{{route('listar.grupo',$grupo->id_grupo)}}" method="GET">
                  <button type="submit" class="btn btn-warning"><img src="{{ asset('img\file-person-fill.svg') }}" alt="Bootstrap"></button>
                  </form>
                  </td>
                  <td class="table-info">{{$grupo->nombre}}</td>
                  @foreach($niveles as $nivel)
                  @if($nivel->id_nivel == $grupo->id_nivel)
                  <td class="table-info" value="{{$grupo->id_nivel}}">{{$nivel->descripcion}}</td>
                  @endif
                  @endforeach
                  @foreach($profesores as $profesor)
                  @if($profesor->id_profesor == $grupo->id_profesor)
                  <td class="table-info" value="$grupo->id_profesor">{{$profesor->nombres}} {{$profesor->ap_paterno}} {{$profesor->ap_materno}}</td>
                  @endif
                  @endforeach
                  @foreach($horarios as $horario)
                  @if($grupo->id_horario == $horario->id_horario)
                  <td class="table-info" value="$horario->id_horario">{{$horario->horarios}} {{$horario->dia}}</td>
                  @endif
                  @endforeach
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