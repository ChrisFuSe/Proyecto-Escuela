@extends('templates.pagina-menu-botones')

@section('imagen-opc')
{{ asset('img/Gestor_Grupos.png') }}
@endsection

@section('operacion','Registrar Grupo')

@section('cuerpo')
<form action="{{route('registrar.grupo')}}" method="POST" accept-charset="UTF-8" name="form1">
    @csrf
    <div class="container-fluid">
        <div class="row row-cols-2">
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Nombre del grupo:</span>
                    <input type="text" id="nombre" onchange="validarTR(event)" class="form-control" maxlength="45" placeholder="Nombre Clave..." aria-label="Nombres"name="nombre" required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Nivel:</span>
                    <select type="select" class="form-control" name="id_nivel" id="id_nivel" required>
                        <option selected disabled>Elije un nivel...</option>
                        @foreach ($niveles as $nivel)
                        <option value="{{$nivel->id_nivel}}">{{$nivel->descripcion}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Profesor:</span>
                    <select type="select" class="form-control" name="id_profesor" id="sProfesor" required>
                        <option selected disabled>Elije un Profesor...</option>
                        @foreach ($profesores as $profesor)
                        <option value="{{$profesor->id_profesor}}">{{$profesor->nombres}} {{$profesor->ap_paterno}} {{$profesor->ap_materno}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Horario:</span>
                    <select type="select" class="form-control" name="id_horario" id="sHorario" required>
                        <option selected disabled>Elije un horario...</option>
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
                    <textarea class="form-control" onchange="validarTR(event)" maxlength="300" placeholder="Ingrese descripción..." id="floatingTextarea" name="descripcion" required></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                    <div class="btn-real" style="display: inline;">
                        <button type="submit" class="btn btn-dark" onclick="validarF()" style="padding-inline: 2%;">GUARDAR DATOS</button>
                    </div>
            </div>
        </div>
    </div>
</form>
@endsection

@section('scripts')
<script>
function validarTR(e) {
 if (e.target.value.trim() == "")
  alert("Debe ingresar un valor en el campo");
}
</script>

<script>
function validarF(){
    var nombre = document.getElementById("nombre").value.trim();
    var desc = document.getElementById("floatingTextarea").value.trim();
    if(nombre == "" || desc == ""){
        alert("Debe ingresar un valor en el campo");
    }else{
        alert("Datos guardados exitosamente");
        document.form1.submit();
    }
}
</script>
@endsection