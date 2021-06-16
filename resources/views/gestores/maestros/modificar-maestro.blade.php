@extends('templates.pagina-menu-botones')

@section('imagen-opc')
"{{ asset('img/Gestor_Maestros.png') }}"
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
@endsection

@section('operacion', 'Modificar Maestro')

@section('cuerpo')
<div class="container">
<!--    "{{route('llenar.profesor')}}" Contenedor con todos los inputs del formulario para registrar un nuevo maestro  action="editar.php?table=profesores"-->
<form action="" accept-charset="utf-8" name="formulario">
@csrf


    <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                así conseguimos dividir en 2 columnas a los inputs del formulario               -->
    <div class="row">
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Busqueda</span>
                <input type="text" class="form-control" name="id_profesor" placeholder="Buscar maestro...">
                <button style="padding-inline: 2%;"><img src="{{ asset('img/lupa.png') }}" alt="Responsive image"
                        width="50%" class="botones-navegacion"></button>
            </div>
        </div>
    </div>
    @if(empty($profesor))
    <p></p>
    @else
    <div class="container">
    
         <table class="table table-striped " id="mostrarProfesores" >
             <thead>
               <tr >
                 <th>ID</th>
                 <th>RFC</th>
                 <th>Nombres</th>
                 <th>Apellido P</th>
                 <th>Apellido M</th>
                 <th>Estado</th>
                 <th>ciudad</th>
                 <th>calle</th>
                 <th>numero</th>
                 <th>colonia</th>
                 <th>codigo postal</th>
                 <th>correo</th>
                 <th>telefono</th>
                 <!-- <th class="table-primary" scope="col">Editar</th>
                 <th class="table-primary" scope="col">Eliminar</th> -->
               </tr>
             </thead>
             <tbody>
             @foreach($profesor as $profesores)
               <tr>
                  <td>{{$profesores->id_profesor}}</td>
                  <td>{{$profesores->rfc}}</td>
                  <td>{{$profesores->nombres}}</td>
                  <td>{{$profesores->ap_paterno}}</td>
                  <td>{{$profesores->ap_materno}}</td>
                  <td>{{$profesores->estado}}</td>
                  <td>{{$profesores->ciudad}}</td>
                  <td>{{$profesores->calle}}</td>
                  <td>{{$profesores->numero}}</td>
                  <td>{{$profesores->colonia}}</td>
                  <td>{{$profesores->codigo_postal}}</td>
                  <td>{{$profesores->correo}}</td>
                  <td>{{$profesores->telefono}}</td>
                  
               </tr>
               @endforeach
             </tbody>
           </table> 

<div class="col" style="margin-top: 3%;">
        <button onclick="elegir2()" class="btn btn-dark" style="padding-inline: 2%;" >ACTUALIZAR</button>
    </div>

</form>
    
</div>


@endif
@endsection
@section('js')
<script>
function elegir1(){
    document.formulario.method="GET";
    document.formulario.action="{{route('llenar.profesor')}}";
    document.formulario.submit();
}

function elegir2(){
    document.formulario.method="POST";
    document.formulario.action="../maestros/editar.php?table=profesores";
    document.formulario.submit();
}
</script>