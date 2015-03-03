<?php
	session_start();
	require_once('../modelo/m_usuario.php');
	$lobjUsuario= new claseUsuario;

	$usuario=$_POST['usuario'];
	$clave=$_POST['clave'];
	$lobjUsuario->set_Usuario($usuario);
	$lobjUsuario->set_Clave($clave);
	
	if($_POST['entrar'])
	{
		$datosUsuario=$lobjUsuario->login();
		if($datosUsuario[2]=='1')
		{
			$_SESSION['idusuario']=$datosUsuario[0];
			$_SESSION['usuario']=$datosUsuario[1];
			$_SESSION['rol']=$datosUsuario[2];
			$_SESSION['estatus']=$datosUsuario[3];
			$_SESSION['msj']='Bienvedido al sistema '.$datosUsuario[0].'.';
			header('location: ../vista/intranet.php');
		}
		else
		{			
			$_SESSION['msj']='El usuario y/o clave que ingresó son incorrectos.';
			//header('location: ../index.php');
		}
	}
	elseif($_POST['salir'])
	{
			session_destroy();
			session_start();
			$_SESSION['msj']='Hasta pronto! Su sesión ha sido cerrada.';
			header('location: ../index.php');
	}
	else
	{ 
			$_SESSION['msj']='Disculpe ha habido un error.';
			//header('location: ../index.php');
	}

	
?>
