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
<form action="{{route('consultar.alumno')}}" method="POST" accept-charset="utf-8">
@csrf
<button type="submit">A</button>
<div class="card">
    <div class="card-body">  
        <table id="example" class="table table-striped dt-responsive nowrap" style="width:100%">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombres</th>
              <th>Apellido Pat</th>
              <th>Apellido Mat</th>
              <th>CURP</th>
              <th>Fecha de Nacimiento</th>
              <th>Email</th>
              <th>Telefono</th>
              <th>Estado Actual</th>
              <th>Descuento</th>
              <th>Deuda Total</th>
              <th>Id Grupo</th>
              <th>Oyente</th>
              <th>Estado</th>
              <th>Ciudad</th>
              <th>Calle</th>
              <th>Numero</th>
              <th>Colonia</th>
              <th>C.P.</th>
              <th>Facturacion</th>
              <th>Nombre Completo</th>
              <th>RFC</th>
              <th>Domicilio</th>
              <th>Telefono</th>
              <th>Correo</th>
            </tr>
          </thead>
          <tbody>
            @if(empty($alumnos))
              <p></p>
            @else
              @foreach($alumnos as $alumno)
                <tr>
                  <td>{{$alumno->numero_control}}</td>
                  <td>{{$alumno->nombres}}</td>
                  <td>{{$alumno->ap_paterno}}</td>
                  <td>{{$alumno->ap_materno}}</td>
                  <td>{{$alumno->curp}}</td>
                  <td>{{$alumno->fecha_nac}}</td>
                  <td>{{$alumno->correo}}</td>
                  <td>{{$alumno->telefono}}</td>
                  <td>{{$alumno->estado_actual}}</td>
                  <td>{{$alumno->descuento}}</td>
                  <td>{{$alumno->deuda_total}}</td>
                  <td>{{$alumno->id_grupo}}</td>
                  <td>{{$alumno->oyente_clase}}</td>
                  <td>{{$alumno->estado}}</td>
                  <td>{{$alumno->ciudad}}</td>
                  <td>{{$alumno->calle}}</td>
                  <td>{{$alumno->numero}}</td>
                  <td>{{$alumno->colonia}}</td>
                  <td>{{$alumno->codigo_postal}}</td>
                  <td>{{$alumno->factura}}</td>
                  <td>{{$alumno->fnombres}}</td>
                  <td>{{$alumno->fdomicilio}}</td>
                  <td>{{$alumno->frfc}}</td>
                  <td>{{$alumno->ftelefono}}</td>
                  <td>{{$alumno->fcorreo}}</td>
                </tr>
              @endforeach
            @endif
          </tbody>
        </table>
    </div>
</div>
</form>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection