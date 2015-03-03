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
		break;
		case 'eliminar_carrera':
			$hecho=$lobjCarrera->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha eliminardo exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
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
		break;
		default:
			header('location: ../vista/intranet.php?vista=carrera');
		break;
	}

	header('location: ../vista/intranet.php?vista=carrera');
?>