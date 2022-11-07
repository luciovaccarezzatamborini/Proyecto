<?php
include_once("./mysql_functions.php");
session_start();



$info = pathinfo($_FILES['fotoPerfil']['name']);
$ext = $info['extension']; // get the extension of the file
$newname = $_SESSION['newsession'].".png"; 


$target = 'imgPerfil/'.$newname;
copy($_FILES['fotoPerfil']['tmp_name'], $target);

$query = "UPDATE iniciosesion SET FotoPerfil ='../imgPerfil/$newname' WHERE NombreUsuario = ?";
$result = DB::getInstance()->query($query,array($_SESSION["newsession"]));
echo '<script language="javascript">alert("Se han ingresado correctamente sus datos");window.location.href="perfil.php"</script>';


 





?>