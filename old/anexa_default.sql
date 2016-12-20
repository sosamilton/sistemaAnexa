-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 14, 2015 at 03:56 AM
-- Server version: 5.6.25-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `grupo_57`
--

-- --------------------------------------------------------

--
-- Table structure for table `Alumno`
--

CREATE TABLE IF NOT EXISTS `Alumno` (
`id` int(11) NOT NULL,
  `borrado` tinyint(1) NOT NULL,
  `tipoDNI` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dni` int(11) NOT NULL,
  `apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fechaIngreso` datetime NOT NULL,
  `fechaEgreso` datetime DEFAULT NULL,
  `sexo` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `calle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provincia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pais` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `latitud` double DEFAULT NULL,
  `longitud` double DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fechaNacimiento` datetime NOT NULL,
  `fechaAlta` datetime NOT NULL,
  `codigoPostal` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Alumno`
--

INSERT INTO `Alumno` (`id`, `borrado`, `tipoDNI`, `dni`, `apellido`, `nombre`, `fechaIngreso`, `fechaEgreso`, `sexo`, `calle`, `numero`, `ciudad`, `provincia`, `pais`, `latitud`, `longitud`, `telefono`, `email`, `fechaNacimiento`, `fechaAlta`, `codigoPostal`) VALUES
(6, 0, 'DNI', 234234234, 'sosa', 'milton', '2014-10-12 00:00:00', NULL, 'M', 'asdasd asdasd', '', '', '', '', 0, 0, '123123123', 'milton@milton.com', '2001-10-12 00:00:00', '2015-10-17 00:29:52', ''),
(7, 0, 'DNI', 37075766, 'lala', 'luis', '2013-10-09 00:00:00', '2014-10-12 00:00:00', 'M', '46 nÂ° 513 P.A', '', '', '', '', 0, 0, '2216697311', 'milton@milton.com', '1990-10-08 00:00:00', '2015-10-18 19:34:14', ''),
(9, 0, 'CI', 28757666, 'argento', 'pepe', '2015-10-12 00:00:00', '2015-12-12 00:00:00', 'F', 'asdasd asdasd', '', '', '', '', 0, 0, '123123123', 'milton@milton.com', '1992-10-30 00:00:00', '2015-10-17 01:22:55', ''),
(11, 1, 'DNI', 35433284, 'villarrubia', 'may', '2009-02-05 00:00:00', '2015-10-13 00:00:00', 'M', 'gcgfcgfxfd', '', '', '', '', 0, 0, '12234', 'jscndsj@djb.com', '1989-10-07 00:00:00', '2015-10-13 16:45:25', ''),
(12, 0, 'DNI', 123455, 'Lala', 'Juan', '1989-01-01 00:00:00', '2015-11-15 00:00:00', 'M', '22', '19', 'La plata', 'Buenos Aires', 'Argentina', 0, 0, '123123', 'milton.sosa.22@gmail.com', '2015-01-01 00:00:00', '2015-12-04 01:22:30', '1900');

-- --------------------------------------------------------

--
-- Table structure for table `Configuracion`
--

CREATE TABLE IF NOT EXISTS `Configuracion` (
  `clave` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valorNumerico` int(11) DEFAULT NULL,
  `valorTextual` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Configuracion`
--

INSERT INTO `Configuracion` (`clave`, `valorNumerico`, `valorTextual`) VALUES
('descripcion', 0, 'soy el sitio'),
('estado_sitio', 1, '1'),
('mail_contac', 0, 'info@anexa.unlp.edu.ar'),
('mensaje_des', 0, 'sitio en mantenimiento'),
('paginacion', 5, '5'),
('titulo', 0, 'Sistema de Anexa');

-- --------------------------------------------------------

--
-- Table structure for table `Cuota`
--

CREATE TABLE IF NOT EXISTS `Cuota` (
`id` int(11) NOT NULL,
  `borrado` tinyint(1) NOT NULL,
  `anio` int(11) NOT NULL,
  `mes` int(255) NOT NULL,
  `numero` int(11) NOT NULL,
  `monto` decimal(10,0) NOT NULL,
  `tipoCuota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comisionCobrador` decimal(10,0) NOT NULL,
  `fechaAlta` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Cuota`
--

INSERT INTO `Cuota` (`id`, `borrado`, `anio`, `mes`, `numero`, `monto`, `tipoCuota`, `comisionCobrador`, `fechaAlta`) VALUES
(1, 0, 2015, 4, 20, 690, 'mensual', 2, '2015-10-07 00:00:00'),
(2, 0, 2015, 3, 21, 678, 'mensual', 3, '2015-03-02 00:00:00'),
(3, 0, 2015, 2, 22, 456, 'matricula', 4, '2015-04-02 00:00:00'),
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
(15, 0, 2014, 2, 1, 300, 'matricula', 1, '2014-02-02 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `Pago`
--

CREATE TABLE IF NOT EXISTS `Pago` (
`id` int(11) NOT NULL,
  `alumno_id` int(11) DEFAULT NULL,
  `cuota_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  `borrado` tinyint(1) NOT NULL,
  `fecha` datetime NOT NULL,
  `fechaAlta` datetime NOT NULL,
  `fechaActualizacion` datetime NOT NULL,
  `becado` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Pago`
--

INSERT INTO `Pago` (`id`, `alumno_id`, `cuota_id`, `usuario_id`, `borrado`, `fecha`, `fechaAlta`, `fechaActualizacion`, `becado`) VALUES
(1, 6, 1, 6, 0, '2015-10-17 00:00:00', '2015-10-17 00:00:00', '2015-10-17 00:00:00', 0),
(2, 6, 3, 6, 0, '2015-10-19 00:00:00', '2015-10-19 00:00:00', '2015-10-19 00:00:00', 0),
(3, 6, 2, 16, 0, '2015-03-05 00:00:00', '2015-03-05 00:00:00', '2015-03-05 00:00:00', 0),
(5, 7, 15, 16, 0, '2015-10-19 05:22:59', '2015-10-19 05:22:59', '2015-10-19 05:22:59', 0),
(6, 12, 3, 15, 0, '2015-10-25 18:28:40', '2015-10-25 18:28:40', '2015-10-25 18:28:40', 0),
(7, 9, 1, 15, 0, '2015-11-13 15:13:54', '2015-11-13 15:13:54', '2015-11-13 15:13:54', 1),
(8, 9, 2, 15, 0, '2015-11-13 15:13:54', '2015-11-13 15:13:54', '2015-11-13 15:13:54', 1),
(9, 9, 3, 16, 0, '2015-11-13 15:14:39', '2015-11-13 15:14:39', '2015-11-13 15:14:39', 1),
(10, 12, 5, 6, 0, '2015-11-15 01:18:38', '2015-11-15 01:18:38', '2015-11-15 01:18:38', 1),
(11, 12, 15, 15, 0, '2015-11-29 20:16:05', '2015-11-29 20:16:05', '2015-11-29 20:16:05', 0),
(12, 12, 1, 15, 0, '2015-12-03 17:17:25', '2015-12-03 17:17:25', '2015-12-03 17:17:25', 0),
(13, 12, 9, 15, 0, '2015-12-03 17:17:25', '2015-12-03 17:17:25', '2015-12-03 17:17:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Responsable`
--

CREATE TABLE IF NOT EXISTS `Responsable` (
`id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
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
-- Dumping data for table `Responsable`
--

INSERT INTO `Responsable` (`id`, `usuario_id`, `borrado`, `tipoDNI`, `dni`, `tipoResponsable`, `apellido`, `nombre`, `fechaNacimiento`, `sexo`, `email`, `telefono`, `direccion`) VALUES
(1, 5, 0, 'LC', 370745766, 'padre', 'martinez', 'mariano', '1972-01-01', 'M', 'milton.sosa.22@gmail.com', '2215979482', '46 nÂ° 513 P.A'),
(2, 6, 0, 'DNI', 1111111, 'tia', 'aniston', 'jenifer', '1980-03-01', 'F', 'ja@gmail.com', '2222', '8 e/ 49 y 50'),
(3, 14, 0, 'DNI', 35466789, 'padre', 'pausini', 'gonzalo', '1987-09-02', 'M', 'pausini@gmail.com', '123', '44');

-- --------------------------------------------------------

--
-- Table structure for table `Responsables_Alumnos`
--

CREATE TABLE IF NOT EXISTS `Responsables_Alumnos` (
  `alumno_id` int(11) NOT NULL,
  `responsable_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Responsables_Alumnos`
--

INSERT INTO `Responsables_Alumnos` (`alumno_id`, `responsable_id`) VALUES
(6, 1),
(6, 3),
(7, 1),
(7, 3),
(9, 3);

-- --------------------------------------------------------

--
-- Table structure for table `Rol`
--

CREATE TABLE IF NOT EXISTS `Rol` (
`id` int(11) NOT NULL,
  `borrado` tinyint(1) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Rol`
--

INSERT INTO `Rol` (`id`, `borrado`, `nombre`) VALUES
(1, 0, 'Administracion'),
(2, 0, 'Gestion'),
(3, 0, 'Consulta');

-- --------------------------------------------------------

--
-- Table structure for table `Usuario`
--

CREATE TABLE IF NOT EXISTS `Usuario` (
`id` int(11) NOT NULL,
  `rol` int(11) NOT NULL,
  `borrado` tinyint(1) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `habilitado` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Usuario`
--

INSERT INTO `Usuario` (`id`, `rol`, `borrado`, `username`, `password`, `habilitado`) VALUES
(1, 1, 0, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(4, 3, 0, 'pepe', '1741630366c09a6961280efbcb4d0a7e', 1),
(5, 3, 0, 'miltonSosa', '1741630366c09a6961280efbcb4d0a7e', 1),
(6, 2, 0, 'lolo', 'd6581d542c7eaf801284f084478b5fcc', 1),
(8, 3, 0, 'lala', '5d76beffe761403531a6eb339e0f0231', 1),
(10, 1, 0, 'lili', '777bbb7869ae8193249f8ff7d3e59afe', 1),
(14, 3, 0, 'consulta', '5d76beffe761403531a6eb339e0f0231', 1),
(15, 2, 0, 'may', 'a25e8b42372495de20fda72ea762c03b', 1),
(16, 2, 0, 'gestion', 'a25e8b42372495de20fda72ea762c03b', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Alumno`
--
ALTER TABLE `Alumno`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Configuracion`
--
ALTER TABLE `Configuracion`
 ADD PRIMARY KEY (`clave`), ADD UNIQUE KEY `UNIQ_DB52810464E8588B` (`clave`);

--
-- Indexes for table `Cuota`
--
ALTER TABLE `Cuota`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Pago`
--
ALTER TABLE `Pago`
 ADD PRIMARY KEY (`id`), ADD KEY `IDX_54EDF000FC28E5EE` (`alumno_id`), ADD KEY `IDX_54EDF0006A7CF079` (`cuota_id`);

--
-- Indexes for table `Responsable`
--
ALTER TABLE `Responsable`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_D4CE82D0DB38439E` (`usuario_id`);

--
-- Indexes for table `Responsables_Alumnos`
--
ALTER TABLE `Responsables_Alumnos`
 ADD PRIMARY KEY (`alumno_id`,`responsable_id`), ADD KEY `IDX_BFA133ECFC28E5EE` (`alumno_id`), ADD KEY `IDX_BFA133EC53C59D72` (`responsable_id`);

--
-- Indexes for table `Rol`
--
ALTER TABLE `Rol`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Usuario`
--
ALTER TABLE `Usuario`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_EDD889C1F85E0677` (`username`), ADD KEY `IDX_EDD889C1E553F37` (`rol`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Alumno`
--
ALTER TABLE `Alumno`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `Cuota`
--
ALTER TABLE `Cuota`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `Pago`
--
ALTER TABLE `Pago`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `Responsable`
--
ALTER TABLE `Responsable`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Rol`
--
ALTER TABLE `Rol`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Usuario`
--
ALTER TABLE `Usuario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Pago`
--
ALTER TABLE `Pago`
ADD CONSTRAINT `FK_54EDF0006A7CF079` FOREIGN KEY (`cuota_id`) REFERENCES `Cuota` (`id`),
ADD CONSTRAINT `FK_54EDF000FC28E5EE` FOREIGN KEY (`alumno_id`) REFERENCES `Alumno` (`id`);

--
-- Constraints for table `Responsable`
--
ALTER TABLE `Responsable`
ADD CONSTRAINT `FK_D4CE82D0DB38439E` FOREIGN KEY (`usuario_id`) REFERENCES `Usuario` (`id`);

--
-- Constraints for table `Responsables_Alumnos`
--
ALTER TABLE `Responsables_Alumnos`
ADD CONSTRAINT `FK_BFA133EC53C59D72` FOREIGN KEY (`responsable_id`) REFERENCES `Responsable` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `FK_BFA133ECFC28E5EE` FOREIGN KEY (`alumno_id`) REFERENCES `Alumno` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `Usuario`
--
ALTER TABLE `Usuario`
ADD CONSTRAINT `FK_EDD889C1E553F37` FOREIGN KEY (`rol`) REFERENCES `Rol` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
