-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-01-2015 a las 00:44:26
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `afim21`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monitores`
--

CREATE TABLE IF NOT EXISTS `monitores` (
`idMonitor` int(11) NOT NULL,
  `nombreMonitor` varchar(45) NOT NULL,
  `apellidosMonitor` varchar(45) NOT NULL,
  `descripcionMonitor` varchar(512) DEFAULT NULL,
  `imagenMonitor` varchar(256) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `monitores`
--

INSERT INTO `monitores` (`idMonitor`, `nombreMonitor`, `apellidosMonitor`, `descripcionMonitor`, `imagenMonitor`) VALUES
(2, 'Alex', 'Campos Urrutia', '"Es un absoluto privilegio poder presenciar y vivir cada sesión. Somos nosotros quienes aprendemos de cada niño y niña del taller". Alex, al igual que Ana  forma parte del equipo que inició el año pasado este proyecto. Es estudiante de Educación social y también muy activo en su participación sociocomunitaria. El es el responsable del grupo intermedio', 'https://dl-web.dropbox.com/get/Imagenes%20web/Alex.png?_subject_uid=360507652&w=AABs4TrYABmSETJJyMQljivYbiNHgMId5Ut3ROvMcWN15A'),
(3, 'Antonio', 'Garrido Fortun', 'Antonio, es psicólogo, implicado también en actividades sociales y con mucha experiencia en el mundo del ocio y tiempo libre, es además presidente de la Asociación cultural Arcadia42, dedicada al mundo del juego y el cómic. El se ocupa principalmente de la sección juvenil', 'https://dl-web.dropbox.com/get/Imagenes%20web/Antonio.png?_subject_uid=360507652&w=AADt-BnTJPR2Yha67xgcvpRO9brW819iWHPrnfyz5LQsmA'),
(4, 'Adrian', 'Segura Gavilan', 'Adrián, es estudiante de ingeniería informática. Se ha incorporado este año en el taller como monitor, aunque ya participó en nuestra actividad en el curso pasado. Al igual que sus compañeros es experto en muchos de los juegos del taller.', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `monitores`
--
ALTER TABLE `monitores`
 ADD PRIMARY KEY (`idMonitor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `monitores`
--
ALTER TABLE `monitores`
MODIFY `idMonitor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
