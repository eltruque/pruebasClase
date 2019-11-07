<html>

<head>
</head>

<body>


    <h1>Seleccione archivos para subir.</h1>
    <form method="post" enctype="multipart/form-data">

        <?php
        echo "<pre>";
        for ($i = 1; $i <= 5; $i++) {
            if (isset($_FILES[$i]))
                $archivo[$i] = $_FILES[$i];
            else
                $archivo[$i] = NULL;
        }


        //var_dump($_POST);
        //var_dump ($_FILES);

        for ($i = 1; $i <= 5; $i++) {
            //var_dump($archivo[$i]);
            if (isset($archivo[$i]) && $archivo[$i] != NULL) {

                $origen = $_FILES[$i]['tmp_name'];
                //echo "";
                $nombre = $_FILES[$i]['name'];
                $destino = 'imagenes/' . $_FILES[$i]['name'];

                if (move_uploaded_file($origen, $destino))
                    echo "<div class='alert alert-success' role='alert'>
                Imagen subida correctamente!
              </div>";
                else
                    echo "<div class='alert alert-danger' role='alert'>
                Error al subir la imagen.
              </div>";
                header('Location: index.php');
            }
            echo "<input type = 'file' name ='$i'><br>";
        }
        ?>
        <input type="submit" name="enviar" value="enviar">
    </form>
</body>

</html>