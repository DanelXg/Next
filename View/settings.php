<?php session_start();

$conexion = mysqli_connect("localhost", "root", "", "nextpage");

$_cuenta = $_SESSION['cuenta'];

if ($conexion) {
    $query = "SELECT nombre, edad, contraseña FROM cliente WHERE email = '$_cuenta '";
    $_result = mysqli_query($conexion, $query);

    if ($_result) {
        while ($row = $_result->fetch_array()) {
            $_SESSION['name'] = $row['nombre'];
            $_SESSION['age'] = $row['edad'];
            $_SESSION['pass'] = $row['contraseña'];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/settings.css">
    <link rel="shortcut icon" href="css/img/NP.png">
    <title>Configuracion</title>
</head>

<body>
    <?php include "layouts/header.php"; ?>

    <header class="header">
        <nav class="h1">
            <H1 class="configuracionh1">Configuracion</H1>
        </nav>
        <nav class="underh1">
            <p class="correo-cuenta"> Actualmente: <?php echo $_SESSION['cuenta'] ?></p>
            <a class="a-regresar" href="backhome.html">Regresar</a>
        </nav>
    </header>

    <section id="infodecuenta">
        <nav class="info-cuenta">
            <div class="box">
                <h2 class="info">Informacion Personal</h2>
                <div class="list-info">
                    <tr>
                        <td>Correo: <?php echo $_SESSION['cuenta'] ?></td><br>
                        <td>Nombre: <?php echo $_SESSION['name'] ?></td><br>
                        <td>Edad: <?php echo $_SESSION['age'] ?></td><br>
                        <td>Contraseña: <?php echo $_SESSION['pass'] ?></td><br>
                        <td><?php echo "<a class=btn href='edit.php'> EDITAR </a>" ?>

                            <a class="btn" href="/Next/Model/delete.php"
                                onclick="return confirm('ESTA SEGURO??'); false">ELIMINAR</a>
                        </td>
                    </tr>
                </div>
            </div>
        </nav>
    </section>
</body>



</html>

<?php include "layouts/footer.php";


?>
