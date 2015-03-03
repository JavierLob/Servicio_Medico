<?php
include_once("m_mysql.php");
class tpersona extends bd_my{
	private $prno;
	private $seno;
	private $prap;
	private $seap;
	private $cepe;
	private $dipe;
	private $usu;
	private $cla;
	function tpersona(){
		$this->bd_my();
		$this->prno="";
		$this->seno="";
		$this->prap="";
		$this->seap="";
		$this->cepe="";
		$this->dipe="";
		$this->usu="";
		$this->cla="";
	}
	function setData($prn,$sen,$pra,$sea,$cep,$dip){
		$this->prno=$prn;
		$this->seno=$sen;
		$this->prap=$pra;
		$this->seap=$sea;
		$this->cepe=$cep;
		$this->dipe=$dip;
	}
	function setData_Login($usu,$cla){
		$this->usu=$usu;
		$this->cla=$cla;
		
	}

	function setCedula($cep){
		$this->cepe=$cep;
	}
	function registra(){
		$sql = "insert into tpersona(cedula,primernombre,segundonombre,primerapellido,segundoapellido,direccion) values('$this->cepe','$this->prno','$this->seno','$this->prap','$this->seap','$this->dipe')";
		$this->hacerSQL( $sql );
	}
	function cambie(){
		$sql = "update auto set cedula='$this->cepe',primernombre='$this->prno',segundonombre='$this->seno',primerapellido='$this->prap',segundoapellido='$this->seap',direccion='$this->dipe' where cedula='$this->cepe'";
		$this->hacerSQL( $sql );
	}
	function borre(){
		$sql = "delete from tpersona  where cedula='$this->cepe'";
		$this->hacerSQL( $sql );
	}
	function Busca(){
		$sql = "select * from tpersona where cedula='$this->cepe'";
		return $this->hacerSQL( $sql );
	}
	function cambia_arreglo( $rs ){
		return $this->dato_arreglo( $rs );
	}
}
?>
