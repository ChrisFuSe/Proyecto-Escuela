@extends('templates.pagina-menu-botones')

@section('imagen-opc')
"{{ asset('img/Gestor_Usuarios.png') }}"
@endsection

@section('operacion', 'Registrar Usuario')

@section('cuerpo')
<!--    Contenedor con todos los inputs del formulario para registrar un nuevo usuario  -->
<div class="container" style="margin-top: 2%;">
    <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                así conseguimos dividir en 2 columnas a los inputs del formulario               -->
    <div class="row row-cols-2">
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Nombre de usuario</span>
                <input type="text" class="form-control" placeholder="Nombre usuario..." aria-label="Nombre de usuario">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Nombre(s)</span>
                <input type="text" class="form-control" placeholder="Nombres..." aria-label="Nombres" >
                
              </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Correo electrónico</span>
                <input type="text" class="form-control" placeholder="@ejemplo.com" aria-label="Correo electronico">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Apellido Paterno</span>
                <input type="text" class="form-control" placeholder="Primer Apellido..." aria-label="Apellido Paterno">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Contraseña</span>
                <input type="text" class="form-control" placeholder="Contraseña..." aria-label="Contrasenia">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Apellido Materno</span>
                <input type="text" class="form-control" placeholder="Segundo Apellido..." aria-label="Apellido Materno">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Repita contraseña</span>
                <input type="text" class="form-control" placeholder="Repita contraseña..." aria-label="Repita contraseña">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Tipo de usuario</span>
                <input type="text" class="form-control" placeholder="Tipo de usuario..." aria-label="Tipo de usuario">
            </div>
        </div>
    </div>

    <div class="col" style="margin-top: 3%;">
        <button type="button" class="btn btn-dark" style="padding-inline: 2%;" onclick="validar();">GUARDAR</button>
    </div>
</div>
@endsection