@extends('templates.pagina-menu-botones')

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

@section('operacion','Modificar Grupo')

@section('cuerpo')
<h1>Editar grupo</h1>
<!--    Contenedor con todos los inputs del formulario para registrar un nuevo maestro  -->
<form action="{{route('actualizar.grupo', $grupos->id_grupo)}}" method="GET" accept-charset="utf-8">
    @csrf
<div class="container-fluid" style="margin-top: 2%;">
    <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                así conseguimos dividir en 2 columnas a los inputs del formulario               -->
    <div class="row row-cols-2">
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Grupo:</span>
                <input type="text" class="form-control" name="id_grupo" id="id_grupo" value='{{$grupos->id_grupo}}' readonly>
                </select>
            </div>
        </div>

        <div class="col">

        </div>

        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Nombre de grupo:</span>
                <input type="text" class="form-control" maxlength="45" name="nombre" id="nombre" value='{{$grupos->nombre}}' required>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Nivel:</span>
                <select type="select" class="form-control" name="id_nivel" id="id_nivel" required>
                    <option value='{{$grupos->id_nivel}}'>{{$nivel}}</option>
                    $array = array()
                    @foreach($nivelt as $t)
                    <option value='{{$array[] = $t->id_nivel}}'>{{$array[] = $t->descripcion}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Profesor:</span>
                <select type="select" class="form-control" name="id_profesor" id="id_profesor" required>
                    <option value='{{$grupos->id_profesor}}'>{{$profesor}}</option>
                    $array = array()
                    @foreach($profesort as $p)
                    <option value='{{$array[] = $p->id_profesor}}'>{{$array[] = $p->nombres}} {{$array[] = $p->ap_paterno}} {{$array[] = $p->ap_materno}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Horario:</span>
                <select type="select" class="form-control" name="id_horario" id="id_horario" required>
                    <option value='{{$grupos->id_horario}}'>{{$horario}}</option>
                    $array = array()
                    @foreach($horariot as $h)
                    <option value='{{$array[] = $h->id_horario}}'>{{$array[] = $h->horarios}} {{$array[] = $h->dia}}</option>
                    @endforeach
                </select>
            </div>
        </div>

    </div>
    <div>
        <div class="col" id="save-alumno">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Descripcion:</span>
                <textarea class="form-control" name="descripcion" id="descripcion" value='{{$grupos->descripcion}}' required>{{$grupos->descripcion}}</textarea>
            </div>
        </div>
    </div>

    <div class="col" style="margin-top: 3%;">
        <button type="submit" class="btn btn-dark" style="padding-inline: 2%;">ACTUALIZAR</button>
    </div>
    </form>
    @endsection