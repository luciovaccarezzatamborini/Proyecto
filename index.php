<?php 
 include_once("./mysql_functions.php");
 
 
 $query = "SELECT NombreJuego FROM infojuegos";
 $result = DB::getInstance()->query($query);

 
   $data = array();
 
 if($result->count() != 0){
   foreach($result->results() as $row){
       $data[] = $row->NombreJuego;
   }
 }
 $query2 = "SELECT rutafoto FROM infojuegos";
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
    <title>OrtLauncher Main Menu</title>
    <link rel="stylesheet" href="estilos.css" />
    <script src="https://kit.fontawesome.com/712575d4a5.js"
    crossorigin="annonymus"></script>
</head>
<body>
    <div id = "container">
        <header class="header">
        <form method=POST action="./juegoBuscado.php"> 
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
                    <img class="menu_icon" src="img/Inicio.png" width="100px">
                </a>
                <a class="menu_item" href= "biblioteca.php">
                    <img class="menu_icon" src="img/biblioteca.png" width="100px">
                    <!--<span class ="menu_text"> Biblioteca </span>-->
                </a>
                <a class="menu_item" href= "perfil.php">
                    <img src="img/perfil.png" width="100px">
                </a>
                <a class="menu_item" href= "ayuda.php">
                    <img class="menu_icon" src="img/ayuda.png" width="130px">
                    <!--<span class ="menu_text"> Ayuda </span>-->
                </a>
                <a class="menu_item" href= "publicarJuego.php">
                    <img class="menu_icon" src="img/publish.png" width="100px">
                    <!--<span class ="menu_text"> Publicar Juego </span>-->
                </a>
            </div>
        </nav>

        <main class="main">
            <section class="banner">

            </section>

            <div id="busqueda">
                <select name="Categoria">
                    <option value="0">Elija una categoria</option>
                    <option value="1">Acción</option>
                    <option value="2">Arcade</option>
                    <option value="3">Aviones</option>
                    <option value="4">Aventura</option>
                    <option value="5">Carreras</option>
                    <option value="6">Cocina</option>
                    <option value="7">Construcción</option>
                    <option value="8">Deportes</option>
                    <option value="9">Estrategia</option>
                    <option value="10">Lucha</option>
                    <option value="11">Juego de laberintos</option>
                    <option value="12">Juego de mesa</option>
                    <option value="13">Misterio</option>
                    <option value="14">Habilidad</option>
                    <option value="15">Guerra</option>
                    <option value="16">Trivia</option>
                    <option value="17">Simulación</option>
                    <option value="18">Mundo libre</option>      
                </select>
            
                <div class="buscar">
                    <input type="text" name ="Buscador"  placeholder="Buscar juegos" unrequired>
                </div> 

                <button class="btnBuscar">
                    <input type = "submit" name ="btnBuscar">
                    <label>Buscar</label>
                </button> 

            </div>
        </main>

        </form>
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
              <img src="./img/ig.png" width="50px">
          </div>
          <div class="fc">
           <img src="./img/fc.png" width="50px"></a>
          </div>
          <div class="redit">
            <img src="./img/redit.png" width="52px">
          </div>
          <label class="copy">Ort Launcher © Todos los derechos reservados</label>
          <label class="donar"><a href="donaciones.php">Donaciones</a></label>
          <label class="panas"><a href="nuestra información">Sobre Nosotros</a></label>
      </footer>
    </div>


</body>
</html>
