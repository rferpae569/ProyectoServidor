function mostrarPistaMusica() { //Esta funcion sirve para mostrar u ocultar el contenido de la pista para la musica cuando pulsemos en el boton con id "PistaCancion"
    var x = document.getElementById("pistaCancion");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }

  function mostrarPistaPregunta() { //Esta funcion sirve para mostrar u ocultar el contenido de la pista para la pregunta cuando pulsemos en el boton con id "PistaPregunta"
    var x = document.getElementById("pistaPregunta");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }