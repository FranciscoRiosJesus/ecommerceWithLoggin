-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-09-2019 a las 23:41:59
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `product_id` int(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `quantity` int(255) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `quantity`, `description`, `price`) VALUES
(1, 'Oculus Rift + Touch', 5, 'Kit Oculus Rift + Oculus Touch + 2 Sensores\r\n\r\nPantalla OLED 2160×1200 px.\r\nTasa de refresco de 90 fps.\r\nAngulo de visión: 110º.\r\nÁrea de seguimiento: 1,5 x 3,3 m.\r\nSensores de funcionamiento: Acelerómetro, giroscopio, magnetómetro y sistema posicional 360 grados.\r\nPeso: 470g', 89000),
(2, 'htc vive kit', 5, '• Pantalla: OLED\r\n• Resolucion: 2160 x 1200 px\r\n• Tasa de refresco: 90Hz\r\n• Plataforma: SteamVR\r\n• Campo de visión: 110 grados\r\n• Area de seguimiento: 4.5x4.5 m\r\n• Audio integrado: Si, conector minijack\r\n• Microfono integrado: Si\r\n• Mandos para juegos: Mandos HTC Vive (incluidos) / Mando SteamVR / Cualquier gamepad de PC\r\n• Sensores: Acelerómetro, giróscopo, doble sistema de posición láser (36 sensores gafas, 24 sensores cada mando), cámara frontal\r\n• Conexiones: HDMI, USB 2.0, USB 3.0', 81900);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
