<?php 
    include_once("conexion.php");
    $usuario = $_POST['usuario'];
    $tipo = $_POST['tipo'];
    session_start();
    $_SESSION['usuario'] = $usuario;
    $_SESSION['tipo'] = $tipo;
    $_SESSION['id_sesion'] = session_id();
    echo "usuario: "+$_SESSION['usuario']+" tipo: "+$_SESSION['tipo'];
?>