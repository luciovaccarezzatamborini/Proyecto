<?php 
 include_once("./mysql_functions.php");

 
 $query = "SELECT NombreJuego FROM infojuegos WHERE Fav = 1";
 $result = DB::getInstance()->query($query);

 
   $data = array();
 
 if($result->count() != 0){
   foreach($result->results() as $row){
       $data[] = $row->NombreJuego;
   }
 }
 $query2 = "SELECT rutafoto FROM infojuegos WHERE Fav = 1";
 $result2 = DB::getInstance()->query($query2);

 
   $data2 = array();
 
 if($result2->count() != 0){
   foreach($result2->results() as $row2){
       $data2[] = $row2->rutafoto;}}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda - OrtLauncher</title>
    <link rel="stylesheet" href="biblioteca.css" />
</head>
<body>
        <!--<div id = "container">
            <header>
                <h1> Ort Launcher</h1>
            </header>
            
            <nav>
                <ul>
                    <li>
                        <a href= "index.php">Inicio</a>
                    </li>
                    <li>
                        <a href= "biblioteca.php">Biblioteca</a>
                    </li>
                    <li>
                        <a href= "perfil.php">Perfil</a>
                    </li>
                    <li>
                        <a href= "ayuda.php">Ayuda</a>
                    </li>
                    <li>
                        <a href= "publicarJuego.php">Publicar Juego</a>
                    </li>
                </ul>
            </nav>
        </div> -->

        <div id = "container">
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
        </div>
        
        <div class="juegos">
            <?php 
                for($i = 0; $i < count($data); $i++){
                    echo "<a class='juego' href='juego.php?id=". $data[$i] ."' style='background-image: url(". substr($data2[$i], 3) .")'>
                            <label class='j1'>" . $data[$i] . "</label>
                        ";
                    // echo '<img src='. substr($data2[$i], 3) .'  width="1000px" height="200px">';
                    echo "</a>";
                }
            ?>
        </div>

        <footer>
          <div class="contenedor">
            <h2 class="titulo">Medios de contacto:</h2>
          </div>
          <div class="ig">
                <img src="ig.png" width="50px">
          </div>
          <div class="fc">
                <img src="fc.png" width="50px"></a>
          </div>
          <div class="redit">
                <img src="redit.png" width="52px">
          </div>
          <label class="copy">Ort Launcher © Todos los derechos reservados</label>
          <label class="donar"><a href="http://localhost/ANTEPROYECTO/donaciones.php">Donaciones</a></label>
          <label class="panas"><a href="nuestra informacion">Sobre Nosotros</a></label>
      </footer>
</body>
</html>