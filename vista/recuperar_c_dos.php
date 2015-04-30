<?php
session_start();
if(isset($_SESSION) and array_key_exists('cedula', $_SESSION))
{
    require_once("../modelo/m_personal.php");
    $lobjPersonal = new clasepersonal();

    $lobjPersonal->set_datos('', $_SESSION['cedula']);
    $datos = $lobjPersonal->consultar_cedula();
    if(!$datos)
    {
        header("location: recuperar_c.php");
    }

    if(isset($_POST) and array_key_exists('operacion', $_POST))
    {
        require_once("../modelo/m_usuario.php");
        $lobjUsuario = new clsUsuario();
        $lobjUsuario->set_Usuario($datos['usuario']);
        $lobjUsuario->set_Respuesta($_POST['respuesta_uno'], $_POST['respuesta_dos'], $_POST['respuesta_tres']);
        $validar = $lobjUsuario->validar_respuestas();
        if(!$validar)
        {
            $_SESSION['msj'] = 'Respuestas incorrectas, intente nuevamente';
            unset($_SESSION['cedula']);
            header("location: recuperar_c.php");
        }
        else
        {
            header("location: cambiar_contrasena.php");
        }
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
                <strong><i class="fa fa-info-circle"></i></strong> Deberá responder las preguntas de seguridad necesarias para poder recuperarla.
              </div>
            <form role="form" class="form" action="./recuperar_c_dos.php" method="POST" name="form_personal">
                <input type="hidden" value="recuperar_c" name="operacion" />
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="cam_pregunta_uno">Pregunta de Seguridad Uno <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Pregunta de Seguridad Uno."></i></strong></label>
                          <input readOnly type="text" name="pregunta_uno" value="<?php print($datos['pregunta_uno']); ?>" class="form-control" maxlength="255">         
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="cam_respuesta_uno">Respuesta de Seguridad Uno <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Respuesta de Seguridad Uno."></i></strong></label>
                          <input type="password" name="respuesta_uno" value="" class="form-control" maxlength="255">   
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="cam_pregunta_dos">Pregunta de Seguridad Dos <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Pregunta de Seguridad Dos."></i></strong></label>
                          <input readOnly  type="text" name="pregunta_dos" value="<?php print($datos['pregunta_dos']); ?>" class="form-control" maxlength="255">         
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="cam_respuesta_dos">Respuesta de Seguridad Dos <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Respuesta de Seguridad Dos."></i></strong></label>
                          <input type="password" name="respuesta_dos" value="" class="form-control" maxlength="255">   
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="cam_pregunta_tres">Pregunta de Seguridad Tres <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Pregunta de Seguridad Tres."></i></strong></label>
                          <input readOnly  type="text" name="pregunta_tres" value="<?php print($datos['pregunta_tres']); ?>" class="form-control" maxlength="255">         
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="cam_respuesta_tres">Respuesta de Seguridad Tres <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Respuesta de Seguridad Tres."></i></strong></label>
                          <input type="password" name="respuesta_tres" value="" class="form-control" maxlength="255">   
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
        ?>
    </script>
    <script src="../js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="../js/jquery.nicescroll.js"></script>
    <!--common scripts for all pages-->
    <script src="../js/scripts.js"></script>
</html>