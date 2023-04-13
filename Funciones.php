<?php
    $conexion=conectar(); //Nos conectamos a la base de datos.
   
    function validarNombre($nombre){ 
        $expresion = "/^[a-zA-Z0-9\s]+$/";
        
        if(preg_match($expresion, $nombre)){
            return true;
        }else{
            return false;
        }
    }

    function validarContraseña($password){ //Esta funcion sirve para validar la contraseña del usuario.
        if (preg_match('/^(?=.*[\d])(?=.*[\*]).{8,}$/', $password)){ 
            return true;
        }else{
            return false;
        }
    }

    function validarcorreo($correo){ //Esta funcion sirve para validar el correo del usuario
        if (preg_match('/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/', $correo)) {
            return true;
        } else {
            return false;
        }
    }

    function conectar(){ //Esta funcion sirve para conectarnos a la base de datos mediante PDO de forma persistente
        $host = "localhost";
        $dbname = "juegocine";
        $username = "root";
        $password = "";

        try {
        
            $db = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $username, $password,
            array(PDO::ATTR_PERSISTENT => true));
            return $db;
        } catch (Exception $e) {
                echo "Error al conectar la base de datos: " . $e->getMessage();
                die();
        }
    }

    function desconectar($conexion){ //Esta funcion sirve para desconectarnos de la base de datos (No se utiliza)
        $conexion=null;
        return $conexion;
    }

    function compruebaUsuario($nombre,$contrasena){ //Esta funcion sirve para comprobar si el usuario se encuentra en la base de datos.
        try {
            global $conexion;
            $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE Nombre = :Nombre AND Passwrd = :Passwrd");
            $stmt->bindParam(':Nombre', $nombre);
            $stmt->bindParam(':Passwrd', $contrasena);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($usuario) {
                return true;
            } else {
                return false;
            }
        } catch(PDOException $e){
            echo "Error al comprobar el usuario: " . $e->getMessage();
            die();
        }
    }

    function añadirUsuario($nombre,$password){ //Esta funcion añade el usuario en la base de datos, y a su vez, le crea su ranking para guardar sus puntuaciones en los distintos juegos
        global $conexion;
        try {
            $codigoRanking = $conexion->query("SELECT MAX(codigoRanking) FROM ranking")->fetchColumn() + 1;
            // Comprueba si el codigo de ranking existe previamente en la tabla ranking
            $existeCodigoRanking = $conexion->prepare("SELECT COUNT(*) FROM ranking WHERE CodigoRanking = :CodigoRanking");
            $existeCodigoRanking->bindParam(':CodigoRanking', $codigoRanking, PDO::PARAM_INT);
            $existeCodigoRanking->execute();
            $numFilas = $existeCodigoRanking->fetchColumn(); 
            if($numFilas == 0){ // Si el codigo de ranking no existe, se inserta en la tabla ranking
                $resultadoRanking = $conexion->prepare("INSERT INTO ranking VALUES (:CodigoRanking, :PuntosImagen, :PuntosPreguntas, :PuntosMusica)");
                $resultadoRanking->bindValue(':CodigoRanking', $codigoRanking, PDO::PARAM_INT);
                $resultadoRanking->bindValue(':PuntosImagen', 0, PDO::PARAM_INT);
                $resultadoRanking->bindValue(':PuntosPreguntas', 0, PDO::PARAM_INT);
                $resultadoRanking->bindValue(':PuntosMusica', 0, PDO::PARAM_INT);
                $resultadoRanking->execute();
            }

            $codigojugadas = $conexion->query("SELECT MAX(Codigojugadas) FROM numjugadas")->fetchColumn() + 1;
            // Comprueba si el codigo de jugada existe previamente en la tabla numjugadas
            $existeCodigojugada = $conexion->prepare("SELECT COUNT(*) FROM numjugadas WHERE Codigojugadas = :Codigojugadas");
            $existeCodigojugada->bindParam(':Codigojugadas', $codigojugadas, PDO::PARAM_INT);
            $existeCodigojugada->execute();
            $numFilas = $existeCodigojugada->fetchColumn(); 
            if($numFilas == 0){ // Si el codigo de ranking no existe, se inserta en la tabla ranking
                $resultadojugadas = $conexion->prepare("INSERT INTO numjugadas VALUES (:Codigojugadas, :JugadasImagen, :JugadasPreguntas, :JugadasMusica)");
                $resultadojugadas->bindValue(':Codigojugadas', $codigojugadas, PDO::PARAM_INT);
                $resultadojugadas->bindValue(':JugadasImagen', 0, PDO::PARAM_INT);
                $resultadojugadas->bindValue(':JugadasPreguntas', 0, PDO::PARAM_INT);
                $resultadojugadas->bindValue(':JugadasMusica', 0, PDO::PARAM_INT);
                $resultadojugadas->execute();
            }

            // Se inserta el usuario en la tabla usuarios
            $resultado = $conexion->prepare("INSERT INTO usuarios VALUES (:Nombre, :Passwrd, :CodigoRanking, :CodigoJugadas)");
            $resultado->bindParam(':Nombre', $nombre, PDO::PARAM_STR);
            $resultado->bindParam(':Passwrd', $password,PDO::PARAM_STR);
            $resultado->bindParam(':CodigoRanking', $codigoRanking,PDO::PARAM_INT);
            $resultado->bindParam(':CodigoJugadas', $codigoRanking,PDO::PARAM_INT);
            $resultado->execute();
            return true;
        } catch (Exception $e) {
            echo "Error al agregar registro: ". $e->getMessage();
            die();
        }
    }

    function añadirCorreo($correo,$nombre){ //Esta funcion sirve para almacenar el correo del usuario en la base de datos
        global $conexion;
        try {
            $resultado = $conexion->prepare("INSERT INTO correos VALUES (:correo, :nombreusuario)");
            $resultado->bindParam(':correo', $correo, PDO::PARAM_STR);
            $resultado->bindParam(':nombreusuario', $nombre,PDO::PARAM_STR);
            $resultado->execute();
            return true;
        } catch (Exception $e) {
            // echo "Error al agregar el correo: ". $e->getMessage();
            return false;
            die();
        }
    }

    function actualizarUsuario($nombre,$password){ //Esta funcion sirve para actualizar el usuario en la base de datos.
        global $conexion;
    
        $sql = "UPDATE usuarios SET Nombre=:Nombre, Passwrd=:Passwrd WHERE Nombre=:Nombre";
        $stmt = $conexion->prepare($sql);
    
        $stmt->bindParam(':Nombre', $nombre);
        $stmt->bindParam(':Passwrd', $password);
        return ($stmt->execute()) ? true : false;
    }

    function actualizarCorreo($correo,$nombre){ //Esta funcion sirve para actualizar el correo del usuario en la base de datos.
        global $conexion;
    
        $sql = "UPDATE correos SET correo=:correo, NombreUsuario=:NombreUsuario WHERE NombreUsuario=:NombreUsuario"; //Falla porque hay que añadir el nombre
        $stmt = $conexion->prepare($sql);
    
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':NombreUsuario', $nombre);
        return ($stmt->execute()) ? true : false;
    }

    function borrarCorreo($correo){ //Esta funcion sirve para borrar el correo del usuario de la base de datos
        global $conexion;
        $query = $conexion->prepare("DELETE FROM correos WHERE Correo = :Correo");
        $query->bindParam(":Correo", $correo);
        $query->execute();
        return $query;
    }

    function borrarUsuario($nombre){ //Esta funcion sirve bpara borrar el usuario, su ranking, y su numero de jugadas
        global $conexion;
        try {
            $query = $conexion->prepare("SELECT CodigoRanking, CodigoJugadas FROM usuarios WHERE Nombre = :Nombre");
            $query->bindParam(":Nombre", $nombre);
            $query->execute();
            $codigo = $query->fetch();
            // Borramos el usuario de la tabla usuarios
            $query = $conexion->prepare("DELETE FROM usuarios WHERE Nombre = :Nombre");
            $query->bindParam(":Nombre", $nombre);
            $query->execute();
            // Borramos el registro del ranking correspondiente
            $query = $conexion->prepare("DELETE FROM ranking WHERE CodigoRanking = :CodigoRanking");
            $query->bindParam(":CodigoRanking", $codigo['CodigoRanking']);
            $query->execute();
            //borramos el numero de jugadas
            $query = $conexion->prepare("DELETE FROM numjugadas WHERE CodigoJugadas = :CodigoJugadas");
            $query->bindParam(":CodigoJugadas", $codigo['CodigoJugadas']);
            $query->execute();
            return $query;
        } catch (Exception $e) {
            echo "Error al borrar registro: ". $e->getMessage();
            die();
        }
    }

    function numAleatorio(){ //Esta funcion genera numeros aleatorios para que salgan distintas imagenes y distintas preguntas a la hora de jugar. Los numeros se almacenaran en una sesion para que asi no se puedan repetir los numeros
        if(!isset($_SESSION["numAleatorio"])){
            $_SESSION["numAleatorio"] = array();
        }

        $numeros = $_SESSION["numAleatorio"];
        $numeroAleatorio = rand(1,31);

        while(in_array($numeroAleatorio, $numeros)){
            $numeroAleatorio = rand(1,31);
        }

        array_push($numeros, $numeroAleatorio);
        $_SESSION["numAleatorio"] = $numeros;
        return $numeroAleatorio;
    }

    function obtenerPeliculas($letra){ 
        $db = conectar();
        $query = $db->prepare("SELECT * FROM peliculas WHERE nombre LIKE '%".$letra."%'");
        $query->execute();
        $resultado = $query->fetchAll();
        return $resultado;
    }

    function cogeImagen($numero) { //Esta funcion sirve para coger la imagen de la base de datos (La coge a raiz del numero aleatorio que haya salido).
        global $conexion;
        $query = $conexion->prepare("SELECT imagen FROM imagenes WHERE id=?");
        $query->execute([$numero]);
    
        if ($query->rowCount() > 0) {
            $record = $query->fetch(PDO::FETCH_ASSOC);
            return $record['imagen'];
        } else {
            return false;
        }
    }

    function respuestaImagen($respuesta,$numero){ //Esta funcion sirve para saber si la respuesta introducida por el usuario es correcta (Compara su respuesta con el titulo relacionado con la imagen)
        global $conexion;
        // $sql = $conexion->prepare("SELECT * FROM peliculasImagenes WHERE BINARY LOWER(NombrePelicula) = LOWER(?) AND idImagen = ?");
        $sql = $conexion->prepare("SELECT * FROM peliculasImagenes WHERE SOUNDEX(LOWER(NombrePelicula)) = SOUNDEX(LOWER(?)) AND idImagen = ?"); //El soundex sirve para comparar el valor introducido con el mas cercano. Asi que, en un principio, nos serviria para las tildes.
        $sql->execute(array($respuesta, $numero));

        if($sql->rowCount() > 0){
            return true;
        } else {
            return false;
        }
    }

    function cogePregunta($numero){ //Esta funcion sirve para coger la pregunta de la base de datos (La coge a raiz del numero aleatorio que haya salido).
        global $conexion;
        $query = $conexion->prepare("SELECT pregunta FROM preguntas WHERE id=?");
        $query->execute([$numero]);

        if ($query->rowCount() > 0) {
            $record = $query->fetch(PDO::FETCH_ASSOC);
            return $record['pregunta'];
        } else {
            return false;
        }
    }

    function cogePista($numero){ //Esta funcion sirve para coger la pista de la base de datos (La coge a raiz del numero aleatorio que haya salido).
        global $conexion;
        $query = $conexion->prepare("SELECT pista FROM preguntas WHERE id=?");
        $query->execute([$numero]);

        if ($query->rowCount() > 0) {
            $record = $query->fetch(PDO::FETCH_ASSOC);
            return $record['pista'];
        } else {
            return false;
        }
    }

    function respuestaPregunta($respuesta,$numero){ //Esta funcion sirve para saber si la respuesta introducida por el usuario es correcta (Compara su respuesta con la respuesta relacionada a dicha pregunta)
        global $conexion;
        $sql = $conexion->prepare("SELECT * FROM peliculasPreguntas WHERE BINARY LOWER(Respuesta) = LOWER(?) AND idPregunta = ?");
        // $sql = $conexion->prepare("SELECT * FROM peliculasPreguntas WHERE SOUNDEX(LOWER(Respuesta)) = SOUNDEX(LOWER(?)) AND idPregunta = ?");
        $sql->execute(array($respuesta,$numero));

        if($sql->rowCount() > 0){
            return true;
        } else {
            return false;
        }
    }
    
    function cogeMusica($numero){ //Esta funcion sirve para coger la musica de la base de datos (La coge a raiz del numero aleatorio que haya salido).
        global $conexion;
        $query = $conexion->prepare("SELECT musica FROM canciones WHERE id=?");
        $query->execute([$numero]);
    
        if ($query->rowCount() > 0) {
            $record = $query->fetch(PDO::FETCH_ASSOC);
            return $record['musica'];
        } else {
            return false;
        }
    }

    function respuestaMusica($respuesta,$numero){ //Esta funcion sirve para saber si la respuesta introducida por el usuario es correcta (Compara su respuesta con el titulo relacionado a la cancion)
        global $conexion;
        $sql = $conexion->prepare("SELECT * FROM peliculascanciones WHERE SOUNDEX(LOWER(NombrePelicula)) = SOUNDEX(LOWER(?)) AND idmusica = ?"); //El soundex sirve para comparar el valor introducido con el mas cercano. Asi que, en un principio, nos serviria para las tildes.
        $sql->execute(array($respuesta, $numero));

        if($sql->rowCount() > 0){
            return true;
        } else {
            return false;
        }
    }

    function obtenerCanciones($numero){ //Esta funcion sirve para obtener la informacion de la tabla canciones, y mostrarla en una tabla.
        global $conexion;
        $sql = $conexion->prepare("SELECT nombre, compositor, mclave FROM canciones WHERE id=?");
        $sql->execute([$numero]);

        $canciones = $sql->fetchAll(PDO::FETCH_ASSOC);

        $html = "<table style='border: 1px solid #000000; border-collapse: collapse; margin: 0 auto; width: 100%;'>";
        $html .= "<tr><th style='border: 1px solid #000000; padding: 8px; text-align: center;'>Nombre</th><th style='border: 1px solid #000000; padding: 8px; text-align: center;'>Compositor</th><th style='border: 1px solid #000000; padding: 8px; text-align: center;'>Momento Clave</th></tr>";
        foreach ($canciones as $cancion) {
            $html .= "<tr><td style='border: 1px solid #000000; padding: 8px; text-align: center;'>".$cancion['nombre']."</td><td style='border: 1px solid #000000; padding: 8px; text-align: center;'>".$cancion['compositor']."</td><td style='border: 1px solid #000000; padding: 8px; text-align: center;'>".$cancion['mclave']."</td></tr>";
        }
        $html .= "</table>";

        return $html;
    }

    function cogeRankingUsuario(){ //Esta funcion sirve para coger el ranking de un usuario en concreto
        global $conexion;
        $usuario = $_SESSION["usuario"];
        $sql = "SELECT CodigoRanking FROM usuarios WHERE nombre = '$usuario'";
        $resultado = $conexion->query($sql);
        if($resultado->rowCount() > 0){
            $rankingUsuario = $resultado->fetch(PDO::FETCH_ASSOC);
            return $rankingUsuario;
        }else{
            return false;
        }
    }

    function cogeJugadaUsuario(){ //Esta funcion sirve para coger el codigo de jugadas de un usuario en concreto
        global $conexion;
        $usuario = $_SESSION["usuario"];
        $sql = "SELECT CodigoJugadas FROM usuarios WHERE nombre = '$usuario'";
        $resultado = $conexion->query($sql);
        if($resultado->rowCount() > 0){
            $jugadaUsuario = $resultado->fetch(PDO::FETCH_ASSOC);
            return $jugadaUsuario;
        }else{
            return false;
        }
    }


    function cogeRecordImagen($rankingUsuario){ //Esta funcion sirve para coger el ranking del juego de las imagenes del usuario que esta jugando
        global $conexion;
        $idRanking = $rankingUsuario['CodigoRanking'];
        $sql = "SELECT puntosImagen FROM ranking WHERE CodigoRanking = '$idRanking'";
        $resultado = $conexion->query($sql);
        if($resultado->rowCount() > 0){
            $puntosImagen = $resultado->fetch(PDO::FETCH_ASSOC);
            return $puntosImagen;
        }else{
            return false;
        }
    }

    function incrementaRecordImagen($rankingUsuario){ //Esta funcion sirve para actualizar el record del jugador
        global $conexion;
        $idRanking = $rankingUsuario['CodigoRanking'];
        $sql = "UPDATE ranking SET PuntosImagen = PuntosImagen + 1 WHERE CodigoRanking = '$idRanking'";
        $resultado = $conexion->query($sql);
        if($resultado->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

    function incrementaJugadaImagen($jugadaUsuario){ //Esta funcion sirve para incrementar el numero de veces que juega al juego de las imagenes el usuario.
        global $conexion;
        $idjugada = $jugadaUsuario['CodigoJugadas'];
        $sql = "UPDATE numjugadas SET JugadasImagen = JugadasImagen + 1 WHERE CodigoJugadas = '$idjugada'";
        $resultado = $conexion->query($sql);
        if($resultado->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

    function CogeRecordPreguntas($rankingUsuario){ //Esta funcion sirve para coger el record del juego de las preguntas del usuario que este jugando en ese momento.
        global $conexion;
        $idRanking=$rankingUsuario['CodigoRanking'];
        $sql="SELECT puntosPreguntas FROM ranking WHERE CodigoRanking ='$idRanking'";
        $resultado=$conexion->query($sql);
        if($resultado->rowCount() > 0){
            $puntosPreguntas = $resultado->fetch(PDO::FETCH_ASSOC);
            return $puntosPreguntas;
        }else{
            return false;
        }
    }

    function incrementaRecordPregunta($rankingUsuario){ //Esta funcion sirve para incrementar el record del usuario en el juego de las preguntas
        global $conexion;
        $idRanking = $rankingUsuario['CodigoRanking'];
        $sql = "UPDATE ranking SET PuntosPreguntas = PuntosPreguntas + 1 WHERE CodigoRanking = '$idRanking'";
        $resultado = $conexion->query($sql);
        if($resultado->rowCount() > 0){
            return true;
        }else{
            return false;
        }

    }

    function incrementaJugadaPregunta($jugadaUsuario){ //Este juego sirve para incrementar el numero de jugadas que ha hecho el usuario en el juego de las preguntas
        global $conexion;
        $idjugada = $jugadaUsuario['CodigoJugadas'];
        $sql = "UPDATE numjugadas SET JugadasPreguntas = JugadasPreguntas + 1 WHERE CodigoJugadas = '$idjugada'";
        $resultado = $conexion->query($sql);
        if($resultado->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

    function CogeRecordMusica($rankingUsuario){ //Esta fucion sirve para coger el record del usuario en el juego de musica
        global $conexion;
        $idRanking=$rankingUsuario['CodigoRanking'];
        $sql="SELECT puntosMusica FROM ranking WHERE CodigoRanking ='$idRanking'";
        $resultado=$conexion->query($sql);
        if($resultado->rowCount() > 0){
            $puntosPreguntas = $resultado->fetch(PDO::FETCH_ASSOC);
            return $puntosPreguntas;
        }else{
            return false;
        }
    }

    function incrementaRecordMusica($rankingUsuario){ //Esta funcion sivre para incrementar el record del usuario en el juego de la musica
        global $conexion;
        $idRanking = $rankingUsuario['CodigoRanking'];
        $sql = "UPDATE ranking SET PuntosMusica = PuntosMusica + 1 WHERE CodigoRanking = '$idRanking'";
        $resultado = $conexion->query($sql);
        if($resultado->rowCount() > 0){
            return true;
        }else{
            return false;
        }

    }

    function incrementaJugadaMusica($jugadaUsuario){ //Esta funcion sirve para incrementar el numero de partidas del usuario en el juego de la musica.
        global $conexion;
        $idjugada = $jugadaUsuario['CodigoJugadas'];
        $sql = "UPDATE numjugadas SET JugadasMusica = JugadasMusica + 1 WHERE CodigoJugadas = '$idjugada'";
        $resultado = $conexion->query($sql);
        if($resultado->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }
?>