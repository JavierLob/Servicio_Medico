<?php
	require_once('m_mysql.php');

	class claseEtnia extends bd_my
	{
		public $idtetnia, $etnia, $estatusetnia;

		function __CONSTRUCT()
		{
			$this->idtetnia = '';
			$this->etnia = '';
			$this->estatusetnia = '';
		}

		public function set_datos($idtetnia = '', $etnia = '', $estatusetnia = '')
		{
			$this->idtetnia = $idtetnia;
			$this->etnia = $etnia;
			$this->estatusetnia = $estatusetnia;
		}

		public function incluir()
		{
			$respuesta = false;
			$SQL = "INSERT INTO tetnia (etnia, estatusetnia) VALUES ('$this->etnia', '1');";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function modificar()
		{
			$respuesta = false;
			$SQL = "UPDATE tetnia SET etnia = '$this->etnia' WHERE idtetnia='$this->idtetnia';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function consultar()
		{
			$Fila = array();
			$this->conectar();
			$sql="SELECT * FROM tetnia WHERE idtetnia='$this->idtetnia';";
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
			$sql="SELECT * FROM tetnia;";
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
			$SQL = "UPDATE tetnia SET estatusetnia = '$this->estatusetnia' WHERE idtetnia='$this->idtetnia';";
			$this->conectar();
			echo $SQL;
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}
	}
?>