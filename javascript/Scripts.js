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

  function TituloPeliculaAJAX(nombre) { //Esta funcion sivre para mostrar los titulos de la pelicula con AJAX
    if (nombre.length == 0) { 
      document.getElementById("titulopelicula").innerHTML = "";
      return;
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("titulopelicula").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("POST", "../buscarAJAX/Buscar.php", true); 
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.send("nombre=" + encodeURIComponent(nombre));
    }
  }

  function RespuestaPreguntaAJAX(respuesta) { //Esta funcion sirve para mostrar las respuestas de las pregunta con AJAX
    if (respuesta.length == 0) { 
      document.getElementById("respuestapregunta").innerHTML = "";
      return;
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("respuestapregunta").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("POST", "../buscarAJAX/Buscar.php", true); 
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.send("respuesta=" + encodeURIComponent(respuesta));
    }
  }

  document.addEventListener('DOMContentLoaded', function() { //Esta funcion sirve para mostrar o no la contraseña

  const botonesMostrar = document.querySelectorAll('.mostrar-contrasena');

  botonesMostrar.forEach((boton) => {

  const idContrasena = boton.getAttribute('data-id-contrasena');
  const contrasena = document.getElementById(idContrasena);
  

  boton.addEventListener('click', function () {
    const type = contrasena.getAttribute('type') === 'password' ? 'text' : 'password';
    contrasena.setAttribute('type', type);
    boton.textContent = type === 'password' ? 'Mostrar' : 'Ocultar';
  });
});
  });