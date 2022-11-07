

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tbody>
            <tr>
            <?php
                include_once("./mysql_functions.php");
                $query = "SELECT rutafoto FROM infojuegos";
                $result = DB::getInstance()->query($query);

                if($result->count() != 0){
                    foreach($result->results() as $row){
                        $fila = $row->rutafoto;
                        echo '<td> <img src='. substr ($fila,3) .'  width="400" alt="" srcset=""> </td>';
                    }
                } 
            ?>           
            </tr>
        </tbody>
    </table>
</body>


</html>
<?php 
 include_once("./mysql_functions.php");
 $DescJuego = $_POST["DescJuego"];
 $NombreJuego = $_POST["NomJuego"];
 $FotoJuego = $_POST["foto"];
 $Categoria = $_POST["Categoria"];

 

$query = "SELECT NombreJuego FROM infojuegos WHERE NombreJuego = ?";
$result = DB::getInstance()->query($query,array($_POST["NomJuego"]) );

//$zip->extractTo(".");
echo $FotoJuego;

var_dump($_FILES);
$info = pathinfo($_FILES['foto']['name']);
$ext = $info['extension']; // get the extension of the file
$newname = "$NombreJuego.".$ext; 

$target = 'img/'.$newname;
copy( $_FILES['foto']['tmp_name'], $target);

$info2 = pathinfo($_FILES['banner']['name']);
$ext2 = $info2['extension']; // get the extension of the file
$newname2 = "$NombreJuego"."banner.".$ext2; 

$target2 = 'img/'.$newname2;
copy( $_FILES['banner']['tmp_name'], $target2);

$target3 = "zip/". $NombreJuego .".zip";
copy($_FILES["zip"]["tmp_name"], $target3);

$zip = new ZipArchive;
if ($zip->open('zip/'. $NombreJuego .'.zip') === TRUE) {
    $zip->extractTo('./zip/'. $NombreJuego);
    $zip->close();
    echo 'ok';
} else {
    echo 'failed';
}




if ($_POST["NomJuego"] == NULL || $_POST["DescJuego"] == NULL || $_POST["Categoria"] == 0)
{
    echo "complete los campos";
}
elseif($result->count() != 0){
    echo "Ya se existe un juego con ese nombre";
    //en este if lo que hago es ver si el resultado de la query es diferente de 0 quiere decir que ya se registro ese nombre de usuario en la base de datos
}
 
 else {
 $query4 = "INSERT INTO infojuegos( NombreJuego, DescripcionJuegos, LinkJuego, CategoriaJuegos, rutafoto, rutabanner) VALUES ('$NombreJuego', '$DescJuego', 'a', '$Categoria', '../img/$newname', '../img/$newname2')";
 $result4 = DB::getInstance()->query($query4,array($_POST["NomJuego"],array($_POST["DescJuego"],array($_POST["Categoria"]))));
 
 echo '<script language="javascript">alert("Ya se ha subido su juego a la plataforma exitosamente");window.location.href="index.php"</script>';
 }
 
//$query2 ="INSERT INTO imagen (id, ruta) VALUES ('3', $FotoJuego)";
//$result2 = DB::getInstance()->query($query2,array($_POST["foto"]));




?>


