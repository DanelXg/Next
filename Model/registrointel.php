<?php

session_start();

$user = $_POST['user'];
$age = $_POST['age'];
$correo =$_POST['email'];
$password = $_POST['pswd'];
$hashed = password_hash($password, PASSWORD_BCRYPT);

include 'interconexion.php';

$consulta = "INSERT INTO CLIENTE (nombre, edad, email, contraseña) values ('$user', '$age', '$correo', '$hashed')";


$finalizacion = mysqli_query($conexion, $consulta);


if($finalizacion){

    header('location: /Next/View/login.php');

} else {

    "Error en guardar los datos";

}

session_destroy();
