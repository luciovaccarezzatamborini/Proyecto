 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego</title>
    <link rel="stylesheet" href="juego.css">
</head>
<body>
<form method=POST action="./AgregarBiblioteca.php"> 

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

        <button class="favoritos" >Añadir a favoritos</button>


    
  

<div class="name">
        <label><b><?php 
include_once("./mysql_functions.php");

session_start();
$_SESSION["fav"]= $_GET["id"];

$query2 = "SELECT NombreJuego FROM infojuegos WHERE NombreJuego = ?";
$result2 = DB::getInstance()->query($query2, array($_GET["id"]) );
        
  if($result2->count() != 0){
    foreach($result2->results() as $row){
      $resultado2 = $row->NombreJuego;}
      echo $resultado2;
    }

  else {
      
      echo '<script language="javascript">alert("Se ha añadido con exito");window.location.href="index.php"</script>';
  }
        


?></b></label>
    </div>

    <iframe class="juego" width="960" height="650" src="./zip/<?php echo($_GET["id"]); ?>/test" title="Unity Game" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <section class="banner">
        
    <?php
                include_once("./mysql_functions.php");
                $query = "SELECT rutabanner FROM infojuegos WHERE NombreJuego = ?";
                $result = DB::getInstance()->query($query,array($_GET["id"]) );

                if($result->count() != 0){
                    foreach($result->results() as $row){
                        $fila = $row->rutabanner;
                        echo '<img src='. substr ($fila,3) .'  width="1000px" height="200px">';
                    }
                } 
            ?> </section>

    <div class="desc">
        <p> 
            <?php include_once("./mysql_functions.php");
                $query3 = "SELECT DescripcionJuegos FROM infojuegos WHERE NombreJuego = ?";
                $result3 = DB::getInstance()->query($query3,array($_GET["id"]) );

                if($result3->count() != 0){
                    foreach($result->results() as $row){
                        $fila = $row->DescripcionJuegos;}} 
                echo $fila;
            ?>
</p>
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
     </form>
</body>
</html>

