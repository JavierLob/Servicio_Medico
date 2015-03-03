<?php
    require_once("../modelo/m_sede.php");
    $lobjSede=new claseSede;
    
    $id=(isset($_GET['id']))?$_GET['id']:"";

    $lobjSede->set_datos($id);
    $laSede=$lobjSede->consultar();
?>
<h1 class="page-header">Consultar sede</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras consultar una sede en el sistema.
  </div>
<form role="form" class="form" action="../control/c_sede.php" method="POST" name="form_sede">
    <input type="hidden" value="editar_sede" name="operacion" />
    <input type="hidden"  name="idtsede" id="cam_idtsede" value="<?php print($laSede['idtsede']); ?>"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_etnia">Nombre <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la sede."></i></strong></label>
              <input type="text" name="sede" class="form-control letras_latinas" id="cam_sede" value="<?php print($laSede['sede']); ?>" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_etnia">Dirección <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Dirección de la sede."></i></strong></label>
              <input type="text" name="direccionsede" class="form-control letras_latinas" id="cam_direccionsede" value="<?php print($laSede['direccionsede']); ?>" required>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=sede';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-success center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check" ></i> Aceptar</button>
      </div>
    </div>
</form>
<script type="text/javascript"  src="../js/validacion.js"></script>