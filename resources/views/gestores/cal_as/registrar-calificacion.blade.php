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

@section('operacion', 'Registrar Calificación')


@section('imagen-opc')
{{ asset('img/Gestor_Calificaciones_Asistencia.png') }}
@endsection

@section('cuerpo')
@csrf
<div class="container-fluid" style="margin-top: 2%;">
<h1>Consultar/Editar calificaciones</h1>
@if(empty($grupos))
<p></p>
@else
    <div class="row row-cols-3">
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Grupo:</span>
                <select id="grupo" name="grupo" type="select" class="form-control">
                @foreach($grupos as $grupo)
                    <option value="{{$grupo->id_grupo}}">{{$grupo->nombre}}</option>
                @endforeach>
                </select>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Nivel:</span>
                <input readonly type="text" class="form-control" id="nivel" name="nivel">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Evaluación:</span>
                <select type="select" class="form-control">
                    <option>Elija una evaluación</option>
                    <option value="1">Unidad 1</option>
                    <option value="2">Unidad 2</option>
                    <option value="3">Unidad 3</option>
                    <option value="4">Unidad 4</option>
                    <option value="5">Unidad 5</option>
                    <option value="6">Unidad 6</option>
                </select>
            </div>
        </div>    
    </div>
    <div class="row">
      <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Grupo:</span>
                <select id="grupo" name="grupo" type="select" class="form-control">
                @foreach($grupos as $grupo)
                    <option value="{{$grupo->id_grupo}}">{{$grupo->nombre}}</option>
                @endforeach>
                </select>
            </div>
        </div>
    </div>
    @endif
</div>

<div class="container-fluid"> 
  <div class="card">
    <div class="card-body" style="padding-inline : 4%;">
        <table id="example" class="table table-striped dt-responsive nowrap" style="width:100%">
          <thead>
            <tr>
              <th class="table-primary" scope="col"></th>
              <th class="table-primary" scope="col">Calificacion escrita</th>
              <th class="table-primary" scope="col">Calificacion oral</th>
              <th class="table-primary" scope="col">Numero de control</th>
              <th class="table-primary" scope="col">Nombre alumno</th>
            </tr>
          </thead>
          <tbody>
            @if(empty($grupos))
              <p></p>
            @else
              @foreach($grupos as $grupo)
                <tr>
                  <td class="table-info"></td>
                  <td class="table-info"></td>
                  <td class="table-info">{{$grupo->nombre}}</td>
                  @foreach($niveles as $nivel)
                  @if($nivel->id_nivel == $grupo->id_nivel)
                  <td class="table-info" value="{{$grupo->id_nivel}}">{{$nivel->descripcion}}</td>
                  @endif
                  @endforeach
                  <td class="table-info">{{$grupo->descripcion}}</td>
                </tr>
              @endforeach
            @endif
          </tbody>
        </table>
    </div>
  </div>
</div>
</form>
@endsection

@section('scripts')
<script src={{asset('js\niveles.js')}}></script>
@endsection