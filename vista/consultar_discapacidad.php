<?php
    require_once("../modelo/m_discapacidad.php");
    $lobjDiscapacidad=new claseDiscapacidad;
    
    $id=(isset($_GET['id']))?$_GET['id']:"";

    $lobjDiscapacidad->set_datos($id);
    $laDiscapacidad=$lobjDiscapacidad->consultar();
?>
<h1 class="page-header">Consultar Discapacidad</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras consultar un discapacidad en el sistema.
  </div>
<form role="form" class="form" action="../control/c_discapacidad.php" method="POST" name="form_discapacidad">
    <input type="hidden" value="editar_discapacidad" name="operacion" />
    <input type="hidden"  name="idtdiscapacidad" id="cam_idtdiscapacidad" value="<?php print($laDiscapacidad['idtdiscapacidad']); ?>"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_etnia">Discapacidad <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la discapacidad."></i></strong></label>
              <input type="text" name="discapacidad" class="form-control letras_latinas" id="cam_discapacidad" value="<?php print($laDiscapacidad['discapacidad']); ?>" required>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=discapacidad';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-success center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check" ></i> Aceptar</button>
      </div>
    </div>
</form>
<script type="text/javascript"  src="../js/validacion.js"></script>