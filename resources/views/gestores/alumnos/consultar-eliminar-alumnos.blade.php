@extends('templates.pagina-menu-botones')

@section('fuente')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
  </style> 
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');
  </style> 
@endsection

@section('imagen-opc')
{{ asset('img/Gestor_Alumnos.png') }}
@endsection

@section('operacion', 'Consultar y eliminar alumno')

@section('cuerpo')
<!--    Contenedor con todos los inputs del formulario para registrar un nuevo aluno  -->
<form action="{{route('consultar.alumno')}}" method="POST" accept-charset="utf-8">
    @csrf
    <div class="container" style="margin-top: 2%;">
        <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                    así conseguimos dividir en 2 columnas a los inputs del formulario               -->
        <div class="row row-cols-2">
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Número de control</span>
                    <input type="text" class="form-control" placeholder="Número de control..." aria-label="Numero de control" name="numero_control">
                    <button type="submit" style="padding-inline: 2%;"><img src="{{ asset('img/lupa.png') }}" alt="Responsive image"
                        width="50%" class="botones-navegacion"></button>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <!--<span class="input-group-text">Nombre completo</span>
                    <input type="text" placeholder="Nombre..." aria-label="Nombre completo" class="form-control" name="nombres">
                    <a class="botones-navegacion"><img src="{{ asset('img/lupa.png') }}" alt="Responsive image" width="50%"></a>-->
                </div>
            </div>
            @if(empty($alumno))
                <p></p>
            @else
            <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Nombres</span>
                <label type="text" class="form-control" placeholder="..." aria-label="Disabled input example">{{$alumno->nombres}} {{$alumno->ap_paterno}} {{$alumno->ap_materno}}</label>
            </div>
            </div>
            <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Número de control</span>
                <label type="text" class="form-control" placeholder="..." aria-label="Disabled input example">{{$alumno->numero_control}}</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Domicilio</span>
                <label type="text" class="form-control"placeholder="..." aria-label="Disabled input example">{{$alumno->estado}}, {{$alumno->ciudad}}, Calle: {{$alumno->calle}} #{{$alumno->numero}} Col.{{$alumno->colonia}}, C.P. {{$alumno->codigo_postal}} </label>
            </div>
        </div>
    </div>
    <div class="row row-cols-2">
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Correo</span>
                <label type="email" class="form-control" placeholder="..." aria-label="Disabled input example">{{$alumno->correo}}</label>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Telefóno</span>
                <label type="tel" class="form-control" placeholder="..." aria-label="Disabled input example">{{$alumno->telefono}}</label>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">CURP</span>
                <label type="text" class="form-control" placeholder="..." aria-label="Disabled input example">{{$alumno->curp}}</label>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Descuento</span>
                <label type="number" class="form-control" placeholder="..." aria-label="Disabled input example">{{$alumno->descuento}}</label>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Fecha de nacimiento</span>
                <label type="date" class="form-control" placeholder="..." aria-label="Disabled input example">{{$alumno->fecha_nac}}</label>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Deuda total</span>
                <label type="text" class="form-control" placeholder="..." aria-label="Disabled input example">{{$alumno->deuda_total}}</label>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Oyente clase</span>
                <label type="text" class="form-control" placeholder="..." aria-label="Disabled input example">{{$alumno->oyente_clase}}</label>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Id grupo</span>
                <label type="text" class="form-control" placeholder="..." aria-label="Disabled input example">{{$alumno->id_grupo}}</label>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Estado actual</span>
                <label type="text" class="form-control" placeholder="..." aria-label="Disabled input example">{{$alumno->estado_actual}}</label>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">¿Factura?</span>
                <label type="text" class="form-control" placeholder="..." aria-label="Disabled input example">{{$alumno->factura}}</label>
            </div>
        </div>
        @if($alumno->factura == "Si")
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Nombre completo</span>
                    <label type="text" class="form-control" placeholder="..." aria-label="Disabled input example">{{$alumno->fnombres}}</label>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">RFC</span>
                    <label type="text" class="form-control" placeholder="..." aria-label="Disabled input example">{{$alumno->frfc}}</label>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Domicilio</span>
                    <label type="text" class="form-control" placeholder="..." aria-label="Disabled input example">{{$alumno->fdomicilio}}</label>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Teléfono</span>
                    <label type="text" class="form-control" placeholder="..." aria-label="Disabled input example">{{$alumno->ftelefono}}</label>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Correo electrónico</span>
                    <label type="text" class="form-control" placeholder="..." aria-label="Disabled input example">{{$alumno->fcorreo}}</label>
                </div>
            </div>
        @endif
    </div>  
    </div>
    </form>
    <fomr action="{{route('eliminar.alumno',$alumno->numero_control)}}" method="GET" accept-charset="utf-8">
        @csrf
        <div class="col" style="margin-top: 3%;">
            <button type="submit" class="btn btn-dark" style="padding-inline: 2%;">ELIMINAR</button>
        </div>
    </form>
@endif
@endsection