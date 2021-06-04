@extends('templates.pagina-menu-botones')

@section('imagen-opc')
"{{ asset('img/Gestor_Maestros.png') }}"
@endsection

@section('cuerpo')
<!--    Contenedor con las opciones que tenemos en el gestor de maestros     -->
<div class="container-fluid" style="margin-top: 5%;">
    <div class="row justify-content-center">
        <div class="col">
            <a href="maestros/alta"><img src="{{ asset('img/Iconos Gestor Maestros/Maestro-Agregar.png') }}" class="botones-navegacion" alt="Responsive image" width="50%"></a>
            <p>Dar de alta a maestro</p>
        </div>
        <div class="col">
            <a href="maestros/editar"><img src="{{ asset('img/Iconos Gestor Maestros/Maestro-Modificar.png') }}" class="botones-navegacion" alt="Responsive image" width="50%"></a>
            <p>Editar información</p>
        </div>
        <div class="col">
            <a href="maestros/consultar-eliminar"><img src="{{ asset('img/Iconos Gestor Maestros/Maestro-Consultar.png') }}" class="botones-navegacion" alt="Responsive image" width="50%"></a>
            <p>Consultar y eliminar maestros</p>
        </div>
    </div>
</div>
@endsection