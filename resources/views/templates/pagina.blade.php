<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prestige Management System</title>

    <!--    Importacion de fuentes (Encontradas en GoogleFonts)     -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Petit+Formal+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    
    <!--    Favicon     -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img\Prestige.ico') }}"/>

    <!--    Estilos      -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos_constantes.css') }}">
    @yield('estilos')
</head>
<body>

    <!--    Cabecera      -->
    <div class="container-fluid" id="cabecera">
        <img src="{{ asset('img\Logo_Prestige.png') }}" class="img-fluid" alt="Logo" width="140">
        <p id="nombre_sistema">Prestige Management System</p>
    </div>

    @yield('cuerpo')
    
    <!--    Scripts      -->
    <script src="{{ asset('js\animaciones-boton.js') }}"></script>
    @yield('scripts')

    <!--    Reconocimiento a los autores de los iconos en oculto    -->
    <div hidden>Iconos diseñados por <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.es/" title="Flaticon">www.flaticon.es</a></div>
    <div hidden>Icons made by <a href="https://www.flaticon.com/authors/roundicons" title="Roundicons">Roundicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
</body>
</html>