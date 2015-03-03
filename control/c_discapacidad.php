<?php
	session_start();
	require_once("../modelo/m_discapacidad.php");
	$lobjDiscapacidad=new claseDiscapacidad;

	$lobjDiscapacidad->set_datos($_POST['idtdiscapacidad'], $_POST['discapacidad'], $_POST['estatusdiscapacidad']);
	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_discapacidad':
			$hecho=$lobjDiscapacidad->incluir();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
		break;
		case 'editar_discapacidad':
			$hecho=$lobjDiscapacidad->modificar();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
		break;
		case 'eliminar_discapacidad':
			$hecho=$lobjDiscapacidad->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha eliminardo exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
		break;
		case 'activar_discapacidad':
			$hecho=$lobjDiscapacidad->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha activado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al activar';
			}
		break;
		default:
			header('location: ../vista/intranet.php?vista=discapacidad');
		break;
	}

	header('location: ../vista/intranet.php?vista=discapacidad');
?>