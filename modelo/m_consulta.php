<?php
	require_once('m_mysql.php');

	class claseConsulta extends bd_my
	{
		public $idconsulta, $estatusconsulta, $fecha_consulta, $pulso, $peso, $fc, $fr, $ta, $talla, $temperatura, $altura, $observacionconsulta, $idtdoctor, $tpaciente_idpaciente,$examen,$idtipoexamen,$idlaboratorio,$referira,$idtiporeferencia,$idcentroasistencial,$motivocon;

		function __CONSTRUCT()
		{
			$this->idconsulta = '';
			$this->estatusconsulta = '';
			$this->fecha_consulta = '';
			$this->pulso = '';
			$this->peso = '';
			$this->fc = '';
			$this->fr = '';
			$this->ta = '';
			$this->talla = '';
			$this->temperatura = '';
			$this->altura = '';
			$this->observacionconsulta = '';
			$this->idtdoctor = '';
			$this->tpaciente_idpaciente = '';
			$this->motivocon = '';
		}

		public function set_datos($estatusconsulta= '', $fecha_consulta= '', $pulso= '', $peso= '', $fc= '', $fr= '', $ta= '', $talla= '', $temperatura= '', $altura= '', $observacionconsulta= '', $idtdoctor= '', $tpaciente_idpaciente= '', $motivocon= '')
		{
			$this->estatusconsulta = $estatusconsulta;
			$this->fecha_consulta = $this->formato_fecha($fecha_consulta);
			$this->pulso = $pulso;
			$this->peso = $peso;
			$this->fc = $fc;
			$this->fr = $fr;
			$this->ta = $ta;
			$this->talla = $talla;
			$this->temperatura = $temperatura;
			$this->altura = $altura;
			$this->observacionconsulta = $observacionconsulta;
			$this->idtdoctor = $idtdoctor;
			$this->tpaciente_idpaciente = $tpaciente_idpaciente;
			$this->motivocon = $motivocon;
		}

		public function set_Consulta($idconsulta)
		{
			$this->idconsulta = $idconsulta;

		}

		public function set_Examen($examen,$idtipoexamen,$idlaboratorio)
		{
			$this->examen = $examen;			
			$this->idtipoexamen = $idtipoexamen;
			$this->idlaboratorio = $idlaboratorio;

		}

		public function set_Referir($referira,$idtiporeferencia,$idcentroasistencial)
		{
			$this->referira = $referira;
			$this->idtiporeferencia = $idtiporeferencia;
			$this->idcentroasistencial = $idcentroasistencial;

		}

		public function incluir()
		{
			$respuesta = false;
			$this->conectar();
			$this->begin();
			$SQL = "INSERT INTO tconsulta (`fecha_consulta`, `pulso`, `peso`, `fc`, `fr`, `ta`, `talla`, `temperatura`, `altura`, `observacionconsulta`, `idtdoctor`, `tpaciente_idpaciente`,`estatusconsulta`,`motivocon`) VALUES ('$this->fecha_consulta','$this->pulso','$this->peso','$this->fc','$this->fr','$this->ta','$this->talla','$this->temperatura','$this->altura','$this->observacionconsulta','$this->idtdoctor','$this->tpaciente_idpaciente','1','$this->motivocon');";
			if($respuesta=$this->ejecutar($SQL))
			{
				$sql="SELECT MAX(idconsulta)as idconsulta FROM tconsulta LIMIT 1";
				$pcsql=$this->filtro($sql);
				if($laRow=$this->proximo($pcsql))
				{
					$idconsulta=$laRow['idconsulta'];
					if($this->examen[0]!='')
					{
						for ($i=0; $i <count($this->examen) ; $i++) 
						{ 
							$sql="INSERT INTO texamen (`examen`, `idconsulta`, `idttipoexamen`, `idtlaboratorio`, `estatusexamen`)VALUES(UPPER('".$this->examen[$i]."'),'$idconsulta','".$this->idtipoexamen[$i]."','".$this->idlaboratorio[$i]."','1');";
							echo $sql;
							if(!$respuesta = $this->ejecutar($sql))
							{
								$this->rollback();
								break;
							}
						}
					}

					if($this->referira[0]!='')
					{
						for ($i=0; $i <count($this->referira) ; $i++) 
						{ 
							$sql="INSERT INTO treferencia (`referidoa`, `idconsulta`, `tcentroasistencial_idtcentroasistencial`, `ttiporeferencia_idtiporeferencia`, `estatusreferencia`)VALUES(UPPER('".$this->referira[$i]."'),'$idconsulta','".$this->idcentroasistencial[$i]."','".$this->idtiporeferencia[$i]."','1');";
							if(!$respuesta = $this->ejecutar($sql))
							{
								$this->rollback();
								break;
							}
						}
					}

				}

			}
			if($respuesta)
				$this->commit();
			else
				$this->rollback();

			$this->desconectar();
			return $respuesta;
		}

		public function modificar()
		{
			$respuesta = false;
			$SQL = "UPDATE tconsulta SET fecha_consulta = '$this->fecha_consulta',pulso = '$this->pulso',peso = '$this->peso',fc = '$this->fc',fr = '$this->fr',ta = '$this->ta',talla = '$this->talla',temperatura = '$this->temperatura',altura = '$this->altura',observacionconsulta = '$this->observacionconsulta',idtdoctor = '$this->idtdoctor',tpaciente_idpaciente='$this->tpaciente_idpaciente',motivocon='$this->motivocon' WHERE idconsulta='$this->idconsulta';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}

		public function consultar()
		{
			$Fila = array();
			$this->conectar();
			$sql="SELECT * FROM tconsulta WHERE idconsulta='$this->idconsulta';";
			$pcsql=$this->filtro($sql);
			if($laRow=$this->proximo($pcsql))
			{
				$Fila=$laRow;
			}
			$this->desconectar();
			return $Fila;
		}

		public function consultar_reporte()
		{
			$Fila = array();
			$this->conectar();
			$sql="SELECT *,idconsulta as id,(SELECT COUNT(idtexamen) FROM texamen WHERE texamen.idconsulta=id)as examen,(SELECT COUNT(idreferencia) FROM treferencia WHERE treferencia.idconsulta=id)as referir FROM tconsulta,tpaciente,tdoctor WHERE idconsulta='$this->idconsulta' AND tpaciente_idpaciente=idpaciente AND tconsulta.idtdoctor=tdoctor.idtdoctor;";
			$pcsql=$this->filtro($sql);
			if($laRow=$this->proximo($pcsql))
			{
				$Fila=$laRow;
			}
			$this->desconectar();
			return $Fila;
		}


		public function consultar_examen()
		{
			$Fila = array();
			$this->conectar();
			$cont=0;
			$sql="SELECT examen,laboratorio,tipoexamen FROM texamen,tlaboratorio,ttipoexamen WHERE idconsulta='$this->idconsulta' AND texamen.idttipoexamen=ttipoexamen.idttipoexamen AND texamen.idtlaboratorio=tlaboratorio.idtlaboratorio;";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Fila[$cont]=$laRow;
				$cont++;
			}
			$this->desconectar();
			return $Fila;
		}

		public function consultar_referir()
		{
			$Fila = array();
			$this->conectar();
			$cont=0;
			$sql="SELECT nombrecentroasistencial,tiporeferencia,referidoa FROM treferencia,ttiporeferencia,tcentroasistencial WHERE idconsulta='$this->idconsulta' AND tcentroasistencial_idtcentroasistencial=idtcentroasistencial AND ttiporeferencia_idtiporeferencia=idtiporeferencia;";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Fila[$cont]=$laRow;
				$cont++;
			}
			$this->desconectar();
			return $Fila;
		}

		public function listar()
		{
			$Filas = array();
			$cont = 0;
			$this->conectar();
			$sql="SELECT * FROM tconsulta,tpaciente WHERE tpaciente_idpaciente=idpaciente;";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Filas[$cont] = $laRow;
				$cont++;
			}
			$this->desconectar();
			return $Filas;
		}

		public function cambiar_estatus()
		{
			$respuesta = false;
			$SQL = "UPDATE tconsulta SET estatusconsulta = '$this->estatusconsulta' WHERE idconsulta='$this->idconsulta';";
			$this->conectar();
			$respuesta = $this->ejecutar($SQL);
			$this->desconectar();
			return $respuesta;
		}
	}
?>