-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-04-2015 a las 03:25:58
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1624 ;



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
  PRIMARY KEY (`idtmodulo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `tmodulo`
--

INSERT INTO `tmodulo` (`idtmodulo`, `nombremod`) VALUES
(1, 'Seguridad'),
(7, 'ConfiguraciÃ³n'),
(8, 'Consulta'),
(9, 'Paciente'),
(10, 'Personal'),
(11, 'Perfil'),
(12, 'Reportes');

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
  PRIMARY KEY (`idpaciente`),
  KEY `fk_tpaciente_tsede1_idx` (`idtsede`),
  KEY `fk_tpaciente_tparroquia1_idx` (`idparroquia`),
  KEY `fk_tpaciente_tetnia1_idx` (`idtetnia`),
  KEY `fk_tpaciente_ttipopaciente1_idx` (`idttipopaciente`),
  KEY `fk_tpaciente_tcarrera1_idx` (`tcarrera_idtcarrera`),
  KEY `fk_tpaciente_tdepartamento1_idx` (`tdepartamento_iddepartamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tpaciente`
--

INSERT INTO `tpaciente` (`idpaciente`, `cedulaopasaporte`, `nacionalidad`, `primernombre`, `segundonombre`, `primerapellido`, `segundoapellido`, `direccion`, `sexo`, `telefono`, `celular`, `numerohistoria`, `antecedentepersonal`, `antecedentefamiliar`, `alergia`, `observacion`, `estatuspaciente`, `idtsede`, `idparroquia`, `idtetnia`, `idttipopaciente`, `tcarrera_idtcarrera`, `tdepartamento_iddepartamento`, `modalidadpac`, `numeromodalidadpac`) VALUES
(2, '80235983509', 'E', 'BARAK', 'HUSEIIN', 'OBAMA', 'SBRESRB', 'HAWAI', 'M', '02554582736', '02534576015', 0, 'DVASDV', 'ASDVASDV', 'ASDVASDV', 'ASDVASDV', '1', 1, 1, 1, 2, 1, 1, 'TRIMESTRE', 2);

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
  PRIMARY KEY (`trol_idtrol`,`tmodulo_idtmodulo`),
  KEY `fk_trol_has_tmodulo_trol_idx` (`trol_idtrol`),
  KEY `fk_trol_has_tmodulo_tmodulo_idx` (`tmodulo_idtmodulo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trol_has_tmodulo`
--

INSERT INTO `trol_has_tmodulo` (`trol_idtrol`, `tmodulo_idtmodulo`) VALUES
(1, 1),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12);

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
(1, 64);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=65 ;

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
(64, 'Consultas', 'reporte/consultas', '1', 12);

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
  PRIMARY KEY (`idtusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tusuario`
--

INSERT INTO `tusuario` (`idtusuario`, `usuario`, `clave`, `rol`, `estatus`, `tpersonal_idpersonal`) VALUES
(1, 'Administrador', '2a2e9a58102784ca18e2605a4e727b5f', '1', '1', 0);

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
  ADD CONSTRAINT `tpaciente_alergia_ibfk_2` FOREIGN KEY (`talergia_idalergia`) REFERENCES `talergia` (`idalergia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tpaciente_alergia_ibfk_1` FOREIGN KEY (`tpaciente_idpaciente`) REFERENCES `tpaciente` (`idpaciente`) ON DELETE CASCADE ON UPDATE CASCADE;

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
