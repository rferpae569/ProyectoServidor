-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2023 a las 20:08:13
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `juegocine`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canciones`
--

CREATE TABLE `canciones` (
  `id` int(11) NOT NULL,
  `musica` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `compositor` varchar(50) NOT NULL,
  `mclave` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `canciones`
--

INSERT INTO `canciones` (`id`, `musica`, `nombre`, `compositor`, `mclave`) VALUES
(1, 'AlwaysACatchBatman2.mp3', 'Always A Catch Batman', 'Hans zimmer', '0:20'),
(2, 'AVirusMatrix.mp3', 'A Virus', 'Don Davis', '0:30'),
(3, 'BeautifulLieBatmanSuperman.mp3', 'Beautiful Lie', 'Hans Zimmer y Junkie XL', '2:20'),
(4, 'E.T..mp3', 'Flying Theme', 'John Williams', '0:13'),
(5, 'ElTangodeRoxanneMoulin.mp3', 'El Tango de Roxanne', 'Sting', '0:30'),
(6, 'EntryOfNoblesCid.mp3', 'Entry Of Nobles', 'Miklós Rózsa', '0:13'),
(7, 'Fairytaleshrek.mp3', 'Fairytale', 'Harry Gregson-Williams y John Powell', '0:00'),
(8, 'FuneralMarchofQueenMaryMecanica.mp3', 'Funeral March of Queen Mary', 'Henry Purcell', '0:00'),
(9, 'IceDanceEduardo.mp3', 'Ice Dance', 'Danny Elfman', '0:40'),
(10, 'LongTimeTimeAgoFauno.mp3', 'Long, Long Time Ago', 'Javier Navarrete', '0:00'),
(11, 'MainTitleAddams.mp3', 'Main Title', 'Vic Mizzy', '0:23'),
(12, 'MainTitlesAttacks.mp3', 'Main Titles', 'Danny Elfman', '0:30'),
(13, 'MainTitlesspiderman.mp3', 'Main Titles', 'Danny Elfman', '0:00'),
(14, 'MistyMountainsHobbit.mp3', 'Misty Mountains', 'David Donaldson', '0:18'),
(15, 'MolossusBatman.mp3', 'Molossus', 'Hans zimmer', '0:00'),
(16, 'MumiaAttackMomia.mp3', 'Mumia Attack', 'Jerry Goldsmith', '0:10 y 1:15'),
(17, 'MyFriendsSweeney.mp3', 'My Friends', 'Stephen Sondheim', '0:15'),
(18, 'NoahVistsBosque.mp3', 'Noah Visits', 'James Newton Howard', '1:30'),
(19, 'NoEscapeSimios.mp3', 'No Escape', 'Jerry Goldsmith', '2:20'),
(20, 'PortalsEngame.mp3', 'Portals', 'Alan Silvestri', '1:35'),
(21, 'SafeReturnBallena.mp3', 'Safe Return', 'Rob Simonsen', '1:35'),
(22, 'SandrasThemeBig.mp3', 'Sandra\'s Theme', 'Danny Elfman', '0:30'),
(23, 'TheBeastisontheMoveMultiple.mp3', 'The Beast is on the Move', 'Dylan Thordson', '1:00'),
(24, 'TheGreatJediPurgeStarWars3.mp3', 'The Great Jedi Purge', 'John Williams', '0:00'),
(25, 'TheMagnificentSeven.mp3', 'The Magnificent Seven', ' Elmer Bernstein', '0:10'),
(26, 'Themechucky1.mp3', 'Theme', 'Joe Renzetti', '0:10'),
(27, 'ThemeFuturo.mp3', 'Theme', 'Alan Silvestri', '0:30 y 0:50'),
(28, 'TheQuidditchWorldCupHarry4.mp3', 'The Quidditch World Cup', 'Patrick Doyle', '0:45'),
(29, 'TheTamingofSmeagolAnillos2.mp3', 'The Taming of Smeagol', 'Howard Shore', '0:00 y 1:45'),
(30, 'VitoAndAbbandandoPadrino2.mp3', 'Vito And Abbandando', 'Nino Rota', '0:45'),
(31, 'WhatsThisPesadillas.mp3', 'What is', 'Danny Elfman', '0:45'),
(32, 'Stampede.mp3', 'Stampede', 'James Horner', '0:35'),
(33, 'Mrs.Doubtfire.mp3', 'Mrs. Doubtfire', 'Howard Shore', '0:00'),
(34, 'TheMachineAge.mp3', 'The Machine Age', 'James Horner', '1:00'),
(35, 'TheGremlinRag.mp3', 'The Gremlin Rag', 'Jerry Goldsmith', '0:00'),
(36, 'YouArethePan.mp3', 'You Are the Pan', 'John Williams', '0:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correos`
--

CREATE TABLE `correos` (
  `correo` varchar(40) NOT NULL,
  `NombreUsuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `correos`
--

INSERT INTO `correos` (`correo`, `NombreUsuario`) VALUES
('carlos@gmail.com', 'carlos'),
('juanmaEV@gmail.com', 'juanmaEV'),
('manolo@gmail.com', 'manolo'),
('prueba@gmail.com', 'prueba'),
('rocio@gmail.com', 'rocio'),
('ruben@gmail.com', 'ruben');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dosjugadores`
--

CREATE TABLE `dosjugadores` (
  `NombreUsuario` varchar(20) NOT NULL,
  `NombreUsuario2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `imagen`) VALUES
(1, '7magnificos.PNG'),
(2, 'anillos.PNG'),
(3, 'ballena.PNG'),
(4, 'batmansuperman.PNG'),
(5, 'big fish.PNG'),
(6, 'chucky.PNG'),
(7, 'cid.PNG'),
(8, 'Eduardo.PNG'),
(9, 'elbosque.PNG'),
(10, 'endgame.PNG'),
(11, 'HarryPotter4.PNG'),
(12, 'hobbit.PNG'),
(13, 'mecanica.PNG'),
(14, 'multiple.PNG'),
(15, 'padrino2.PNG'),
(16, 'pesadillas.PNG'),
(17, 'rouge.PNG'),
(18, 'spiderman.PNG'),
(19, 'starwars3.PNG'),
(20, 'todd.PNG'),
(21, 'simios68.PNG'),
(22, 'addams.PNG'),
(23, 'regresofuturo.PNG'),
(24, 'fauno.PNG'),
(25, 'momia.PNG'),
(26, 'attack.PNG'),
(27, 'shrek.PNG'),
(28, 'matrix.PNG'),
(29, 'ET.PNG'),
(30, 'begins.PNG'),
(31, 'oscuro.PNG'),
(32, 'bicentenario.PNG'),
(33, 'doubtfire.PNG'),
(34, 'gremlins.PNG'),
(35, 'hook.PNG'),
(36, 'jumanji.PNG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numjugadas`
--

CREATE TABLE `numjugadas` (
  `Codigojugadas` int(40) NOT NULL,
  `JugadasImagen` int(40) NOT NULL,
  `JugadasPreguntas` int(40) NOT NULL,
  `JugadasMusica` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `numjugadas`
--

INSERT INTO `numjugadas` (`Codigojugadas`, `JugadasImagen`, `JugadasPreguntas`, `JugadasMusica`) VALUES
(1, 5, 4, 10),
(2, 3, 2, 1),
(3, 1, 2, 1),
(4, 4, 1, 2),
(5, 3, 2, 2),
(6, 2, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `Nombre` varchar(50) NOT NULL,
  `Director` varchar(30) NOT NULL,
  `Anio` int(20) NOT NULL,
  `Productora` varchar(30) NOT NULL,
  `Distribuidora` varchar(30) NOT NULL,
  `Presupuesto` varchar(30) NOT NULL,
  `Recaudacion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`Nombre`, `Director`, `Anio`, `Productora`, `Distribuidora`, `Presupuesto`, `Recaudacion`) VALUES
('Batman Begins', 'Christopher Nolan', 2005, 'Legendary Pictures', 'Warner Bros. Pictures', '150 millones', '374 millones'),
('Batman vs Superman: El amanecer de la justicia', 'Zack Snyder', 2016, 'DC Entertainment', 'Warner Bros. Pictures', '250 millones', '872 millones'),
('Big Fish', 'Tim Burton', 2003, 'Tim Burton Productions', 'Columbia Pictures', '70 millones', '122 millones'),
('E.T., el extraterrestre', 'Steven Spielberg', 1982, 'Amblin Entertainment', 'Universal Pictures', '10 millones', '793 millones'),
('Eduardo Manostijeras', 'Tim Burton', 1990, '20th Century Studios', '20th Century Fox', '20 millones', '86 millones'),
('El bosque', 'M. Night Shyamalan', 2004, 'Touchstone Pictures', 'Buena Vista Pictures', '60 millones', '256 millones'),
('El caballero oscuro', 'Christopher Nolan', 2008, 'Legendary Pictures', 'Warner Bros. Pictures', '185 millones', '1 billón'),
('El cid', 'Anthony Mann', 1982, 'Monogram Pictures', 'Monogram Pictures', '7 millones', '27 millones'),
('El hobbit: Un viaje Inesperado', 'Peter Jackson', 2012, 'New Line Cinema', 'Warner Bros. Pictures', '315 millones', '1 billón'),
('El hombre bicentenario', 'Chris Columbus', 1999, 'Columbia Pictures', 'Buena Vista Pictures', '100 millones', '87 millones'),
('El laberinto del fauno', 'Guillermo del Toro', 2006, 'Esperanto Filmoj', 'Warner Bros. Pictures', '13 millones', '87 millones'),
('El padrino 2', 'Francis Ford Coppola', 1974, 'Paramount Pictures', 'Paramount Pictures', '13 millones', '93 millones'),
('El planeta de los simios', 'Franklin J. Schaffner', 1968, 'APJAC Productions', '20th Century Fox', '5 millones', '33 millones'),
('El señor de los Anillos: Las dos torres', 'Peter Jackson', 2002, 'WingNut Films', 'New Line Cinema', '94 millones', '925 millones'),
('Gremlins', 'Joe Dante', 1984, 'Amblin Entertainment', 'Warner Bros. Pictures', '11 millones', '153 millones'),
('Harry Potter y el cáliz de fuego', 'Mike Newell', 2005, 'Heyday Films', 'Warner Bros. Pictures', '150 millones', '900 millones'),
('Hook', 'Steven Spielberg', 1991, 'Amblin Entertainment', 'TriStar Pictures', '70 millones', '300 millones'),
('Jumanji', 'Joe Johnston', 1995, 'Teitler Film', 'TriStar Pictures', '65 millones', '263 millones'),
('La ballena', 'Darren Aronofsky', 2022, 'Protozoa Pictures', 'A24', '3 millones', '20 millones'),
('La familia addams', 'Barry Sonnenfeld', 1991, 'Orion Pictures', 'Paramount Pictures', '30 millones', '191 millones'),
('La momia', 'Stephen Sommers', 1999, 'Alphaville', 'Universal Pictures', '80 millones', '415 millones'),
('La naranja mecánica', 'Stanley Kubrick', 1971, 'Hawk Films', 'Warner Bros.', '2 millones', '26 millones'),
('Los siete magníficos', 'Antoine Fuqua', 2016, 'Village Roadshow Pictures', 'Columbia Pictures', '90 millones', '160 millones'),
('Mars Attacks!', 'Tim Burton', 1996, 'Warner Bros.', 'Warner Bros. Pictures', '70 millones', '101 millones'),
('Matrix', 'Lilly y Lana Wachowski', 1999, 'Village Roadshow Pictures', 'Warner Bros. Pictures', '363 millones', '1 billón 632 millones'),
('Moulin Rouge!', 'Baz Luhrmann', 2001, 'Angel Studios', '20th Century Fox', '52 millones', '179 millones'),
('Mrs. Doubtfire', 'Chris Columbus', 1993, 'Blue Wolf Productions', '20th Century Fox', '25 millones', '441 millones'),
('Múltiple', 'M. Night Shyamalan', 2016, 'Blumhouse Productions', 'Universal Pictures', '9 millones', '278 millones'),
('Muñeco diabólico', 'Tom Holland', 1988, 'United Artists', 'Metro-Goldwyn-Mayer', '9 millones', '44.2 millones'),
('Pesadillas Antes de Navidad', 'Henry Selick', 1993, 'Walt Disney Pictures', 'Walt Disney Studios', '18 millones', '91 millones'),
('Regreso al futuro', 'Robert Zemeckis', 1985, 'Universal Pictures', 'Universal Pictures', '19 millones', '389 millones'),
('Shrek', 'Andrew Adamson y Vicky Jenson', 2001, 'DreamWorks Pictures', 'DreamWorks Animation', '60 millones', '488 millones'),
('Spider-Man', 'Sam Raimi', 2002, 'Columbia Pictures', 'Sony Pictures Releasing', '139 millones', '825 millones'),
('Star Wars: Episodio III - La venganza de los Sith', 'George Lucas', 2005, 'Lucasfilm', '20th Century Fox', '113 millones', '848 millones'),
('Sweeney Todd', 'Tim Burton', 2007, 'DreamWorks Pictures', 'Warner Bros. Pictures', '50 millones', '152 millones'),
('Vengadores: EndGame', 'Anthony y Joe Russo', 2019, 'Marvel Studios', 'Walt Disney Studios', '356 millones', '2800 millones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculascanciones`
--

CREATE TABLE `peliculascanciones` (
  `NombrePelicula` varchar(50) NOT NULL,
  `idmusica` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `peliculascanciones`
--

INSERT INTO `peliculascanciones` (`NombrePelicula`, `idmusica`) VALUES
('Batman Begins', 15),
('Batman vs Superman: El amanecer de la justicia', 3),
('Big Fish', 22),
('E.T., el extraterrestre', 4),
('Eduardo Manostijeras', 9),
('El bosque', 18),
('El caballero oscuro', 1),
('El cid', 6),
('El hobbit: Un viaje Inesperado', 14),
('El hombre bicentenario', 34),
('El laberinto del fauno', 10),
('El padrino 2', 30),
('El planeta de los simios', 19),
('El señor de los Anillos: Las dos torres', 29),
('Gremlins', 35),
('Harry Potter y el cáliz de fuego', 28),
('Hook', 36),
('Jumanji', 32),
('La ballena', 21),
('La familia addams', 11),
('La momia', 16),
('La naranja mecánica', 8),
('Los siete magníficos', 25),
('Mars Attacks!', 12),
('Matrix', 2),
('Moulin Rouge!', 5),
('Mrs. Doubtfire', 33),
('Múltiple', 23),
('Muñeco diabólico', 26),
('Pesadillas Antes de Navidad', 31),
('Regreso al futuro', 27),
('Shrek', 7),
('Spider-Man', 13),
('Star Wars: Episodio III - La venganza de los Sith', 24),
('Sweeney Todd', 17),
('Vengadores: EndGame', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculasimagenes`
--

CREATE TABLE `peliculasimagenes` (
  `NombrePelicula` varchar(50) NOT NULL,
  `idimagen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `peliculasimagenes`
--

INSERT INTO `peliculasimagenes` (`NombrePelicula`, `idimagen`) VALUES
('Batman Begins', 30),
('Batman vs Superman: El amanecer de la justicia', 4),
('Big Fish', 5),
('E.T., el extraterrestre', 29),
('Eduardo Manostijeras', 8),
('El bosque', 9),
('El caballero oscuro', 31),
('El cid', 7),
('El hobbit: Un viaje Inesperado', 12),
('El hombre bicentenario', 32),
('El laberinto del fauno', 24),
('El padrino 2', 15),
('El planeta de los simios', 21),
('El señor de los Anillos: Las dos torres', 2),
('Gremlins', 34),
('Harry Potter y el cáliz de fuego', 11),
('Hook', 35),
('Jumanji', 36),
('La ballena', 3),
('La familia addams', 22),
('La momia', 25),
('La naranja mecánica', 13),
('Los siete magníficos', 1),
('Mars Attacks!', 26),
('Matrix', 28),
('Moulin Rouge!', 17),
('Mrs. Doubtfire', 33),
('Múltiple', 14),
('Muñeco diabólico', 6),
('Pesadillas Antes de Navidad', 16),
('Regreso al futuro', 23),
('Shrek', 27),
('Spider-Man', 18),
('Star Wars: Episodio III - La venganza de los Sith', 19),
('Sweeney Todd', 20),
('Vengadores: EndGame', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculaspreguntas`
--

CREATE TABLE `peliculaspreguntas` (
  `NombrePelicula` varchar(50) NOT NULL,
  `idpregunta` int(11) NOT NULL,
  `Respuesta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `peliculaspreguntas`
--

INSERT INTO `peliculaspreguntas` (`NombrePelicula`, `idpregunta`, `Respuesta`) VALUES
('Batman Begins', 30, 'Legendary Pictures'),
('Batman vs Superman: El amanecer de la justicia', 1, 'Zack Snyder'),
('Big Fish', 2, 'Tim Burton'),
('E.T., el extraterrestre', 28, 'Steven Spielberg'),
('Eduardo Manostijeras', 3, '20th Century Fox'),
('El bosque', 4, '2004'),
('El caballero oscuro', 31, 'El caballero oscuro'),
('El cid', 5, 'El cid'),
('El hobbit: Un viaje Inesperado', 6, 'Peter Jackson'),
('El hombre bicentenario', 36, 'Columbia Pictures'),
('El laberinto del fauno', 24, 'Guillermo del Toro'),
('El padrino 2', 7, 'Paramount Pictures'),
('El planeta de los simios', 25, '1968'),
('El señor de los Anillos: Las dos torres', 8, '925 millones'),
('Gremlins', 33, '1984'),
('Harry Potter y el cáliz de fuego', 9, 'Warner Bros Pictures'),
('Hook', 32, 'Steven Spielberg'),
('Jumanji', 35, 'Jumanji'),
('La ballena', 10, 'La ballena'),
('La familia addams', 22, 'La familia addams'),
('La momia', 21, 'La momia'),
('La naranja mecánica', 11, '1975'),
('Los siete magníficos', 12, '2016'),
('Mars Attacks!', 26, '1996'),
('Matrix', 27, 'Lilly y Lana Wachowski'),
('Moulin Rouge!', 13, 'Moulin Rouge!'),
('Mrs. Doubtfire', 34, 'Chris Columbus'),
('Múltiple', 14, 'M. Night Shyamalan'),
('Muñeco diabólico', 15, 'Tom Holland'),
('Pesadillas Antes de Navidad', 20, 'Henry Selick'),
('Regreso al futuro', 23, 'Robert Zemeckis'),
('Shrek', 29, '2001'),
('Spider-Man', 16, 'Spider-Man'),
('Star Wars: Episodio III - La venganza de los Sith', 17, 'Georges Lucas'),
('Sweeney Todd', 18, 'Sweeney Todd'),
('Vengadores: EndGame', 19, '2800 millones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id` int(11) NOT NULL,
  `pregunta` varchar(80) NOT NULL,
  `Pista` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id`, `pregunta`, `Pista`) VALUES
(1, '¿Quién fue el director de \"Batman vs Superman\"?', 'Zack....'),
(2, '¿Quién fue el director de la película \"Big Fish\"?', 'También dirigió \"Eduardo Manostijeras\"'),
(3, '¿Qué empresa distribuyo \"Eduardo Manostijeras\"?', '20th Century...'),
(4, '¿En que año fue hecha la película de \"El bosque\"?', 'Fue hecha por el año 2000'),
(5, 'Película histórica protagonizada por \"Charlon Heston\"', 'El protagonista es un mercenario'),
(6, 'Director de la trilogía de \"El hobbit\"', 'Hizo su propia versión de \"King Kong\" en 2005'),
(7, 'Productora de la trilogía de \"El padrino\"', 'El logo de esta productora es una montaña'),
(8, '¿Cuál fue la recaudación de \"El señor de los anillos: Las dos torres\"?', 'Ronda los 900 millones'),
(9, '¿Cuál fue la distribuidora de \"Harry Potter y el cáliz de fuego\"?', 'Warner Bros...'),
(10, '¿Cuál ha sido la película con la que \"Brendan Fraser\" ha ganado su primer óscar?', 'La b....'),
(11, '¿En que año se estreno \"La naranja Mecánica\" en España?', 'La película salió en 1971, pero se estreno años mas tarde debido al régimen franquista'),
(12, '¿En que año salió el remake de \"Los siete Magníficos\"?', 'Fue mas o menos por el 2013'),
(13, '¿Qué película tiene el nombre de un cabaret parisino?', '....Rouge'),
(14, '¿Quién dirigió la película de \"Múltiple\"?', 'M. Night....'),
(15, '¿Quién dirigió la película de \"Muñeco Diabólico\"?', 'Se llama igual que el actor que da vida al Spider-Man de Marvel Studios'),
(16, '¿Cuál es la película mas popular que protagonizo \"Tobey Maguire\"?', 'Al personaje que da nombre a la pelicula se le conoce como \"El trepa muros\"'),
(17, '¿Quién dirigió la saga de \"Star Wars\"?', 'Georges...'),
(18, '¿En que película \"Johnny Deep\" dio vida a un barbero? ', 'Sweeney T...'),
(19, '¿Cuánto dinero recaudo la película de \"EndGame\"?', 'La cifra ronda los 2000 mil millones'),
(20, '¿Quién fue el director de \"Pesadillas antes de Navidad\"?', 'No fue Tim Burton.'),
(21, '¿Qué película del actor \"Brendan Fraser\" ocurre en Egipto?', 'Hay una momia de por medio.'),
(22, 'Es una de las familias mas raras del cine', 'Su hija se llama \"Miércoles\"'),
(23, '¿Quién fue el director de \"Regreso al futuro\"?', 'Robert...'),
(24, '¿Quién fue el director de \"El laberinto del fauno\"?', 'Es muy popular debido a los monstruos que crea para algunas de sus películas'),
(25, '¿En que año salió \"El planeta de los simios\"?', 'Salió sobre 1960'),
(26, '¿En que año salió la película de \"Mars Attack!\"?', 'Salió a mediados de los 90.'),
(27, '¿Quiénes dirigieron la película de \"Matrix\"?', 'Su apellido es \"Wachowski\"'),
(28, '¿Quién fue el director de la película E.T., el extraterrestre?', 'Se le conoce también por haber dirigido \"Jurassic Park\"'),
(29, '¿En que año salió la película de \"Shrek\"?', 'Salió sobre el año 2000'),
(30, '¿Cuál fue la productora de la película \"Batman Begins\"?', 'Legendary...'),
(31, '¿Cuál fue la ultima película en la que salió \"Heath Ledger\" antes de morir?', 'Su personaje es conocido como \"El príncipe payaso del crimen\".'),
(32, '¿Quién fue el director de la película de \"Hook\"?', 'Steven...'),
(33, '¿En que año salió la película \"Gremlins\"?', 'Salió a mediados de los 80'),
(34, '¿Quién dirigió la película \"Mrs. Doubtfire\"?', 'Dirigió la primera película de \"Harry Potter\"'),
(35, '¿Cuál es el titulo de la película que trata de un juego de mesa?', 'En la jungla vas a esperar hasta un 5 o un 8 sacar.'),
(36, '¿Cuál es la productora de \"El hombre bicentenario\"?', 'El logo de esta productora es una mujer alzando una antorcha');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ranking`
--

CREATE TABLE `ranking` (
  `CodigoRanking` int(40) NOT NULL,
  `PuntosImagen` int(40) NOT NULL,
  `PuntosPreguntas` int(40) NOT NULL,
  `PuntosMusica` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ranking`
--

INSERT INTO `ranking` (`CodigoRanking`, `PuntosImagen`, `PuntosPreguntas`, `PuntosMusica`) VALUES
(1, 10, 8, 6),
(2, 12, 6, 7),
(3, 7, 3, 0),
(4, 15, 7, 7),
(5, 7, 6, 8),
(6, 7, 6, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Nombre` varchar(20) NOT NULL,
  `Passwrd` varchar(20) NOT NULL,
  `CodigoRanking` int(40) NOT NULL,
  `Codigojugadas` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Nombre`, `Passwrd`, `CodigoRanking`, `Codigojugadas`) VALUES
('carlos', 'carlos*123', 2, 2),
('juanmaEV', 'juanmaEV*123', 4, 4),
('manolo', 'manolo*123', 5, 5),
('prueba', 'prueba*123', 1, 1),
('rocio', 'rocio*123', 3, 3),
('ruben', 'ruben*123', 6, 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `canciones`
--
ALTER TABLE `canciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `correos`
--
ALTER TABLE `correos`
  ADD PRIMARY KEY (`correo`),
  ADD KEY `NombreUsuario` (`NombreUsuario`);

--
-- Indices de la tabla `dosjugadores`
--
ALTER TABLE `dosjugadores`
  ADD PRIMARY KEY (`NombreUsuario`,`NombreUsuario2`),
  ADD KEY `fk_NombreUsuario2` (`NombreUsuario2`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `numjugadas`
--
ALTER TABLE `numjugadas`
  ADD PRIMARY KEY (`Codigojugadas`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`Nombre`);

--
-- Indices de la tabla `peliculascanciones`
--
ALTER TABLE `peliculascanciones`
  ADD PRIMARY KEY (`NombrePelicula`,`idmusica`),
  ADD KEY `idmusica` (`idmusica`);

--
-- Indices de la tabla `peliculasimagenes`
--
ALTER TABLE `peliculasimagenes`
  ADD PRIMARY KEY (`NombrePelicula`,`idimagen`),
  ADD KEY `Restriccion2` (`idimagen`);

--
-- Indices de la tabla `peliculaspreguntas`
--
ALTER TABLE `peliculaspreguntas`
  ADD PRIMARY KEY (`NombrePelicula`,`idpregunta`),
  ADD KEY `peliculaspreguntas2` (`idpregunta`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`CodigoRanking`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Nombre`),
  ADD KEY `fk_usuarioRanking` (`CodigoRanking`),
  ADD KEY `FK_usuario_numjugadas` (`Codigojugadas`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `correos`
--
ALTER TABLE `correos`
  ADD CONSTRAINT `correos_ibfk_1` FOREIGN KEY (`NombreUsuario`) REFERENCES `usuarios` (`Nombre`);

--
-- Filtros para la tabla `dosjugadores`
--
ALTER TABLE `dosjugadores`
  ADD CONSTRAINT `fk_NombreUsuario` FOREIGN KEY (`NombreUsuario`) REFERENCES `usuarios` (`Nombre`),
  ADD CONSTRAINT `fk_NombreUsuario2` FOREIGN KEY (`NombreUsuario2`) REFERENCES `usuarios` (`Nombre`);

--
-- Filtros para la tabla `peliculascanciones`
--
ALTER TABLE `peliculascanciones`
  ADD CONSTRAINT `peliculascanciones_ibfk_1` FOREIGN KEY (`idmusica`) REFERENCES `canciones` (`id`),
  ADD CONSTRAINT `peliculascanciones_ibfk_2` FOREIGN KEY (`NombrePelicula`) REFERENCES `peliculas` (`Nombre`);

--
-- Filtros para la tabla `peliculasimagenes`
--
ALTER TABLE `peliculasimagenes`
  ADD CONSTRAINT `Restriccion1` FOREIGN KEY (`NombrePelicula`) REFERENCES `peliculas` (`Nombre`),
  ADD CONSTRAINT `Restriccion2` FOREIGN KEY (`idimagen`) REFERENCES `imagenes` (`id`);

--
-- Filtros para la tabla `peliculaspreguntas`
--
ALTER TABLE `peliculaspreguntas`
  ADD CONSTRAINT `peliculaspreguntas` FOREIGN KEY (`NombrePelicula`) REFERENCES `peliculas` (`Nombre`),
  ADD CONSTRAINT `peliculaspreguntas2` FOREIGN KEY (`idpregunta`) REFERENCES `preguntas` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `FK_usuario_numjugadas` FOREIGN KEY (`Codigojugadas`) REFERENCES `numjugadas` (`Codigojugadas`),
  ADD CONSTRAINT `fk_usuarioRanking` FOREIGN KEY (`CodigoRanking`) REFERENCES `ranking` (`CodigoRanking`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
