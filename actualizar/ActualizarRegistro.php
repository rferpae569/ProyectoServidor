<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../icono/claquetaicon.png">
    <title>ActualizarRegistro</title>
    <link rel="stylesheet" href="../bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    <script src="../javascript/Scripts.js"></script>
</head>
<body class="fondoformulario">
    <?php
    if ($_COOKIE['cookies'] != 'aceptar') { //Si las cookies no valen "Aceptar", nos quedaremos en el index
    
        header("Location: ../Index.php");
    }
    ?>
    <div class="container">
        <div class="row">
            <h1 class="text-center mt-5">Por favor, actualice sus datos</h1>
            <form action="Actualizar.php" method="post" autocomplete="off">
                <!--Creamos el formulario para actualizar el registro-->
                <div class="form-group">
                    <label for="nombre">Nombre de usuario:</label>
                    <input type="text" class="form-control"
                        placeholder="Ponga su nombre de usuario para actualizar el correo y la contraseña"
                        name="actnombre">
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
        </div>
        <div class="form-group">
            <label for="correo">Correo:</label>
            <input type="text" class="form-control" placeholder="Actualice el correo" name="actcorreo">
        </div>
        <div class="text-center"><br>
            <button type="submit" class="btn btn-primary" id="actualizar" name="actualizar">Actualizar</button>
        </div>
        </form>
    </div>
    </div>
</body>
</html>