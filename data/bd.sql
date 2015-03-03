SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `bdsm` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci ;
USE `bdsm` ;

-- -----------------------------------------------------
-- Table `bdsm`.`tsede`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bdsm`.`tsede` ;

CREATE TABLE IF NOT EXISTS `bdsm`.`tsede` (
  `idtsede` INT NOT NULL AUTO_INCREMENT,
  `sede` VARCHAR(45) NOT NULL,
  `direccionsede` VARCHAR(45) NOT NULL,
  `estatus` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idtsede`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bdsm`.`testado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bdsm`.`testado` ;

CREATE TABLE IF NOT EXISTS `bdsm`.`testado` (
  `idestado` INT NOT NULL AUTO_INCREMENT,
  `estado` VARCHAR(45) NOT NULL,
  `estatusestado` INT NOT NULL,
  PRIMARY KEY (`idestado`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bdsm`.`tmunicipio`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bdsm`.`tmunicipio` ;

CREATE TABLE IF NOT EXISTS `bdsm`.`tmunicipio` (
  `idtmunicipio` INT NOT NULL AUTO_INCREMENT,
  `municipio` VARCHAR(45) NOT NULL,
  `statusmunicipio` INT NOT NULL,
  `idestado` INT NOT NULL,
  PRIMARY KEY (`idtmunicipio`),
  INDEX `fk_tmunicipio_testado1_idx` (`idestado` ASC),
  CONSTRAINT `fk_tmunicipio_testado1`
    FOREIGN KEY (`idestado`)
    REFERENCES `bdsm`.`testado` (`idestado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bdsm`.`tparroquia`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bdsm`.`tparroquia` ;

CREATE TABLE IF NOT EXISTS `bdsm`.`tparroquia` (
  `idparroquia` INT NOT NULL AUTO_INCREMENT,
  `parroquia` VARCHAR(45) NOT NULL,
  `estatusparroquia` VARCHAR(45) NOT NULL,
  `idtmunicipio` INT NOT NULL,
  PRIMARY KEY (`idparroquia`),
  INDEX `fk_tparroquia_tmunicipio1_idx` (`idtmunicipio` ASC),
  CONSTRAINT `fk_tparroquia_tmunicipio1`
    FOREIGN KEY (`idtmunicipio`)
    REFERENCES `bdsm`.`tmunicipio` (`idtmunicipio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bdsm`.`tetnia`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bdsm`.`tetnia` ;

CREATE TABLE IF NOT EXISTS `bdsm`.`tetnia` (
  `idtetnia` INT NOT NULL AUTO_INCREMENT,
  `etnia` VARCHAR(45) NOT NULL,
  `estatusetnia` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idtetnia`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bdsm`.`ttipopaciente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bdsm`.`ttipopaciente` ;

CREATE TABLE IF NOT EXISTS `bdsm`.`ttipopaciente` (
  `idttipopaciente` INT NOT NULL AUTO_INCREMENT,
  `tipopaciente` VARCHAR(45) NOT NULL,
  `estatuspaciente` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idttipopaciente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bdsm`.`tcarrera`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bdsm`.`tcarrera` ;

CREATE TABLE IF NOT EXISTS `bdsm`.`tcarrera` (
  `idtcarrera` INT NOT NULL AUTO_INCREMENT,
  `carrera` VARCHAR(45) NOT NULL,
  `estatuscarrera` INT NOT NULL,
  PRIMARY KEY (`idtcarrera`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bdsm`.`tdepartamento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bdsm`.`tdepartamento` ;

CREATE TABLE IF NOT EXISTS `bdsm`.`tdepartamento` (
  `iddepartamento` INT NOT NULL AUTO_INCREMENT,
  `departamento` VARCHAR(45) NOT NULL,
  `estatusdepartamento` INT NOT NULL,
  PRIMARY KEY (`iddepartamento`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bdsm`.`tpaciente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bdsm`.`tpaciente` ;

CREATE TABLE IF NOT EXISTS `bdsm`.`tpaciente` (
  `idpaciente` INT NOT NULL AUTO_INCREMENT,
  `cedulaopasaporte` VARCHAR(11) NOT NULL,
  `nacionalidad` VARCHAR(45) NOT NULL,
  `primernombre` VARCHAR(45) NOT NULL,
  `segundonombre` VARCHAR(45) NOT NULL,
  `primerapellido` VARCHAR(45) NOT NULL,
  `segundoapellido` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(120) NOT NULL,
  `sexo` CHAR NOT NULL,
  `telefono` CHAR NOT NULL,
  `celular` VARCHAR(45) NOT NULL,
  `numerohistoria` CHAR NOT NULL,
  `antecedentepersonal` VARCHAR(45) NOT NULL,
  `antecedentefamiliar` VARCHAR(45) NOT NULL,
  `alergia` VARCHAR(45) NOT NULL,
  `observacion` VARCHAR(45) NOT NULL,
  `estatuspaciente` INT NOT NULL,
  `idtsede` INT NOT NULL,
  `idparroquia` INT NOT NULL,
  `idtetnia` INT NOT NULL,
  `idttipopaciente` INT NOT NULL,
  `tcarrera_idtcarrera` INT NOT NULL,
  `tdepartamento_iddepartamento` INT NOT NULL,
  PRIMARY KEY (`idpaciente`),
  INDEX `fk_tpaciente_tsede1_idx` (`idtsede` ASC),
  INDEX `fk_tpaciente_tparroquia1_idx` (`idparroquia` ASC),
  INDEX `fk_tpaciente_tetnia1_idx` (`idtetnia` ASC),
  INDEX `fk_tpaciente_ttipopaciente1_idx` (`idttipopaciente` ASC),
  INDEX `fk_tpaciente_tcarrera1_idx` (`tcarrera_idtcarrera` ASC),
  INDEX `fk_tpaciente_tdepartamento1_idx` (`tdepartamento_iddepartamento` ASC),
  CONSTRAINT `fk_tpaciente_tsede1`
    FOREIGN KEY (`idtsede`)
    REFERENCES `bdsm`.`tsede` (`idtsede`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tpaciente_tparroquia1`
    FOREIGN KEY (`idparroquia`)
    REFERENCES `bdsm`.`tparroquia` (`idparroquia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tpaciente_tetnia1`
    FOREIGN KEY (`idtetnia`)
    REFERENCES `bdsm`.`tetnia` (`idtetnia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tpaciente_ttipopaciente1`
    FOREIGN KEY (`idttipopaciente`)
    REFERENCES `bdsm`.`ttipopaciente` (`idttipopaciente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tpaciente_tcarrera1`
    FOREIGN KEY (`tcarrera_idtcarrera`)
    REFERENCES `bdsm`.`tcarrera` (`idtcarrera`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tpaciente_tdepartamento1`
    FOREIGN KEY (`tdepartamento_iddepartamento`)
    REFERENCES `bdsm`.`tdepartamento` (`iddepartamento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bdsm`.`ttiporeferencia`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bdsm`.`ttiporeferencia` ;

CREATE TABLE IF NOT EXISTS `bdsm`.`ttiporeferencia` (
  `idtiporeferencia` INT NOT NULL AUTO_INCREMENT,
  `tiporeferencia` VARCHAR(45) NOT NULL,
  `estatusreferencia` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idtiporeferencia`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bdsm`.`tdoctor`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bdsm`.`tdoctor` ;

CREATE TABLE IF NOT EXISTS `bdsm`.`tdoctor` (
  `idtdoctor` INT NOT NULL AUTO_INCREMENT,
  `nombredoctor` VARCHAR(45) NOT NULL,
  `estadodoctor` VARCHAR(45) NOT NULL,
  `idtsede` INT NOT NULL,
  PRIMARY KEY (`idtdoctor`),
  INDEX `fk_tdoctor_tsede1_idx` (`idtsede` ASC),
  CONSTRAINT `fk_tdoctor_tsede1`
    FOREIGN KEY (`idtsede`)
    REFERENCES `bdsm`.`tsede` (`idtsede`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bdsm`.`tconsulta`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bdsm`.`tconsulta` ;

CREATE TABLE IF NOT EXISTS `bdsm`.`tconsulta` (
  `idconsulta` INT NOT NULL AUTO_INCREMENT,
  `estatusconsulta` VARCHAR(45) NOT NULL,
  `fecha consulta` VARCHAR(45) NOT NULL,
  `pulso` VARCHAR(45) NOT NULL,
  `peso` VARCHAR(45) NOT NULL,
  `fc` VARCHAR(45) NOT NULL,
  `fr` VARCHAR(45) NOT NULL,
  `ta` VARCHAR(45) NOT NULL,
  `talla` VARCHAR(45) NOT NULL,
  `temperatura` VARCHAR(45) NOT NULL,
  `altura` VARCHAR(45) NOT NULL,
  `observacionconsulta` VARCHAR(45) NOT NULL,
  `idtdoctor` INT NOT NULL,
  `tpaciente_idpaciente` INT NOT NULL,
  PRIMARY KEY (`idconsulta`),
  INDEX `fk_tconsulta_tdoctor1_idx` (`idtdoctor` ASC),
  INDEX `fk_tconsulta_tpaciente1_idx` (`tpaciente_idpaciente` ASC),
  CONSTRAINT `fk_tconsulta_tdoctor1`
    FOREIGN KEY (`idtdoctor`)
    REFERENCES `bdsm`.`tdoctor` (`idtdoctor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tconsulta_tpaciente1`
    FOREIGN KEY (`tpaciente_idpaciente`)
    REFERENCES `bdsm`.`tpaciente` (`idpaciente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bdsm`.`tcentroasistencial`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bdsm`.`tcentroasistencial` ;

CREATE TABLE IF NOT EXISTS `bdsm`.`tcentroasistencial` (
  `idtcentroasistencial` INT NOT NULL AUTO_INCREMENT,
  `nombrecentroasistencial` VARCHAR(45) NOT NULL,
  `estatuscentroasistencial` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idtcentroasistencial`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bdsm`.`treferencia`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bdsm`.`treferencia` ;

CREATE TABLE IF NOT EXISTS `bdsm`.`treferencia` (
  `idreferencia` INT NOT NULL AUTO_INCREMENT,
  `referidoa` VARCHAR(45) NOT NULL,
  `estatusreferencia` VARCHAR(45) NOT NULL,
  `idconsulta` INT NOT NULL,
  `tcentroasistencial_idtcentroasistencial` INT NOT NULL,
  `ttiporeferencia_idtiporeferencia` INT NOT NULL,
  INDEX `fk_treferencia_tconsulta1_idx` (`idconsulta` ASC),
  INDEX `fk_treferencia_tcentroasistencial1_idx` (`tcentroasistencial_idtcentroasistencial` ASC),
  PRIMARY KEY (`idreferencia`),
  INDEX `fk_treferencia_ttiporeferencia1_idx` (`ttiporeferencia_idtiporeferencia` ASC),
  CONSTRAINT `fk_treferencia_tconsulta1`
    FOREIGN KEY (`idconsulta`)
    REFERENCES `bdsm`.`tconsulta` (`idconsulta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_treferencia_tcentroasistencial1`
    FOREIGN KEY (`tcentroasistencial_idtcentroasistencial`)
    REFERENCES `bdsm`.`tcentroasistencial` (`idtcentroasistencial`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_treferencia_ttiporeferencia1`
    FOREIGN KEY (`ttiporeferencia_idtiporeferencia`)
    REFERENCES `bdsm`.`ttiporeferencia` (`idtiporeferencia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bdsm`.`ttipoexamen`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bdsm`.`ttipoexamen` ;

CREATE TABLE IF NOT EXISTS `bdsm`.`ttipoexamen` (
  `idttipoexamen` INT NOT NULL AUTO_INCREMENT,
  `tipoexamen` VARCHAR(45) NOT NULL,
  `estatustipoexamen` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idttipoexamen`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bdsm`.`tlaboratorio`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bdsm`.`tlaboratorio` ;

CREATE TABLE IF NOT EXISTS `bdsm`.`tlaboratorio` (
  `idtlaboratorio` INT NOT NULL,
  `laboratorio` VARCHAR(45) NOT NULL,
  `estatuslaboratorio` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idtlaboratorio`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bdsm`.`texamen`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bdsm`.`texamen` ;

CREATE TABLE IF NOT EXISTS `bdsm`.`texamen` (
  `idtexamen` INT NOT NULL AUTO_INCREMENT,
  `examen` VARCHAR(45) NOT NULL,
  `estatusexamen` VARCHAR(45) NOT NULL,
  `idconsulta` INT NOT NULL,
  `idttipoexamen` INT NOT NULL,
  `idtlaboratorio` INT NOT NULL,
  INDEX `fk_texamen_tconsulta1_idx` (`idconsulta` ASC),
  PRIMARY KEY (`idtexamen`),
  INDEX `fk_texamen_ttipoexamen1_idx` (`idttipoexamen` ASC),
  INDEX `fk_texamen_tlaboratorio1_idx` (`idtlaboratorio` ASC),
  CONSTRAINT `fk_texamen_tconsulta1`
    FOREIGN KEY (`idconsulta`)
    REFERENCES `bdsm`.`tconsulta` (`idconsulta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_texamen_ttipoexamen1`
    FOREIGN KEY (`idttipoexamen`)
    REFERENCES `bdsm`.`ttipoexamen` (`idttipoexamen`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_texamen_tlaboratorio1`
    FOREIGN KEY (`idtlaboratorio`)
    REFERENCES `bdsm`.`tlaboratorio` (`idtlaboratorio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bdsm`.`tenfermedadescronicas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bdsm`.`tenfermedadescronicas` ;

CREATE TABLE IF NOT EXISTS `bdsm`.`tenfermedadescronicas` (
  `idtenfermedadescronicas` INT NOT NULL AUTO_INCREMENT,
  `enfermedadcronica` VARCHAR(45) NOT NULL,
  `estatusenfermedad` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idtenfermedadescronicas`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bdsm`.`tdiscapacidad`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bdsm`.`tdiscapacidad` ;

CREATE TABLE IF NOT EXISTS `bdsm`.`tdiscapacidad` (
  `idtdiscapacidad` INT NOT NULL AUTO_INCREMENT,
  `discapacidad` VARCHAR(45) NOT NULL,
  `estatusdiscapacidad` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idtdiscapacidad`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bdsm`.`tusuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bdsm`.`tusuario` ;

CREATE TABLE IF NOT EXISTS `bdsm`.`tusuario` (
  `idtusuario` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(45) NOT NULL,
  `clave` VARCHAR(55) NOT NULL,
  `rol` CHAR(1) NOT NULL,
  `estatus` CHAR(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idtusuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bdsm`.`tpaciente_has_tdiscapacidad`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bdsm`.`tpaciente_has_tdiscapacidad` ;

CREATE TABLE IF NOT EXISTS `bdsm`.`tpaciente_has_tdiscapacidad` (
  `tpaciente_idpaciente` INT NOT NULL,
  `tdiscapacidad_idtdiscapacidad` INT NOT NULL,
  PRIMARY KEY (`tpaciente_idpaciente`, `tdiscapacidad_idtdiscapacidad`),
  INDEX `fk_tpaciente_has_tdiscapacidad_tdiscapacidad1_idx` (`tdiscapacidad_idtdiscapacidad` ASC),
  INDEX `fk_tpaciente_has_tdiscapacidad_tpaciente1_idx` (`tpaciente_idpaciente` ASC),
  CONSTRAINT `fk_tpaciente_has_tdiscapacidad_tpaciente1`
    FOREIGN KEY (`tpaciente_idpaciente`)
    REFERENCES `bdsm`.`tpaciente` (`idpaciente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tpaciente_has_tdiscapacidad_tdiscapacidad1`
    FOREIGN KEY (`tdiscapacidad_idtdiscapacidad`)
    REFERENCES `bdsm`.`tdiscapacidad` (`idtdiscapacidad`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bdsm`.`tpaciente_has_tenfermedadescronicas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bdsm`.`tpaciente_has_tenfermedadescronicas` ;

CREATE TABLE IF NOT EXISTS `bdsm`.`tpaciente_has_tenfermedadescronicas` (
  `tpaciente_idpaciente` INT NOT NULL,
  `tenfermedadescronicas_idtenfermedadescronicas` INT NOT NULL,
  PRIMARY KEY (`tpaciente_idpaciente`, `tenfermedadescronicas_idtenfermedadescronicas`),
  INDEX `fk_tpaciente_has_tenfermedadescronicas_tenfermedadescronica_idx` (`tenfermedadescronicas_idtenfermedadescronicas` ASC),
  INDEX `fk_tpaciente_has_tenfermedadescronicas_tpaciente1_idx` (`tpaciente_idpaciente` ASC),
  CONSTRAINT `fk_tpaciente_has_tenfermedadescronicas_tpaciente1`
    FOREIGN KEY (`tpaciente_idpaciente`)
    REFERENCES `bdsm`.`tpaciente` (`idpaciente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tpaciente_has_tenfermedadescronicas_tenfermedadescronicas1`
    FOREIGN KEY (`tenfermedadescronicas_idtenfermedadescronicas`)
    REFERENCES `bdsm`.`tenfermedadescronicas` (`idtenfermedadescronicas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
