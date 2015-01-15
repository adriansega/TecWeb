-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-01-2015 a las 21:53:12
-- Versión del servidor: 10.0.14-MariaDB
-- Versión de PHP: 5.6.2

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
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
`id` int(11) NOT NULL,
  `nombre` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `idioma` varchar(10) CHARACTER SET utf8 NOT NULL,
  `tipo` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id`, `nombre`, `idioma`, `tipo`) VALUES
(1, 'Inicio', 'castellano', 0),
(2, 'Actividades', 'castellano', 0),
(3, 'Horario', 'castellano', 0),
(4, 'Juegos', 'castellano', 0),
(5, 'Quienes Somos', 'castellano', 1),
(6, 'Equipo', 'castellano', 1),
(7, 'Misión', 'castellano', 1),
(8, 'Inscripción', 'castellano', 0),
(9, 'Start', 'ingles', 0),
(10, 'Activities', 'ingles', 0),
(11, 'Timetable', 'ingles', 0),
(12, 'Games', 'ingles', 0),
(13, 'Sign up', 'ingles', 0),
(14, 'Who we are', 'ingles', 1),
(15, 'Team', 'ingles', 1),
(16, 'Mision', 'ingles', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
