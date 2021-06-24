@extends('templates.pagina-menu-botones')

@section('imagen-opc')
"{{ asset('img/Gestor_Maestros.png') }}"
@endsection

@section('cuerpo')
<!--    Contenedor con las opciones que tenemos en el gestor de maestros     -->
<div class="container-fluid" style="margin-top: 5%;">
    <div class="row justify-content-center">
        <div class="col">
            <a href="maestros/alta"><img src="{{ asset('img/Iconos Gestor Maestros/Maestro-Agregar.png') }}"
                    class="botones-navegacion" alt="Responsive image" width="50%"></a>
            <p>Dar de alta a maestro</p>
        </div>
        <div class="col">
            <a href="maestros/consultarE"><img src="{{ asset('img/Iconos Gestor Maestros/Maestro-Modificar.png') }}"
                    class="botones-navegacion" alt="Responsive image" width="50%"></a>
            <p>Consultar/Eliminar/Editar información</p>
        </div>
    </div>
</div>
@endsection