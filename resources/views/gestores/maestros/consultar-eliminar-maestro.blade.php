@extends('templates.pagina-menu-botones')

@section('imagen-opc')
"{{ asset('img/Gestor_Maestros.png') }}"
@endsection

<script>
function validar(){
    alert("Datos eliminados de manera correcta");
}
</script>

@section('operacion', 'Consultar y Eliminar Maestro')

@section('cuerpo')

<!--    Contenedor con todos los inputs del formulario para registrar un nuevo maestro  -->
<form action="{{route('consultar.profesor')}}" method="POST" accept-charset="utf-8">
    @csrf
<div class="container">
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
    <div class="row">
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">ID Maestro</span>
                <label class="form-control" type="text" placeholder="..." aria-label="Disabled input example">{{$profesor->id_profesor}}</label>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Nombre Completo</span>
            <label class="form-control" type="text" placeholder="..." aria-label="Disabled input example">{{$profesor->nombres}} {{$profesor->ap_paterno}} {{$profesor->ap_materno}}</label>
        </div>
    </div>
    <div class="col">
        <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Domicilio</span>
            <label class="form-control" type="text" placeholder="..." aria-label="Disabled input example">{{$profesor->estado}}, {{$profesor->ciudad}}, Calle: {{$profesor->calle}} #{{$profesor->numero}} Col.{{$profesor->colonia}}, C.P. {{$profesor->codigo_postal}}</label>
        </div>
    </div>
    <div class="col">
        <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Correo</span>
            <label class="form-control" type="text" placeholder="..." aria-label="Disabled input example">{{$profesor->correo}}</label>
        </div>
    </div>


    <div class="row row-cols-2">
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">RFC</span>
                <label class="form-control" type="text" placeholder="..." aria-label="Disabled input example">{{$profesor->rfc}}</label>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Teléfono</span>
                <label class="form-control" type="text" placeholder="..." aria-label="Disabled input example">{{$profesor->telefono}}</label>
            </div>
        </div>
    </div>
</div>
</form>
<form action="{{route('eliminar.profesor',$profesor->id_profesor)}}" method="GET" accept-charset="utf-8">
    @csrf
    <div class="col" style="margin-top: 1%; margin-bottom: 2%;">
        <button type="submit" class="btn btn-dark" style="padding-inline: 2%;" onclick=validar();>ELIMINAR</button>
    </div>
</form>
@endif
@endsection