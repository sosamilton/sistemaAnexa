-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-06-2016 a las 17:08:54
-- Versión del servidor: 5.6.30-0ubuntu0.15.10.1
-- Versión de PHP: 5.6.11-1ubuntu3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `symfony`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE IF NOT EXISTS `alumno` (
  `id` int(11) NOT NULL,
  `borrado` tinyint(1) NOT NULL,
  `tipoDNI` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dni` int(11) NOT NULL,
  `apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fechaNacimiento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `calle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provincia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codigoPostal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pais` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fechaIngreso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fechaEgreso` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `latitud` double DEFAULT NULL,
  `longitud` double DEFAULT NULL,
  `fechaAlta` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `borrado`, `tipoDNI`, `dni`, `apellido`, `nombre`, `fechaNacimiento`, `sexo`, `calle`, `numero`, `ciudad`, `provincia`, `codigoPostal`, `pais`, `telefono`, `email`, `fechaIngreso`, `fechaEgreso`, `latitud`, `longitud`, `fechaAlta`) VALUES
(6, 0, 'DNI', 234234234, 'Sosa', 'Milton', '2001-10-12 00:00:00', 'M', '46', '513', 'La Plata', 'Buenos Aires', '1900', 'Argentina', '123123123', 'milton@milton.com', '2014-01-07 00:00:00', '2015-12-15 00:00:00', -34.910720575, -57.951330225, '0000-00-00 00:00:00'),
(7, 0, 'DNI', 37075766, 'Pantera', 'luis', '1990-10-08 00:00:00', 'M', '22', '192', 'La Plata', 'buenos aires', '1900', 'Argentina', '2216697311', 'milton@milton.com', '2014-01-09 00:00:00', '2015-12-15 00:00:00', -34.9238601, -57.9718176, '0000-00-00 00:00:00'),
(9, 0, 'CI', 28757666, 'Argento', 'Pepe', '1992-10-30 00:00:00', 'F', '22', '23', 'La Plata', 'Buenos Aires', '1900', 'Argentina', '123123123', 'milton@milton.com', '2015-10-12 00:00:00', '2015-12-12 00:00:00', -34.915104525, -57.983737754167, '0000-00-00 00:00:00'),
(11, 1, 'DNI', 35433284, 'villarrubia', 'may', '1989-10-07 00:00:00', 'M', 'gcgfcgfxfd', '', '', '', '', '', '12234', 'jscndsj@djb.com', '2009-02-05 00:00:00', '2015-10-13 00:00:00', 0, 0, '2015-10-13 16:45:25'),
(12, 1, 'DNI', 123455, 'Lala', 'Juan', '2015-01-01 00:00:00', 'M', '22', '19', 'La plata', 'Buenos Aires', '1900', 'Argentina', '123123', 'milton.sosa.22@gmail.com', '1989-01-01 00:00:00', '2015-11-15 00:00:00', 0, 0, '2015-12-04 01:22:30'),
(13, 1, 'DNI', 123123, 'pepe', 'pepe', '2004-12-31 00:00:00', 'M', '32', '5232', 'La Plata', 'Buenos Aires', '1900', 'Argentina', '32121233123', 'marcebasma@gmail.com', '2014-02-01 00:00:00', '2015-12-16 15:55:30', -34.9299405, -58.0013273, '2015-12-16 15:55:30'),
(14, 0, 'DNI', 1234, 'Villarrubia', 'Marisol', '1999-03-01 00:00:00', 'F', '7', '345', 'la plata', 'buenos aires', '1900', 'argentina', '12', 'm@v.com.ar', '2000-03-10 00:00:00', NULL, 0.1, 0.1, '2016-05-25 00:00:00'),
(16, 1, 'DNI', 9876, 'prueba', 'prueba', '1989-12-03 00:00:00', 'F', '6', '677', 'la plata', 'buenos aires', '1900', 'argentina', '34568', 'm@v.com.ar', '2000-12-03 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Configuracion`
--

CREATE TABLE IF NOT EXISTS `Configuracion` (
  `clave` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valorNumerico` int(11) DEFAULT NULL,
  `valorTextual` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Configuracion`
--

INSERT INTO `Configuracion` (`clave`, `valorNumerico`, `valorTextual`) VALUES
('descripcion', 0, 'La Escuela Graduada “Joaquín V. González” fue creada por Decreto del Poder Ejecutivo del 24 de enero de 1906. Con su creación se completaba el proceso educativo dentro de la Universidad, por primera vez en el país. Se lograba, como quería el Presidente de la U.N.L.P., Joaquín V. González, la armonía y continuidad de las distintas etapas de la enseñanza primaria, secundaria y universitaria.\r\nLa Escuela surgió como Anexa a la Sección Pedagógica de la Facultad de Ciencias Jurídicas y Sociales de la Universidad Nacional de La Plata, que se encontraba a cargo del Profesor Víctor Mercante. En 1914 fue anexada a la Facultad de Ciencias de la Educación y en 1920 a la Facultad de Humanidades y Ciencias de la Educación. Actualmente depende de la Presidencia de la U.N.L.P.'),
('email', 0, 'info@anexa.unlp.edu.ar'),
('estado_sitio', 1, '1'),
('mensaje_deshabilitado', 0, 'El sistema se encuentra deshabilitado por el momento.'),
('paginacion', 5, '5'),
('titulo', 0, 'Sistema de la Escuela Anexa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuota`
--

CREATE TABLE IF NOT EXISTS `cuota` (
  `id` int(11) NOT NULL,
  `borrado` tinyint(1) NOT NULL,
  `anio` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `monto` decimal(10,0) NOT NULL,
  `tipoCuota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comisionCobrador` decimal(10,0) NOT NULL,
  `fechaAlta` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cuota`
--

INSERT INTO `cuota` (`id`, `borrado`, `anio`, `mes`, `numero`, `monto`, `tipoCuota`, `comisionCobrador`, `fechaAlta`) VALUES
(1, 0, 2015, 4, 20, 690, 'mensual', 2, '2015-10-07 00:00:00'),
(2, 0, 2015, 3, 21, 678, 'mensual', 3, '2015-03-02 00:00:00'),
(3, 1, 2015, 2, 22, 456, 'matricula', 4, '2015-04-02 00:00:00'),
(4, 0, 2015, 6, 2, 4656, 'mensual', 5, '2015-11-15 00:00:00'),
(5, 0, 2015, 5, 1, 677, 'mensual', 4, '2015-10-18 00:00:00'),
(6, 0, 1989, 4, 2, 4, 'mensual', 3, '2015-10-18 00:00:00'),
(7, 0, 2010, 3, 3, 340, 'mensual', 2, '2010-03-01 00:00:00'),
(8, 0, 2010, 2, 34, 567, 'matricula', 2, '2010-02-01 00:00:00'),
(9, 0, 2010, 4, 3, 568, 'mensual', 5, '2010-04-01 00:00:00'),
(10, 1, 2015, 6, 5, 456, 'mensual', 1, '2015-06-02 00:00:00'),
(11, 1, 2015, 7, 6, 459, 'mensual', 3, '2015-03-07 00:00:00'),
(12, 0, 2015, 11, 10, 567, 'mensual', 1, '2015-10-07 00:00:00'),
(13, 0, 1989, 2, 1, 556, 'matricula', 2, '1989-02-01 00:00:00'),
(14, 0, 1989, 3, 2, 890, 'mensual', 2, '1989-03-01 00:00:00'),
(15, 0, 2014, 2, 1, 4400, 'mensual', 1, '2015-12-15 00:00:00'),
(16, 0, 2016, 2, 1, 600, 'matricula', 2, '2016-05-04 00:00:00'),
(17, 0, 2016, 3, 2, 500, 'mensual', 1, '2016-06-23 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE IF NOT EXISTS `pago` (
  `id` int(11) NOT NULL,
  `alumno_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `cuota_id` int(11) DEFAULT NULL,
  `borrado` tinyint(1) NOT NULL,
  `fecha` datetime NOT NULL,
  `fechaAlta` datetime NOT NULL,
  `fechaActualizacion` datetime NOT NULL,
  `becado` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`id`, `alumno_id`, `user_id`, `cuota_id`, `borrado`, `fecha`, `fechaAlta`, `fechaActualizacion`, `becado`) VALUES
(1, 6, 2, 12, 0, '2016-06-01 00:58:45', '2016-06-01 00:58:45', '2016-06-01 00:58:45', 0),
(2, 6, 2, 4, 0, '2016-06-01 01:01:00', '2016-06-01 01:01:00', '2016-06-01 01:01:00', 0),
(3, 6, 2, 5, 0, '2016-06-01 01:05:11', '2016-06-01 01:05:11', '2016-06-01 01:05:11', 0),
(4, 7, 2, 12, 0, '2016-06-01 01:08:26', '2016-06-01 01:08:26', '2016-06-01 01:08:26', 0),
(5, 7, 2, 4, 0, '2016-06-01 01:10:19', '2016-06-01 01:10:19', '2016-06-01 01:10:19', 0),
(6, 7, 2, 1, 0, '2016-06-01 01:23:40', '2016-06-01 01:23:40', '2016-06-01 01:23:40', 1),
(7, 9, 2, 1, 0, '2016-06-01 01:24:21', '2016-06-01 01:24:21', '2016-06-01 01:24:21', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsable`
--

CREATE TABLE IF NOT EXISTS `responsable` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `borrado` tinyint(1) NOT NULL,
  `tipoDNI` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dni` int(11) NOT NULL,
  `tipoResponsable` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fechaNacimiento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `responsable`
--

INSERT INTO `responsable` (`id`, `user_id`, `borrado`, `tipoDNI`, `dni`, `tipoResponsable`, `apellido`, `nombre`, `fechaNacimiento`, `sexo`, `email`, `telefono`, `direccion`) VALUES
(1, 3, 0, 'DNI', 0, 'Madre', 'Mouse', 'Minnie', '0000-00-00 00:00:00', 'F', 'minnie@disney.com.ar', '123', 'la plata'),
(2, 4, 0, 'DNI', 11111, 'Padre', 'Mouse', 'Mickey', '1975-10-05 00:00:00', 'M', 'mickey@disney.com.ar', '456', 'bs as'),
(3, 5, 0, 'LC', 12567890, 'Padre', 'Donald', 'Pato', '1972-09-17 00:00:00', 'M', 'pato@disney.com', '4986754', 'tolosa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Responsables_Alumnos`
--

CREATE TABLE IF NOT EXISTS `Responsables_Alumnos` (
  `alumno_id` int(11) NOT NULL,
  `responsable_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `borrado` tinyint(1) NOT NULL,
  `habilitado` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `borrado`, `habilitado`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 'admin@admin.com', 1, 'bhnl60fvtvs4kowk8cckcwwgog00c8g', '$2y$13$F4Ho1StoDY1gjNGJfEkrKOFPmk4gv.kQ55oWW1f1aaCg.4micSDb.', '2016-06-01 17:08:21', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL, 0, 1),
(2, 'miltonSosa', 'miltonSosa', 'milton@milton.com', 'milton@milton.com', 1, 'bhnl60fvtvs4kowk8cckcwwgog00c8g', '1741630366c09a6961280efbcb4d0a7e', NULL, 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:12:"ROLE_GESTION";}', 0, NULL, 0, 1),
(3, '000000000', '000000000', 'minnie@disney.com.ar', 'minnie@disney.com.ar', 1, 'jh8wj5i39qo8o8owwckgko0g4soc0kc', '$2y$13$WS46JyYl5WpiAFKkkRsSC.dSJFp2QwIhnBw9TiU.qdCUClerNyTCy', NULL, 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:13:"ROLE_CONSULTA";}', 0, NULL, 0, 1),
(4, '11111', '11111', 'mickey@disney.com.ar', 'mickey@disney.com.ar', 1, '8zpwmnze2b0ow0c0c448g844cs84k00', '$2y$13$M/Q5vdn/oVuE51aHnZzvuOSlKbvTgQjJyfgEpPCm/AjPVijqdigvS', NULL, 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:13:"ROLE_CONSULTA";}', 0, NULL, 0, 1),
(5, '12567890', '12567890', 'pato@disney.com', 'pato@disney.com', 1, '1pugjnnp0uck8o4840o440sggc488wo', '$2y$13$PP1MnAdBiqtIxfCxae.r8uEyzn0KyvxB0Uie1IS/gZ3UW3ideS7Se', NULL, 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:13:"ROLE_CONSULTA";}', 0, NULL, 0, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1435D52D7F8F253B` (`dni`);

--
-- Indices de la tabla `Configuracion`
--
ALTER TABLE `Configuracion`
  ADD PRIMARY KEY (`clave`),
  ADD UNIQUE KEY `UNIQ_DB52810464E8588B` (`clave`);

--
-- Indices de la tabla `cuota`
--
ALTER TABLE `cuota`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F4DF5F3EFC28E5EE` (`alumno_id`),
  ADD KEY `IDX_F4DF5F3EA76ED395` (`user_id`),
  ADD KEY `IDX_F4DF5F3E6A7CF079` (`cuota_id`);

--
-- Indices de la tabla `responsable`
--
ALTER TABLE `responsable`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_52520D07A76ED395` (`user_id`);

--
-- Indices de la tabla `Responsables_Alumnos`
--
ALTER TABLE `Responsables_Alumnos`
  ADD PRIMARY KEY (`alumno_id`,`responsable_id`),
  ADD KEY `IDX_BFA133ECFC28E5EE` (`alumno_id`),
  ADD KEY `IDX_BFA133EC53C59D72` (`responsable_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `cuota`
--
ALTER TABLE `cuota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `responsable`
--
ALTER TABLE `responsable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `FK_F4DF5F3E6A7CF079` FOREIGN KEY (`cuota_id`) REFERENCES `cuota` (`id`),
  ADD CONSTRAINT `FK_F4DF5F3EA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_F4DF5F3EFC28E5EE` FOREIGN KEY (`alumno_id`) REFERENCES `alumno` (`id`);

--
-- Filtros para la tabla `responsable`
--
ALTER TABLE `responsable`
  ADD CONSTRAINT `FK_52520D07A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Filtros para la tabla `Responsables_Alumnos`
--
ALTER TABLE `Responsables_Alumnos`
  ADD CONSTRAINT `FK_BFA133EC53C59D72` FOREIGN KEY (`responsable_id`) REFERENCES `responsable` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_BFA133ECFC28E5EE` FOREIGN KEY (`alumno_id`) REFERENCES `alumno` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
