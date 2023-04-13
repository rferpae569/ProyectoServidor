<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icono/claquetaicon.png">
    <title>Eleccion</title>
    <link rel="stylesheet" href="css/EstiloEleccion.css">
</head>
<body><!--Creamos los enlaces para que nos lleve a los juegos-->
        <?php 
        include "Funciones.php";
        session_start();
          $jugadaUsuario = cogeJugadaUsuario();
        ?>
        <a href="juegoImagenes.php" onclick="incrementaJugadaImagen('<?php $jugadaUsuario ?>');">Adivina la película a traves de imágenes (Fácil)</a>
        <a href="juegoPreguntas.php">Adivina la película a traves de preguntas (Normal)</a>
        <a href="juegoMusica.php">Adivina la película a traves de su música (Difícil)</a>
</body>
</html>