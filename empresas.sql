-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2018 a las 18:50:50
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
  `idEmpresa` int(6) NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`fechaCreacion`, `tipoEmpresa`, `capitalSocial`, `sector`, `gerente`, `pass`, `logo`, `idEmpresa`, `idEmpleado`, `id`) VALUES
('23.05.18', 'Tienda de zapatos', 50, 'Comercio', 'David', 123456, '../gestpymes/logo/IMG_20180326_195943.jpg', 44899, 44899, 1),
('28.05.18', 'rsy', 23, 'aehd', 'ds', 0, '../gestpymes/logo/IMG_20180326_195943.jpg', 78328, 78328, 2),
('31.05.18', 'bar', 50000, 'hosteleria', 'gerentePrueba', 99999, '../gestpymes/logo/IMG_20180326_195943.jpg', 86644, 86644, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
