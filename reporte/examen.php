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
   require_once("../modelo/m_consulta.php");
   $lobjConsulta = new claseConsulta();

   $id=(isset($_GET['id']))?$_GET['id']:"";

   $laconsulta=$lobjConsulta->consultar_examen_reporte($id);
   ob_end_clean();

   $lobjPdf=new clsFpdf();
   $lobjPdf->AliasNbPages();

   //AddPage(Orientacion,tamaño)
   //Orientación de la pagina P=Vertical y L=Horizontal  
   //Tamaño de la pagina letter=carta y legal=oficio, exiten más pero estos son los mas comunes 
   $lobjPdf->AddPage("P","letter");
   //SetFont(Tipo de fuente,negrilla,tamaño de la fuente)
   $lobjPdf->SetFont("arial","B",12);
   //Ln(cantidad de lineas en blanco)

   //Parametros de la función CELL (ancho,alto,texto,borde,salto de linea,alineación)
   $lobjPdf->Cell(0,6,utf8_decode("SOLICITUD DE EXAMENES DE LABORATORIO"),0,1,"C");
   $lobjPdf->Ln(10);
   $lobjPdf->SetX(120);
   $lobjPdf->Cell(40,6,utf8_decode("Fecha de Consulta:"),0,0,"L");
   $lobjPdf->SetFont("arial","",10);
   $lobjPdf->Cell(40,6,utf8_decode($laconsulta['fecha_consulta']),'B',1,"C");
   $lobjPdf->Ln(5);
   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(35,6,utf8_decode("Apellido y Nombre:"),0,0,"L");
   $lobjPdf->SetFont("arial","",10);
   $lobjPdf->Cell(155,6,utf8_decode($laconsulta['primernombre'].' '.$laconsulta['primerapellido']),'B',1,"L");
   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(15,6,utf8_decode("C.I. Nº:"),0,0,"L");
   $lobjPdf->SetFont("arial","",10);
   $lobjPdf->Cell(30,6,utf8_decode($laconsulta['nacionalidad'].'-'.$laconsulta['cedulaopasaporte']),'B',0,"L");
   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(12,6,utf8_decode("Sexo:"),0,0,"L");
   $lobjPdf->SetFont("arial","",10);
   $lobjPdf->Cell(12,6,utf8_decode('M ( '.(($laconsulta['sexo']=='M')?'X':'').' )'),0,0,"L");
   $lobjPdf->Cell(12,6,utf8_decode('F ( '.(($laconsulta['sexo']=='F')?'X':'').' )'),0,0,"L");
   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(15,6,utf8_decode("Carrera:"),0,0,"L");
   $lobjPdf->SetFont("arial","",10);
   $lobjPdf->Cell(55,6,utf8_decode($laconsulta['carrera']),'B',0,"L");
   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(30,6,utf8_decode($laconsulta['modalidadpac'].' : '),0,0,"L");
   $lobjPdf->SetFont("arial","",10);
   $lobjPdf->Cell(10,6,utf8_decode($laconsulta['numeromodalidadpac']),'B',1,"L");
   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(45,6,utf8_decode("Tipo de examen: "),0,0,"L");
   $lobjPdf->SetFont("arial","",10);
   $lobjPdf->Cell(145,6,utf8_decode($laconsulta['tipoexamen']),'B',1,"L");
   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(45,6,utf8_decode("Examen: "),0,0,"L");
   $lobjPdf->SetFont("arial","",10);
   $lobjPdf->Cell(145,6,utf8_decode($laconsulta['examen']),'B',1,"L");
    $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(45,6,utf8_decode("Laboratorio: "),0,0,"L");
   $lobjPdf->SetFont("arial","",10);
   $lobjPdf->Cell(145,6,utf8_decode($laconsulta['laboratorio']),'B',1,"L");
   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(45,6,utf8_decode("Motivo de la consulta: "),0,0,"L");
   $lobjPdf->SetFont("arial","",10);
   $lobjPdf->Cell(145,6,utf8_decode($laconsulta['motivocon']),'B',1,"L");

   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(45,6,utf8_decode("Nombre del Médico: "),0,0,"L");
   $lobjPdf->SetFont("arial","",10);
   $lobjPdf->Cell(145,6,utf8_decode($laconsulta['nombredoctor']),'B',1,"L");
   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(45,6,utf8_decode("Observación: "),0,0,"L");
   $lobjPdf->SetFont("arial","",10);
   $lobjPdf->Cell(145,6,utf8_decode($laconsulta['observacionconsulta']),'B',1,"L");


   $lobjPdf->SetY(-80);
   $lobjPdf->Ln(5);
   $lobjPdf->Cell(90,6,utf8_decode('Dr. '.$laconsulta['nombredoctor']),0,0,"C");
   $lobjPdf->Cell(110,6,utf8_decode("Ing. Jenissa Andara"),0,1,"C");
   $lobjPdf->Cell(90,6,utf8_decode('Firma del Médico "UPTP J.J. MONTILLA"'),0,0,"C");
   $lobjPdf->Cell(110,6,utf8_decode("Coordinadora Bienestar Estudiantil"),0,1,"C");
   $lobjPdf->Ln(10);
   $lobjPdf->Cell(0,6,utf8_decode('Firma del paciente'),0,1,"C");
   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(0,6,utf8_decode('* Solo válido por este mes'),0,0,"L");

   $lobjPdf->Output();

?>