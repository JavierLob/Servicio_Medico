<?php
	session_start();
	require_once("../modelo/m_tiporeferencia.php");
	$lobjTiporeferencia=new claseTiporeferencia;

	$lobjTiporeferencia->set_datos($_POST['idtiporeferencia'], $_POST['tiporeferencia'], $_POST['estatusreferencia']);
	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_tiporeferencia':
			$hecho=$lobjTiporeferencia->incluir();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
		break;
		case 'editar_tiporeferencia':
			$hecho=$lobjTiporeferencia->modificar();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
		break;
		case 'eliminar_tiporeferencia':
			$hecho=$lobjTiporeferencia->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha eliminardo exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
		break;
		case 'activar_tiporeferencia':
			$hecho=$lobjTiporeferencia->cambiar_estatus();
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
			header('location: ../vista/intranet.php?vista=tiporeferencia');
		break;
	}

	header('location: ../vista/intranet.php?vista=tiporeferencia');
?>