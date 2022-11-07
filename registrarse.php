<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="registrarse.css">
</head>
<body>
    <div class="registro">
    <h2>Registra un nuevo usuario</h2>

    <form action="sesionhandler.php" method=POST>
        <div class="usuario">
            <input type="email" name="mail" placeholder="Ingresa tu Correo Electronico:"> <br>
        </div>
    <form action="sesionhandler.php" method=POST>
        <div class="contraseña">
            <input type="password" name="contrasenias" placeholder="Contraseña"> <br>
        </div>
    <form action="sesionhandler.php" method=POST>
        <div class="confirmacion">
            <input type="password" name="confirmar" placeholder="Confirmar contraseña"> <br>
        </div>
    <form action="sesionhandler.php" method=POST>
        <div class="submit">
            <input type="submit" value="Guardar">
            <br>
        </div>

        <div class="link">
            <span> Ya tenes cuenta? <a href="./login.php">Iniciar Sesión</a></span>
        </div>
    </form>
    </div>
</body>
</html>