@extends('templates.pagina-menu-botones')

@section('imagen-opc')
"{{ asset('img/Gestor_Maestros.png') }}"
@endsection

@section('operacion', 'Modificar Maestro')

@section('cuerpo')
<h1>Editar maestro</h1>
<form action="{{route('actualizar.profesor',$profesor->id_profesor)}}" name="form1" method="GET" accept-charset="utf-8">
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
                        name="nombres" id="nombres" maxlength="45" value='{{$profesor->nombres}}' required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Apellido Paterno</span>
                    <input type="text" onchange="validarTR(event)" class="form-control" placeholder="Primer Apellido..."
                        aria-label="Apellido Paterno" maxlength="45" name="ap_paterno" id="ap_paterno" value='{{$profesor->ap_paterno}}' required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Apellido Materno</span>
                    <input type="text" onchange="validarTR(event)" class="form-control" maxlength="45" placeholder="Segundo Apellido..."
                        aria-label="Apellido Materno" name="ap_materno" id="ap_materno" value='{{$profesor->ap_materno}}' required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Estado</span>
                    <select type="select" onchange="validarTR(event)" class="form-control" name="estado" id="estado" required>
                        <option>{{$profesor->estado}}</option>
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
                    <input type="text" onchange="validarTR(event)" class="form-control" maxlength="45" placeholder="Ciudad..." aria-label="Ciudad" name="ciudad" id="ciudad" value='{{$profesor->ciudad}}' required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Calle y numero</span>
                    <input type="text" onchange="validarTR(event)" placeholder="Calle" maxlength="45" aria-label="Calle" class="form-control" name="calle" id="calle" value='{{$profesor->calle}}' required>
                    <input type="text" onchange="validarTR(event)" placeholder="#Numero" maxlength="10" aria-label="Numero" class="form-control" name="numero" id="numero" value='{{$profesor->numero}}' required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Colonia</span>
                    <input type="text" onchange="validarTR(event)" class="form-control" placeholder="Colonia..." aria-label="Colonia"
                        name="colonia" id="colonia" maxlength="45" value='{{$profesor->colonia}}' required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">C.P</span>
                    <input type="text" onchange="validarTR(event)" maxlength="5" class="form-control" placeholder="#C.P" aria-label="Numero" name="codigo_postal" id="codigo_postal" value='{{$profesor->codigo_postal}}' required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">RFC</span>
                    <input onkeyup="this.value = this.value.toUpperCase();" type="text" class="form-control" placeholder="Registro federal de contribuyente..."
                        aria-label="RFC" onchange="validarTR(event)" maxlength="13" name="rfc" id="rfc" value='{{$profesor->rfc}}' required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Numero Telefónico</span>
                    <input type="text" onchange="validarTR(event)" maxlength="16" value='{{$profesor->numero}}' class="form-control" placeholder="#Tel" aria-label="Numero" name="telefono" id="telefono" required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Correo electrónico</span>
                    <input type="text" onchange="validarTR(event)" class="form-control" placeholder="@ejemplo.com" aria-label="Correo electronico"
                        name="correo" id="correo" maxlength="45" value='{{$profesor->correo}}' required>
                </div>
            </div>
        </div>
        <div class="col" style="margin-top: 3%;">
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