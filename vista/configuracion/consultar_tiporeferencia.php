<?php
    require_once("../modelo/m_tiporeferencia.php");
    $lobjTiporeferencia=new claseTiporeferencia;
    
    $id=(isset($_GET['id']))?$_GET['id']:"";

    $lobjTiporeferencia->set_datos($id,'','');
    $laTiporeferencia=$lobjTiporeferencia->consultar();
?>
<h1 class="page-header">Consultar tipo de referencia</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras consultar/modificar una tipo referencia en el sistema.
  </div>
<form role="form" class="form" action="../control/c_tiporeferencia.php" method="POST" name="form_tiporeferencia">
    <input type="hidden" value="editar_tiporeferencia" name="operacion" />
    <input type="hidden"  name="idtiporeferencia" id="cam_idtiporeferencia" value="<?php echo $laTiporeferencia['idtiporeferencia'];?>"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_codigoasi">Nombre <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la tipo referencia."></i></strong></label>
              <input type="text" name="tiporeferencia" class="form-control letras_latinas" id="cam_tiporeferencia" value="<?php echo $laTiporeferencia['tiporeferencia'];?>" required>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=configuracion/tiporeferencia';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-success center-block"><i class="fa fa-check" name="btn_enviar" id="btn_enviar"></i> Aceptar</button>
      </div>
    </div>
</form>