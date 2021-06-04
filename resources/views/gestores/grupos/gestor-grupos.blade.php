@extends('templates.pagina-menu-botones')

@section('imagen-opc')
{{ asset('img/Gestor_Grupos.png') }}
@endsection

@section('cuerpo')
<!--    Contenedor con las opciones que tenemos en el gestor de grupos     -->
<div class="container-fluid">
    <div class="row row-cols-3 justify-content-center">
        <div class="col">
            <a href="grupos/crear"><img src="../img/Iconos Gestor Grupos/Grupos-Crear.png" class="botones-navegacion" alt="Responsive image" width="38%"></a>
            <p>Crear Grupo</p>
        </div>
        <div class="col">
            <a href="grupos/cargar"><img src="../img/Iconos Gestor Grupos/Grupos-Cargar.png" class="botones-navegacion" alt="Responsive image" width="38%"></a>
            <p>Cargar informacion a Grupo</p>
        </div>
        <div class="col">
            <a href="grupos/modificar"><img src="../img/Iconos Gestor Grupos/Grupos-Modificar.png" class="botones-navegacion" alt="Responsive image" width="38%"></a>
            <p>Modificar Grupo</p>
        </div>
        <div class="col">
            <a href="grupos/consultar"><img src="../img/Iconos Gestor Grupos/Grupos-Consultar.png" class="botones-navegacion" alt="Responsive image" width="38%"></a>
            <p>Consultar grupo</p>
        </div>
        <div class="col">
            <a href="grupos/eliminar"><img src="../img/Iconos Gestor Grupos/Grupos-Eliminar.png" class="botones-navegacion" alt="Responsive image" width="38%"></a>
            <p>Eliminar grupo</p>
        </div>
    </div>
@endsection