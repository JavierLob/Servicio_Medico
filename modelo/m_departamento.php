<?php
	require_once('m_mysql.php');

	class claseDepartamento extends bd_my
	{
		public $iddepartamento, $departamento, $estatusdepartamento;

		function __CONSTRUCT()
		{
			$this->iddepartamento = '';
			$this->departamento = '';
			$this->estatusdepartamento = '';
		}

		public function set_datos($iddepartamento = '', $departamento = '', $estatusdepartamento = '')
		{
			$this->iddepartamento = $iddepartamento;
			$this->departamento = $departamento;
			$this->estatusdepartamento = $estatusdepartamento;
		}

		public function incluir()
		{
			$respuesta = false;
			$SQL = "INSERT INTO tdepartamento (departamento, estatusdepartamento) VALUES ('$this->departamento', '1');";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function modificar()
		{
			$respuesta = false;
			$SQL = "UPDATE tdepartamento SET departamento = '$this->departamento' WHERE iddepartamento='$this->iddepartamento';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function consultar()
		{
			$Fila = array();
			$this->conectar();
			$sql="SELECT * FROM tdepartamento WHERE iddepartamento='$this->iddepartamento';";
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
			$sql="SELECT * FROM tdepartamento;";
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
			$SQL = "UPDATE tdepartamento SET estatusdepartamento = '$this->estatusdepartamento' WHERE iddepartamento='$this->iddepartamento';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}
	}
?>