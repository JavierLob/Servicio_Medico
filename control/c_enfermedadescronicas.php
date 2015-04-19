<?php
	session_start();
	require_once("../modelo/m_enfermedadescronicas.php");
	$lobjEnfermedad=new claseEnfermedadCronicas;

	$lobjEnfermedad->set_datos($_POST['idtenfermedadescronicas'], $_POST['enfermedadescronicas'], $_POST['estatusenfermedad']);
	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_enfermedadescronicas':
			$hecho=$lobjEnfermedad->incluir();
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
			if($lobjEnfermedad->validar())
				echo '1';
			else
				echo '0';
				
		break;
		case 'editar_enfermedadescronicas':
			$hecho=$lobjEnfermedad->modificar();
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
		case 'eliminar_enfermedadescronicas':
			$hecho=$lobjEnfermedad->cambiar_estatus();
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
		case 'activar_enfermedadescronicas':
			$hecho=$lobjEnfermedad->cambiar_estatus();
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
		case 'consultar_enfermedadescronicas':
			if($laenfermedades=$lobjEnfermedad->listar())
			{
				$option='<option value=""></option>';
				for($i=0;$i<count($laenfermedades);$i++)
				{
					$option.='<option value="'.$laenfermedades[$i]['idtenfermedadescronicas'].'">'.$laenfermedades[$i]['enfermedadcronica'].'</option>';
				}	
			}
			else
			{
				$option='<option>No se han encontrado registros</option>';
			}
			echo $option;
		break;
		default:
			header('location: ../vista/intranet.php?vista=configuracion/enfermedadescronicas');
		break;
	}

	//header('location: ../vista/intranet.php?vista=configuracion/enfermedadescronicas');
?>