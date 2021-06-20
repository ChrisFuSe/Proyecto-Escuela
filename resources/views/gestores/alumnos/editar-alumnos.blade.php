@extends('templates.pagina-menu-botones')

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css\dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css\responsive.bootstrap5.min.css') }}">
@endsection

@section('header-scripts')
    <script src="{{asset('js\jquery-3.5.1.js')}}"></script>
    <script src="{{asset('js\jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js\dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('js\dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('js\responsive.bootstrap5.min.js')}}"></script>
@endsection

@section('fuente')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
  </style> 
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');
  </style> 
@endsection

@section('imagen-opc')
{{ asset('img/Gestor_Alumnos.png') }}
@endsection

@section('operacion', 'Modificar alumno')

  
@section('cuerpo')
    <div class="container"> 
        <table id="example" class="table table-striped dt-responsive nowrap" style="width:100%">
          <thead>
            <tr>
              <th class="table-primary" scope="col">ID</th>
              <th class="table-primary" scope="col">Editar</th>
              <th class="table-primary" scope="col">Eliminar</th>
              <th class="table-primary" scope="col">ID</th>
              <th class="table-primary" scope="col">Nombres</th>
              <th class="table-primary" scope="col">Apellido Pat</th>
              <th class="table-primary" scope="col">Apellido Mat</th>
              <th class="table-primary" scope="col">CURP</th>
              <th class="table-primary" scope="col">Fecha de Nacimiento</th>
              <th class="table-primary" scope="col">Email</th>
              <th class="table-primary" scope="col">Telefono</th>
              <th class="table-primary" scope="col">Estado Actual</th>
              <th class="table-primary" scope="col">Descuento</th>
              <th class="table-primary" scope="col">Deuda Total</th>
              <th class="table-primary" scope="col">Id Grupo</th>
              <th class="table-primary" scope="col">Oyente</th>
              <th class="table-primary" scope="col">Estado</th>
              <th class="table-primary" scope="col">Ciudad</th>
              <th class="table-primary" scope="col">Calle</th>
              <th class="table-primary" scope="col">Numero</th>
              <th class="table-primary" scope="col">Colonia</th>
              <th class="table-primary" scope="col">C.P.</th>
              <th class="table-primary" scope="col">Facturacion</th>
              <th class="table-primary" scope="col">Nombre Completo</th>
              <th class="table-primary" scope="col">RFC</th>
              <th class="table-primary" scope="col">Domicilio</th>
              <th class="table-primary" scope="col">Telefono</th>
              <th class="table-primary" scope="col">Correo</th>
            </tr>
          </thead>
          <tbody>
            @if(empty($alumnos))
              <p></p>
            @else
              @foreach($alumnos as $alumno)
                <tr>
                  <td class="table-info"></td>
                  <td class="table-info">
                  <form action="{{route('llenar.alumno',$alumno->numero_control)}}" method="GET">
                  <button type="submit" class="btn btn-info"><img src="{{ asset('img\pencil-square.svg') }}" alt="Bootstrap"></button>
                  </form>
                  </td>
                  <td class="table-info">
                  <form action="{{route('eliminar.alumno',$alumno->numero_control)}}" method="GET">
                  <button type="submit" class="btn btn-danger"><img src="{{ asset('img\x-circle.svg') }}" alt="Bootstrap"></button>
                  </form>
                  </td>
                  <td class="table-info">{{$alumno->numero_control}}</td>
                  <td class="table-info">{{$alumno->nombres}}</td>
                  <td class="table-info">{{$alumno->ap_paterno}}</td>
                  <td class="table-info">{{$alumno->ap_materno}}</td>
                  <td class="table-info">{{$alumno->curp}}</td>
                  <td class="table-info">{{$alumno->fecha_nac}}</td>
                  <td class="table-info">{{$alumno->correo}}</td>
                  <td class="table-info">{{$alumno->telefono}}</td>
                  <td class="table-info">{{$alumno->estado_actual}}</td>
                  <td class="table-info">{{$alumno->descuento}}</td>
                  <td class="table-info">{{$alumno->deuda_total}}</td>
                  <td class="table-info">{{$alumno->id_grupo}}</td>
                  <td class="table-info">{{$alumno->oyente_clase}}</td>
                  <td class="table-info">{{$alumno->estado}}</td>
                  <td class="table-info">{{$alumno->ciudad}}</td>
                  <td class="table-info">{{$alumno->calle}}</td>
                  <td class="table-info">{{$alumno->numero}}</td>
                  <td class="table-info">{{$alumno->colonia}}</td>
                  <td class="table-info">{{$alumno->codigo_postal}}</td>
                  <td class="table-info">{{$alumno->factura}}</td>
                  <td class="table-info">{{$alumno->fnombres}}</td>
                  <td class="table-info">{{$alumno->fdomicilio}}</td>
                  <td class="table-info">{{$alumno->frfc}}</td>
                  <td class="table-info">{{$alumno->ftelefono}}</td>
                  <td class="table-info">{{$alumno->fcorreo}}</td>
                </tr>
              @endforeach
            @endif
          </tbody>
        </table>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection