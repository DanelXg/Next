<?php session_start();
$oerroc = $_SESSION['cuenta'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/afterinicio.css">
    <link rel="shortcut icon" href="css/img/NP.png">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Next Page</title>
</head>

<header class="header">
    <div class="logo">
        <a href="./backhome.html"><img src="css/img/NP.png" alt="Logo de marca"></a>
    </div>
    <P class="next-logo">Next Page</P>
    <div class="bar">
        <nav class="menu-nav">
            <ul class="nav-links">
                <li><a href="nav/categoriaAfter.html" class="link"> CATEGORIAS</a></li>
                <li><a href="nav/morereadAfter.html" class="link"> MAS LEIDOS</a></li>
                <li><a href="nav/ofertsAfter.html" class="link"> OFERTAS</a></li>
            </ul>
        </nav>
    </div>
    <a href="#" class="btn btn-car"><button>Carrito</button></a>
    <br>
    <div class="menu">
        <div class="select">
            <span class="cuenta" id="abrir">Cuenta</span>

            <div class="config">
                <ul class="dropmenu" id="nav">
                    <li><a href="settings.php" class="link-conf">Configuracion</a></li>
                    <li><a href="/Model/logoutintel.php" class="link-conf">Log out</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<main>

    <body>
        <script src="/Next/Assets/JS/some.js"></script>
        <script src="/Next/Assets/JS/inicioLogin.js"></script>
    </body>

</html>