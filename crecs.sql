-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2018 a las 22:31:33
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `ciudad_pais` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `inscripciones`
--

INSERT INTO `inscripciones` (`id`, `nombres`, `apellidos`, `empresa_trabaja`, `codigo_empresa_paga`, `telefono`, `direccion`, `codigo_postal`, `otro_taller`, `comentarios`, `fecha_registro`, `id_inscripcion`, `pago`, `correo`, `empresa_paga`, `ciudad_pais`) VALUES
(1, ' ss', 'hfhf', 'dd', 'f', '12', '0', '0', 'fe', 'ef', '2018-02-26 14:00:35', 0, 0, 'dtorres15@cuc.edu.co', 'gf', 'fc'),
(2, ' Damian Antonio', 'Torres Niebles', 'CUC', 'JB66767', '2147483647', '0', '0', '', '', '2018-02-26 14:03:06', 0, 0, 'dtorres15@cuc.edu.co', 'CUC', 'Barranquilla - Colombia'),
(3, ' Damian Antonio', 'Torres Niebles', 'CUC', 'JB66767', '3045374127', 'calle 22 no 25 - 75', 'NKF87', '', '', '2018-02-26 14:06:40', 0, 0, 'dtorres15@cuc.edu.co', 'CUC', 'Barranquilla - Colombia'),
(4, ' Damian Antonio', ' Torres Niebles', 'CUC', 'JJGS765', '87', 'wdwd', 'dwd', '', '', '2018-02-26 14:29:52', 0, 0, 'drodrigu42@cuc.edu.co', 'SS', 'Barranquilla'),
(5, 'damian', 'Torres', 'cuc', 'jg6565', '3', 'calle 22 no 25 - 75', 'jgyt6r', '', '', '2018-02-26 14:45:57', 0, 0, 'drodrigu42@cuc.edu.co', ' ', 'Barranquilla - Colombia'),
(6, 'Katerine', 'Oquendo', 'cuc', 'hv', '3', 'hf', 'gc', '', '', '2018-02-26 15:05:03', 0, 0, 'drodrigu42@cuc.edu.co', 'hg', 'hf'),
(7, 'Damian', 'Torres', 'CUC', 'hvhv76', '7', 'hv', 'hv', '', '', '2018-02-26 15:06:43', 0, 0, 'drodrigu42@cuc.edu.co', ' ', 'Barranquilla'),
(8, 'DAMIAN ANTONIO', 'TORRES NIEBLES', 'CUC', 'V6R6R', '22', 'calle 22 no 25 - 75', 'JHV6R5', '', '', '2018-02-26 15:14:40', 0, 0, 'drodrigu42@cuc.edu.co', ' ', 'Barranquilla'),
(9, '54', 'TF', 'KN', 'HV', '76', 'HV', 'HV', '', '', '2018-02-26 15:15:44', 0, 0, 'drodrigu42@cuc.edu.co', 'HV', 'HVHV'),
(10, 'FX', 'GC', 'GC', 'GC', '23', 'GC', 'GC', 'CG', 'CG', '2018-02-26 15:21:22', 0, 0, 'drodrigu42@cuc.edu.co', 'GC', 'GC'),
(11, 'FX', 'GC', 'GC', 'GC', '23', 'GC', 'GC', 'CG', 'CG', '2018-02-26 15:21:33', 0, 0, 'drodrigu42@cuc.edu.co', 'GC', 'GC'),
(12, 'FX', 'GC', 'GC', 'GC', '23', 'GC', 'GC', 'CG', 'CG', '2018-02-26 15:21:45', 0, 0, 'drodrigu42@cuc.edu.co', 'GC', 'GC'),
(13, 'FX', 'GC', 'GC', 'GC', '23', 'GC', 'GC', 'CG', 'CG', '2018-02-26 15:21:51', 0, 0, 'drodrigu42@cuc.edu.co', 'GC', 'GC'),
(14, 'FX', 'GC', 'GC', 'GC', '23', 'GC', 'GC', 'CG', 'CG', '2018-02-26 15:22:03', 0, 0, 'drodrigu42@cuc.edu.co', 'GC', 'GC'),
(15, 'HV', 'HV', 'HV', 'D', '65', 'D', 'D', 'D', '', '2018-02-26 15:23:19', 0, 0, 'drodrigu42@cuc.edu.co', 'D', 'D'),
(16, 'HV', 'HV', 'HV', 'D', '65', 'D', 'D', 'D', '', '2018-02-26 15:23:27', 0, 0, 'drodrigu42@cuc.edu.co', 'D', 'D'),
(17, 'HV', 'HV', 'HV', 'D', '65', 'D', 'D', 'D', '', '2018-02-26 15:23:33', 0, 0, 'drodrigu42@cuc.edu.co', 'D', 'D'),
(18, 'HV', 'HV', 'HV', 'D', '65', 'D', 'D', 'D', '', '2018-02-26 15:23:39', 0, 0, 'drodrigu42@cuc.edu.co', 'D', 'D'),
(19, 'ANGELINA', 'LEAL TORRES', 'CUC', 'HVR6R', '6565', 'CALLE 22 NO 25 - 75', 'HG6R5', '', '', '2018-02-26 15:37:07', 0, 0, 'ange@cuc.edu.co', '', 'BARRANQUILLA'),
(20, 'ANGELINA', 'LEAL TORRES', 'CUC', 'HVR6R', '6565', 'CALLE 22 NO 25 - 75', 'HG6R5', '', '', '2018-02-26 15:37:26', 0, 0, 'ange@cuc.edu.co', '', 'BARRANQUILLA'),
(21, 'ANGELINA', 'LEAL TORRES', 'CUC', 'HVR6R', '6565', 'CALLE 22 NO 25 - 75', 'HG6R5', '', '', '2018-02-26 15:37:51', 0, 0, 'ange@cuc.edu.co', '', 'BARRANQUILLA'),
(22, 'WGSG', 'WD', 'CUC', 'J', '24', 'JH', 'JH', 'JH', 'JH', '2018-02-26 15:46:15', 0, 0, 'drodrigu42@cuc.edu.co', 'HJH', 'JH'),
(23, 'F', 'FD', 'DF', 'FD', '54', 'D', 'FD', '', '', '2018-02-26 15:52:12', 0, 0, 'drodrigu42@cuc.edu.co', 'FD', 'FD');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
