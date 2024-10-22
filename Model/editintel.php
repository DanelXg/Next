<?php session_start();


$_nomen = $_SESSION['name'];
$_aetas = $_SESSION['age'];
$_mail = $_SESSION['cuenta'];
$_clue = $_SESSION['pass'];


$conexion = mysqli_connect("localhost", "root", "", "nextpage");

if (isset($_POST['nomen']))
    $n = $_POST['nomen'];

$query = ("UPDATE cliente SET nombre = '$n' WHERE nombre = '$_nomen'");


$result1 = mysqli_query($conexion, $query);

if ($result1) {
    header("location: /Next/View/settings.php");
} else {
    header("location: /Next/View/backhome.html");
}

if (isset($_POST['aetas']))
    $e = $_POST['aetas'];

$query2 = ("UPDATE cliente SET edad = '$e' WHERE edad = '$_aetas' ");

$result2 = mysqli_query($conexion, $query2);

if ($result2) {
    header("location: /Next/View/settings.php");
} else {
    header("location: /Next/View/backhome.html");
}

if (isset($_POST['mail']))
    $c = $_POST['mail'];

$query3 = ("UPDATE cliente SET email = '$c' WHERE email = '$_mail'");

$result3 = mysqli_query($conexion, $query3);

if ($result3) {
    header("location: /Next/View/settings.php");
} else {
    header("location: /Next/View/backhome.html");
}

if (isset($_POST['clue']))
    $p = $_POST['clue'];

$query4 = ("UPDATE cliente SET contraseña = '$p' WHERE contraseña = '$_clue'");

$result4 = mysqli_query($conexion, $query4);

if ($result4) {
    header("location: /Next/View/settings.php");
} else {
    header("location: /Next/View/backhome.html");
}







