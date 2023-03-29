<?php
include "Funciones.php"; //Requerimos las funciones del archivo "Funciones.php"
session_start(); //Creamos la sesion.

session_destroy(); //Destruimos las sesiones

header("Location: Index.php"); //Volvemos al index
?>