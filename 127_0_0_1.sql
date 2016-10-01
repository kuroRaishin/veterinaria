-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-10-2016 a las 20:01:16
-- Versión del servidor: 5.7.11
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `documento` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `fecha_creacion` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_admin`, `nombre`, `apellido`, `documento`, `email`, `direccion`, `telefono`, `activo`, `fecha_creacion`) VALUES
(1, 'Luis Miguel', 'Orjuela Alfonso', '1012394521', 'lorluisrock@gmail.com', 'Cra77#69b28 s', '7829264', 1, NULL),
(2, 'fresa', 'rosa', '10123', 'ejemplo@exp.com', '', '3016596928', 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `id_cita` int(11) NOT NULL,
  `asunto` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nota` text COLLATE utf8_spanish2_ci,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `fecha_generacion` datetime DEFAULT NULL,
  `id_mascota` int(11) DEFAULT NULL,
  `sintomas` text COLLATE utf8_spanish2_ci,
  `enfermedad` text COLLATE utf8_spanish2_ci,
  `medicamentos` text COLLATE utf8_spanish2_ci,
  `id_veterinaria` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus_cita`
--

CREATE TABLE `estatus_cita` (
  `id_estatus` int(11) NOT NULL,
  `id_mascota` int(11) DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `estatus_cita`
--

INSERT INTO `estatus_cita` (`id_estatus`, `id_mascota`, `nombre`) VALUES
(1, NULL, 'Pendiente'),
(2, NULL, 'Cumplida'),
(3, NULL, 'No asistio'),
(4, NULL, 'Cancelada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `id_mascota` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `genero` varchar(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tipo` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `raza` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `documento` int(11) DEFAULT NULL,
  `id_veterinaria` int(11) NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietario`
--

CREATE TABLE `propietario` (
  `id_propietario` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `documento` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `genero` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `propietario`
--

INSERT INTO `propietario` (`id_propietario`, `nombre`, `apellido`, `documento`, `genero`, `email`, `direccion`, `telefono`, `fecha_creacion`, `activo`) VALUES
(1, 'pikachu', 'moztasa', '999', 'femenino', 'pika@exp.com', 'cll40#123', '3005556767', NULL, 1),
(2, 'juan', 'perez', '3456', 'masculino', 'ejemplo@exp.com', 'cll5#67', '7809080', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicios` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicios`, `nombre`) VALUES
(1, 'Medico Veterinario'),
(2, 'Urgencias'),
(3, 'Cirugias'),
(4, 'Hospitalizacion'),
(5, 'Medicinas'),
(6, 'Laboratorio'),
(7, 'Terapias'),
(8, 'Vacunacion'),
(9, 'Funeraria'),
(10, 'Guarderia'),
(11, 'Adiestramiento'),
(12, 'Accesorios'),
(13, 'odontologia'),
(14, 'peluqueria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `documento` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `password` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `rol` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `documento`, `email`, `password`, `rol`, `activo`) VALUES
(2, '999', 'pika@exp.com', '123', 'cliente', 1),
(3, '3456', 'ejemplo@exp.com', '123', 'cliente', 1),
(4, '1012394521', 'lorluisrock@gmail.com', '123', 'administrador', 1),
(5, '10123', 'ejemplo@exp.com', '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `veterinaria`
--

CREATE TABLE `veterinaria` (
  `id_veterinaria` int(11) NOT NULL,
  `nombre_empresa` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `documento` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `fecha_creacion` datetime DEFAULT NULL,
  `id_servicios` int(11) DEFAULT NULL,
  `latVet` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `lonVet` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id_cita`);

--
-- Indices de la tabla `estatus_cita`
--
ALTER TABLE `estatus_cita`
  ADD PRIMARY KEY (`id_estatus`);

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`id_mascota`);

--
-- Indices de la tabla `propietario`
--
ALTER TABLE `propietario`
  ADD PRIMARY KEY (`id_propietario`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicios`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `veterinaria`
--
ALTER TABLE `veterinaria`
  ADD PRIMARY KEY (`id_veterinaria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estatus_cita`
--
ALTER TABLE `estatus_cita`
  MODIFY `id_estatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `id_mascota` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `propietario`
--
ALTER TABLE `propietario`
  MODIFY `id_propietario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `veterinaria`
--
ALTER TABLE `veterinaria`
  MODIFY `id_veterinaria` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
