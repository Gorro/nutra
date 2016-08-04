-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-07-2016 a las 04:44:10
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nutricion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad-fisica`
--

CREATE TABLE `actividad-fisica` (
  `actividad` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `mail` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `actividadfisica` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `duracionsemana` int(11) DEFAULT NULL,
  `duracionhoras` int(11) DEFAULT NULL,
  `intensidad` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `actividad-fisica`
--

INSERT INTO `actividad-fisica` (`actividad`, `mail`, `actividadfisica`, `duracionsemana`, `duracionhoras`, `intensidad`) VALUES
('Si', 'adriana.leiva.m@hotmail.com', NULL, 4, 60, NULL),
('Si', 'afastudillo@ing.ucsc.cl', 'dasdasd', 7, 177, 'Intensa'),
('No', 'asd@das.com', NULL, NULL, NULL, NULL),
('Si', 'rsanchez@hostingnet.cl', NULL, 1, 40, NULL),
('Si', 'usuario1@mail.com', 'correr por diversiòn', 4, 60, 'Ligera'),
('Si', 'usuario10@mail.com', NULL, 4, 60, NULL),
('No', 'usuario11@mail.com', NULL, NULL, NULL, NULL),
('Si', 'usuario2@mail.com', 'Rayuela corta', 3, 70, 'Intensa'),
('No', 'usuario3@mail.com', NULL, NULL, NULL, NULL),
('No', 'usuario4@mail.com', NULL, NULL, NULL, NULL),
('No', 'usuario5@mail.com', NULL, NULL, NULL, NULL),
('No', 'usuario6@mail.com', NULL, NULL, NULL, NULL),
('No', 'usuario7@mail.com', NULL, NULL, NULL, NULL),
('Si', 'usuario8@mail.com', NULL, 4, 60, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `mail` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(1000) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `mail`, `pass`) VALUES
(1, 'usuario1@mail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `nombre_agenda` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `intervalo` int(11) NOT NULL,
  `horainicio` time NOT NULL,
  `horafin` time NOT NULL,
  `diasactivos` text COLLATE utf8_spanish_ci NOT NULL,
  `activa` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`id`, `nombre_agenda`, `fecha_inicio`, `fecha_fin`, `intervalo`, `horainicio`, `horafin`, `diasactivos`, `activa`) VALUES
(6, 'asd', '2016-06-22', '2016-09-30', 45, '08:15:00', '14:15:00', '1,2,3,4,5', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda_profesional`
--

CREATE TABLE `agenda_profesional` (
  `id_agenda` int(11) NOT NULL,
  `id_profesional` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes-clinicos`
--

CREATE TABLE `antecedentes-clinicos` (
  `enfermedades` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `otraenfermedad` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `medicamentos` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cirugiagastrica` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `mail` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `antecedentes-clinicos`
--

INSERT INTO `antecedentes-clinicos` (`enfermedades`, `otraenfermedad`, `medicamentos`, `cirugiagastrica`, `mail`) VALUES
('Ninguna', NULL, NULL, NULL, 'adriana.leiva.m@hotmail.com'),
('Ninguna', 'No', 'No', 'No', 'afastudillo@ing.ucsc.cl'),
('Ninguna', 'No', 'No', 'No', 'asd@das.com'),
('Hipertenso', 'No', NULL, NULL, 'rsanchez@hostingnet.cl'),
('Ninguna', 'No', 'zxc', 'zxc', 'usuario1@mail.com'),
('Colesterol alto,Diabetes', 'No', NULL, NULL, 'usuario10@mail.com'),
('Hipertenso,Colesterol alto', 'No', NULL, NULL, 'usuario11@mail.com'),
('Ninguna', 'No', NULL, NULL, 'usuario2@mail.com'),
('Ninguna', 'No', NULL, NULL, 'usuario3@mail.com'),
('Ninguna', 'No', NULL, NULL, 'usuario4@mail.com'),
('Ninguna', 'No', NULL, NULL, 'usuario5@mail.com'),
('Ninguna', 'No', NULL, NULL, 'usuario6@mail.com'),
('Ninguna', 'No', NULL, NULL, 'usuario7@mail.com'),
('Ninguna', 'No', NULL, NULL, 'usuario8@mail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivo`
--

CREATE TABLE `archivo` (
  `id` int(11) NOT NULL,
  `mail` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_archivo` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `directorio` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_comida` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `visto` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `archivo`
--

INSERT INTO `archivo` (`id`, `mail`, `nombre_archivo`, `directorio`, `tipo`, `tipo_comida`, `visto`) VALUES
(1, 'usuario1@mail.com', 'REGIMEN_1200_CALORIAS.pdf', 'bootstrap/css/images/uploads/usuario1@mail.com', 'pdf', 'desayuno', 0),
(2, 'usuario1@mail.com', 'REGIMEN_1200_CALORIAS.pdf', 'planes/usuario1@mail.com', 'pdf', 'desayuno', 0),
(3, 'usuario1@mail.com', 'REGIMEN_1400_CALORIAS.pdf', 'planes/usuario1@mail.com', 'pdf', 'desayuno', 0),
(4, 'usuario1@mail.com', 'REGIMEN_1600_CALORIAS.pdf', 'planes/usuario1@mail.com', 'pdf', 'desayuno', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `id` int(11) NOT NULL,
  `id_agenda` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `fecha_cita` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`id`, `id_agenda`, `id_user`, `fecha_cita`) VALUES
(1, 6, 0, '2016-06-23 11:15:00'),
(2, 6, 0, '2016-06-23 10:00:00'),
(3, 6, 3, '2016-06-23 08:15:00'),
(4, 6, 3, '2016-06-23 09:00:00'),
(5, 6, 3, '2016-06-23 09:45:00'),
(6, 6, 3, '2016-06-23 10:30:00'),
(7, 6, 3, '2016-06-23 14:15:00'),
(8, 6, 3, '2016-06-23 12:45:00'),
(9, 6, 3, '2016-06-23 12:00:00'),
(10, 6, 3, '2016-06-23 13:30:00'),
(11, 6, 3, '2016-06-24 11:15:00'),
(12, 6, 3, '2016-06-24 08:15:00'),
(13, 6, 3, '2016-06-30 14:15:00'),
(14, 6, 3, '2016-09-15 11:15:00'),
(15, 6, 3, '2016-06-29 14:15:00'),
(16, 6, 3, '2016-06-29 09:45:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos-generales`
--

CREATE TABLE `datos-generales` (
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `sexo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(11) DEFAULT NULL,
  `telefono_emergencia` int(11) DEFAULT NULL,
  `direccion` varchar(2000) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datos-generales`
--

INSERT INTO `datos-generales` (`nombre`, `fecha`, `sexo`, `mail`, `telefono`, `telefono_emergencia`, `direccion`) VALUES
('Adriana Macarena ', '0000-00-00', 'femenino', 'adriana.leiva.m@hotmail.com', NULL, NULL, ''),
('dasdasdasd', '2010-06-05', 'masculino', 'afastudillo@ing.ucsc.cl', NULL, NULL, 'ccasczxczxczxczxc'),
('Alvaro Astudillo', '1998-05-03', 'masculino', 'asd@das.com', NULL, NULL, ''),
('Ruth Pilar Sanchez Pino', '1986-11-18', 'masculino', 'rsanchez@hostingnet.cl', NULL, NULL, ''),
('Usuario 1', '1940-06-06', 'masculino', 'usuario1@mail.com', NULL, NULL, ''),
('Usuario 10', '2010-05-07', 'masculino', 'usuario10@mail.com', NULL, NULL, ''),
('Usuario 11', '2002-03-03', 'masculino', 'usuario11@mail.com', NULL, NULL, ''),
('Usuario 2', '1995-08-06', 'masculino', 'usuario2@mail.com', NULL, NULL, ''),
('Usuario 3', '1972-02-02', 'femenino', 'usuario3@mail.com', NULL, NULL, ''),
('Usuario 4', '2010-06-06', 'masculino', 'usuario4@mail.com', NULL, NULL, ''),
('Usuario 5', '2015-01-02', 'femenino', 'usuario5@mail.com', NULL, NULL, ''),
('Usuario 6', '2014-01-01', 'masculino', 'usuario6@mail.com', NULL, NULL, ''),
('Usuario 7', '1996-03-02', 'masculino', 'usuario7@mail.com', NULL, NULL, ''),
('Usuario 8', '2007-03-04', 'masculino', 'usuario8@mail.com', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicio`
--

CREATE TABLE `ejercicio` (
  `id` int(11) NOT NULL,
  `mail` varchar(1000) COLLATE utf8_spanish_ci DEFAULT NULL,
  `actividad` varchar(1000) COLLATE utf8_spanish_ci DEFAULT NULL,
  `lugar` varchar(2000) COLLATE utf8_spanish_ci DEFAULT NULL,
  `veces` varchar(1000) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tiempo` varchar(1000) COLLATE utf8_spanish_ci DEFAULT NULL,
  `intensidad` varchar(1000) COLLATE utf8_spanish_ci DEFAULT NULL,
  `calorias` varchar(1000) COLLATE utf8_spanish_ci DEFAULT NULL,
  `visto` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ejercicio`
--

INSERT INTO `ejercicio` (`id`, `mail`, `actividad`, `lugar`, `veces`, `tiempo`, `intensidad`, `calorias`, `visto`) VALUES
(4, '0', '0', '0', '0', '0', '0', '0', 0),
(5, 'usuario2@mail.com', 'qwwq', 'w', 'qw', 'qw', 'qw', 'qw', 0),
(10, 'usuario7@mail.com', 'wej', 'jl', 'kj', 'lkj', 'ljk', 'kl', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estilo-de-vida`
--

CREATE TABLE `estilo-de-vida` (
  `ocupacion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tendenciaalimentaria` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fuma` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `alcohol` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estilo-de-vida`
--

INSERT INTO `estilo-de-vida` (`ocupacion`, `tendenciaalimentaria`, `fuma`, `alcohol`, `mail`) VALUES
('asasas', 'Vegetariano', 'si', 'si', 'afastudillo@ing.ucsc.cl'),
('Licenciado', 'sdasd', 'ocasional', 'ocasional', 'usuario1@mail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitos-de-alimentacion`
--

CREATE TABLE `habitos-de-alimentacion` (
  `agua` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `liquidos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cereales` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `frutas` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `verduras` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `lacteosyderivados` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `embutidosycomidarapida` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `carnesavespescados` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `legumbres` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `aceites` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `alimentosgrasos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `huevos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `azucarespasteleria` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `habitos-de-alimentacion`
--

INSERT INTO `habitos-de-alimentacion` (`agua`, `liquidos`, `cereales`, `frutas`, `verduras`, `lacteosyderivados`, `embutidosycomidarapida`, `carnesavespescados`, `legumbres`, `aceites`, `alimentosgrasos`, `huevos`, `azucarespasteleria`, `mail`) VALUES
('Nunca', 'Nunca', 'Nunca', 'Nunca', 'Nunca', 'Nunca', 'Nunca', 'Semanalmente', 'Nunca', 'Nunca', 'Nunca', 'Nunca', 'Nunca', 'usuario1@mail.com'),
('2 veces por mes', 'Mensual', 'Mensual', 'Mensual', 'Mensual', '2 veces por semana', 'Mensual', '2 veces por mes', '3 veces por mes', 'Mensual', 'Mensual', '2 veces por mes', 'Mensual', 'usuario2@mail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mediciones`
--

CREATE TABLE `mediciones` (
  `estatura` double NOT NULL,
  `peso` double NOT NULL,
  `imc` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cintura` double DEFAULT NULL,
  `riesgo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `muneca` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `pagua` double DEFAULT NULL,
  `pgrasa` double DEFAULT NULL,
  `kmusculo` double DEFAULT NULL,
  `tmb` double DEFAULT NULL,
  `mail` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mediciones`
--

INSERT INTO `mediciones` (`estatura`, `peso`, `imc`, `cintura`, `riesgo`, `muneca`, `pagua`, `pgrasa`, `kmusculo`, `tmb`, `mail`) VALUES
(1.58, 69, '27.64 (IMC), Sobrepeso', 89, 'Riesgo moderado', 'Mediana', 0, 0, 0, 0, 'adriana.leiva.m@hotmail.com'),
(1.5, 50, '22.22 (IMC), Peso normal', NULL, 'Sin información', 'Mediana', NULL, NULL, NULL, NULL, 'afastudillo@ing.ucsc.cl'),
(1.5, 50, '22.22 (IMC), Peso normal', NULL, 'Sin información', 'Pequeña', NULL, NULL, NULL, NULL, 'asd@das.com'),
(1.59, 58, '22.94 (IMC), Peso normal', NULL, 'Sin información', 'Mediana', NULL, NULL, NULL, NULL, 'rsanchez@hostingnet.cl'),
(2.01, 130, '32.18 (IMC), Obesidad moderada', 50, 'Sin riesgo', 'Pequeña', 50, 10, 0, 0, 'usuario1@mail.com'),
(1.5, 158, '70.22 (IMC), Obecidad morbida', NULL, 'Sin información', 'Mediana', NULL, NULL, NULL, NULL, 'usuario10@mail.com'),
(1.5, 50, '22.22 (IMC), Peso normal', NULL, 'Sin información', 'Pequeña', NULL, NULL, NULL, NULL, 'usuario11@mail.com'),
(1.9, 102, '28.25 (IMC), Sobrepeso', 68, 'Sin riesgo', 'Grande', 0, 0, 0, 0, 'usuario2@mail.com'),
(1.61, 72, '27.78 (IMC), Sobrepeso', NULL, 'Sin información', 'Mediana', NULL, NULL, NULL, NULL, 'usuario3@mail.com'),
(1.5, 50, '22.22 (IMC), Peso normal', NULL, 'Sin información', 'Pequeña', NULL, NULL, NULL, NULL, 'usuario4@mail.com'),
(1.5, 60, '26.67 (IMC), Sobrepeso', NULL, 'Sin información', 'Mediana', NULL, NULL, NULL, NULL, 'usuario5@mail.com'),
(1.5, 50, '22.22 (IMC), Peso normal', NULL, 'Sin información', 'Pequeña', NULL, NULL, NULL, NULL, 'usuario6@mail.com'),
(1.5, 50, '22.22 (IMC), Peso normal', NULL, 'Sin información', 'Mediana', NULL, NULL, NULL, NULL, 'usuario7@mail.com'),
(1.5, 50, '22.22 (IMC), Peso normal', NULL, 'Sin información', 'Mediana', NULL, NULL, NULL, NULL, 'usuario8@mail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesional`
--

CREATE TABLE `profesional` (
  `id` int(11) NOT NULL,
  `username` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre` int(11) NOT NULL,
  `mail` int(11) NOT NULL,
  `telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `mail` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `mail`, `pass`, `deleted`) VALUES
(1, 'adriana.leiva.m@hotmail.com', '9a47fa62ee45cc8363e42a5f39e4e2b2c9414072', 0),
(2, 'rsanchez@hostingnet.cl', 'b69f673cb3a23c41a5673e788cdfbc767a959e52', 0),
(3, 'usuario1@mail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0),
(4, 'usuario10@mail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0),
(5, 'usuario11@mail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0),
(6, 'usuario2@mail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0),
(7, 'usuario3@mail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0),
(8, 'usuario4@mail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0),
(9, 'usuario5@mail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0),
(10, 'usuario6@mail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0),
(11, 'usuario7@mail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0),
(12, 'usuario8@mail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0),
(13, 'afastudillo@ing.ucsc.cl', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0),
(14, 'asd@das.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad-fisica`
--
ALTER TABLE `actividad-fisica`
  ADD PRIMARY KEY (`mail`);

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `antecedentes-clinicos`
--
ALTER TABLE `antecedentes-clinicos`
  ADD PRIMARY KEY (`mail`);

--
-- Indices de la tabla `archivo`
--
ALTER TABLE `archivo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos-generales`
--
ALTER TABLE `datos-generales`
  ADD PRIMARY KEY (`mail`);

--
-- Indices de la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estilo-de-vida`
--
ALTER TABLE `estilo-de-vida`
  ADD PRIMARY KEY (`mail`);

--
-- Indices de la tabla `habitos-de-alimentacion`
--
ALTER TABLE `habitos-de-alimentacion`
  ADD PRIMARY KEY (`mail`);

--
-- Indices de la tabla `mediciones`
--
ALTER TABLE `mediciones`
  ADD PRIMARY KEY (`mail`);

--
-- Indices de la tabla `profesional`
--
ALTER TABLE `profesional`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `archivo`
--
ALTER TABLE `archivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `profesional`
--
ALTER TABLE `profesional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
