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
"{{ asset('img/Gestor_Usuarios.png') }}"
@endsection

@section('operacion', 'consultar-eliminar')

  
@section('cuerpo')
<div class="container"> 
        <table id="example" class="table table-striped dt-responsive nowrap" style="width:100%">
          <thead>
            <tr>
              <th class="table-primary" scope="col"></th>
              <th class="table-primary" scope="col">Editar</th>
              <th class="table-primary" scope="col">Eliminar</th>
              <th class="table-primary" scope="col">Nombre de usuario</th>
              <th class="table-primary" scope="col">Nombres</th>
              <th class="table-primary" scope="col">Apellido Pat</th>
              <th class="table-primary" scope="col">Apellido Mat</th>
              <th class="table-primary" scope="col">Correo electrónico</th>
              <th class="table-primary" scope="col">Tipo de usuario</th>
              <th class="table-primary" scope="col">Contraseña</th>
            </tr>
          </thead>
          <tbody>
            @if(empty($usuarios))
              <p></p>
            @else
              @foreach($usuarios as $usuario)
                <tr>
                  <td class="table-info"></td>
                  <td class="table-info">
                  <form action="{{route('llenar.usuario',$usuario->id)}}" method="GET">
                  <button type="submit" class="btn btn-info"><img src="{{ asset('img\pencil-square.svg') }}" alt="Bootstrap"></button>
                  </form>
                  </td>
                  <td class="table-info">
                  <form action="{{route('eliminar.usuario',$usuario->id)}}" method="GET">
                  <button type="submit" class="btn btn-danger"><img src="{{ asset('img\x-circle.svg') }}" alt="Bootstrap"></button>
                  </form>
                  </td>
                  <td class="table-info">{{$usuario->username}}</td>
                  <td class="table-info">{{$usuario->nombres}}</td>
                  <td class="table-info">{{$usuario->ap_paterno}}</td>
                  <td class="table-info">{{$usuario->ap_materno}}</td>
                  <td class="table-info">{{$usuario->email}}</td>
                  <td class="table-info">{{$usuario->tipo}}</td>
                  <td class="table-info">{{$usuario->password}}</td>
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