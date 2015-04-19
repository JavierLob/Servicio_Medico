<?php
	session_start();
	require_once("../modelo/m_etnia.php");
	$lobjEtnia=new claseEtnia;

	$lobjEtnia->set_datos($_POST['idtetnia'], $_POST['etnia'], $_POST['estatusetnia']);
	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_etnia':
			$hecho=$lobjEtnia->incluir();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
			header('location: ../vista/intranet.php?vista=configuracion/etnia');
		break;
		case 'validar':
			if($lobjEtnia->validar())
				echo '1';
			else
				echo '0';
				
		break;
		case 'editar_etnia':
			$hecho=$lobjEtnia->modificar();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/etnia');
		break;
		case 'eliminar_etnia':
			$hecho=$lobjEtnia->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/etnia');
		break;
		case 'activar_etnia':
			$hecho=$lobjEtnia->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha activado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al activar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/etnia');
		break;
		default:
			header('location: ../vista/intranet.php?vista=configuracion/etnia');
		break;
	}

?>