@extends('templates.pagina-menu-botones')

@section('estilos')
<meta name="_token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{asset('css/bootstrap-select.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('css\dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('css\responsive.bootstrap5.min.css') }}">
@endsection

@section('header-scripts')
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js\jquery-3.5.1.js')}}"></script>
<script src="{{asset('js\jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js\dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('js\dataTables.responsive.min.js')}}"></script>
<script src="{{asset('js\responsive.bootstrap5.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/bootstrap-select.min.js')}}"></script>
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

@section('operacion','Cargar Informacion')

@section('cuerpo')
@csrf
<!--    Contenedor con todos los inputs del formulario para registrar un nuevo maestro  -->
<div class="container-fluid" style="margin-top: 2%;">
  <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                    así conseguimos dividir en 2 columnas a los inputs del formulario               -->
  <div class="row row-cols-2">
    <div class="col">
      <div class="input-group input-group-lg mb-4">
        <span class="input-group-text">Grupo:</span>
        <select type="select" class="form-control" id="grupo_s" name="grupo_s">
          <option disabled>Elije un grupo...</option>
          @foreach ($grupos as $grupo)
          <option value="{{$grupo->id_grupo}}">{{$grupo->nombre}}</option>
          @endforeach
        </select>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <!--    Tabla -->
      <table id="example" class="table table-striped dt-responsive nowrap" style="width:100%">
        <thead>
          <tr>
            <th class="table-primary" scope="col">Agregar</th>
            <th class="table-primary" scope="col">Quitar</th>
            <th class="table-primary" scope="col">Número de control</th>
            <th class="table-primary" scope="col">Nombre completo</th>
            <th class="table-primary" scope="col">Id Grupo</th>
        </thead>
        <tbody>
          @if(empty($alumnos))
          <p></p>
          @else
          @foreach($alumnos as $alumno)
          <tr>
            <td>
              <button type="button" class="btn btn-success" onclick="agregar_alumno({{$alumno}})"><img
                  src="{{ asset('img\person-plus-fill.svg') }}" alt="Bootstrap"></button>
            </td>
            <td>
              <button type="button" class="btn btn-danger" onclick="quitar_alumno({{$alumno}})"><img
                  src="{{ asset('img\person-x-fill.svg') }}" alt="Bootstrap"></button>
            </td>
            <td>{{$alumno->numero_control}}</td>
            <td>{{$alumno->nombres}} {{$alumno->ap_paterno}} {{$alumno->ap_materno}}</td>
            <td>{{$alumno->id_grupo}}</td>
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
<script>
  function agregar_alumno(alumno){
      $.ajax({
        url: '/agregar_alumno/grupo',
        method: 'POST',
        data:{
            _token: $('input[name="_token"]').val(),
            numero_control: alumno.numero_control,
            grupo: $('#grupo_s').val()
        },
    }).done(function(res){
      alert(res);
      location.reload();
    });
    }
</script>
<script>
  function quitar_alumno(alumno){
      $.ajax({
        url: '/quitar_alumno/grupo',
        method: 'POST',
        data:{
            _token: $('input[name="_token"]').val(),
            numero_control: alumno.numero_control,
            grupo: $('#grupo_s').val()
        },
    }).done(function(res){
      alert(res);
      location.reload();
    });
    }
</script>
@endsection