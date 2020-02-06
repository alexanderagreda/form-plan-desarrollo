-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-02-2020 a las 18:50:51
-- Versión del servidor: 5.6.45-log
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `plan-desarrollo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `id` int(11) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `nombre`) VALUES
(1, 'ANGOLA'),
(2, 'ARGELIA'),
(3, 'BENIN'),
(4, 'BOTSUANA'),
(5, 'BURKINA FASO'),
(6, 'BURUNDI'),
(7, 'CABO VERDE'),
(8, 'CAMERÚN'),
(9, 'CHAD'),
(10, 'COMORAS'),
(11, 'COSTA DE MARFIL'),
(12, 'EGIPTO'),
(13, 'ERITREA'),
(14, 'ETIOPÍA'),
(15, 'GABÓN'),
(16, 'GAMBIA'),
(17, 'GHANA'),
(18, 'GUINEA'),
(19, 'GUINEA ECUATORIAL'),
(20, 'GUINEA-BISSAU'),
(21, 'KENIA'),
(22, 'LESOTO'),
(23, 'LIBERIA'),
(24, 'LIBIA'),
(25, 'MADAGASCAR'),
(26, 'MALAUI'),
(27, 'MALI'),
(28, 'MARRUECOS'),
(29, 'MAURICIO'),
(30, 'MAURITANIA'),
(31, 'MOZAMBIQUE'),
(32, 'NAMIBIA'),
(33, 'NÍGER'),
(34, 'NIGERIA'),
(35, 'REPÚBLICA CENTROAFRICANA'),
(36, 'REPÚBLICA DEL CONGO'),
(37, 'REPÚBLICA DEMOCRÁTICA DEL CONGO'),
(38, 'REPÚBLICA SAHARAUI'),
(39, 'RUANDA'),
(40, 'SANTO TOMÉ Y PRÍNCIPE'),
(41, 'SENEGAL'),
(42, 'SEYCHELLES'),
(43, 'SIERRA LEONA'),
(44, 'SOMALIA'),
(45, 'SUAZILANDIA'),
(46, 'SUDÁFRICA'),
(47, 'SUDÁN DEL NORTE'),
(48, 'SUDÁN DEL SUR'),
(49, 'TANZANIA'),
(50, 'TOGO'),
(51, 'TÚNEZ'),
(52, 'UGANDA'),
(53, 'YIBUTI'),
(54, 'ZAMBIA'),
(55, 'ZIMBABUE'),
(56, 'ANTIGUA Y BARBUDA'),
(57, 'ARGENTINA'),
(58, 'BAHAMAS'),
(59, 'BARBADOS'),
(60, 'BELICE'),
(61, 'BOLIVIA'),
(62, 'BRASIL'),
(63, 'CANADÁ'),
(64, 'CHILE'),
(65, 'COLOMBIA'),
(66, 'COSTA RICA'),
(67, 'CUBA'),
(68, 'DOMINICA'),
(69, 'ECUADOR'),
(70, 'EL SALVADOR'),
(71, 'ESTADOS UNIDOS'),
(72, 'GRANADA'),
(73, 'GUATEMALA'),
(74, 'GUYANA'),
(75, 'HAITÍ'),
(76, 'HONDURAS'),
(77, 'JAMAICA'),
(78, 'MÉXICO'),
(79, 'NICARAGUA'),
(80, 'PANAMÁ'),
(81, 'PARAGUAY'),
(82, 'PERÚ'),
(83, 'PUERTO RICO'),
(84, 'REPÚBLICA DOMINICANA'),
(85, 'SAN CRISTÓBAL Y NIEVES'),
(86, 'SAN VICENTE Y LAS GRANADINAS'),
(87, 'SANTA LUCÍA'),
(88, 'SURINAM'),
(89, 'TRINIDAD Y TOBAGO'),
(90, 'URUGUAY'),
(91, 'VENEZUELA'),
(92, 'AFGANISTÁN'),
(93, 'ARABIA SAUDITA'),
(94, 'BANGLADÉS'),
(95, 'BARÉIN'),
(96, 'BRUNEI'),
(97, 'BUTÁN'),
(98, 'CAMBOYA'),
(99, 'CATAR'),
(100, 'CHINA'),
(101, 'CHIPRE'),
(102, 'COREA DEL NORTE'),
(103, 'COREA DEL SUR'),
(104, 'EMIRATOS ARABES UNIDOS'),
(105, 'FILIPINAS'),
(106, 'INDIA'),
(107, 'INDONESIA'),
(108, 'IRÁN'),
(109, 'IRAQ'),
(110, 'ISRAEL'),
(111, 'JAPÓN'),
(112, 'JORDANIA'),
(113, 'KAZAJISTÁN'),
(114, 'KIRGUISTÁN'),
(115, 'KUWAIT'),
(116, 'LAOS'),
(117, 'LÍBANO'),
(118, 'MALASIA'),
(119, 'MALDIVAS'),
(120, 'MONGOLIA'),
(121, 'MYANMAR (BIRMANIA)'),
(122, 'NEPAL'),
(123, 'OMÁN'),
(124, 'PAKISTÁN'),
(125, 'PALESTINA'),
(126, 'SINGAPUR'),
(127, 'SIRIA'),
(128, 'SRI LANKA'),
(129, 'TAILANDIA'),
(130, 'TAIWAN'),
(131, 'TAYIKISTÁN'),
(132, 'TIMOR ORIENTAL'),
(133, 'TURKMENISTÁN'),
(134, 'TURQUÍA'),
(135, 'UZBEKISTÁN'),
(136, 'VIETNAM'),
(137, 'YEMEN'),
(138, 'ALBANIA'),
(139, 'ALEMANIA'),
(140, 'ANDORRA'),
(141, 'ARMENIA'),
(142, 'AUSTRIA'),
(143, 'AZERBAIYÁN'),
(144, 'BÉLGICA'),
(145, 'BIELORRUSIA'),
(146, 'BOSNIA Y HERZEGOVINA'),
(147, 'BULGARIA'),
(148, 'CROACIA'),
(149, 'DINAMARCA'),
(150, 'ESLOVAQUIA'),
(151, 'ESLOVENIA'),
(152, 'ESPAÑA'),
(153, 'ESTONIA'),
(154, 'FINLANDIA'),
(155, 'FRANCIA'),
(156, 'GEORGIA'),
(157, 'GRECIA'),
(158, 'HUNGRÍA'),
(159, 'IRLANDA'),
(160, 'ISLANDIA'),
(161, 'ITALIA'),
(162, 'LETONIA'),
(163, 'LIECHTENSTEIN'),
(164, 'LITUANIA'),
(165, 'LUXEMBURGO'),
(166, 'MALTA'),
(167, 'MOLDAVIA'),
(168, 'MÓNACO'),
(169, 'MONTENEGRO'),
(170, 'NORUEGA'),
(171, 'PAÍSES BAJOS'),
(172, 'POLONIA'),
(173, 'PORTUGAL'),
(174, 'REINO UNIDO'),
(175, 'REPÚBLICA CHECA'),
(176, 'REPÚBLICA DE MACEDONIA'),
(177, 'RUMANIA'),
(178, 'RUSIA'),
(179, 'SAN MARINO'),
(180, 'SERBIA'),
(181, 'SUECIA'),
(182, 'SUIZA'),
(183, 'UCRANIA'),
(184, 'VATICANO'),
(185, 'AUSTRALIA'),
(186, 'FIYI'),
(187, 'ISLAS MARSHALL'),
(188, 'ISLAS SALOMÓN'),
(189, 'KIRIBATI'),
(190, 'MICRONESIA'),
(191, 'NAURU'),
(192, 'NUEVA ZELANDA'),
(193, 'PALAOS'),
(194, 'PAPÚA NUEVA GUINEA'),
(195, 'SAMOA'),
(196, 'TONGA'),
(197, 'TUVALU'),
(198, 'VANUATU');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `id` int(11) NOT NULL DEFAULT '0',
  `tratamiento_datos` int(1) NOT NULL,
  `tipo_documento` varchar(20) NOT NULL,
  `numero_identificacion` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`id`, `tratamiento_datos`, `tipo_documento`, `numero_identificacion`, `nombre`) VALUES
(1, 1, 'Cédula de Ciudadanía', 111111, 'TEST');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` int(50) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_usuario` (`nombre_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
