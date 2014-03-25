-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2012 a las 17:08:44
-- Versión del servidor: 5.5.19
-- Versión de PHP: 5.4.0RC4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `jtabletestdb`
--
CREATE DATABASE `jtabletestdb` DEFAULT CHARACTER SET latin5 COLLATE latin5_turkish_ci;
USE `jtabletestdb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `people`
--

CREATE TABLE IF NOT EXISTS `people` (
  `PersonId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) NOT NULL,
  `Age` int(10) unsigned NOT NULL,
  `RecordDate` datetime NOT NULL,
  PRIMARY KEY (`PersonId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin5 AUTO_INCREMENT=1 ;
--
-- Base de datos: `usuario`
--
CREATE DATABASE `usuario` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `usuario`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `idadministrador` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nick` varchar(15) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `cp` varchar(10) NOT NULL,
  `telefono` int(15) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  PRIMARY KEY (`idadministrador`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`idadministrador`, `nick`, `nombre`, `apellido`, `direccion`, `cp`, `telefono`, `correo`, `contrasena`) VALUES
(4, 'Alejandro', 'Meza Carrasco', '20', 'Ecatepec', '12350', 26789067, 'alejandromeza@hotmail.com', 'ale'),
(5, 'Alan', 'Diaz', '20', 'lago peypus numero 115', '57500', 15581827, 'kevin_dr04@hotmail.com', 'kevin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

CREATE TABLE IF NOT EXISTS `almacen` (
  `idproducto` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `existencia` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `marca` varchar(30) NOT NULL,
  PRIMARY KEY (`idproducto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Volcado de datos para la tabla `almacen`
--

INSERT INTO `almacen` (`idproducto`, `nombre`, `existencia`, `precio`, `categoria`, `marca`) VALUES
(1, 'LCD HDTV 39" BX450', 5, 7999, 'Pantallas', 'Sony'),
(2, 'BRAVIA SERIE M1 32"', 5, 3999, 'Pantallas', 'Sony'),
(3, 'BRAVIA HXDF LED 42"', 5, 10599, 'Pantallas', 'Sony'),
(4, 'LCD KDL46Z500 39"', 5, 8199, 'Patallas', 'Sony'),
(5, 'TEATRO EN CASA FULL HD 51', 5, 30799, 'Pantallas', 'Sony'),
(6, 'SONY HX850 LED 46"', 5, 18999, 'Pantallas', 'Sony'),
(7, 'INFINIA 47LX9500 49"', 5, 10599, 'Pantallas', 'LG'),
(8, 'LCD RED LB932. 32"', 5, 4799, 'Pantallas', 'LG'),
(9, 'FULL HD LJ4500 32"', 5, 3099, 'Pantallas', 'LG'),
(10, 'PLASMA TV 42PA4500 42"', 5, 7199, 'Pantallas', 'LG'),
(11, 'CINEMA 3D SMART 55LM9600 LCD', 5, 21999, 'Pantallas', 'LG'),
(12, 'LG CINEMA 3D 84LM9600', 5, 25999, 'Pantallas', 'LG'),
(13, 'LED LINEA AQUOS LC46LE820 42"', 5, 10599, 'Pantallas', 'Sharp'),
(14, 'FULL HD SERIEX22 AQUOS 32"', 5, 8799, 'Pantallas', 'Sharp'),
(15, 'LED SMART TV X20E AQUOS 55"', 5, 18099, 'Pantallas', 'Sharp'),
(16, 'LCD TV LC-32SV40U 32"', 5, 5199, 'Pantallas', 'Sharp'),
(17, 'LCD TV LC-46SV50U 46"', 5, 7999, 'Pantallas', 'Sharp'),
(18, 'LED SMART TV 3D LC-90LE745U', 5, 27999, 'Pantallas', 'Sharp'),
(19, 'POWERSHOT 10MP LCD', 5, 3999, 'Camaras y Videocamaras', 'Canon'),
(20, 'PROFECIONAL LENTE 28-90mm.', 5, 9999, 'Camaras y Videocamaras', 'Canon'),
(21, 'CAMARA DE VIDEO GL2 PROFESIONA', 5, 15599, 'Camaras y Videocamaras', 'Canon'),
(22, 'VIDEOCAMARA HFS10', 5, 12699, 'Camaras y Videocamaras', 'Canon'),
(23, 'REBEL G PROFESIONAL', 5, 10799, 'Camaras y Videocamaras', 'Canon'),
(24, 'POWERSHOT G1 X DIGITAL CAMERA', 5, 13599, 'Camaras y Videocamaras', 'Canon'),
(25, 'COOLPIX-S3000 10MP', 5, 6999, 'Camaras y Videocamaras', 'Nikon'),
(26, 'D3200 PROFESIONAL 30-99mm.', 5, 11999, 'Camaras y Videocamaras', 'Nikon'),
(27, 'COOLPIX S560 BLACK 12MP', 5, 8599, 'Camaras y Videocamaras', 'Nikon'),
(28, 'D90 PROFESIONAL', 5, 12699, 'Camaras y Videocamaras', 'Nikon'),
(29, 'D800 25.4MP', 5, 17799, 'Camaras y Videocamaras', 'Nikon'),
(30, 'D800E 36.3 MP', 5, 19999, 'Camaras y Videocamaras', 'Nikon'),
(31, 'IMAC 27"', 5, 35999, 'Computadoras', 'Apple'),
(32, 'MACBOOK AIR 13"', 5, 20999, 'Computadoras', 'Apple'),
(33, 'MACBOOK PRO 15"', 5, 30599, 'Computadoras', 'Apple'),
(34, 'INSPIRON 14Z', 5, 12999, 'Computadoras', 'Dell'),
(35, 'ULTRABOOK XPS13', 5, 16799, 'Computadoras', 'Dell'),
(36, 'ULTRABOOK XPS14', 5, 19999, 'Computadoras', 'Dell'),
(37, 'Inspiron 15R.', 5, 22999, 'Computadoras', 'Dell'),
(38, 'ELITE BOOK 8470p', 5, 18999, 'Computadoras', 'HP'),
(39, 'SPECTRE XT', 5, 14799, 'Computadoras', 'HP'),
(40, 'ULTRABOOK HP 9890x', 5, 17899, 'Computadoras', 'HP'),
(41, 'IPAD MINI', 5, 13999, 'Celulares', 'Apple'),
(42, 'IPHONE 5G', 5, 15999, 'Celulares', 'Apple'),
(43, 'GALAXY ACE PLUS (GT-S7500)', 5, 7999, 'Celulares', 'Samsung'),
(44, 'ADVANCE GALAXY S (GT-I9070)', 5, 9799, 'Celulares', 'Samsung'),
(45, 'GALAXY NOTE II', 5, 12899, 'Celulares', 'Samsung'),
(46, 'XBOX 360 250G EDICION HALO 4', 5, 6999, 'Videojuegos', 'Microsoft'),
(47, 'XBOX 360 250GB KINECT', 5, 5999, 'Videojuegos', 'Microsoft'),
(48, 'FIFA 13', 5, 999, 'Videojuegos', 'EA Games'),
(49, 'HALO 4', 5, 999, 'Videojuegos', 'JUMP IN'),
(50, 'PS3 EDICION ASSASINS CREED 3', 5, 7999, 'Videojuegos', 'Sony');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE IF NOT EXISTS `registro` (
  `idusuario` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `edad` int(11) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `nick` varchar(20) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `num_tarjeta` varchar(30) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`idusuario`, `nombre`, `apellido`, `edad`, `direccion`, `codigo`, `email`, `telefono`, `nick`, `contrasena`, `num_tarjeta`) VALUES
(8, 'Oscar', 'Martinez Guerrero', 22, 'Prohogar numero 25', '34500', 'javoscar@hotmail.com', '78980989', 'oscar', 'oscar', '1234567890000000'),
(9, 'Viridiana', 'Cabrera Alvarez', 19, 'Aeropuerto', '12300', 'viridianacabrera@hotmail.com', '15678998', 'viri', 'viri', '9999999999999999'),
(10, 'Jonathan', 'Martinez', 17, 'laguna de san cristobal', '57500', 'jon_5@hotmail.com', '57362835', 'jon', 'jon', '1234567890999999');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
