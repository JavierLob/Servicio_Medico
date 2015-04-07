<?php
	session_start();
	require_once("../modelo/m_parroquia.php");
	$lobjParroquia=new claseparroquia;

	$lobjParroquia->set_datos($_POST['idparroquia'], $_POST['parroquia'], $_POST['estatusparroquia']);
	$lobjParroquia->set_Municipio($_POST['idtmunicipio']);
	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_parroquia':
			$hecho=$lobjParroquia->incluir();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
			header('location: ../vista/intranet.php?vista=configuracion/parroquia');
		break;
		case 'editar_parroquia':
			$hecho=$lobjParroquia->modificar();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/parroquia');
		break;
		case 'eliminar_parroquia':
			$hecho=$lobjParroquia->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/parroquia');
		break;
		case 'activar_parroquia':
			$hecho=$lobjParroquia->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha activado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al activar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/parroquia');
		break;
		case 'consultar_parroquias':
			echo '<option value=""> - </option>';
			$laParroquias=$lobjParroquia->listar_municipio();
            for ($i=0; $i <count($laParroquias) ; $i++) { 
              echo '<option value="'.$laParroquias[$i]['idparroquia'].'">'.$laParroquias[$i]['parroquia'].'</option>';                    
            }
		break;
		default:
			header('location: ../vista/intranet.php?vista=configuracion/parroquia');
		break;
	}

?>