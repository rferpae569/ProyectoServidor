<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../icono/claquetaicon.png">
    <title>Eleccion2</title>
    <link rel="stylesheet" href="../css/EstiloFormulario.css">
</head>
<?php
    session_start();//Creamos la sesion.
    if(isset($_POST["SI"]) || isset($_POST["NO"])){
        if($_POST["SI"]=="SI"){//Si pulsamos "Si", nos llevara a "Eleccion.php" y la sesion de puntos valdra 0 de nuevo.

        header("Location: Eleccion.php");
        $_SESSION["puntos"]=0;
        
    }else if($_POST["NO"]=="NO"){ //Si pulsamos no, nos llevara al logoff
        
        header("Location: ../logoff/logoff.php");
    }
}
?>
<body>
    <h1>Lo siento, ha fallado, ¿Desea volverlo a intentar?</h1>
    <form action="Eleccion2.php" method="post"><!--Creamos el formulario para saber si queremos volver a jugar o no-->
        <input type="submit" id="SI" name="SI" value="SI">
        <input type="submit" id="NO" name="NO" value="NO">
    </form>

    <img src="../graficos/grafico1.php" alt="Gráfico de Porcentajes de Jugadas">
    <img src="../graficos/grafico2.php" alt="Gráfico de Rankings">
    
</body>
</html>