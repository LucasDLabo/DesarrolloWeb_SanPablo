-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2024 a las 00:35:26
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alumnohtml`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `segundo_nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `papelera` tinyint(1) DEFAULT NULL,
  `borrado` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `segundo_nombre`, `apellido`, `fecha_nacimiento`, `papelera`, `borrado`) VALUES
(28, 'Lucas', 'Emanuel', 'Del Labo', '2003-05-30', NULL, NULL),
(32, 'Braian', 'Alex', 'Alexis', '2000-11-04', NULL, NULL),
(34, 'Juan', 'Martin', 'Perez', '2000-02-20', NULL, NULL),
(35, 'Alejo', 'Faustino', 'Guzman', '2003-02-21', NULL, NULL),
(36, 'Maximiliano', 'Aleberto', 'Alcaraz', '2002-08-31', NULL, NULL),
(37, 'Nicolas', 'Veloz', 'Petraca', '2003-12-21', NULL, NULL),
(38, 'Joaquin', 'Ell', 'Escribe', '2002-12-21', NULL, NULL),
(39, 'David', 'Kaizer', 'Carletta', '2002-05-21', NULL, NULL),
(40, 'Sara', 'Bieber', 'Meliti', '2005-12-21', NULL, NULL),
(57, 'Jose', 'Ramon', 'Miguel', '2003-02-21', NULL, NULL),
(60, 'Miguel', 'Suarez', 'Antonio', '2003-11-21', NULL, NULL),
(63, 'Tili', 'Pancho', 'Salchicha', '2021-12-21', NULL, NULL),
(64, 'Ejemplo', 'Borrado', 'Eliminado', '2002-12-31', NULL, 1),
(67, 'Pedrito', 'Arturo', 'Gomez', '2024-10-27', NULL, NULL),
(68, 'Miguel', 'Juancho', 'Del Sur', '2024-10-27', 1, 1),
(69, 'Jose', 'Miguel', 'Antoniono', '2000-10-20', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_materia`
--

CREATE TABLE `alumno_materia` (
  `alumno_id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `alumno_materia`
--

INSERT INTO `alumno_materia` (`alumno_id`, `materia_id`) VALUES
(34, 8),
(34, 6),
(34, 4),
(34, 7),
(35, 4),
(35, 7),
(36, 5),
(36, 10),
(37, 7),
(37, 2),
(39, 3),
(39, 8),
(39, 6),
(40, 3),
(40, 8),
(40, 6),
(40, 1),
(40, 5),
(63, 3),
(63, 4),
(63, 5),
(63, 2),
(67, 3),
(67, 8),
(67, 6),
(68, 3),
(38, 6),
(38, 1),
(28, 8),
(28, 6),
(28, 14),
(69, 3),
(69, 8),
(69, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `papelera` tinyint(1) DEFAULT NULL,
  `borrado` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `nombre`, `papelera`, `borrado`) VALUES
(1, 'Gimnasia Artistica', NULL, NULL),
(2, 'Matemáticas', NULL, NULL),
(3, 'Arte', NULL, NULL),
(4, 'Física', NULL, NULL),
(5, 'Informática', NULL, NULL),
(6, 'Ciencia Sociales', NULL, NULL),
(7, 'Geografía', NULL, NULL),
(8, 'Biología', NULL, NULL),
(10, 'Programación', NULL, NULL),
(13, 'UDI', NULL, NULL),
(14, 'Desarrollo Web', NULL, NULL),
(15, 'Educacion Fisica', NULL, NULL),
(16, 'Materia borrada', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `segundo_nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `materia_id` int(11) DEFAULT NULL,
  `papelera` tinyint(4) DEFAULT NULL,
  `borrado` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id`, `nombre`, `segundo_nombre`, `apellido`, `materia_id`, `papelera`, `borrado`) VALUES
(1, 'Juan', 'Arturo', 'Lopez', 5, 1, NULL),
(2, 'Nicolas', 'PHP', 'Rotili', 3, NULL, NULL),
(5, 'Lucas', 'Federico', 'Emanuel', 5, NULL, NULL),
(8, 'Fede', 'Martin', 'Poseidon', 1, NULL, NULL),
(10, 'Walter', 'Esteban', 'Bur', 2, NULL, NULL),
(11, 'Karina', 'Susana', 'Gigli', 2, NULL, NULL),
(12, 'Esteban', 'Ricardo', 'Fernandez', 2, NULL, NULL),
(13, 'Sandra', 'Fatima', 'Gimenez', 4, NULL, NULL),
(14, 'Matias', 'Juan', 'Hernan', 2, NULL, NULL),
(15, 'Andrea', 'Sandra', 'Castro', 8, NULL, NULL),
(16, 'Miguel', 'Fernandez', 'Castro', 2, NULL, NULL),
(21, 'Sabrina', 'Lucia', 'Rodriguez', 10, NULL, NULL),
(22, 'Juenceto', 'Manuel', 'Arvo', 4, NULL, NULL),
(24, 'Profesor borrado', 'Eliminado', 'Borrado', 7, 1, 1),
(25, 'Ejemplo', '', 'numero 2', 13, 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `alumno_materia`
--
ALTER TABLE `alumno_materia`
  ADD KEY `alumno_id` (`alumno_id`),
  ADD KEY `materia_id` (`materia_id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materia_id` (`materia_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno_materia`
--
ALTER TABLE `alumno_materia`
  ADD CONSTRAINT `alumno_materia_ibfk_1` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`id`),
  ADD CONSTRAINT `alumno_materia_ibfk_2` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`);

--
-- Filtros para la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD CONSTRAINT `profesores_ibfk_1` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
