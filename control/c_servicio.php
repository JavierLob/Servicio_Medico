<?php
	/**
	* Controlador servicio
	*
	* @package    ModeloAulafrontino
	* @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
	* @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
	* @link       https://github.com/EquipoAulaFrontino
	* @version    v1.0
	*/
	session_start();
	require_once("../modelo/m_servicio.php");
	$lobjServicio=new clsServicio;

	$lobjServicio->set_Servicio($_POST['idservicio']);
	$lobjServicio->set_Nombre($_POST['nombreser']);
	$lobjServicio->set_Enlace($_POST['enlaceser']);
	$lobjServicio->set_Visible($_POST['visibleser']);
	$lobjServicio->set_Modulo($_POST['idmodulo']);
	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_servicio':
			$hecho=$lobjServicio->registrar_servicio();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
		break;
		case 'editar_servicio':
			$hecho=$lobjServicio->editar_servicio();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
		break;
		case 'eliminar_servicio':
			$hecho=$lobjServicio->eliminar_servicio();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
		break;
		default:
			header('location: ../vista/intranet.php?vista=seguridad/servicio');
		break;
	}

	header('location: ../vista/intranet.php?vista=seguridad/servicio');
?>