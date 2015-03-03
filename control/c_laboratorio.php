<?php
	session_start();
	require_once("../modelo/m_laboratorio.php");
	$laboratorio=new claseLaboratorio;

	$laboratorio->set_datos($_POST['idtlaboratorio'], $_POST['laboratorio'], $_POST['estatuslaboratorio']);
	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_laboratorio':
			$hecho=$laboratorio->incluir();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
		break;
		case 'editar_laboratorio':
			$hecho=$laboratorio->modificar();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
		break;
		case 'eliminar_laboratorio':
			$hecho=$laboratorio->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha eliminardo exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
		break;
		case 'activar_laboratorio':
			$hecho=$laboratorio->cambiar_estatus();
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
			header('location: ../vista/intranet.php?vista=laboratorio');
		break;
	}

	header('location: ../vista/intranet.php?vista=laboratorio');
?>