-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-04-2015 a las 21:08:38
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bdsm`
--
CREATE DATABASE IF NOT EXISTS `bdsm` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `bdsm`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talergia`
--

CREATE TABLE IF NOT EXISTS `talergia` (
  `idalergia` int(11) NOT NULL AUTO_INCREMENT,
  `nombreale` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `estatusale` char(1) COLLATE utf8_spanish_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`idalergia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `talergia`
--

INSERT INTO `talergia` (`idalergia`, `nombreale`, `estatusale`) VALUES
(1, 'Antibioticos', '1'),
(2, 'Nueces', '1'),
(3, 'Moluscos', '1'),
(4, 'Penisilina', '1'),
(5, 'Crustaceos', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbitacora`
--

CREATE TABLE IF NOT EXISTS `tbitacora` (
  `idtbitacora` int(11) NOT NULL AUTO_INCREMENT,
  `direccionbit` varchar(100) NOT NULL,
  `fechabit` datetime NOT NULL,
  `ipbit` char(16) NOT NULL,
  `operacionbit` varchar(45) DEFAULT NULL,
  `valoranteriorbit` varchar(45) DEFAULT NULL,
  `nuevovalorbit` varchar(45) DEFAULT NULL,
  `tusuario_idtusuario` char(45) NOT NULL,
  `accesobit` tinyint(1) NOT NULL,
  PRIMARY KEY (`idtbitacora`),
  KEY `fk_tbitacora_tusuario1_idx` (`tusuario_idtusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2055 ;

--
-- Volcado de datos para la tabla `tbitacora`
--

INSERT INTO `tbitacora` (`idtbitacora`, `direccionbit`, `fechabit`, `ipbit`, `operacionbit`, `valoranteriorbit`, `nuevovalorbit`, `tusuario_idtusuario`, `accesobit`) VALUES
(958, '/Servicio_Medico/vista/intranet.php', '2015-03-31 04:03:00', '127.0.0.1', '', '', '', 'Administrador', 0),
(959, '/Servicio_Medico/vista/intranet.php', '2015-03-31 04:03:00', '127.0.0.1', '', '', '', 'Administrador', 0),
(960, '/Servicio_Medico/vista/intranet.php', '2015-03-31 04:03:00', '127.0.0.1', '', '', '', 'Administrador', 0),
(961, '/Servicio_Medico/vista/intranet.php', '2015-03-31 04:03:00', '127.0.0.1', '', '', '', 'Administrador', 0),
(962, '/Servicio_Medico/vista/intranet.php', '2015-03-31 04:03:00', '127.0.0.1', '', '', '', 'Administrador', 0),
(963, '/Servicio_Medico/vista/intranet.php', '2015-03-31 04:03:00', '127.0.0.1', '', '', '', 'Administrador', 0),
(964, '/Servicio_Medico/vista/intranet.php', '2015-03-31 04:03:00', '127.0.0.1', '', '', '', 'Administrador', 0),
(965, '/Servicio_Medico/vista/intranet.php', '2015-03-31 04:03:00', '127.0.0.1', '', '', '', 'Administrador', 0),
(966, '/Servicio_Medico/vista/intranet.php', '2015-03-31 04:03:00', '127.0.0.1', '', '', '', 'Administrador', 0),
(967, '/Servicio_Medico/vista/intranet.php', '2015-03-31 04:03:00', '127.0.0.1', '', '', '', 'Administrador', 0),
(968, '/Servicio_Medico/vista/intranet.php', '2015-03-31 04:03:00', '127.0.0.1', '', '', '', 'Administrador', 0),
(969, '/Servicio_Medico/vista/intranet.php', '2015-03-31 04:03:00', '127.0.0.1', '', '', '', 'Administrador', 0),
(970, '/Servicio_Medico/vista/intranet.php', '2015-03-31 04:03:00', '127.0.0.1', '', '', '', 'Administrador', 0),
(971, '/Servicio_Medico/vista/intranet.php', '2015-03-31 04:03:00', '127.0.0.1', '', '', '', 'Administrador', 0),
(972, '/Servicio_Medico/vista/intranet.php', '2015-03-31 04:03:00', '127.0.0.1', '', '', '', '1', 0),
(973, '/Servicio_Medico/vista/intranet.php', '2015-03-31 04:03:00', '127.0.0.1', '', '', '', '1', 0),
(974, '/Servicio_Medico/vista/intranet.php', '2015-03-31 04:03:00', '127.0.0.1', '', '', '', '1', 0),
(975, '/Servicio_Medico/vista/intranet.php', '2015-03-31 04:03:00', '127.0.0.1', '', '', '', '1', 0),
(976, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 0),
(977, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 0),
(978, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 0),
(979, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 0),
(980, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 0),
(981, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 0),
(982, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(983, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(984, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(985, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(986, '/Servicio_Medico/vista/intranet.php?vista=seguridad/rol', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(987, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignacion', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(988, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(989, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(990, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_modulo', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(991, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_modulo', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(992, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_modulo', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(993, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(994, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(995, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(996, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(997, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(998, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(999, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1000, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignacion', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1001, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1002, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo&id=1', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1003, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1004, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1005, '/Servicio_Medico/vista/intranet.php?vista=tipo_examen', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1006, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1007, '/Servicio_Medico/vista/intranet.php?vista=seguridad/consultar_servicio&id=32', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1008, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1009, '/Servicio_Medico/vista/intranet.php?vista=tipoexamen', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1010, '/Servicio_Medico/vista/intranet.php?vista=registrar_tipoexamen', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 0),
(1011, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignacion', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1012, '/Servicio_Medico/vista/intranet.php?vista=tipoexamen', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1013, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1014, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1015, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1016, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1017, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1018, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1019, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1020, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1021, '/Servicio_Medico/vista/intranet.php?vista=tipoexamen', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1022, '/Servicio_Medico/vista/intranet.php?vista=registrar_tipoexamen', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 0),
(1023, '/Servicio_Medico/vista/intranet.php?vista=tipoexamen', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1024, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1025, '/Servicio_Medico/vista/intranet.php?vista=tipoexamen', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1026, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1027, '/Servicio_Medico/vista/intranet.php?vista=seguridad/consultar_servicio&id=32', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1028, '/Servicio_Medico/vista/intranet.php?vista=seguridad/consultar_servicio&id=32', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1029, '/Servicio_Medico/vista/intranet.php?vista=configuracion/tipoexamen', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1030, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1031, '/Servicio_Medico/vista/intranet.php?vista=seguridad/consultar_servicio&id=33', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1032, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1033, '/Servicio_Medico/vista/intranet.php?vista=seguridad/consultar_servicio&id=34', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1034, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1035, '/Servicio_Medico/vista/intranet.php?vista=seguridad/consultar_servicio&id=35', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1036, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1037, '/Servicio_Medico/vista/intranet.php?vista=configuracion/tipoexamen', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1038, '/Servicio_Medico/vista/intranet.php?vista=registrar_tipoexamen', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 0),
(1039, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1040, '/Servicio_Medico/vista/intranet.php?vista=configuracion/tipoexamen', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1041, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_tipoexamen', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 0),
(1042, '/Servicio_Medico/vista/intranet.php?vista=configuracion/tipoexamen', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1043, '/Servicio_Medico/vista/intranet.php?vista=configuracion/consultar_tipoexamen&id=1', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 0),
(1044, '/Servicio_Medico/vista/intranet.php?vista=configuracion/tipoexamen', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1045, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1046, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1047, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1048, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1049, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1050, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1051, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1052, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1053, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1054, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1055, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1056, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1057, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1058, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1059, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1060, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1061, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1062, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1063, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1064, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1065, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1066, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1067, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignacion', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1068, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1069, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1070, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1071, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1072, '/Servicio_Medico/vista/intranet.php?vista=configuracion/centro_asistencial', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1073, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1074, '/Servicio_Medico/vista/intranet.php?vista=seguridad/consultar_servicio&id=37', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1075, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1076, '/Servicio_Medico/vista/intranet.php?vista=configuracion/centroasistencial', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1077, '/Servicio_Medico/vista/intranet.php?vista=configuracion/carrera', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1078, '/Servicio_Medico/vista/intranet.php?vista=configuracion/departamento', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1079, '/Servicio_Medico/vista/intranet.php?vista=configuracion/discapacidad', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1080, '/Servicio_Medico/vista/intranet.php?vista=configuracion/enfermedadescronicas', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1081, '/Servicio_Medico/vista/intranet.php?vista=configuracion/estado', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1082, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_estado', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 0),
(1083, '/Servicio_Medico/vista/intranet.php?vista=configuracion/etnia', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1084, '/Servicio_Medico/vista/intranet.php?vista=configuracion/laboratorio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1085, '/Servicio_Medico/vista/intranet.php?vista=configuracion/municipio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1086, '/Servicio_Medico/vista/intranet.php?vista=configuracion/municipio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1087, '/Servicio_Medico/vista/intranet.php?vista=configuracion/parroquia', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1088, '/Servicio_Medico/vista/intranet.php?vista=configuracion/sede', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1089, '/Servicio_Medico/vista/intranet.php?vista=configuracion/tipoexamen', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1090, '/Servicio_Medico/vista/intranet.php?vista=configuracion/tipo_paciente', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1091, '/Servicio_Medico/vista/intranet.php?vista=configuracion/tiporeferencia', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1092, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_tiporeferencia', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 0),
(1093, '/Servicio_Medico/vista/intranet.php?vista=configuracion/tiporeferencia', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1094, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_tiporeferencia', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 0),
(1095, '/Servicio_Medico/vista/intranet.php?vista=configuracion/tipo_paciente', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1096, '/Servicio_Medico/vista/intranet.php?vista=configuracion/tipoexamen', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1097, '/Servicio_Medico/vista/intranet.php?vista=configuracion/consultar_tipoexamen&id=1', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1098, '/Servicio_Medico/vista/intranet.php?vista=configuracion/tipoexamen', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1099, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1100, '/Servicio_Medico/vista/intranet.php?vista=seguridad/rol', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1101, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1102, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignacion', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1103, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1104, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1105, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1106, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignacion', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1107, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1108, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1109, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1110, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1111, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1112, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1113, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1114, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1115, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1116, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1117, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1118, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1119, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1120, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1121, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1122, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1123, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1124, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1125, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1126, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1127, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1128, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '', 0),
(1129, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1130, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1131, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1132, '/Servicio_Medico/vista/intranet.php', '2015-03-31 05:03:00', '127.0.0.1', '', '', '', '1', 1),
(1133, '/Servicio_Medico/vista/intranet.php', '2015-04-01 01:04:00', '127.0.0.1', '', '', '', '1', 1),
(1134, '/servicio_medico/vista/intranet.php', '2015-04-01 01:04:00', '192.168.1.109', '', '', '', '1', 1),
(1135, '/servicio_medico/vista/intranet.php?vista=configuracion/tipo_paciente', '2015-04-01 01:04:00', '192.168.1.109', '', '', '', '1', 1),
(1136, '/servicio_medico/vista/intranet.php?vista=seguridad/asignacion', '2015-04-01 02:04:00', '192.168.1.109', '', '', '', '1', 1),
(1137, '/servicio_medico/vista/intranet.php?vista=configuracion/laboratorio', '2015-04-01 02:04:00', '192.168.1.109', '', '', '', '1', 1),
(1138, '/servicio_medico/vista/intranet.php?vista=configuracion/consultar_laboratorio&id=2', '2015-04-01 02:04:00', '192.168.1.109', '', '', '', '1', 0),
(1139, '/servicio_medico/vista/intranet.php?vista=laboratorio', '2015-04-01 02:04:00', '192.168.1.109', '', '', '', '1', 0),
(1140, '/servicio_medico/vista/intranet.php?vista=configuracion/carrera', '2015-04-01 02:04:00', '192.168.1.109', '', '', '', '1', 1),
(1141, '/Servicio_Medico/vista/intranet.php', '2015-04-01 02:04:00', '127.0.0.1', '', '', '', '1', 1),
(1142, '/servicio_medico/vista/intranet.php?vista=paciente/paciente', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 0),
(1143, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 0),
(1144, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 0),
(1145, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 0),
(1146, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 0),
(1147, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 0),
(1148, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 0),
(1149, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 0),
(1150, '/servicio_medico/vista/intranet.php?vista=paciente/paciente', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 0),
(1151, '/servicio_medico/vista/intranet.php?vista=paciente/paciente', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 0),
(1152, '/servicio_medico/vista/intranet.php?vista=paciente/paciente', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 0),
(1153, '/servicio_medico/vista/intranet.php?vista=paciente/paciente', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 0),
(1154, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1155, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_modulo', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1156, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1157, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1158, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1159, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1160, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1161, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1162, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1163, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1164, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1165, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1166, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignacion', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1167, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1168, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo&id=1', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1169, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignacion', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1170, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1171, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo&id=1', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1172, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1173, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1174, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1175, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_consulta', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 0),
(1176, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1177, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1178, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1179, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1180, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=1', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 0),
(1181, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=1', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 0),
(1182, '/servicio_medico/vista/intranet.php?vista=paciente/paciente', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 0),
(1183, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=1', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 0),
(1184, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1185, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1186, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1187, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1188, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=1', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 0),
(1189, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=1', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 0),
(1190, '/servicio_medico/vista/intranet.php?vista=paciente/paciente', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 0),
(1191, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1192, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1193, '/servicio_medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 1),
(1194, '/servicio_medico/vista/intranet.php?vista=seguridad/registrar_modulo', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 1),
(1195, '/servicio_medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 1),
(1196, '/servicio_medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 1),
(1197, '/servicio_medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 1),
(1198, '/servicio_medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 1),
(1199, '/servicio_medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 1),
(1200, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1201, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1202, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1203, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1204, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1205, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1206, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1207, '/servicio_medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 1),
(1208, '/servicio_medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 1),
(1209, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1210, '/servicio_medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 1),
(1211, '/servicio_medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 1),
(1212, '/servicio_medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 1),
(1213, '/servicio_medico/vista/intranet.php?vista=seguridad/asignacion', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 1),
(1214, '/servicio_medico/vista/intranet.php?vista=seguridad/asignar_servicio', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 1),
(1215, '/servicio_medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 1),
(1216, '/servicio_medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 1),
(1217, '/servicio_medico/vista/intranet.php?vista=seguridad/asignar_modulo', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 1),
(1218, '/servicio_medico/vista/intranet.php?vista=seguridad/asignar_modulo&id=1', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 1),
(1219, '/servicio_medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 1),
(1220, '/servicio_medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 1),
(1221, '/servicio_medico/vista/intranet.php?vista=paciente/paciente', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 1),
(1222, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 1),
(1223, '/servicio_medico/vista/intranet.php?vista=paciente/paciente', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 1),
(1224, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=1', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 1),
(1225, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1226, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1227, '/Servicio_Medico/vista/intranet.php?vista=paciente/paciente', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1228, '/Servicio_Medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-01 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1229, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=1', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 1),
(1230, '/servicio_medico/vista/intranet.php?vista=paciente/paciente', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 1),
(1231, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=1', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 1),
(1232, '/servicio_medico/vista/intranet.php?vista=paciente/paciente', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 1),
(1233, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=1', '2015-04-01 03:04:00', '192.168.1.109', '', '', '', '1', 1),
(1234, '/servicio_medico/vista/intranet.php?vista=paciente/paciente', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 1),
(1235, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=1', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 1),
(1236, '/Servicio_Medico/vista/intranet.php?vista=paciente/paciente', '2015-04-01 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1237, '/Servicio_Medico/vista/intranet.php?vista=paciente/consultar_paciente&id=2', '2015-04-01 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1238, '/Servicio_Medico/vista/intranet.php?vista=paciente/paciente', '2015-04-01 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1239, '/Servicio_Medico/vista/intranet.php?vista=paciente/consultar_paciente&id=2', '2015-04-01 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1240, '/Servicio_Medico/vista/intranet.php?vista=configuracion/paciente', '2015-04-01 04:04:00', '127.0.0.1', '', '', '', '1', 0),
(1241, '/servicio_medico/vista/intranet.php?vista=paciente/paciente', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 1),
(1242, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-01 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1243, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1244, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 1),
(1245, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1246, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1247, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1248, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 1),
(1249, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1250, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 1),
(1251, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 1),
(1252, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 1),
(1253, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1254, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1255, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1256, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 1),
(1257, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 1),
(1258, '/servicio_medico/vista/intranet.php?vista=municipio', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 0),
(1259, '/servicio_medico/vista/intranet.php?vista=municipio', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 0),
(1260, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-01 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1261, '/servicio_medico/vista/intranet.php?vista=municipio', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 0),
(1262, '/servicio_medico/vista/intranet.php?vista=municipio', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 0),
(1263, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 1),
(1264, '/servicio_medico/vista/intranet.php?vista=municipio', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 0),
(1265, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 1),
(1266, '/servicio_medico/vista/intranet.php?vista=municipio', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 0),
(1267, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 1),
(1268, '/servicio_medico/vista/intranet.php?vista=municipio', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 0),
(1269, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 1),
(1270, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 1),
(1271, '/servicio_medico/vista/intranet.php?vista=parroquia', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 0),
(1272, '/servicio_medico/vista/intranet.php', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 1),
(1273, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-01 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1274, '/Servicio_Medico/vista/intranet.php?vista=configuracion/consultar_consulta&id=1', '2015-04-01 04:04:00', '127.0.0.1', '', '', '', '1', 0),
(1275, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-01 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1276, '/Servicio_Medico/vista/intranet.php?vista=consulta/consultar_consulta&id=1', '2015-04-01 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1277, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 1),
(1278, '/Servicio_Medico/vista/intranet.php?vista=consulta/consultar_consulta&id=1', '2015-04-01 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1279, '/Servicio_Medico/vista/intranet.php?vista=consulta/consultar_consulta&id=1', '2015-04-01 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1280, '/Servicio_Medico/vista/intranet.php?vista=consulta/consultar_consulta&id=1', '2015-04-01 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1281, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 1),
(1282, '/Servicio_Medico/vista/intranet.php?vista=consulta/consultar_consulta&id=1', '2015-04-01 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1283, '/Servicio_Medico/vista/intranet.php?vista=consulta/consultar_consulta&id=1', '2015-04-01 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1284, '/Servicio_Medico/vista/intranet.php?vista=consulta/consultar_consulta&id=1', '2015-04-01 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1285, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 1),
(1286, '/Servicio_Medico/vista/intranet.php?vista=consulta/consultar_consulta&id=1', '2015-04-01 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1287, '/Servicio_Medico/vista/intranet.php?vista=consulta/consultar_consulta&id=1', '2015-04-01 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1288, '/servicio_medico/vista/intranet.php?vista=paciente/paciente', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 1),
(1289, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=1', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 1),
(1290, '/servicio_medico/vista/intranet.php?vista=paciente/paciente', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 1),
(1291, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=1', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 1),
(1292, '/servicio_medico/vista/intranet.php?vista=configuracion/paciente', '2015-04-01 04:04:00', '192.168.1.109', '', '', '', '1', 0),
(1293, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-01 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1294, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1295, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1296, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1297, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1298, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1299, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1300, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1301, '/Servicio_Medico/vista/intranet.php?vista=laboratorio', '2015-04-01 05:04:00', '127.0.0.1', '', '', '', '1', 0),
(1302, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1303, '/Servicio_Medico/vista/intranet.php?vista=laboratorio', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 0),
(1304, '/Servicio_Medico/vista/intranet.php?vista=laboratorio', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 0),
(1305, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1306, '/Servicio_Medico/vista/intranet.php?vista=laboratorio', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 0),
(1307, '/Servicio_Medico/vista/intranet.php?vista=laboratorio', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 0),
(1308, '/Servicio_Medico/vista/intranet.php?vista=laboratorio', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 0),
(1309, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1310, '/Servicio_Medico/vista/intranet.php?vista=tipoexamen', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 0),
(1311, '/Servicio_Medico/vista/intranet.php?vista=laboratorio', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 0),
(1312, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1313, '/Servicio_Medico/vista/intranet.php?vista=laboratorio', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 0),
(1314, '/Servicio_Medico/vista/intranet.php?vista=tipoexamen', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 0),
(1315, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1316, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1317, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1318, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1319, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1320, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1321, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1322, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1323, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1324, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1325, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1326, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1327, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1328, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1329, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1330, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1331, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1332, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1333, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1334, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1335, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1336, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1337, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1338, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1339, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1340, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1341, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1342, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1343, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1344, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-01 06:04:00', '127.0.0.1', '', '', '', '1', 1);
INSERT INTO `tbitacora` (`idtbitacora`, `direccionbit`, `fechabit`, `ipbit`, `operacionbit`, `valoranteriorbit`, `nuevovalorbit`, `tusuario_idtusuario`, `accesobit`) VALUES
(1345, '/Servicio_Medico/vista/intranet.php', '2015-04-01 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1346, '/Servicio_Medico/vista/intranet.php', '2015-04-02 01:04:00', '127.0.0.1', '', '', '', '1', 1),
(1347, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-02 01:04:00', '127.0.0.1', '', '', '', '1', 1),
(1348, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-02 01:04:00', '127.0.0.1', '', '', '', '1', 1),
(1349, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-02 01:04:00', '127.0.0.1', '', '', '', '1', 1),
(1350, '/Servicio_Medico/vista/intranet.php', '2015-04-07 02:04:00', '127.0.0.1', '', '', '', '1', 1),
(1351, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1352, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_modulo', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1353, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1354, '/Servicio_Medico/vista/intranet.php?vista=seguridad/consultar_modulo&id=10', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1355, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1356, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1357, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1358, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1359, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1360, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1361, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1362, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1363, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1364, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1365, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignacion', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1366, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1367, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1368, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1369, '/Servicio_Medico/vista/intranet.php?vista=configuracion/tipo_personal', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1370, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_tipo_personal', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 0),
(1371, '/Servicio_Medico/vista/intranet.php?vista=tipo_personal', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 0),
(1372, '/Servicio_Medico/vista/intranet.php?vista=tipopersonal', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 0),
(1373, '/Servicio_Medico/vista/intranet.php?vista=configuracion/tipopersonal', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 0),
(1374, '/Servicio_Medico/vista/intranet.php?vista=configuracion/tipo_personal', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1375, '/Servicio_Medico/vista/intranet.php?vista=configuracion/tipo_personal', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1376, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_tipo_personal', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 0),
(1377, '/Servicio_Medico/vista/intranet.php?vista=configuracion/tipo_personal', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1378, '/Servicio_Medico/vista/intranet.php?vista=configuracion/consultar_tipo_personal&id=1', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 0),
(1379, '/Servicio_Medico/vista/intranet.php?vista=configuracion/tipo_personal', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1380, '/Servicio_Medico/vista/intranet.php?vista=configuracion/consultar_tipo_personal&id=1', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 0),
(1381, '/Servicio_Medico/vista/intranet.php?vista=configuracion/consultar_tipo_personal&id=1', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 0),
(1382, '/Servicio_Medico/vista/intranet.php?vista=configuracion/tipo_personal', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1383, '/Servicio_Medico/vista/intranet.php?vista=configuracion/consultar_tipo_personal&id=1', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 0),
(1384, '/Servicio_Medico/vista/intranet.php?vista=configuracion/tipo_personal', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1385, '/Servicio_Medico/vista/intranet.php?vista=configuracion/tipo_personal', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1386, '/Servicio_Medico/vista/intranet.php?vista=configuracion/tipo_personal', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1387, '/Servicio_Medico/vista/intranet.php?vista=configuracion/tipo_personal', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1388, '/Servicio_Medico/vista/intranet.php?vista=configuracion/tipo_personal', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1389, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1390, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignacion', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1391, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1392, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo&id=1', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1393, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1394, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1395, '/Servicio_Medico/vista/intranet.php?vista=personal/personal', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1396, '/Servicio_Medico/vista/intranet.php?vista=personal/registrar_personal', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1397, '/Servicio_Medico/vista/intranet.php?vista=personal/registrar_personal', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1398, '/Servicio_Medico/vista/intranet.php?vista=personal/registrar_personal', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1399, '/Servicio_Medico/vista/intranet.php?vista=personal/registrar_personal', '2015-04-07 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1400, '/Servicio_Medico/vista/intranet.php?vista=personal/registrar_personal', '2015-04-07 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1401, '/Servicio_Medico/vista/intranet.php?vista=personal/personal', '2015-04-07 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1402, '/Servicio_Medico/vista/intranet.php', '2015-04-07 04:04:00', '127.0.0.1', '', '', '', '2', 1),
(1403, '/Servicio_Medico/vista/intranet.php?vista=personal/personal', '2015-04-07 04:04:00', '127.0.0.1', '', '', '', '2', 1),
(1404, '/Servicio_Medico/vista/intranet.php?vista=personal/consultar_personal&id=2', '2015-04-07 04:04:00', '127.0.0.1', '', '', '', '2', 0),
(1405, '/Servicio_Medico/vista/intranet.php?vista=personal/consultar_personal&id=2', '2015-04-07 04:04:00', '127.0.0.1', '', '', '', '2', 0),
(1406, '/Servicio_Medico/vista/intranet.php?vista=personal/consultar_personal&id=2', '2015-04-07 04:04:00', '127.0.0.1', '', '', '', '2', 0),
(1407, '/Servicio_Medico/vista/intranet.php?vista=personal/consultar_personal&id=2', '2015-04-07 04:04:00', '127.0.0.1', '', '', '', '2', 0),
(1408, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-07 04:04:00', '127.0.0.1', '', '', '', '2', 1),
(1409, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_modulo', '2015-04-07 04:04:00', '127.0.0.1', '', '', '', '2', 1),
(1410, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-07 04:04:00', '127.0.0.1', '', '', '', '2', 1),
(1411, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-07 04:04:00', '127.0.0.1', '', '', '', '2', 1),
(1412, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-04-07 04:04:00', '127.0.0.1', '', '', '', '2', 1),
(1413, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-07 04:04:00', '127.0.0.1', '', '', '', '2', 1),
(1414, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-04-07 04:04:00', '127.0.0.1', '', '', '', '2', 1),
(1415, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-07 04:04:00', '127.0.0.1', '', '', '', '2', 1),
(1416, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1417, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignacion', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1418, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1419, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1420, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo&id=1', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1421, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1422, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1423, '/Servicio_Medico/vista/intranet.php?vista=perfil/perfil', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1424, '/Servicio_Medico/vista/intranet.php', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1425, '/Servicio_Medico/vista/intranet.php', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1426, '/Servicio_Medico/vista/intranet.php?vista=perfil/perfil', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1427, '/Servicio_Medico/vista/intranet.php?vista=perfil/perfil', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1428, '/Servicio_Medico/vista/intranet.php?vista=perfil/perfil', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1429, '/Servicio_Medico/vista/intranet.php?vista=perfil/perfil', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1430, '/Servicio_Medico/vista/intranet.php?vista=perfil/perfil', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1431, '/Servicio_Medico/vista/intranet.php?vista=perfil/perfil', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1432, '/Servicio_Medico/vista/intranet.php?vista=perfil/perfil', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1433, '/Servicio_Medico/vista/intranet.php?vista=perfil/perfil', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1434, '/Servicio_Medico/vista/intranet.php?vista=perfil/perfil', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1435, '/Servicio_Medico/vista/intranet.php?vista=perfil/perfil', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1436, '/Servicio_Medico/vista/intranet.php?vista=perfil/perfil', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1437, '/Servicio_Medico/vista/intranet.php?vista=perfil/perfil', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1438, '/Servicio_Medico/vista/intranet.php?vista=perfil/perfil', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1439, '/Servicio_Medico/vista/intranet.php?vista=personal/personal', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1440, '/Servicio_Medico/vista/intranet.php', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1441, '/Servicio_Medico/vista/intranet.php?vista=perfil/perfil', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1442, '/Servicio_Medico/vista/intranet.php?vista=perfil/perfil', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1443, '/Servicio_Medico/vista/intranet.php?vista=perfil/cambiar_clave', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1444, '/Servicio_Medico/vista/intranet.php?vista=personal/personal', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1445, '/Servicio_Medico/vista/intranet.php?vista=perfil/cambiar_clave', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1446, '/Servicio_Medico/vista/intranet.php?vista=perfil/perfil', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1447, '/Servicio_Medico/vista/intranet.php?vista=perfil/perfil', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1448, '/Servicio_Medico/vista/intranet.php?vista=perfil/perfil', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1449, '/Servicio_Medico/vista/intranet.php?vista=personal/personal', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1450, '/Servicio_Medico/vista/intranet.php?vista=personal/personal', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1451, '/Servicio_Medico/vista/intranet.php?vista=perfil/cambiar_clave', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1452, '/Servicio_Medico/vista/intranet.php?vista=perfil/perfil', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1453, '/Servicio_Medico/vista/intranet.php?vista=personal/personal', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1454, '/Servicio_Medico/vista/intranet.php?vista=personal/consultar_personal&id=2', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 0),
(1455, '/Servicio_Medico/vista/intranet.php?vista=personal/personal', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1456, '/Servicio_Medico/vista/intranet.php?vista=personal/consultar_personal&id=2', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 0),
(1457, '/Servicio_Medico/vista/intranet.php?vista=configuracion/personal', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 0),
(1458, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1459, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1460, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1461, '/Servicio_Medico/vista/intranet.php?vista=configuracion/centroasistencial', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1462, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_centroasistencial', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 0),
(1463, '/Servicio_Medico/vista/intranet.php?vista=configuracion/centroasistencial', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1464, '/Servicio_Medico/vista/intranet.php?vista=configuracion/laboratorio', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1465, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_laboratorio', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 0),
(1466, '/Servicio_Medico/vista/intranet.php?vista=configuracion/laboratorio', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1467, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_laboratorio', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 0),
(1468, '/Servicio_Medico/vista/intranet.php?vista=configuracion/laboratorio', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1469, '/Servicio_Medico/vista/intranet.php?vista=configuracion/sede', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1470, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_sede', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 0),
(1471, '/Servicio_Medico/vista/intranet.php?vista=configuracion/sede', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1472, '/Servicio_Medico/vista/intranet.php?vista=perfil/cambiar_clave', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1473, '/Servicio_Medico/vista/intranet.php?vista=perfil/perfil', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1474, '/Servicio_Medico/vista/intranet.php?vista=personal/personal', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '2', 1),
(1475, '/Servicio_Medico/vista/intranet.php', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1476, '/Servicio_Medico/vista/intranet.php?vista=personal/personal', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1477, '/Servicio_Medico/vista/intranet.php?vista=paciente/paciente', '2015-04-07 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1478, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-07 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1479, '/Servicio_Medico/vista/intranet.php?vista=consulta/consultar_consulta&id=1', '2015-04-07 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1480, '/Servicio_Medico/vista/intranet.php?vista=consulta/consultar_consulta&id=1', '2015-04-07 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1481, '/Servicio_Medico/vista/intranet.php?vista=consulta/consultar_consulta&id=1', '2015-04-07 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1482, '/Servicio_Medico/vista/intranet.php?vista=consulta/consultar_consulta&id=1', '2015-04-07 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1483, '/Servicio_Medico/vista/intranet.php?vista=consulta/consultar_consulta&id=1', '2015-04-07 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1484, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-07 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1485, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-07 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1486, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-07 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1487, '/Servicio_Medico/vista/intranet.php?vista=paciente/paciente', '2015-04-07 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1488, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-07 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1489, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-07 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1490, '/Servicio_Medico/vista/intranet.php', '2015-04-07 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1491, '/Servicio_Medico/vista/intranet.php', '2015-04-14 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1492, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-14 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1493, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_modulo', '2015-04-14 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1494, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-14 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1495, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-14 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1496, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-04-14 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1497, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-14 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1498, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-04-14 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1499, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-14 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1500, '/Servicio_Medico/vista/intranet.php?vista=seguridad/consultar_servicio&id=62', '2015-04-14 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1501, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-14 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1502, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-14 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1503, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignacion', '2015-04-14 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1504, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo', '2015-04-14 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1505, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo&id=1', '2015-04-14 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1506, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-04-14 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1507, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-04-14 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1508, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1509, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1510, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1511, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1512, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1513, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1514, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1515, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1516, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1517, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1518, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1519, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-14 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1520, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-04-14 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1521, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-14 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1522, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignacion', '2015-04-14 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1523, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio', '2015-04-14 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1524, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-04-14 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1525, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-04-14 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1526, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-04-14 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1527, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1528, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas', '2015-04-14 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1529, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-14 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1530, '/Servicio_Medico/vista/intranet.php?vista=seguridad/consultar_servicio&id=62', '2015-04-14 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1531, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-14 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1532, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas', '2015-04-14 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1533, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-14 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1534, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-14 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1535, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-14 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1536, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-14 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1537, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-14 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1538, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-14 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1539, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-14 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1540, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-14 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1541, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-14 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1542, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1543, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1544, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1545, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1546, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1547, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1548, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1549, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1550, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1551, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1552, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1553, '/Servicio_Medico/vista/intranet.php?vista=paciente/paciente', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1554, '/Servicio_Medico/vista/intranet.php?vista=paciente/consultar_paciente&id=2', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1555, '/Servicio_Medico/vista/intranet.php?vista=paciente/paciente', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1556, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1557, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1558, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1559, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1560, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1561, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1562, '/Servicio_Medico/vista/intranet.php?vista=perfil/cambiar_clave', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1563, '/Servicio_Medico/vista/intranet.php?vista=perfil/perfil', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1564, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1565, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1566, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1567, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1568, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1569, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1570, '/Servicio_Medico/vista/intranet.php?vista=consulta/consultar_consulta&id=6', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1571, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1572, '/Servicio_Medico/vista/intranet.php?vista=consulta/consultar_consulta&id=1', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1573, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1574, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1575, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1576, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1577, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1578, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1579, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1580, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1581, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1582, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1583, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignacion', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1584, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1585, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1586, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1587, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1588, '/Servicio_Medico/vista/intranet.php', '2015-04-14 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1589, '/Servicio_Medico/vista/intranet.php', '2015-04-15 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1590, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-15 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1591, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-15 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1592, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-15 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1593, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas', '2015-04-15 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1594, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-15 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1595, '/Servicio_Medico/vista/intranet.php', '2015-04-18 12:04:00', '127.0.0.1', '', '', '', '1', 1),
(1596, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-18 12:04:00', '127.0.0.1', '', '', '', '1', 1),
(1597, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-18 12:04:00', '127.0.0.1', '', '', '', '1', 1),
(1598, '/Servicio_Medico/vista/intranet.php', '2015-04-18 12:04:00', '127.0.0.1', '', '', '', '1', 1),
(1599, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-18 12:04:00', '127.0.0.1', '', '', '', '1', 1),
(1600, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-18 12:04:00', '127.0.0.1', '', '', '', '1', 1),
(1601, '/Servicio_Medico/vista/intranet.php?vista=configuracion/carrera', '2015-04-18 12:04:00', '127.0.0.1', '', '', '', '1', 1),
(1602, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-18 12:04:00', '127.0.0.1', '', '', '', '1', 1),
(1603, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-18 12:04:00', '127.0.0.1', '', '', '', '1', 1),
(1604, '/Servicio_Medico/vista/intranet.php', '2015-04-18 12:04:00', '127.0.0.1', '', '', '', '1', 1),
(1605, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-18 12:04:00', '127.0.0.1', '', '', '', '1', 1),
(1606, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-18 12:04:00', '127.0.0.1', '', '', '', '1', 1),
(1607, '/Servicio_Medico/vista/intranet.php', '2015-04-18 12:04:00', '127.0.0.1', '', '', '', '1', 1),
(1608, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-18 12:04:00', '127.0.0.1', '', '', '', '1', 1),
(1609, '/Servicio_Medico/vista/intranet.php?vista=paciente/paciente', '2015-04-18 12:04:00', '127.0.0.1', '', '', '', '1', 1),
(1610, '/Servicio_Medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-18 12:04:00', '127.0.0.1', '', '', '', '1', 1),
(1611, '/Servicio_Medico/vista/intranet.php?vista=configuracion/tipo_paciente', '2015-04-18 12:04:00', '127.0.0.1', '', '', '', '1', 1),
(1612, '/Servicio_Medico/vista/intranet.php?vista=configuracion/consultar_tipo_paciente&id=1', '2015-04-18 12:04:00', '127.0.0.1', '', '', '', '1', 0),
(1613, '/Servicio_Medico/vista/intranet.php?vista=configuracion/tipo_paciente', '2015-04-18 12:04:00', '127.0.0.1', '', '', '', '1', 1),
(1614, '/Servicio_Medico/vista/intranet.php?vista=configuracion/consultar_tipo_paciente&id=2', '2015-04-18 12:04:00', '127.0.0.1', '', '', '', '1', 0),
(1615, '/Servicio_Medico/vista/intranet.php?vista=configuracion/tipo_paciente', '2015-04-18 12:04:00', '127.0.0.1', '', '', '', '1', 1),
(1616, '/Servicio_Medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-18 12:04:00', '127.0.0.1', '', '', '', '1', 1),
(1617, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-18 12:04:00', '127.0.0.1', '', '', '', '1', 1),
(1618, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-18 12:04:00', '127.0.0.1', '', '', '', '1', 1),
(1619, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_modulo', '2015-04-18 12:04:00', '127.0.0.1', '', '', '', '1', 1),
(1620, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-18 12:04:00', '127.0.0.1', '', '', '', '1', 1),
(1621, '/Servicio_Medico/vista/intranet.php?vista=paciente/paciente', '2015-04-18 01:04:00', '127.0.0.1', '', '', '', '1', 1),
(1622, '/Servicio_Medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-18 01:04:00', '127.0.0.1', '', '', '', '1', 1),
(1623, '/Servicio_Medico/vista/intranet.php', '2015-04-18 01:04:00', '127.0.0.1', '', '', '', '1', 1),
(1624, '/Servicio_Medico/vista/intranet.php', '2015-04-18 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1625, '/Servicio_Medico/vista/intranet.php', '2015-04-18 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(1626, '/servicio_medico/vista/intranet.php', '2015-04-18 08:04:00', '192.168.1.109', '', '', '', '1', 1),
(1627, '/servicio_medico/vista/intranet.php?vista=configuracion/enfermedadescronicas', '2015-04-18 08:04:00', '192.168.1.109', '', '', '', '1', 1),
(1628, '/servicio_medico/vista/intranet.php?vista=configuracion/registrar_enfermedadescronicas', '2015-04-18 08:04:00', '192.168.1.109', '', '', '', '1', 0),
(1629, '/servicio_medico/vista/intranet.php', '2015-04-18 08:04:00', '192.168.1.109', '', '', '', '1', 1),
(1630, '/servicio_medico/vista/intranet.php?vista=consulta/consulta', '2015-04-18 08:04:00', '192.168.1.109', '', '', '', '1', 1),
(1631, '/servicio_medico/vista/intranet.php?vista=paciente/paciente', '2015-04-18 08:04:00', '192.168.1.109', '', '', '', '1', 1),
(1632, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-18 08:04:00', '192.168.1.109', '', '', '', '1', 1),
(1633, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-18 08:04:00', '192.168.1.109', '', '', '', '1', 1),
(1634, '/servicio_medico/vista/intranet.php?vista=consulta/consulta', '2015-04-18 08:04:00', '192.168.1.109', '', '', '', '1', 1),
(1635, '/servicio_medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-18 08:04:00', '192.168.1.109', '', '', '', '1', 1),
(1636, '/servicio_medico/vista/intranet.php?vista=paciente/paciente', '2015-04-18 08:04:00', '192.168.1.109', '', '', '', '1', 1),
(1637, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-18 08:04:00', '192.168.1.109', '', '', '', '1', 1),
(1638, '/servicio_medico/vista/intranet.php?vista=paciente/paciente', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1639, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=2', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1640, '/servicio_medico/vista/intranet.php?vista=paciente/paciente', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1641, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=2', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1642, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=2', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1643, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1644, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1645, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=2', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1646, '/servicio_medico/vista/intranet.php?vista=paciente/paciente', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1647, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1648, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1649, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1650, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1651, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1652, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1653, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1654, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignacion', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1655, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1656, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1657, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1658, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1659, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1660, '/Servicio_Medico/vista/intranet.php?vista=seguridad/consultar_servicio&id=65', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1661, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1662, '/Servicio_Medico/vista/intranet.php?vista=seguridad/consultar_servicio&id=66', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1663, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1664, '/Servicio_Medico/vista/intranet.php?vista=seguridad/consultar_servicio&id=67', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1665, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1666, '/Servicio_Medico/vista/intranet.php?vista=seguridad/consultar_servicio&id=68', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1667, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1668, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1669, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1670, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1671, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1672, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1673, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1674, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1675, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1676, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1677, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1678, '/Servicio_Medico/vista/intranet.php?vista=configuracion/consultar_alergia&id=1', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1679, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1680, '/Servicio_Medico/vista/intranet.php?vista=configuracion/consultar_alergia&id=2', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1681, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1682, '/Servicio_Medico/vista/intranet.php?vista=configuracion/consultar_alergia&id=3', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1683, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1684, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1685, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1686, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1687, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1688, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1689, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1690, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1691, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1692, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1693, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1694, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1695, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1696, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1697, '/servicio_medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1698, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1699, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1700, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1701, '/servicio_medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1702, '/servicio_medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1703, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1704, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1705, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1706, '/servicio_medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1707, '/servicio_medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1708, '/servicio_medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1709, '/servicio_medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1710, '/servicio_medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1711, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1712, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1713, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1714, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1715, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1716, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1717, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1718, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1719, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1720, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1721, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1722, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1723, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1724, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1725, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1726, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1);
INSERT INTO `tbitacora` (`idtbitacora`, `direccionbit`, `fechabit`, `ipbit`, `operacionbit`, `valoranteriorbit`, `nuevovalorbit`, `tusuario_idtusuario`, `accesobit`) VALUES
(1727, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1728, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1729, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1730, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1731, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1732, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1733, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1734, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1735, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1736, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1737, '/servicio_medico/vista/intranet.php?vista=configuracion/discapacidad', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1738, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1739, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1740, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1741, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1742, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1743, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1744, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1745, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1746, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1747, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1748, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1749, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1750, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1751, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1752, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1753, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1754, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1755, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1756, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1757, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1758, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1759, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1760, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1761, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1762, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1763, '/servicio_medico/vista/intranet.php?vista=configuracion/enfermedadescronicas', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1764, '/servicio_medico/vista/intranet.php?vista=configuracion/discapacidad', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1765, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1766, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1767, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1768, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1769, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1770, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1771, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1772, '/servicio_medico/vista/intranet.php?vista=configuracion/discapacidad', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1773, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1774, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1775, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1776, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1777, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1778, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1779, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1780, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1781, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1782, '/Servicio_Medico/vista/intranet.php?vista=configuracion/consultar_alergia&id=18', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1783, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(1784, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1785, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-18 09:04:00', '192.168.1.109', '', '', '', '1', 1),
(1786, '/servicio_medico/vista/intranet.php?vista=paciente/registrar_paciente', '2015-04-18 10:04:00', '192.168.1.109', '', '', '', '1', 1),
(1787, '/servicio_medico/vista/intranet.php?vista=paciente/paciente', '2015-04-18 10:04:00', '192.168.1.109', '', '', '', '1', 1),
(1788, '/Servicio_Medico/vista/intranet.php?vista=configuracion/alergia', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1789, '/Servicio_Medico/vista/intranet.php?vista=configuracion/etnia', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1790, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_etnia', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 0),
(1791, '/Servicio_Medico/vista/intranet.php?vista=configuracion/etnia', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1792, '/Servicio_Medico/vista/intranet.php?vista=configuracion/etnia', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1793, '/servicio_medico/vista/intranet.php?vista=consulta/consulta', '2015-04-18 10:04:00', '192.168.1.109', '', '', '', '1', 1),
(1794, '/servicio_medico/vista/intranet.php?vista=consulta/consultar_consulta&id=1', '2015-04-18 10:04:00', '192.168.1.109', '', '', '', '1', 1),
(1795, '/servicio_medico/vista/intranet.php', '2015-04-18 10:04:00', '192.168.1.109', '', '', '', '1', 1),
(1796, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_etnia', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 0),
(1797, '/Servicio_Medico/vista/intranet.php?vista=configuracion/etnia', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1798, '/Servicio_Medico/vista/intranet.php?vista=configuracion/etnia', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1799, '/Servicio_Medico/vista/intranet.php?vista=configuracion/carrera', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1800, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_carrera', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 0),
(1801, '/Servicio_Medico/vista/intranet.php?vista=configuracion/carrera', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1802, '/Servicio_Medico/vista/intranet.php?vista=configuracion/carrera', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1803, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=4', '2015-04-18 10:04:00', '192.168.1.109', '', '', '', '1', 1),
(1804, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_carrera', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 0),
(1805, '/Servicio_Medico/vista/intranet.php?vista=configuracion/carrera', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1806, '/Servicio_Medico/vista/intranet.php?vista=configuracion/carrera', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1807, '/Servicio_Medico/vista/intranet.php?vista=configuracion/carrera', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1808, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_carrera', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 0),
(1809, '/Servicio_Medico/vista/intranet.php?vista=configuracion/carrera', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1810, '/Servicio_Medico/vista/intranet.php?vista=configuracion/carrera', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1811, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_carrera', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 0),
(1812, '/Servicio_Medico/vista/intranet.php?vista=configuracion/etnia', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1813, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_etnia', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 0),
(1814, '/Servicio_Medico/vista/intranet.php?vista=configuracion/etnia', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1815, '/Servicio_Medico/vista/intranet.php?vista=configuracion/etnia', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1816, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_etnia', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 0),
(1817, '/Servicio_Medico/vista/intranet.php?vista=configuracion/carrera', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1818, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_carrera', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 0),
(1819, '/Servicio_Medico/vista/intranet.php', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1820, '/servicio_medico/vista/intranet.php?vista=paciente/paciente', '2015-04-18 10:04:00', '192.168.1.109', '', '', '', '1', 1),
(1821, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=4', '2015-04-18 10:04:00', '192.168.1.109', '', '', '', '1', 1),
(1822, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=4', '2015-04-18 10:04:00', '192.168.1.109', '', '', '', '1', 1),
(1823, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=4', '2015-04-18 10:04:00', '192.168.1.109', '', '', '', '1', 1),
(1824, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=4', '2015-04-18 10:04:00', '192.168.1.109', '', '', '', '1', 1),
(1825, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=4', '2015-04-18 10:04:00', '192.168.1.109', '', '', '', '1', 1),
(1826, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=4', '2015-04-18 10:04:00', '192.168.1.109', '', '', '', '1', 1),
(1827, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas_diaria', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1828, '/Servicio_Medico/vista/intranet.php?vista=reporte/consultas', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1829, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=4', '2015-04-18 10:04:00', '192.168.1.109', '', '', '', '1', 1),
(1830, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=4', '2015-04-18 10:04:00', '192.168.1.109', '', '', '', '1', 1),
(1831, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=4', '2015-04-18 10:04:00', '192.168.1.109', '', '', '', '1', 1),
(1832, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=4', '2015-04-18 10:04:00', '192.168.1.109', '', '', '', '1', 1),
(1833, '/servicio_medico/vista/intranet.php?vista=paciente/paciente', '2015-04-18 10:04:00', '192.168.1.109', '', '', '', '1', 1),
(1834, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=4', '2015-04-18 10:04:00', '192.168.1.109', '', '', '', '1', 1),
(1835, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1836, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1837, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1838, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignacion', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1839, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1840, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1841, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1842, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1843, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1844, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 10:04:00', '127.0.0.1', '', '', '', '1', 1),
(1845, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1846, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1847, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1848, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1849, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1850, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1851, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1852, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1853, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1854, '/Servicio_Medico/vista/intranet.php?tpaciente_idpaciente=2&fecha_consulta=&operacion=examen&filtro_l', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1855, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1856, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1857, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1858, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1859, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1860, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1861, '/Servicio_Medico/vista/intranet.php?tpaciente_idpaciente=2&fecha_consulta=&operacion=examen&filtro_l', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1862, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1863, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1864, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1865, '/Servicio_Medico/vista/intranet.php?tpaciente_idpaciente=2&fecha_consulta=&operacion=examen&filtro_l', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1866, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1867, '/Servicio_Medico/vista/intranet.php?tpaciente_idpaciente=2&fecha_consulta=&operacion=examen&filtro_l', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1868, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1869, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1870, '/Servicio_Medico/vista/intranet.php?tpaciente_idpaciente=2&fecha_consulta=&operacion=examen&filtro_l', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1871, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1872, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1873, '/Servicio_Medico/vista/intranet.php?tpaciente_idpaciente=2&fecha_consulta=&operacion=examen&filtro_l', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1874, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1875, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1876, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1877, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1878, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1879, '/Servicio_Medico/vista/intranet.php?tpaciente_idpaciente=2&fecha_consulta=&operacion=examen&filtro_l', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1880, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1881, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1882, '/Servicio_Medico/vista/intranet.php?tpaciente_idpaciente=2&fecha_consulta=&operacion=examen&filtro_l', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1883, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1884, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1885, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1886, '/servicio_medico/vista/intranet.php?vista=paciente/paciente', '2015-04-18 11:04:00', '192.168.1.109', '', '', '', '1', 1),
(1887, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=4', '2015-04-18 11:04:00', '192.168.1.109', '', '', '', '1', 1),
(1888, '/servicio_medico/vista/intranet.php?vista=paciente/paciente', '2015-04-18 11:04:00', '192.168.1.109', '', '', '', '1', 1),
(1889, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=2', '2015-04-18 11:04:00', '192.168.1.109', '', '', '', '1', 1),
(1890, '/servicio_medico/vista/intranet.php?vista=paciente/paciente', '2015-04-18 11:04:00', '192.168.1.109', '', '', '', '1', 1),
(1891, '/servicio_medico/vista/intranet.php?vista=paciente/consultar_paciente&id=2', '2015-04-18 11:04:00', '192.168.1.109', '', '', '', '1', 1),
(1892, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1893, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1894, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1895, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1896, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1897, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1898, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1899, '/Servicio_Medico/vista/intranet.php?vista=consulta/consultar_consulta&id=7', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1900, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1901, '/Servicio_Medico/vista/intranet.php?vista=consulta/consultar_consulta&id=1', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1902, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1903, '/Servicio_Medico/vista/intranet.php?vista=consulta/consultar_consulta&id=6', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1904, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1905, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1906, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1907, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1908, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-18 11:04:00', '127.0.0.1', '', '', '', '1', 1),
(1909, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-19 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1910, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-19 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1911, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-19 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1912, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-19 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1913, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-19 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1914, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-19 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1915, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-19 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1916, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-19 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1917, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-19 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1918, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-19 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1919, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-19 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1920, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-19 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1921, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-19 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1922, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-19 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1923, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-19 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1924, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-19 03:04:00', '127.0.0.1', '', '', '', '1', 1),
(1925, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-19 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1926, '/Servicio_Medico/vista/intranet.php?vista=paciente/paciente', '2015-04-19 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1927, '/Servicio_Medico/vista/intranet.php?vista=paciente/consultar_paciente&id=2', '2015-04-19 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1928, '/Servicio_Medico/vista/intranet.php?vista=paciente/paciente', '2015-04-19 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1929, '/Servicio_Medico/vista/intranet.php?vista=reporte/examen_referencia', '2015-04-19 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1930, '/Servicio_Medico/vista/intranet.php?vista=configuracion/municipio', '2015-04-19 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1931, '/Servicio_Medico/vista/intranet.php?vista=configuracion/registrar_municipio', '2015-04-19 05:04:00', '127.0.0.1', '', '', '', '1', 0),
(1932, '/Servicio_Medico/vista/intranet.php', '2015-04-19 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1933, '/Servicio_Medico/vista/intranet.php', '2015-04-21 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1934, '/Servicio_Medico/vista/intranet.php', '2015-04-21 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1935, '/Servicio_Medico/vista/intranet.php', '2015-04-21 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1936, '/Servicio_Medico/vista/intranet.php', '2015-04-21 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1937, '/Servicio_Medico/vista/intranet.php', '2015-04-21 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1938, '/Servicio_Medico/vista/intranet.php', '2015-04-21 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1939, '/Servicio_Medico/vista/intranet.php', '2015-04-21 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1940, '/Servicio_Medico/vista/intranet.php', '2015-04-21 06:04:00', '127.0.0.1', '', '', '', '1', 1),
(1941, '/Servicio_Medico/vista/intranet.php', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1942, '/Servicio_Medico/vista/intranet.php', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1943, '/Servicio_Medico/vista/intranet.php', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1944, '/Servicio_Medico/vista/intranet.php', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1945, '/Servicio_Medico/vista/intranet.php', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1946, '/Servicio_Medico/vista/intranet.php', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1947, '/Servicio_Medico/vista/intranet.php', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1948, '/Servicio_Medico/vista/intranet.php', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1949, '/Servicio_Medico/vista/intranet.php', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1950, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1951, '/Servicio_Medico/vista/intranet.php?vista=seguridad/registrar_servicio', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1952, '/Servicio_Medico/vista/intranet.php?vista=configuracion/centroasistencial', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1953, '/Servicio_Medico/vista/intranet.php?vista=configuracion/centroasistencial', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1954, '/Servicio_Medico/vista/intranet.php?vista=configuracion/centroasistencial', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1955, '/Servicio_Medico/vista/intranet.php?vista=configuracion/centroasistencial', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1956, '/Servicio_Medico/vista/intranet.php?vista=configuracion/centroasistencial', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1957, '/Servicio_Medico/vista/intranet.php?vista=configuracion/centroasistencial', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1958, '/Servicio_Medico/vista/intranet.php?vista=configuracion/centroasistencial', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1959, '/Servicio_Medico/vista/intranet.php?vista=configuracion/centroasistencial', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1960, '/Servicio_Medico/vista/intranet.php?vista=configuracion/centroasistencial', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1961, '/Servicio_Medico/vista/intranet.php?vista=configuracion/centroasistencial', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1962, '/Servicio_Medico/vista/intranet.php?vista=configuracion/centroasistencial', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1963, '/Servicio_Medico/vista/intranet.php?vista=configuracion/centroasistencial', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1964, '/Servicio_Medico/vista/intranet.php?vista=configuracion/centroasistencial', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1965, '/Servicio_Medico/vista/intranet.php?vista=configuracion/centroasistencial', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1966, '/Servicio_Medico/vista/intranet.php?vista=configuracion/centroasistencial', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1967, '/Servicio_Medico/vista/intranet.php?vista=configuracion/centroasistencial', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1968, '/Servicio_Medico/vista/intranet.php?vista=configuracion/centroasistencial', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1969, '/Servicio_Medico/vista/intranet.php?vista=configuracion/centroasistencial', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1970, '/Servicio_Medico/vista/intranet.php?vista=configuracion/centroasistencial', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1971, '/Servicio_Medico/vista/intranet.php?vista=configuracion/centroasistencial', '2015-04-21 07:04:00', '127.0.0.1', '', '', '', '1', 1),
(1972, '/Servicio_Medico/vista/intranet.php', '2015-04-29 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1973, '/Servicio_Medico/vista/intranet2.php', '2015-04-29 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1974, '/Servicio_Medico/vista/intranet.php', '2015-04-29 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1975, '/Servicio_Medico/vista/intranet.php', '2015-04-29 04:04:00', '127.0.0.1', '', '', '', '', 0),
(1976, '/Servicio_Medico/vista/intranet.php', '2015-04-29 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1977, '/Servicio_Medico/vista/intranet.php', '2015-04-29 04:04:00', '127.0.0.1', '', '', '', '1', 1),
(1978, '/Servicio_Medico/vista/intranet.php', '2015-04-29 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1979, '/Servicio_Medico/vista/intranet2.php', '2015-04-29 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1980, '/Servicio_Medico/vista/intranet2.php', '2015-04-29 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1981, '/Servicio_Medico/vista/intranet2.php', '2015-04-29 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1982, '/Servicio_Medico/vista/intranet2.php', '2015-04-29 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1983, '/Servicio_Medico/vista/intranet2.php?vista=seguridad/modulo', '2015-04-29 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1984, '/Servicio_Medico/vista/intranet2.php?vista=seguridad/registrar_modulo', '2015-04-29 05:04:00', '127.0.0.1', '', '', '', '1', 1),
(1985, '/Servicio_Medico/vista/intranet2.php?vista=seguridad/registrar_modulo', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(1986, '/Servicio_Medico/vista/intranet2.php?vista=seguridad/modulo', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(1987, '/Servicio_Medico/vista/intranet2.php?vista=seguridad/consultar_modulo&id=1', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(1988, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(1989, '/Servicio_Medico/vista/intranet2.php?vista=seguridad/modulo', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(1990, '/Servicio_Medico/vista/intranet2.php?vista=seguridad/modulo', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(1991, '/Servicio_Medico/vista/intranet2.php?vista=seguridad/consultar_modulo&id=7', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(1992, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(1993, '/Servicio_Medico/vista/intranet2.php?vista=seguridad/modulo', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(1994, '/Servicio_Medico/vista/intranet2.php?vista=seguridad/modulo', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(1995, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(1996, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(1997, '/Servicio_Medico/vista/intranet.php?vista=seguridad/consultar_modulo&id=7', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(1998, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(1999, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2000, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2001, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2002, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2003, '/Servicio_Medico/vista/intranet.php?vista=seguridad/consultar_modulo&id=8', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2004, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2005, '/Servicio_Medico/vista/intranet.php?vista=seguridad/consultar_modulo&id=9', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2006, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2007, '/Servicio_Medico/vista/intranet.php?vista=seguridad/consultar_modulo&id=10', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2008, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2009, '/Servicio_Medico/vista/intranet.php?vista=seguridad/consultar_modulo&id=11', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2010, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2011, '/Servicio_Medico/vista/intranet.php?vista=seguridad/consultar_modulo&id=9', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2012, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2013, '/Servicio_Medico/vista/intranet.php?vista=seguridad/consultar_modulo&id=12', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2014, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2015, '/Servicio_Medico/vista/intranet.php?vista=seguridad/consultar_modulo&id=12', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2016, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2017, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignacion', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2018, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2019, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2020, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2021, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo&id=1', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2022, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo&id=1', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2023, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo&id=1', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2024, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo&id=1', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2025, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo&id=1', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2026, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo&id=1', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2027, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo&id=1', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2028, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo&id=1', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2029, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo&id=1', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2030, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo&id=1', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2031, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo&id=1', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2032, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo&id=1', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2033, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo&id=1', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2034, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo&id=1', '2015-04-29 08:04:00', '127.0.0.1', '', '', '', '1', 1),
(2035, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo&id=1', '2015-04-29 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(2036, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_servicio&id=1', '2015-04-29 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(2037, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo', '2015-04-29 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(2038, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo&id=1', '2015-04-29 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(2039, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo&id=1', '2015-04-29 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(2040, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo&id=1', '2015-04-29 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(2041, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignar_modulo&id=1', '2015-04-29 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(2042, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-29 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(2043, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-29 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(2044, '/Servicio_Medico/vista/intranet.php?vista=consulta/registrar_consulta', '2015-04-29 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(2045, '/Servicio_Medico/vista/intranet.php?vista=seguridad/asignacion', '2015-04-29 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(2046, '/Servicio_Medico/vista/intranet.php?vista=seguridad/modulo', '2015-04-29 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(2047, '/Servicio_Medico/vista/intranet.php?vista=seguridad/rol', '2015-04-29 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(2048, '/Servicio_Medico/vista/intranet.php?vista=seguridad/servicio', '2015-04-29 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(2049, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-29 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(2050, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-29 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(2051, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-29 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(2052, '/Servicio_Medico/vista/intranet.php?vista=consulta/consulta', '2015-04-29 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(2053, '/Servicio_Medico/vista/intranet.php', '2015-04-29 09:04:00', '127.0.0.1', '', '', '', '1', 1),
(2054, '/Servicio_Medico/vista/intranet.php', '2015-04-29 09:04:00', '127.0.0.1', '', '', '', '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tcarrera`
--

CREATE TABLE IF NOT EXISTS `tcarrera` (
  `idtcarrera` int(11) NOT NULL AUTO_INCREMENT,
  `carrera` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `estatuscarrera` int(11) NOT NULL,
  PRIMARY KEY (`idtcarrera`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tcarrera`
--

INSERT INTO `tcarrera` (`idtcarrera`, `carrera`, `estatuscarrera`) VALUES
(1, 'Informatica2', 1),
(2, 'Mecanica', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tcentroasistencial`
--

CREATE TABLE IF NOT EXISTS `tcentroasistencial` (
  `idtcentroasistencial` int(11) NOT NULL AUTO_INCREMENT,
  `nombrecentroasistencial` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `estatuscentroasistencial` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idtcentroasistencial`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tcentroasistencial`
--

INSERT INTO `tcentroasistencial` (`idtcentroasistencial`, `nombrecentroasistencial`, `estatuscentroasistencial`) VALUES
(1, 'Adarigua', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tconsulta`
--

CREATE TABLE IF NOT EXISTS `tconsulta` (
  `idconsulta` int(11) NOT NULL AUTO_INCREMENT,
  `estatusconsulta` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_consulta` date NOT NULL,
  `pulso` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `peso` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `fc` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `fr` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `ta` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `talla` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `temperatura` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `altura` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `observacionconsulta` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `idtdoctor` int(11) NOT NULL,
  `tpaciente_idpaciente` int(11) NOT NULL,
  `motivocon` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idconsulta`),
  KEY `fk_tconsulta_tdoctor1_idx` (`idtdoctor`),
  KEY `fk_tconsulta_tpaciente1_idx` (`tpaciente_idpaciente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `tconsulta`
--

INSERT INTO `tconsulta` (`idconsulta`, `estatusconsulta`, `fecha_consulta`, `pulso`, `peso`, `fc`, `fr`, `ta`, `talla`, `temperatura`, `altura`, `observacionconsulta`, `idtdoctor`, `tpaciente_idpaciente`, `motivocon`) VALUES
(1, '1', '2015-04-14', '123', '123', '12', '1234', '132', '12', '1234', '234', 'asdfasf', 1, 2, 'Le dolÃ­a la cabeza'),
(6, '1', '2015-04-14', '123', '123', '34', '34', '345', '12', '34', '156', '', 1, 2, 'Ninguna'),
(7, '1', '2015-04-15', '235', '234', '2345', '2345', '2345', '2345', '2345', '2345', '', 1, 2, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tdepartamento`
--

CREATE TABLE IF NOT EXISTS `tdepartamento` (
  `iddepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `departamento` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `estatusdepartamento` int(11) NOT NULL,
  PRIMARY KEY (`iddepartamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tdepartamento`
--

INSERT INTO `tdepartamento` (`iddepartamento`, `departamento`, `estatusdepartamento`) VALUES
(1, 'Enfermeria2', 1),
(2, 'Medicina', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tdiscapacidad`
--

CREATE TABLE IF NOT EXISTS `tdiscapacidad` (
  `idtdiscapacidad` int(11) NOT NULL AUTO_INCREMENT,
  `discapacidad` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `estatusdiscapacidad` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idtdiscapacidad`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tdiscapacidad`
--

INSERT INTO `tdiscapacidad` (`idtdiscapacidad`, `discapacidad`, `estatusdiscapacidad`) VALUES
(1, 'No ve bien2 ', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tdoctor`
--

CREATE TABLE IF NOT EXISTS `tdoctor` (
  `idtdoctor` int(11) NOT NULL AUTO_INCREMENT,
  `nombredoctor` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `estadodoctor` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `idtsede` int(11) NOT NULL,
  PRIMARY KEY (`idtdoctor`),
  KEY `fk_tdoctor_tsede1_idx` (`idtsede`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tdoctor`
--

INSERT INTO `tdoctor` (`idtdoctor`, `nombredoctor`, `estadodoctor`, `idtsede`) VALUES
(1, 'Frankstein', '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tenfermedadescronicas`
--

CREATE TABLE IF NOT EXISTS `tenfermedadescronicas` (
  `idtenfermedadescronicas` int(11) NOT NULL AUTO_INCREMENT,
  `enfermedadcronica` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `estatusenfermedad` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idtenfermedadescronicas`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tenfermedadescronicas`
--

INSERT INTO `tenfermedadescronicas` (`idtenfermedadescronicas`, `enfermedadcronica`, `estatusenfermedad`) VALUES
(1, 'Ceguera', '1'),
(2, 'Enfermedad Cronica', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testado`
--

CREATE TABLE IF NOT EXISTS `testado` (
  `idestado` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `estatusestado` int(11) NOT NULL,
  PRIMARY KEY (`idestado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `testado`
--

INSERT INTO `testado` (`idestado`, `estado`, `estatusestado`) VALUES
(1, 'Portuguesa', 1),
(2, 'Lara', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tetnia`
--

CREATE TABLE IF NOT EXISTS `tetnia` (
  `idtetnia` int(11) NOT NULL AUTO_INCREMENT,
  `etnia` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `estatusetnia` varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`idtetnia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tetnia`
--

INSERT INTO `tetnia` (`idtetnia`, `etnia`, `estatusetnia`) VALUES
(1, 'Pemones', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `texamen`
--

CREATE TABLE IF NOT EXISTS `texamen` (
  `idtexamen` int(11) NOT NULL AUTO_INCREMENT,
  `examen` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `estatusexamen` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `idconsulta` int(11) NOT NULL,
  `idttipoexamen` int(11) NOT NULL,
  `idtlaboratorio` int(11) NOT NULL,
  PRIMARY KEY (`idtexamen`),
  KEY `fk_texamen_tconsulta1_idx` (`idconsulta`),
  KEY `fk_texamen_ttipoexamen1_idx` (`idttipoexamen`),
  KEY `fk_texamen_tlaboratorio1_idx` (`idtlaboratorio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `texamen`
--

INSERT INTO `texamen` (`idtexamen`, `examen`, `estatusexamen`, `idconsulta`, `idttipoexamen`, `idtlaboratorio`) VALUES
(1, 'VRL', '1', 1, 1, 1),
(2, 'VRL', '1', 7, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tlaboratorio`
--

CREATE TABLE IF NOT EXISTS `tlaboratorio` (
  `idtlaboratorio` int(11) NOT NULL AUTO_INCREMENT,
  `laboratorio` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `estatuslaboratorio` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idtlaboratorio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tlaboratorio`
--

INSERT INTO `tlaboratorio` (`idtlaboratorio`, `laboratorio`, `estatuslaboratorio`) VALUES
(1, 'Puente Araure', '1'),
(2, 'Acariguad', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmodulo`
--

CREATE TABLE IF NOT EXISTS `tmodulo` (
  `idtmodulo` int(11) NOT NULL AUTO_INCREMENT,
  `nombremod` varchar(45) NOT NULL,
  `iconomod` varchar(255) NOT NULL,
  PRIMARY KEY (`idtmodulo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `tmodulo`
--

INSERT INTO `tmodulo` (`idtmodulo`, `nombremod`, `iconomod`) VALUES
(1, 'Seguridad', 'fa fa-lock'),
(7, 'ConfiguraciÃ³n', 'fa fa-cog'),
(8, 'Consulta', 'fa fa-medkit'),
(9, 'Paciente', 'fa fa-wheelchair'),
(10, 'Personal', 'fa fa-user-md'),
(11, 'Perfil', 'fa fa-user'),
(12, 'Reportes', 'fa fa-file-text');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmunicipio`
--

CREATE TABLE IF NOT EXISTS `tmunicipio` (
  `idtmunicipio` int(11) NOT NULL AUTO_INCREMENT,
  `municipio` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `statusmunicipio` int(11) NOT NULL,
  `idestado` int(11) NOT NULL,
  PRIMARY KEY (`idtmunicipio`),
  KEY `fk_tmunicipio_testado1_idx` (`idestado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tmunicipio`
--

INSERT INTO `tmunicipio` (`idtmunicipio`, `municipio`, `statusmunicipio`, `idestado`) VALUES
(1, 'Araure', 1, 1),
(2, 'Paez', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tpaciente`
--

CREATE TABLE IF NOT EXISTS `tpaciente` (
  `idpaciente` int(11) NOT NULL AUTO_INCREMENT,
  `cedulaopasaporte` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `nacionalidad` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `primernombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `segundonombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `primerapellido` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `segundoapellido` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `sexo` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` char(11) COLLATE utf8_spanish_ci NOT NULL,
  `celular` char(11) COLLATE utf8_spanish_ci NOT NULL,
  `numerohistoria` int(11) NOT NULL,
  `antecedentepersonal` text COLLATE utf8_spanish_ci NOT NULL,
  `antecedentefamiliar` text COLLATE utf8_spanish_ci NOT NULL,
  `alergia` text COLLATE utf8_spanish_ci NOT NULL,
  `observacion` text COLLATE utf8_spanish_ci NOT NULL,
  `estatuspaciente` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `idtsede` int(11) NOT NULL,
  `idparroquia` int(11) NOT NULL,
  `idtetnia` int(11) NOT NULL,
  `idttipopaciente` int(11) NOT NULL,
  `tcarrera_idtcarrera` int(11) NOT NULL,
  `tdepartamento_iddepartamento` int(11) NOT NULL,
  `modalidadpac` varchar(45) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Trimestre,Semestre',
  `numeromodalidadpac` int(11) NOT NULL COMMENT '1,2,3 semestre,trimestre',
  `documento` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idpaciente`),
  KEY `fk_tpaciente_tsede1_idx` (`idtsede`),
  KEY `fk_tpaciente_tparroquia1_idx` (`idparroquia`),
  KEY `fk_tpaciente_tetnia1_idx` (`idtetnia`),
  KEY `fk_tpaciente_ttipopaciente1_idx` (`idttipopaciente`),
  KEY `fk_tpaciente_tcarrera1_idx` (`tcarrera_idtcarrera`),
  KEY `fk_tpaciente_tdepartamento1_idx` (`tdepartamento_iddepartamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tpaciente`
--

INSERT INTO `tpaciente` (`idpaciente`, `cedulaopasaporte`, `nacionalidad`, `primernombre`, `segundonombre`, `primerapellido`, `segundoapellido`, `direccion`, `sexo`, `telefono`, `celular`, `numerohistoria`, `antecedentepersonal`, `antecedentefamiliar`, `alergia`, `observacion`, `estatuspaciente`, `idtsede`, `idparroquia`, `idtetnia`, `idttipopaciente`, `tcarrera_idtcarrera`, `tdepartamento_iddepartamento`, `modalidadpac`, `numeromodalidadpac`, `documento`) VALUES
(2, '80235983509', 'E', 'BARAK', 'HUSEIIN', 'OBAMA', 'SBRESRB', 'HAWAI', 'M', '02554582736', '02534576015', 0, 'DVASDV', 'ASDVASDV', 'ASDVASDV', 'ASDVASDV', '1', 1, 1, 1, 2, 1, 1, 'TRIMESTRE', 2, 'PASAPORTE'),
(4, '20156541', 'V', 'AMILCAR', 'JOSE', 'MORALES', 'VIVAS', 'URB AGUA CLARA CONJ 4 CASA NRO 40', 'M', '02556648425', '04245026277', 0, 'NO', 'NO', 'NO', 'NO', '1', 1, 1, 1, 1, 1, 1, 'TRIMESTRE', 10, 'CEDULA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tpaciente_alergia`
--

CREATE TABLE IF NOT EXISTS `tpaciente_alergia` (
  `tpaciente_idpaciente` int(11) NOT NULL,
  `talergia_idalergia` int(11) NOT NULL,
  KEY `tpaciente_idpaciente` (`tpaciente_idpaciente`),
  KEY `talergia_idalergia` (`talergia_idalergia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tpaciente_alergia`
--

INSERT INTO `tpaciente_alergia` (`tpaciente_idpaciente`, `talergia_idalergia`) VALUES
(4, 1),
(4, 3),
(4, 5),
(2, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tpaciente_has_tdiscapacidad`
--

CREATE TABLE IF NOT EXISTS `tpaciente_has_tdiscapacidad` (
  `tpaciente_idpaciente` int(11) NOT NULL,
  `tdiscapacidad_idtdiscapacidad` int(11) NOT NULL,
  PRIMARY KEY (`tpaciente_idpaciente`,`tdiscapacidad_idtdiscapacidad`),
  KEY `fk_tpaciente_has_tdiscapacidad_tdiscapacidad1_idx` (`tdiscapacidad_idtdiscapacidad`),
  KEY `fk_tpaciente_has_tdiscapacidad_tpaciente1_idx` (`tpaciente_idpaciente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tpaciente_has_tdiscapacidad`
--

INSERT INTO `tpaciente_has_tdiscapacidad` (`tpaciente_idpaciente`, `tdiscapacidad_idtdiscapacidad`) VALUES
(2, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tpaciente_has_tenfermedadescronicas`
--

CREATE TABLE IF NOT EXISTS `tpaciente_has_tenfermedadescronicas` (
  `tpaciente_idpaciente` int(11) NOT NULL,
  `tenfermedadescronicas_idtenfermedadescronicas` int(11) NOT NULL,
  PRIMARY KEY (`tpaciente_idpaciente`,`tenfermedadescronicas_idtenfermedadescronicas`),
  KEY `fk_tpaciente_has_tenfermedadescronicas_tenfermedadescronica_idx` (`tenfermedadescronicas_idtenfermedadescronicas`),
  KEY `fk_tpaciente_has_tenfermedadescronicas_tpaciente1_idx` (`tpaciente_idpaciente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tpaciente_has_tenfermedadescronicas`
--

INSERT INTO `tpaciente_has_tenfermedadescronicas` (`tpaciente_idpaciente`, `tenfermedadescronicas_idtenfermedadescronicas`) VALUES
(2, 1),
(4, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tparroquia`
--

CREATE TABLE IF NOT EXISTS `tparroquia` (
  `idparroquia` int(11) NOT NULL AUTO_INCREMENT,
  `parroquia` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `estatusparroquia` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `idtmunicipio` int(11) NOT NULL,
  PRIMARY KEY (`idparroquia`),
  KEY `fk_tparroquia_tmunicipio1_idx` (`idtmunicipio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tparroquia`
--

INSERT INTO `tparroquia` (`idparroquia`, `parroquia`, `estatusparroquia`, `idtmunicipio`) VALUES
(1, 'Capital Araure', '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tpersonal`
--

CREATE TABLE IF NOT EXISTS `tpersonal` (
  `idpersonal` int(11) NOT NULL AUTO_INCREMENT,
  `cedulaopasaporte` varchar(14) COLLATE utf8_spanish_ci NOT NULL,
  `nacionalidad` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `primernombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `segundonombre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `primerapellido` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `segundoapellido` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sexo` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` char(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `celular` char(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `observacion` text COLLATE utf8_spanish_ci,
  `estatuspersonal` char(1) COLLATE utf8_spanish_ci NOT NULL DEFAULT '1',
  `ttipopersonal_idtipo_personal` int(11) NOT NULL,
  `trol_idrol` int(11) NOT NULL,
  PRIMARY KEY (`idpersonal`),
  KEY `ttipopersonal_idtipo_personal` (`ttipopersonal_idtipo_personal`),
  KEY `trol_idrol` (`trol_idrol`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tpersonal`
--

INSERT INTO `tpersonal` (`idpersonal`, `cedulaopasaporte`, `nacionalidad`, `primernombre`, `segundonombre`, `primerapellido`, `segundoapellido`, `direccion`, `sexo`, `telefono`, `celular`, `observacion`, `estatuspersonal`, `ttipopersonal_idtipo_personal`, `trol_idrol`) VALUES
(3, 'Administrador', 'V', 'Administrador', NULL, ' ', NULL, NULL, 'M', NULL, NULL, NULL, '1', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `treferencia`
--

CREATE TABLE IF NOT EXISTS `treferencia` (
  `idreferencia` int(11) NOT NULL AUTO_INCREMENT,
  `referidoa` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `estatusreferencia` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `idconsulta` int(11) NOT NULL,
  `tcentroasistencial_idtcentroasistencial` int(11) NOT NULL,
  `ttiporeferencia_idtiporeferencia` int(11) NOT NULL,
  PRIMARY KEY (`idreferencia`),
  KEY `fk_treferencia_tconsulta1_idx` (`idconsulta`),
  KEY `fk_treferencia_tcentroasistencial1_idx` (`tcentroasistencial_idtcentroasistencial`),
  KEY `fk_treferencia_ttiporeferencia1_idx` (`ttiporeferencia_idtiporeferencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `treferencia`
--

INSERT INTO `treferencia` (`idreferencia`, `referidoa`, `estatusreferencia`, `idconsulta`, `tcentroasistencial_idtcentroasistencial`, `ttiporeferencia_idtiporeferencia`) VALUES
(1, 'JOYMAR ESCALONA', '1', 1, 1, 2),
(2, 'JOYMAR ESCALONA', '1', 7, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trol`
--

CREATE TABLE IF NOT EXISTS `trol` (
  `idtrol` int(11) NOT NULL AUTO_INCREMENT,
  `nombrerol` varchar(45) NOT NULL,
  PRIMARY KEY (`idtrol`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `trol`
--

INSERT INTO `trol` (`idtrol`, `nombrerol`) VALUES
(1, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trol_has_tmodulo`
--

CREATE TABLE IF NOT EXISTS `trol_has_tmodulo` (
  `trol_idtrol` int(11) NOT NULL,
  `tmodulo_idtmodulo` int(11) NOT NULL,
  `posicion` int(11) NOT NULL,
  PRIMARY KEY (`trol_idtrol`,`tmodulo_idtmodulo`),
  KEY `fk_trol_has_tmodulo_trol_idx` (`trol_idtrol`),
  KEY `fk_trol_has_tmodulo_tmodulo_idx` (`tmodulo_idtmodulo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trol_has_tmodulo`
--

INSERT INTO `trol_has_tmodulo` (`trol_idtrol`, `tmodulo_idtmodulo`, `posicion`) VALUES
(1, 1, 6),
(1, 7, 7),
(1, 8, 1),
(1, 9, 2),
(1, 10, 3),
(1, 11, 4),
(1, 12, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trol_has_tservicio`
--

CREATE TABLE IF NOT EXISTS `trol_has_tservicio` (
  `trol_idtrol` int(11) NOT NULL,
  `tservicio_idtservicio` int(11) NOT NULL,
  PRIMARY KEY (`trol_idtrol`,`tservicio_idtservicio`),
  KEY `fk_trol_has_tservicio_trol1_idx` (`trol_idtrol`),
  KEY `fk_trol_has_tservicio_tservicio1_idx` (`tservicio_idtservicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trol_has_tservicio`
--

INSERT INTO `trol_has_tservicio` (`trol_idtrol`, `tservicio_idtservicio`) VALUES
(1, 1),
(1, 2),
(1, 4),
(1, 5),
(1, 7),
(1, 8),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 29),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 46),
(1, 47),
(1, 48),
(1, 49),
(1, 50),
(1, 51),
(1, 52),
(1, 53),
(1, 54),
(1, 55),
(1, 56),
(1, 57),
(1, 58),
(1, 59),
(1, 60),
(1, 61),
(1, 62),
(1, 64),
(1, 65),
(1, 66),
(1, 67),
(1, 68),
(1, 69);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tsede`
--

CREATE TABLE IF NOT EXISTS `tsede` (
  `idtsede` int(11) NOT NULL AUTO_INCREMENT,
  `sede` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `direccionsede` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `estatus` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idtsede`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tsede`
--

INSERT INTO `tsede` (`idtsede`, `sede`, `direccionsede`, `estatus`) VALUES
(1, 'Sede de prueba', 'Sede de prueba', '1'),
(2, 'Sede de prueba2', 'Sede de prueba2', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tservicio`
--

CREATE TABLE IF NOT EXISTS `tservicio` (
  `idtservicio` int(11) NOT NULL AUTO_INCREMENT,
  `nombreser` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `enlaceser` varchar(40) NOT NULL,
  `visibleser` char(1) DEFAULT NULL,
  `tmodulo_idtmodulo` int(11) NOT NULL,
  PRIMARY KEY (`idtservicio`),
  KEY `fk_tservicio_tmodulo1_idx` (`tmodulo_idtmodulo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=70 ;

--
-- Volcado de datos para la tabla `tservicio`
--

INSERT INTO `tservicio` (`idtservicio`, `nombreser`, `enlaceser`, `visibleser`, `tmodulo_idtmodulo`) VALUES
(1, 'MÃ³dulos', 'seguridad/modulo', '1', 1),
(2, 'Registrar modulo', 'seguridad/registrar_modulo', '0', 1),
(4, 'Servicio', 'seguridad/servicio', '1', 1),
(5, 'Registrar servicio', 'seguridad/registrar_servicio', '0', 1),
(7, 'Rol', 'seguridad/rol', '1', 1),
(8, 'Registrar rol', 'seguridad/registrar_rol', '0', 1),
(10, 'Asignacion de modulos/servicios', 'seguridad/asignacion', '1', 1),
(11, 'Asignar mÃ³dulos', 'seguridad/asignar_modulo', '0', 1),
(12, 'Asignar servicios', 'seguridad/asignar_servicio', '0', 1),
(13, 'Consultar mÃ³dulo', 'seguridad/consultar_modulo', '0', 1),
(14, 'Consultar servicio', 'seguridad/consultar_servicio', '0', 1),
(15, 'Consultar rol', 'seguridad/consultar_rol', '0', 1),
(16, 'Eliminar servicio', 'seguridad/eliminar_servicio', '0', 1),
(29, 'Eliminar mÃ³dulo', 'modulo/eliminar_modulo', '0', 1),
(32, 'Tipo Examen', 'configuracion/tipoexamen', '1', 7),
(33, 'Registrar tipo examen', 'configuracion/registrar_tipoexamen', '0', 7),
(34, 'Consultar tipo examen', 'configuracion/consultar_tipoexamen', '0', 7),
(35, 'Eliminar tipo examen', 'configuracion/eliminar_tipoexamen', '0', 7),
(36, 'Carrera', 'configuracion/carrera', '1', 7),
(37, 'Centro asistencial', 'configuracion/centroasistencial', '1', 7),
(38, 'Departamento', 'configuracion/departamento', '1', 7),
(39, 'Discapacidad', 'configuracion/discapacidad', '1', 7),
(40, 'Enfermedades CrÃ³nicas', 'configuracion/enfermedadescronicas', '1', 7),
(41, 'Estado', 'configuracion/estado', '1', 7),
(42, 'Etnia', 'configuracion/etnia', '1', 7),
(43, 'Laboratorio', 'configuracion/laboratorio', '1', 7),
(44, 'Municipio', 'configuracion/municipio', '1', 7),
(45, 'Parroquia', 'configuracion/parroquia', '1', 7),
(46, 'Sede', 'configuracion/sede', '1', 7),
(47, 'Tipo Paciente', 'configuracion/tipo_paciente', '1', 7),
(48, 'Tipo Referencia', 'configuracion/tiporeferencia', '1', 7),
(49, 'Consulta', 'consulta/consulta', '1', 8),
(50, 'Registrar Consulta', 'consulta/registrar_consulta', '0', 8),
(51, 'Consultar Consulta', 'consulta/consultar_consulta', '0', 8),
(52, 'Eliminar consulta', 'consulta_eliminar', '0', 8),
(53, 'Paciente', 'paciente/paciente', '1', 9),
(54, 'Registrar Paciente', 'paciente/registrar_paciente', '0', 9),
(55, 'Consulta Paciente', 'paciente/consultar_paciente', '0', 9),
(56, 'Eliminar Paciente', 'paciente/eliminar_paciente', '0', 9),
(57, 'Personal', 'personal/personal', '1', 10),
(58, 'Registrar Personal', 'personal/registrar_personal', '0', 10),
(59, 'Tipo Personal', 'configuracion/tipo_personal', '1', 7),
(60, 'Mi Perfil', 'perfil/perfil', '1', 11),
(61, 'Cambiar clave', 'perfil/cambiar_clave', '1', 11),
(62, 'Consultas Diarias', 'reporte/consultas_diaria', '1', 12),
(63, 'Referencia', 'reporte/referencia', '1', 12),
(64, 'Consultas', 'reporte/consultas', '1', 12),
(65, 'Alergia', 'configuracion/alergia', '1', 7),
(66, 'Registrar Alegia', 'configuracion/registrar_alergia', '0', 7),
(67, 'Consultar Alergia', 'configuracion/consultar_alergia', '0', 7),
(68, 'Eliminar Alergia', 'configuracion/eliminar_alergia', '0', 7),
(69, 'Examen/Referencia', 'reporte/examen_referencia', '1', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ttipoexamen`
--

CREATE TABLE IF NOT EXISTS `ttipoexamen` (
  `idttipoexamen` int(11) NOT NULL AUTO_INCREMENT,
  `tipoexamen` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `estatustipoexamen` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idttipoexamen`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `ttipoexamen`
--

INSERT INTO `ttipoexamen` (`idttipoexamen`, `tipoexamen`, `estatustipoexamen`) VALUES
(1, 'Heces', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ttipopaciente`
--

CREATE TABLE IF NOT EXISTS `ttipopaciente` (
  `idttipopaciente` int(11) NOT NULL AUTO_INCREMENT,
  `tipopaciente` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `estatuspaciente` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idttipopaciente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `ttipopaciente`
--

INSERT INTO `ttipopaciente` (`idttipopaciente`, `tipopaciente`, `estatuspaciente`) VALUES
(1, 'Estudiante', '1'),
(2, 'Trabajador', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ttipopersonal`
--

CREATE TABLE IF NOT EXISTS `ttipopersonal` (
  `idtipopersonal` int(11) NOT NULL AUTO_INCREMENT,
  `tipopersonal` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `estatuspersonal` char(1) COLLATE utf8_spanish_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`idtipopersonal`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `ttipopersonal`
--

INSERT INTO `ttipopersonal` (`idtipopersonal`, `tipopersonal`, `estatuspersonal`) VALUES
(1, 'Doctor', '1'),
(2, 'Enfermera', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ttiporeferencia`
--

CREATE TABLE IF NOT EXISTS `ttiporeferencia` (
  `idtiporeferencia` int(11) NOT NULL AUTO_INCREMENT,
  `tiporeferencia` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `estatusreferencia` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idtiporeferencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `ttiporeferencia`
--

INSERT INTO `ttiporeferencia` (`idtiporeferencia`, `tiporeferencia`, `estatusreferencia`) VALUES
(1, 'Odontologo', '1'),
(2, 'Traumatologo', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tusuario`
--

CREATE TABLE IF NOT EXISTS `tusuario` (
  `idtusuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(55) COLLATE utf8_spanish_ci NOT NULL,
  `rol` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `estatus` char(1) COLLATE utf8_spanish_ci NOT NULL DEFAULT '1',
  `tpersonal_idpersonal` int(11) NOT NULL,
  `pregunta_uno` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `respuesta_uno` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pregunta_dos` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `respuesta_dos` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pregunta_tres` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `respuesta_tres` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idtusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tusuario`
--

INSERT INTO `tusuario` (`idtusuario`, `usuario`, `clave`, `rol`, `estatus`, `tpersonal_idpersonal`, `pregunta_uno`, `respuesta_uno`, `pregunta_dos`, `respuesta_dos`, `pregunta_tres`, `respuesta_tres`) VALUES
(1, 'Administrador', '2a2e9a58102784ca18e2605a4e727b5f', '1', '1', 0, '', '', '', '', '', '');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tconsulta`
--
ALTER TABLE `tconsulta`
  ADD CONSTRAINT `fk_tconsulta_tdoctor1` FOREIGN KEY (`idtdoctor`) REFERENCES `tdoctor` (`idtdoctor`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tconsulta_tpaciente1` FOREIGN KEY (`tpaciente_idpaciente`) REFERENCES `tpaciente` (`idpaciente`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tdoctor`
--
ALTER TABLE `tdoctor`
  ADD CONSTRAINT `fk_tdoctor_tsede1` FOREIGN KEY (`idtsede`) REFERENCES `tsede` (`idtsede`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `texamen`
--
ALTER TABLE `texamen`
  ADD CONSTRAINT `fk_texamen_tconsulta1` FOREIGN KEY (`idconsulta`) REFERENCES `tconsulta` (`idconsulta`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_texamen_ttipoexamen1` FOREIGN KEY (`idttipoexamen`) REFERENCES `ttipoexamen` (`idttipoexamen`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `texamen_ibfk_1` FOREIGN KEY (`idtlaboratorio`) REFERENCES `tlaboratorio` (`idtlaboratorio`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `tmunicipio`
--
ALTER TABLE `tmunicipio`
  ADD CONSTRAINT `fk_tmunicipio_testado1` FOREIGN KEY (`idestado`) REFERENCES `testado` (`idestado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tpaciente`
--
ALTER TABLE `tpaciente`
  ADD CONSTRAINT `fk_tpaciente_tcarrera1` FOREIGN KEY (`tcarrera_idtcarrera`) REFERENCES `tcarrera` (`idtcarrera`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tpaciente_tdepartamento1` FOREIGN KEY (`tdepartamento_iddepartamento`) REFERENCES `tdepartamento` (`iddepartamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tpaciente_tetnia1` FOREIGN KEY (`idtetnia`) REFERENCES `tetnia` (`idtetnia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tpaciente_tparroquia1` FOREIGN KEY (`idparroquia`) REFERENCES `tparroquia` (`idparroquia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tpaciente_tsede1` FOREIGN KEY (`idtsede`) REFERENCES `tsede` (`idtsede`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tpaciente_ttipopaciente1` FOREIGN KEY (`idttipopaciente`) REFERENCES `ttipopaciente` (`idttipopaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tpaciente_alergia`
--
ALTER TABLE `tpaciente_alergia`
  ADD CONSTRAINT `tpaciente_alergia_ibfk_1` FOREIGN KEY (`tpaciente_idpaciente`) REFERENCES `tpaciente` (`idpaciente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tpaciente_alergia_ibfk_2` FOREIGN KEY (`talergia_idalergia`) REFERENCES `talergia` (`idalergia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tpaciente_has_tdiscapacidad`
--
ALTER TABLE `tpaciente_has_tdiscapacidad`
  ADD CONSTRAINT `fk_tpaciente_has_tdiscapacidad_tdiscapacidad1` FOREIGN KEY (`tdiscapacidad_idtdiscapacidad`) REFERENCES `tdiscapacidad` (`idtdiscapacidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tpaciente_has_tdiscapacidad_tpaciente1` FOREIGN KEY (`tpaciente_idpaciente`) REFERENCES `tpaciente` (`idpaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tpaciente_has_tenfermedadescronicas`
--
ALTER TABLE `tpaciente_has_tenfermedadescronicas`
  ADD CONSTRAINT `fk_tpaciente_has_tenfermedadescronicas_tenfermedadescronicas1` FOREIGN KEY (`tenfermedadescronicas_idtenfermedadescronicas`) REFERENCES `tenfermedadescronicas` (`idtenfermedadescronicas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tpaciente_has_tenfermedadescronicas_tpaciente1` FOREIGN KEY (`tpaciente_idpaciente`) REFERENCES `tpaciente` (`idpaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tparroquia`
--
ALTER TABLE `tparroquia`
  ADD CONSTRAINT `fk_tparroquia_tmunicipio1` FOREIGN KEY (`idtmunicipio`) REFERENCES `tmunicipio` (`idtmunicipio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tpersonal`
--
ALTER TABLE `tpersonal`
  ADD CONSTRAINT `tpersonal_ibfk_1` FOREIGN KEY (`ttipopersonal_idtipo_personal`) REFERENCES `ttipopersonal` (`idtipopersonal`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tpersonal_ibfk_2` FOREIGN KEY (`trol_idrol`) REFERENCES `trol` (`idtrol`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `treferencia`
--
ALTER TABLE `treferencia`
  ADD CONSTRAINT `fk_treferencia_tcentroasistencial1` FOREIGN KEY (`tcentroasistencial_idtcentroasistencial`) REFERENCES `tcentroasistencial` (`idtcentroasistencial`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_treferencia_tconsulta1` FOREIGN KEY (`idconsulta`) REFERENCES `tconsulta` (`idconsulta`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_treferencia_ttiporeferencia1` FOREIGN KEY (`ttiporeferencia_idtiporeferencia`) REFERENCES `ttiporeferencia` (`idtiporeferencia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
