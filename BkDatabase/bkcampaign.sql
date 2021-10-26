-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 21-10-2021 a las 09:28:01
-- Versión del servidor: 5.6.41-84.1
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tesorosd_campaign`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catroles`
--

CREATE TABLE `catroles` (
  `rolid` int(11) NOT NULL,
  `catRolesDescripcion` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `catroles`
--

INSERT INTO `catroles` (`rolid`, `catRolesDescripcion`) VALUES
(1, 'Administrador'),
(2, 'Invitado'),
(3, 'Desactivado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encabezadocampaign`
--

CREATE TABLE `encabezadocampaign` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='informacion de encabezado';

--
-- Volcado de datos para la tabla `encabezadocampaign`
--

INSERT INTO `encabezadocampaign` (`id`, `titulo`, `descripcion`) VALUES
(1, 'Christmas Giving', '\"But we have this treasure in jars of clay to show that this all surpassing power is from God and not from us.\r\nSo we fix our eyes not on what is seen, but on what is unseen.\r\nFor what is seen is temporary, but what is unseen is eternal.\"\r\n2 CORINTHIANS 4:7,18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id` int(11) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='estado de la seccionCampaign';

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id`, `descripcion`) VALUES
(1, 'Activo'),
(2, 'Desactivado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccioncampaign`
--

CREATE TABLE `seccioncampaign` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `descripcionCorta` text NOT NULL,
  `descripcionLarga` text NOT NULL,
  `imagen` text NOT NULL,
  `costo` text NOT NULL,
  `cantidad` text NOT NULL,
  `enlace` text NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Seccion catalogo';

--
-- Volcado de datos para la tabla `seccioncampaign`
--

INSERT INTO `seccioncampaign` (`id`, `titulo`, `descripcionCorta`, `descripcionLarga`, `imagen`, `costo`, `cantidad`, `enlace`, `estado`) VALUES
(1, 'titulo1', 'ejemplo descripcion 1', 'descripcion larga de ejemplo', 'vista/img/usuario/U876.jpg', '20', '10', 'https://www.google.com', 2),
(2, 'Articulo1', 'Prueba del articulo1', 'prueba', 'vista/img/usuario/U472.jpg', '15', '20', 'https://www.facebook.com', 1),
(3, 'Articulo2', 'prueba del articulo numero 2', 'Texto prueba del ejemplo', 'vista/img/usuario/U427.jpg', '30', '30', 'https://www.youtube.com', 1),
(4, 'Articulo3', 'Prueba del articulo3', 'Descripcion Larga del articulo 3', 'vista/img/usuario/U855.jpg', '10', '12', 'https://www.instagram.com', 1),
(5, 'Articulo4', 'Prueba del articulo4', 'descripcion larga del articulo 4', 'vista/img/usuario/U507.jpg', '12', '20', 'https://www.tweeter.com', 1),
(6, 'Articulo5', 'Prueba del articulo5', 'prueba de descripcion larga de articulo 5', 'vista/img/usuario/U736.jpg', '10', '20', 'https://www.instagram.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `clave` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `rolid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='estructura de tabla de usuario';

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `clave`, `foto`, `rolid`) VALUES
(1, 'admin', 'tesoros', '', 1),
(2, 'guest', 'tesoros', '', 2),
(3, 'MAdams', '123456', 'vista/img/usuario/U33.png', 3),
(4, 'Michelle', 'tesoros', 'vista/img/usuario/U525.jpg', 1),
(5, 'Vantol', 'Tesoros', 'vista/img/usuario/U170.jpg', 2),
(6, 'AIppel', 'Tesoros', 'vista/img/usuario/U367.png', 2),
(7, 'BVillalobos', 'Tesoros', '', 2),
(8, 'ESanchez', 'Tesoros', '', 2),
(9, 'Alexandra', 'Tesoros', '', 2),
(10, 'pamador', 'tesoros', '', 1),
(11, 'Wendy', 'tesoros', '', 2),
(12, 'Ajarquin', 'Tesoros123', '', 2),
(13, 'Mrosales', 'Tesoros456', '', 2),
(14, 'JennyA', 'Tesoros123', '', 2),
(15, 'MilenaS', 'Tesoros123', '', 2),
(16, 'AZuniga', 'AZuniga', '', 2),
(17, 'Thamara', '2808', '', 2),
(18, 'Eydy', 'tesoros2021', '', 2),
(19, 'Camryn', 'trustnGod3!+', '', 2),
(20, 'Alexandra', 'tesoros2021', '', 2),
(21, 'phernandez', 'tesoros', '', 2),
(22, 'IvaniaAndrade', 'tesoros123', '', 2),
(23, 'AMSuarez', 'tesoros123', '', 2),
(24, 'Lordian', 'tesoros123', '', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catroles`
--
ALTER TABLE `catroles`
  ADD PRIMARY KEY (`rolid`);

--
-- Indices de la tabla `encabezadocampaign`
--
ALTER TABLE `encabezadocampaign`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seccioncampaign`
--
ALTER TABLE `seccioncampaign`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estado` (`estado`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rolid` (`rolid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catroles`
--
ALTER TABLE `catroles`
  MODIFY `rolid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `encabezadocampaign`
--
ALTER TABLE `encabezadocampaign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `seccioncampaign`
--
ALTER TABLE `seccioncampaign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `seccioncampaign`
--
ALTER TABLE `seccioncampaign`
  ADD CONSTRAINT `seccioncampaign_ibfk_1` FOREIGN KEY (`estado`) REFERENCES `estado` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rolid`) REFERENCES `catroles` (`rolid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
