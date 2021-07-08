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

<div class="container-fluid" style="margin-top: 2%;">
<h1>Registrar calificaciones</h1>
<form action="{{route('registrar.calificaciones')}}" method="POST" accept-charset="utf-8" name=form1>
@csrf
    <div class="row row-cols-2">
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Numero de control:</span>
                <input readonly type="text" class="form-control" id="numero_control" name="numero_control" value="{{$id}}">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Nivel:</span>
                <input readonly type="text" class="form-control" id="nivel" name="nivel"  value="{{$nivel}}" >
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Evaluación:</span>
                <select type="select" name="unidad" id="unidad" class="form-control" required>
                    <option disabled>Elija una evaluación</option>
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
                <input type="number" min="0" max="100" class="form-control" id="calificacion_oral" name="calificacion_oral" required>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Calificación escrita:</span>
                <input type="number" min="0" max="100" class="form-control" id="calificación_escrita" name="calificacion_escrita" required>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Asistencia total:</span>
                <input type="number" min="0" max="100" class="form-control" id="asistencia_total" name="asistencia_total" required>
            </div>
        </div>       
</div>
<div class="col" style="margin-top: 3%;">   
        <button type="submit" class="btn btn-dark" style="padding-inline: 2%;" >GUARDAR</button>
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