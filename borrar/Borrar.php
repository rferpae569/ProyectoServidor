<?php
require("../funciones/Funciones.php"); //Requerimos las funciones del archivo "Funciones.php"
$nombre = $_POST["borrusuario"]; //Almacenamos el usuario en una variable
$correo = $_POST["borrcorreo"]; //Almacenamos el correo en una variable

if (validarcorreo($correo) == true && validarNombre($nombre) == true) {
    //Si la validacion del correo y del nombre son correctas, borramos el correo y el usuario de la base de datos, y luego regresamos volvemos al index.
    borrarCorreo($correo);
    borrarUsuario($nombre);
    header("Location: ../Index.php");

} else { //En caso contrario, volvemos a "BorrarCuenta.php".
    header("Location: BorrarCuenta.php");

}
?>