<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../icono/claquetaicon.png">
    <title>juegoPreguntas</title>
    <link rel="stylesheet" href="../css/EstiloPregunta2.css">
    <script src="../javascript/Scripts.js"></script>
</head>
<?php
    session_start(); //Creamos la sesion
    include "../funciones/Funciones.php"; //Requerimos las funciones del archivo "Funciones.php"
    $numero=numAleatorio(); //Almacenammos en la variable el numero aleatorio
    $_SESSION["Paleatorio"]=$numero; //Almacenamos en una sesion el numero aleatorio de la pregunta.
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
    echo("<h1>Record: " . implode(cogeRecordPreguntas($rankingUsuario)) . "</h1>");

    if($_SESSION["puntos"]==0 && $_SESSION["intentos"]==3){ //Este if sirve para saber cuantas veces ha jugado el usuario al juego.
        $jugadaUsuario=cogeJugadaUsuario(); 
        incrementaJugadaPregunta($jugadaUsuario);
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
    <h1>
        <?php echo cogePregunta($numero); ?><!--Cogemos la pregunta de la base de datos-->
    </h1>

    <div id="pistaPregunta" style="display:none;">
    <h1>Pista: <?php echo cogePista($numero); ?></h1><!--Cogemos la pista de la base de datos-->
    </div>

    <button onclick="mostrarPistaPregunta()">Pista</button> <!--Añadimos el boton para mostrar la pista al hacer click en el con javascript-->

    <form action="../comprobacion/comprobarRespuesta2.php" method="post" autocomplete="off"><!--Creamos un formulario para comprobar la respuesta-->
    <div id="respuestapregunta"></div><!-- Creamos un div para mostrar los datos del AJAX-->
    <input type="text" placeholder="Introduce la respuesta" name="respuesta" onkeyup="RespuestaPreguntaAJAX(this.value)">
    <input type="submit" id="comprobar"  name="comprobar" value="comprobar">
    </form>
</body>
</html>