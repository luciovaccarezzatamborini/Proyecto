<?php
include_once("./mysql_functions.php");
session_start();

$query = "SELECT fav FROM infojuegos WHERE NombreJuego = ?";
$result = DB::getInstance()->query($query,array($_SESSION["fav"]));

if($result->count() != 0){
    foreach($result->results() as $row){
      $resultado = $row->NombreJuego;}
      echo $resultado;
    }

if($resultado == 0){
$query2 = "UPDATE infojuegos SET Fav ='1' WHERE NombreJuego = ?";
$result2 = DB::getInstance()->query($query2,array($_SESSION["fav"]));

echo "<script>window.location.href='juego.php?id=$resultado'</script>";

}

else{
    echo "ya esta agregado a favoritos";
}


?>