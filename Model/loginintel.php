<?php session_start();

if (isset($_POST['txtemail']) && isset($_POST['txtpassw']))

    $usuario = $_POST['txtemail'];
$clave = $_POST['txtpassw'];


include 'interconexion.php';

$revision = ("SELECT * FROM cliente WHERE email = '$usuario'");

$resultado = mysqli_query($conexion, $revision);

$filas = mysqli_num_rows($resultado);


if ($filas === 1) {

    password_verify($clave, $hashed);

    $_SESSION['cuenta'] = $usuario;

    header("location: /Next/View/backhome.php");
} else {

    
}

