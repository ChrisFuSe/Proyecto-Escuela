@extends('templates.pagina-menu-botones')

@section('fuente')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
</style>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');
</style>
@endsection

<script>
    function validar(){
    alert("Datos actualizados de manera correcta");
}
</script>

@section('imagen-opc')
{{ asset('img/Gestor_Grupos.png') }}
@endsection

@section('operacion','Modificar Grupo')

@section('cuerpo')
<h1>Editar grupo</h1>
<!--    Contenedor con todos los inputs del formulario para registrar un nuevo maestro  -->
<form action="{{route('actualizar.grupo', $grupos->id_grupo)}}" method="GET" accept-charset="utf-8">
    @csrf
<div class="container" style="margin-top: 2%;">
    <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                así conseguimos dividir en 2 columnas a los inputs del formulario               -->
    <div class="row row-cols-2">
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Grupo:</span>
                <select type="select" class="form-control">
                    <option>{{$grupos->nombre}}</option>
                    <option>op 1</option>
                    <option>op 2</option>
                    <option>op 3</option>
                </select>
            </div>
        </div>

        <div class="col">

        </div>

        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Nombre de grupo:</span>
                <input type="text" class="form-control" name="nombre" value='{{$grupos->nombre}}'>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Nivel:</span>
                <input type="text" class="form-control" name="nivel" value='nivel'>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Profesor:</span>
                <input type="text" class="form-control" name="nombrePro" value='Profesor'>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Horario:</span>
                <label type="text" class="form-control">
            </div>
        </div>

    </div>
    <div>
        <div class="col" id="save-alumno">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Descripcion:</span>
                <textarea class="form-control" placeholder="Ingrese descripción..." id="floatingTextarea" value='{{$grupos->descripcion}}'></textarea>
            </div>
        </div>
    </div>

    <div class="col" style="margin-top: 3%;">
        <button type="submit" class="btn btn-dark" style="padding-inline: 2%;" onclick=validar();>ACTUALIZAR</button>
    </div>
    </form>
    @endsection