<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicar - OrtLauncher</title>
    <link rel="stylesheet" href="estilopublicar.css" />
</head>
<body>

    <nav>
         <ul>
                <li>
                <a href= "index.php">Volver al Menú</a>
                </li>
        </ul>
    </nav>

    <header>
        <h1>Publicar<h1>
    </header>
    <form method=POST action="./registrojuegos.php"> 
    <div class="contraseña">
      <input type = "text" placeholder = "Nombre del Juego/App" name="NomJuego"> <br> -->
      <!--<form method=POST action="./registrojuegos.php">--> 
    <!--</div>
      
    <div class="contraseña">
      <input type = "text" placeholder = "Descripcion" name="DescJuego"> <br>
     
    </div>
    
    
      
    
    <select name="Categoria">
        
        <option value="0">Elija una Categoria</option>
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

    </select>

    </select>

    </select>

    <div class = "drag-area">
        <h2>Arrastra y suelta imágenes</h2>
        <span>0</span>
        <button>Selecciona tus archivos</button>
        <input type="file" name="foto" id="input-file" hidden multiple />
    </div>
    
    <div id="preview"></div>

    <div class = "drag-area">
        <h2>Arrastra y suelta un archivo .zip</h2>
        <span>0</span>
        <button>Selecciona tus archivos</button>
        <input type="file" name="juegozip" id="input-file" hidden multiple />
    </div>
    <script src="publishGame.js"></script>
    <div id="preview"></div>

    <div class="submit">
      <input type="submit" value="Subir juego">
      <br>
      </div>
</form>
    <footer>
          <div class="contenedor">
            <h2 class="titulo">Medios de contacto:</h2>
          </div>
          <div class="ig">
              <img src="ig.png" width="50px">
          </div>
          <div class="fc">
                <img src="fc.png" width="50px">
          </div>
          <div class="redit">
            <img src="redit.png" width="52px">
          </div>
          <label class="copy">Ort Launcher © Todos los derechos reservados</label>
          <label class="donar"><a href="http://localhost/ANTEPROYECTO/donaciones.php">Donaciones</a></label>
          <label class="panas"><a href="nuestra informacion">Sobre Nosotros</a></label>
      </footer>


</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicar - OrtLauncher</title>
    <link rel="stylesheet" href="estilopublicar.css" />
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

    <nav>
         <ul>
                <li>
                <a href= "index.php">Volver al Menú</a>
                </li>
        </ul>
    </nav>

    <form method = POST action="./registrojuegos.php" enctype="multipart/form-data">
    <div class="tarjeta">
        <input type = "text" placeholder = "Nombre del Juego/App" name="NomJuego"> <br>
    </div>    
       
    <div class="desc">
        <input type = "text" placeholder = "Descripción" name="DescJuego"> <br>
    </div>

    <select name="Categoria">
        
        <option value="0">Elija una categoría</option>
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
        <option value="11">Juego de laberintos</option><option value="0">Argentina</option>
        <option value="12">Juego de mesa</option>
        <option value="13">Misterio</option>
        <option value="14">Habilidad</option>
        <option value="15">Guerra</option>
        <option value="16">Trivia</option>
        <option value="17">Simulación</option>
        <option value="18">Mundo libre</option>
        
    </select>

    </select>

    </select>

    </select>

    <div class="contenedordetodo">

    <div class = "drag-area">
        <h2>Arrastra y suelta el logo</h2>
        <span>0</span>
        <div id="file-select">Selecciona tus archivos</div>
        <input type="file" name="foto" id="input-file" hidden multiple />
    </div>
    
    <div id="preview"></div>
    <script src="publishGame.js"></script>

    <div class = "drog-area">
        <h2>Arrastra y suelta el .zip</h2>
        <span>0</span>
        <div id="file-select">Selecciona tus archivos</div>
        <input type="file" name="zip" id="input-file" hidden multiple />
    </div>
    
    <div id="preview"></div>
    <script src="publishGame2.js"></script>

    <div class = "dreg-area">
        <h2>Arrastra y suelta el banner</h2>
        <span>0</span>
        <div id="file-select">Selecciona tus archivos</div>
        <input type="file" name="banner" id="input-file" hidden multiple />
    </div>
    </div>
    <div id="preview"></div>
    <script src="publishGame3.js"></script>

    <div class="caja">
    <div class="submit">
      <input type="submit" value="Subir juego">
      <br>
    </div>
    </div>
    

    <footer>
          <div class="contenedor">
            <h2 class="titulo">Medios de contacto:</h2>
          </div>
          <div class="ig">
              <img src="ig.png" width="50px">
          </div>
          <div class="fc">
                <img src="fc.png" width="50px">
          </div>
          <div class="redit">
            <img src="redit.png" width="52px">
          </div>
          <label class="copy">Ort Launcher © Todos los derechos reservados</label>
          <label class="donar"><a href="donaciones.php">Donaciones</a></label>
          <label class="panas"><a href="nuestra informacion">Sobre Nosotros</a></label>
      </footer>


</body>
</html>

