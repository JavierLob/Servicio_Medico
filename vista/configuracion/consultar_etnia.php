<?php
    require_once("../modelo/m_etnia.php");
    $lobjEtnia=new claseEtnia;
    
    $id=(isset($_GET['id']))?$_GET['id']:"";

    $lobjEtnia->set_datos($id,'','');
    $laEtnia=$lobjEtnia->consultar();
?>
<h1 class="page-header">Consultar etnia</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras consultar/modificar una etnia en el sistema.
  </div>
<form role="form" class="form" action="../control/c_etnia.php" method="POST" name="form_etnia">
    <input type="hidden" value="editar_etnia" name="operacion" />
    <input type="hidden"  name="idtetnia" id="cam_idetnia" value="<?php echo $laEtnia['idtetnia'];?>"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_codigoasi">Nombre <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la etnia."></i></strong></label>
              <input type="text" name="etnia" class="form-control letras_latinas" id="cam_etnia" value="<?php echo $laEtnia['etnia'];?>" required>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=configuracion/etnia';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-success center-block"><i class="fa fa-check" name="btn_enviar" id="btn_enviar"></i> Aceptar</button>
      </div>
    </div>
</form>