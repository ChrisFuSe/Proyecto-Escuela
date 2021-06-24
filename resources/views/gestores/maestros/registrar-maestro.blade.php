@extends('templates.pagina-menu-botones')

@section('header-scripts')
<script src="../js/validacion.js"></script>
@endsection

@section('imagen-opc')
"{{ asset('img/Gestor_Maestros.png') }}"
@endsection

@section('operacion', 'Registrar Maestro')

@section('cuerpo')
<h1>Registrar maestro</h1>
<form action="{{route('registrar.profesor')}}" method="POST" accept-charset="utf-8" name="form1">
    @csrf
    <!--    Contenedor con todos los inputs del formulario para registrar un nuevo maestro  -->
    <div class="container-fluid" style="margin-top: 2%;">
        <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                    así conseguimos dividir en 2 columnas a los inputs del formulario               -->
        <div class="row row-cols-2">
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Nombres</span>
                    <input type="text" onchange="validarTR(event)" class="form-control" placeholder="Nombres..." aria-label="Nombres"
                        id="nombres" name="nombres" maxlength="45" required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Apellido Paterno</span>
                    <input type="text" onchange="validarTR(event)" class="form-control" placeholder="Primer Apellido..."
                    id="ap_paterno" maxlength="45" name="ap_paterno" required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Apellido Materno</span>
                    <input type="text" onchange="validarTR(event)" class="form-control" placeholder="Segundo Apellido..."
                    id="ap_materno" maxlength="45" name="ap_materno" required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Estado</span>
                    <select type="select" onchange="validarTR(event)" id="estado" class="form-control" name="estado">
                        <selected option>--Elije un estado--</option>
                        <option>Aguascalientes</option>
                        <option>Baja California</option>
                        <option>Baja California Sur</option>
                        <option>Campeche</option>
                        <option>Chiapas</option>
                        <option>Chihuahua</option>
                        <option>Ciudad de México</option>
                        <option>Coahuila</option>
                        <option>Colima</option>
                        <option>Durango</option>
                        <option>Estado de México</option>
                        <option>Guanajuato</option>
                        <option>Guerrero</option>
                        <option>Hidalgo</option>
                        <option>Jalisco</option>
                        <option>Michoacán</option>
                        <option>Morelos</option>
                        <option>Nayarit</option>
                        <option>Nuevo León</option>
                        <option>Oaxaca</option>
                        <option>Puebla</option>
                        <option>Querétaro</option>
                        <option>Quintana Roo</option>
                        <option>San Luis Potosí</option>
                        <option>Sinaloa</option>
                        <option>Sonora</option>
                        <option>Tabasco</option>
                        <option>Tamaulipas</option>
                        <option>Tlaxcala</option>
                        <option>Veracruz</option>
                        <option>Yucatán</option>
                        <option>Zacatecas</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Ciudad</span>
                    <input type="text" onchange="validarTR(event)" id="ciudad" maxlength="45" class="form-control" placeholder="Ciudad..." name="ciudad" required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Calle y numero</span>
                    <input type="text" onchange="validarTR(event)" maxlength="45" placeholder="Calle" id="calle" class="form-control" name="calle" required>
                    <input type="text" onchange="validarTR(event)" maxlength="10" placeholder="#Numero" id="numero" class="form-control" name="numero" required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Colonia</span>
                    <input type="text" onchange="validarTR(event)" maxlength="45" class="form-control" placeholder="Colonia..." onchange="validarTR(event)" id="colonia" name="colonia" required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">C.P</span>
                    <input type="text" id="codigo_postal" maxlength="5" onchange="validarTR(event)" class="form-control" placeholder="#C.P" aria-label="Numero" name="codigo_postal" required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">RFC</span>
                    <input onkeyup="this.value = this.value.toUpperCase();" onchange="validarTR(event)" type="text" class="form-control" placeholder="Registro federal de contribuyente..." maxlength="13" id="rfc" name="rfc" required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Numero Telefónico</span>
                    <input type="text" maxlength="16" onchange="validarTR(event)" class="form-control" placeholder="#Tel" id="telefono" name="telefono" required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Correo electrónico</span>
                    <input type="text" maxlength="45" onchange="validarTR(event)" class="form-control" placeholder="@ejemplo.com" id="correo" name="correo" required>
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
    var nombres = document.getElementById("nombres").value.trim();
    var appat = document.getElementById("ap_paterno").value.trim();
    var apmat = document.getElementById("ap_materno").value.trim();
    var est = document.getElementById("estado").value.trim();
    var ci = document.getElementById("ciudad").value.trim();
    var calle = document.getElementById("calle").value.trim();
    var num = document.getElementById("numero").value.trim();
    var col = document.getElementById("colonia").value.trim();
    var cp = document.getElementById("codigo_postal").value.trim();
    var rfc = document.getElementById("rfc").value.trim();
    var tel = document.getElementById("telefono").value.trim();
    var email = document.getElementById("correo").value.trim();
    if(nombres != "" && appat != "" && apmat != "" && est != "" && ci != "" && calle != "" && num != "" && col != "" && cp != "" && rfc != "" && tel != "" && email != ""){
        alert("Datos guardados exitosamente");
        document.form1.submit();

    }else{
        alert("Faltan campos");
    }
}
</script>
@endsection