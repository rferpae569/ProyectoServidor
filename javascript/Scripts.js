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

  // Esto es para el AJAX, aun no es seguro
//   function objetoAjax(){
//     var xmlhttp=false;
//     try {
//         xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
//     } catch (e) {
//         try {
//            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//         } catch (E) {
//             xmlhttp = false;
//           }
//     }
//     if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
//         xmlhttp = new XMLHttpRequest();
//     }
//     return xmlhttp;
// }

// function MostrarConsulta(datos){
//   divResultado = document.getElementById('resultado');
//   ajax=objetoAjax();
//   ajax.open("POST", datos);
//   ajax.onreadystatechange=function() {
//       if (ajax.readyState==4) {
//           divResultado.innerHTML = ajax.responseText
//       }
//   }
//   ajax.send(null)
// }