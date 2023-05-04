<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../icono/claquetaicon.png">
    <title>Victoria</title>
    <link rel="stylesheet" href="../bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <script src="../bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
</head>
<?php
require "../funciones/Funciones.php";
session_start(); //Creamos la sesion
if (isset($_POST["SI"]) || isset($_POST["NO"])) {
    if ($_POST["SI"] == "SI") { //Si pulsamos "Si", nos llevara a "Eleccion.php" y la sesion de puntos valdra 0 de nuevo.

        header("Location: Eleccion.php");
        $_SESSION["puntos"] = 0;
        $_SESSION["intentos"]=3;

    } else if ($_POST["NO"] == "NO") { //Si pulsamos no, nos llevara al logoff

        header("Location: ../logoff/logoff.php");
    }
}
?>
<body>
    <h1 class="text-center my-4">¡Enhorabuena, has ganado!</h1>
    <h1 class="text-center my-4">¿Quiere volver a jugar?</h1>
    <div class="d-flex justify-content-center">
        <form action="victoria.php" method="post" class="d-flex flex-column">
            <!--Creamos el formulario para saber si queremos volver a jugar o no-->
            <input type="submit" class="btn btn-primary mb-2" id="SI" name="SI" value="SI"></input>
            <input type="submit" class="btn btn-secondary" id="NO" name="NO" value="NO"></input>
        </form>
    </div>
    <div class="d-flex justify-content-center my-5">
        <img src="../graficos/grafico1.php" alt="Gráfico de Porcentajes de Jugadas" class="mx-3">
        <img src="../graficos/grafico2.php" alt="Gráfico de Rankings" class="mx-3">
    </div>
</body>
</html>