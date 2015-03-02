<?php
class bd_my{
	private $pc;
	private $user;
	private $pass;
	private $bd;
	private $conex;
	protected function bd_my(){
		$this->pc="localhost";
		$this->user="root";
		$this->pass="";
		$this->bd="bdsm";
	}
	function abrirBD(){
		$this->conex = mysql_connect($this->pc,$this->user,$this->pass);
		if ( $this->conex && mysql_select_db($this->bd, $this->conex) )
			return true;
		else
			return false;
	}
	protected function hacerSQL( $sql ){
		$this->abrirBD();
		return mysql_query( $sql );
	}
	protected function dato_arreglo( $rs ){
		return mysql_fetch_array($rs);
	}
}

?>
