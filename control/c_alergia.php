<?php
	session_start();
	require_once("../modelo/m_alergia.php");
	$lobjAlergia=new claseAlergia;

	$lobjAlergia->set_datos($_POST['idalergia'], $_POST['nombreale'], $_POST['estatusale']);
	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_alergia':
			$hecho=$lobjAlergia->incluir();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
			header('location: ../vista/intranet.php?vista=configuracion/alergia');
		break;
		case 'validar':
			if($lobjAlergia->validar())
				echo '1';
			else
				echo '0';
				
		break;
		case 'editar_alergia':
			$hecho=$lobjAlergia->modificar();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/alergia');
		break;
		case 'eliminar_alergia':
			$hecho=$lobjAlergia->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/alergia');
		break;
		case 'activar_alergia':
			$hecho=$lobjAlergia->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha activado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al activar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/alergia');
		break;
		case 'consultar_alergia':
			if($laalergias=$lobjAlergia->listar())
			{
				$option='<option value=""></option>';
				for($i=0;$i<count($laalergias);$i++)
				{
					$option.='<option value="'.$laalergias[$i]['idalergia'].'">'.$laalergias[$i]['nombreale'].'</option>';
				}	
			}
			else
			{
				$option='<option>No se han encontrado registros</option>';
			}
			echo $option;
		break;
		default:
			header('location: ../vista/intranet.php?vista=configuracion/alergia');
		break;
	}

?>