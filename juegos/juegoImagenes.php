<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../icono/claquetaicon.png">
    <title>JuegoImagenes</title>
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
} else if (isset($_SESSION["intentos"])) { //Si existe, comprobamos que vale tres, y si vale -1, le decimos que vuelva valer 3.
    if ($_SESSION["intentos"] == 3) {
        $_SESSION["intentos"] = 3;
    } else if ($_SESSION["intentos"] == -1) {
        $_SESSION["intentos"] = 3;
    }
}
$rankingUsuario = cogeRankingUsuario($_SESSION["usuario"]); //Coge el raking del usuario correspondiente

echo '<div class="d-flex justify-content-between">';
echo '<div class="d-flex flex-column">';
echo "<h1 class='me-auto mt-5'>Usuario: " . $_SESSION["usuario"] . "</h1>"; //Mostramos el usuario iniciado con la sesion.
echo "<h1 class='text-center'>Puntos: " . $_SESSION["puntos"] . "</h1>"; //Mostramos los puntos con la sesion.
echo '</div>';
echo ("<h1 class='ms-auto mt-5'>Record: " . implode(cogeRecordImagen($rankingUsuario)) . "</h1>"); //Mostramos su record
echo '</div>';

if ($_SESSION["puntos"] == 0 && $_SESSION["intentos"] == 3) { //Este if sirve para saber cuantas veces ha jugado el usuario al juego.
    $jugadaUsuario = cogeJugadaUsuario();
    incrementaJugadaImagen($jugadaUsuario);
}

if ($_SESSION["intentos"] == 3) { //Si la sesion de intentos vale 3, mostramos tres imagenes.
    echo ("<h1 class='text-center mt-5'>Intentos: " . "</h1>");
    echo "<div class='text-center mt-5'> <img class='claqueta' src='../icono/claquetaicon.png' />   <img class='claqueta' src='../icono/claquetaicon.png' />   <img class='claqueta' src='../icono/claquetaicon.png' /> </div>";
} else if ($_SESSION["intentos"] == 2) { //Si la sesion de intentos vale 2, mostramos dos imagenes.
    echo ("<h1 class='text-center mt-5'>Intentos: " . "</h1>");
    echo "<div class='text-center mt-5'> <img class='claqueta' src='../icono/claquetaicon.png' />   <img class='claqueta' src='../icono/claquetaicon.png' /> </div>";
} else if ($_SESSION["intentos"] == 1) {
    echo ("<h1 class='text-center mt-5'>Intentos: " . "</h1>"); //Si la sesion de intentos vale 1, mostramos una imagen.
    echo "<div class='text-center mt-5'> <img class='claqueta' src='../icono/claquetaicon.png' /> </div>";
}
?>

<body>
    <div class="container">
        <h1 class="text-center mt-5">¿A qué película pertenece esta imagen?</h1>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <img src="../img/<?php echo cogeImagen($numero); ?>" class="img-fluid d-block w-100 altoimagen">
                <!--Cogemos la imagen de la base de datos-->
                <form action="../comprobacion/comprobarRespuesta.php" method="post" autocomplete="off" class="mt-4">
                    <!--Creamos un formulario para que el usuario pueda responder-->
                    <div id="titulopelicula"></div>
                    <!-- Creamos un div para mostrar los datos del AJAX-->
                    <div class="form-group colorajax">
                        <label for="respuesta">Introduce la respuesta</label>
                        <input id="respuesta" type="text" class="form-control" placeholder="Respuesta" name="respuesta" onkeyup="TituloPeliculaAJAX(this.value)">
                    </div>
                    <div class="text-center"><br>
                        <button type="submit" class="btn btn-primary">Comprobar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>