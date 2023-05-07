<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../icono/claquetaicon.png">
    <title>Registro</title>
    <link rel="stylesheet" href="../bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    <script src="../javascript/Scripts.js"></script>
</head>
<?php
if ($_COOKIE['cookies'] != 'aceptar') { //Si la cookie no vale "Aceptar", nos llevara al index.
    header("Location: ../Index.php");
}
?>
<body class="fondoformulario">
    <h1 class="text-center mt-5">Por favor, registrese para jugar</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form class="form" action="../comprobacion/ComprobarRegistro.php" method="post" autocomplete="off">
                    <!--Creamos el formulario para registrarnos-->
                    <div class="form-group">
                        <label for="nombre">Nombre de usuario:</label>
                        <input type="text" class="form-control" placeholder="Introduce el nombre" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <div class="input-group">
                            <input type="password" class="form-control" placeholder="Introduce tu contraseña"
                                name="contrasena" id="contrasena">
                            <div class="input-group-append">
                                <button type="button" class="mostrar-contrasena btn btn-primary rounded"
                                    data-id-contrasena="contrasena">Mostrar</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo:</label>
                        <input type="text" class="form-control" placeholder="Introduce el correo" name="correo">
                    </div>
                    <div class="text-center"><br>
                        <input type="submit" class="btn btn-primary" id="registrar" name="registrar"
                            value="Registrarse">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>