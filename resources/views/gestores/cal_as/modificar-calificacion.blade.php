@extends('templates.pagina-menu-botones')

@section('imagen-opc')
{{ asset('img/Gestor_Calificaciones_Asistencia.png') }}
@endsection

@section('operacion', 'Modificar Calificación')

@section('cuerpo')
<div class="container-fluid" style="margin-top: 2%;">
<h1>Editar calificaciones</h1>
<form action="{{route('editar.cal_as',$cal->id_calificacion)}}" method="GET" accept-charset="utf-8" name=form1>
@csrf
    <div class="row row-cols-2">
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Numero de control:</span>
                <input readonly type="text" class="form-control" id="numero_control" name="numero_control" value="{{$cal->numero_control}}">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Nivel:</span>
                <input readonly type="text" class="form-control" id="nivel" name="nivel"  value="{{$cal->id_nivel}}">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Evaluación:</span>
                <select type="select" name="unidad" id="unidad" class="form-control">
                    <option value="{{$cal->unidad}}">Unidad {{$cal->unidad}}</option>
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
                <input type="text" class="form-control" id="calificacion_oral" name="calificacion_oral" value="{{$cal->calificacion_oral}}">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Calificación escrita:</span>
                <input type="text" class="form-control" id="calificación_escrita" name="calificacion_escrita" value="{{$cal->calificacion_escrita}}">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Asistencia total:</span>
                <input type="text" class="form-control" id="asistencia_total" name="asistencia_total" value="{{$cal->asistencia_total}}">
            </div>
        </div>       
</div>
<div class="col" style="margin-top: 3%;">   
        <button type="submit" class="btn btn-dark" style="padding-inline: 2%;" >ACTUALIZAR</button>
    </div>
</form>

@endsection