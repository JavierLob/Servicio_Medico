<?php
	require_once('m_mysql.php');

	class claseEnfermedadCronicas extends bd_my
	{
		public $idtenfermedadescronicas, $enfermedadcronica, $estatusenfermedad;

		function __CONSTRUCT()
		{
			$this->idtenfermedadescronicas = '';
			$this->enfermedadcronica = '';
			$this->estatusenfermedad = '';
		}

		public function set_datos($idtenfermedadescronicas = '', $enfermedadcronica = '', $estatusenfermedad = '')
		{
			$this->idtenfermedadescronicas = $idtenfermedadescronicas;
			$this->enfermedadcronica = $enfermedadcronica;
			$this->estatusenfermedad = $estatusenfermedad;
		}

		public function incluir()
		{
			$respuesta = false;
			$SQL = "INSERT INTO tenfermedadescronicas (enfermedadcronica, estatusenfermedad) VALUES ('$this->enfermedadcronica', '1');";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function validar()
		{
			$repetido = false;
			$this->conectar();
			$sql="SELECT * FROM tenfermedadescronicas WHERE enfermedadcronica='$this->enfermedadcronica';";
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
			$SQL = "UPDATE tenfermedadescronicas SET enfermedadcronica = '$this->enfermedadcronica' WHERE idtenfermedadescronicas='$this->idtenfermedadescronicas';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function consultar()
		{
			$Fila = array();
			$this->conectar();
			$sql="SELECT * FROM tenfermedadescronicas WHERE idtenfermedadescronicas='$this->idtenfermedadescronicas';";
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
			$sql="SELECT * FROM tenfermedadescronicas;";
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
			$SQL = "UPDATE tenfermedadescronicas SET estatusenfermedad = '$this->estatusenfermedad' WHERE idtenfermedadescronicas='$this->idtenfermedadescronicas';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}
	}
?>