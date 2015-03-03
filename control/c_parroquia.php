<?php
	session_start();
	require_once("../modelo/m_parroquia.php");
	$lobjParroquia=new claseparroquia;

	$lobjParroquia->set_datos($_POST['idparroquia'], $_POST['parroquia'], $_POST['estatusparroquia']);
	$lobjParroquia->set_Municipio($_POST['idtmunicipio']);
	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_parroquia':
			$hecho=$lobjParroquia->incluir();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
		break;
		case 'editar_parroquia':
			$hecho=$lobjParroquia->modificar();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
		break;
		case 'eliminar_parroquia':
			$hecho=$lobjParroquia->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha eliminardo exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
		break;
		case 'activar_parroquia':
			$hecho=$lobjParroquia->cambiar_estatus();
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
			header('location: ../vista/intranet.php?vista=parroquia');
		break;
	}

	header('location: ../vista/intranet.php?vista=parroquia');
?>