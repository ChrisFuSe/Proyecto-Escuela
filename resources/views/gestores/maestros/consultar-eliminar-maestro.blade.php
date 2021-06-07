@extends('templates.pagina-menu-botones')

@section('imagen-opc')
"{{ asset('img/Gestor_Maestros.png') }}"
@endsection

@section('operacion', 'Consultar y Eliminar Maestro')

@section('cuerpo')
<!--    Contenedor con todos los inputs del formulario para registrar un nuevo maestro  -->
<div class="container">
    <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                así conseguimos dividir en 2 columnas a los inputs del formulario               -->
    <div class="row">
    <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Busqueda</span>
                <input type="text" class="form-control" placeholder="Buscar maestro..." aria-label="Nombre">
                <a class="botones-navegacion"><img src="{{ asset('img/lupa.png') }}" alt="Responsive image" width="50%"></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">ID Maestro</span>
                <label class="form-control" type="text" placeholder="..." aria-label="Disabled input example">
            </div>
        </div>
    </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Nombre Completo</span>
                <label class="form-control" type="text" placeholder="..." aria-label="Disabled input example">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Domicilio</span>
                <label class="form-control" type="text" placeholder="..." aria-label="Disabled input example">
            </div>  
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Correo</span>
                <label class="form-control" type="text" placeholder="..." aria-label="Disabled input example" >
            </div> 
        </div>
    

    <div class="row row-cols-2">
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">RFC</span>
                <label class="form-control" type="text" placeholder="..." aria-label="Disabled input example">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text" >Teléfono</span>
                <label class="form-control" type="text" placeholder="..." aria-label="Disabled input example">
            </div>
        </div>
    </div>
    
    
    <div class="col" style="margin-top: 1%; margin-bottom: 2%;"> 
        <button type="button" class="btn btn-dark" style="padding-inline: 2%;">ELIMINAR</button>
    </div>
</div>
@endsection