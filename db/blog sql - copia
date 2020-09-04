-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:33060
-- Tiempo de generación: 02-09-2020 a las 09:20:24
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `id_post` int(99) NOT NULL,
  `titulo` varchar(99) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Sin Título',
  `contenido` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen_destacada` varchar(99) COLLATE utf8_spanish_ci DEFAULT NULL,
  `temas` varchar(99) COLLATE utf8_spanish_ci DEFAULT NULL,
  `publicado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id_post`, `titulo`, `contenido`, `imagen_destacada`, `temas`, `publicado`) VALUES
(1, 'MySQL', 'MySQL es un sistema de gestión de bases de datos relacional desarrollado bajo licencia dual: Licencia pública general/Licencia comercial por Oracle Corporation y está considerada como la base de datos de código abierto más popular del mundo,1​2​ y una de las más populares en general junto a Oracle y Microsoft SQL Server, todo para entornos de desarrollo web.', 'mysql.jpg', 'desarrollo', '2020-08-28 07:48:50'),
(13, 'HOy es Martes', 'Bienvenido a OK Corral\r\n', '', 'esperanza', '2020-09-01 11:43:42'),
(14, 'Mañana es miercoles', 'Bienvenido a OK Corral\r\n', '', 'esperanza', '2020-09-01 11:45:24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
