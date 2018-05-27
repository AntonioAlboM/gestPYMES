-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2018 a las 19:24:15
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
  `idEmpleado` int(255) NOT NULL,
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
  `fechaAlta` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`idEmpleado`, `nombre`, `apellidos`, `dni`, `pass`, `fechaNacimiento`, `localidad`, `provincia`, `calle`, `numero`, `piso`, `letra`, `cp`, `idEmpresa`, `numSanciones`, `fechaAlta`, `id`) VALUES
(300, 'usuarioPrueba', 'apellidoPrueba', 55555555, 0, '2018-05-11', 'Retamoso', 'Madrid', 'callePrueba', 0, 0, 'b', 28934, 44899, 0, '23.05.18', 1),
(0, 'usuarioPrueba', 'apellidoPrueba', 55555555, 0, '2018-05-11', 'MÃ³stoles', 'Madrid', 'callePrueba', 0, 0, 'b', 28934, 44899, 0, '23.05.18', 2),
(0, 'usuarioPrueba', 'apellidoPrueba', 55555555, 0, '2018-05-11', 'MÃ³stoles', 'Madrid', 'callePrueba', 0, 0, 'b', 28934, 44899, 0, '23.05.18', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
