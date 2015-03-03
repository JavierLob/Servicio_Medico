<?php
	session_start();
	require_once("../modelo/m_tipo_paciente.php");
	$lobjTipoPaciente=new claseTipoPaciente;

	$lobjTipoPaciente->set_datos($_POST['idttipopaciente'], $_POST['tipopaciente'], $_POST['estatuspaciente']);
	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_tipo_paciente':
			$hecho=$lobjTipoPaciente->incluir();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
		break;
		case 'editar_tipo_paciente':
			$hecho=$lobjTipoPaciente->modificar();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
		break;
		case 'eliminar_tipo_paciente':
			$hecho=$lobjTipoPaciente->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha eliminardo exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
		break;
		case 'activar_tipo_paciente':
			$hecho=$lobjTipoPaciente->cambiar_estatus();
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
			header('location: ../vista/intranet.php?vista=tipo_paciente');
		break;
	}

	header('location: ../vista/intranet.php?vista=tipo_paciente');
?>