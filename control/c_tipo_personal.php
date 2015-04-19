<?php
	session_start();
	require_once("../modelo/m_tipo_personal.php");
	$lobjTipopersonal=new claseTipopersonal;

	$lobjTipopersonal->set_datos($_POST['idtipopersonal'], $_POST['tipopersonal'], $_POST['estatuspersonal']);
	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_tipo_personal':
			$hecho=$lobjTipopersonal->incluir();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
			header('location: ../vista/intranet.php?vista=configuracion/tipo_personal');
		break;
		case 'editar_tipo_personal':
			$hecho=$lobjTipopersonal->modificar();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/tipo_personal');
		break;
		case 'validar':
			if($lobjTipopersonal->validar())
				echo '1';
			else
				echo '0';
				
		break;
		case 'eliminar_tipo_personal':
			$hecho=$lobjTipopersonal->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/tipo_personal');
		break;
		case 'activar_tipo_personal':
			$hecho=$lobjTipopersonal->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha activado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al activar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/tipo_personal');
		break;
		default:
			header('location: ../vista/intranet.php?vista=tipo_personal');
		break;
	}

?>