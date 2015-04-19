<?php
	session_start();
	require_once("../modelo/m_laboratorio.php");
	$laboratorio=new claseLaboratorio;

	$laboratorio->set_datos($_POST['idtlaboratorio'], $_POST['laboratorio'], $_POST['estatuslaboratorio']);
	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_laboratorio':
			$hecho=$laboratorio->incluir();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
			header('location: ../vista/intranet.php?vista=configuracion/laboratorio');
		break;
		case 'validar':
			if($laboratorio->validar())
				echo '1';
			else
				echo '0';
				
		break;
		case 'consultar_laboratorio':
			if($lalaboratorios=$laboratorio->listar())
			{
				$option='<option value=""></option>';
				for($i=0;$i<count($lalaboratorios);$i++)
				{
					$option.='<option value="'.$lalaboratorios[$i]['idtlaboratorio'].'">'.$lalaboratorios[$i]['laboratorio'].'</option>';
				}	
			}
			else
			{
				$option='<option>No se han encontrado registros</option>';
			}
			echo $option;
		break;
		case 'editar_laboratorio':
			$hecho=$laboratorio->modificar();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/laboratorio');
		break;
		case 'eliminar_laboratorio':
			$hecho=$laboratorio->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/laboratorio');
		break;
		case 'activar_laboratorio':
			$hecho=$laboratorio->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha activado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al activar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/laboratorio');
		break;
		default:
			header('location: ../vista/intranet.php?vista=laboratorio');
		break;
	}

?>