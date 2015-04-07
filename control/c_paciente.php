<?php
	session_start();
	require_once("../modelo/m_paciente.php");
	$lobjPaciente=new clasePaciente;

	$lobjPaciente->set_datos($_POST['idpaciente'], $_POST['cedulaopasaporte'], $_POST['nacionalidad'], $_POST['primernombre'], $_POST['segundonombre'], $_POST['primerapellido'], $_POST['segundoapellido'], $_POST['direccion'], $_POST['sexo'], $_POST['telefono'], $_POST['celular'], $_POST['numerohistoria'], $_POST['antecedentepersonal'], $_POST['antecedentefamiliar'], $_POST['alergia'], $_POST['observacion'], $_POST['estatuspaciente'], $_POST['idtsede'], $_POST['idparroquia'], $_POST['idtetnia'], $_POST['idttipopaciente'], $_POST['tcarrera_idtcarrera'], $_POST['tdepartamento_iddepartamento']);

	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_paciente':
			$hecho=$lobjPaciente->incluir();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
		break;
		case 'editar_paciente':
			$hecho=$lobjPaciente->modificar();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
		break;
		case 'eliminar_paciente':
			$hecho=$lobjPaciente->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
		break;
		case 'activar_paciente':
			$hecho=$lobjPaciente->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha activado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al activar';
			}
		break;
		default:
			header('location: ../vista/intranet.php?vista=paciente/paciente');
		break;
	}

	header('location: ../vista/intranet.php?vista=paciente/paciente');
?>