-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2022 a las 15:56:59
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_motos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especificación`
--

CREATE TABLE `especificación` (
  `id_especificacion` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `cilindrada` varchar(50) NOT NULL,
  `potencia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `especificación`
--

INSERT INTO `especificación` (`id_especificacion`, `descripcion`, `cilindrada`, `potencia`) VALUES
(0, 'La Continental GT 650 celebra un estilo único que jamás va a desaparecer', '648 CM3 Bicilíndrico', '47 bph @7100 rpm'),
(1, 'La nueva Interceptor 650, gracias a su diseño único y atemporal, es una moto que siempre estará vigente, se robará todas las miradas a donde quiera que vayas, con suficiente potencia como para sacarte', '648 CM3 BICILÍNDRICO EN PARALERO', '47 bph @7100 RPM'),
(2, 'Himalayan es una de las motos de Royal Enfield más vendidas a nivel mundial, la diseñamos para recorrer el mundo entero, es perfecta para esos aventureros que necesitan moverse en el día a día a sus l', '411 CC SINGLE CYLINDER', '24.5 bph @6500 RPM'),
(3, 'La Meteor 350 con una característica carrera larga y un sistema de inyección electrónica que produce una potencia suave y manejable y un excelente torque. ', '349 CC MONOCILÍNDRICO SOHC', '20. 2 BHP @6100 RPM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(20) UNSIGNED NOT NULL,
  `modelo` varchar(200) NOT NULL,
  `precio` double NOT NULL,
  `color` varchar(200) NOT NULL,
  `stock` int(11) NOT NULL,
  `id_especificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `modelo`, `precio`, `color`, `stock`, `id_especificacion`) VALUES
(1, 'Continental GT 650', 1.6, 'British Racing Green', 1, 0),
(2, 'Continental GT 650', 1.6, 'Rocker Red', 1, 0),
(3, 'Continental GT 650', 1.6, 'Dux Deluxe', 2, 0),
(4, 'Meteor 350', 1.4, 'Fireball Red', 1, 3),
(6, 'Meteor 350', 1.2, 'Stellar Blue', 1, 3),
(7, 'Himalayan', 1.6, 'Granite', 2, 2),
(8, 'Himalayan', 1.6, 'Pine Green', 1, 2),
(9, 'Interceptor 650', 1.5, 'Orange Crush', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `especificación`
--
ALTER TABLE `especificación`
  ADD KEY `Id_Especificación` (`id_especificacion`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD UNIQUE KEY `Id_Producto` (`id_producto`),
  ADD KEY `Id_Especificación` (`id_especificacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_especificacion`) REFERENCES `especificación` (`id_especificacion`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
