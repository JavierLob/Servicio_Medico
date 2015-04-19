<?php
	require_once('m_mysql.php');

	class claseAlergia extends bd_my
	{
		public $idalergia, $alergia, $estatusale, $idestado;

		function __CONSTRUCT()
		{
			$this->idalergia = '';
			$this->nombreale = '';
			$this->estatusale = '';
		}

		public function set_datos($idalergia = '', $nombreale = '', $estatusale = '')
		{
			$this->idalergia = $idalergia;
			$this->nombreale = $nombreale;
			$this->estatusale = $estatusale;
		}

		public function set_Estado($idestado)
		{
			$this->idestado = $idestado;			
		}

		public function incluir()
		{
			$respuesta = false;
			$SQL = "INSERT INTO talergia (nombreale,estatusale) VALUES ('$this->nombreale', '1');";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function modificar()
		{
			$respuesta = false;
			$SQL = "UPDATE talergia SET nombreale = '$this->nombreale' WHERE idalergia='$this->idalergia';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function consultar()
		{
			$Fila = array();
			$this->conectar();
			$sql="SELECT * FROM talergia WHERE idalergia='$this->idalergia';";
			$pcsql=$this->filtro($sql);
			if($laRow=$this->proximo($pcsql))
			{
				$Fila=$laRow;
			}
			$this->desconectar();
			return $Fila;
		}

		public function validar()
		{
			$repetido = false;
			$this->conectar();
			$sql="SELECT * FROM talergia WHERE nombreale='$this->nombreale';";
			$pcsql=$this->filtro($sql);
			if($laRow=$this->proximo($pcsql))
			{
				$repetido = true;
			}
			$this->desconectar();
			return $repetido;
		}

		public function listar()
		{
			$Filas = array();
			$cont = 0;
			$this->conectar();
			$sql="SELECT idalergia,nombreale,estatusale FROM talergia ";
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
			$SQL = "UPDATE talergia SET estatusale = '$this->estatusale' WHERE idalergia='$this->idalergia';";
			$this->conectar();
			echo $SQL;
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

	}
?>