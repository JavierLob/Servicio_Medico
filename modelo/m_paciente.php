<?php
	require_once('m_mysql.php');
	class clasePaciente extends bd_my
	{
		public $idpaciente, $cedulaopasaporte, $nacionalidad, $primernombre, $segundonombre, $primerapellido, $segundoapellido,
		$direccion, $sexo, $telefono, $celular, $numerohistoria, $antecedentepersonal, $antecedentefamiliar, $alergia, $observacion, $estatuspaciente, $idtsede, $idparroquia, $idtetnia, $idttipopaciente, $tcarrera_idtcarrera, $tdepartamento_iddepartamento, $modalidadpac, $numeromodalidadpac, 
			$documento,$embarazada, $fechanacimiento;

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
			$this->modalidadpac = '';
			$this->numeromodalidadpac = '';
			$this->documento = '';
			$this->embarazada = '';
			$this->fechanacimiento = '';
		}

		public function set_datos($idpaciente = '', $cedulaopasaporte = '', $nacionalidad = '', $primernombre = '', $segundonombre = '', $primerapellido = '', $segundoapellido = '', $direccion = '', $sexo = '', $telefono = '', $celular = '', $numerohistoria = '', $antecedentepersonal = '', $antecedentefamiliar = '', $alergia = '', $observacion = '', $estatuspaciente = '', $idtsede = '', $idparroquia = '', $idtetnia = '', $idttipopaciente = '', $tcarrera_idtcarrera = '', $tdepartamento_iddepartamento = '', $modalidadpac = '', $numeromodalidadpac = '', $documento = '', $embarazada = '', $fechanacimiento = '')
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
			$this->modalidadpac = $modalidadpac;
			$this->numeromodalidadpac = $numeromodalidadpac;
			$this->documento = $documento;
			$this->embarazada = $embarazada;
			$this->fechanacimiento = $this->formato_fecha($fechanacimiento);
		}

		public function incluir()
		{
			$respuesta = false;
			$SQL = "INSERT INTO `tpaciente`(`cedulaopasaporte`, `nacionalidad`, `primernombre`, `segundonombre`, `primerapellido`, `segundoapellido`, `direccion`, `sexo`, `telefono`, `celular`, `numerohistoria`, `antecedentepersonal`, `antecedentefamiliar`, `alergia`, `observacion`, `estatuspaciente`, `idtsede`, `idparroquia`, `idtetnia`, `idttipopaciente`, `tcarrera_idtcarrera`, `tdepartamento_iddepartamento`, modalidadpac, numeromodalidadpac, documento, embarazada, fechanacimiento) VALUES ('$this->cedulaopasaporte','$this->nacionalidad',UPPER('$this->primernombre'),UPPER('$this->segundonombre'),UPPER('$this->primerapellido'),UPPER('$this->segundoapellido'),UPPER('$this->direccion'),'$this->sexo','$this->telefono','$this->celular','$this->numerohistoria',UPPER('$this->antecedentepersonal'),UPPER('$this->antecedentefamiliar'),UPPER('$this->alergia'),UPPER('$this->observacion'),'1','$this->idtsede','$this->idparroquia','$this->idtetnia','$this->idttipopaciente','$this->tcarrera_idtcarrera','$this->tdepartamento_iddepartamento', '$this->modalidadpac', '$this->numeromodalidadpac', '$this->documento', '$this->embarazada', '$this->fechanacimiento');";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function modificar()
		{
			$respuesta = false;
			$SQL = "UPDATE `tpaciente` SET `cedulaopasaporte`='$this->cedulaopasaporte',`nacionalidad`='$this->nacionalidad',`primernombre`=UPPER('$this->primernombre'),`segundonombre`=UPPER('$this->segundonombre'),`primerapellido`=UPPER('$this->primerapellido'),`segundoapellido`=UPPER('$this->segundoapellido'),`direccion`=UPPER('$this->direccion'),`sexo`=UPPER('$this->sexo'),`telefono`='$this->telefono',`celular`='$this->celular',`numerohistoria`='$this->numerohistoria',`antecedentepersonal`=UPPER('$this->antecedentepersonal'),`antecedentefamiliar`=('$this->antecedentefamiliar'),`alergia`=UPPER('$this->alergia'),`observacion`=UPPER('$this->observacion'),`idtsede`='$this->idtsede',`idparroquia`='$this->idparroquia',`idtetnia`='$this->idtetnia',`idttipopaciente`='$this->idttipopaciente',`tcarrera_idtcarrera`='$this->tcarrera_idtcarrera',`tdepartamento_iddepartamento`='$this->tdepartamento_iddepartamento', modalidadpac='$this->modalidadpac', numeromodalidadpac = '$this->numeromodalidadpac', documento='$this->documento', embarazada='$this->embarazada', fechanacimiento='$this->fechanacimiento' WHERE idpaciente = '$this->idpaciente';";
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
					`alergia`, `observacion`, tpaciente.estatuspaciente, `idtsede`, tpaciente.idparroquia, `idtetnia`, tipopaciente,
					tpaciente.idttipopaciente, `tcarrera_idtcarrera`, `tdepartamento_iddepartamento` , tmunicipio.idtmunicipio, testado.idestado, numeromodalidadpac, modalidadpac, documento, embarazada, date_format(fechanacimiento,'%d-%m-%Y') as fechanacimiento
					FROM `tpaciente`, tparroquia, tmunicipio, testado, ttipopaciente
					WHERE idpaciente = '$this->idpaciente'
					AND tparroquia.idparroquia = tpaciente.idparroquia
					AND tmunicipio.idtmunicipio = tparroquia.idtmunicipio
					AND testado.idestado = tmunicipio.idestado
					AND ttipopaciente.idttipopaciente = tpaciente.idttipopaciente";
			$pcsql=$this->filtro($sql);
			if($laRow=$this->proximo($pcsql))
			{
				$Fila=$laRow;
				$Fila['inicial'] = substr($laRow['tipopaciente'], 0 , 1);
			}
			$this->desconectar();
			return $Fila;
		}

		public function consultar_cedula()
		{
			$Fila = array();
			$this->conectar();
			$sql="SELECT `idpaciente`, `cedulaopasaporte`, `nacionalidad`, `primernombre`, 
					`segundonombre`, `primerapellido`, `segundoapellido`, `direccion`, `sexo`, 
					`telefono`, `celular`, `numerohistoria`, `antecedentepersonal`, `antecedentefamiliar`, 
					`alergia`, `observacion`, tpaciente.estatuspaciente, `idtsede`, tpaciente.idparroquia, `idtetnia`, tipopaciente, 
					tpaciente.idttipopaciente, `tcarrera_idtcarrera`, `tdepartamento_iddepartamento` , tmunicipio.idtmunicipio, testado.idestado, numeromodalidadpac, modalidadpac, documento,embarazada, date_format(fechanacimiento,'%d-%m-%Y') as fechanacimiento
					FROM `tpaciente`, tparroquia, tmunicipio, testado, ttipopaciente
					WHERE cedulaopasaporte = '$this->cedulaopasaporte'
					AND tparroquia.idparroquia = tpaciente.idparroquia
					AND tmunicipio.idtmunicipio = tparroquia.idtmunicipio
					AND testado.idestado = tmunicipio.idestado
					AND ttipopaciente.idttipopaciente = tpaciente.idttipopaciente";
			$pcsql=$this->filtro($sql);
			if($laRow=$this->proximo($pcsql))
			{
				$Fila=$laRow;
				$Fila['inicial'] = substr($laRow['tipopaciente'], 0 , 1);
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
					`alergia`, `observacion`, tpaciente.estatuspaciente, `idtsede`, tpaciente.idparroquia, `idtetnia`, tipopaciente,
					tpaciente.idttipopaciente, `tcarrera_idtcarrera`, `tdepartamento_iddepartamento`, tmunicipio.idtmunicipio, testado.idestado , documento,embarazada
					, numeromodalidadpac, modalidadpac, date_format(fechanacimiento,'%d-%m-%Y') as fechanacimiento
					FROM `tpaciente` , tparroquia, tmunicipio, testado, ttipopaciente
					WHERE tpaciente.estatuspaciente='1' AND tparroquia.idparroquia = tpaciente.idparroquia
					AND tmunicipio.idtmunicipio = tparroquia.idtmunicipio
					AND testado.idestado = tmunicipio.idestado
					AND ttipopaciente.idttipopaciente = tpaciente.idttipopaciente";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Filas[$cont] = $laRow;
				$Filas[$cont]['inicial'] = substr($laRow['tipopaciente'], 0 , 1);
				$cont++;
			}
			$this->desconectar();
			return $Filas;
		}

		public function listar_estudiantes()
		{
			$Filas = array();
			$cont = 0;
			$this->conectar();
			$sql="SELECT `idpaciente`, `cedulaopasaporte`, `nacionalidad`, `primernombre`, 
					`segundonombre`, `primerapellido`, `segundoapellido`, `direccion`, `sexo`, 
					`telefono`, `celular`, `numerohistoria`, `antecedentepersonal`, `antecedentefamiliar`, 
					`alergia`, `observacion`, tpaciente.estatuspaciente, `idtsede`, tpaciente.idparroquia, `idtetnia`, tipopaciente,
					tpaciente.idttipopaciente, `tcarrera_idtcarrera`, `tdepartamento_iddepartamento`, tmunicipio.idtmunicipio, testado.idestado , documento,embarazada
					, numeromodalidadpac, modalidadpac, date_format(fechanacimiento,'%d-%m-%Y') as fechanacimiento
					FROM `tpaciente` , tparroquia, tmunicipio, testado, ttipopaciente
					WHERE tpaciente.idttipopaciente='1' AND tpaciente.estatuspaciente='1' AND tparroquia.idparroquia = tpaciente.idparroquia
					AND tmunicipio.idtmunicipio = tparroquia.idtmunicipio
					AND testado.idestado = tmunicipio.idestado
					AND ttipopaciente.idttipopaciente = tpaciente.idttipopaciente AND NOT EXISTS(SELECT tpaciente_idpaciente FROM tconsulta WHERE tpaciente.idpaciente=tpaciente_idpaciente AND fecha_consulta=DATE(NOW()))";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Filas[$cont] = $laRow;
				$Filas[$cont]['inicial'] = substr($laRow['tipopaciente'], 0 , 1);
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

		public function listar_diario($fecha='')
		{
			$Filas = array();
			$cont = 0;
			$this->conectar();
			$fecha=$this->formato_fecha($fecha);
			
			$sql="SELECT `idpaciente`, `cedulaopasaporte`, `nacionalidad`, `primernombre`, 
					`segundonombre`, `primerapellido`, `segundoapellido`, `direccion`, `sexo`, 
					`telefono`, `celular`, `numerohistoria`, `antecedentepersonal`, `antecedentefamiliar`, 
					`alergia`, `observacion`, `estatuspaciente`, `idtsede`, tpaciente.idparroquia, `idtetnia`, 
					`idttipopaciente`, `tcarrera_idtcarrera`, `tdepartamento_iddepartamento`, tmunicipio.idtmunicipio, testado.idestado 
					, numeromodalidadpac, modalidadpac, motivocon, carrera,embarazada
					FROM `tpaciente` , tparroquia, tmunicipio, testado, tconsulta, tcarrera
					WHERE tparroquia.idparroquia = tpaciente.idparroquia
					AND tmunicipio.idtmunicipio = tparroquia.idtmunicipio
					AND testado.idestado = tmunicipio.idestado
					AND tpaciente.idpaciente = tconsulta.tpaciente_idpaciente
					AND tcarrera.idtcarrera = tpaciente.tcarrera_idtcarrera
					AND fecha_consulta = '$fecha'";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Filas[$cont] = $laRow;
				$cont++;
			}
			$this->desconectar();
			return $Filas;
		}


		public function registrar_alergia($idalergia)
		{
			$respuesta = false;
			$SQL = "INSERT INTO `tpaciente_alergia`(`tpaciente_idpaciente`, `talergia_idalergia`) VALUES ('$this->idpaciente','$idalergia');";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function registrar_discapacidad($discapacidad)
		{
			$respuesta = false;
			$SQL = "INSERT INTO `tpaciente_has_tdiscapacidad`(`tpaciente_idpaciente`, `tdiscapacidad_idtdiscapacidad`) VALUES ('$this->idpaciente','$discapacidad');";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function registrar_enfermedad($enfermedad)
		{
			$respuesta = false;
			$SQL = "INSERT INTO `tpaciente_has_tenfermedadescronicas`(`tpaciente_idpaciente`, `tenfermedadescronicas_idtenfermedadescronicas`) VALUES ('$this->idpaciente','$enfermedad');";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function eliminar_alergia()
		{
			$respuesta = false;
			$SQL = "DELETE FROM `tpaciente_alergia` WHERE tpaciente_idpaciente = '$this->idpaciente';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}
		public function eliminar_discapacidad()
		{
			$respuesta = false;
			$SQL = "DELETE FROM `tpaciente_has_tdiscapacidad` WHERE tpaciente_idpaciente = '$this->idpaciente';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}
		public function eliminar_enfermedad()
		{
			$respuesta = false;
			$SQL = "DELETE FROM `tpaciente_has_tenfermedadescronicas` WHERE tpaciente_idpaciente = '$this->idpaciente';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function listar_alergia()
		{
			$Filas = array();
			$cont = 0;
			$this->conectar();
			$sql="SELECT *
					FROM tpaciente_alergia
					WHERE tpaciente_idpaciente = '$this->idpaciente'";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Filas[$cont] = $laRow;
				$cont++;
			}
			$this->desconectar();
			return $Filas;
		}

		public function listar_discapacidad()
		{
			$Filas = array();
			$cont = 0;
			$this->conectar();
			$sql="SELECT *
					FROM tpaciente_has_tdiscapacidad
					WHERE tpaciente_idpaciente = '$this->idpaciente'";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Filas[$cont] = $laRow;
				$cont++;
			}
			$this->desconectar();
			return $Filas;
		}

		public function listar_enfermedad()
		{
			$Filas = array();
			$cont = 0;
			$this->conectar();
			$sql="SELECT *
					FROM tpaciente_has_tenfermedadescronicas
					WHERE tpaciente_idpaciente = '$this->idpaciente'";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Filas[$cont] = $laRow;
				$cont++;
			}
			$this->desconectar();
			return $Filas;
		}

		public function validar()
		{
			$repetido = false;
			$this->conectar();
			$sql="SELECT * FROM tpaciente WHERE trim(cedulaopasaporte)=trim('$this->cedulaopasaporte') AND nacionalidad = '$this->nacionalidad';";
			$pcsql=$this->filtro($sql);
			if($laRow=$this->proximo($pcsql))
			{
				$repetido = true;
			}
			$this->desconectar();
			return $repetido;
		}
	}
?>