<?php
include_once("../modelo/m_auto.php");

$ope = $_POST["ope"];
switch($ope){
	case "Incluir":
		Inc();
		break;
	case "Modifica":
		Mod();
		break;
	case "Elimina":
		Eli();
		break;
	case "Consulta":
		Bus();
		break;
}
	
function Inc(){	
	$obj_auto = new auto();
	$obj_auto->setData($_POST["pla"],$_POST["mod"],$_POST["pre"]);
	$obj_auto->registra();
	header("location: ../vista/v_auto.php");
}
function Mod(){	
	$obj_auto = new auto();
	$obj_auto->setData($_POST["pla"],$_POST["mod"],$_POST["pre"]);
	$obj_auto->cambie();
	header("location: ../vista/v_auto.php");
}
function Eli(){	
	$obj_auto = new auto();
	$obj_auto->setPlaca($_POST["pla"]);
	$obj_auto->borre();
	header("location: ../vista/v_auto.php");
}
function Bus(){	
	$obj_auto = new auto();
	$obj_auto->setPlaca($_POST["pla"]);
	$rs = $obj_auto->Busca();
	if ($tupla = $obj_auto->cambia_arreglo( $rs ) )
		header("location: ../vista/v_auto.php?pla=".$tupla["placa"]."&mod=".$tupla["modelo"]."&pre=".$tupla["precio"]);
	else
		header("location: ../vista/v_auto.php");
}
?>
