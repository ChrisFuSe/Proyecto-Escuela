@extends('templates.pagina-menu-botones')

@section('imagen-opc')
"{{ asset('img/Gestor_Usuarios.png') }}"
@endsection

@section('cuerpo')
<!--    Contenedor con las opciones que tenemos en el gestor de usuarios     -->
<div class="container-fluid" style="margin-top: 5%;">
    <div class="row justify-content-center">
        <div class="col">
            <a href="usuarios/alta"><img src="../img/Iconos Gestor Usuarios/Alta usuario.png" class="botones-navegacion" alt="Responsive image" width="50%"></a>
            <p>Dar de alta a un usuario</p>
        </div>
        <div class="col">
            <a href="usuarios/editar"><img src="../img/Iconos Gestor Usuarios/Editar usuario.png" class="botones-navegacion" alt="Responsive image" width="50%"></a>
            <p>Editar información</p>
        </div>
        <div class="col">
            <a href="usuarios/consultar-eliminar"><img src="../img/Iconos Gestor Usuarios/Consultar usuario.png" class="botones-navegacion" alt="Responsive image" width="50%"></a>
            <p>Consultar y Eliminar usuarios</p>
        </div>
        <div class="col">
            <a href="usuarios/bitacora"><img src="../img/Iconos Gestor Usuarios/Bitacora.png" class="botones-navegacion" alt="Responsive image" width="50%"></a>
            <p>Bitácora</p>
        </div>
    </div>
</div>
@endsection