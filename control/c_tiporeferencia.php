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
			header('location: ../vista/intranet.php?vista=configuracion/tiporeferencia');
		break;
		case 'consultar_tiporeferencia':
			if($lareferencias=$lobjTiporeferencia->listar())
			{
				$option='<option value=""></option>';
				for($i=0;$i<count($lareferencias);$i++)
				{
					$option.='<option value="'.$lareferencias[$i]['idtiporeferencia'].'">'.$lareferencias[$i]['tiporeferencia'].'</option>';
				}	
			}
			else
			{
				$option='<option>No se han encontrado registros</option>';
			}
			echo $option;
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
			header('location: ../vista/intranet.php?vista=configuracion/tiporeferencia');
		break;
		case 'eliminar_tiporeferencia':
			$hecho=$lobjTiporeferencia->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/tiporeferencia');
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
			header('location: ../vista/intranet.php?vista=configuracion/tiporeferencia');
		break;
		default:
			header('location: ../vista/intranet.php?vista=tiporeferencia');
		break;
	}

?>