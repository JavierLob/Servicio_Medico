<?php
	session_start();
	require_once("../modelo/m_tipoexamen.php");
	$lobjTipoexamen=new claseTipoexamen;

	$lobjTipoexamen->set_datos($_POST['idttipoexamen'], $_POST['tipoexamen'], $_POST['estatustipoexamen']);
	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_tipoexamen':
			$hecho=$lobjTipoexamen->incluir();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
		break;
		case 'editar_tipoexamen':
			$hecho=$lobjTipoexamen->modificar();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
		break;
		case 'eliminar_tipoexamen':
			$hecho=$lobjTipoexamen->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha eliminardo exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
		break;
		case 'activar_tipoexamen':
			$hecho=$lobjTipoexamen->cambiar_estatus();
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
			header('location: ../vista/intranet.php?vista=tipoexamen');
		break;
	}

	header('location: ../vista/intranet.php?vista=tipoexamen');
?>