<?php
	require_once('m_mysql.php');

	class claseTipoexamen extends bd_my
	{
		public $idttipoexamen, $tipoexamen, $estatustipoexamen;

		function __CONSTRUCT()
		{
			$this->idttipoexamen = '';
			$this->tipoexamen = '';
			$this->estatustipoexamen = '';
		}

		public function set_datos($idttipoexamen = '', $tipoexamen = '', $estatustipoexamen = '')
		{
			$this->idttipoexamen = $idttipoexamen;
			$this->tipoexamen = $tipoexamen;
			$this->estatustipoexamen = $estatustipoexamen;
		}

		public function incluir()
		{
			$respuesta = false;
			$SQL = "INSERT INTO ttipoexamen (tipoexamen, estatustipoexamen) VALUES ('$this->tipoexamen', '1');";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function modificar()
		{
			$respuesta = false;
			$SQL = "UPDATE ttipoexamen SET tipoexamen = '$this->tipoexamen' WHERE idttipoexamen='$this->idttipoexamen';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function consultar()
		{
			$Fila = array();
			$this->conectar();
			$sql="SELECT * FROM ttipoexamen WHERE idttipoexamen='$this->idttipoexamen';";
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
			$sql="SELECT * FROM ttipoexamen;";
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
			$SQL = "UPDATE ttipoexamen SET estatustipoexamen = '$this->estatustipoexamen' WHERE idttipoexamen='$this->idttipoexamen';";
			$this->conectar();
			echo $SQL;
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}
	}
?>