@extends('templates.pagina-menu-botones')

@section('imagen-opc')
{{ asset('img/Gestor_Grupos.png') }}
@endsection

@section('cuerpo')
<!--    Contenedor con las opciones que tenemos en el gestor de grupos     -->
<div class="container-fluid" style="margin-top: 5%;">
    <div class="row justify-content-center">
        <div class="col">
            <a href="grupos/crear"><img src="../img/Iconos Gestor Grupos/Grupos-Crear.png" class="botones-navegacion"
                    alt="Responsive image" width="50%"></a>
            <p>Crear Grupo</p>
        </div>
        <div class="col">
            <a href="grupos/cargar"><img src="../img/Iconos Gestor Grupos/Grupos-Cargar.png" class="botones-navegacion"
                    alt="Responsive image" width="50%"></a>
            <p>Asignar Alumnos</p>
        </div>
        <div class="col">
            <a href="grupos/consultar"><img src="../img/Iconos Gestor Grupos/Grupos-Consultar.png" class="botones-navegacion" 
                    alt="Responsive image" width="50%"></a>
            <p>Consultar/Editar/Eliminar grupos</p>
        </div>
        <div class="col">
            <a href="grupos/crearh"><img src="../img/Iconos Gestor Grupos/Grupos-Horario.png" class="botones-navegacion" 
                    alt="Responsive image" width="50%"></a>
            <p>Consultar/Crear/Eliminar horarios</p>
        </div>
    </div>
</div>
    @endsection