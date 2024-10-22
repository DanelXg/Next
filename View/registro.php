<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reg.css">
    <link rel="shortcut icon" href="css/img/NP.png">
    <title>Sign Up - Next Page</title>
</head>

<body>
    <div>
        <img src="css/img/imagen_2024-07-24_143840315-transformed.png" alt="logo">
    </div>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">
        <div class="signup">

            <form action="/Next/Model/registrointel.php" method="POST">

                <label for="chk" aria-hidden="true">Sign Up</label>

                <input type="text" name="user" placeholder="User name" required="">

                <input type="number" name="age" placeholder="Age" required="">

                <input type="email" name="email" placeholder="Example@gmail.com" required="">

                <input type="password" name="pswd" placeholder="Password" required="">

                <input type="password" name="pswd1" placeholder="Confirm Password" required="">

                <br>
                <button class="button" type="submit" name="registro">Sign Up</button>

            </form>

            <a href="/Next/inicio.html"><button>Regresar</button></a>
        </div>
    </div>
</body>

</html>