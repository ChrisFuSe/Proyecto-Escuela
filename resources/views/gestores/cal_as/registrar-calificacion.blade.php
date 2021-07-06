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

@section('operacion', 'Registrar Calificación')


@section('imagen-opc')
{{ asset('img/Gestor_Calificaciones_Asistencia.png') }}
@endsection

@section('cuerpo')
@csrf
<div class="container-fluid" style="margin-top: 2%;">
<h1>Consultar/Editar calificaciones</h1>
@if(empty($grupos))
<p></p>
@else
    <div class="row row-cols-3">
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Número control:</span>
                <input readonly type="text" class="form-control" id="nivel" name="nivel" value="{{$alumnos->nombre}} {{$alumnos->ap_paterno}} {{$alumnos->ap_materno}}">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Nivel:</span>
                <input readonly type="text" class="form-control" id="nivel" name="nivel" value="{{$grupos->id_nivel}}">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Evaluación:</span>
                <select type="select" class="form-control">
                    <option>Elija una evaluación</option>
                    <option value="1">Unidad 1</option>
                    <option value="2">Unidad 2</option>
                    <option value="3">Unidad 3</option>
                    <option value="4">Unidad 4</option>
                    <option value="5">Unidad 5</option>
                    <option value="6">Unidad 6</option>
                </select>
            </div>
        </div> 
        <div class="col">
            <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Calificación oral:</span>
                <input type="text" class="form-control" id="calor" name="calor">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Calificación escrita:</span>
                <input type="text" class="form-control" id="cales" name="cales">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Asistencia total:</span>
                <input type="text" class="form-control" id="ast" name="ast">
            </div>
        </div>





    </div>
    @endif
</div>


</form>
@endsection

@section('scripts')
<script src={{asset('js\niveles.js')}}></script>
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