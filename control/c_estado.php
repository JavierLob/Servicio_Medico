<?php
	session_start();
	require_once("../modelo/m_estado.php");
	$lobjEstado=new claseEstado;

	$lobjEstado->set_datos($_POST['idestado'], $_POST['estado'], $_POST['estatusestado']);
	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_estado':
			$hecho=$lobjEstado->incluir();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
		break;
		case 'editar_estado':
			$hecho=$lobjEstado->modificar();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
		break;
		case 'eliminar_estado':
			$hecho=$lobjEstado->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha eliminardo exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
		break;
		case 'activar_estado':
			$hecho=$lobjEstado->cambiar_estatus();
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
			header('location: ../vista/intranet.php?vista=estado');
		break;
	}

	header('location: ../vista/intranet.php?vista=estado');
?>