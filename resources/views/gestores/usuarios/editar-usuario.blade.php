@extends('templates.pagina-menu-botones')

@section('imagen-opc')
"{{ asset('img/Gestor_Usuarios.png') }}"
@endsection

@section('operacion', 'Editar Usuario')

@section('cuerpo')
<h1>Editar usuario</h1>

<form action="{{route('actualizar.usuario', $usuarios->id)}}" method="GET" accept-charset="utf-8" name="form1" id="form1">
    @csrf
    <div class="container-fluid" style="margin-top: 2%;">
        <div class="row row-cols-2">
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Nombre de usuario</span>
                    <input type="text" class="form-control" maxlength="100" name="username" id="username" value='{{$usuarios->username}}' onchange="validarTR(event)" required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Nombre(s)</span>
                    <input type="text" class="form-control" maxlength="100" placeholder="Nombres..." aria-label="Nombres"
                        name="nombres" id="nombres" value='{{$usuarios->nombres}}' onchange="validarTR(event)" required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Correo electrónico</span>
                    <input type="text" class="form-control" maxlength="100" placeholder="@ejemplo.com" aria-label="Correo electronico"
                        name="email" id="email" value='{{$usuarios->email}}' onchange="validarTR(event)" required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Apellido Paterno</span>
                    <input type="text" class="form-control" maxlength="50" placeholder="Primer Apellido..."
                        aria-label="Apellido Paterno" name="ap_paterno" id="ap_paterno" value='{{$usuarios->ap_paterno}}' onchange="validarTR(event)" required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <label class="input-group-text" for="inputGroupSelect01">Tipo de usuario</label>
                    <select class="form-select" id="inputGroupSelect01" name="tipo" required>
                        <option value="1">Directora</option>
                        <option value="2">Secretaria</option>
                        <option value="3">Maestro</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Apellido Materno</span>
                    <input type="text" class="form-control" placeholder="Segundo Apellido..."
                        aria-label="Apellido Materno" maxlength="50" name="ap_materno" id="ap_materno" value='{{$usuarios->ap_materno}}' onchange="validarTR(event)" required>
                </div>
            </div>
        </div>

    <div class="col" style="margin-top: 1%;">
        <button type="button" class="btn btn-dark" style="padding-inline: 2%;" onclick="validarF()">ACTUALIZAR</button>
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
    var username = document.getElementById("username").value.trim();
    var nombres = document.getElementById("nombres").value.trim();
    var email = document.getElementById("email").value.trim();
    var appat = document.getElementById("ap_paterno").value.trim();
    var apmat = document.getElementById("ap_materno").value.trim();
    var tipo = document.getElementById("inputGroupSelect01").value.trim();
    if(username != "" && nombres != "" && email != "" && appat != "" && apmat != "" && tipo != ""){
        document.form1.submit();
    }else{
        alert("Faltan campos");
    }
}
</script>
@endsection