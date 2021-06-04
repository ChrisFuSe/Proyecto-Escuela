@extends('templates.pagina-menu-botones')

@section('imagen-opc')
"{{ asset('img/Gestor_Usuarios.png') }}"
@endsection

@section('operacion', 'Editar Usuario')

@section('cuerpo')
<!--    Contenedor con todos los inputs del formulario para registrar un nuevo usuario  -->
<div class="container" style="margin-top: 1%;">
    <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                así conseguimos dividir en 2 columnas a los inputs del formulario               -->
    <div class="row row-cols-2">
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Nombre de usuario</span>
                <label type="text" class="form-control" placeholder="Nombre usuario..." aria-label="Nombre de usuario">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">ID usuario</span>
                <label type="text" class="form-control" placeholder="ID usuario..." aria-label="ID usuario">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Nombre(s)</span>
                <label type="text" class="form-control" placeholder="Nombres" aria-label="Nombres" >
              </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Tipo de usuario</span>
                <label type="text" class="form-control" placeholder="Tipo de usuario..." aria-label="Tipo de usuario">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Correo electrónico</span>
                <label type="text" class="form-control" placeholder="@ejemplo.com" aria-label="Correo electronico">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Contraseña</span>
                <label type="text" class="form-control" placeholder="Contraseña..." aria-label="Contrasenia">
            </div>
        </div>
    </div>
    <div class="col" style="margin-top: 3%;">  
        <button type="button" class="btn btn-dark" style="padding-inline: 2%;" onclick="validar();">GUARDAR</button>
    </div>
</div>
@endsection