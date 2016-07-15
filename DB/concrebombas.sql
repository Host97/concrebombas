-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2016 a las 19:51:12
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `concrebombas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bombas`
--

CREATE TABLE IF NOT EXISTS `bombas` (
  `idBombas` tinyint(2) NOT NULL AUTO_INCREMENT COMMENT 'Numero asignado de manera autoincrementable a cada bomba.',
  `Titulo` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Titulo representativo de la bomba, este se muestra en la sección de portafolio del aplicativo.',
  `ReferenciaBomba` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Este es un código que referencia una bomba en específico.',
  `Nombre` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Este es el nombre que recibe la bomba.',
  `Motor` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'El tipo de motor que utiliza la bomba.',
  `MetrosBombeables` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'La cantidad de metros que puede bombear la respectiva bomba.',
  `Descripcion` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Una pequeña descripción de la bomba.',
  `ImagenBomba` varchar(245) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Foto de la bomba.',
  `PrecioBomba` double NOT NULL COMMENT 'El valor que tiene el alquiler de la bomba.',
  `relacionar` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Campo que relaciona las distintas tablas.',
  `activo` tinyint(1) NOT NULL COMMENT 'Valor que define si es o no visible la información en el aplicativo.',
  PRIMARY KEY (`idBombas`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `bombas`
--

INSERT INTO `bombas` (`idBombas`, `Titulo`, `ReferenciaBomba`, `Nombre`, `Motor`, `MetrosBombeables`, `Descripcion`, `ImagenBomba`, `PrecioBomba`, `relacionar`, `activo`) VALUES
(1, 'Bomba Roja Serie A RockMaister', 'A12', 'Bomba Estacionaria A', 'Gasolina Perkins 61kW', '30', 'Esta Bomba De Concreto cuenta con un poderoso motor de 82hp (61 kw) el cual es el mejor de su clase y nos da la versatilidad de bombear mezclas asperas y lanzar concreto y bombeando agregado grande en obra civil.', 'Imagenes\\Concrebombas_files\\roja.jpg', 65000, '1', 1),
(2, 'Bomba Amarilla Serie C', 'C50', 'Bomba Estacionaria C', 'Diesel de Cummins 164Kw', '50', 'Esta Bomba De Concreto se distingue el sistema hidráulico de “Circuito Cerrado”, control de ciclos de estado sólido, doble eje y cilindros de doble cambio. Estas bombas de alto rendimiento superan cualquier trabajo aún bajo las condiciones extremas.', 'Imagenes\\Concrebombas_files\\BOMBA AMARILLA.jpg', 68000, '1', 1),
(3, 'Bomba Azul Serie B', 'YK40', 'Bomba estacionaria B', 'DiéselCummins 82kW', '38', 'Esta Bomba De Concreto se distingue el sistema hidráulico de "Circuito Abierto" y bomba de pistones de caudal variable. Motor diésel Cummins más potente (alto torque), operación más silenciosa, y más eficiente (RPM reducido).', 'Imagenes\\Concrebombas_files\\BOMBA AZUL.jpg', 70000, '1', 1),
(4, 'AutoBomba Verde 35m', '36X', 'AUTOBOMBA 35m', 'Diesel', '95', 'Los cielos rasos de baja altura y la colocación de concreto inusual no representan un desafío para la versatilidad de esta AutoBomba.', 'Imagenes\\Concrebombas_files\\Autobomba5.jpg', 212000, '1', 1),
(5, 'AutoBomba Naranja 38m', 'S395X', 'AUTOBOMBA 38m', 'Diesel', '136', 'Esta autobomba de cuatro o cinco secciones puede maniobrarse fácilmente alrededor de obstáculos para lograr la máxima extensión y flexibilidad posibles.', 'Imagenes\\Concrebombas_files\\Naranja.jpg', 280000, '1', 1),
(6, 'AutoBomba Azul 45m', 'S435x', 'AUTOBOMBA 45m', 'Diesel', '140', 'Contamos con una máquina para obras de cualquier tamaño y con características estándar para completar el trabajo de la mejor forma.', 'Imagenes\\Concrebombas_files\\autobombaAzul.jpg', 220000, '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `IDcliente` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Numero asignado de manera autoincrementable a cada cliente.',
  `NombreCliente` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'El nombre del cliente.',
  `NombreEmpresa` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Nombre de la empresa a la que pertenece el cliente, en caso tal de pertenecer a alguna.',
  `Apelativo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Apelativo que ingresa el cliente si lo desea, jefe, técnico, señor etc.',
  `Domicilio` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'La dirección donde reside del cliente. ',
  `Almacen` varchar(75) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Dirección de su almacén si lo posee.',
  `Telefono` int(7) DEFAULT NULL COMMENT 'Teléfono local del cliente.',
  `Movil` int(10) NOT NULL COMMENT 'Numero celular del cliente.',
  `Fax` int(50) DEFAULT NULL COMMENT 'Numero de fax del cliente.',
  `Email` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Correo electrónico del cliente.',
  `Twiter` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Nombre de usuario de twiter.',
  `Facebook` varchar(70) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Nombre de usuario de facebook.',
  `CCC` int(20) DEFAULT NULL COMMENT 'Número de cuenta bancaria del cliente.',
  `IBAN` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Número que identifica la cuenta bancaria a nivel internacional.',
  `BIC` varchar(23) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Número que identifica el banco destino de una transacción.',
  `Banco` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Nombre del banco al que se encuentra asociado el cliente.',
  `Identificacion` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Tipo de identificación del cliente.',
  `NumeroIdentificacion` varchar(17) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Número de identificación del cliente.',
  `Password` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Contraseña con la que ingresara el cliente al aplicativo.',
  `relacionar` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Campo que relaciona las distintas tablas.',
  PRIMARY KEY (`Email`),
  KEY `ClienteID` (`IDcliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`IDcliente`, `NombreCliente`, `NombreEmpresa`, `Apelativo`, `Domicilio`, `Almacen`, `Telefono`, `Movil`, `Fax`, `Email`, `Twiter`, `Facebook`, `CCC`, `IBAN`, `BIC`, `Banco`, `Identificacion`, `NumeroIdentificacion`, `Password`, `relacionar`) VALUES
(1, 'miguelon', 'kellows', 'Ingeniero', 'kr77 #69-12', '301', 7775533, 2147483647, 7775522, 'user1@gmail.com', '@miguleon', 'facebook/miguel01', 11114444, '1234 6789', '3456789', 'banco nacional', 'Cedula', '1012394521', '12345', '1'),
(2, 'marco', 'robles sas', 'Doctor', 'kr 12 #13-24', '101', 7777777, 312400298, 7775577, 'user2@gmail.com', '@marco', 'facebook/marco', 11114444, '1234 6789', '1234', 'banco nacional', 'Cedula', '987654321', '12345', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE IF NOT EXISTS `cotizacion` (
  `idCotizacion` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Numero asignado de manera autoincrementable a cada cotización.',
  `Correo` varchar(500) NOT NULL COMMENT 'Correo electrónico del usuario.',
  `Referencia` varchar(200) NOT NULL COMMENT 'Referencia del producto o servicio que se está agregando.',
  `Cantidad` int(3) NOT NULL COMMENT 'Cantidad del producto que se esta cotizando.',
  `Precio` int(11) NOT NULL COMMENT 'Precio del producto.',
  `Total` int(15) NOT NULL COMMENT 'El valor total de la cotización.',
  `relacionar` int(11) NOT NULL COMMENT 'Campo que relaciona las distintas tablas.',
  PRIMARY KEY (`idCotizacion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `IDempleado` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Numero asignado de manera autoincrementable a cada Empleado.',
  `Nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre del empleado.',
  `Apellido` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Apellido del empleado.',
  `Identificacion` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Tipo de identificación del empleado.',
  `NumeroIdentificacion` int(17) NOT NULL COMMENT 'Número de identificación del empleado.',
  `Telefono` int(7) DEFAULT NULL COMMENT 'Teléfono local del empleado.',
  `Movil` int(10) NOT NULL COMMENT 'Numero celular del empleado.',
  `Email` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Correo electrónico del empleado.',
  `Cargo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Cargo que tiene el empleado en la empresa.',
  `Password` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Contraseña con la que ingresara el empleado al aplicativo.',
  `relacionar` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Campo que relaciona las distintas tablas.',
  PRIMARY KEY (`Email`),
  KEY `IDempleado` (`IDempleado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`IDempleado`, `Nombre`, `Apellido`, `Identificacion`, `NumeroIdentificacion`, `Telefono`, `Movil`, `Email`, `Cargo`, `Password`, `relacionar`) VALUES
(1, 'juan', 'Camelo', 'Cedula', 1234567890, 7809060, 2147483647, 'employe1@cbombas.com', 'Operario', '12345', '1'),
(2, 'ramon', 'valdez', 'Cedula', 2147483647, 7775564, 2147483647, 'employe2@cbombas.com', 'Operario', '12345', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestionservicio`
--

CREATE TABLE IF NOT EXISTS `gestionservicio` (
  `idServicio` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Numero asignado de manera autoincrementable a cada gestión.',
  `Fecha` date NOT NULL COMMENT 'Fecha en la que fue realizada la gestión.',
  `Cliente` varchar(300) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre del cliente.',
  `CorreoCliente` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Correo electrónico del cliente.',
  `CodigoObra` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Código de la obra en la que se trabaja.',
  `Direccion` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL COMMENT 'La dirección donde se realiza la obra.',
  `CantidadM3` double NOT NULL COMMENT 'Cantidad de m3 bombeados.',
  `Concretera` varchar(300) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Empresa que provee el concreto.',
  `DisenoConcreto` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Tipo de concreto utilizado.',
  `Bomba` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL COMMENT 'La bomba que fue utilizada para esta obra.',
  `OperadorBomba` varchar(300) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL COMMENT 'El nombre de la persona que opero la bomba.',
  `Nivel` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL COMMENT 'En este campo se describe el piso en el que se realiza la obra, es decir 1er piso 2do piso etc.',
  `HoraLlegadaEquipo` time NOT NULL COMMENT 'Hora en la que llego el material a la obra.',
  `MetrosTotales` double NOT NULL COMMENT 'Metros que se bombearon durante la obra.',
  `EquipoListo` time NOT NULL COMMENT 'Hora a la que estuvo listo todo el material.',
  `Armadas` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Cantidad de armadas que se realizaron en la obra.',
  `InicioServicio` time NOT NULL COMMENT 'Hora a la que se inició el trabajo.',
  `CantidadElementos` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Cantidad de elementos utilizados para la obra.',
  `FinalServicio` time NOT NULL COMMENT 'Hora a la que termino el trabajo.',
  `NumViaje` varchar(3000) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL COMMENT 'El número de viaje que se está realizando.',
  `Mixer` varchar(3000) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Mixer utilizada durante la obra.',
  `HoraLlegada` varchar(3000) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Hora de llegada del servicio.',
  `InicioDescargue` varchar(3000) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Hora a la que se empieza a bombear el concreto.',
  `FinalDescargue` varchar(3000) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Hora a la que finaliza el bombeo de concreto.',
  `m3Descargue` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Metros de concreto que fueron descargados.',
  `Remision` varchar(3000) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Numero de remisión del servicio.',
  `Relacionar` int(2) NOT NULL COMMENT 'Campo que relaciona las distintas tablas.',
  PRIMARY KEY (`idServicio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=35 ;

--
-- Volcado de datos para la tabla `gestionservicio`
--

INSERT INTO `gestionservicio` (`idServicio`, `Fecha`, `Cliente`, `CorreoCliente`, `CodigoObra`, `Direccion`, `CantidadM3`, `Concretera`, `DisenoConcreto`, `Bomba`, `OperadorBomba`, `Nivel`, `HoraLlegadaEquipo`, `MetrosTotales`, `EquipoListo`, `Armadas`, `InicioServicio`, `CantidadElementos`, `FinalServicio`, `NumViaje`, `Mixer`, `HoraLlegada`, `InicioDescargue`, `FinalDescargue`, `m3Descargue`, `Remision`, `Relacionar`) VALUES
(32, '0000-00-00', 'vgh', 'J@FGDSG.COM', 'gh', 'gjhg', 0, 'HormigonUrbano', 'Cemento Ordinario', 'A12', 'asdfdfs', 'dsfa', '03:30:00', 0, '04:30:00', 'fdsaf', '05:30:00', 'fdsafd', '09:00:00', '<br>78<br>41564', '<br>7878<br>145', '<br>00:30<br>01:00', '<br>01:30<br>01:30', '<br>02:30<br>01:30', '<br>263<br>26', '<br>2163<br>26312', 0),
(33, '0000-00-00', 'vachh', 'ElVachh@lacalle.com', 'trip', 'cartucho', 5, 'HormigonAndino', 'Cemento Ordinario', 'S435x', 'El homo', '65', '00:30:00', 23, '02:30:00', '85', '05:00:00', '45', '07:30:00', '<br>1<br>2<br>3', '<br>1<br>2<br>3', '<br>01:00<br>01:30<br>02:30', '<br>01:00<br>02:00<br>02:30', '<br>01:30<br>02:30<br>03:00', '<br>23<br>25<br>28', '<br>007<br>008<br>009', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `idproducto` tinyint(2) NOT NULL AUTO_INCREMENT COMMENT 'Numero asignado de manera autoincrementable a cada producto.',
  `tituloProducto` varchar(245) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Titulo representativo del producto, este se muestra en la sección de portafolio del aplicativo.',
  `NombreProducto` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Este es el nombre que recibe el producto.',
  `PrecioProducto` double NOT NULL COMMENT 'El valor que tiene la venta de dicho producto.',
  `ReferenciaProducto` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Este es un código que referencia a un producto en específico.',
  `DescripcionProducto` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Una pequeña descripción del producto.',
  `imagen` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Foto del producto.',
  `relacionar` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Campo que relaciona las distintas tablas.',
  `activo` tinyint(1) NOT NULL COMMENT 'Valor que define si es o no visible la información en el aplicativo.',
  PRIMARY KEY (`idproducto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproducto`, `tituloProducto`, `NombreProducto`, `PrecioProducto`, `ReferenciaProducto`, `DescripcionProducto`, `imagen`, `relacionar`, `activo`) VALUES
(-3, 'Concreto Avanzado', 'Concreto poroso', 64900, 'm3', 'Concretos versátiles, innovadores y con un alto valor agregado, más que un producto, se ofrecen cómo una solución para el desarrollo urbano y los retos de los grandes proyectos, respondiendo a sus exigencias de alto desempeño.', 'Imagenes\\concreto3.jpg', '1', 0),
(-2, 'Concreto Especial', 'Concreto Arquitectonico', 38600, 'm3', 'Concretos versátiles que se ofrecen como una solución para responder a exigencias de alto desempeño.', 'Imagenes\\concreto.jpg', '1', 0),
(-1, 'Concretos Convencionales', 'Concreto Ordinario Tipo 1', 35000, 'm3', 'Concretos de uso general que brindan muy buena manejabilidad y fácil colocación.', 'Imagenes\\cemento.jpg', '1', 0),
(1, NULL, 'Cemento Ordinario', 22900, '20kg', '', '', '1', 1),
(2, NULL, 'cemento blanco', 24900, '20kg', '', '', '1', 1),
(3, NULL, 'concreto pre-mezclado estandar', 35000, 'm3', 'Se prepara para su entrega en una planta de concreto en lugar de mezclarse en el sitio de la obra', '', '1', 1),
(4, NULL, 'concreto arquitectónico y decorativo', 38600, 'm3', 'Puede desempeñar una función estructural además de un acabado estético o decorativo', '', '1', 1),
(5, NULL, 'concreto reforzado con fibras', 48600, 'm3', 'diseñado con fibras micro o macro pueden sustituir el reforzamiento con varilla', '', '1', 1),
(6, NULL, 'concreto poroso', 64900, 'm3', 'Por su especial diseño de mezcla, el concreto poroso es un material sumamente permeable que permite', '', '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacion`
--

CREATE TABLE IF NOT EXISTS `reservacion` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT 'Numero asignado de manera autoincrementable a cada agendamiento.',
  `Email` varchar(80) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Correo electrónico del usuario.',
  `fecha` date NOT NULL COMMENT 'Fecha en la que se realizó el agendamiento.',
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Bomba que se reserva.',
  `Activo` tinyint(1) NOT NULL COMMENT 'Valor que define si es o no visible la información en el aplicativo.',
  `relacionar` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Campo que relaciona las distintas tablas.',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=35 ;

--
-- Volcado de datos para la tabla `reservacion`
--

INSERT INTO `reservacion` (`id`, `Email`, `fecha`, `descripcion`, `Activo`, `relacionar`) VALUES
(3, 'xsaadfh', '2016-03-01', 'vachh', 1, '1'),
(4, '', '2016-05-20', 'Bomba Estacionaria A', 0, ''),
(5, '', '2016-05-21', 'Bomba estacionaria B', 0, ''),
(6, '', '2016-05-29', 'AUTOBOMBA 38m', 0, ''),
(7, '', '2016-05-19', 'Bomba estacionaria B', 0, ''),
(8, '', '2016-05-19', 'AUTOBOMBA 45m', 0, ''),
(9, '', '2016-05-21', 'Bomba Estacionaria A', 0, ''),
(10, '', '2016-05-22', 'AUTOBOMBA 38m', 0, ''),
(12, '', '2016-05-24', 'Bomba Estacionaria A', 0, ''),
(13, '', '2016-05-26', 'Bomba Estacionaria A', 0, ''),
(14, '', '2016-05-28', 'AUTOBOMBA 45m', 0, ''),
(16, '', '2016-06-10', 'AUTOBOMBA 38m', 1, '1'),
(25, 'user1@gmail.com', '2016-06-22', 'Bomba Estacionaria C', 1, '1'),
(26, 'user1@gmail.com', '2016-06-18', 'AUTOBOMBA 45m', 1, '1'),
(30, 'user2@gmail.com', '2016-06-12', 'Bomba Estacionaria C', 1, '1'),
(31, 'user2@gmail.com', '2016-06-08', 'AUTOBOMBA 45m', 1, '1'),
(32, 'user2@gmail.com', '2016-06-16', 'AUTOBOMBA 35m', 1, '1'),
(33, 'user1@gmail.com', '2016-05-31', 'pruebita', 1, '1'),
(34, 'user1@gmail.com', '2016-06-01', 'Bomba Estacionaria C', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Email` varchar(50) CHARACTER SET latin1 NOT NULL COMMENT 'Correo electrónico del usuario.',
  `Password` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Contraseña con la que ingresara el usuario al aplicativo.',
  `Permisos` smallint(30) NOT NULL COMMENT 'Permisos que tiene pára ingresar a las distintas paginas.',
  `Activo` tinyint(1) NOT NULL COMMENT 'Valor que define si es o no visible la información en el aplicativo.',
  `relacionar` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'Campo que relaciona las distintas tablas.',
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Email`, `Password`, `Permisos`, `Activo`, `relacionar`) VALUES
('admin@cbombas.com', '12345', 3, 1, '1'),
('employe1@cbombas.com', '12345', 2, 1, '1'),
('employe2@cbombas.com', '12345', 2, 1, '1'),
('user1@gmail.com', '12345', 1, 1, '1'),
('user2@gmail.com', '12345', 1, 1, '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
