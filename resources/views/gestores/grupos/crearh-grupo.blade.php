@extends('templates.pagina-menu-botones')

@section('imagen-opc')
{{ asset('img/Gestor_Grupos.png') }}
@endsection

@section('estilos')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
@endsection

@section('header-scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
@endsection

@section('operacion','Creaciones grupo')

@section('cuerpo')
<form action="{{route('crear_horario.grupo')}}" method="POST" accept-charset="UTF-8">
    @csrf
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Días:</span>
                    <select class="selectpicker" multiple data-live-search="true" name="dias[]" class="form-control" id="horario">
                            <option value="Lunes">Lunes</option>
                            <option value="Martes">Martes</option>
                            <option value="Miercoles">Miercoles</option>
                            <option value="Jueves">Jueves</option>
                            <option value="Viernes">Viernes</option>
                            <option value="Sabado">Sabado</option>
                            <option value="Domingo">Domingo</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row row-cols-2">    
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Hora de inicio:</span>
                    <input type="time" class="form-control" aria-label="Horario Inicio" name="horai">
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Hora de cierre:</span>
                    <input type="time" class="form-control" aria-label="Horario Cierre" name="horaf">
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