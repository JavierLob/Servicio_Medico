-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-03-2015 a las 03:59:39
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
  `estatusconsulta` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `fecha consulta` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
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
  PRIMARY KEY (`idconsulta`),
  KEY `fk_tconsulta_tdoctor1_idx` (`idtdoctor`),
  KEY `fk_tconsulta_tpaciente1_idx` (`tpaciente_idpaciente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

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
(2, 'Acarigua', '1');

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
  `nacionalidad` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `primernombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `segundonombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `primerapellido` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `segundoapellido` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `sexo` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `celular` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `numerohistoria` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `antecedentepersonal` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `antecedentefamiliar` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `alergia` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `observacion` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `estatuspaciente` int(11) NOT NULL,
  `idtsede` int(11) NOT NULL,
  `idparroquia` int(11) NOT NULL,
  `idtetnia` int(11) NOT NULL,
  `idttipopaciente` int(11) NOT NULL,
  `tcarrera_idtcarrera` int(11) NOT NULL,
  `tdepartamento_iddepartamento` int(11) NOT NULL,
  PRIMARY KEY (`idpaciente`),
  KEY `fk_tpaciente_tsede1_idx` (`idtsede`),
  KEY `fk_tpaciente_tparroquia1_idx` (`idparroquia`),
  KEY `fk_tpaciente_tetnia1_idx` (`idtetnia`),
  KEY `fk_tpaciente_ttipopaciente1_idx` (`idttipopaciente`),
  KEY `fk_tpaciente_tcarrera1_idx` (`tcarrera_idtcarrera`),
  KEY `fk_tpaciente_tdepartamento1_idx` (`tdepartamento_iddepartamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

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
(1, 'Enfermo', '1'),
(2, 'Medio Enfermo', '1');

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
  PRIMARY KEY (`idtusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tusuario`
--

INSERT INTO `tusuario` (`idtusuario`, `usuario`, `clave`, `rol`, `estatus`) VALUES
(1, 'doctor', '1f0160076c9f42a157f0a8f0dcc68e02ff69045b', '1', '1');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tconsulta`
--
ALTER TABLE `tconsulta`
  ADD CONSTRAINT `fk_tconsulta_tdoctor1` FOREIGN KEY (`idtdoctor`) REFERENCES `tdoctor` (`idtdoctor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tconsulta_tpaciente1` FOREIGN KEY (`tpaciente_idpaciente`) REFERENCES `tpaciente` (`idpaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tdoctor`
--
ALTER TABLE `tdoctor`
  ADD CONSTRAINT `fk_tdoctor_tsede1` FOREIGN KEY (`idtsede`) REFERENCES `tsede` (`idtsede`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `texamen`
--
ALTER TABLE `texamen`
  ADD CONSTRAINT `texamen_ibfk_1` FOREIGN KEY (`idtlaboratorio`) REFERENCES `tlaboratorio` (`idtlaboratorio`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_texamen_tconsulta1` FOREIGN KEY (`idconsulta`) REFERENCES `tconsulta` (`idconsulta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_texamen_ttipoexamen1` FOREIGN KEY (`idttipoexamen`) REFERENCES `ttipoexamen` (`idttipoexamen`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tmunicipio`
--
ALTER TABLE `tmunicipio`
  ADD CONSTRAINT `fk_tmunicipio_testado1` FOREIGN KEY (`idestado`) REFERENCES `testado` (`idestado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tpaciente`
--
ALTER TABLE `tpaciente`
  ADD CONSTRAINT `fk_tpaciente_tsede1` FOREIGN KEY (`idtsede`) REFERENCES `tsede` (`idtsede`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tpaciente_tparroquia1` FOREIGN KEY (`idparroquia`) REFERENCES `tparroquia` (`idparroquia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tpaciente_tetnia1` FOREIGN KEY (`idtetnia`) REFERENCES `tetnia` (`idtetnia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tpaciente_ttipopaciente1` FOREIGN KEY (`idttipopaciente`) REFERENCES `ttipopaciente` (`idttipopaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tpaciente_tcarrera1` FOREIGN KEY (`tcarrera_idtcarrera`) REFERENCES `tcarrera` (`idtcarrera`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tpaciente_tdepartamento1` FOREIGN KEY (`tdepartamento_iddepartamento`) REFERENCES `tdepartamento` (`iddepartamento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tpaciente_has_tdiscapacidad`
--
ALTER TABLE `tpaciente_has_tdiscapacidad`
  ADD CONSTRAINT `fk_tpaciente_has_tdiscapacidad_tpaciente1` FOREIGN KEY (`tpaciente_idpaciente`) REFERENCES `tpaciente` (`idpaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tpaciente_has_tdiscapacidad_tdiscapacidad1` FOREIGN KEY (`tdiscapacidad_idtdiscapacidad`) REFERENCES `tdiscapacidad` (`idtdiscapacidad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tpaciente_has_tenfermedadescronicas`
--
ALTER TABLE `tpaciente_has_tenfermedadescronicas`
  ADD CONSTRAINT `fk_tpaciente_has_tenfermedadescronicas_tpaciente1` FOREIGN KEY (`tpaciente_idpaciente`) REFERENCES `tpaciente` (`idpaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tpaciente_has_tenfermedadescronicas_tenfermedadescronicas1` FOREIGN KEY (`tenfermedadescronicas_idtenfermedadescronicas`) REFERENCES `tenfermedadescronicas` (`idtenfermedadescronicas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tparroquia`
--
ALTER TABLE `tparroquia`
  ADD CONSTRAINT `fk_tparroquia_tmunicipio1` FOREIGN KEY (`idtmunicipio`) REFERENCES `tmunicipio` (`idtmunicipio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `treferencia`
--
ALTER TABLE `treferencia`
  ADD CONSTRAINT `fk_treferencia_tconsulta1` FOREIGN KEY (`idconsulta`) REFERENCES `tconsulta` (`idconsulta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_treferencia_tcentroasistencial1` FOREIGN KEY (`tcentroasistencial_idtcentroasistencial`) REFERENCES `tcentroasistencial` (`idtcentroasistencial`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_treferencia_ttiporeferencia1` FOREIGN KEY (`ttiporeferencia_idtiporeferencia`) REFERENCES `ttiporeferencia` (`idtiporeferencia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
