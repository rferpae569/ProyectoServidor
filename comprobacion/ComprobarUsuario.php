<?php
    include "../funciones/Funciones.php"; //Requerimos las funciones del archivo "Funciones.php"

    $usuario=$_POST['usuario']; //Almacenamos el nombre del usuario en una variable
    $contrasena=$_POST['contrasena']; //Almacenamos la contraseña del usuario en una variable

    if($_COOKIE['cookies']!='aceptar'){ //Si las cookies no valen "Aceptar", seguira estando en el index.

        header("Location: ../Index.php");   

    }else{ //En caso contrario, si el usuario es valido, creara las siguientes secciones, y nos llevara a "Eleccion.php"

        if(CompruebaUsuario($usuario,$contrasena)==true){

            session_start();
            $_SESSION["usuario"]=$usuario;
            $_SESSION["passwd"]=$contrasena;
            $_SESSION["puntos"]=0;
    
            header("Location: ../elecciones/Eleccion.php");

        }else{  //En caso contrario, nos llevara al index

            header("Location: ../Index.php");  
              
        }
    }
?>