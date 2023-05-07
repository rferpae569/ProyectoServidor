<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../icono/claquetaicon.png">
    <title>Victoria</title>
    <link rel="stylesheet" href="../bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
</head>
<?php
require "../funciones/Funciones.php";
session_start(); //Creamos la sesion
if (isset($_POST["cerrar"])) {
    if ($_POST["cerrar"] = "cerrar") { //Si pulsamos en cerrar, e cierra la sesion
        header("Location: ../logoff/logoff.php");
    }
}

?>
<body class="fondoderrotaempatedos">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mt-5">Empate</h1>
                <form action="EmpateDos.php" method="post" class="text-center">
                    <input class="btn btn-primary mt-3" type="submit" id="cerrar" name="cerrar"
                        value="Cerrar Sesión"></input>
                </form>
            </div>
        </div>
    </div>
</body>
</html>