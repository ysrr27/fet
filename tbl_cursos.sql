-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-03-2017 a las 00:27:10
-- Versión del servidor: 5.5.54-0+deb8u1
-- Versión de PHP: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ilernus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cursos`
--

CREATE TABLE IF NOT EXISTS `tbl_cursos` (
`id` bigint(20) unsigned NOT NULL COMMENT 'indice de la tabla',
  `str_curso` varchar(255) NOT NULL COMMENT 'nombre del curso',
  `str_contenido` text COMMENT 'de que trata el curso',
  `str_categoria` varchar(255) NOT NULL COMMENT 'categoria a la que pertenece el curso',
  `str_clase` varchar(255) NOT NULL COMMENT 'clase bootstrap que usa la plantilla del diseño web',
  `str_color` varchar(10) NOT NULL COMMENT 'codigo de color de la categoria',
  `str_imagen` varchar(255) NOT NULL COMMENT 'nombre de la imagen asociada al curso',
  `bol_eliminado` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'indica si esta eliminado un curso',
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_cursos`
--

INSERT INTO `tbl_cursos` (`id`, `str_curso`, `str_contenido`, `str_categoria`, `str_clase`, `str_color`, `str_imagen`, `bol_eliminado`, `updated_at`, `created_at`) VALUES
(1, 'Bases legales del contrato laboral en Venezuela', '', 'Negocios', 'col-md-3 col-sm-3 mix negocios', '#35459C', 'cover-negocios-bases.jpg', 0, '2017-03-22 14:57:35', '0000-00-00 00:00:00'),
(3, 'Modalidades y elementos asociados al contrato laboral', NULL, 'Negocios', 'col-md-3 col-sm-3 mix	negocios', '#35459C', 'cover-negocios-modalidades.jpg', 0, '2017-03-22 14:57:35', '0000-00-00 00:00:00'),
(4, 'Causas y consecuencias de la suspensión de la relación de trabajo', NULL, 'Negocios', 'col-md-3 col-sm-3 mix	negocios', '#35459C', 'cover-negocios-causas.jpg', 0, '2017-03-22 14:57:35', '0000-00-00 00:00:00'),
(5, 'Qué cambió en la nueva ISO 9001:2015', NULL, 'Negocios', 'col-md-3 col-sm-3 mix	negocios', '#35459C', 'cover-negocios-cambios.jpg', 0, '2017-03-22 14:57:35', '0000-00-00 00:00:00'),
(6, 'Conceptos fundamentales y principios de la ISO 9001:2015', NULL, 'Negocios', 'col-md-3 col-sm-3 mix	negocios', '#35459C', 'cover-negocios-conceptos.jpg', 0, '2017-03-22 14:57:35', '0000-00-00 00:00:00'),
(7, 'Customer development', NULL, 'Negocios', 'col-md-3 col-sm-3 mix	negocios', '#35459C', 'cover-negocios-customer.jpg', 0, '2017-03-22 14:57:35', '0000-00-00 00:00:00'),
(8, 'El enfoque a procesos en la ISO 9001:2015', NULL, 'Negocios', 'col-md-3 col-sm-3 mix	negocios', '#35459C', 'cover-negocios-enfoque.jpg', 0, '2017-03-22 15:11:09', '0000-00-00 00:00:00'),
(9, 'Estados financieros', NULL, 'Negocios', 'col-md-3 col-sm-3 mix	negocios', '#35459C', 'cover-negocios-estados.jpg', 0, '2017-03-22 15:10:58', '0000-00-00 00:00:00'),
(10, 'La dirección estratégica en el marco de la ISO 9001:2015', NULL, 'Negocios', 'col-md-3 col-sm-3 mix	negocios', '#35459C', 'cover-negocios-direccion.jpg', 0, '2017-03-22 15:11:41', '0000-00-00 00:00:00'),
(11, 'Redacción de correos electrónicos efectivos', NULL, 'Negocios', 'col-md-3 col-sm-3 mix	negocios', '#35459C', 'cover-negocios-redactar.png', 0, '2017-03-22 15:11:34', '0000-00-00 00:00:00'),
(12, 'La inamovilidad y estabilidad laboral', NULL, 'Negocios', 'col-md-3 col-sm-3 mix	negocios', '#35459C', 'cover-negocios-estabilidad.png', 0, '2017-03-22 15:11:49', '0000-00-00 00:00:00'),
(13, 'Virus a raya', NULL, 'Tecnología', 'col-md-3 col-sm-3 mix	tecnologia', '#F47741', 'cover-tecnologia-virus.jpg', 0, '2017-03-22 15:19:14', '0000-00-00 00:00:00'),
(14, 'Mantenimiento preventivo del computador', NULL, 'Tecnología', 'col-md-3 col-sm-3 mix	tecnologia', '#F47741', 'cover-tecnologia-mantenimiento.png', 0, '2017-03-22 15:19:14', '0000-00-00 00:00:00'),
(15, 'Gestión de redes de computadoras', NULL, 'Tecnología', 'col-md-3 col-sm-3 mix	tecnologia', '#F47741', 'cover-tecnologia-gestion.jpg', 0, '2017-03-22 15:19:14', '0000-00-00 00:00:00'),
(16, 'Seguridad Informática', NULL, 'Tecnología', 'col-md-3 col-sm-3 mix	tecnologia', '#F47741', 'cover-tecnologia-seguridad.png', 0, '2017-03-22 15:19:14', '0000-00-00 00:00:00'),
(17, 'Etiqueta Telefónica', NULL, 'Desarrollo', 'col-md-3 col-sm-3 mix	desarrollo', '#41B649', 'cover-desarrollo-etiqueta.jpg', 0, '2017-03-22 15:28:45', '0000-00-00 00:00:00'),
(18, 'Desarrollo profesional en la sociedad del conocimiento', NULL, 'Desarrollo', 'col-md-3 col-sm-3 mix	desarrollo', '#41B649', 'cover-desarrollo-desarrollo.png', 0, '2017-03-22 15:28:45', '0000-00-00 00:00:00'),
(19, 'Buenas prácticas de supervisión', NULL, 'Desarrollo', 'col-md-3 col-sm-3 mix	desarrollo', '#41B649', 'cover-desarrollo-buenas.jpg', 0, '2017-03-22 15:28:45', '0000-00-00 00:00:00'),
(20, 'Aumentado la productividad con la psicología positiva', NULL, 'Desarrollo', 'col-md-3 col-sm-3 mix	desarrollo', '#41B649', 'cover-desarrollo-psicologia.jpg', 0, '2017-03-22 15:28:45', '0000-00-00 00:00:00'),
(21, 'Qué debemos saber del beneficio de alimentación', NULL, 'Desarrollo', 'col-md-3 col-sm-3 mix	desarrollo', '#41B649', 'cover-desarrollo-beneficio.jpg', 0, '2017-03-22 15:28:45', '0000-00-00 00:00:00'),
(22, 'Entrando al mundo de las drogas', NULL, 'Desarrollo', 'col-md-3 col-sm-3 mix	desarrollo', '#41B649', 'cover-desarrollo-entrando.jpg', 0, '2017-03-22 15:28:45', '0000-00-00 00:00:00'),
(23, 'Prevención del consumo de drogas como RSE', NULL, 'Desarrollo', 'col-md-3 col-sm-3 mix	desarrollo', '#41B649', 'cover-desarrollo-prevencion.jpg', 0, '2017-03-22 15:28:45', '0000-00-00 00:00:00'),
(24, 'Alerta con las drogas emergentes', NULL, 'Desarrollo', 'col-md-3 col-sm-3 mix	desarrollo', '#41B649', 'cover-desarrollo-drogas.jpg', 0, '2017-03-22 15:28:45', '0000-00-00 00:00:00'),
(25, 'Cómo actuar frente al consumo de drogas en la empresa', NULL, 'Desarrollo', 'col-md-3 col-sm-3 mix	desarrollo', '#41B649', 'cover-desarrollo-como.jpg', 0, '2017-03-22 15:28:45', '0000-00-00 00:00:00'),
(26, 'Manejo efectivo del tiempo', NULL, 'Desarrollo', 'col-md-3 col-sm-3 mix	desarrollo', '#41B649', 'cover-desarrollo-manejo.jpg', 0, '2017-03-22 15:28:45', '0000-00-00 00:00:00'),
(27, 'Riesgos en tu trabajo', NULL, 'Desarrollo', 'col-md-3 col-sm-3 mix	desarrollo', '#41B649', 'cover-desarrollo-riesgos.jpg', 0, '2017-03-22 15:28:45', '0000-00-00 00:00:00'),
(28, 'Sistema de gestión en salud y seguridad en el trabajo', NULL, 'Desarrollo', 'col-md-3 col-sm-3 mix	desarrollo', '#41B649', 'cover-desarrollo-gestion.jpg', 0, '2017-03-22 15:28:45', '0000-00-00 00:00:00'),
(29, 'Autoestima en equilibrio', NULL, 'Desarrollo', 'col-md-3 col-sm-3 mix	desarrollo', '#41B649', 'cover-desarrollo-autoestima.png', 0, '2017-03-22 15:28:45', '0000-00-00 00:00:00'),
(30, 'Endomercadeo', NULL, 'Productividad', 'col-md-3 col-sm-3 mix	productividad', '#7952A1', '	cover-productividad-endomercadeo.jpg	', 0, '2017-03-22 15:15:32', '0000-00-00 00:00:00'),
(31, 'La estrategia efectiva del Community Manager', NULL, 'Productividad', 'col-md-3 col-sm-3 mix	productividad', '#7952A1', '	cover-productividad-communityManager.png	', 0, '2017-03-22 15:15:32', '0000-00-00 00:00:00'),
(32, 'Estados financieros', NULL, 'Negocios', 'col-md-3 col-sm-3 mix	destacados', '#35459C', 'cover-negocios-estados.jpg', 0, '2017-03-23 03:19:03', '0000-00-00 00:00:00'),
(33, 'Qué cambió en la nueva ISO 9001:2015', NULL, 'Negocios', 'col-md-3 col-sm-3 mix	destacados', '#35459C', 'cover-negocios-cambios.jpg', 0, '2017-03-22 14:57:35', '0000-00-00 00:00:00'),
(34, 'Conceptos fundamentales y principios de la ISO 9001:2015', NULL, 'Negocios', 'col-md-3 col-sm-3 mix	destacados', '#35459C', 'cover-negocios-conceptos.jpg', 0, '2017-03-22 14:57:35', '0000-00-00 00:00:00'),
(35, 'Causas y consecuencias de la suspensión de la relación de trabajo', NULL, 'Negocios', 'col-md-3 col-sm-3 mix	destacados', '#35459C', 'cover-negocios-causas.jpg', 0, '2017-03-22 14:57:35', '0000-00-00 00:00:00'),
(36, 'La estrategia efectiva del Community Manager', NULL, 'Productividad', 'col-md-3 col-sm-3 mix	destacados', '#7952A1', '	cover-productividad-communityManager.png	', 0, '2017-03-22 15:15:32', '0000-00-00 00:00:00'),
(37, 'Cómo actuar frente al consumo de drogas en la empresa', NULL, 'Desarrollo', 'col-md-3 col-sm-3 mix	destacados', '#41B649', 'cover-desarrollo-como.jpg', 0, '2017-03-22 15:28:45', '0000-00-00 00:00:00'),
(38, 'Manejo efectivo del tiempo', NULL, 'Desarrollo', 'col-md-3 col-sm-3 mix	destacados', '#41B649', 'cover-desarrollo-manejo.jpg', 0, '2017-03-22 15:28:45', '0000-00-00 00:00:00'),
(39, 'Aumentado la productividad con la psicología positiva', NULL, 'Desarrollo', 'col-md-3 col-sm-3 mix	destacados', '#41B649', 'cover-desarrollo-psicologia.jpg', 0, '2017-03-22 15:28:45', '0000-00-00 00:00:00'),
(40, 'Riesgos en tu trabajo', NULL, 'Desarrollo', 'col-md-3 col-sm-3 mix	destacados', '#41B649', 'cover-desarrollo-riesgos.jpg', 0, '2017-03-22 15:28:45', '0000-00-00 00:00:00'),
(41, 'Sistema de gestión en salud y seguridad en el trabajo', NULL, 'Desarrollo', 'col-md-3 col-sm-3 mix	destacados', '#41B649', 'cover-desarrollo-gestion.jpg', 0, '2017-03-22 15:28:45', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_cursos`
--
ALTER TABLE `tbl_cursos`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_cursos`
--
ALTER TABLE `tbl_cursos`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'indice de la tabla',AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
