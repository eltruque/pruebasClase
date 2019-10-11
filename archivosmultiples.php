<?php
echo "<pre>";


var_dump($_POST);
var_dump ($_FILES);
if(isset($_FILES['datos'])){
    if($_FILES['datos']['error'])
    echo"Error al subir el fichero!";
    $origen = $_FILES['datos']['tmp_name'];
    echo "<h3>CON FILE</h3>";
    foreach(file($origen)as $i=>$linea){

        echo "Linea $i : " .$linea;

    }
    echo "<h3>CON Fopen</h3>";
    $fp = fopen($origen,'r');
    while($linea = fgets($fp))
    echo $linea;
    fclose($fp);
    echo "<h3>CON FILEGETCONTENTS</h3>";
    echo file_get_contents($origen);
}


?>

<form method = "post" enctype = "multipart/form-data">
<input type = "file" name ="datos"><br>
<input type = "submit" name = "enviar" value = "enviar">
</form>