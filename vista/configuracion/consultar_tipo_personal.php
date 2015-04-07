<?php
    require_once("../modelo/m_tipo_personal.php");
    $lobjTipopersonal=new claseTipopersonal;
    
    $id=(isset($_GET['id']))?$_GET['id']:"";

    $lobjTipopersonal->set_datos($id);
    $laTipopersonal=$lobjTipopersonal->consultar();
?>
<h1 class="page-header">Consultar tipo personal</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras consultar un tipo de personal en el sistema.
  </div>
<form role="form" class="form" action="../control/c_tipo_personal.php" method="POST" name="form_tipo_personal">
    <input type="hidden" value="editar_tipo_personal" name="operacion" />
    <input type="hidden"  name="idtipopersonal" id="cam_idtipopersonal" value="<?php print($laTipopersonal['idtipopersonal']); ?>"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_etnia">Tipo personal <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la sede."></i></strong></label>
              <input type="text" name="tipopersonal" class="form-control letras_latinas" id="cam_tipopersonal" value="<?php print($laTipopersonal['tipopersonal']); ?>" required>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=configuracion/tipo_personal';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-success center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check" ></i> Aceptar</button>
      </div>
    </div>
</form>
<script type="text/javascript"  src="../js/validacion.js"></script>