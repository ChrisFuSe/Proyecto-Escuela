@extends('templates.pagina-menu-botones')

@section('imagen-opc')
{{ asset('img/Gestor_Calificaciones_Asistencia.png') }}
@endsection

@section('operacion', 'Modificar Calificación')

@section('cuerpo')
<!--    Contenedor con todos los inputs del formulario para registrar un nuevo maestro  -->
<div class="container" style="margin-top: 2%;">
    <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                así conseguimos dividir en 2 columnas a los inputs del formulario               -->
    <div class="row row-cols-3">
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
                <span class="input-group-text">Nivel:</span>
                <select type="select" class="form-control">
                    <option>Elije un nivel</option>
                    <option>Nivel Kid's 1</option>
                    <option>Nivel Kid's 2</option>
                    <option>Nivel Kid's 3</option>
                </select>
                
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Evaluación:</span>
                <select type="select" class="form-control">
                    <option>Elija una evaluación</option>
                    <option>Unidad 1</option>
                    <option>Unidad 2</option>
                    <option>Unidad 3</option>
                </select>
                
            </div>
        </div>
        
    </div>

    <div class="col">
        <table class="table table-striped " style="margin-top: 5%;" width="80%">
            <thead>
                <tr >
                <th class="table-primary" scope="col">Número de control</th>
                <th class="table-primary" scope="col">Alumno</th>
                <th class="table-primary" scope="col">Calificación Oral</th>
                <th class="table-primary" scope="col">Calificación Escrita</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="table-info" scope="row">1</td>
                <td class="table-info"></td>
                <td class="table-info"></td>
                <td class="table-info"></td>
                </tr>
                <tr>
                <td class="table-light" class="table-info" scope="row">2</td>
                <td class="table-light"></td>
                <td class="table-light"></td>
                <td class="table-light"></td>
                </tr>
                <tr>
                <td class="table-info" class="table-info" scope="row">3</td>
                    <td class="table-info"></td>
                    <td class="table-info"></td>
                    <td class="table-info"></td>
                </tr>
                <tr>
                <td class="table-light" class="table-info" scope="row">4</td>
                <td class="table-light"></td>
                <td class="table-light"></td>
                <td class="table-light"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="col" style="margin-top: 3%;">
    <div class="btn-real" style="display: inline; padding-right: 5%;">
        <button type="button" class="btn btn-dark" style="padding-inline: 2%;">GUARDAR CAMBIOS</button>
    </div> 
</div>
@endsection