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
			header('location: ../vista/intranet.php?vista=configuracion/municipio');
		break;
		case 'validar':
			if($lobjMunicipio->validar())
				echo '1';
			else
				echo '0';
				
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
			header('location: ../vista/intranet.php?vista=configuracion/municipio');
		break;
		case 'eliminar_municipio':
			$hecho=$lobjMunicipio->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/municipio');
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
			header('location: ../vista/intranet.php?vista=configuracion/municipio');
		break;
		case 'consultar_municipios':
			$row_municipio=$lobjMunicipio->listar_estado();
				echo '<option value=""> - </option>';
	          for ($i=0; $i <count($row_municipio); $i++) 
	          {
	              echo '<option value="'.$row_municipio[$i]['idtmunicipio'].'">'.$row_municipio[$i]['municipio'].'</option>';
	          }
		break;
		default:
			header('location: ../vista/intranet.php?vista=configuracion/municipio');
		break;
	}

?>