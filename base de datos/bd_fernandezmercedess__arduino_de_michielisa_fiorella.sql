-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-06-2025 a las 15:53:24
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

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre_categoria`) VALUES
(3, 'Tote bags'),
(4, 'Carteras'),
(5, 'Mochilas'),
(6, 'Riñoneras'),
(7, 'Cápsula Kurundú Color'),
(8, 'Bandoleras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE `mensaje` (
  `id_mensaje` int(11) NOT NULL,
  `nombre_remitente` varchar(20) NOT NULL,
  `apellido_remitente` varchar(20) NOT NULL,
  `email_mensaje` varchar(100) NOT NULL,
  `contenido_mensaje` text NOT NULL,
  `estado_mensaje` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mensaje`
--

INSERT INTO `mensaje` (`id_mensaje`, `nombre_remitente`, `apellido_remitente`, `email_mensaje`, `contenido_mensaje`, `estado_mensaje`) VALUES
(1, 'Juan', 'Perez', 'popopop@gmail.com', 'qwertyuioiuyrfdadfxghjhbhhgfdSDSDHJKHGFDqrsrftshsbtsfdvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvhhljjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 1),
(4, 'Ana', 'Gomez', 'aaaa@gmail.com', 'lorem ipsum', 1),
(5, 'Ana', 'Perez', 'bababa@gmail.com', 'consulta generica sobre algun producto presente en el catalogo', 0);

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
(8, 'Mariana', 'Martínez', 2147483647, 'mariana@gmail.com', '$2y$10$ncmAQBk/AqgxzrpuNW76UOpyX4OUOCZkiQWH9aLpu9.aHiQn7P6hi', 1, 'San Juan 345', 0, 2),
(9, 'Marcela', 'Martínez', 2147483647, 'marcela@gmail.com', '$2y$10$7c/TWJmtcGoipzsEu8/2w.XTYKz8yU6RU0SF4m1szjooQJhSl9ET6', 1, 'San Juan 349', 0, 2),
(12, 'Juan', 'Perez', 2147483647, 'popopop@gmail.com', '$2y$10$y8u/j8M7qiBsHT7215HMxO88R8si51r.1kAdxDh1ylOF1ZaZrIxLa', 1, '567 fffff', 0, 1),
(13, 'Mercedes', 'Fernández', 2147483647, 'mercedessilvana@gmail.com', '$2y$10$khXx4oHoun4QqWwKYGjj7OOrD4CuAfSQFF2KdupQzltnfm/chyCQW', 1, 'B° Cremonte', 0, 1),
(14, 'Franco', 'Rodriguez', 2147483647, 'franco23@gmail.com', '$2y$10$vBqHH3ZoqU84OmWS8.b.l.d1Lf6ETgHhV3.TxU.sr4VwS4Fcj5NDS', 1, 'San Lorenzo 3678', 0, 2),
(15, 'Hugo', 'Gonzalez', 2147483647, 'hugo@gmail.com', '$2y$10$oJUmtXJnZtJWSpeMD/zMoezC8WrQdlUBbRfsDHrIqF9bV6XOcnaou', 1, 'Uruguay 987', 0, 2),
(16, 'Hugo', 'Martínez', 2147483647, 'hugo2@gmail.com', '$2y$10$/VNeaP72dEfV7F.2l6d1C.0lBAFHp22i/O36iDrXWdtxROhJVZfHi', 1, 'Uruguay 987', 0, 2),
(17, 'Mariana', 'Fernández', 2147483647, 'mariana2@gmail.com', '$2y$10$3ZYfpYFcnrXy7o4YEeeTCOv5MfG.A5EVtHV67x4ToPlUfYGt3ojke', 1, 'San Lorenzo 3678', 0, 2),
(18, 'Ana', 'Gomez', 2147483647, 'abc@gmail.com', '$2y$10$pl392eAvR53BYq8O5WKS5OQ6/0m9GfJtsjVjV0pQxJ9mKk78kcRSO', 1, 'calle 234', 0, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(20) NOT NULL,
  `precio_producto` decimal(10,0) NOT NULL,
  `descripcion_producto` text NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `imagen_producto` varchar(200) NOT NULL,
  `stock_producto` int(4) NOT NULL,
  `estado_producto` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre_producto`, `precio_producto`, `descripcion_producto`, `id_categoria`, `imagen_producto`, `stock_producto`, `estado_producto`) VALUES
(1, 'Clara ', 150000, 'Teñida color verde, cosida a mano.', 3, '1748615940_31ac526796b8a2014713.jpg', 1, 1),
(2, 'Pamela', 150000, 'Cartera XL teñida color negro, cosida a mano.', 3, '1748617793_8d8271aff58fd83f9cac.jpg', 3, 1),
(3, 'Elisa', 150000, 'Cartera XL cuero natural, cosida a mano.', 3, '1748617953_60f233cd8b08ff503376.jpg', 6, 1),
(4, 'Nadia', 150000, 'Cartera XL teñida azul, cosida a mano.', 3, '1748618027_146d787f9327a49651dd.jpg', 6, 1),
(5, 'Eusebia', 120000, 'Cartera cuero teñida marrón chocolate, cosida a mano.', 4, '1748618154_a3ce4bedca4b356688ac.jpg', 7, 1),
(6, 'Eusebia', 120000, 'Cartera cuero teñida color verde, bolsillo natural, cosida a mano.', 4, '1748618246_3fea4a369043f807cc92.jpg', 9, 1),
(7, 'Eusebia', 120000, 'Cartera cuero natural, cosida a mano.', 4, '1748618311_9a3d61b0bb060577c16f.jpg', 6, 1),
(8, 'Nora', 120000, 'Cartera cuero teñido, color negro, redonda, cosida a mano.', 4, '1748618437_ae8c7a54e966c810c774.jpg', 4, 1),
(9, 'Chiara', 110000, 'Mochila cuero teñido, color negro, cosida a mano.', 5, '1748618943_e70f41a48aa00a61d6cc.jpg', 4, 1),
(10, 'Chiara', 110000, 'Mochila cuero natural.', 5, '1748619023_39e8d0a26c1a1764c4ff.jpg', 3, 1),
(11, 'Carla', 180000, 'Portanotebook cuero teñido bordó.', 5, '1748619655_885591c008782fa64171.jpg', 8, 1),
(12, 'Mara', 60000, 'Riñonera cuero teñido metalizada.', 6, '1748620142_a2f1634a31d30ca20ffe.jpg', 5, 1),
(13, 'Andrea', 60000, 'Riñonera teñida metalizada combinada con cuero natural.', 6, '1748620214_ace04eeca9d71a15ffbb.jpg', 2, 1),
(14, 'Ana ', 60000, 'Riñonera cuero chocolate', 6, '1748620362_9493b210960ad4840620.jpg', 10, 1),
(15, 'Noemí', 130000, 'Bandolera cuero teñida color bordó con tira combinada natural.', 8, '1748620478_c0c07d1d111c2fd1b727.jpg', 9, 1),
(16, 'Ambar', 130000, 'Bandolera cuero teñido color negro.', 8, '1748620544_b4f4db67e29174840ab6.jpg', 20, 1),
(17, 'Alexa', 115000, 'Bandolera cuero natural.', 8, '1748621726_a0e62906db9be1b1a8e6.jpg', 15, 1),
(18, 'Candela', 150000, 'Bandolera redonda cuero teñido color negro.', 8, '1748621811_f3dc22c862f2d772cd79.jpg', 4, 1),
(19, 'Eleonora', 160000, 'Cartera XL teñida azul francia', 7, '1748621877_9060aaf7a8536b5f8c01.jpg', 8, 1),
(20, 'Priscila', 120000, 'Bandolera cuero teñido color amarillo.', 7, '1748621942_7695d7f48174abbf09d7.jpg', 3, 1),
(21, 'Viviana', 110000, 'Cartera redonda cuero teñida color rojo', 7, '1748622032_93f793bfd03c86c71f51.jpg', 2, 1),
(22, 'Eliana', 30000, 'Brazalete con aplicaciones cuero rojo.', 7, '1748622153_1de440d7afb03ae39090.jpg', 6, 1),
(23, 'Aldo', 80000, 'Maxi riñonera cuero natural', 6, '1748622238_d56513edd7df0b66b40d.png', 9, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `venta_fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_detalles`
--

CREATE TABLE `venta_detalles` (
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `detalle_precio` decimal(10,0) NOT NULL
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
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`);

--
-- Indices de la tabla `venta_detalles`
--
ALTER TABLE `venta_detalles`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `id_mensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `id_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
