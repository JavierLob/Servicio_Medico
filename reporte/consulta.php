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
   $laconsulta=$lobjConsulta->consultar_reporte();
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
   $lobjPdf->Cell(0,6,utf8_decode("CONSULTA"),0,1,"C");
   $lobjPdf->Ln(5);
   $lobjPdf->Cell(0,6,utf8_decode("DATOS DEL PACIENTE"),0,1,"C");
   $lobjPdf->Ln(2);
   $lobjPdf->Cell(30,6,utf8_decode("Fecha:"),1,0,"L");
   $lobjPdf->SetFont("arial","",10);
   $lobjPdf->Cell(40,6,utf8_decode($laconsulta['fecha_consulta']),1,1,"L");
   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(30,6,utf8_decode("Paciente:"),1,0,"L");
   $lobjPdf->SetFont("arial","",10);
   $lobjPdf->Cell(65,6,utf8_decode($laconsulta['primernombre'].' '.$laconsulta['primerapellido']),1,0,"L");
   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(20,6,utf8_decode("C/P:"),1,0,"L");
   $lobjPdf->SetFont("arial","",10);
   $lobjPdf->Cell(35,6,utf8_decode($laconsulta['nacionalidad'].'-'.$laconsulta['cedulaopasaporte']),1,0,"L");
   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(20,6,utf8_decode("Sexo:"),1,0,"L");
   $lobjPdf->SetFont("arial","",10);
   $lobjPdf->Cell(20,6,utf8_decode($laconsulta['sexo']),1,1,"L");
   $lobjPdf->Ln(5);

   $lobjPdf->SetFont("arial","B",12);
   $lobjPdf->Cell(0,6,utf8_decode("DATOS DE LA CONSULTA"),0,1,"C");


   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Ln(2);
   $lobjPdf->Cell(45,6,utf8_decode("Pulso:"),1,0,"L");
   $lobjPdf->SetFont("arial","",10);
   $lobjPdf->Cell(50,6,utf8_decode($laconsulta['pulso']),1,0,"L");
   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(45,6,utf8_decode("Peso:"),1,0,"L");
   $lobjPdf->SetFont("arial","",10);
   $lobjPdf->Cell(50,6,utf8_decode($laconsulta['peso']),1,1,"L");
   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(45,6,utf8_decode("Fc:"),1,0,"L");
   $lobjPdf->SetFont("arial","",10);
   $lobjPdf->Cell(50,6,utf8_decode($laconsulta['fc']),1,0,"L");
   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(45,6,utf8_decode("Fr:"),1,0,"L");
   $lobjPdf->SetFont("arial","",10);
   $lobjPdf->Cell(50,6,utf8_decode($laconsulta['fr']),1,1,"L");

   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(45,6,utf8_decode("Ta:"),1,0,"L");
   $lobjPdf->SetFont("arial","",10);
   $lobjPdf->Cell(50,6,utf8_decode($laconsulta['ta']),1,0,"L");
   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(45,6,utf8_decode("Temperatura:"),1,0,"L");
   $lobjPdf->SetFont("arial","",10);
   $lobjPdf->Cell(50,6,utf8_decode($laconsulta['temperatura']),1,1,"L");
   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(45,6,utf8_decode("Talla:"),1,0,"L");
   $lobjPdf->SetFont("arial","",10);
   $lobjPdf->Cell(50,6,utf8_decode($laconsulta['talla']),1,0,"L");
   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(45,6,utf8_decode("Altura:"),1,0,"L");
   $lobjPdf->SetFont("arial","",10);
   $lobjPdf->Cell(50,6,utf8_decode($laconsulta['altura']),1,1,"L");

   $lobjPdf->Ln(5);
   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(45,6,utf8_decode("Motivo:"),1,0,"L");
   $lobjPdf->SetFont("arial","",10);
   $lobjPdf->MultiCell(145,6,utf8_decode($laconsulta['motivocon']),1,"J");

   $lobjPdf->Ln(5);
   $lobjPdf->SetFont("arial","B",10);
   $lobjPdf->Cell(45,6,utf8_decode("Observación:"),1,0,"L");
   $lobjPdf->SetFont("arial","",10);
   $lobjPdf->MultiCell(145,6,utf8_decode($laconsulta['observacionconsulta']),1,"J");

   if($laconsulta['examen'])
   {
      $lobjPdf->Ln(5);
      $lobjPdf->SetFont("arial","B",12);
      $lobjPdf->Cell(0,6,utf8_decode("EXAMEN"),0,1,"C");
      $laexamenes=$lobjConsulta->consultar_examen();
      $lobjPdf->SetFont("arial","B",10);

      $lobjPdf->Cell(60,6,utf8_decode("Examen"),1,0,"C");
      $lobjPdf->Cell(60,6,utf8_decode("Tipo"),1,0,"C");
      $lobjPdf->Cell(70,6,utf8_decode("Laboratorio"),1,1,"C");
      $lobjPdf->SetFont("arial","",10);
      for($i=0;$i<count($laexamenes);$i++)
      {
         $lobjPdf->Cell(60,6,utf8_decode($laexamenes[$i]['examen']),1,0,"L");
         $lobjPdf->Cell(60,6,utf8_decode($laexamenes[$i]['tipoexamen']),1,0,"L");
         $lobjPdf->Cell(70,6,utf8_decode($laexamenes[$i]['laboratorio']),1,1,"L");
      }
   }
    if($laconsulta['referir'])
   {
      
      $lobjPdf->Ln(5);
      $lobjPdf->SetFont("arial","B",12);
      $lobjPdf->Cell(0,6,utf8_decode("REFERIR"),0,1,"C");

      $lareferencias=$lobjConsulta->consultar_referir();
      $lobjPdf->SetFont("arial","B",10);

      $lobjPdf->Cell(60,6,utf8_decode("Referido a"),1,0,"C");
      $lobjPdf->Cell(60,6,utf8_decode("Tipo"),1,0,"C");
      $lobjPdf->Cell(70,6,utf8_decode("Centro asistencial"),1,1,"C");
      $lobjPdf->SetFont("arial","",10);
      for($i=0;$i<count($lareferencias);$i++)
      {
         $lobjPdf->Cell(60,6,utf8_decode($lareferencias[$i]['referidoa']),1,0,"L");
         $lobjPdf->Cell(60,6,utf8_decode($lareferencias[$i]['tiporeferencia']),1,0,"L");
         $lobjPdf->Cell(70,6,utf8_decode($lareferencias[$i]['nombrecentroasistencial']),1,1,"L");
      }
   }

   $lobjPdf->SetY(-60);
   $lobjPdf->Ln(5);
   $lobjPdf->Cell(90,6,utf8_decode('Dr. '.$laconsulta['nombredoctor']),0,0,"C");
   $lobjPdf->Cell(110,6,utf8_decode("Ing. Jenissa Andara"),0,1,"C");
   $lobjPdf->Cell(90,6,utf8_decode('Firma del Médico "UPTP J.J. MONTILLA"'),0,0,"C");
   $lobjPdf->Cell(110,6,utf8_decode("Coordinadora Bienestar Estudiantil"),0,1,"C");
   $lobjPdf->Ln(10);
   $lobjPdf->Cell(0,6,utf8_decode('Firma del paciente'),0,0,"C");

   $lobjPdf->Output();

?>