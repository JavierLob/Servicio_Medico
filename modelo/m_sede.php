<?php
	require_once('m_mysql.php');

	class claseSede extends bd_my
	{
		public $idtsede, $sede, $direccionsede, $estatus;

		function __CONSTRUCT()
		{
			$this->idtsede = '';
			$this->sede = '';
			$this->direccionsede = '';
			$this->estatus = '';
		}

		public function set_datos($idtsede = '', $sede = '', $direccionsede = '', $estatus='')
		{
			$this->idtsede = $idtsede;
			$this->sede = $sede;
			$this->direccionsede = $direccionsede;
			$this->estatus = $estatus;
		}

		public function incluir()
		{
			$respuesta = false;
			$SQL = "INSERT INTO tsede (sede, direccionsede, estatus) VALUES ('$this->sede', '$this->direccionsede', '1');";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function modificar()
		{
			$respuesta = false;
			$SQL = "UPDATE tsede SET sede = '$this->sede', direccionsede = '$this->direccionsede' WHERE idtsede='$this->idtsede';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function consultar()
		{
			$Fila = array();
			$this->conectar();
			$sql="SELECT * FROM tsede WHERE idtsede='$this->idtsede';";
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
			$sql="SELECT * FROM tsede;";
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
			$SQL = "UPDATE tsede SET estatus = '$this->estatus' WHERE idtsede='$this->idtsede';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}
	}
?>