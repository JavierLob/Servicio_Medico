<?php
	require_once('m_mysql.php');

	class claseLaboratorio extends bd_my
	{
		public $idtlaboratorio, $laboratorio, $estatuslaboratorio;

		function __CONSTRUCT()
		{
			$this->idtlaboratorio = '';
			$this->laboratorio = '';
			$this->estatuslaboratorio = '';
		}

		public function set_datos($idtlaboratorio = '', $laboratorio = '', $estatuslaboratorio = '')
		{
			$this->idtlaboratorio = $idtlaboratorio;
			$this->laboratorio = $laboratorio;
			$this->estatuslaboratorio = $estatuslaboratorio;
		}

		public function incluir()
		{
			$respuesta = false;
			$SQL = "INSERT INTO tlaboratorio (laboratorio, estatuslaboratorio) VALUES ('$this->laboratorio', '1');";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function validar()
		{
			$repetido = false;
			$this->conectar();
			$sql="SELECT * FROM tlaboratorio WHERE laboratorio='$this->laboratorio';";
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
			$SQL = "UPDATE tlaboratorio SET laboratorio = '$this->laboratorio' WHERE idtlaboratorio='$this->idtlaboratorio';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function consultar()
		{
			$Fila = array();
			$this->conectar();
			$sql="SELECT * FROM tlaboratorio WHERE idtlaboratorio='$this->idtlaboratorio';";
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
			$sql="SELECT * FROM tlaboratorio;";
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
			$SQL = "UPDATE tlaboratorio SET estatuslaboratorio = '$this->estatuslaboratorio' WHERE idtlaboratorio='$this->idtlaboratorio';";
			$this->conectar();
			echo $SQL;
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}
	}
?>