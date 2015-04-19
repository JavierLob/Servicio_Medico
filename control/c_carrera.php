<?php
	session_start();
	require_once("../modelo/m_carrera.php");
	$lobjCarrera=new claseCarrera;

	$lobjCarrera->set_datos($_POST['idtcarrera'], $_POST['carrera'], $_POST['estatuscarrera']);
	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_carrera':
			$hecho=$lobjCarrera->incluir();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
			header('location: ../vista/intranet.php?vista=configuracion/carrera');
		break;
		case 'validar':
			if($lobjCarrera->validar())
				echo '1';
			else
				echo '0';
				
		break;
		case 'editar_carrera':
			$hecho=$lobjCarrera->modificar();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/carrera');
		break;
		case 'eliminar_carrera':
			$hecho=$lobjCarrera->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/carrera');
		break;
		case 'activar_carrera':
			$hecho=$lobjCarrera->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha activado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al activar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/carrera');
		break;
		default:
			header('location: ../vista/intranet.php?vista=configuracion/carrera');
		break;
	}

?>