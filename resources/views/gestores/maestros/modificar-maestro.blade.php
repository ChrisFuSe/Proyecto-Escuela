@extends('templates.pagina-menu-botones')

@section('imagen-opc')
"{{ asset('img/Gestor_Maestros.png') }}"
@endsection

@section('operacion', 'Modificar Maestro')

@section('cuerpo')
<!--    Contenedor con todos los inputs del formulario para registrar un nuevo maestro  -->
<div class="container">
    <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                así conseguimos dividir en 2 columnas a los inputs del formulario               -->
    <div class="row row-cols-2">
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Nombres</span>
                <input type="text" class="form-control" placeholder="Nombres..." aria-label="Nombres">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Calle y numero</span>
                <input type="text" placeholder="Calle" aria-label="Calle" class="form-control">
                <input type="text" placeholder="#Numero" aria-label="Numero" class="form-control">
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
                <span class="input-group-text">Colonia</span>
                <input type="text" class="form-control" placeholder="Colonia..." aria-label="Colonia">
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
                <span class="input-group-text">C.P</span>
                <input type="text" class="form-control" placeholder="#C.P" aria-label="Numero">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">RFC</span>
                <input type="text" class="form-control" placeholder="Registro federal de contribuyente..." aria-label="RFC">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Numero Telefónico</span>
                <input type="text" class="form-control" placeholder="#Tel" aria-label="Numero">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Correo electrónico</span>
                <input type="text" class="form-control" placeholder="@ejemplo.com" aria-label="Correo electronico">
            </div>
        </div>
    </div>

    <div class="col" style="margin-top: 3%;">    
        <button type="button" class="btn btn-dark" style="padding-inline: 2%;" onclick="validar();">ACTUALIZAR</button>
    </div>
</div> 
@endsection