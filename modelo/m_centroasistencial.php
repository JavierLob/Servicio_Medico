<?php
	require_once('m_mysql.php');

	class claseCentroasistencial extends bd_my
	{
		public $idtcentroasistencial, $nombrecentroasistencial, $estatuscentroasistencial;

		function __CONSTRUCT()
		{
			$this->idtcentroasistencial = '';
			$this->nombrecentroasistencial = '';
			$this->estatuscentroasistencial = '';
		}

		public function set_datos($idtcentroasistencial = '', $nombrecentroasistencial = '', $estatuscentroasistencial = '')
		{
			$this->idtcentroasistencial = $idtcentroasistencial;
			$this->nombrecentroasistencial = $nombrecentroasistencial;
			$this->estatuscentroasistencial = $estatuscentroasistencial;
		}

		public function incluir()
		{
			$respuesta = false;
			$SQL = "INSERT INTO tcentroasistencial (nombrecentroasistencial, estatuscentroasistencial) VALUES ('$this->nombrecentroasistencial', '1');";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function modificar()
		{
			$respuesta = false;
			$SQL = "UPDATE tcentroasistencial SET nombrecentroasistencial = '$this->nombrecentroasistencial' WHERE idtcentroasistencial='$this->idtcentroasistencial';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function consultar()
		{
			$Fila = array();
			$this->conectar();
			$sql="SELECT * FROM tcentroasistencial WHERE idtcentroasistencial='$this->idtcentroasistencial';";
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
			$sql="SELECT * FROM tcentroasistencial;";
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
			$SQL = "UPDATE tcentroasistencial SET estatuscentroasistencial = '$this->estatuscentroasistencial' WHERE idtcentroasistencial='$this->idtcentroasistencial';";
			$this->conectar();
			echo $SQL;
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}
	}
?>