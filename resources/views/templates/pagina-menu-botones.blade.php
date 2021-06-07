<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Prestige Management System</title>

        <!--    Importacion de fuentes (Encontradas en GoogleFonts)     -->
        @yield('fuentes')
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Petit+Formal+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
        
        <!--    Favicon     -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/Prestige.ico') }}"/>

        <!--    Estilos      -->
        @yield('estilos')
        <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/estilos_constantes.css') }}">
        <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
        <link rel="stylesheet" href="{{ asset('css/estilos_imagen_opcion.css') }}">
        <link rel="stylesheet" href="{{ asset('css/estilos_home.css') }}">
    </head>
    <body>

        <!--    Imagen opcion escogida      -->
        <img id="imagen-opcion" src=@yield('imagen-opc')>

        <!--    Cabecera      -->
        <div class="container-fluid" id="cabecera">
            <img src="{{ asset('img/Logo_Prestige.png') }}" class="img-fluid" alt="Logo" width="140">
            <p id="nombre_sistema">Prestige Management System</p>
        </div>
        
        

        <!--    Menu para navegación rápida     -->
        <input type="checkbox" id="btm-menu">
        <label for="btm-menu" id="titulo" class="h1"><img id="icomenu" src="{{ asset('img/icono-menu.png') }}" alt="Menu">@yield('operacion')</label>
        <nav class="menu" style="z-index:1;">
            <ul>
                <?php
                switch(auth()->user()->tipo){
                    case '1':
                    ?>
                    <li><a href="\gestores\maestros">Maestros</a></li>
                    <li><a href="\gestores\pagos">Pagos</a></li>
                    <li><a href="\gestores\grupos">Grupos</a></li>
                    <li><a href="\gestores\alumnos">Alumnos</a></li>
                    <li><a href="\gestores\usuarios">Usuarios</a></li>
                    <li><a href="\gestores\cal-as">Calificaciones-asistencia</a></li>
                    <?php
                        break;
                    case '2':
                    ?>
                    <li><a href="\gestores\maestros">Maestros</a></li>
                    <li><a href="\gestores\pagos">Pagos</a></li>
                    <li><a href="\gestores\alumnos">Alumnos</a></li>
                    <li><a href="\gestores\cal-as">Calificaciones-asistencia</a></li>
                    <?php
                        break;
                    case '3':
                    ?>
                    <li><a href="..\gestores\cal-as">Calificaciones-asistencia</a></li>
                    <?php
                        break;
                }
                ?>
                <li><a style="margin-left: 10%" href="{{route('login.salir')}}">Cerrar Sesion</a></li>
            </ul>
        </nav>

        @yield('cuerpo')

        <!--    Botones Home y Regresar      -->
        <div class="col" style="margin-top: 3%;">
            <div class="btn-real" style="display: inline; padding-right: 5%;">
                <img width="5%" src="{{ asset('img/icono-regresar.png') }}" class="botones-navegacion" onclick="window.history.back();">
                <img width="5%" src="{{ asset('img/icono-home.png') }}" class="botones-navegacion" onclick="window.location.href = '{{route('home')}}'">
            </div> 
        </div>
        
        <!--    Scripts      -->
        <script src="{{ asset('js/animaciones-boton.js') }}"></script>
        <script src="{{ asset('js/validacion.js')}}"></script>
        @yield('scripts')

        <!--    Reconocimiento a los autores de los iconos en oculto    -->
        <div hidden>Iconos diseñados por <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.es/" title="Flaticon">www.flaticon.es</a></div>
        <div hidden>Icons made by <a href="https://www.flaticon.com/authors/roundicons" title="Roundicons">Roundicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
    </body>
</html>