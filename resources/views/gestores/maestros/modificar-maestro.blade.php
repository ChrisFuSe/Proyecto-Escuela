@extends('templates.pagina-menu-botones')

@section('imagen-opc')
"{{ asset('img/Gestor_Maestros.png') }}"
@endsection

@section('operacion', 'Modificar Maestro')

@section('cuerpo')
<div class="container">
<!--    Contenedor con todos los inputs del formulario para registrar un nuevo maestro  -->
<form action="{{route('llenar.profesor')}}" method="GET" accept-charset="utf-8">
@csrf

<form action="editar.php?table=profesores" method="POST" accept-charset="utf-8">
    @csrf

    <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                así conseguimos dividir en 2 columnas a los inputs del formulario               -->
    <div class="row">
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Busqueda</span>
                <input type="text" class="form-control" name="id_profesor" placeholder="Buscar maestro...">
                <button type="submit" style="padding-inline: 2%;"><img src="{{ asset('img/lupa.png') }}" alt="Responsive image"
                        width="50%" class="botones-navegacion"></button>
            </div>
        </div>
    </div>
    @if(empty($profesor))
    <p></p>
    @else
    <div class="row row-cols-2">
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Nombres</span>
                <input type="text" class="form-control" aria-label="Nombres" name="nombres" value='{{$profesor->nombres}}'>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Estado</span>
                <select type="select" class="form-control" name="estado">
                    <option>{{$profesor->estado}}</option>
                    <option>Aguascalientes</option>
                    <option>Baja California</option>
                    <option>Baja California Sur</option>
                    <option>Campeche</option>
                    <option>Chiapas</option>
                    <option>Chihuahua</option>
                    <option>Ciudad de México</option>
                    <option>Coahuila</option>
                    <option>Colima</option>
                    <option>Durango</option>
                    <option>Estado de México</option>
                    <option>Guanajuato</option>
                    <option>Guerrero</option>
                    <option>Hidalgo</option>
                    <option>Jalisco</option>
                    <option>Michoacán</option>
                    <option>Morelos</option>
                    <option>Nayarit</option>
                    <option>Nuevo León</option>
                    <option>Oaxaca</option>
                    <option>Puebla</option>
                    <option>Querétaro</option>
                    <option>Quintana Roo</option>
                    <option>San Luis Potosí</option>
                    <option>Sinaloa</option>
                    <option>Sonora</option>
                    <option>Tabasco</option>
                    <option>Tamaulipas</option>
                    <option>Tlaxcala</option>
                    <option>Veracruz</option>
                    <option>Yucatán</option>
                    <option>Zacatecas</option>
                </select>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Ciudad</span>
                <input type="text" class="form-control" aria-label="Ciudad" name="ciudad" value='{{$profesor->ciudad}}'>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Calle y numero</span>
                <input type="text" aria-label="Calle" class="form-control" name="calle" value='{{$profesor->calle}}'>
                <input type="text" aria-label="Numero" class="form-control" name="numero" value='{{$profesor->numero}}'>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Apellido Paterno</span>
                <input type="text" class="form-control" aria-label="Apellido Paterno" name="ap_paterno" value='{{$profesor->ap_paterno}}'>
            </div>
         </div>   
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Colonia</span>
                <input type="text" class="form-control" aria-label="Colonia" name="colonia" value='{{$profesor->colonia}}'>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Apellido Materno</span>
                <input type="text" class="form-control" aria-label="Apellido Materno" name="ap_materno" value='{{$profesor->ap_materno}}'>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">C.P</span>
                <input type="text" class="form-control" aria-label="c.p." name="codigo_postal" value='{{$profesor->codigo_postal}}'>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">RFC</span>
                <input type="text" class="form-control" aria-label="rfc" name="rfc" value='{{$profesor->rfc}}'>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Numero Telefónico</span>
                <input type="text" class="form-control" aria-label="Numero" name="telefono" value='{{$profesor->telefono}}'>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Correo electrónico</span>
                <input type="text" class="form-control" aria-label="Correo electronico" name="correo" value='{{$profesor->correo}}'>
            </div>
        </div>
    </div>

<div class="col" style="margin-top: 3%;">
        <input type="submit" class="btn btn-dark" style="padding-inline: 2%;" value="ACTUALIZAR">
    </div>
</form>


</form>
    
</div>
@endif
@endsection