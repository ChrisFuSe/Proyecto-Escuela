@extends('templates.pagina-menu-botones')

@section('imagen-opc')
"{{ asset('img/Gestor_Maestros.png') }}"
@endsection

@section('operacion', 'Consultar y Eliminar Maestro')

@section('cuerpo')
<!--    Buscador de los profesores  -->
<div class="row">
    <div class="col-3">
        <div class="input-group input-group-md mb-4" style="margin-left: 26%;">
            <span class="input-group-text">Búsqueda por ID:</span>
            <input type="text" class="form-control" placeholder="Id maestro..." aria-label="Busqueda">
            <img class="botones-navegacion" src="{{ asset('img/lupa.png') }}" width="10%" style="margin-left: 2%;">
        </div>
    </div>
    <div class="col-6">
        <div class="input-group input-group-md mb-4" style="margin-left: 30%;">
            <span class="input-group-text" style="margin-left: 8%;">Búsqueda por Nombre:</span>
            <input type="text" list="opciones-maestro" class="form-control" placeholder="Nombre completo del maestro..." aria-label="Busqueda">
            <img class="botones-navegacion" src="{{ asset('img/lupa.png') }}" width="5%" style="margin-left: 2%;">
        </div>
    </div>
</div>

<!--    Contenedor con todos los inputs del formulario para registrar un nuevo maestro  -->
<div class="container-fluid">
    <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                así conseguimos dividir en 2 columnas a los inputs del formulario               -->
    <div class="col-2" style="margin-left: 14%; margin-top: 2%;">
        <div class="input-group input-groups mb-4" style="margin-left: 12%;">
            <span class="input-group-text">ID Maestro:</span>
            <label class="form-control" type="text" placeholder="..." aria-label="Disabled input example">
        </div>
    </div>
    <div class="row" style="margin-left: 10%;">
        <div class="col-9" style="margin-left: 5.8%;">
            <div class="input-group input-group mb-4">
                <span class="input-group-text">Nombre Completo:</span>
                <label class="form-control" type="text" placeholder="..." aria-label="Disabled input example">
            </div>
        </div>
        <div class="col-9" style="margin-left: 2.2%;">
            <div class="input-group input-group mb-4" style="margin-left: 5%;">
                <span class="input-group-text">Domicilio</span>
                <label class="form-control" type="text" placeholder="..." aria-label="Disabled input example">
            </div>  
        </div>
        <div class="col-7" style="margin-left: 6%;">
            <div class="input-group input-group mb-4">
                <span class="input-group-text">Correo:</span>
                <label class="form-control" type="text" placeholder="..." aria-label="Disabled input example" >
            </div> 
        </div>
        <div class="col-6" style="margin-left: 6%;">
            <div class="row">
                <div class="col">
                    <div class="input-group input-group mb-4">
                        <span class="input-group-text">RFC:</span>
                        <label class="form-control" type="text" placeholder="..." aria-label="Disabled input example">
                    </div>
                </div>
                <div class="col">
                    <div class="input-group input-group mb-4">
                        <span class="input-group-text" >Teléfono:</span>
                        <label class="form-control" type="text" placeholder="..." aria-label="Disabled input example">
                    </div>
                </div>
            </div>
        </div>
    </div>           
</div>
@endsection