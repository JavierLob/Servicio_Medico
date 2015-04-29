<?php
	require_once('m_mysql.php');

	class clasepersonal extends bd_my
	{
		public $idpersonal, $cedulaopasaporte, $nacionalidad, $primernombre, $segundonombre, $primerapellido, $segundoapellido,
		$direccion, $sexo, $telefono, $celular, $observacion, $estatuspersonal, $ttipopersonal_idtipo_personal, $idrol;

		function __CONSTRUCT()
		{
			$this->idpersonal = '';
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
			$this->observacion = '';
			$this->estatuspersonal = '';
			$this->ttipopersonal_idtipo_personal = '';
			$this->idrol = '';
		}

		public function set_datos($idpersonal = '', $cedulaopasaporte = '', $nacionalidad = '', $primernombre = '', $segundonombre = '', $primerapellido = '', $segundoapellido = '', $direccion = '', $sexo = '', $telefono = '', $celular = '', $observacion = '', $estatuspersonal = '', $ttipopersonal_idtipo_personal = '', $idrol = '')
		{
			$this->idpersonal = $idpersonal;
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
			$this->observacion = $observacion;
			$this->estatuspersonal = $estatuspersonal;
			$this->ttipopersonal_idtipo_personal = $ttipopersonal_idtipo_personal;
			$this->idrol = $idrol;
		}

		public function incluir()
		{
			$respuesta = false;
			$SQL = "INSERT INTO `tpersonal`(`cedulaopasaporte`, `nacionalidad`, `primernombre`, `segundonombre`, `primerapellido`, `segundoapellido`, `direccion`, `sexo`, `telefono`, `celular`, `observacion`, `estatuspersonal`, `ttipopersonal_idtipo_personal`,trol_idrol) VALUES ('$this->cedulaopasaporte','$this->nacionalidad',UPPER('$this->primernombre'),UPPER('$this->segundonombre'),UPPER('$this->primerapellido'),UPPER('$this->segundoapellido'),UPPER('$this->direccion'),'$this->sexo','$this->telefono','$this->celular',UPPER('$this->observacion'),'1','$this->ttipopersonal_idtipo_personal','$this->idrol');";
			$this->conectar();
			$this->begin();
			if($respuesta = $this->ejecutar($SQL))
			{
				$sql="INSERT INTO tusuario (`usuario`, `clave`, `rol`, `estatus`, tpersonal_idpersonal)VALUES('$this->cedulaopasaporte',md5('$this->cedulaopasaporte'),'$this->idrol','1','$this->ttipopersonal_idtipo_personal')";
				if(!$respuesta = $this->ejecutar($sql))
					$this->rollback();
			}
			if($respuesta)
				$this->commit();

			$this->desconectar();
			return $respuesta;
		}

		public function modificar()
		{
			$respuesta = false;
			$SQL = "UPDATE `tpersonal` SET `cedulaopasaporte`='$this->cedulaopasaporte',`nacionalidad`='$this->nacionalidad',`primernombre`=UPPER('$this->primernombre'),`segundonombre`=UPPER('$this->segundonombre'),`primerapellido`=UPPER('$this->primerapellido'),`segundoapellido`=UPPER('$this->segundoapellido'),`direccion`=UPPER('$this->direccion'),`sexo`=UPPER('$this->sexo'),`telefono`='$this->telefono',`celular`='$this->celular',`observacion`=UPPER('$this->observacion'),`ttipopersonal_idtipo_personal`='$this->ttipopersonal_idtipo_personal',`trol_idrol`='$this->idrol'WHERE idpersonal = '$this->idpersonal';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function consultar()
		{
			$Fila = array();
			$this->conectar();
			$sql="SELECT `idpersonal`, `cedulaopasaporte`, `nacionalidad`, `primernombre`, 
					`segundonombre`, `primerapellido`, `segundoapellido`, `direccion`, `sexo`, 
					`telefono`, `celular`, `observacion`, tpersonal.estatuspersonal,`ttipopersonal_idtipo_personal`,`trol_idrol`,nombrerol,tipopersonal, tusuario.*
					FROM `tpersonal`, ttipopersonal,trol, tusuario
					WHERE idpersonal = '$this->idpersonal' AND trol_idrol = idtrol
					AND ttipopersonal_idtipo_personal = idtipopersonal
					AND tusuario.usuario = tpersonal.cedulaopasaporte";
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
			$sql="SELECT *	FROM `tpersonal` , ttipopersonal,trol
					WHERE ttipopersonal_idtipo_personal = idtipopersonal AND trol_idrol = idtrol";
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
			$SQL = "UPDATE `tpersonal` SET `estatuspersonal`='$this->estatuspersonal' WHERE idpersonal='$this->idpersonal';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}
	}
?>