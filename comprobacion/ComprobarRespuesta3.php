<?php
   include "../funciones/Funciones.php"; //Requerimos las funciones del archivo "Funciones.php"
   $respuesta=$_POST["respuesta"]; //Almacenamos la respuesta en una variable
   session_start(); //Creamos la sesion.
   $numero=$_SESSION["aleatorio"]; //creamos una variable con el valor de la sesion que contiene el numero aleatorio de las imagenes
   $intentos=$_SESSION["intentos"];

   $rankingUsuario=cogeRankingUsuario($_SESSION["usuario"]);
   $record=cogeRecordImagen($rankingUsuario);

   if(respuestaMusica($respuesta,$numero)==true){
     //Si la respuesta esta bien, y la sesion de los puntos no es igual a 15, se incrementara, y nos llevara de nuevo a "JuegoMusica.php"
     if($_SESSION["puntos"]!=14){

          $_SESSION["puntos"]++;

          if ($_SESSION["puntos"] > $record['puntosMusica']) {
            incrementaRecordMusica($rankingUsuario);
          }

          header("Location: ../juegos/juegoMusica.php");

      }else if ($_SESSION["puntos"]==14 && $_SESSION["intentos"]==3 ||$_SESSION["intentos"]==2 || $_SESSION["intentos"]==1 ){

        header("Location: ../elecciones/Victoria.php");

     }

   }else if(respuestaMusica($respuesta,$numero)==false){ //Si la respuesta no fuera correcta, nos llevaria a "Eleccion2.php"

     $intentos--;
     $_SESSION["intentos"]=$intentos;

     if($_SESSION["intentos"]==0){

     header("Location: ../elecciones/Eleccion2.php");

     }else{
       header("Location: ../juegos/juegoMusica.php");
     }
        
   }
?>