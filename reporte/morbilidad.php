<?php
   /**
   * Reporte listado de clases
   *
   * @package    ModeloAulafrontino
   * @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
   * @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
   * @link       https://github.com/EquipoAulaFrontino
   * @version    v1.0
   */
   require_once("../libreria/fpdf17/clase_fpdf_horizontal.php");
   require_once("../modelo/m_consulta.php");
   require_once("../modelo/m_carrera.php");
   require_once("../modelo/m_tipo_paciente.php");
   require_once("../modelo/m_tiporeferencia.php");
   $lobjConsulta = new claseConsulta();
   $lobjCarrera = new claseCarrera();
   $lobjTiporeferencia = new claseTiporeferencia();
   $lobjTipoPaciente = new claseTipoPaciente();

   $fecha=(isset($_GET['fecha']))?$_GET['fecha']:"";
   $idpersonal=(isset($_GET['idpersonal']))?$_GET['idpersonal']:"";

   $lamorbilidad=$lobjConsulta->listar_morbilidad($fecha,$idpersonal);
   $lacarrera=$lobjCarrera->listar();
   $latiporeferencia=$lobjTiporeferencia->listar();
   $latipopaciente=$lobjTipoPaciente->listar_no_estudiante();
   ob_end_clean();
   $fecha=split('-',$fecha);

   if($fecha[0]=='01')$mes='Enero';
   if($fecha[0]=='02')$mes='Febrero';
   if($fecha[0]=='03')$mes='Marzo';
   if($fecha[0]=='04')$mes='Abril';
   if($fecha[0]=='05')$mes='Mayo';
   if($fecha[0]=='06')$mes='Junio';
   if($fecha[0]=='07')$mes='Julio';
   if($fecha[0]=='08')$mes='Agosto';
   if($fecha[0]=='09')$mes='Septiembre';
   if($fecha[0]=='10')$mes='Octubre';
   if($fecha[0]=='11')$mes='Noviembre';
   if($fecha[0]=='12')$mes='Diciembre';
   $lobjPdf=new clsFpdf();
   $lobjPdf->AliasNbPages();

   //AddPage(Orientacion,tamaño)
   //Orientación de la pagina P=Vertical y L=Horizontal  
   //Tamaño de la pagina letter=carta y legal=oficio, exiten más pero estos son los mas comunes 
   $lobjPdf->AddPage("L","legal");
   //SetFont(Tipo de fuente,negrilla,tamaño de la fuente)
   $lobjPdf->SetFont("arial","B",12);
   //Ln(cantidad de lineas en blanco)

   //Parametros de la función CELL (ancho,alto,texto,borde,salto de linea,alineación)
   $lobjPdf->Cell(0,6,utf8_decode("BIENESTAR ESTUDIANTIL: AREA DE SALUD"),0,1,"C");
   $lobjPdf->Cell(0,6,utf8_decode("REGISTRO DE MORBILIDAD"),0,1,"C");
   $lobjPdf->Ln(2);
   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(17,6,utf8_decode("MES DE: "),0,0,"L");
   $lobjPdf->SetFont("arial","",10);
   $lobjPdf->Cell(32,6,utf8_decode($mes),0,0,"L");
   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(10,6,utf8_decode("AÑO: "),0,0,"L");
   $lobjPdf->SetFont("arial","",10);
   $lobjPdf->Cell(15,6,utf8_decode($fecha[1]),0,1,"L");

   $lobjPdf->SetFont("arial","B",10);

   $lobjPdf->Cell(50,6,utf8_decode(""),0,0,"L");
   $lobjPdf->Cell((30*count($lacarrera)),6,utf8_decode("CARRERA"),1,0,"C");
   $lobjPdf->Cell(30,6,utf8_decode(""),0,1,"L");
   $lobjPdf->Cell(50,6,utf8_decode("REFERENCIA"),1,0,"C");
   $lobjPdf->SetFont("arial","",8);
   for($i=0;$i<count($lacarrera);$i++)
   {
   $lobjPdf->Cell(30,6,utf8_decode($lacarrera[$i]['carrera']),1,0,"C");

   }
   $lobjPdf->SetFont("arial","B",10);   
   $lobjPdf->Cell(30,6,utf8_decode("TOTAL"),1,1,"C");
   $cont_medicina_general=$cont_examen=$cont_total=$cont_general=0;
   for($i=0;$i<count($latiporeferencia);$i++)
   {
      $cont_refe=0;
      for($j=-1;$j<count($lacarrera);$j++)
      {      
         if($j<0)
         {
         $lobjPdf->SetFont("arial","",8);   

            $lobjPdf->Cell(50,5,utf8_decode($latiporeferencia[$i]['tiporeferencia']),1,0,"C");
         }
         else
         {
            $cont=0;
            $lobjPdf->SetFont("arial","",8);   
            
            for($k=0;$k<count($lamorbilidad);$k++)
            {
               if(($lamorbilidad[$k]['tcarrera_idtcarrera']==$lacarrera[$j]['idtcarrera'])&&($lamorbilidad[$k]['idtiporeferencia']==$latiporeferencia[$i]['idtiporeferencia']))
               {
                  $cont++;
                  $cont_total++;
                  $cont_refe++;
                  $lacarrera[$j]['cont_ref']++;
                  $lacarrera[$j]['cont_general']++;

               }

               
            }

            if($j<count($lacarrera))
               $lobjPdf->Cell(30,5,utf8_decode($cont),1,0,"C");

            if($j==(count($lacarrera)-1))
               $lobjPdf->Cell(30,5,utf8_decode($cont_refe),1,1,"C");//TOTAL

         }


      }
   }
   $lobjPdf->SetFont("arial","B",10);
   
   $lobjPdf->Cell(50,5,utf8_decode("TOTAL REFERENCIA"),1,0,"C");
   for($i=0;$i<count($lacarrera);$i++)
   {
      $lobjPdf->Cell(30,5,utf8_decode(($lacarrera[$i]['cont_ref'])?$lacarrera[$i]['cont_ref']:0),1,0,"C");

   }
   $lobjPdf->Cell(30,5,utf8_decode($cont_total),1,1,"C");
   $lobjPdf->SetFont("arial","",8);
   
   $lobjPdf->Cell(50,5,utf8_decode("Examen"),1,0,"C");
   for($i=0;$i<count($lacarrera);$i++)
   {
      for($k=0;$k<count($lamorbilidad);$k++)
      {
         if(($lamorbilidad[$k]['tcarrera_idtcarrera']==$lacarrera[$i]['idtcarrera'])&&($lamorbilidad[$k]['idexamen']))
         {
            $lacarrera[$i]['cont_exam']++;
            $cont_examen++;
            $lacarrera[$i]['cont_general']++;
         }
      }
      $lobjPdf->Cell(30,5,utf8_decode(($lacarrera[$i]['cont_exam'])?$lacarrera[$i]['cont_exam']:0),1,0,"C");

   }
   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(30,5,utf8_decode($cont_examen),1,1,"C");

   $lobjPdf->SetFont("arial","",8);
   
   $lobjPdf->Cell(50,5,utf8_decode("Medicina General"),1,0,"C");
   for($i=0;$i<count($lacarrera);$i++)
   {
      for($k=0;$k<count($lamorbilidad);$k++)
      {
         if(($lamorbilidad[$k]['tcarrera_idtcarrera']==$lacarrera[$i]['idtcarrera'])&&(!$lamorbilidad[$k]['idexamen'])&&(!$lamorbilidad[$k]['idtiporeferencia']))
         {
            $lacarrera[$i]['cont_medicina_general']++;
            $cont_medicina_general++;
            $lacarrera[$i]['cont_general']++;
         }
      }
      $lobjPdf->Cell(30,5,utf8_decode(($lacarrera[$i]['cont_medicina_general'])?$lacarrera[$i]['cont_medicina_general']:0),1,0,"C");

   }
   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(30,5,utf8_decode($cont_medicina_general),1,1,"C");
   $lobjPdf->Cell(50,5,utf8_decode("TOTAL"),1,0,"C");
    for($i=0;$i<count($lacarrera);$i++)
   {
      $lobjPdf->Cell(30,5,utf8_decode(($lacarrera[$i]['cont_general'])?$lacarrera[$i]['cont_general']:0),1,0,"C");
      $cont_general=$cont_general+$lacarrera[$i]['cont_general'];
   }
      $lobjPdf->Cell(30,5,utf8_decode($cont_general),1,0,"C");


   $lobjPdf->SetY(-65);
   $lobjPdf->Cell(30,6,utf8_decode(''),1,0,"C");
   $lobjPdf->Cell(30,6,utf8_decode('Femenino'),1,0,"C");
   $lobjPdf->Cell(30,6,utf8_decode('Masculino'),1,0,"C");
   $lobjPdf->Cell(30,6,utf8_decode('Total'),1,0,"C");
   $lobjPdf->Cell(190,6,utf8_decode('Dr. '.$lamorbilidad['nombredoctor']),0,1,"C");

   for($i=0;$i<count($latipopaciente);$i++)
   {
      $cont_fem=$cont_mas=0;
      for($j=0;$j<4;$j++)
      {
         
         if($j==0)
         {
            $lobjPdf->SetFont("arial","B",10);
            $lobjPdf->Cell(30,6,utf8_decode($latipopaciente[$i]['tipopaciente']),1,0,"C");
         }
         else
         {
            for($k=0;$k<count($lamorbilidad);$k++)
            {            

                  if(($j==1)&&($lamorbilidad[$k]['idttipopaciente']==$latipopaciente[$i]['idttipopaciente'])&&($lamorbilidad[$k]['sexo']=='F'))
                  {
                     $cont_fem++;
                     $cont_sex['cont_fem']++;
                  }

                  if(($j==2)&&($lamorbilidad[$k]['idttipopaciente']==$latipopaciente[$i]['idttipopaciente'])&&($lamorbilidad[$k]['sexo']=='M'))
                  {
                     $cont_sex['cont_mas']++;
                     $cont_mas++;
                  }
            }
               $lobjPdf->SetFont("arial","",10);

            
            if($j==1)
               $lobjPdf->Cell(30,6,utf8_decode($cont_fem),1,0,"C");
            elseif($j==2)
               $lobjPdf->Cell(30,6,utf8_decode($cont_mas),1,0,"C");
            elseif($j==3)
               $lobjPdf->Cell(30,6,utf8_decode($cont_fem+$cont_mas),1,1,"C");
         }

      }

      

   }
   $lobjPdf->Cell(30,6,utf8_decode('TOTAL'),1,0,"C");

   for($j=0;$j<3;$j++)
   {
      if($j==0)
      $lobjPdf->Cell(30,6,utf8_decode($cont_sex['cont_fem']),1,0,"C");
      if($j==1)
      $lobjPdf->Cell(30,6,utf8_decode($cont_sex['cont_mas']),1,0,"C");
      if($j==2)
      $lobjPdf->Cell(30,6,utf8_decode($cont_sex['cont_fem']+$cont_sex['cont_mas']),1,0,"C");

   }
   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(190,6,utf8_decode('Firma del Doctor Responsable'),0,0,"C");

   $lobjPdf->Output();

?>