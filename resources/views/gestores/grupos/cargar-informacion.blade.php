@extends('templates.pagina-menu-botones')

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
                <select type="select" class="form-control">
                    <option>--Elije un grupo--</option>
                    <option>op 1</option>
                    <option>op 2</option>
                    <option>op 3</option>
                </select>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Profesor:</span>
                <select type="select" class="form-control">
                    <option>--Elije un Profesor--</option>
                    <option>Profesor 1</option>
                    <option>Profesor 2</option>
                    <option>Profesor 3</option>
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
                <span class="input-group-text">Día de inicio:</span>
                <select type="select" class="form-control">
                    <option>--Seleccione un día--</option>
                    <option>Lunes</option>
                    <option>Martes</option>
                    <option>Miercoles</option>
                    <option>Jueves</option>
                    <option>Viernes</option>
                    <option>Sabado</option>
                    <option>Domingo</option>
                </select>
              </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Día final:</span>
                <select type="select" class="form-control">
                    <option>--Seleccione un día--</option>
                    <option>Lunes</option>
                    <option>Martes</option>
                    <option>Miercoles</option>
                    <option>Jueves</option>
                    <option>Viernes</option>
                    <option>Sabado</option>
                    <option>Domingo</option>
                </select>
              </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Alumno:</span>
                <input type="text" class="form-control" placeholder="Busque por nombre" aria-label="Colonia">
                <a class="botones-navegacion"><img src="{{ asset('img/lupa.png') }}" alt="Lupa" width="50%"></a>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">¿El alumno es oyente?</span>
                <select type="select" class="form-control">
                    <option>--Seleccionar--</option>
                    <option>Si</option>
                    <option>No</option>
                </select>
            </div>
        </div>
        <div class="col" id="save-alumno">
            <div class="input-group input-group-lg mb-4">
                <button type="button" class="btn btn-dark" style="padding-inline: 2%;" onclick="validar();">Guardar alumno</button>
            </div>
        </div>
    </div>

    <div>
        <!--    Tabla -->
<div class="container" style="margin-top: 3%;">
    <table class="table table-striped " style="margin-top: 5%;" width="80%">
        <thead>
            <tr >
            <th class="table-primary" scope="col">Número de Control</th>
            <th class="table-primary" scope="col">Alumno</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td class="table-info" scope="row">1</td>
            <td class="table-info"></td>
            
            </tr>
            <tr>
            <td class="table-light" class="table-info" scope="row">2</td>
            <td class="table-light"></td>
            </tr>
            <tr>
            <td class="table-info" class="table-info" scope="row">3</td>
                <td class="table-info"></td>
            </tr>
            <tr>
            <td class="table-light" class="table-info" scope="row">4</td>
            <td class="table-light"></td>
            </tr>
        </tbody>
    </table>

</div>
    </div>

    <div class="col" style="margin-top: 3%;"> 
        <button type="button" class="btn btn-dark" style="padding-inline: 2%;" onclick="validar();">GUARDAR</button>
    </div>
</div>
@endsection