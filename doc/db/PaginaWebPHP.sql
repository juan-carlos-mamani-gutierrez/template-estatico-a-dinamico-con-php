-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-12-2023 a las 15:10:01
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `PaginaWebPHP`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_curso`
--

CREATE TABLE `tm_curso` (
  `cur_id` int(11) NOT NULL,
  `cur_titulo` varchar(150) NOT NULL,
  `cur_subtitulo` varchar(150) NOT NULL,
  `cur_img` varchar(50) NOT NULL,
  `cur_url` varchar(600) NOT NULL,
  `cur_desta` int(11) NOT NULL,
  `fech_crea` datetime DEFAULT NULL,
  `cur_est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_curso`
--

INSERT INTO `tm_curso` (`cur_id`, `cur_titulo`, `cur_subtitulo`, `cur_img`, `cur_url`, `cur_desta`, `fech_crea`, `cur_est`) VALUES
(1, 'desarollo web', 'de cero a experto', '3.jpg', '#', 1, '2023-11-16 17:00:39', 1),
(2, 'curso de laravel', 'laravel nivel dios', '4.jpg', 'https://www.udemy.com/', 1, '2023-11-12 17:00:50', 1),
(3, 'Desarollo con Node JS', 'se un experto en node', '2.jpg', '#', 0, '2023-11-21 17:00:56', 1),
(4, 'Vuelvete un Experto en Kolint', 'de 0 a experto en 100 dias', '1.jpg', '#', 0, '2023-11-26 17:01:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_curso_detalle`
--

CREATE TABLE `tm_curso_detalle` (
  `det_id` int(11) NOT NULL,
  `cur_id` int(11) NOT NULL,
  `det_nom` varchar(50) NOT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_curso_detalle`
--

INSERT INTO `tm_curso_detalle` (`det_id`, `cur_id`, `det_nom`, `est`) VALUES
(1, 1, 'PHP', 1),
(2, 1, 'MYSQL', 1),
(3, 3, 'node', 1),
(4, 3, 'JS', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_lenguaje`
--

CREATE TABLE `tm_lenguaje` (
  `len_id` int(11) NOT NULL,
  `len_nom` varchar(50) NOT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_lenguaje`
--

INSERT INTO `tm_lenguaje` (`len_id`, `len_nom`, `est`) VALUES
(1, 'PHP', 1),
(2, 'Laravel', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_socialmedia`
--

CREATE TABLE `tm_socialmedia` (
  `sm_id` int(11) NOT NULL,
  `sm_nom` varchar(150) NOT NULL,
  `sm_icon1` varchar(50) NOT NULL,
  `sm_icon2` varchar(50) NOT NULL,
  `sm_rutaweb` varchar(150) NOT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_socialmedia`
--

INSERT INTO `tm_socialmedia` (`sm_id`, `sm_nom`, `sm_icon1`, `sm_icon2`, `sm_rutaweb`, `est`) VALUES
(1, 'facebook', 'fb', 'social_facebook', 'https://www.facebook.com/', 1),
(2, 'pinterest', 'pt', 'social_pinterest', '#', 1),
(3, 'twitter', 'tw', 'social_twitter', '#', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tm_curso`
--
ALTER TABLE `tm_curso`
  ADD PRIMARY KEY (`cur_id`);

--
-- Indices de la tabla `tm_curso_detalle`
--
ALTER TABLE `tm_curso_detalle`
  ADD PRIMARY KEY (`det_id`);

--
-- Indices de la tabla `tm_lenguaje`
--
ALTER TABLE `tm_lenguaje`
  ADD PRIMARY KEY (`len_id`);

--
-- Indices de la tabla `tm_socialmedia`
--
ALTER TABLE `tm_socialmedia`
  ADD PRIMARY KEY (`sm_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tm_curso`
--
ALTER TABLE `tm_curso`
  MODIFY `cur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tm_curso_detalle`
--
ALTER TABLE `tm_curso_detalle`
  MODIFY `det_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tm_lenguaje`
--
ALTER TABLE `tm_lenguaje`
  MODIFY `len_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tm_socialmedia`
--
ALTER TABLE `tm_socialmedia`
  MODIFY `sm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
