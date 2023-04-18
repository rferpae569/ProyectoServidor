<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../icono/claquetaicon.png">
    <title>JuegoMusica</title>
    <link rel="stylesheet" href="../css/EstiloCanciones.css">
    <script src="../javascript/Scripts.js"></script>
</head>
<?php
    session_start(); //Creamos la sesion
    include "../funciones/Funciones.php"; //Requirimos las funciones del archivo "Funciones.php"
    $numero=numAleatorio(); //Almacenammos en la variable el numero aleatorio
    $_SESSION["aleatorio"]=$numero; //creamos la sesion aleatorio para almacenar el numero aleatorio para la imagen.
    if(!isset($_SESSION["intentos"])){ //Si no existe la sesion "intentos", la creamos, y le decimos que vale tres.
        $_SESSION["intentos"]=3;
    }else if(isset($_SESSION["intentos"])){ //Si existe, comprobamos que vale tres, y si vale 0, le decimos que vuelva valer 3.
        if($_SESSION["intentos"]==3){
            $_SESSION["intentos"]=3;
        }else if($_SESSION["intentos"]==0){
            $_SESSION["intentos"]=3;
        }
    }
    $rankingUsuario=cogeRankingUsuario($_SESSION["usuario"]);

    echo ("<h1>Usuario: " . $_SESSION["usuario"] . "<h1>"); //Mostramos el usuario iniciado con la sesion.
    echo ("<h1>Puntos: " . $_SESSION["puntos"]. "</h1>"); //Mostramos los puntos con la sesion.
    echo("<h1>Record: " . implode(CogeRecordMusica($rankingUsuario)) . "</h1>");

    if($_SESSION["puntos"]==0 && $_SESSION["intentos"]==3){ //Este if sirve para saber cuantas veces ha jugado el usuario al juego.
        $jugadaUsuario=cogeJugadaUsuario(); 
        incrementaJugadaMusica($jugadaUsuario);
    }

    if($_SESSION["intentos"]==3){ //Si la sesion de intentos vale 3, mostramos tres imagenes.
        echo ("<h1>Intentos: " . "</h1>");
        echo '<div style="display: flex; justify-content: center;"> <img src="../icono/claquetaicon.png" style="width:30px;height:30px;margin: 0px 2px" />   <img src="../icono/claquetaicon.png" style="width:30px;height:30px;margin: 0px 2px" />   <img src="../icono/claquetaicon.png" style="width:30px;height:30px;margin: 0px 2px" /> </div>';         
    }else if ($_SESSION["intentos"]==2){ //Si la sesion de intentos vale 2, mostramos dos imagenes.
        echo ("<h1>Intentos: " . "</h1>");
        echo '<div style="display: flex; justify-content: center;"> <img src="../icono/claquetaicon.png" style="width:30px;height:30px;margin: 0px 2px" />   <img src="../icono/claquetaicon.png" style="width:30px;height:30px;margin: 0px 2px" /> </div>';         
    }else if($_SESSION["intentos"]==1){ //Si la sesion de intentos vale 1, mostramos una imagen.
        echo ("<h1>Intentos: " . "</h1>");
        echo '<div style="display: flex; justify-content: center;"> <img src="../icono/claquetaicon.png" style="width:30px;height:30px;margin: 0px 2px" /> </div>'; 
    }
?>
<body>
    <h1>¿A que película pertenece esta música?</h1>

    <audio controls>
    <source src="../musica/<?php echo cogeMusica($numero);?>" type="audio/mp3"><!--Mostramos el audio de la cancion-->
        Tu navegador no soporta audio HTML5.
    </audio>

    <div id="pistaCancion" style="display:none;">
    <h1>Pista Musical:</h1>
    <?php echo obtenerCanciones($numero) ?>
    </div>

    <button onclick="mostrarPistaMusica()">Pista</button> <!--Añadimos el boton para mostrar la pista al hacer click en el con javascript-->

    <form action="../comprobacion/comprobarRespuesta3.php" method="post" autocomplete="off"><!--Creamos un formulario para que el usuario pueda responder-->
    <div id="titulopelicula"></div><!-- Creamos un div para mostrar los datos del AJAX-->
    <input type="text" placeholder="Introduce la respuesta" name="respuesta" onkeyup="TituloPeliculaAJAX(this.value)">
    <input type="submit" id="comprobar"  name="comprobar" value="comprobar">
    </form>
</body>
</html>