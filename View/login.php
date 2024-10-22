<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Next Page</title>
    <link rel="stylesheet" href="css/sesion.css">
    <link rel="shortcut icon" href="css/img/NP.png">
</head>

<body>
    <?php include 'layouts/header.php' ?>
    <main>
        <section class="absolute">
            <div class="login">
                <div class="form-container">
                    <img class="logo" src="css/img/NP.png" alt="logo">

                    <form action="/Next/Model/loginintel.php" class="form" method="POST">

                        <label for="email" class="label">Email Adress</label>
                        <input type="email" name="txtemail" id="email" placeholder="email@example.com"
                            class="input input-email" required="">

                        <label for="password" class="label">Password</label>
                        <input type="password" name="txtpassw" id="password" placeholder="Your password"
                            class="input input-password" required=""><br>

                        <input type="submit" value="Login" class="primary-btn btn-login" name="Login">

                        <a href="#" class="forgot">Forgot my password</a><br>
                    </form>
                    <a href="registro.php"><button class="secondary-btn">Sign Up</button></a>

                    <a href="/Next/inicio.html"><button>Regresar</button></a>
                </div>
            </div>
        </section>
    </main>
     <?php  include 'layouts/footer.php' ?>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html> 


