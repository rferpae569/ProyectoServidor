<?php
    include "Funciones.php"; //Requerimos las funciones del archivo "Funciones.php"

    $nombre=$_POST['nombre']; //Almacenamos el nombre pasado por formulario en una variable
    $password=$_POST['password']; //Almacenamos el password pasado por formulario en una variable
    $correo=$_POST['correo']; //Almacenamos el coreo pasado por formulario en una variable
    
    if(validarNombre($nombre)==true && validarContraseña($password)==true && validarcorreo($correo)==true){
        //Si las validaciones son correctas, añadimos el usuario a la base de datos
        añadirUsuario($nombre,$password);

        if(añadircorreo($correo,$nombre)==false){ //Si el correo se encuentra en la base de datosm mostrara una alerta mediante javascript, volvera a registro.php, y borrara el usuario introducido
            echo "<script>alert('Lo siento, el correo que ha introducido ya existe en la base de datos. Por favor, introduzca otro');
            window.location.href = 'Registro.php';
            </script>";
            borrarUsuario($nombre);
        }else{ //En caso contrario, añadira el correo, y regresaremos al index.
            añadirCorreo($correo,$nombre);
            header("Location: Index.php");
        }
    }else if(validarNombre($nombre)==false || validarContraseña($password)==false || validarcorreo($correo)==false){
        //En caso de que algunas de las validaciones no sean correctas, nos lleva a "Registro.php"
        header("Location: Registro.php");

    };
?>