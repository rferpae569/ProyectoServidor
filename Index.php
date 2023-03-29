<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icono/claquetaicon.png">
    <title>Index</title>
    <link rel="stylesheet" href="css/EstiloIndex.css">
</head>
<body style="<?php if(isset($_POST["aceptar"])){echo "background-color:white";}?>">

<?php
if(!isset($_COOKIE['cookies'])){ //Si la cookie del mensaje no existe, la creamos con setcookie.
    setcookie('cookies',true,time()+2500);
}

        if(isset($_POST["aceptar"])){ //Si pulsamos el boton aceptar, la cookie pasara a valer aceptar, y hara que el mensaje desaparezca.
            setcookie('cookies','aceptar',time()+2500);
        }else if(isset($_POST["rechazar"])){ //Si pulsamos el boton rechazar, nos mostrara un mensaje por javascript
            echo'<script type="text/javascript">
            alert("Debe aceptar las cookies para continuar");
            </script>';
        }
    ?>

    <h1>Bievenido a "AdivinaLaPelicula"</h1>
    <form action="ComprobarUsuario.php" method="post" class="formulariologin"><!--Creamos el formulario para iniciar sesion-->
        <label for="usuario">Usuario:</label>
        <input type="text" placeholder="Introduce tu nombre de usuario" name="usuario">
        <label for="contrasena">contraseña:</label>
        <input type="text" placeholder="Introduce tu contraseña" name="contrasena">
        <input type="submit" id="iniciar" name="iniciar" value="IniciarSesion">
    </form>
    <a href="Registro.php"><p>Aun no estoy registrado</p></a><!--Creamos un enlace para registrarnos-->
    <a href="ActualizarRegistro.php"><p>Actualizar datos</p></a><!--Creamos un enlace para actualizar nuestros datos-->
    <a href="BorrarCuenta.php"><p>Borrar Cuenta</p></a><!--Creamos un enlace para borrar nuestra cuenta-->

    <footer style="<?php if(isset($_POST["aceptar"])){echo "display:none";}?>"> <!--Creamos el footer para el mensaje de las cookies-->
    <form action="Index.php" method="POST" > 
        <p>Utilizamos cookies propias y de terceros para obtener datos estadísticos de la navegación de nuestros usuarios y mejorar nuestros servicios. Si acepta o continúa navegando, consideramos que acepta su uso. Puede cambiar la configuración u obtener más información <a href="https://ayudaleyprotecciondatos.es/cookies/"> aquí (enlace a página de cookies).</a></p>
        <input type="submit" id="aceptar"  name="aceptar" value="aceptar">
        <input type="submit" id="rechazar" name="rechazar" value="rechazar">
    </form>
    </footer>

    <?php
    if (isset($_COOKIE['cookies'])) { //Si las cookies valen aceptar, el mensaje no se mostrara.
        if ($_COOKIE['cookies'] == 'aceptar') {
        echo '<style type="text/css">footer {display: none;}</style>';
        echo '<style type="text/css">body {background-color: white;}</style>';
        }
    }
    ?>
</body>
</html>