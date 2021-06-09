@extends('templates.pagina-menu-botones')

@section('imagen-opc')
{{ asset('img/Gestor_Grupos.png') }}
@endsection

@section('operacion','Modificar Grupo')

@section('cuerpo')
<!--    Contenedor con todos los inputs del formulario para registrar un nuevo maestro  -->
<div class="container" style="margin-top: 2%;">
    <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                así conseguimos dividir en 2 columnas a los inputs del formulario               -->
    <div class="row row-cols-2">
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Grupo:</span>
                <select type="select" class="form-control">
                    <option>Elije un grupo</option>
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
                <label type="text" class="form-control">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Nivel:</span>
                <label type="text" class="form-control">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Profesor:</span>
                <label type="text" class="form-control">
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
                <textarea class="form-control" placeholder="Ingrese descripción..." id="floatingTextarea"></textarea>
            </div>
        </div>
    </div>

    <div class="col">
        <button type="button" class="btn btn-dark" style="padding-inline: 2%;" onclick="validar();">Guardar
            Cambios</button>
    </div>
    @endsection