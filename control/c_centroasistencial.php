<?php
	session_start();
	require_once("../modelo/m_centroasistencial.php");
	$lobjCentroasistencial=new claseCentroasistencial;

	$lobjCentroasistencial->set_datos($_POST['idtcentroasistencial'], $_POST['nombrecentroasistencial'], $_POST['estatuscentroasistencial']);
	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_centroasistencial':
			$hecho=$lobjCentroasistencial->incluir();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
		break;
		case 'editar_centroasistencial':
			$hecho=$lobjCentroasistencial->modificar();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
		break;
		case 'eliminar_centroasistencial':
			$hecho=$lobjCentroasistencial->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha eliminardo exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
		break;
		case 'activar_centroasistencial':
			$hecho=$lobjCentroasistencial->cambiar_estatus();
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
			header('location: ../vista/intranet.php?vista=centroasistencial');
		break;
	}

	header('location: ../vista/intranet.php?vista=centroasistencial');
?>