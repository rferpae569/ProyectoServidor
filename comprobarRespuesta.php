<?php
   include "Funciones.php"; //Requerimos las funciones del archivo "Funciones.php"
   $respuesta=$_POST["respuesta"]; //Almacenamos la respuesta en una variable
   session_start(); //Creamos la sesion.
   $numero=$_SESSION["aleatorio"]; //creamos una variable con el valor de la sesion que contiene el numero aleatorio de las imagenes
   $intentos=$_SESSION["intentos"];
   
   $rankingUsuario=cogeRankingUsuario();
   $record=cogeRecordImagen($rankingUsuario);


   if(respuestaImagen($respuesta,$numero)==true){
     //Si la respuesta esta bien, y la sesion de los puntos no es igual a 15, se incrementara, y nos llevara de nuevo a "JuegoImagenes.php"
     if($_SESSION["puntos"]!=14){

          $_SESSION["puntos"]++;

          if ($_SESSION["puntos"] > $record['puntosImagen']) {
               incrementaRecordImagen($rankingUsuario);
           }

          header("Location: juegoImagenes.php");

     }else if ($_SESSION["puntos"]==14 && $_SESSION["intentos"]==3 ||$_SESSION["intentos"]==2 || $_SESSION["intentos"]==1 ){

          header("Location: Victoria.php");

     }

   }else if(respuestaImagen($respuesta,$numero)==false){ //Si la respuesta no fuera correcta, nos llevaria a "Eleccion2.php"
        $intentos--;
        $_SESSION["intentos"]=$intentos;

        if($_SESSION["intentos"]==0){

        header("Location: Eleccion2.php");

        }else{
          header("Location: juegoImagenes.php");
        }
   }
?>