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
			header('location: ../vista/intranet.php?vista=configuracion/tipoexamen');
		break;
		case 'validar':
			if($lobjTipoexamen->validar())
				echo '1';
			else
				echo '0';
				
		break;
		case 'consultar_tipoexamen':
			if($laexamenes=$lobjTipoexamen->listar())
			{
				$option='<option value=""></option>';
				for($i=0;$i<count($laexamenes);$i++)
				{
					$option.='<option value="'.$laexamenes[$i]['idttipoexamen'].'">'.$laexamenes[$i]['tipoexamen'].'</option>';
				}	
			}
			else
			{
				$option='<option>No se han encontrado registros</option>';
			}
			echo $option;
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
			header('location: ../vista/intranet.php?vista=configuracion/tipoexamen');
		break;
		case 'eliminar_tipoexamen':
			$hecho=$lobjTipoexamen->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/tipoexamen');
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
			header('location: ../vista/intranet.php?vista=configuracion/tipoexamen');
		break;
		default:
			header('location: ../vista/intranet.php?vista=tipoexamen');
		break;
	}

?>