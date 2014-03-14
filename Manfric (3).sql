-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 02-04-2012 a las 10:38:07
-- Versión del servidor: 5.5.20
-- Versión de PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `Manfric`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Empleado`
--

CREATE TABLE IF NOT EXISTS `Empleado` (
  `Nombre` text NOT NULL,
  `Apellido` text NOT NULL,
  `Edad` int(2) NOT NULL,
  `Sexo` varchar(1) NOT NULL,
  `Cedula` varchar(12) NOT NULL,
  `FechaNac` date NOT NULL,
  `Foto` text,
  `Departamento` text NOT NULL,
  `Cargo` text NOT NULL,
  `FechaIng` date NOT NULL,
  `PeriodoPrueba` text,
  `Operario` text,
  `Comentarios` text,
  PRIMARY KEY (`Cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Empleado`
--

INSERT INTO `Empleado` (`Nombre`, `Apellido`, `Edad`, `Sexo`, `Cedula`, `FechaNac`, `Foto`, `Departamento`, `Cargo`, `FechaIng`, `PeriodoPrueba`, `Operario`, `Comentarios`) VALUES
('Buenas', 'Tardes', 0, 'F', '18536933', '1965-10-08', 'C:\\fakepath\\l-50758.jpg', 'asd', 'asd', '2011-12-19', 'Si', 'No', 'das'),
('Victor', 'Rivas', 21, 'M', '19834637', '1990-04-09', NULL, 'Informática', 'Gerente del departamento de informática', '2011-12-15', NULL, NULL, NULL),
('JosÃ©', 'Reyna', 1, 'M', '19856666', '1990-10-02', 'C:\\fakepath\\Mivelocidad.png', 'InformÃ¡tica', 'Desarrollador', '2011-12-17', 'Si', 'No', 'asda'),
('Miguel', 'Rivas', 1, 'M', '21202570', '1993-10-07', 'C:\\fakepath\\l-50758.jpg', 'Mecanica', 'Gerente', '2011-12-17', 'Si', 'No', 'asd'),
('Vc', 'Rv', 0, 'M', '556545', '1955-08-10', 'C:\\fakepath\\l-50758.jpg', 'asdf', 'sdf', '2011-12-17', 'Si', 'No', 'sdf'),
('Nestor', 'Rivas', 1, 'M', '6374681', '1961-02-26', 'C:\\fakepath\\cu.png', 'Todos', 'Gerente', '2011-12-17', 'Si', 'No', 'asd'),
('Blanca', 'Aguirre', 1, 'F', '8095385', '1963-04-02', 'C:\\fakepath\\VelocidadoO.png', 'Mercadeo', 'Gerente', '2011-12-17', 'Si', 'No', 'asd'),
('oi', 'oij', 0, 'M', '96', '1950-01-01', 'C:\\fakepath\\broadcom-wl-4.150.10.5.tar.bz2', 'lsjdf', 'uoh', '2011-12-26', 'No', 'Si', 'dfsd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EntradasEmergentesInventarioInsumo`
--

CREATE TABLE IF NOT EXISTS `EntradasEmergentesInventarioInsumo` (
  `codigoEEII` int(11) NOT NULL AUTO_INCREMENT,
  `codigoInsumo` varchar(4) NOT NULL,
  `Cantidad` double NOT NULL,
  `Fecha` text NOT NULL,
  `Mes` int(2) NOT NULL,
  `Ano` int(4) NOT NULL,
  PRIMARY KEY (`codigoEEII`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Volcado de datos para la tabla `EntradasEmergentesInventarioInsumo`
--

INSERT INTO `EntradasEmergentesInventarioInsumo` (`codigoEEII`, `codigoInsumo`, `Cantidad`, `Fecha`, `Mes`, `Ano`) VALUES
(1, '2', 1, '24-01-2012 09:03:56', 1, 2012),
(2, '2', 10, '24-01-2012 09:05:37', 1, 2012),
(3, '4', 50000, '28-01-2012 13:53:00', 1, 2012),
(4, '3', 70000, '28-01-2012 14:06:26', 1, 2012),
(5, '6', 1, '29-01-2012 12:27:54', 1, 2012),
(6, '6', 3238, '29-01-2012 12:28:51', 1, 2012),
(7, '3', 1, '29-01-2012 12:30:27', 1, 2012),
(8, '3', 258229, '29-01-2012 12:31:29', 1, 2012),
(9, '3', 60339, '29-01-2012 14:29:06', 1, 2012),
(10, '6', 9160, '29-01-2012 14:29:43', 1, 2012),
(11, '6', 20000, '29-01-2012 14:33:07', 1, 2012),
(12, '6', 291598, '29-01-2012 14:44:48', 1, 2012),
(13, '3', 2910598, '29-01-2012 14:45:36', 1, 2012),
(14, '6', 64802, '29-01-2012 16:10:54', 1, 2012),
(15, '3', 646802, '29-01-2012 16:11:27', 1, 2012),
(16, '5', 75101, '29-01-2012 16:12:37', 1, 2012),
(17, '5', 8346, '29-01-2012 16:13:46', 1, 2012),
(18, '2', 8876796, '29-01-2012 16:14:28', 1, 2012),
(19, '2', 2024406, '29-01-2012 16:15:08', 1, 2012),
(20, '6', 32076000, '29-01-2012 16:21:53', 1, 2012),
(21, '6', 2, '29-01-2012 16:23:02', 1, 2012),
(22, '7', 1000, '30-01-2012 18:03:46', 1, 2012),
(23, '7', 912, '30-01-2012 18:04:28', 1, 2012),
(24, '7', 867, '30-01-2012 18:05:03', 1, 2012),
(25, '7', 777, '30-01-2012 18:06:40', 1, 2012),
(26, '7', 597, '30-01-2012 18:12:19', 1, 2012),
(27, '7', 237, '30-01-2012 18:13:13', 1, 2012),
(28, '4', 6393, '30-01-2012 18:17:25', 1, 2012),
(29, '4', 7798, '30-01-2012 18:18:13', 1, 2012),
(30, '4', 7796, '30-01-2012 18:19:41', 1, 2012),
(31, '1', 2, '05-02-2012 17:42:22', 2, 2012),
(32, '7', 1, '05-02-2012 18:27:29', 2, 2012),
(33, '7', 1, '05-02-2012 18:28:18', 2, 2012),
(34, '7', 1, '05-02-2012 18:33:14', 2, 2012),
(35, '7', 1, '05-02-2012 18:33:14', 2, 2012),
(36, '7', 1, '05-02-2012 18:33:14', 2, 2012),
(37, '1', 1, '05-02-2012 20:13:10', 2, 2012),
(38, '1', 1, '05-02-2012 20:13:18', 2, 2012),
(39, '1', 1, '05-02-2012 20:14:43', 2, 2012),
(40, '1', 1, '05-02-2012 20:15:18', 2, 2012),
(41, '1', 1, '05-02-2012 20:15:51', 2, 2012),
(42, '1', 1, '05-02-2012 20:16:12', 2, 2012),
(43, '1', 1, '05-02-2012 20:19:48', 2, 2012),
(44, '1', 1, '05-02-2012 20:20:29', 2, 2012),
(45, '5', 1, '05-02-2012 20:30:36', 2, 2012),
(46, '5', 1, '05-02-2012 20:31:14', 2, 2012),
(47, '5', 1, '05-02-2012 20:42:16', 2, 2012),
(48, '3', 34888, '06-02-2012 09:29:02', 2, 2012),
(49, '4', 7792, '09-02-2012 10:41:12', 2, 2012),
(50, '4', 14, '09-02-2012 10:42:05', 2, 2012),
(51, '7', 388, '09-02-2012 11:33:08', 2, 2012),
(52, '7', 776, '09-02-2012 11:33:38', 2, 2012),
(53, '7', 186, '09-02-2012 11:34:31', 2, 2012),
(54, '7', 7830, '09-02-2012 11:35:23', 2, 2012),
(55, '4', 70200, '09-02-2012 11:36:27', 2, 2012),
(56, '7', 78300, '09-02-2012 11:36:56', 2, 2012),
(57, '3', 6566000, '09-02-2012 11:39:47', 2, 2012),
(58, '2', 66138056, '09-02-2012 11:40:48', 2, 2012),
(59, '8', 100, '11-02-2012 12:18:00', 2, 2012),
(60, '9', 100, '11-02-2012 12:18:16', 2, 2012),
(61, '10', 100, '11-02-2012 12:18:28', 2, 2012),
(62, '11', 100, '11-02-2012 12:18:38', 2, 2012),
(63, '12', 100, '11-02-2012 12:34:46', 2, 2012),
(64, '13', 100, '11-02-2012 15:35:28', 2, 2012),
(65, '13', 10, '11-02-2012 15:36:19', 2, 2012),
(66, '14', 100, '12-02-2012 16:27:43', 2, 2012),
(67, '13', 9, '12-02-2012 16:49:05', 2, 2012),
(68, '14', 19, '12-02-2012 16:49:18', 2, 2012),
(69, '13', 1, '12-02-2012 16:50:08', 2, 2012),
(70, '14', 1, '12-02-2012 16:50:17', 2, 2012);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EntradasEmergentesInventarioProducto`
--

CREATE TABLE IF NOT EXISTS `EntradasEmergentesInventarioProducto` (
  `codigoIPE` int(11) NOT NULL AUTO_INCREMENT,
  `codigoProducto` int(11) NOT NULL,
  `conceptoEntrada` varchar(400) NOT NULL,
  `cantidad` double NOT NULL,
  `fecha` varchar(12) NOT NULL,
  `mes` int(2) NOT NULL,
  `ano` int(4) NOT NULL,
  `formula` varchar(40) NOT NULL,
  PRIMARY KEY (`codigoIPE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Formula`
--

CREATE TABLE IF NOT EXISTS `Formula` (
  `CodigoFormula` int(11) NOT NULL AUTO_INCREMENT,
  `CodigoInsumo` int(11) NOT NULL,
  `CodigoProducto` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `tipoFormula` text NOT NULL,
  `nuevo` text NOT NULL,
  PRIMARY KEY (`CodigoFormula`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `Formula`
--

INSERT INTO `Formula` (`CodigoFormula`, `CodigoInsumo`, `CodigoProducto`, `Cantidad`, `tipoFormula`, `nuevo`) VALUES
(1, 2, 1, 76, 'E6013 --- 1', 'si'),
(2, 3, 1, 98, 'E6013 --- 1', 'si'),
(3, 2, 2, 76, 'E6013 --- 1', 'no'),
(4, 3, 2, 98, 'E6013 --- 1', 'no'),
(5, 2, 2, 76, 'E6013 3/32 --- 2', 'si'),
(6, 3, 2, 98, 'E6013 3/32 --- 2', 'si'),
(7, 4, 2, 78, 'E6013 3/32 --- 2', 'si'),
(8, 4, 2, 76, 'E6013 3/32 --- 3', 'si'),
(9, 2, 2, 8, 'E6013 3/32 --- 3', 'si'),
(10, 5, 3, 76, 'E7018 3/32 --- 3', 'si'),
(11, 3, 3, 98, 'E7018 3/32 --- 3', 'si'),
(12, 2, 3, 98, 'E7018 3/32 --- 3', 'si'),
(13, 5, 3, 76, 'E7018 3/32 --- 4', 'si'),
(14, 3, 3, 98, 'E7018 3/32 --- 4', 'si'),
(15, 2, 3, 9889, 'E7018 3/32 --- 4', 'si'),
(16, 6, 4, 324, 'tuitui --- 4', 'si'),
(17, 3, 4, 3234, 'tuitui --- 4', 'si'),
(18, 2, 5, 76, 't1 --- 5', 'si'),
(19, 3, 5, 98, 't1 --- 5', 'si'),
(20, 4, 5, 78, 't1 --- 5', 'si'),
(21, 7, 5, 87, 't1 --- 5', 'si'),
(22, 13, 6, 2, 'Nueva prueba con dos --- 6', 'si'),
(23, 14, 6, 2, 'Nueva prueba con dos --- 6', 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Insumos`
--

CREATE TABLE IF NOT EXISTS `Insumos` (
  `Nombre` text NOT NULL,
  `CodigoInsumo` int(11) NOT NULL AUTO_INCREMENT,
  `ExistenciaKg` double NOT NULL,
  `CostoBsKg` double NOT NULL,
  `Enero` double NOT NULL,
  `Febrero` double NOT NULL,
  `Marzo` double NOT NULL,
  `Abril` double NOT NULL,
  `Mayo` double NOT NULL,
  `Junio` double NOT NULL,
  `Julio` double NOT NULL,
  `Agosto` double NOT NULL,
  `Septiembre` double NOT NULL,
  `Octubre` double NOT NULL,
  `Noviembre` double NOT NULL,
  `Diciembre` double NOT NULL,
  `Ano` text,
  PRIMARY KEY (`CodigoInsumo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `Insumos`
--

INSERT INTO `Insumos` (`Nombre`, `CodigoInsumo`, `ExistenciaKg`, `CostoBsKg`, `Enero`, `Febrero`, `Marzo`, `Abril`, `Mayo`, `Junio`, `Julio`, `Agosto`, `Septiembre`, `Octubre`, `Noviembre`, `Diciembre`, `Ano`) VALUES
('Rutilo', 1, 8, 78, 7678, 7680, 6, 876, 786, 89, 89, 78, 98778, 6, 9876, 86, '2012'),
('Celulosa', 2, 87, 6, 10901213, 77039269, 8, 7896, 87, 98, 789, 7, 98798, 7, 987, 97, '2012'),
('P Hierro', 3, 8, 8767, 3945969, 10546857, 78, 97, 987, 897, 8, 787, 687, 67, 687, 678, '2012'),
('asd', 4, 6, 897, 71987, 149993, 687, 68, 678, 68, 76, 786, 876, 798, 9, 87, '2012'),
('Papel', 5, 98, 877, 83447, 83450, 9, 9, 9887, 87, 87, 87, 989, 89, 8787, 78, '2012'),
('prueba', 6, 87, 85, 32464801, 65, 65, 46, 45, 46, 5456, 465, 46, 546, 465, 45, '2012'),
('g1', 7, 98, 787, 4390, 91871, 676, 87, 7, 8, 6, 78, 678, 6, 778, 6, '2012'),
('uno', 8, 1, 1, 1, 101, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, '2012'),
('dos', 9, 1, 1, 1, 101, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, '2012'),
('tres', 10, 1, 1, 1, 101, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, '2012'),
('cuatro', 11, 1, 1, 1, 101, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, '2012'),
('cinco', 12, 1, 1, 1, 101, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, '2012'),
('seis', 13, 1, 1, 1, 120, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, '2012'),
('siete', 14, 1, 1, 1, 120, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, '2012');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `InventarioInsumoDefinitivo`
--

CREATE TABLE IF NOT EXISTS `InventarioInsumoDefinitivo` (
  `codigoIID` int(11) NOT NULL AUTO_INCREMENT,
  `codigoIisumo` varchar(5) NOT NULL,
  `Ano` int(11) NOT NULL,
  `Enero` double NOT NULL,
  `Febrero` double NOT NULL,
  `Marzo` double NOT NULL,
  `Abril` double NOT NULL,
  `Mayo` double NOT NULL,
  `Junio` double NOT NULL,
  `Julio` double NOT NULL,
  `Agosto` double NOT NULL,
  `Septiembre` double NOT NULL,
  `Octubre` double NOT NULL,
  `Noviembre` double NOT NULL,
  `Diciembre` double NOT NULL,
  PRIMARY KEY (`codigoIID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `InventarioInsumoEntrada`
--

CREATE TABLE IF NOT EXISTS `InventarioInsumoEntrada` (
  `codigoIIE` int(11) NOT NULL AUTO_INCREMENT,
  `codigoInsumo` varchar(5) NOT NULL,
  `Ano` int(11) NOT NULL,
  `Enero` double DEFAULT NULL,
  `Febrero` double DEFAULT NULL,
  `Marzo` double DEFAULT NULL,
  `Abril` double DEFAULT NULL,
  `Mayo` double DEFAULT NULL,
  `Junio` double DEFAULT NULL,
  `Julio` double DEFAULT NULL,
  `Agosto` double DEFAULT NULL,
  `Septiembre` double DEFAULT NULL,
  `Octubre` double DEFAULT NULL,
  `Noviembre` double DEFAULT NULL,
  `Diciembre` double DEFAULT NULL,
  PRIMARY KEY (`codigoIIE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `InventarioInsumoSalida`
--

CREATE TABLE IF NOT EXISTS `InventarioInsumoSalida` (
  `codigoIIS` int(11) NOT NULL AUTO_INCREMENT,
  `codigoInsumo` varchar(5) NOT NULL,
  `Ano` int(11) NOT NULL,
  `Enero` double NOT NULL,
  `Febrero` double NOT NULL,
  `Marzo` double NOT NULL,
  `Abril` double NOT NULL,
  `Mayo` double NOT NULL,
  `Junio` double NOT NULL,
  `Julio` double NOT NULL,
  `Agosto` double NOT NULL,
  `Septiembre` double NOT NULL,
  `Octubre` double NOT NULL,
  `Noviembre` double NOT NULL,
  `Diciembre` double NOT NULL,
  PRIMARY KEY (`codigoIIS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Operación`
--

CREATE TABLE IF NOT EXISTS `Operación` (
  `Cedula` varchar(12) NOT NULL,
  `Fecha de registro` date NOT NULL,
  `Codigo maquina` int(11) NOT NULL,
  `Horas hombre` int(11) NOT NULL,
  PRIMARY KEY (`Cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `OrdenProduccion`
--

CREATE TABLE IF NOT EXISTS `OrdenProduccion` (
  `codigoOrdenProduccion` int(11) NOT NULL AUTO_INCREMENT,
  `CodigoProducto` varchar(5) NOT NULL,
  `Fecha` text NOT NULL,
  `Cantidad` double NOT NULL,
  `Estado` varchar(1) NOT NULL,
  `Mes` text NOT NULL,
  `Ano` int(4) NOT NULL,
  `comentariosCreacion` text,
  `comentariosLiquidacion` text,
  `produccionReal` double DEFAULT NULL,
  `Formula` text NOT NULL,
  PRIMARY KEY (`codigoOrdenProduccion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `OrdenProduccion`
--

INSERT INTO `OrdenProduccion` (`codigoOrdenProduccion`, `CodigoProducto`, `Fecha`, `Cantidad`, `Estado`, `Mes`, `Ano`, `comentariosCreacion`, `comentariosLiquidacion`, `produccionReal`, `Formula`) VALUES
(1, '1', '24-01-2012 09:01:49', 56, 'A', '01', 2012, '', NULL, NULL, ''),
(2, '2', '24-01-2012 09:02:30', 76, 'A', '01', 2012, '', NULL, NULL, ''),
(3, '3', '25-01-2012 16:58:30', 78, 'A', '01', 2012, '', NULL, NULL, ''),
(5, '2', '26-01-2012 06:56:57', 567, 'A', '01', 2012, 'asddd', NULL, NULL, 'E6013 3/32 --- 2'),
(6, '3', '26-01-2012 07:16:54', 98, 'A', '01', 2012, 'kgi', NULL, NULL, 'E7018 3/32 --- 4'),
(7, '4', '29-01-2012 14:36:40', 10, 'A', '01', 2012, 'sd', NULL, NULL, 'tuitui --- 4'),
(8, '4', '29-01-2012 14:36:52', 10, 'A', '01', 2012, 'dsf', NULL, NULL, 'tuitui --- 4'),
(9, '4', '29-01-2012 14:37:17', 30, 'A', '01', 2012, 'dfsa', NULL, NULL, 'tuitui --- 4'),
(10, '4', '29-01-2012 14:37:40', 50, 'A', '01', 2012, 'tr', NULL, NULL, 'tuitui --- 4'),
(11, '4', '29-01-2012 14:38:19', 100, 'A', '01', 2012, 'tr', NULL, NULL, 'tuitui --- 4'),
(12, '5', '30-01-2012 17:59:03', 12, 'A', '01', 2012, 'hjj', NULL, NULL, 't1 --- 5'),
(13, '5', '30-01-2012 18:04:10', 11, 'A', '01', 2012, 'gf', NULL, NULL, 't1 --- 5'),
(14, '5', '30-01-2012 18:04:42', 11, 'A', '01', 2012, 'dsf', NULL, NULL, 't1 --- 5'),
(15, '5', '30-01-2012 18:05:13', 11, 'A', '01', 2012, 'sdf', NULL, NULL, 't1 --- 5'),
(16, '5', '30-01-2012 18:06:50', 11, 'A', '01', 2012, 'sdf', NULL, NULL, 't1 --- 5'),
(17, '2', '30-01-2012 18:17:06', 100, 'A', '01', 2012, 'sdf', NULL, NULL, 'E6013 3/32 --- 2'),
(18, '2', '30-01-2012 18:17:39', 100, 'A', '01', 2012, 'sdf', NULL, NULL, 'E6013 3/32 --- 2'),
(19, '2', '30-01-2012 18:18:32', 100, 'A', '01', 2012, 'kg', NULL, NULL, 'E6013 3/32 --- 2'),
(20, '6', '12-02-2012 16:51:47', 60, 'A', '02', 2012, 'ij', NULL, NULL, 'Nueva prueba con dos --- 6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ProductoT`
--

CREATE TABLE IF NOT EXISTS `ProductoT` (
  `Nombre` text NOT NULL,
  `CodigoProducto` int(5) NOT NULL AUTO_INCREMENT,
  `Ano` text NOT NULL,
  `Enero` double NOT NULL,
  `Febrero` double NOT NULL,
  `Marzo` double NOT NULL,
  `Abril` double NOT NULL,
  `Mayo` double NOT NULL,
  `Junio` double NOT NULL,
  `Julio` double NOT NULL,
  `Agosto` double NOT NULL,
  `Septiembre` double NOT NULL,
  `Octubre` double NOT NULL,
  `Noviembre` double NOT NULL,
  `Diciembre` double NOT NULL,
  PRIMARY KEY (`CodigoProducto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `ProductoT`
--

INSERT INTO `ProductoT` (`Nombre`, `CodigoProducto`, `Ano`, `Enero`, `Febrero`, `Marzo`, `Abril`, `Mayo`, `Junio`, `Julio`, `Agosto`, `Septiembre`, `Octubre`, `Noviembre`, `Diciembre`) VALUES
('E6013', 1, '2012', 786, 786, 876, 876, 87, 656, 56, 576, 56, 757, 65, 78),
('E6013 3/32', 2, '2012', 876, 87, 877, 6, 786, 78, 6, 78, 687, 6, 7867, 8),
('E7018 3/32', 3, '2012', 867, 88, 78, 786, 86, 7, 6, 7, 67, 6565, 76, 5),
('tuitui', 4, '2012', 213, 78, 576, 576, 5, 7868, 68, 576, 57, 5, 657, 5),
('t1', 5, '2012', 87, 65, 75, 76, 567, 57, 67, 656, 7675, 76, 6776, 6),
('Nueva prueba con dos', 6, '2012', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE IF NOT EXISTS `Usuarios` (
  `Cedula` varchar(12) NOT NULL,
  `Permisos` int(11) NOT NULL,
  `Contrasena` text NOT NULL,
  PRIMARY KEY (`Cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`Cedula`, `Permisos`, `Contrasena`) VALUES
('19834637', 2, '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
