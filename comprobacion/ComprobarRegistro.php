<?php
    include "../funciones/Funciones.php"; //Requerimos las funciones del archivo "Funciones.php"

    $nombre=$_POST['nombre']; //Almacenamos el nombre pasado por formulario en una variable
    $password=$_POST['password']; //Almacenamos el password pasado por formulario en una variable
    $correo=$_POST['correo']; //Almacenamos el coreo pasado por formulario en una variable
    
    if(validarNombre($nombre)==true && validarContraseña($password)==true && validarcorreo($correo)==true){
        //Si las validaciones son correctas, añadimos el usuario a la base de datos
        añadirUsuario($nombre,$password);

        if(añadircorreo($correo,$nombre)==false){ //Si el correo se encuentra en la base de datos mostrara una alerta mediante javascript, volvera a registro.php, y borrara el usuario introducido
            echo "<script>alert('Lo siento, el correo que ha introducido ya existe en la base de datos. Por favor, introduzca otro');
            window.location.href = '../registro/Registro.php';
            </script>";
            borrarUsuario($nombre);
        }else{ //En caso contrario, añadira el correo, y regresaremos al index.
            añadirCorreo($correo,$nombre);
            header("Location: ../Index.php");
        }
    }else if(validarNombre($nombre)==false){ //Es caso contrario, si el nombre no es correcto, nos mostrara el siguiente mensaje, y nos llevar de nuevo a registro.php
        echo "<script>alert('Lo siento, el nombre que ha introducido no es correcto o ya se encuentra en la base de datos. Por favor, introduzca otro');
            window.location.href = '../registro/Registro.php';
            </script>";
    }else if(validarContraseña($password)==false){ //Es caso contrario, si la contraseña no es correcta, nos mostrara el siguiente mensaje, y nos llevar de nuevo a registro.php
        echo "<script>alert('Lo siento, La contraseña no cumple los requisitos. Recuerde que debe llevar obligatoriamente numericos y astericos.');
            window.location.href = '../registro/Registro.php';
            </script>";

    }else if(validarcorreo($correo)==false){ //Es caso contrario, si el correo no es correcto, nos mostrara el siguiente mensaje, y nos llevar de nuevo a registro.php
        echo "<script>alert('Lo siento, el correo no es correcto. Debe utilizar gmail.');
        window.location.href = '../registro/Registro.php';
        </script>";
    };
?>