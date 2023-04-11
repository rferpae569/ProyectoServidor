<?php
    include "Funciones.php"; //Requerimos las funciones del archivo "Funciones.php"
    $respuesta=$_POST["respuesta"]; //Almacenamos la respuesta en una variable
    session_start(); //Creamos la sesion.
    $numero=$_SESSION["Paleatorio"];  //Se crea una variable con el valor de la sesion que contiene el numero aleatorio de las preguntas
    $intentos=$_SESSION["intentos"];

    if(respuestaPregunta($respuesta,$numero)==true){
      //Si la respuesta esta bien, y la sesion de los puntos no es igual a 30, se incrementara, y nos llevara de nuevo a "JuegoPreguntas.php"
      if($_SESSION["puntos"]!=30){

           $_SESSION["puntos"]++;
           header("Location: juegoPreguntas.php");

      }else{ //Si valiese mas de 30, nos llevaria a "Victoria.php"

           header("Location: Victoria.php");
      }
      
    }else if(respuestaImagen($respuesta,$numero)==false){ //Si la respuesta no fuera correcta, nos llevaria a "Eleccion2.php"

     $intentos--;
     $_SESSION["intentos"]=$intentos;

     if($_SESSION["intentos"]==0){

     header("Location: Eleccion2.php");

     }else{
       header("Location: juegoPreguntas.php");
     }

    }

?>