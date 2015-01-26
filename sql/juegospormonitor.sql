-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-01-2015 a las 00:45:29
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
-- Estructura de tabla para la tabla `juegospormonitor`
--

CREATE TABLE IF NOT EXISTS `juegospormonitor` (
  `monitores_idMonitor` int(11) NOT NULL,
  `juegos_nombreJuego` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `juegospormonitor`
--
ALTER TABLE `juegospormonitor`
 ADD PRIMARY KEY (`monitores_idMonitor`,`juegos_nombreJuego`), ADD KEY `fk_juegosPorMonitor_monitores_idx` (`monitores_idMonitor`), ADD KEY `fk_juegosPorMonitor_juegos1_idx` (`juegos_nombreJuego`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `juegospormonitor`
--
ALTER TABLE `juegospormonitor`
ADD CONSTRAINT `fk_juegosPorMonitor_juegos1` FOREIGN KEY (`juegos_nombreJuego`) REFERENCES `juegos` (`nombreJuego`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_juegosPorMonitor_monitores` FOREIGN KEY (`monitores_idMonitor`) REFERENCES `monitores` (`idMonitor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
