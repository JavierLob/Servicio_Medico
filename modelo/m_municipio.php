<?php
	require_once('m_mysql.php');

	class claseMunicipio extends bd_my
	{
		public $idtmunicipio, $municipio, $statusmunicipio, $idestado;

		function __CONSTRUCT()
		{
			$this->idtmunicipio = '';
			$this->municipio = '';
			$this->statusmunicipio = '';
			$this->idestado = '';
		}

		public function set_datos($idtmunicipio = '', $municipio = '', $statusmunicipio = '')
		{
			$this->idtmunicipio = $idtmunicipio;
			$this->municipio = $municipio;
			$this->statusmunicipio = $statusmunicipio;
		}

		public function set_Estado($idestado)
		{
			$this->idestado = $idestado;			
		}

		public function incluir()
		{
			$respuesta = false;
			$SQL = "INSERT INTO tmunicipio (municipio,idestado, statusmunicipio) VALUES ('$this->municipio','$this->idestado', '1');";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function modificar()
		{
			$respuesta = false;
			$SQL = "UPDATE tmunicipio SET municipio = '$this->municipio',idestado = '$this->idestado' WHERE idtmunicipio='$this->idtmunicipio';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function consultar()
		{
			$Fila = array();
			$this->conectar();
			$sql="SELECT * FROM tmunicipio WHERE idtmunicipio='$this->idtmunicipio';";
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
			$sql="SELECT idtmunicipio,municipio,statusmunicipio,estado,tmunicipio.idestado as idestado FROM tmunicipio,testado WHERE tmunicipio.idestado=testado.idestado;";
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
			$SQL = "UPDATE tmunicipio SET statusmunicipio = '$this->statusmunicipio' WHERE idtmunicipio='$this->idtmunicipio';";
			$this->conectar();
			echo $SQL;
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function listar_estado()
		{
			$Filas = array();
			$cont = 0;
			$this->conectar();
			$sql="SELECT idtmunicipio,municipio,statusmunicipio,estado,tmunicipio.idestado as idestado FROM tmunicipio,testado WHERE testado.idestado='$this->idestado' AND tmunicipio.idestado=testado.idestado;";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Filas[$cont] = $laRow;
				$cont++;
			}
			$this->desconectar();
			return $Filas;
		}
	}
?>