<?php
include "../funciones/Funciones.php"; //Incluimos Funciones.php
$respuesta = $_POST["respuesta"]; //Pasamos la respuesta
session_start(); //Iniciamos la sesion y pasamos las sesiones correspondientes
$numero = $_SESSION["aleatorio"];
$intentos1 = $_SESSION["intentosusuario1"];
$intentos2 = $_SESSION["intentosusuario2"];

$esTurnoJugador1 = turno($_SESSION["usuario1"], $_SESSION["usuario2"]); //Ejecutamos la funcion turno y la almacenamos en una variable

if ($esTurnoJugador1) { //Si es el turno del jugador1, coge su ranking
     $rankingUsuario1 = cogeRankingUsuario($_SESSION["usuario1"]);
     $record = cogeRecordImagen($rankingUsuario1);

     if (respuestaImagen($respuesta, $numero) == true) { //Si la respuesta es correcta, incrementamos su puntuacion

          if ($_SESSION["puntosusuario1"] < 15) {

               $_SESSION["puntosusuario1"]++;

               if ($_SESSION["puntosusuario1"] > $record['puntosImagen']) { //Si supera el record, incrementamos su record
                    incrementaRecordImagen($rankingUsuario1);
               }

               header("Location: ../juegos/juegoImagenesDos.php"); //Lo mandamos de nuevo al juego de las imagenes

          } else if ($_SESSION["puntosusuario1"] == 15 && $_SESSION["intentosusuario1"] == 3 || $_SESSION["intentosusuario1"] == 2 || $_SESSION["intentosusuario1"] == 1) {
               //Si gana, lo mandamos a VictoriaDos.php
               header("Location: ../elecciones/VictoriaDos.php");

          }

          if ($_SESSION["intentosusuario2"] == 0) { //Si el jugador 2 pierde sus tres vidas, vamos a victoriaDos.php para declarar al jugador 1 como vencedor
               header("Location: ../elecciones/VictoriaDos.php");
          }

     } else if (respuestaImagen($respuesta, $numero) == false) { //Si la respuesta es incorrecta, pierde un intento
          $intentos1--;
          $_SESSION["intentosusuario1"] = $intentos1;

          if ($_SESSION["intentosusuario1"] == 0) { //Si pierde todos los intentos, se va a VictoriaDos.php para declarar la victoria al jugador 2

               header("Location: ../elecciones/VictoriaDos.php");

          } else { //En caso contrario, lo mandamos de nuevo al juego de las imagenes.
               header("Location: ../juegos/juegoImagenesDos.php");
          }
     }

} else { //En caso contrario, si es el jugador 2 quien juega, hacemos lo mismo, pero aplicandolo al jugador 2
     //Cogemos el record del jugador2. 
     $rankingUsuario2 = cogeRankingUsuario($_SESSION["usuario2"]);
     $record = cogeRecordImagen($rankingUsuario2);

     if (respuestaImagen($respuesta, $numero) == true) { //Si la respuesta es correcta, incrementamos su puntuacion

          if ($_SESSION["puntosusuario2"] != 14) {

               $_SESSION["puntosusuario2"]++;

               if ($_SESSION["puntosusuario2"] > $record['puntosImagen']) { //Si supera el record, incrementamos su record
                    incrementaRecordImagen($rankingUsuario2);
               }

               header("Location: ../juegos/juegoImagenesDos.php");

          } else if ($_SESSION["puntosusuario2"] == 14 && $_SESSION["intentosusuario2"] == 3 || $_SESSION["intentosusuario2"] == 2 || $_SESSION["intentosusuario2"] == 1) {
               //Si gana, lo mandamos a VictoriaDos.php
               header("Location: ../elecciones/VictoriaDos.php");

          }

          if ($_SESSION["intentosusuario1"] == 0) { //Si el jugador 1 pierde sus tres vidas, vamos a victoriaDos.php para declarar al jugador 2 como vencedor
               header("Location: ../elecciones/VictoriaDos.php");
          }

     } else if (respuestaImagen($respuesta, $numero) == false) { //Si la respuesta es incorrecta, pierde un intento
          $intentos2--;
          $_SESSION["intentosusuario2"] = $intentos2;

          if ($_SESSION["intentosusuario2"] == 0) { //Si pierde todos los intentos, se va a VictoriaDos.php para declarar vencedor a jugador1

               header("Location: ../elecciones/VictoriaDos.php");

          } else { //En caso contrario, lo mandamos de nuevo al juego de las imagenes.
               header("Location: ../juegos/juegoImagenesDos.php");
          }
     }
}
?>