SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `alumno` (
  `id` int(11) NOT NULL,
  `borrado` tinyint(1) NOT NULL,
  `dni` int(11) NOT NULL,
  `apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fechaNacimiento` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `division` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contacto` longtext COLLATE utf8_unicode_ci,
  `comentario` longtext COLLATE utf8_unicode_ci,
  `nivel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `curso` int(11) DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nuevo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



CREATE TABLE `balance` (
  `id` int(11) NOT NULL,
  `blance_cobrador` int(11) DEFAULT NULL,
  `fechaDesde` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fechaHasta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `configuracion` (
  `clave` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valorNumerico` int(11) DEFAULT NULL,
  `valorTextual` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `configuracion` (`clave`, `valorNumerico`, `valorTextual`) VALUES
('descripcion', 0, 'La Escuela Graduada “Joaquín V. González” fue creada por Decreto del Poder Ejecutivo del 24 de enero de 1906. Con su creación se completaba el proceso educativo dentro de la Universidad, por primera vez en el país. Se lograba, como quería el Presidente de la U.N.L.P., Joaquín V. González, la armonía y continuidad de las distintas etapas de la enseñanza primaria, secundaria y universitaria.\r\nLa Escuela surgió como Anexa a la Sección Pedagógica de la Facultad de Ciencias Jurídicas y Sociales de la Universidad Nacional de La Plata, que se encontraba a cargo del Profesor Víctor Mercante. En 1914 fue anexada a la Facultad de Ciencias de la Educación y en 1920 a la Facultad de Humanidades y Ciencias de la Educación. Actualmente depende de la Presidencia de la U.N.L.P.'),
('email', 0, 'info@anexa.unlp.edu.ar'),
('estado_sitio', 1, '1'),
('mensaje_deshabilitado', 0, 'El sistema se encuentra deshabilitado por el momento.'),
('paginacion', 5, '5'),
('titulo', 0, 'Sistema de la Escuela Anexa');


CREATE TABLE `cuota` (
  `id` int(11) NOT NULL,
  `borrado` tinyint(1) NOT NULL,
  `anio` int(11) NOT NULL,
  `mes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `monto` decimal(10,0) NOT NULL,
  `tipoCuota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `cuota` (`id`, `borrado`, `anio`, `mes`, `monto`, `tipoCuota`, `orden`) VALUES
(23, 0, 2017, 'Matricula', '750', 'matricula', 0),
(24, 0, 2017, 'Enero', '780', 'mensual', 0),
(25, 0, 2017, 'Febrero', '750', 'mensual', 0),
(29, 1, 2017, 'Marzo', '700', 'mensual', 0),
(30, 1, 2017, 'Matricula', '5000', 'mensual', 2),
(31, 0, 2017, 'Matricula', '200', 'matriculaIngreso', 1);


CREATE TABLE `pago` (
  `id` int(11) NOT NULL,
  `alumno_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `cuota_id` int(11) DEFAULT NULL,
  `borrado` tinyint(1) NOT NULL,
  `fecha` datetime NOT NULL,
  `becado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `tipo_cobrador` (
  `id` int(11) NOT NULL,
  `denominacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comision` decimal(10,0) NOT NULL,
  `borrado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `tipo_cobrador` (`id`, `denominacion`, `comision`, `borrado`) VALUES
(1, 'algun tipo', '35', 1),
(2, 'algun tipo', '30', 1),
(3, 'otro tiiipo', '10', 1),
(4, 'Domicilio', '30', 0),
(5, 'Libreria/Fotocopiadora', '15', 0),
(6, 'Transferencia Bancaria', '0', 0),
(7, 'Transferencia Bancaria', '0', 1);

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `borrado` tinyint(1) NOT NULL,
  `habilitado` tinyint(1) NOT NULL,
  `fechaUltCierre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipoCobrador_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `borrado`, `habilitado`, `fechaUltCierre`, `tipoCobrador_id`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 'admin@admin.com', 1, 'bhnl60fvtvs4kowk8cckcwwgog00c8g', '$2y$13$F4Ho1StoDY1gjNGJfEkrKOFPmk4gv.kQ55oWW1f1aaCg.4micSDb.', '2017-08-27 12:53:54', NULL, NULL, 'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}', 0, 1, '', NULL),
(2, 'cobrador1', 'cobrador1', 'milton@milton.com', 'milton@milton.com', 1, NULL, '$2y$13$B/nDzMSIDdI7CM8yBuJVh.TrwHIawm1xNqIRnamOnq5hDvWL1Gh92', '2017-08-27 19:00:27', NULL, NULL, 'a:1:{i:0;s:13:\"ROLE_COBRADOR\";}', 0, 1, '', NULL),
(5, 'cobrador2', 'cobrador2', 'pato@disney.com', 'pato@disney.com', 1, '1pugjnnp0uck8o4840o440sggc488wo', '$2y$13$PP1MnAdBiqtIxfCxae.r8uEyzn0KyvxB0Uie1IS/gZ3UW3ideS7Se', NULL, NULL, NULL, 'a:1:{i:0;s:13:\"ROLE_COBRADOR\";}', 0, 1, '', NULL),
(6, 'cobrador3', 'cobrador3', 'gestion@gestion.com.ar', 'gestion@gestion.com.ar', 1, 'jqxv3lf90lsc8wwgkww0kgkogwokgkw', '$2y$13$GbcRX6dUeQYaC9b9cEutGeOpUxEHQgh0J5Vhsy0whJTqlTB.INs1q', '2017-04-03 17:20:57', NULL, NULL, 'a:1:{i:0;s:13:\"ROLE_COBRADOR\";}', 0, 1, '', NULL);

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
-- Indices de la tabla `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_ACF41FFEAFC8F6BE` (`blance_cobrador`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`clave`),
  ADD UNIQUE KEY `UNIQ_682CCAF164E8588B` (`clave`);

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
-- Indices de la tabla `tipo_cobrador`
--
ALTER TABLE `tipo_cobrador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_8D93D649C05FB297` (`confirmation_token`),
  ADD UNIQUE KEY `UNIQ_8D93D649971CC2D4` (`tipoCobrador_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1259;
--
-- AUTO_INCREMENT de la tabla `balance`
--
ALTER TABLE `balance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cuota`
--
ALTER TABLE `cuota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_cobrador`
--
ALTER TABLE `tipo_cobrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `balance`
--
ALTER TABLE `balance`
  ADD CONSTRAINT `FK_ACF41FFEAFC8F6BE` FOREIGN KEY (`blance_cobrador`) REFERENCES `user` (`id`);

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `FK_F4DF5F3E6A7CF079` FOREIGN KEY (`cuota_id`) REFERENCES `cuota` (`id`),
  ADD CONSTRAINT `FK_F4DF5F3EA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_F4DF5F3EFC28E5EE` FOREIGN KEY (`alumno_id`) REFERENCES `alumno` (`id`);

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D649971CC2D4` FOREIGN KEY (`tipoCobrador_id`) REFERENCES `tipo_cobrador` (`id`);

