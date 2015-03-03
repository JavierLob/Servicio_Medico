<?php
	require_once('m_mysql.php');

	class claseDiscapacidad extends bd_my
	{
		public $idtdiscapacidad, $discapacidad, $estatusdiscapacidad;

		function __CONSTRUCT()
		{
			$this->idtdiscapacidad = '';
			$this->discapacidad = '';
			$this->estatusdiscapacidad = '';
		}

		public function set_datos($idtdiscapacidad = '', $discapacidad = '', $estatusdiscapacidad = '')
		{
			$this->idtdiscapacidad = $idtdiscapacidad;
			$this->discapacidad = $discapacidad;
			$this->estatusdiscapacidad = $estatusdiscapacidad;
		}

		public function incluir()
		{
			$respuesta = false;
			$SQL = "INSERT INTO tdiscapacidad (discapacidad, estatusdiscapacidad) VALUES ('$this->discapacidad', '1');";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function modificar()
		{
			$respuesta = false;
			$SQL = "UPDATE tdiscapacidad SET discapacidad = '$this->discapacidad' WHERE idtdiscapacidad='$this->idtdiscapacidad';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function consultar()
		{
			$Fila = array();
			$this->conectar();
			$sql="SELECT * FROM tdiscapacidad WHERE idtdiscapacidad='$this->idtdiscapacidad';";
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
			$sql="SELECT * FROM tdiscapacidad;";
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
			$SQL = "UPDATE tdiscapacidad SET estatusdiscapacidad = '$this->estatusdiscapacidad' WHERE idtdiscapacidad='$this->idtdiscapacidad';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}
	}
?>