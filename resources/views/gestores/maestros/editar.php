<?php
session_start();
 $servername = "localhost";
 $database = "pes";
 $username = "root";
 $password = "";
 $conn = mysqli_connect($servername, $username, $password, $database, 33065);

    echo "<br>";

    $keys = array_keys($_POST);
    $columnas = "";
    $values = "";
    $sql = "UPDATE ".$_GET['table']." SET ";

    $first = false;
    foreach ($keys as $key){
        if ($first){
            if ($_POST[$key]!=""){
                $sql .= $key."='".$_POST[$key]."',";
            }
        }
        else{
            $first = true;
            $id_name = $key;
            $id = $_POST[$key];
        }
    }
    $sql = substr($sql, 0, -1);
    $sql .= " WHERE $id_name=$id;";
    echo $sql;

   /* $result = $conn->query($sql);
    switch ($_GET['table']) {
        case "curso":
            header('location: ../paginas/Formulario Modificar Cursos.php?ok='.$result);
            break;
        case "producto":
            header('location: ../paginas/Formulario Modificar Productos.php?ok='.$result);
            break;
        case "usuario":
            header('location: ../paginas/Formulario Modificar Usuarios.php?ok='.$result);
            break;
    }*/
?>