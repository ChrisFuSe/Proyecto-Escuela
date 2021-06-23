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

@section('operacion', 'Consultar Maestro')

@section('cuerpo')
@if(empty($profesor))
    <p></p>
@else
<div class="container">
<div class="card">
    <div class="card-body" style="padding-inline : 4%;">
         <table id="example" class="table table-striped dt-responsive nowrap" style="width:100%">
             <thead>
               <tr>
                 <th class="table-primary" scope="col"></th>
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
               </tr>
             </thead>
             <tbody>
             @foreach($profesor as $profesores)
               <tr>
                  <td class="table-info"></td> 
                  <td class="table-info">{{$profesores->id_profesor}}</td>
                  <td class="table-info">{{$profesores->rfc}}</td>
                  <td class="table-info">{{$profesores->nombres}}</td>
                  <td class="table-info">{{$profesores->ap_paterno}}</td>
                  <td class="table-info">{{$profesores->ap_materno}}</td>
                  <td class="table-info">{{$profesores->estado}}</td>
                  <td class="table-info">{{$profesores->ciudad}}</td>
                  <td class="table-info">{{$profesores->calle}}</td>
                  <td class="table-info">{{$profesores->numero}}</td>
                  <td class="table-info">{{$profesores->colonia}}</td>
                  <td class="table-info">{{$profesores->codigo_postal}}</td>
                  <td class="table-info">{{$profesores->correo}}</td>
                  <td class="table-info">{{$profesores->telefono}}</td>        
               </tr>
               @endforeach
             </tbody>
           </table> 
        </div>
      </div>
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