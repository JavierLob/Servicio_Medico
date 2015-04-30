<?php
session_start();
$msj = (isset($_SESSION['msj'])) ? $_SESSION['msj'] : '';
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

   
}?>
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
				<h3>Recuperar contraseña</h3>
                  <div class="alert alert-info" role="alert">
                    <strong><i class="fa fa-info-circle"></i></strong> Ingrese su nueva clave por favor.
                  </div>
            <form role="form" class="form" action="../control/c_personal.php" method="POST" name="form_cambiar_clave">
                <input type="hidden" value="cambiar_clave_ext" name="operacion" />
                <input type="hidden"  name="usuario" id="cam_idpersonal" value="<?php print($datos['usuario']); ?>"/>
                <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                        <label for="cam_clave_nueva">Clave Nueva <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Ingrese la clave nueva."></i></strong></label>
                        <input type="password" name="clave_nueva" minlength="6" maxlength="25" class="form-control" id="cam_clave_nueva" required>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                        <label for="cam_repita_clave_nueva">Repetir Clave nueva <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Repita la clave nueva."></i></strong></label>
                        <input type="password" name="repita_clave_nueva" minlength="6" maxlength="25" class="form-control" id="cam_repita_clave_nueva" required>
                      </div>
                  </div>
              </div>
                <div class="row">
                  <div class="col-md-12">
                    <button type="button" class="btn btn-success center-block" name="btn_enviar" id="btn_enviar" onclick="enviar_form();"><i class="fa fa-check" ></i> Cambiar Clave</button>
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
            if(($msj) && (!empty($msj))){
                print('alert("'.$msj.'");');
                print('window.location="../";');
            }

            unset($_SESSION['msj']);
        ?>
    </script>
    <script>
        function enviar_form()
        {
            var clave_nueva = document.getElementById('cam_clave_nueva').value;
            var clave_nueva_repetir = document.getElementById('cam_repita_clave_nueva').value;

            if(clave_nueva!=clave_nueva_repetir)
            {
                alert('La nueva clave no coincide con su repetición');
                return false;
            }
            else
            {
                document.form_cambiar_clave.submit();
            }
        }
        </script>
    <script src="../js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="../js/jquery.nicescroll.js"></script>
    <!--common scripts for all pages-->
    <script src="../js/scripts.js"></script>
</html>