<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../icono/claquetaicon.png">
    <title>JuegoImagenesDos</title>
    <link rel="stylesheet" href="../bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <script src="../bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    <script src="../javascript/Scripts.js"></script>
</head>
<?php
session_start(); //Creamos la sesion
include "../funciones/Funciones.php"; //Requirimos las funciones del archivo "Funciones.php"
$numero = numAleatorio(); //Almacenammos en la variable el numero aleatorio
$_SESSION["aleatorio"] = $numero; //creamos la sesion aleatorio para almacenar el numero aleatorio para la imagen.
if (!isset($_SESSION["intentosusuario1"])) { //Si no existe la sesion "intentosusuario1", la creamos, y le decimos que vale tres.
    $_SESSION["intentosusuario1"] = 3;
}

if (!isset($_SESSION["intentosusuario2"])) { //Si no existe la sesion "intentosusuario2", la creamos, y le decimos que vale tres.
    $_SESSION["intentosusuario2"] = 3;
}

$rankingUsuario1 = cogeRankingUsuario($_SESSION["usuario1"]);
$rankingUsuario2 = cogeRankingUsuario($_SESSION["usuario2"]);

if ($_SESSION["puntosusuario1"] == 0 && $_SESSION["intentosusuario1"] == 3 && $_SESSION["puntosusuario2"] == 0 && $_SESSION["intentosusuario2"] == 3) {
    $jugadaUsuario1 = cogeJugadaUsuarios();
    $jugadaUsuario2 = cogeJugadaUsuarios();
    incrementaJugadaImagenDOS($jugadaUsuario1, $jugadaUsuario2);
}

echo ("<h1>Usuario1: " . $_SESSION["usuario1"] . "<h1>");
echo ("<h1>Puntos: " . $_SESSION["puntosusuario1"] . "</h1>");
echo ("<h1>Record: " . implode(cogeRecordImagenDOS($rankingUsuario1)) . "</h1>"); //Mostramos su record

if ($_SESSION["intentosusuario1"] == 3) { //Si la sesion de intentosusuario1 vale 3, mostramos tres imagenes.
    echo ("<h1>Intentos: " . "</h1>");
    echo "<div> <img src='../icono/claquetaicon.png' />   <img src='../icono/claquetaicon.png' />   <img src='../icono/claquetaicon.png'/> </div>";
} else if ($_SESSION["intentosusuario1"] == 2) { //Si la sesion de intentos vale 2, mostramos dos imagenes.
    echo ("<h1>Intentos: " . "</h1>");
    echo "<div> <img src='../icono/claquetaicon.png' />   <img src='../icono/claquetaicon.png' /> </div>";
} else if ($_SESSION["intentosusuario1"] == 1) {
    echo ("<h1>Intentos: " . "</h1>"); //Si la sesion de intentos vale 1, mostramos una imagen.
    echo "<div> <img src='../icono/claquetaicon.png'/> </div>";
}

echo ("<h1 style='float: right; position: absolute; top: 0; right: 0;'>Usuario2: " . $_SESSION["usuario2"] . "</h1>");
echo ("<h1 style='float: right; clear: both; position: absolute; top: 1.5em; right: 0;'>Puntos: " . $_SESSION["puntosusuario2"] . "</h1><br>");
echo ("<h1 style='float: right; clear: both; position: absolute; top: 3em; right: 0;'>Record: " . implode(cogeRecordImagenDOS($rankingUsuario2)) . "</h1><br>"); //Mostramos su record


if ($_SESSION["intentosusuario2"] == 3) { //Si la sesion de intentosusuario2 vale 3, mostramos tres imagenes.
    echo ("<h1 style='float: right; clear: both; position: absolute; top: 4.5em; right: 0;'>Intentos: " . "</h1>");
    echo "<div style='float: right; clear: both; position: absolute; top: 14.5em; right: 0;'> <img src='../icono/claquetaicon.png'/>   <img src='../icono/claquetaicon.png' />   <img src='../icono/claquetaicon.png' /> </div>";
} else if ($_SESSION["intentosusuario2"] == 2) { //Si la sesion de intentos vale 2, mostramos dos imagenes.
    echo ("<h1 style='float: right; clear: both; position: absolute; top: 4.5em; right: 0;'>Intentos: " . "</h1>");
    echo "<div style='float: right; clear: both; position: absolute; top: 14.5em; right: 0;'> <img src='../icono/claquetaicon.png' />   <img src='../icono/claquetaicon.png' /> </div>";
} else if ($_SESSION["intentosusuario2"] == 1) {
    echo ("<h1 style='float: right; clear: both; position: absolute; top: 4.5em; right: 0;'>Intentos: " . "</h1>"); //Si la sesion de intentos vale 1, mostramos una imagen.
    echo "<div style='float: right; clear: both; position: absolute; top: 14.5em; right: 0;'> <img src='../icono/claquetaicon.png'/> </div>";
}

?>

<body>
    <div class="container">
        <h1 class="text-center mt-5">Es el turno de: <span class="ml-2">
                <?php mostrarturno($_SESSION["usuario1"], $_SESSION["usuario2"]); ?>
            </span></h1>
        <h1 class="text-center mt-5">¿A qué película pertenece esta imagen?</h1>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <img src="../img/<?php echo cogeImagen($numero); ?>" class="img-fluid d-block w-100"><br>
                <!-- La clase "img-fluid" de Bootstrap hace que la imagen sea responsive -->
                <form action="../comprobacion/comprobarRespuestaDOS.php" method="post" autocomplete="off">
                    <!--Creamos un formulario para que el usuario pueda responder-->
                    <div class="form-group">
                        <div id="titulopelicula"></div><!-- Creamos un div para mostrar los datos del AJAX-->
                        <label for="respuesta">Introduce la respuesta:</label>
                        <input id="titulo" type="text" class="form-control" name="respuesta"
                            onkeyup="TituloPeliculaAJAX(this.value)">
                    </div>
                    <div class="text-center"><br>
                        <button type="submit" class="btn btn-primary" name="comprobar">Comprobar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>