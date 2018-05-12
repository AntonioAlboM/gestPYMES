-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-05-2018 a las 18:04:48
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestpymes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `idEmpleado` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `dni` int(10) NOT NULL,
  `pass` int(255) NOT NULL,
  `fechaNacimiento` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `localidad` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `provincia` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `calle` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `numero` int(5) NOT NULL,
  `piso` int(3) NOT NULL,
  `letra` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `cp` int(255) NOT NULL,
  `idEmpresa` int(255) NOT NULL,
  `numSanciones` int(255) NOT NULL,
  `fechaAlta` varchar(500) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`idEmpleado`, `nombre`, `apellidos`, `dni`, `pass`, `fechaNacimiento`, `localidad`, `provincia`, `calle`, `numero`, `piso`, `letra`, `cp`, `idEmpresa`, `numSanciones`, `fechaAlta`) VALUES
('0', 'nombrePrueba', 'apellidoPrueba', 55555, 0, '2018-05-05', 'MÃ³stoles', 'Madrid', 'Zaragoza', 9, 7, 'b', 28934, 0, 0, '09.05.18'),
('0', 'nombrePrueba', 'apellidoPrueba', 55555, 0, '2018-05-05', 'MÃ³stoles', 'Madrid', 'Zaragoza', 9, 7, 'b', 28934, 0, 0, '09.05.18'),
('0', 'nombrePrueba', 'apellidoPrueba', 55555, 0, '2018-05-05', 'MÃ³stoles', 'Madrid', 'Zaragoza', 9, 7, 'b', 28934, 0, 0, '09.05.18'),
('0', 'nombrePrueba', 'apellidoPrueba', 55555, 0, '2018-05-05', 'MÃ³stoles', 'Madrid', 'Zaragoza', 9, 7, 'b', 28934, 0, 0, '09.05.18'),
('0', 'nombrePrueba', 'apellidoPrueba', 55555, 0, '2018-05-05', 'MÃ³stoles', 'Madrid', 'Zaragoza', 9, 7, 'b', 28934, 0, 0, '09.05.18'),
('0', 'nombrePrueba', 'apellidoPrueba', 55555, 0, '2018-05-05', 'MÃ³stoles', 'Madrid', 'Zaragoza', 9, 7, 'b', 28934, 0, 0, '09.05.18'),
('0', 'probando', 'adghsdagh', 0, 0, '2018-05-02', 'adg', 'adgs', 'adgs', 7, 0, 'd', 0, 0, 0, '09.05.18'),
('0', 'probando', 'adghsdagh', 0, 0, '2018-05-02', 'adg', 'adgs', 'adgs', 7, 0, 'd', 0, 0, 0, '09.05.18'),
('0', 'probando', 'adghsdagh', 0, 0, '2018-05-02', 'adg', 'adgs', 'adgs', 7, 0, 'd', 0, 0, 0, '09.05.18'),
('0', 'probando', 'adghsdagh', 0, 0, '2018-05-02', 'adg', 'adgs', 'adgs', 7, 0, 'd', 0, 0, 0, '09.05.18'),
('0', 'probando', 'adghsdagh', 0, 0, '2018-05-02', 'adg', 'adgs', 'adgs', 7, 0, 'd', 0, 0, 0, '09.05.18'),
('0', 'probando', 'adghsdagh', 0, 0, '2018-05-05', 'adg', 'adgs', 'Zaragoza', 9, 7, 'B', 0, 0, 0, '09.05.18'),
('0', 'probando', 'adghsdagh', 0, 0, '2018-05-05', 'adg', 'adgs', 'Zaragoza', 9, 7, 'B', 0, 0, 0, '09.05.18'),
('0', 'probando', 'adghsdagh', 0, 0, '2018-05-05', 'adg', 'adgs', 'Zaragoza', 9, 7, 'B', 0, 0, 0, '09.05.18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `fechaCreacion` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `tipoEmpresa` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `capitalSocial` int(255) NOT NULL,
  `sector` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `gerente` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `pass` int(255) NOT NULL,
  `logo` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `idEmpresa` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`fechaCreacion`, `tipoEmpresa`, `capitalSocial`, `sector`, `gerente`, `pass`, `logo`, `idEmpresa`) VALUES
('2006-04-18', '', 0, '', '', 0, '', 0),
('2006-04-18', '', 0, '', '', 0, '', 0),
('2006-04-18', '', 0, '', '', 0, '', 0),
('2010-04-18', '', 0, '', '', 0, '', 0),
('10.04.18', '', 0, '', '', 0, '', 0),
('', '', 0, '', '', 0, '', 0),
('10.04.18', '', 0, '', '', 0, '', 0),
('11.04.18', '', 0, '', '', 0, '', 0),
('11.04.18', '', 0, '', '', 0, '', 0),
('11.04.18', '', 0, '', '', 0, '', 0),
('11.04.18', '', 0, '', '', 0, '', 0),
('11.04.18', '', 0, '', '', 0, '', 0),
('13.04.18', 'probando1', 50000, 'probando2', 'probando3', 0, 'hhhhh', 0),
('14.04.18', '', 0, '', '', 0, '', 0),
('07.05.18', 'Prueba', 4000, 'prueba', 'prueba', 0, 'IMG_20180326_195943.jpg', 52518),
('07.05.18', 'adsh', 8000, 'adsgsdfn', 'adgsfn', 0, 'IMG_20180401_020549.jpg', 41708),
('07.05.18', 'pppp', 77777, 'pppp', 'pppp', 0, 'IMG_20180401_020549.jpg', 18093),
('07.05.18', 'rwj', 7, 'sfyhj', 'h', 0, 'IMG_20180326_195943.jpg', 73956),
('07.05.18', 'aeth', 8888, 'sdjsfj', 'sfdrs', 0, 'IMG_20180401_020549.jpg', 76257),
('09.05.18', 'Dabeer', 8000, 'HostelerÃ­a', 'David', 123456, 'IMG_20180326_195943.jpg', 61685);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
