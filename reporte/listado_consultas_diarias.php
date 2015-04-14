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
   require_once("../libreria/fpdf17/clase_fpdf.php");
   require_once("../modelo/m_paciente.php");
   $lobjPaciente = new clasePaciente();

   $fecha=(isset($_GET['fecha']))?$_GET['fecha']:"";

   $laPaciente=$lobjPaciente->listar_diario($fecha);
   ob_end_clean();

   $lobjPdf=new clsFpdf();
   $lobjPdf->AliasNbPages();

   //AddPage(Orientacion,tamaño)
   //Orientación de la pagina P=Vertical y L=Horizontal  
   //Tamaño de la pagina letter=carta y legal=oficio, exiten más pero estos son los mas comunes 
   $lobjPdf->AddPage("L","legal");
   //SetFont(Tipo de fuente,negrilla,tamaño de la fuente)
   $lobjPdf->SetFont("arial","B",12);
   //Ln(cantidad de lineas en blanco)
   $lobjPdf->Ln(3);

   //Parametros de la función CELL (ancho,alto,texto,borde,salto de linea,alineación)
   $lobjPdf->Cell(0,6,utf8_decode("REGISTRO DIARIO DE PACIENTES"),0,1,"C");
   $lobjPdf->Ln(2);
   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(15);
   $lobjPdf->Cell(20,6,utf8_decode("Fecha"),1,0,"L");
   $lobjPdf->SetFont("arial","",10);
   $lobjPdf->Cell(30,6,utf8_decode($_GET['fecha']),1,1,"L");
   $lobjPdf->Cell(15);
   $lobjPdf->SetFont("arial","B",10);
   
   $lobjPdf->Cell(100,6,utf8_decode("Apellido y Nombre"),1,0,"L");
   $lobjPdf->Cell(40,6,utf8_decode("C.I. Nro"),1,0,"L");
   $lobjPdf->Cell(60,6,utf8_decode("Carrera"),1,0,"L");
   $lobjPdf->Cell(60,6,utf8_decode("Modalidad"),1,0,"L");
   $lobjPdf->Cell(40,6,utf8_decode("Nro. Modalidad"),1,0,"L");
   $lobjPdf->Cell(7,6,utf8_decode("F"),1,0,"L");
   $lobjPdf->Cell(7,6,utf8_decode("M"),1,1,"L");
   //$lobjPdf->Cell(40,6,utf8_decode("Motivo Consulta"),1,1,"L");
   //Parametros de la función CELL (ancho,alto,texto,borde,salto de linea,alineación)

   $lobjPdf->Cell(15);
   for($i=0;$i<count($laPaciente);$i++)
   {
      $lobjPdf->SetFont("arial","",10);
      $lobjPdf->Cell(100,6,utf8_decode($laPaciente[$i]['primerapellido'].' '.$laPaciente[$i]['segundonombre'].' '.$laPaciente[$i]['primernombre'].' '.$laPaciente[$i]['segundonombre']),1,0,"L");
      $lobjPdf->Cell(40,6,number_format($laPaciente[$i]['cedulaopasaporte'], 0, '.', ','),1,0,"R");
      $lobjPdf->Cell(60,6,utf8_decode($laPaciente[$i]['carrera']),1,0,"L");
      $lobjPdf->Cell(60,6,utf8_decode($laPaciente[$i]['modalidadpac']),1,0,"L");
      $lobjPdf->Cell(40,6,utf8_decode($laPaciente[$i]['numeromodalidadpac']),1,0,"R");
      $M = ($laPaciente[$i]['sexo']=='M') ? 'X':'';
      $F = ($laPaciente[$i]['sexo']=='F') ? 'X':'';
      $lobjPdf->Cell(7,6,utf8_decode($F),1,0,"L");
      $lobjPdf->Cell(7,6,utf8_decode($M),1,1,"L");

      $lobjPdf->Cell(15);
      $lobjPdf->SetFont("arial","B",10);
      $lobjPdf->Cell(30,6,utf8_decode('Motivo:'),1,0,"L");
      $lobjPdf->SetFont("arial","",10);
      $lobjPdf->MultiCell(284,6, utf8_decode($laPaciente[$i]['motivocon']), 1);
   }
   if($i==0)
   {
      $lobjPdf->SetFont("arial","",10);
      $lobjPdf->Cell(314,6,utf8_decode('No exiten consultas registradas para esta fecha'),1,0,"C");
   }

   $lobjPdf->Output();

?>