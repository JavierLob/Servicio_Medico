<?php
	require_once('m_mysql.php');

	class claseEstado extends bd_my
	{
		public $idestado, $estado, $estatusestado;

		function __CONSTRUCT()
		{
			$this->idestado = '';
			$this->estado = '';
			$this->estatusestado = '';
		}

		public function set_datos($idestado = '', $estado = '', $estatusestado = '')
		{
			$this->idestado = $idestado;
			$this->estado = $estado;
			$this->estatusestado = $estatusestado;
		}

		public function incluir()
		{
			$respuesta = false;
			$SQL = "INSERT INTO testado (estado, estatusestado) VALUES ('$this->estado', '1');";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function modificar()
		{
			$respuesta = false;
			$SQL = "UPDATE testado SET estado = '$this->estado' WHERE idestado='$this->idestado';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function consultar()
		{
			$Fila = array();
			$this->conectar();
			$sql="SELECT * FROM testado WHERE idestado='$this->idestado';";
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
			$sql="SELECT * FROM testado;";
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
			$SQL = "UPDATE testado SET estatusestado = '$this->estatusestado' WHERE idestado='$this->idestado';";
			$this->conectar();
			echo $SQL;
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}
	}
?>