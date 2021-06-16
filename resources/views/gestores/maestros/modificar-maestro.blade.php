@extends('templates.pagina-menu-botones')

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css\dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css\responsive.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
@endsection

@section('header-scripts')
    <script src="{{asset('js\jquery-3.5.1.js')}}"></script>
    <script src="{{asset('js\jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js\dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('js\dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('js\responsive.bootstrap5.min.js')}}"></script>
@endsection

@section('imagen-opc')
"{{ asset('img/Gestor_Maestros.png') }}"
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
@endsection

@section('operacion', 'Modificar Maestro')

@section('cuerpo')
<!--    "{{route('llenar.profesor')}}" Contenedor con todos los inputs del formulario para registrar un nuevo maestro  action="editar.php?table=profesores"-->
    @if(empty($profesor))
    <p></p>
    @else
    <div class="cuerpo_form" style="width: 98%; margin: 10px;"> 
         <table id="example" class="table table-striped dt-responsive nowrap" style="width:100%">
             <thead>
               <tr>
               <th class="table-primary" scope="col"></th>
                 <th class="table-primary" scope="col">Acciones</th>
                 <th class="table-primary" scope="col">ID</th>
                 <th class="table-primary" scope="col">RFC</th>
                 <th class="table-primary" scope="col">Nombres</th>
                 <th class="table-primary" scope="col">Apellido P</th>
                 <th class="table-primary" scope="col">Apellido M</th>
                 <th class="table-primary" scope="col">Estado</th>
                 <th class="table-primary" scope="col">ciudad</th>
                 <th class="table-primary" scope="col">calle</th>
                 <th class="table-primary" scope="col">numero</th>
                 <th class="table-primary" scope="col">colonia</th>
                 <th class="table-primary" scope="col">codigo postal</th>
                 <th class="table-primary" scope="col">correo</th>
                 <th class="table-primary" scope="col">telefono</th>
                 <!--<th class="table-primary" scope="col">Eliminar</th> -->
               </tr>
             </thead>
             <tbody>
             @foreach($profesor as $profesores)
               <tr>
                  <td class="table-info" scope="col"></td>
                  <td class="table-info" scope="col">
                  <form action="{{route('editar.profesor',$profesores->id_profesor)}}" method="GET">
                  <button type="submit" class="btn btn-info"><img src="{{ asset('img\pencil-square.svg') }}" alt="Bootstrap" ...></button>
                  </form>
                  <form action="{{route('eliminar.profesor',$profesores->id_profesor)}}" method="GET">
                  <button type="submit" class="btn btn-danger"><img src="{{ asset('img\x-circle.svg') }}" alt="Bootstrap" ...></button>
                  </form>
                  </td>
                  <td class="table-info" scope="col">{{$profesores->id_profesor}}</td>
                  <td class="table-info" scope="col">{{$profesores->rfc}}</td>
                  <td class="table-info" scope="col">{{$profesores->nombres}}</td>
                  <td class="table-info" scope="col">{{$profesores->ap_paterno}}</td>
                  <td class="table-info" scope="col">{{$profesores->ap_materno}}</td>
                  <td class="table-info" scope="col">{{$profesores->estado}}</td>
                  <td class="table-info" scope="col">{{$profesores->ciudad}}</td>
                  <td class="table-info" scope="col">{{$profesores->calle}}</td>
                  <td class="table-info" scope="col">{{$profesores->numero}}</td>
                  <td class="table-info" scope="col">{{$profesores->colonia}}</td>
                  <td class="table-info" scope="col">{{$profesores->codigo_postal}}</td>
                  <td class="table-info" scope="col">{{$profesores->correo}}</td>
                  <td class="table-info" scope="col">{{$profesores->telefono}}</td>
                  
               </tr>
               @endforeach
             </tbody>
           </table>
           </div> 


    <div class="col" style="margin-top: 3%;">
        <button onclick="elegir2();" class="btn btn-dark" style="padding-inline: 2%;" >ACTUALIZAR</button>
    </div>

@endif
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection

<script>
function elegir1(){
    document.method="GET";
    document.action="{{route('eliminar.profesor',$profesores->id_profesor)}}";
    document.submit();
}

function elegir2(){
    document.formulario.method="POST";
    document.formulario.action="../maestros/editar.php?table=profesores";
    document.formulario.submit();
}
</script>