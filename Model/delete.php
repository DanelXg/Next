<?php session_start();

$conexion = mysqli_connect("localhost", "root", "", "nextpage");

$_cuenta = $_SESSION['cuenta'];

if ($conexion) {
    $query_delete = ("DELETE FROM cliente WHERE email = '$_cuenta'");

    $final = mysqli_query($conexion, $query_delete);

    if ($final) {
        header("location: /Next/index.html");
    }else{
        Echo "Error en borrar la cuenta";
    }

}


session_destroy();