<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="formulario">
      <h2>Inicia Sesión con tu cuenta</h2>
      <form method="POST" action="./sesionhandler2.php"> 
    
      <div class="usuario">
      <input type="email" name="mail" placeholder="Correo Electronico"> <br>
      
      </div>

      <div class="contraseña">
      <input type="password" name="contrasenia" placeholder="Contraseña"> <br>
    
      </div>
      
      <div class="submit">
      <input type="submit" value="Iniciar Sesión">
      <br>
      </div>

      <div class="link">  
        <span>Quiero <a href="http://localhost/Proyecto/registrarse.php">Registrarme</a></span><hgroup></hgroup>
        <br>
        </div>

    </form>
  </div>
</body>
</html>
