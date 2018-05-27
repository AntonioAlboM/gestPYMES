-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2018 a las 06:54:24
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
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(255) NOT NULL,
  `emisor` varchar(90) COLLATE utf8_spanish2_ci NOT NULL,
  `idConversacion` int(10) NOT NULL,
  `cuerpoMensaje` varchar(400) COLLATE utf8_spanish2_ci NOT NULL,
  `receptor` varchar(90) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `emisor`, `idConversacion`, `cuerpoMensaje`, `receptor`) VALUES
(1, 'David', 444, 'Hola', 'noeliaPrueba'),
(2, 'David', 444, 'hola', 'noeliaPrueba'),
(3, 'David', 444, 'hola', 'noeliaPrueba'),
(4, 'David', 444, 'probando', 'noeliaPrueba'),
(5, 'David', 444, 'probando', 'noeliaPrueba'),
(6, 'David', 444, 'probando', 'noeliaPrueba'),
(7, 'David', 444, 'hola', 'noeliaPrueba'),
(8, 'David', 444, 'probando', 'noeliaPrueba'),
(9, 'David', 444, 'hola', 'noeliaPrueba'),
(10, 'David', 444, 'hola', 'noeliaPrueba'),
(11, 'David', 444, 'probando', 'noeliaPrueba'),
(12, 'David', 444, 'ash', 'noeliaPrueba'),
(13, 'David', 444, '', 'noeliaPrueba'),
(14, 'David', 444, 'perro', 'noeliaPrueba'),
(15, 'David', 444, 'afbvhsBFV ', 'noeliaPrueba'),
(16, 'David', 444, 'Prueba!!', 'noeliaPrueba'),
(17, 'David', 444, 'prueba', 'noeliaPrueba'),
(18, 'David', 444, '', 'noeliaPrueba'),
(19, 'David', 444, 'hola que tal?', 'noeliaPrueba'),
(20, 'David', 444, 'gg', 'noeliaPrueba'),
(21, 'David', 444, 'yujuuu funciona', 'noeliaPrueba');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
