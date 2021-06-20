@extends('templates.pagina-menu-botones')

@section('imagen-opc')
{{ asset('img/Gestor_Alumnos.png') }}
@endsection

@section('cuerpo')
<!--    Contenedor con las opciones que tenemos en el gestor de alumnos     -->
<div class="container-fluid" style="margin-top: 5%;">
    <div class="row row-cols-2 justify-content-center">
        <div class="col">
            <a href="alumnos/alta"><img src="../img/Iconos Gestor Alumnos/Estudiante-Agregar.png" class="botones-navegacion" alt="Responsive image" width="50%"></a>
            <p>Dar de alta a alumno</p>
        </div>
        <div class="col">
            <a href="alumnos/editar"> <img src="../img/Iconos Gestor Alumnos/Estudiante-Modificar.png" class="botones-navegacion" alt="Responsive image" width="50%"></a>
            <p>Consultar/Eliminar/Editar información</p>
        </div>
    </div>
</div>
@endsection