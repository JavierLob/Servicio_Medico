<?php
    require_once("../modelo/m_tipo_paciente.php");
    $lobjTipoPaciente=new claseTipoPaciente;
    
    $id=(isset($_GET['id']))?$_GET['id']:"";

    $lobjTipoPaciente->set_datos($id);
    $laTipoPaciente=$lobjTipoPaciente->consultar();
?>
<h1 class="page-header">Consultar tipo paciente</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras consultar un tipo de paciente en el sistema.
  </div>
<form role="form" class="form" action="../control/c_tipo_paciente.php" method="POST" name="form_tipo_paciente">
    <input type="hidden" value="editar_tipo_paciente" name="operacion" />
    <input type="hidden"  name="idttipopaciente" id="cam_idttipopaciente" value="<?php print($laTipoPaciente['idttipopaciente']); ?>"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_etnia">Tipo Paciente <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la sede."></i></strong></label>
              <input type="text" name="tipopaciente" class="form-control letras_latinas" id="cam_tipopaciente" value="<?php print($laTipoPaciente['tipopaciente']); ?>" required>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=configuracion/tipo_paciente';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-success center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check" ></i> Aceptar</button>
      </div>
    </div>
</form>
<script type="text/javascript"  src="../js/validacion.js"></script>