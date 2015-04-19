<?php
	require_once('m_mysql.php');

	class claseCarrera extends bd_my
	{
		public $idtcarrera, $carrera, $estatuscarrera;

		function __CONSTRUCT()
		{
			$this->idtcarrera = '';
			$this->carrera = '';
			$this->estatuscarrera = '';
		}

		public function set_datos($idtcarrera = '', $carrera = '', $estatuscarrera = '')
		{
			$this->idtcarrera = $idtcarrera;
			$this->carrera = $carrera;
			$this->estatuscarrera = $estatuscarrera;
		}

		public function incluir()
		{
			$respuesta = false;
			$SQL = "INSERT INTO tcarrera (carrera, estatuscarrera) VALUES ('$this->carrera', '1');";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function validar()
		{
			$repetido = false;
			$this->conectar();
			$sql="SELECT * FROM tcarrera WHERE carrera='$this->carrera';";
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
			$SQL = "UPDATE tcarrera SET carrera = '$this->carrera' WHERE idtcarrera='$this->idtcarrera';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function consultar()
		{
			$Fila = array();
			$this->conectar();
			$sql="SELECT * FROM tcarrera WHERE idtcarrera='$this->idtcarrera';";
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
			$sql="SELECT * FROM tcarrera;";
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
			$SQL = "UPDATE tcarrera SET estatuscarrera = '$this->estatuscarrera' WHERE idtcarrera='$this->idtcarrera';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}
	}
?>