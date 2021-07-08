@extends('templates.pagina-menu-botones')

@section('imagen-opc')
"{{ asset('img/Gestor_Usuarios.png') }}"
@endsection

@section('operacion', 'Registrar Usuario')

@section('cuerpo')
<h1>Registrar usuario</h1>
@if (\Session::has('error'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('error') !!}</li>
        </ul>
    </div>
@endif
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
<form action="{{route('registrar.usuarios')}}" method="POST" name="form1">
    @csrf
    <!--    Contenedor con todos los inputs del formulario para registrar un nuevo usuario  -->
    <div class="container-fluid" style="margin-top: 2%;">
        <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                    así conseguimos dividir en 2 columnas a los inputs del formulario               -->
        <div class="row row-cols-2">
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Nombre de usuario</span>
                    <input type="text" class="form-control" placeholder="Nombre usuario..."
                        aria-label="Nombre de usuario" maxlength="100" name="username" id="username"
                        onchange="validarTR(event)" required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Nombre(s)</span>
                    <input type="text" class="form-control" placeholder="Nombres..." aria-label="Nombres"
                        name="nombres" id="nombres" maxlength="100" onchange="validarTR(event)" required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Correo electrónico</span>
                    <input type="text" class="form-control" placeholder="@ejemplo.com" aria-label="Correo electronico"
                        name="email" id="email" maxlength="100" onchange="validarTR(event)" required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Apellido Paterno</span>
                    <input type="text" class="form-control" placeholder="Primer Apellido..."
                        aria-label="Apellido Paterno" maxlength="50" name="ap_paterno" id="ap_paterno" onchange="validarTR(event)" required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Contraseña</span>
                    <input type="password" class="form-control" placeholder="Contraseña..." aria-label="Contrasenia"
                        name="password" id="password" maxlength="255" onchange="validarTR(event)" required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Apellido Materno</span>
                    <input type="text" class="form-control" placeholder="Segundo Apellido..."
                        aria-label="Apellido Materno" maxlength="50" onchange="validarTR(event)" name="ap_materno" id="ap_materno" required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Repita contraseña</span>
                    <input type="password" class="form-control" placeholder="Repita contraseña..."
                        aria-label="Repita contraseña" maxlength="255" name="repite" id="repite" onchange="validarTR(event)" required>
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
        </div>
        <div class="col" style="margin-top: 3%;">
            <button type="button" class="btn btn-dark" style="padding-inline: 2%;" onclick="validarF()">GUARDAR</button>
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
    var nombres = document.getElementById("username").value.trim();
    var appat = document.getElementById("nombres").value.trim();
    var apmat = document.getElementById("email").value.trim();
    var est = document.getElementById("ap_paterno").value.trim();
    var ci = document.getElementById("ap_materno").value.trim();
    var calle = document.getElementById("password").value.trim();
    var num = document.getElementById("repite").value.trim();
    var email = document.getElementById("inputGroupSelect01").value.trim();
    if(nombres != "" && appat != "" && apmat != "" && est != "" && ci != "" && calle != "" && num != "" && email != ""){
        document.form1.submit();
    }else{
        alert("Faltan campos");
    }
}
</script>
@endsection