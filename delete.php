<html>

<body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <h3>¿Está seguro de eliminar estas imágenes?</h3>

    <form method="post">

        <?php

        if (isset($_POST['checkeado'])) {
            foreach ($_POST['foto'] as $img) {
                unlink($img);

                    
                
            }

            header('Location: index.php');
        } else {
            $ruta = 'imagenes/';
            // echo "<pre>";
            // var_dump($_POST);
            //unlink($ruta);
            foreach ($_POST['foto'] as $img) {
                echo "<img class='bd-placeholder-img' height = '200px' width='200px' src = '$img' >
    
                 <input type = 'hidden' name = 'foto[]' value = '$img'> ";
            }
        }
        ?>



        <br>
        <input type="submit" class="btn btn-danger" value="Eliminar fotos">
        <input type="hidden" name="checkeado" value="true">

    </form>

    <a href="index.php" type="button" class="btn btn-primary">Cancelar eliminacion</a>
</body>

</html>