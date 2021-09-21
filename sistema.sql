-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-09-2021 a las 15:56:35
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(5) NOT NULL,
  `NombreCat` varchar(50) NOT NULL,
  `Descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `NombreCat`, `Descripcion`) VALUES
(1, 'Carnes y Embutidos', 'Usted dispondrá de la mejor selección de carnes de nuestras razas autóctonas. Ternera Avileña Negra Ibérica y cerdo Ibérico de nuestras dehesas. Una calidad reconocida internacionalmente de la que también se podrá disfrutar de la amplia selección de aves de corral.'),
(2, 'Frutas y Verduras', 'De producción nacional expresamente preparada. Una cuidada y selecta variedad de frutas y verduras directamente del agricultor a tu mesa.'),
(3, 'Panadería y Dulces', 'Para todos los gustos: de trigo, centeno, integral, cereales, panecillos, chocolate con chili, con fresas,… prueba los exclusivos productos y sorpréndete.\r\nSu elaboración se hace exclusivamente con harina , agua y sal marina sin aportar levaduras panarias, ni antimohos en el proceso de panificación.'),
(4, 'Conservas y Comida Preparada', 'Descubra la gran variedad, calidad y facilidad de los preparados ecológicos. Donde la rapidez no está reñida con la calidad.'),
(5, 'Zumos y Bebidas', 'Zumos elaborados de forma artesana que garantiza la máxima calidad y nos permite la conservación de todo su sabor y valor nutritivo. Zumos que aportan un mayor número de vitaminas naturales.\r\nDescubre la increíble calidad de los vinos ecológicos.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(5) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Cantidad` int(5) NOT NULL,
  `idCategoria` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `Nombre`, `Cantidad`, `idCategoria`) VALUES
(1, 'Chorizo Español', 5, 1),
(2, 'Salchichón Argentino', 8, 1),
(3, 'Jamón de York', 156, 1),
(4, 'Aguacate hass', 190, 2),
(5, 'Plátano Dominico ', 193, 2),
(6, 'Manzana Golden', 9340, 2),
(7, 'Pan Integral Premium', 234, 3),
(8, 'Dona de Chocolate Supreme', 123, 3),
(9, 'Panecillo de Chocolate con Chili', 737, 3),
(10, 'Pizza Congelada', 33, 4),
(11, 'Durazno en Almíbar', 50, 4),
(13, 'Piña en Almíbar', 90, 4),
(14, 'Jugo de Naranja', 90, 5),
(15, 'Vino de Uva', 993, 5),
(16, 'Juego de Manzana', 99, 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
