-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2024 a las 15:45:07
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `issp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_alumno` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `DNI` int(9) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `telefono` int(11) NOT NULL,
  `calle` varchar(255) NOT NULL,
  `nro` int(5) NOT NULL,
  `codigo_postal` int(4) NOT NULL,
  `estado_civil` varchar(20) NOT NULL,
  `genero` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumno`, `nombre`, `apellido`, `email`, `DNI`, `fecha_nacimiento`, `telefono`, `calle`, `nro`, `codigo_postal`, `estado_civil`, `genero`) VALUES
(7, 'Nicolas', 'Meliti', '', 45414317, '2024-11-07', 2147483647, 'Florencia', 902, 2919, 'Soltero', 'Femenino'),
(9, 'Sara', 'Meliti', '', 45414317, '2024-11-23', 12344, 'Florencia', 902, 2919, 'Soltero', 'Femenino'),
(10, 'Sara', 'Meliti', '', 45414317, '2024-11-23', 12344, 'Florencia', 902, 2919, 'Soltero', 'Femenino'),
(11, 'nicolas', 'Rotili', '', 45414317, '0000-00-00', 0, '', 0, 0, '', ''),
(12, 'Catalina', 'Ciribe', '', 43380945, '2024-11-16', 2147483647, 'Jujuy', 332, 2919, 'Soltero', 'Femenino'),
(13, 'Fabiana', 'Videla', '', 0, '0000-00-00', 0, '', 0, 0, '', ''),
(14, 'Fabiana', 'Videla', '', 0, '0000-00-00', 0, '', 0, 0, '', ''),
(15, 'Nicolas', 'gimenez', '', 0, '0000-00-00', 0, '', 0, 0, '', ''),
(16, 'Emilia', 'llaudet', '', 463846, '2024-11-21', 2147483647, 'Colon', 667, 4645, 'Soltero', 'Femenino'),
(17, 'Emilia', 'llaudet', '', 463846, '2024-11-21', 2147483647, 'Colon', 667, 4645, 'Soltero', 'Femenino'),
(18, 'emilia', 'llaudet', '', 0, '0000-00-00', 0, '', 0, 0, '', ''),
(19, 'emilia', 'llaudet', '', 0, '0000-00-00', 0, '', 0, 0, '', ''),
(20, 'Ra', 'Geminale', '', 0, '0000-00-00', 0, '', 0, 0, '', ''),
(21, 'Ra', 'Geminale', 'rafigeminale@gmail.com', 0, '0000-00-00', 0, '', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `id_materia` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `carga_horaria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id_materia`, `nombre`, `carga_horaria`) VALUES
(1, 'matematica', 0),
(2, 'matematica', 0),
(3, 'ingles', 30),
(4, 'ingles', 30),
(5, 'bases de datos', 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias_alumnos`
--

CREATE TABLE `materias_alumnos` (
  `id_materia` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias_profesores`
--

CREATE TABLE `materias_profesores` (
  `id_materia` int(11) NOT NULL,
  `id_profesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id_profesor` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `DNI` int(11) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `telefono` int(11) NOT NULL,
  `calle` varchar(255) NOT NULL,
  `nro` int(11) NOT NULL,
  `codigo_postal` int(5) NOT NULL,
  `estado_civil` varchar(255) NOT NULL,
  `genero` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id_profesor`, `nombre`, `apellido`, `DNI`, `fecha_nacimiento`, `telefono`, `calle`, `nro`, `codigo_postal`, `estado_civil`, `genero`) VALUES
(1, 'Sara', 'Meliti', 45414317, '2024-11-23', 2147483647, '', 0, 0, '', ''),
(2, 'Sara', 'gimenez', 0, '0000-00-00', 0, '', 0, 0, '', ''),
(3, 'Juan', 'Pedro', 5454322, '2024-11-11', 3345567, '', 0, 0, '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id_profesor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id_profesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
