<?php
include_once("../modelo/m_persona.php");

$ope = $_POST["ope"];
switch($ope){
	case "Incluir":
		Inc();
		break;
	case "Modificar":
		Mod();
		break;
	case "Eliminar":
		Eli();
		break;
	case "Consultar":
		Bus();
		break;
}
	
function Inc(){	
	$obj_tpersona = new tpersona();
	$obj_tpersona->setData($_POST["prno"],$_POST["seno"],$_POST["prap"],$_POST["seap"],$_POST["cepe"],$_POST["dipe"]);
	$obj_tpersona->registra();
	header("location: ../vista/v_persona.php");
}
function Mod(){	
	$obj_tpersona = new tpersona();
	$obj_tpersona->setData($_POST["prno"],$_POST["seno"],$_POST["prap"],$_POST["seap"],$_POST["cepe"],$_POST["dipe"]);
	$obj_tpersona->cambie();
	header("location: ../vista/v_persona.php");
}
function Eli(){	
	$obj_tpersona = new tpersona();
	$obj_tpersona->setCedula($_POST["cepe"]);
	$obj_tpersona->borre();
	header("location: ../vista/v_persona.php");
}
function Bus(){	
	$obj_tpersona = new tpersona();
	$obj_tpersona->setCedula($_POST["cepe"]);
	$rs = $obj_tpersona->Busca();
	if ($tupla = $obj_tpersona->cambia_arreglo( $rs ) )
		header("location: ../vista/v_persona.php?cepe=".$tupla["cedula"]."&mod=".$tupla["primernombre"]."&pre=".$tupla["segundonombre"]."&pre=".$tupla["primerapellido"]."&pre=".$tupla["segundoapellido"]."&pre=".$tupla["direccion"]);
	else
		header("location: ../vista/v_persona.php");
}
?>
