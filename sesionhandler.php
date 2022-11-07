 <?php
include_once("./mysql_functions.php");

//traigo la info en forma de POST y la transformo en una variable para que sea mas manejable
$EmailUsu = $_POST["mail"];
$ContraseniaUsu = $_POST["contrasenias"];
$ContrseniaConfirm = $_POST ["confirmar"];

//aca llamo creo una variable que saca los nombre de usuario que ya estan registrados en la base de datos
$query = "SELECT NombreUsuario FROM InicioSesion WHERE NombreUsuario = ?";
$result = DB::getInstance()->query($query,array($_POST["mail"]) );

if($result->count() != 0){
    echo '<script language="javascript">alert("Ya existe un usuario con ese mail,inicie sesion");window.location.href="registrarse.php"</script>';
    //en este if lo que hago es ver si el resultado de la query es diferente de 0 quiere decir que ya se registro ese nombre de usuario en la base de datos
}

else if($_POST["contrasenias"] == $_POST ["confirmar"]){
    
    $query2 = "INSERT INTO InicioSesion(NombreUsuario, Contrasenia) VALUES ('$EmailUsu','$ContraseniaUsu')";
    $result2 = DB::getInstance()->query($query2,array($_POST["mail"],array($_POST["contrasenias"])));

    echo '<script language="javascript">alert("Se han ingresado correctamente sus datos");window.location.href="login.php"</script>';
    
   

    //en este if comparo la info que pusieron en el POST de contraseña y en el de confirmar, y si son iguales como deberia de ser se ejecuta la funcion query2 que
    // inserta a la base de datos los valores del mail y la contrseña haciendo asi que ya queden dentro de la base de datos
}

else{
    echo '<script language="javascript">alert("Confirme la contraseña");window.location.href="registrarse.php"</script>';
    //aca si no sucede nada de lo anterior quiere decir que no se confirmo su contraseña o que esta mal escrita en alguna de las 2
}
?>