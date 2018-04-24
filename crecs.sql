-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-04-2018 a las 00:31:21
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crecs`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones`
--

CREATE TABLE `inscripciones` (
  `id` int(11) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `tipo_identificacion` varchar(30) NOT NULL DEFAULT 'Cedula de Ciudadania',
  `identificacion` varchar(30) NOT NULL,
  `empresa_trabaja` varchar(30) NOT NULL,
  `codigo_empresa_paga` varchar(30) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `codigo_postal` varchar(30) NOT NULL,
  `otro_taller` varchar(200) DEFAULT NULL,
  `comentarios` varchar(200) DEFAULT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_inscripcion` int(11) DEFAULT NULL COMMENT 'in de la persona que realiza la inscripcion multiple',
  `pago` tinyint(1) NOT NULL DEFAULT '0',
  `correo` varchar(30) NOT NULL,
  `empresa_paga` varchar(30) NOT NULL,
  `ciudad_pais` varchar(30) NOT NULL,
  `nacionalidad` varchar(30) NOT NULL,
  `profesion` varchar(30) NOT NULL,
  `cargo` varchar(30) DEFAULT NULL,
  `nivel_formacion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `inscripciones`
--

INSERT INTO `inscripciones` (`id`, `nombres`, `apellidos`, `tipo_identificacion`, `identificacion`, `empresa_trabaja`, `codigo_empresa_paga`, `telefono`, `direccion`, `codigo_postal`, `otro_taller`, `comentarios`, `fecha_registro`, `id_inscripcion`, `pago`, `correo`, `empresa_paga`, `ciudad_pais`, `nacionalidad`, `profesion`, `cargo`, `nivel_formacion`) VALUES
(1, 'DAMIAN', 'TORRES', 'CEDULA DE CIUDADANIA', '1143454688', 'CUC', 'SINCODIGO', '3045374127', 'CALLE 22 NO 25 - 75', '080001', '', '', '2018-04-24 17:25:47', 0, 0, 'dtorres15@cuc.edu.co', '', 'BARRANQUILLA', 'COLOMBIA', 'INGENIERO', 'DOCENTE', 'Pregrado'),
(2, 'DAMIAN', 'TORRES', 'CEDULA DE CIUDADANIA', '8765432', 'CUC', 'SINCODIGO', '3045374127', 'CALLE 22 NO 25 - 75', '080001', 'COMO PUBLICAR CON IMPACTO EN REVISTAS INDEXADAS', '', '2018-04-24 17:26:45', 0, 0, 'dtorres15@cuc.edu.co', '', 'BARRANQUILLA', 'COLOMBIA', 'INGENIERO', 'DOCENTE', 'Pregrado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones_multiples`
--

CREATE TABLE `inscripciones_multiples` (
  `id` int(11) NOT NULL,
  `id_inscripcion` int(11) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `tipo_identificacion` varchar(30) NOT NULL,
  `identificacion` varchar(30) NOT NULL,
  `otro_taller` varchar(200) DEFAULT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `inscripciones_multiples`
--

INSERT INTO `inscripciones_multiples` (`id`, `id_inscripcion`, `nombres`, `apellidos`, `tipo_identificacion`, `identificacion`, `otro_taller`, `fecha_registro`) VALUES
(1, 1, 'KATERINE', 'OQUENDO', 'Cedula de Ciudadania', '123456789', 'COMO PUBLICAR CON IMPACTO EN REVISTAS INDEXADAS', '2018-04-24 17:25:47'),
(2, 1, 'JUAN', 'LOPEX', 'Documento Nacional de Identida', '244334', 'COMO PUBLICAR CON IMPACTO EN REVISTAS INDEXADAS', '2018-04-24 17:25:47'),
(3, 2, 'DAMIAN', 'TORRES', 'Cedula de Ciudadania', '23524', 'GESTION DE DATOS DE CITAS: WOS Y SCOPUS FRENTE A GOOGLE SCHOLAR', '2018-04-24 17:26:45'),
(4, 2, 'DAMIAN', 'TORRES', 'Cedula de Ciudadania', '545', 'COMO PUBLICAR CON IMPACTO EN REVISTAS INDEXADAS', '2018-04-24 17:26:45');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inscripciones_multiples`
--
ALTER TABLE `inscripciones_multiples`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `inscripciones_multiples`
--
ALTER TABLE `inscripciones_multiples`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
