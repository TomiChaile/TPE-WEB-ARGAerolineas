-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2022 a las 22:08:31
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aerolineas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasaje`
--

CREATE TABLE `pasaje` (
  `id_pasaje` int(11) NOT NULL,
  `fecha` decimal(20,0) NOT NULL,
  `ida` varchar(20) NOT NULL,
  `vuelta` varchar(20) NOT NULL,
  `id_destino` int(11) NOT NULL,
  `precio` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pasaje`
--

INSERT INTO `pasaje` (`id_pasaje`, `fecha`, `ida`, `vuelta`, `id_destino`, `precio`, `nombre`) VALUES
(1, '2022', 'Buenos Aires-Cancun', 'Cancun-Buenos Aires ', 1, 2000, 'Cancun '),
(2, '2023', 'Buenos Aires - Islas', 'Islas Maldivas - Bue', 2, 5000, 'Islas Maldivas'),
(3, '2023', 'Buenos Aires - Rio D', 'Rio De Janeiro - Bue', 3, 700, 'Rio De Janeiro'),
(4, '2023', 'Buenos Aires - Paris', 'Paris - Buenos Aires', 4, 3500, 'Paris');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pasaje`
--
ALTER TABLE `pasaje`
  ADD PRIMARY KEY (`id_pasaje`),
  ADD KEY `FK_id_destino` (`id_destino`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pasaje`
--
ALTER TABLE `pasaje`
  MODIFY `id_pasaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pasaje`
--
ALTER TABLE `pasaje`
  ADD CONSTRAINT `pasaje_ibfk_1` FOREIGN KEY (`id_destino`) REFERENCES `destinos` (`id_destino`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
