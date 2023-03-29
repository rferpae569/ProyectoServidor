<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icono/claquetaicon.png">
    <title>juegoPreguntas</title>
    <link rel="stylesheet" href="css/EstiloPregunta.css">
</head>
<?php
    session_start(); //Creamos la sesion
    include "Funciones.php"; //Requerimos las funciones del archivo "Funciones.php"
    $numero=numAleatorio(); //Almacenammos en la variable el numero aleatorio
    $_SESSION["Paleatorio"]=$numero; //Almacenamos en una sesion el numero aleatorio de la pregunta.
    
    echo ("<h1>Usuario: " . $_SESSION["usuario"] . "<h1>"); //Mostramos el usuario iniciado con la sesion.
    echo ("<h1>Puntos: " . $_SESSION["puntos"]. "</h1>"); //Mostramos los puntos con la sesion.
    ?>
<body>
    <h1>
        <?php echo cogePregunta($numero); ?><!--Cogemos la pregunta de la base de datos-->
    </h1>
    <h1>
        Pista: <?php echo cogePista($numero); ?><!--Cogemos la pista de la base de datos-->
    </h1>
    <form action="comprobarRespuesta2.php" method="post"><!--Creamos un formulario para comprobar la respuesta-->
    <input type="text" placeholder="Introduce la respuesta" name="respuesta">
    <input type="submit" id="comprobar"  name="comprobar" value="comprobar">
    </form>
</body>
</html>