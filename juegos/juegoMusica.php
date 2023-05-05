<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../icono/claquetaicon.png">
    <title>JuegoMusica</title>
    <link rel="stylesheet" href="../bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    <script src="../javascript/Scripts.js"></script>
</head>
<?php
session_start(); //Creamos la sesion
include "../funciones/Funciones.php"; //Requirimos las funciones del archivo "Funciones.php"
$numero = numAleatorio(); //Almacenammos en la variable el numero aleatorio
$_SESSION["aleatorio"] = $numero; //creamos la sesion aleatorio para almacenar el numero aleatorio para la imagen.
if (!isset($_SESSION["intentos"])) { //Si no existe la sesion "intentos", la creamos, y le decimos que vale tres.
    $_SESSION["intentos"] = 3;
} else if (isset($_SESSION["intentos"])) { //Si existe, comprobamos que vale tres, y si vale 0, le decimos que vuelva valer 3.
    if ($_SESSION["intentos"] == 3) {
        $_SESSION["intentos"] = 3;
    } else if ($_SESSION["intentos"] == -1) {
        $_SESSION["intentos"] = 3;
    }
}
$rankingUsuario = cogeRankingUsuario($_SESSION["usuario"]);

echo '<div class="d-flex justify-content-between">';
echo '<div class="d-flex flex-column">';
echo "<h1 class='me-auto mt-5'>Usuario: " . $_SESSION["usuario"] . "</h1>"; //Mostramos el usuario iniciado con la sesion.
echo "<h1 class='text-center'>Puntos: " . $_SESSION["puntos"] . "</h1>"; //Mostramos los puntos con la sesion.
echo '</div>';
echo ("<h1 class='ms-auto mt-5'>Record: " . implode(CogeRecordMusica($rankingUsuario)) . "</h1>"); //Mostramos su record
echo '</div>';

if ($_SESSION["puntos"] == 0 && $_SESSION["intentos"] == 3) { //Este if sirve para saber cuantas veces ha jugado el usuario al juego.
    $jugadaUsuario = cogeJugadaUsuario();
    incrementaJugadaMusica($jugadaUsuario);
}

if ($_SESSION["intentos"] == 3) { //Si la sesion de intentos vale 3, mostramos tres imagenes.
    echo ("<h1 class='text-center mt-5'>Intentos: " . "</h1>");
    echo "<div class='text-center mt-5'> <img class='claqueta' src='../icono/claquetaicon.png' />   <img class='claqueta' src='../icono/claquetaicon.png' />   <img class='claqueta' src='../icono/claquetaicon.png'/> </div>";
} else if ($_SESSION["intentos"] == 2) { //Si la sesion de intentos vale 2, mostramos dos imagenes.
    echo ("<h1 class='text-center mt-5'>Intentos: " . "</h1>");
    echo "<div class='text-center mt-5'> <img class='claqueta' src='../icono/claquetaicon.png' />   <img class='claqueta' src='../icono/claquetaicon.png' /> </div>";
} else if ($_SESSION["intentos"] == 1) { //Si la sesion de intentos vale 1, mostramos una imagen.
    echo ("<h1 class='text-center mt-5'>Intentos: " . "</h1>");
    echo "<div class='text-center mt-5'> <img class='claqueta' src='../icono/claquetaicon.png' /> </div>";
}
?>

<body class="preguntamusica">
    <div class="container">
        <h1 class="text-center">¿A qué película pertenece esta música?</h1>

        <audio class="mx-auto d-block" controls>
            <source src="../musica/<?php echo cogeMusica($numero); ?>" type="audio/mp3">
            <!--Mostramos el audio de la cancion-->
            Tu navegador no soporta audio HTML5.
        </audio>

        <div id="pistaCancion" style="display:none;">
            <h1 class="text-center">Pista Musical:</h1>
            <?php echo obtenerCanciones($numero) ?>
        </div><br>

        <button class="btn btn-primary mx-auto d-block" onclick="mostrarPistaMusica()">Pista</button>
        <!--Añadimos el boton para mostrar la pista al hacer click en el con javascript-->

        <form class="mt-4" action="../comprobacion/comprobarRespuesta3.php" method="post" autocomplete="off">
            <!--Creamos un formulario para que el usuario pueda responder-->
            <div id="titulopelicula"></div><!-- Creamos un div para mostrar los datos del AJAX-->
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Introduce la respuesta" name="respuesta" onkeyup="TituloPeliculaAJAX(this.value)">
            </div>
            <div class="text-center"><br>
                <button type="submit" class="btn btn-primary" id="comprobar" name="comprobar">Comprobar</button>
            </div>
        </form>
    </div>
</body>

</html>