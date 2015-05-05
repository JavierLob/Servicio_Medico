<?php
	session_start();
	require_once("../modelo/m_consulta.php");
	$lobjConsulta=new claseConsulta;

	$lobjConsulta->set_datos($_POST['estatusconsulta'], $_POST['fecha_consulta'], $_POST['pulso'], $_POST['peso'], $_POST['fc'], $_POST['fr'], $_POST['ta'], $_POST['talla'], $_POST['temperatura'], $_POST['altura'], $_POST['observacionconsulta'], $_POST['idtdoctor'], $_POST['tpaciente_idpaciente'], $_POST['motivocon']);
	$lobjConsulta->set_Consulta($_POST['idconsulta']);
	$lobjConsulta->set_IdExamen($_POST['idexamen']);
	$lobjConsulta->set_IdReferencia($_POST['idreferencia']);
	$lobjConsulta->set_Estatus($_POST['estatus']);
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
			header('location: ../vista/intranet.php?vista=consulta/consulta');
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
			header('location: ../vista/intranet.php?vista=consulta/consulta');
		break;
		case 'cambiar_estatus_examen':
			$hecho=$lobjConsulta->cambiar_estatus_examen();
			if($_POST['estatus']=='2')
				$operacion='Cumplido';
			elseif($_POST['estatus']=='3')
				$operacion='Incumplido';

			if($hecho)
			{
				$_SESSION['msj']='Se ha cambiado el estatus del examen a '.$operacion.' exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al cambiar el estatus del examen';
			}
			header('location: ../vista/intranet.php?vista=consulta/consultar_consulta&id='.$_POST['idconsulta']);
		break;
		case 'cambiar_estatus_referencia':
			$hecho=$lobjConsulta->cambiar_estatus_referencia();
			if($_POST['estatus']=='2')
				$operacion='Cumplido';
			elseif($_POST['estatus']=='3')
				$operacion='Incumplido';
			if($hecho)
			{
				$_SESSION['msj']='Se ha cambiado el estatus de la referencia a '.$operacion.' exitosamente';
			}
			else
			{	
				$_SESSION['msj']='Error al cambiar el estatus de la referencia';
			}
			header('location: ../vista/intranet.php?vista=consulta/consultar_consulta&id='.$_POST['idconsulta']);
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
			header('location: ../vista/intranet.php?vista=consulta/consulta');
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
			header('location: ../vista/intranet.php?vista=consulta/consulta');
		break;
		case 'validar_examen':
			$cantidad_examen=$lobjConsulta->validar_examen();
			
			echo $cantidad_examen;

		break;
		case 'validar_referencia':
			$cantidad_referencia=$lobjConsulta->validar_referencia();
			
			echo $cantidad_referencia;

		break;
		default:
			header('location: ../vista/intranet.php?vista=consulta/consulta');
		break;
	}

?>