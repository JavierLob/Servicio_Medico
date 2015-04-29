<?php
	session_start();
	require_once("../modelo/m_personal.php");
	require_once("../modelo/m_usuario.php");
	$lobjpersonal=new clasepersonal;
	$lobjUsuario=new clsUsuario;

	$lobjpersonal->set_datos($_POST['idpersonal'], $_POST['cedulaopasaporte'], $_POST['nacionalidad'], $_POST['primernombre'], $_POST['segundonombre'], $_POST['primerapellido'], $_POST['segundoapellido'], $_POST['direccion'], $_POST['sexo'], $_POST['telefono'], $_POST['celular'], $_POST['observacion'], $_POST['estatuspersonal'], $_POST['idttipopersonal'], $_POST['idrol']);

	$lobjUsuario->set_ClaveNueva($_POST['clave_nueva']);
	$lobjUsuario->set_Clave($_POST['clave_actual']);
	$lobjUsuario->set_Usuario($_POST['usuario']);

	$lobjUsuario->set_Pregunta($_POST['pregunta_uno'], $_POST['pregunta_dos'], $_POST['pregunta_tres']);
	$lobjUsuario->set_Respuesta($_POST['respuesta_uno'], $_POST['respuesta_dos'], $_POST['respuesta_tres']);

	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_personal':
			$hecho=$lobjpersonal->incluir();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
			header('location: ../vista/intranet.php?vista=personal/personal');
		break;
		case 'validar':
			if($lobjpersonal->validar())
				echo '1';
			else
				echo '0';
				
		break;
		case 'editar_personal':
			$hecho=$lobjpersonal->modificar();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
			header('location: ../vista/intranet.php?vista=personal/personal');
		break;
		case 'editar_perfil':
			$hecho=$lobjpersonal->modificar();
			$hecho_dos = $lobjUsuario->modificar_preguntas();
			if(($hecho) || ($hecho_dos))
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
		header('location: ../vista/intranet.php?vista=perfil/perfil');
		break;
		case 'cambiar_clave':
			$hecho=$lobjUsuario->cambiar_clave();
			if($hecho)
			{
				$_SESSION['msj']='Se ha cambiado de clave exitosamente';
				$_SESSION['clave']=$_POST['clave_nueva'];
			}
			else
			{	
				$_SESSION['msj']='Error al cambiar la clave';
			}
		header('location: ../vista/intranet.php?vista=perfil/perfil');
		break;
		case 'eliminar_personal':
			$hecho=$lobjpersonal->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
			header('location: ../vista/intranet.php?vista=personal/personal');
		break;
		case 'activar_personal':
			$hecho=$lobjpersonal->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha activado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al activar';
			}
			header('location: ../vista/intranet.php?vista=personal/personal');
		break;
		default:
			header('location: ../vista/intranet.php?vista=personal/personal');
		break;
	}

?>