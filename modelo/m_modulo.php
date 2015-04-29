<?php
	/**
	* Clase módulo
	*
	* @package    ModeloAulafrontino
	* @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
	* @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
	* @link       https://github.com/EquipoAulaFrontino
	* @version    v1.0
	*/
	require_once('m_mysql.php');
	class clsModulo extends bd_my
	{
		private $lcIdModulo;
		private $lcNombre;
		private $lcIcono;

		function set_Modulo($pcIdModulo)
		{
			$this->lcIdModulo=$pcIdModulo;
		}

		function set_Nombre($pcNombre)
		{
			$this->lcNombre=$pcNombre;
		}

		function set_Icono($pcIcono)
		{
			$this->lcIcono=$pcIcono;
		}
		function consultar_modulos()
		{
			$this->conectar();
			$cont=0;
				$sql="SELECT idtmodulo,nombremod,iconomod FROM tmodulo ";
				$pcsql=$this->filtro($sql);
				while($laRow=$this->proximo($pcsql))
				{
					$Fila[$cont][0]=$laRow['idtmodulo'];
					$Fila[$cont][1]=$laRow['nombremod'];
					$Fila[$cont][2]=$laRow['iconomod'];
					$cont++;
				}
			
			$this->desconectar();
			return $Fila;
		}

		public function validar()
		{
			$repetido = false;
			$this->conectar();
			$sql="SELECT * FROM tmodulo WHERE nombremod='$this->lcNombre';";
			$pcsql=$this->filtro($sql);
			if($laRow=$this->proximo($pcsql))
			{
				$repetido = true;
			}
			$this->desconectar();
			return $repetido;
		}

		function consultar_modulo()
		{
			$this->conectar();
				$sql="SELECT idtmodulo,nombremod,iconomod FROM tmodulo WHERE idtmodulo='$this->lcIdModulo'";
				$pcsql=$this->filtro($sql);
				if($laRow=$this->proximo($pcsql))
				{
					$Fila[0]=$laRow['idtmodulo'];
					$Fila[1]=$laRow['nombremod'];
					$Fila[2]=$laRow['iconomod'];
				}
			
			$this->desconectar();
			return $Fila;
		}

		function registrar_modulo()
		{
			$this->conectar();
			$sql="INSERT INTO tmodulo (nombremod,iconomod)VALUES('$this->lcNombre','$this->lcIcono')";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}

		function eliminar_modulo()
		{
			$this->conectar();
			$sql="DELETE FROM tmodulo WHERE idtmodulo='$this->lcIdModulo' ";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}

		function editar_modulo()
		{
			$this->conectar();
			$sql="UPDATE tmodulo SET nombremod='$this->lcNombre',iconomod='$this->lcIcono' WHERE idtmodulo='$this->lcIdModulo' ";
			$lnHecho=$this->ejecutar($sql);			
			$this->desconectar();
			return $lnHecho;
		}
	}
?>