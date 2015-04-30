<?php
session_start();
$msj = (isset($_SESSION['msj'])) ? $_SESSION['msj'] : '';
if(isset($_POST) and array_key_exists('operacion', $_POST))
{
    require_once("../modelo/m_personal.php");
    $lobjPersonal = new clasepersonal();

    $lobjPersonal->set_datos('', $_POST['cedulaopasaporte']);
    if($lobjPersonal->consultar_cedula())
    {
        $_SESSION['cedula'] = $_POST['cedulaopasaporte'];
        header("location: recuperar_c_dos.php");
    }
    else
    {
        $msj = 'Ha introducido una cédula o pasaporte invalido';
    }
}

?>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Intranet - Servicio Medico</title>
	    <link href="../estilo/bootstrap-3/css/bootstrap.min.css" rel="stylesheet">
        <link href="../estilo/bootstrap-3/css/style-intranet.css" rel="stylesheet">
        <link href="../estilo/bootstrap-3/css/style-responsive.css" rel="stylesheet">
        <link href="../estilo/bootstrap-3/DataTables-1.10.2/media/css/jquery.dataTables.css" rel="stylesheet">
        <link href="../estilo/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="../estilo/bootstrap-3/DataTables-1.10.2/media/js/jquery.js"></script>        
        <script src="../js/jquery.maskedinput.min.js"></script>

        <script type="text/javascript" src="../js/validaciones.js"></script>
        <script type="text/javascript" src="../js/validacion.js"></script>
	</head>
	<body>
		<header class="col-lg-10">
            <div class="row">
			    <img align="center" src="../media/images/cintillo2.jpg" width="100%" height="70" alt=""/>
            </div>
		</header>
		<section class="main-content">
			<section style="margin-top:2px;" class="col-sm-10 col-md-10 main">
				<h1 class="page-header">Recuperar contraseña</h1>
              <div class="alert alert-info" role="alert">
                <strong><i class="fa fa-info-circle"></i></strong> Aquí podrá recuperar la contraseña, deberá responder las preguntas de seguridad necesarias para poder recuperarla.
              </div>
            <form role="form" class="form" action="./recuperar_c.php" method="POST" name="form_personal">
                <input type="hidden" value="recuperar_c" name="operacion" />
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="cam_cedulaopasaporte">Cédula <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Cédula de la persona."></i></strong></label>
                          <input type="text" name="cedulaopasaporte" maxlength="11" value="" class="form-control solo-numeros" id="cam_cedulaopasaporte" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='../';"><i class="fa fa-chevron-left"></i> Regresar</button>
                  </div>
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-success center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check" ></i> Aceptar</button>
                  </div>
                </div>
            </form>
			</section>
		</section>
  		<footer style="margin-top:0">&copy Derechos reservados <?php print(date('Y')); ?></footer>
	</body>
      <script src="../estilo/bootstrap-3/js/bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="../estilo/bootstrap-3/DataTables-1.10.2/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        $('#filtro').dataTable();
    } );
        $(function () {
            $("[data-toggle='popover']").popover();
        });
        <?php
            if(($msj) && (!empty($msj)))
                print('alert("'.$msj.'");');

            unset($_SESSION['msj']);
        ?>
    </script>
    <script src="../js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="../js/jquery.nicescroll.js"></script>
    <!--common scripts for all pages-->
    <script src="../js/scripts.js"></script>
</html>