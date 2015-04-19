<?php
	require_once('m_mysql.php');

	class claseTiporeferencia extends bd_my
	{
		public $idtiporeferencia, $tiporeferencia, $estatusreferencia;

		function __CONSTRUCT()
		{
			$this->idtiporeferencia = '';
			$this->tiporeferencia = '';
			$this->estatusreferencia = '';
		}

		public function set_datos($idtiporeferencia = '', $tiporeferencia = '', $estatusreferencia = '')
		{
			$this->idtiporeferencia = $idtiporeferencia;
			$this->tiporeferencia = $tiporeferencia;
			$this->estatusreferencia = $estatusreferencia;
		}

		public function incluir()
		{
			$respuesta = false;
			$SQL = "INSERT INTO ttiporeferencia (tiporeferencia, estatusreferencia) VALUES ('$this->tiporeferencia', '1');";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function validar()
		{
			$repetido = false;
			$this->conectar();
			$sql="SELECT * FROM ttiporeferencia WHERE tiporeferencia='$this->tiporeferencia';";
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
			$SQL = "UPDATE ttiporeferencia SET tiporeferencia = '$this->tiporeferencia' WHERE idtiporeferencia='$this->idtiporeferencia';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function consultar()
		{
			$Fila = array();
			$this->conectar();
			$sql="SELECT * FROM ttiporeferencia WHERE idtiporeferencia='$this->idtiporeferencia';";
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
			$sql="SELECT * FROM ttiporeferencia;";
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
			$SQL = "UPDATE ttiporeferencia SET estatusreferencia = '$this->estatusreferencia' WHERE idtiporeferencia='$this->idtiporeferencia';";
			$this->conectar();
			echo $SQL;
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}
	}
?>