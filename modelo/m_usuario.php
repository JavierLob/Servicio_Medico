<?php
	/**
	* Clase usuario
	*
	* @package    ModeloAulafrontino
	* @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
	* @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
	* @link       https://github.com/EquipoAulaFrontino
	* @version    v1.0
	*/
	require_once('m_mysql.php');

	class clsUsuario extends bd_my
	{
		private $lcUsuario;
		private $lcClave;
		private $lnIdRol;
		private $lnIdPersona;


		function set_Usuario($pcUsuario)
		{
			$this->lcUsuario=$pcUsuario;
		}

		function set_Clave($pcClave)
		{
			$this->lcClave=$pcClave;
		}

		function set_Rol($pcIdRol)
		{
			$this->lnIdRol=$pcIdRol;
		}

		function set_Persona($pnIdPersona)
		{
			$this->lnIdPersona=$pnIdPersona;
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
			$Fila[0]=0;
			$sql="SELECT idtusuario,nombrerol,rol,usuario FROM tusuario,trol WHERE usuario='$this->lcUsuario'AND clave=md5('$this->lcClave') AND rol=idtrol ";
			$pcsql=$this->filtro($sql);
			if($laRow=$this->proximo($pcsql))
			{
				$Fila[0]=$laRow['idtusuario'];
				$Fila[1]=$laRow['nombrerol'];
				$Fila[2]=$laRow['rol'];
				$Fila[3]=$laRow['usuario'];
				$Fila[4]=$laRow['estatus'];
			}
			$this->desconectar();
			return $Fila;
		}
	}
?>