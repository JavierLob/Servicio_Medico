<?php
	require_once('m_mysql.php');

	class claseTipoPaciente extends bd_my
	{
		public $idttipopaciente, $tipopaciente, $estatuspaciente;

		function __CONSTRUCT()
		{
			$this->idttipopaciente = '';
			$this->tipopaciente = '';
			$this->estatuspaciente = '';
		}

		public function set_datos($idttipopaciente = '', $tipopaciente = '', $estatuspaciente = '')
		{
			$this->idttipopaciente = $idttipopaciente;
			$this->tipopaciente = $tipopaciente;
			$this->estatuspaciente = $estatuspaciente;
		}

		public function incluir()
		{
			$respuesta = false;
			$SQL = "INSERT INTO ttipopaciente (tipopaciente, estatuspaciente) VALUES ('$this->tipopaciente', '1');";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function validar()
		{
			$repetido = false;
			$this->conectar();
			$sql="SELECT * FROM ttipopaciente WHERE tipopaciente='$this->tipopaciente';";
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
			$SQL = "UPDATE ttipopaciente SET tipopaciente = '$this->tipopaciente' WHERE idttipopaciente='$this->idttipopaciente';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function consultar()
		{
			$Fila = array();
			$this->conectar();
			$sql="SELECT * FROM ttipopaciente WHERE idttipopaciente='$this->idttipopaciente';";
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
			$sql="SELECT * FROM ttipopaciente;";
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
			$SQL = "UPDATE ttipopaciente SET estatuspaciente = '$this->estatuspaciente' WHERE idttipopaciente='$this->idttipopaciente';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}
	}
?>