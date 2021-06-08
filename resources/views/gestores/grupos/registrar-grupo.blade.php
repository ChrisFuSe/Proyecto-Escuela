@extends('templates.pagina-menu-botones')

@section('imagen-opc')
{{ asset('img/Gestor_Grupos.png') }}
@endsection

@section('operacion','Registrar Grupo')

@section('cuerpo')
<div class="container-fluid">
    <div style="margin-top: 2%;" class="row">
        <div style="margin-top: 3%;" class="col-8">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Nombre del grupo:</span>
                <input type="text" class="form-control" placeholder="Nombre Clave..." aria-label="Nombres">
            </div>
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Nivel:</span>
                <select type="select" class="form-control" name="nivel">
                    <option value="NULL" disabled>Nivel</option>
                    @foreach ($niveles as $nivel)
                        <option value="{{$nivel->id_nivel}}">{{$nivel->descripcion}}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Descripcion:</span>
                <textarea class="form-control" placeholder="Ingrese descripción..." id="floatingTextarea"></textarea>
            </div>
        </div>
        <div class="col">
            <img src="{{ asset('img/Iconos Gestor Grupos/Grupo.png') }}" width="74%">
            <div style="margin-top: 2%;" class="row">
                <div class="btn-real" style="display: inline;">
                    <button type="button" class="btn btn-dark" style="padding-inline: 2%;">GUARDAR DATOS</button>
                </div>  
            </div>
        </div>
    </div>
</div>
@endsection