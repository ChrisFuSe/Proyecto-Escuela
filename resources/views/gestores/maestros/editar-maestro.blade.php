@extends('templates.pagina-menu-botones')

@section('imagen-opc')
"{{ asset('img/Gestor_Maestros.png') }}"
@endsection

<script>
function validar(){
    alert("Datos actualizados de manera correcta");
}
</script>

@section('operacion', 'Modificar Maestro')

@section('cuerpo')
<h1>Editar maestro</h1>
<form action="{{route('actualizar.profesor',$profesor->id_profesor)}}" method="GET" accept-charset="utf-8">
    @csrf
    <!--    Contenedor con todos los inputs del formulario para registrar un nuevo maestro  -->
    <div class="container-fluid" style="margin-top: 2%;">
        <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                    así conseguimos dividir en 2 columnas a los inputs del formulario               -->
        <div class="row row-cols-2">
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Nombres</span>
                    <input type="text" class="form-control" placeholder="Nombres..." aria-label="Nombres"
                        name="nombres" maxlength="45" value='{{$profesor->nombres}}' required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Apellido Paterno</span>
                    <input type="text" class="form-control" placeholder="Primer Apellido..."
                        aria-label="Apellido Paterno" maxlength="45" name="ap_paterno" value='{{$profesor->ap_paterno}}' required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Apellido Materno</span>
                    <input type="text" class="form-control" maxlength="45" placeholder="Segundo Apellido..."
                        aria-label="Apellido Materno" name="ap_materno" value='{{$profesor->ap_materno}}' required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Estado</span>
                    <select type="select" class="form-control" name="estado" required>
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
                    <input type="text" class="form-control" maxlength="45" placeholder="Ciudad..." aria-label="Ciudad" name="ciudad" value='{{$profesor->ciudad}}' required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Calle y numero</span>
                    <input type="text" placeholder="Calle" maxlength="45" aria-label="Calle" class="form-control" name="calle" value='{{$profesor->calle}}' required>
                    <input type="text" placeholder="#Numero" maxlength="10" aria-label="Numero" class="form-control" name="numero" value='{{$profesor->numero}}' required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Colonia</span>
                    <input type="text" class="form-control" placeholder="Colonia..." aria-label="Colonia"
                        name="colonia" maxlength="45" value='{{$profesor->colonia}}' required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">C.P</span>
                    <input type="text" maxlength="5" class="form-control" placeholder="#C.P" aria-label="Numero" name="codigo_postal" value='{{$profesor->codigo_postal}}' required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">RFC</span>
                    <input onkeyup="this.value = this.value.toUpperCase();" type="text" class="form-control" placeholder="Registro federal de contribuyente..."
                        aria-label="RFC" maxlength="13" name="rfc" value='{{$profesor->rfc}}' required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Numero Telefónico</span>
                    <input type="text" maxlength="16" value='{{$profesor->numero}}' class="form-control" placeholder="#Tel" aria-label="Numero" name="telefono" required>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Correo electrónico</span>
                    <input type="text" class="form-control" placeholder="@ejemplo.com" aria-label="Correo electronico"
                        name="correo" maxlength="45" value='{{$profesor->correo}}' required>
                </div>
            </div>
        </div>
        <div class="col" style="margin-top: 3%;">
            <button type="submit" class="btn btn-dark" style="padding-inline: 2%;" onclick=validar();>ACTUALIZAR</button>
        </div>
    </div>
</form>
@endsection