<?php
	session_start();
	require_once("../modelo/m_centroasistencial.php");
	$lobjCentroasistencial=new claseCentroasistencial;

	$lobjCentroasistencial->set_datos($_POST['idtcentroasistencial'], $_POST['nombrecentroasistencial'], $_POST['estatuscentroasistencial']);
	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_centroasistencial':
			$hecho=$lobjCentroasistencial->incluir();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
			header('location: ../vista/intranet.php?vista=configuracion/centroasistencial');
		break;
		case 'validar':
			if($lobjCentroasistencial->validar())
				echo '1';
			else
				echo '0';
				
		break;
		case 'consultar_centroasistencial':
			if($lacentroasistenciales=$lobjCentroasistencial->listar())
			{
				$option='<option value=""></option>';
				for($i=0;$i<count($lacentroasistenciales);$i++)
				{
					$option.='<option value="'.$lacentroasistenciales[$i]['idtcentroasistencial'].'">'.$lacentroasistenciales[$i]['nombrecentroasistencial'].'</option>';
				}	
			}
			else
			{
				$option='<option>No se han encontrado registros</option>';
			}
			echo $option;
		break;
		case 'editar_centroasistencial':
			$hecho=$lobjCentroasistencial->modificar();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/centroasistencial');
		break;
		case 'eliminar_centroasistencial':
			$hecho=$lobjCentroasistencial->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/centroasistencial');
		break;
		case 'activar_centroasistencial':
			$hecho=$lobjCentroasistencial->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha activado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al activar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/centroasistencial');
		break;
		default:
			header('location: ../vista/intranet.php?vista=configuracion/centroasistencial');
		break;
	}

?>