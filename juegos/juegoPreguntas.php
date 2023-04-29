<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../icono/claquetaicon.png">
    <title>juegoPreguntas</title>
    <link rel="stylesheet" href="../bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <script src="../bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    <script src="../javascript/Scripts.js"></script>
</head>
<?php
session_start(); //Creamos la sesion
include "../funciones/Funciones.php"; //Requerimos las funciones del archivo "Funciones.php"
$numero = numAleatorio(); //Almacenammos en la variable el numero aleatorio
$_SESSION["aleatorio"] = $numero; //Almacenamos en una sesion el numero aleatorio de la pregunta.
if (!isset($_SESSION["intentos"])) { //Si no existe la sesion "intentos", la creamos, y le decimos que vale tres.
    $_SESSION["intentos"] = 3;
} else if (isset($_SESSION["intentos"])) { //Si existe, comprobamos que vale tres, y si vale 0, le decimos que vuelva valer 3.
    if ($_SESSION["intentos"] == 3) {
        $_SESSION["intentos"] = 3;
    } else if ($_SESSION["intentos"] == 0) {
        $_SESSION["intentos"] = 3;
    }
}
$rankingUsuario = cogeRankingUsuario($_SESSION["usuario"]);

echo ("<h1 class='text-center mt-5'>Usuario: " . $_SESSION["usuario"] . "<h1>"); //Mostramos el usuario iniciado con la sesion.
echo ("<h1 class='text-center mt-5'>Puntos: " . $_SESSION["puntos"] . "</h1>"); //Mostramos los puntos con la sesion.
echo ("<h1 class='text-center mt-5'>Record: " . implode(cogeRecordPreguntas($rankingUsuario)) . "</h1>");

if ($_SESSION["puntos"] == 0 && $_SESSION["intentos"] == 3) { //Este if sirve para saber cuantas veces ha jugado el usuario al juego.
    $jugadaUsuario = cogeJugadaUsuario();
    incrementaJugadaPregunta($jugadaUsuario);
}

if ($_SESSION["intentos"] == 3) { //Si la sesion de intentos vale 3, mostramos tres imagenes.
    echo ("<h1 class='text-center mt-5'>Intentos: " . "</h1>");
    echo "<div class='text-center mt-5'> <img src='../icono/claquetaicon.png' />   <img src='../icono/claquetaicon.png' />   <img src='../icono/claquetaicon.png' /> </div>";
} else if ($_SESSION["intentos"] == 2) { //Si la sesion de intentos vale 2, mostramos dos imagenes.
    echo ("<h1 class='text-center mt-5'>Intentos: " . "</h1>");
    echo "<div class='text-center mt-5'> <img src='../icono/claquetaicon.png' />   <img src='../icono/claquetaicon.png' /> </div>";
} else if ($_SESSION["intentos"] == 1) { //Si la sesion de intentos vale 1, mostramos una imagen.
    echo ("<h1 class='text-center mt-5'>Intentos: " . "</h1>");
    echo "<div class='text-center mt-5'> <img src='../icono/claquetaicon.png' /> </div>";
}
?>

<body>
    <div class="container">
        <h1 class="text-center">
            <?php echo cogePregunta($numero); ?>
        </h1>

        <div class="alert alert-info" role="alert" style="display:none;" id="pistaPregunta">
            <h4>Pista:</h4>
            <p>
                <?php echo cogePista($numero); ?>
            </p>
        </div>
        <div class="text-center">
            <button class="btn btn-primary mb-3" onclick="mostrarPistaPregunta()">Pista</button>
        </div>
        <form action="../comprobacion/comprobarRespuesta2.php" method="post" autocomplete="off">
            <div id="respuestapregunta"></div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Introduce la respuesta" name="respuesta"
                    onkeyup="RespuestaPreguntaAJAX(this.value)">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" id="comprobar" name="comprobar">Comprobar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>