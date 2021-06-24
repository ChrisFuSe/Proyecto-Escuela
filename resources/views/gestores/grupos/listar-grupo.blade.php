@extends('templates.pagina-menu-botones')

@section('estilos')
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

@section('operacion','Listar Grupo')

@section('cuerpo')
<h1>Listar grupo</h1>
<!--    Contenedor con todos los inputs del formulario para registrar un nuevo maestro  -->
<div class="container-fluid" style="margin-top: 2%;">
    <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                así conseguimos dividir en 2 columnas a los inputs del formulario               -->
    <div class="row row-cols-2">
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Nombre de grupo:</span>
                <input type="text" class="form-control" onchange="validarTR(event)" maxlength="45" name="nombre" id="nombre" value='{{$grupos->nombre}}' readonly>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Nivel:</span>
                <select type="select" class="form-control" name="id_nivel" id="id_nivel" readonly>
                    <option value='{{$grupos->id_nivel}}'>{{$nivel}}</option>
                </select>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Profesor:</span>
                <select type="select" class="form-control" name="id_profesor" id="id_profesor" readonly>
                    <option value='{{$grupos->id_profesor}}'>{{$profesor}}</option>
                </select>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Horario:</span>
                <select type="select" class="form-control" name="id_horario" id="id_horario" readonly>
                    <option value='{{$grupos->id_horario}}'>{{$horario}}</option>
                </select>
            </div>
        </div>
    </div>
    <div>
        <div class="col" id="save-alumno">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Descripcion:</span>
                <textarea class="form-control" onchange="validarTR(event)" name="descripcion" id="floatingTextarea" value='{{$grupos->descripcion}}' readonly>{{$grupos->descripcion}}</textarea>
            </div>
        </div>
    </div>
    <!--    Tabla -->
    <div class="card">
    <div class="card-body">
      <table id="example" class="table table-striped dt-responsive nowrap" style="width:100%">
        <thead>
          <tr>
            <th class="table-primary" scope="col">Número de control</th>
            <th class="table-primary" scope="col">Nombre completo</th>
        </thead>
        <tbody>
        @if(empty($alum))
        <p></p>
        @else
        @foreach($alum as $alumno)
          <tr>
            <td>{{$alumno->numero_control}}</td>
            <td>{{$alumno->nombres}} {{$alumno->ap_paterno}} {{$alumno->ap_materno}}</td>
          </tr>
        @endforeach
        @endif
        </tbody>
      </table>
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
function validarTR(e) {
 if (e.target.value.trim() == "")
  alert("Debe ingresar un valor en el campo");
}
</script>

<script>
function validarF(){
    var nombre = document.getElementById("nombre").value.trim();
    var desc = document.getElementById("floatingTextarea").value.trim();
    if(nombre == "" || desc == ""){
        alert("Debe ingresar un valor en el campo");
    }else{
        alert("Datos actualizados exitosamente");
        document.form1.submit();
    }
}
</script>
@endsection