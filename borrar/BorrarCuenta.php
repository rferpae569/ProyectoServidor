<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../icono/claquetaicon.png">
    <title>BorrarCuenta</title>
    <link rel="stylesheet" href="../bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <script src="../bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
    if ($_COOKIE['cookies'] != 'aceptar') { //Si las cookies no valen "Aceptar", nos quedaremos en el index
    
        header("Location: ../Index.php");

    }
    ?>
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h1 class="text-center mt-5">Lamentamos que quiera marcharse</h1>
                <form action="borrar.php" method="post" autocomplete="off">
                    <!--Creamos un formulario para borrar el registro de la base de datos-->
                    <div class="form-group">
                        <label for="usuario">Usuario:</label>
                        <input type="text" class="form-control" placeholder="Introduce tu usuario" name="borrusuario">
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo:</label>
                        <input type="text" class="form-control" placeholder="Introduce tu correo" name="borrcorreo">
                    </div><br>
                    <input type="submit" class="btn btn-primary" id="borrar" name="borrar" value="Borrar">
                </form>
            </div>
        </div>
    </div>
</body>
</html>