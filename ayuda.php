<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayuda - OrtLauncher</title>
    <link rel="stylesheet" href="ayuda.css">
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

        <h1 class="cpuj">¿Cómo publico un juego?</h1>
        <p class="parrafo1">Primero hay que entrar en el apartado de <a href="publicarJuego.php" target="_blank">"Juegos"</a> en la 
        página principal, luego tenes que ponerle el nombre de tu juego en "Nombre del juego" y una descripcion en 
        "Descripcion del juego". Después, tenes que arrastrar la carpeta que Unity te dió luego de "Buildear"
        tu juego para WebGl, una foto que actue como banner en la pagina del juego y por ultimo una foto para describir
        tu juego en la pantalla de inicio de Ort Launcher. </p>

        <a href="index.php"><- Volver a Inicio</a>

        <h1 class="buildunity">¿Cómo "Buildeo" mi juego en Unity?</h1>
        
        <p class="parrafo3">Para publicar tu juego en Ort Launcher es necesario tener una build de tu juego en Unity. 
                Antes de comenzar es necesario que la resolucion de tu juego este en 16:9 o Full HD (1920x1080).</p>
        <div class="foto1">
        <img src="img/Pasoo.png">
        </div>
        <div class="construccion">
            <p class="parrafo2">Para comenzar a buildear tu juego tenes que ir a la parte de arriba a la derecha "File" y despues a "Build Settings..."</p>
        </div>
        <div class="foto1">
        <img src="img/Paso1.png" alt="foto primer paso">
        </div>
        <div class="parrafo3">
            <p>Una vez en "Build Settings", en "Platform" tenes que elegir la opcion que dice "WebGl", tenes que verificar 
            que todas las escenas esten y ademas, que esten en orden ya que sino, el juego comenzara por la escena de arriba sea 
            cual sea.
            </p>
        <div class="foto1">
        <img src="img/Paso 2.png" alt="foto segundo paso">
        </div>
            <p class="parrafo2">Hay que verificar que cuando buildeemos el juego, este se exporte como .zip ya que nuestra pagina
                esta preparada para procesar juegos que fueron exportados como .zip. Para esto, hay que entrar abajo a la izquierda
                en "Player Settings...". Cuando estas en player settings tener que ir a "Publishing Settings" y donde dice "Compression Format"
                tiene que estar en Gzip. Luego tocas "build" y lo guardas donde quieras. Ya podes ir arriba de todo en esta pagina donde explicamos como subirlo.
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
</body>
</html>