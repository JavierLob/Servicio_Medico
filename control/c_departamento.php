<?php
	session_start();
	require_once("../modelo/m_departamento.php");
	$lobjDepartamento=new claseDepartamento;

	$lobjDepartamento->set_datos($_POST['iddepartamento'], $_POST['departamento'], $_POST['estatusdepartamento']);
	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_departamento':
			$hecho=$lobjDepartamento->incluir();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
			header('location: ../vista/intranet.php?vista=configuracion/departamento');
		break;
		case 'validar':
			if($lobjDepartamento->validar())
				echo '1';
			else
				echo '0';
				
		break;
		case 'editar_departamento':
			$hecho=$lobjDepartamento->modificar();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/departamento');
		break;
		case 'eliminar_departamento':
			$hecho=$lobjDepartamento->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/departamento');
		break;
		case 'activar_departamento':
			$hecho=$lobjDepartamento->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha activado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al activar';
			}
			header('location: ../vista/intranet.php?vista=configuracion/departamento');
		break;
		default:
			header('location: ../vista/intranet.php?vista=configuracion/departamento');
		break;
	}

?>