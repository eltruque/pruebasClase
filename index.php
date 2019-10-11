<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>

    <h1>GALERÍA</h1>


    <?php

    $carpeta = "imagenes";
    $dirint = dir($carpeta);
    $fotos[] = null;

    $i = 0;
    echo "<form action='delete.php' method='post'>";
    while (($foto = $dirint->read()) !== false) {
        if ($i > 1) {

            if (isset($foto))
                $fotos[$i] = $foto;
            else
                $foto[$i] = NULL;

            echo "<li style='float-left; display:inline;'>
            <img class='bd-placeholder-img' height = '200px' width='200px' src = '$carpeta/$foto' >
            <input class='form-check-input' name='foto[]' value = 'imagenes/$fotos[$i]' type='checkbox'>
            </li>";
        }
        $i++;
    }
    echo "";
    $dirint->close();


    ?>

    <br>
    <br>
    <a href="upload.php" type="button" class="btn btn-primary">Subir fotos</a>

    <input type="submit" class="btn btn-danger" value="Eliminar fotos">

    </form>
    </div>
</body>

</html>
