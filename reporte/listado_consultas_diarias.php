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

   $lobjConsulta->set_Consulta($id);
   $laconsultas=$lobjConsulta->listar();
   ob_end_clean();

   $lobjPdf=new clsFpdf();
   $lobjPdf->AliasNbPages();

   //AddPage(Orientacion,tamaño)
   //Orientación de la pagina P=Vertical y L=Horizontal  
   //Tamaño de la pagina letter=carta y legal=oficio, exiten más pero estos son los mas comunes 
   $lobjPdf->AddPage("P","legal");
   //SetFont(Tipo de fuente,negrilla,tamaño de la fuente)
   $lobjPdf->SetFont("arial","B",12);
   //Ln(cantidad de lineas en blanco)
   $lobjPdf->Ln(3);

   //Parametros de la función CELL (ancho,alto,texto,borde,salto de linea,alineación)
   $lobjPdf->Cell(0,6,utf8_decode("DATOS DEL CURSO"),0,1,"C");
   /*$lobjPdf->Ln(2);
   $lobjPdf->Cell(15);
   $lobjPdf->Cell(40,6,utf8_decode("Nombre:"),0,0,"L");
   $lobjPdf->SetFont("arial","",12);
   $lobjPdf->Cell(50,6,utf8_decode($laDatosCurso['nombrecur']),0,0,"L");
   $lobjPdf->SetFont("arial","B",12);
   $lobjPdf->Cell(40,6,utf8_decode("Sección:"),0,0,"L");
   $lobjPdf->SetFont("arial","",12);
   $lobjPdf->Cell(60,6,utf8_decode($laDatosCurso['seccioncur']),0,1,"L");
   $lobjPdf->SetFont("arial","B",12);
   $lobjPdf->Cell(15);
   $lobjPdf->Cell(40,6,utf8_decode("Asignación:"),0,0,"L");
   $lobjPdf->SetFont("arial","",12);
   $lobjPdf->Cell(50,6,utf8_decode($laDatosCurso['nombreasi']),0,0,"L");
   $lobjPdf->SetFont("arial","B",12);
   $lobjPdf->Cell(40,6,utf8_decode("Profesor:"),0,0,"L");
   $lobjPdf->SetFont("arial","",12);
   $lobjPdf->Cell(60,6,utf8_decode($laDatosCurso['profesor']),0,1,"L");
   $lobjPdf->SetFont("arial","B",12);
   $lobjPdf->Cell(15);
   $lobjPdf->Cell(40,6,utf8_decode("Cupos disponibles:"),0,0,"L");
   $lobjPdf->SetFont("arial","",12);
   $lobjPdf->Cell(50,6,utf8_decode($laDatosCurso['cupos_disponiblecur']),0,0,"L");
   $lobjPdf->SetFont("arial","B",12);
   $lobjPdf->Cell(40,6,utf8_decode("Total Inscritos:"),0,0,"L");
   $lobjPdf->SetFont("arial","",12);
   $lobjPdf->Cell(60,6,utf8_decode($laDatosCurso['cant_inscritoscur']),0,1,"L");

   $lobjPdf->Ln(5);
   $lobjPdf->SetFont("arial","B",12);
   $lobjPdf->Cell(0,6,utf8_decode("LISTADO DE CLASES"),0,1,"C");

   //Parametros de la función CELL (ancho,alto,texto,borde,salto de linea,alineación)
   $lobjPdf->Cell(15);
   $lobjPdf->Cell(10,6,utf8_decode("Nº"),1,0,"C");
   $lobjPdf->Cell(35,6,utf8_decode("Cédula"),1,0,"C");
   $lobjPdf->Cell(60,6,utf8_decode("Apellidos"),1,0,"C");
   $lobjPdf->Cell(60,6,utf8_decode("Nombres"),1,1,"C");

   $lobjPdf->SetFont("arial","",12);
   for($i=0;$i<count($laconsultas);$i++)
   {
      $lobjPdf->Cell(15);
      $lobjPdf->Cell(10,6,utf8_decode(($i+1)),1,0,"C");
      $lobjPdf->Cell(35,6,utf8_decode(number_format($laconsultas[$i]['cedulaest'],0,'','.')),1,0,"R");
      $lobjPdf->Cell(60,6,utf8_decode($laconsultas[$i]['apellido_unoest'].' '.$laListadoClases[$i]['apellido_dosest']),1,0,"L");
      $lobjPdf->Cell(60,6,utf8_decode($laconsultas[$i]['nombre_unoest'].' '.$laListadoClases[$i]['nombre_dosest']),1,1,"L");
   }*/

   $lobjPdf->Output();

?>