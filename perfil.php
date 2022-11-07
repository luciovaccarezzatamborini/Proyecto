<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="./estiloperfil.css">
</head>
<body>
        <header class="header">
            <div class="main-title">
                <b><label class="Main">Ort Launcher</label></b>
            </div>

            <div class="botones">
                <button class="header_btn">
                    <a href= "login.php">Iniciar Sesión</a> 
                </button>

                <button class="header_btn">
                    <a href= "registrarse.php">Registrarse</a>
                </button> 
            </div>

        </header>

        <nav class="menu">
            <div class="menu_wrapper">
                <a class="menu_item on" href= "index.php">
                    <img class="menu_icon" src="img/inicio.png" width="80px">
                    <!--<span class ="menu_text"> Inicio </span>-->
                </a>
                <a class="menu_item" href= "biblioteca.php">
                    <img class="menu_icon" src="img/biblio.png" width="80px">
                    <!--<span class ="menu_text"> Biblioteca </span>-->
                </a>
                <a class="menu_item" href= "perfil.php">
                    <img class="menu_icon" src="img/logoperfil.png" width="80px">
                    <!--<span class ="menu_text"> Perfil </span>-->
                </a>
                <a class="menu_item" href= "ayuda.php">
                    <img class="menu_icon" src="img/ayuda.png" width="120px">
                    <!--<span class ="menu_text"> Ayuda </span>-->
                </a>
                <a class="menu_item" href= "publicarJuego.php">
                    <img class="menu_icon" src="img/juegos.png" width="80px">
                    <!--<span class ="menu_text"> Publicar Juego </span>-->
                </a>
            </div>
            
        </nav>
        <div class="foto">
            <h3>Perfil</h3>
        </div>
        <div class="caja">
            <div class="perfil">
                <img src="imgPerfil/<?php 
                    session_start();
                    echo $_SESSION["newsession"] . ".png";
                    ?>" 
                width="120px">
            </div>
            <div class="editar">
                <a href="agregarFotoPerfil.php"><img src="img/45406.png" width="30px"></a>
            </div>
            <div class="troll"></div>
            <label>Tu correo electronico es: <?php 

session_start();
echo $_SESSION["newsession"];
?>
            

            </label>
        </div>


        <footer>
            <div class="contenedor">
                <div class="contactos">
                    <div class="titulo">
                        <h2 >Medios de contacto:</h2>
                    </div>
                    <div class="fotos">
                        <img src="img/ig.png" width="50px">
                        <img src="img/fc.png" width="50px">
                        <img src="img/redit.png" width="50px"><br>
                    </div>
                    <div class="derechos">
                        <label>Ort Launcher © Todos los derechos reservados</label><br>
                    </div>
                    <div class="donaciones">
                        <label class="donar"><a href="donaciones.php">Donaciones</a></label>
                        <label class="panas"><a href="nuestra informacion">Sobre Nosotros</a></label>
                    </div>
                    
                </div>                
            </div>
            
        </footer>
</body>
</html>
