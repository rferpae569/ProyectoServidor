<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icono/claquetaicon.png">
    <title>Index</title>
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    <script src="javascript/Scripts.js"></script>
</head>
<body class="fondologin">

    <?php
    if (!isset($_COOKIE['cookies'])) { //Si la cookie del mensaje no existe, la creamos con setcookie.
        setcookie('cookies', true, time() + 8500);
    }

    if (isset($_POST["aceptar"])) { //Si pulsamos el boton aceptar, la cookie pasara a valer aceptar, y hara que el mensaje desaparezca.
        setcookie('cookies', 'aceptar', time() + 8500);
    } else if (isset($_POST["rechazar"])) { //Si pulsamos el boton rechazar, nos mostrara un mensaje por javascript
        echo '<script type="text/javascript">
            alert("Debe aceptar las cookies para continuar");
            </script>';
    }
    ?>

    <h1 class="text-center">Bienvenido a "AdivinaLaPelícula"</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="comprobacion/ComprobarUsuario.php" method="post" class="formulariologin"
                    autocomplete="off"><!--Creamos el formulario-->
                    <div class="form-group">
                        <label for="usuario">Usuario:</label>
                        <input type="text" class="form-control" placeholder="Introduce tu nombre de usuario"
                            name="usuario" required>
                    </div>
                    <div class="form-group">
                        <label for="contrasena">Contraseña:</label>
                        <div class="input-group">
                            <input type="password" class="form-control" placeholder="Introduce tu contraseña"
                                name="contrasena" id="contrasena" required>
                            <div class="input-group-append">
                                <button type="button" class="mostrar-contrasena btn btn-primary rounded"
                                    data-id-contrasena="contrasena">Mostrar</button>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <br><input type="submit" class="btn btn-primary btn-block" id="iniciar" name="iniciar"
                            value="Iniciar Sesión">
                    </div>
                </form>
            </div>
        </div>
    </div> <br>
    <div class="text-center">
        <a href="registro/Registro.php">Aún no estoy registrado</a> |
        <a href="actualizar/ActualizarRegistro.php">Actualizar datos</a> |
        <a href="borrar/BorrarCuenta.php">Borrar cuenta</a> |
        <a href="logindosjugadores/logindosjugadores.php">Modo dos jugadores</a>
    </div>

    <footer class="footer fixed-bottom bg-white" style="<?php if (isset($_POST["aceptar"])) {
        echo "display:none";
    } ?>">
        <div class="container bg-white">
            <form action="Index.php" method="POST">
                <p>Utilizamos cookies propias y de terceros para obtener datos estadísticos de la navegación de nuestros
                    usuarios y mejorar nuestros servicios. Si acepta o continúa navegando, consideramos que acepta su
                    uso. Puede cambiar la configuración u obtener más información <a
                        href="https://ayudaleyprotecciondatos.es/cookies/" class="azul"> aquí (enlace a página de cookies).</a></p>
                <div class="text-center">
                    <input type="submit" class="btn btn-primary" id="aceptar" name="aceptar" value="Aceptar">
                    <input type="submit" class="btn btn-danger" id="rechazar" name="rechazar" value="Rechazar">
                </div>
            </form>
        </div>
    </footer>

    <?php
    if (isset($_COOKIE['cookies'])) { //Si las cookies valen aceptar, el mensaje no se mostrara.
        if ($_COOKIE['cookies'] == 'aceptar') {
            echo '<style type="text/css">footer {display: none;}</style>';
        }
    }
    ?>
</body>
</html>