<?php
	require_once('m_mysql.php');

	class claseTipopersonal extends bd_my
	{
		public $idtipopersonal, $tipopersonal, $estatuspersonal;

		function __CONSTRUCT()
		{
			$this->idtipopersonal = '';
			$this->tipopersonal = '';
			$this->estatuspersonal = '';
		}

		public function set_datos($idtipopersonal = '', $tipopersonal = '', $estatuspersonal = '')
		{
			$this->idtipopersonal = $idtipopersonal;
			$this->tipopersonal = $tipopersonal;
			$this->estatuspersonal = $estatuspersonal;
		}

		public function incluir()
		{
			$respuesta = false;
			$SQL = "INSERT INTO ttipopersonal (tipopersonal, estatuspersonal) VALUES ('$this->tipopersonal', '1');";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function validar()
		{
			$repetido = false;
			$this->conectar();
			$sql="SELECT * FROM ttipopersonal WHERE tipopersonal='$this->tipopersonal';";
			$pcsql=$this->filtro($sql);
			if($laRow=$this->proximo($pcsql))
			{
				$repetido = true;
			}
			$this->desconectar();
			return $repetido;
		}

		public function modificar()
		{
			$respuesta = false;
			$SQL = "UPDATE ttipopersonal SET tipopersonal = '$this->tipopersonal' WHERE idtipopersonal='$this->idtipopersonal';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function consultar()
		{
			$Fila = array();
			$this->conectar();
			$sql="SELECT * FROM ttipopersonal WHERE idtipopersonal='$this->idtipopersonal';";
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
			$sql="SELECT * FROM ttipopersonal;";
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
			$SQL = "UPDATE ttipopersonal SET estatuspersonal = '$this->estatuspersonal' WHERE idtipopersonal='$this->idtipopersonal';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}
	}
?>