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
		private $lcClaveNueva;
		private $lnIdRol;
		private $lnIdPersona;
		private $lcPregunta_uno;
		private $lcPregunta_dos;
		private $lcPregunta_tres;
		private $lcRespuesta_uno;
		private $lcRespuesta_dos;
		private $lcRespuesta_tres;


		function set_Usuario($pcUsuario)
		{
			$this->lcUsuario=$pcUsuario;
		}

		function set_Clave($pcClave)
		{
			$this->lcClave=$pcClave;
		}

		function set_ClaveNueva($pcClaveNueva)
		{
			$this->lcClaveNueva=$pcClaveNueva;
		}

		function set_Rol($pcIdRol)
		{
			$this->lnIdRol=$pcIdRol;
		}

		function set_Persona($pnIdPersona)
		{
			$this->lnIdPersona=$pnIdPersona;
		}

		function set_Pregunta($pregunta_uno, $pregunta_dos, $pregunta_tres)
		{
			$this->lcPregunta_uno = $pregunta_uno;
			$this->lcPregunta_dos = $pregunta_dos;
			$this->lcPregunta_tres = $pregunta_tres;
		}

		function set_Respuesta($respuesta_uno, $respuesta_dos, $respuesta_tres)
		{
			$this->lcRespuesta_uno = $respuesta_uno;
			$this->lcRespuesta_dos = $respuesta_dos;
			$this->lcRespuesta_tres = $respuesta_tres;
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
			$sql="SELECT idtusuario,nombrerol,rol,usuario,primernombre,primerapellido,idpersonal,cedulaopasaporte as cedula,(SELECT idtdoctor FROM tdoctor WHERE cedula=cedulaopasaporte)as iddoctor FROM tusuario,trol,tpersonal WHERE usuario='$this->lcUsuario'AND clave=md5('$this->lcClave') AND rol=idtrol AND cedulaopasaporte=usuario ";
			$pcsql=$this->filtro($sql);
			if($laRow=$this->proximo($pcsql))
			{
				$Fila[0]=$laRow['idtusuario'];
				$Fila[1]=$laRow['nombrerol'];
				$Fila[2]=$laRow['rol'];
				$Fila[3]=$laRow['usuario'];
				$Fila[4]=$laRow['estatus'];
				$Fila[5]=$laRow['primernombre'].' '.$laRow['primerapellido'];
				$Fila[6]=$laRow['idpersonal'];
				$Fila[7]=$laRow['iddoctor'];
			}
			$this->desconectar();
			return $Fila;
		}

		function cambiar_clave()
		{
			$this->conectar();
			$sql="UPDATE tusuario SET clave=md5('$this->lcClaveNueva') WHERE usuario='$this->lcUsuario' AND clave=md5('$this->lcClave')";
			$resultado=$this->ejecutar($sql);
			$this->desconectar();
			return $resultado;
		}

		function modificar_preguntas()
		{
			$this->conectar();
			$sql="UPDATE tusuario SET pregunta_uno = '$this->lcPregunta_uno', pregunta_dos = '$this->lcPregunta_dos', pregunta_tres = '$this->lcPregunta_tres'
				, respuesta_uno = '$this->lcRespuesta_uno', respuesta_dos = '$this->lcRespuesta_dos', respuesta_tres = '$this->lcRespuesta_tres'
				 WHERE usuario='$this->lcUsuario'";
				 echo $sql;
			$resultado=$this->ejecutar($sql);
			$this->desconectar();
			return $resultado;
		}

		function validar_respuestas()
		{
			$validar = false;
			$this->conectar();
			$sql="SELECT * FROM tusuario WHERE usuario='$this->lcUsuario' AND UPPER(respuesta_uno) = UPPER('$this->lcRespuesta_uno') AND UPPER(respuesta_dos) = UPPER('$this->lcRespuesta_dos') AND UPPER(respuesta_tres) = UPPER('$this->lcRespuesta_tres');";
			$pcsql=$this->filtro($sql);
			if($laRow=$this->proximo($pcsql))
			{
				$validar = true;
			}
			$this->desconectar();
			return $validar;
		}

		function cambiar_clave_ext()
		{
			$this->conectar();
			$sql="UPDATE tusuario SET clave=md5('$this->lcClaveNueva') WHERE usuario='$this->lcUsuario'";
			$resultado=$this->ejecutar($sql);
			$this->desconectar();
			return $resultado;
		}
	}
?>