<?php
include "../funciones/Funciones.php"; //Requerimos las funciones del archivo "Funciones.php"

$usuario1 = $_POST['usuario1']; //Almacenamos el nombre del usuario1 en una variable
$contrasena1 = $_POST['contrasena1']; //Almacenamos la contraseña del usuario1 en una variable
$usuario2 = $_POST['usuario2']; //Almacenamos el nombre del usuario2 en una variable
$contrasena2 = $_POST['contrasena2']; //Almacenamos la contraseña del usuario2 en una variable

if ($_COOKIE['cookies'] != 'aceptar') { //Si las cookies no valen "Aceptar", seguira estando en el index.

    header("Location: ../Index.php");

} else { //En caso contrario, si el usuario es valido, creara las siguientes secciones, y nos llevara al juego de las imagenes para dos jugadores

    if (CompruebaUsuarioDOS($usuario1, $contrasena1, $usuario2, $contrasena2) == true) {

        session_start();
        $_SESSION["usuario1"] = $usuario1;
        $_SESSION["passwd1"] = $contrasena1;
        $_SESSION["puntosusuario1"] = 0;
        $_SESSION["usuario2"] = $usuario2;
        $_SESSION["passwd2"] = $contrasena2;
        $_SESSION["puntosusuario2"] = 0;

        insertarDosJugadores($usuario1, $usuario2);

        header("Location: ../juegos/juegoImagenesDos.php");

    } else { //En caso contrario, nos llevara al index

        header("Location: ../Index.php");

    }
}
?>