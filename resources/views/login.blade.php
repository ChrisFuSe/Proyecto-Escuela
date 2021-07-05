@extends('templates.pagina')

@section('estilos')
<link rel="stylesheet" href="{{ asset('css/estilos_log_in.css') }}">
@endsection

@section('cuerpo')
<div class="container" id="log_in">
    <p id="titulo">BIENVENIDO AL SISTEMA DE GESTION DE PRESTIGE</p>
    <form action="{{route('login.autenticar')}}" method="POST">

        @csrf

        <div class="mb-3">
            <label for="usuario" class="form-label">Usuario</label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="mb-3">
            <label for="contraseña" class="form-label">Contraseña</label>
            <input type="password" class="form-control" aria-describedby="ayuda_contraseña" name="password">
        </div>
        <!--<div style="margin-left: 43%;" id="ayuda_contraseña" class="form-text"><a>¿Olvidaste tu contraseña?</a></div>-->
        <button type="submit" style="margin-top:2%; margin-left: 46%;" class="btn btn-primary"
            id="ingresar">Ingresar</button>
    </form>
</div>
@endsection