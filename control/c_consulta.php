<?php
	session_start();
	require_once("../modelo/m_consulta.php");
	$lobjConsulta=new claseConsulta;

	$lobjConsulta->set_datos($_POST['estatusconsulta'], $_POST['fecha_consulta'], $_POST['pulso'], $_POST['peso'], $_POST['fc'], $_POST['fr'], $_POST['ta'], $_POST['talla'], $_POST['temperatura'], $_POST['altura'], $_POST['observacionconsulta'], $_POST['idtdoctor'], $_POST['tpaciente_idpaciente'], $_POST['motivocon']);
	$lobjConsulta->set_Consulta($_POST['idconsulta']);
	$lobjConsulta->set_Examen($_POST['examen'],$_POST['idttipoexamen'],$_POST['idtlaboratorio']);
	$lobjConsulta->set_Referir($_POST['referira'],$_POST['idtiporeferencia'],$_POST['idtcentroasistencial']);
	$operacion=$_POST['operacion'];

	switch ($operacion) 
	{
		case 'registrar_consulta':
			$hecho=$lobjConsulta->incluir();
			if($hecho)
			{
				$_SESSION['msj']='Registro exitoso';
			}
			else
			{	
				$_SESSION['msj']='Error en el registro';
			}
		break;
		case 'editar_consulta':
			$hecho=$lobjConsulta->modificar();
			if($hecho)
			{
				$_SESSION['msj']='Se ha modificado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al modificar';
			}
		break;
		case 'eliminar_consulta':
			$hecho=$lobjConsulta->cambiar_estatus();
			if($hecho)
			{
				$_SESSION['msj']='Se ha desactivado exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al eliminar';
			}
		break;
		case 'activar_consulta':
			$hecho=$lobjConsulta->cambiar_estatus();
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
			header('location: ../vista/intranet.php?vista=consulta/consulta');
		break;
	}

	header('location: ../vista/intranet.php?vista=consulta/consulta');
?>