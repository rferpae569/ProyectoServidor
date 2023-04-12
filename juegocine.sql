-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: juegocine
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `canciones`
--

DROP TABLE IF EXISTS `canciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `canciones` (
  `id` int(11) NOT NULL,
  `musica` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `compositor` varchar(50) NOT NULL,
  `mclave` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `canciones`
--

LOCK TABLES `canciones` WRITE;
/*!40000 ALTER TABLE `canciones` DISABLE KEYS */;
INSERT INTO `canciones` VALUES (1,'AlwaysACatchBatman2.mp3','Always A Catch Batman','Hans zimmer','0:20'),(2,'AVirusMatrix.mp3','A Virus','Don Davis','0:30'),(3,'BeautifulLieBatmanSuperman.mp3','Beautiful Lie','Hans Zimmer y Junkie XL','2:20'),(4,'E.T..mp3','Flying Theme','John Williams','0:13'),(5,'ElTangodeRoxanneMoulin.mp3','El Tango de Roxanne','Sting','0:30'),(6,'EntryOfNoblesCid.mp3','Entry Of Nobles','Miklós Rózsa','0:13'),(7,'Fairytaleshrek.mp3','Fairytale','Harry Gregson-Williams y John Powell','0:00'),(8,'FuneralMarchofQueenMaryMecanica.mp3','Funeral March of Queen Mary','Henry Purcell','0:00'),(9,'IceDanceEduardo.mp3','Ice Dance','Danny Elfman','0:40'),(10,'LongTimeTimeAgoFauno.mp3','Long, Long Time Ago','Javier Navarrete','0:00'),(11,'MainTitleAddams.mp3','Main Title','Vic Mizzy','0:23'),(12,'MainTitlesAttacks.mp3','Main Titles','Danny Elfman','0:30'),(13,'MainTitlesspiderman.mp3','Main Titles','Danny Elfman','0:00'),(14,'MistyMountainsHobbit.mp3','Misty Mountains','David Donaldson','0:18'),(15,'MolossusBatman.mp3','Molossus','Hans zimmer','0:00'),(16,'MumiaAttackMomia.mp3','Mumia Attack','Jerry Goldsmith','0:10 y 1:15'),(17,'MyFriendsSweeney.mp3','My Friends','Stephen Sondheim','0:15'),(18,'NoahVistsBosque.mp3','Noah Visits','James Newton Howard','1:30'),(19,'NoEscapeSimios.mp3','No Escape','Jerry Goldsmith','2:20'),(20,'PortalsEngame.mp3','Portals','Alan Silvestri','1:35'),(21,'SafeReturnBallena.mp3','Safe Return','Rob Simonsen','1:35'),(22,'SandrasThemeBig.mp3','Sandra\'s Theme','Danny Elfman','0:30'),(23,'TheBeastisontheMoveMultiple.mp3','The Beast is on the Move','Dylan Thordson','1:00'),(24,'TheGreatJediPurgeStarWars3.mp3','The Great Jedi Purge','John Williams','0:00'),(25,'TheMagnificentSeven.mp3','The Magnificent Seven',' Elmer Bernstein','0:10'),(26,'Themechucky1.mp3','Theme','Joe Renzetti','0:10'),(27,'ThemeFuturo.mp3','Theme','Alan Silvestri','0:30 y 0:50'),(28,'TheQuidditchWorldCupHarry4.mp3','The Quidditch World Cup','Patrick Doyle','0:45'),(29,'TheTamingofSmeagolAnillos2.mp3','The Taming of Smeagol','Howard Shore','0:00 y 1:45'),(30,'VitoAndAbbandandoPadrino2.mp3','Vito And Abbandando','Nino Rota','0:45'),(31,'WhatsThisPesadillas.mp3','What is','Danny Elfman','0:45');
/*!40000 ALTER TABLE `canciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `correos`
--

DROP TABLE IF EXISTS `correos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `correos` (
  `correo` varchar(40) NOT NULL,
  `NombreUsuario` varchar(20) NOT NULL,
  PRIMARY KEY (`correo`),
  KEY `NombreUsuario` (`NombreUsuario`),
  CONSTRAINT `correos_ibfk_1` FOREIGN KEY (`NombreUsuario`) REFERENCES `usuarios` (`Nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `correos`
--

LOCK TABLES `correos` WRITE;
/*!40000 ALTER TABLE `correos` DISABLE KEYS */;
INSERT INTO `correos` VALUES ('prueba@gmail.com','prueba');
/*!40000 ALTER TABLE `correos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagenes`
--

LOCK TABLES `imagenes` WRITE;
/*!40000 ALTER TABLE `imagenes` DISABLE KEYS */;
INSERT INTO `imagenes` VALUES (1,'7magnificos.PNG'),(2,'anillos.PNG'),(3,'ballena.PNG'),(4,'batmansuperman.PNG'),(5,'big fish.PNG'),(6,'chucky.PNG'),(7,'cid.PNG'),(8,'Eduardo.PNG'),(9,'elbosque.PNG'),(10,'endgame.PNG'),(11,'HarryPotter4.PNG'),(12,'hobbit.PNG'),(13,'mecanica.PNG'),(14,'multiple.PNG'),(15,'padrino2.PNG'),(16,'pesadillas.PNG'),(17,'rouge.PNG'),(18,'spiderman.PNG'),(19,'starwars3.PNG'),(20,'todd.PNG'),(21,'simios68.PNG'),(22,'addams.PNG'),(23,'regresofuturo.PNG'),(24,'fauno.PNG'),(25,'momia.PNG'),(26,'attack.PNG'),(27,'shrek.PNG'),(28,'matrix.PNG'),(29,'ET.PNG'),(30,'begins.PNG'),(31,'oscuro.PNG');
/*!40000 ALTER TABLE `imagenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peliculas`
--

DROP TABLE IF EXISTS `peliculas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peliculas` (
  `Nombre` varchar(50) NOT NULL,
  `Director` varchar(30) NOT NULL,
  `Anio` int(20) NOT NULL,
  `Productora` varchar(30) NOT NULL,
  `Distribuidora` varchar(30) NOT NULL,
  `Presupuesto` varchar(30) NOT NULL,
  `Recaudacion` varchar(30) NOT NULL,
  PRIMARY KEY (`Nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peliculas`
--

LOCK TABLES `peliculas` WRITE;
/*!40000 ALTER TABLE `peliculas` DISABLE KEYS */;
INSERT INTO `peliculas` VALUES ('Batman Begins','Christopher Nolan',2005,'Legendary Pictures','Warner Bros. Pictures','150 millones','374 millones'),('Batman vs Superman: El amanecer de la justicia','Zack Snyder',2016,'DC Entertainment','Warner Bros. Pictures','250 millones','872 millones'),('Big Fish','Tim Burton',2003,'Tim Burton Productions','Columbia Pictures','70 millones','122 millones'),('E.T., el extraterrestre','Steven Spielberg',1982,'Amblin Entertainment','Universal Pictures','10 millones','793 millones'),('Eduardo Manostijeras','Tim Burton',1990,'20th Century Studios','20th Century Fox','20 millones','86 millones'),('El bosque','M. Night Shyamalan',2004,'Touchstone Pictures','Buena Vista Pictures','60 millones','256 millones'),('El caballero oscuro','Christopher Nolan',2008,'Legendary Pictures','Warner Bros. Pictures','185 millones','1 billón'),('El cid','Anthony Mann',1982,'Monogram Pictures','Monogram Pictures','7 millones','27 millones'),('El hobbit: Un viaje Inesperado','Peter Jackson',2012,'New Line Cinema','Warner Bros. Pictures','315 millones','1 billón'),('El laberinto del fauno','Guillermo del Toro',2006,'Esperanto Filmoj','Warner Bros. Pictures','13 millones','87 millones'),('El padrino 2','Francis Ford Coppola',1974,'Paramount Pictures','Paramount Pictures','13 millones','93 millones'),('El planeta de los simios','Franklin J. Schaffner',1968,'APJAC Productions','20th Century Fox','5 millones','33 millones'),('El señor de los Anillos: Las dos torres','Peter Jackson',2002,'WingNut Films','New Line Cinema','94 millones','925 millones'),('Harry Potter y el cáliz de fuego','Mike Newell',2005,'Heyday Films','Warner Bros. Pictures','150 millones','900 millones'),('La ballena','Darren Aronofsky',2022,'Protozoa Pictures','A24','3 millones','20 millones'),('La familia addams','Barry Sonnenfeld',1991,'Orion Pictures','Paramount Pictures','30 millones','191 millones'),('La momia','Stephen Sommers',1999,'Alphaville','Universal Pictures','80 millones','415 millones'),('La naranja mecánica','Stanley Kubrick',1971,'Hawk Films','Warner Bros.','2 millones','26 millones'),('Los siete magníficos','Antoine Fuqua',2016,'Village Roadshow Pictures','Columbia Pictures','90 millones','160 millones'),('Mars Attacks!','Tim Burton',1996,'Warner Bros.','Warner Bros. Pictures','70 millones','101 millones'),('Matrix','Lilly y Lana Wachowski',1999,'Village Roadshow Pictures','Warner Bros. Pictures','363 millones','1 billón 632 millones'),('Moulin Rouge!','Baz Luhrmann',2001,'Angel Studios','20th Century Fox','52 millones','179 millones'),('Múltiple','M. Night Shyamalan',2016,'Blumhouse Productions','Universal Pictures','9 millones','278 millones'),('Muñeco diabólico','Tom Holland',1988,'United Artists','Metro-Goldwyn-Mayer','9 millones','44.2 millones'),('Pesadillas Antes de Navidad','Henry Selick',1993,'Walt Disney Pictures','Walt Disney Studios','18 millones','91 millones'),('Regreso al futuro','Robert Zemeckis',1985,'Universal Pictures','Universal Pictures','19 millones','389 millones'),('Shrek','Andrew Adamson y Vicky Jenson',2001,'DreamWorks Pictures','DreamWorks Animation','60 millones','488 millones'),('Spider-Man','Sam Raimi',2002,'Columbia Pictures','Sony Pictures Releasing','139 millones','825 millones'),('Star Wars: Episodio III - La venganza de los Sith','George Lucas',2005,'Lucasfilm','20th Century Fox','113 millones','848 millones'),('Sweeney Todd','Tim Burton',2007,'DreamWorks Pictures','Warner Bros. Pictures','50 millones','152 millones'),('Vengadores: EndGame','Anthony y Joe Russo',2019,'Marvel Studios','Walt Disney Studios','356 millones','2800 millones');
/*!40000 ALTER TABLE `peliculas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peliculascanciones`
--

DROP TABLE IF EXISTS `peliculascanciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peliculascanciones` (
  `NombrePelicula` varchar(50) NOT NULL,
  `idmusica` int(11) NOT NULL,
  PRIMARY KEY (`NombrePelicula`,`idmusica`),
  KEY `idmusica` (`idmusica`),
  CONSTRAINT `peliculascanciones_ibfk_1` FOREIGN KEY (`idmusica`) REFERENCES `canciones` (`id`),
  CONSTRAINT `peliculascanciones_ibfk_2` FOREIGN KEY (`NombrePelicula`) REFERENCES `peliculas` (`Nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peliculascanciones`
--

LOCK TABLES `peliculascanciones` WRITE;
/*!40000 ALTER TABLE `peliculascanciones` DISABLE KEYS */;
INSERT INTO `peliculascanciones` VALUES ('Batman Begins',15),('Batman vs Superman: El amanecer de la justicia',3),('Big Fish',22),('E.T., el extraterrestre',4),('Eduardo Manostijeras',9),('El bosque',18),('El caballero oscuro',1),('El cid',6),('El hobbit: Un viaje Inesperado',14),('El laberinto del fauno',10),('El padrino 2',30),('El planeta de los simios',19),('El señor de los Anillos: Las dos torres',29),('Harry Potter y el cáliz de fuego',28),('La ballena',21),('La familia addams',11),('La momia',16),('La naranja mecánica',8),('Los siete magníficos',25),('Mars Attacks!',12),('Matrix',2),('Moulin Rouge!',5),('Múltiple',23),('Muñeco diabólico',26),('Pesadillas Antes de Navidad',31),('Regreso al futuro',27),('Shrek',7),('Spider-Man',13),('Star Wars: Episodio III - La venganza de los Sith',24),('Sweeney Todd',17),('Vengadores: EndGame',20);
/*!40000 ALTER TABLE `peliculascanciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peliculasimagenes`
--

DROP TABLE IF EXISTS `peliculasimagenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peliculasimagenes` (
  `NombrePelicula` varchar(50) NOT NULL,
  `idimagen` int(11) NOT NULL,
  PRIMARY KEY (`NombrePelicula`,`idimagen`),
  KEY `Restriccion2` (`idimagen`),
  CONSTRAINT `Restriccion1` FOREIGN KEY (`NombrePelicula`) REFERENCES `peliculas` (`Nombre`),
  CONSTRAINT `Restriccion2` FOREIGN KEY (`idimagen`) REFERENCES `imagenes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peliculasimagenes`
--

LOCK TABLES `peliculasimagenes` WRITE;
/*!40000 ALTER TABLE `peliculasimagenes` DISABLE KEYS */;
INSERT INTO `peliculasimagenes` VALUES ('Batman Begins',30),('Batman vs Superman: El amanecer de la justicia',4),('Big Fish',5),('E.T., el extraterrestre',29),('Eduardo Manostijeras',8),('El bosque',9),('El caballero oscuro',31),('El cid',7),('El hobbit: Un viaje Inesperado',12),('El laberinto del fauno',24),('El padrino 2',15),('El planeta de los simios',21),('El señor de los Anillos: Las dos torres',2),('Harry Potter y el cáliz de fuego',11),('La ballena',3),('La familia addams',22),('La momia',25),('La naranja mecánica',13),('Los siete magníficos',1),('Mars Attacks!',26),('Matrix',28),('Moulin Rouge!',17),('Múltiple',14),('Muñeco diabólico',6),('Pesadillas Antes de Navidad',16),('Regreso al futuro',23),('Shrek',27),('Spider-Man',18),('Star Wars: Episodio III - La venganza de los Sith',19),('Sweeney Todd',20),('Vengadores: EndGame',10);
/*!40000 ALTER TABLE `peliculasimagenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peliculaspreguntas`
--

DROP TABLE IF EXISTS `peliculaspreguntas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peliculaspreguntas` (
  `NombrePelicula` varchar(50) NOT NULL,
  `idpregunta` int(11) NOT NULL,
  `Respuesta` varchar(50) NOT NULL,
  PRIMARY KEY (`NombrePelicula`,`idpregunta`),
  KEY `peliculaspreguntas2` (`idpregunta`),
  CONSTRAINT `peliculaspreguntas` FOREIGN KEY (`NombrePelicula`) REFERENCES `peliculas` (`Nombre`),
  CONSTRAINT `peliculaspreguntas2` FOREIGN KEY (`idpregunta`) REFERENCES `preguntas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peliculaspreguntas`
--

LOCK TABLES `peliculaspreguntas` WRITE;
/*!40000 ALTER TABLE `peliculaspreguntas` DISABLE KEYS */;
INSERT INTO `peliculaspreguntas` VALUES ('Batman Begins',30,'Legendary Pictures'),('Batman vs Superman: El amanecer de la justicia',1,'Zack Snyder'),('Big Fish',2,'Tim Burton'),('E.T., el extraterrestre',28,'Steven Spielberg'),('Eduardo Manostijeras',3,'20th Century Fox'),('El bosque',4,'2004'),('El caballero oscuro',31,'El caballero oscuro'),('El cid',5,'El cid'),('El hobbit: Un viaje Inesperado',6,'Peter Jackson'),('El laberinto del fauno',24,'Guillermo del Toro'),('El padrino 2',7,'Paramount Pictures'),('El planeta de los simios',25,'1968'),('El señor de los Anillos: Las dos torres',8,'925 millones'),('Harry Potter y el cáliz de fuego',9,'Warner Bros Pictures'),('La ballena',10,'La ballena'),('La familia addams',22,'La familia addams'),('La momia',21,'La momia'),('La naranja mecánica',11,'1975'),('Los siete magníficos',12,'2016'),('Mars Attacks!',26,'1996'),('Matrix',27,'Lilly y Lana Wachowski'),('Moulin Rouge!',13,'Moulin Rouge!'),('Múltiple',14,'M. Night Shyamalan'),('Muñeco diabólico',15,'Tom Holland'),('Pesadillas Antes de Navidad',20,'Henry Selick'),('Regreso al futuro',23,'Robert Zemeckis'),('Shrek',29,'2001'),('Spider-Man',16,'Spider-Man'),('Star Wars: Episodio III - La venganza de los Sith',17,'Georges Lucas'),('Sweeney Todd',18,'Sweeney Todd'),('Vengadores: EndGame',19,'2800 millones');
/*!40000 ALTER TABLE `peliculaspreguntas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preguntas`
--

DROP TABLE IF EXISTS `preguntas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preguntas` (
  `id` int(11) NOT NULL,
  `pregunta` varchar(80) NOT NULL,
  `Pista` varchar(90) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preguntas`
--

LOCK TABLES `preguntas` WRITE;
/*!40000 ALTER TABLE `preguntas` DISABLE KEYS */;
INSERT INTO `preguntas` VALUES (1,'¿Quién fue el director de \"Batman vs Superman\"?','Zack....'),(2,'¿Quién fue el director de la película \"Big Fish\"?','También dirigió \"Eduardo Manostijeras\"'),(3,'¿Qué empresa distribuyo \"Eduardo Manostijeras\"?','20th Century...'),(4,'¿En que año fue hecha la película de \"El bosque\"?','Fue hecha por el año 2000'),(5,'Película histórica protagonizada por \"Charlon Heston\"','El protagonista es un mercenario'),(6,'Director de la trilogía de \"El hobbit\"','Hizo su propia versión de \"King Kong\" en 2005'),(7,'Productora de la trilogía de \"El padrino\"','El logo de esta productora es una montaña'),(8,'¿Cuál fue la recaudación de \"El señor de los anillos: Las dos torres\"?','Ronda los 900 millones'),(9,'¿Cuál fue la distribuidora de \"Harry Potter y el cáliz de fuego\"?','Warner Bros...'),(10,'¿Cuál ha sido la película con la que \"Brendan Fraser\" ha ganado su primer óscar?','La b....'),(11,'¿En que año se estreno \"La naranja Mecánica\" en España?','La película salió en 1971, pero se estreno años mas tarde debido al régimen franquista'),(12,'¿En que año salió el remake de \"Los siete Magníficos\"?','Fue mas o menos por el 2013'),(13,'¿Qué película tiene el nombre de un cabaret parisino?','....Rouge'),(14,'¿Quién dirigió la película de \"Múltiple\"?','M. Night....'),(15,'¿Quién dirigió la película de \"Muñeco Diabólico\"?','Se llama igual que el actor que da vida al Spider-Man de Marvel Studios'),(16,'¿Cuál es la película mas popular que protagonizo \"Tobey Maguire\"?','Al personaje que da nombre a la pelicula se le conoce como \"El trepa muros\"'),(17,'¿Quién dirigió la saga de \"Star Wars\"?','Georges...'),(18,'¿En que película \"Johnny Deep\" dio vida a un barbero? ','Sweeney T...'),(19,'¿Cuánto dinero recaudo la película de \"EndGame\"?','La cifra ronda los 2000 mil millones'),(20,'¿Quién fue el director de \"Pesadillas antes de Navidad\"?','No fue Tim Burton.'),(21,'¿Qué película del actor \"Brendan Fraser\" ocurre en Egipto?','Hay una momia de por medio.'),(22,'Es una de las familias mas raras del cine','Su hija se llama \"Miércoles\"'),(23,'¿Quién fue el director de \"Regreso al futuro\"?','Robert...'),(24,'¿Quién fue el director de \"El laberinto del fauno\"?','Es muy popular debido a los monstruos que crea para algunas de sus películas'),(25,'¿En que año salió \"El planeta de los simios\"?','Salió sobre 1960'),(26,'¿En que año salió la película de \"Mars Attack!\"?','Salió a mediados de los 90.'),(27,'¿Quiénes dirigieron la película de \"Matrix\"?','Su apellido es \"Wachowski\"'),(28,'¿Quién fue el director de la película E.T., el extraterrestre?','Se le conoce también por haber dirigido \"Jurassic Park\"'),(29,'¿En que año salió la película de \"Shrek\"?','Salió sobre el año 2000'),(30,'¿Cuál fue la productora de la película \"Batman Begins\"?','Legendary...'),(31,'¿Cuál fue la ultima película en la que salió \"Heath Ledger\" antes de morir?','Su personaje es conocido como \"El príncipe payaso del crimen\".');
/*!40000 ALTER TABLE `preguntas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ranking`
--

DROP TABLE IF EXISTS `ranking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ranking` (
  `CodigoRanking` int(40) NOT NULL,
  `PuntosImagen` int(40) NOT NULL,
  `PuntosPreguntas` int(40) NOT NULL,
  `PuntosMusica` int(40) NOT NULL,
  PRIMARY KEY (`CodigoRanking`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ranking`
--

LOCK TABLES `ranking` WRITE;
/*!40000 ALTER TABLE `ranking` DISABLE KEYS */;
INSERT INTO `ranking` VALUES (1,0,0,0);
/*!40000 ALTER TABLE `ranking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `Nombre` varchar(20) NOT NULL,
  `Passwrd` varchar(20) NOT NULL,
  `CodigoRanking` int(40) NOT NULL,
  PRIMARY KEY (`Nombre`),
  KEY `fk_usuarioRanking` (`CodigoRanking`),
  CONSTRAINT `fk_usuarioRanking` FOREIGN KEY (`CodigoRanking`) REFERENCES `ranking` (`CodigoRanking`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES ('prueba','prueba*123',1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-12 14:11:05
