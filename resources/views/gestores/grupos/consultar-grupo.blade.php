@extends('templates.pagina-menu-botones')

@section('imagen-opc')
{{ asset('img/Gestor_Grupos.png') }}
@endsection

@section('operacion','Consultar grupo')

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
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">ID Grupo:</span>
                <label type="text" class="form-control">
            </div>
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
    <div class="col" id="save-alumno">
        <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Descripcion:</span>
            <textarea class="form-control" id="floatingTextarea"></textarea>
        </div>
    </div>
    <div>
        <!--    Tabla -->
        <div class="container" style="margin-top: 3%;">
            <table class="table table-striped " style="margin-top: 5%;" width="80%">
                <thead>
                    <tr>
                        <th class="table-primary" scope="col">Número de control</th>
                        <th class="table-primary" scope="col">Alumno</th>
                        <th class="table-primary" scope="col">¿Es Oyente?</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table-info" scope="row">1</td>
                        <td class="table-info"></td>
                        <td class="table-info"></td>

                    </tr>
                    <tr>
                        <td class="table-light" class="table-info" scope="row">2</td>
                        <td class="table-light"></td>
                        <td class="table-light"></td>
                    </tr>
                    <tr>
                        <td class="table-info" class="table-info" scope="row">3</td>
                        <td class="table-info"></td>
                        <td class="table-info"></td>
                    </tr>
                    <tr>
                        <td class="table-light" class="table-info" scope="row">4</td>
                        <td class="table-light"></td>
                        <td class="table-light"></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
    @endsection