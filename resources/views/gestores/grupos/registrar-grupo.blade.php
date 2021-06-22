@extends('templates.pagina-menu-botones')

@section('imagen-opc')
{{ asset('img/Gestor_Grupos.png') }}
@endsection

@section('operacion','Registrar Grupo')

@section('cuerpo')
<form action="{{route('registrar.grupo')}}" method="POST" accept-charset="UTF-8">
    @csrf
    <div class="container-fluid">
        <div class="row row-cols-2">
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Nombre del grupo:</span>
                    <input type="text" class="form-control" placeholder="Nombre Clave..." aria-label="Nombres"name="nombre">
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Nivel:</span>
                    <select type="select" class="form-control" name="id_nivel">
                        <option>Nivel...</option>
                        @foreach ($niveles as $nivel)
                        <option value="{{$nivel->id_nivel}}">{{$nivel->descripcion}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Profesor:</span>
                    <select type="select" class="form-control" name="id_profesor">
                        <option>Elije un Profesor...</option>
                        @foreach ($profesores as $profesor)
                        <option value="{{$profesor->id_profesor}}">{{$profesor->nombres}} {{$profesor->ap_paterno}} {{$profesor->ap_materno}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Seleccione horario:</span>
                    <select type="select" class="form-control" name="id_profesor">
                        <option>Elije un horario...</option>
                        @foreach ($horarios as $horario)
                        <option value="{{$horario->id_horario}}">{{$horario->horarios}} {{$horario->dia}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">    
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Descripcion:</span>
                    <textarea class="form-control" placeholder="Ingrese descripción..." id="floatingTextarea" name="descripcion"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                    <div class="btn-real" style="display: inline;">
                        <button type="submit" class="btn btn-dark" style="padding-inline: 2%;">GUARDAR DATOS</button>
                    </div>
            </div>
        </div>
    </div>
</form>
@endsection