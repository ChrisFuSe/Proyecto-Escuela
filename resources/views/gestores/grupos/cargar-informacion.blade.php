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
<!--    Contenedor con todos los inputs del formulario para registrar un nuevo maestro  -->
<div class="container" style="margin-top: 2%;">
    <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                    así conseguimos dividir en 2 columnas a los inputs del formulario               -->
    <div class="row row-cols-2">
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Grupo:</span>
                <select type="select" class="form-control" id="grupo">
                    <option>Elije un grupo...</option>
                    @foreach ($grupos as $grupo)
                        <option value="{{$grupo->id_grupo}}">{{$grupo->nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Profesor:</span>
                <select type="select" class="form-control">
                    <option>Elije un Profesor...</option>
                    @foreach ($profesores as $profesor)
                        <option value="{{$profesor->id_profesor}}">{{$profesor->nombres}} {{$profesor->ap_paterno}} {{$profesor->ap_materno}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Hora de inicio:</span>
                <input type="time" class="form-control" aria-label="Horario Inicio">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Hora de cierre:</span>
                <input type="time" class="form-control" aria-label="Horario Cierre">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Días:</span>
                <select class="form-control" id="horario">
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
    <!--    Tabla -->
    <table id="example" class="table table-striped dt-responsive nowrap" style="width:100%">
          <thead>
            <tr>
              <th class="table-primary" scope="col"></th>
              <th class="table-primary" scope="col">Agregar</th>
              <th class="table-primary" scope="col">Número de control</th>
              <th class="table-primary" scope="col">Nombre completo</th>
              <th class="table-primary" scope="col">Id Grupo</th>
              <th class="table-primary" scope="col">Oyente clase</th>
          </thead>
          <tbody>
            @if(empty($alumnos))
              <p></p>
            @else
              @foreach($alumnos as $alumno)
                <tr>
                  <td class="table-info"></td>
                  <td class="table-info">
                  <form action="{{route('agregar_alumno.grupo',$alumno->numero_control)}}" method="GET">
                  <button type="submit" class="btn btn-success"><img src="{{ asset('img\person-plus-fill.svg') }}" alt="Bootstrap"></button>
                  </form>
                  </td>
                  <td class="table-info" value="{{$alumno->numero_control}}">{{$alumno->numero_control}}</td>
                  <td class="table-info">{{$alumno->nombres}} {{$alumno->ap_paterno}} {{$alumno->ap_materno}}</td>
                  <td class="table-info">{{$alumno->id_grupo}}</td>
                  <td class="table-info">{{$alumno->oyente_clase}}</td>
                </tr>
              @endforeach
            @endif
          </tbody>
        </table>
</div>

<div class="col" style="margin-top: 3%;">
    <button type="button" class="btn btn-dark" style="padding-inline: 2%;">GUARDAR</button>
</div>
</div>
@endsection

@section('scripts')
<!--<script>
    $('select').selectpicker();
</script> 
<script src="{{asset('js/consultar-grupo.js')}}"></script>-->
<script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
</script>
@endsection