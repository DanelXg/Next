<?php session_start();
require "layouts/header.php";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/edit.css">
    <link rel="shortcut icon" href="css/img/NP.png">
    <title>Next Page</title>
</head>
<nav class="edit">
    <h1 class="title-edit">EDITAR</h1>
</nav>


<form action="/Next/Model/editintel.php" method="POST">

    Nombre: <input class="nomen" type="text" value="<?php echo $_SESSION['name'] ?>" name="nomen"> <br>
    Edad: <input class="nomen" type="text" value="<?php echo $_SESSION['age'] ?>" name="aetas"> <br>
    Correo: <input class="nomen" type="text" value="<?php echo $_SESSION['cuenta'] ?>" name="mail"> <br>
    Contraseña: <input class="nomen" type="password" value="<?php echo $_SESSION['pass'] ?>" name="clue"> <br> <br>
    <input class="Update" type="submit" class="btn" name="btn" value="ACTUALIZAR"> <br>

    <a class="a-regresar" href="settings.php">Regresar</a>
</form>

<?php
require "layouts/footer.php";

