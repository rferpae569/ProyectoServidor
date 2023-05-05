<?php
include "../funciones/Funciones.php"; //Requerimos las funciones del archivo "Funciones.php"
$respuesta = $_POST["respuesta"]; //Almacenamos la respuesta en una variable
session_start(); //Creamos la sesion.
$numero = $_SESSION["aleatorio"]; //Se crea una variable con el valor de la sesion que contiene el numero aleatorio de las preguntas
$intentos = $_SESSION["intentos"];

$rankingUsuario = cogeRankingUsuario($_SESSION["usuario"]);
$record = cogeRecordPreguntas($rankingUsuario);

if (respuestaPregunta($respuesta, $numero) == true) {
  //Si la respuesta esta bien, y la sesion de los puntos no es igual a 15, se incrementara, y nos llevara de nuevo a "JuegoPreguntas.php"
  if ($_SESSION["puntos"] < 15) {

    $_SESSION["puntos"]++;

    if ($_SESSION["puntos"] > $record['puntosPreguntas']) {
      incrementaRecordPregunta($rankingUsuario);
    }

    header("Location: ../juegos/juegoPreguntas.php");

  } else if ($_SESSION["puntos"] == 15 && $_SESSION["intentos"] == 3 || $_SESSION["intentos"] == 2 || $_SESSION["intentos"] == 1) {

    header("Location: ../elecciones/Victoria.php");

  }

} else if (respuestaPregunta($respuesta, $numero) == false) { //Si la respuesta no fuera correcta, nos llevaria a "Eleccion2.php"

  $intentos--;
  $_SESSION["intentos"] = $intentos;

  if ($_SESSION["intentos"] == -1) {

    header("Location: ../elecciones/Eleccion2.php");

  } else {
    header("Location: ../juegos/juegoPreguntas.php");
  }

}

?>