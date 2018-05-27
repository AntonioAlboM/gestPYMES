-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-05-2018 a las 22:13:10
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

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
-- Estructura de tabla para la tabla `comunicados`
--

CREATE TABLE `comunicados` (
  `id` int(10) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `cuerpo` varchar(30000) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `idEmpresa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comunicados`
--

INSERT INTO `comunicados` (`id`, `titulo`, `cuerpo`, `fecha`, `idEmpresa`) VALUES
(14, 'Lorem Ipsum', '<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nisi \r\nnunc, consectetur et euismod ut, tincidunt ullamcorper augue. In sed \r\naliquam ante. In in ligula tincidunt, pharetra lorem eu, lacinia purus. \r\nPellentesque justo ipsum, dictum a ipsum in, hendrerit pellentesque \r\nnisl. Maecenas a arcu sed nunc pellentesque blandit. Pellentesque \r\nhabitant morbi tristique senectus et netus et malesuada fames ac turpis \r\negestas. Donec quis libero a est finibus faucibus. Proin feugiat, eros a\r\n lobortis aliquet, nisl quam bibendum quam, et faucibus lectus est non \r\npurus. Duis dui purus, dignissim sit amet enim eu, sodales lacinia dui. \r\nAliquam pharetra finibus lorem ac mattis. In sem lacus, semper quis \r\nmaximus euismod, egestas a velit. Sed faucibus scelerisque elementum. \r\nDonec a ligula nec sem blandit pellentesque. Nunc sed est nec justo \r\negestas malesuada ut eu felis.\r\n</p>\r\n<p>\r\nQuisque viverra nisi ex, et pretium arcu cursus blandit. Mauris at dolor\r\n ut est commodo fringilla. Vivamus aliquam felis a eros maximus varius. \r\nAenean facilisis suscipit orci, ac vestibulum sapien interdum posuere. \r\nProin molestie laoreet ex, et dapibus nulla porttitor<b> mollis. Sed ante \r\nnulla, iacu</b>lis vel orci id, dapibus imperdiet ipsum. Proin quis \r\nfacilisis eros. Nullam est nisl, auctor in lectus nec, sollicitudin \r\nfringilla dui. Orci varius natoq<span style="font-family: &quot;Verdana&quot;;">ue penatibus et magnis dis parturient \r\nmontes, nascetur ridiculus mus. Pellentesque leo ipsum, vehicula et \r\nfeugiat eu, sagittis consectetur nisi. In lob</span>ortis posuere metus ac \r\neleifend. Vivamus sit amet odio turpis. Ut hendrerit rutrum velit, vel \r\ndignissim nulla bibendum ac. Aliquam sodales lectus sed pharetra congue.\r\n</p>\r\n<h1>\r\nPellentesque consectetu<u>r lacinia ipsum, a pulvinar</u> massa pellentesque \r\nvel. Vivamus efficitur turpis at quam mollis, non aliquam nisl \r\nporttitor. Duis blandit libero vitae orci interdum volutpat. Phasellus \r\nac risus vitae dolor condimentum aliquam. Cras convallis felis odio, \r\nquis molestie magna maximus et. Donec at dui dignissim, egestas tortor \r\neget, aliquam lectus. Nullam elit purus, consequat vitae porta id, \r\nposuere at arcu. Ut non nulla sit amet libero laoreet cursus. Nulla in \r\nmagna aliquet, molestie odio rhoncus, ornare sapien. Sed sa<span style="background-color: rgb(255, 0, 0);">gittis \r\nlacinia m</span>olestie. Nulla hendrerit sapien at orci auctor molestie. \r\nQuisque sed orci eget purus feugiat suscipit sit amet vel quam. Aliquam a\r\n pellentesque justo, eu fermentum dui. Duis suscipit, enim sed egestas \r\nplacerat, turpis mauris pulvinar leo, convallis porttitor magna libero \r\nsed justo. Phasellus aliquam massa ac eros posuere, nec venenatis nibh \r\nconvallis. Quisque eu nibh ipsum.\r\n</h1>', '26/05/2018', 44899);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comunicados`
--
ALTER TABLE `comunicados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comunicados`
--
ALTER TABLE `comunicados`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
