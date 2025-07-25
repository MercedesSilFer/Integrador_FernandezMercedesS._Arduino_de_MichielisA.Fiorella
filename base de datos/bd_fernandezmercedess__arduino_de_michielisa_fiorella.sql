-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-06-2025 a las 19:35:47
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
(1, 'Juan', 'Perez', 'popopop@gmail.com', 'qwertyuioiuyrfdadfxghjhbhhgfdSDSDHJKHGFDqrsrftshsbtsfdvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvhhljjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 0),
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
  `cuil_persona` bigint(11) NOT NULL,
  `email_persona` varchar(100) NOT NULL,
  `contrasena_persona` varchar(450) NOT NULL,
  `estado_persona` tinyint(1) NOT NULL,
  `domicilio_persona` varchar(50) NOT NULL,
  `telefono_persona` varchar(20) NOT NULL,
  `id_perfil` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_persona`, `nombre_persona`, `apellido_persona`, `cuil_persona`, `email_persona`, `contrasena_persona`, `estado_persona`, `domicilio_persona`, `telefono_persona`, `id_perfil`) VALUES
(8, 'Mariana', 'Martínez', 27234564450, 'mariana@gmail.com', '$2y$10$ncmAQBk/AqgxzrpuNW76UOpyX4OUOCZkiQWH9aLpu9.aHiQn7P6hi', 1, 'San Juan 345', '0', 2),
(9, 'Marcela', 'Martínez', 27433328731, 'marcela@gmail.com', '$2y$10$7c/TWJmtcGoipzsEu8/2w.XTYKz8yU6RU0SF4m1szjooQJhSl9ET6', 1, 'San Juan 349', '0', 2),
(12, 'Juan', 'Perez', 20414328238, 'juanperezadmin@gmail.com', '$2y$10$F6hZ2gIIf/1oviptDMPymu5oCjGc1WfiF9owKbvAj3ZgtN.CCB3pK', 1, '567 fffff', '12342342', 1),
(13, 'Mercedes', 'Fernández', 27474836470, 'mercedessilvana@gmail.com', '$2y$10$khXx4oHoun4QqWwKYGjj7OOrD4CuAfSQFF2KdupQzltnfm/chyCQW', 1, 'B° Cremonte', '0', 1),
(14, 'Franco', 'Rodriguez', 20474236478, 'franco23@gmail.com', '$2y$10$vBqHH3ZoqU84OmWS8.b.l.d1Lf6ETgHhV3.TxU.sr4VwS4Fcj5NDS', 1, 'San Lorenzo 3678', '0', 2),
(15, 'Hugo', 'Gonzalez', 20147483648, 'hugo@gmail.com', '$2y$10$oJUmtXJnZtJWSpeMD/zMoezC8WrQdlUBbRfsDHrIqF9bV6XOcnaou', 1, 'Uruguay 987', '0', 2),
(16, 'Hugo', 'Martínez', 20327457648, 'hugo2@gmail.com', '$2y$10$/VNeaP72dEfV7F.2l6d1C.0lBAFHp22i/O36iDrXWdtxROhJVZfHi', 1, 'Uruguay 987', '0', 2),
(17, 'Mariana', 'Fernández', 27147477640, 'mariana2@gmail.com', '$2y$10$3ZYfpYFcnrXy7o4YEeeTCOv5MfG.A5EVtHV67x4ToPlUfYGt3ojke', 1, 'San Lorenzo 3678', '+543794898711', 2),
(18, 'Ana', 'Gomez', 24474750470, 'anagomez@gmail.com', '$2y$10$RjS1OYZBbHxnfev9xhYZ0ec/c0r9kbk3d5rfqiazHCVKarHWbim4K', 1, 'calle 234', '+54362328955', 2),
(19, 'Pamela', 'Diaz', 27445326440, 'pameladiaz@gmail.com', '$2y$10$uj8O5Jisw6pUB9dF4meuqeY42hcNJABD0vcYjrtaZJMjvLN/ZSMie', 1, 'calle 2345', '+543795674523', 2);

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
(1, 'Clara ', 150000, 'Teñida color verde, cosida a mano.', 3, '1748615940_31ac526796b8a2014713.jpg', 7, 1),
(2, 'Pamela', 150000, 'Cartera XL teñida color negro, cosida a mano.', 3, '1748617793_8d8271aff58fd83f9cac.jpg', 28, 1),
(3, 'Elisa', 150000, 'Cartera XL cuero natural, cosida a mano.', 3, '1748617953_60f233cd8b08ff503376.jpg', 4, 1),
(4, 'Nadia', 150000, 'Cartera XL teñida azul, cosida a mano.', 3, '1748618027_146d787f9327a49651dd.jpg', 3, 1),
(5, 'Eusebia', 120000, 'Cartera cuero teñida marrón chocolate, cosida a mano.', 4, '1748618154_a3ce4bedca4b356688ac.jpg', 5, 1),
(6, 'Eusebia', 120000, 'Cartera cuero teñida color verde, bolsillo natural, cosida a mano.', 4, '1748618246_3fea4a369043f807cc92.jpg', 8, 1),
(7, 'Eusebia', 120000, 'Cartera cuero natural, cosida a mano.', 4, '1748618311_9a3d61b0bb060577c16f.jpg', 6, 1),
(8, 'Nora', 120000, 'Cartera cuero teñido, color negro, redonda, cosida a mano.', 4, '1748618437_ae8c7a54e966c810c774.jpg', 2, 1),
(9, 'Chiara', 110000, 'Mochila cuero teñido, color negro, cosida a mano.', 5, '1748618943_e70f41a48aa00a61d6cc.jpg', 4, 1),
(10, 'Chiara', 110000, 'Mochila cuero natural.', 5, '1748619023_39e8d0a26c1a1764c4ff.jpg', 3, 1),
(11, 'Carla', 180000, 'Portanotebook cuero teñido bordó.', 5, '1748619655_885591c008782fa64171.jpg', 8, 1),
(12, 'Mara', 60000, 'Riñonera cuero teñido metalizada.', 6, '1748620142_a2f1634a31d30ca20ffe.jpg', 5, 1),
(13, 'Andrea', 60000, 'Riñonera teñida metalizada combinada con cuero natural.', 6, '1748620214_ace04eeca9d71a15ffbb.jpg', 0, 1),
(14, 'Ana ', 60000, 'Riñonera cuero chocolate', 6, '1748620362_9493b210960ad4840620.jpg', 9, 1),
(15, 'Noemí', 130000, 'Bandolera cuero teñida color bordó con tira combinada natural.', 8, '1748620478_c0c07d1d111c2fd1b727.jpg', 9, 1),
(16, 'Ambar', 130000, 'Bandolera cuero teñido color negro.', 8, '1748620544_b4f4db67e29174840ab6.jpg', 13, 1),
(17, 'Alexa', 115000, 'Bandolera cuero natural.', 8, '1748621726_a0e62906db9be1b1a8e6.jpg', 15, 1),
(18, 'Candela', 150000, 'Bandolera redonda cuero teñido color negro.', 8, '1748621811_f3dc22c862f2d772cd79.jpg', 4, 1),
(19, 'Eleonora', 160000, 'Cartera XL teñida azul francia', 7, '1748621877_9060aaf7a8536b5f8c01.jpg', 8, 1),
(20, 'Priscila', 120000, 'Bandolera cuero teñido color amarillo.', 7, '1748621942_7695d7f48174abbf09d7.jpg', 3, 1),
(21, 'Viviana', 110000, 'Cartera redonda cuero teñida color rojo', 7, '1748622032_93f793bfd03c86c71f51.jpg', 2, 1),
(22, 'Eliana', 30000, 'Brazalete con aplicaciones cuero rojo.', 7, '1748622153_1de440d7afb03ae39090.jpg', 0, 1),
(23, 'Aldo', 80000, 'Maxi riñonera cuero natural', 6, '1748622238_d56513edd7df0b66b40d.png', 9, 1),
(24, 'Alina', 150000, 'Cartera XL de color verde claro', 3, '1750351951_a3c26d977a109fd5d4b3.jpg', 23, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `forma_de_pago` varchar(50) NOT NULL,
  `forma_de_envio` varchar(20) NOT NULL,
  `total_venta` decimal(10,0) NOT NULL,
  `venta_fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `id_persona`, `forma_de_pago`, `forma_de_envio`, `total_venta`, `venta_fecha`) VALUES
(1, 18, '', '', 150000, '2025-06-12'),
(2, 18, '', '', 30000, '2025-06-12'),
(3, 18, '', '', 30000, '2025-06-12'),
(4, 18, '', '', 30000, '2025-06-12'),
(6, 18, 'Tarjeta de Crédito', 'Envío a Domicilio', 30000, '2025-06-12'),
(7, 18, 'Tarjeta de Crédito', 'Envío a Domicilio', 30000, '2025-06-12'),
(11, 18, 'Tarjeta de Crédito', 'Envío a Domicilio', 150000, '2025-06-12'),
(12, 18, 'Tarjeta de Crédito', 'Envío a Domicilio', 150000, '2025-06-12'),
(13, 18, 'Tarjeta de Crédito', 'Envío a Domicilio', 210000, '2025-06-12'),
(14, 18, 'Tarjeta de Crédito', 'Envío a Domicilio', 250000, '2025-06-12'),
(15, 19, 'Tarjeta de Crédito', 'Envío a Domicilio', 1610000, '2025-06-12'),
(16, 18, 'Tarjeta de Crédito', 'Envío a Domicilio', 150000, '2025-06-15'),
(17, 18, 'Tarjeta de Crédito', 'Envío a Domicilio', 120000, '2025-06-15'),
(18, 18, 'Tarjeta de Crédito', 'Envío a Domicilio', 120000, '2025-06-15'),
(19, 18, 'Tarjeta de Crédito', 'Envío a Domicilio', 300000, '2025-06-17'),
(20, 19, 'Tarjeta de Débito', 'Retiro en Tienda', 490000, '2025-06-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_detalles`
--

CREATE TABLE `venta_detalles` (
  `id_detalle_venta` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `detalle_precio` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `venta_detalles`
--

INSERT INTO `venta_detalles` (`id_detalle_venta`, `id_venta`, `id_producto`, `cantidad`, `detalle_precio`) VALUES
(1, 1, 1, 1, 150000),
(2, 7, 22, 1, 30000),
(3, 7, 22, 1, 30000),
(4, 11, 3, 1, 150000),
(5, 11, 3, 1, 150000),
(6, 12, 3, 1, 150000),
(7, 12, 3, 1, 150000),
(8, 13, 4, 1, 150000),
(9, 13, 4, 1, 150000),
(10, 14, 16, 1, 130000),
(11, 14, 5, 1, 120000),
(12, 15, 2, 3, 150000),
(13, 15, 4, 1, 150000),
(14, 15, 8, 2, 120000),
(15, 15, 16, 5, 130000),
(16, 15, 13, 2, 60000),
(17, 16, 4, 1, 150000),
(18, 17, 6, 1, 120000),
(19, 18, 5, 1, 120000),
(20, 19, 2, 2, 150000),
(21, 20, 2, 2, 150000),
(22, 20, 16, 1, 130000),
(23, 20, 14, 1, 60000);

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
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `venta_detalles`
--
ALTER TABLE `venta_detalles`
  ADD PRIMARY KEY (`id_detalle_venta`),
  ADD KEY `id_venta` (`id_venta`),
  ADD KEY `id_producto` (`id_producto`);

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
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `venta_detalles`
--
ALTER TABLE `venta_detalles`
  MODIFY `id_detalle_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `id_persona` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_persona`);

--
-- Filtros para la tabla `venta_detalles`
--
ALTER TABLE `venta_detalles`
  ADD CONSTRAINT `id_producto` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`),
  ADD CONSTRAINT `id_venta` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id_venta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
