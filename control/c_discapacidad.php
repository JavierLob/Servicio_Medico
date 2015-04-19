<?php
	session_start();
	require_once("../modelo/m_discapacidad.php");
	$lobjDiscapacidad=new claseDiscapacidad;

	$lobjDiscapacidad->set_datos($_POST['idtdiscapacidad'], $_POST['discapacidad'], $_POST['estatusdiscapacidad']);
	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_discapacidad':
			$hecho=$lobjDiscapacidad->incluir();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
			header('location: ../vista/intranet.php?vista=configuracion/discapacidad');
		break;
		case 'validar':
			if($lobjDiscapacidad->validar())
				echo '1';
			else
				echo '0';
				
		break;
		case 'editar_discapacidad':
			$hecho=$lobjDiscapacidad->modificar();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/discapacidad');
		break;
		case 'eliminar_discapacidad':
			$hecho=$lobjDiscapacidad->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/discapacidad');
		break;
		case 'activar_discapacidad':
			$hecho=$lobjDiscapacidad->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha activado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al activar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/discapacidad');
		break;
		case 'consultar_discapacidad':
			if($ladiscapacidades=$lobjDiscapacidad->listar())
			{
				$option='<option value=""></option>';
				for($i=0;$i<count($ladiscapacidades);$i++)
				{
					$option.='<option value="'.$ladiscapacidades[$i]['idtdiscapacidad'].'">'.$ladiscapacidades[$i]['discapacidad'].'</option>';
				}	
			}
			else
			{
				$option='<option>No se han encontrado registros</option>';
			}
			echo $option;
		break;
		default:
			header('location: ../vista/intranet.php?vista=configuracion/discapacidad');
		break;
	}

	//header('location: ../vista/intranet.php?vista=configuracion/discapacidad');
?>