<?php
	session_start();
	require_once("../modelo/m_enfermedadescronicas.php");
	$lobjEnfermedad=new claseEnfermedadCronicas;

	$lobjEnfermedad->set_datos($_POST['idtenfermedadescronicas'], $_POST['enfermedadescronicas'], $_POST['estatusenfermedad']);
	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_enfermedadescronicas':
			$hecho=$lobjEnfermedad->incluir();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
		break;
		case 'editar_enfermedadescronicas':
			$hecho=$lobjEnfermedad->modificar();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
		break;
		case 'eliminar_enfermedadescronicas':
			$hecho=$lobjEnfermedad->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha eliminardo exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
		break;
		case 'activar_enfermedadescronicas':
			$hecho=$lobjEnfermedad->cambiar_estatus();
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
			header('location: ../vista/intranet.php?vista=enfermedadescronicas');
		break;
	}

	header('location: ../vista/intranet.php?vista=enfermedadescronicas');
?>