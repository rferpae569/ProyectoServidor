<script src="../javascript/Scripts.js"></script>
<?php
include("../funciones/Funciones.php");

if (isset($_POST['nombre'])) { //Este if sirve para mostrar los datos del AJAX en el juego de las imagenes y en el de la musica
  $nombre = trim($_POST['nombre']);
  $peliculas = cogeTituloAJAX($nombre);

  if (!$peliculas) {
    echo "No hay coincidencias";
  } else {
    $output = '';
    foreach ($peliculas as $pelicula) {
      $output .= $pelicula['nombre'] . "<br>";
    }
    echo $output;
  }
}

if (isset($_POST['respuesta'])) { //Este if sirve para mostrar los datos del AJAX en el juego de las preguntas
  $respuesta = trim($_POST['respuesta']);
  $respuestas = cogeRespuestaAJAX($respuesta);

  if (!$respuestas) {
    echo "No hay coincidencias";
  } else {
    $output = '';
    foreach ($respuestas as $respuesta) {
      $output .= $respuesta['respuesta'] . "<br>";
    }
    echo $output;
  }
}
?>