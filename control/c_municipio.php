<?php
	session_start();
	require_once("../modelo/m_municipio.php");
	$lobjMunicipio=new claseMunicipio;

	$lobjMunicipio->set_datos($_POST['idtmunicipio'], $_POST['municipio'], $_POST['statusmunicipio']);
	$lobjMunicipio->set_Estado($_POST['idestado']);
	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_municipio':
			$hecho=$lobjMunicipio->incluir();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
		break;
		case 'editar_municipio':
			$hecho=$lobjMunicipio->modificar();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
		break;
		case 'eliminar_municipio':
			$hecho=$lobjMunicipio->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha eliminardo exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
		break;
		case 'activar_municipio':
			$hecho=$lobjMunicipio->cambiar_estatus();
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
			header('location: ../vista/intranet.php?vista=municipio');
		break;
	}

	header('location: ../vista/intranet.php?vista=municipio');
?>