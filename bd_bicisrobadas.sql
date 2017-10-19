-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2017 a las 17:47:45
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_bicisrobadas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anunci`
--

CREATE TABLE `anunci` (
  `anu_id` int(4) NOT NULL,
  `anu_titol` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `anu_data_anunci` date NOT NULL,
  `anu_data_robatori` date NOT NULL,
  `anu_ubicacio_robatori` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `anu_descripcio_robatori` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `anu_marca` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `anu_model` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `anu_color` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `anu_antiguitat` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `anu_descripcio` text COLLATE utf8_spanish_ci NOT NULL,
  `anu_numero_serie` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `anu_foto` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `anu_compensacio` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `anunci`
--

INSERT INTO `anunci` (`anu_id`, `anu_titol`, `anu_data_anunci`, `anu_data_robatori`, `anu_ubicacio_robatori`, `anu_descripcio_robatori`, `anu_marca`, `anu_model`, `anu_color`, `anu_antiguitat`, `anu_descripcio`, `anu_numero_serie`, `anu_foto`, `anu_compensacio`) VALUES
(1, 'Bici1', '2017-10-18', '2017-10-01', 'El Prat de Llobregat', 'Me robaron en Sant Cosme a punta de cuchillo', 'Specialized', '3500', 'Azul', '2 meses', 'Es Azul y me la robaron', NULL, '', '50.32'),
(2, 'Bici2', '2017-10-08', '2017-10-05', 'Manresa', 'Fue un hurto, me la robaron cuando estaba trabajando', 'Shimano', 'M430', 'Gris', '3 meses', 'El manillar original estaba roto y lo remplace por uno nuevo de color verde', '1000', '', '40.25'),
(3, 'Bici3', '2017-10-05', '2017-08-14', 'Girona', 'Un falagista me robo la bici por la unidad de España.', 'Shimano', 'Acera', 'Blanca', '1 año', 'El sillin esta algo roto y tiene un parche de spiderman', 'M450', '', '80.55'),
(4, 'Bici4', '2017-10-11', '2017-09-08', 'Madrid', 'Un catalan independentista me robo la bici amenazandome con una estelada-espada', 'Shimano', 'Atlus', 'Negra', '3 meses', 'Esta algo rallada por la parte delantera', NULL, '', '76.55'),
(5, 'Bici5', '2017-10-03', '2017-10-01', 'El Papiol', 'Me robaron la bici a punta de pistola', 'Shimano', 'Shimano Claris', 'Azul', '2 meses', 'Esta algo rallada por la parte trasera', '4356', '', '50.01'),
(6, 'Bici6', '2017-09-27', '2017-09-01', 'Sevilla', 'Me robaron la bici mientras pescaba lenguados', 'Shimano', 'Sora', 'negra', '1 Año', 'Tiene las ruedas nuevas', '2400', '', '20.56'),
(7, 'Bici7', '2017-10-16', '2017-10-15', 'Valencia', 'Me fui a hacer una paella y unos falanistas cantando cara al sol me robaron la bici por la unidad de España', 'Shimano', 'Tiara', 'Marron', '1 mes', 'El manillar es nuevo', '4700', '', '1.09'),
(8, 'Bici8', '2017-10-10', '2017-10-01', 'Pamplona', 'Fui a un San Fermin y me di cuenta que mi bici habia sido hurtada', 'Specialized', 'Connor', 'Negro', '1 Año', 'Una bici muy bonita que me robaron con su manillar recien montado', '6700', '', '99.99'),
(9, 'Bici9', '2017-10-18', '2017-08-08', 'Santander', 'Me robaron la bici rompiendo el candado a la fuerza', 'Specialized', 'Turbo Kenevo', 'Azul marino', '4 meses', 'La bici tiene un sillin negro', '5500', '', '54.55'),
(10, 'Bici10', '2017-01-02', '2017-05-01', 'El Prat de Llobregat', 'Fui a Sant Cosme y sali sin bici', 'Specialized', 'Stumpjumper FSR', 'Blanco', '6 Meses', 'Es una gran bici con su sillin verde', '435', '', '79.98'),
(11, 'Bici11', '2017-03-08', '2017-06-24', 'Hospitalet de Llobregat', 'Fui a comprar tabaco y cuando sali no estaba', 'Specialized', 'Fatboy', 'Gris', '8 Meses', 'Es una gran bici con el sillin rojo', '456', '', '75.56'),
(12, 'Bici12', '2017-10-19', '2017-10-01', 'Cornellà de Llobregat', 'Estaba comprando en el Splau y un hincha del Español me la robo', 'Specialized', 'Enduro', 'Negra', '5 Meses', 'Esa bici me la regalo mi madre por mi 18 cumpleños y significa mucho para mi', '3245', '', '80.00'),
(13, 'Bici13', '2017-02-18', '2017-08-05', 'Sant Boi de Llobregat', 'Cuando baje a cojer la bici para ir a trabajar no estaba', 'Specialized', 'P.Series', 'Rojo', '9 Meses', 'Tenia un rallote cerca del sillin', '3945', '', '76.95'),
(14, 'Bici14', '2017-04-08', '2017-06-02', 'Valladolid', 'Mi bici me la robaron, estando de romería\r\nMi bici me la robaron, de noche cuando dormía', 'Shimano', 'Conor', 'Verde', '4 meses', 'El sillon es viejo porque el original se rompio en unn accidente', '6750', '', '76.99'),
(15, 'Bici15', '2017-02-18', '2017-07-09', 'Zaragoza', 'Un politico de la CUP me la robo para financiar la creación de la Republica Catalana', 'Shimano', 'Deore', 'Gris', '8 meses', 'La rueda delantera es nueva porque se me pincho hace 3 meses', '6720', '', '55.54'),
(16, 'Bici16', '2017-10-10', '2017-10-18', 'Barcelona', 'Albert Rivera me robo la bici porque estoy a favor de un referendum', 'Merida', 'Cyclo Cross 100', 'Blanco', '7 meses', 'Estaba firmada por mi abuela', '5646', '', '99.99'),
(17, 'Bici17', '2017-09-12', '2017-10-05', 'Madrid', 'Rajoy me robo la bici porque segun el era inconstitucional que tubiese una bici', 'Merida', 'Cyclo Cross 200', 'Blanco', '3 meses', 'Recien salida de la fabrica', '5656', '', '90.50'),
(18, 'Bici18', '2017-10-09', '2017-10-02', 'Lleida', 'Sali de trabajar y  la bici que habia aparcado no estaba', 'Shimano', 'SLX', 'Blanco', '3 meses', 'El sillon esta medio roto por un  accidennte que sufri', '5674', '', '78.00'),
(19, 'Bici19', '2017-05-09', '2017-04-06', 'Alicante', 'Tras varios robos de bicis, me han robado la mia', 'Shimano', 'XTR', 'Blanco', '3 meses', 'Las ruedas estan nuevas', 'M9000', '', '72.00'),
(20, 'Bici20', '2017-10-02', '2017-10-07', 'Toledo', 'Me robaron la bici a punta de pistola ', 'Merida', 'Reacto 300', 'Negro', '9 meses', 'Esta  bici esta muy bien conservada aunque tenga un par de rallotes cerca del manillar', '4566', '', '65.67'),
(21, 'Bici21', '2017-10-04', '2017-09-01', 'Bilbao', 'Mientras estaba viendo al Athletic me robaron la bici', 'Specialized', 'Demo', 'Purura', '1 mes', 'El manilar esta suelto por defecto de fabricacón', '4335', '', '56.99'),
(22, 'Bici22', '2017-10-17', '2017-08-06', 'Logroño', 'Volvi de dejar a mi hijo en el colegio y cuando volvi la bici no estaba', 'Specialized', 'Pitch', 'Rojo', '11 meses', '', '4335', '', '58.66'),
(23, 'Bici23', '2017-10-03', '2017-10-01', 'Pamplona', 'Unos carlistas robaron mi bici para financiar su partido', 'Shimano', 'Acera', 'Negro', '1 año', 'La bici tiene un pinchazo en la rueda trasera', '4655', '', '67.55'),
(24, 'Bici24', '2017-08-03', '2017-07-01', 'Murcia', 'Me robaron la bici rompiendo el candado cuando estaba en la academia de ingles', 'Shimano', 'Acera', 'Negro', '1 año', 'La bici tiene un pinchazo en la rueda delantera', '4855', '', '35.88'),
(25, 'Bici25', '2017-05-07', '2017-03-07', 'Palma de Mayorca', 'La CUP me robo la bici para financiar la Republica Catalana', 'Merida', 'Scultura 200', 'Azul', NULL, 'El sillin es negro y el manillar tiene un rallote en el lado derecho', '6475', '', '98.95'),
(26, 'Bici26', '2017-09-01', '2017-06-05', 'Ceuta', 'Fui de viaje a Barcelona y tras volver la bici no estaba', 'Shimano', 'Deore', 'Gris', '4 meses', 'El sillin por el uso esta muy desgastado', '476', '', '67.78'),
(27, 'Bici27', '2017-04-01', '2017-02-05', 'Madrid', 'Rajoy me robo la bici y Pedro Sanchez se ha abstenido a ayudarme', 'Shimano', 'Altus', 'Verde', '13 meses', 'El manillar es nuevo porque el original se rompio', '4566', '', '78.25'),
(28, 'Bici28', '2017-10-09', '2017-10-03', 'Valencia', 'Tras volver de trabajar no estaba la bici', 'Shimano', 'Altus', 'Rojo', '5 meses', 'El sillin es de color rojo', '4654', '', '45.66'),
(29, 'Bici29', '2017-09-09', '2017-08-03', 'Madird', 'Tras ir a buscar a mi hija la bici no estaba', 'Shimano', 'Acera', 'Gris', '9 meses', 'El sillin es de color azull con un parche de Juego de Tronos', '6554', '', '50.60'),
(30, 'Bici30', '2017-10-17', '2017-10-01', 'El Prat de Llobregat', 'Mientras estaba mirando como aterrizaba el avion me robaron la bici', 'Shimano', 'XTR', 'Negro', '1 año', 'Tenia el manillar rojo', '4564', '', '92.50');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anunci`
--
ALTER TABLE `anunci`
  ADD PRIMARY KEY (`anu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anunci`
--
ALTER TABLE `anunci`
  MODIFY `anu_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
