<?php
	session_start();
	require_once("../modelo/m_sede.php");
	$lobjSede=new claseSede;

	$lobjSede->set_datos($_POST['idtsede'], $_POST['sede'], $_POST['direccionsede'], $_POST['estatus']);
	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_sede':
			$hecho=$lobjSede->incluir();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
			header('location: ../vista/intranet.php?vista=configuracion/sede');
		break;
		case 'editar_sede':
			$hecho=$lobjSede->modificar();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/sede');
		break;
		case 'validar':
			if($lobjSede->validar())
				echo '1';
			else
				echo '0';
				
		break;
		case 'eliminar_sede':
			$hecho=$lobjSede->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/sede');
		break;
		case 'activar_sede':
			$hecho=$lobjSede->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha activado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al activar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/sede');
		break;
		default:
			header('location: ../vista/intranet.php?vista=configuracion/sede');
		break;
	}

?>