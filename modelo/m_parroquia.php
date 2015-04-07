<?php
	require_once('m_mysql.php');

	class claseparroquia extends bd_my
	{
		public $idparroquia, $parroquia, $estatusparroquia, $idtmunicipio;

		function __CONSTRUCT()
		{
			$this->idparroquia = '';
			$this->parroquia = '';
			$this->estatusparroquia = '';
			$this->idtmunicipio = '';
		}

		public function set_datos($idparroquia = '', $parroquia = '', $estatusparroquia = '')
		{
			$this->idparroquia = $idparroquia;
			$this->parroquia = $parroquia;
			$this->estatusparroquia = $estatusparroquia;
		}

		public function set_Municipio($idtmunicipio)
		{
			$this->idtmunicipio = $idtmunicipio;			
		}

		public function incluir()
		{
			$respuesta = false;
			$SQL = "INSERT INTO tparroquia (parroquia,idtmunicipio, estatusparroquia) VALUES ('$this->parroquia','$this->idtmunicipio', '1');";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function modificar()
		{
			$respuesta = false;
			$SQL = "UPDATE tparroquia SET parroquia = '$this->parroquia',idtmunicipio = '$this->idtmunicipio' WHERE idparroquia='$this->idparroquia';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function consultar()
		{
			$Fila = array();
			$this->conectar();
			$sql="SELECT * FROM tparroquia WHERE idparroquia='$this->idparroquia';";
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
			$sql="SELECT idparroquia,parroquia,estatusparroquia,municipio,estado FROM tparroquia,tmunicipio,testado WHERE tparroquia.idtmunicipio=tmunicipio.idtmunicipio AND tmunicipio.idestado=testado.idestado;";
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
			$SQL = "UPDATE tparroquia SET estatusparroquia = '$this->estatusparroquia' WHERE idparroquia='$this->idparroquia';";
			$this->conectar();
			echo $SQL;
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function listar_municipio()
		{
			$Filas = array();
			$cont = 0;
			$this->conectar();
			$sql="SELECT idparroquia,parroquia,estatusparroquia,municipio,estado FROM tparroquia,tmunicipio,testado WHERE tmunicipio.idtmunicipio='$this->idtmunicipio' AND tparroquia.idtmunicipio=tmunicipio.idtmunicipio AND tmunicipio.idestado=testado.idestado;";
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