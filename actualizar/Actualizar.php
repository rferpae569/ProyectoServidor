<?php
require("../funciones/Funciones.php"); //Requerimos las funciones del archivo "Funciones.php"

$nombre = $_POST["actnombre"]; //Almacenamos el nombre pasado por formulario en una variable
$password = $_POST["contrasena"]; //Almacenamos el password pasado por formulario en una variable
$correo = $_POST["actcorreo"]; //Almacenamos el password pasado por formulario en una variable

if (validarNombre($nombre) == true && validarContraseña($password) == true && validarcorreo($correo) == true) {
    if(BuscarRepe($nombre)==false){
        echo "<script>alert('Lo siento, este usuario no esta en la base de datos');
            window.location.href = '../actualizar/ActualizarRegistro.php';
            </script>";
    }else{
    //Si las validaciones son correctas, actualizara el usuario, el correo, y volveremos al index.
    actualizarUsuario($nombre, $password);
    actualizarCorreo($correo, $nombre);
    header("Location: ../Index.php");
    }
}
?>