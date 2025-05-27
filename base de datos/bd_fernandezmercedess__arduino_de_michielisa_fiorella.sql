-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
<<<<<<< HEAD:base de datos/bd_fernandezmercedess__arduino_de_michielisa_fiorella (1).sql
-- Tiempo de generación: 27-05-2025 a las 14:52:34
=======
-- Tiempo de generación: 27-05-2025 a las 15:23:45
>>>>>>> 0a96a2ff9f52c9a44bf360a5bed4d8f0754871f6:base de datos/bd_fernandezmercedess__arduino_de_michielisa_fiorella.sql
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
-- Base de datos: `bd_fernandezmercedess__arduino_de_michielisa_fiorella`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE `mensaje` (
  `id_mensaje` int(11) NOT NULL,
  `nombre_remitente` varchar(20) NOT NULL,
  `apellido_remitente` varchar(20) NOT NULL,
  `email_mensaje` varchar(100) NOT NULL,
  `contenido_mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mensaje`
--

INSERT INTO `mensaje` (`id_mensaje`, `nombre_remitente`, `apellido_remitente`, `email_mensaje`, `contenido_mensaje`) VALUES
(1, 'Juan', 'Perez', 'popopop@gmail.com', 'qwertyuioiuyrfdadfxghjhbhhgfdSDSDHJKHGFDqrsrftshsbtsfdvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvhhljjjjjjjjjjjjjjjjjjjjjjjjjjjjjj');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` int(5) NOT NULL,
  `tipo_perfil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `tipo_perfil`) VALUES
(1, 'Administrador'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id_persona` int(11) NOT NULL,
  `nombre_persona` varchar(50) NOT NULL,
  `apellido_persona` varchar(50) NOT NULL,
  `cuil_persona` int(11) NOT NULL,
  `email_persona` varchar(100) NOT NULL,
  `contrasena_persona` varchar(450) NOT NULL,
  `estado_persona` tinyint(1) NOT NULL,
  `domicilio_persona` varchar(50) NOT NULL,
  `telefono_persona` int(15) NOT NULL,
  `id_perfil` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_persona`, `nombre_persona`, `apellido_persona`, `cuil_persona`, `email_persona`, `contrasena_persona`, `estado_persona`, `domicilio_persona`, `telefono_persona`, `id_perfil`) VALUES
<<<<<<< HEAD:base de datos/bd_fernandezmercedess__arduino_de_michielisa_fiorella (1).sql
(9, 'Marcela', 'Martínez', 2147483647, 'marcela@gmail.com', '$2y$10$7c/TWJmtcGoipzsEu8/2w.XTYKz8yU6RU0SF4m1szjooQJhSl9ET6', 1, 'San Juan 349', 0, 2),
(10, 'Mariana', 'Martínez', 2147483647, 'marcela1@gmail.com', '$2y$10$Q0efXgzvLmWSmz7vdJxbaOdSDc96lUK3IZFw2.MJSr1RRc2xqyzsm', 1, 'San Juan 345', 0, 2),
(11, 'Mariana', 'Martínez', 2147483647, 'mariana@gmail.com', '$2y$10$lON06YsqNyuBmGFjFv5s2u5szMEzrDqfkXEw3ie0YqZgtbYDXtoPW', 1, 'San Juan 345', 0, 2);
=======
(8, 'Mariana', 'Martínez', 2147483647, 'mariana@gmail.com', '$2y$10$ncmAQBk/AqgxzrpuNW76UOpyX4OUOCZkiQWH9aLpu9.aHiQn7P6hi', 1, 'San Juan 345', 0, 2),
(9, 'Marcela', 'Martínez', 2147483647, 'marcela@gmail.com', '$2y$10$7c/TWJmtcGoipzsEu8/2w.XTYKz8yU6RU0SF4m1szjooQJhSl9ET6', 1, 'San Juan 349', 0, 2),
(12, 'Juan', 'Perez', 2147483647, 'popopop@gmail.com', '$2y$10$y8u/j8M7qiBsHT7215HMxO88R8si51r.1kAdxDh1ylOF1ZaZrIxLa', 1, '567 fffff', 0, 1);
>>>>>>> 0a96a2ff9f52c9a44bf360a5bed4d8f0754871f6:base de datos/bd_fernandezmercedess__arduino_de_michielisa_fiorella.sql

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(20) NOT NULL,
  `precio_producto` decimal(10,0) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `descripcion_producto` text NOT NULL,
  `imagen_producto` varchar(200) NOT NULL,
  `stock_producto` int(4) NOT NULL,
  `estado_producto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`id_mensaje`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id_persona`),
  ADD UNIQUE KEY `email_persona` (`email_persona`),
  ADD KEY `id_perfil` (`id_perfil`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD UNIQUE KEY `id_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `id_mensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
<<<<<<< HEAD:base de datos/bd_fernandezmercedess__arduino_de_michielisa_fiorella (1).sql
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
=======
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
>>>>>>> 0a96a2ff9f52c9a44bf360a5bed4d8f0754871f6:base de datos/bd_fernandezmercedess__arduino_de_michielisa_fiorella.sql

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `id_perfil` FOREIGN KEY (`id_perfil`) REFERENCES `perfil` (`id_perfil`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
