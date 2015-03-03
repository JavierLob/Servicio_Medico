<?php
	require_once('m_mysql.php');

	class claseUsuario extends bd_my
	{
		private $lcUsuario;
		private $lcClave;
		private $lnRol;
		private $lbEstatus;

		function set_Usuario($pcUsuario)
		{
			$this->lcUsuario=$pcUsuario;
		}

		function set_Clave($pcClave)
		{
			$this->lcClave=$pcClave;
		}

		function set_Rol($pnRol)
		{
			$this->lnRol=$pnRol;
		}

		function set_Estatus($pbEstatus)
		{
			$this->lbEstatus=$pbEstatus;
		}

		function consultar()
		{
			$this->conectar();
			$sql="SELECT * FROM tusuario WHERE idtusuario='$this->lcUsuario' ";
			$pcsql=$this->filtro($sql);
			if($laRow=$this->proximo($pcsql))
			{
				$Fila[0]=$laRow['idtusuario'];
				$Fila[1]=$laRow['claveusu'];
				$Fila[2]=$laRow['trol_idtrol'];
				$Fila[3]=$laRow['tpersona_idtpersona'];
			}
			$this->desconectar();
			return $Fila;
		}

		function login()
		{
			$this->conectar();
			$sql="SELECT * FROM tusuario WHERE usuario='$this->lcUsuario' AND clave=sha1('$this->lcClave') AND estatus='1'";
			$pcsql=$this->filtro($sql);
			if($laRow=$this->proximo($pcsql))
			{
				$Fila[0]=$laRow['idtusuario'];
				$Fila[1]=$laRow['usuario'];
				$Fila[2]=$laRow['rol'];
				$Fila[3]=$laRow['estatus'];
			}
			$this->desconectar();
			return $Fila;
		}
	}
?>