<?php
	require_once('m_mysql.php');

	class claseConsulta extends bd_my
	{
		public $idconsulta, $estatusconsulta, $fecha_consulta, $pulso, $peso, $fc, $fr, $ta, $talla, $temperatura, $altura, $observacionconsulta, $idtdoctor, $tpaciente_idpaciente,$examen,$idtipoexamen,$idlaboratorio,$referira,$idtiporeferencia,$idcentroasistencial,$motivocon,$IdExamen,$IdReferencia,$Estatus;

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
			$this->IdExamen = '';
			$this->IdReferencia = '';
			$this->Estatus = '';
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

		public function set_IdExamen($IdExamen)
		{
			$this->IdExamen = $IdExamen;

		}

		public function set_IdReferencia($IdReferencia)
		{
			$this->IdReferencia = $IdReferencia;

		}

		public function set_Estatus($Estatus)
		{
			$this->Estatus = $Estatus;

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
							if(!$respuesta = $this->ejecutar($sql))
							{
								$this->rollback();
								break;
							}
						}

						if($respuesta)
						{
							$sql="UPDATE tpaciente SET cantidad_examen=cantidad_examen+".count($this->examen)." WHERE idpaciente='$this->tpaciente_idpaciente'";
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

						if($respuesta)
						{
							$sql="UPDATE tpaciente SET cantidad_referencia=cantidad_referencia+".count($this->referira)." WHERE idpaciente='$this->tpaciente_idpaciente'";
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
			$sql="SELECT examen,laboratorio,tipoexamen,estatusexamen,texamen.idtexamen FROM texamen,tlaboratorio,ttipoexamen WHERE idconsulta='$this->idconsulta' AND texamen.idttipoexamen=ttipoexamen.idttipoexamen AND texamen.idtlaboratorio=tlaboratorio.idtlaboratorio;";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Fila[$cont]=$laRow;
				$cont++;
			}
			$this->desconectar();
			return $Fila;
		}

		public function validar_examen()
		{
			$this->conectar();
			$sql="SELECT cantidad_examen FROM tpaciente WHERE idpaciente='$this->tpaciente_idpaciente'";
			$pcsql=$this->filtro($sql);
			if($laRow=$this->proximo($pcsql))
			{
				$cantidad_examen=$laRow['cantidad_examen'];
			}
			$this->desconectar();
			return $cantidad_examen;
		}

		public function cambiar_estatus_referencia()
		{
			$this->conectar();
			$resultado=false;
			$sql="UPDATE treferencia SET estatusreferencia='$this->Estatus' WHERE idreferencia='$this->IdReferencia'";
			if($resultado=$this->ejecutar($sql))
			{
				$resultado=true;
				$this->cambiar_estatus_consulta();
			}
			$this->desconectar();
			return $resultado;
		}

		public function cambiar_estatus_consulta()
		{
			$this->conectar();
			$sql="SELECT idconsulta as id,(SELECT COUNT(idtexamen) FROM texamen WHERE idconsulta=id) as examenes,
			(SELECT COUNT(idtexamen) FROM texamen WHERE idconsulta=id AND estatusexamen='1')as examenes_pendiente,
			(SELECT COUNT(idtexamen) FROM texamen WHERE idconsulta=id AND estatusexamen='2')as examenes_cumplido,
			(SELECT COUNT(idtexamen) FROM texamen WHERE idconsulta=id AND estatusexamen='3')as examenes_incumplido,
			(SELECT COUNT(idreferencia) FROM treferencia WHERE idconsulta=id)as referencias,
			(SELECT COUNT(idreferencia) FROM treferencia WHERE idconsulta=id AND estatusreferencia='1')as referencias_pendiente,
			(SELECT COUNT(idreferencia) FROM treferencia WHERE idconsulta=id AND estatusreferencia='2')as referencias_cumplido,
			(SELECT COUNT(idreferencia) FROM treferencia WHERE idconsulta=id AND estatusreferencia='3')as referencias_incumplido FROM tconsulta";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$referencia=$examen=$estatus='';
				if($laRow['examenes']==$laRow['examenes_cumplido'])
					$examen='2';
				elseif($laRow['examenes']==$laRow['examenes_pendiente'])
					$examen='1';
				elseif($laRow['examenes']==$laRow['examenes_incumplido'])
					$examen='3';
				elseif(($laRow['examenes_pendiente']<$laRow['examenes'])&&($laRow['examenes_pendiente']>0))
					$examen='1';
				elseif($laRow['examenes']!='')
					$examen='2';

				if($laRow['referencias']==$laRow['referencias_cumplido'])
					$referencia='2';
				elseif($laRow['referencias']==$laRow['referencias_pendiente'])
					$referencia='1';
				elseif($laRow['referencias']==$laRow['referencias_incumplido'])
					$referencia='3';
				elseif(($laRow['referencias_pendiente']<$laRow['referencias'])&&($laRow['referencias_pendiente']>0))
					$referencia='1';
				elseif($laRow['referencias']!='')
					$referencia='2';



				if(($examen=='2')||($referencia=='2'))
					$estatus='1';
				
				if(($examen=='1')||($referencia=='1'))
					$estatus='1';
				
				if(($examen=='3')||($referencia=='3'))
					$estatus='3';
				
				if(($examen=='2')&&($referencia=='2'))
					$estatus=2;
				
				if(($examen=='3')&&($referencia=='3'))
					$estatus='3';

				$sql="UPDATE tconsulta SET estatusconsulta='$estatus' WHERE idconsulta='".$laRow['id']."'";
				$this->ejecutar($sql);
	
			}
			$this->desconectar();
		}

		public function cambiar_estatus_examen()
		{
			$this->conectar();
			$resultado=false;
			$sql="UPDATE texamen SET estatusexamen='$this->Estatus' WHERE idtexamen='$this->IdExamen'";
			if($resultado=$this->ejecutar($sql))
			{
				$resultado=true;
				$this->cambiar_estatus_consulta();
			}
			$this->desconectar();
			return $resultado;
		}

		public function consultar_examen_reporte($id)
		{
			$Fila = array();
			$this->conectar();
			$sql="SELECT examen,laboratorio,tipoexamen,date_format(fecha_consulta,'%d-%m-%Y')as fecha_consulta,primerapellido,primernombre,nombredoctor,nacionalidad,cedulaopasaporte,sexo,modalidadpac,numeromodalidadpac,motivocon,carrera,observacionconsulta FROM tpaciente,tconsulta,texamen,tlaboratorio,ttipoexamen,tcarrera,tdoctor WHERE idtexamen='$id' AND tconsulta.idconsulta=texamen.idconsulta AND texamen.idttipoexamen=ttipoexamen.idttipoexamen AND texamen.idtlaboratorio=tlaboratorio.idtlaboratorio AND tpaciente_idpaciente=idpaciente AND tcarrera_idtcarrera=idtcarrera;";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Fila=$laRow;
			}
			$this->desconectar();
			return $Fila;
		}

		public function consultar_examenes($idpaciente,$fecha_consulta)
		{
			$Fila = array();
			$this->conectar();
			$cont=0;
			$fecha_consulta=$this->formato_fecha($fecha_consulta);
			$sql="SELECT idtexamen,examen,laboratorio,tipoexamen,texamen.idconsulta,primerapellido,primernombre,nacionalidad,cedulaopasaporte,fecha_consulta,date_format(fecha_consulta,'%d-%m-%Y')as fecha FROM tconsulta,tpaciente,texamen,tlaboratorio,ttipoexamen WHERE tpaciente_idpaciente='$idpaciente' AND tconsulta.idconsulta=texamen.idconsulta AND texamen.idttipoexamen=ttipoexamen.idttipoexamen AND texamen.idtlaboratorio=tlaboratorio.idtlaboratorio AND tpaciente_idpaciente=idpaciente HAVING fecha_consulta='$fecha_consulta';";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Fila[$cont]=$laRow;				
				$Fila[$cont]['fecha_consulta']=$laRow['fecha'];
				$Fila[$cont]['col1']=$laRow['examen'];
				$Fila[$cont]['col2']=$laRow['tipoexamen'];
				$Fila[$cont]['col3']=$laRow['laboratorio'];
				$Fila[$cont]['col4']=$laRow['idtexamen'];
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
			$sql="SELECT nombrecentroasistencial,tiporeferencia,referidoa,treferencia.estatusreferencia,treferencia.idreferencia FROM treferencia,ttiporeferencia,tcentroasistencial WHERE idconsulta='$this->idconsulta' AND tcentroasistencial_idtcentroasistencial=idtcentroasistencial AND ttiporeferencia_idtiporeferencia=idtiporeferencia;";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Fila[$cont]=$laRow;
				$cont++;
			}
			$this->desconectar();
			return $Fila;
		}

		public function validar_referencia()
		{
			$this->conectar();
			$cont=0;
			$sql="SELECT cantidad_referencia FROM tpaciente WHERE idpaciente='$this->tpaciente_idpaciente' ";
			$pcsql=$this->filtro($sql);
			if($laRow=$this->proximo($pcsql))
			{
				$cantidad_referencia=$laRow['cantidad_referencia'];
			}
			$this->desconectar();
			return $cantidad_referencia;
		}

		public function consultar_referir_reporte($id)
		{
			$Fila = array();
			$this->conectar();
			$sql="SELECT nombrecentroasistencial,tiporeferencia,referidoa,date_format(fecha_consulta,'%d-%m-%Y')as fecha_consulta,primerapellido,primernombre,nombredoctor,nacionalidad,cedulaopasaporte,sexo,modalidadpac,numeromodalidadpac,motivocon,carrera,observacionconsulta FROM tconsulta,treferencia,ttiporeferencia,tcentroasistencial,tpaciente,tdoctor,tcarrera WHERE idreferencia='$id' AND treferencia.idconsulta=.tconsulta.idconsulta AND tcentroasistencial_idtcentroasistencial=idtcentroasistencial AND ttiporeferencia_idtiporeferencia=idtiporeferencia AND tpaciente_idpaciente=idpaciente AND tcarrera_idtcarrera=idtcarrera;";
			echo $sql;
			$pcsql=$this->filtro($sql);
			if($laRow=$this->proximo($pcsql))
			{
				$Fila=$laRow;
			}
			$this->desconectar();
			return $Fila;
		}

		public function consultar_referencias($idpaciente,$fecha_consulta)
		{
			$Fila = array();
			$this->conectar();
			$cont=0;
			$sql="SELECT idreferencia,nombrecentroasistencial,tiporeferencia,referidoa,treferencia.idconsulta,primerapellido,primernombre,nacionalidad,cedulaopasaporte,fecha_consulta,date_format(fecha_consulta,'%d-%m-%Y')as fecha FROM tconsulta,treferencia,ttiporeferencia,tpaciente,tcentroasistencial WHERE tpaciente_idpaciente='$idpaciente' AND tconsulta.idconsulta=treferencia.idconsulta AND tcentroasistencial_idtcentroasistencial=idtcentroasistencial AND ttiporeferencia_idtiporeferencia=idtiporeferencia AND tpaciente_idpaciente=idpaciente HAVING fecha_consulta='$fecha_consulta';;";
			$pcsql=$this->filtro($sql);
			while($laRow=$this->proximo($pcsql))
			{
				$Fila[$cont]=$laRow;
				$Fila[$cont]['fecha_consulta']=$laRow['fecha'];
				$Fila[$cont]['col1']=$laRow['referidoa'];
				$Fila[$cont]['col2']=$laRow['tiporeferencia'];
				$Fila[$cont]['col3']=$laRow['nombrecentroasistencial'];
				$Fila[$cont]['col4']=$laRow['idreferencia'];
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

		public function consultas_paciente()
		{
			$Filas = array();
			$cont = 0;
			$this->conectar();
			$sql="SELECT * FROM tconsulta,tpaciente WHERE tpaciente_idpaciente='$this->idconsulta' AND tpaciente_idpaciente=idpaciente;";
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