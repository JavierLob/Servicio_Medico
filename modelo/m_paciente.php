<?php
	require_once('m_mysql.php');
/*`idpaciente` int(11) NOT NULL AUTO_INCREMENT,
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
  `tdepartamento_iddepartamento` int(11) NOT NULL,*/
	class clasePaciente extends bd_my
	{
		public $idpaciente, $cedulaopasaporte, $nacionalidad, $primernombre, $segundonombre, $primerapellido, $segundoapellido,
		$direccion, $sexo, $telefono, $celular, $numerohistoria, $antecedentepersonal, $antecedentefamiliar, $alergia, $observacion, $estatuspaciente, $idtsede, $idparroquia, $idtetnia, $idttipopaciente, $tcarrera_idtcarrera, $tdepartamento_iddepartamento;

		function __CONSTRUCT()
		{
			$this->idpaciente = '';
			$this->cedulaopasaporte = '';
			$this->nacionalidad = '';
			$this->primernombre = '';
			$this->segundonombre = '';
			$this->primerapellido = '';
			$this->segundoapellido = '';
			$this->direccion = '';
			$this->sexo = '';
			$this->telefono = '';
			$this->celular = '';
			$this->numerohistoria = '';
			$this->antecedentepersonal = '';
			$this->antecedentefamiliar = '';
			$this->alergia = '';
			$this->observacion = '';
			$this->estatuspaciente = '';
			$this->idtsede = '';
			$this->idparroquia = '';
			$this->idtetnia = '';
			$this->idttipopaciente = '';
			$this->tcarrera_idtcarrera = '';
			$this->tdepartamento_iddepartamento = '';
		}

		public function set_datos($idpaciente = '', $cedulaopasaporte = '', $nacionalidad = '', $primernombre = '', $segundonombre = '', $primerapellido = '', $segundoapellido = '', $direccion = '', $sexo = '', $telefono = '', $celular = '', $numerohistoria = '', $antecedentepersonal = '', $antecedentefamiliar = '', $alergia = '', $observacion = '', $estatuspaciente = '', $idtsede = '', $idparroquia = '', $idtetnia = '', $idttipopaciente = '', $tcarrera_idtcarrera = '', $tdepartamento_iddepartamento = '')
		{
			$this->idpaciente = $idpaciente;
			$this->cedulaopasaporte = $cedulaopasaporte;
			$this->nacionalidad = $nacionalidad;
			$this->primernombre = $primernombre;
			$this->segundonombre = $segundonombre;
			$this->primerapellido = $primerapellido;
			$this->segundoapellido = $segundoapellido;
			$this->direccion = $direccion;
			$this->sexo = $sexo;
			$this->telefono = $telefono;
			$this->celular = $celular;
			$this->numerohistoria = $numerohistoria;
			$this->antecedentepersonal = $antecedentepersonal;
			$this->antecedentefamiliar = $antecedentefamiliar;
			$this->alergia = $alergia;
			$this->observacion = $observacion;
			$this->estatuspaciente = $estatuspaciente;
			$this->idtsede = $idtsede;
			$this->idparroquia = $idparroquia;
			$this->idtetnia = $idtetnia;
			$this->idttipopaciente = $idttipopaciente;
			$this->tcarrera_idtcarrera = $tcarrera_idtcarrera;
			$this->tdepartamento_iddepartamento = $tdepartamento_iddepartamento;
		}

		public function incluir()
		{
			$respuesta = false;
			$SQL = "INSERT INTO `tpaciente`(`cedulaopasaporte`, `nacionalidad`, `primernombre`, `segundonombre`, `primerapellido`, `segundoapellido`, `direccion`, `sexo`, `telefono`, `celular`, `numerohistoria`, `antecedentepersonal`, `antecedentefamiliar`, `alergia`, `observacion`, `estatuspaciente`, `idtsede`, `idparroquia`, `idtetnia`, `idttipopaciente`, `tcarrera_idtcarrera`, `tdepartamento_iddepartamento`) VALUES ('$this->cedulaopasaporte','$this->nacionalidad',UPPER('$this->primernombre'),UPPER('$this->segundonombre'),UPPER('$this->primerapellido'),UPPER('$this->segundoapellido'),UPPER('$this->direccion'),'$this->sexo','$this->telefono','$this->celular','$this->numerohistoria',UPPER('$this->antecedentepersonal'),UPPER('$this->antecedentefamiliar'),UPPER('$this->alergia'),UPPER('$this->observacion'),'1','$this->idtsede','$this->idparroquia','$this->idtetnia','$this->idttipopaciente','$this->tcarrera_idtcarrera','$this->tdepartamento_iddepartamento');";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function modificar()
		{
			$respuesta = false;
			$SQL = "UPDATE `tpaciente` SET `cedulaopasaporte`='$this->cedulaopasaporte',`nacionalidad`='$this->nacionalidad',`primernombre`=UPPER('$this->primernombre'),`segundonombre`=UPPER('$this->segundonombre'),`primerapellido`=UPPER('$this->primerapellido'),`segundoapellido`=UPPER('$this->segundoapellido'),`direccion`=UPPER('$this->direccion'),`sexo`=UPPER('$this->sexo'),`telefono`='$this->telefono',`celular`='$this->celular',`numerohistoria`='$this->numerohistoria',`antecedentepersonal`=UPPER('$this->antecedentepersonal'),`antecedentefamiliar`=('$this->antecedentefamiliar'),`alergia`=UPPER('$this->alergia'),`observacion`=UPPER('$this->observacion'),`idtsede`='$this->idtsede',`idparroquia`='$this->idparroquia',`idtetnia`='$this->idtetnia',`idttipopaciente`='$this->idttipopaciente',`tcarrera_idtcarrera`='$this->tcarrera_idtcarrera',`tdepartamento_iddepartamento`='$this->tdepartamento_iddepartamento' WHERE idpaciente = '$this->idpaciente';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function consultar()
		{
			$Fila = array();
			$this->conectar();
			$sql="SELECT `idpaciente`, `cedulaopasaporte`, `nacionalidad`, `primernombre`, 
					`segundonombre`, `primerapellido`, `segundoapellido`, `direccion`, `sexo`, 
					`telefono`, `celular`, `numerohistoria`, `antecedentepersonal`, `antecedentefamiliar`, 
					`alergia`, `observacion`, `estatuspaciente`, `idtsede`, tpaciente.idparroquia, `idtetnia`, 
					`idttipopaciente`, `tcarrera_idtcarrera`, `tdepartamento_iddepartamento` , tmunicipio.idtmunicipio, testado.idestado 
					FROM `tpaciente`, tparroquia, tmunicipio, testado
					WHERE idpaciente = '$this->idpaciente'
					AND tparroquia.idparroquia = tpaciente.idparroquia
					AND tmunicipio.idtmunicipio = tparroquia.idtmunicipio
					AND testado.idestado = tmunicipio.idestado";
			$pcsql=$this->filtro($sql);
			if($laRow=$this->proximo($pcsql))
			{
				$Fila=$laRow;
			}
			$this->desconectar();
			return $Fila;
		}

		public function listar()
		{
			$Filas = array();
			$cont = 0;
			$this->conectar();
			$sql="SELECT `idpaciente`, `cedulaopasaporte`, `nacionalidad`, `primernombre`, 
					`segundonombre`, `primerapellido`, `segundoapellido`, `direccion`, `sexo`, 
					`telefono`, `celular`, `numerohistoria`, `antecedentepersonal`, `antecedentefamiliar`, 
					`alergia`, `observacion`, `estatuspaciente`, `idtsede`, tpaciente.idparroquia, `idtetnia`, 
					`idttipopaciente`, `tcarrera_idtcarrera`, `tdepartamento_iddepartamento`, tmunicipio.idtmunicipio, testado.idestado 
					FROM `tpaciente` , tparroquia, tmunicipio, testado
					WHERE tparroquia.idparroquia = tpaciente.idparroquia
					AND tmunicipio.idtmunicipio = tparroquia.idtmunicipio
					AND testado.idestado = tmunicipio.idestado";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Filas[$cont] = $laRow;
				$cont++;
			}
			$this->desconectar();
			return $Filas;
		}

		public function cambiar_estatus()
		{
			$respuesta = false;
			$SQL = "UPDATE `tpaciente` SET `estatuspaciente`='$this->estatuspaciente' WHERE idpaciente='$this->idpaciente';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}
	}
?>